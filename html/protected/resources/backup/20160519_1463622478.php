# -------------------------------------------------------------
# Dubhe Market Database Backup
# Program: Dubhe Market 1.1.1 Release 20160515
# MySql: 5.5.49-0+deb8u1 
# Database: tsctf_trade 
# Creation: 2016-05-19 09:47:58
# Official: http://www.buptdubhe.com
# -------------------------------------------------------------

DROP TABLE IF EXISTS `trade_admin`;
CREATE TABLE `trade_admin` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(16) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `last_ip` char(15) NOT NULL DEFAULT '',
  `last_date` int(10) unsigned NOT NULL DEFAULT '0',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `hash` char(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `trade_admin` VALUES
('1','admin','e10adc3949ba59abbe56e057f20f883e','','admin@tsctf.com','10.105.42.184','1463622478','1463583001','d11fc65674409aaeec1f80f63accb8cbb9d961cd');


DROP TABLE IF EXISTS `trade_admin_active`;
CREATE TABLE `trade_admin_active` (
  `sess_id` char(32) NOT NULL DEFAULT '',
  `user_id` smallint(5) unsigned NOT NULL,
  `ip` char(15) NOT NULL DEFAULT '0.0.0.0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `expires` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sess_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_admin_role`;
CREATE TABLE `trade_admin_role` (
  `user_id` smallint(5) unsigned NOT NULL,
  `role_id` smallint(5) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_adv`;
CREATE TABLE `trade_adv` (
  `adv_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `type` char(5) NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `codes` text NOT NULL,
  `start_date` int(10) unsigned NOT NULL DEFAULT '0',
  `end_date` int(10) unsigned NOT NULL DEFAULT '0',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`adv_id`),
  KEY `position_id` (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `trade_adv` VALUES
('1','1','BUPT~','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573c8fc49c0c0kaDlzM9mBG19438.jpg\",\"width\":\"630\",\"height\":\"240\",\"title\":\"bupt\",\"link\":\"http:\\/\\/www.buptdubhe.com\\/\"}','<a href=\"http://www.buptdubhe.com/\"><img src=\"http://192.168.177.134/upload/adv/image/573c8fc49c0c0kaDlzM9mBG19438.jpg\" width=\"630\" height=\"240\" alt=\"bupt\" border=\"0\" /></a>','0','1466265600','1','1'),
('2','2','Dubhe','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573caa8a8c2aci1CmKx2oE933989.jpg\",\"width\":\"\",\"height\":\"\",\"title\":\"\",\"link\":\"http:\\/\\/www.buptdubhe.com\\/\"}','<a href=\"http://www.buptdubhe.com/\"><img src=\"http://192.168.177.134/upload/adv/image/573caa8a8c2aci1CmKx2oE933989.jpg\" border=\"0\" /></a>','0','0','1','1'),
('3','3','宣传广告','text','{\"content\":\"http:\\/\\/www.buptdubhe.com\\/\",\"style\":{\"c\":\"0\",\"s\":\"0\",\"b\":\"0\",\"u\":\"0\",\"i\":\"0\"},\"link\":\"http:\\/\\/www.buptdubhe.com\\/\"}','<a href=\"http://www.buptdubhe.com/\">http://www.buptdubhe.com/</a>','0','0','1','1'),
('4','1','TSCTF2016~','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573c8eff0c56dg6JRQv3isO10240.jpg\",\"width\":\"630\",\"height\":\"240\",\"title\":\"TSCTF2016\\u6765\\u5566\",\"link\":\"http:\\/\\/www.buptdubhe.com\\/\"}','<a href=\"http://www.buptdubhe.com/\"><img src=\"http://192.168.177.134/upload/adv/image/573c8eff0c56dg6JRQv3isO10240.jpg\" width=\"630\" height=\"240\" alt=\"TSCTF2016来啦\" border=\"0\" /></a>','0','1478880000','2','1'),
('5','1','TSCTF2016~~~~','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573c8f1fdefd1vm98PlNtsF11571.jpg\",\"width\":\"630\",\"height\":\"240\",\"title\":\"\\u67e5\\u770b\\u8be6\\u60c5\",\"link\":\"http:\\/\\/www.buptdubhe.com\\/\"}','<a href=\"http://www.buptdubhe.com/\"><img src=\"http://192.168.177.134/upload/adv/image/573c8f1fdefd1vm98PlNtsF11571.jpg\" width=\"630\" height=\"240\" alt=\"查看详情\" border=\"0\" /></a>','0','0','3','1'),
('6','4','首页横幅广告','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573ca97a5049csYErjpA0VZ4552.jpg\",\"width\":\"1110\",\"height\":\"90\",\"title\":\"6666\",\"link\":\"#\"}','<a href=\"#\"><img src=\"http://192.168.177.134/upload/adv/image/573ca97a5049csYErjpA0VZ4552.jpg\" width=\"1110\" height=\"90\" alt=\"6666\" border=\"0\" /></a>','0','0','1','1'),
('7','5','DUBHE','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573ca98f89d89jN26nYTFUV83082.jpg\",\"width\":\"1110\",\"height\":\"100\",\"title\":\"DUBHE\",\"link\":\"#\"}','<a href=\"#\"><img src=\"http://192.168.177.134/upload/adv/image/573ca98f89d89jN26nYTFUV83082.jpg\" width=\"1110\" height=\"100\" alt=\"DUBHE\" border=\"0\" /></a>','0','0','1','1'),
('8','6','广告','image','{\"src\":\"http:\\/\\/192.168.177.134\\/upload\\/adv\\/image\\/573ca9afda45eqXwrvmLfnh90233.jpg\",\"width\":\"1110\",\"height\":\"80\",\"title\":\"DUBHE\",\"link\":\"#\"}','<a href=\"#\"><img src=\"http://192.168.177.134/upload/adv/image/573ca9afda45eqXwrvmLfnh90233.jpg\" width=\"1110\" height=\"80\" alt=\"DUBHE\" border=\"0\" /></a>','0','0','1','1');


DROP TABLE IF EXISTS `trade_adv_position`;
CREATE TABLE `trade_adv_position` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `codes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `trade_adv_position` VALUES
('1','首页轮播图片广告位','630','240','<div class=\"carousel cut\">
  <div class=\"carousel-imgs cut\">
  <{foreach $vars as $v}><{$v nofilter}><{/foreach}>
  </div>
  <ul class=\"carousel-tog\"><{foreach $vars as $k => $v}><li><{$k}></li><{/foreach}></ul>
</div>'),
('2','首页资讯下方广告位','240','70','<{$vars[0] nofilter}>'),
('3','用户登录左侧广告位','480','0','<{$vars[0] nofilter}>'),
('4','首页横幅Banner广告位一','1110','90','<{$vars[0] nofilter}>'),
('5','首页横幅Banner广告位二','1110','100','<{$vars[0] nofilter}>'),
('6','首页横幅Banner广告位三','1110','80','<{$vars[0] nofilter}>');


DROP TABLE IF EXISTS `trade_aftersales`;
CREATE TABLE `trade_aftersales` (
  `as_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_id` char(15) NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_qty` smallint(5) unsigned NOT NULL DEFAULT '1',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cause` text NOT NULL,
  `mobile_no` char(11) NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`as_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_aftersales_message`;
CREATE TABLE `trade_aftersales_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `as_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `as_id` (`as_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_article`;
CREATE TABLE `trade_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(180) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `brief` varchar(240) NOT NULL DEFAULT '',
  `meta_keywords` varchar(240) NOT NULL DEFAULT '',
  `meta_description` varchar(240) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `trade_article` VALUES
('1','1','dubhe-market 1.1版发布','','','','','','','0','1458022719'),
('3','1','QQ讨论交流群','','<p>QQ交流群：544342304</p>','','','','','0','1458023994'),
('4','2','双11购物狂欢节','','<p>双11购物狂欢节 双11来了</p>','','','','','0','1458287839');


DROP TABLE IF EXISTS `trade_article_cate`;
CREATE TABLE `trade_article_cate` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `meta_keywords` varchar(240) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `meta_description` varchar(240) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `trade_article_cate` VALUES
('1','软件','','','1'),
('2','活动','','','2');


DROP TABLE IF EXISTS `trade_brand`;
CREATE TABLE `trade_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(255) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `trade_brand` VALUES
('1','Apple/苹果','','99'),
('2','Huawei/华为','','99'),
('3','Miui/小米','','99'),
('4','ASUS/华硕','','99'),
('5','Lenovo/联想','','99'),
('6','Dell/戴尔','','99'),
('7','Acer/宏碁','','99'),
('8','HP/惠普','','99'),
('9','Samsung/三星','','99'),
('10','Nokia/诺基亚','','99'),
('11','Philips/飞利浦','','99'),
('12','Sony/索尼','','99'),
('13','周大福','','99'),
('14','施华洛世奇','','99'),
('15','vivo','','99'),
('16','Midea/美的','','99'),
('17','AUX/奥克斯','','99'),
('18','Microsoft/微软','','99');


DROP TABLE IF EXISTS `trade_email_queue`;
CREATE TABLE `trade_email_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL DEFAULT '',
  `tpl_id` char(30) NOT NULL DEFAULT '',
  `subject` varchar(240) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `is_html` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `last_err` varchar(255) NOT NULL DEFAULT '',
  `err_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_email_subscription`;
CREATE TABLE `trade_email_subscription` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_email_template`;
CREATE TABLE `trade_email_template` (
  `id` char(30) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `subject` varchar(240) NOT NULL DEFAULT '',
  `is_html` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_email_template` VALUES
('retrieve_user_password','用户密码找回','通过您的邮箱找回密码','1'),
('validate_user_email','用户邮箱地址验证','邮箱地址验证','1');


DROP TABLE IF EXISTS `trade_feedback`;
CREATE TABLE `trade_feedback` (
  `fb_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` char(11) NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fb_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_feedback_message`;
CREATE TABLE `trade_feedback_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fb_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fb_id` (`fb_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_friendlink`;
CREATE TABLE `trade_friendlink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `trade_friendlink` VALUES
('1','DUBHE','http://192.168.177.134/upload/friendlink/573c8d615d033NVqic1FofQ45569.jpg','http://www.buptdubhe.com/','0','99');


DROP TABLE IF EXISTS `trade_goods`;
CREATE TABLE `trade_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(180) NOT NULL DEFAULT '',
  `goods_sn` char(20) NOT NULL DEFAULT '',
  `now_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `original_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_image` varchar(30) NOT NULL DEFAULT '',
  `goods_brief` text NOT NULL,
  `goods_content` text NOT NULL,
  `goods_weight` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `stock_qty` smallint(4) unsigned NOT NULL DEFAULT '0',
  `meta_keywords` varchar(240) NOT NULL DEFAULT '',
  `meta_description` varchar(240) NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `newarrival` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bargain` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`),
  KEY `cate_id` (`cate_id`),
  FULLTEXT KEY `indexing` (`goods_name`,`meta_keywords`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods` VALUES
('1','1','1','Apple iPhone 6s (A1700) 移动联通电信4G手机','0010011563','4888.00','5128.99','156e2d4fa488d0.jpg','小改变，大不同，3D Touch触屏新时代，6s带你感受前沿科技 ！国行正品，不怕检、不怕测，买的放心，售后贴心，用的舒心！','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2daaf5dc64IiTXQnmG6Z66363.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2dc22524ec5iENqzFsIB51238.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2dc2ed68dbTJKr2HGiBQ34101.jpg\"/></p></div>','0.00','9999','苹果, 苹果手机, 苹果6s, iPhone, iPhone 6s, Apple','','1457712963','1','0','0','1'),
('2','1','2','华为 Mate8 3GB+32GB版 全网通 移动版 月光银 苍穹灰','0010022030','2999.00','3299.99','256e2f30e7256c.jpg','','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2f2abed2195dHIXDVxa295565.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2f26836850PvsUtf5CjI32491.jpg\"/></p></div>','0.00','9999','MATE8, 华为 Huawei, 华为手机, Huawei手机, 苍穹灰, 月光银','','1457714965','1','0','0','1'),
('3','1','3','小米4 MI4 2GB内存版 移动 联通 电信 4G手机','0010033521','1299.00','1299.00','356e2fa344ec51.jpg','新鲜1299！不锈钢金属边框、 5英寸屏窄边，工艺和手感超乎想象！','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2fad802f73JXclAK3DV07838.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2fae1ea2e2F6Y1lpxjE250520.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e2fae836e9fugT70NKaUe75951.jpg\"/></p></div>','0.00','9999','','','1457716238','0','1','0','1'),
('4','7','1','Apple MacBook Air MJVE2CH/A 13.3英寸宽屏笔记本电脑','0070014005','6666.00','0.00','456e3dfe6d22c1.jpg','','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e3df31c8fb7iRwAu3PbmC99819.jpg\" _src=\"http://demo.verydows.com/upload/goods/editor/56e3df31c8fb7iRwAu3PbmC99819.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e3df4023401NJv1Rc3LfM73993.jpg\" _src=\"http://demo.verydows.com/upload/goods/editor/56e3df4023401NJv1Rc3LfM73993.jpg\"/></p></div>','0.00','9999','MacBook, Apple 笔记本, 苹果笔记本, 苹果电脑, 笔记本电脑, MacBook Air MJVG2CH/A, 13.3英寸笔记本','','1457777278','0','1','0','1'),
('5','7','6','戴尔（DELL）Ins14MR-7508R 14.0英寸笔记本电脑 （i5-6200U 4G 500G Win10）','0070065228','4399.00','4599.99','556e3f1ea40b41.jpg','','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e3f3d10866cKyN8ADTlm775049.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e3f3d857b8fjc8pRygfUY79695.jpg\"/></p></div>','0.00','9999','Ins14MR-7508R, DELL, 戴尔, Dell 笔记本电脑, 戴尔笔记本, Ins14MR, Dell Ins14MR','','1457779699','0','0','0','1'),
('6','7','7','宏碁（acer）V3-372-P47B 13.3英寸轻薄笔记本电脑','0070076922','2999.00','3199.00','656e3f5f12fd03.jpg','奔腾4405U 4G 128G SSD 核芯显卡 蓝牙 win10','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e3f5d64aca8H4Ums25rXt87027.jpg\"/></p></div>','0.00','9999','','','1457780209','0','0','1','1'),
('7','7','9','三星(SAMSUNG)900X5L-K01 15.0英寸超薄笔记本电脑','0070097259','8999.00','0.00','756e3f9459edf9.jpg','i7-6500U 8G 256G固态硬盘 FHD PLS屏 超窄边框 Win10','','0.00','9999','三星 SAMSUNG, 900X5L-K01, 900X5L-K01, SAMSUNG 900X5L-K01, 三星 900X5L-K01, 笔记本电脑, 三星笔记本, SAMSUNG 笔记本','','1457781061','0','0','0','1'),
('8','8','1','Apple iPad Air 2 MH0W2CH/A 9.7英寸平板电脑','0080018206','3288.00','0.00','856e3fba434963.jpg','年货必备，送礼首选，太子妃升职记尽收眼底','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e4008736b14kWtqo0HygS54399.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e4008e6fc68FW01pSODne25515.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e40093ecb183MHgfX2PFV79431.jpg\"/></p></div>','0.00','9999','Apple iPad Air 2, MH0W2CH/A, Apple MH0W2CH/A, 苹果平板, 苹果iPad, 苹果iPad Air','','1457782972','0','1','0','1'),
('9','8','10','诺基亚（Nokia）N1 7.9英寸平板电脑','0000009639','1099.00','0.00','956e4029db165b.jpg','Z3580处理器 安卓5.0系统 2048x1536分辨率 2/32G内存','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e404e0a51a58MblFa9Jn152056.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e404e6555ca5o90xsbOah31334.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e404eb65c8bZyJVI760NU84987.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e404f152c6f6iFm8oWvgq47192.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e404f5ec67ffxakSiFUmN92775.jpg\"/></p></div>','0.00','9999','诺基亚 N1, NOKIA N1, 平板电脑, 诺基亚平板电脑, NOKIA平板电脑, N1 平板电脑','','1457784146','1','0','1','1'),
('10','9','11','飞利浦 PHILIPS 49PFL3445/T3 49英寸 全高清LED液晶电视','00901110039','2399.00','2699.00','1056e5188b5e84e.jpg','HDMI接口X3！阅影闻声，明智之选！保修两年，详情请关注PhilipsTV官方微信！','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e5197255a8dKT69YEHpMO28069.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e5196a0b5e2wgTuQ6I5Bd43172.jpg\"/></p></div>','0.00','9999','','','1457855939','0','1','1','1'),
('11','9','11','飞利浦 PHILIPS 48PFL5445/T3 48英寸 全高清LED智能电视','00901111459','2999.00','0.00','1156e51cf0075f8.jpg','智能电视 超薄窄边+玻璃底座 简洁流线外观设计 好评看得见！','','0.00','9999','','','1457855932','0','0','0','1'),
('12','9','12','索尼 SONY U90 55英寸4K超高清 安卓5.0智能系统液晶电视','00901212289','8999.00','0.00','1256e51f1dd0df2.jpg','4K钜献，U90震撼上市！','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e5203fa7fbeiAu3Jpt1BI19575.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e52045e8048Gui7A89S4Y21703.jpg\"/></p></div>','0.00','9999','索尼电视, 索尼智能电视, 智能电视, 液晶电视','','1457856602','1','0','0','1'),
('13','1','15','vivo Xplay5 全网通4G手机 4GB+128GB 双卡双待 香槟金','00101513635','3698.00','0.00','1356e6c40a0d492.jpg','双曲面屏 震撼上市','<div align=\"center\"><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e6c6405bf3bw2T3JtxeM558784.jpg\"/></p><p><img src=\"http://demo.verydows.com/upload/goods/editor/56e6c64a81c98BuJ9V5C0D426836.jpg\"/></p></div>','0.00','9999','vivo手机, Xplay5','','1457964653','1','0','0','1'),
('14','14','16','美的 Midea KFR-51LW/WYAA2 2匹 除PM2.5超静音变频柜机 物联网版','01401614386','6699.00','6755.99','1456e6ccd6bdbd6.jpg','手机APP操控，智享生活！出风效果好，覆盖广，低音运行！','','0.00','9999','','','1457966294','0','0','1','1'),
('15','14','17','奥克斯 AUX KFR-25GW/FK01+3 1匹 挂壁式家用冷暖空调','01401715715','1499.00','0.00','1556e6cf29b6bb6.jpg','奥克斯正1匹冷暖空调！高性价比，荣耀加冕！纯铜链接管，舒爽快人一步！','','0.00','9999','','','1457966889','0','0','0','1'),
('16','1','1','Apple iPhone 6s Plus','00100116500','5588.00','0.00','1656e6d17164926.jpg','小改变，大不同，3D Touch触屏新时代，6s带你感受前沿科技','','0.00','9999','','','1457968016','0','1','0','1'),
('17','8','18','微软 Microsoft Surface Pro 3 平板电脑','00801817082','4599.00','4699.00','1756e6d909b8a0c.jpg','i3处理器 128G存储 4G内存','','0.00','9999','','','1457969784','0','0','1','1');


DROP TABLE IF EXISTS `trade_goods_album`;
CREATE TABLE `trade_goods_album` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `image` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_album` VALUES
('1','1','56e2d943368b959ynGbQ7lW80201.jpg'),
('2','1','56e2d94336995XcJQWpDSwE86673.jpg'),
('3','2','56e2f30e72928BSOzT93IkP9639.jpg'),
('4','2','56e2f30e729e9TJ9pqaSYQZ87527.jpg'),
('5','2','56e2f30e72a98gP0RSdCui37720.jpg'),
('6','2','56e2f30e72b41PyGKWtfZ0311691.jpg'),
('7','2','56e2f5332bff4rao5t7snf261816.jpg'),
('8','2','56e2f5332c0d0YT4xyB0kAd82509.jpg'),
('9','3','56e2fa344f02cY1uRU7wkr339310.jpg'),
('10','3','56e2fa344f0eamoiRIGQUST26183.jpg'),
('11','3','56e2fa344f195JtQsiem0Hy2366.jpg'),
('12','3','56e2fa344f23ctCfyjL1WAZ46687.jpg'),
('13','3','56e2fa344f2e0XPhivetwqd36656.jpg'),
('14','3','56e2fa344f384iqwXgUJ4OM64483.jpg'),
('15','4','56e3dfe6d279cuDlyS83YL155115.jpg'),
('16','4','56e3dfe6d288aDoQdTKf6nJ56044.jpg'),
('17','5','56e3f1ea40f58mkRSp4lMJA2728.jpg'),
('18','5','56e3f1ea4101alQtjuWg7G16579.jpg'),
('19','5','56e3f1ea410c87IodqvTUXH31299.jpg'),
('20','5','56e3f1ea41174sdoGeHNpL541450.jpg'),
('21','6','56e3f5f13024fewM0GFa5Vt49870.jpg'),
('22','6','56e3f5f13032bKUPf8uecMz91660.jpg'),
('23','6','56e3f5f1303d9oYudLMSe7y99233.jpg'),
('24','6','56e3f5f130486e4w0WSoUmZ13763.jpg'),
('25','7','56e3f9459f26416pkIfzRxL94522.jpg'),
('26','7','56e3f9459f329V1m5ivX80J61533.jpg'),
('27','7','56e3f9459f3d75RjAoGYxNI60323.jpg'),
('28','8','56e3fba434df3FvpI1ea2z011388.jpg'),
('29','8','56e3fba434ebdgGnoHcM62f69789.jpg'),
('30','8','56e3fba434f6bOk0oljHqRg88606.jpg'),
('31','9','56e4029db1a5aVK73Qd4kRY44539.jpg'),
('32','9','56e4029db1b2dYKsE8d9bl265913.jpg'),
('33','9','56e4029db1bdc2SgAQe8DhX13870.jpg'),
('34','9','56e4029db1c85GtqHLd9bfO22887.jpg'),
('35','9','56e4029db1d36cjQ02S4wRx84896.jpg'),
('36','10','56e5188b5ed92nkGi16usrt831.jpg'),
('37','10','56e5188b5ee5cX8rRQBv4Gh26528.jpg'),
('38','10','56e5188b5ef0asHY8fUuQv198815.jpg'),
('39','11','56e51cf0079a7JE9oKl0Njz63104.jpg'),
('40','11','56e51cf007a6aBOfzmsalQE58255.jpg'),
('41','12','56e51f1dd11f741p2ygvBAq21097.jpg'),
('42','12','56e51f1dd12bf5cX4uhmtb368719.jpg'),
('43','13','56e6c40a0d901YOUSGBw2NA2184.jpg'),
('44','13','56e6c40a0d9c8UVbCSzOqNW97722.jpg'),
('45','13','56e6c40a0da8byXYOEBjsqz53057.jpg'),
('46','14','56e6ccd6bdfeeayuY1i63oD43514.jpg'),
('47','14','56e6ccd6be0b0hc3qve6I0Z69833.jpg'),
('48','14','56e6ccd6be15cY3SmyQldF512516.jpg'),
('49','15','56e6cf29b71afKUwdtDvquI21134.jpg'),
('50','15','56e6cf29b729907TybLOFhI8230.jpg'),
('51','16','56e6d17164e20BpxUwMG6eC69216.jpg'),
('52','16','56e6d17164ee4EAzyl70sHQ5322.jpg'),
('53','16','56e6d17164f91PGQJUuEyrV97248.jpg'),
('54','17','56e6d909b8f00X5n7MsSVcP12157.jpg'),
('55','17','56e6d909b8fcc1kSndBiq8G49254.jpg');


DROP TABLE IF EXISTS `trade_goods_attr`;
CREATE TABLE `trade_goods_attr` (
  `goods_id` mediumint(8) unsigned NOT NULL,
  `attr_id` mediumint(8) NOT NULL,
  `value` varchar(160) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_attr` VALUES
('1','19','143'),
('1','18','小卡(nano-SIM)'),
('1','17','3.5MM'),
('1','16','True Tone 闪光灯'),
('1','15','500万'),
('1','13','不支持'),
('1','14','1200万'),
('1','9','64 位架构的 A9 芯片'),
('1','10','16G / 64G / 128G'),
('1','11','2G'),
('1','12','不支持'),
('1','8','四核'),
('1','7','移动3G(TD-SCDMA),电信3G(CDMA2000),联通3G(WCDMA),联通2G/移动2G(GSM),电信2G(CDMA),电信4G(FDD-LTE),联通4G(FDD-LTE),移动4G(TD-LTE)'),
('1','6','1334*750'),
('1','5','4.5-5.0英寸'),
('1','4','2015年'),
('1','3','单卡单待'),
('1','2','IOS'),
('1','1','iPhone 6s A1700'),
('1','20','138.3*67.1*7.1mm'),
('1','21','1810'),
('1','22','4.7'),
('2','17','3.5MM'),
('2','16','支持'),
('2','15','800万'),
('2','14','1600万'),
('2','13','TF(microSD)卡'),
('2','11','3G'),
('2','12','128G'),
('2','10','32G'),
('2','9','麒麟950'),
('2','8','双四核'),
('2','7','移动3G(TD-SCDMA),联通2G/移动2G(GSM),移动4G(TD-LTE)'),
('2','6','1920*1080'),
('2','5','5.5英寸以上'),
('2','4','2015年'),
('2','3','双卡双待'),
('2','2','Android'),
('2','1','Mate8'),
('2','18','Nano SIM卡＋Nano SIM卡'),
('2','19','185'),
('2','20','157.1×80.6×7.9 mm'),
('2','21','4000'),
('2','22','6.0'),
('3','1','MI4'),
('3','2','Android'),
('3','3','双卡多模'),
('3','4','2014年'),
('3','5','5.0-5.5英寸'),
('3','6','1920x1080'),
('3','7','联通3G 电信3G 电信4G 联通4G 移动4G'),
('3','8','四核'),
('3','9','TM8674AC'),
('3','10','16G'),
('3','11','2G'),
('3','12','不支持'),
('3','13','不支持扩展卡'),
('3','14','1300万'),
('3','15','800万'),
('3','16','LED补光灯'),
('3','17','3.5MM'),
('3','18','小卡(Micro-SIM)'),
('3','19','150'),
('3','20','139.2×68.5×8.9 mm'),
('3','21','3080'),
('3','22','5.0英寸'),
('4','32','Intel HD Graphics 6000'),
('4','31','共享系统内存'),
('4','30','8GB'),
('4','29','DDR3-1600'),
('4','28','Intel Core i5-5250U(1.6GHz/L3 3M)'),
('4','27','4'),
('4','26','集成显卡'),
('4','25','Intel Core i5'),
('4','24','商务办公'),
('4','23','13'),
('4','33','摄像头, 蓝牙功能, 背光键盘'),
('4','34','USB 3.0'),
('4','35','约1.35'),
('4','36','2015'),
('4','37','17'),
('4','38','蓝牙4.0'),
('5','33','摄像头, 蓝牙功能, HDMI接口'),
('5','32','Intel GMA HD 520'),
('5','31','共享内存容量'),
('5','30','其他'),
('5','29','DDR3L (低电压版)'),
('5','28','Intel Core i5-6200U'),
('5','27','4'),
('5','26','独立显卡'),
('5','25','Intel Core i5'),
('5','24','游戏达人'),
('5','23','14'),
('5','34','USB 2.0/3.0, RJ45, 音频输出'),
('5','35','1.93'),
('5','36','2015年'),
('5','37','21.6'),
('5','38','蓝牙4.0'),
('6','23','13'),
('6','24','校园学生'),
('6','25','Intel 其他'),
('6','26','集成显卡'),
('6','27','4'),
('6','28','Intel 奔腾双核 4405U'),
('6','29','DDR3（低电压版）'),
('6','30','4GB'),
('6','31','4GB'),
('6','32','Intel GMA HD 510'),
('6','33','共享内存'),
('6','34','USB 2.0/3.0, RJ45, HDMI, 音频输出'),
('6','35','1.5'),
('6','36','2015年'),
('6','37','19.65'),
('6','38','蓝牙模块'),
('7','23','15'),
('7','24','家庭娱乐'),
('7','25','Intel Core i7'),
('7','26','独立显卡'),
('7','27','8'),
('7','28','Intel 酷睿i7 6500U'),
('7','29','LPDDR3'),
('7','30','8GB'),
('7','31','共享内存容量'),
('7','32','Intel GMA HD 520'),
('7','33','摄像头, 蓝牙功能, 读卡器, 扬声器'),
('7','34','音频输出, USB 3.0'),
('7','35','1.29'),
('7','36','2016年02月'),
('7','37','14.5'),
('7','38','蓝牙4.1'),
('8','48','GPS导航, 重力感应, 距离感应, 光线感应, 三轴陀螺仪, 支持蓝牙'),
('8','47','WiFi'),
('8','45','2048 x 1536'),
('8','46','苹果iOS'),
('8','42','2'),
('8','43','2014年'),
('8','44','IPS'),
('8','41','双核'),
('8','40','16'),
('8','39','8.1-10'),
('8','49','双摄像头, iSight 摄像头：800 万像素自动对焦； FaceTime 摄像头：120 万像素照片;'),
('8','50','437'),
('8','51','240 x 169.5 x 6.1'),
('8','52','金色 / 灰色 / 银色'),
('8','53','27.3 Whr'),
('9','39','7-8'),
('9','40','32'),
('9','41','双核'),
('9','42','2'),
('9','43','2015年01月'),
('9','44','IPS'),
('9','45','2048 x 1536'),
('9','46','Android 5.0'),
('9','47','WiFi'),
('9','48','6轴加速器，三轴陀螺仪，电子罗盘'),
('9','49','双摄像头'),
('9','50','318'),
('9','51','200.7×138.6×6.9'),
('9','52','天然铝灰色 / 火山灰色'),
('9','53','5300 mAh'),
('10','64','3个'),
('10','63','MP3'),
('10','62','无'),
('10','61','LED背光'),
('10','60','1080p(全高清)'),
('10','57','46-50英寸'),
('10','59','宽屏16:9'),
('10','58','1920*1080'),
('10','56','不支持'),
('10','55','非智能电视'),
('10','54','49PFL3445/T3'),
('11','63','USB视频播放,USB图片播放,USB音频播放'),
('11','62','Android'),
('11','61','LED背光'),
('11','60','1080p(全高清)'),
('11','57','46-50英寸'),
('11','59','宽屏16:9'),
('11','58','1920*1080'),
('11','56','不支持'),
('11','55','智能电视'),
('11','54','48PFL5445/T3'),
('10','65','2个'),
('10','66','内置底座'),
('10','67','外置挂架'),
('10','68','不支持'),
('11','64','2个'),
('11','65','2个'),
('11','66','内置底座'),
('11','67','外置挂架'),
('11','68','无线Wifi'),
('12','57','50-60英寸'),
('12','59','宽屏16:9'),
('12','58','3840*2160'),
('12','56','不支持'),
('12','55','4K超高清电视'),
('12','54','X8566D'),
('12','60','2160p'),
('12','62','Android'),
('12','64','4个'),
('13','1','Xplay5'),
('13','2','Android'),
('13','3','双卡多模'),
('13','4','2016年'),
('13','5','5.0-5.5英寸'),
('13','6','2560×1440'),
('13','7','移动4G、联通4G、电信4G'),
('13','8','八核'),
('13','9','Qualcomm 骁龙 八核 1.8GHz'),
('13','10','128GB'),
('13','11','4G'),
('13','12','不支持'),
('13','13','不支持'),
('13','14','1600万像素'),
('13','15','800万像素'),
('13','16','支持'),
('13','17','3.5mm'),
('13','18','Nano SIM卡'),
('13','19','168'),
('13','20','153.5 x 76.2 x 7.59'),
('13','21','3600'),
('13','22','5.43'),
('14','69','2'),
('14','70','立柜式'),
('14','71','变频'),
('14','72','冷暖电辅'),
('14','73','二'),
('15','69','1'),
('15','70','壁挂式'),
('15','71','定频'),
('15','72','冷暖电辅'),
('15','73','三'),
('16','1','Apple iPhone 6s Plus A1699'),
('16','2','IOS'),
('16','3','单卡单待'),
('16','4','2015年'),
('16','5','5.0-5.5英寸'),
('16','6','1920*1080'),
('16','7','移动3G, 电信3G, 联通3G, 电信4G, 联通4G ,移动4G'),
('16','8','四核'),
('16','9','64 位架构 A9 芯片'),
('16','10','16G / 64G /128G'),
('16','11','2G'),
('16','12','不支持'),
('16','13','不支持扩展卡'),
('16','14','1200万'),
('16','15','500万'),
('16','16','True Tone'),
('16','17','3.5mm'),
('16','18','小卡 nano-SIM'),
('16','19','192'),
('16','20','158.2 x 77.9 x 7.3 mm'),
('16','21','2915'),
('16','22','5.5'),
('17','39','7-8'),
('17','40','128'),
('17','41','双核'),
('17','42','4'),
('17','43','2014年8月'),
('17','44','IPS'),
('17','45','2160 x 1440'),
('17','46','Windows 10'),
('17','47','Wifi'),
('17','48','无'),
('17','49','双摄像头'),
('17','50','800'),
('17','51','201.42 x 292.10 x 9.14'),
('17','52','黑色'),
('17','53','10900毫安');


DROP TABLE IF EXISTS `trade_goods_cate`;
CREATE TABLE `trade_goods_cate` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cate_name` varchar(60) NOT NULL DEFAULT '',
  `meta_keywords` varchar(240) NOT NULL DEFAULT '',
  `meta_description` varchar(240) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  PRIMARY KEY (`cate_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_cate` VALUES
('1','0','手机','手机','手机','1'),
('2','0','电脑','电脑','电脑','2'),
('3','0','家电','家电','家电','3'),
('4','0','汽车用品','汽车用品','汽车用品','4'),
('5','0','个护化妆','个护化妆','个护化妆','5'),
('6','0','珠宝饰品','珠宝饰品','珠宝饰品','6'),
('7','2','笔记本','笔记本','笔记本','2'),
('8','2','平板电脑','平板电脑','平板电脑','1'),
('9','3','电视','电视','电视','1'),
('10','0','食品酒类','食品酒类','食品酒类','99'),
('11','6','项链','项链','项链','1'),
('12','6','手镯','手镯','手镯','2'),
('13','6','戒指','戒指','戒指','3'),
('14','3','空调','空调','空调','99');


DROP TABLE IF EXISTS `trade_goods_cate_attr`;
CREATE TABLE `trade_goods_cate_attr` (
  `attr_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `opts` text NOT NULL,
  `uom` varchar(20) NOT NULL DEFAULT '',
  `filtrate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_cate_attr` VALUES
('1','1','型号','','','0','99'),
('2','1','操作系统','[\"IOS\",\"Android\",\"Windows Phone\"]','','1','99'),
('3','1','待机模式','','','0','99'),
('4','1','上市时间','','','0','99'),
('5','1','屏幕大小','[\"4.5\\u82f1\\u5bf8\\u4ee5\\u4e0b\",\"4.5-5.0\\u82f1\\u5bf8\",\"5.0-5.5\\u82f1\\u5bf8\",\"5.5\\u82f1\\u5bf8\\u4ee5\\u4e0a\"]','','1','99'),
('6','1','主屏分辨率','','','0','99'),
('7','1','适用网络制式','','','0','99'),
('8','1','CPU核心数','[\"\\u53cc\\u6838\",\"\\u56db\\u6838\",\"\\u53cc\\u56db\\u6838\",\"\\u516b\\u6838\"]','','1','99'),
('9','1','CPU型号描述','','','0','99'),
('10','1','机身存储','','','0','99'),
('11','1','运行内存','[\"1G\",\"2G\",\"3G\",\"4G\"]','','1','99'),
('12','1','最大储存扩展','','','0','99'),
('13','1','扩展卡类型','','','0','99'),
('14','1','主摄像头像素','','','0','99'),
('15','1','副摄像头像素','','','0','99'),
('16','1','闪光灯','','','0','99'),
('17','1','耳机接口','','','0','99'),
('18','1','SIM卡类型','','','0','99'),
('19','1','重量','','g','0','99'),
('20','1','产品尺寸','','','0','99'),
('21','1','电池容量','','mAh','0','99'),
('22','1','屏幕尺寸','','英寸','0','99'),
('23','7','屏幕尺寸','[\"17\",\"15\",\"14\",\"13\",\"12\",\"11\",\"10\"]','英寸','1','99'),
('24','7','适用场景','[\"\\u5bb6\\u5ead\\u5a31\\u4e50\",\"\\u5546\\u52a1\\u529e\\u516c\",\"\\u6e38\\u620f\\u8fbe\\u4eba\",\"\\u6821\\u56ed\\u5b66\\u751f\",\"\\u5973\\u6027\\u65f6\\u5c1a\"]','','1','99'),
('25','7','CPU处理器','[\"Intel Core i3\",\"Intel Core i5\",\"Intel Core i7\",\"Intel \\u5176\\u4ed6\",\"AMD APU\",\"AMD \\u5176\\u4ed6\"]','','1','99'),
('26','7','显卡类型','[\"\\u72ec\\u7acb\\u663e\\u5361\",\"\\u96c6\\u6210\\u663e\\u5361\",\"\\u53cc\\u663e\\u5361\"]','','1','99'),
('27','7','内存容量','[\"1\",\"2\",\"4\",\"8\",\"16\"]','GB','1','99'),
('28','7','处理器型号','','','0','99'),
('29','7','内存类型','','','0','99'),
('30','7','最大支持内存容量','','','0','99'),
('31','7','显存容量','','','0','99'),
('32','7','显示芯片描述','','','0','99'),
('33','7','高级功能','','','0','99'),
('34','7','支持接口类型','','','0','99'),
('35','7','重量','','Kg','0','99'),
('36','7','上市时间','','','0','99'),
('37','7','厚度','','mm','0','99'),
('38','7','蓝牙','','','0','99'),
('39','8','屏幕尺寸','[\"7-8\",\"8.1-10\",\"10.1-11\",\"11.1-12\"]','英寸','1','99'),
('40','8','机身存储','[\"4\",\"8\",\"16\",\"32\",\"64\",\"128\"]','GB','1','99'),
('41','8','CPU核心数','[\"\\u53cc\\u6838\",\"\\u56db\\u6838\",\"\\u516b\\u6838\"]','','1','99'),
('42','8','内存容量','[\"1\",\"2\",\"3\",\"4\"]','GB','1','99'),
('43','8','上市时间','','','0','99'),
('44','8','屏幕材质','','','0','99'),
('45','8','最高分辨率','','','0','99'),
('46','8','操作系统','','','0','99'),
('47','8','联网模式','','','0','99'),
('48','8','附加功能','','','0','99'),
('49','8','摄像头','','','0','99'),
('50','8','重量','','g','0','99'),
('51','8','机身尺寸','','mm','0','99'),
('52','8','颜色','','','0','99'),
('53','8','电池容量','','','0','99'),
('54','9','型号','','','0','1'),
('55','9','类型','[\"\\u975e\\u667a\\u80fd\\u7535\\u89c6\",\"\\u667a\\u80fd\\u7535\\u89c6\",\"4K\\u8d85\\u9ad8\\u6e05\\u7535\\u89c6\"]','','1','2'),
('56','9','3D功能','[\"\\u652f\\u6301\",\"\\u4e0d\\u652f\\u6301\"]','','1','3'),
('57','9','屏幕尺寸','[\"32\\u82f1\\u5bf8\\u4ee5\\u4e0b\",\"32-37\\u82f1\\u5bf8\",\"37-46\\u82f1\\u5bf8\",\"46-50\\u82f1\\u5bf8\",\"50-60\\u82f1\\u5bf8\",\"60\\u82f1\\u5bf8\\u4ee5\\u4e0a\"]','','1','99'),
('58','9','最高分辨率','','','0','3'),
('59','9','屏幕比例','','','0','4'),
('60','9','清晰度','','','0','99'),
('61','9','背光灯类型','','','0','99'),
('62','9','操作系统','','','0','99'),
('63','9','USB支持音频格式','','','0','99'),
('64','9','HDMI接口','','','0','99'),
('65','9','USB接口','','','0','99'),
('66','9','底座配置','','','0','99'),
('67','9','壁挂配置','','','0','99'),
('68','9','联网功能','','','0','99'),
('69','14','功率','[\"1\",\"1.5\",\"2\",\"2.5\",\"3\"]','匹','1','99'),
('70','14','类型','[\"\\u58c1\\u6302\\u5f0f\",\"\\u7acb\\u67dc\\u5f0f\",\"\\u4e2d\\u592e\\u7a7a\\u8c03\"]','','1','99'),
('71','14','技术','[\"\\u53d8\\u9891\",\"\\u5b9a\\u9891\"]','','1','99'),
('72','14','冷暖方式','[\"\\u51b7\\u6696\\u578b\",\"\\u51b7\\u6696\\u7535\\u8f85\",\"\\u5355\\u51b7\\u578b\"]','','1','99'),
('73','14','能效等级','[\"\\u4e00\",\"\\u4e8c\",\"\\u4e09\",\"\\u56db\"]','级','1','99');


DROP TABLE IF EXISTS `trade_goods_cate_brand`;
CREATE TABLE `trade_goods_cate_brand` (
  `cate_id` smallint(5) unsigned NOT NULL,
  `brand_id` smallint(5) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_cate_brand` VALUES
('1','1'),
('1','2'),
('1','3'),
('7','8'),
('7','7'),
('7','6'),
('7','5'),
('7','4'),
('7','1'),
('7','9'),
('8','3'),
('8','9'),
('8','10'),
('8','1'),
('9','11'),
('9','9'),
('9','3'),
('9','12'),
('6','14'),
('6','13'),
('11','14'),
('11','13'),
('2','12'),
('2','11'),
('2','9'),
('2','8'),
('2','7'),
('2','6'),
('2','5'),
('2','4'),
('2','1'),
('8','18');


DROP TABLE IF EXISTS `trade_goods_optional`;
CREATE TABLE `trade_goods_optional` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `opt_text` varchar(80) NOT NULL DEFAULT '',
  `opt_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_optional` VALUES
('28','1','1','银色','0.00'),
('27','1','1','深空灰','0.00'),
('26','1','1','金色','0.00'),
('25','1','1','玫瑰金','50.00'),
('24','2','1','16G','0.00'),
('23','2','1','128G','1700.00'),
('22','2','1','64G','700.00'),
('48','1','2','苍穹灰','0.00'),
('47','1','2','月光银','0.00'),
('46','3','2','移动版','0.00'),
('45','3','2','全网通','200.00'),
('54','3','3','移动','0.00'),
('53','1','3','黑色','0.00'),
('52','1','3','白色','0.00'),
('55','3','3','电信','0.00'),
('56','3','3','联通','0.00'),
('61','2','4','256G','1333.00'),
('60','2','4','128G','0.00'),
('82','1','8','银色','0.00'),
('81','1','8','灰色','100.00'),
('80','1','8','金色','0.00'),
('79','2','8','128G WiFi版','1500.00'),
('78','2','8','16G WiFi版','0.00'),
('77','2','8','64G WiFi版','700.00'),
('83','1','16','玫瑰金','0.00'),
('84','1','16','金色','0.00'),
('85','1','16','深空灰','0.00'),
('86','1','16','银色','0.00'),
('87','2','16','16G','0.00'),
('88','2','16','64G','800.00'),
('89','2','16','128G','1800.00'),
('90','3','16','移动版','0.00'),
('91','3','16','全网通','200.00'),
('92','4','17','中文版','0.00'),
('93','4','17','专业版','0.00');


DROP TABLE IF EXISTS `trade_goods_optional_type`;
CREATE TABLE `trade_goods_optional_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_optional_type` VALUES
('1','颜色'),
('2','机身存储'),
('3','网络类型'),
('4','版本');


DROP TABLE IF EXISTS `trade_goods_related`;
CREATE TABLE `trade_goods_related` (
  `goods_id` mediumint(8) NOT NULL,
  `related_id` mediumint(8) NOT NULL,
  `direction` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`goods_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_goods_related` VALUES
('10','11','2'),
('11','10','2'),
('16','1','2'),
('1','16','2');


DROP TABLE IF EXISTS `trade_goods_review`;
CREATE TABLE `trade_goods_review` (
  `review_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` char(15) NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rating` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `content` text NOT NULL,
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `replied` text NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `goods_id` (`goods_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_help`;
CREATE TABLE `trade_help` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `meta_keywords` varchar(240) NOT NULL DEFAULT '',
  `meta_description` varchar(240) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_help_cate`;
CREATE TABLE `trade_help_cate` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(60) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_login_security`;
CREATE TABLE `trade_login_security` (
  `ip` char(15) NOT NULL,
  `err_count` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `expires` int(10) unsigned NOT NULL DEFAULT '0',
  `lock_expires` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `ip_expires` (`ip`,`expires`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_login_security` VALUES
('192.168.177.1','5','1463606329','0'),
('10.105.42.184','1','1463625301','0'),
('10.105.42.184','1','1463625875','0'),
('10.105.42.184','1','1463625906','0'),
('10.105.42.184','1','1463625939','0'),
('10.105.42.184','1','1463625984','0'),
('10.105.42.184','1','1463626006','0'),
('10.105.42.184','1','1463626031','0'),
('10.105.42.184','1','1463626046','0'),
('10.105.42.184','1','1463626065','0'),
('10.105.42.184','1','1463626177','0'),
('10.105.42.184','1','1463626294','0'),
('10.105.42.184','1','1463626346','0'),
('10.105.42.184','1','1463626365','0'),
('10.105.42.184','1','1463626467','0'),
('10.105.42.184','1','1463626478','0'),
('10.105.42.184','1','1463626517','0'),
('10.105.42.184','1','1463626521','0'),
('10.105.42.184','1','1463626537','0'),
('10.105.42.184','1','1463626557','0'),
('10.105.42.184','1','1463626561','0'),
('10.105.42.184','1','1463626571','0'),
('10.105.42.184','1','1463626582','0'),
('10.105.42.184','1','1463626608','0'),
('10.105.42.184','1','1463626612','0'),
('10.105.42.184','1','1463626615','0'),
('10.105.42.184','1','1463626645','0'),
('10.105.42.184','1','1463626648','0'),
('10.105.42.184','1','1463626652','0'),
('10.105.42.184','1','1463626654','0'),
('10.105.42.184','1','1463626693','0'),
('10.105.42.184','1','1463626769','0'),
('10.105.42.184','1','1463626772','0');


DROP TABLE IF EXISTS `trade_navigation`;
CREATE TABLE `trade_navigation` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `position` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `target` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  `visible` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `trade_navigation` VALUES
('1','后台管理','http://192.168.177.134/index.php?m=backend&c=main&a=index','0','1','1','1'),
('2','官方网站','http://www.buptdubhe.com/','0','1','2','1'),
('3','我的订单','http://192.168.177.134/order/index.html','1','1','1','1'),
('4','收藏夹','http://192.168.177.134/favorite/index.html','1','1','2','1'),
('5','论坛','#','2','1','1','1'),
('6','文档','#','2','1','2','1'),
('7','下载','#','2','1','3','1'),
('8','开源','#','2','1','4','1');


DROP TABLE IF EXISTS `trade_oauth`;
CREATE TABLE `trade_oauth` (
  `party` char(10) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL,
  `params` text NOT NULL,
  `instruction` varchar(240) NOT NULL DEFAULT '',
  `enable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`party`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_oauth` VALUES
('qq','QQ','{\"app_id\":\"\",\"app_key\":\"\"}','QQ互联开放平台为第三方网站提供了丰富的API。第三方网站接入QQ互联开放平台后，即可通过调用平台提供的API实现用户使用QQ帐号登录网站功能，且可以获取到腾讯QQ用户的相关信息。','0'),
('weibo','新浪微博','{\"app_key\":\"\",\"app_secret\":\"\"}','网站接入是微博针对第三方网站提供的社会化网络接入方案。接入微连接让您的网站支持用微博帐号登录，基于OAuth2.0协议，使用微博 Open API 进行开发， 即可用微博帐号登录你的网站， 让你的网站降低新用户注册成本，快速获取大量用户。','0');


DROP TABLE IF EXISTS `trade_order`;
CREATE TABLE `trade_order` (
  `order_id` char(15) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` text NOT NULL,
  `shipping_method` smallint(5) unsigned NOT NULL DEFAULT '0',
  `payment_method` smallint(5) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shipping_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `memos` varchar(240) NOT NULL DEFAULT '',
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `payment_date` int(10) unsigned NOT NULL DEFAULT '0',
  `trade_no` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_order_goods`;
CREATE TABLE `trade_order_goods` (
  `order_id` char(15) NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(180) NOT NULL DEFAULT '',
  `goods_image` varchar(30) NOT NULL DEFAULT '',
  `goods_opts` varchar(255) NOT NULL DEFAULT '',
  `goods_qty` smallint(5) NOT NULL DEFAULT '1',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_order_log`;
CREATE TABLE `trade_order_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` char(15) NOT NULL DEFAULT '',
  `admin_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `operate` char(10) NOT NULL,
  `cause` varchar(240) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_order_shipping`;
CREATE TABLE `trade_order_shipping` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` char(15) NOT NULL DEFAULT '',
  `carrier_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tracking_no` varchar(20) NOT NULL DEFAULT '',
  `memos` varchar(240) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_payment_method`;
CREATE TABLE `trade_payment_method` (
  `id` tinyint(3) unsigned NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pcode` varchar(20) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `instruction` varchar(240) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  `enable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_payment_method` VALUES
('1','余额支付','0','balance','','','1','1'),
('2','货到付款','1','cod','','','2','1'),
('3','支付宝','0','alipay','{\"seller_email\":\"\",\"partner\":\"\",\"key\":\"\"}','','3','1');


DROP TABLE IF EXISTS `trade_role`;
CREATE TABLE `trade_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL DEFAULT '',
  `role_brief` varchar(240) NOT NULL DEFAULT '',
  `role_acl` text NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_sendmail_limit`;
CREATE TABLE `trade_sendmail_limit` (
  `ip` char(15) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL DEFAULT '',
  `count` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_setting`;
CREATE TABLE `trade_setting` (
  `sk` varchar(30) NOT NULL,
  `sv` text NOT NULL,
  PRIMARY KEY (`sk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_setting` VALUES
('site_name','Dubhe Market 开源交易系统'),
('home_title','Dubhe Market 高效快捷的开源免费系统'),
('home_keywords',''),
('home_description',''),
('footer_info','<div class=\"copyright mt10\"><p>联系邮箱：service@buptdubhe.com<span class=\"sep\"></span></p></div>'),
('goods_search_per_num','20'),
('upload_filetype','.jpg|.jpeg|.gif|.png|.bmp|.swf|.flv|.avi|.rmvb'),
('upload_filesize','2MB'),
('captcha_admin_login','0'),
('captcha_user_login','0'),
('captcha_user_register','1'),
('captcha_feedback','0'),
('smtp_server',''),
('smtp_user',''),
('smtp_password',''),
('smtp_port',''),
('smtp_secure',''),
('admin_mult_ip_login','1'),
('upload_goods_filesize','300KB'),
('visitor_stats','1'),
('goods_hot_searches',''),
('cate_goods_per_num','20'),
('goods_history_num','5'),
('goods_related_num','5'),
('goods_review_per_num','10'),
('upload_goods_filetype','.jpg|.png|.gif'),
('show_goods_stock','1'),
('order_cancel_expires','5'),
('goods_img_thumb','[{\"w\":350,\"h\":350},{\"w\":150,\"h\":150},{\"w\":100,\"h\":100},{\"w\":50,\"h\":50}]'),
('goods_album_thumb','[{\"w\":350,\"h\":350},{\"w\":50,\"h\":50}]'),
('enabled_theme','default'),
('user_consignee_limits','15'),
('upload_avatar_filesize','200KB'),
('order_delivery_expires','7'),
('user_register_email_verify','0'),
('user_review_approve','0'),
('rewrite_enable','0'),
('home_newarrival_num','5'),
('home_recommend_num','5'),
('home_bargain_num','5'),
('home_article_num','4'),
('data_cache_lifetime','0'),
('goods_fulltext_query','0'),
('debug','1'),
('encrypt_key','ca04f7641add5a6fdc091454fe80167b'),
('rewrite_rule','{\"404.html\":\"main\\/404\",\"search.html\":\"goods\\/search\",\"item\\/.html\":\"goods\\/index\",\"cate\\/.html\":\"category\\/index\",\"\\/img\":\"image\\/\",\"index.html\":\"main\\/index\",\"\\/.html\":\"\\/\"}');


DROP TABLE IF EXISTS `trade_shipping_carrier`;
CREATE TABLE `trade_shipping_carrier` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `tracking_url` varchar(255) NOT NULL DEFAULT '',
  `service_tel` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `trade_shipping_carrier` VALUES
('1','顺丰速运','http://www.sf-express.com/cn/sc/dynamic_functions/waybill/#search/bill-number/','95338'),
('2','中通快递','http://www.zto.cn/GuestService/Bill?txtbill=','95311');


DROP TABLE IF EXISTS `trade_shipping_method`;
CREATE TABLE `trade_shipping_method` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `instruction` varchar(240) NOT NULL DEFAULT '',
  `seq` tinyint(2) unsigned NOT NULL DEFAULT '99',
  `enable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `trade_shipping_method` VALUES
('1','普通快递','{\"0\":{\"type\":\"fixed\",\"area\":\"0\",\"charges\":\"10\"}}','全国范围统一价10元','1','1');


DROP TABLE IF EXISTS `trade_user`;
CREATE TABLE `trade_user` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(16) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `email_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hash` char(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

INSERT INTO `trade_user` VALUES
('1','user1','e10adc3949ba59abbe56e057f20f883e','1@1.com','0','0','44691f72b16e308f05c6e93bd3b24242ce3f4c48'),
('2','a123123','e10adc3949ba59abbe56e057f20f883e','1111@admin.com','0','0','7edfc197b691e47e8b84fcc3b1c1743a68f2d7bc'),
('3','q123123','e10adc3949ba59abbe56e057f20f883e','1@1231.com\'','0','0','a0ecd3fdcc79a61ed585b3c4516153019a0c25d8'),
('4','dlive_1463720501','ef0172c92281e71a9df534fd9aaff164','dlive_1463720501@gmail.com','0','0','d68e9c40845d659cd9981dd22bb5362526cb483d'),
('5','dlive_1463720584','ef0172c92281e71a9df534fd9aaff164','dlive_1463720584@gmail.com','0','0','e34fea39b68d42e72fa94420c74a40dce8e15c78'),
('6','dlive_1463721036','ef0172c92281e71a9df534fd9aaff164','dlive_1463721036@gmail.com','0','0','ff7bceb9b050a8f732386318ceefc35e8a3a9192'),
('7','dlive_1463721066','ef0172c92281e71a9df534fd9aaff164','dlive_1463721066@gmail.com','0','0','9a15e8fa36b6b94624bffc393e1a10bb3d2fc616'),
('8','dlive_1463721099','ef0172c92281e71a9df534fd9aaff164','dlive_1463721099@gmail.com','0','0','600f1dc5fcb3fd5b0049c95013db6c0581ff444b'),
('9','dlive_1463721144','ef0172c92281e71a9df534fd9aaff164','dlive_1463721144@gmail.com','0','0','fc59ec065d8f1344960c72ff27233825bba9453f'),
('10','dlive_1463721166','ef0172c92281e71a9df534fd9aaff164','dlive_1463721166@gmail.com','0','0','abe29e4c1e9f40ad46f95677138d64bfff5cf98c'),
('11','dlive_1463721191','ef0172c92281e71a9df534fd9aaff164','dlive_1463721191@gmail.com','0','0','08a50ff5fc482f25767fd1e02827654e2bc92aff'),
('12','dlive_1463721206','ef0172c92281e71a9df534fd9aaff164','dlive_1463721206@gmail.com','0','0','f9271bc04117189a33144bac2732e3c007ed0ca6'),
('13','dlive_1463721225','ef0172c92281e71a9df534fd9aaff164','dlive_1463721225@gmail.com','0','0','677a0daea0e8ab638c622f8704716360cf3ea0ad'),
('14','dlive_1463721627','ef0172c92281e71a9df534fd9aaff164','dlive_1463721627@gmail.com','0','0','efc26ffd36cb851a6706aa6a54a5974df0bf4b1a'),
('15','dlive_1463721638','ef0172c92281e71a9df534fd9aaff164','dlive_1463721638@gmail.com','0','0','34191da6a4573622df7b4272d7f1987fe694ca95'),
('16','dlive_1463721717','ef0172c92281e71a9df534fd9aaff164','dlive_1463721717@gmail.com','0','0','cd0d8bdd99aec2176e2732b6589b83e66d5c0e5e'),
('17','dlive_1463721721','ef0172c92281e71a9df534fd9aaff164','dlive_1463721721@gmail.com','0','0','061b5a067f7387f8dd66f10345315c1b8d8e8cf8'),
('18','dlive_1463721929','ef0172c92281e71a9df534fd9aaff164','dlive_1463721929@gmail.com','0','0','f856a734d9bb40cc65e02c6a15bf5b659ea5ef24'),
('19','dlive_1463721932','ef0172c92281e71a9df534fd9aaff164','dlive_1463721932@gmail.com','0','0','47b6ba2ffb0a1c077cc4f7eabf350829b264f276'),
('20','dlive_1463721984','ef0172c92281e71a9df534fd9aaff164','dlive_1463721984@gmail.com','0','0','1146a5f12ffed1ee9d1efaacc3f0466e2f4c7af4'),
('21','dlive_1463721999','ef0172c92281e71a9df534fd9aaff164','dlive_1463721999@gmail.com','0','0','77c298d441947e4d9cedc1bfdd8cf8abacba4262'),
('22','dlive_1463722052','ef0172c92281e71a9df534fd9aaff164','dlive_1463722052@gmail.com','0','0','763043b2a54d7f19e2e5c2db94e6f400be2d963d'),
('23','dlive_1463722654','ef0172c92281e71a9df534fd9aaff164','dlive_1463722654@gmail.com','0','0','618cf7fc415f474047686e73879215c208cca760'),
('24','dlive_1463722706','ef0172c92281e71a9df534fd9aaff164','dlive_1463722706@gmail.com','0','0','913398b784256fff97815f283637d009a03323d8'),
('25','dlive_1463722730','ef0172c92281e71a9df534fd9aaff164','dlive_1463722730@gmail.com','0','0','60ca9b84ab9262ee84cfd33262f2b32bc9978841'),
('26','dlive_1463722747','ef0172c92281e71a9df534fd9aaff164','dlive_1463722747@gmail.com','0','0','ff17160ed89e2f314c915493adf36871e494ff44'),
('27','dlive_1463722841','ef0172c92281e71a9df534fd9aaff164','dlive_1463722841@gmail.com','0','0','21865767677daf93e41d93a205f2451d22485e13'),
('28','dlive_1463722851','ef0172c92281e71a9df534fd9aaff164','dlive_1463722851@gmail.com','0','0','6b2ebd9751c44ba7da79b19aeecd4db76786ece7'),
('29','dlive_1463722916','ef0172c92281e71a9df534fd9aaff164','dlive_1463722916@gmail.com','0','0','0c001ac9cde8049d46ed7a1c3fca491054ea1c0c'),
('30','dlive_1463722935','ef0172c92281e71a9df534fd9aaff164','dlive_1463722935@gmail.com','0','0','ef00d056259523975b8bbb36177eed814ca8bfab'),
('31','dlive_1463723002','ef0172c92281e71a9df534fd9aaff164','dlive_1463723002@gmail.com','0','0','0af4e7e3a18254c27853c939a8840ff409857032'),
('32','dlive_1463723014','ef0172c92281e71a9df534fd9aaff164','dlive_1463723014@gmail.com','0','0','70ef373c7b6620813b2d01924000c570cb8a240d'),
('33','dlive_1463723016','ef0172c92281e71a9df534fd9aaff164','dlive_1463723016@gmail.com','0','0','04f5f9ad9d8254b9374b893c9f6eb2fb48d85848'),
('34','dlive_1463723308','ef0172c92281e71a9df534fd9aaff164','dlive_1463723308@gmail.com','0','0','79e0a65bfe331fa8bbc522a8a0ed144701ef6f8f'),
('35','dlive_1463723413','ef0172c92281e71a9df534fd9aaff164','dlive_1463723413@gmail.com','0','0','7522d5995000e0de5822f41ee43a95d5268b2f39'),
('36','dlive_1463723438','ef0172c92281e71a9df534fd9aaff164','dlive_1463723438@gmail.com','0','0','9b8f52cfd7b6f6fa192f2941a85153582e9e9328'),
('37','dlive_1463723784','ef0172c92281e71a9df534fd9aaff164','dlive_1463723784@gmail.com','0','0','12418df2dc4f39afa6da0480aef480e32d49c07b'),
('38','dlive_1463723844','ef0172c92281e71a9df534fd9aaff164','dlive_1463723844@gmail.com','0','0','1df2167b46e4c74a3912559510a01541b62e8a81'),
('39','dlive_1463724179','ef0172c92281e71a9df534fd9aaff164','dlive_1463724179@gmail.com','0','0','4ce1c6329a99cc6e65977e74343e75176c1283a3'),
('40','dlive_1463724180','ef0172c92281e71a9df534fd9aaff164','dlive_1463724180@gmail.com','0','0','e2e86c9f44ae18ab39df28521ff767d631a99661'),
('41','dlive_1463724225','ef0172c92281e71a9df534fd9aaff164','dlive_1463724225@gmail.com','0','0','ec8524b1f43a908a24b5d179c91621a3b5c65be3'),
('42','dlive_1463724236','ef0172c92281e71a9df534fd9aaff164','dlive_1463724236@gmail.com','0','0','51bf283acb3c7fb72eb269fb5007c297e7686a2e'),
('43','dlive_1463724237','ef0172c92281e71a9df534fd9aaff164','dlive_1463724237@gmail.com','0','0','1c8b3c5528bd06b53b0e66588c6b53bc3200f05a'),
('44','dlive_1463724272','ef0172c92281e71a9df534fd9aaff164','dlive_1463724272@gmail.com','0','0','7ac1f7a265680130dc52453a2c214a9ca9836984'),
('45','dlive_1463724282','ef0172c92281e71a9df534fd9aaff164','dlive_1463724282@gmail.com','0','0','d7dc5dd7cc3a6ccfc14807a5e40eaf29080ccda8'),
('46','dlive_1463724320','ef0172c92281e71a9df534fd9aaff164','dlive_1463724320@gmail.com','0','0','41bb207caf57c9af7eaee963bbf2ce3b47539ddd'),
('47','dlive_1463724327','ef0172c92281e71a9df534fd9aaff164','dlive_1463724327@gmail.com','0','0','bb4b2a7744666f9fc21b817238dc04893d528477'),
('48','dlive_1463724400','ef0172c92281e71a9df534fd9aaff164','dlive_1463724400@gmail.com','0','0','e0a263af57bcd5657bd9009dc1fae40f62dd7b04'),
('49','dlive_1463724401','ef0172c92281e71a9df534fd9aaff164','dlive_1463724401@gmail.com','0','0','c765677a0d48fa8ab7e8881712e54db739ea795f'),
('50','dlive_1463724437','ef0172c92281e71a9df534fd9aaff164','dlive_1463724437@gmail.com','0','0','61bf8d5221bc627520fec6a5290992a6c492e51d'),
('51','dlive_1463724547','ef0172c92281e71a9df534fd9aaff164','dlive_1463724547@gmail.com','0','0','f3bb9e5c52916d20f3957a65aa52f2a6c04b82bc'),
('52','dlive_1463724553','ef0172c92281e71a9df534fd9aaff164','dlive_1463724553@gmail.com','0','0','b68bd7569c44f0cbdfd08d1fe0946900429cc365'),
('53','dlive_1463724554','ef0172c92281e71a9df534fd9aaff164','dlive_1463724554@gmail.com','0','0','637114dbc7d88f5ccb3bc027eae25d8905525085'),
('54','dlive_1463724556','ef0172c92281e71a9df534fd9aaff164','dlive_1463724556@gmail.com','0','0','5923c5493293a719f889c5c68a6165ee70782cc2'),
('55','dlive_1463724557','ef0172c92281e71a9df534fd9aaff164','dlive_1463724557@gmail.com','0','0','70402c4f1ba4e008cd1fbaaa9a7669e600b6324a'),
('56','dlive_1463724558','ef0172c92281e71a9df534fd9aaff164','dlive_1463724558@gmail.com','0','0','5aee050553c3a166d8afe96aee8c4f7d4d89b44b'),
('57','dlive_1463724569','ef0172c92281e71a9df534fd9aaff164','dlive_1463724569@gmail.com','0','0','52956e7d9408573e0c8f7ccebef82e2c0bbc10fc'),
('58','dlive_1463724595','ef0172c92281e71a9df534fd9aaff164','dlive_1463724595@gmail.com','0','0','91e40c33a5319111ab4b33fee6cc4aec612c0218'),
('59','dlive_1463724645','ef0172c92281e71a9df534fd9aaff164','dlive_1463724645@gmail.com','0','0','666adc24d653bcf65010c1a8cbe8d103d8394d60'),
('60','dlive_1463724670','ef0172c92281e71a9df534fd9aaff164','dlive_1463724670@gmail.com','0','0','d0076d117f5c7bfabd77980061b5e4d893e17f8e'),
('61','dlive_1463724671','ef0172c92281e71a9df534fd9aaff164','dlive_1463724671@gmail.com','0','0','a56181c13aca48ac23378e8056a90c0a92c8a713'),
('62','dlive_1463724743','ef0172c92281e71a9df534fd9aaff164','dlive_1463724743@gmail.com','0','0','9fe850d87476e38c93322542ba469361e0b7aa83'),
('63','dlive_1463724765','ef0172c92281e71a9df534fd9aaff164','dlive_1463724765@gmail.com','0','0','cd8539f8ee5d23c1d266d4775a37ab01055ba689'),
('64','dlive_1463724800','ef0172c92281e71a9df534fd9aaff164','dlive_1463724800@gmail.com','0','0','4568e7407fac59e6171c6b2628d025560d483b17'),
('65','dlive_1463724807','ef0172c92281e71a9df534fd9aaff164','dlive_1463724807@gmail.com','0','0','6976f9e08a5357f2dd6cb4b2f2aa2065626c2e3e'),
('66','dlive_1463724836','ef0172c92281e71a9df534fd9aaff164','dlive_1463724836@gmail.com','0','0','69739c44e6aa35c1784626f08bbdd9567b124cf6');


DROP TABLE IF EXISTS `trade_user_account`;
CREATE TABLE `trade_user_account` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `balance` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `points` int(10) unsigned NOT NULL DEFAULT '0',
  `exp` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_user_account` VALUES
('1','0.00','0','0'),
('2','0.00','0','0'),
('3','0.00','0','0'),
('4','0.00','0','0'),
('5','0.00','0','0'),
('6','0.00','0','0'),
('7','0.00','0','0'),
('8','0.00','0','0'),
('9','0.00','0','0'),
('10','0.00','0','0'),
('11','0.00','0','0'),
('12','0.00','0','0'),
('13','0.00','0','0'),
('14','0.00','0','0'),
('15','0.00','0','0'),
('16','0.00','0','0'),
('17','0.00','0','0'),
('18','0.00','0','0'),
('19','0.00','0','0'),
('20','0.00','0','0'),
('21','0.00','0','0'),
('22','0.00','0','0'),
('23','0.00','0','0'),
('24','0.00','0','0'),
('25','0.00','0','0'),
('26','0.00','0','0'),
('27','0.00','0','0'),
('28','0.00','0','0'),
('29','0.00','0','0'),
('30','0.00','0','0'),
('31','0.00','0','0'),
('32','0.00','0','0'),
('33','0.00','0','0'),
('34','0.00','0','0'),
('35','0.00','0','0'),
('36','0.00','0','0'),
('37','0.00','0','0'),
('38','0.00','0','0'),
('39','0.00','0','0'),
('40','0.00','0','0'),
('41','0.00','0','0'),
('42','0.00','0','0'),
('43','0.00','0','0'),
('44','0.00','0','0'),
('45','0.00','0','0'),
('46','0.00','0','0'),
('47','0.00','0','0'),
('48','0.00','0','0'),
('49','0.00','0','0'),
('50','0.00','0','0'),
('51','0.00','0','0'),
('52','0.00','0','0'),
('53','0.00','0','0'),
('54','0.00','0','0'),
('55','0.00','0','0'),
('56','0.00','0','0'),
('57','0.00','0','0'),
('58','0.00','0','0'),
('59','0.00','0','0'),
('60','0.00','0','0'),
('61','0.00','0','0'),
('62','0.00','0','0'),
('63','0.00','0','0'),
('64','0.00','0','0'),
('65','0.00','0','0'),
('66','0.00','0','0');


DROP TABLE IF EXISTS `trade_user_account_log`;
CREATE TABLE `trade_user_account_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `points` int(10) NOT NULL DEFAULT '0',
  `exp` int(10) NOT NULL,
  `cause` varchar(255) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_user_actinfo`;
CREATE TABLE `trade_user_actinfo` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  `created_ip` char(15) NOT NULL DEFAULT '0.0.0.0',
  `last_date` int(10) unsigned NOT NULL DEFAULT '0',
  `last_ip` char(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_user_actinfo` VALUES
('1','1463585498','192.168.177.1','1463610207','10.105.42.106'),
('2','1463602800','192.168.177.1','0',''),
('3','1463602920','192.168.177.1','0',''),
('4','1463618140','10.105.42.184','0',''),
('5','1463618224','10.105.42.184','1463618585','10.105.42.184'),
('6','1463618675','10.105.42.184','0',''),
('7','1463618706','10.105.42.184','0',''),
('8','1463618739','10.105.42.184','0',''),
('9','1463618784','10.105.42.184','0',''),
('10','1463618806','10.105.42.184','0',''),
('11','1463618831','10.105.42.184','0',''),
('12','1463618846','10.105.42.184','0',''),
('13','1463618865','10.105.42.184','1463619307','10.105.42.184'),
('14','1463619267','10.105.42.184','0',''),
('15','1463619278','10.105.42.184','0',''),
('16','1463619357','10.105.42.184','0',''),
('17','1463619361','10.105.42.184','1463619460','10.105.42.184'),
('18','1463619569','10.105.42.184','0',''),
('19','1463619572','10.105.42.184','0',''),
('20','1463619624','10.105.42.184','1463619624','10.105.42.184'),
('21','1463619639','10.105.42.184','1463619639','10.105.42.184'),
('22','1463619692','10.105.42.184','1463619746','10.105.42.184'),
('23','1463620294','10.105.42.184','0',''),
('24','1463620346','10.105.42.184','0',''),
('25','1463620370','10.105.42.184','0',''),
('26','1463620387','10.105.42.184','1463620387','10.105.42.184'),
('27','1463620481','10.105.42.184','1463620481','10.105.42.184'),
('28','1463620491','10.105.42.184','1463620491','10.105.42.184'),
('29','1463620556','10.105.42.184','1463620556','10.105.42.184'),
('30','1463620575','10.105.42.184','1463620575','10.105.42.184'),
('31','1463620642','10.105.42.184','1463620642','10.105.42.184'),
('32','1463620654','10.105.42.184','1463620654','10.105.42.184'),
('33','1463620656','10.105.42.184','1463620656','10.105.42.184'),
('34','1463620947','10.105.42.184','1463620948','10.105.42.184'),
('35','1463621053','10.105.42.184','1463621053','10.105.42.184'),
('36','1463621078','10.105.42.184','1463621078','10.105.42.184'),
('37','1463621423','10.105.42.184','1463621424','10.105.42.184'),
('38','1463621484','10.105.42.184','1463621484','10.105.42.184'),
('39','1463621819','10.105.42.184','1463621819','10.105.42.184'),
('40','1463621820','10.105.42.184','1463621820','10.105.42.184'),
('41','1463621865','10.105.42.184','1463621865','10.105.42.184'),
('42','1463621876','10.105.42.184','1463621876','10.105.42.184'),
('43','1463621876','10.105.42.184','1463621876','10.105.42.184'),
('44','1463621912','10.105.42.184','1463621912','10.105.42.184'),
('45','1463621922','10.105.42.184','1463621922','10.105.42.184'),
('46','1463621959','10.105.42.184','1463621960','10.105.42.184'),
('47','1463621967','10.105.42.184','1463621967','10.105.42.184'),
('48','1463622040','10.105.42.184','1463622040','10.105.42.184'),
('49','1463622041','10.105.42.184','1463622041','10.105.42.184'),
('50','1463622077','10.105.42.184','1463622077','10.105.42.184'),
('51','1463622187','10.105.42.184','1463622187','10.105.42.184'),
('52','1463622193','10.105.42.184','1463622193','10.105.42.184'),
('53','1463622194','10.105.42.184','1463622194','10.105.42.184'),
('54','1463622195','10.105.42.184','1463622195','10.105.42.184'),
('55','1463622197','10.105.42.184','1463622197','10.105.42.184'),
('56','1463622198','10.105.42.184','1463622198','10.105.42.184'),
('57','1463622209','10.105.42.184','1463622209','10.105.42.184'),
('58','1463622235','10.105.42.184','1463622235','10.105.42.184'),
('59','1463622285','10.105.42.184','1463622285','10.105.42.184'),
('60','1463622310','10.105.42.184','1463622310','10.105.42.184'),
('61','1463622311','10.105.42.184','1463622311','10.105.42.184'),
('62','1463622383','10.105.42.184','1463622383','10.105.42.184'),
('63','1463622405','10.105.42.184','1463622405','10.105.42.184'),
('64','1463622447','10.105.42.184','1463622447','10.105.42.184'),
('65','1463622453','10.105.42.184','1463622476','10.105.42.184'),
('66','1463622477','10.105.42.184','1463622477','10.105.42.184');


DROP TABLE IF EXISTS `trade_user_consignee`;
CREATE TABLE `trade_user_consignee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `province` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `city` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `borough` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `address` varchar(240) NOT NULL DEFAULT '',
  `zip` char(6) NOT NULL DEFAULT '',
  `mobile_no` char(11) NOT NULL DEFAULT '',
  `tel_no` varchar(20) NOT NULL DEFAULT '',
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_user_favorite`;
CREATE TABLE `trade_user_favorite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL,
  `created_date` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_user_group`;
CREATE TABLE `trade_user_group` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `min_exp` int(10) unsigned NOT NULL DEFAULT '0',
  `discount_rate` tinyint(3) unsigned NOT NULL DEFAULT '100',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `trade_user_group` VALUES
('1','初级会员','0','100'),
('2','中级会员','2000','100'),
('3','高级会员','7000','100');


DROP TABLE IF EXISTS `trade_user_oauth`;
CREATE TABLE `trade_user_oauth` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `party` char(10) NOT NULL DEFAULT '',
  `oauth_key` char(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `trade_user_profile`;
CREATE TABLE `trade_user_profile` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `avatar` varchar(40) NOT NULL DEFAULT '',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birth_year` smallint(4) unsigned NOT NULL DEFAULT '0',
  `birth_month` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `birth_day` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `mobile_no` char(11) NOT NULL DEFAULT '',
  `qq` varchar(15) NOT NULL DEFAULT '',
  `signature` varchar(240) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_user_profile` VALUES
('1','','1573cc4b84e385.jpg','0','0','0','0','','',''),
('2','','','0','0','0','0','','',''),
('3','111aaa','','0','1916','1','1','','22323121','1'),
('4','','','0','0','0','0','','',''),
('5','','','0','0','0','0','','',''),
('6','','','0','0','0','0','','',''),
('7','','','0','0','0','0','','',''),
('8','','','0','0','0','0','','',''),
('9','','','0','0','0','0','','',''),
('10','','','0','0','0','0','','',''),
('11','','','0','0','0','0','','',''),
('12','','','0','0','0','0','','',''),
('13','','','0','0','0','0','','',''),
('14','','','0','0','0','0','','',''),
('15','','','0','0','0','0','','',''),
('16','','','0','0','0','0','','',''),
('17','','','0','0','0','0','','',''),
('18','','','0','0','0','0','','',''),
('19','','','0','0','0','0','','',''),
('20','','','0','0','0','0','','',''),
('21','','','0','0','0','0','','',''),
('22','123123','','1','1916','1','1','15500000000','123123','123123132'),
('23','','','0','0','0','0','','',''),
('24','','','0','0','0','0','','',''),
('25','','','0','0','0','0','','',''),
('26','','','0','0','0','0','','',''),
('27','','','0','0','0','0','','',''),
('28','','','0','0','0','0','','',''),
('29','','','0','0','0','0','','',''),
('30','dlive_1463722935','','1','1916','1','1','15500000000','1463722935','1463722935'),
('31','dlive_1463723002','','1','1916','1','1','15500000000','1463723002','1463723002'),
('32','dlive_1463723014','','1','1916','1','1','15500000000','1463723014','1463723014'),
('33','dlive_1463723016','','1','1916','1','1','15500000000','1463723016','1463723016'),
('34','dlive_1463723308','','1','1916','1','1','15500000000','1463723308','1463723308'),
('35','dlive_1463723413','','1','1916','1','1','15500000000','1463723413','1463723413'),
('36','dlive_1463723438','','1','1916','1','1','15500000000','1463723438','1463723438'),
('37','dlive_1463723784','','1','1916','1','1','15500000000','1463723784','1463723784'),
('38','dlive_1463723844','','1','1916','1','1','15500000000','1463723844','1463723844'),
('39','dlive_1463724180','','1','1916','1','1','15500000000','1463724180','1463724180'),
('40','dlive_1463724180','','1','1916','1','1','15500000000','1463724180','1463724180'),
('41','dlive_1463724225','','1','1916','1','1','15500000000','1463724225','1463724225'),
('42','dlive_1463724236','','1','1916','1','1','15500000000','1463724236','1463724236'),
('43','dlive_1463724237','','1','1916','1','1','15500000000','1463724237','1463724237'),
('44','dlive_1463724272','','1','1916','1','1','15500000000','1463724272','1463724272'),
('45','dlive_1463724282','','1','1916','1','1','15500000000','1463724282','1463724282'),
('46','dlive_1463724320','','1','1916','1','1','15500000000','1463724320','1463724320'),
('47','dlive_1463724327','','1','1916','1','1','15500000000','1463724327','1463724327'),
('48','dlive_1463724400','','1','1916','1','1','15500000000','1463724400','1463724400'),
('49','dlive_1463724401','','1','1916','1','1','15500000000','1463724401','1463724401'),
('50','dlive_1463724437','','1','1916','1','1','15500000000','1463724437','1463724437'),
('51','dlive_1463724547','','1','1916','1','1','15500000000','1463724547','1463724547'),
('52','dlive_1463724553','','1','1916','1','1','15500000000','1463724553','1463724553'),
('53','dlive_1463724554','','1','1916','1','1','15500000000','1463724554','1463724554'),
('54','dlive_1463724556','','1','1916','1','1','15500000000','1463724556','1463724556'),
('55','dlive_1463724557','','1','1916','1','1','15500000000','1463724557','1463724557'),
('56','dlive_1463724558','','1','1916','1','1','15500000000','1463724558','1463724558'),
('57','dlive_1463724569','','1','1916','1','1','15500000000','1463724569','1463724569'),
('58','dlive_1463724595','','1','1916','1','1','15500000000','1463724595','1463724595'),
('59','dlive_1463724645','','1','1916','1','1','15500000000','1463724645','1463724645'),
('60','dlive_1463724670','','1','1916','1','1','15500000000','1463724670','1463724670'),
('61','dlive_1463724671','','1','1916','1','1','15500000000','1463724671','1463724671'),
('62','dlive_1463724743','','1','1916','1','1','15500000000','1463724743','1463724743'),
('63','dlive_1463724765','','1','1916','1','1','15500000000','1463724765','1463724765'),
('64','dlive_1463724807','','1','1916','1','1','15500000000','1463724807','1463724807'),
('65','dlive_1463724836','','1','1916','1','1','15500000000','1463724836','1463724836'),
('66','dlive_1463724838','','1','1916','1','1','15500000000','1463724838','1463724838');


DROP TABLE IF EXISTS `trade_visitor_stats`;
CREATE TABLE `trade_visitor_stats` (
  `sessid` char(32) NOT NULL DEFAULT '',
  `ip` char(15) NOT NULL DEFAULT '0.0.0.0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `pv` smallint(5) unsigned NOT NULL DEFAULT '1',
  `referrer` varchar(80) NOT NULL DEFAULT '',
  `browser` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `platform` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `area` char(10) NOT NULL DEFAULT '',
  KEY `sessid` (`sessid`) USING BTREE,
  KEY `ip` (`ip`),
  KEY `dateline` (`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `trade_visitor_stats` VALUES
('a7bb1ed23e462728b1ffb7b6ddf71c2a','124.127.207.170','1463500800','31','192.168.177.134','2','1','北京市'),
('912bac8a4df45dfa938c099601c382b1','114.255.40.44','1463500800','5','192.168.177.134','3','1','北京市'),
('a7bb1ed23e462728b1ffb7b6ddf71c2a','114.255.40.44','1463500800','6','192.168.177.134','2','1','北京市'),
('a7bb1ed23e462728b1ffb7b6ddf71c2a','124.127.207.149','1463500800','69','192.168.177.134','2','1','北京市'),
('a7bb1ed23e462728b1ffb7b6ddf71c2a','124.127.207.149','1463587200','45','192.168.177.134','2','1','北京市');


