<?php
class user_model extends Model
{
    public $table_name = 'user';
    
    public $rules = array
    (    
        'email' => array
        (
            //'is_email' => array(TRUE, '无效的邮箱地址'),
            'max_length' => array(60, '邮箱不能超过60个字符'),
        ),
        'repassword' => array
        (
            'equal_to' => array('password', '两次密码不一致'),
        ),
    );
    
    public $addrules = array
    (
        'username' => array
        (
            'addrule_username_format' => '用户名不符合格式要求',
            'addrule_username_exist' => '该用户名已被使用',
        ),
        'password' => array
        (
            'addrule_password_format' => '密码不符合格式要求',
        ),
        'email' => array
        (
            'addrule_email_exist' => '该邮箱已被使用',
        ),
    );
    
    //自定义验证器：检查用户名格式(可包含字母、数字或下划线，须以字母开头，长度为5-16个字符)
    public function addrule_username_format($val)
    {
        return preg_match('/^[a-zA-Z][_a-zA-Z0-9]{4,45}$/', $val) != 0;
    }
    
    //自定义验证器：检查用户名是否存在
    public function addrule_username_exist($val)
    {
        if($this->find(array('username' => $val))) return FALSE;
        return TRUE;
    }
    
    //自定义验证器：检查密码格式(可包含字母、数字或特殊符号，长度为6-32个字符)
    public function addrule_password_format($val)
    {
        return preg_match('/^[\\~!@#$%^&*()-_=+|{}\[\],.?\/:;\'\"\d\w]{5,31}$/', $val) != 0;
    }
    
    //自定义验证器：检查邮箱是否存在
    public function addrule_email_exist($val)
    {
        if($this->find(array('email' => $val))) return FALSE;
        return TRUE;
    }
    
    /**
     * 用户登陆验证
     * @return -1:用户名密码不正确 0:验证码不正确  1:登录成功
     */
    public function login_check($username, $password, $captcha, $stay = 0)
    {
        $client_ip = vds_get_ip();
        $security_model = new login_security_model();
        $security_model->check($client_ip);
        $actinfo_model = new user_actinfo_model();
        $sql = "SELECT a.user_id, a.password, a.hash, b.created_date, b.created_ip, b.last_date, b.last_ip
                FROM {$this->table_name} AS a
                INNER JOIN {$actinfo_model->table_name} AS b
                ON a.user_id = b.user_id
                WHERE a.username = :username
                LIMIT 1
               ";
        
        if($user = $this->query($sql, array(':username' => trim($username))))
        {
            $user = array_pop($user);
            if($security_model->validate_pwd($user['password'], $password))
            {
                self::set_logined_info($user['user_id'], $user['last_date'], $user['last_ip']);
                $actinfo_model->update_row($user['user_id'], $_SERVER['REQUEST_TIME'], $client_ip);
                if($stay == 1)
                {
                    $stayed_cookie = md5($user['hash'].$user['created_date'].$client_ip).$user['user_id'];
                    $stayed_cookie = base64_encode(vds_encrypt($stayed_cookie));
                    setcookie('vds_fu_stayed', $stayed_cookie, $_SERVER['REQUEST_TIME'] + 604800, '/');
                }
                if(isset($_SESSION['oauth']['party']) && isset($_SESSION['oauth']['oauth_key']))
                {
                    $oauth_model = new user_oauth_model();
                    if($oauth_model->is_authorized($_SESSION['oauth']['party'], $_SESSION['oauth']['oauth_key'])) return 2;
                    $oauth_model->create(array('user_id' => $user['user_id'], 'party' => $_SESSION['oauth']['party'], 'oauth_key' => $_SESSION['oauth']['oauth_key']));
                    return 3;
                }
                
                return 1;
            }
        }
        
        $security_model->incr_err($client_ip);
        return -1;
    }
    
    /**
     * 创建用户信息
     */
    public function create_user_info($user_id, $oauth = array())
    {
        $ip = vds_get_ip();
        $sql = "INSERT INTO {$GLOBALS['mysql']['MYSQL_DB_TABLE_PRE']}user_account (`user_id`) VALUES ('{$user_id}');";
        $sql .= "INSERT INTO {$GLOBALS['mysql']['MYSQL_DB_TABLE_PRE']}user_actinfo (`user_id`, `created_date`, `created_ip`) VALUES ('{$user_id}', '{$_SERVER['REQUEST_TIME']}', '{$ip}');";
        if(!empty($oauth) && is_array($oauth) && isset($_SESSION['oauth']['party']) && isset($_SESSION['oauth']['oauth_key']))
        {
            $oauth['name'] = strip_tags($oauth['name']);
            $oauth['gender'] = intval($oauth['gender']);
            if($avatar = imager::resize($oauth['avatar'], 60 , 60, 'upload/user/avatar/'.uniqid($user_id)))
            {
                $oauth['avatar'] = substr($avatar, strrpos($avatar, '/') + 1);
            }
            else
            {
                $oauth['avatar'] = '';
            }
            $sql .= "INSERT INTO {$GLOBALS['mysql']['MYSQL_DB_TABLE_PRE']}user_profile
                     (`user_id`, `name`, `gender`, `avatar`) VALUES
                     ('{$user_id}', '{$oauth['name']}', '{$oauth['gender']}', '{$oauth['avatar']}');
                    ";      
            $sql .= "INSERT INTO {$GLOBALS['mysql']['MYSQL_DB_TABLE_PRE']}user_oauth
                     (`user_id`, `party`, `oauth_key`) VALUES
                     ('{$user_id}', '{$_SESSION['oauth']['party']}', '{$_SESSION['oauth']['oauth_key']}');
                    ";
        }
        else
        {
            $sql .= "INSERT INTO {$GLOBALS['mysql']['MYSQL_DB_TABLE_PRE']}user_profile (`user_id`) VALUES ('{$user_id}');";
        }
        $this->execute($sql);
        self::set_logined_info($user_id, $_SERVER['REQUEST_TIME'], $ip);
    }
    
    /**
     * 设置登录后会话信息
     */
    public static function set_logined_info($user_id, $last_date, $last_ip)
    {
        $_SESSION['user'] = array('user_id' => $user_id, 'last_date' => $last_date, 'last_ip' => $last_ip);
    }
}