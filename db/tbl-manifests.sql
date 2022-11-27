(
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `ord` int(10) unsigned COMMENT "old id - use for ordering",
 `otype` smallint(1) unsigned NOT NULL DEFAULT 4096 COMMENT 'obj type',
 `title` varchar(255) NOT NULL,
 `desc` text,
 `mid` int(10) unsigned NOT NULL default 0 COMMENT "image",
 `access` smallint NOT NULL COMMENT "owner-only trial free member purchase",
 `flags` int(3) unsigned NOT NULL default 0 COMMENT "publish draft current featured",
 `payload` blob,
 `owner` int(10) unsigned NOT NULL default 1,
 `uid_lmod` int(10) unsigned NULL COMMENT "author",
 `debut` int(10) unsigned NOT NULL,
 `lmod` int(10) unsigned NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`title`),
  KEY `otype` (`owner`,`otype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
