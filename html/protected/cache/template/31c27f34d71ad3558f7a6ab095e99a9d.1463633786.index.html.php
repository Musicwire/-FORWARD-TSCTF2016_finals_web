<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo htmlspecialchars($home['meta_keywords'], ENT_QUOTES, "UTF-8"); ?>" />
<meta name="description" content="<?php echo htmlspecialchars($home['meta_description'], ENT_QUOTES, "UTF-8"); ?>" />
<title><?php echo htmlspecialchars($home['title'], ENT_QUOTES, "UTF-8"); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/general.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/style/index.css" />
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/general.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/juicer.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/js/carousel.js"></script>
</head>
<body>
<!-- 顶部开始 -->
<?php echo layout_topper(array('common'=>$common, ));?>
<!-- 顶部结束 -->
<!-- 头部开始 -->
<div class="header mt30">
  <div class="w1100">
    <!-- 头部主体开始 -->
    <div class="module cut">
      <div class="logo fl"><a href="<?php echo htmlspecialchars($common['url'], ENT_QUOTES, "UTF-8"); ?>"><img alt="Dubhe" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/images/logo.gif" border="0" /></a></div>
      <!-- 头部搜索开始 -->
      <div class="top-search fl">
        <form method="get" action="<?php echo url(array('c'=>'goods', 'a'=>'search', ));?>">
	  <?php if ($GLOBALS['cfg']['rewrite_enable'] == 0) : ?><input type="hidden" name="c" value="goods" /><input type="hidden" name="a" value="search" /><?php endif; ?>
          <div class="sf cut">
            <input class="fl" name="kw" type="text" value="<?php if (isset($u['kw'])) : ?><?php echo htmlspecialchars($u['kw'], ENT_QUOTES, "UTF-8"); ?><?php endif; ?>" placeholder="双11提前购，畅想全年最低价" />
            <button class="fr" type="submit">搜 索</button>
          </div>
        </form>
        <?php if (!empty($home['hot_searches'])) : ?>
        <div class="hw mt8">热门搜索：<?php $_foreach_v_counter = 0; $_foreach_v_total = count($home['hot_searches']);?><?php foreach( $home['hot_searches'] as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?><a href="<?php echo url(array('c'=>'goods', 'a'=>'search', 'kw'=>$v, ));?>"><?php echo htmlspecialchars($v, ENT_QUOTES, "UTF-8"); ?></a><?php endforeach; ?></div>
        <?php endif; ?>
      </div>
      <!-- 头部搜索结束 -->
      <!-- 头部购物车开始 -->
      <div class="top-cart fr">
        <div class="radius4 mt10"><i class="icon"></i><a href="<?php echo url(array('c'=>'cart', 'a'=>'index', ));?>" id="cartbar"><img class="hide" src="<?php echo htmlspecialchars($common['theme'], ENT_QUOTES, "UTF-8"); ?>/images/cart-loading.gif" /><font>我的购物车</font>(<b>0</b>)</a></div>
      </div>
      <!-- 头部购物车结束 -->
    </div>
    <!-- 头部主体结束 -->
    <div class="module mt20">
      <!-- 导航开始 -->
      <div class="nav cut">
        <div class="cateth w210 fl"><h2>商品分类</h2></div>
        <div class="cross cut">
          <ul>
            <li><a href="<?php echo htmlspecialchars($common['url'], ENT_QUOTES, "UTF-8"); ?>">首页</a></li>
            <?php $_foreach_v_counter = 0; $_foreach_v_total = count($home['nav']['main']);?><?php foreach( $home['nav']['main'] as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
            <li><a href="<?php echo htmlspecialchars($v['link'], ENT_QUOTES, "UTF-8"); ?>"<?php echo htmlspecialchars($v['target'], ENT_QUOTES, "UTF-8"); ?>><?php echo htmlspecialchars($v['name'], ENT_QUOTES, "UTF-8"); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <!-- 导航结束 -->
    </div>
  </div>
</div>
<!-- 头部结束 -->
<!-- 主体开始 -->
<div class="container w1100">
  <div class="module cut">
    <!-- 商品分类开始 -->
    <div class="catebar w210 fl"><?php echo layout_catebar();?></div>
    <!-- 商品分类结束 -->
    <!-- 轮播图片广告开始 -->
    <div class="w640 fl cut"><?php echo layout_adv(array('id'=>'1', ));?></div>
    <!-- 轮播图片广告结束 -->
    <!-- 资讯开始 -->
    <div class="w240 fr cut">
      <div class="news mt10">
        <h2><a href="<?php echo url(array('c'=>'article', 'a'=>'list', ));?>" class="fr">更多 <i>></i></a>最新资讯</h2>
        <ul>
          <?php $_foreach_v_counter = 0; $_foreach_v_total = count($latest_article);?><?php foreach( $latest_article as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
          <li><a title="<?php echo htmlspecialchars($v['title'], ENT_QUOTES, "UTF-8"); ?>" href="<?php echo htmlspecialchars($v['link'], ENT_QUOTES, "UTF-8"); ?>"><b>[<?php echo htmlspecialchars($v['cate_name'], ENT_QUOTES, "UTF-8"); ?>]</b><?php echo htmlspecialchars($v['title'], ENT_QUOTES, "UTF-8"); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- 广告位(240x70)开始 -->
      <div class="module mt10"><?php echo layout_adv(array('id'=>'2', ));?></div>
      <!-- 广告位(240x70)结束 -->
    </div>
    <!-- 资讯结束 -->
  </div>
  <!-- 新品上市开始 -->
  <div class="module mt30 cut">
    <div class="gli_t">
      <h2 class="fl">新品上市</h2>
    </div>
    <div class="gli w1110">
      <ul>
        <?php $_foreach_v_counter = 0; $_foreach_v_total = count($newarrival);?><?php foreach( $newarrival as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
        <li>
          <div class="im"><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><img alt="<?php echo htmlspecialchars($v['goods_name'], ENT_QUOTES, "UTF-8"); ?>" src="<?php echo url(array('c'=>'image', 'a'=>'index', 'i'=>$v['goods_image'], 's'=>'150x150', ));?>" /></a></div>
          <h3><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><?php echo reviser_truncate($v['goods_name'], 40);?></a></h3>
          <p class="price"><i>¥</i> <?php echo htmlspecialchars($v['now_price'], ENT_QUOTES, "UTF-8"); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 首页横幅Banner广告位一(1110x90)开始 -->
  <div class="module mt20 cut"><?php echo layout_adv(array('id'=>'4', ));?></div>
  <!-- 首页横幅Banner广告位一(1110x90)结束 -->
  <!-- 新品上市结束 -->
  <!-- 推荐商品开始 -->
  <div class="cl"></div>
  <div class="module mt20 cut">
    <div class="gli_t">
      <h2>推荐商品</h2>
    </div>
    <div class="gli w1110">
      <ul>
        <?php $_foreach_v_counter = 0; $_foreach_v_total = count($recommend);?><?php foreach( $recommend as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
        <li>
          <div class="im"><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><img alt="<?php echo htmlspecialchars($v['goods_name'], ENT_QUOTES, "UTF-8"); ?>" src="<?php echo url(array('c'=>'image', 'a'=>'index', 'i'=>$v['goods_image'], 's'=>'150x150', ));?>" /></a></div>
          <h3><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><?php echo reviser_truncate($v['goods_name'], 40);?></a></h3>
          <p class="price"><i>¥</i> <?php echo htmlspecialchars($v['now_price'], ENT_QUOTES, "UTF-8"); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 推荐商品结束 -->
  <!-- 首页横幅Banner广告位二(1110x100)开始 -->
  <div class="module mt20 cut"><?php echo layout_adv(array('id'=>'5', ));?></div>
  <!-- 首页横幅Banner广告位二(1110x100)结束 -->
  <!-- 特价促销开始 -->
  <div class="cl"></div>
  <div class="module mt20 cut">
    <div class="gli_t">
      <h2>特价促销</h2>
    </div>
    <div class="gli w1110">
      <ul>
        <?php $_foreach_v_counter = 0; $_foreach_v_total = count($bargain);?><?php foreach( $bargain as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
        <li>
          <div class="im"><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><img alt="<?php echo htmlspecialchars($v['goods_name'], ENT_QUOTES, "UTF-8"); ?>" src="<?php echo url(array('c'=>'image', 'a'=>'index', 'i'=>$v['goods_image'], 's'=>'150x150', ));?>" /></a></div>
          <h3><a href="<?php echo url(array('c'=>'goods', 'a'=>'index', 'id'=>$v['goods_id'], ));?>"><?php echo reviser_truncate($v['goods_name'], 40);?></a></h3>
          <p class="price"><i>¥</i> <?php echo htmlspecialchars($v['now_price'], ENT_QUOTES, "UTF-8"); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 特价促销结束 -->
  <!-- 首页横幅Banner广告位三(1110x80)开始 -->
  <div class="module mt20 cut"><?php echo layout_adv(array('id'=>'6', ));?></div>
  <!-- 首页横幅Banner广告位三(1110x80)结束 -->
  <?php echo layout_helper();?>
</div>
<!-- 主体结束 -->
<div class="cl"></div>
<!-- 页脚开始 -->
<?php echo layout_footer();?>
<!-- 页脚结束 -->
</body>
</html>