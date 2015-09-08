-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 06 日 11:08
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mall2`
--

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_address`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_address` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `buildings` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `code` char(6) NOT NULL,
  `selected` tinyint(1) NOT NULL,
  `user` varchar(20) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_address`
--

INSERT INTO `mengranzhang_wbsd14_ass2_address` (`id`, `name`, `tel`, `email`, `address`, `buildings`, `flag`, `code`, `selected`, `user`, `time`) VALUES
(1, 'jdkdj', '234234', '2342342@qq.com', 'heijkdj', 'kkfdk', 0, '222333', 1, 'username', '22');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_attr`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_attr` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `nav` varchar(200) NOT NULL,
  `way` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_attr`
--

INSERT INTO `mengranzhang_wbsd14_ass2_attr` (`id`, `name`, `item`, `nav`, `way`) VALUES
(4, 'Memory', '2G|4G|8G|16G|32G|64G|500G|1T|1.5T', '11,40,41,42', 0),
(5, 'Color', 'Red|Blue|Green|Purple|White', '30,31,32,38,12', 0),
(8, 'Size', 'XS|S|M|L|XL|XXL', '31,32,38', 0),
(12, 'CPU', 'i3|i5|i7|amd', '11,40,41,42,43', 0),
(13, 'Weight', '0.1kg|0.5kg|1kg|2kg|4kg|8kg|30kg', '12,44,42,43', 0);

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_brand`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_brand` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `info` varchar(200) NOT NULL,
  `url` varchar(40) NOT NULL,
  `reg_time` datetime NOT NULL,
  `type` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_brand`
--

INSERT INTO `mengranzhang_wbsd14_ass2_brand` (`id`, `name`, `info`, `url`, `reg_time`, `type`) VALUES
(6, 'chanel', 'chanelgbb', 'http://www.chanel.com/', '2015-07-22 16:24:37', 29),
(9, 'prada', 'prada', 'http://www.prada.com', '2015-05-22 17:27:05', 29),
(10, 'adidas', 'adidas dff', 'http://www.adidas.com', '2015-05-22 17:27:50', 29),
(20, 'seagate', 'seagate', 'http://www.seagate.com', '2015-05-27 13:18:01', 23),
(21, 'apple', 'http://apple.com', 'http://apple.com', '2015-08-01 09:49:39', 3);

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_collect`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_collect` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `user` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_collect`
--

INSERT INTO `mengranzhang_wbsd14_ass2_collect` (`id`, `goods_id`, `user`, `date`) VALUES
(13, 21, 'admin', '2015-06-19 16:00:51'),
(20, 17, 'admin', '2015-06-21 19:03:53'),
(21, 2, 'username', '2015-08-05 12:22:00');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_commend`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_commend` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL,
  `attr` varchar(400) NOT NULL,
  `star` tinyint(5) unsigned NOT NULL DEFAULT '5',
  `re_content` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `re_date` datetime NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_delivery`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_delivery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL,
  `price_in` decimal(8,2) NOT NULL,
  `price_out` decimal(8,2) NOT NULL,
  `price_add` decimal(8,2) NOT NULL,
  `info` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_goods`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_goods` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `attr` varchar(200) NOT NULL,
  `price_sale` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `price_market` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `price_cost` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `sale_count` smallint(6) unsigned NOT NULL DEFAULT '0',
  `keyword` varchar(40) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `weight` decimal(10,2) unsigned NOT NULL,
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_recommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_up` tinyint(1) unsigned NOT NULL,
  `is_freight` tinyint(1) NOT NULL DEFAULT '0',
  `inventory` smallint(6) unsigned NOT NULL DEFAULT '0',
  `warn_inventory` smallint(6) unsigned NOT NULL DEFAULT '0',
  `nav` smallint(6) unsigned NOT NULL,
  `brand` smallint(6) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `thumb_small` varchar(100) NOT NULL,
  `service` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_goods`
--

