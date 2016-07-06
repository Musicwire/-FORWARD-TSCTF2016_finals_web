# -------------------------------------------------------------
# Dubhe Market Database Backup
# Program: Dubhe Market 1.1.1 Release 20160515
# MySql: 5.5.49-0+deb8u1 
# Database: tsctf_trade 
# Creation: 2016-05-19 06:28:36
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
('1','admin','e10adc3949ba59abbe56e057f20f883e','','admin@tsctf.com','10.105.42.184','1463610346','1463583001','d11fc65674409aaeec1f80f63accb8cbb9d961cd');


