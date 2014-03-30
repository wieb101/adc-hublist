#
# Tabel structuur voor tabel `hub`
#

CREATE TABLE `hub` (
  `hub_id` int(11) NOT NULL auto_increment,
  `cid` varchar(100) default '',
  `name` varchar(150) NOT NULL default '',
  `description` varchar(100) default '',
  `address` varchar(150) NOT NULL default '',
  `port` int(11) NOT NULL default '0',
  `version` varchar(100) default '',
  `last_time_checked` datetime NOT NULL default '0000-00-00 00:00:00',
  `check_count` int(11) default '0',
  `online_count` int(11) default '0',
  `status` tinyint(4) default NULL,
  `country` char(2) default NULL,
  `contime` float unsigned default '0',
  `debug` text,
  `usercount` int(11) default '0',
  `shared` bigint(20) default '0',
  PRIMARY KEY  (`hub_id`)
) TYPE=MyISAM;