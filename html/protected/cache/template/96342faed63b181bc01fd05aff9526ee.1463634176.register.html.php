<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="注册, 用户注册, 会员注册" />
<meta name="description" content="Dubhe Market 高效快捷的开源免费系统 - 使用Dubhe Market轻松创建属于自己的交易平台，轻松实现从入门到交易！" />
<title>用户注册 - <?php echo htmlspecialchars($common['site_name'], ENT_QUOTES, "UTF-8"); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/general.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/login.css" />
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/general.js"></script>
<script type="text/javascript">
function register(e){
  $('#username').vdsChecker({required:true, username:true}, {username:'用户名不符合格式要求'}, {username: /^[a-zA-Z][_a-zA-Z0-9]{4,15}$/.test($('#username').val())});
  $('#email').vdsChecker({required:true, email:true, maxlength:60});
  $('#password').vdsChecker({required:true, password:true});
  $('#repassword').vdsChecker({equal:$('#password').val()}, {equal:'两次密码不一致'});
  $('#agree').vdsChecker({agreement:true}, {agreement:'必须阅读并同意用户注册协议'}, {agreement: $('#agree').prop('checked')});
  $(e).text(function(i, t){
    $(e).text('正在提交...');
    if(!$('#register-form').vdsSubmit(true)) $(e).text(t);
  });
}
</script>
</head>
<body>
<!-- 头部开始 -->
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href="<?php echo htmlspecialchars($common['url'], ENT_QUOTES, "UTF-8"); ?>"><img alt="Dubhe" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/images/logo.gif" /></a></div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="signup cut">
      <div class="th module cut">
        <h2 class="fl">注册新用户</h2>
        <div class="fr">已注册了账号？ 请直接 <a href="<?php echo url(array('c'=>'user', 'a'=>'login', ));?>">登陆</a></div>
      </div>
      <form method="post" action="<?php echo url(array('c'=>'user', 'a'=>'register', 'step'=>'submit', ));?>" id="register-form">
        <div class="form cut">
          <dl>
            <dt><label for="username">用户名：</label></dt>
            <dd>
	      <input title="用户名" name="username" id="username" type="text" data-warnpos="fixed" />
              <font class="caaa ml10">用户名可以包含字母、数字或下划线，须以字母开头，长度为5~16个字符</font>
            </dd>
          </dl>
          <dl>
            <dt><label for="email">邮箱：</label></dt>
            <dd>
              <input title="邮箱" name="email" id="email"  type="text" placeholder="@" data-warnpos="fixed" />
              <font class="caaa ml10">请填写您常用的邮箱地址，邮箱可用来重置密码，接收订促销信息，订单状态等</font>
            </dd>
          </dl>
          <dl>
            <dt><label for="password">设置密码：</label></dt>
            <dd>
              <input title="密码" name="password" id="password" type="password" data-warnpos="fixed" />
              <font class="caaa ml10">密码可包含字母、数字或特殊符号，长度为6~32个字符</font>
            </dd>
          </dl>
          <dl>
            <dt><label for="confirm_password">确认密码：</label></dt>
            <dd>
              <input title="确认密码" name="repassword" id="repassword" type="password" data-warnpos="fixed" />
              <font class="caaa ml10">再次输入您所设置密码</font>
            </dd>
          </dl>
          <?php if (!empty($captcha)) : ?>
          <dl class="captcha">
            <dt>验证码：</dt>
            <dd>
              <input name="captcha" id="captcha" type="text" />
              <a onclick="$('#captcha-img').attr('src', '<?php echo url(array('c'=>'image', 'a'=>'captcha', ));?>&'+Math.random());$('#captcha').focus();">看不清换一张</a>
            </dd>
          </dl>
          <div class="captcha mt10 ml80"><img id="captcha-img" src="<?php echo url(array('c'=>'image', 'a'=>'captcha', ));?>" /></div>
          <?php endif; ?>
          <div class="agreement mt20 ml80 c666">
            <label><input name="agree" id="agree" type="checkbox" checked="checked" /><font class="ml5">已阅读完并同意 <a href="#">"用户注册协议"</a></font></label>
          </div>
          <div class="sutr mt20 ml80"><a class="form-submit aln-c radius4" onclick="register(this)">立即注册</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<?php echo layout_footer();?>
<!-- 页脚结束 -->
</body>
</html>