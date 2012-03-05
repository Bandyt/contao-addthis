-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_addthis_servicescheme`
-- 

CREATE TABLE `tl_addthis_servicescheme` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_addthis_service`
-- 

CREATE TABLE `tl_addthis_service` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `serviceorder` int(10) unsigned NOT NULL default '0',
  `service` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

-- 
-- Table `tl_module`
-- 
CREATE TABLE `tl_module` (
  `addthis_username` varchar(255) NOT NULL default '',
  `addthis_servicescheme` int(10) NOT NULL default '0',
  `addthis_version` varchar(20) NOT NULL default '250',
  `addthis_trackback` char(1) NOT NULL default '',
  `addthis_setlanguage` char(1) NOT NULL default '',
  `addthis_style` varchar(20) NOT NULL default '',
  `addthis_language` varchar(2) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