INSERT INTO `mengranzhang_wbsd14_ass2_goods` (`id`, `name`, `sn`, `attr`, `price_sale`, `price_market`, `price_cost`, `sale_count`, `keyword`, `unit`, `weight`, `is_promote`, `is_recommend`, `is_up`, `is_freight`, `inventory`, `warn_inventory`, `nav`, `brand`, `date`, `thumb`, `thumb_small`, `service`, `content`) VALUES
(1, 'fdf', 'sdfsfd', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 75, 0, 30, 0, '2015-08-05 17:12:27', 'upload/20140606/20140606170258368.jpg', 'upload/20140606/20140606170258368220x220.png', 0, ''),
(2, 'Nike Golf Camo', '400', '', 30.00, 40.00, 20.00, 1, 'Nike|Golf', '', 0.10, 1, 1, 1, 1, 19, 10, 38, 0, '2015-08-05 17:14:11', 'upload/20150806/20150806092345313.png', 'upload/20150806/20150806092345313220x220.png', 0, '<h5>Product Details</h5>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Color:</p>\r\n\r\n	<p>Black/White</p>\r\n	</li>\r\n	<li>\r\n	<p>Manufacturer:</p>\r\n\r\n	<p>Nike</p>\r\n	</li>\r\n	<li>\r\n	<p>Department:</p>\r\n\r\n	<p>mens</p>\r\n	</li>\r\n	<li>\r\n	<p>Model:</p>\r\n\r\n	<p>Nike Golf Camo</p>\r\n	</li>\r\n</ul>\r\n\r\n<h5>Product Features</h5>\r\n\r\n<ul>\r\n	<li>58% Cotton, 42% Polyester</li>\r\n	<li>Screen print at front for athletic golf style.</li>\r\n	<li>5.3oz</li>\r\n	<li>Dri-Fit fabric to wick sweat away and help keep you dry and comfortable.</li>\r\n	<li>Rib crew neck with interior taping for durability and comfort.</li>\r\n</ul>\r\n'),
(3, 'iPad', 'ddddd', '', 400.00, 500.00, 230.00, 2, '', '', 0.00, 1, 1, 1, 1, 48, 0, 11, 0, '2015-08-05 12:25:00', 'upload/20150806/20150806092423577.png', 'upload/20150806/20150806092423577220x220.png', 0, ''),
(4, 'Macbook Air', 'mba1234', '', 400.00, 500.00, 260.00, 0, '', '', 0.50, 0, 1, 1, 1, 38, 0, 42, 0, '2015-08-06 02:18:51', 'upload/20150806/20150806093611182.png', 'upload/20150806/20150806093611182220x220.png', 0, '<h1><img alt="Make the most of your day. From startup to sundown." class="center" src="http://images.apple.com/macbook-air/images/features_title.png" style="height:114px; width:980px" /></h1>\r\n\r\n<p>Fifth-generation Intel Core processors in MacBook Air give you more time to do more things. Add that to an array of other smart and efficient features, and you have an incredible amount of power in your hands. While carrying next to nothing.</p>\r\n\r\n<ul>\r\n	<li><a class="scrollToAnchor battery-icon" href="#battery"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_battery.png" style="height:90px; width:90px" />All-Day Battery</a></li>\r\n	<li><a class="scrollToAnchor" href="#processor"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_processor.png" style="height:90px; width:90px" />Processors<br />\r\n	and Graphics</a></li>\r\n	<li><a class="scrollToAnchor" href="#wireless"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_wireless.png" style="height:90px; width:90px" />802.11ac Wi-Fi</a></li>\r\n	<li><a class="scrollToAnchor" href="#storage"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_storage.png" style="height:90px; width:90px" />Flash Storage</a></li>\r\n	<li><a class="scrollToAnchor" href="#thunderbolt"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_thunderbolt.png" style="height:90px; width:90px" />Thunderbolt 2<br />\r\n	and USB 3</a></li>\r\n	<li><a class="scrollToAnchor" href="#display"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_display.png" style="height:90px; width:90px" />Display and Camera</a></li>\r\n	<li><a class="scrollToAnchor" href="#multitouch"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_trackpad.png" style="height:90px; width:90px" />Multi-Touch Trackpad</a></li>\r\n	<li><a class="scrollToAnchor" href="#keyboard"><img alt="" src="http://images.apple.com/macbook-air/images/features_nav_keyboard.png" style="height:90px; width:90px" />Backlit Keyboard</a></li>\r\n</ul>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_battery_icon.png" style="height:79px; width:79px" /></p>\r\n\r\n<h1><img alt="Up to 12 hours of battery life. Power through your whole day." src="http://images.apple.com/macbook-air/images/features_battery_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p>Thanks to compact all-flash storage in MacBook Air, there&rsquo;s plenty of room for a big battery. Working together with the power-efficient fifth-generation Intel Core architecture, this battery can post some impressive numbers. The 11-inch model gets up to 9 hours of battery life on a single charge and the 13-inch model gets up to 12 hours. That gives you all-day power for surfing the web or watching iTunes movies. Put MacBook Air to sleep for more than 3 hours, and it enters standby mode to conserve battery life for up to 30 days.<sup>1</sup> And if you enable Power Nap, you&rsquo;ll continue to receive new email and calendar invitations while your computer is asleep.</p>\r\n\r\n<p><img alt="" class="across" src="http://images.apple.com/macbook-air/images/features_battery_main.jpg" style="height:313px; width:902px" /></p>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_processor_icon.png" style="height:98px; width:104px" /></p>\r\n\r\n<h1><img alt="Fifth-generation Intel Core processors. Performance, meet endurance." src="http://images.apple.com/macbook-air/images/features_processor_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p><img alt="" src="http://images.apple.com/macbook-air/images/features_processor_main.jpg" style="height:401px; width:1135px" /></p>\r\n\r\n<p>MacBook Air is powered by fifth-generation Intel Core i5 and i7 processors. This ultra-efficient architecture was designed to use less power and still deliver high performance. Which means not only can you do whatever you want &mdash; you can keep doing it for longer than before. In addition, the Intel HD Graphics 6000 processor offers advanced performance you&rsquo;ll especially notice with games and other graphics-intensive tasks.</p>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_wireless_icon.png" style="height:68px; width:97px" /></p>\r\n\r\n<h1><img alt="802.11ac Wi-Fi. The deﬁnition of fast." src="http://images.apple.com/macbook-air/images/features_wireless_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<div class="grid2col">\r\n<div class="column first">\r\n<p>MacBook Air supports ultrafast 802.11ac Wi-Fi. When connected to an 802.11ac base station &mdash; including <a href="/airport-extreme/">AirPort Extreme</a> and <a href="/airport-time-capsule/">AirPort Time Capsule</a> &mdash; wireless performance is up to 3x faster than 802.11n Wi-Fi.<sup>2</sup> And your Wi-Fi range improves as well. With Bluetooth technology, you can connect MacBook Air to Bluetooth-enabled devices like speakers and headphones. Even without all the wires, you&rsquo;re totally connected.</p>\r\n</div>\r\n\r\n<div class="column last chart gallery">\r\n<h2><img alt="Wi‑Fi Data Rate" src="http://images.apple.com/macbook-air/images/features_wireless_figcaption.png" style="height:24px; width:452px" /></h2>\r\n\r\n<div class="gallery-view" id="datarate-chart-gallery">\r\n<ul>\r\n	<li>\r\n	<div class="bar">1300 Mbps</div>\r\n	802.11ac</li>\r\n	<li>\r\n	<div class="bar">450 Mbps</div>\r\n	802.11n</li>\r\n	<li>\r\n	<div class="bar">54 Mbps</div>\r\n	802.11g</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="row"><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_storage_icon.png" style="height:82px; width:82px" />\r\n<h1><img alt="Fast all-ﬂash storage. Ready. Set. Done." src="http://images.apple.com/macbook-air/images/features_storage_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p>Part of what makes MacBook Air so responsive is that it&rsquo;s designed entirely around flash storage. Not only does this make MacBook Air much lighter and more portable than traditional notebooks, it also provides faster access to data. Available in capacities up to 512GB,<sup>3</sup> this PCIe-based flash storage is up to 17x faster than a traditional 5400-rpm notebook hard drive.<sup>4</sup> So when you flip open MacBook Air, it&rsquo;s ready to go right away. Even after a month in standby mode, the screen springs to life.</p>\r\n</div>\r\n\r\n<p><img alt="" class="across" src="http://images.apple.com/macbook-air/images/features_storage_main.jpg" style="height:652px; width:1280px" /></p>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_thunderbolt_icon.png" style="height:83px; width:83px" /></p>\r\n\r\n<h1><img alt="Thunderbolt 2 and USB 3. Make some powerful connections." src="http://images.apple.com/macbook-air/images/features_thunderbolt_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p><img alt="" class="right" src="http://images.apple.com/macbook-air/images/features_thunderbolt_main.jpg" style="height:517px; width:905px" /></p>\r\n\r\n<div class="column-width">\r\n<p>With a Thunderbolt 2 port that&rsquo;s twice as fast as the previous generation, you can connect your MacBook Air to the latest devices and displays, like the Apple Thunderbolt Display. But that&rsquo;s not the whole story. MacBook Air also comes equipped with two USB 3 ports, so you can connect the latest USB 3 devices and all your USB 2 devices as well. With just a few connections, MacBook Air transforms from an ultraportable notebook to a complete workstation.</p>\r\n</div>\r\n\r\n<div class="gallery-view" id="ports-gallery"><img alt="" src="http://images.apple.com/macbook-air/images/features_ports_left.jpg" style="height:290px; width:980px" />\r\n<ul>\r\n	<li>MagSafe 2</li>\r\n	<li>USB 3</li>\r\n	<li>Headphone</li>\r\n	<li>Dual mics</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>MagSafe 2</li>\r\n	<li>USB 3</li>\r\n	<li>Headphone</li>\r\n	<li>Dual mics</li>\r\n</ul>\r\n<img alt="" src="http://images.apple.com/macbook-air/images/features_ports_right.jpg" style="height:290px; width:980px" />\r\n<ul>\r\n	<li>USB 3</li>\r\n	<li>Thunderbolt 2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>SDXC card slot</li>\r\n	<li>USB 3</li>\r\n	<li>Thunderbolt 2</li>\r\n</ul>\r\n</div>\r\n\r\n<ul>\r\n	<li><a class="roundedleft ports-gallery" href="#ports-gallery-left">Left Side</a></li>\r\n	<li><a class="roundedright ports-gallery" href="#ports-gallery-right">Right Side</a></li>\r\n</ul>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_display_icon.png" style="height:78px; width:78px" /></p>\r\n\r\n<h1><img alt="Display, camera, and mics. Impressive. In every sense." src="http://images.apple.com/macbook-air/images/features_display_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p><img alt="" src="http://images.apple.com/macbook-air/images/features_display_main.jpg" style="height:521px; width:982px" /></p>\r\n\r\n<p>Make FaceTime calls from your MacBook Air to an iPhone 4 or later, iPad,<br />\r\niPod touch, or another Mac running FaceTime for Mac.</p>\r\n\r\n<div class="grid2col padded">\r\n<div class="column first"><img alt="" class="center" src="http://images.apple.com/macbook-air/images/features_display_hires.jpg" style="height:106px; width:194px" />\r\n<h3>LED-backlit display. Millions of pixels.<br />\r\nMillimeters thin.</h3>\r\n\r\n<p>Corner to corner and pixel by pixel, the MacBook Air display is both an engineering feat and a design breakthrough. The display measures a mere 4.86 millimeters (0.19 inch) thin, yet its resolution makes you feel like you&rsquo;re looking at a larger screen. The 11-inch MacBook Air features a resolution of 1366 by 768 pixels, while the 13-inch model wows with a resolution of 1440 by 900 pixels. And LED backlighting makes colors bright and vibrant from edge to edge. So whether you&rsquo;re editing photos, perfecting a presentation, or watching a movie, you&rsquo;re going to love what you see.</p>\r\n</div>\r\n\r\n<div class="column last"><img alt="" class="center" src="http://images.apple.com/macbook-air/images/features_display_facetime.jpg" style="height:106px; width:129px" />\r\n<h3>720p FaceTime HD camera.<br />\r\nStay sharp.</h3>\r\n\r\n<p>Let your friends and family see more of you with the 720p FaceTime HD camera. Every smile looks bright, even halfway around the world. And the widescreen format means everyone can fit into the picture without having to crowd around the display.</p>\r\n\r\n<h3>Dual mics. They&rsquo;ll hear you loud and clear.</h3>\r\n\r\n<p>The dual microphones in MacBook Air are great for when you want to be heard. If you&rsquo;re making a FaceTime call, for example, the mics reduce background noise from behind the notebook. And when you use Dictation, they create an adaptive audio beam that intelligently adjusts to detect your voice &mdash; instead of the noise around you.</p>\r\n</div>\r\n</div>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_multitouch_icon.png" style="height:80px; width:80px" /></p>\r\n\r\n<h1><img alt="Multi-Touch trackpad. It goes hand in hand with OS X." src="http://images.apple.com/macbook-air/images/features_multitouch_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p>The Multi-Touch gestures in OS X make everything you do on MacBook Air more intuitive, direct, and fun. And the spacious Multi-Touch trackpad is perfectly designed for them, whether it&rsquo;s a three-finger swipe to activate Mission Control or a four-finger pinch to see all your apps in Launchpad. Gesture responses are smooth and realistic. So when you&rsquo;re scrolling up and down a web page or swiping from one full-screen app to another, it&rsquo;s almost like you&rsquo;re touching what you&rsquo;re seeing.</p>\r\n\r\n<p><img alt="" class="hero-img" src="http://images.apple.com/macbook-air/images/features_multitouch.jpg" style="height:824px; width:980px" /></p>\r\n\r\n<div class="grid6col clear">\r\n<div class="column first">\r\n<h4>Click</h4>\r\n\r\n<p>Press down anywhere to click. Or, with Tap to Click enabled, tap the trackpad.</p>\r\n</div>\r\n\r\n<div class="column">\r\n<h4>Double-click</h4>\r\n\r\n<p>Press down two times anywhere. Or, with Tap to Click enabled, double-tap the trackpad.</p>\r\n</div>\r\n\r\n<div class="column">\r\n<h4>Tap to zoom</h4>\r\n\r\n<p>Double-tap the trackpad with two fingers to magnify a web page or PDF.</p>\r\n</div>\r\n\r\n<div class="column">\r\n<h4>Two-finger scroll</h4>\r\n\r\n<p>Slide two fingers up or down the trackpad to scroll through documents, websites, and more.</p>\r\n</div>\r\n\r\n<div class="column">\r\n<h4>Swipe to navigate</h4>\r\n\r\n<p>Flip through web pages, documents, and more like thumbing pages in a book.</p>\r\n</div>\r\n\r\n<div class="column last">\r\n<h4>View Mission Control</h4>\r\n\r\n<p>Swipe up on the trackpad to get a bird&rsquo;s-eye view of everything running on your Mac.</p>\r\n</div>\r\n<img alt="" src="http://images.apple.com/macbook-air/images/features_multitouch_gestures.jpg" style="height:103px; width:980px" /></div>\r\n\r\n<div class="row"><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_keyboard_icon.png" style="height:81px; width:81px" />\r\n<h1><img alt="Backlit keyboard. What you see is what you type." src="http://images.apple.com/macbook-air/images/features_keyboard_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<div class="padded"><img alt="" src="http://images.apple.com/macbook-air/images/features_keyboard_speakers.png" style="height:89px; width:244px" />\r\n<p>A pair of stereo speakers is hidden within the unibody enclosure.</p>\r\n\r\n<p>As incredibly compact as MacBook Air is, it still manages to fit a full‑size keyboard that makes typing as natural as it is comfortable. And the keyboard is backlit, so you can type with ease in even the dimmest light. A built-in ambient light sensor detects changes in lighting conditions and adjusts the display and keyboard brightness automatically. From a seat in a sunny caf&eacute; to a seat on a cross‑country red‑eye, you&rsquo;ll always have the perfect lighting for any environment.</p>\r\n</div>\r\n<img alt="" class="across" src="http://images.apple.com/macbook-air/images/features_keyboard_backlit.jpg" style="height:738px; width:863px" /></div>\r\n\r\n<p><img alt="" class="icon" src="http://images.apple.com/macbook-air/images/features_icloud_icon.png" style="height:82px; width:82px" /></p>\r\n\r\n<h1><img alt="iCloud. Your content. On all your devices." src="http://images.apple.com/macbook-air/images/features_icloud_title.png" style="height:95px; width:980px" /></h1>\r\n\r\n<p>iCloud stores your content and lets you access your music, photos, calendars, contacts, documents, and more from whatever device you&rsquo;re on. So if you take a picture with your iPhone or make changes to your meeting schedule on your iPad, iCloud makes sure everything appears on your Mac, too. And it works both ways &mdash; create a to-do list on your Mac and you can make edits to it on your iPhone.<sup>5</sup> <a class="more" href="/icloud/">Learn more about iCloud</a></p>\r\n\r\n<p><img alt="" class="across" src="http://images.apple.com/macbook-air/images/features_icloud_main.jpg" style="height:632px; width:1034px" /></p>\r\n\r\n<div class="grid2cola">\r\n<div class="column first">\r\n<h1><img alt="It’s like having your own team of experts." src="http://images.apple.com/macbook-air/images/features_experts_title.png" style="height:48px; width:686px" /></h1>\r\n\r\n<p>Every new Mac comes with professional advice, award-winning service and support, and a world of online resources.</p>\r\n\r\n<div class="grid2col">\r\n<div class="column first">\r\n<h3>Support from AppleCare.</h3>\r\n\r\n<p>A Mac includes 90 days of free telephone technical support and a one‑year limited warranty. If you purchase the <a href="/support/products/mac.html">AppleCare Protection Plan</a>, you can extend that coverage to three years from the original purchase date of your Mac.</p>\r\n</div>\r\n\r\n<div class="column last">\r\n<h3>Support from the Apple Retail Store.</h3>\r\n\r\n<p>You can always get expert advice at the Genius Bar in any <a href="/retail/">Apple Retail Store</a>. Even better, when you buy a Mac directly from Apple, you can sign up for One to One. A personal trainer will help you transfer files from your old computer and give you a year&rsquo;s worth of in-person training sessions.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<img alt="" class="last right" src="http://images.apple.com/macbook-air/images/features_experts.jpg" style="height:365px; width:282px" /></div>\r\n<!--/main-->'),
(5, 'testss', 'tssss', '', 0.00, 0.00, 0.00, 0, '', '', 0.03, 0, 0, 1, 0, 32, 0, 10, 0, '2015-08-06 02:19:20', '', '', 0, ''),
(6, 'fdfsfsa', 'fgsdgsdfg', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 145, 0, 31, 0, '2015-08-06 05:28:37', 'upload/20150806/20150806090547563.png', 'upload/20150806/20150806090547563220x220.png', 0, ''),
(7, 'dfd', 'ccvx', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 353, 0, 31, 0, '2015-08-06 06:44:28', 'upload/20150806/20150806090516764.png', 'upload/20150806/20150806090516764220x220.png', 0, ''),
(8, 'admin', 'xxzasdada', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 53, 0, 31, 0, '2015-08-06 06:47:38', 'upload/20150806/20150806090459386.png', 'upload/20150806/20150806090459386220x220.png', 0, ''),
(9, '', '', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 0, 0, 0, 0, 0, 0, '2015-08-06 06:48:11', '', '', 0, ''),
(10, 'test try', 'sdsfxxc', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 21, 0, 31, 0, '2015-08-06 06:54:58', 'upload/20150806/20150806090250584.png', 'upload/20150806/20150806090250584220x220.png', 0, ''),
(11, 'Cool boy', 'asda', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 231, 0, 30, 0, '2015-08-06 07:05:45', 'upload/20150806/20150806090418229.png', 'upload/20150806/20150806090418229220x220.png', 0, ''),
(12, 'leisdak', 'fjsdkfa', '', 0.00, 0.00, 0.00, 0, '', '', 0.00, 0, 0, 1, 0, 533, 0, 31, 0, '2015-08-06 07:06:46', 'upload/20150806/20150806070642648.png', 'upload/20150806/20150806070642648220x220.png', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_level`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_level` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_level`
--

INSERT INTO `mengranzhang_wbsd14_ass2_level` (`id`, `level_name`) VALUES
(1, 'General admin'),
(2, 'Goods admin'),
(3, 'Order admin'),
(4, 'Super admin');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_manage`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_manage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pwd` char(40) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `login_count` mediumint(6) NOT NULL DEFAULT '0',
  `last_ip` varchar(20) NOT NULL,
  `last_time` datetime NOT NULL,
  `reg_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_manage`
--

INSERT INTO `mengranzhang_wbsd14_ass2_manage` (`id`, `user`, `pwd`, `level`, `login_count`, `last_ip`, `last_time`, `reg_time`) VALUES
(73, 'admin', '315f166c5aca63a157f7d41007675cb44a948b33', 2, 3, '::1', '2015-08-05 17:54:45', '2014-05-13 15:18:00'),
(74, 'adminadmin', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 1, 14, '::1', '2015-08-05 16:52:24', '2014-05-13 15:18:24');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_nav`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_nav` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `info` varchar(200) NOT NULL,
  `sort` mediumint(8) NOT NULL,
  `sid` mediumint(8) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_nav`
--

INSERT INTO `mengranzhang_wbsd14_ass2_nav` (`id`, `name`, `info`, `sort`, `sid`, `brand`, `price`) VALUES
(3, 'Phone', '123456', 5, 0, '0', ''),
(4, 'Drinks', 'Drinks', 2, 0, '0', ''),
(5, 'Fruits', 'Fruits', 19, 1, '0', ''),
(6, 'Children', 'Children', 5, 4, '0', ''),
(7, 'Olds', 'Olds', 4, 4, '0', ''),
(10, 'Students', 'Students', 2, 4, '0', ''),
(11, 'Tablets', 'Tablets', 19, 3, '0', ''),
(12, 'Business', 'Business', 1, 4, 'a:1:{i:0;s:1:"1";}', ''),
(13, 'Video', 'Videos', 4, 0, '0', ''),
(14, 'Game', 'Games', 19, 13, '0', ''),
(15, 'Living', 'Living', 3, 0, '0', ''),
(19, 'Eatings', 'Eatings', 6, 0, 'a:1:{i:0;s:1:"1";}', 'a:7:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";i:3;s:6:"50-100";i:4;s:8:"200-1000";i:5;s:8:"400-1500";i:6;s:9:"1000-2000";}'),
(23, 'Components', '2344 Computer ', 8, 0, '0', ''),
(24, 'Watch', 'Watch', 9, 0, '0', ''),
(26, 'DailyGoods', 'DailyGoods', 26, 0, '0', ''),
(29, 'Clothes', 'Clothesggg', 1, 0, 'a:1:{i:0;s:1:"1";}', 'a:6:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";i:3;s:6:"50-100";i:4;s:8:"200-1000";i:5;s:8:"400-1500";}'),
(30, 'Dress', 'Dress', 30, 29, 'a:6:{i:0;s:1:"2";i:1;s:1:"6";i:2;s:1:"7";i:3;s:1:"8";i:4;s:1:"9";i:5;s:2:"10";}', 'a:3:{i:0;s:8:"200-1000";i:1;s:8:"400-1500";i:2;s:9:"1000-2000";}'),
(31, 'Suit', 'Suits', 31, 29, 'a:1:{i:0;s:2:"10";}', 'a:3:{i:0;s:4:"1-50";i:1;s:5:"1-100";i:2;s:5:"30-60";}'),
(32, 'Jeans', 'Jeans', 32, 29, '0', ''),
(38, 'Sports', 'Sports', 38, 29, 'a:2:{i:0;s:1:"9";i:1;s:2:"10";}', ''),
(40, 'Flash Disk', 'Flash', 40, 3, 'a:1:{i:0;s:1:"1";}', ''),
(41, 'Storage', 'Storage', 41, 23, 'a:2:{i:0;s:2:"19";i:1;s:1:"1";}', ''),
(42, 'Laptap', 'Laptop', 42, 23, 'a:3:{i:0;s:1:"1";i:1;s:2:"19";i:2;s:2:"22";}', 'N;'),
(43, 'PC', 'PC', 43, 23, 'a:2:{i:0;s:2:"19";i:1;s:1:"1";}', '');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_order`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_order` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` char(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `buildings` varchar(200) NOT NULL,
  `code` char(6) NOT NULL,
  `delivery` varchar(30) NOT NULL,
  `pay` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ps` varchar(30) NOT NULL,
  `ordernum` varchar(100) NOT NULL,
  `order_pay` varchar(10) NOT NULL DEFAULT 'unpaid',
  `order_state` varchar(20) NOT NULL DEFAULT 'unconfirmed',
  `order_delivery` varchar(14) NOT NULL DEFAULT 'undelivery',
  `delivery_name` varchar(20) NOT NULL,
  `delivery_num` varchar(40) NOT NULL,
  `delivery_url` varchar(255) NOT NULL,
  `refund` tinyint(1) NOT NULL DEFAULT '0',
  `is_record` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `goods` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_order`
--

INSERT INTO `mengranzhang_wbsd14_ass2_order` (`id`, `user`, `name`, `email`, `tel`, `address`, `buildings`, `code`, `delivery`, `pay`, `price`, `text`, `ps`, `ordernum`, `order_pay`, `order_state`, `order_delivery`, `delivery_name`, `delivery_num`, `delivery_url`, `refund`, `is_record`, `goods`, `date`) VALUES
(1, 'username', 'jdkdj', '2342342@qq.com', '234234', 'heijkdj', 'kkfdk', '222333', '', 'cash', 430.00, '', 'Deliver together', '201508051248217706', 'paid', 'confirmed', 'undelivery', '', '', '', 0, 0, 'a:2:{i:2;s:240:"a:10:{s:2:"id";s:1:"2";s:10:"price_sale";s:5:"30.00";s:12:"price_market";s:5:"40.00";s:5:"navid";s:2:"38";s:4:"attr";N;s:3:"num";s:1:"1";s:11:"thumb_small";s:0:"";s:2:"sn";s:3:"400";s:6:"weight";s:4:"0.10";s:4:"name";s:14:"Nike Golf Camo";}";i:3;s:233:"a:10:{s:2:"id";s:1:"3";s:10:"price_sale";s:6:"400.00";s:12:"price_market";s:6:"500.00";s:5:"navid";s:2:"11";s:4:"attr";N;s:3:"num";s:1:"1";s:11:"thumb_small";s:0:"";s:2:"sn";s:5:"ddddd";s:6:"weight";s:4:"0.00";s:4:"name";s:4:"iPad";}";}', '2015-08-05 12:48:21'),
(2, 'username', 'jdkdj', '2342342@qq.com', '234234', 'heijkdj', 'kkfdk', '222333', '--Please select a Delivery com', 'Paypal', 400.00, '', 'Deliver together', '201508051303018763', 'paid', 'confirmed', 'undelivery', '', '', '', 1, 1, 'a:1:{i:3;s:233:"a:10:{s:2:"id";s:1:"3";s:10:"price_sale";s:6:"400.00";s:12:"price_market";s:6:"500.00";s:5:"navid";s:2:"11";s:4:"attr";N;s:3:"num";s:1:"1";s:11:"thumb_small";s:0:"";s:2:"sn";s:5:"ddddd";s:6:"weight";s:4:"0.00";s:4:"name";s:4:"iPad";}";}', '2015-08-05 13:03:01');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_price`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_price` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `price_left` mediumint(8) unsigned NOT NULL,
  `price_right` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_price`
--

INSERT INTO `mengranzhang_wbsd14_ass2_price` (`id`, `price_left`, `price_right`) VALUES
(1, 1, 50),
(2, 1, 100),
(3, 50, 100),
(4, 200, 1000),
(5, 30, 60),
(6, 400, 1500),
(7, 1000, 2000),
(8, 23, 123);

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_record`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_record` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `user` varchar(20) NOT NULL,
  `num` smallint(6) unsigned NOT NULL,
  `attr` varchar(200) NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_rotator`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_rotator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1999) NOT NULL,
  `thumb` varchar(2999) NOT NULL,
  `link` varchar(3999) NOT NULL,
  `date` date NOT NULL,
  `state` tinyint(1) NOT NULL,
  `sort` varchar(1000) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_rotator`
--

INSERT INTO `mengranzhang_wbsd14_ass2_rotator` (`id`, `name`, `thumb`, `link`, `date`, `state`, `sort`) VALUES
(2, 'Amazon', 'upload/20150805/20150805174725771.png', '#', '2015-08-05', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `mengranzhang_wbsd14_ass2_user`
--

CREATE TABLE IF NOT EXISTS `mengranzhang_wbsd14_ass2_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `pwd` char(40) NOT NULL,
  `question` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_time` datetime NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `login_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `mengranzhang_wbsd14_ass2_user`
--

INSERT INTO `mengranzhang_wbsd14_ass2_user` (`id`, `user`, `gender`, `pwd`, `question`, `answer`, `thumb`, `email`, `reg_time`, `last_ip`, `login_time`) VALUES
(4, 'admin', 1, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Your fathers name', 'WWW', 'upload/20140531/20140531140103175.jpg', '23402394802@qq.com', '2014-05-31 14:01:20', '::1', '2015-07-20 00:41:31'),
(6, 'admin2', 1, '315f166c5aca63a157f7d41007675cb44a948b33', 'Your fathes''s name', 'muzi', 'view/default/images/default_face.jpg', 'guest@1234.com', '2015-08-01 08:55:25', '::1', '2015-08-05 12:35:09'),
(7, 'admin3', 1, '315f166c5aca63a157f7d41007675cb44a948b33', 'Your fathes''s name', 'ss', 'view/default/images/default_face.jpg', 'guest@1234.com', '2015-08-01 09:19:41', '', '2015-08-01 09:19:41'),
(8, 'username', 1, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Your fathes''s name', 'zhang', 'view/default/images/default_face.jpg', '123@123.com', '2015-08-05 12:20:58', '::1', '2015-08-05 12:34:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
