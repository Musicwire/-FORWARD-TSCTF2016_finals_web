<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<title>Dubhe Market 管理系统登录</title>
<link rel="stylesheet" type="text/css" href="public/theme/backend/style/vds.css" />
<link rel="stylesheet" type="text/css" href="public/theme/backend/style/login.css" />
<script type="text/javascript" src="public/theme/backend/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="public/theme/backend/js/vds.js"></script>
<script type="text/javascript" src="public/script/md5.js"></script>
<script type="text/javascript">
function login(e){
  $('#username').vdsChecker({required:true});
  $('#password').vdsChecker({required:true});
  $(e).text(function(i, t){
    var form = $('form');
    $(e).text('正在登陆...');
    if(form.find('span.vds-warning').size() == 0){
      vdsSetCipher('password');
      form.submit();
    }else{
      $(e).text(t);
    }
  });
}
</script>
</head>
<body>
<div class="wrap">
  <div class="banner fl">
    <h1><a href="http://www.buptdubhe.com/" target="_blank">Dubhe Market</a></h1>
    <h2 class="mt10">从入门到交易</h2>
    <p class="mt8">安全 快捷 高效</p>
  </div>
  <?php if (empty($lockout)) : ?>
  <form method="post" action="<?php echo url(array('m'=>$MOD, 'c'=>'main', 'a'=>'login', ));?>">
    <input type="password" value="" class="hide" />
    <div class="login">
      <h2 class="c666">系统管理登陆</h2>
      <dl class="username mt20">
        <dt><i class="icon"></i></dt>
        <dd><input name="username" id="username" type="text" placeholder="请输入登录名" title="登录名" data-warnpos="fixed" /></dd>
      </dl>
      <dl class="pwd mt20">
        <dt><i class="icon"></i></dt>
        <dd><input name="password" id="password" type="password" placeholder="请输入密码" title="密码" autocomplete="off" data-warnpos="fixed" data-salt="<?php echo htmlspecialchars($salt, ENT_QUOTES, "UTF-8"); ?>" /></dd>
      </dl>
      <?php if ($captcha == 1) : ?>
      <div class="captcha module mt20 cut">
        <div class="module cut">
          <dl class="fl cut">
            <dd><input name="captcha" id="captcha" type="text" placeholder="验证码" /></dd>
          </dl>
          <div class="fr"><a onclick="$('#captcha-img').attr('src', '<?php echo url(array('m'=>$MOD, 'c'=>'main', 'a'=>'captcha', ));?>&'+Math.random());">看不清换一张</a></div>
        </div>
        <div class="mt10"><img src="<?php echo url(array('m'=>$MOD, 'c'=>'main', 'a'=>'captcha', ));?>" id="captcha-img" /></div>
      </div>
      <?php endif; ?>
      <div class="login-btn cut">
        <div class="fl"><button type="button" class="fbtn btn" onclick="login(this)">登&nbsp;&nbsp;&nbsp;陆</button></div>
        <div class="fr"><label><input name="stay" type="checkbox" value="1" /><font>一周内保持登陆</font></label></div>
      </div>
    </div>
  </form>
  <?php else : ?>
  <div class="login">
    <h2 class="c666">系统管理登陆</h2>
    <div class="lockout pad10">由于您多次输入错误的登录信息，本次登录请求已被拒绝，请于<?php echo htmlspecialchars($lockout, ENT_QUOTES, "UTF-8"); ?>分钟后重新尝试。</div>
  </div>
  <?php endif; ?>
</div>
</body>
</html>
