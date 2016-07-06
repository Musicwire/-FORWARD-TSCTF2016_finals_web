# -------------------------------------------------------------
# Dubhe Market Database Backup
# Program: Dubhe Market 1.1.1 Release 20160515
# MySql: 5.5.49-0+deb8u1 
# Database: tsctf_trade 
# Creation: 2016-05-19 04:29:44
# Official: http://www.buptdubhe.com
# -------------------------------------------------------------

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

