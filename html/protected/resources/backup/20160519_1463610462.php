# -------------------------------------------------------------
# Dubhe Market Database Backup
# Program: Dubhe Market 1.1.1 Release 20160515
# MySql: 5.5.49-0+deb8u1 
# Database: tsctf_trade 
# Creation: 2016-05-19 06:27:42
# Official: http://www.buptdubhe.com
# -------------------------------------------------------------

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


