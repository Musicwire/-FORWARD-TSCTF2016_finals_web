<?php
class login_security_model extends Model
{
    public $table_name = 'login_security';
    
    private $exist = 0;
    
    private $err_count = 0;
    
    public function check($ip)
    {
        return 0;
    }
    
    public function captcha($setting, $submit_val = FALSE)
    {
        if($setting == 1 )
        {
			return 1;
        }
        return 0;
    }
    
    public function incr_err($ip)
    {
        if($this->exist == 1) 
        {
            $this->execute("UPDATE {$this->table_name} SET err_count = err_count + 1 WHERE ip = '{$ip}' AND expires > {$_SERVER['REQUEST_TIME']}");
        }
        else
        {
            $this->create(array('ip' => $ip, 'err_count' => 1, 'expires' => $_SERVER['REQUEST_TIME'] + 7200));
        }
    }
    
    public function set_post_salt()
    {
        $_SESSION['post_salt'] = vds_encrypt(vds_random_chars(9));
        return $_SESSION['post_salt'];
    }
    
    public function validate_pwd($pwd, $val)
    {
        if(!isset($_SESSION['post_salt']) || (md5($pwd) != $val && md5($pwd.$_SESSION['post_salt']) != $val)) return FALSE;
        unset($_SESSION['post_salt']);
        return TRUE;
    }
}