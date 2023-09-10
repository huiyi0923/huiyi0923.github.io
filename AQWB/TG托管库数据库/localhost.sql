-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-09-10 20:46:15
-- 服务器版本： 5.7.40-log
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tgk`
--
CREATE DATABASE IF NOT EXISTS `tgk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tgk`;

-- --------------------------------------------------------

--
-- 表的结构 `tgwz`
--

CREATE TABLE `tgwz` (
  `id` int(8) NOT NULL COMMENT 'ID',
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '标题',
  `zhuozid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '作者ID',
  `scsj` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `tgwz`
--

INSERT INTO `tgwz` (`id`, `title`, `zhuozid`, `scsj`) VALUES
(1, '01.html', NULL, '2023-09-02 16:29:14'),
(2, '02.html', NULL, '2023-09-02 16:30:10'),
(5, 'my.html', '10000', '2023-09-02 20:01:13'),
(6, 'sy.html', '10000', '2023-09-02 21:33:29'),
(7, 'xxx.txt', '10002', '2023-09-03 21:07:09'),
(9, 'hsy.jpg', '10000', '2023-09-04 19:52:41'),
(11, '666.html', '10002', '2023-09-04 22:08:35'),
(12, '最后一页.mp3', '10000', '2023-09-05 11:04:01'),
(14, '丹.html', '10002', '2023-09-05 13:15:30'),
(16, 'you.html', '10002', '2023-09-05 15:18:38'),
(17, 'han.html', '10002', '2023-09-05 15:20:09'),
(18, 'love.html', '10000', '2023-09-05 18:32:45'),
(19, 'song.html', '10002', '2023-09-10 13:26:38'),
(20, 'kuiba.html', '10002', '2023-09-10 13:55:28'),
(21, 'dan.html', '10002', '2023-09-10 17:56:10');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(30) DEFAULT NULL COMMENT '用户名',
  `mima` varchar(30) DEFAULT NULL COMMENT '密码',
  `QQ` varchar(30) DEFAULT NULL COMMENT 'QQ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `mima`, `QQ`) VALUES
(10000, '言希', '09098734', '1148246926'),
(10001, '言端', '09098734', '1148246926'),
(10002, '10001', '12345678', '2043565143');

--
-- 转储表的索引
--

--
-- 表的索引 `tgwz`
--
ALTER TABLE `tgwz`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tgwz`
--
ALTER TABLE `tgwz`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
