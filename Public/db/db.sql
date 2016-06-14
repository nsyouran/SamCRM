-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 14 日 20:04
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `clientname` varchar(20) NOT NULL COMMENT '//客户名称',
  `addr` varchar(40) NOT NULL COMMENT '//客户地址',
  `tel` varchar(20) NOT NULL COMMENT '//联系电话',
  `contact` varchar(10) NOT NULL,
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '//上次检测时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//客户表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `client`
--

INSERT INTO `client` (`id`, `clientname`, `addr`, `tel`, `contact`, `last_time`) VALUES
(1, '安徽省计量科学研究院', '安徽省合肥市延安路13号', '400-800-888', '张三', '2016-02-29 09:38:38'),
(2, '安徽医科大学第一附属医院', '安徽省合肥市', '88526496', '李四', '2016-02-29 08:19:25'),
(7, '安徽医科大学第二附属医院', '安徽省', '156452155645', '码子', '2016-02-29 09:26:11');

-- --------------------------------------------------------

--
-- 表的结构 `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `state` int(11) NOT NULL,
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `competence`
--

INSERT INTO `competence` (`id`, `group`, `name`, `description`, `state`, `last_time`) VALUES
(1, '用户管理', '用户列表', '', 0, '2016-06-12 08:07:53'),
(2, '用户管理', '添加用户', '', 0, '2016-06-12 08:13:22'),
(3, '用户管理', '删除用户', '', 0, '2016-06-12 08:14:56'),
(4, '用户管理', '修改用户', '', 0, '2016-06-12 08:23:49'),
(5, '权限管理', '权限列表', '', 0, '2016-06-12 08:24:33'),
(6, '权限管理', '添加权限', '', 0, '2016-06-12 08:24:55'),
(7, '权限管理', '删除权限', '', 0, '2016-06-12 08:25:14'),
(8, '权限管理', '修改权限', '', 0, '2016-06-12 08:25:34'),
(9, '用户组管理', '用户组列表', '', 0, '2016-06-12 08:26:52'),
(10, '用户组管理', '添加用户组', '', 0, '2016-06-12 08:27:14'),
(11, '用户组管理', '删除用户组', '', 0, '2016-06-12 08:27:29'),
(12, '用户组管理', '修改用户组', '', 0, '2016-06-12 08:27:43'),
(13, '系统管理', '系统列表', '对系统管理的设置、修改', 0, '2016-06-13 09:50:51'),
(14, '系统管理', '系统xx', '系统xxx', 0, '2016-06-13 10:18:31');

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `competence` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `group`
--

INSERT INTO `group` (`id`, `name`, `description`, `competence`, `state`, `last_time`) VALUES
(1, '管理员更改', '管理员更改', '5,7,1,3,9,11', 0, '2016-06-12 09:10:05'),
(2, '管理员', '管理员', '5,6,1,2,9,10,13', 0, '2016-06-13 10:19:38');

-- --------------------------------------------------------

--
-- 表的结构 `help_file`
--

CREATE TABLE IF NOT EXISTS `help_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `comp_user` varchar(40) NOT NULL,
  `comp_made` varchar(40) NOT NULL,
  `model` varchar(10) NOT NULL,
  `file_name` varchar(40) NOT NULL,
  `save_name` varchar(40) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modify_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `help_file`
--

