-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-05-16 00:26:20
-- 服务器版本： 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sky_finacial`
--

-- --------------------------------------------------------

--
-- 表的结构 `sky_account_node`
--

CREATE TABLE `sky_account_node` (
  `id` int(11) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `pid` int(4) NOT NULL,
  `del` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sky_account_node`
--

INSERT INTO `sky_account_node` (`id`, `account_name`, `pid`, `del`) VALUES
(1, '收入', 0, 0),
(2, '费用', 0, 0),
(5, '管理费用', 2, 0),
(6, '基本工资', 5, 0),
(7, '效益工资', 5, 0),
(8, '注册工资', 5, 0),
(9, '办公费', 5, 0),
(10, '公积金', 5, 0),
(11, '主营业务收入', 1, 0),
(20, '其他业务收入', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `sky_detial`
--

CREATE TABLE `sky_detial` (
  `id` int(11) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `account_id` int(4) NOT NULL,
  `money` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `del` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sky_detial`
--

INSERT INTO `sky_detial` (`id`, `account_name`, `account_id`, `money`, `date`, `user`, `del`) VALUES
(1, '主营业务收入', 0, 1111, '1507564800', '', 0),
(2, '主营业务收入', 0, 9999, '', '', 0),
(3, '基本工资', 0, 8888, '1493654400', '', 0),
(4, '其他业务收入', 0, 4444, '1493654400', '', 0),
(5, '注册工资', 0, 9999, '1493654400', '', 0),
(6, '办公费', 0, 2222, '1493740800', '', 0),
(7, '主营业务收入', 11, 9999, '1493740800', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sky_user`
--

CREATE TABLE `sky_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sky_user`
--

INSERT INTO `sky_user` (`id`, `username`, `password`, `ip`, `date`) VALUES
(1, '李丽莹', '1', '111.666.888.999', '1493546335');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sky_account_node`
--
ALTER TABLE `sky_account_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_detial`
--
ALTER TABLE `sky_detial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sky_user`
--
ALTER TABLE `sky_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `sky_account_node`
--
ALTER TABLE `sky_account_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `sky_detial`
--
ALTER TABLE `sky_detial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `sky_user`
--
ALTER TABLE `sky_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
