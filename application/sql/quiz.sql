-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-04-02 09:54:59
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- 表的结构 `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- 表的结构 `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- 表的结构 `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- 转存表中的数据 `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"quiz","table":"userscore_lib"},{"db":"quiz","table":"users"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"},{"db":"phpmyadmin","table":"pma_pdf_pages"},{"db":"phpmyadmin","table":"pma_recent"},{"db":"phpmyadmin","table":"pma_relation"},{"db":"cdcol","table":"cds"},{"db":"mysql","table":"user"}]');

-- --------------------------------------------------------

--
-- 表的结构 `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- 表的结构 `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- 表的结构 `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 表的结构 `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- 表的结构 `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- 表的结构 `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- 转存表中的数据 `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2014-04-02 07:07:37', '{"lang":"zh_CN","collation_connection":"utf8mb4_general_ci"}');
--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- 表的结构 `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `question_lib`
--

CREATE TABLE IF NOT EXISTS `question_lib` (
  `qid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer_A` varchar(200) NOT NULL,
  `answer_B` varchar(200) NOT NULL,
  `answer_C` varchar(200) NOT NULL,
  `answer_D` varchar(200) NOT NULL,
  `correct_answer` varchar(5) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `question_lib`
--

INSERT INTO `question_lib` (`qid`, `question`, `answer_A`, `answer_B`, `answer_C`, `answer_D`, `correct_answer`) VALUES
(1, 'For many patients, institutional care is the most ______ and beneficial form of care. ', 'pertinent', 'appropriate', 'acute', 'persistent', 'B'),
(2, 'Among all the changes resulting from the ______ entry of women into the work force, the transformation that has occurred in the women themselves is not the least important.', 'massive', 'quantitative', 'surplus', 'formidable', 'A'),
(3, 'Mr. Smith became very ______ when it was suggested that he had made a mistake.', 'ingenious', 'empirical', 'objective', 'indignant', 'A'),
(4, 'Rumours are everywhere, spreading fear, damaging reputations, and turning calm situations into ______ ones. ', 'turbulent', 'tragic', 'vulnerable', 'suspicious', 'A'),
(5, 'The ______ cycle of life and death is a subject of interest to scientists and philosophers alike.', 'incompatible', 'exceeding', 'instantaneous', 'eternal', 'D'),
(6, 'She remains confident and ______ untroubled by our present problems. ', 'indefinitely', 'infinitely', 'optimistically', 'seemingly', 'B'),
(7, 'Fiber-optic cables can carry hundreds of telephone conversations ______. ', 'simultaneously', 'spontaneously', 'homogeneously', 'contemporarily', 'A'),
(8, 'The police were alerted that the escaped criminal might be in the ______.', 'vain', 'vicinity', 'court', 'jail', 'B'),
(9, 'Whether you live to eat or eat to live, food is a major ______ in every family''s budget.', 'nutrition', 'expenditure', 'routine', 'provision', 'B'),
(10, 'Now a paper in Science argues that organic chemicals in the rock come mostly from ______ on earth rather than bacteria on Mars.', 'configuration', 'constitution', 'condemnation', 'contamination', 'D'),
(11, 'There is much I enjoy about the changing seasons, but my favorite time is the ______ from fall to winter. ', 'transmission', 'transformation', 'transition', 'transfer', 'C'),
(12, 'I think we need to see an investment ______ before we make an expensive mistake.', 'guide', 'entrepreneur', 'consultant', 'assessor', 'C'),
(13, 'The ______ on this apartment expires in a year''s time. ', 'pensions', 'earnings', 'salaries', 'donations', 'A'),
(14, 'There is supposed to be a safety ______ which makes it impossible for trains to collide.', 'appliance', 'accessory', 'machine', 'mechanism', 'A'),
(15, 'After four years in the same job his enthusiasm finally ______.', 'deteriorated', 'dispersed', 'dissipated', 'drained', 'D'),
(16, 'No one can function properly if they are _______ of adequate sleep.', 'deprived', 'ripped', 'stripped', 'contrived', 'A'),
(17, 'For years now, the people of that faraway country have been cruelly ______  by a dictator.', 'depressed', 'immersed', 'oppressed', 'cursed', 'C'),
(18, 'Ever since the rise of industrialism, education has been ______ towards producing workers.', 'harnessed', 'hatched', 'motivated', 'geared', 'D'),
(19, 'The prospect of increased prices has already ______ worries. ', 'provoked', 'irritated', 'inspired', 'hoisted', 'A'),
(20, 'The suspect ______ that he had not been in the neighbourhood at the time of the crime. ', 'advocated', 'alleged', 'addressed', 'announced', 'B');

-- --------------------------------------------------------

--
-- 表的结构 `quiz_lib`
--

CREATE TABLE IF NOT EXISTS `quiz_lib` (
  `quizid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_1` int(10) NOT NULL,
  `question_2` int(10) NOT NULL,
  `question_3` int(10) NOT NULL,
  `question_4` int(10) NOT NULL,
  `question_5` int(10) NOT NULL,
  `question_6` int(10) NOT NULL,
  `question_7` int(10) NOT NULL,
  `question_8` int(10) NOT NULL,
  `question_9` int(10) NOT NULL,
  `question_10` int(10) NOT NULL,
  PRIMARY KEY (`quizid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `quiz_lib`
--

INSERT INTO `quiz_lib` (`quizid`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) VALUES
(1, 8, 18, 14, 4, 15, 6, 19, 11, 2, 16),
(2, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
(3, 12, 3, 20, 18, 14, 7, 8, 2, 9, 13);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '10bd3f40a4ebb18c8e7165019d352680f5f34bc7', 1268889823, 1396423924, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(4, '172.16.241.131', 'test test', '$2y$08$fdWILk/9NKlmuA5ucmOh0eZdpM0jprKS1Jxwvlw3ZllPMzwPsb5tO', NULL, 'test@test.com', NULL, NULL, NULL, NULL, 1396342543, 1396342543, 1, 'test', 'test', 'test', '111'),
(6, '172.16.241.131', 'f1 l1', '$2y$08$p8gTl5r7FsPJFSzwHaKc7eMfnOXnrjIuymwc7jzYKasgTT0aLKYYe', NULL, 'safsf@sdf.com', NULL, NULL, NULL, NULL, 1396400845, 1396400845, 1, 'f1', 'l1', 'dont know', '353153');

-- --------------------------------------------------------

--
-- 表的结构 `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `userscore_lib`
--

CREATE TABLE IF NOT EXISTS `userscore_lib` (
  `uid` int(11) unsigned NOT NULL,
  `score` int(11) unsigned NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `userscore_lib`
--

INSERT INTO `userscore_lib` (`uid`, `score`, `time`) VALUES
(2, 10, '2014-04-02 07:55:19');

--
-- 限制导出的表
--

--
-- 限制表 `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
--
-- Database: `test`
--
--
-- Database: `webauth`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- 转存表中的数据 `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