INSERT INTO `help_file` (`id`, `comp_user`, `comp_made`, `model`, `file_name`, `save_name`, `create_time`, `modify_time`) VALUES
(8, '安徽省第三人民医院', '南京市计量科学研究院', 'Usb-9', '1111.pdf', '5ea9cd4177ccbc4f9c5cffe376c0588b', '2016-04-10 08:00:45', '0000-00-00 00:00:00'),
(9, '安徽省第二人民医院', '北京市计量科学研究院', 'Usb-9', '1111.pdf', '6ca52287a889e2c711b50a02b7f55f4b', '2016-04-10 08:00:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `code` varchar(10) NOT NULL COMMENT '//代号',
  `target` varchar(40) NOT NULL COMMENT '//目标客户id',
  `addr` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `project` varchar(100) NOT NULL,
  `pre_start_date` datetime NOT NULL,
  `pre_cmpl_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `cmpl_date` datetime NOT NULL,
  `certificate_time` datetime NOT NULL,
  `charge_time` datetime NOT NULL,
  `publish_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '//发布时间',
  `accepter` int(11) NOT NULL COMMENT '//接受任务id',
  `accept_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `party` varchar(200) NOT NULL,
  `tools` varchar(200) NOT NULL,
  `step` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//任务表' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `task`
--

INSERT INTO `task` (`id`, `code`, `target`, `addr`, `contact`, `tel`, `project`, `pre_start_date`, `pre_cmpl_date`, `start_date`, `cmpl_date`, `certificate_time`, `charge_time`, `publish_time`, `accepter`, `accept_time`, `party`, `tools`, `step`, `comment`) VALUES
(11, '1111', '安徽省计量科学研究院', '安徽省合肥市延安路13号', '张三', '400-800-888', '气体', '2016-10-05 00:00:00', '2016-11-03 00:00:00', '2016-04-19 12:10:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-19 04:10:28', 2, '2016-04-19 09:19:00', '', '', 1, '请注意安全'),
(9, '89760', '安徽医科大学第一附属医院', '安徽医科大学第一附属医院addr', '第一人', '1111-2222', '气体', '2016-04-11 00:00:00', '2016-04-13 00:00:00', '2016-04-19 12:10:40', '2016-04-19 13:59:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-19 05:59:59', 2, '0000-00-00 00:00:00', '', '', 2, ''),
(10, '89761', '安徽医科大学第二附属医院', '安徽医科大学第二附属医院', '第二人', '2222-3333', '化学', '2016-04-12 00:00:00', '2016-04-16 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-19 06:01:55', 2, '2016-04-19 14:01:54', '', '', 0, ''),
(12, '1198', '安徽医科大学第二附属医院', '安徽省二测', '码子1', '156452155645001', '医疗、气体', '2015-06-10 00:00:01', '2015-06-12 00:00:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-21 04:20:13', 1, '2016-04-21 12:20:12', '', '', 0, '注意安全啊啊啊啊'),
(13, '1111', '安徽医科大学第一附属医院', '安徽省合肥市addr', '李四er', '885264961241', '气体', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-19 14:22:28', '0000-00-00 00:00:00', '2016-04-19 14:22:59', '2016-04-19 14:23:06', '2016-04-19 06:23:07', 2, '2016-04-19 14:22:07', '', '', 4, ''),
(14, '12321', '铜陵有色', '铜陵有色地址', '程某某', '123456789', '气体', '2016-05-12 00:00:00', '2016-05-15 00:00:00', '2016-05-12 13:54:28', '0000-00-00 00:00:00', '2016-05-12 13:55:05', '2016-05-12 13:55:17', '2016-05-12 05:55:57', 9, '2016-05-12 13:55:56', '', '', 4, '注意安全'),
(15, '1116557', '安徽省计量科学研究院', '安徽省合肥市延安路16号', '张三二', '400-800-111', '测试', '2016-05-18 00:00:00', '2016-05-21 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-05-18 06:06:05', 1, '2016-05-18 14:06:04', '', '', 0, '是的'),
(16, '1111', '安徽医科大学第一附属医院', '安徽省合肥市', '李四', '88526496', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-06-08 08:38:19', 0, '0000-00-00 00:00:00', '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `tool`
--

CREATE TABLE IF NOT EXISTS `tool` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `toolname` varchar(20) NOT NULL COMMENT '//工具名称',
  `valid_date` date NOT NULL,
  `keeper` varchar(10) NOT NULL COMMENT '//保管人',
  `position` varchar(10) NOT NULL COMMENT '//位置',
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//工具表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tool`
--

INSERT INTO `tool` (`id`, `toolname`, `valid_date`, `keeper`, `position`, `last_time`) VALUES
(1, '血滴子', '2016-04-09', '宁海峰', '实验室', '0000-00-00 00:00:00'),
(2, '屠龙刀', '2016-04-19', '宁海峰', '光明顶', '0000-00-00 00:00:00'),
(5, '阿凡达', '2016-04-25', '爱迪生', '是的', '0000-00-00 00:00:00'),
(4, '倚天剑', '2016-05-31', '宁海峰', '武当山', '0000-00-00 00:00:00'),
(6, '流量控制仪', '2017-03-24', '宁海峰', '气体实验室', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '_id',
  `username` varchar(5) NOT NULL COMMENT '//用户名',
  `password` char(32) NOT NULL COMMENT '//密码',
  `email` varchar(20) NOT NULL COMMENT '//岗位',
  `tel` char(18) NOT NULL COMMENT '//电话',
  `group` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '//权限',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='//用户' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `tel`, `group`, `state`, `last_time`, `description`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '13965054218', 2, 0, '2016-06-13 10:53:22', ''),
(10, 'root', 'root', 'root@root.com1', 'root1', 2, 0, '2016-06-13 10:53:37', 'root@root.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
