-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-09-10 20:41:09
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
-- 数据库： `aqwb`
--
CREATE DATABASE IF NOT EXISTS `aqwb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `aqwb`;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `wid` int(4) NOT NULL COMMENT '文章ID',
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '文章标题',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '文章内容',
  `riqi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '发布时间',
  `zuozhe` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '作者',
  `zuozid` int(8) DEFAULT NULL COMMENT '文章作者的ID',
  `QQ2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci DEFAULT NULL COMMENT 'QQ',
  `yangs` int(3) DEFAULT NULL COMMENT '字体样式'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`wid`, `title`, `content`, `riqi`, `zuozhe`, `zuozid`, `QQ2`, `yangs`) VALUES
(1, '欢迎各位朋友们', '当你看见这个文章时，就代表着“阿清微博”正式发布。感谢你们的支持，也感谢@星创 大佬提供的技术', '2023-08-18/19:45:38', '言希·官方', 10000, '1148246926', 3),
(2, '你干嘛啊', '我喜欢黄姿涵和李丹！白告geigei', '2023-08-18/20:58:11', '你干嘛啊', 10001, '2043565143', 3),
(3, '你干嘛啊', '我喜欢黄姿涵和李丹！白告geigei', '2023-08-18/20:59:11', '你干嘛啊', 10001, '2043565143', 3),
(4, '文章标题违规', '违规！我妈叫我从小不要造瑶 ，长大后我明白了，不是每个人都有妈', '2023-08-20/13:13:02', '言端', 10004, '1148246926', 2),
(6, '跑路了！兄弟们！10天后回！', '跑路了！兄弟们！10天后回！看谁跑得最快，干了兄弟们，不服我在厦门来抓我。我滚回来更新了-2023/8/29', '2023-08-21/12:43:36', '言希·官方', 10000, '1148246926', 2),
(7, '测试图片', '<img src=\"https://huiyi0923.github.io/data/网站介绍.png\" alt=\"\">', '2023-08-21/15:12:32', '言希·官方', 10000, '1148246926', 1),
(8, '错过了再也回不来了！我要去看大海！', '<img src=\"https://huiyi0923.github.io/data/AQ背景.jpeg\" alt=\"\">', '2023-08-24/17:23:13', '言希·官方', 10000, '1148246926', 2),
(9, '黄，我爱你', 'http://weiqing.1ao.top/data/song.html', '2023-09-10/14:27:18', '你干嘛啊', 10001, '2043565143', 3),
(10, '致最伟大的——魁拔', 'http://weiqing.1ao.top/data/kuiba.html', '2023-09-10/14:47:39', '你干嘛啊', 10001, '2043565143', 1),
(11, '致最伟大的——魁拔', 'http://weiqing.1ao.top/data/kuiba.html', '2023-09-10/14:48:40', '你干嘛啊', 10001, '2043565143', 1),
(12, '停更通知', '服务器到期了，只能跑路了拜拜了。期待下次见面', '2023-09-10/20:00:30', '言希·官方', 10000, '1148246926', 2);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `pid` int(8) NOT NULL COMMENT 'ID',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '评论内容',
  `zuozheid` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '作者ID',
  `bprzuozid` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '被评论的作者ID	',
  `riqi` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '日期',
  `zuozhe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '作者',
  `bprid` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '被评论的作者ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`pid`, `content`, `zuozheid`, `bprzuozid`, `riqi`, `zuozhe`, `bprid`) VALUES
(1, '欢迎大家来评论！', '10000', '1', '2023-08-18/20:04:20', '言希·官方', '10000'),
(2, '我去，已截图。嘿嘿！！', '10000', '2', '2023-08-18/20:59:37', '言希·官方', '10001'),
(3, '已截图，已截图！', '10000', '3', '2023-08-18/21:00:46', '言希·官方', '10001'),
(4, '你个屌毛', '', '1', '2023-08-19/04:01:49', NULL, NULL),
(5, '你个屌毛', '', '1', '2023-08-19/04:02:49', NULL, NULL),
(6, '卧槽！', '10000', '1', '2023-08-19/15:14:34', '言希·官方', '10000'),
(7, '你卡BUG进来的吧！数据库没你名字，崩溃了又要加班', '10000', '1', '2023-08-19/15:17:36', '言希·官方', '10000'),
(8, '已修复！已修复！', '10000', '1', '2023-08-19/15:25:37', '言希·官方', '10000'),
(9, '牛逼666', '10004', '1', '2023-08-19/16:15:03', '言端', '10000'),
(10, '卧槽你过分了', '10000', '4', '2023-08-20/14:03:54', '言希·官方', '10004'),
(11, '666牛逼', '10004', '6', '2023-08-23/16:47:28', '言端', '10000'),
(12, '泰裤辣', '10004', '3', '2023-09-03/16:14:26', '言端', '10001'),
(13, 'http://weiqing.1ao.top/data/song.html', '10001', '9', '2023-09-10/14:28:02', '你干嘛啊', '10001'),
(14, '太酷啦', '10000', '9', '2023-09-10/20:01:28', '言希·官方', '10001'),
(15, '太酷啦', '10000', '11', '2023-09-10/20:01:41', '言希·官方', '10001'),
(16, '明天只能跑路了', '10000', '10', '2023-09-10/20:02:13', '言希·官方', '10001');

-- --------------------------------------------------------

--
-- 表的结构 `liuran`
--

CREATE TABLE `liuran` (
  `zid` int(8) NOT NULL COMMENT 'id',
  `zonglr` int(30) DEFAULT NULL COMMENT '总浏览',
  `zongdy` int(30) DEFAULT NULL COMMENT '总调用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `liuran`
--

INSERT INTO `liuran` (`zid`, `zonglr`, `zongdy`) VALUES
(1, 8, 7);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(8) NOT NULL COMMENT 'ID',
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '用户名',
  `jianjie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '简介',
  `QQ` varchar(30) DEFAULT NULL COMMENT 'QQ',
  `zhucsj` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '注册时间',
  `mima` int(8) DEFAULT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `jianjie`, `QQ`, `zhucsj`, `mima`) VALUES
(10000, '言希·官方', '微清网络，你的热爱！我想要去看大海！', '1148246926', '2023-08-18/15:25:36', 9098734),
(10001, '你干嘛啊', '“违规”嫖娼陈小明！', '2043565143', '2023-08-18/20:34:11', 12345678),
(10002, '过客', NULL, '123456', '2023-08-18/21:27:44', 123456),
(10003, '过客', NULL, '123456', '2023-08-18/21:28:42', 123456),
(10004, '言端', '我是菜鸟', '1148246926', '2023-08-19/15:53:03', 9098734),
(10005, '红颜', NULL, '2316354133', '2023-08-21/00:04:00', 123456);

--
-- 转储表的索引
--

--
-- 表的索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`wid`);

--
-- 表的索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`pid`);

--
-- 表的索引 `liuran`
--
ALTER TABLE `liuran`
  ADD PRIMARY KEY (`zid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `wid` int(4) NOT NULL AUTO_INCREMENT COMMENT '文章ID', AUTO_INCREMENT=13;

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `pid` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `liuran`
--
ALTER TABLE `liuran`
  MODIFY `zid` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=10006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
