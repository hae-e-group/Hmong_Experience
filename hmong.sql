-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 19-08-03 11:15
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
  `detail` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `duration` text,
  `cost` text,
  `start_date` text,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display` tinyint(4) NOT NULL DEFAULT '1',
  `class` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `program`
--

INSERT INTO `program` (`pk`, `title`, `detail`, `image`, `duration`, `cost`, `start_date`, `display`, `class`) VALUES
(23, 'Professional Weaving Class', '<h1 style=\"margin-bottom: 1rem; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"><span style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-weight: bolder;\">1. Overview</span></h1><h2 style=\"margin-bottom: 1rem; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\">Traditional weaving skill of Hmong is already well-known worldwide. In this course, you’ll have a professional weaving skill and also be prepared to start your own craft shop.</h2><p><br style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\"></p><h1 style=\"margin-bottom: 1rem; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"><span style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-weight: bolder;\">2. What you’ll experience</span></h1><p style=\"margin-bottom: 1rem; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\">On this Professional Weaving course, you will:<br style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px;\"></p><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Get experience with Hmong traditional craft tools</li><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Learn how to use craft tools</li><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Develop your weaving skill with weaving experts</li><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Understand the meaning of various hmong patterns</li><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Be able to create your own pattern</li><li style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\">Study business skills including how to manage a craft shop for tourists.</li><p style=\"margin-bottom: 1rem; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"></p><p><br style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; color: rgb(165, 165, 165); font-family: Raleway, sans-serif; font-size: 14px;\"></p><h1 style=\"margin-bottom: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"><span style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-weight: bolder;\">3. Course Curriculum</span></h1><p style=\"margin-bottom: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"><span style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-weight: bolder;\"><br></span></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td>Month 1</td><td>Month 2</td><td>Month 3</td><td>Month 4</td><td>Month 5</td><td>Month 6</td></tr><tr><td>Cource detail</td><td>Learn about craft tools and how to use them</td><td>Understand the meaning of Hmong pattern</td><td>Make a product using thread and needles</td><td>Make a product using loom</td><td>Learn about more complicated skills</td><td>Study business skills for open your own shop</td></tr></tbody></table><p style=\"margin-bottom: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-family: Raleway, sans-serif; font-size: 15px; line-height: 2; color: rgb(109, 109, 109);\"><span style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-shadow: rgba(0, 0, 0, 0.01) 0px 0px 1px; font-weight: bolder;\"><br></span></p>', '', 'DURATION: Total 6 months / 2 hours per week', 'COURSE COSTS: To be confirmed', 'START DATE: To be confirmed', 1, 2),
(24, 'Make a Magnet', '<p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-ef5f5b22-7fff-f31e-105e-7f6d3fdecf29\"><br></b></p><ol style=\"margin-top:0pt;margin-bottom:0pt;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Overview</span></p></li></ol><p dir=\"ltr\" style=\"line-height:1.2;text-indent: -38pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 0pt 38pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The Hmong makes patterns with various meanings of their lives. In this course, you’ll learn about the meaning of those patterns and how to make them. After this course, you’ll get a beautiful magnet with unique pattern which has your own meaning.</span></p><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\"><br></b></p><ol style=\"margin-top:0pt;margin-bottom:0pt;\" start=\"2\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">What you’ll experience</span></p></li></ol><p dir=\"ltr\" style=\"line-height:1.2;text-indent: -38pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 0pt 38pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">On this course, you will:</span></p><ul style=\"margin-top:0pt;margin-bottom:0pt;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Get experience with Hmong traditional craft tools</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Learn how to use craft tools</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Understand the meaning of various Hmong patterns</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Be able to create your own pattern</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Get a beautiful magnet with your own pattern</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\"><br></b></p><ol style=\"margin-top:0pt;margin-bottom:0pt;\" start=\"3\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Course Curriculum</span></p></li></ol><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"></p><ul style=\"margin-top:0pt;margin-bottom:0pt;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Experience the Hmong’s loom (15mins)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Learn about the meaning of various patterns (10mins)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Make your unique pattern (5mins)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Learn how to weave with thread and needles (20mins)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Make a magnet (30mins)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 40pt;padding-left: 2pt;\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:\'Malgun Gothic\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Taste the Hmong Traditional Tea (10mins) </span></p></li></ul>', '', 'TOTAL REQUIRED TIME: 90mins', 'COURSE COSTS: To be confirmed', 'PARTICIPANTS: Up to 30', 1, 1);

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
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
