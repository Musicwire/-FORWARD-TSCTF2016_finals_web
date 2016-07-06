<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统提示 - <?php echo htmlspecialchars($common['site_name'], ENT_QUOTES, "UTF-8"); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/general.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/prompt.css" />
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var countdown = <?php echo htmlspecialchars($rs['time'], ENT_QUOTES, "UTF-8"); ?>;
$(function(){
  $('#countdown').text(countdown);
  window.setInterval(redirect, 1000); 
});
function redirect(){
  if(countdown <= 0) {window.clearInterval();return;}
  countdown --;
  $('#countdown').text(countdown);
  if(countdown == 0){
    <?php if ($rs['redirect'] != 'close') : ?>
    window.location.href = '<?php echo $rs['redirect']; ?>';
    <?php else : ?>
    window.opener = null; window.close();
    <?php endif; ?>
  }
}
</script>
</head>
<body>
<div class="w800">
  <div class="aln-c"><a href="<?php echo htmlspecialchars($common['url'], ENT_QUOTES, "UTF-8"); ?>"><img alt="Dubhe" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/images/logo.gif" /></a></div>
  <div class="prompt mt10">
    <h1 class="c666">系统提示</h1>
    <h3 class="mt20 <?php echo htmlspecialchars($rs['type'], ENT_QUOTES, "UTF-8"); ?>"><?php if (is_array($rs['text'])) : ?><?php $_foreach_v_counter = 0; $_foreach_v_total = count($rs['text']);?><?php foreach( $rs['text'] as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?><?php echo htmlspecialchars($v, ENT_QUOTES, "UTF-8"); ?><br /><?php endforeach; ?><?php else : ?><?php echo htmlspecialchars($rs['text'], ENT_QUOTES, "UTF-8"); ?><?php endif; ?></h3>
    <?php if ($rs['redirect'] != 'close') : ?>
    <p class="c999 mt20">您将在<font id="countdown" class="countdown">3</font>秒后自动跳转到系统指定页面</p>
    <p class="mt20"><a href="<?php echo $rs['redirect']; ?>">如果浏览器没有自动跳转，请点击这里</a></p>
    <?php else : ?>
    <p class="c999 mt20">此页面将在<font id="countdown" class="countdown">3</font>秒后自动关闭</p>
    <p class="mt20"><a href="#" onclick="window.opener = null; window.close();">点击直接关闭</a></p>
    <?php endif; ?>
  </div>
</div>
</body>
</html>