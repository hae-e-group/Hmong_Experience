-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-08-03 06:19
-- 서버 버전: 8.0.16
-- PHP 버전: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hmong`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `book`
--

CREATE TABLE `book` (
  `pk` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  `name` text,
  `email` text,
  `phone` text,
  `date` date DEFAULT NULL,
  `hour` text,
  `min` text,
  `a_p` text,
  `program` int(11) DEFAULT NULL,
  `guest` tinyint(4) DEFAULT NULL,
  `language` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `book`
--

INSERT INTO `book` (`pk`, `state`, `name`, `email`, `phone`, `date`, `hour`, `min`, `a_p`, `program`, `guest`, `language`, `comment`) VALUES
(1, 0, 'Hong Eunseok', 'egg6909@gmail.com', '010-3020-6909', '2019-07-27', '3', '20', 'AM', 2, 5, '한국어', '잘해주세요 ^^;'),
(2, 1, 'Hong Eunseok2', 'egg6909@gmail.com', '010-3020-6901', '2019-12-27', '3', '20', 'AM', 2, 5, '한국어', '잘해주세요 ^^;');

-- --------------------------------------------------------

--
-- 테이블 구조 `contact`
--

CREATE TABLE `contact` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `org` text,
  `about` mediumtext,
  `facebook` text,
  `instagram` text,
  `image` text,
  `skill` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `contact`
--

INSERT INTO `contact` (`pk`, `name`, `org`, `about`, `facebook`, `instagram`, `image`, `skill`) VALUES
(15, 'Eunseok Hong', 'Samsung Electronic', 'DDDDD KOKOKO', 'eggfefef@naver.com', 'vdsvdsv', '', 'aa');

-- --------------------------------------------------------

--
-- 테이블 구조 `inbox`
--

CREATE TABLE `inbox` (
  `pk` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` mediumtext NOT NULL,
  `message` longtext NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `inbox`
--

INSERT INTO `inbox` (`pk`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Eunseok', 'egg6909@gmail.com', '서브젝 제목은 몰까요', '그냥 메시지 메시지 보내는거지 그런거야?'),
(2, 'JeeJee', 'JeeJee@gmail.com', 'JeeJee JEE Jdd Jii', 'wefewfwefkew0i243jr9r2\r\n3fwejwejfsldjfas\r\n^&%^&gjeoirgjreiogjweiopfjewiofjweipfjewf.wef');

-- --------------------------------------------------------

--
-- 테이블 구조 `lecturer`
--

CREATE TABLE `lecturer` (
  `pk` int(11) NOT NULL,
  `contact_pk` int(11) NOT NULL,
  `program_pk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `lecturer`
--

INSERT INTO `lecturer` (`pk`, `contact_pk`, `program_pk`) VALUES
(1, 14, 12),
(9, 15, 13);

-- --------------------------------------------------------

--
-- 테이블 구조 `program`
--

CREATE TABLE `program` (
  `pk` int(11) NOT NULL,
  `title` text NOT NULL,
  `contents` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `detail` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `price` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `time` text NOT NULL,
  `video` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display` tinyint(4) NOT NULL DEFAULT '1',
  `class` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `program`
--

INSERT INTO `program` (`pk`, `title`, `contents`, `detail`, `price`, `time`, `video`, `image`, `display`, `class`) VALUES
(12, 'weewfxzc', 'wefwefxcv', 'wefewxzcv', 'ewfwefxzcv', 'wefxcz', 'fewfzcxv', '', 1, 0),
(13, 'xcvxcv', 'sdvds', 'vsdvdsv', 'sdv', 'dsvds', 'vsdvsdvds', '', 1, 2);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`pk`);

--
-- 테이블의 인덱스 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`pk`);

--
-- 테이블의 인덱스 `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`pk`);

--
-- 테이블의 인덱스 `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`pk`);

--
-- 테이블의 인덱스 `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`pk`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 테이블의 AUTO_INCREMENT `inbox`
--
ALTER TABLE `inbox`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `program`
--
ALTER TABLE `program`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
