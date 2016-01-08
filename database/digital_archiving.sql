-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 05:40 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_archiving`
--

-- --------------------------------------------------------

--
-- Table structure for table `attach`
--

CREATE TABLE `attach` (
  `attach_id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attach`
--

INSERT INTO `attach` (`attach_id`, `filename`, `document_id`) VALUES
(1, '3.png', 1),
(2, '7.png', 1),
(3, '3.png', 2),
(4, '7.png', 2),
(5, '12.jpg', 3),
(6, '82d.jpg', 3),
(7, '222.png', 3),
(8, 'picture006.jpg', 4),
(9, 'picture010.jpg', 4),
(10, '1.png', 5),
(11, '2.png', 5),
(12, '3.png', 5),
(13, '4.png', 5),
(14, '5.png', 5),
(15, '6.png', 5),
(16, '7.png', 5),
(17, '8.png', 5),
(18, '12.jpg', 5),
(19, '82d.jpg', 5),
(20, '222.png', 5),
(21, '259k7io.jpg', 5),
(22, '195170.png', 5),
(23, '08082532c22420e6a.jpg', 5),
(24, '11059357_1225199580828492_2219161287632456955_n.jpg', 5),
(25, '11062776_1642024002733787_4422439085033014426_n.jpg', 5),
(26, '11220143_1225190600829390_582768160693784389_n.jpg', 5),
(27, '11947573_1225194834162300_1425790581277029498_n.jpg', 5),
(28, '11949146_1225194920828958_7519943521887139243_n.jpg', 5),
(29, '11951101_1225190484162735_4418014684760054156_n.jpg', 5),
(30, '11951200_1225194867495630_7831253151349677839_n.jpg', 5),
(31, '11951327_1642023926067128_5237808520198498574_n.jpg', 5),
(32, '11953286_1225196710828779_7534317210804436572_n.jpg', 5),
(33, '11987107_1225190694162714_7665945723726067105_n.jpg', 5),
(34, '11990387_1225196107495506_3328913945788351245_n.jpg', 5),
(35, '12003396_1642023219400532_3646858832706374865_n.jpg', 5),
(36, '12033074_1163008120379419_1008500386268367598_n.jpg', 5),
(37, '12283193_717141778387443_1819949930_n.jpg', 5),
(38, '12358371_1074470265911211_1909513461_n.jpg', 5),
(39, '12366503_1074470289244542_1231754290_n.jpg', 5),
(40, 'aa.png', 5),
(41, 'acdpepAcG.jpg', 5),
(42, 'aDm1VEx_700b_v2.jpg', 5),
(43, 'aRV1NY2_700b_v1.jpg', 5),
(44, 'batman-dark-knight-the-joker-1080.jpg', 5),
(45, 'batman-quotes_00244968.jpg', 5),
(46, 'bb.png', 5),
(47, 'beatles-rubber-soul-art-darin-shock-1.jpg', 5),
(48, 'black and white quotes the joker typography the dark knight_www.wall321.com_75.jpg', 5),
(49, 'BOB_DYLAN_tif_1_big_jpg_big-1.jpg', 5),
(50, 'bob_dylan-wallpaper-1920x1440.jpg', 5),
(51, 'bobdylan.jpg', 5),
(52, 'bob-dylan-4ea5a25bb00e6.jpg', 5),
(53, 'Bob-Dylan-COLOR1.jpg', 5),
(54, 'bob-dylan-wallpaper.jpg', 5),
(55, 'create_anarchy_by_sabotage_the_system.jpg', 5),
(56, 'error.png', 5),
(57, 'harrison300-317c108fa1b99dc06ae960e699a6980bfa6ddefd-s6-c30.jpg', 5),
(58, 'How-to-become-a-data-scientist.jpg', 5),
(59, 'ImageJokerQuotes.jpg', 5),
(60, 'images (1).jpg', 5),
(61, 'images (2).jpg', 5),
(62, 'images (3).jpg', 5),
(63, 'images.jpg', 5),
(64, 'Joker.jpg', 5),
(65, 'joker_brand___wallpaper_by_flemmflemm-d5xdxw4.jpg', 5),
(66, 'joker_wallpaper_364_cool_high_definition_images_pics.jpg', 5),
(67, 'linux_hd_wallpaper_3.jpg', 5),
(68, 'logo.png', 5),
(69, 'nara.png', 5),
(70, 'paul-mccartney-george-harrison-john-lennon-ringo-starr-Favim.com-664957.jpg', 5),
(71, 'PIXECT-20150906160137.jpg', 5),
(72, 'PIXECT-20150906160314.jpg', 5),
(73, 'PIXECT-20150906160607.jpg', 5),
(74, 'PIXECT-20150906160618.jpg', 5),
(75, 'PIXECT-20150906161205.jpg', 5),
(76, 'PIXECT-20150906161231.jpg', 5),
(77, 'Rev+Ad Tip 001 (2).jpg', 5),
(78, 'rubberSoul.jpg', 5),
(79, 'sublime-bob-dylan-desktop-105008.jpg', 5),
(80, 'The Beatles - Please Please Me.jpg', 5),
(81, 'the_rorschach_test_ink_blots_plate_3_two_humans_postcard-r70b146e150aa489e84310fa6cc83db1f_vgbaq_8byvr_512.jpg', 5),
(82, 'the_sex_pistols_wallpaper-normal.jpg', 5),
(83, 'the-beatles-abbey-road-album-cover.jpg', 5),
(84, 'the-joker-batman-dark-knight-quotes-218.png', 5),
(85, 'tumblr_inline_mxblm4HG5e1soz2oh.png', 5),
(86, 'tumblr_m6wter7gRL1rxbhuso1_500.jpg', 5),
(87, 'tumblr_n1rn3nDYef1rnt61eo2_500.png', 5),
(88, 'tumblr_static_dk32y3ncndc8ogkk4w04cgs4s.png', 5),
(89, 'tux-joker_1280.png', 5),
(90, 'Untitled (2).png', 5),
(91, 'Untitled.png', 5),
(92, 'Untitled1.png', 5),
(93, 'Untitled11.png', 5),
(94, 'Untitledf.jpg', 5),
(95, 'webcam-toy-photo1 (1).jpg', 5),
(96, 'webcam-toy-photo1.jpg', 5),
(97, 'webcam-toy-photo2 (1).jpg', 5),
(98, 'webcam-toy-photo2.jpg', 5),
(99, 'webcam-toy-photo3.jpg', 5),
(100, 'webcam-toy-photo4.jpg', 5),
(101, 'webcam-toy-photo5.jpg', 5),
(102, 'webcam-toy-photo6.jpg', 5),
(103, 'webcam-toy-photo7.jpg', 5),
(104, 'webcam-toy-photo8.jpg', 5),
(105, 'webcam-toy-photo9.jpg', 5),
(106, 'webcam-toy-photo10.jpg', 5),
(107, 'webcam-toy-photo11.jpg', 5),
(108, 'webcam-toy-photo12.jpg', 5),
(109, 'webcam-toy-photo13.jpg', 5),
(110, 'webcam-toy-photo14.jpg', 5),
(111, 'webcam-toy-photo15.jpg', 5),
(112, 'webcam-toy-photo16.jpg', 5),
(113, 'webcam-toy-photo17.jpg', 5),
(114, 'webcam-toy-photo18.jpg', 5),
(115, 'webcam-toy-photo19.jpg', 5),
(116, 'webcam-toy-photo20.jpg', 5),
(117, 'webcam-toy-photo21.jpg', 5),
(118, 'webcam-toy-photo22.jpg', 5),
(119, 'webcam-toy-photo23.jpg', 5),
(120, 'webcam-toy-photo24.jpg', 5),
(121, 'webcam-toy-photo25.jpg', 5),
(122, 'webcam-toy-photo26.jpg', 5),
(123, 'webcam-toy-photo27.jpg', 5),
(124, 'webcam-toy-photo28.jpg', 5),
(125, 'webcam-toy-photo29.jpg', 5),
(126, 'webcam-toy-photo30.jpg', 5),
(127, 'webcam-toy-photo31.jpg', 5),
(128, 'webcam-toy-photo32.jpg', 5),
(129, 'webcam-toy-photo33.jpg', 5),
(130, 'webcam-toy-photo34.jpg', 5),
(131, 'webcam-toy-photo35.jpg', 5),
(132, 'webcam-toy-photo36.jpg', 5),
(133, 'webcam-toy-photo37.jpg', 5),
(134, 'webcam-toy-photo38.jpg', 5),
(135, 'webcam-toy-photo39.jpg', 5),
(136, 'webcam-toy-photo40.jpg', 5),
(137, 'webcam-toy-photo41.jpg', 5),
(138, 'webcam-toy-photo42.jpg', 5),
(139, 'webcam-toy-photo43.jpg', 5),
(140, 'webcam-toy-photo44.jpg', 5),
(141, 'webcam-toy-photo45.jpg', 5),
(142, 'webcam-toy-photo46.jpg', 5),
(143, 'webcam-toy-photo47.jpg', 5),
(144, 'webcam-toy-photo48.jpg', 5),
(145, 'webcam-toy-photo49.jpg', 5),
(146, 'webcam-toy-photo50.jpg', 5),
(147, 'webcam-toy-photo51.jpg', 5),
(148, 'webcam-toy-photo52.jpg', 5),
(149, 'webcam-toy-photo53.jpg', 5),
(150, 'webcam-toy-photo54.jpg', 5),
(151, 'webcam-toy-photo55.jpg', 5),
(152, 'webcam-toy-photo56.jpg', 5),
(153, 'webcam-toy-photo57.jpg', 5),
(154, 'webcam-toy-photo58.jpg', 5),
(155, 'webcam-toy-photo59.jpg', 5),
(156, 'webcam-toy-photo60.jpg', 5),
(157, 'webcam-toy-photo61.jpg', 5),
(158, 'webcam-toy-photo62.jpg', 5),
(159, 'With-the-Beatles-album-cover.jpg', 5),
(160, '5.png', 6),
(161, '6.png', 6),
(162, '7.png', 6),
(163, 'picture001.jpg', 7),
(164, 'picture003.jpg', 7),
(165, 'picture004.jpg', 7),
(166, 'picture006.jpg', 7),
(167, 'picture007.jpg', 7),
(168, 'picture008.jpg', 7),
(169, 'picture009.jpg', 7),
(170, 'picture010.jpg', 7),
(171, 'picture011.jpg', 7),
(172, 'picture012.jpg', 7),
(173, 'picture013.jpg', 7),
(174, 'picture014.jpg', 7),
(175, 'picture015.jpg', 7),
(176, 'picture016.jpg', 7),
(177, 'picture018.jpg', 7),
(178, 'picture020.jpg', 7),
(179, 'picture022.jpg', 7),
(180, 'picture024.jpg', 7),
(181, 'picture025.jpg', 7),
(182, 'picture026.jpg', 7),
(183, 'picture027.jpg', 7),
(184, 'picture028.jpg', 7),
(185, 'picture029.jpg', 7),
(186, 'picture030.jpg', 7),
(187, 'picture031.jpg', 7),
(188, 'picture032.jpg', 7),
(189, 'picture033.jpg', 7),
(190, 'picture034.jpg', 7),
(191, 'picture035.jpg', 7),
(192, 'picture036.jpg', 7),
(193, 'picture037.jpg', 7),
(194, 'picture038.jpg', 7),
(195, 'picture039.jpg', 7),
(196, 'picture040.jpg', 7),
(197, 'picture041.jpg', 7),
(198, 'picture042.jpg', 7),
(199, 'picture043.jpg', 7),
(200, 'picture044.jpg', 7),
(201, 'picture045.jpg', 7),
(202, 'picture046.jpg', 7),
(203, 'picture047.jpg', 7),
(204, 'picture048.jpg', 7),
(205, 'picture049.jpg', 7),
(206, 'picture050.jpg', 7),
(207, 'picture051.jpg', 7),
(208, 'picture052.jpg', 7),
(209, 'picture053.jpg', 7),
(210, 'picture054.jpg', 7),
(211, 'picture055.jpg', 7),
(212, 'picture056.jpg', 7),
(213, 'picture057.jpg', 7),
(214, 'picture058.jpg', 7),
(215, 'picture059.jpg', 7),
(216, 'picture060.jpg', 7),
(217, 'picture061.jpg', 7),
(218, 'picture062.jpg', 7),
(219, 'picture063.jpg', 7),
(220, 'picture064.jpg', 7),
(221, 'picture065.jpg', 7),
(222, 'picture066.jpg', 7),
(223, 'picture067.jpg', 7),
(224, 'picture068.jpg', 7),
(225, 'picture069.jpg', 7),
(226, 'picture070.jpg', 7),
(227, 'picture071.jpg', 7),
(228, 'picture072.jpg', 7),
(229, 'picture073.jpg', 7),
(230, 'picture074.jpg', 7),
(231, 'picture075.jpg', 7),
(232, 'picture076.jpg', 7),
(233, 'picture077.jpg', 7),
(234, 'picture078.jpg', 7),
(235, 'picture079.jpg', 7),
(236, 'picture080.jpg', 7),
(237, 'picture089.jpg', 7),
(238, 'picture091.jpg', 7),
(239, 'picture093.jpg', 7),
(240, 'picture094.jpg', 7),
(241, 'picture096.jpg', 7),
(242, 'picture097.jpg', 7),
(243, 'picture098.jpg', 7),
(244, 'picture102.jpg', 7),
(245, 'picture103.jpg', 7),
(246, 'picture104.jpg', 7),
(247, 'picture105.jpg', 7),
(248, 'picture106.jpg', 7),
(249, 'picture107.jpg', 7),
(250, 'picture108.jpg', 7),
(251, 'picture109.jpg', 7),
(252, 'picture110.jpg', 7),
(253, 'picture111.jpg', 7),
(254, 'picture112.jpg', 7),
(255, 'picture113.jpg', 7),
(256, 'picture114.jpg', 7),
(257, 'picture115.jpg', 7),
(258, 'picture116.jpg', 7),
(259, 'picture117.jpg', 7),
(260, 'picture118.jpg', 7),
(261, 'picture119.jpg', 7),
(262, 'picture120.jpg', 7),
(263, 'picture121.jpg', 7),
(264, 'picture122.jpg', 7),
(265, 'picture123.jpg', 7),
(266, 'picture124.jpg', 7),
(267, 'picture125.jpg', 7),
(268, 'picture126.jpg', 7),
(269, 'picture127.jpg', 7),
(270, 'picture128.jpg', 7),
(271, 'picture130.jpg', 7),
(272, 'picture131.jpg', 7),
(273, 'picture132.jpg', 7),
(274, 'picture134.jpg', 7),
(275, 'picture138.jpg', 7),
(276, 'picture139.jpg', 7),
(277, 'picture140.jpg', 7),
(278, 'picture141.jpg', 7),
(279, 'picture142.jpg', 7),
(280, 'picture143.jpg', 7),
(281, 'picture144.jpg', 7),
(282, 'picture145.jpg', 7),
(283, 'picture146.jpg', 7),
(284, 'picture147.jpg', 7),
(285, 'picture150.jpg', 7),
(286, 'picture151.jpg', 7),
(287, 'picture153.jpg', 7),
(288, 'picture155.jpg', 7),
(289, 'picture156.jpg', 7),
(290, 'picture157.jpg', 7),
(291, 'picture158.jpg', 7),
(292, 'picture159.jpg', 7),
(293, 'picture160.jpg', 7),
(294, 'picture161.jpg', 7),
(295, 'picture162.jpg', 7),
(296, 'picture163.jpg', 7),
(297, 'picture164.jpg', 7),
(298, 'picture165.jpg', 7),
(299, 'picture166.jpg', 7),
(300, 'picture167.jpg', 7),
(301, 'picture168.jpg', 7),
(302, 'picture169.jpg', 7),
(303, 'picture170.jpg', 7),
(304, 'picture171.jpg', 7),
(305, 'picture172.jpg', 7),
(306, 'picture173.jpg', 7),
(307, 'picture174.jpg', 7),
(308, 'picture202.jpg', 7),
(309, 'picture203.jpg', 7),
(310, 'picture204.jpg', 7),
(311, 'picture205.jpg', 7),
(312, 'picture207.jpg', 7),
(313, 'picture208.jpg', 7),
(314, 'picture214.jpg', 7),
(315, 'picture215.jpg', 7),
(316, 'picture217.jpg', 7),
(317, 'picture230.jpg', 7),
(318, 'picture231.jpg', 7),
(319, 'picture233.jpg', 7),
(320, 'picture234.jpg', 7),
(321, 'picture235.jpg', 7),
(322, 'picture236.jpg', 7),
(323, 'picture237.jpg', 7),
(324, 'picture238.jpg', 7),
(325, 'picture239.jpg', 7),
(326, 'picture240.jpg', 7),
(327, 'picture241.jpg', 7),
(328, 'picture244.jpg', 7),
(329, 'picture245.jpg', 7),
(330, 'picture247.jpg', 7),
(331, 'picture248.jpg', 7),
(332, 'picture249.jpg', 7),
(333, 'picture250.jpg', 7),
(334, 'picture251.jpg', 7),
(335, 'picture252.jpg', 7),
(336, 'picture254.jpg', 7),
(337, 'picture255.jpg', 7),
(338, 'picture256.jpg', 7),
(339, 'picture257.jpg', 7),
(340, 'picture258.jpg', 7),
(341, 'picture259.jpg', 7),
(342, 'picture262.jpg', 7),
(343, 'picture264.jpg', 7),
(344, 'picture265.jpg', 7),
(345, 'picture266.jpg', 7),
(346, 'picture267.jpg', 7),
(347, 'picture268.jpg', 7),
(348, 'picture269.jpg', 7),
(349, 'picture270.jpg', 7),
(350, 'picture274.jpg', 7),
(351, 'picture275.jpg', 7),
(352, 'picture276.jpg', 7),
(353, 'picture277.jpg', 7),
(354, 'picture278.jpg', 7),
(355, 'picture279.jpg', 7),
(356, 'picture280.jpg', 7),
(357, 'picture281.jpg', 7),
(358, 'picture282.jpg', 7),
(359, 'picture286.jpg', 7),
(360, 'picture287.jpg', 7),
(361, 'picture288.jpg', 7),
(362, 'picture289.jpg', 7),
(363, 'picture292.jpg', 7),
(364, 'picture293.jpg', 7),
(365, 'picture294.jpg', 7),
(366, 'picture295.jpg', 7),
(367, 'picture296.jpg', 7),
(368, 'picture298.jpg', 7),
(369, 'picture299.jpg', 7),
(370, 'picture300.jpg', 7),
(371, 'picture301.jpg', 7),
(372, 'picture302.jpg', 7),
(373, 'picture303.jpg', 7),
(374, 'picture304.jpg', 7),
(375, 'picture305.jpg', 7),
(376, 'picture306.jpg', 7),
(377, 'picture307.jpg', 7),
(378, 'picture311.jpg', 7),
(379, 'picture312.jpg', 7),
(380, 'picture313.jpg', 7),
(381, 'picture314.jpg', 7),
(382, 'picture315.jpg', 7),
(383, 'picture316.jpg', 7),
(384, 'picture317.jpg', 7),
(385, 'picture318.jpg', 7),
(386, 'picture319.jpg', 7),
(387, 'picture320.jpg', 7),
(388, 'picture321.jpg', 7),
(389, 'picture322.jpg', 7),
(390, 'picture323.jpg', 7),
(391, 'picture324.jpg', 7),
(392, 'picture325.jpg', 7),
(393, 'picture326.jpg', 7),
(394, 'picture327.jpg', 7),
(395, 'picture328.jpg', 7),
(396, 'picture329.jpg', 7),
(397, 'picture330.jpg', 7),
(398, 'picture331.jpg', 7),
(399, 'picture332.jpg', 7),
(400, 'picture333.jpg', 7),
(401, 'picture334.jpg', 7),
(402, 'picture335.jpg', 7),
(403, 'picture336.jpg', 7),
(404, 'picture337.jpg', 7),
(405, 'picture338.jpg', 7),
(406, 'picture339.jpg', 7),
(407, 'picture340.jpg', 7),
(408, 'picture341.jpg', 7),
(409, 'picture342.jpg', 7),
(410, 'picture343.jpg', 7),
(411, 'picture344.jpg', 7),
(412, 'picture345.jpg', 7),
(413, 'picture346.jpg', 7),
(414, 'picture347.jpg', 7),
(415, 'picture348.jpg', 7),
(416, 'picture349.jpg', 7),
(417, 'picture350.jpg', 7),
(418, 'picture351.jpg', 7),
(419, 'picture352.jpg', 7),
(420, 'picture353.jpg', 7),
(421, 'picture354.jpg', 7),
(422, 'picture001.jpg', 8),
(423, 'picture003.jpg', 8),
(424, 'picture004.jpg', 8),
(425, 'picture006.jpg', 8),
(426, 'picture007.jpg', 8),
(427, 'picture008.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Work and Financial Plan GAA'),
(2, 'Work and Financial Plan Supplemental'),
(3, 'Communication from Central Office'),
(4, 'Communication from Other Government Agencies'),
(5, 'Communication from NGO Academic and Other Private Institution'),
(6, 'Communication Inter Office'),
(7, 'Communication PENRO and CENRO'),
(8, 'Regional Speceial Order'),
(9, 'Communication from Congressment and LGU''s'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date_id`, `date`, `document_id`) VALUES
(1, '2016-01-07', 1),
(2, '2016-01-07', 2),
(3, '2016-01-07', 3),
(4, '2016-01-08', 4),
(5, '2016-01-08', 5),
(6, '2016-01-08', 6),
(7, '2016-01-08', 7),
(8, '2016-01-08', 8);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `subject_id`, `date_id`, `sender_id`, `keyword_id`, `category_id`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 2, 2, 2, 2, 1),
(3, 3, 3, 3, 3, 2),
(4, 4, 4, 4, 4, 1),
(5, 5, 5, 5, 5, 2),
(6, 6, 6, 6, 6, 1),
(7, 7, 7, 7, 7, 2),
(8, 8, 8, 8, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `keyword_id` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`keyword_id`, `keyword`, `document_id`) VALUES
(1, 'asd ', 1),
(2, 'a ', 2),
(3, 'lalal ', 3),
(4, 'asldasd ', 4),
(5, 'shun choi ', 5),
(6, 'asdasdasdas ', 6),
(7, 'asdasd ', 7),
(8, 'asdsD ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `sender_id` int(11) NOT NULL,
  `sender` varchar(45) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`sender_id`, `sender`, `document_id`) VALUES
(1, 'asd', 1),
(2, 'a', 2),
(3, 'a', 3),
(4, 'lasdl', 4),
(5, 'shuna', 5),
(6, 'asdasdasd', 6),
(7, 'asdasd', 7),
(8, 'asd', 8);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject`, `document_id`) VALUES
(1, 'asd', 1),
(2, 'a', 2),
(3, 'l', 3),
(4, 'lsla', 4),
(5, 'wala', 5),
(6, 'asdas', 6),
(7, 'asdsadas', 7),
(8, 'asdasd', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password` varchar(512) NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `password`, `user_type_id`) VALUES
(1, 'admin', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attach`
--
ALTER TABLE `attach`
  ADD PRIMARY KEY (`attach_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`sender_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attach`
--
ALTER TABLE `attach`
  MODIFY `attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `sender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
