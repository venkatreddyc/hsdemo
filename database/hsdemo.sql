-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2013 at 08:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `hs_activities`
--

CREATE TABLE IF NOT EXISTS `hs_activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=215 ;

--
-- Dumping data for table `hs_activities`
--

INSERT INTO `hs_activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: ::1', 'users', '2013-01-18 09:16:12', 0),
(2, 1, 'created a new User: Mahesh Bani', 'users', '2013-01-18 09:17:59', 0),
(3, 1, 'modified user: Mahesh Bani', 'users', '2013-01-18 09:18:27', 0),
(4, 1, 'App settings saved from: ::1', 'core', '2013-01-18 09:19:39', 0),
(5, 1, 'logged out from: ::1', 'users', '2013-01-18 09:19:52', 0),
(6, 2, 'logged in from: ::1', 'users', '2013-01-18 09:20:05', 0),
(7, 2, 'logged in from: ::1', 'users', '2013-01-18 11:46:23', 0),
(8, 2, 'logged in from: ::1', 'users', '2013-01-18 17:54:32', 0),
(9, 2, 'logged out from: ::1', 'users', '2013-01-18 17:54:57', 0),
(10, 2, 'logged in from: ::1', 'users', '2013-01-19 05:18:09', 0),
(11, 2, 'logged out from: ::1', 'users', '2013-01-19 05:20:33', 0),
(12, 2, 'logged in from: ::1', 'users', '2013-01-19 06:20:27', 0),
(13, 2, 'logged out from: ::1', 'users', '2013-01-19 06:52:19', 0),
(14, 2, 'logged in from: ::1', 'users', '2013-01-19 07:04:50', 0),
(15, 2, 'logged out from: ::1', 'users', '2013-01-19 07:20:53', 0),
(16, 2, 'logged in from: ::1', 'users', '2013-01-19 08:27:57', 0),
(17, 2, 'logged out from: ::1', 'users', '2013-01-19 08:31:15', 0),
(18, 2, 'logged in from: ::1', 'users', '2013-01-19 08:31:33', 0),
(19, 2, 'logged out from: ::1', 'users', '2013-01-19 08:34:05', 0),
(20, 2, 'logged in from: ::1', 'users', '2013-01-19 08:34:14', 0),
(21, 2, 'Created Module: student : ::1', 'modulebuilder', '2013-01-19 09:07:49', 0),
(22, 2, 'logged out from: ::1', 'users', '2013-01-19 09:10:08', 0),
(23, 2, 'logged in from: ::1', 'users', '2013-01-19 09:10:19', 0),
(24, 2, 'Created record with ID: 1 : ::1', 'student', '2013-01-19 09:10:52', 0),
(25, 2, 'Created record with ID: 2 : ::1', 'student', '2013-01-19 09:11:32', 0),
(26, 2, 'Created Module: property : ::1', 'modulebuilder', '2013-01-19 11:19:28', 0),
(27, 2, 'Created record with ID: 1 : ::1', 'property', '2013-01-19 11:56:45', 0),
(28, 2, 'Deleted Module: property : ::1', 'builder', '2013-01-19 11:58:40', 0),
(29, 2, 'Created Module: property : ::1', 'modulebuilder', '2013-01-19 12:03:01', 0),
(30, 2, 'Deleted Module: property : ::1', 'builder', '2013-01-19 12:17:15', 0),
(31, 2, 'Created Module: property : ::1', 'modulebuilder', '2013-01-19 12:19:09', 0),
(32, 2, 'Created Module: visits : ::1', 'modulebuilder', '2013-01-19 12:27:20', 0),
(33, 2, 'logged out from: ::1', 'users', '2013-01-19 13:31:03', 0),
(34, 2, 'logged in from: ::1', 'users', '2013-01-19 13:31:11', 0),
(35, 2, 'Created record with ID: 1 : ::1', 'property', '2013-01-19 13:42:14', 0),
(36, 2, 'Created record with ID: 2 : ::1', 'property', '2013-01-19 15:47:12', 0),
(37, 2, 'Created record with ID: 3 : ::1', 'property', '2013-01-19 16:23:19', 0),
(38, 2, 'Created record with ID: 4 : ::1', 'property', '2013-01-19 16:24:14', 0),
(39, 2, 'Created record with ID: 1 : ::1', 'visits', '2013-01-19 16:39:15', 0),
(40, 2, 'logged in from: ::1', 'users', '2013-01-19 19:11:31', 0),
(41, 2, 'logged in from: ::1', 'users', '2013-01-20 04:24:26', 0),
(42, 2, 'Updated record with ID: 1 : ::1', 'property', '2013-01-20 05:43:32', 0),
(43, 2, 'logged out from: ::1', 'users', '2013-01-20 09:26:32', 0),
(44, 2, 'logged in from: ::1', 'users', '2013-01-20 09:26:41', 0),
(45, 2, 'Created record with ID: 5 : ::1', 'property', '2013-01-20 14:19:42', 0),
(46, 2, 'Created record with ID: 6 : ::1', 'property', '2013-01-20 14:19:58', 0),
(47, 2, 'Created record with ID: 7 : ::1', 'property', '2013-01-20 14:20:15', 0),
(48, 2, 'Updated record with ID: 6 : ::1', 'property', '2013-01-20 14:49:41', 0),
(49, 2, 'Created record with ID: 2 : ::1', 'visits', '2013-01-20 15:21:25', 0),
(50, 2, 'Created record with ID: 3 : ::1', 'visits', '2013-01-20 15:21:39', 0),
(51, 2, 'logged in from: ::1', 'users', '2013-01-21 03:50:01', 0),
(52, 2, 'Created record with ID: 4 : ::1', 'visits', '2013-01-21 04:05:40', 0),
(53, 2, 'Created record with ID: 5 : ::1', 'visits', '2013-01-21 04:05:59', 0),
(54, 2, 'Created record with ID: 6 : ::1', 'visits', '2013-01-21 04:14:26', 0),
(55, 2, 'logged out from: ::1', 'users', '2013-01-21 07:12:04', 0),
(56, 2, 'logged in from: ::1', 'users', '2013-01-21 07:12:11', 0),
(57, 2, 'Created record with ID: 7 : ::1', 'visits', '2013-01-21 11:29:28', 0),
(58, 2, 'Created record with ID: 8 : ::1', 'visits', '2013-01-21 11:30:11', 0),
(59, 2, 'logged in from: ::1', 'users', '2013-01-22 07:30:31', 0),
(60, 2, 'logged out from: ::1', 'users', '2013-01-22 10:23:58', 0),
(61, 2, 'logged in from: ::1', 'users', '2013-01-22 10:25:55', 0),
(62, 2, 'logged out from: ::1', 'users', '2013-01-22 10:35:43', 0),
(63, 3, 'registered a new account.', 'users', '2013-01-22 10:38:04', 0),
(64, 3, 'logged in from: ::1', 'users', '2013-01-22 10:38:17', 0),
(65, 3, 'logged out from: ::1', 'users', '2013-01-22 10:38:59', 0),
(66, 2, 'logged in from: ::1', 'users', '2013-01-22 10:39:08', 0),
(67, 2, 'deleted user: habitech', 'users', '2013-01-22 10:39:18', 0),
(68, 2, 'logged out from: ::1', 'users', '2013-01-22 10:39:49', 0),
(69, 4, 'registered a new account.', 'users', '2013-01-22 10:41:00', 0),
(70, 4, 'logged in from: ::1', 'users', '2013-01-22 10:41:10', 0),
(71, 4, 'logged out from: ::1', 'users', '2013-01-22 10:41:39', 0),
(72, 2, 'logged in from: ::1', 'users', '2013-01-22 10:41:47', 0),
(73, 2, ': habi : Deactivateed', 'users', '2013-01-22 10:43:07', 0),
(74, 2, 'created a new : habi', 'users', '2013-01-22 10:48:40', 0),
(75, 2, 'logged out from: ::1', 'users', '2013-01-22 10:48:56', 0),
(76, 2, 'logged in from: ::1', 'users', '2013-01-22 10:49:53', 0),
(77, 2, 'created a new : habi', 'users', '2013-01-22 10:53:21', 0),
(78, 2, ': habi : Activateed', 'users', '2013-01-22 10:54:00', 0),
(79, 2, 'logged out from: ::1', 'users', '2013-01-22 10:54:08', 0),
(80, 2, 'logged in from: ::1', 'users', '2013-01-22 10:54:18', 0),
(81, 2, 'logged out from: ::1', 'users', '2013-01-22 10:54:36', 0),
(82, 2, 'logged in from: ::1', 'users', '2013-01-22 10:55:19', 0),
(83, 2, 'logged out from: ::1', 'users', '2013-01-22 10:56:29', 0),
(84, 7, 'registered a new account.', 'users', '2013-01-22 10:57:09', 0),
(85, 2, 'logged in from: ::1', 'users', '2013-01-22 10:58:12', 0),
(86, 2, 'created a new : suresh', 'users', '2013-01-22 11:02:25', 0),
(87, 2, 'logged out from: ::1', 'users', '2013-01-22 11:02:39', 0),
(88, 2, 'logged in from: ::1', 'users', '2013-01-22 11:03:05', 0),
(89, 2, 'logged out from: ::1', 'users', '2013-01-22 11:05:40', 0),
(90, 9, 'registered a new account.', 'users', '2013-01-22 11:06:42', 0),
(91, 2, 'logged in from: ::1', 'users', '2013-01-22 11:07:16', 0),
(92, 2, 'created a new : habitech', 'users', '2013-01-22 11:13:51', 0),
(93, 2, 'logged out from: ::1', 'users', '2013-01-22 11:15:56', 0),
(94, 2, 'logged in from: ::1', 'users', '2013-01-22 11:16:11', 0),
(95, 2, 'created a new User: Suresh@123', 'users', '2013-01-22 11:23:03', 0),
(96, 2, 'logged out from: ::1', 'users', '2013-01-22 11:23:26', 0),
(97, 11, 'logged in from: ::1', 'users', '2013-01-22 11:23:40', 0),
(98, 11, 'logged out from: ::1', 'users', '2013-01-22 11:39:19', 0),
(99, 11, 'logged in from: ::1', 'users', '2013-01-22 11:40:34', 0),
(100, 11, 'logged in from: ::1', 'users', '2013-01-22 12:22:34', 0),
(101, 11, 'logged out from: ::1', 'users', '2013-01-22 12:23:23', 0),
(102, 2, 'logged in from: ::1', 'users', '2013-01-22 12:23:35', 0),
(103, 11, 'Created record with ID: 8 : ::1', 'property', '2013-01-22 12:24:23', 0),
(104, 11, 'Created record with ID: 9 : ::1', 'visits', '2013-01-22 12:24:50', 0),
(105, 11, 'Created record with ID: 9 : ::1', 'property', '2013-01-22 13:45:11', 0),
(106, 2, 'logged out from: ::1', 'users', '2013-01-22 15:37:09', 0),
(107, 11, 'logged out from: ::1', 'users', '2013-01-22 15:37:22', 0),
(108, 11, 'logged in from: ::1', 'users', '2013-01-22 15:39:37', 0),
(109, 2, 'logged in from: ::1', 'users', '2013-01-23 07:49:41', 0),
(110, 2, 'logged in from: ::1', 'users', '2013-01-23 11:57:00', 0),
(111, 2, 'logged in from: ::1', 'users', '2013-01-24 12:39:48', 0),
(112, 2, 'logged in from: ::1', 'users', '2013-01-25 15:32:50', 0),
(113, 2, 'logged in from: ::1', 'users', '2013-01-26 06:19:28', 0),
(114, 2, 'Created record with ID: 10 : ::1', 'property', '2013-01-26 07:56:57', 0),
(115, 2, 'Created record with ID: 11 : ::1', 'property', '2013-01-26 08:28:13', 0),
(116, 2, 'Created record with ID: 12 : ::1', 'property', '2013-01-26 08:38:09', 0),
(117, 2, 'Created record with ID: 13 : ::1', 'property', '2013-01-26 08:43:27', 0),
(118, 2, 'Created record with ID: 14 : ::1', 'property', '2013-01-26 08:47:23', 0),
(119, 2, 'Created record with ID: 15 : ::1', 'property', '2013-01-26 08:51:26', 0),
(120, 2, 'Created record with ID: 16 : ::1', 'property', '2013-01-26 08:54:21', 0),
(121, 2, 'Created record with ID: 17 : ::1', 'property', '2013-01-26 09:02:01', 0),
(122, 2, 'Created record with ID: 18 : ::1', 'property', '2013-01-26 09:22:01', 0),
(123, 2, 'logged in from: fe80::7968:1ddc:906e:aefc', 'users', '2013-01-26 09:25:16', 0),
(124, 2, 'Created Module: VisitPhotos : fe80::7968:1ddc:906e:aefc', 'modulebuilder', '2013-01-26 09:39:18', 0),
(125, 2, 'Created record with ID: 1 : fe80::7968:1ddc:906e:aefc', 'visitphotos', '2013-01-26 09:53:12', 0),
(126, 2, 'Created record with ID: 2 : fe80::7968:1ddc:906e:aefc', 'visitphotos', '2013-01-26 09:53:23', 0),
(127, 2, 'Created record with ID: 19 : fe80::7968:1ddc:906e:aefc', 'property', '2013-01-26 10:06:14', 0),
(128, 2, 'Created record with ID: 20 : ::1', 'property', '2013-01-26 10:51:58', 0),
(129, 2, 'Created record with ID: 21 : ::1', 'property', '2013-01-26 11:11:15', 0),
(130, 2, 'Created record with ID: 22 : ::1', 'property', '2013-01-26 11:30:12', 0),
(131, 2, 'Created record with ID: 23 : ::1', 'property', '2013-01-26 11:37:45', 0),
(132, 2, 'logged out from: ::1', 'users', '2013-01-26 12:21:11', 0),
(133, 2, 'logged in from: ::1', 'users', '2013-01-26 12:21:22', 0),
(134, 2, 'Created record with ID: 24 : ::1', 'property', '2013-01-26 12:21:49', 0),
(135, 2, 'Created record with ID: 25 : ::1', 'property', '2013-01-26 12:46:28', 0),
(136, 2, 'logged in from: fe80::7968:1ddc:906e:aefc', 'users', '2013-01-26 12:53:17', 0),
(137, 2, 'logged in from: fe80::7968:1ddc:906e:aefc', 'users', '2013-01-26 12:53:17', 0),
(138, 2, 'Created record with ID: 26 : ::1', 'property', '2013-01-26 12:56:53', 0),
(139, 2, 'logged in from: ::1', 'users', '2013-01-26 13:03:22', 0),
(140, 2, 'logged out from: ::1', 'users', '2013-01-26 13:10:11', 0),
(141, 11, 'logged in from: ::1', 'users', '2013-01-26 13:10:49', 0),
(142, 2, 'logged out from: fe80::7968:1ddc:906e:aefc', 'users', '2013-01-26 13:27:33', 0),
(143, 11, 'logged in from: fe80::7968:1ddc:906e:aefc', 'users', '2013-01-26 13:27:47', 0),
(144, 2, 'Created record with ID: 27 : ::1', 'property', '2013-01-26 14:05:43', 0),
(145, 2, 'Created record with ID: 28 : ::1', 'property', '2013-01-26 14:27:08', 0),
(146, 2, 'logged in from: ::1', 'users', '2013-01-27 06:22:36', 0),
(147, 2, 'logged in from: ::1', 'users', '2013-01-27 11:21:29', 0),
(148, 2, 'Created record with ID: 29 : ::1', 'property', '2013-01-27 11:40:07', 0),
(149, 2, 'Created record with ID: 30 : ::1', 'property', '2013-01-27 11:42:04', 0),
(150, 2, 'Created record with ID: 31 : ::1', 'property', '2013-01-27 11:43:08', 0),
(151, 2, 'Created record with ID: 32 : ::1', 'property', '2013-01-27 12:21:14', 0),
(152, 2, 'logged in from: ::1', 'users', '2013-01-27 12:45:18', 0),
(153, 2, 'logged in from: ::1', 'users', '2013-01-28 05:28:29', 0),
(154, 2, 'logged in from: ::1', 'users', '2013-01-28 08:24:59', 0),
(155, 2, 'logged in from: ::1', 'users', '2013-01-28 13:51:01', 0),
(156, 2, 'logged in from: ::1', 'users', '2013-01-29 06:38:48', 0),
(157, 2, 'logged in from: ::1', 'users', '2013-01-30 06:55:53', 0),
(158, 2, 'logged in from: ::1', 'users', '2013-01-30 10:37:30', 0),
(159, 2, 'logged in from: ::1', 'users', '2013-01-30 13:09:50', 0),
(160, 2, 'logged out from: ::1', 'users', '2013-01-30 13:10:10', 0),
(161, 2, 'logged in from: ::1', 'users', '2013-01-30 14:08:12', 0),
(162, 2, 'logged in from: ::1', 'users', '2013-01-30 15:10:16', 0),
(163, 2, 'logged in from: ::1', 'users', '2013-01-31 06:24:01', 0),
(164, 2, 'logged in from: ::1', 'users', '2013-01-31 10:35:07', 0),
(165, 2, 'logged in from: ::1', 'users', '2013-01-31 13:14:16', 0),
(166, 2, 'Created Module: ImageUpload : ::1', 'modulebuilder', '2013-01-31 13:47:19', 0),
(167, 2, 'logged out from: ::1', 'users', '2013-01-31 13:48:17', 0),
(168, 2, 'logged in from: ::1', 'users', '2013-01-31 13:48:27', 0),
(169, 2, 'logged in from: ::1', 'users', '2013-02-01 08:37:47', 0),
(170, 2, 'logged in from: ::1', 'users', '2013-02-01 08:45:37', 0),
(171, 2, 'logged out from: ::1', 'users', '2013-02-01 08:45:52', 0),
(172, 2, 'logged in from: ::1', 'users', '2013-02-01 08:47:45', 0),
(173, 2, 'logged in from: ::1', 'users', '2013-02-09 10:35:31', 0),
(174, 2, 'logged in from: ::1', 'users', '2013-02-10 12:06:00', 0),
(175, 2, 'logged in from: ::1', 'users', '2013-03-15 12:36:33', 0),
(176, 1, 'logged in from: ::1', 'users', '2013-03-25 21:29:36', 0),
(177, 2, 'logged in from: ::1', 'users', '2013-03-25 22:11:18', 0),
(178, 2, 'modified user: Venkat Reddy Chintalapudi', 'users', '2013-03-25 22:12:35', 0),
(179, 2, 'logged out from: ::1', 'users', '2013-03-25 22:12:41', 0),
(180, 1, 'logged in from: ::1', 'users', '2013-03-25 22:12:56', 0),
(181, 1, 'logged in from: ::1', 'users', '2013-04-09 09:36:13', 0),
(182, 1, 'logged out from: ::1', 'users', '2013-04-09 10:13:48', 0),
(183, 1, 'logged in from: ::1', 'users', '2013-04-09 10:16:21', 0),
(184, 1, 'App settings saved from: ::1', 'core', '2013-04-09 10:16:49', 0),
(185, 1, 'App settings saved from: ::1', 'core', '2013-04-09 10:17:40', 0),
(186, 1, 'logged out from: ::1', 'users', '2013-04-09 10:19:05', 0),
(187, 1, 'logged in from: ::1', 'users', '2013-04-09 10:19:27', 0),
(188, 1, 'logged out from: ::1', 'users', '2013-04-09 10:22:29', 0),
(189, 1, 'logged in from: ::1', 'users', '2013-04-09 10:30:05', 0),
(190, 1, 'logged out from: ::1', 'users', '2013-04-09 11:02:10', 0),
(191, 1, 'logged in from: ::1', 'users', '2013-04-09 14:02:33', 0),
(192, 1, 'Log settings modified from: ::1', 'logs', '2013-04-09 14:25:15', 0),
(193, 1, 'logged out from: ::1', 'users', '2013-04-09 14:34:00', 0),
(194, 1, 'logged in from: ::1', 'users', '2013-04-09 14:34:20', 0),
(195, 1, 'Deleted Module: ImageUpload : ::1', 'builder', '2013-04-09 14:34:47', 0),
(196, 1, 'Deleted Module: student : ::1', 'builder', '2013-04-09 14:34:57', 0),
(197, 1, 'App settings saved from: ::1', 'core', '2013-04-09 15:12:34', 0),
(198, 1, 'modified user: Suresh@123', 'users', '2013-04-09 15:13:32', 0),
(199, 1, 'logged out from: ::1', 'users', '2013-04-09 15:13:37', 0),
(200, 11, 'logged in from: ::1', 'users', '2013-04-09 15:13:51', 0),
(201, 11, 'Updated record with ID: 9 : ::1', 'visits', '2013-04-09 15:45:01', 0),
(202, 11, 'Updated record with ID: 8 : ::1', 'property', '2013-04-09 15:46:39', 0),
(203, 11, 'Created record with ID: 33 : ::1', 'property', '2013-04-09 16:10:10', 0),
(204, 11, 'logged in from: ::1', 'users', '2013-04-09 19:54:02', 0),
(205, 11, 'logged out from: ::1', 'users', '2013-04-09 19:57:36', 0),
(206, 1, 'logged in from: ::1', 'users', '2013-04-09 19:57:50', 0),
(207, 1, 'updated their profile: Venkat Reddy Chintalapudi', 'users', '2013-04-09 20:00:03', 0),
(208, 1, 'logged in from: ::1', 'users', '2013-04-09 20:00:13', 0),
(209, 1, 'Log settings modified from: ::1', 'logs', '2013-04-09 20:02:13', 0),
(210, 1, 'logged out from: ::1', 'users', '2013-04-09 20:02:43', 0),
(211, 12, 'registered a new account.', 'users', '2013-04-09 20:03:47', 0),
(212, 12, 'logged in from: ::1', 'users', '2013-04-09 20:04:21', 0),
(213, 12, 'Created record with ID: 34 : ::1', 'property', '2013-04-09 20:05:08', 0),
(214, 2, 'logged in from: 127.0.0.1', 'users', '2013-04-09 20:12:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hs_email_queue`
--

CREATE TABLE IF NOT EXISTS `hs_email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_login_attempts`
--

CREATE TABLE IF NOT EXISTS `hs_login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_permissions`
--

CREATE TABLE IF NOT EXISTS `hs_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `hs_permissions`
--

INSERT INTO `hs_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(1, 'Site.Signin.Allow', 'Allow users to login to the site', 'active'),
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'),
(19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(27, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(29, 'Activities.User.View', 'To view the user activity logs', 'active'),
(30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(31, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(33, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(39, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(41, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(47, 'Bonfire.Update.Manage', 'To manage the Bonfire Update.', 'active'),
(48, 'Bonfire.Update.View', 'To view the Developer Update menu.', 'active'),
(49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(50, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(99, 'Property.Content.View', '', 'active'),
(100, 'Property.Content.Create', '', 'active'),
(101, 'Property.Content.Edit', '', 'active'),
(102, 'Property.Content.Delete', '', 'active'),
(103, 'Property.Reports.View', '', 'active'),
(104, 'Property.Reports.Create', '', 'active'),
(105, 'Property.Reports.Edit', '', 'active'),
(106, 'Property.Reports.Delete', '', 'active'),
(107, 'Property.Settings.View', '', 'active'),
(108, 'Property.Settings.Create', '', 'active'),
(109, 'Property.Settings.Edit', '', 'active'),
(110, 'Property.Settings.Delete', '', 'active'),
(111, 'Property.Developer.View', '', 'active'),
(112, 'Property.Developer.Create', '', 'active'),
(113, 'Property.Developer.Edit', '', 'active'),
(114, 'Property.Developer.Delete', '', 'active'),
(115, 'Visits.Content.View', '', 'active'),
(116, 'Visits.Content.Create', '', 'active'),
(117, 'Visits.Content.Edit', '', 'active'),
(118, 'Visits.Content.Delete', '', 'active'),
(119, 'Visits.Reports.View', '', 'active'),
(120, 'Visits.Reports.Create', '', 'active'),
(121, 'Visits.Reports.Edit', '', 'active'),
(122, 'Visits.Reports.Delete', '', 'active'),
(123, 'Visits.Settings.View', '', 'active'),
(124, 'Visits.Settings.Create', '', 'active'),
(125, 'Visits.Settings.Edit', '', 'active'),
(126, 'Visits.Settings.Delete', '', 'active'),
(127, 'Visits.Developer.View', '', 'active'),
(128, 'Visits.Developer.Create', '', 'active'),
(129, 'Visits.Developer.Edit', '', 'active'),
(130, 'Visits.Developer.Delete', '', 'active'),
(131, 'Permissions.Habitech.Manage', 'To manage the access control permissions for the Habitech role.', 'inactive'),
(132, 'Permissions.Habi.Manage', 'To manage the access control permissions for the Habi role.', 'inactive'),
(133, 'VisitPhotos.Content.View', '', 'active'),
(134, 'VisitPhotos.Content.Create', '', 'active'),
(135, 'VisitPhotos.Content.Edit', '', 'active'),
(136, 'VisitPhotos.Content.Delete', '', 'active'),
(137, 'VisitPhotos.Reports.View', '', 'active'),
(138, 'VisitPhotos.Reports.Create', '', 'active'),
(139, 'VisitPhotos.Reports.Edit', '', 'active'),
(140, 'VisitPhotos.Reports.Delete', '', 'active'),
(141, 'VisitPhotos.Settings.View', '', 'active'),
(142, 'VisitPhotos.Settings.Create', '', 'active'),
(143, 'VisitPhotos.Settings.Edit', '', 'active'),
(144, 'VisitPhotos.Settings.Delete', '', 'active'),
(145, 'VisitPhotos.Developer.View', '', 'active'),
(146, 'VisitPhotos.Developer.Create', '', 'active'),
(147, 'VisitPhotos.Developer.Edit', '', 'active'),
(148, 'VisitPhotos.Developer.Delete', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `hs_property`
--

CREATE TABLE IF NOT EXISTS `hs_property` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `property_username` varchar(25) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `property_info` varchar(255) NOT NULL,
  `property_file` blob NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `hs_property`
--

INSERT INTO `hs_property` (`pid`, `property_username`, `property_address`, `property_location`, `property_info`, `property_file`) VALUES
(6, 'mahesh', 'KR Puram', 'Bangalore', 'plot', ''),
(8, 'suresh', 'Bangalore', 'Indira Nager', 'near IOC Petrol Bunk', 0x4c617465737420696d616765206f66207468652050726f7065727479),
(9, 'suresh', 'asdfj', 'sdfasdf', 'sadfasf', ''),
(10, 'mahesh', 'knagar', 'knagar', 'info', ''),
(11, 'mahesh', 'khalli', 'khalli', 'info', ''),
(12, 'mahesh', 'hebbal', 'hebbal', 'info', ''),
(13, 'mahesh', 'yelahanka', 'yelahanka', 'info', ''),
(14, 'mahesh', 'mgroad', 'mgroad', 'info', ''),
(15, 'mahesh', 'marathahalli', 'marathahalli', 'info', 0x6c696e6b6564696e2e706e67),
(24, 'mahesh', 'info', 'info', 'info', 0x627573696e6573735f312e6a7067),
(25, 'mahesh', 'kadabisanahalli', 'kadabisanahalli', 'info', 0x747769747465722e706e67),
(26, 'mahesh', 'bangalore', 'hyderabad', 'Bezawada', 0x747769747465722e706e67),
(27, 'mahesh', 'bangalore', 'bangalore', 'info', 0x302e6a7067),
(28, 'mahesh', 'test', 'test', 'test image', 0x31352e6a7067),
(29, 'mahesh', 'vja', 'vja', 'vja', 0x62672d736f66747761726573756974652d322e6a7067),
(30, 'mahesh', 'hyd', 'hyd', 'hyd', 0x62616e6e65725f6e6577732e6a7067),
(31, 'mahesh', 'hyd', 'hyd', 'hyd', 0x62616e6e65725f6e6577732e6a7067),
(32, 'mahesh', 'chr', 'chr', 'chr', 0x302e6a7067),
(33, 'suresh', 'Madhapur', 'Hyderabad', 'Near Kavuri Hills', 0x30),
(34, 'lokesh', 'K R Puram', 'Bangalore', 'land mark info', 0x746573742066696c65);

-- --------------------------------------------------------

--
-- Table structure for table `hs_roles`
--

CREATE TABLE IF NOT EXISTS `hs_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hs_roles`
--

INSERT INTO `hs_roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '', 0, 'content'),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 0, 'content'),
(4, 'User', 'This is the default user with access to login.', 1, 1, '', 0, 'content'),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 0, 'content');

-- --------------------------------------------------------

--
-- Table structure for table `hs_role_permissions`
--

CREATE TABLE IF NOT EXISTS `hs_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hs_role_permissions`
--

INSERT INTO `hs_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(2, 1),
(2, 2),
(2, 3),
(4, 1),
(4, 2),
(4, 3),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 19),
(4, 20),
(4, 24),
(4, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(4, 40),
(4, 41),
(4, 43),
(4, 44),
(4, 45),
(4, 46),
(4, 47),
(4, 48),
(4, 99),
(4, 100),
(4, 101),
(4, 102),
(4, 103),
(4, 104),
(4, 105),
(4, 106),
(4, 115),
(4, 116),
(4, 117),
(4, 118),
(4, 119),
(4, 120),
(4, 121),
(4, 122),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 49);

-- --------------------------------------------------------

--
-- Table structure for table `hs_schema_version`
--

CREATE TABLE IF NOT EXISTS `hs_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hs_schema_version`
--

INSERT INTO `hs_schema_version` (`type`, `version`) VALUES
('app_', 0),
('core', 34),
('property_', 2),
('visitphotos_', 2),
('visits_', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hs_sessions`
--

CREATE TABLE IF NOT EXISTS `hs_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hs_settings`
--

CREATE TABLE IF NOT EXISTS `hs_settings` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `unique - name` (`name`),
  KEY `index - name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hs_settings`
--

INSERT INTO `hs_settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'username'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '1'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '8'),
('auth.password_show_labels', 'core', '1'),
('auth.remember_length', 'core', '2592000'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('auth.user_activation_method', 'core', '0'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'text'),
('protocol', 'email', 'mail'),
('sender_email', 'email', 'venkatreddyc@gmail.com'),
('site.languages', 'core', 'a:1:{i:0;s:7:"english";}'),
('site.list_limit', 'core', '25'),
('site.show_front_profiler', 'core', '1'),
('site.show_profiler', 'core', '1'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'venkatreddyc@gmail.com'),
('site.title', 'core', 'Home Suraksha PMS'),
('smtp_host', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('smtp_user', 'email', ''),
('updates.bleeding_edge', 'core', '1'),
('updates.do_check', 'core', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hs_users`
--

CREATE TABLE IF NOT EXISTS `hs_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` varchar(40) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `salt` varchar(7) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `reset_by` int(10) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hs_users`
--

INSERT INTO `hs_users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `salt`, `last_login`, `last_ip`, `created_on`, `deleted`, `banned`, `ban_message`, `reset_by`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`) VALUES
(1, 1, 'venkatreddyc@gmail.com', 'admin', '7831bcff7653a037a3d31d8ba98e33a9437a61ed', NULL, 'BVczj24', '2013-04-09 20:00:13', '::1', '0000-00-00 00:00:00', 0, 0, NULL, NULL, 'Venkat Reddy Chintalapudi', NULL, 'UP55', 'english', 1, ''),
(2, 1, 'mahesh@habitechsoft.com', 'mahesh', 'bfc925d8a91a9cfadf82b240a772266203386afc', NULL, 'AmyzawR', '2013-04-09 20:12:22', '127.0.0.1', '2013-01-18 09:17:59', 0, 0, NULL, NULL, 'Mahesh Bani', NULL, 'UP55', 'english', 1, ''),
(11, 4, 'sureshb5587@gmail.com', 'suresh', '576e37ab9d9b4c914b324d1dda07de4ad02b44ab', NULL, 'NevRb0l', '2013-04-09 19:54:02', '::1', '2013-01-22 11:23:02', 0, 0, NULL, NULL, 'Suresh@123', NULL, 'UP55', 'english', 1, ''),
(12, 4, 'venkat@habitechsoft.com', 'lokesh', 'a65f0bc7fdd1ae035606dba1f3c32602d23afe49', NULL, 'jf6F0m0', '2013-04-09 20:04:21', '::1', '2013-04-09 20:03:46', 0, 0, NULL, NULL, 'lokesh', NULL, 'UP55', 'english', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `hs_user_cookies`
--

CREATE TABLE IF NOT EXISTS `hs_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hs_user_cookies`
--

INSERT INTO `hs_user_cookies` (`user_id`, `token`, `created_on`) VALUES
(2, 'wqcmhKuj3H0K2poIXhZ5szty4WkVlxid7kqQ1hLWp6bsvpie3OhdVPTLWok7xVkwhlqlsmTv0ikucLKryS4wcDCD27YlCzaO8ch39y5kNPwC4QaBBZjyFJ28JydJijlx', '2013-02-01 08:37:47'),
(12, '8sXJz6YIJfwZv6c2UShmRTUA7oOWIVAY8jzJckTn6ulG1GGTJjLH8S7iq4LHv3SOdRQZJb8AjMEL0RyZAHjUlzEXcyFe54WwQ0N74sr1Sk1fBViyaIDm5Ve12Ajo5g5i', '2013-04-09 20:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `hs_user_meta`
--

CREATE TABLE IF NOT EXISTS `hs_user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `hs_user_meta`
--

INSERT INTO `hs_user_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 2, 'street_name', 'Kalyan Nager, Bangalore'),
(2, 2, 'state', 'SC'),
(3, 2, 'country', 'IN'),
(4, 2, 'type', 'small'),
(5, 3, 'state', 'SC'),
(6, 3, 'country', 'US'),
(7, 4, 'state', 'SC'),
(8, 4, 'country', 'US'),
(9, 5, 'state', 'SC'),
(10, 5, 'country', 'US'),
(11, 5, 'type', 'small'),
(12, 6, 'state', 'SC'),
(13, 6, 'country', 'US'),
(14, 6, 'type', 'small'),
(15, 7, 'state', 'SC'),
(16, 7, 'country', 'US'),
(17, 8, 'street_name', 'Bell St'),
(18, 8, 'state', 'SC'),
(19, 8, 'country', 'US'),
(20, 8, 'type', 'small'),
(21, 9, 'state', 'SC'),
(22, 9, 'country', 'US'),
(23, 10, 'street_name', 'Bell St'),
(24, 10, 'state', 'SC'),
(25, 10, 'country', 'US'),
(26, 10, 'type', 'small'),
(27, 11, 'street_name', 'Kalyan Nagar'),
(28, 11, 'state', 'TX'),
(29, 11, 'country', 'IN'),
(30, 11, 'type', 'small'),
(31, 1, 'state', 'OH'),
(32, 1, 'country', 'IN'),
(33, 1, 'type', 'small'),
(34, 1, 'street_name', 'K R Puram, Bangalore'),
(35, 12, 'street_name', 'K R Puram, Bangalore'),
(36, 12, 'state', 'SC'),
(37, 12, 'country', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `hs_visitphotos`
--

CREATE TABLE IF NOT EXISTS `hs_visitphotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitphotos_property_id` int(50) NOT NULL,
  `visitphotos_prop_photo` longblob NOT NULL,
  `visitphotos_prop_photo_info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hs_visitphotos`
--

INSERT INTO `hs_visitphotos` (`id`, `visitphotos_property_id`, `visitphotos_prop_photo`, `visitphotos_prop_photo_info`) VALUES
(1, 4, 0x30, 'asdfa'),
(2, 4, 0x30, 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `hs_visits`
--

CREATE TABLE IF NOT EXISTS `hs_visits` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `visits_pid` varchar(11) NOT NULL,
  `visits_date` date NOT NULL DEFAULT '0000-00-00',
  `visits_pinfo` varchar(255) NOT NULL,
  `visits_file` varchar(255) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hs_visits`
--

INSERT INTO `hs_visits` (`vid`, `visits_pid`, `visits_date`, `visits_pinfo`, `visits_file`) VALUES
(1, '2', '2013-01-17', 'test', 'image'),
(2, '6', '2013-01-24', 'sdfsadf', 'asdfasdf'),
(3, '7', '2013-01-26', 'sadfsa', 'sadfsadf'),
(4, '4', '2013-01-21', 'info', '2.jpg'),
(5, '4', '2013-01-21', 'info', '2.jpg'),
(6, '4', '2013-01-21', 'info', '2.jpg'),
(7, '4', '2013-01-21', 'info', '2.jpg'),
(8, '4', '2013-01-21', 'info', '2.jpg'),
(9, '8', '2013-01-26', 'The property is located at Hyderabd', 'Latest Photo of the Property');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
