-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 2 朁E01 日 15:34
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_work_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `employ_id` int(6) NOT NULL,
  `employ_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `employ_yomi` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employ_birthday` date NOT NULL,
  `employ_hiredate` date NOT NULL,
  `employ_Hwage` int(5) NOT NULL,
  `employ_memo` text COLLATE utf8_unicode_ci,
  `employ_regidate` datetime NOT NULL,
  `employ_updatetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `employ_id`, `employ_name`, `employ_yomi`, `employ_birthday`, `employ_hiredate`, `employ_Hwage`, `employ_memo`, `employ_regidate`, `employ_updatetime`) VALUES
(1, 100001, '佐藤 翔太', 'さとう しょうた', '1976-02-06', '2014-01-01', 1400, '直接入力', '2018-01-25 00:00:00', '2018-01-25 00:00:00'),
(2, 100002, '山田 電機', 'ヤマダ デンキ', '1980-01-01', '2014-02-01', 1200, 'まだまだ安いんだ', '2018-01-25 22:37:24', '2018-01-25 22:37:24'),
(3, 100003, '寿司 太郎', 'すし たろう', '1990-07-14', '2014-02-09', 1000, '牛繁からスシローへ', '2018-01-27 18:11:11', '2018-01-29 00:59:03'),
(4, 300004, '吉田 茂', 'よしだ しげる', '1927-05-06', '2014-03-13', 1000, 'ばかやろー', '2018-01-28 23:45:39', '2018-01-29 00:55:10'),
(5, 100005, '佐藤 栄作', 'さとう えいさく', '1936-08-14', '2014-03-13', 1100, 'A', '2018-01-29 00:41:51', '2018-01-29 00:41:51'),
(6, 100006, '吉田 松蔭', 'よしだ しょういん', '1830-09-20', '2014-03-31', 1600, '松下村塾', '2018-01-29 22:09:36', '2018-01-29 22:09:36'),
(7, 100007, '滝 廉太郎', 'たき れんたろう', '1879-08-24', '2014-04-01', 1240, '荒城の月', '2018-01-29 22:12:20', '2018-01-29 22:12:20'),
(8, 100008, '野田 佳彦', 'のだ よしひこ', '1957-05-20', '2014-04-01', 1200, 'memomemo', '2018-01-29 22:14:51', '2018-01-29 22:14:51'),
(9, 100009, '鳩山 由紀夫', 'はとやま ゆきお', '1947-02-11', '2014-04-01', 1200, '民主党', '2018-01-29 22:16:38', '2018-01-29 22:16:38'),
(10, 100010, '麻生 太郎', 'あそう たろう', '1940-09-20', '2014-04-01', 1200, '', '2018-01-29 22:18:08', '2018-01-29 22:18:08'),
(11, 100011, '福田 康夫', 'ふくだ やすお', '1936-07-16', '2014-04-01', 1200, 'ふくちゃん', '2018-01-29 22:18:54', '2018-01-29 22:18:54'),
(12, 100012, '安倍 晋三', 'あべ しんぞう', '1954-09-21', '2014-04-01', 1200, '', '2018-01-29 22:19:39', '2018-01-29 22:19:39'),
(13, 100013, '小泉 純一郎', 'こいずみ じゅんいちろう', '1942-01-08', '2014-04-01', 1200, 'らいおんハート', '2018-01-29 22:20:34', '2018-01-29 22:20:34'),
(14, 100014, '森 喜朗', 'もり よしろう', '1937-07-14', '2014-04-01', 1200, '', '2018-01-29 22:21:15', '2018-01-29 22:21:15'),
(15, 100015, '小渕 恵三', 'おぶち けいぞう', '1937-06-25', '2014-04-01', 1200, '', '2018-01-29 22:21:58', '2018-01-29 22:21:58'),
(16, 100016, '橋本 龍太郎', 'はしもと りゅうたろう', '1937-07-29', '2014-04-01', 1200, '', '2018-01-29 22:22:40', '2018-01-29 22:22:40');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'gaisho', 'gaisho', '1234', 0, 1),
(2, 'test', 'test', 'PASS@123', 0, 0),
(4, 'test3', 'test333', '3333', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
