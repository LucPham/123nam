-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 05:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `123nam`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `publishing` int(2) NOT NULL,
  `privated` int(11) NOT NULL,
  `tieu_de` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `publishing`, `privated`, `tieu_de`, `url`, `hinh`, `tom_tat`, `description`, `keyword`, `created`, `updated`, `user`) VALUES
(256, 0, 0, 'Album 1: Du Lịch Vũng Tàu', 'album-1-du-lich-vung-tau', '1470799255.jpg', '', '', '', 'Wednesday 10/08/2016, 10:20:54 am', '', 'adm'),
(257, 0, 0, 'Album 2: Viếng Nhà Thờ Tắc Sậy', 'album-2-vieng-nha-tho-tac-say', '1470822979.jpg', '', '', '', 'Wednesday 10/08/2016, 04:56:19 pm', '', 'adm'),
(258, 0, 0, 'Album 3: Cuộc mưu sinh của trẻ Việt kiều không quốc tịch bên hồ Dầu Tiếng', 'album-3-cuoc-muu-sinh-cua-tre-viet-kieu-khong-quoc-tich-ben-ho-dau-tieng', '1470824163.jpg', '', '', '', 'Wednesday 10/08/2016, 05:16:02 pm', '', 'adm'),
(260, 0, 0, 'Album 5: Chàng giám đốc nhổ từng cọng cỏ để có khu vườn đẹp', 'album-5-chang-giam-doc-nho-tung-cong-co-de-co-khu-vuon-dep', '1470824415.jpg', '', '', '', 'Wednesday 10/08/2016, 05:20:14 pm', '', 'adm'),
(261, 0, 0, 'Album 6: 10 đặc sản Quảng Ninh níu chân khách du lịch', 'album-6-10-dac-san-quang-ninh-niu-chan-khach-du-lich', '1470826404.jpg', '', '', '', 'Wednesday 10/08/2016, 05:53:24 pm', '', 'adm'),
(262, 0, 0, 'Album 7: Meet Cholita, The Abused Circus Girrafe from Peru', 'album-7-meet-cholita-the-abused-circus-girrafe-from-peru', '1476186359.jpg', '', '', '', 'Tuesday 11/10/2016, 06:45:59 pm', '', 'PhamlucBlog'),
(263, 0, 0, 'Album 8: Dolphins are Wildlife, Not Entertainers', 'album-8-dolphins-are-wildlife-not-entertainers', '1476186595.jpg', '', '', '', 'Tuesday 11/10/2016, 06:49:55 pm', '', 'PhamlucBlog'),
(264, 0, 0, 'Album 8: Dolphins are Wildlife, Not Entertainers', 'album-8-dolphins-are-wildlife-not-entertainers', '1476186602.jpg', '', '', '', 'Tuesday 11/10/2016, 06:50:01 pm', '', 'PhamlucBlog'),
(266, 1, 0, 'Từ MGM Grand Las Vegas đến Atlantis Palm Dubai', 'tu-mgm-grand-las-vegas-den-atlantis-palm-dubai', '1481513267.jpg', '', '', '', 'Monday 12/12/2016, 10:27:46 am', '', 'PhamlucBlog'),
(267, 0, 0, 'Các phụ nữ Indiana Jones và những hình ảnh hấp dẫn từ năm 1920', 'cac-phu-nu-indiana-jones-va-nhung-hinh-anh-hap-dan-tu-nam-1920', '1482333839.jpg', '', '', '', 'Wednesday 21/12/2016, 10:23:58 pm', '', 'PhamlucBlog'),
(268, 1, 0, 'Khách sạn bằng kính ở trên các vách đá', 'khach-san-bang-kinh-o-tren-cac-vach-da', '1482334109.jpg', '', '', '', 'Wednesday 21/12/2016, 10:28:29 pm', '', 'PhamlucBlog'),
(270, 0, 0, 'Xuân Đinh Dậu 2017: Lần trở về lại trường THPT Hiệp Thành và Những Chuyện Cười Mỏi Hết \'Mồm\'', 'xuan-dinh-dau-2017-lan-tro-ve-lai-truong-thpt-hiep-thanh-va-nhung-chuyen-cuoi-moi-het-mon', '1484878246.jpg', 'Tóm tắt', '', '', 'Friday 20/01/2017, 09:10:45 am', 'Tuesday 14/03/2017, 02:49:56 pm', '10'),
(271, 0, 0, 'Xuân Đinh Dậu 2017: chúc tết 12c2', 'xuan-dinh-dau-2017-chuc-tet-12c2', '1486958598.jpg', 'Chúc tết các bạn lớp 12C2, mùng 2 tết Đinh Dậu 2017.', '', '', 'Monday 13/02/2017, 11:03:18 am', 'Friday 10/03/2017, 10:21:07 pm', '10'),
(272, 0, 1, 'Khu Du Lịch Bửu Long - Đồng Nai', 'khu-du-lich-buu-long-dong-nai', '1488365232.jpg', 'Nằm cách Thủ Đức - Hồ Chí Minh Khoảng 14km, di chuyển bằng xe gắn máy sẽ mất khoảng 30 phút, đánh giá là nơi rộng lớn, nhiểu cảnh thiên nhiên như núi, thác, hồ, rừng và đền chùa. Được mệnh danh là \'Đà Lạt thu nhỏ\'.', '', '', 'Monday 27/02/2017, 09:41:25 am', 'Friday 25/08/2017, 04:58:19 pm', '10'),
(273, 1, 1, 'Hai ngày ở mũi Kê Gà - TP. Phan Thiết - Bình Thuận', 'hai-ngay-o-mui-ke-ga-tp-phan-thiet-binh-thuan', '1502089917.jpg', 'Kê Gà - TP. Phan Thiết - Bình Thuận ngày 06/08/2017, team phượt khá đông gồm 2 thành viên: Phạm Lực, Yến Tuyết', 'Kê Gà - TP. Phan Thiết - Bình Thuận ngày 06/08/2017, team phượt khá đông gồm 2 thành viên: Phạm Lực, Yến Tuyết', 'pham luc, yen tuyet, binh thuan, ke ga, tp phan thiet, ngay 06/08/2017', 'Monday 7/08/2017, 02:11:57 pm', 'Monday 7/08/2017, 05:38:21 pm', '10'),
(274, 1, 1, 'Núi Cúi - T.X Long Khánh Đồng Nai, ngày 12-13/08/2017', 'nui-cui-t-x-long-khanh-dong-nai-ngay-12-13-08-2017', '1502681313.jpg', '[Phạm Lực, Yến Tuyết] Núi Cúi - T.X Long Khánh Đồng Nai chiều thứ 7, ngày 12-08-2017 mục đích là đi ngắm sao băng', '[Phạm Lực, Yến Tuyết] Núi Cúi - T.X Long Khánh Đồng Nai chiều thứ 7, ngày 12-08-2017 mục đích là đi ngắm sao băng', 'pham luc, yen tuyet. nui cui, long khanh, dong nai, 12/08/2017', 'Monday 14/08/2017, 10:28:32 am', 'Monday 14/08/2017, 10:31:10 am', '10'),
(275, 1, 1, 'Núi Chứa Chan - Gia Lào, Đồng Nai ngày 26/08/2017', 'nui-chua-chan-gia-lao-dong-nai-ngay-26-08-2017', '1503888453.jpg', '[Phạm Lực][Yến Tuyết] Thêm một thứ 7 cuối tuần nữa ở núi Chứa Chan - Gia Lào, Đồng Nai ngày 26/08/2017', '[Phạm Lực][Yến Tuyết] Thêm một thứ 7 cuối tuần nữa ở núi Chứa Chan - Gia Lào, Đồng Nai ngày 26/08/2017', 'pham luc, yen tuyet, nui chua chan, gia lao, dong nai, thu 7 26/08/2017', 'Monday 28/08/2017, 09:47:33 am', 'Monday 28/08/2017, 10:04:45 am', '10'),
(276, 1, 1, 'Tà Pao - Bình Thuận, ngày 16/09/2017', 'ta-pao-binh-thuan-ngay-16-09-2017', '1505654811.png', '[Phạm Lực][Yến Tuyết](Đức Mẹ Tà Pao, Đồng Kho - Bình Thuận) Thêm một chiều thứ 7 nữa không ở nhà, đoạn đường hơn 160km nhưng bạn Lực đã chạy xe quá nhanh đến nỗi hơn 5 tiếng đã tới nơi rồi.', '[Phạm Lực][Yến Tuyết](Đức Mẹ Tà Pao, Đồng Kho - Bình Thuận, ngày 16/09/2017) Thêm một chiều thứ 7 nữa không ở nhà, đoạn đường hơn 160km nhưng bạn Lực đã chạy xe quá nhanh đến nỗi hơn 5 tiếng đã tới nơi rồi.', 'pham luc, yen tuyet, ta pao, duc me ta pao, dong kho, binh thuan, 16/09/2017', 'Sunday 17/09/2017, 06:32:45 pm', 'Sunday 17/09/2017, 08:26:51 pm', '10');

-- --------------------------------------------------------

--
-- Table structure for table `auth_token`
--

CREATE TABLE `auth_token` (
  `id` int(11) NOT NULL,
  `selector` int(11) NOT NULL,
  `token` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_token`
--

INSERT INTO `auth_token` (`id`, `selector`, `token`, `userid`, `expired`) VALUES
(9, 12, '3251 3feff', 112, 1235136),
(10, 12, '52g35g35', 12, 14134),
(11, 5465, 'wrg53y5322', 536, 5245),
(20, 0, 'c8c9cad7b920b50f713830b8dc55f59fffbbad98335d9f30e0bca8fab5dfeedd', 10, 1484279170),
(21, 0, 'a4e1e8f9729302940d213be3c19f9b8bf88510efb7ac6287c5fe4ea72d51be78', 10, 1484291707),
(23, 0, '19b782579d9c7b46787d77feab1779c8656490053b7dff8c79a8dee71157b33e', 10, 1484650151),
(25, 0, 'b527a2e12e30b373cbfcab98b3cc35e576eb35600712708bb8c8a2a45a8cdbad', 10, 1484661568),
(27, 0, '47bbc095c362eb353c91d3c9f7f611ea600ebe2ad92a204062ea1171490a7c47', 10, 1484815347),
(28, 0, 'e6ba7e67612d02afcf18af3eca8ca96116b525ed45679f3f7af781bd3fa2718d', 10, 1484815358),
(29, 0, 'bb6eb89b9f9ba36f9df46674c705e80edc0d16cc85be35d59148fddd5dcb4502', 10, 1484815359),
(30, 0, '230f233eb2e6c393d5a6d08f7446371cadb650977d5d5c87df37cf5de9770e07', 10, 1484815359),
(32, 0, '369e53a40c5971e88ceb9222329d128551315074bcd8207979e0399787cc7a63', 10, 1484815439),
(33, 0, '924038df1554a6a3d3407213865b786ba8bcc7cd2199c19acfb1a02b1127f3ab', 10, 1484882531),
(35, 0, '51eb3e9f1b6e265d9b486031aa971ff8baad2a8a4c64cc2a0edd1a3fd30ff046', 10, 1484906071),
(36, 0, '8b6a87781c3da628caaebd82f29022d3d098fbce9c3aab5ab5a50b78bedf4727', 10, 1484906098),
(37, 0, '16f0ea7e4af36422eed78e275575fdf38d5c492eb0f5276861e91cf584be462e', 10, 1484906119),
(38, 0, 'df5397df717b43a007c47ad1ea4a4d216dd15c646f9f5aaf00b93ce351d4ba86', 10, 1484906246),
(39, 0, 'c0fa9c54b2952bcf39ded10fecc0d7c66b9775708055de177a697d404935a09f', 10, 1484906246),
(40, 0, '734ab7aa9a79bc55f48b34029cab8a63a5d7c4ab9954dedf86c7520c449098fc', 10, 1484906247),
(41, 0, '11ac5b80e062ed7c02bf516d0ae30e8da83eddd0732f78d3f106db039399d6c5', 10, 1484906249),
(42, 0, '21a2f316500eae10b01ee19766268542b9b1d8eb1edb97254b1967957eb5c184', 10, 1484906249),
(43, 0, 'fdb3d7bc3f5b7b2dacab1d959ac8057a869c267374446bc2fde85cbf3a703847', 10, 1484906249),
(44, 0, '1bd9f433ac09a27aff882e14959a621384ae47cd8e98eece8d2663ec8abf070c', 10, 1484906249),
(45, 0, '77087fe20a1625d8a1b28d5998f52c6db48b97742f6cd6e3761995db0a3e1360', 10, 1484906250),
(46, 0, '8c083f33c56060ee45e5f4efce7cce959aa38bcd1f68a16e67c0c73e1454ab70', 10, 1484906250),
(47, 0, 'cdf693affa33db841174c4737f2439328e4b27d6d20fc16277d9cb0232ac3a1c', 10, 1484906254),
(48, 0, 'a809aadc4eeb4d96447c1a276df9b46e3406431b882860050dce479f5ea83635', 10, 1484906254),
(49, 0, 'd2fb1c7491b67742be6dc28dacb8759e317c67a3fdcb2255c2d7c91cfb86e2f7', 10, 1484906254),
(50, 0, '52e7608b2c9848dbe060d813bab26ad0843207ce93e8cb34b3b0fb9cf9af9e37', 10, 1484906254),
(51, 0, 'b84b8b71eff3153cb9e9d43060c71271e99d68d98554c5db67722e1533fd6781', 10, 1484906254),
(52, 0, 'f0becdef91a1cb42a4dcb7f034922e3db3e35548e5ab46e157e5c2a296186666', 10, 1484906254),
(53, 0, 'ed529fb75f1ac21838543d89896dcec4e9e89525dd34f3f0085be4cd85fa6b82', 10, 1484906254),
(54, 0, 'bf7ef9428cc4dbaeaee19bf4ae84d3dc4fd077a1c86cea52a850f66c8164fc77', 10, 1484906254),
(55, 0, '8073073b5321b8b9a320b8d349ff2e2d28df89c86edf680e643c7aaa85d2660a', 10, 1484906255),
(56, 0, 'b9a461b158a89f1e0168d0f2d84267d2b5574f7b66591cd5e978282df307795d', 10, 1484906255),
(57, 0, '7a3d5eb45b153f1f6b5004476fcd5fec8b46b4fcb12dd8a7e66ef803d2e70202', 10, 1484906255),
(58, 0, '5aa545ec940eb30ce7dcbf8f0940916e550a66226b7b39988b79b3bd9d342338', 10, 1484906255),
(59, 0, '4ee6dea92d57b42da4cad9576ee932e936023eef650b9570a9cc52a7dacc933e', 10, 1484906255),
(60, 0, '21abbf054c43e0412d30a56a15549b97bde75baf01193ced64baecbcdd0b9ae3', 10, 1484906255),
(61, 0, '3f1218f2b56ddfd935dbc38b203af58c90c6b5f041b828b0b9ef015f22fdac9e', 10, 1484906255),
(62, 0, '9ce957a720cfd3b3286bd46fd4fcfd8f3232c4bed94a93bd9f69156ae5a246d5', 10, 1484906255),
(63, 0, 'd9c5804b836d27a3ede25c4389c36de52a6490befca4c12aaf6d7baa738f0400', 10, 1484906256),
(64, 0, 'ea64626edafcee0aceb8690d277e865cb2f2c5d7e7ad492790c3ae7c8135d7c1', 10, 1484906256),
(65, 0, '4ebfedb53d135ce1067cf80873fae8d64e4cd169402c9543be80071223d7e0b2', 10, 1484906256),
(66, 0, '5a9be03177d8e7336e9391efa79c31d29ffbf4dd1bed023cd6d5594dcd10f595', 10, 1484906256),
(67, 0, '891ac217b24e31a58db0b9b6e976c88b1ca90e1a8efb475e1c653770a42b2fc5', 10, 1484906256),
(68, 0, 'fba493f51b47a19e34b1adede49dc307b525c004bbf0ff3ae1f376485287ed4d', 10, 1484906256),
(70, 0, '7121842797adf7e77562b4cb28e851a142a72b107fbc77b6a963b9ca16719931', 10, 1484921548),
(73, 0, 'def0e0f237702c415ef9f7f3a5b74cd7e4755d7707f49757b4a50b095866683c', 10, 1485263657),
(74, 0, '58b2e6e7ed321cf3dddd7ce3f3714b58412a2ae9827bac6fddc0bca7e5d31868', 10, 1485314305),
(75, 0, '8d48be383e32fb2dedabb545740be72a9a4a0f89743741cf8e55bddfacdc4bf8', 10, 1485352269),
(76, 0, '658b1760e171a5647864fc0d0aa863d23fee9805e87d9506baf90eebeec62df4', 10, 1485528540),
(77, 0, 'd475d6ce13b5d701ffbdf05bc903ba6550f1ac87f54781ea8d44b35ffaecf8c2', 10, 1485528623),
(78, 0, 'a9b1938e9a2f4aa8a506998631586551149bfe461bcc544f80ac0aa739e8b940', 10, 1486390652),
(79, 0, '4ea6de79356deacfb92ac78196df46b636524be1c92e421ff439497305b42c38', 10, 1486390705),
(80, 0, 'eb7e086529260d1ed8fb85bced48faa2b255810d45c21a68923927a9e6d9297a', 10, 1486390706),
(81, 0, '77f82505daecac661f1daa48b52131ed614abbb1f22940fd60f4b21f124c027f', 10, 1486390706),
(83, 0, 'a5768c7ab322807196b428d8b6aec3bd3234f16e9fc6ef591a9a875f681ec6ae', 10, 1486390718),
(84, 0, 'bf1f3803cd8c00e8fbd194a6de01de67aebf4b0963724abb6771de27e9889558', 10, 1486610021),
(85, 0, 'd28ebdcc79983210fdc4fe002fdb6a8d892c1649d66eb5401caa40f170c52b79', 10, 1486629726),
(86, 0, 'd200f4fab7194ecec608cfac859a37284b1ddd7c08dbf1dc3fa0e722b2d9b94d', 10, 1487062010),
(87, 0, 'd1b1fde3ae7b5d444084e41c0d8c0e19157785ebe5468abd6e650795879f60f2', 10, 1487085933),
(88, 0, '49d5fccbc270dde4142180ec56eaf3db463cc891ced8c8ed9c494749ecee8fe4', 10, 1487132042),
(89, 0, '07741faa9f56af75cc227bdd5d8a532cacf62d3d9379942b513929c059621604', 10, 1487167336),
(90, 0, '21079b07a2776bc68d1ea72819a99a4ac4a5d269a08bd1cfea22acb06cb415e0', 10, 1487252530),
(91, 0, 'ac447ece7f39bb3ae5d5fb074fcd369753f93b300ee499ade5b36c1260971d4b', 10, 1487299186),
(92, 0, 'eccc41b5b5bc2ac34443cc664fa4e357ef2b85b5eb9eb6422d8070d7f15dc94a', 10, 1487318570),
(93, 0, '0fcaa05da76539a68c87f2b7a4385123f1c06ce2e3b95cc0182bfad2f7b08df0', 10, 1487328199),
(94, 0, '1f17cbb5245b11b5b3e9c28e9693be40db10b3a91678cd1ad5e58324a3c50293', 10, 1487498651),
(95, 0, '4d445690db68c070853de8fcdffc7431301a54ec6256de8c79b26090c5ff17e8', 10, 1487729265),
(96, 0, '9dbbff26e71f5e5de1e835c6bb0801e78e58dbdfe6200d5ec258e60e86613d27', 10, 1487812034),
(97, 0, '259a61e41108f4bf3a21127dee8d5b88f08e75bf198b7ea6f87ab3027485eb8c', 10, 1487927518),
(99, 0, '728d76992ccdbbdf752bb1bc81ada402d10e878c827cdcb62d5977905c76e166', 10, 1488161345),
(100, 0, 'c4d0f52d5cd94ba7792196053fc8144f879acfed4fe705527dbc20013c76e09c', 10, 1488180076),
(101, 0, 'e905c2b89a4f0d9400258f437e4176a97b964e7de06f4ddb239b5bc4ca9ee021', 10, 1488337929),
(104, 0, 'a09bb3df8c5ca4b320bedffad3abbcb81ce9bdc2dd6109ed4770a1e1397a4898', 10, 1488812125),
(106, 0, '35cc4b367991e0fbf771e773b53105f2b3d225fe77592ad026f689d6064621e4', 10, 1489018300),
(107, 0, '3724c02d4fad3d16919cf63744a4bd548b87e8c6104c13d059d95b4400c4a6b4', 10, 1489138390),
(108, 0, 'fd2d824e9ead1601df9685860607b426344b903a63d669b32ca08d76c097813e', 10, 1489159072),
(109, 0, 'e266f866f496f2e30ae9c7ca4208c38de4b4d833e7cfae308c9e0c6cbe588355', 10, 1489276747),
(111, 0, '9522cf745f2561572f671038380f6657816c8fa0dcf76b790e4557c2912c7b87', 10, 1489461773),
(112, 0, 'e66385ae87acb917a58dc9066be2de5d02181a8082a66a56d4d35671e6b446b0', 10, 1489997058),
(113, 0, 'eb14f79f5d83c584289248608ba41832a138451e1f1657f401c86595f3336931', 10, 1490022194),
(114, 0, '584798522984d16fbfa3d34eb7d995455cfb95df643072fbb263bbb76c997d9d', 10, 1490253296),
(117, 0, '98183ef2919c8f5de3b8b0ae4f8167abce3bd56b6cee07008487840eb8395513', 10, 1490621873),
(118, 0, '99a274407f8173ab76b479117f8eea8878b9a7ce0a4e1e4b3e702ac08eb54d64', 10, 1490665082),
(120, 0, '6989c573ec00c68dd931205940010ad9a9c09f9ea9870e8b539480c22e9cb272', 16, 1490799966),
(121, 0, 'c893c60355f830a2030ac5cfca0d077d17c6bd23d688534babe443ebab260d6d', 10, 1490946481),
(122, 0, '1de65de9cfc3d4b9b29e97a0d55d3a79f3d540dc9737c1f2771aaa21c033a9bf', 10, 1491206797),
(123, 0, '571843546528d10c5f7a11643960c3bbc5a850da720069d44ac8d50e2237bd12', 10, 1491291213),
(124, 0, 'cb1d2051ebec697cf78d4f0612e333b1604a04564d434a9e1c8f7fab1c871804', 10, 1491315321),
(125, 0, '13e6019eadf3a23aa5b8473cf084d76e3f527e49334ce00ec5c00707e774427f', 10, 1491362675),
(126, 0, 'a978a37847ed51d803e2b960fec607bd0f9dbdcaf3e33a5454e71e491ce6d734', 10, 1491726142),
(127, 0, 'f6ca21884794f8386dc72138eff189f88aa61416733243115c32f8c4e2aff734', 10, 1491873854),
(128, 0, '02a4a6eed99c651d6a04a82578cca42860bddd5a9a291ac19f4d9b7f8cacef82', 10, 1492095361),
(130, 0, 'd7369d13c25dffbe1f067f7407c8ad266085ab3edb05d5609891800be4e9f88a', 10, 1492222271),
(132, 0, 'b50c908fb8b2b6d75fadeb31338b26a2f6c5eaa04676a984c44e5a4dcd00cbfc', 10, 1492611558),
(133, 0, '7d7ef07058e1564471cfc0d4489fbfc8a468c7f7210513442636eb75fdcdbb8c', 10, 1492838297),
(134, 0, '84e285c699008886d501270883523415f4889dff6bb43d85d72c21ce14076945', 10, 1492844635),
(135, 0, 'bafd85e67b8188b7f8091bc4896df94bcb65f39cf4657cf0792884fd9680812e', 10, 1493080738),
(136, 0, 'c387a5b1f104d5a00107e90de62446ca209cf9a4719a7c1282cf3c677e5ff9b8', 10, 1493870021),
(138, 0, 'a40e316ed8bb370e8bef13edc18730c882842d150fbfff87dc82cb58add5e506', 10, 1494771839),
(139, 0, 'b30d0b919fac8ee1f87eca491cc92a6e6d60fd65c2f620eaa83e5091edadcdf9', 10, 1495420042),
(140, 0, '8e3d3cb4b14149b866c7db4685c2275b1d622cb253af7d9cb5964f930920057c', 10, 1496394383),
(141, 0, 'cb6364893085a35d8ff6e492028a9f0bfa3e16574620e6fab5b2070c47d3b905', 10, 1496454798),
(142, 0, '006f3b97a2f4171e9a5d768acbcc98d6ade526d372dbb230cfb2d7b1e08dd051', 10, 1496914188),
(144, 0, '41777655e85f53079e126901c679dc9275fdd7684b2fdadc4514b1e9a11d3899', 10, 1498405109),
(148, 0, '0b1f9d3ade10982084b85f0e341982d4e6d82703e43aea9529ea40aad2b501f4', 17, 1499156138),
(149, 0, '7022c7c4afd9f4be322a89cce85679f60cd25deafca0591377f31d6c4a01f7b4', 17, 1499158220),
(150, 0, 'c26cbca7268b268f10d89ac0481b3b68f50f302bc145a69e4d454545f69520bd', 17, 1499158221),
(151, 0, '829f92dccbaac70ab0e242247db73f88be7ec47fa54f7f8cf85436ed0592f06c', 17, 1499158222),
(152, 0, '24b9cc98bdae90ecf9f3422a3dc1c6b9a2ae742f0ca5f59fbc6be27fd8b4ec35', 17, 1499158223),
(153, 0, 'aad6c23c988144cf58904f301f489e4f089b53c3051ed1404560bc0342ce6cbe', 17, 1499158333),
(154, 0, 'a80013f6ba2785cb41aa6752ad1f9c20a3fa55784d53531cf25081fabcee2d60', 17, 1499158354),
(155, 0, 'a08fed3667d2a841dfdedbbf10a065f9413331ffd96f91cb891119bf47837f32', 17, 1499158355),
(156, 0, '9d79bba11f8064915282e4374806be7869e82830a28b85df5d92373639edd75b', 17, 1499158355),
(157, 0, 'f712f7ceea87de3e15895b8da8b7bdfcaf45dc470cc882e2bef903c49ae27a48', 17, 1499158360),
(158, 0, '2b7cd1e3f29fca6de14365108afb7459513d38421488bb0f672fb490c4b10eca', 17, 1499158360),
(159, 0, 'eeba8ae12b16105c2ea1d63e0f0e0f2a447084bf110ce76a8b967c9af73c2387', 17, 1499158361),
(160, 0, 'a6396eb0f20d6aa6728feec1ef5a94d0576dd737f96ca218aecdfe0a78287029', 17, 1499158361),
(161, 0, '5cb7f7377b015e4b69cc4813e9b7f3b9e774db03fa28e9dbb3973d69e0565fee', 17, 1499163093),
(162, 0, 'a946b3250709432ed9578203c33f1f3a28e9780850089bb612ad9a85ff692ead', 17, 1499170837),
(163, 0, 'dd8865253a316ddd2272d2234a55834c66db6f152da3ec6fe61733d1abfa21ce', 17, 1499171762),
(165, 0, 'a0979c85e085f28ef49e19172d3d0ffdc022dba0e20c04f34abe4fc8521328d9', 17, 1499173063),
(166, 0, 'e77a3b53a179ccded2377fdedcd34d2923b75a8ef7d79dd290569fdf81d01800', 17, 1499182360),
(167, 0, 'a789943353feeec64b36a1c16899162e792794825f806484a7dd390a1e23a73e', 17, 1499182472),
(168, 0, '899a30d879f5564a5a318096b5a76701ae795b991c9b3d9fc9e6756c27ea54c9', 17, 1499182472),
(169, 0, '71aa6506704d37c815813bf05f395a99b9824c83c3e953af2784951915482e58', 17, 1499182473),
(170, 0, '8698d88811be14853865cae72402ef877e7fda651c3ad7389aa09ddfa1acc7b8', 17, 1499182537),
(171, 0, 'd734614cc08508fb3f4f6cc17db1ed46f10255c3e453660f05c1a8faacb09945', 17, 1499182665),
(172, 0, 'd89b3c18ab5f1a6dbebdfdb3ef24ad8d0f2da412ef02034f13afcd33c267487a', 17, 1499182726),
(173, 0, '9c8f192bab73bf53f80b2db99024741e4446de54bcb95c81a9171c12680e9f8b', 17, 1499184951),
(174, 0, 'a6a9ea7eba6589809ff4b58fd82cc167e28843c7e4531148ca4ed331d950f026', 17, 1499185150),
(175, 0, '4d80764b843eccd4aba37e2113dccc55462700e239dde8c2bb1ec5bf03266fcc', 17, 1499185230),
(176, 0, 'a32a51476e33a1c02462367fcf40b20ae3bf06e754afaaecd00204fcbeca3b11', 17, 1499185308),
(177, 0, 'df6ac763c6cff171e6985a69be3f1b1b99756bbbfa64c78c14214790354c2c2f', 17, 1499185309),
(178, 0, 'a6dbbbb27da38a2b5fc702f3b32f65f596d1aad66d65fdff512124f0c0a03ecc', 17, 1499185309),
(179, 0, '716c6eeefb6ab7c0bf6cc69e8a6342166f94543eaae3a4d93feb575ab3bcf794', 17, 1499185309),
(180, 0, '0d97ffff7dea6a216b69c2f5705026b602aa317df6750f909fdcf47c4c14cf4b', 17, 1499185309),
(181, 0, '0e5ade15bf543d6a8b94517fca95557627729492fe74ab089510d1da93281928', 17, 1499185310),
(182, 0, '3e2097bcf0c26452323a532425eb4df0fb9f01aa415f9972e6f91861ff4bb6ca', 17, 1499185311),
(183, 0, 'e82ea9003b53f77312fc6cc59c88ec7f40fbc79bbc4b3434bdfd65431b5d393e', 17, 1499185311),
(184, 0, '7427fbd9214035ee2e40e58e9cd2e9672be0ab5b1fe2daa86ef1416549ddaf2d', 17, 1499185311),
(185, 0, '5e8f88ee05f2975993f12d286c5c62f100bb4b5b825d89315951b2bcef44138b', 17, 1499185624),
(187, 0, 'c8b4f67b3dab86f1a976f6f503053c2cfcb0014157276bb17e4a022b8f12aa2c', 17, 1499186158),
(188, 0, '95bab3dbb060e60ce92c27b8ba4c28158d95014f99bdaff625eb58277131c7ea', 17, 1499186227),
(189, 0, '7e12277ff1074297ca4e4a523b943997686b8fdf5fff35b36ba7a41e2bb24495', 17, 1499220769),
(191, 0, '909a3e0738c21a3ff52cf904f3ab5f0f3dd975b32b4e7ba357ad0ebba498816c', 10, 1499337969),
(192, 0, 'e98cbeb71668b33b6259f5abbad3ca72342599feed59b363aeb2cb15a6480e9a', 10, 1499338000),
(193, 0, '73560aa66713aeb1c6814bf2f63caba2741d1ba4cdb2f21f79208f2a3f372934', 10, 1499338532),
(194, 0, '6d238691cbba1e1140303b93ab719dae950498ccc76706177050080f007b6f63', 10, 1499340044),
(196, 0, '82d2a124ae405f6fb6ccac2b5736c27843e67951ee296c150da1926cec0d7dbd', 17, 1500997215),
(197, 0, '856326d2b8ab847f53aa102a33331d87af4821905278fdd5c37f7a9e05cd9ec8', 17, 1500997703),
(198, 0, '8dea063ed35b76fe52f47ec63f9a3fddd36bdce6fd8589d074cac002144287ac', 17, 1500997704),
(199, 0, 'e25fe54418eb60888d0d80e5d152f1ffe9e33179b835738886bd0193f4860ec2', 17, 1500997704),
(200, 0, '0a34418cae51efa70b5852f9f4f54055ab83708003e254c71ffc040399c57596', 17, 1500997704),
(201, 0, 'dce1cdcc32e9cbb7f31a330b3d4b3c4d64fb4cd9afd6b7b34c179b23862fc439', 17, 1500997827),
(202, 0, '4cc49f4d27925fa0319c75e3e1580967c3cc311a8624f9d1256f18a511423a44', 17, 1500997827),
(203, 0, 'e06054a08e0f1c5456ee6e37e9585bb620fe95057973624d1e727ad70d229568', 17, 1500997828),
(204, 0, 'a5e837d54a99480e982fb3f8d0920f0d592f44e26c3cfac9543af5b3939dd500', 17, 1500997828),
(205, 0, '093355aaf927bac53baea4a944a20ee19969fe6766f47616ddccd0aa29239198', 17, 1500997828),
(206, 0, 'c8666c70f2db831d387d546257a7f7a80c49905963da4409683e8ac1cab49590', 17, 1500997828),
(207, 0, '064dffd8bd8889df532ec6298554d1e045825992fc31ef0c90b3fde7f6097906', 17, 1500997859),
(208, 0, 'b52e2d2ab86fc913772a388b0f6928bcd9b916e41ce12ecf64a0ddb1c66e108b', 17, 1500997859),
(209, 0, '0876971bfa934e721e4b6e8df1e5c5cb8cc078e4cc97db21657ce6151d2e1bbd', 17, 1500997860),
(211, 0, '612e040bca88369490cae0635579063766568bd589d56400364c8bed3caa4b3f', 10, 1501145458),
(214, 0, '381295e7d72248bc9be589c29e2cf5f8cfb5e53f22b15596b19fc95b10adc68e', 10, 1501229105),
(217, 0, '5bc0b30edfd7b54450ed1f728a1a48a4c857efa54b47cd9954f5093cc2f1854a', 10, 1501229455),
(218, 0, '37ce69bdb7bd3f03b14154efd2731ad833494c74118b5137248e780be1f9072e', 10, 1501229504),
(221, 0, 'b49f8e8717a2c95a93b62be1c82990453d1a787f0a4017e31ecced78508540c4', 10, 1501267505),
(223, 0, '6772343a399ad53418e6ab8b5c55cfc72fe8bc88e610a56365d2be014c4e4355', 10, 1501299330),
(224, 0, '8b6cfd4ec03bc1163dc54a086f1e710454fb11a334d5703c3738305fb1144e99', 10, 1501299330),
(225, 0, '4c8b38e8182c2f722727c19cedce934ac4a04c215a4723b9cb8ce7120dbe8d73', 10, 1501299330),
(226, 0, '76de44415e2cca15be396f429366338c666d0c58af91830ca23034e5ddbd7bdc', 10, 1501299330),
(227, 0, '5d676dc79a65174fa9af85deba2348a7e8bb6eaa1b951944896af235c379d839', 10, 1501299330),
(228, 0, 'a5704176789249e4c5e817647ea0fd245c6f5b385eafe65451ec8c53d91dc5a5', 10, 1501301237),
(229, 0, 'e6422ce9998ba6bfae49c182a5739dd37069d4aac0b4c7d620ae464b6bf4ad9a', 10, 1501301968),
(230, 0, '87218ef0a6776c9c702bfce82b964f746bb811a7905f582985cf39c4417695c4', 10, 1501301978),
(231, 0, '23566c73bf69bddd56ab674d87b01c70922577de7f78f99e387ec8dbb7c84f55', 10, 1501302090),
(232, 0, '96a2a1e2e8b7324e8047af70d425979fd9a35314d727472335dbc08499b4720c', 10, 1501302461),
(233, 0, '4b075c4a668968f9c974034fe9a06afe8064d5b5fd3181be57a20d6aad652caf', 10, 1501302662),
(234, 0, 'faa603869621a258bf13b558d7109d4a9000e0d9911266dd56a6487473f1047c', 10, 1501302913),
(235, 0, '6a76a4698eec6ac6bfce1122117ced02b433143eeecc7bfb263a47da33bdf6d7', 10, 1501303450),
(237, 0, 'c29dba87b07b3740f3865deb28a405ebe87a727a4c51c590179ea72303fc3018', 10, 1501303542),
(239, 0, 'f7a47a7cb4b1662eda1b188add3cb3918b6e245a881f2cf37301c857b1af151a', 10, 1501303980),
(240, 0, 'd882a6a08ae4be9d2f87da68319dfb7d9318ad1145f4542a0be5ecc3fdaf2a36', 10, 1501303989),
(241, 0, '0e45cd395ed7729d07116305a140fd89a390022922c65cbcfd259839713ead21', 10, 1501304012),
(243, 0, '33eaa9bbb8d0fd0ea4a76abcaf21e395935c1def2cf193477aca24d5fe884e00', 10, 1501304052),
(244, 0, '5498c7d2d51c6fd5ecdd38006613fcbe15eb25524e9c53f884dacfa8bda66079', 10, 1501304072),
(245, 0, '66584a06c8416fc5162b0af10308d601feae7a228732666601f0fafe5638389d', 10, 1501490229),
(246, 0, 'c409e4442eff6f11198f665c830dfdc87dc371ff860d65929a042ce2da51a68d', 10, 1501551048),
(248, 0, '8de5977f2f13fa147d8c7f1381d37c50de10cc43f9d2cb1f5704313cad28334a', 17, 1501601344),
(249, 0, '2f255d5c36b66217c552a183ff68f85522a81a56c8d650c8b49fa687504cf610', 17, 1501601451),
(250, 0, '95b14e18dca2a3de96fafa5005497f763203a4da62c4f6db687d9f3f9c0f29fb', 10, 1501611085),
(251, 0, 'a720ac6729f24b33fd166d62142f27529cfd55d209cbc339ba78ca04d8c2ca52', 10, 1501611120),
(252, 0, 'b0208a8a38ce7928cc561b23dd8fe7c61702f8bc4de50432f4ccc1b979111b7d', 10, 1501611155),
(253, 0, 'e43ebd0604d120aa89e96b151cc58920e9bed309850132b932bd8004dc4c1660', 10, 1501611171),
(254, 0, '1f7d8e4d645b2c961a28c7d6fac25f4a94718b5c0a85b67fd0fa690fc762337f', 10, 1501611206),
(255, 0, 'f75d62450e75267010075e6ca313ca2930ae7e92b6ee2572f8fe1ec76f4fd931', 10, 1501611218),
(257, 0, 'b2815cf17f8f5d536e0cf392b3da832101be83996642eb148f02c1ee8850a218', 10, 1501611351),
(258, 0, 'd718ea866fec733d806ae5620cc0a508d9c81ee26cddc7d7394eb94e250e06f8', 17, 1501642254),
(259, 0, 'acdaab1cb319406150889568fc159a5cad8a0b7d97583526d2935571155e237a', 17, 1501642299),
(260, 0, '1e7f0138098d10cd5a15d12520369d83515189c96c6584ee26bf417c10bb1529', 17, 1501642334),
(261, 0, '8178459d40051ba2105572029d39659b105f46b4d6379cd72cc214d4e6b67d36', 17, 1501642385),
(262, 0, 'f64cc46581dcaacf14541b5f3bde94dab27f1579bf437790b2623c4ac68a391e', 10, 1501655776),
(266, 0, 'c0e25920ebf9d8c78fc706149f0a5588a90eafa0202098ace16c6181c426e502', 10, 1501732021),
(267, 0, '0a28a5456d3f6dfaebc52d0195e64bade7a37bb9b403205061b1a84d0fd8ff21', 10, 1502102040),
(268, 0, 'e039666bb4992ff37c904572163d0c1159e3a74d1a98fc9437a8bfd70fba7549', 10, 1502102061),
(269, 0, 'd84a4c3bd2bd0b3045d7de6c34dba813af01318baee805d71ef9d903a5280f5c', 10, 1502102072),
(272, 0, '74951c6c417dc845035d1bcde9dbe5609de59fc4233315407388e688d183e2c5', 10, 1502766877),
(274, 0, '9c3435b3b3fec3d3d5b4e4f1d5a9276079951ab533decc20eaf1b5e54cb40c53', 10, 1503109786),
(275, 0, '4abdcfa2360d3d8a410e8d32df68f7ea58ffdac8dba9afaa4c9a3c4f24774d8f', 10, 1503109799),
(276, 0, '24bfd2662c8f210c0a597445a6e9316d0ae6de07456032895c2d2192b969e86b', 10, 1503109847),
(277, 0, '43bdae4c113a0b935e78d71a1ad6a53cf67834b55d9f92d4a953317615d77718', 10, 1503109888),
(278, 0, '2f417f1ce229127a3145901a934fe4f93f1cad443ec3e61aa969ce9da55a77ff', 10, 1503302378),
(279, 0, 'b0ff427651e9f0feeede7ea9ba56285b21ffc8b88147ff4ada49ba5297a5bbd4', 10, 1503302395),
(280, 0, '53b35b06e2c40fe172bee07f7a200444e8dc402dc9068182edbcffa1605027fc', 17, 1503418811),
(281, 0, '157ea0f5fd456c45944c4082a572b5786c95957dee3f1fabdfdc79cb9379cb7a', 17, 1503418974),
(282, 0, '60c90fedcd5105000b9bd5e9c252f643b238fdb2a2a131c1062040efdcce4970', 17, 1503419174),
(283, 0, '1c9e7b7f7e071e2e91a9a9c943adcb09533d328734cf3139c4c1960b49a226d5', 17, 1503939006),
(284, 0, 'c489a25cd0280ac6ba107c5f3222494ef83bb7d80bb35c7e86c5e59cb00fd27d', 17, 1503993406),
(285, 0, '22fe718713e1bf4e8c7958504a0d48e34d1f34520a3785a13c1ba224e1617b13', 17, 1504023231),
(286, 0, 'd3a1784cb22c14e9aa7a29b6bf5a82ea7e6573b49e95f396abc7ba82fcfc369c', 17, 1504325550),
(287, 0, 'cea6d8d577e4b0a6651038dbe8b6ebb338ebc86d511fa4a3e2802c6425859045', 17, 1504325921),
(288, 0, 'c267c225a690057818c4ccd6fd86243f6392ff8feb4133f428f264ec70aca45f', 17, 1504326094),
(289, 0, '31b122f25a61b9ca3a741ff2e26348799e497b11e31bbe0ff1ef34759a1e495a', 17, 1504326714),
(290, 0, '5a9a94dd7d63483058501bddb5fecff567b534268417e8f3de1e573e32a3984d', 17, 1504326939),
(291, 0, '37eef263f9165c627d7033094f5dded84e2d5a4bcabb6978c340a96e3256379b', 17, 1504326939),
(292, 0, '0cfe517eb715288ba992c574f246a5450106bf636210fc8a09cbcf78c784f8df', 17, 1504326939),
(293, 0, '00643aef5f5dc43f4f2e15499cd516d42b057ed34e735a0581fcfc74a3f1f856', 17, 1504326940),
(294, 0, 'c1d49c21ad53d28052c796e0d9b0da4e2e8bf590847594c59c50b884a3cfe8d4', 17, 1504326940),
(295, 0, 'b276da0f49eb213336368ac57b94439aaa23ca18742beda17e1b6f7df6898f1f', 17, 1504326940),
(296, 0, 'eadc5cff5d2085bda0af84b3d7d686637f7969afbd501928899eded5dc989253', 17, 1504326940),
(297, 0, 'eda7697362bf505ef0f4b12fb647b99f8e778fae7a37ab1c5254d226efd934d0', 17, 1504326941),
(298, 0, 'a87b88afff2945e5c6aa8d97b2f999307723463ed69fa2061e45a6e1a8d4ecee', 17, 1504326941),
(299, 0, '2d18d282db96c5f312a6bb01a946faba046b93e8066d3edf599aed4c41227c3c', 17, 1504326941),
(300, 0, 'e2763fbb6d2c5547ae40557bc93b31ef80e1034c1245adaf34e5987fe835a0af', 17, 1504326976),
(301, 0, 'f720ff5667e1d8369597cbdb76d13d7067c5e8f6c4aec8bc8e89ea761c61d10b', 17, 1504326976),
(302, 0, '1aca9915c0e3607035003daf3f29503e0ee45609f7863be48e9949e55ac2eb7d', 17, 1504326976),
(303, 0, '7681eaa6d3553b3fc2d69fe77d1f2c6b4a4404e107c4ec1a0aa706970478e31a', 17, 1504326976),
(304, 0, 'ca5015207ace122178eece1b9e12002982683f3a36ca39a6deeeec64172dc8cc', 17, 1504327145),
(305, 0, 'faf039d4d09269eadc62cd199d00256bb10e1bcb36e47b93ff9af06988e90536', 17, 1504327591),
(306, 0, '240c36b95149885f63eefe071cbe8a1ad107278f3aa65a88e25672d8f08335de', 17, 1504344324),
(307, 0, '657284c3c09dc2d99cdbb0c7c49cd7a29a7f88405c95d2a69dfbc87fb298c288', 17, 1504344350),
(308, 0, 'ed23ae1a4b28ef76ddfd056c1899ff4a329a2fd98d5d6e39a1d37b6f16e0cfac', 17, 1504344407),
(309, 0, '285aead47d1f1a1e489c420fb6c5e0c0bf4c51a290369bab7a7257b1e48d868b', 10, 1504509024),
(310, 0, '9cbc2849e959962daf78917feaadebb7872fa21332dbd77b1e1f097f1f460c49', 17, 1506099522),
(313, 0, '575807307f15b23678e970f8c223678989df8e3ffc15a9f17bedb4342f4ea79b', 10, 1507341002),
(314, 0, '27f6f267660f928c6e778e98f7734488cc0a253077b12a8e2362b6fbd2f8377c', 10, 1507341012),
(315, 0, '52c903cf2cf5032620c0c18e821c1ac1d077fae3341eb96af9d526f3bfdb2e85', 10, 1508379505),
(319, 0, '6ab995c9cbecdc873d0ded821b310d6bf90ae21ea88748aa81860ed46da57e04', 17, 1508927248),
(320, 0, 'ce1d1ed47bd3185642610e4e15074bc073c5bd2d074e268644d4bbda76a219e1', 10, 1509598731),
(321, 0, '2b227cb6a71bd0f5587a80a31193833a7f1de44ddd8a69ad7f8a2d4ac18ad758', 10, 1509869402),
(322, 0, 'f25dcee26cf5278dc203a43d250089e61f875423fb92953fb61d356bf7ee4df2', 10, 1510387142),
(323, 0, '182afd8ef4fde760b0992c27830ae588599976ff14a93b836960207064fa04e1', 10, 1511506953);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `imgName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `layout` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hide_show` int(11) NOT NULL,
  `usingNow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `imgName`, `link`, `size`, `width`, `height`, `layout`, `location`, `hide_show`, `usingNow`) VALUES
(1, '1482975399-1482832585-banner-update2.gif', 'http://mp3.zing.vn/bai-hat/Em-La-Cua-Anh-Ho-Viet-Trung---Ho-Quang-Hieu/ZW6FCD6Z.html', 170, 170, 620, 'DET', 'left', 0, 1),
(2, '1484906370-bannerindex.jpg', '', 162, 162, 620, 'IND', 'left', 0, 1),
(3, '1479656399-sidebar_cate_right.jpg', '', 160, 160, 600, 'CATE', 'left', 1, 1),
(4, '1484906370-bannerindex.jpg', '', 162, 162, 620, 'IND', 'right', 0, 1),
(5, '1479656399-sidebar_cate_right.jpg', 'link banner left', 160, 160, 600, 'CATE', 'right', 1, 1),
(6, '1482975400-1482832585-banner-update2.gif', 'http://mp3.zing.vn/bai-hat/Em-La-Cua-Anh-Ho-Viet-Trung---Ho-Quang-Hieu/ZW6FCD6Z.html', 170, 170, 620, 'DET', 'right', 0, 1),
(7, '1484906474-bannerindex.jpg', '', 162, 162, 620, 'Al', 'left', 0, 1),
(8, '1484906474-bannerindex.jpg', '', 162, 162, 620, 'Al', 'right', 0, 1),
(9, '1484554841-category-left.png', 'http://mp3.zing.vn/bai-hat/Lam-Nguoi-Yeu-Em-Nhe-Baby-Wendy-Thao/ZW78I79O.html', 365, 365, 1129, 'categoryNews', 'left', 0, 1),
(10, '1484554841-category-right.png', 'http://mp3.zing.vn/bai-hat/Lam-Nguoi-Yeu-Em-Nhe-Baby-Wendy-Thao/ZW78I79O.html', 366, 366, 1129, 'categoryNews', 'right', 0, 1),
(11, '1484555219-crtevt.jpg', 'http://mp3.zing.vn/bai-hat/Sau-Tat-Ca-ERIK-ST-319/ZW7O777O.html', 160, 160, 600, 'crtEvt', 'left', 0, 1),
(12, '1484555220-crtevt.jpg', 'http://mp3.zing.vn/bai-hat/Sau-Tat-Ca-ERIK-ST-319/ZW7O777O.html', 160, 160, 600, 'crtEvt', 'right', 0, 1),
(13, '1484555682-myEvt.jpg', '', 180, 180, 474, 'myEvt', 'left', 0, 1),
(14, '1484555682-myEvt.jpg', '', 180, 180, 474, 'myEvt', 'right', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blockemegazine`
--

CREATE TABLE `blockemegazine` (
  `id` int(12) NOT NULL,
  `idkey` int(12) NOT NULL,
  `postid` int(12) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blockemegazine`
--

INSERT INTO `blockemegazine` (`id`, `idkey`, `postid`, `content`, `img`) VALUES
(36, 7, 125, '<p>Cuối c&ugrave;ng điều anh vẫn muốn n&oacute;i, cảm ơn em nhiều. Cảm ơn mỗi tối em ngồi lại với anh thật l&acirc;u, thật rất l&acirc;u. Cảm ơn em đ&atilde; tin tưởng anh v&agrave; hy sinh thời gian, c&ocirc;ng sức cho anh. Anh t&ocirc;n trọng v&agrave; tr&acirc;n trọng điều đ&oacute;.</p>\r\n\r\n<p>Ch&uacute;ng ta, anh biết vẫn c&ograve;n nhiều kh&oacute; khăn v&agrave; thử th&aacute;ch ph&iacute;a trước nhưng điều đầu ti&ecirc;n l&agrave; mỗi ch&uacute;ng ta trước đ&atilde;, nếu ch&uacute;ng ta c&ugrave;ng cố gắng, c&ugrave;ng h&ograve;a c&ugrave;ng một nhip đập, c&ugrave;ng chung một &yacute; ch&iacute; th&igrave; tất cả đều l&agrave; chuyện nhỏ ph&iacute;a trước, em h&atilde;y tin như vậy.</p>\r\n\r\n<p>Th&ocirc;i vậy được rồi nh&eacute;, ch&uacute;c em lu&ocirc;n vui, tối đắp chăn thật ấm, ngủ thật ngon &lt;3</p>\r\n\r\n<p style=\"text-align:right\"><strong>Phạm Văn Lực</strong></p>\r\n', '14966747187.jpg'),
(30, 1, 125, '<p>Xin ch&agrave;o c&ocirc; Yến Tuyết (xin lỗi v&igrave; t&ocirc;i gọi l&agrave; c&ocirc; nh&eacute;), được biết c&ocirc; vừa mới k&yacute; một hợp đồng &quot;b&aacute;n t&igrave;nh cảm&quot; với anh Phạm Lực, với tư c&aacute;ch l&agrave; người trong cuộc kh&ocirc;ng biết cảm nghĩ của c&ocirc; l&uacute;c n&agrave;y như thế n&agrave;o? C&ocirc; c&oacute; cảm thấy m&igrave;nh thiệt hại trong hợp đồng n&agrave;y kh&ocirc;ng? Hay thấy m&igrave;nh vớ được một hợp đồng b&eacute;o bở? (Inbox trả lời nh&eacute; :D).</p>\r\n\r\n<p>T&ocirc;i đ&atilde; đọc sơ qua bản hợp đồng n&agrave;y v&agrave; t&ocirc;i thấy c&ocirc; thật l&agrave; một người kh&ocirc;n ngoan v&agrave; may mắn, c&aacute;c điều khoản c&ocirc; đưa ra đều rất kh&oacute; thực hiện (trừ điều số 3) cho anh Phạm Lực kia. T&ocirc;i đo&aacute;n l&agrave; anh kia sẽ &quot;no đ&ograve;n&quot; với c&ocirc;.</p>\r\n\r\n<p>Nhưng d&ugrave; sao cũng ch&uacute;c mừng khi hợp đồng n&agrave;y được k&yacute; kết giữa đ&ocirc;i b&ecirc;n, khi kh&aacute;ch h&agrave;ng của c&ocirc; l&agrave; người rất tiềm năng (lu&ocirc;n đ&uacute;ng giờ chẳng hạn), hy vọng hợp đồng n&agrave;y sẽ ph&aacute;t huy t&aacute;c dụng v&agrave; tạo ra một cặp đ&ocirc;i &quot;tai tiếng&quot; cho x&atilde; hội.</p>\r\n\r\n<p>Thay mặt hội đồng giải quyết c&aacute;c vụ chia rẽ ch&uacute;c c&aacute;c bạn lu&ocirc;n vui vẻ, nhớ nằm l&ograve;ng c&aacute;c điều khoản trong hợp đồng v&agrave; nếu cần giải quyết chia tay hay &quot;đ&aacute;nh nhau&quot; g&igrave; đ&oacute; h&atilde;y nhớ đến t&ocirc;i, t&ocirc;i kh&ocirc;ng d&aacute;m sẽ gi&uacute;p c&aacute;c bạn l&agrave;m l&agrave;nh nhưng hy vọng sẽ gi&uacute;p c&aacute;c bạn &quot;chia tay&quot; một c&aacute;ch dễ nhất :))</p>\r\n\r\n<p>&nbsp;</p>\r\n', '14966748961.jpg'),
(51, 5, 130, '<p>Ng&agrave;y 6: ng&agrave;y cuối t&ocirc;i ở nh&agrave; đợt nghỉ lễ 30//4 - 01/05, h&ocirc;m đ&oacute; l&agrave; ng&agrave;y 01/05/2017 (thứ 2), c&ocirc; cũng thực hiện đều đặn tin nhắn cho t&ocirc;i.</p>\r\n\r\n<p>B&acirc;y giờ th&igrave; nội dung cũng kh&ocirc;ng c&ograve;n lời &quot;hăm dọa&quot; nữa n&ecirc;n t&ocirc;i kh&ocirc;ng sợ :)). Hay tại v&igrave; hăm dọa cũng kh&ocirc;ng c&oacute; t&aacute;c dụng với t&ocirc;i n&ecirc;n kh&ocirc;ng c&ograve;n c&acirc;u từ n&agrave;o ph&ugrave; hợp nữa n&ecirc;n c&ocirc; nhắn c&oacute; vẻ kh&aacute; đ&agrave;ng hoảng :D. N&oacute;i vậy th&ocirc;i chứ t&ocirc;i biết c&ocirc; tốt v&agrave; dễ thương m&agrave;.</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m đ&oacute; t&ocirc;i cũng rất vui vẻ, t&ocirc;i nghĩ c&ocirc; cũng vậy (v&igrave; được về nh&agrave; m&agrave;). G&igrave; chứ được về nh&agrave; l&agrave; c&ocirc; sướng nhất, kh&ocirc;ng c&ograve;n hạnh ph&uacute;c n&agrave;o hơn (c&oacute; lẽ về nh&agrave; được ăn ngủ nhiều :D).</p>\r\n\r\n<p>Ng&agrave;y 7: ng&agrave;y cuối c&ugrave;ng &quot;l&atilde;nh &aacute;n&quot;, cuối c&ugrave;ng th&igrave; c&ocirc; cũng đ&atilde; thực hiện trọn vẹn đầy đủ 7 ng&agrave;y nhắn tin một c&aacute;ch xuất sắc, xin ch&uacute;c mừng v&agrave; b&agrave;y tỏ sự ngưỡng mộ d&agrave;nh cho bạn.</p>\r\n\r\n<p>T&ocirc;i c&ograve;n nhớ r&otilde; l&agrave; h&ocirc;m đ&oacute; t&ocirc;i nhận được tin nhắn khi t&ocirc;i c&ograve;n ở tr&ecirc;n xe, bắt đầu trở lại việc học h&agrave;nh v&agrave; tối trước đ&oacute; t&ocirc;i c&ograve;n gặp c&ocirc;.</p>\r\n', '14976900845.jpg'),
(39, 1, 127, '<p>block1 update</p>\r\n', '14972571841.jpg'),
(40, 2, 127, '<p>block2 update</p>\r\n', '14972571842.jpg'),
(41, 3, 127, '<p>block3 update</p>\r\n', '14972571843.png'),
(50, 4, 130, '<p>Ng&agrave;y 5: Thật sự rất đ&aacute;ng suy ngẫm cho bản th&acirc;n t&ocirc;i, ai cũng c&oacute; điều ước. Khi c&ograve;n nhỏ ch&uacute;ng ta mơ ước th&agrave;nh c&ocirc;ng ch&uacute;a, ho&agrave;ng tử, gặp người t&igrave;nh trong mộng. Lớn l&ecirc;n t&yacute; nữa, khi biết về cuộc đời nhiều hơn ch&uacute;ng ta ước g&igrave; m&igrave;nh l&agrave; kỹ sư, l&agrave; doanh nh&acirc;n th&agrave;nh đạt, l&agrave; b&aacute;c sĩ giỏi để kiếm được thật nhiều tiền.</p>\r\n\r\n<p>V&agrave; tới b&acirc;y giờ, trong tin nhắn ng&agrave;y 5 của c&ocirc; cho t&ocirc;i c&ocirc; chỉ ước g&igrave; t&ocirc;i bớt ham chơi lại, chỉ ước g&igrave; t&ocirc;i d&agrave;nh một ch&uacute;t thời gian v&ocirc; bổ của t&ocirc;i cho c&ocirc;. Hơi x&oacute;t xa với t&ocirc;i, thật sự với c&ocirc; t&ocirc;i đ&atilde; đợc đi đọc lại tin nhắn n&agrave;y rất nhiều lần v&agrave; thắc mắc tại sao t&ocirc;i lại v&ocirc; t&acirc;m tới cỡ đ&oacute;.</p>\r\n\r\n<p>Gi&aacute;o dục đ&acirc;u dạy t&ocirc;i điều đ&oacute;, thời gian đ&acirc;u bắt t&ocirc;i xa c&aacute;ch người t&ocirc;i đ&atilde; quen một c&aacute;ch lạnh l&ugrave;ng như thế. Lại một lần nữa người phải chịu đựng những điều đ&oacute; l&agrave; c&ocirc;. T&ocirc;i tin những điều c&ocirc; n&oacute;i trong tin nhắn n&agrave;y l&agrave; thật v&agrave; phản &aacute;nh đ&uacute;ng con người t&ocirc;i.</p>\r\n\r\n<p>Giống như h&ocirc;m 30/4 t&ocirc;i c&oacute; hẹn với c&ocirc; nhưng cuối c&ugrave;ng lại qu&ecirc;n v&agrave; để c&ocirc; phải gọi, đ&aacute;ng lẽ nếu t&ocirc;i thật sự c&oacute; t&acirc;m th&igrave; c&ocirc; đ&acirc;u phải l&agrave;m những điều đ&oacute; vốn dĩ l&agrave; tr&aacute;ch nhiệm của t&ocirc;i. Nhưng d&ugrave; sao c&ocirc; vẫn tha thứ cho t&ocirc;i, cảm ơn lần nữa nh&eacute;.</p>\r\n', '14976900844.jpg'),
(49, 3, 130, '<p>Ng&agrave;y 4: C&ocirc; tiếp tục thực hiện &quot;h&igrave;nh phạt&quot; một c&aacute;ch rất đầy đủ, h&ocirc;m đ&oacute; l&agrave; buổi tối ng&agrave;y 29/4/2017 (tối thứ 7) n&oacute; đẹp l&agrave;m sao. C&ocirc; nhắn tin cho t&ocirc;i, kh&ocirc;ng biết c&ocirc; nghĩ g&igrave; chứ t&ocirc;i vẫn lu&ocirc;n cảm nhận được tấm l&ograve;ng nơi c&ocirc;, mặc d&ugrave; khi n&oacute;i chuyện t&ocirc;i tỏ ra c&oacute; vẻ hơi v&ocirc; t&acirc;m, lạnh l&ugrave;ng với c&ocirc; nhưng c&ocirc; biết đ&oacute; mấy thứ đ&oacute; t&ocirc;i hay n&oacute;i giỡn th&ocirc;i chứ t&ocirc;i hiểu c&ocirc; hết.</p>\r\n\r\n<p>C&ocirc; biết kh&ocirc;ng, khi t&ocirc;i đọc tới c&acirc;u &quot;sư phụ giả bộ l&ecirc;n n&oacute;i chuyện với t&ocirc;i đi&quot;, t&ocirc;i cảm thấy t&ocirc;i c&oacute; lỗi với c&ocirc; nhiều, khi t&ocirc;i cần c&ocirc; lu&ocirc;n sẵn t&acirc;m gi&uacute;p đỡ ấy vậy m&agrave; chỉ việc n&oacute;i chuyện với c&ocirc;, gi&uacute;p c&ocirc; vơi nỗi c&ocirc; đơn hoặc muộn phiền g&igrave; trong l&ograve;ng m&agrave; t&ocirc;i cũng kh&ocirc;ng l&agrave;m cho c&ocirc; được, t&ocirc;i sai nhiều c&aacute;i. Xin h&atilde;y tha lỗi cho t&ocirc;i nh&eacute;, c&oacute; cơ hội l&agrave; t&ocirc;i sẽ b&ugrave; đắp lại ngay cho c&ocirc;.</p>\r\n\r\n<p>Cũng kh&ocirc;ng nhiều lần ch&uacute;ng ta được n&oacute;i chuyện với nhau, thật sự n&oacute;i với nhau như hồi c&ograve;n cấp 3 nữa, v&igrave; b&acirc;y giờ thời gian, l&yacute; tưởng, v&agrave; địa điểm kh&ocirc;ng cho ph&eacute;p ch&uacute;ng ta như thế nữa. Nhưng t&ocirc;i vẫn lu&ocirc;n ghi nhớ v&agrave; cố gắng mang những điều ch&iacute; &iacute;t l&agrave; vui vẻ đến cho c&ocirc;.</p>\r\n', '14976900843.jpg'),
(48, 2, 130, '<p><strong>Ng&agrave;y 2: </strong>Cũng l&agrave; một buổi s&aacute;ng tốt l&agrave;nh, nhưng giờ đ&acirc;y mọi chuyện dường như kh&aacute;c đi, với lời lẽ rất chi l&agrave; Quy&ecirc;n, mặc d&ugrave; c&oacute; &yacute; tốt nhưng c&acirc;u chữ kh&ocirc;ng thể hiện điều đ&oacute;.</p>\r\n\r\n<p>B&igrave;nh thường người ta ghi: ch&uacute;c sp buổi s&aacute;ng vui vẻ l&agrave; ổn rồi, nhưng kh&ocirc;ng, người đ&agrave;nh ghi: ch&uacute;c sp B&Ecirc; Đ&Ecirc; buổi s&aacute;ng vui vẻ, đ&acirc;y mới l&agrave; vấn đề của c&acirc;u chuyện. Mặc d&ugrave; t&ocirc;i b&ecirc; đ&ecirc; thật :D nhưng m&agrave; c&ocirc; c&ograve;n đ&agrave;o s&acirc;u v&agrave;o nỗi đau của t&ocirc;i l&agrave;m g&igrave;? Người đ&agrave;nh l&ograve;ng thế thật sao người?</p>\r\n\r\n<p>Nhưng được c&acirc;u cuối vớt v&aacute;t lại ch&uacute;t &iacute;t, cũng thể hiện th&aacute;i độ tốt đối với người lớn tuổi v&agrave; c&oacute; c&ocirc;ng. C&ograve;n c&acirc;u trong ngoặc (cảm thấy t&ocirc;i thật ngọt ng&agrave;o) th&igrave; t&ocirc;i chưa khẳng định được v&igrave; t&ocirc;i chưa &quot;ăn&quot; ahihi.</p>\r\n\r\n<p><strong>Ng&agrave;y 3: </strong>Thời điểm b&acirc;y giờ đ&atilde; chuyển qua buổi tối, h&ocirc;m đ&oacute; l&agrave; tối 28/4/2017 (tối thứ 6), tối đ&oacute; t&ocirc;i đ&atilde; về tới nh&agrave; để chuẩn bị cho những ng&agrave;y th&aacute;ng &quot;bận bịu&quot; 30/4. C&ocirc; cũng l&agrave; người nhắn cho t&ocirc;i đ&ocirc;i lời, t&ocirc;i cảm nhận được tấm l&ograve;ng của c&ocirc;, t&igrave;nh cảm thật tuyệt vời nơi c&ocirc; d&agrave;nh cho t&ocirc;i, t&ocirc;i cảm ơn rất nhiều v&igrave; điều đ&oacute;.</p>\r\n\r\n<p>D&ugrave; c&ocirc; lu&ocirc;n bận bịu học h&agrave;nh, l&agrave;m th&ecirc;m, gia đ&igrave;nh, em &uacute;t nhưng c&ocirc; vẫn lu&ocirc;n d&agrave;nh thời gian nhớ đến t&ocirc;i, sẵn s&agrave;ng gi&uacute;p t&ocirc;i bất cứ điều g&igrave; khi t&ocirc;i cần đ&oacute; thật sự l&agrave; một may mắn rất lớn trong đời t&ocirc;i.</p>\r\n', '14976899852.jpg'),
(31, 2, 125, '<p>Hihi, th&ocirc;i kh&ocirc;ng giỡn chia tay chia ly n&agrave;y kia nữa nh&eacute;, trở lại với hợp đồng th&ocirc;i. Em nh&igrave;n đi, trong hợp đồng của m&igrave;nh mỗi b&ecirc;n c&oacute; 3 điều khoản mỗi điều khoản một &yacute;, nhưng em thấy g&igrave; kh&ocirc;ng?</p>\r\n\r\n<p>Mỗi điều khoản anh đưa ra th&igrave; ngay lập tức điều khoản b&ecirc;n em sẽ c&oacute; nội dung chống lại c&aacute;c điều của anh :)) Thấy chưa?</p>\r\n\r\n<p>Điều 1 anh n&oacute;i em phải sẵn s&agrave;ng gặp anh mỗi khi anh nhớ em, v&agrave; điều 1 của em l&agrave; &quot;hăm dọa&quot; anh kh&ocirc;ng được trễ hơn 11h :))</p>\r\n\r\n<p>Điều 2 anh n&oacute;i em lu&ocirc;n hợp t&aacute;c với anh mỗi khi ch&uacute;ng ta c&oacute; thể.ahihi v&agrave; em liền &quot;hạ&quot; một c&acirc;u chống trả kh&ocirc;ng thực hiện khi ngo&agrave;i khả năng (mặc d&ugrave; anh biết khả năng em thường hơn anh).</p>\r\n\r\n<p>Đ&oacute;, anh c&oacute; l&agrave;m g&igrave; lỗi với em đ&acirc;u m&agrave; em lu&ocirc;n c&oacute; &yacute; định chống đối anh (hơi liều), hy vọng bạn sẽ đọc lại điều khoản v&agrave; sớm cho m&igrave;nh biết &yacute; định thay đổi nh&eacute;.</p>\r\n', '14966757292.jpg'),
(32, 3, 125, '<p><strong>Nghi&ecirc;m t&uacute;c hơn n&agrave;y:</strong></p>\r\n\r\n<p>Điều 3 c&oacute; lẽ l&agrave; điều đẹp nhất, mỗi b&ecirc;n phải dễ thương với nhau, với nhau v&agrave; chỉ với nhau kh&ocirc;ng những dễ thương m&agrave; c&ograve;n l&agrave; y&ecirc;u thương nữa đ&uacute;ng kh&ocirc;ng em :)</p>\r\n\r\n<p>C&oacute; lẽ sau bao điều c&oacute; &yacute; định &quot;hại nhau&quot; ở tr&ecirc;n th&igrave; tới đ&acirc;y mới bộc lộ mong muốn thật của hai b&ecirc;n, vậy th&igrave; th&ocirc;i ch&uacute;ng ta đừng hại nhau nữa h&atilde;y quan t&acirc;m điều 3 nhiều hơn đi cũng kh&ocirc;ng chết ch&oacute;c ai cả, h&atilde;y nu&ocirc;i thật nhiều &quot;tắc k&egrave;&quot; v&agrave; mua sim Mobifone sử dụng :D</p>\r\n\r\n<p>Suy nghĩ lại th&igrave; điều 3 của anh chắc hơi thừa v&igrave; em lu&ocirc;n vậy rồi m&agrave;, đ&uacute;ng kh&ocirc;ng :), chỉ c&ograve;n &yacute; cuối l&agrave; đợi giận thử xem c&oacute; dễ thương như b&igrave;nh thường nữa kh&ocirc;ng th&ocirc;i.</p>\r\n', '14966726333.jpg'),
(33, 4, 125, '<p>C&acirc;u n&agrave;y c&oacute; lẽ sẽ l&agrave; c&acirc;u hot của th&aacute;ng 6, sau khi ch&uacute;ng ta đ&atilde; t&igrave;m ra hai c&acirc;u nổi nhất của 2 th&aacute;ng trước.</p>\r\n\r\n<p>Sao xui thế nhỉ, tự nhi&ecirc;n m&igrave;nh n&oacute;i ra c&acirc;u n&agrave;y để b&acirc;y giờ m&igrave;nh phải thực hiện, đ&uacute;ng l&agrave; gậy &ocirc;ng đập m&ocirc;ng &ocirc;ng ... chết anh nhầm gậy &ocirc;ng đập lưng &ocirc;ng m&agrave;.</p>\r\n\r\n<p>&quot;Tắc k&egrave;&quot; nhau, b&acirc;y giờ m&igrave;nh thử đi n&oacute;i với người ngo&agrave;i c&acirc;u n&agrave;y th&igrave; họ sẽ n&oacute;i g&igrave; nhỉ?</p>\r\n\r\n<blockquote>\r\n<p>Đồ kh&ugrave;ng!<br />\r\nĐang n&oacute;i g&igrave; thế? Em b&aacute;n tắc k&egrave; &agrave;?<br />\r\nV&agrave;o viện mấy lần rồi</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ủa m&agrave; giờ mới để &yacute; sao n&oacute; giống thiệp mời thế nhỉ, thiệp mời c&oacute; t&ecirc;n tắc k&egrave; c&aacute;i n&agrave;y được đ&oacute;, c&oacute; vẻ lạ chưa ai l&agrave;m. Em nghĩ sao?</p>\r\n\r\n<p>Anh kh&ocirc;ng biết &yacute; nghĩa của c&acirc;u n&agrave;y, nếu c&oacute; thể em h&atilde;y gi&uacute;p anh giải th&iacute;ch nh&eacute;, m&agrave; nhớ c&oacute; v&iacute; dụ minh họa lu&ocirc;n th&igrave; tốt.</p>\r\n', '14966726334.jpg'),
(34, 5, 125, '<p>Em nh&igrave;n thấy g&igrave; kh&ocirc;ng? H&ocirc;m nay anh mới nhận được tấm bằng khen của bộ trưởng hẳn hoi. Khen anh kh&ocirc;ng hết lời, l&uacute;c đầu đ&aacute;ng lẽ bộ cũng kh&ocirc;ng trao tấm bằng n&agrave;y đ&acirc;u v&igrave; thấy con trai con g&aacute;i tới tuổi y&ecirc;u nhau l&agrave; chuyện b&igrave;nh thường nhưng khi họ hỏi anh người y&ecirc;u của em l&agrave; ai? Anh trả lời:</p>\r\n\r\n<blockquote>\r\n<p>Dạ, người y&ecirc;u em l&agrave; bạn Trần Yến Tuyết</p>\r\n</blockquote>\r\n\r\n<p>Thế l&agrave; lập tức họ khen thưởng, người ta n&oacute;i bạn đ&oacute; kh&oacute; lắm, &quot;hung dữ&quot;, hay đ&aacute;nh người v&agrave; rất kh&oacute; thuyết phục nữa ấy vậy m&agrave; sao em c&oacute; thể biến đổi từ t&igrave;nh cảm &quot;chị em&quot; sang t&igrave;nh cảm mẹ con &agrave; lại nhầm nữa sang t&igrave;nh cảm y&ecirc;u đương thế? Điều đ&oacute; gần như l&agrave; điều kh&ocirc;ng thể</p>\r\n\r\n<p>Anh cũng kh&ocirc;ng n&oacute;i g&igrave; v&agrave; nhận bằng ra về th&ocirc;i (mặc d&ugrave; anh biết do anh đẹp trai th&ocirc;i) :D</p>\r\n\r\n<p>Bằng đẹp kh&ocirc;ng em, muốn xem mai anh đưa cho xem nha.</p>\r\n', '14966726335.jpg'),
(35, 6, 125, '<p>C&ograve;n đ&acirc;y l&agrave; v&eacute; may bay du lịch anh mới đặt cho 2 đứa, chuyến bay c&oacute; chặng đường rất d&agrave;i em cố gắng chuẩn bị sức khỏe cũng như tinh thần nh&eacute;, m&igrave;nh đi xa đ&oacute;.</p>\r\n\r\n<p>Địa điểm ch&iacute;nh (location) của ch&uacute;ng ta xuất ph&aacute;t l&agrave; tr&aacute;i tim nh&eacute;, ng&agrave;y khởi h&agrave;nh th&igrave; từ rất l&acirc;u rồi (c&oacute; thể được gọi l&agrave; xưa), thời gian bay thật sự d&agrave;i kh&ocirc;ng đo được lu&ocirc;n n&ecirc;n em th&ocirc;ng cảm h&atilde;ng n&agrave;y kh&ocirc;ng th&ocirc;ng b&aacute;o trước giờ của chuyến bay l&agrave; bao nhi&ecirc;u được.</p>\r\n\r\n<p>M&aacute;y bay n&agrave;y của h&atilde;ng Love v&agrave; sẽ đến cổng 313 (đố em biết l&agrave; g&igrave;?), lịch tr&igrave;nh sẽ kh&ocirc;ng thay đổi. V&agrave; chỉ chở 2 h&agrave;nh kh&aacute;ch c&oacute; t&ecirc;n l&agrave; L &amp; T th&ocirc;i &agrave; :))</p>\r\n', '14966726336.jpg'),
(47, 1, 130, '<p>Ch&agrave;o Quy&ecirc;n nh&eacute; (th&ocirc;i cho ph&eacute;p t&ocirc;i vẫn gọi l&agrave; c&ocirc; đi, v&igrave; quen rồi). Ch&agrave;o c&ocirc;, b&acirc;y giờ đang l&agrave; khoảng thời gian thực tập của c&ocirc; c&oacute; lẽ cũng bận rộn, hoặc &iacute;t nhất cũng phải l&agrave;m quen với m&ocirc;i trường mới, thay đổi cuộc sống mới cũng giống như đi l&agrave;m vậy n&ecirc;n giờ đ&acirc;y c&ocirc; cũng kh&ocirc;ng c&ograve;n nhiều thời gian &quot;suy diễn&quot; nữa.</p>\r\n\r\n<p>T&ocirc;i đ&atilde; hứa với c&ocirc; sẽ c&oacute; bất ngờ sau khi c&ocirc; thụ hết &quot;7 ng&agrave;y &aacute;n&quot; ahihi. Cũng l&acirc;u lắm rồi kể từ ng&agrave;y cuối c&ugrave;ng l&agrave; ng&agrave;y 02/05/2017 l&uacute;c đ&oacute; t&ocirc;i c&ograve;n ở nh&agrave; &quot;ăn chơi&quot; đ&atilde; đời, m&agrave; tới b&acirc;y giờ t&ocirc;i mới c&oacute; thể viết được blog n&agrave;y để gửi c&ocirc;.</p>\r\n\r\n<p>Cũng kh&ocirc;ng biết c&oacute; bất ngờ kh&ocirc;ng nhưng hy vọng n&oacute; lạ hơn so với những g&igrave; ch&uacute;ng ta thường d&ugrave;ng để nhắc nhớ về nhau. T&ocirc;i cũng kh&ocirc;ng ngờ c&ocirc; lại c&oacute; t&acirc;m để ho&agrave;n th&agrave;nh hết 7 ng&agrave;y như thế v&igrave; l&uacute;c đầu t&ocirc;i nghĩ cũng chỉ n&oacute;i chơi vậy th&ocirc;i, ai ngờ c&ocirc; thực hiện thật m&agrave; c&ograve;n rất tốt nữa, đầy t&igrave;nh cảm trong đ&oacute;.</p>\r\n\r\n<p>M&agrave; t&ocirc;i c&ograve;n để c&ocirc; nhắc về việc &quot;tạo bất ngờ&quot; nữa, thật do lỗi của t&ocirc;i, mặc d&ugrave; t&ocirc;i kh&ocirc;ng quen nh&eacute; :)) vẫn nhớ đ&oacute;. T&ocirc;i cũng cố gắng để ho&agrave;n th&agrave;nh blog n&agrave;y cho thật nhanh để c&ograve;n đ&aacute;p lễ với c&ocirc;.</p>\r\n\r\n<p><strong>Quay lại nh&eacute;, ng&agrave;y 1:</strong></p>\r\n\r\n<p>Buổi s&aacute;ng h&ocirc;m đ&oacute; t&ocirc;i nhận được tin nhắn từ messenger, cũng bất ngờ thật v&igrave; thường ng&agrave;y c&oacute; ai nhắn cho m&igrave;nh buổi s&aacute;ng đ&acirc;u, th&igrave; ra l&agrave; của c&ocirc; :D, mới biết c&ocirc; thực hiện h&igrave;nh phạt thật. D&ugrave; c&ocirc; c&oacute; giải th&iacute;ch cho từng c&acirc;u chữ của m&igrave;nh nhưng t&ocirc;i cũng cảm ơn nhiều, s&aacute;ng đ&oacute; t&ocirc;i thật sự vui.</p>\r\n', '14976900841.jpg'),
(42, 1, 128, '<p>block1</p>\r\n', '14976889911.png'),
(43, 2, 128, '<p>block2</p>\r\n', '14976883282.jpg'),
(44, 3, 128, '<p>asdasd</p>\r\n', '14976890123.jpg'),
(45, 1, 129, '<p>asdasdasd</p>\r\n', '14976895951.jpg'),
(46, 2, 129, '<p>asdasd</p>\r\n', '14976895952.jpg'),
(52, 6, 130, '<p>Lời cảm ơn của t&ocirc;i.</p>\r\n\r\n<p>Cũng nhờ c&oacute; c&aacute;i h&igrave;nh phạt &quot;t&agrave;o lao&quot; n&agrave;y m&agrave; t&ocirc;i mới c&oacute; cơ hội ngồi đ&acirc;y để viết cho c&ocirc; những d&ograve;ng n&agrave;y. Kh&ocirc;ng chỉ t&ocirc;i muốn cảm ơn c&ocirc; v&igrave; những tin nhắn đ&oacute; th&ocirc;i đ&acirc;u m&agrave; c&ograve;n muốn cảm ơn c&ocirc; từ trước tới giờ &iacute;t nhất l&agrave; trong việc chịu đựng t&ocirc;i, c&ocirc; thật l&agrave; của hiếm kh&oacute; t&igrave;m đ&oacute; :))</p>\r\n\r\n<p>Từ thời quen biết c&ocirc; đến b&acirc;y giờ c&oacute; lẽ lời t&ocirc;i cần phải n&oacute;i nhiều hơn đ&oacute; l&agrave; lời xin lỗi, g&acirc;y ra cho c&ocirc; biết bao phiền phức, bao nặng nề, bao đ&ecirc;m suy tư trằn trọc v&agrave; c&oacute; lẽ cả nước mắt. C&ograve;n g&igrave; để cho đi nữa đ&acirc;u khi niềm vui nhất v&agrave; nỗi buồn nhất cũng đ&atilde; được thể hiện nơi c&ocirc; d&agrave;nh cho t&ocirc;i. T&ocirc;i kh&ocirc;ng d&aacute;m nghĩ v&igrave; t&ocirc;i m&agrave; c&ocirc; sẽ vui vẻ nhưng t&ocirc;i vẫn hy vọng t&ocirc;i sẽ l&agrave;m được g&igrave; để cho c&ocirc; vui hơn, kh&ocirc;ng c&ocirc; đơn trong mọi ho&agrave;n cảnh.</p>\r\n\r\n<p>C&oacute; cơ hội được gặp th&igrave; t&ocirc;i sẽ gặp c&ocirc; ngay, t&ocirc;i vẫn sẽ n&oacute;i chuyện với c&ocirc; thật vui, thật v&ocirc; tư như ng&agrave;y n&agrave;o, c&ocirc; an t&acirc;m nh&eacute;. Đừng ngại hay c&oacute; khoảng c&aacute;ch với t&ocirc;i, cứ nhắn cho t&ocirc;i khi n&agrave;o c&ocirc; cảm thấy cần.</p>\r\n\r\n<p>Th&ocirc;i cuối thư rồi, tay đ&atilde; mỏi, mắt đ&atilde; mờ ch&acirc;n đứng kh&ocirc;ng vững nữa n&ecirc;n th&ocirc;i ch&agrave;o c&ocirc; nh&eacute;, ch&uacute;c c&ocirc; lu&ocirc;n b&igrave;nh an trong mọi sự, t&acirc;m hồn thật thanh tho&aacute;t, an vui v&agrave; mưu cầu hạnh ph&uacute;c được trở n&ecirc;n trọn vẹn. &Agrave; m&agrave; gửi lời ch&uacute;c mừng quốc tế thiếu nhi đến c&ocirc; nh&eacute;</p>\r\n', '14976900846.jpg'),
(53, 1, 131, '<p>Xin ch&agrave;o c&ocirc; Yến Tuyết</p>\r\n\r\n<p>H&ocirc;m nay c&ocirc; lại c&oacute; dịp l&ecirc;n s&oacute;ng tr&ecirc;n k&ecirc;nh truyền &quot;ảnh&quot; n&agrave;y của ch&uacute;ng t&ocirc;i, được biết đ&acirc;y l&agrave; lần thứ 2 c&ocirc; l&ecirc;n s&oacute;ng ở tr&ecirc;n n&agrave;y, kh&ocirc;ng biết cảm gi&aacute;c của c&ocirc; c&oacute; giống như l&uacute;c đầu kh&ocirc;ng?</p>\r\n\r\n<p>Được biết h&ocirc;m nay bạn kh&ocirc;ng c&oacute; mặt ở KTX trong suốt một ng&agrave;y, kh&ocirc;ng biết bạn đi đ&acirc;u v&agrave; l&agrave;m g&igrave;, gia đ&igrave;nh rất lo lắng.</p>\r\n\r\n<p>T&igrave;nh cờ t&ocirc;i c&oacute; lướt qua trang thichchupanh.com th&igrave; thấy c&ocirc; tr&ecirc;n đ&oacute; với d&ograve;ng t&iacute;t nh&acirc;n vật hot trong ng&agrave;y, t&ocirc;i c&oacute; v&agrave;o xem th&igrave; thấy c&oacute; người đ&uacute;ng l&agrave; giống c&ocirc; thật nhưng c&oacute; vẻ &quot;đẹp&quot; kh&aacute;c thường n&ecirc;n t&ocirc;i cũng kh&ocirc;ng chắc đ&oacute; c&oacute; phải l&agrave; c&ocirc; thật hay kh&ocirc;ng?</p>\r\n\r\n<p>T&ocirc;i c&oacute; tải về những tấm ảnh ở tr&ecirc;n trang đ&oacute; v&agrave; đăng l&ecirc;n đ&acirc;y để c&ocirc; xem c&oacute; phải l&agrave; m&igrave;nh kh&ocirc;ng? Nếu phải th&igrave; xin ch&uacute;c mừng :) L&ecirc;n s&oacute;ng thường xuy&ecirc;n :)</p>\r\n', '14977956181.jpg'),
(54, 2, 131, '<p>Từ 6h s&aacute;ng đến 6h tối mới t&igrave;m ra được những tấm h&igrave;nh &quot;ảo&quot; hết chỗ ch&ecirc; n&agrave;y. C&oacute; lẽ ng&agrave;y h&ocirc;m nay đi cũng đủ chỗ v&agrave; chạy cũng đủ mệt rồi nhưng xem lại những tấm h&igrave;nh n&agrave;y cũng kh&ocirc;ng thấy mệt nữa. :)</p>\r\n', '14977956182.jpg'),
(55, 3, 131, '<p>Đường s&aacute;ch TP.</p>\r\n\r\n<p>H&igrave;nh như em c&oacute; khả năng đọc s&aacute;ch rất nhanh, mới thấy em cầm cuốn s&aacute;ch l&ecirc;n khoảng 2 ph&uacute;t th&igrave; đ&atilde; bỏ xuống (tức nhi&ecirc;n l&agrave; sau khi đ&atilde; chụp tấm ảnh n&agrave;y). N&ecirc;n mai chỉ cho m&igrave;nh khả năng đ&oacute; nh&eacute; :)</p>\r\n', '14977956183.jpg'),
(56, 4, 131, '<p>X&atilde; hội xanh-đen</p>\r\n\r\n<p>Đến tấm ảnh n&agrave;y th&igrave; mới&nbsp; lồ lộ r&otilde; bản chất giang hồ: hung dữ, t&agrave;n &aacute;c v&agrave; ra tay kh&ocirc;ng thương tiếc với người kế b&ecirc;n.</p>\r\n\r\n<p>Kh&ocirc;ng biết băng đảng của em t&ecirc;n l&agrave; g&igrave; v&agrave; từ đ&acirc;u tới? Nhưng nếu đ&agrave;n em của em m&agrave; biết anh đăng ảnh&nbsp; &quot;đ&agrave;n chị&quot; l&ecirc;n đ&acirc;y th&igrave; chắc anh t&igrave;m chỗ trốn kh&ocirc;ng kịp, nhưng th&ocirc;i lỡ rồi tới v&agrave; l&ecirc;n lu&ocirc;n.</p>\r\n', '14977956184.jpg'),
(57, 5, 131, '<p>Kh&ocirc;ng được dẫm đạp l&ecirc;n cỏ - C&acirc;u n&oacute;i v&ocirc; nghĩa nhất trong ng&agrave;y.</p>\r\n\r\n<p>Nh&igrave;n g&igrave;? Cười l&ecirc;n n&agrave;o</p>\r\n', '14977956185.jpg'),
(58, 6, 131, '<p>Với thời tiết mưa gi&oacute; b&atilde;o b&ugrave;ng, gi&oacute; r&eacute;t giăng đầy trời ngăn cản mọi người bước ra đường ấy vậy m&agrave; vẫn c&oacute; 1 p&ecirc; nhi v&agrave; 1 nữ nhi đội mưa gi&oacute; ra đường để... chụp ảnh.</p>\r\n\r\n<p>Em nh&igrave;n đi đường kh&ocirc;ng 1 b&oacute;ng người, đ&acirc;y l&agrave; chỗ &quot;lần đầu&quot; vậy m&agrave; đẹp đ&oacute; nhỉ.</p>\r\n', '14977956186.jpg'),
(59, 7, 131, '<p>Sau khi đến bao nhi&ecirc;u địa điểm kh&aacute;c nhau, mất bao nhi&ecirc;u thời gian v&agrave; c&ocirc;ng sức th&igrave; cuối c&ugrave;ng cũng t&igrave;m được một tấm ưng &yacute;. Tấm n&agrave;y mai đ&oacute;ng lịch được đ&oacute;.</p>\r\n', '14977956187.jpg'),
(60, 8, 131, '<p>Sau bao nhi&ecirc;u gi&oacute; mưa th&igrave; giờ đ&acirc;y ch&uacute;ng ta lại thấy nắng v&agrave;ng.. ờ kh&ocirc;ng hoa v&agrave;ng tr&ecirc;n cỏ xanh... &agrave; lại kh&ocirc;ng, hoa v&agrave;ng tr&ecirc;n c&acirc;y xanh.</p>\r\n\r\n<p>Tưởng với thời tiết như thế n&agrave;y v&agrave; khung giờ đ&oacute; th&igrave; kh&ocirc;ng ai c&ograve;n nghĩ đến vấn đề chụp ảnh, nhưng chỗ n&agrave;y vẫn kh&ocirc;ng phải c&oacute; 1 m&igrave;nh m&igrave;nh :)</p>\r\n\r\n<p>Vẫn c&ograve;n nhiều địa điểm quan trọng m&agrave; ch&uacute;ng ta chưa tới được, đặc biệt l&agrave; chỗ &quot;337&quot; nhưng th&ocirc;i h&ocirc;m nay đi vậy cũng đủ &quot;mệt&quot; v&agrave; vui rồi. Lần sau m&igrave;nh sẽ đến đầy đủ hơn.</p>\r\n\r\n<p>Th&ocirc;i vậy nh&eacute; v&agrave; hẹn gặp lại em sau nửa th&aacute;ng nữa.</p>\r\n\r\n<p style=\"text-align:right\"><strong>Phạm Văn Lực</strong></p>\r\n', '14977956188.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `tablename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `controlvalid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `tablename`, `controlvalid`) VALUES
(1, 'slideprivated', 1);

-- --------------------------------------------------------

--
-- Table structure for table `day_of_week`
--

CREATE TABLE `day_of_week` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `day_of_week`
--

INSERT INTO `day_of_week` (`id`, `name`, `created`, `updated`, `info`) VALUES
(102, 'Thứ 2', '', '', 'Nhắc sự kiện vào thứ 2'),
(103, 'Thứ 3', '', '', 'Nhắc sự kiện vào thứ 3'),
(104, 'Thứ 4', '', '', 'Nhắc sự kiện vào thứ 4'),
(105, 'Thứ 5', '', '', 'Nhắc sự kiện vào thứ 5 hàng tuần'),
(106, 'Thứ 6', '', '', 'Nhắc sự kiện vào thứ 6 hàng tuần'),
(107, 'Thứ 7', '', '', 'Nhắc sự kiện vào thứ 7 hàng tuần'),
(108, 'Chủ nhật', '', '', 'Nhắc sự kiện vào Chủ nhật hàng tuần');

-- --------------------------------------------------------

--
-- Table structure for table `emojiprivate`
--

CREATE TABLE `emojiprivate` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emojiname` text COLLATE utf8_unicode_ci NOT NULL,
  `positionkey` int(11) NOT NULL,
  `color` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emojiprivate`
--

INSERT INTO `emojiprivate` (`id`, `emojiname`, `positionkey`, `color`, `icon`) VALUES
('angry', 'Giận', 5, 'angry-gray', 'fa fa-frown-o'),
('hate', 'Cực ghét', 6, 'hate-black', 'fa fa-frown-o'),
('love', 'Yêu', 2, 'love-pink', 'fa fa-heart-o'),
('nice', 'Vui', 1, 'nice-yellow', 'fa fa-smile-o'),
('normal', 'Bình thường', 3, 'normal-green', 'fa fa-asterisk'),
('sad', 'Buồn', 4, 'sad-purple', 'fa fa-frown-o');

-- --------------------------------------------------------

--
-- Table structure for table `eventuser`
--

CREATE TABLE `eventuser` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `evt_title` text COLLATE utf8_unicode_ci NOT NULL,
  `evt_object` text COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `day_remain_update` int(11) NOT NULL,
  `month_remain_update` int(11) NOT NULL,
  `year_remain_update` int(11) NOT NULL,
  `inform_day` int(11) NOT NULL DEFAULT '0',
  `inform_month` int(11) NOT NULL DEFAULT '0',
  `inform_year` int(11) NOT NULL DEFAULT '0',
  `inform_day_of_week` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `note_info` text COLLATE utf8_unicode_ci NOT NULL,
  `evt_repeat` int(11) NOT NULL,
  `evt_remind` int(11) NOT NULL,
  `day_of_week` int(11) NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eventuser`
--

INSERT INTO `eventuser` (`id`, `user`, `evt_title`, `evt_object`, `day`, `month`, `year`, `remain`, `day_remain_update`, `month_remain_update`, `year_remain_update`, `inform_day`, `inform_month`, `inform_year`, `inform_day_of_week`, `note_info`, `evt_repeat`, `evt_remind`, `day_of_week`, `created`, `updated`) VALUES
(1, 12, 'Chúa Nhật Kitô Vua', 'Bổn mạng ca đoàn Kitô vua Minh Đức', 20, 11, 0, 0, 0, 0, 0, 0, 0, 0, '0', 'Ca đoàn giới trẻ Minh Đức, phục vụ thánh lễ tối Chúa nhật hàng tuần vào lúc 19h. Bổn mạng vào thánh lễ Chúa Kitô vua', 1000, 0, 0, '05:11:51am 30-11-2016', '05:11:51am 30-11-2016'),
(2, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 2, 2, 2002, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 100, 10, 0, '04:11:49pm 30-11-2016', '04:11:49pm 30-11-2016'),
(3, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 7, 8, 2015, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 1000, 10, 0, '06:11:34am 30-11-2016', '06:11:34am 30-11-2016'),
(4, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(5, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 5, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '04:12:28pm 01-12-2016', '04:12:28pm 01-12-2016'),
(6, 12, 'Show ngày trong tuần phần review', 'Review sự kiện, sự kiện của tôi', 3, 12, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Phần review cần hiển thị chức ngày trong tuần', 1, 0, 0, '05:11:51am 30-11-2016', '05:11:51am 30-11-2016'),
(7, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(8, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 2, 9, 2004, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 1000, 0, 0, '06:11:51am 30-11-2016', '06:11:51am 30-11-2016'),
(10, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(11, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 6, 6, 2010, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '06:11:14am 30-11-2016', '06:11:14am 30-11-2016'),
(12, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(13, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 4, 10, 2003, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 0, 0, 0, '06:11:23am 30-11-2016', '06:11:23am 30-11-2016'),
(14, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(15, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 2, 1, 2011, 0, 0, 0, 0, 0, 0, 0, '0', '<p>Ch&uacute;a Nhật II m&ugrave;a Vọng, phục vụ: Ca đo&agrave;n Kit&ocirc; vua gi&aacute;o xứ Minh Đức, c&aacute;c b&agrave;i h&aacute;t: 1. Trong rừng s&acirc;u (Xu&acirc;n Thảo), 2.TV Ch&uacute;a Nhật II M&ugrave;a Vọng (Lm Th&aacute;i Nguy&ecirc;n, Tv.71), 3. D&acirc;ng Ch&uacute;a đời con (Trần C&ocirc;ng Danh), 4. Dọn đường đ&oacute;n Ch&uacute;a (Lm Th&aacute;i Nguy&ecirc;n), 5. M&acirc;y ơi! Mưa xuống (Lm Nguyễn Duy), b&agrave;i h&aacute;t cuối lễ c&oacute; thể thay đổi t&ugrave;y theo t&igrave;nh h&igrave;nh</p>', 1, 0, 0, '10:12:45am 12-12-2016', '10:12:45am 12-12-2016'),
(16, 12, 'Chúa Nhật II mùa Vọng, Chúa Hiển Linh, Tân Vương, Sau lễ Kitô Vua', 'Chúa Nhật Hiển Linh, chào đón Tân Vương', 1, 7, 2012, 0, 0, 0, 0, 0, 0, 0, '0', 'Chúa Nhật II mùa Vọng, phục vụ: Ca đoàn Kitô vua giáo xứ Minh Đức, các bài hát: 1. Trong rừng sâu (Xuân Thảo), 2.TV Chúa Nhật II Mùa Vọng (Lm Thái Nguyên, Tv.71), 3. Dâng Chúa đời con (Trần Công Danh), 4. Dọn đường đón Chúa (Lm Thái Nguyên), 5. Mây ơi! Mưa xuống (Lm Nguyễn Duy), bài hát cuối lễ có thể thay đổi tùy theo tình hình', 10, 0, 106, '05:11:03am 30-11-2016', '05:11:03am 30-11-2016'),
(17, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:32pm 01-12-2016', '04:12:32pm 01-12-2016'),
(18, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:37pm 01-12-2016', '04:12:37pm 01-12-2016'),
(19, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:39pm 01-12-2016', '04:12:39pm 01-12-2016'),
(20, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:41pm 01-12-2016', '04:12:41pm 01-12-2016'),
(21, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:44pm 01-12-2016', '04:12:44pm 01-12-2016'),
(22, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:46pm 01-12-2016', '04:12:46pm 01-12-2016'),
(23, 12, '12h trưa nay kết thúc bình chọn vòng Sơ loại Tech Awards 2016 ', 'Tech Awards 2016 ', 30, 11, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'Từ 60 thiết bị trong vòng Sơ loại, độc giả VnExpress trong và ngoài nước đã bình chọn những sản phẩm họ đánh giá cao nhất. Dựa trên số lượt bình chọn, 15 mẫu smartphone sẽ vào Chung kết tranh giải Điện thoại của năm và Điện thoại cho giới trẻ. 8 mẫu máy tính xách tay sẽ tiếp tục so tài ở hạng mục Laptop của năm và Laptop 2-trong-1 tốt nhất. Trong khi đó, 5 mẫu máy ảnh, 5 mẫu tivi và 5 mẫu thiết bị đeo thông minh đạt điểm,  Vòng sơ loại Tech Awards 2016 ghi nhận số lượt bình chọn kỷ lục cho các sản phẩm. Tính đến hết 27/11 đã có gần 50.000 lượt bình chọn, bằng cả đợt bình chọn năm ngoái. Tổng số người tham gia cũng đạt hơn 15.000, trong đó khu vực tham gia đông nhất là TP HCM, chiếm hơn 40%.\r\n\r\nNăm nay, mỗi tuần có 2 giải may mắn là điện thoại Oppo F1s trị giá 5,99 triệu đồng cho độc giả có số bình chọn trùng với số may mắn Ban tổ chức đưa ra. Ngoài ra, 100 triệu đồng sản phẩm sẽ dành cho 5 độc giả bình chọn đúng giải chung cuộc với những mẫu điện thoại \"hot\" nhất thị trường như bộ đôi iPhone 7, Samsung Galaxy S7e, Sony Xperia XZ.\r\n\r\nTech Awards 2016 là chương trình bình chọn sản phẩm do VnExpress Số Hóa tổ chức thường niên từ năm 2012. Vòng Sơ loại diễn ra từ 15/11 và sẽ kết thúc 12h hôm nay. Vòng Chung kết sẽ tiếp tục từ ngày 1/12 đến 22/12. Ở vòng Chung kết, điểm sản phẩm được tính dựa trên 50% bình chọn của độc giả và 50% đánh giá của Ban giám khảo - các chuyên gia và nhà báo công nghệ uy tín tại Việt Nam. Ban giám khảo sẽ xếp hạng thiết bị dựa trên những tiêu chí quan trọng như thiết kế, trải nghiệm người dùng, hiệu năng - tính năng...\r\n\r\nLễ vinh danh các thương hiệu đoạt giải Tech Awards 2016 sẽ diễn ra vào tuần đầu năm 2017 tại TP HCM.', 0, 0, 0, '04:12:47pm 01-12-2016', '04:12:47pm 01-12-2016'),
(32, 12, 'Chao nam moi', '', 31, 12, 0, 0, 0, 0, 0, 0, 0, 0, '0', 'ghi chu', 1000, 100, 0, '09:12:39am 05-12-2016', '09:12:39am 05-12-2016'),
(33, 12, 'Chao nam moi', '', 31, 12, 0, 0, 0, 0, 0, 0, 0, 0, '0', 'ghi chu', 1000, 100, 0, '09:12:42am 05-12-2016', '09:12:42am 05-12-2016'),
(34, 12, 'Luyen thi Toeic', 'Toeic', 29, 12, 2016, 0, 0, 0, 0, 0, 0, 0, '0', '', 1000, 100, 0, '09:12:28am 05-12-2016', '09:12:28am 05-12-2016'),
(35, 12, 'SỰ KIỆN NÀY SẼ SEND EMAIL', 'EMAIL', 5, 1, 2016, 0, 0, 0, 0, 0, 0, 0, '0', 'GHGI CHÚ', 1000, 100, 0, '10:12:06am 05-12-2016', '10:12:06am 05-12-2016'),
(36, 12, 'CHƯƠNG TRÌNH CHIỀU & TỐI NAY', 'TALKSHOW', 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', 1000, 100, 0, '10:12:15am 05-12-2016', '10:12:15am 05-12-2016'),
(111, 12, 'SU KIEN NHAC TRUOC 1 TUAN, KHONG LAP LAI', '', 8, 1, 2017, 0, 0, 0, 0, 0, 0, 0, '0', '', 0, 10, 0, '11:12:34am 31-12-2016', '11:12:34am 31-12-2016'),
(112, 12, 'SU KIEN NHAC TRUOC 1 TUAN, KHONG LAP LAI', '', 8, 1, 2017, 0, 0, 0, 0, 0, 0, 0, '0', '', 0, 10, 0, '11:01:59am 01-01-2017', '11:01:59am 01-01-2017'),
(128, 0, 'SỰ KIỆN ĐƯỢC TẠO CÙNG VỚI COOKIE', 'COOKIE - HASH_EQUALS()', 3, 4, 2017, 0, 0, 0, 0, 0, 0, 0, '0', '<p>SỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIESỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIESỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIESỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIESỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIESỰ KIỆN ĐƯỢC TẠO C&Ugrave;NG VỚI COOKIE</p>', 1, 0, 0, '03:01:49am 11-01-2017', '03:01:49am 11-01-2017'),
(131, 10, 'Thăm thầy cô tết nguyên đán Đinh Dậu 2017', 'Thầy cô cấp 3', 30, 1, 2017, 168, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 1, 0, '09:01:02pm 27-01-2017', '09:01:02pm 27-01-2017'),
(132, 10, 'Sinh nhật Lại Xuân Mạnh', '', 17, 3, 0, 214, 15, 8, 2017, 0, 0, 0, '0', '<p>Ng&agrave;y 17/03/1995</p>', 1000, 1, 0, '04:03:15pm 12-03-2017', '04:03:15pm 12-03-2017'),
(135, 10, 'Sinh nhật', 'Chị Thương', 24, 4, 0, 252, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 1, 0, '04:03:36pm 03-03-2017', '04:03:36pm 03-03-2017'),
(136, 10, 'Sinh nhật', 'Cháu Nam', 24, 7, 0, 343, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 1, 0, '04:03:18pm 03-03-2017', '04:03:18pm 03-03-2017'),
(137, 10, 'Sinh nhật thím Yến Nhi', '', 29, 3, 0, 226, 15, 8, 2017, 0, 0, 0, '0', '<p>Dương lịch</p><p>&Acirc;m lịch: 29-02</p>', 1000, 1, 0, '11:03:20pm 03-03-2017', '11:03:20pm 03-03-2017'),
(138, 10, 'Sinh nhật Đinh Thị Huỳnh Như', '', 19, 3, 0, 216, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 1, 0, '11:03:09pm 03-03-2017', '11:03:09pm 03-03-2017'),
(139, 10, 'Sinh nhật &#34;Quyên&#34;', '##Quyên##&#45;&#45;', 4, 3, 0, 201, 15, 8, 2017, 0, 0, 0, '0', '<p>&Acirc;m Lịch: 04-02</p>', 1000, 10, 0, '09:03:04am 05-03-2017', '09:03:04am 05-03-2017'),
(140, 10, 'Sinh nhật Ngân', '', 29, 12, 0, 136, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 10, 0, '10:03:49pm 08-03-2017', '10:03:49pm 08-03-2017'),
(141, 10, 'Sinh nhật thím Thoa', '', 19, 12, 0, 126, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 0, 0, '11:03:04am 19-03-2017', '11:03:04am 19-03-2017'),
(143, 10, 'NGÀY SỬ DỤNG WIFI PHÒNG KẾ BÊN &#40;phòng 9&#41;', '', 20, 3, 2017, 217, 15, 8, 2017, 0, 0, 0, '0', '', 100, 0, 0, '08:04:53am 19-04-2017', '08:04:53am 19-04-2017'),
(144, 10, 'Hết hạn hợp đồng', 'L & T', 3, 7, 2017, 322, 15, 8, 2017, 0, 0, 0, '0', '', 1000, 1, 0, '03:06:59pm 13-06-2017', '03:06:59pm 13-06-2017'),
(145, 10, 'sn  YT', '', 18, 8, 2017, 3, 15, 8, 2017, 0, 0, 0, '0', '', 0, 1, 0, '03:06:00pm 14-06-2017', '03:06:00pm 14-06-2017'),
(146, 10, 'Tốt Nghiệp &#40;Ngân&#41;', '', 20, 8, 2017, 5, 15, 8, 2017, 0, 0, 0, '0', '<p>Ch&uacute;a Nhật</p>', 0, 1, 0, '02:07:06pm 29-07-2017', '02:07:06pm 29-07-2017');

-- --------------------------------------------------------

--
-- Table structure for table `images_album`
--

CREATE TABLE `images_album` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `album` int(11) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images_album`
--

INSERT INTO `images_album` (`id`, `image`, `caption`, `album`, `index`) VALUES
(61, '1-1470799255.jpg', '\'it\\\'s me\'', 256, 1),
(62, '2-1470799255.jpg', '\'Chua Kito Vua\'', 256, 2),
(63, '3-1470799256.jpg', '\'Nhom (bi an)\'', 256, 3),
(64, '4-1470799256.jpg', '\'Nui chu gi\'', 256, 4),
(65, '1-1471595573.jpg', 'update 1 khi xoa 2', 257, 1),
(67, '2-1471766191.jpg', 'up date 3 khi bo 2', 257, 3),
(68, '1-1470824163.jpg', '\'Cứ hửng sáng, Nguyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20 con.\'', 258, 1),
(70, '2-1471841840.jpg', 'cap nhat hinh 2, doi hinh', 258, 2),
(74, '1-1471766663.jpg', 'chi cap nhat 1 va khong doi hinh', 260, 1),
(75, '2-1470824415.jpg', 'chi cap nhat 2 ', 260, 2),
(79, '2-1471766522.jpg', 'update3 khi xoa 1 va doi hinh', 261, 3),
(86, '1-1470826855.jpg', '\'Khu biệt thự có hai thác nước tự nhiên chảy quanh.\'', 264, 1),
(87, '2-1470826855.jpg', '\'Khu đất của khu nghỉ dưỡng rộng 36.000 m2, có sân tennis riêng ở phía sau.\'', 264, 2),
(88, '3-1470826855.jpg', '\'Theo tờ TMZ, Justin Bieber đưa nhiều chân dài tới khu nghỉ dưỡng, thuê biệt thự trong hai tuần với giá 10.000 USD một đêm, chưa bao gồm tiền phục vụ, thuê máy bay trực thăng...\'', 264, 3),
(89, '3-1471966434.jpg', 'Hinh moi thu 1 duoc them', 0, 3),
(90, '4-1471966434.jpg', 'Hình mới thứ 2 được thêm', 0, 4),
(91, '3-1471966495.jpg', 'Hình mới thứ nhất được thêm', 0, 3),
(92, '4-1471966496.jpg', 'Hình mới thứ 2 được thêm', 0, 4),
(94, '4-1471966741.jpg', 'hinh nay se la hinh3', 260, 4),
(95, '3-1471966801.jpg', 'hinh nay se la hinh3', 260, 3),
(96, '4-1471966801.jpg', 'hinh nay se la hinh3', 260, 4),
(97, '5-1471967382.jpg', 'hinh nay se la hinh3', 260, 5),
(98, '6-1471967382.jpg', 'hinh nay se la hinh3', 260, 6),
(100, '9-1472051294.jpg', 'them 2', 260, 9),
(101, '1-1476186147.jpg', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain', 261, 1),
(102, '2-1476186147.jpg', 'However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', 261, 2),
(103, '3-1476186147.jpg', 'The pet owners let her dog’s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.', 261, 3),
(104, '4-1476186147.jpg', 'Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.', 261, 4),
(105, '1-1476186359.jpg', 'Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.', 262, 1),
(106, '2-1476186359.jpg', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain.', 262, 2),
(107, '3-1476186359.jpg', 'However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', 262, 3),
(108, '4-1476186359.jpg', 'The pet owners let her dog’s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.', 262, 4),
(109, '5-1476186360.jpg', 'Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.', 262, 5),
(110, '1-1476186595.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 263, 1),
(111, '2-1476186596.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 263, 2),
(112, '3-1476186596.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 263, 3),
(113, '1-1476186602.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 264, 1),
(114, '2-1476186602.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 264, 2),
(115, '3-1476186602.jpg', 'Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again. It is thought that the cub might have been lost and disorientated or separated from its mother.', 264, 3),
(120, '1-1481513267.jpg', 'As well as flocking to the casino, which featured on the film Ocean\\\'s Eleven, customers visit the hotel for the skyloft rooms and the huge rooftop golf areaguyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20guyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20', 266, 1),
(121, '2-1481513267.jpg', 'On Instagram people love taking photos of, and selfies with, the huge gold lion statue that sits in the lobby of the hotelguyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20', 266, 2),
(122, '3-1481513267.jpg', 'guyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20guyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20guyễn Văn Cời - cậu bé 10 tuổi theo gia đình từ Campuchia về sống ven hồ Dầu Tiếng (ấp Tà Dơ, xã Tân Thành, huyện Tân Châu, Tây Ninh) - lại xách lưới, dây câu đi dọc dòng nước tìm bắt cá. Nó được cha mẹ giao cho việc này để nuôi đàn vịt 20', 266, 3),
(123, '4-1481513267.jpg', 'Owned by Marriot International, the super stylish establishment boasts modern rooms, a spa, a whiskey bar and a cool lounge', 266, 4),
(124, '5-1481513267.jpg', 'Customers flock there for the urban-cool rooftop spaces where you can escape the busyness of New York below', 266, 5),
(125, '6-1481513267.jpg', 'Attached to a 100,000-square-foot casino The Cosmopolitan Las Vegas is extremely popular with party-goers and was the third most Instagrammed hotel this year', 266, 6),
(126, '7-1481513267.jpg', 'Hotels in Las Vegas were extremely popular with Instagrammers this year scooping five out of the 10 spots on the list ', 266, 7),
(127, '8-1481513268.jpg', 'It\\\'s got five restaurants all offering a different style cuisine but the Instagram crowd love it most for its giant chandeliers', 266, 8),
(128, '9-1481513268.jpg', 'This striking hotel located on a man-made island in Dubai, is one of the newest on the list having only opened in 2008', 266, 9),
(129, '10-1481513268.jpg', 'Located at the apex of Palm Jumeirah, a man made island in Dubai, the hotel has more than 1,500 rooms', 266, 10),
(130, '11-1481513268.jpg', 'This holidaymaker went out to sea to get the perfect shot of the grand hotel for their Instagram feed', 266, 11),
(131, '12-1481513268.jpg', 'Yet another Vegas hotel to make the list, Caesars Palace is one of the most famous casino hotels in the world', 266, 12),
(132, '13-1481513268.jpg', 'The hotel, which has nearly 4,000 rooms, opened 50 years ago and is Roman Empire themed with columns and a Julius Caesar statue', 266, 13),
(133, '14-1481513269.jpg', 'This Instagrammer took an aerial shot of the vast pool complex at Caesars Palace in Las Vegas, located on the famous Las Vegas Boulevard', 266, 14),
(134, '15-1481513269.jpg', 'Paris Las Vegas Hotel and Casino is the fourth Vegas hotel to make it into the list of the most Instagrammed this year', 266, 15),
(135, '16-1481513269.jpg', 'The Paris-themed hotel, which has nearly 3,000 rooms, opened in 1999 and was renovated in 2010 and 2011', 266, 16),
(136, '17-1481513269.jpg', 'The replica Eiffel Tower, half-scale of the real one in France, is a particularly popular subject for the Instagram crowd', 266, 17),
(137, '18-1481513269.jpg', 'Open for more than a century, Fontainebleau Miami Beach completed a $1billion expansion and renovation in November 2008', 266, 18),
(138, '19-1481513269.jpg', 'Set on 20 oceanfront acres, the hotel is one mile from the Miami Beach Convention Center and one-and-a-half miles from South Beach and the Art Deco district', 266, 19),
(139, '20-1481513418.jpg', 'On Instagram hotel guests love taking pool-side photos at the sun-soaked hotel on the famous Miami beach', 266, 20),
(140, '21-1481513418.jpg', 'The fifth Vegas hotel to make it onto the list, Wynn, named after casino developer Steve Wynn, is also attached to a popular casino', 266, 21),
(141, '1-1482333839.jpg', 'Aloha travelled with a man called Captain Walter Wanderwell, an adventurer, inventor and former sailor who eventually became her husband', 267, 1),
(142, '2-1482333839.jpg', 'Aloha visited 43 countries on her first trip around the world, crossing war-torn Europe over several months', 267, 2),
(143, '3-1482333839.jpg', 'Aloha spent several months in India on her first world trip in the early 1920s, meeting local people and visiting famous landmarks', 267, 3),
(144, '4-1482333839.jpg', 'Aloha became a worldwide celebrity as a result of her travels with her husband Captain Wanderwell ', 267, 4),
(145, '5-1482333840.jpg', 'Aloha Wanderwell and the captain on a visit to the pyramids of Egypt in the early 1920s ', 267, 5),
(146, '6-1482333841.jpg', 'Aloha stands on top of her famous car as it is lifted onto a ship during her tour of Africa in the 1920s ', 267, 6),
(147, '7-1482333841.jpg', 'Aloha Wanderwell smiles for the camera as she poses with her ship\\\'s crew during the first world tour', 267, 7),
(148, '8-1482333841.jpg', 'Locals pose for the camera alongside Aloha as she gets a ride on the back of a taxi during her tour ', 267, 8),
(149, '9-1482333841.jpg', 'Aloha sits astride an Indian motorcycle as crowds gather around her during an early visit to Europe ', 267, 9),
(150, '10-1482333841.jpg', 'Aloha saluting with soldiers in the earlier years of her first world tour with Captain Wanderwell', 267, 10),
(151, '11-1482333841.jpg', 'Aloha became a famous explorer thanks to a series of documentaries that she made about her travels', 267, 11),
(152, '1-1482334109.jpg', 'Wedged in the side of an Alpine mountain like a jagged crystal, the incredible concept design is the brainchild of Dubai-based Andrii Rozhko', 268, 1),
(153, '2-1482334110.jpg', 'He said the futuristic design is inspired by the topography of the Alps, although no actual site has been chosen for the project', 268, 2),
(154, '3-1482334110.jpg', 'Rozhko told MailOnline Travel: ‘It would be great to use a natural mountain crack for an architecture project. I decided to use simple walls and create a facade with the same shape as the mountains, divided by triangles and different heights’', 268, 3),
(155, '4-1482334110.jpg', 'Designed by Tall Arquitectos, the Copper Canyon Cocktail Bar is a similarly vertigo-inducing building. It will overlook the stunning Basaseachic Falls in Mexico', 268, 4),
(156, '1-1487328226.jpg', '1. Chương trình truyền hình “Người tập sự” (The Apprentice) - 21 mùa, hàng triệu lượt xem\\r\\n\\r\\nĐây là chương trình truyền hình được thực hiện dựa trên cuốn “Nghệ thuật Đàm phán”, đưa Trump trở thành nhân vật của công chúng với hình tượng một doanh nhân toàn thắng. Chương trình này cũng đóng vai trò rất quan trọng trong chiến dịch tranh cử tổng thống của ông.', 269, 1),
(157, '2-1482552513.jpeg', '2. Cuốn “Nghệ thuật Đàm phán” (The Art of the Deal) - 1 triệu bản\\r\\n\\r\\nCuốn sách nửa tự truyện nửa dạy kinh doanh này của Trump cực kỳ được ưa thích, được xếp vào hàng sách bán chạy nhất do New York Times bình chọn.', 269, 2),
(158, '3-1482552513.jpg', '3. Trump Organization - 3,9 tỷ USD\\r\\n\\r\\nDù chủ yếu hoạt động trong lĩnh vực bất động sản, từ chung cư tới tòa nhà thương mại, công ty của Trump vẫn lấn sân sang nhiều lĩnh vực khác, như rượu vang, công nghiệp giải trí hay bán lẻ. Bà Melania cũng từng hợp tác với công ty của Trump trước khi hai người kết hôn.', 269, 3),
(159, '4-1482552513.jpg', '4. Tòa nhà tại Avenue of Americas - 409 triệu USD\\r\\n\\r\\nĐây là bất động sản đắt giá nhất của Trump. Ông sở hữu 30% tòa nhà trị giá 2,31 tỷ USD này. Tòa nhà gồm khu trung tâm thương mại và văn phòng, nằm gần Rockefeller Center và nhà hát Radio City Music Hall.', 269, 4),
(160, '5-1482552513.jpg', '5. Trump Tower - 371 triệu USD\\r\\n\\r\\nTòa nhà chọc trời 58 tầng tại Manhattan này là khu tổ hợp trung tâm mua sắm, văn phòng và chung cư. Đây là một trong những tài sản nổi tiếng nhất của Trump. Ngay cả Michael Jackson, Cristiano Ronaldo và Bruce Willis cùng từng ở đây.', 269, 5),
(161, '6-1482552513.jpg', '6. Trump Building trên phố Wall - 345 triệu USD\\r\\n\\r\\nTòa nhà này có địa chỉ tại 40 phố Wall, được Trump mua vào năm 1995 với giá chưa đến 10 triệu USD. Trên thực tế, khi mới xây, tòa nhà 71 tầng này được ghi nhận là cao nhất thế giới. Tuy nhiên, danh hiệu này chẳng kéo dài lâu.', 269, 6),
(162, '7-1482552513.jpg', '7. 10 sân golf - 206 triệu USD\\r\\n\\r\\nTrump rất thích chơi golf và có tới 10 sân golf nằm rải rác khắp 6 bang tại Mỹ, chưa kể tới 3 sân khác ở Scotland và Ireland, trị giá thêm 85 triệu USD nữa.', 269, 7),
(163, '8-1482552513.jpg', '8. Khu nghỉ dưỡng Mar-A-Lago - 150 triệu USD\\r\\n\\r\\nTọa lạc tại Palm Springs, Florida với diện tích hơn 10.000 m2, khu nghỉ dưỡng ưa thích này của Trump là một trong những mảnh đất giá trị nhất Florida. Nơi này có 126 phòng, một bể bơi nhìn ra biển, spa, khu ăn uống, sân chơi golf và tennis. Ngoài nhu cầu cá nhân, Trump còn cho khách thuê phòng tổ chức sự kiện với giá 14.000 USD mỗi ngày. Đây cũng là nơi đã diễn ra đám cưới của Trump và Melania.', 269, 8),
(164, '9-1482552514.jpg', '9. Penthouse - 90 triệu USD\\r\\nĐây là nơi Donald Trump sống cùng vợ Melania và con trai út Barron. Để miêu tả dinh thự này, chỉ có thể gói gọn trong một từ: vàng. Với thiết kế 3 tầng nhìn ra toàn cảnh khu Central Park và đường chân trời Manhattan, ngôi nhà này có sàn nhà bằng vàng và kim cương, đèn chùm pha lê, trần nhà được phủ bởi những bức tranh nghệ thuật về thần thoại Hy Lạp, xa hoa tới mức vợ con Trump chẳng thiết tha gì với Nhà Trắng. Thành phố New York mỗi ngày phải chi 1 triệu USD chỉ để bảo vệ nơi đây.', 269, 9),
(165, '10-1482552514.jpg', '10. Bộ sưu tập máy bay - 35 triệu USD\\r\\nTrump có một chiếc Boeing 757, một chiếc Cessna 750 và 3 trực thăng. Riêng chiếc Boeing có nhiều phòng ngủ, hệ thống giải trí và một phòng tắm cỡ lớn với bồn tắm dát vàng 24k. Ngoài ra, nó còn có phòng chờ, phòng ăn và một phòng riêng cho khách. Tỷ phú từng tuyên bố mua chiếc máy bay này chẳng khác nào một gói snack - ít tiền mà được nhiều.', 269, 10),
(166, '1-1484878246.jpg', 'Trường THPT Thành chiều ngày 19/01/2017 tổ chức chương trình mừng Đảng Mừng Xuân nhưng hình như các tiết mục \'méo\' liên quan tý nào.', 270, 1),
(167, '2-1484878246.jpg', 'Thế là sau bao ngày rủ rê, lôi kéo và dụ dỗ nhiệt tình thì các \'cụ\' học sinh khóa 2013 đã đến đây dưới sự chào đón không nhiệt tình của các em học sinh', 270, 2),
(168, '3-1484878246.jpg', 'Nam thanh niên, à mà cũng \'éo\' phải - chưa xác định giới tính. Lớp trưởng Xuân Diệu về lại trường với một giới tính khác.', 270, 3),
(169, '4-1484878246.jpg', 'Chú Đăng cẩn thận, mất hồi nào không hay', 270, 4),
(170, '5-1484878246.jpg', '12C2 và hình ảnh không liên quan', 270, 5),
(171, '6-1484878246.jpg', 'Sân khấu, sân trường, có ai thấy 2 cây cau lớp mình trồng không?', 270, 6),
(172, '7-1484878246.jpg', '', 270, 7),
(173, '8-1484878246.jpg', 'Thầy \'Tổ Mối\', thật tuyệt vời Thầy vẫn giữ được Body như năm nào, chắc Thầy tự sản xuất được Carbohydrat', 270, 8),
(174, '9-1484878246.jpg', 'Không liên quan tý nào', 270, 9),
(175, '10-1484878246.jpg', 'Ai nhớ?', 270, 10),
(176, '1-1486958598.jpg', 'Ngày mùng 2 tết Đinh Dậu 2017, một số bạn lớp 12c2 tổ chức đi chúc tết từng nhà các bạn thành viên 12c2. Cũng chỉ đến được một số nhà thôi không đi hết được. Nhà đầu tiên là nhà lớp trưởng Lê Xuân Diệu (ngoài cùng bên phải)', 271, 1),
(177, '2-1486958598.jpg', 'Thanh niên ngồi giữa thuộc hàng, cha, chú, ông nội... sắp về với ông bà ', 271, 2),
(178, '3-1486958598.jpg', 'Tiếp theo là nhà bạn Nguyễn Hồng Hạnh (Ngoài cùng bên phải)', 271, 3),
(179, '4-1486958598.jpg', 'Đông đủ thế!!!, đây là nhà bạn Trần Diễm My (nữ áo đen), tình cờ đi đến nhà thím My thì gặp được cả các thím Quyên, Liên, Đèo, Nhân, Duyên luôn.', 271, 4),
(180, '1-1487477924.jpg', 'Đầu tiên là trường KHXH & NV - ĐHQG HCM, đây là cơ sở 2 tại Linh Trung, Thủ Đức. Nhìn từ phía xa, trường có 2 điểm nổi bật, phía xa là tòa nhà trung tâm mới được hoàn thành trong năm 2016. Khu nhà màu trắng, mái vòm là nhà thi đấu đa năng của trường.', 115, 1),
(181, '2-1487477924.jpg', 'Cận cảnh tòa nhà trung tâm trường KHXH & NV', 115, 2),
(182, '3-1487477924.jpg', 'Trường đại học Công Nghệ Thông Tin (UIT) - ĐHQG HCM, với khuôn viên không quá rộng nên trường chủ yếu là các tòa nhà cao tầng, hình trụ để tiết kiệm diện tích.', 115, 3),
(183, '4-1487477924.jpg', 'Khối nhà A, gồm các phòng ban, thư viện và nhà để các máy server của trường.', 115, 4),
(184, '5-1487477924.jpg', 'Khối nhà A nhìn từ trên cao.', 115, 5),
(185, '6-1487477924.jpg', 'Nhìn từ phía xa trường ĐH CNTT - ĐHQG HCM, bên trái là tòa nhà B đang được xây dựng.', 115, 6),
(186, '7-1487477924.jpg', 'Trường đại học Khoa Học Tự Nhiên HCM, tòa nhà này là nơi làm việc của ban giám hiệu và các phòng ban của trường.', 115, 7),
(187, '8-1487477924.jpg', 'Thư viện trung tâm ĐHQG HCM, nằm riêng biệt, cách xa các trường đại học thuộc khối đại học quốc gia nên thư viện trung tâm rất thoáng đãng và có không gian yên tĩnh cho các bạn sinh viên học tập.', 115, 8),
(188, '9-1487477924.jpg', 'Bên trong khu vực sân trước thư viện.', 115, 9),
(191, '3-1488163285.jpg', 'Nhìn từ xa rất hùng vỹ nhưng cũng rất thơ mộng, mang lại cảm giác thoải mái cho khách du lịch', 272, 1),
(192, '4-1488163285.jpg', 'Suối nhỏ nhân tạo', 272, 2),
(193, '5-1488163285.jpg', '', 272, 3),
(194, '6-1488163285.jpg', 'Nhiều cảnh đẹp do chính con người làm nên', 272, 4),
(195, '7-1488163285.jpg', 'Thác nước nhân tạo', 272, 5),
(196, '8-1488163285.jpg', '', 272, 6),
(197, '9-1488163285.jpg', 'Vẻ đẹp hoành tráng hiện đại kết hợp với nét đẹp truyền thống', 272, 7),
(198, '10-1488163286.jpg', '', 272, 8),
(199, '11-1488163286.jpg', '', 272, 9),
(200, '12-1488163286.jpg', '', 272, 10),
(201, '13-1488163286.jpg', 'Không khác gì hoa trên Đà Lạt', 272, 11),
(202, '14-1488163286.jpg', 'Nhiều cặp đôi kết hôn đến đây để chụp hình, không cần phải đi đâu xa mà khung cảnh vẫn rất hùng vỹ', 272, 12),
(203, '15-1488163286.jpg', 'Gần gũi với thiên nhiên', 272, 13),
(204, '16-1488163286.jpg', 'Bán Đảo Long Sơn Bửu Long', 272, 14),
(205, '17-1488163286.jpg', '', 272, 15),
(206, '18-1488163286.jpg', 'Nhiều bạn trẻ đến chụp hình, thả hồn với vẻ đẹp tự nhiên', 272, 16),
(207, '19-1488163286.jpg', '', 272, 17),
(208, '20-1488163806.jpg', 'Bạn nào muốn tìm lại không khí tết nguyên đán vừa qua thì nơi đây vẫn còn điều đó với đủ mai, đào', 272, 18),
(209, '21-1488163806.jpg', 'Rất sáng tạo', 272, 19),
(210, '1-1502089917.JPG', 'Mũi Kê Gà bình thuận – Ngọn Hải Đăng', 273, 1),
(211, '2-1502089917.JPG', 'Tên gọi khác là Đảo đá vàng', 273, 2),
(212, '3-1502089917.JPG', '', 273, 3),
(213, '4-1502089992.JPG', '', 273, 4),
(214, '5-1502089992.JPG', '', 273, 5),
(215, '6-1502089992.JPG', 'Series ảnh không liên quan :) :)', 273, 6),
(216, '7-1502089992.JPG', 'Mình chỉ chuẩn bị được 1 ít đồ nhưng vẫn dư ăn và đầy đủ em ha', 273, 7),
(217, '8-1502089992.JPG', 'Sau hàng loạt tư thế, góc cạnh mới có tấm này', 273, 8),
(218, '9-1502090075.JPG', '', 273, 9),
(219, '10-1502090075.JPG', '', 273, 10),
(220, '11-1502090075.JPG', '', 273, 11),
(221, '12-1502090075.JPG', '', 273, 12),
(222, '13-1502090075.JPG', '', 273, 13),
(223, '14-1502090075.JPG', '', 273, 14),
(224, '15-1502090075.JPG', '', 273, 15),
(225, '16-1502090075.JPG', '', 273, 16),
(226, '17-1502090181.JPG', '', 273, 17),
(227, '18-1502090181.JPG', 'Bữa ăn trưa của 2 phượt thủ, rất đơn giản nhưng cảm thấy đầy đủ, chỉ mất ít thời gian mua đồ nhưng ăn ngon và no. Bao gồm: bánh mì, chả lụa, rau sống dưa leo và 2 chai tương :v + trái cây (táo và bưởi) thế là được ngay một bữa ăn trưa “quý tộc” tại Mũi Kê Gà', 273, 18),
(228, '19-1502090181.JPG', 'Cơn giông kéo đến vào giờ trưa ở bãi biển Kê Gà', 273, 19),
(229, '20-1502090181.JPG', 'Núi tà cú – KDL Tà Cú, chạy xe mất khoảng hơn 1 tiếng mới tới được 1 tấm hình cũng vui rồi.', 273, 20),
(230, '21-1502090181.JPG', 'Phía sau hậu trường, (đáng nhớ, giờ vẫn còn vui). ', 273, 21),
(231, '22-1502090181.jpg', 'Cảm ơn em. Chúc em luôn vui.', 273, 22),
(232, '1-1502681313.jpg', 'Núi Cúi - hồ Trị An Đồng Nai', 274, 1),
(233, '2-1502681313.jpg', 'Nhìn mập mập nhỉ :)) Tròn quá, biết vậy hôm đó t cho xuống xe hèn chi đi không nổi ', 274, 2),
(234, '3-1502681313.jpg', '', 274, 3),
(235, '4-1502681313.jpg', '', 274, 4),
(236, '5-1502681313.jpg', '', 274, 5),
(237, '6-1502681313.jpg', 'Rừng cao su', 274, 6),
(238, '7-1502681313.jpg', '', 274, 7),
(239, '8-1502681470.jpg', 'Hồ Trị An', 274, 8),
(240, '9-1502681470.jpg', '', 274, 9),
(241, '10-1502681470.jpg', '', 274, 10),
(242, '11-1502681470.jpg', '', 274, 11),
(243, '12-1502681470.jpg', 'Không biết tay của ai? Thấy đẹp nên chọn tấm này :))', 274, 12),
(244, '13-1502681471.jpg', 'Đẹp trai khỏi bàn', 274, 13),
(245, '14-1502681471.jpg', '', 274, 14),
(246, '15-1502681471.jpg', 'Cẩn thận bò. ahihi', 274, 15),
(247, '1-1503888453.jpg', 'Núi Chứa Chan - Gia Lào, Đồng Nai', 275, 1),
(248, '2-1503888453.jpg', '', 275, 2),
(249, '3-1503888453.jpg', 'Cây 3 gốc trên núi Chứa Chan', 275, 3),
(250, '4-1503888453.jpg', '', 275, 4),
(251, '5-1503888453.jpg', '', 275, 5),
(252, '6-1503888453.jpg', 'Lên tới đỉnh, lần nào đi cũng có tấm hình nhìn em rất tròn :))', 275, 6),
(253, '7-1503888453.jpg', '', 275, 7),
(254, '8-1503888454.jpg', 'Tấm này anh nhìn từ hôm qua đến giờ nhiều lần rồi, nhìn tấm này em thật sự rất đẹp ... khuôn mặt rất dễ thương và đầy đặn cứ như vậy nhé, yêu bạn nhiều ahihi :))', 275, 8),
(255, '9-1503888594.jpg', '', 275, 9),
(256, '10-1503888594.jpg', '', 275, 10),
(257, '11-1503888594.jpg', '', 275, 11),
(258, '12-1503888594.jpg', 'Combo giày dép, chân tay', 275, 12),
(259, '13-1503888594.jpg', 'Tên mình khắc trên ... \"bia\" đá, hiểu hàng luôn', 275, 13),
(260, '14-1503888594.jpg', '', 275, 14),
(261, '15-1503888594.jpg', '', 275, 15),
(262, '16-1503888679.jpg', 'Mình \"trốn\" trong này nghỉ trưa cũng được, mát đó', 275, 16),
(263, '17-1503888679.jpg', '', 275, 17),
(264, '18-1503888679.jpg', 'Tạm biệt Chứa Chan, Gia Lào\r\n', 275, 18),
(265, '1-1505647966.jpg', '', 276, 1),
(266, '2-1505647966.jpg', 'Trung tâm hành hương Đức Mẹ Tà Pao, Bình Thuận', 276, 2),
(267, '3-1505647966.jpg', 'Thêm một lần leo núi nữa, mới leo núi Chứa Chan và hứa với lòng là sẽ không đi núi nữa nhưng thêm một lần lỡ ...', 276, 3),
(268, '4-1505647966.jpg', 'Chấp mấy thanh niên ngồi ghế đá ở làng', 276, 4),
(269, '5-1505647966.jpg', '', 276, 5),
(270, '6-1505647966.jpg', '', 276, 6),
(271, '7-1505647966.jpg', '', 276, 7),
(272, '8-1505648058.jpg', '', 276, 8),
(273, '9-1505648058.jpg', 'Thôi khỏi miêu tả nhé, chỉ một từ thôi: HÌNH TRÒN :D', 276, 9),
(274, '10-1505648058.jpg', '', 276, 10),
(275, '11-1505648058.jpg', '', 276, 11),
(276, '12-1505648058.jpg', 'Đang định lấy tấm này làm title nhưng thôi ', 276, 12),
(277, '13-1505648222.jpg', 'Rực rỡ chưa ! Mấy tấm này nhìn hoành văn tráng luôn', 276, 13),
(278, '14-1505648222.jpg', 'Quảng trường trung tâm hành hương', 276, 14),
(279, '15-1505648222.jpg', 'Nhờ có nắng mới có tấm này', 276, 15),
(280, '16-1505648222.jpg', '', 276, 16),
(281, '17-1505648222.jpg', 'Tạm biệt Tà Pao khi chiều Tà ', 276, 17);

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`id`, `name`) VALUES
('Al', 'Trang Album'),
('CATE', 'Trang loại tin'),
('categoryNews', 'Trang chuyên mục tin'),
('crtEvt', 'Trang tạo sự kiện'),
('DET', 'Trang chi tiết'),
('evt', 'Trang sự kiện'),
('IND', 'Trang chủ'),
('myEvt', 'Trang sự kiện của tôi'),
('reviewEvt', 'Trang sự kiện Review'),
('todayEvt', 'Trang sự kiện hôm nay');

-- --------------------------------------------------------

--
-- Table structure for table `loai_bai`
--

CREATE TABLE `loai_bai` (
  `ma_loai_bai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_bai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_bai`
--

INSERT INTO `loai_bai` (`ma_loai_bai`, `ten_loai_bai`) VALUES
('article', 'Article (Tin tức thuần)'),
('photo', 'Photo (Dạng slide ảnh)');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tin`
--

CREATE TABLE `loai_tin` (
  `ma_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_tin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_tin`
--

INSERT INTO `loai_tin` (`ma_loai`, `loai_tin`) VALUES
('emegazine', 'Emegazine\r\n'),
('hot', 'HOT'),
('news', 'TIN TỨC'),
('news_top1', 'TOP1');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tin_nhat_ky`
--

CREATE TABLE `loai_tin_nhat_ky` (
  `ma_loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loai_tin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_tin_nhat_ky`
--

INSERT INTO `loai_tin_nhat_ky` (`ma_loai`, `loai_tin`) VALUES
('diary', 'Nhật Ký');

-- --------------------------------------------------------

--
-- Table structure for table `profile_token`
--

CREATE TABLE `profile_token` (
  `id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_token`
--

INSERT INTO `profile_token` (`id`, `token`, `email`, `userid`, `date`, `expired`) VALUES
(8, 'be0c01a9bdb3d0a85023be49438ac94824836721386ab4298c4949fb6df6b5e3', '123naminc@gmail.com', 9, '2017-02-12 04:35:01', 1486870501),
(9, '0c8d4ed187259806bc796848768e14454886f13868b51b7cc4c263a32d7d3f22', 'khongsomua@gmail.com', 10, '2017-03-11 09:37:02', 1489199822);

-- --------------------------------------------------------

--
-- Table structure for table `remind_of_events`
--

CREATE TABLE `remind_of_events` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_as_inform` text COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `remind_of_events`
--

INSERT INTO `remind_of_events` (`id`, `name`, `name_as_inform`, `created`, `updated`, `info`) VALUES
(0, 'Đúng ngày', 'Hôm nay', '', '', ''),
(1, '1 ngày', 'Ngày mai', '', '', 'Nhắc trước 1 ngày của sự kiện'),
(10, '1 tuần', 'Tuần sau', '', '', 'Nhắc trước 1 tuần của sự kiện'),
(100, '1 tháng', 'Tháng sau', '', '', 'Nhắc trước 1 tháng của sự kiện');

-- --------------------------------------------------------

--
-- Table structure for table `repeat_of_events`
--

CREATE TABLE `repeat_of_events` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_as_inform` text COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `repeat_of_events`
--

INSERT INTO `repeat_of_events` (`id`, `name`, `name_as_inform`, `created`, `updated`, `info`) VALUES
(0, 'Không', 'Không lặp lại', '', '', ''),
(1, 'Mỗi ngày', 'Lặp lại mỗi ngày', '', '', 'Nhắc tôi sự kiện này mỗi ngày'),
(10, 'Mỗi tuần', 'Lặp lại mỗi tuần', '', '', 'Lặp lại hàng tuần (theo thứ trong tuần)'),
(100, 'Mỗi tháng', 'Lặp lại mỗi tháng', '', '', 'Lạp lại hàng tháng (căn cứ vào ngày của sự kiện)'),
(1000, 'Mỗi năm', 'Lặp lại mỗi năm', '', '', 'Lặp lại hàng năm (theo ngày, tháng)');

-- --------------------------------------------------------

--
-- Table structure for table `resetpwtable`
--

CREATE TABLE `resetpwtable` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resetpwtable`
--

INSERT INTO `resetpwtable` (`id`, `userid`, `email`, `token`, `time`) VALUES
(3, 2, 'trangminh@yahoo.com', 'e9a82bc98dfba46c9ad50c3ebd5ac07622a6d96e5ac2e0f76361048ae045426f', 1483427990),
(5, 9, 'phamvanluc0595@gmail.com', '94d3d6291562b44e99ee75de59e00736d608a63654857d49bd092c40fe154dcc', 1488428611),
(7, 16, 'khongsomua@gmail.com', '52231b1724e407fac0f69d11f50797b59a0f5c8f554bd873f47ba6b034eaa7f2', 1490799668),
(8, 10, '123naminc@gmail.com', 'a03192917f960f4dec99be2a35db1d419333b95ff79ae04a2b7cbba9c9a5b451', 1492595775),
(9, 17, 'tranyentuyet188@gmail.com', '574bb02ccc1e1822bf57a00996b8025dc7ac9f5738a5f94dc88b55d03a31815a', 1499146848);

-- --------------------------------------------------------

--
-- Table structure for table `sendme`
--

CREATE TABLE `sendme` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `_to` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `_display` int(11) NOT NULL,
  `_emoji` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `_date` datetime NOT NULL,
  `_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sendme`
--

INSERT INTO `sendme` (`id`, `user`, `_to`, `message`, `_display`, `_emoji`, `_date`, `_time`) VALUES
(203, 17, 10, 'Hi Anh&#44; Cũng lâu lắm rồi em không viết cái gì trên đây nhỉ&#44; một phần vì không có thời gian một phần vì em cũng không biết nên viết gì khi khoảng thời gian này lúc nào cũng gần và nói chuyện trực tiếp với Anh&#46; Hôm nay xa Anh nè em lại đang rảnh nữa nên đã lôi hết mấy bài private ra đọc và viết cái này nữa &#58;&#41;&#41;&#46; Nay mình nên viết gì đây nhỉ&#63; Chắc không cần phải viết mấy câu tình cảm đại loại như xa Anh nhớ Anh &#46;&#46;&#46;này kia đâu ha vì làm gì có đâu để viết nào&#44; hehe &#58;Đ&#44; chắc em chỉ nói lên cảm xúc của mình trong những tuần gần đây mà chính xác là từ lúc Anh lên Sài Gòn cùng em &#58;&#41;&#41;&#46; Khoảng thời gian này thật sự rất vui với em&#44; không hẳn vui vì em được đi chơi nhiều nơi mà vui vì được nắm tay cùng Anh vượt qua bao chặng đường tuy mệt nhưng hạnh phúc lắm&#46; Và tất nhiên mỗi chuyến đi cảm giác của em lại khác nhau&#46; Anh còn nhớ &quot;đêm đầu tiên&quot; ở Bình Thuận không&#63;  Hôm đó thật sự em chưa từng nghĩ sẽ ở lại cùng Anh cả vì em thấy tình cảm của 2 đứa chưa thật sự đến mức đó và điều đó cũng gần như là điều không thể với cả hai nhưng không hiểu vì lí do gì &#40;thời tiết xấu chăng&#64;&#64;&#41; em vẫn ở lại&#44;  cảm giác không sợ lắm vì lúc nào em cũng nghĩ em sẽ bảo vệ được mình&#46; Em không biết những người con gái bình thường khác thì sao nhưng thật sự mục đích ban đầu em đến với tình yêu với anh không phải là vấn đề dục vọng gì hết&#44; em còn nghĩ vấn đề đó chắc em chỉ đề cập khi sắp kết hôn thôi&#44; không biết mình ngây thơ hay ngu ngơ nữa &#64;&#46;&#64; &#46; Ngày hôm sau về phòng em đã suy nghĩ khá nhiều lên mạng đọc đủ mọi vấn đề người khác chia sẻ về vấn đề này&#44; hầu như ai cũng khuyên nếu là một đứa con gái tốt biết giữ mình thì phải kiên quyết không chấp nhận chuyện đó nếu không muốn bị đối phương xem thường hay đánh giá hoặc nếu lỡ sau này không đến được với nhau thì thiệt thòi lắm&#44;  và nếu con trai thật lòng thương yêu mình thì họ sẽ cảm thông và tôn trọng&#46;  Đọc xong em buồn lắm mà nói đúng ra là hoang mang&#44; dù anh với em chưa thật sự làm gì cả nhưng em biết như vậy thôi em đã có lỗi với gia đình rồi&#44; em cũng không biết anh suy nghĩ gì về em&#44;  có cho em là dễ dãi quá không&#44; liệu sau này anh không muốn đến với em nữa thì người khác có chấp nhận không và lỡ những lần sau vì một phút nông nỗi mình đi quá giới hạn thì biết tính sao&#63;bao nhiêu &#253; nghĩ trong đầu làm em rối lắm&#44;  nhưng em vẫn không trách anh vì vấn đề này là cả hai tự nguyện mà&#44;  em tự nói với lòng là không sao cả sẽ không để vấn đề đáng tiếc nào đến và nếu thật sự anh là người yêu cuối cùng của em&#44; cả hai sẽ vì đó mà cùng cố gắng vun đắp thì thật tuyệt vời&#46; Những lần sau đi với anh em thừa nhận 1phần cũng do mong muốn của bản thân em&#44;  không biết là em bắt đầu suy nghĩ thoáng hơn hay do em bắt đầu có thói quen đó nữa&#44;em không kiềm chế được cảm xúc của mình&#44;em chỉ thấy mỗi ngày tình cảm em dành cho anh nhiều hơn&#44; nghiêm túc hơn và luôn cảm thấy hạnh phúc mỗi lúc được gần anh&#44; được ôm anh ngủ thôi cũng được&#46; Em không biết mình như thế là đúng hay sai nhưng cứ thế hoài cũng không phải cách hay vì ngày tháng mình phải trải qua để thật sự đến với cuộc sống hôn nhân còn rất rất dài nên em mong mình có thể suy nghĩ kỹ về vấn đề này để cả hai đều vui vẻ và không phải hối tiếc chuyện gì &#44;em cũng muốn biết thật sự suy nghĩ của anh nữa&#46; Hôm nay em về nhà biết được 1chuyện không vui mấy&#44;  cũng không liên quan với mình nhưng nếu có cơ hội em sẽ kể anh nghe&#46; À con chị hai nhỏ xíu dễ cưng lắm  hí hí&#44; nhìn chị bây giờ tự dưng em có cảm giác lạ lắm&#44; mới ngày nào hai chị em còn đi học chung nói chuyện giỡn vô tư với nhau mà giờ chị đã làm mẹ rồi suy nghĩ cũng trưởng thành hơn hẳn&#44; em lại nghĩ về mình cũng thấy mình cần phải thay đổi hơn&#44; lớn rồi cố gắng không dựa vào ba mẹ nhiều  quá và sống trách nhiệm hơn nữa&#44;  đặc biệt bây giờ thấy vấn đề sinh con làm mẹ cao cả lắm không còn sợ như trước nữa &#44;ngộ ha ahihi&#46; Một vấn đề nữa không liên quan tự dưng đúng ngày em về BL được 1trận mưa ngập đường ngon lành&#44;  không lẽ mình &quot;hên&quot; vầy à &#44;haizz chắc nay lại thứ7 &#46; Vấn đề cuối cùng có vẻ liên quan hơn mai 3&#45;9 tròn 3tháng hợp đồng yêu k&#253; kết&#44;  hehe&#44;  em thấy ngày này cũng dễ nhớ đó cứ lấy làm mốc đánh dấu để kỷ niệm cũng được &#58;3 &#46; Vậy thôi nha&#44;  chúc anh mấy ngày lễ vui vẻ với bạn bè&#46; Ngủ ngon nhé người em yêu&#46; ', 1, 'love', '2017-09-02 21:08:02', 1504361282);

-- --------------------------------------------------------

--
-- Table structure for table `slideprivated`
--

CREATE TABLE `slideprivated` (
  `id` int(11) NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idkey` int(11) NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideprivated`
--

INSERT INTO `slideprivated` (`id`, `caption`, `image`, `idkey`, `created`) VALUES
(20, 'Sài Gòn ngày 18/06/2017', '14988769571.jpg', 1, 'Saturday 1/07/2017, 09:42:37 am'),
(21, 'Ánh nắng của anh ... và em', '14988769572.jpg', 2, 'Saturday 1/07/2017, 09:42:37 am'),
(22, 'Bình Dương, ngày 31/07/2017', '15015538623.jpg', 3, 'Tuesday 1/08/2017, 09:17:42 am');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `articleid`, `question`, `category_id`, `created`, `updated`, `user`) VALUES
(1, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '10'),
(2, 10000, 'Giang sinh duoc to chuc?', '0', 'Saturday 5/11/2016, 05:09:00 am', 'Saturday 5/11/2016, 05:09:00 am', '10'),
(3, 10000, 'Giang sinh duoc to chuc?', '0', '5/11/2016, 05:09:53 am', '5/11/2016, 05:09:53 am', '10'),
(4, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', '0', '5/11/2016, 05:12:19 am', '5/11/2016, 05:12:19 am', '10'),
(5, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'multiple_choice', '5/11/2016, 05:12:50 am', '5/11/2016, 05:12:50 am', '10'),
(6, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'multiple_choice', '5/11/2016, 05:28:01 am', '5/11/2016, 05:28:01 am', '10'),
(7, 10000, 'Giang sinh duoc to chuc?', 'list_select', '5/11/2016, 05:29:52 am', '5/11/2016, 05:29:52 am', '10'),
(8, 10000, 'Giang sinh duoc to chuc?', 'list_select', '5/11/2016, 05:31:45 am', '5/11/2016, 05:31:45 am', '10'),
(9, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:32:34 am', '5/11/2016, 05:32:34 am', '10'),
(10, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:33:35 am', '5/11/2016, 05:33:35 am', '10'),
(11, 10000, 'Giang sinh duoc to chuc?', 'list_select', '5/11/2016, 05:41:01 am', '5/11/2016, 05:41:01 am', '10'),
(12, 10000, 'Giang sinh duoc to chuc?', 'list_select', '5/11/2016, 05:41:16 am', '5/11/2016, 05:41:16 am', '10'),
(13, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:44:59 am', '5/11/2016, 05:44:59 am', '10'),
(14, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:48:59 am', '5/11/2016, 05:48:59 am', '10'),
(15, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:50:01 am', '5/11/2016, 05:50:01 am', '10'),
(16, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'list_select', '5/11/2016, 05:50:39 am', '5/11/2016, 05:50:39 am', '10'),
(17, 10000, 'Câu hỏi trắc nghiệm 2?', 'multiple_choice', '5/11/2016, 05:53:45 am', '5/11/2016, 05:53:45 am', '10'),
(18, 10000, 'Câu hỏi trắc nghiệm 2?', 'multiple_choice', '5/11/2016, 05:54:50 am', '5/11/2016, 05:54:50 am', '10'),
(19, 10000, 'asdasd', 'yes_no', '7/11/2016, 02:17:02 am', '7/11/2016, 02:17:02 am', '10'),
(20, 10000, 'asdasd', 'yes_no', '7/11/2016, 02:18:29 am', '7/11/2016, 02:18:29 am', '10'),
(21, 10000, 'Câu hỏi trắc nghiệm????', 'yes_no', '7/11/2016, 02:18:54 am', '7/11/2016, 02:18:54 am', '10'),
(22, 10000, 'Giáng Sinh được tổ chức vào ngày/tháng nào trong năm?', 'multiple_choice', '7/11/2016, 08:50:52 am', '7/11/2016, 08:50:52 am', '10'),
(23, 54, 'Bạn có mong muốn nhận được trợ giúp của trung tâm hỗ trợ khỏi nghiệp này không?', 'yes_no', '7/11/2016, 09:00:17 am', '7/11/2016, 09:00:17 am', '10'),
(24, 55, 'Bạn có mong muốn nhận được trợ giúp của trung tâm hỗ trợ khỏi nghiệp này không?', 'yes_no', '7/11/2016, 09:01:39 am', '7/11/2016, 09:01:39 am', '10'),
(25, 56, 'Bạn có quan tâm đến giá cả trong lĩnh vực nào?', 'list_select', '7/11/2016, 09:09:24 am', '7/11/2016, 09:09:24 am', '10'),
(26, 57, 'Bạn có một tuổi thơ hạnh phúc không?', 'yes_no', '7/11/2016, 09:33:02 am', '7/11/2016, 09:33:02 am', '10'),
(27, 58, 'asdawdawd', 'yes_no', '8/11/2016, 02:24:33 pm', '8/11/2016, 02:24:33 pm', '10'),
(28, 59, 'Bạn có biết về Giáng Sinh được tổ chức ngày nào không?', 'multiple_choice', '8/11/2016, 02:26:37 pm', '8/11/2016, 02:24:50 pm', '10'),
(29, 60, 'Theo bạn cuộc bầu chọn tổng thống Mỹ có quan trọng với Việt Nam không?', 'yes_no', '8/11/2016, 09:18:05 pm', '8/11/2016, 09:18:05 pm', '10'),
(30, 61, 'cau hoi traac nghiem 1', 'multiple_choice', '8/11/2016, 09:42:10 pm', '8/11/2016, 09:42:10 pm', '10'),
(31, 62, 'Trong đêm vọng Giáng Sinh (tức ngày 24/12) bạn thường làm gì?', 'multiple_choice', '8/11/2016, 09:44:05 pm', '12/11/2016, 11:18:12 am', '10'),
(33, 64, 'daa doi qua dang trac nghiem', 'multiple_choice', '8/11/2016, 09:46:16 pm', '8/11/2016, 03:49:24 pm', '10'),
(34, 65, 'cau hoi trac nghiem???', 'multiple_choice', '8/11/2016, 10:18:50 pm', '8/11/2016, 10:18:50 pm', '10'),
(36, 67, 'cau hoi yes/no', 'yes_no', '8/11/2016, 10:35:34 pm', '8/11/2016, 10:35:34 pm', '10'),
(37, 68, 'Bạn có hay ra hồ đá không?', 'multiple_choice', '8/11/2016, 10:37:04 pm', '8/11/2016, 10:37:04 pm', '10'),
(38, 48, 'cau hoi yes/no duoc them vao??', 'yes_no', '8/11/2016, 04:38:40 pm', '8/11/2016, 04:38:40 pm', '10'),
(39, 63, 'Cau hoi chon nhieu item?', 'list_select', '12/11/2016, 09:08:47 am', '12/11/2016, 09:12:03 am', '10'),
(40, 63, 'Cau hoi chon nhieu item?', 'list_select', '12/11/2016, 09:11:08 am', '12/11/2016, 09:11:08 am', '10'),
(41, 66, 'nhieu item', 'list_select', '12/11/2016, 09:17:44 am', '12/11/2016, 09:18:52 am', '10'),
(43, 51, 'Điều gì mà bạn quan tâm mỗi khi sử dụng Internet?', 'list_select', '12/11/2016, 05:26:34 pm', '12/11/2016, 05:26:34 pm', '10'),
(44, 69, 'Theo bạn những chương trình hài ngày nay có bị biến tướng không?', 'multiple_choice', '14/11/2016, 09:11:18 am', '14/11/2016, 09:11:18 am', '10'),
(45, 70, 'Theo bạn những chương trình hài ngày nay có bị biến tướng không?', 'multiple_choice', '14/11/2016, 09:12:15 am', '14/11/2016, 09:12:15 am', '10'),
(46, 71, 'Bạn có quan tâm đến khởi nghiệp (startup) đang phát triển mạnh hiện nay không?', 'yes_no', '14/11/2016, 09:16:04 am', '14/11/2016, 09:16:04 am', '10'),
(47, 72, 'Theo bạn điều gì cần thiết trong chương trình giáo dục tiểu học (có thể chọn nhiều đáp án) ?', 'list_select', '14/11/2016, 09:24:21 am', '14/11/2016, 09:24:21 am', '10'),
(48, 73, 'Bạn có thấy mặt trăng khác thường trong đêm siêu trăng không?', 'multiple_choice', '19/11/2016, 03:29:21 pm', '19/11/2016, 09:55:09 am', '10'),
(49, 74, 'Theo bạn dự đoán đội bóng nào sẽ vô địch ngoại hạng Anh năm nay?', 'multiple_choice', '19/11/2016, 04:26:51 pm', '19/11/2016, 04:57:03 pm', '10'),
(51, 75, 'Câu hỏi thêm vào?', 'multiple_choice', '19/11/2016, 04:59:29 pm', '19/11/2016, 05:10:57 pm', '10'),
(52, 76, 'Câu hỏi thêm vào?', 'list_select', '20/11/2016, 09:02:36 am', '20/11/2016, 03:04:16 am', '10'),
(53, 77, 'Bạn có cần sử dụng lịch biểu trong cuộc sống thường ngày của mình không?', 'yes_no', '2/12/2016, 03:29:03 pm', '2/12/2016, 03:29:03 pm', '10'),
(54, 88, 'Theo bạn giải pháp nào để giảm bớt kẹt xe ở TP.HCM?', 'multiple_choice', '22/12/2016, 04:02:46 am', '22/12/2016, 04:02:46 am', '10'),
(55, 103, 'cau hoi 1', 'multiple_choice', '29/12/2016, 10:58:27 am', '29/12/2016, 10:58:27 am', '10'),
(56, 110, 'Bạn muốn tổ chức họp lớp mỗi năm hay khoảng mấy năm một lần?', 'yes_no', '9/02/2017, 10:36:57 am', '6/04/2017, 10:45:37 pm', ''),
(57, 101, 'Khảo sát?', 'yes_no', '4/07/2017, 09:58:57 am', '4/07/2017, 09:58:57 am', '10'),
(58, 108, 'Question?', 'yes_no', '4/07/2017, 10:13:20 am', '4/07/2017, 10:13:20 am', '10'),
(59, 133, 'Theo bên B, thì bên A và bên B sẽ gia hạn hợp đồng này tới khi nào là hợp lý?', 'multiple_choice', '4/07/2017, 06:20:42 pm', '4/07/2017, 06:20:42 pm', '10');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `surveyid` int(11) NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answers` text COLLATE utf8_unicode_ci NOT NULL,
  `result` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_answers`
--

INSERT INTO `survey_answers` (`id`, `articleid`, `surveyid`, `category_id`, `answers`, `result`) VALUES
(5, 10000, 16, 'list_select', 'Ngày 24/11', 0),
(6, 10000, 16, 'list_select', 'Ngafg 25/12', 0),
(7, 10000, 16, 'list_select', 'Ngafg 25/12', 0),
(8, 10000, 16, 'list_select', 'Ngafg 25/12', 0),
(9, 10000, 17, 'multiple_choice', 'Trả lời 1', 0),
(10, 10000, 17, 'multiple_choice', 'Trả lời 2', 0),
(11, 10000, 17, 'multiple_choice', 'Trả lời 3', 0),
(12, 10000, 17, 'multiple_choice', 'Trả lời 4', 0),
(13, 10000, 17, 'multiple_choice', 'Trả lời 5', 0),
(14, 10000, 17, 'multiple_choice', 'Trả lời 6', 0),
(15, 10000, 17, 'multiple_choice', 'Trả lời 7', 0),
(16, 10000, 17, 'multiple_choice', 'Trả lời 8', 0),
(17, 10000, 17, 'multiple_choice', 'Trả lời 9', 0),
(18, 10000, 17, 'multiple_choice', '', 0),
(19, 10000, 18, 'multiple_choice', 'Trả lời 1', 0),
(20, 10000, 18, 'multiple_choice', 'Trả lời 2', 0),
(21, 10000, 18, 'multiple_choice', 'Trả lời 3', 0),
(22, 10000, 18, 'multiple_choice', 'Trả lời 4', 0),
(23, 10000, 18, 'multiple_choice', 'Trả lời 5', 0),
(24, 10000, 18, 'multiple_choice', 'Trả lời 6', 0),
(25, 10000, 18, 'multiple_choice', 'Trả lời 7', 0),
(26, 10000, 18, 'multiple_choice', 'Trả lời 8', 0),
(27, 10000, 18, 'multiple_choice', 'Trả lời 9', 0),
(28, 10000, 19, 'yes_no', '1', 0),
(29, 10000, 19, 'yes_no', '1', 0),
(30, 10000, 21, 'yes_no', 'Có', 0),
(31, 10000, 21, 'yes_no', 'Không', 0),
(32, 10000, 22, 'multiple_choice', 'Ngafg 25/12', 0),
(33, 10000, 22, 'multiple_choice', '32', 0),
(34, 10000, 22, 'multiple_choice', '12', 0),
(35, 10000, 22, 'multiple_choice', '13', 0),
(36, 54, 23, 'yes_no', 'Có', 0),
(37, 54, 23, 'yes_no', 'Không', 0),
(38, 55, 24, 'yes_no', 'Có, tôi muốn', 0),
(39, 55, 24, 'yes_no', 'Không, để người khác.', 0),
(40, 56, 25, 'list_select', 'Vàng, bạc, đá quý', 0),
(41, 56, 25, 'list_select', 'Xe cộ', 0),
(42, 56, 25, 'list_select', 'Thời trang', 0),
(43, 56, 25, 'list_select', 'Thực phẩm', 0),
(44, 56, 25, 'list_select', 'Y tế', 0),
(45, 56, 25, 'list_select', 'Giáo dục', 0),
(46, 56, 25, 'list_select', 'Xăng, dầu', 0),
(47, 56, 25, 'list_select', 'Điện, nước', 0),
(48, 56, 25, 'list_select', 'Gas', 0),
(49, 56, 25, 'list_select', 'Bất động sản', 0),
(50, 57, 26, 'yes_no', 'Có, tôi rất thích tuổi thơ hạnh phúc của mình', 0),
(51, 57, 26, 'yes_no', 'Không, tuổi thơ tôi đầy nước mắt và ấm ức', 0),
(52, 58, 27, 'yes_no', 'c', 0),
(53, 58, 27, 'yes_no', 'k', 0),
(69, 59, 28, 'multiple_choice', 'Biết chứ, 24/11', 0),
(70, 59, 28, 'multiple_choice', 'Biết, 24/12', 0),
(71, 59, 28, 'multiple_choice', 'Chính xác là 25/11', 0),
(72, 59, 28, 'multiple_choice', 'Không tôi không biết', 0),
(73, 60, 29, 'yes_no', 'Có, rất quan trọng vì nó ảnh hưởng đến cả thế giới', 1),
(74, 60, 29, 'yes_no', 'Không, chẳng liên quan đến Việt Nam', 0),
(75, 61, 30, 'multiple_choice', '1', 0),
(76, 61, 30, 'multiple_choice', '2', 0),
(77, 61, 30, 'multiple_choice', '3', 0),
(88, 64, 33, 'multiple_choice', '1', 0),
(89, 64, 33, 'multiple_choice', '2', 0),
(90, 64, 33, 'multiple_choice', '3', 0),
(91, 64, 33, 'multiple_choice', '4', 0),
(92, 65, 34, 'multiple_choice', '1', 0),
(93, 65, 34, 'multiple_choice', '1213', 0),
(94, 65, 34, 'multiple_choice', '123123', 0),
(95, 65, 34, 'multiple_choice', '134134', 0),
(101, 67, 36, 'yes_no', '1', 0),
(102, 67, 36, 'yes_no', '2', 0),
(103, 68, 37, 'multiple_choice', '1', 0),
(104, 68, 37, 'multiple_choice', '3', 0),
(105, 68, 37, 'multiple_choice', '4', 0),
(106, 68, 37, 'multiple_choice', '5', 0),
(107, 68, 37, 'multiple_choice', '6', 0),
(108, 68, 37, 'multiple_choice', '7', 0),
(109, 68, 37, 'multiple_choice', '8', 0),
(110, 48, 38, 'yes_no', 'Không quan tâm!', 0),
(111, 48, 38, 'yes_no', 'Có!', 0),
(118, 63, 40, 'list_select', 'item 1', 0),
(119, 63, 40, 'list_select', 'item 1', 0),
(120, 63, 40, 'list_select', 'item 1', 0),
(121, 63, 39, 'list_select', '1', 0),
(122, 63, 39, 'list_select', '2', 0),
(123, 63, 39, 'list_select', '3', 0),
(124, 63, 39, 'list_select', '4', 0),
(136, 66, 41, 'list_select', 'item 1', 0),
(137, 66, 41, 'list_select', 'item 1item 1', 0),
(138, 66, 41, 'list_select', 'item 1', 0),
(139, 66, 41, 'list_select', 'item 1', 0),
(160, 62, 31, 'multiple_choice', 'Tôi sẽ đi chơi cùng với bạn bè, người yêu, gia đinh ...', 0),
(161, 62, 31, 'multiple_choice', 'Đến nhà thờ tham dự thánh lễ mừng Chúa Giáng Sinh', 1),
(162, 62, 31, 'multiple_choice', 'Tôi ở nhà, không đi đâu cả', 0),
(163, 62, 31, 'multiple_choice', 'Khác', 0),
(173, 51, 43, 'list_select', 'Giải trí', 0),
(174, 51, 43, 'list_select', 'Tìm kiếm tài liệu, học tập', 0),
(175, 51, 43, 'list_select', 'Giao lưu, giữ liên lạc với mọi người', 2),
(176, 51, 43, 'list_select', 'Nghề nghiệp của bạn cần có Internet', 0),
(177, 51, 43, 'list_select', 'Tin tức thể thao, showbiz, thời sự ', 0),
(178, 69, 44, 'multiple_choice', 'Có, nó không còn được chất lượng như ngày xưa', 0),
(179, 69, 44, 'multiple_choice', 'Không, nó phù hợp với quy luật phát triển', 1),
(180, 69, 44, 'multiple_choice', 'Có thay đổi một ít nhưng không có gì đáng nói', 0),
(181, 69, 44, 'multiple_choice', 'Không thể chấp nhận được các chương trình hài bây giờ', 1),
(182, 70, 45, 'multiple_choice', 'Có, nó không còn được chất lượng như ngày xưa', 1),
(183, 70, 45, 'multiple_choice', 'Không, nó phù hợp với quy luật phát triển', 0),
(184, 70, 45, 'multiple_choice', 'Có thay đổi một ít nhưng không có gì đáng nói', 2),
(185, 70, 45, 'multiple_choice', 'Không thể chấp nhận được các chương trình hài bây giờ', 4),
(186, 71, 46, 'yes_no', 'Có, rất quan tâm', 0),
(187, 71, 46, 'yes_no', 'Không, tôi chưa chuẩn bị', 1),
(188, 72, 47, 'list_select', 'Giáo dục đạo đức', 1),
(189, 72, 47, 'list_select', 'Giáo dục kỹ năng', 0),
(190, 72, 47, 'list_select', 'Giáo dục văn hóa, cách ứng xử', 2),
(191, 72, 47, 'list_select', 'Luyện chữ, làm toán', 1),
(192, 72, 47, 'list_select', 'Chú trọng các môn học ở trường', 2),
(193, 72, 47, 'list_select', 'Giáo dục đức tính ', 2),
(202, 73, 48, 'multiple_choice', 'Có, trăng to và sáng hơn', 0),
(203, 73, 48, 'multiple_choice', 'Không, vẫn như ngày thường', 0),
(204, 73, 48, 'multiple_choice', 'Có, nhưng chỉ sáng hơn', 0),
(205, 73, 48, 'multiple_choice', 'To hơn, sáng hơn và đẹp hơn', 0),
(242, 74, 49, 'multiple_choice', 'Manchester City', 111112),
(243, 74, 49, 'multiple_choice', 'Chelsea', 524078),
(244, 74, 49, 'multiple_choice', 'Arsenal', 548145),
(245, 74, 49, 'multiple_choice', 'Liverpool', 485745),
(246, 74, 49, 'multiple_choice', 'Tottenham', 561488),
(247, 74, 49, 'multiple_choice', 'Licester', 84917),
(251, 75, 51, 'multiple_choice', 'câu trả lời 1', 54),
(252, 75, 51, 'multiple_choice', 'câu trả lời 2', 24),
(253, 75, 51, 'multiple_choice', 'câu trả lời 3', 15),
(258, 76, 52, 'list_select', '1', 4),
(259, 76, 52, 'list_select', '2', 2),
(260, 76, 52, 'list_select', '3', 4),
(261, 76, 52, 'list_select', '4', 3),
(262, 76, 52, 'list_select', 'qwe', 6),
(263, 76, 52, 'list_select', '123', 5),
(264, 76, 52, 'list_select', '436', 2),
(265, 76, 52, 'list_select', '67', 0),
(266, 77, 53, 'yes_no', 'Không, tôi không cần', 1),
(267, 77, 53, 'yes_no', 'Có, tôi cần', 2),
(268, 88, 54, 'multiple_choice', 'Không ra đường lúc giờ cao điểm', 0),
(269, 88, 54, 'multiple_choice', 'Cấm xe máy', 0),
(270, 88, 54, 'multiple_choice', 'Làm đường một chiều', 1),
(271, 88, 54, 'multiple_choice', 'Tăng cường xe bus', 0),
(272, 103, 55, 'multiple_choice', 'cau tra loi 1', 0),
(273, 103, 55, 'multiple_choice', 'cau tra loi 2', 1),
(274, 103, 55, 'multiple_choice', 'cau tra loi 1', 1),
(275, 103, 55, 'multiple_choice', 'cau tra loi 1', 0),
(278, 110, 56, 'yes_no', 'Tổ chức mỗi năm cho vui', 16),
(279, 110, 56, 'yes_no', 'Khoảng mấy năm một lần là thích hợp', 9),
(280, 101, 57, 'yes_no', 'Answer 1', 1),
(281, 101, 57, 'yes_no', 'Answer 2', 0),
(282, 108, 58, 'yes_no', 'Answer 1', 0),
(283, 108, 58, 'yes_no', 'Answer 2', 0),
(284, 133, 59, 'multiple_choice', 'Tiếp tục 1 tháng nữa', 0),
(285, 133, 59, 'multiple_choice', 'Gia hạn 1 năm cho bõ ghét', 0),
(286, 133, 59, 'multiple_choice', 'Không cần hợp đồng nữa', 1),
(287, 133, 59, 'multiple_choice', 'Tùy bên B ahihi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey_category`
--

CREATE TABLE `survey_category` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_category`
--

INSERT INTO `survey_category` (`id`, `category_name`) VALUES
('list_select', 'Dạng chọn nhiều item'),
('multiple_choice', 'Dạng trắc nghiệm'),
('yes_no', 'Dạng Yes/No');

-- --------------------------------------------------------

--
-- Table structure for table `survey_result`
--

CREATE TABLE `survey_result` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `surveyid` int(11) NOT NULL,
  `answerid` int(11) NOT NULL,
  `results` int(11) NOT NULL DEFAULT '0',
  `percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_result`
--

INSERT INTO `survey_result` (`id`, `articleid`, `surveyid`, `answerid`, `results`, `percent`) VALUES
(2, 70, 45, 182, 10, 0),
(3, 70, 45, 183, 12, 0),
(4, 70, 45, 184, 18, 0),
(5, 70, 45, 185, 7, 0),
(6, 71, 46, 186, 22, 0),
(7, 71, 46, 187, 11, 0),
(8, 72, 47, 188, 44, 0),
(9, 72, 47, 189, 29, 0),
(10, 72, 47, 190, 7, 0),
(11, 72, 47, 191, 22, 0),
(12, 72, 47, 192, 14, 0),
(13, 72, 47, 193, 34, 0),
(14, 73, 48, 194, 0, 0),
(15, 73, 48, 195, 0, 0),
(16, 73, 48, 196, 1, 0),
(17, 73, 48, 197, 0, 0),
(18, 74, 49, 206, 1, 0),
(19, 74, 49, 207, 0, 0),
(20, 74, 49, 208, 0, 0),
(21, 74, 49, 209, 0, 0),
(22, 74, 49, 210, 0, 0),
(23, 75, 50, 223, 0, 0),
(24, 75, 50, 224, 0, 0),
(25, 75, 50, 225, 0, 0),
(26, 75, 51, 248, 0, 0),
(27, 75, 51, 249, 0, 0),
(28, 75, 51, 250, 0, 0),
(29, 76, 52, 254, 0, 0),
(30, 76, 52, 255, 0, 0),
(31, 76, 52, 256, 0, 0),
(32, 76, 52, 257, 0, 0),
(33, 77, 53, 266, 0, 0),
(34, 77, 53, 267, 0, 0),
(35, 88, 54, 268, 0, 0),
(36, 88, 54, 269, 0, 0),
(37, 88, 54, 270, 0, 0),
(38, 88, 54, 271, 0, 0),
(39, 103, 55, 272, 0, 0),
(40, 103, 55, 273, 0, 0),
(41, 103, 55, 274, 0, 0),
(42, 103, 55, 275, 0, 0),
(43, 110, 56, 276, 0, 0),
(44, 110, 56, 277, 0, 0),
(45, 101, 57, 280, 0, 0),
(46, 101, 57, 281, 0, 0),
(47, 108, 58, 282, 0, 0),
(48, 108, 58, 283, 0, 0),
(49, 133, 59, 284, 0, 0),
(50, 133, 59, 285, 0, 0),
(51, 133, 59, 286, 0, 0),
(52, 133, 59, 287, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `su_kien`
--

CREATE TABLE `su_kien` (
  `id` int(11) NOT NULL,
  `ten_su_kien` text COLLATE utf8_unicode_ci NOT NULL,
  `doi_tuong` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `su_kien`
--

INSERT INTO `su_kien` (`id`, `ten_su_kien`, `doi_tuong`, `ngay`, `thang`, `nam`, `ghi_chu`, `ngay_tao`, `user`) VALUES
(60, 'Thi Cuối Kỳ Môn Mạch Số (thứ 4)', '', 24, 8, '2016', '', 'Sunday 14/08/2016, 11:18:07 am', 0),
(61, 'Sinh nhật', 'Yến Tuyết', 18, 8, '1996', '', 'Tuesday 16/08/2016, 09:52:24 am', 0),
(62, 'Nộp Phiếu Nhận Xét SV Nơi Cư Trú', '', 10, 9, '2016', 'Hạn chót\r\n\r\n<a target=\"_blank\" href=\"http://ctsv.uit.edu.vn/bai-viet/thong-bao-ve-viec-nop-phieu-nhan-xet-sinh-vien-tai-dia-phuong-noi-cu-tru\">http://ctsv.uit.edu.vn/bai-viet/thong-bao-ve-viec-nop-phieu-nhan-xet-sinh-vien-tai-dia-phuong-noi-cu-tru</a>', 'Wednesday 17/08/2016, 03:11:07 pm', 0),
(63, 'Sinh nhật', 'Cô Mỵ', 18, 8, '', '', 'Wednesday 17/08/2016, 05:04:52 pm', 0),
(64, 'Sinh nhật', 'Chị Thương', 24, 4, '1990', '', 'Thursday 18/08/2016, 08:39:28 am', 0),
(65, 'Sinh Nhật', 'Cháu Nam', 24, 7, '2013', '', 'Thursday 18/08/2016, 08:39:53 am', 0),
(66, 'Hết hạn trả sách Thư Viện Trung Tâm', 'Phải Trải - Đúng Sai', 20, 9, '2016', '', 'Saturday 17/09/2016, 10:33:09 am', 0),
(67, 'Kiem Tra User', '', 9, 11, '2010', 'ID = 9\r\n', 'Saturday 17/09/2016, 10:47:41 am', 0),
(68, 'test', 'wdawd', 3, 12, '1998', '', 'Saturday 17/09/2016, 11:06:36 am', 9),
(69, 'HẾT HẠN TRẢ SÁCH THƯ VIỆN TRUNG TÂM', '', 20, 9, '2016', 'Phải Trái - Đúng Sai', 'Saturday 17/09/2016, 03:35:05 pm', 9),
(70, 'sk 1', 'dt 1', 2, 10, '2012', 'ghi chu 1', 'Saturday 17/09/2016, 03:44:16 pm', 9),
(71, 'sk 1', 'doi tuong 2', 3, 11, '', 'ghi chu 2', 'Saturday 17/09/2016, 03:44:30 pm', 9),
(72, 'sk 3', 'doi tuong 3', 2, 9, '', 'ghi chu 3', 'Saturday 17/09/2016, 03:45:00 pm', 9),
(73, 'sk 4', 'doi tuong 4', 15, 12, '', 'ghi chu 4', 'Saturday 17/09/2016, 03:45:16 pm', 9),
(74, 'su kien 6', 'doi tuong 6', 3, 11, '', 'nim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. ', 'Saturday 17/09/2016, 03:45:34 pm', 9),
(75, 'su kien 7', 'doi tuong 7', 1, 12, '', 'nim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. ', 'Saturday 17/09/2016, 03:46:00 pm', 9),
(77, 'test', 'nhat ky', 6, 11, '2013', 'kiem tra su kien nhat ky', 'Tuesday 27/09/2016, 12:31:20 am', 10),
(78, 'SỰ KIỆN 1', 'ĐỐI TƯỢNG 1', 1, 10, '2011', 'GHI CHÚ 1', 'Saturday 1/10/2016, 03:23:21 pm', 10),
(79, 'HỌP LỚP 12C2 30/4', 'LỚP 12C2', 4, 11, '2012', '<p>Tại địa chỉ:</p>\r\n<p><a href=\"http://localhost/ngayvang/homeCI/tin-tuc/hop-lop-12c2-he-ngay-10-07-2016-tai-bac-lieu/12.html?type_news=0\" target=\"_blank\">http://localhost/ngayvang/homeCI/tin-tuc/hop-lop-12c2-he-ngay-10-07-2016-tai-bac-lieu/12.html?type_news=0</a></p>', 'Tuesday 4/10/2016, 02:43:25 pm', 9),
(80, 'SU KIEN TIEP THEO', 'DOI TUONG QUANT AM', 7, 11, '2016', 'GHI CHU', 'Tuesday 4/10/2016, 03:03:29 pm', 9),
(81, 'HOP LOP 12C2', '12C2', 9, 11, '2016', '<p>Tại địa chỉ:</p>\r\n<p><a href=\"http://localhost/ngayvang/homeCI/tin-tuc/hop-lop-12c2-he-ngay-10-07-2016-tai-bac-lieu/12.html?type_news=0\" target=\"_blank\">http://localhost/ngayvang/homeCI/tin-tuc/hop-lop-12c2-he-ngay-10-07-2016-tai-bac-lieu/12.html?type_news=0</a></p>', 'Tuesday 4/10/2016, 03:04:40 pm', 9),
(82, 'Test Sự Kiện', 'Đối Tượng Được Quan Tâm', 2, 11, '2012', 'Ghi Chú Cho Sự Kiện', 'Thursday 6/10/2016, 11:10:18 pm', 10),
(83, 'Sinh nhật', '@@@', 8, 10, '2016', 'sinh nhật tối Chủ Nhật', 'Thursday 6/10/2016, 11:14:19 pm', 10),
(84, 'Sinh Nhật', 'Nguyễn Quốc Hùng', 6, 10, '2016', 'Sinh nhật lần thứ 21', 'Thursday 6/10/2016, 11:15:21 pm', 10),
(85, 'Hết hạn trả sách thư viện trung tâm', 'Logic trong phi lý trí', 21, 11, '2016', '', 'Monday 7/11/2016, 09:46:03 am', 10),
(86, 'HẾT HẠN NỘP ĐỒ ÁN CN WEB & ỨNG DỤNG', '', 15, 11, '2016', 'Các nhóm cử đại diện thành viên trong nhóm nộp báo cáo seminar. Tất cả nội dung được nén thành một thư mục, sau đó upload lên một trang nào đó và nộp link để GV download về. Cách đặt tên thư mục như sau: [Nhóm_Số thứ tự nhóm]_[Họ tên thành viên 1]_[Họ tên thành viên 2]_[Họ tên thành viên...] Ví dụ Nguyễn Văn A và Trần Thị B thuộc nhóm seminar 15 thì đặt tên thư mục như sau: [Nhom_15][NguyenVanA][TranThiB]', 'Monday 7/11/2016, 09:47:02 am', 10),
(87, 'HẾT HẠN ĐÓNG TIỀN BHYT BHYT ', '', 30, 11, '2016', 'Nội dung nộp tiền:  Nộp tiền BHYT năm 2016\r\n\r\n<p>Số tiền nộp: 457.380 đồng</p>', 'Monday 7/11/2016, 09:47:45 am', 10);

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `timeline_id` int(11) NOT NULL,
  `places_title` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `keysearch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover_img` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar_img` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `create` datetime NOT NULL,
  `update` datetime NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `places_title`, `url`, `date`, `keysearch`, `cover_img`, `avatar_img`, `description`, `create`, `update`, `user`) VALUES
(1, '&#123;Bình Dương&#125', 'binh-duong', '0000-00-00', 'binh duong', '1512093621-cover.jpg', '1512093621-ava.jpg', '<p>Binh Duong Trip</p>', '2017-12-01 03:00:21', '0000-00-00 00:00:00', 10),
(2, '/Tay Ninh/ fqwfq', 'tay-ninh', '2017-12-28', 'tay ninh', '1512094772-cover.jpg', '1512094772-ava.jpg', '<p>Tay Ninh Trip</p>', '2017-12-01 03:19:32', '2017-12-01 03:30:20', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(11) NOT NULL,
  `idrandom` int(12) NOT NULL,
  `publishing` int(2) NOT NULL,
  `top` int(2) NOT NULL,
  `privated` int(11) NOT NULL,
  `tieu_de` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `typenews` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `overShort` text COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_tin` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kieu_tin` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `issetSurvey` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `idrandom`, `publishing`, `top`, `privated`, `tieu_de`, `icon`, `typenews`, `overShort`, `tom_tat`, `noi_dung`, `hinh`, `loai_tin`, `kieu_tin`, `url`, `user`, `created`, `updated`, `keyword`, `description`, `issetSurvey`) VALUES
(3, 0, 1, 0, 0, 'Giới thiệu website chỉnh sửa ảnh rất hay và đầy đủ chức năng', '', '', '', 'Pizap cung cấp cho người dùng rất nhiều chức năng về chỉnh sửa ảnh, thêm khung hình, ghép ảnh theo khung, các hiệu ứng và vô vàn chức năng khác', '<p>Phần mềm rất hữu &iacute;ch cho c&aacute;c bạn l&agrave;m c&aacute;c c&ocirc;ng việc li&ecirc;n quan đến h&igrave;nh ảnh, cũng như để thỏa th&iacute;ch tạo ra c&aacute;c tầm h&igrave;nh đẹp hơn cho bản th&acirc;n.</p>\r\n\r\n<p>Đầy l&agrave; phần mềm online được t&iacute;ch hợp l&ecirc;n website, n&ecirc;n c&aacute;c bạn rất dễ để sử dụng ở mọi nơi, với nhiều c&aacute;c thiết bị kh&aacute;c nhau kh&ocirc;ng phải chi d&agrave;nh cho m&aacute;y t&iacute;nh.</p>\r\n\r\n<p>Truy cập đia chỉ sau:<em>http://www.pizap.com/ </em>để v&agrave;o giao diện ch&iacute;nh của chương tr&igrave;nh, c&aacute;c bạn sẽ thấy như sau:</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/1142.png\" style=\"height:255px; margin:auto; width:479px\" /></p>\r\n\r\n<p>Tiếp theo nhấn v&agrave;o n&uacute;t &quot;Start&quot; để bắt đầu:</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/134.png\" style=\"height:255px; margin:auto; width:479px\" /></p>\r\n\r\n<p>Ở đ&acirc;y sẽ c&oacute; c&aacute;c t&ugrave;y chọn: Edit (chỉnh sửa một ảnh đơn: như m&agrave;u sắc, độ tương phản gh&eacute;p khung ...), Collage (chứa c&aacute;c khung h&igrave;nh c&oacute; sẵn cho việc gh&eacute;p nhiều h&igrave;nh với nhau theo một vị tr&iacute; nhất định), Design (tự thiết kế từ đầu đến cuối: khung ảnh, m&agrave;u sắc, h&igrave;nh nền, ch&egrave;n ảnh của người d&ugrave;ng ...).</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1466521463-1142.png', 'news', 0, 'gioi-thieu-website-chinh-sua-anh-rat-hay-va-day-du-chuc-nang', '', '2016-06-21 10:04:23', '', '', '', 0),
(6, 0, 1, 0, 0, 'qưdqÈ', '', '', '', 'QEFQEF', '<p>EQF</p>\r\n', '1466522676-d.png', 'news', 0, 'qudqe', '', 'Tuesday 21/06/2016, 10:24:36 pm', '', '', '', 0),
(12, 0, 1, 0, 0, 'Họp lớp 12c2 hè ngày 10/07/2016 tại Bạc Liêu', 'photo', 'detail', '', 'Năm nào cũng vậy, tới các dịp nghỉ lễ tết và hè thì các thành viên trong lớp 12C2 sẽ tổ chức một buổi gặp mặt nhằm hỏi thăm nhau sau một năm học tập. Năm nay sự kiện được tổ chức ở Bạc Liêu và cũng tập trung được khá đông các thành viên.', '<div id=\"lightgallery\">\r\n<p>H&egrave; đ&atilde; tới, c&aacute;c th&agrave;nh vi&ecirc;n của lớp 12C2 c&oacute; dịp được về qu&ecirc; thăm gia đ&igrave;nh, bạn b&egrave; v&igrave; đa số c&aacute;c bạn học ở xa nh&agrave; (Cần Thơ, TP. HCM, B&igrave;nh Dương) n&ecirc;n c&aacute;c bạn đ&atilde; tổ chức một buổi gặp mặt tại Bạc Li&ecirc;u.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193512.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193513.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>C&oacute; khoảng 14 bạn tham gia trong sự kiện lần n&agrave;y</em></p>\r\n\r\n<p>Sự kiện diễn ra tối ng&agrave;y 10/7/2016, sau bao ng&agrave;y &quot;ch&aacute;y điện thoại&quot; v&igrave; nhắn tin k&ecirc;u gọi, quyết định th&igrave; sự kiện cũng diễn ra tốt đẹp. C&oacute; khoảng 14 bạn tham gia bao gồm cả nam, nữ v&agrave; b&ecirc; đ&ecirc;, vẫn c&ograve;n thiếu một số bạn do chưa kịp về hoặc đ&atilde; về rồi v&agrave; phải đi sớm.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193444.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193441.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Nguyễn Bảo Đăng, Trần Thị Kiều Ti&ecirc;n</em></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193534.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Trần Kim Thoa, Trần Diễm My, Nguyễn Hồng Hạnh, Đinh T Huỳnh Như, Phạm T Phương, L&ecirc; Phạm Quỳnh Như, Nguyễn Quang Linh (từ tr&aacute;i qua)</em></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193539.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Trần Thị Mỹ Thiết</em></p>\r\n\r\n<p><a href=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/thumb1.jpg\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/thumb1.jpg\" style=\"height:282px; margin:auto; width:502px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>Trịnh Bảo Bảo</em></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/20160710_193557.jpg\" style=\"height:282px; margin:auto; width:502px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>&quot;Mục ti&ecirc;u&quot; của c&aacute;c th&agrave;nh vi&ecirc;n</em></p>\r\n\r\n<p><br />\r\nĐ&acirc;y gần như l&agrave; một sự kiện thường ni&ecirc;n của lớp 12C2, năm n&agrave;o cũng vậy cứ mỗi dịp h&egrave; tới l&agrave; c&aacute;c th&agrave;nh vi&ecirc;n tổ chức gặp mặt, hỏi thăm nhau sau một một năm học tập. Đ&acirc;y cũng l&agrave; điều đ&aacute;ng mừng của tập thể lớp khi b&acirc;y giờ c&aacute;c th&agrave;nh vi&ecirc;n cũng bước sang năm 3 đại học rồi.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; sự kiện họp mặt h&egrave; m&agrave; lớp c&ograve;n thường tổ chức v&agrave;o c&aacute;c dịp nghỉ lễ, tết như 30/4-01/5, tết v&agrave; một số v&agrave;o ng&agrave;y 20/11 đ&oacute; l&agrave; những ng&agrave;y m&agrave; c&aacute;c th&agrave;nh vi&ecirc;n trong lớp c&oacute; cơ hội gặp nhau nhiều hơn từ khi rời m&aacute;i trường cấp 3 (trường THPT Hiệp Th&agrave;nh tỉnh Bạc Li&ecirc;u).</p>\r\n\r\n<table border=\"1\" class=\"table\" style=\"background-color:rgb(226, 194, 236)\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Lớp 12C2 trường THPT Hiệp Th&agrave;nh tỉnh Bạc Li&ecirc;u, năm học 2012-2013, c&oacute; 32 th&agrave;nh vi&ecirc;n, 2 gi&aacute;o vi&ecirc;n chủ nhiệm l&agrave; c&ocirc; Đặng Thanh Loan v&agrave; thầy B&ugrave;i Văn Quyết do c&ocirc; Đặng Thanh Loan trong qu&aacute; tr&igrave;nh chủ nhiệm lớp phải tham gia chương tr&igrave;nh Cao học n&ecirc;n thầy B&ugrave;i Văn Quyết đ&atilde; tiếp quản lớp cho đến hết năm học, sau kỳ thi trung học phổ th&ocirc;ng năm 2013 tất cả c&aacute;c bạn trong lớp đều đậu kỳ thi n&agrave;y v&agrave; rất nhiều bạn đ&atilde; đi học Đại học, Cao đăng ở nhiều nơi chủ yếu l&agrave; Bạc Li&ecirc;u, Cần Thơ v&agrave; TP. HCM</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', '1469013140-20160710_193512.jpg', 'news', 0, 'hop-lop-12c2-he-ngay-10-07-2016-tai-bac-lieu', 'PhamlucBlog', 'Wednesday 20/07/2016, 06:12:20 pm', '', 'lop 12c2, hop lop 12c2. lop 12c2 truong thpt hiep thanh, lop 12 cap 3, thay bui van quyet, pham luc', 'Năm nào cũng vậy, tới các dịp nghỉ lễ tết và hè thì các thành viên trong lớp 12C2 năm học 2012-2013 trường thpt Hiệp Thành do thầy Bùi Văn Quyết chủ nhiệm sẽ tổ chức một buổi gặp mặt nhằm hỏi thăm nhau sau một năm học tập. Năm nay sự kiện được tổ chức ở Bạc Liêu và cũng tập trung được khá đông các thành viên.', 0),
(15, 0, 1, 0, 0, 'Điểm chuẩn xét tuyển và chỉ tiêu các ngành trường ĐH Công Nghệ Thông Tin 2016', '', '', '', 'Ngày 13/8 trường ĐH Công Nghệ Thông Tin - DDHQG HCM đã công bố điểm chuẩn và chỉ tiêu tuyển sinh năm 2016, theo đó điểm trung bình có cao hơn năm ngoái nhưng không nhiều.', '<p>Hội đồng tuyển sinh trường ĐH CNTT đ&atilde; c&ocirc;ng bố điểm tuyển sinh năm học 2016 như sau:</p>\r\n\r\n<p><strong>1. Điểm chuẩn tr&uacute;ng tuyển</strong>: l&agrave; điểm của tổ hợp c&aacute;c m&ocirc;n thi To&aacute;n - L&yacute; - H&oacute;a hoặc To&aacute;n - L&yacute; - Anh Văn, đ&acirc;y l&agrave; điểm d&agrave;nh cho c&aacute;c bạn thuộc khu vực 3 (tức l&agrave; kh&ocirc;ng được cộng điểm v&ugrave;ng, c&aacute;c bạn ở c&aacute;c v&ugrave;ng ưu ti&ecirc;n sẽ c&oacute; điểm chuẩn thấp hơn t&ugrave;y theo v&ugrave;ng).</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"margin:auto\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>M&Atilde; NG&Agrave;NH</strong></td>\r\n			<td><strong>T&Ecirc;N NG&Agrave;NH X&Eacute;T TUYỂN </strong></td>\r\n			<td><strong>ĐIỂM CHUẨN</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480101</td>\r\n			<td>Khoa học m&aacute;y t&iacute;nh</td>\r\n			<td>22.25</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480102</td>\r\n			<td>Truyền th&ocirc;ng v&agrave; mạng m&aacute;y t&iacute;nh</td>\r\n			<td>21.75</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480103</td>\r\n			<td>Kỹ thuật phần mềm</td>\r\n			<td>24</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480103</td>\r\n			<td>Kỹ thuật phần mềm - chất lượng cao</td>\r\n			<td>21</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480104</td>\r\n			<td>Hệ thống th&ocirc;ng tin</td>\r\n			<td>21.75</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480104</td>\r\n			<td>Thương mại điện tử (ng&agrave;nh Hệ thống th&ocirc;ng tin)</td>\r\n			<td>21.75</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480104</td>\r\n			<td>Hệ thống th&ocirc;ng tin chương tr&igrave;nh ti&ecirc;n tiến</td>\r\n			<td>20</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480104</td>\r\n			<td>Hệ thống th&ocirc;ng tin - chất lượng cao</td>\r\n			<td>20</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480201</td>\r\n			<td>C&ocirc;ng nghệ th&ocirc;ng tin</td>\r\n			<td>23</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D480299</td>\r\n			<td>An to&agrave;n th&ocirc;ng tin</td>\r\n			<td>22.25</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D520214</td>\r\n			<td>Kỹ thuật m&aacute;y t&iacute;nh</td>\r\n			<td>21.75</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">D520214</td>\r\n			<td>Kỹ thuật m&aacute;y t&iacute;nh - chất lượng cao</td>\r\n			<td>20.25</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Chỉ ti&ecirc;u tuyển sinh:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"margin:auto\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>STT</strong></td>\r\n			<td><strong>M&atilde; ng&agrave;nh</strong></td>\r\n			<td><strong>Ng&agrave;nh x&eacute;t tuyển</strong></td>\r\n			<td><strong>Chỉ ti&ecirc;u</strong></td>\r\n			<td><strong>Tổ hợp m&ocirc;n<br />\r\n			x&eacute;t tuyển</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>D480101</td>\r\n			<td>Khoa học m&aacute;y t&iacute;nh</td>\r\n			<td>130</td>\r\n			<td colspan=\"1\" rowspan=\"12\">\r\n			<p style=\"text-align:center\">TO&Aacute;N + L&Yacute; + H&Oacute;A</p>\r\n\r\n			<p style=\"text-align:center\">hoặc</p>\r\n\r\n			<p style=\"text-align:center\">TO&Aacute;N + L&Yacute; + ANH</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>D480102</td>\r\n			<td>Truyền th&ocirc;ng v&agrave; mạng m&aacute;y t&iacute;nh</td>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>D480103</td>\r\n			<td>Kỹ thuật phần mềm</td>\r\n			<td>100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>D480103_CLC</td>\r\n			<td>Kỹ thuật phần mềm<br />\r\n			(Chương tr&igrave;nh chất lượng cao)</td>\r\n			<td>100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>D480104</td>\r\n			<td>Hệ thống th&ocirc;ng tin</td>\r\n			<td>60</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>D480104_TMDT</td>\r\n			<td>Hệ thống th&ocirc;ng tin<br />\r\n			(Chuy&ecirc;n ng&agrave;nh Thương mại điện tử)</td>\r\n			<td>60</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td>D480104_TT</td>\r\n			<td>Hệ thống th&ocirc;ng tin (Chương tr&igrave;nh ti&ecirc;n tiến)</td>\r\n			<td>40</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td>D480104_CLC</td>\r\n			<td>Hệ thống th&ocirc;ng tin<br />\r\n			(Chương tr&igrave;nh chất lượng cao)</td>\r\n			<td>40</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td>D480201</td>\r\n			<td>C&ocirc;ng nghệ th&ocirc;ng tin</td>\r\n			<td>120</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10</td>\r\n			<td>D480299</td>\r\n			<td>An to&agrave;n th&ocirc;ng tin</td>\r\n			<td>100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>D520214</td>\r\n			<td>Kỹ thuật m&aacute;y t&iacute;nh</td>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12</td>\r\n			<td>D520214_CLC</td>\r\n			<td>Kỹ thuật m&aacute;y t&iacute;nh<br />\r\n			(Chương tr&igrave;nh chất lượng cao)</td>\r\n			<td>50</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" rowspan=\"1\" style=\"text-align:center\"><strong>TỔNG CỘNG</strong></td>\r\n			<td><strong>1000</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Năm nay ng&agrave;nh c&oacute; điểm x&eacute;t tuyển cao nhất vẫn l&agrave; Kỹ Thuật Phần Mềm (24đ), c&oacute; sự kh&aacute;c biết so với mọi năm khi ng&agrave;nh Khoa Học M&aacute;y T&iacute;nh Năm Nay lấy điểm cao thứ 3 ngang bằng với An To&agrave;n Th&ocirc;ng Tin (22,25đ) mọi năm trước ng&agrave;nh n&agrave;y điểm thấp hơn khi so với c&aacute;c ng&agrave;nh kh&aacute;c của trường.</p>\r\n\r\n<p><strong>3. Quy tr&igrave;nh đăng k&yacute; x&eacute;t tuyển:</strong></p>\r\n\r\n<p><strong>Bước 1. </strong> Trường khuyến kh&iacute;ch th&iacute; sinh tạo t&agrave;i khoản v&agrave; đăng k&yacute; th&ocirc;ng tin x&eacute;t tuyển trực tuyến tr&ecirc;n&nbsp;<a href=\"http://tuyensinh.uit.edu.vn/dangky\" target=\"_blank\">http://tuyensinh.uit.edu.vn/dangky</a>&nbsp;(hoặc&nbsp;tr&ecirc;n&nbsp;<a href=\"http://tuyensinh.vnuhcm.edu.vn/\" target=\"_blank\">tuyensinh.vnuhcm.edu.vn</a>)&nbsp;từ ng&agrave;y 20/7/2016 đến 12/8/2016. ( <a href=\"https://tuyensinh.uit.edu.vn/huong-dan-dang-ky-tai-khoan-tai-tuyensinhuiteduvn\" target=\"_blank\">Click v&agrave;o đ&acirc;y để xem hướng dẫn</a>)</p>\r\n\r\n<p><strong>Bước 2. </strong> Th&iacute; sinh chuẩn bị hồ sơ đăng k&yacute; x&eacute;t tuyển (ĐKXT) v&agrave; lệ ph&iacute; x&eacute;t tuyển l&agrave; 30.000 đồng/hồ sơ (xem Mục 2. Chỉ ti&ecirc;u tuyển sinh, Mục 3. Điều kiện đăng k&yacute; x&eacute;t tuyển v&agrave; Mục 4. Hồ sơ đăng k&yacute; x&eacute;t tuyển).</p>\r\n\r\n<p><strong>Bước 3. </strong> Th&iacute; sinh nộp hồ sơ đăng k&yacute; x&eacute;t tuy&ecirc;̉n&nbsp;từ ng&agrave;y 01/8/2016 đến 12/8/2016 (Mục 5. C&aacute;ch thức nộp hồ sơ đăng k&yacute; x&eacute;t tuyển).</p>\r\n\r\n<p><strong>Bước 4. </strong> Trường ĐH CNTT x&eacute;t tuyển dựa tr&ecirc;n c&aacute;c ti&ecirc;u ch&iacute; x&eacute;t tuyển tại Mục 6 của th&ocirc;ng b&aacute;o n&agrave;y. Th&iacute; sinh theo d&otilde;i th&ocirc;ng tin x&eacute;t tuyển được cập nhật tr&ecirc;n trang th&ocirc;ng tin điện tử của Trường từ ng&agrave;y 01 đến 12/8/2016 (xem Mục 7. C&ocirc;ng bố th&ocirc;ng tin).</p>\r\n\r\n<p><strong>Bước 5. </strong> Dự kiến Trường c&ocirc;ng bố kết quả tr&uacute;ng tuyển trước ng&agrave;y 14/8/2016 (xem Mục 8. Kết quả tr&uacute;ng tuyển).</p>\r\n\r\n<p><strong>Bước 6. </strong> Th&iacute; sinh tr&uacute;ng tuyển phải nộp bản ch&iacute;nh Giấy chứng nhận kết quả thi trước 17giờ 00 ng&agrave;y 19/8/2016 để x&aacute;c nhận nhập học (xem Mục 9. X&aacute;c nhận nhập học).</p>\r\n\r\n<p><strong><em><u>Lưu &yacute;</u></em></strong> <strong><em>:</em></strong> Quy tr&igrave;nh n&agrave;y &aacute;p dụng cho th&iacute; sinh đăng k&yacute; x&eacute;t tuy&ecirc;̉n v&agrave; th&iacute; sinh đăng k&yacute;&nbsp;ưu ti&ecirc;n x&eacute;t tuy&ecirc;̉n theo qui định của B&ocirc;̣ GD&amp;ĐT .<br />\r\nKh&ocirc;ng &aacute;p dụng đ&ocirc;́i với&nbsp;th&iacute; sinh đăng k&yacute; tuyển thẳng ( đ&atilde; n&ocirc;̣p h&ocirc;̀ sơ theo k&ecirc;nh c&aacute;c Sở GD&amp;ĐT)&nbsp;&nbsp;, ưu ti&ecirc;n x&eacute;t tuyển di&ecirc;̣n học sinh giỏi c&aacute;c trường THPT chuy&ecirc;n&nbsp;hoặc x&eacute;t tuyển v&agrave;o c&aacute;c chương tr&igrave;nh t&agrave;i năng ( chương tr&igrave;nh t&agrave;i năng sẽ&nbsp;x&eacute;t tuy&ecirc;̉n sau khi sinh vi&ecirc;n nh&acirc;̣p học).</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Trang_nhat/image002.jpg\" style=\"height:351px; margin:auto; width:624px\" /></p>\r\n\r\n<p><strong>Một số cổng th&ocirc;ng tin của trường ĐH CNTT:</strong></p>\r\n\r\n<p>1. Trang chủ: <a href=\"http://www.uit.edu.vn/\" target=\"_blank\">http://www.uit.edu.vn/</a></p>\r\n\r\n<p>2. Trang tuyển sinh: <a href=\"https://tuyensinh.uit.edu.vn/\" target=\"_blank\">https://tuyensinh.uit.edu.vn/</a></p>\r\n\r\n<p>3. Ph&ograve;ng đ&agrave;o tạo Đại học: <a href=\"https://daa.uit.edu.vn/\" target=\"_blank\">https://daa.uit.edu.vn/</a></p>\r\n\r\n<p>4. Ph&ograve;ng C&ocirc;ng T&aacute;c Sinh Vi&ecirc;n: <a href=\"http://ctsv.uit.edu.vn/\" target=\"_blank\">http://ctsv.uit.edu.vn/</a></p>\r\n\r\n<p>5. Văn ph&ograve;ng đo&agrave;n: <a href=\"http://tuoitre.uit.edu.vn/\" target=\"_blank\">http://tuoitre.uit.edu.vn/</a></p>\r\n\r\n<p style=\"text-align:right\"><em><strong>Phạm Văn Lực - sinh vi&ecirc;n năm 4 ĐHCNTT - ĐHQG HCM</strong></em></p>\r\n', '1471186753-image002.jpg', 'top', 0, 'diem-chuan-xet-tuyen-va-chi-tieu-cac-nganh-truong-dh-cong-nghe-thong-tin-2016', '', 'Sunday 14/08/2016, 09:59:13 pm', '', '', '', 0),
(19, 0, 1, 0, 0, 'Máy bay dân dụng lớn nhất thế giới chao đảo trong gió lúc hạ cánh', '0', 'detail', '', 'Phi công điều khiến chiếc Airbus A380 của hãng Emirates đã phải vật lột giữ kiểm soát máy bay chở khách lớn nhất thế giới lúc hạ cánh xuống sân bay Manchester, Anh.', '<p>qwdqwd</p>\r\n', '1474708096-123123.jpg', 'diary', 0, 'may-bay-dan-dung-lon-nhat-the-gioi-chao-dao-trong-gio-luc-ha-canh', '', 'Saturday 24/09/2016, 04:08:16 pm', '', '', '', 0),
(22, 0, 1, 0, 0, 'Xe chở hàng cồng kềnh, hiểm họa di động', '0', 'detail', '', 'Xe máy, xe ba gác... cõng những khối hàng hóa quá khổ, che khuất tầm nhìn trở thành hiểm họa di động với người đi đường.', '<p>qwdqwd</p>\r\n', '1474708212-nature-background-images-11.jpg', 'diary', 0, 'xe-cho-hang-cong-kenh-hiem-hoa-di-dong', '', 'Saturday 24/09/2016, 04:10:12 pm', '', '', '', 0),
(23, 0, 1, 0, 0, 'Xe chở hàng cồng kềnh, hiểm họa di động', '0', 'detail', '', 'Xe máy, xe ba gác... cõng những khối hàng hóa quá khổ, che khuất tầm nhìn trở thành hiểm họa di động với người đi đường.', '<p>qwdqwd</p>\r\n', '1474708215-nature-background-images-11.jpg', 'diary', 0, 'xe-cho-hang-cong-kenh-hiem-hoa-di-dong', '', 'Saturday 24/09/2016, 04:10:15 pm', '', '', '', 0),
(24, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708271-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:11:11 pm', '', '', '', 0),
(25, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708274-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:11:14 pm', '', '', '', 0),
(26, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708277-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:11:17 pm', '', '', '', 0),
(27, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708282-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:11:22 pm', '', '', '', 0),
(28, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708334-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:12:14 pm', '', '', '', 0),
(29, 0, 1, 0, 0, 'Hổ cắn chết nhân viên chăm sóc ở Bình Dương', '0', 'detail', '', 'Trong lúc cho hổ ăn, nhân viên chăm sóc tại trại nuôi của Công ty Thái Bình Dương bị con hổ cái nặng 120 kg tấn công, cắn chết tại chỗ.', '<p>qwdqwdqefqef</p>\r\n', '1474708338-123123.jpg', 'diary', 0, 'ho-can-chet-nhan-vien-cham-soc-o-binh-duong', '', 'Saturday 24/09/2016, 04:12:18 pm', '', '', '', 0),
(30, 0, 1, 0, 0, 'tin thu 2', '0', 'detail', '', 'qwd', '<p>qwd</p>\r\n', '1474710309-nature-background-images-11.jpg', 'diary', 0, 'tin-thu-2', '', 'Saturday 24/09/2016, 04:45:09 pm', '', '', '', 0),
(44, 0, 1, 0, 0, 'Những quy định nổi bật có hiệu lực từ tháng 10', 'photo', 'detail', '', 'Người bệnh không được thanh toán tiền khám khi cấp cứu từ 4 giờ trở lên, thời gian nghỉ phép của quân nhân chuyên nghiệp, quyền được cung cấp dữ liệu tài nguyên, môi trường biển, đảo..., là những quy định nổi bật có hiệu lực từ tháng 10.', '<p>C&ocirc;ng văn của Bộ Y tế hướng dẫn bổ sung thực hiện Th&ocirc;ng tư li&ecirc;n tịch quy định thống nhất gi&aacute; dịch vụ kh&aacute;m bệnh, chữa bệnh bảo hiểm y tế giữa c&aacute;c bệnh viện c&ugrave;ng hạng tr&ecirc;n to&agrave;n quốc, c&oacute; hiệu lực từ 1/10.</p>\r\n\r\n<p>Theo đ&oacute;,&nbsp;trường hợp người bệnh v&agrave;o khoa cấp cứu, kh&ocirc;ng qua kh&aacute;m chữa bệnh được chi trả tiền kh&aacute;m bệnh như sau:&nbsp;Nếu thời gian điều trị từ 4 giờ trở l&ecirc;n, thanh to&aacute;n tiền ng&agrave;y giường bệnh điều trị nội tr&uacute;, tiền thuốc v&agrave; c&aacute;c dịch vụ kỹ thuật theo quy định, kh&ocirc;ng thanh to&aacute;n tiền kh&aacute;m bệnh.&nbsp;Nếu thời gian điều trị dưới 4 giờ, được thanh to&aacute;n tiền kh&aacute;m bệnh, tiền thuốc v&agrave; c&aacute;c dịch vụ kỹ thuật, kh&ocirc;ng thanh to&aacute;n tiền ng&agrave;y giường bệnh điều trị nội tr&uacute;.</p>\r\n\r\n<p>Ngo&agrave;i ra, c&ocirc;ng văn tr&ecirc;n c&ograve;n hướng dẫn một số nội dung kh&aacute;c, như&nbsp;thanh to&aacute;n ng&agrave;y giường bệnh điều trị nội tr&uacute;;&nbsp;Thanh to&aacute;n chi ph&iacute; kh&aacute;m, chữa bệnh tại ph&ograve;ng kh&aacute;m đa khoa khu vực trực thuộc bệnh viện/trung t&acirc;m y tế huyện;&nbsp;Tiền giường lưu tại trạm y tế tuyến x&atilde;.&nbsp;Ph&ograve;ng kh&aacute;m đa khoa trực thuộc bệnh viện tuyến tỉnh, tuyến trung ương: &aacute;p dụng gi&aacute; dịch vụ y tế theo hạng bệnh viện đ&oacute;&hellip;</p>\r\n\r\n<p><strong>Thời gian nghỉ ph&eacute;p năm của qu&acirc;n nh&acirc;n chuy&ecirc;n nghiệp</strong></p>\r\n\r\n<p>C&oacute; hiệu lực từ&nbsp;8/10, th&ocirc;ng tư 113 của Bộ Quốc Ph&ograve;ng quy định chế độ nghỉ ph&eacute;p của qu&acirc;n nh&acirc;n chuy&ecirc;n nghiệp, c&ocirc;ng nh&acirc;n v&agrave; vi&ecirc;n chức quốc ph&ograve;ng&nbsp;hằng năm l&agrave; 20 ng&agrave;y (dưới 15 năm phục vụ); 25 ng&agrave;y (từ đủ 15 đến dưới 25 năm phục vụ); 30 ng&agrave;y (từ đủ 25 năm phục vụ trở l&ecirc;n).</p>\r\n\r\n<p>Qu&acirc;n nh&acirc;n chuy&ecirc;n nghiệp, c&ocirc;ng nh&acirc;n v&agrave; vi&ecirc;n chức quốc ph&ograve;ng ở đơn vị đ&oacute;ng qu&acirc;n c&aacute;ch xa gia đ&igrave;nh được ưu ti&ecirc;n nghỉ ph&eacute;p hằng năm như sau: Đ&oacute;ng qu&acirc;n c&aacute;ch xa gia đ&igrave;nh từ 500 km trở l&ecirc;n hoặc tại c&aacute;c đảo thuộc quần đảo Trường Sa, DK được nghỉ th&ecirc;m 10 ng&agrave;y mỗi năm.</p>\r\n\r\n<p>Đ&oacute;ng qu&acirc;n c&aacute;ch xa gia đ&igrave;nh từ 300 km đến dưới 500 km; đ&oacute;ng qu&acirc;n ở địa b&agrave;n v&ugrave;ng s&acirc;u, v&ugrave;ng xa, v&ugrave;ng bi&ecirc;n giới c&aacute;ch xa gia đ&igrave;nh từ 200 km đến dưới 300 km v&agrave; đang hưởng phụ cấp khu vực hệ số từ 0,5 đến 0,7 hoặc tại c&aacute;c đảo hưởng phụ cấp khu vực hệ số từ 0,1 đến dưới 1,0 được nghỉ th&ecirc;m 5 ng&agrave;y mỗi năm.</p>\r\n\r\n<p><strong>Từ cấp x&atilde; phải b&aacute;o c&aacute;o c&ocirc;ng t&aacute;c bảo vệ m&ocirc;i trường</strong></p>\r\n\r\n<p>Th&ocirc;ng tư 19/2016 của Bộ T&agrave;i nguy&ecirc;n M&ocirc;i trường c&oacute; hiệu lực từ 10/10,&nbsp;quy định bản&nbsp;b&aacute;o c&aacute;o thường ni&ecirc;n về c&ocirc;ng t&aacute;c bảo vệ m&ocirc;i trường của Bộ, cơ quan ngang Bộ bao gồm những nội dung như:&nbsp;Đ&aacute;nh gi&aacute; chung về c&aacute;c nguồn g&acirc;y &ocirc; nhiễm, t&aacute;c động xấu l&ecirc;n m&ocirc;i trường, c&aacute;c loại h&igrave;nh chất thải đặc trưng; t&igrave;nh h&igrave;nh, kết quả thực hiện c&ocirc;ng t&aacute;c quản l&yacute; nh&agrave; nước v&agrave; hoạt động bảo vệ m&ocirc;i trường...</p>\r\n\r\n<p>Th&ocirc;ng tư n&agrave;y cũng quy định, từ UBND cấp x&atilde; b&aacute;o c&aacute;o HĐND c&ugrave;ng cấp, UBND cấp huyện về c&ocirc;ng t&aacute;c bảo vệ m&ocirc;i trường, trước ng&agrave;y 15/12 h&agrave;ng năm.</p>\r\n\r\n<p><strong>C&ocirc;ng d&acirc;n c&oacute; quyền được cung cấp dữ liệu t&agrave;i nguy&ecirc;n, m&ocirc;i trường biển, đảo</strong></p>\r\n\r\n<p>Th&ocirc;ng tư 20 của Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường&nbsp;quy định về x&acirc;y dựng, khai th&aacute;c v&agrave; sử dụng cơ sở dữ liệu t&agrave;i nguy&ecirc;n, m&ocirc;i trường biển v&agrave; hải đảo bắt đầu c&oacute; hiệu lực từ ng&agrave;y 10/10.</p>\r\n\r\n<p>Theo th&ocirc;ng tư n&agrave;y, tổ chức, c&aacute; nh&acirc;n được quyền khai th&aacute;c v&agrave; sử dụng cơ sở dữ liệu t&agrave;i nguy&ecirc;n, m&ocirc;i trường biển, hải đảo th&ocirc;ng qua h&igrave;nh thức:&nbsp;Mạng điện tử;&nbsp;hợp đồng; phiếu y&ecirc;u cầu hoặc văn bản y&ecirc;u cầu cung cấp dữ liệu.<br />\r\n<br />\r\nViệc khai th&aacute;c v&agrave; sử dụng cơ sở dữ liệu t&agrave;i nguy&ecirc;n, m&ocirc;i trường biển, hải đảo qua mạng điện tử được thực hiện bằng c&aacute;ch cung cấp m&atilde; truy cập một lần, chỉ dẫn địa chỉ truy cập để tải dữ liệu, gửi tập tin đ&iacute;nh k&egrave;m thư điện tử.</p>\r\n\r\n<p>Việc khai th&aacute;c v&agrave; sử dụng cơ sở dữ liệu bằng h&igrave;nh thức hợp đồng thực hiện theo thỏa thuận giữa cơ quan quản l&yacute; cơ sở dữ liệu với tổ chức, c&aacute; nh&acirc;n c&oacute; nhu cầu theo quy định của ph&aacute;p luật.</p>\r\n', '1475294717-bhyt-7377-1475224815_490x294.jpg', 'diary', 0, 'nhung-quy-dinh-noi-bat-co-hieu-luc-tu-thang-10', '', 'Saturday 1/10/2016, 11:05:17 am', '', '', '', 0),
(45, 0, 1, 0, 0, 'People Ask for Tougher Laws Against Animal Poaching', '0', 'detail', '', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain. However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', '<p>The pet owners let her dog&rsquo;s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.</p>\r\n\r\n<blockquote>\r\n<p>I said: &ldquo;Excuse me, what are you doing?&rdquo; he told me he&rsquo;s taking his dog and I said, &ldquo;No, you&rsquo;re not&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.</p>\r\n\r\n<p>The man had come prepared with his own leash and had hooked up the leash to Silas&rsquo;s leash. &ldquo;There was no way that I was going to be able to wrestle the dog out of his hands so the only thing I could think was just punch him,&rdquo; said Dooling.</p>\r\n\r\n<p>After hitting the man, the criminal ran off down the street.&nbsp;&ldquo;It&rsquo;s an inconvenience or a nuisance, you could say, when she does bark, but she&rsquo;s my guard dog. Some people have big Dobermans &mdash; I have a Chihuahua.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/2.jpg\" style=\"height:1068px; margin:auto; width:712px\" /></p>\r\n\r\n<p>As for her dogs, Dooling said Silas was subdued for much of the night and next day after the near-theft, while Carly the Chihuahua was on high alert, barking at anything that passed by the windows.</p>\r\n\r\n<p>We have been reading posts on social media regarding people stating that there have been attempts to steal dogs from backyards.&nbsp;At this time we would like to remind everybody that any suspicious activity *needs* to be phoned in to us so patrol division can be dispatched and investigate.</p>\r\n\r\n<p>Additionally, if you see that a friend has something posted on their Facebook of this nature please encourage them to call.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The mysterious pooch was discovered by a journalist and their news crew who were in the Bang Rakam District of Thailand reporting on drought conditions.&nbsp;The news crew revealed that they spotted the dog after it ran out of a house near to where they were filming.&nbsp;They then turned the camera on the adorable animal and shot a short video clip which was uploaded to Thai news site Matichon on November 12.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Never underestimate the power of a yappy Chihuahua&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>A daring dachshund proved herself a rare breed of heroine after she saved two boys from a savage bear attack.&nbsp;The super sausage dog raced into action after spotting two boys&nbsp;being ravaged by a massive black bear in Russia.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/3.jpg\" style=\"margin:auto\" /></p>\r\n\r\n<p>The giant animal attacked the youngsters soon after they emerged from their village shop.&nbsp;&ldquo;He caught up with Stas first. The bear threw him to the ground, began to trample him, bite him, he grabbed his head, then shoulder and back. I watched &ndash; and ran at the bear.&nbsp;I didn&rsquo;t think about myself or what would happen. I just wanted to save my friend.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nikita ran and saved me. He hit the bear&rsquo;s head with a stone.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>At this point the bear, which now had a sore head, turned on Nikita, gnawing and clawing him, leaving Stas wounded and frightened.&nbsp;At this moment a little dachshund called Tosya arrived on the scene and barked furiously at the bear. Now the beast left Nikita and chased the darting dog into the forest.</p>\r\n\r\n<p>Tosya diverted the bear well away from the village, before losing the wild animal and returning safely home.&nbsp;According to one report, the dog , hailed as a heroine, was rewarded with cake.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1476197519-3 - Copy.jpg', 'news', 0, 'people-ask-for-tougher-laws-against-animal-poaching', '', 'Tuesday 11/10/2016, 09:51:59 pm', '', '', '', 0),
(46, 0, 1, 0, 0, 'People Ask for Tougher Laws Against Animal Poaching', '0', 'detail', '', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain. However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', '<p>The pet owners let her dog&rsquo;s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.</p>\r\n\r\n<blockquote>\r\n<p>I said: &ldquo;Excuse me, what are you doing?&rdquo; he told me he&rsquo;s taking his dog and I said, &ldquo;No, you&rsquo;re not&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.</p>\r\n\r\n<p>The man had come prepared with his own leash and had hooked up the leash to Silas&rsquo;s leash. &ldquo;There was no way that I was going to be able to wrestle the dog out of his hands so the only thing I could think was just punch him,&rdquo; said Dooling.</p>\r\n\r\n<p>After hitting the man, the criminal ran off down the street.&nbsp;&ldquo;It&rsquo;s an inconvenience or a nuisance, you could say, when she does bark, but she&rsquo;s my guard dog. Some people have big Dobermans &mdash; I have a Chihuahua.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/2.jpg\" style=\"height:1068px; margin:auto; width:712px\" /></p>\r\n\r\n<p>As for her dogs, Dooling said Silas was subdued for much of the night and next day after the near-theft, while Carly the Chihuahua was on high alert, barking at anything that passed by the windows.</p>\r\n\r\n<p>We have been reading posts on social media regarding people stating that there have been attempts to steal dogs from backyards.&nbsp;At this time we would like to remind everybody that any suspicious activity *needs* to be phoned in to us so patrol division can be dispatched and investigate.</p>\r\n\r\n<p>Additionally, if you see that a friend has something posted on their Facebook of this nature please encourage them to call.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The mysterious pooch was discovered by a journalist and their news crew who were in the Bang Rakam District of Thailand reporting on drought conditions.&nbsp;The news crew revealed that they spotted the dog after it ran out of a house near to where they were filming.&nbsp;They then turned the camera on the adorable animal and shot a short video clip which was uploaded to Thai news site Matichon on November 12.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Never underestimate the power of a yappy Chihuahua&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>A daring dachshund proved herself a rare breed of heroine after she saved two boys from a savage bear attack.&nbsp;The super sausage dog raced into action after spotting two boys&nbsp;being ravaged by a massive black bear in Russia.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/3.jpg\" style=\"margin:auto\" /></p>\r\n\r\n<p>The giant animal attacked the youngsters soon after they emerged from their village shop.&nbsp;&ldquo;He caught up with Stas first. The bear threw him to the ground, began to trample him, bite him, he grabbed his head, then shoulder and back. I watched &ndash; and ran at the bear.&nbsp;I didn&rsquo;t think about myself or what would happen. I just wanted to save my friend.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nikita ran and saved me. He hit the bear&rsquo;s head with a stone.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>At this point the bear, which now had a sore head, turned on Nikita, gnawing and clawing him, leaving Stas wounded and frightened.&nbsp;At this moment a little dachshund called Tosya arrived on the scene and barked furiously at the bear. Now the beast left Nikita and chased the darting dog into the forest.</p>\r\n\r\n<p>Tosya diverted the bear well away from the village, before losing the wild animal and returning safely home.&nbsp;According to one report, the dog , hailed as a heroine, was rewarded with cake.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1476197521-3 - Copy.jpg', 'news', 0, 'people-ask-for-tougher-laws-against-animal-poaching', '', 'Tuesday 11/10/2016, 09:52:01 pm', '', '', '', 0),
(47, 0, 1, 0, 0, 'People Ask for Tougher Laws Against Animal Poaching', '0', 'detail', '', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain. However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', '<p>The pet owners let her dog&rsquo;s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.</p>\r\n\r\n<blockquote>\r\n<p>I said: &ldquo;Excuse me, what are you doing?&rdquo; he told me he&rsquo;s taking his dog and I said, &ldquo;No, you&rsquo;re not&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.</p>\r\n\r\n<p>The man had come prepared with his own leash and had hooked up the leash to Silas&rsquo;s leash. &ldquo;There was no way that I was going to be able to wrestle the dog out of his hands so the only thing I could think was just punch him,&rdquo; said Dooling.</p>\r\n\r\n<p>After hitting the man, the criminal ran off down the street.&nbsp;&ldquo;It&rsquo;s an inconvenience or a nuisance, you could say, when she does bark, but she&rsquo;s my guard dog. Some people have big Dobermans &mdash; I have a Chihuahua.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/2.jpg\" style=\"height:1068px; margin:auto; width:712px\" /></p>\r\n\r\n<p>As for her dogs, Dooling said Silas was subdued for much of the night and next day after the near-theft, while Carly the Chihuahua was on high alert, barking at anything that passed by the windows.</p>\r\n\r\n<p>We have been reading posts on social media regarding people stating that there have been attempts to steal dogs from backyards.&nbsp;At this time we would like to remind everybody that any suspicious activity *needs* to be phoned in to us so patrol division can be dispatched and investigate.</p>\r\n\r\n<p>Additionally, if you see that a friend has something posted on their Facebook of this nature please encourage them to call.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The mysterious pooch was discovered by a journalist and their news crew who were in the Bang Rakam District of Thailand reporting on drought conditions.&nbsp;The news crew revealed that they spotted the dog after it ran out of a house near to where they were filming.&nbsp;They then turned the camera on the adorable animal and shot a short video clip which was uploaded to Thai news site Matichon on November 12.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Never underestimate the power of a yappy Chihuahua&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>A daring dachshund proved herself a rare breed of heroine after she saved two boys from a savage bear attack.&nbsp;The super sausage dog raced into action after spotting two boys&nbsp;being ravaged by a massive black bear in Russia.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/3.jpg\" style=\"margin:auto\" /></p>\r\n\r\n<p>The giant animal attacked the youngsters soon after they emerged from their village shop.&nbsp;&ldquo;He caught up with Stas first. The bear threw him to the ground, began to trample him, bite him, he grabbed his head, then shoulder and back. I watched &ndash; and ran at the bear.&nbsp;I didn&rsquo;t think about myself or what would happen. I just wanted to save my friend.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nikita ran and saved me. He hit the bear&rsquo;s head with a stone.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>At this point the bear, which now had a sore head, turned on Nikita, gnawing and clawing him, leaving Stas wounded and frightened.&nbsp;At this moment a little dachshund called Tosya arrived on the scene and barked furiously at the bear. Now the beast left Nikita and chased the darting dog into the forest.</p>\r\n\r\n<p>Tosya diverted the bear well away from the village, before losing the wild animal and returning safely home.&nbsp;According to one report, the dog , hailed as a heroine, was rewarded with cake.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1476197524-3 - Copy.jpg', 'news', 0, 'people-ask-for-tougher-laws-against-animal-poaching', '', 'Tuesday 11/10/2016, 09:52:04 pm', '', '', '', 0),
(48, 0, 1, 0, 0, 'Lunch With A Side Of African Elephant', 'photo', 'detail', '', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain. However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', '<p>The pet owners let her dog&rsquo;s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.</p>\r\n\r\n<blockquote>\r\n<p>I said: &ldquo;Excuse me, what are you doing?&rdquo; he told me he&rsquo;s taking his dog and I said, &ldquo;No, you&rsquo;re not&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.</p>\r\n\r\n<p>The man had come prepared with his own leash and had hooked up the leash to Silas&rsquo;s leash. &ldquo;There was no way that I was going to be able to wrestle the dog out of his hands so the only thing I could think was just punch him,&rdquo; said Dooling.</p>\r\n\r\n<p>After hitting the man, the criminal ran off down the street.&nbsp;&ldquo;It&rsquo;s an inconvenience or a nuisance, you could say, when she does bark, but she&rsquo;s my guard dog. Some people have big Dobermans &mdash; I have a Chihuahua.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/1.jpg\" style=\"height:800px; margin:auto; width:1068px\" /></p>\r\n\r\n<p>As for her dogs, Dooling said Silas was subdued for much of the night and next day after the near-theft, while Carly the Chihuahua was on high alert, barking at anything that passed by the windows.</p>\r\n\r\n<p>We have been reading posts on social media regarding people stating that there have been attempts to steal dogs from backyards.&nbsp;At this time we would like to remind everybody that any suspicious activity *needs* to be phoned in to us so patrol division can be dispatched and investigate.</p>\r\n\r\n<p>Additionally, if you see that a friend has something posted on their Facebook of this nature please encourage them to call.</p>\r\n\r\n<p>The mysterious pooch was discovered by a journalist and their news crew who were in the Bang Rakam District of Thailand reporting on drought conditions.&nbsp;The news crew revealed that they spotted the dog after it ran out of a house near to where they were filming.&nbsp;They then turned the camera on the adorable animal and shot a short video clip which was uploaded to Thai news site Matichon on November 12.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Never underestimate the power of a yappy Chihuahua&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>A daring dachshund proved herself a rare breed of heroine after she saved two boys from a savage bear attack.&nbsp;The super sausage dog raced into action after spotting two boys&nbsp;being ravaged by a massive black bear in Russia.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/2(1).jpg\" style=\"height:1068px; margin:auto; width:712px\" /></p>\r\n\r\n<p>The giant animal attacked the youngsters soon after they emerged from their village shop.&nbsp;&ldquo;He caught up with Stas first. The bear threw him to the ground, began to trample him, bite him, he grabbed his head, then shoulder and back. I watched &ndash; and ran at the bear.&nbsp;I didn&rsquo;t think about myself or what would happen. I just wanted to save my friend.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nikita ran and saved me. He hit the bear&rsquo;s head with a stone.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>At this point the bear, which now had a sore head, turned on Nikita, gnawing and clawing him, leaving Stas wounded and frightened.&nbsp;At this moment a little dachshund called Tosya arrived on the scene and barked furiously at the bear. Now the beast left Nikita and chased the darting dog into the forest.</p>\r\n\r\n<p>Tosya diverted the bear well away from the village, before losing the wild animal and returning safely home.&nbsp;According to one report, the dog , hailed as a heroine, was rewarded with cake.</p>\r\n\r\n<p>Both children were rushed to hospital, with Stas suffering scratches, bites and bruises, while Nikita had more serious wounds, with deep cuts on his hands, and bites on his legs.</p>\r\n\r\n<p>Nikita&rsquo;s mother Maria Nikonova says: &ldquo;It was a shock. I couldn&rsquo;t believe that bears can attack children in the middle of the village.&nbsp;It was terrible to look at all these lacerations, his torn clothes all covered in blood.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/3(1).jpg\" style=\"height:453px; margin:auto; width:680px\" /></p>\r\n\r\n<p>Hunters tracked and shot the bear, which had earlier left a village couple marooned in their house as it laid waste to their garden.&nbsp;A bear cub created absolute havoc by running inside a coffee shop.&nbsp;The clip shows the bear cub running around the coffee shop and attempting to jump on tables.</p>\r\n\r\n<p>Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again.&nbsp;It is thought that the cub might have been lost and disorientated or separated from its mother.</p>\r\n\r\n<p>The smell of food, coffee and pastries may also have attracted the bear to explore inside.&nbsp;Hilariously, the shop&nbsp;advertises itself as a place where tourists can get close to nature &ndash; in this case, far closer than anyone would expect.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1476198040-30-324x160.jpg', 'news', 0, 'lunch-with-a-side-of-african-elephant', '', 'Tuesday 11/10/2016, 10:00:40 pm', '', '', '', 1);
INSERT INTO `tin_tuc` (`id`, `idrandom`, `publishing`, `top`, `privated`, `tieu_de`, `icon`, `typenews`, `overShort`, `tom_tat`, `noi_dung`, `hinh`, `loai_tin`, `kieu_tin`, `url`, `user`, `created`, `updated`, `keyword`, `description`, `issetSurvey`) VALUES
(49, 0, 1, 0, 0, 'Lunch With A Side Of African Elephant', 'photo', 'detail', '', 'It sounds funny to think that a little Chihuahua would be able to stop a thief. If you think about it, other than yapping and possibly causing lots of harm with their sharp little teeth, any criminal could easily pick up the Chihuahua and the dog’s effort to stop crimes would be in vain. However, Carly, a Chihuahua from St. Johns, Canada became a hero when her yapping alerted her owners of a man that was trying to steal her fur sibling, a Newfoundland named Silas.', '<p>The pet owners let her dog&rsquo;s out around 8:00 p.m. and a minute later Carly started barking nonstop. Dooling went out to investigate and saw a man dragging her Newfoundland down her driveway.</p>\r\n\r\n<blockquote>\r\n<p>I said: &ldquo;Excuse me, what are you doing?&rdquo; he told me he&rsquo;s taking his dog and I said, &ldquo;No, you&rsquo;re not&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>Without hesitating, the woman self-described as short walked up to the man and punched him on the face, then took her dog back home with her.</p>\r\n\r\n<p>The man had come prepared with his own leash and had hooked up the leash to Silas&rsquo;s leash. &ldquo;There was no way that I was going to be able to wrestle the dog out of his hands so the only thing I could think was just punch him,&rdquo; said Dooling.</p>\r\n\r\n<p>After hitting the man, the criminal ran off down the street.&nbsp;&ldquo;It&rsquo;s an inconvenience or a nuisance, you could say, when she does bark, but she&rsquo;s my guard dog. Some people have big Dobermans &mdash; I have a Chihuahua.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/1.jpg\" style=\"height:800px; margin:auto; width:1068px\" /></p>\r\n\r\n<p>As for her dogs, Dooling said Silas was subdued for much of the night and next day after the near-theft, while Carly the Chihuahua was on high alert, barking at anything that passed by the windows.</p>\r\n\r\n<p>We have been reading posts on social media regarding people stating that there have been attempts to steal dogs from backyards.&nbsp;At this time we would like to remind everybody that any suspicious activity *needs* to be phoned in to us so patrol division can be dispatched and investigate.</p>\r\n\r\n<p>Additionally, if you see that a friend has something posted on their Facebook of this nature please encourage them to call.</p>\r\n\r\n<p>The mysterious pooch was discovered by a journalist and their news crew who were in the Bang Rakam District of Thailand reporting on drought conditions.&nbsp;The news crew revealed that they spotted the dog after it ran out of a house near to where they were filming.&nbsp;They then turned the camera on the adorable animal and shot a short video clip which was uploaded to Thai news site Matichon on November 12.</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Never underestimate the power of a yappy Chihuahua&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>A daring dachshund proved herself a rare breed of heroine after she saved two boys from a savage bear attack.&nbsp;The super sausage dog raced into action after spotting two boys&nbsp;being ravaged by a massive black bear in Russia.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/2(1).jpg\" style=\"height:1068px; margin:auto; width:712px\" /></p>\r\n\r\n<p>The giant animal attacked the youngsters soon after they emerged from their village shop.&nbsp;&ldquo;He caught up with Stas first. The bear threw him to the ground, began to trample him, bite him, he grabbed his head, then shoulder and back. I watched &ndash; and ran at the bear.&nbsp;I didn&rsquo;t think about myself or what would happen. I just wanted to save my friend.&rdquo;</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;Nikita ran and saved me. He hit the bear&rsquo;s head with a stone.&rdquo;</p>\r\n</blockquote>\r\n\r\n<p>At this point the bear, which now had a sore head, turned on Nikita, gnawing and clawing him, leaving Stas wounded and frightened.&nbsp;At this moment a little dachshund called Tosya arrived on the scene and barked furiously at the bear. Now the beast left Nikita and chased the darting dog into the forest.</p>\r\n\r\n<p>Tosya diverted the bear well away from the village, before losing the wild animal and returning safely home.&nbsp;According to one report, the dog , hailed as a heroine, was rewarded with cake.</p>\r\n\r\n<p>Both children were rushed to hospital, with Stas suffering scratches, bites and bruises, while Nikita had more serious wounds, with deep cuts on his hands, and bites on his legs.</p>\r\n\r\n<p>Nikita&rsquo;s mother Maria Nikonova says: &ldquo;It was a shock. I couldn&rsquo;t believe that bears can attack children in the middle of the village.&nbsp;It was terrible to look at all these lacerations, his torn clothes all covered in blood.&rdquo;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/3(1).jpg\" style=\"height:453px; margin:auto; width:680px\" /></p>\r\n\r\n<p>Hunters tracked and shot the bear, which had earlier left a village couple marooned in their house as it laid waste to their garden.&nbsp;A bear cub created absolute havoc by running inside a coffee shop.&nbsp;The clip shows the bear cub running around the coffee shop and attempting to jump on tables.</p>\r\n\r\n<p>Laughter can be heard on the clip, and everyone was quickly moved out of the way of the bear and it ran out of the shop again.&nbsp;It is thought that the cub might have been lost and disorientated or separated from its mother.</p>\r\n\r\n<p>The smell of food, coffee and pastries may also have attracted the bear to explore inside.&nbsp;Hilariously, the shop&nbsp;advertises itself as a place where tourists can get close to nature &ndash; in this case, far closer than anyone would expect.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1476198043-30-324x160.jpg', 'news', 0, 'lunch-with-a-side-of-african-elephant', '', 'Tuesday 11/10/2016, 10:00:43 pm', '', '', '', 0),
(52, 0, 1, 0, 0, 'Bài viết có khảo sát', 'video', 'detail', '', 'Bài viết có khảo sátBài viết có khảo sátBài viết có khảo sátBài viết có khảo sátBài viết có khảo sátBài viết có khảo sátBài viết có khảo sátBài viết có khảo sát', '', '1478483452-gj.jpg', 'news', 0, 'bai-viet-co-khao-sat', '', 'Monday 7/11/2016, 08:50:52 am', '', 'Bài viết có khảo sát', 'Bài viết có khảo sát', 0),
(53, 0, 1, 0, 0, 'Sẽ vận hành 2 trung tâm hỗ trợ Startup tại Hà Nội và TP HCM', 'photo', 'detail', '', 'Hai khu tập trung dịch vụ hỗ trợ khởi nghiệp đổi mới sáng tạo này sẽ được thiết lập và dự kiến vận hành trong năm sau.', '', '1478483926-gj.jpg', 'default', 0, 'se-van-hanh-2-trung-tam-ho-tro-startup-tai-ha-noi-va-tp-hcm', '', 'Monday 7/11/2016, 08:58:46 am', '', '11111111', '111', 0),
(54, 0, 1, 0, 0, 'Sẽ vận hành 2 trung tâm hỗ trợ Startup tại Hà Nội và TP HCM', '0', 'detail', '', 'Hai khu tập trung dịch vụ hỗ trợ khởi nghiệp đổi mới sáng tạo này sẽ được thiết lập và dự kiến vận hành trong năm sau.', '', '1478484017-', 'default', 0, 'se-van-hanh-2-trung-tam-ho-tro-startup-tai-ha-noi-va-tp-hcm', '', 'Monday 7/11/2016, 09:00:17 am', '', '11111111', '111', 0),
(55, 0, 1, 0, 0, 'Sẽ vận hành 2 trung tâm hỗ trợ Startup tại Hà Nội và TP HCM', 'photo', 'detail', '', 'Sẽ vận hành 2 trung tâm hỗ trợ Startup tại Hà Nội và TP HCMSẽ vận hành 2 trung tâm hỗ trợ Startup tại Hà Nội và TP HCM', '', '1478484099-', 'news', 0, 'se-van-hanh-2-trung-tam-ho-tro-startup-tai-ha-noi-va-tp-hcm', '', 'Monday 7/11/2016, 09:01:39 am', '', '1', '1', 0),
(56, 0, 1, 0, 0, 'Giá vàng rơi mạnh đầu ngày', '0', 'detail', '', 'Vừa mở cửa đầu tuần, vàng giao ngay giảm hơn chục đôla, trái ngược với những dự báo của giới chuyên gia về khả năng kim loại quý này sẽ ', '<p>Vừa mở cửa đầu tuần, v&agrave;ng giao ngay giảm hơn chục đ&ocirc;la, tr&aacute;i ngược với những dự b&aacute;o của giới chuy&ecirc;n gia về khả năng kim loại qu&yacute; n&agrave;y sẽ <a href=\"http://kinhdoanh.vnexpress.net/tin-tuc/hang-hoa/gia-vang-roi-manh-dau-ngay-3495061.html?utm_source=home&amp;utm_medium=box_kinhdoanh_home&amp;utm_campaign=boxtracking\"><img src=\"http://st.f1.vnecdn.net/responsive/i/v32/icons/icon_more2.gif\" /></a> Vừa mở cửa đầu tuần, v&agrave;ng giao ngay giảm hơn chục đ&ocirc;la, tr&aacute;i ngược với những dự b&aacute;o của giới chuy&ecirc;n gia về khả năng kim loại qu&yacute; n&agrave;y sẽ <a href=\"http://kinhdoanh.vnexpress.net/tin-tuc/hang-hoa/gia-vang-roi-manh-dau-ngay-3495061.html?utm_source=home&amp;utm_medium=box_kinhdoanh_home&amp;utm_campaign=boxtracking\"><img src=\"http://st.f1.vnecdn.net/responsive/i/v32/icons/icon_more2.gif\" /></a> Vừa mở cửa đầu tuần, v&agrave;ng giao ngay giảm hơn chục đ&ocirc;la, tr&aacute;i ngược với những dự b&aacute;o của giới chuy&ecirc;n gia về khả năng kim loại qu&yacute; n&agrave;y sẽ <a href=\"http://kinhdoanh.vnexpress.net/tin-tuc/hang-hoa/gia-vang-roi-manh-dau-ngay-3495061.html?utm_source=home&amp;utm_medium=box_kinhdoanh_home&amp;utm_campaign=boxtracking\"><img src=\"http://st.f1.vnecdn.net/responsive/i/v32/icons/icon_more2.gif\" /></a> Vừa mở cửa đầu tuần, v&agrave;ng giao ngay giảm hơn chục đ&ocirc;la, tr&aacute;i ngược với những dự b&aacute;o của giới chuy&ecirc;n gia về khả năng kim loại qu&yacute; n&agrave;y sẽ <a href=\"http://kinhdoanh.vnexpress.net/tin-tuc/hang-hoa/gia-vang-roi-manh-dau-ngay-3495061.html?utm_source=home&amp;utm_medium=box_kinhdoanh_home&amp;utm_campaign=boxtracking\"><img src=\"http://st.f1.vnecdn.net/responsive/i/v32/icons/icon_more2.gif\" /></a></p>\r\n', '1478484564-11.jpg', 'news', 0, 'gia-vang-roi-manh-dau-ngay', '', 'Monday 7/11/2016, 09:09:24 am', '', '', '', 0),
(57, 0, 1, 0, 0, 'Trải nghiệm tuổi thơ ảnh hưởng đến số phận bạn như thế nào', 'photo', 'detail', '', 'Những người từng có tuổi thơ hạnh phúc thường là người tự tin và đầy sinh lực, người có tuổi thơ bất hạnh thường chín chắn và nhiều suy nghĩ.', '<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c t</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c t</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>hường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c t</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>hường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c t</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>hường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c t</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>hường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>Những người từng c&oacute; tuổi thơ hạnh ph&uacute;c thường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n\r\n<p>hường l&agrave; người tự tin v&agrave; đầy sinh lực, người c&oacute; tuổi thơ bất hạnh thường ch&iacute;n chắn v&agrave; nhiều suy nghĩ.</p>\r\n', '1478485982-22.jpg', 'news', 0, 'trai-nghiem-tuoi-tho-anh-huong-den-so-phan-ban-nhu-the-nao', 'PhamlucBlog', 'Monday 7/11/2016, 09:33:02 am', '', 'tuoi tho', 'Những người từng có tuổi thơ hạnh phúc thường là người tự tin và đầy sinh lực, người có tuổi thơ bất hạnh thường chín chắn và nhiều suy nghĩ.', 0),
(58, 0, 1, 0, 0, 'Khách Tây bị lạc ở Hà Giang và lòng tốt của hai bạn trẻ', 'photo', 'detail', '', 'Bị xe ôm chở nhầm đến Bắc Mê, Odette Lambert hoang mang tột độ vì xung quanh không ai biết tiếng Anh, internet bị mất. May mắn cô được Thu và bạn giúp đỡ, đưa đến Bắc Kạn - điểm dừng chân trong kế hoạch.', '<p>&quot;H&ocirc;m nay c&oacute; một c&ocirc; người Canada đi du lịch ở H&agrave; Giang. C&ocirc; thu&ecirc; xe &ocirc;m đi từ M&egrave;o Vạc sang Bắc Kạn, m&agrave; kh&ocirc;ng hiểu ai phi&ecirc;n dịch bảo đưa đến huyện Bắc M&ecirc; rồi vứt c&ocirc; ấy ở đường thu 1,2 triệu v&agrave; về, đoạn đường c&oacute; 90 km. C&ocirc; ấy vừa n&oacute;i vừa kh&oacute;c. Em đưa c&ocirc; về nh&agrave;, mời ăn cơm v&agrave; cố gắng t&igrave;m người đồng &yacute; đi xe &ocirc;m đưa c&ocirc; sang Bắc Kạn. M&agrave; mọi người nhao nhao tới xem xong đi ra cửa, bĩu m&ocirc;i bảo bọn T&acirc;y gi&agrave;u kệ ch&uacute;ng n&oacute;, con Thu lại rước b&agrave; T&acirc;y về nh&agrave; lo bao đồng&quot;, Phạm Thu tr&uacute;t nỗi l&ograve;ng trong t&acirc;m trạng vừa buồn vừa c&aacute;u</p>\r\n', '1478589873-12123.jpg', 'news', 0, 'khach-tay-bi-lac-o-ha-giang-va-long-tot-cua-hai-ban-tre', '', 'Tuesday 8/11/2016, 02:24:33 pm', '', '', 'Bị xe ôm chở nhầm đến Bắc Mê, Odette Lambert hoang mang tột độ vì xung quanh không ai biết tiếng Anh, internet bị mất. May mắn cô được Thu và bạn giúp đỡ, đưa đến Bắc Kạn - điểm dừng chân trong kế hoạch.', 1),
(59, 0, 1, 0, 0, 'Giao lộ đông đúc nhất thế giới ở Nhật Bản', 'video', 'detail', '', 'Shibuya ở Tokyo, Nhật Bản, là khu phố có ngã tư náo nhiệt và đông đúc nhất thế giới bởi luôn tấp nập người đi bộ qua lại cả ngày lẫn đêm.', '<p>Shibuya ở Tokyo, Nhật Bản, l&agrave; khu phố c&oacute; ng&atilde; tư n&aacute;o nhiệt v&agrave; đ&ocirc;ng đ&uacute;c nhất thế giới bởi lu&ocirc;n tấp nập người đi bộ qua lại cả ng&agrave;y lẫn đ&ecirc;m. Shibuya ở Tokyo, Nhật Bản, l&agrave; khu phố c&oacute; ng&atilde; tư n&aacute;o nhiệt v&agrave; đ&ocirc;ng đ&uacute;c nhất thế giới bởi lu&ocirc;n tấp nập người đi bộ qua lại cả ng&agrave;y lẫn đ&ecirc;m. Shibuya ở Tokyo, Nhật Bản, l&agrave; khu phố c&oacute; ng&atilde; tư n&aacute;o nhiệt v&agrave; đ&ocirc;ng đ&uacute;c nhất thế giới bởi lu&ocirc;n tấp nập người đi bộ qua lại cả ng&agrave;y lẫn đ&ecirc;m. Shibuya ở Tokyo, Nhật Bản, l&agrave; khu phố c&oacute; ng&atilde; tư n&aacute;o nhiệt v&agrave; đ&ocirc;ng đ&uacute;c nhất thế giới bởi lu&ocirc;n tấp nập người đi bộ qua lại cả ng&agrave;y lẫn đ&ecirc;m. Shibuya ở Tokyo, Nhật Bản, l&agrave; khu phố c&oacute; ng&atilde; tư n&aacute;o nhiệt v&agrave; đ&ocirc;ng đ&uacute;c nhất thế giới bởi lu&ocirc;n tấp nập người đi bộ qua lại cả ng&agrave;y lẫn đ&ecirc;m.</p>\r\n', '1478589997-135215.jpg', 'news', 0, 'giao-lo-dong-duc-nhat-the-gioi-o-nhat-ban', '', 'Tuesday 8/11/2016, 02:26:37 pm', '', '', 'Shibuya ở Tokyo, Nhật Bản, là khu phố có ngã tư náo nhiệt và đông đúc nhất thế giới bởi luôn tấp nập người đi bộ qua lại cả ngày lẫn đêm.', 1),
(60, 0, 1, 0, 0, 'Dân Mỹ xếp hàng đi bầu tổng thống từ mờ sáng', '0', 'detail', '', 'Cử tri Mỹ đã xếp hàng bỏ phiếu cho ngày bầu cử 8/11 lúc sáng sớm, nhiều người trong số họ đã chờ từ trước.', '<p>Cử tri Mỹ đ&atilde; xếp h&agrave;ng bỏ phiếu cho ng&agrave;y bầu cử 8/11 l&uacute;c s&aacute;ng sớm, nhiều người trong số họ đ&atilde; chờ từ trước. Cử tri Mỹ đ&atilde; xếp h&agrave;ng bỏ phiếu cho ng&agrave;y bầu cử 8/11 l&uacute;c s&aacute;ng sớm, nhiều người trong số họ đ&atilde; chờ từ trước. Cử tri Mỹ đ&atilde; xếp h&agrave;ng bỏ phiếu cho ng&agrave;y bầu cử 8/11 l&uacute;c s&aacute;ng sớm, nhiều người trong số họ đ&atilde; chờ từ trước. Cử tri Mỹ đ&atilde; xếp h&agrave;ng bỏ phiếu cho ng&agrave;y bầu cử 8/11 l&uacute;c s&aacute;ng sớm, nhiều người trong số họ đ&atilde; chờ từ trước. Cử tri Mỹ đ&atilde; xếp h&agrave;ng bỏ phiếu cho ng&agrave;y bầu cử 8/11 l&uacute;c s&aacute;ng sớm, nhiều người trong số họ đ&atilde; chờ từ trước. Ứng vi&ecirc;n ph&oacute; tổng thống đảng D&acirc;n chủ Tim Kaine tới điểm bỏ phiếu ở Richmond, Virginia từ trước giờ mở cửa để bỏ một trong những l&aacute; phiếu đầu ti&ecirc;n. Ứng vi&ecirc;n ph&oacute; tổng thống đảng D&acirc;n chủ Tim Kaine tới điểm bỏ phiếu ở Richmond, Virginia từ trước giờ mở cửa để bỏ một trong những l&aacute; phiếu đầu ti&ecirc;n. Ứng vi&ecirc;n ph&oacute; tổng thống đảng D&acirc;n chủ Tim Kaine tới điểm bỏ phiếu ở Richmond, Virginia từ trước giờ mở cửa để bỏ một trong những l&aacute; phiếu đầu ti&ecirc;n.</p>\r\n', '1478614685-426356.jpg', 'news', 0, 'dan-my-xep-hang-di-bau-tong-thong-tu-mo-sang', '', 'Tuesday 8/11/2016, 09:18:05 pm', '', '', 'Cử tri Mỹ đã xếp hàng bỏ phiếu cho ngày bầu cử 8/11 lúc sáng sớm, nhiều người trong số họ đã chờ từ trước.', 1),
(61, 0, 1, 0, 0, 'co khao sat', '0', 'detail', '', 'dqwd', '<p>qwd</p>\r\n', '1478616129-426356.jpg', 'news', 0, 'co-khao-sat', '', 'Tuesday 8/11/2016, 09:42:09 pm', '', 'qwd', 'qwd', 1),
(62, 0, 1, 0, 0, 'co 4 khao sat', '0', 'detail', '', 'qwdqwd', '<p>qwd</p>\r\n', '1478616245-426356.jpg', 'news', 0, 'co-4-khao-sat', 'PhamlucBlog', 'Tuesday 8/11/2016, 09:44:05 pm', '', 'qwd', 'qwd', 1),
(63, 0, 1, 0, 0, 'co 5 khao sat', 'photo', 'detail', '', 'qwdqwd', '', '1478616331-426356.jpg', 'news', 0, 'co-5-khao-sat', 'PhamlucBlog', 'Tuesday 8/11/2016, 09:45:31 pm', '', 'qwd', 'qwd', 0),
(64, 0, 1, 0, 0, 'khao sat yes/no', 'video', 'detail', '', 'qwdqwd', '<p>qwd</p>\r\n', '1478616376-426356.jpg', 'news', 0, 'khao-sat-yes-no', '', 'Tuesday 8/11/2016, 09:46:16 pm', '', 'qwd', 'qwd', 1),
(65, 0, 1, 0, 0, 'Co khao sat', '0', 'detail', '', 'qưdqwdqwd', '<p>qưd</p>\r\n', '1478618330-426356.jpg', 'news', 0, 'co-khao-sat', '', 'Tuesday 8/11/2016, 10:18:50 pm', '', 'qưd', 'qưd', 1),
(66, 0, 1, 0, 0, 'co khao sat 7 va duoc update', 'photo', 'detail', '', 'qưdqwd - udpdate', '', '1478619109-426356.jpg', 'news', 0, 'co-khao-sat-7-va-duoc-update', 'PhamlucBlog', 'Tuesday 8/11/2016, 10:31:49 pm', '', 'qưd udpdate', 'qưd udpdate', 1),
(67, 0, 1, 0, 0, 'khao sat 9', 'photo', 'detail', '', 'qưdqwd', '<p>qưd</p>\r\n', '1478619334-426356.jpg', 'news', 0, 'khao-sat-9', '', 'Tuesday 8/11/2016, 10:35:34 pm', '', 'qưdqwd', 'qưdqwd', 1),
(68, 0, 1, 0, 0, '', '0', 'detail', '', '', '', '1478619424-426356.jpg', '', 0, '', 'PhamlucBlog', 'Tuesday 8/11/2016, 10:37:04 pm', '', '', '', 0),
(69, 0, 1, 0, 0, 'Bài viết có khảo sát dạng trắc nghiệm', 'photo', 'detail', '', 'Bài viết có khảo sát dạng trắc nghiệmBài viết có khảo sát dạng trắc nghiệmBài viết có khảo sát dạng trắc nghiệm', '<p>B&agrave;i viết c&oacute; khảo s&aacute;t dạng trắc nghiệm</p>\r\n', '1479089478-qwdqwdaef.jpg', 'news', 0, 'bai-viet-co-khao-sat-dang-trac-nghiem', '', 'Monday 14/11/2016, 09:11:18 am', '', 'bai viet', 'Bài viết có khảo sát dạng trắc nghiệm', 1),
(70, 0, 1, 0, 0, 'Bài viết có khảo sát dạng trắc nghiệm', 'photo', 'detail', '', 'Bài viết có khảo sát dạng trắc nghiệmBài viết có khảo sát dạng trắc nghiệmBài viết có khảo sát dạng trắc nghiệm', '<p>B&agrave;i viết c&oacute; khảo s&aacute;t dạng trắc nghiệm</p>\r\n', '1479089535-qwdqwdaef.jpg', 'news', 0, 'bai-viet-co-khao-sat-dang-trac-nghiem', '', 'Monday 14/11/2016, 09:12:15 am', '', 'bai viet', 'Bài viết có khảo sát dạng trắc nghiệm', 1),
(71, 0, 1, 0, 0, 'Bài viết có khảo sát dạng Yes No', 'video', 'detail', '', 'Bài viết có khảo sát dạng Yes NoBài viết có khảo sát dạng Yes NoBài viết có khảo sát dạng Yes No', '<p>B&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes NoB&agrave;i viết c&oacute; khảo s&aacute;t dạng Yes No</p>\r\n', '1479089764-123124.jpg', 'news', 0, 'bai-viet-co-khao-sat-dang-yes-no', '', 'Monday 14/11/2016, 09:16:04 am', '', 'Bài viết có khảo sát dạng Yes No', 'Bài viết có khảo sát dạng Yes No', 1),
(72, 0, 0, 0, 1, 'Bài viết có khảo sát dạng chọn nhiều đáp án', 'photo', 'detail', 'Bài viết có khảo sát dạng chọn nhiều đáp ánBài viết có khảo sát dạng chọn nhiều đáp ánBài viết có khảo sát dạng ...', 'Bài viết có khảo sát dạng chọn nhiều đáp ánBài viết có khảo sát dạng chọn nhiều đáp ánBài viết có khảo sát dạng chọn nhiều đáp án', '<p>B&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;nB&agrave;i viết c&oacute; khảo s&aacute;t dạng chọn nhiều đ&aacute;p &aacute;n</p>\r\n', '1479090261-68579.jpg', 'news', 0, 'bai-viet-co-khao-sat-dang-chon-nhieu-dap-an', '', 'Monday 14/11/2016, 09:24:21 am', '', 'Bài viết có khảo sát dạng chọn nhiều đáp án', 'Bài viết có khảo sát dạng chọn nhiều đáp án', 1),
(73, 0, 1, 0, 0, 'Đêm siêu trăng tại Việt Nam', '0', 'detail', '', 'Đêm siêu trăng tại Việt NamĐêm siêu trăng tại Việt NamĐêm siêu trăng tại Việt NamĐêm siêu trăng tại Việt Nam', '<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/6458.jpg\" style=\"margin:auto\" /></p>\r\n\r\n<p>Đ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt NamĐ&ecirc;m si&ecirc;u trăng tại Việt Nam</p>\r\n', '1479544161-6458.jpg', 'news', 0, 'dem-sieu-trang-tai-viet-nam', 'PhamlucBlog', 'Saturday 19/11/2016, 03:29:21 pm', '', 'Đêm siêu trăng tại Việt Nam', 'Đêm siêu trăng tại Việt Nam', 1),
(75, 0, 1, 0, 0, 'them khao sat answer KHÔNG UPDATE KHẢO SÁT', '0', 'detail', '', 'qwdqwd', '<p>qwd</p>\r\n', '1479552092-6458.jpg', 'news', 0, 'them-khao-sat-answer-khong-update-khao-sat', 'PhamlucBlog', 'Saturday 19/11/2016, 05:41:32 pm', '', 'qwd', 'qwd', 1),
(78, 0, 1, 0, 0, 'Cầu chúc điều tốt đẹp, sáng Chúa nhật an lành', '0', 'detail', '', 'Sáng Chúa nhật tại trường ĐH CNTT - ĐHQG HCM', '<p>Một s&aacute;ng Chủ nhật y&ecirc;n b&igrave;nh ở trường ĐH, hiếm khi n&agrave;o ng&agrave;y Chủ nhật m&agrave; m&igrave;nh lại l&ecirc;n trường. Cảm gi&aacute;c thật lạ.</p>\r\n\r\n<p>Bạn b&egrave; m&igrave;nh giờ nhiều bạn đ&atilde; tốt nghiệp, sắp tốt nghiệp, đ&atilde; c&oacute; việc l&agrave;m v&agrave; bắt đầu c&oacute; cuộc sống ri&ecirc;ng. Điều đ&oacute; cũng thật hạnh ph&uacute;c, v&agrave; đ&aacute;ng tr&acirc;n trọng khi m&igrave;nh được quen biết v&agrave; kết th&acirc;n với những bạn c&oacute; ch&iacute; hướng biết phấn đấu v&igrave; những điều tốt đẹp, cảm ơn Ch&uacute;a đ&atilde; đem họ đến b&ecirc;n cuộc đời con.</p>\r\n\r\n<p>Nhưng cũng bắt đầu khoảng thời gian mới của t&igrave;nh bạn, t&igrave;nh bạn giờ đ&acirc;y kh&ocirc;ng c&ograve;n v&ocirc; tư như trước nữa v&igrave; c&ograve;n cả cuộc sống ph&iacute;a trước. Phải lo lắng, bộn bề nhiều hơn.</p>\r\n\r\n<p>Nhiều bạn giờ đ&acirc;y đ&atilde; tốt nghiệp đại học (3,5 năm) đ&oacute; quả thật l&agrave; một th&agrave;nh quả m&igrave;nh ghi nhận c&ocirc;ng sức to lớn của c&aacute;c bạn bỏ ra để c&oacute; thể tốt nghiệp sớm hơn cả thời gian quy định, c&aacute;c bạn vui mừng c&oacute; vẻ lớn lao. Nhưng m&igrave;nh kh&ocirc;ng n&ecirc;n nghĩ thế, tốt nghiệp đại học l&agrave; điều hiển nhi&ecirc;n phải thực hiện được khi ch&uacute;ng ta đậu đại học. M&agrave; mục ti&ecirc;u của m&igrave;nh phải cao hơn, tốt nghiệp cao học, thậm ch&iacute; Tiến sĩ chẳng hạn, ch&uacute;ng ta n&ecirc;n đặt ra những mục ti&ecirc;u cao hơn để phấn đấu hơn nữa.</p>\r\n\r\n<p>Cũng mong c&aacute;c bạn tốt nghiệp giờ n&agrave;y đừng suy nghĩ l&agrave; việc học của m&igrave;nh đ&atilde; chấm dứt, đ&oacute; l&agrave; mặt tr&aacute;i, lưỡi dao thứ 2 m&agrave; nhiều người kh&ocirc;ng nhận ra. Khi tốt nghiệp ch&uacute;ng ta c&oacute; xu hướng việc học của m&igrave;nh đ&atilde; đủ, đ&atilde; tới giới hạn v&agrave; dừng lại. Kh&ocirc;ng, bỏ ngay suy nghĩ n&agrave;y h&atilde;y cố gắng học th&ecirc;m nữa, học nhiều nữa (kh&ocirc;ng phải nhất thiết l&agrave; việc học ở trường) v&igrave; để tồn tại trong cuộc sống phải cần rất nhiều yếu tố kh&aacute;c nhau kết hợp lại, người th&agrave;nh c&ocirc;ng l&agrave; người biết kết hợp c&aacute;c yếu tố c&agrave;ng nhiều c&agrave;ng tốt. Chuy&ecirc;n ng&agrave;nh ch&uacute;ng ta học chỉ l&agrave; 1 phần rất nhỏ trong sự cần thiết của cuộc sống.</p>\r\n\r\n<p>Ch&uacute;c mừng c&aacute;c bạn của t&ocirc;i, c&aacute;c bạn thật sự giỏi v&agrave; cố gắng hết m&igrave;nh, cầu ch&uacute;c cho nhau những điều tốt đẹp v&agrave; tinh thần vững v&agrave;ng ph&iacute;a trước. Cho t&ocirc;i gửi lời y&ecirc;u thương nhất đến c&aacute;c bạn, đến b&ecirc;n nhau.</p>\r\n\r\n<p style=\"text-align:right\">Cảm tạ Ch&uacute;a.</p>\r\n\r\n<p style=\"text-align:right\"><strong>Phạm Văn Lực, 04/12/2016</strong></p>\r\n', '1480821510-155466890.jpg', 'diary', 0, 'cau-chuc-dieu-tot-dep-sang-chua-nhat-an-lanh', '', 'Sunday 4/12/2016, 10:18:30 am', '', 'tot nghiep dai hoc, tot nghiep 3,5 nam, chuc mung tot nghiep', 'Sáng Chúa nhật tại trường ĐH CNTT - ĐHQG HCM, không khí trong lành, các bạn sinh viên trường KHXH-NV đang thi ngôn ngữ Nhật.', 0),
(79, 0, 1, 0, 0, 'Mong ước tìm cô gái xuân xưa, cho vơi đi niềm nhớ có đâu ngờ...', '0', 'detail', '', 'Một chiều xuân em hẹn hò nhưng không đến, một mùa xuân nữa tôi lặng thầm nhớ em.', '<p>Xu&acirc;n đến gần, em xa dần.</p>\r\n\r\n<p>Chiều đ&oacute; nắng v&agrave;ng khắp con đường, người người rạo rực đ&oacute;n xu&acirc;n t&ocirc;i cũng trẩy hội theo tiếng n&ocirc; nức của lễ hội, của kh&ocirc;ng kh&iacute; ng&agrave;y xu&acirc;n nhưng c&ograve;n thiếu em. Đ&atilde; bao lần hẹn h&ograve; nhưng em kh&ocirc;ng đến v&agrave; bỏ qu&ecirc;n gi&acirc;y ph&uacute;t đẹp n&agrave;y.</p>\r\n\r\n<p>C&oacute; đ&acirc;u ngờ xu&acirc;n vắng người xưa.</p>\r\n', '1480925247-15135134.jpg', 'diary', 0, 'mong-uoc-tim-co-gai-xuan-xua-cho-voi-di-niem-nho-co-dau-ngo', '', 'Monday 5/12/2016, 03:07:27 pm', '', '', '', 0);
INSERT INTO `tin_tuc` (`id`, `idrandom`, `publishing`, `top`, `privated`, `tieu_de`, `icon`, `typenews`, `overShort`, `tom_tat`, `noi_dung`, `hinh`, `loai_tin`, `kieu_tin`, `url`, `user`, `created`, `updated`, `keyword`, `description`, `issetSurvey`) VALUES
(80, 0, 1, 0, 0, '7 sự kiện kinh tế - xã hội năm 2016', '0', 'detail', '', 'Chính phủ mới ra mắt trong bối cảnh nhiều thách thức khi GDP nhiệm kỳ trước không đạt mục tiêu, nợ công tăng cao, nhiều tỉnh trải qua sự cố môi trường chưa từng có. Dù vậy, bức tranh kinh tế - xã hội 2016 cũng ghi nhận những hứa hẹn bùng nổ khi số doanh nghiệp đăng ký mới đạt kỷ lục.', '<p><a href=\"http://vnexpress.net/dai-hoi-dang-lan-thu-12/topic-20234.html\"><strong>Bầu nh&acirc;n sự cấp cao</strong></a></p>\r\n\r\n<p>5 năm một lần, Đại hội XII của Đảng Cộng sản Việt Nam diễn ra hồi cuối th&aacute;ng 1 th&ocirc;ng qua quy chế bầu cử kh&ocirc;ng cho ph&eacute;p Ủy vi&ecirc;n Trung ương kh&oacute;a trước ứng cử hoặc nhận đề cử khi kh&ocirc;ng nằm trong quy hoạch nh&acirc;n sự.&nbsp;&Ocirc;ng Nguyễn Ph&uacute; Trọng t&aacute;i đắc cử Tổng b&iacute; thư nhiệm kỳ thứ hai, ki&ecirc;n định mục ti&ecirc;u &quot;vững bước tr&ecirc;n con đường đổi mới&quot;.</p>\r\n\r\n<p>Nửa năm sau, Quốc hội kh&oacute;a XIV đ&atilde; bầu v&agrave; ph&ecirc; chuẩn <a href=\"http://vnexpress.net/interactive/2016/chinh-phu-khoa-14\">27 th&agrave;nh vi&ecirc;n Ch&iacute;nh phủ</a> với 23 gương mặt mới, do &ocirc;ng Nguyễn Xu&acirc;n Ph&uacute;c (62 tuổi) l&agrave;m Thủ tướng.&nbsp;<span style=\"color:rgb(34,34,34)\">Th&agrave;nh vi&ecirc;n trẻ nhất l&agrave; Thống đốc Ng&acirc;n h&agrave;ng L&ecirc; Minh Hưng (46 tuổi). Duy nhất Bộ trưởng Nguyễn Thị Kim Tiến (57 tuổi) l&agrave; nữ v&agrave; kh&ocirc;ng phải Ủy vi&ecirc;n Trung ương.</span></p>\r\n\r\n<p><span style=\"color:rgb(34,34,34)\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Trang_nhat/HDT-6465-1459997534-660x0-7103-1482235346.jpg\" style=\"height:333px; margin:auto; width:500px\" /></span></p>\r\n\r\n<p>Ch&iacute;nh phủ nhiệm kỳ mới ngay lập tức phải đối mặt với c&aacute;c kh&oacute; khăn kinh tế; xử l&yacute; những sự cố m&ocirc;i trường lớn chưa từng c&oacute;...&nbsp;Để cải c&aacute;ch thể chế, cải thiện m&ocirc;i trường kinh doanh, h&agrave;ng loạt giấy ph&eacute;p con đ&atilde; được loại bỏ, tạo h&agrave;nh lang ph&aacute;p l&yacute; th&uacute;c đẩy bộ m&aacute;y chuyển động mạnh mẽ theo hướng từ quản l&yacute; sang phục vụ.</p>\r\n\r\n<p>Thủ tướng c&ugrave;ng c&aacute;c th&agrave;nh vi&ecirc;n Ch&iacute;nh phủ cũng c&oacute; nhiều hoạt động <a href=\"http://vnexpress.net/nhung-chuyen-thuc-te-cua-thanh-vien-chinh-phu/topic-21581.html\">th&acirc;m nhập thực tế</a>, lắng nghe những bức x&uacute;c của người d&acirc;n. Điều n&agrave;y mang lại kỳ vọng về một Ch&iacute;nh phủ &quot;gần d&acirc;n, li&ecirc;m ch&iacute;nh v&agrave; quyết liệt&quot; như th&ocirc;ng điệp Thủ tướng nhấn mạnh trong Lễ tuy&ecirc;n thệ nhậm chức trước Quốc hội.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/tinh-hinh-kinh-te-viet-nam-2016/topic-21573.html\"><strong>ăng trưởng GDP kh&ocirc;ng đạt mục ti&ecirc;u</strong></a></p>\r\n\r\n<p>Kinh tế Việt Nam đ&atilde; c&oacute; năm khởi động kế hoạch 2016-2020 kh&ocirc;ng thuận lợi khi tốc độ tăng trưởng GDP dự kiến chỉ đạt 6,3-6,5%, so với chỉ ti&ecirc;u 6,7% cũng như mục ti&ecirc;u trung b&igrave;nh của nhiệm kỳ 6,5-7%. Nguy&ecirc;n nh&acirc;n k&igrave;m h&atilde;m đ&agrave; tăng trưởng l&agrave; sự sụt giảm của c&ocirc;ng nghiệp khai kho&aacute;ng, n&ocirc;ng nghiệp chịu ảnh hưởng của thi&ecirc;n tai, sự cố m&ocirc;i trường v&agrave; gi&aacute; cả h&agrave;ng h&oacute;a tr&ecirc;n thế giới&hellip; Những yếu tố n&agrave;y cũng khiến xuất khẩu to&agrave;n nền kinh tế kh&ocirc;ng đạt mục ti&ecirc;u tăng trưởng 10%.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Trang_nhat/GDP-5744-1482235346.jpg\" style=\"height:300px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Tuy vậy, đời sống kinh tế - x&atilde; hội Việt Nam cũng ghi nhận những điểm s&aacute;ng khi Ch&iacute;nh phủ ho&agrave;n th&agrave;nh 11/13 chỉ ti&ecirc;u Quốc hội giao như: giữ tốc độ tăng gi&aacute; ti&ecirc;u d&ugrave;ng dưới 5%; giảm tỷ lệ hộ ngh&egrave;o, huyện ngh&egrave;o; n&acirc;ng tỷ lệ khu c&ocirc;ng nghiệp, khu chế xuất c&oacute; hệ thống xử l&yacute; chất thải tập trung đạt ti&ecirc;u chuẩn; b&ecirc;n cạnh đ&oacute; l&agrave; việc cổ phần h&oacute;a, tho&aacute;i vốn Nh&agrave; nước được thực hiện theo lộ tr&igrave;nh đề ra, thu h&uacute;t vốn đầu tư trực tiếp nước ngo&agrave;i (FDI) tăng.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/ca-bien-chet-hang-loat-o-mien-trung/topic-21057.html\"><strong>Thảm họa m&ocirc;i trường do Formosa xả thải</strong></a></p>\r\n\r\n<p>Đầu th&aacute;ng 4, hiện tượng c&aacute; biển chết h&agrave;ng loạt khởi nguồn từ&nbsp;khu kinh tế Vũng &Aacute;ng (thị x&atilde; Kỳ Anh, H&agrave; Tĩnh) lan ra suốt một dải 200 km bờ biển miền Trung.</p>\r\n\r\n<p>Lần đầu ti&ecirc;n trong lịch sử, Việt Nam đối diện với thảm họa m&ocirc;i trường ảnh hưởng cuộc sống của h&agrave;ng triệu người. 39.000 ngư d&acirc;n 4 tỉnh H&agrave; Tĩnh,&nbsp;Quảng B&igrave;nh, Quảng Trị, Thừa Thi&ecirc;n Huế mất việc, t&agrave;u thuyền nằm bờ suốt 8 th&aacute;ng. Ng&agrave;nh khai th&aacute;c thủy sản giảm 20% sản lượng, khiến GDP cả nước tăng dưới 6% sau 9 th&aacute;ng.</p>\r\n\r\n<p>Hơn hai th&aacute;ng cả hệ thống ch&iacute;nh trị v&agrave;o cuộc truy t&igrave;m nguy&ecirc;n nh&acirc;n, thủ phạm được chỉ ra l&agrave; chất thải của C&ocirc;ng ty TNHH Gang th&eacute;p Hưng Nghiệp Formosa H&agrave; Tĩnh đ&atilde; hủy diệt hệ sinh th&aacute;i một v&ugrave;ng đ&aacute;y biển.&nbsp;</p>\r\n\r\n<p>L&atilde;nh đạo C&ocirc;ng ty n&agrave;y đ&atilde; c&uacute;i đầu xin lỗi nh&acirc;n d&acirc;n Việt Nam, bồi thường thiệt hại 500 triệu USD. Ch&iacute;nh phủ cũng tiến h&agrave;nh nhiều biện ph&aacute;p mạnh mẽ&nbsp;siết chặt quản l&yacute; c&aacute;c&nbsp;nguồn &ocirc; nhiễm biển, hỗ trợ&nbsp;d&acirc;n kh&ocirc;i phục sinh kế. Tuy vậy, &quot;bao giờ biển miền Trung phục hồi?&quot; vẫn l&agrave; c&acirc;u hỏi nhức nhối khi 154 loại hải sản trong v&ograve;ng 13,5 hải l&yacute; gần bờ 4 tỉnh miền Trung chưa an to&agrave;n.</p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học nhận định phải mất h&agrave;ng trăm năm để khắc phục ho&agrave;n to&agrave;n &ocirc; nhiễm.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/tong-thong-my-obama-tham-viet-nam/topic-21130.html\"><strong>Tổng thống Mỹ Obama thăm Việt Nam</strong></a></p>\r\n\r\n<p>Tổng thống Mỹ Barack Obama hồi th&aacute;ng 5 c&oacute; chuyến thăm ch&iacute;nh thức Việt Nam đầu ti&ecirc;n trong hai nhiệm kỳ, nhằm củng cố ch&iacute;nh s&aacute;ch xoay trục sang ch&acirc;u &Aacute;, thắt chặt quan hệ về an ninh, kinh tế với một đối t&aacute;c đang ng&agrave;y c&agrave;ng c&oacute; vai tr&ograve; quan trọng trong khu vực, đặc biệt l&agrave; sau chuyến thăm của Tổng b&iacute; thư Nguyễn Ph&uacute; Trọng tới Mỹ cuối năm ngo&aacute;i.</p>\r\n\r\n<p>Tổng thống Mỹ đ&atilde; gặp gỡ, hội đ&agrave;m với c&aacute;c l&atilde;nh đạo Việt Nam, c&oacute; b&agrave;i ph&aacute;t biểu quan trọng về quan hệ Việt - Mỹ, tiếp x&uacute;c với th&agrave;nh vi&ecirc;n S&aacute;ng kiến L&atilde;nh đạo Trẻ Đ&ocirc;ng Nam &Aacute; (YSEALI) v&agrave; cộng đồng doanh nh&acirc;n.</p>\r\n\r\n<p>Trong chuyến thăm, &ocirc;ng Obama cũng tuy&ecirc;n bố dỡ bỏ ho&agrave;n to&agrave;n lệnh cấm vận vũ kh&iacute; với Việt Nam, quyết định được đ&aacute;nh gi&aacute; mang t&iacute;nh bước ngoặt trong mối quan hệ Việt - Mỹ, g&oacute;p phần n&acirc;ng cao v&agrave; l&agrave;m s&acirc;u sắc th&ecirc;m niềm tin chiến lược giữa đ&ocirc;i b&ecirc;n, đưa quan hệ đối t&aacute;c to&agrave;n diện đi v&agrave;o thực chất.</p>\r\n\r\n<p>T&igrave;nh cảm nồng hậu m&agrave; người d&acirc;n Việt Nam d&agrave;nh cho Tổng thống Mỹ suốt chuyến thăm khiến &ocirc;ng Obama phải thốt l&ecirc;n rằng sự th&acirc;n thiện &ldquo;đ&atilde; chạm tới tr&aacute;i tim t&ocirc;i&rdquo;, v&agrave; đ&oacute; cũng l&agrave; dấu hiệu r&otilde; r&agrave;ng hơn cả cho thấy một tương lai đầy triển vọng của mối quan hệ Việt - Mỹ.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/no-cong-no-chinh-phu-viet-nam-nam-2016/topic-21574.html\"><strong>Nợ Ch&iacute;nh phủ vượt trần</strong></a></p>\r\n\r\n<p>B&aacute;o c&aacute;o trước Quốc hội tại kỳ họp giữa năm, nợ của Ch&iacute;nh phủ lần đầu được c&ocirc;ng bố vượt trần 50% GDP năm 2015. Cuối năm nay, tỷ lệ n&agrave;y tiếp tục tăng l&ecirc;n mức 53,2%, khiến Ch&iacute;nh phủ phải xin Quốc hội nới trần nợ c&ocirc;ng giai đoạn 2016-2020 v&agrave; được chấp thuận ở mức 54% GDP.</p>\r\n\r\n<p>Việc&nbsp;tăng vay nợ của Ch&iacute;nh phủ năm 2016 chủ yếu&nbsp;nhằm b&ugrave; đắp bội chi, trả nợ c&ocirc;ng, chi đầu tư ph&aacute;t triển cũng như bảo l&atilde;nh c&aacute;c tổ chức, doanh nghiệp Nh&agrave; nước vay... Trong bối cảnh g&aacute;nh nặng trả nợ gia tăng c&ugrave;ng với việc t&aacute;i cơ cấu thời hạn vay, vấn đề kỷ luật chi ti&ecirc;u, đầu tư được đặt ra mạnh mẽ nhằm đảm bảo an ninh, nguồn lực t&agrave;i ch&iacute;nh cho Việt Nam trung v&agrave; d&agrave;i hạn.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/pho-chu-tich-hau-giang-dung-xe-tu-gan-bien-xanh/topic-21196.html\"><strong>Nhiều l&atilde;nh đạo cấp cao bị kỷ luật trong vụ &ocirc;ng Trịnh Xu&acirc;n Thanh</strong></a></p>\r\n\r\n<p>Nguy&ecirc;n bộ trưởng C&ocirc;ng Thương Vũ Huy Ho&agrave;ng bị c&aacute;ch chức B&iacute; thư Ban c&aacute;n sự đảng Bộ C&ocirc;ng Thương giai đoạn 2011-2016. Ba thứ trưởng đương nhiệm, hai l&atilde;nh đạo tỉnh ủy v&agrave; một cựu ph&oacute; ban Tổ chức Trung ương cũng nhận c&aacute;c h&igrave;nh thức kỷ luật v&igrave; &quot;c&oacute; khuyết điểm trong việc lu&acirc;n chuyển, khen thưởng &ocirc;ng Trịnh Xu&acirc;n Thanh&quot;</p>\r\n\r\n<p>Trước đ&oacute;, Tổng B&iacute; thư Nguyễn Ph&uacute; Trọng đề nghị 9 cơ quan v&agrave;o cuộc l&agrave;m r&otilde; th&ocirc;ng tin&nbsp;&ocirc;ng Trịnh Xu&acirc;n Thanh,&nbsp;Ph&oacute; chủ tịch Hậu Giang&nbsp;sử dụng xe Lexus c&aacute; nh&acirc;n trị gi&aacute; 5 tỷ đồng. Qu&aacute; tr&igrave;nh điều tra ph&aacute;t hiện loạt sai phạm trong bổ nhiệm &ocirc;ng n&agrave;y. Khi c&ograve;n l&agrave;m&nbsp;l&atilde;nh đạo chủ chốt của&nbsp;Tổng c&ocirc;ng ty x&acirc;y lắp dầu kh&iacute; Việt Nam (PVC), d&ugrave; c&ocirc;ng ty&nbsp;thua lỗ nặng, &ocirc;ng Thanh&nbsp;vẫn được cất nhắc l&ecirc;n vị tr&iacute; cao.&nbsp;Ủy ban Kiểm tra Trung ương nhận định, &quot;những vi phạm, khuyết điểm của c&aacute;c c&aacute;n bộ tr&ecirc;n đ&atilde; ảnh hưởng đến uy t&iacute;n của Đảng, Nh&agrave; nước, tạo dư luận xấu trong x&atilde; hội&quot;.</p>\r\n\r\n<p>&Ocirc;ng Thanh được cho l&agrave; đ&atilde; trốn ra nước ngo&agrave;i sau khi rời ghế Ph&oacute; chủ tịch UBND tỉnh Hậu Giang; bị hủy tư c&aacute;ch đại biểu Quốc hội; khai trừ khỏi Đảng.&nbsp;Bộ C&ocirc;ng an khởi tố &ocirc;ng Thanh tội Cố &yacute; l&agrave;m tr&aacute;i quy định của Nh&agrave; nước về quản l&yacute; kinh tế g&acirc;y hậu quả nghi&ecirc;m trọng.&nbsp;Tổng b&iacute; thư cho biết cơ quan chức năng đ&atilde; ph&aacute;t lệnh truy n&atilde; quốc tế, phối hợp c&ugrave;ng c&aacute;c nước với tinh thần &quot;bắt bằng được Trịnh Xu&acirc;n Thanh&quot;.</p>\r\n\r\n<p><a href=\"http://vnexpress.net/moi-truong-kinh-doanh-viet-nam-2016/topic-21570.html\"><strong>Số doanh nghiệp mới nhiều kỷ lục</strong></a></p>\r\n\r\n<p>Được Thủ tướng chọn l&agrave; năm quốc gia khởi nghiệp, 2016 cũng chứng kiến l&agrave;n s&oacute;ng doanh nghiệp mới th&agrave;nh lập nhiều chưa từng c&oacute;. T&iacute;nh đến hết 11 th&aacute;ng, số liệu của Bộ Kế hoạch v&agrave; Đầu tư cho thấy c&oacute; xấp xỉ 102.000 doanh nghiệp mới th&agrave;nh lập, so với con số cả năm 2015 l&agrave; hơn 94.700. C&ugrave;ng với đ&oacute;, cả nước c&oacute; hơn 24.500 doanh nghiệp trở lại hoạt động, tăng gần 32% so với c&ugrave;ng kỳ.</p>\r\n\r\n<p>C&aacute;c tổ chức kinh doanh gia nhập thị trường trong kh&ocirc;ng kh&iacute; khởi nghiệp s&ocirc;i động bởi cam kết của l&atilde;nh đạo đất nước về một Ch&iacute;nh phủ &quot;kiến tạo, phục vụ doanh nghiệp&quot;. Việt Nam cũng tăng 9 bậc về m&ocirc;i trường kinh doanh trong năm nay theo đ&aacute;nh gi&aacute; của Ng&acirc;n h&agrave;ng Thế giới nhờ cải thiện thủ tục th&agrave;nh lập doanh nghiệp, nộp thuế, tiếp cận điện năng&hellip;, song lại tụt hạng về năng lực cạnh tranh theo b&aacute;o c&aacute;o của Diễn đ&agrave;n Kinh tế Thế giới.</p>\r\n', '1482331501-HDT-6465-1459997534-660x0-7103-1482235346.jpg', 'top', 0, '7-su-kien-kinh-te-xa-hoi-nam-2016', '', 'Wednesday 21/12/2016, 09:45:01 pm', '', '', '', 0),
(86, 0, 1, 0, 0, 'Bí thư Đà Nẵng: \"Chịu trách nhiệm với quyết định xây hầm sông Hàn\"', '0', 'detail', '', 'Trước những ý kiến trái chiều về việc xây hầm vượt sông Hàn, ông Nguyễn Xuân Anh cho biết \"chúng tôi quyết định vì tầm nhìn thành phố và chịu trách nhiệm với quyết định của mình\"', '<p>S&aacute;ng 21/12, UBND TP Đ&agrave; Nẵng tổ chức họp b&aacute;o dưới sự chủ tr&igrave; của B&iacute; thư Th&agrave;nh ủy Nguyễn Xu&acirc;n Anh, Chủ tịch UBND th&agrave;nh phố Huỳnh Đức Thơ. L&atilde;nh đạo th&agrave;nh phố đ&atilde; d&agrave;nh gần một giờ l&yacute; giải về chủ trương x&acirc;y hầm vượt s&ocirc;ng H&agrave;n vốn đang nhiều dư luận tr&aacute;i chiều.</p>\r\n\r\n<p>Gi&aacute;m đốc Sở Giao th&ocirc;ng Vận tải L&ecirc; Văn Trung n&oacute;i, vị tr&iacute; l&agrave;m hầm vượt s&ocirc;ng H&agrave;n từ đoạn cuối đường Đống Đa (quận Hải Ch&acirc;u) sang đường Trần Hưng Đạo (quận Sơn Tr&agrave;) l&agrave; ph&ugrave; hợp quy hoạch của th&agrave;nh phố. Việc di dời ga đường sắt cũ sẽ h&igrave;nh th&agrave;nh trục giao th&ocirc;ng bắc nam xuống trung t&acirc;m th&agrave;nh phố, khớp nối với c&ocirc;ng tr&igrave;nh vượt s&ocirc;ng H&agrave;n n&agrave;y.</p>\r\n\r\n<p>Theo &ocirc;ng Trung, 5 năm qua, phương tiện giao th&ocirc;ng ở Đ&agrave; Nẵng tăng rất nhanh dẫn đến &ugrave;n tắc ở một số điểm. L&agrave;m th&ecirc;m c&ocirc;ng tr&igrave;nh vượt s&ocirc;ng H&agrave;n sẽ gi&uacute;p giảm &aacute;p lực phương tiện đi qua cầu quay.&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/x2-5953-1482312643.jpg\" style=\"height:350px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Năm 2015,&nbsp;l&atilde;nh đạo&nbsp;th&agrave;nh phố chỉ đạo Sở Giao th&ocirc;ng tham mưu l&agrave;m c&ocirc;ng tr&igrave;nh vượt s&ocirc;ng H&agrave;n. Sở đ&atilde; nhiều lần mời c&aacute;c chuy&ecirc;n gia đầu ng&agrave;nh, sau đ&oacute; phối hợp với UBND th&agrave;nh phố thi tuyển phương &aacute;n.&nbsp;Đa số đơn vị tư vấn chọn l&agrave;m cầu, số &iacute;t chọn l&agrave;m hầm. Tuy nhi&ecirc;n, ban gi&aacute;m khảo x&eacute;t thấy tất cả phương &aacute;n cầu đều kh&ocirc;ng đạt thẩm mỹ v&agrave; nhu cầu tổ chức giao th&ocirc;ng.</p>\r\n\r\n<p>Th&aacute;ng 10/2016, th&agrave;nh phố quyết định l&agrave;m hầm v&agrave; y&ecirc;u cầu Sở Giao th&ocirc;ng tiếp tục nghi&ecirc;n cứu.&nbsp;&quot;Ch&uacute;ng t&ocirc;i c&oacute; hai phương &aacute;n hầm. Một l&agrave; nối thẳng từ đường Đống Đa sang b&ecirc;n kia s&ocirc;ng, hai l&agrave; nối từ Đống Đa qua đường Như Nguyệt rồi vượt s&ocirc;ng H&agrave;n. Phương &aacute;n hầm thẳng c&oacute; nhiều thuận lợi về tổ chức giao th&ocirc;ng nhưng phải giải tỏa tr&ecirc;n 210 hộ d&acirc;n&quot;, &ocirc;ng Trung th&ocirc;ng tin.</p>\r\n\r\n<p>Trước việc hai cựu Chủ tịch Đ&agrave; Nẵng chưa đồng t&igrave;nh chủ trương x&acirc;y hầm, &ocirc;ng Trung cho biết đ&atilde; trao đổi lại với &ocirc;ng Trần Văn Minh v&agrave; &ocirc;ng Văn Hữu Chiến. Hai nguy&ecirc;n l&atilde;nh đạo kh&ocirc;ng phản đối nhưng đề nghị nghi&ecirc;n cứu kỹ, tr&aacute;nh ph&aacute; vỡ quy hoạch s&ocirc;ng H&agrave;n. Li&ecirc;n hiệp c&aacute;c Hội Khoa học v&agrave; Kỹ thuật th&agrave;nh phố Đ&agrave; Nẵng, nơi &ocirc;ng Văn Hữu Chiến l&agrave;m Chủ tịch, ủng hộ phương &aacute;n l&agrave;m cầu.&nbsp;</p>\r\n\r\n<p>Ri&ecirc;ng &yacute; kiến về n&acirc;ng cấp cầu Thuận Phước, &ocirc;ng Trung khẳng định kh&ocirc;ng thể được, v&igrave; mố neo kh&ocirc;ng cho ph&eacute;p chịu lực. C&ograve;n mở rộng cầu s&ocirc;ng H&agrave;n thực hiện được nhưng ảnh hưởng đến kết cấu nhịp quay, mất đi t&iacute;nh biểu tượng của c&acirc;y cầu v&agrave; v&ocirc; h&igrave;nh chung k&eacute;o th&ecirc;m phương tiện đổ về trung t&acirc;m.</p>\r\n\r\n<p>B&agrave;y tỏ quan điểm, B&iacute; thư Th&agrave;nh ủy Đ&agrave; Nẵng Nguyễn Xu&acirc;n Anh n&oacute;i vừa qua đ&atilde; nghe nhiều &yacute; kiến rằng chủ trương vội v&atilde;, kh&ocirc;ng n&ecirc;n l&agrave;m hầm... &quot;T&ocirc;i tham gia v&agrave;o bộ m&aacute;y l&atilde;nh đạo th&agrave;nh phố nhiều năm, kinh qua nhiều vị tr&iacute;, t&ocirc;i cũng hiểu được cơ chế vận h&agrave;nh. C&oacute; thể khẳng định đ&acirc;y l&agrave; dự &aacute;n được th&agrave;nh phố chuẩn bị rất kỹ, kỹ nhất trong c&aacute;c dự &aacute;n&quot;, &ocirc;ng ph&aacute;t biểu.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/xa1-4905-1482312643.jpg\" style=\"height:350px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Theo &ocirc;ng Xu&acirc;n Anh, hơn một năm qua, Ban thường vụ Th&agrave;nh ủy họp đến phi&ecirc;n thứ 3&nbsp;mới thống nhất được chủ trương l&agrave;m hầm vượt s&ocirc;ng H&agrave;n, với đa số ủng hộ. Phi&ecirc;n thứ 4 sẽ diễn ra v&agrave;o tuần sau để nghe b&aacute;o c&aacute;o phương &aacute;n t&agrave;i ch&iacute;nh, ri&ecirc;ng thời gian khởi c&ocirc;ng chưa được quyết định.</p>\r\n\r\n<p>&quot;Ch&uacute;ng t&ocirc;i l&agrave; những người trong cuộc, hiểu rất r&otilde; c&aacute;ch thức vận h&agrave;nh, rất d&acirc;n chủ, kỹ c&agrave;ng, lắng nghe &yacute; kiến nhiều chiều, kh&ocirc;ng vội v&atilde;. Kh&ocirc;ng c&oacute; c&ocirc;ng tr&igrave;nh n&agrave;o m&agrave; Ban thường vụ họp tới 4 lần chỉ để cho một c&aacute;i chủ trương&quot;, &ocirc;ng chia sẻ.</p>\r\n\r\n<p>&quot;Quan điểm l&agrave; ch&uacute;ng t&ocirc;i sẽ c&acirc;n nhắc quyết định tr&ecirc;n tinh thần v&igrave; sự ph&aacute;t triển v&agrave; tầm nh&igrave;n của th&agrave;nh phố, v&igrave; tương lai của th&agrave;nh phố. Ch&uacute;ng t&ocirc;i l&agrave; l&atilde;nh đạo của th&agrave;nh phố, h&atilde;y cho ch&uacute;ng t&ocirc;i thẩm quyền quyết định.&nbsp;Ch&uacute;ng t&ocirc;i kh&ocirc;ng ngồi tr&ecirc;n dư luận, kh&ocirc;ng bất chấp dư luận, nhưng kh&ocirc;ng chạy theo dư luận. Ch&uacute;ng t&ocirc;i sẽ chịu tr&aacute;ch nhiệm với quyết định của m&igrave;nh&quot;, B&iacute; thư Đ&agrave; Nẵng nhấn mạnh.</p>\r\n\r\n<p>&Ocirc;ng Xu&acirc;n Anh n&oacute;i th&ecirc;m, nhiều chuy&ecirc;n gia uy t&iacute;n khuy&ecirc;n n&ecirc;n l&agrave;m hầm v&igrave; trời mưa gi&oacute; b&agrave; con c&oacute; lối qua lại, mưa b&atilde;o qua cầu gặp kh&oacute; khăn.&nbsp;</p>\r\n\r\n<p>Chủ tịch Huỳnh Đức Thơ cho biết th&ecirc;m, &quot;l&agrave;m hầm tốn hơn 1.000 tỷ đồng so với l&agrave;m cầu. V&agrave; nếu l&agrave;m thẳng từ cuối đường Đống Đa sẽ tốn th&ecirc;m 800 tỷ đồng nữa để phải ph&oacute;ng mặt bằng nhưng sẽ cố l&agrave;m&quot; v&agrave; &quot;kh&ocirc;ng c&oacute; chuyện l&agrave;m hầm để được nổi tiếng&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1482331993-xa1-4905-1482312643.jpg', 'news', 0, 'bi-thu-da-nang-chiu-trach-nhiem-voi-quyet-dinh-xay-ham-song-han', 'PhamlucBlog', 'Wednesday 21/12/2016, 09:53:13 pm', '', '', '', 0),
(91, 0, 1, 0, 0, 'Lý do người 4 lần bị tuyên án tử được trả tự do', '0', 'detail', '', 'Ngày 20/12, VKSND tỉnh Bắc Giang phủ quyết toàn bộ kết luận điều tra lại vụ án của Công an tỉnh Bắc Giang, qua đó xác định không đủ căn cứ truy cứu trách nhiệm hình sự với Hàn Đức Long.', '<p>Bằng quyết định đ&igrave;nh chỉ điều tra vụ &aacute;n ban h&agrave;nh ng&agrave;y 20/12 của VKSND tỉnh Bắc Giang, người 4 lần bị kết &aacute;n tử h&igrave;nh H&agrave;n Đức Long đ&atilde; được rời trại giam trở về nh&agrave; v&agrave;o c&ugrave;ng ng&agrave;y.&nbsp;</p>\r\n\r\n<p>Theo hồ sơ của cơ quan c&ocirc;ng an, n<span style=\"color:rgb(0,0,0)\">g&agrave;y 19/10/2005, &ocirc;ng Long H&agrave;n Đức Long đầu th&uacute; v&agrave; khai nhận h&agrave;nh vi hiếp d&acirc;m 2 phụ nữ c&ugrave;ng th&ocirc;n. Ng&agrave;y 29/10/2005, &ocirc;ng Long khai đ&atilde; hiếp d&acirc;m, giết c&ocirc; b&eacute; h&agrave;ng x&oacute;m 5 tuổi. Theo lời khai,&nbsp;</span><span style=\"color:rgb(0,0,0)\">chiều tối ng&agrave;y 26/6/2005, &ocirc;ng Long đến qu&aacute;n của anh Di&ecirc;m Quang Nam để x&aacute;t th&oacute;c v&agrave; nghiền ng&ocirc;. Trong l&uacute;c chờ đến lượt xay x&aacute;t, &ocirc;ng Long đi sang qu&aacute;n b&ecirc;n cạnh th&igrave; gặp b&eacute; 5 tuổi đang ngồi chơi ở bụi tre trước s&acirc;n. Lợi dụng l&uacute;c trời nh&aacute; nhem tối lại vắng người, &ocirc;ng đ&atilde; bịt miệng v&agrave; &ocirc;m đứa trẻ ra c&aacute;nh đồng...</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qua nhiều phi&ecirc;n t&ograve;a v&agrave; nhiều lần điều tra lại, TAND tỉnh Bắc Giang v&agrave; T&ograve;a ph&uacute;c thẩm T&ograve;a &aacute;n nh&acirc;n d&acirc;n tối cao tại H&agrave; Nội c&ugrave;ng tuy&ecirc;n phạt &ocirc;ng Long &aacute;n tử h&igrave;nh về tội Hiếp d&acirc;m trẻ em v&agrave; Giết người. Ở h&agrave;nh vi thứ ba l&agrave; Hiếp d&acirc;m, &ocirc;ng Long được x&aacute;c định kh&ocirc;ng phạm tội.</p>\r\n\r\n<p>Ng&agrave;y 20/11/2014, Hội đồng thẩm ph&aacute;n TAND Tối cao tuy&ecirc;n hủy bản &aacute;n h&igrave;nh sự ph&uacute;c thẩm số 706/2014 ng&agrave;y 29/11/2011 của TAND Tối cao tại H&agrave; Nội v&agrave; bản &aacute;n h&igrave;nh sự sơ thẩm số 48/2011/HSST ng&agrave;y 24/9/2011 của TAND tỉnh Bắc Giang để điều tra lại.</p>\r\n\r\n<p>Ng&agrave;y 20/12, VKSND tỉnh Bắc Giang nhận thấy kết quả điều tra lại của Cơ quan Cảnh s&aacute;t điều tra C&ocirc;ng an tỉnh Bắc Giang theo quyết định gi&aacute;m đốc thẩm của Hội đồng thẩm ph&aacute;n TAND Tối cao, cho thấy chưa đủ căn cứ để truy cứu tr&aacute;ch nhiệm h&igrave;nh sự với &ocirc;ng Long về c&aacute;c tội danh bị khởi tố. V&igrave; vậy, Viện đ&igrave;nh chỉ điều tra vụ &aacute;n với bị can H&agrave;n Đức Long.&nbsp;</p>\r\n\r\n<p>VKSND tỉnh Bắc Giang y&ecirc;u cầu C&ocirc;ng an tỉnh Bắc Giang, UBND x&atilde; Ph&uacute;c Sơn (huyện T&acirc;n Uy&ecirc;n, Bắc Giang) phục hồi c&aacute;c quyền, lợi &iacute;ch hợp ph&aacute;p cho &ocirc;ng Long theo quy định của ph&aacute;p luật.&nbsp;</p>\r\n\r\n<p>Ng&agrave;y 21/12, trao đổi với <em>VnExpress</em>, luật sư Ng&ocirc; Ngọc Trai (tham gia từ phi&ecirc;n sơ thẩm lần hai) cho biết, vụ &aacute;n c&oacute; rất nhiều nh&acirc;n chứng nhưng kh&ocirc;ng ai trực tiếp nh&igrave;n thấy &ocirc;ng Long g&acirc;y &aacute;n. Họ chỉ kể quanh về thời điểm trước khi sự việc xảy ra: &ocirc;ng Long đi s&aacute;t gạo thế n&agrave;o, c&oacute; ai c&ugrave;ng ở điểm xay x&aacute;t&hellip;</p>\r\n\r\n<p>Theo luật sư, kết quả gi&aacute;m định tinh tr&ugrave;ng thu được tr&ecirc;n thi thể ch&aacute;u b&eacute; sau khi gi&aacute;m định lại kh&ocirc;ng x&aacute;c định được l&agrave; của ai. &quot;Nh&acirc;n chứng kh&ocirc;ng c&oacute;, vật chứng cũng kh&ocirc;ng, việc kết tội &ocirc;ng Long chỉ dựa tr&ecirc;n lời khai&quot;, luật sư n&oacute;i.</p>\r\n\r\n<p>&quot;Việc đ&igrave;nh chỉ vụ &aacute;n v&agrave; trả tự do với &ocirc;ng H&agrave;n Đức Long khi chưa t&igrave;m được hung thủ thực sự l&agrave; cuộc c&aacute;ch mạng đột ph&aacute; với nền tư ph&aacute;p Việt Nam. Bởi nếu kh&ocirc;ng c&oacute; đủ căn cứ kết tội th&igrave; đương nhi&ecirc;n phải tuy&ecirc;n người đ&oacute;&nbsp;v&ocirc; tội&quot;, luật sư Trai n&ecirc;u quan điểm.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1482332681-long-1482296573_180x108.jpg', 'news', 0, 'ly-do-nguoi-4-lan-bi-tuyen-an-tu-duoc-tra-tu-do', '', 'Wednesday 21/12/2016, 10:04:41 pm', '', '', '', 0),
(92, 0, 1, 0, 0, 'Cuộc đại cải tổ guồng máy Washington của Donald Trump', '0', 'detail', '', 'Bộ máy nội các Donald Trump, một đội ngũ ông chủ, thay vì giới học giả, trí thức như thường thấy, có thể làm thay đổi toàn diện hệ thống quyền lực Washington.', '<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/Anh-1-3800-1482220431.jpg\" style=\"height:333px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Đến nay, tổng thống đắc cử Mỹ Donald Trump đ&atilde; bổ nhiệm 21 th&agrave;nh vi&ecirc;n nội c&aacute;c v&agrave; cố vấn Nh&agrave; Trắng. Phần lớn họ đều l&agrave; những người mang nhiều n&eacute;t tương đồng với nh&agrave; t&agrave;i phiệt New York: lớn tuổi, da trắng, gi&agrave;u c&oacute;, d&aacute;m chấp nhận rủi ro, c&oacute; kỹ năng đ&agrave;m ph&aacute;n l&atilde;o luyện v&agrave; th&iacute;ch l&agrave;m hơn n&oacute;i, theo <em>Reuters</em>.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh vận động tranh cử, Trump từng tuy&ecirc;n bố bộ m&aacute;y cầm quyền ở Washington đ&atilde; &quot;rạn nứt&quot; v&agrave; bị thao t&uacute;ng bởi c&aacute;c lợi &iacute;ch đặc biệt, đồng thời &ocirc;ng cam kết sẽ &quot;th&aacute;o sạch nguồn nước độc hại tại đầm lầy Washington&quot;. Thực tế cho thấy tỷ ph&uacute; Mỹ hầu như tr&aacute;nh chọn lựa những nh&agrave; kỹ trị c&oacute; kinh nghiệm l&agrave;m việc nhiều năm trong ch&iacute;nh quyền, thay v&agrave;o đ&oacute;, &ocirc;ng x&acirc;y dựng một đội ngũ &quot;&ocirc;ng chủ&quot; cho nội c&aacute;c mới.</p>\r\n\r\n<p>Tập hợp những &ocirc;ng chủ</p>\r\n\r\n<p>Những chỉ định của Trump cho c&aacute;c chức danh bộ trưởng v&agrave; cố vấn r&otilde; r&agrave;ng thiếu vắng giới tr&iacute; thức, luật sư hay học giả, những người thường được c&aacute;c tổng thống đời trước săn t&igrave;m. Nắm giữ c&aacute;c vị tr&iacute; n&agrave;y hiện nay lại l&agrave; những &ocirc;ng tr&ugrave;m giới kinh doanh v&agrave; t&agrave;i ch&iacute;nh, v&iacute; dụ như Steven Mnuchin, cựu l&atilde;nh đạo cấp cao ng&acirc;n h&agrave;ng đầu tư Goldman Sachs, hay Rex Tillerson, gi&aacute;m đốc điều h&agrave;nh tập đo&agrave;n dầu kh&iacute; Exxon Mobil (hai người m&agrave; &ocirc;ng Trump lần lượt bổ nhiệm v&agrave;o ghế Bộ trưởng T&agrave;i ch&iacute;nh v&agrave; Ngoại trưởng), c&ugrave;ng ba tướng về hưu.</p>\r\n\r\n<p>Nhiều c&aacute;i t&ecirc;n trong danh s&aacute;ch bổ nhiệm của Trump quen với việc bắt người kh&aacute;c l&agrave;m theo &yacute; m&igrave;nh nhưng giờ đ&acirc;y, họ phải l&agrave;m việc dưới quyền một &ocirc;ng chủ kh&aacute;c: tổng thống đắc cử Mỹ Trump.</p>\r\n\r\n<p>Giới chuy&ecirc;n gia nhận định ch&iacute;nh quyền Trump tương lai c&oacute; thể sẽ ph&aacute; bỏ những th&agrave;nh tựu của Tổng thống Barack Obama ở mức tối đa, đồng thời nỗ lực th&uacute;c đẩy một chương tr&igrave;nh nghị sự ch&iacute;nh s&aacute;ch bảo thủ đối với một số lĩnh vực như thuế hay y tế.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/Anh-2-1874-1482220431.jpg\" style=\"height:375px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Một cựu quan chức cấp cao ch&iacute;nh phủ Mỹ quen biết Rex Tillerson v&agrave; tướng thủy qu&acirc;n lục chiến James Mattis (người &ocirc;ng Trump chỉ định v&agrave;o ghế Bộ trưởng Quốc ph&ograve;ng), dự đo&aacute;n sẽ xuất hiện &quot;c&uacute; va chạm mạnh&quot; giữa những c&aacute;i t&ocirc;i trong nội c&aacute;c mới.</p>\r\n\r\n<p>Tillerson v&agrave; Mattis &quot;đ&atilde; quen với việc l&agrave;m chủ bất kỳ kh&ocirc;ng gian n&agrave;o m&agrave; họ c&oacute; mặt v&agrave; kh&ocirc;ng gian n&agrave;y giờ đ&acirc;y sẽ bao gồm Ph&ograve;ng T&igrave;nh huống v&agrave; thậm ch&iacute; cả Ph&ograve;ng Bầu dục&quot;, vị cựu quan chức giấu t&ecirc;n n&oacute;i.</p>\r\n\r\n<p>Ban chuyển giao quyền lực của Trump cho biết nội c&aacute;c mới sẽ l&agrave; sự kết hợp giữa những người c&oacute; kinh nghiệm l&agrave;m việc ở Washington v&agrave; những người mới. Tuy nhi&ecirc;n, lịch sử cho thấy c&aacute;c tổng thống mang những mối quan hệ b&ecirc;n ngo&agrave;i đến Washington đ&ocirc;i khi phạm những sai lầm đắt gi&aacute;, chuy&ecirc;n gia b&igrave;nh luận.</p>\r\n\r\n<p>Trong 21 th&agrave;nh vi&ecirc;n nội c&aacute;c v&agrave; cố vấn Nh&agrave; Trắng m&agrave; Trump lựa chọn đến nay c&oacute; 16 người l&agrave; đ&agrave;n &ocirc;ng da trắng, 4 người l&agrave; nữ giới v&agrave; chưa ai c&oacute; kinh nghiệm l&agrave;m việc ở những cơ quan cấp cao trực thuộc ch&iacute;nh quyền. Một số người c&ograve;n từng ở vị thế đối đầu với c&aacute;c cơ quan m&agrave; họ dự kiến l&atilde;nh đạo nếu thượng viện Mỹ ph&ecirc; chuẩn.</p>\r\n\r\n<p>Ngo&agrave;i ra, những người mới được bổ nhiệm c&ograve;n bao gồm một người Mỹ gốc Phi, một người Mỹ gốc &Aacute; v&agrave; một người Mỹ gốc Italy. Kh&ocirc;ng c&oacute; bất kỳ người gốc T&acirc;y Ban Nha n&agrave;o.</p>\r\n\r\n<p>Julian Zelizer, nh&agrave; sử học nghi&ecirc;n cứu về tổng thống Mỹ từ Đại học Princeton, đ&aacute;nh gi&aacute; Trump đang x&acirc;y dựng một bộ m&aacute;y nội c&aacute;c với những gương mặt phản chiếu h&igrave;nh ảnh &ocirc;ng: ăn n&oacute;i thẳng v&agrave; c&oacute; kinh nghiệm thực tế.</p>\r\n\r\n<p>&quot;Bổ nhiệm một đội ngũ xung quanh m&igrave;nh với những gương mặt trong giới qu&acirc;n sự v&agrave; t&agrave;i ch&iacute;nh chắc chắn gửi đi một th&ocirc;ng điệp n&agrave;o đ&oacute;. C&oacute; lẽ Trump tự xem bản th&acirc;n như một dạng chuy&ecirc;n gia đ&agrave;m ph&aacute;n quyết liệt&quot;, Zelizer n&oacute;i.</p>\r\n\r\n<p>Đương đầu th&aacute;ch thức</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo những người am hiểu vấn đề, c&aacute;c nh&acirc;n sự mới ở Washington lu&ocirc;n trong t&acirc;m thế sẵn s&agrave;ng đ&oacute;n nhận th&aacute;ch thức. Hạ nghị sĩ Cộng h&ograve;a Tom Price, quan chức được &ocirc;ng Trump cất nhắc v&agrave;o vị tr&iacute; Bộ trưởng Y tế v&agrave; Dịch vụ X&atilde; hội l&agrave; người &quot;c&oacute; bản chất quyết đo&aacute;n&quot;, hạ nghị sĩ Cộng h&ograve;a Tom Colem nhận x&eacute;t. Colem cho hay &ocirc;ng tin tưởng v&agrave;o năng lực của Price với tư c&aacute;ch một b&aacute;c sĩ phẫu thuật.</p>\r\n\r\n<p>Ben Carson, người được Trump bổ nhiệm l&agrave;m Bộ trưởng Nh&agrave; ở v&agrave; Ph&aacute;t triển Đ&ocirc; thị, cũng từng l&agrave; b&aacute;c sĩ phẫu thuật.</p>\r\n\r\n<p>Henry Brem, một b&aacute;c sĩ phẫu thuật thần kinh từng l&agrave;m việc với Carson tại Bệnh viện Johns Hopkins ở Baltimore, cho biết Carson l&agrave; người c&oacute; &quot;c&aacute;i đầu lạnh&quot; v&agrave; kh&ocirc;ng e ngại đưa ra những &yacute; kiến gai g&oacute;c.</p>\r\n\r\n<p>Carson &quot;l&agrave; một qu&yacute; &ocirc;ng, lu&ocirc;n biết c&aacute;ch n&oacute;i ra những suy nghĩ trong đầu v&agrave; c&oacute; những &yacute; tưởng lớn. Kh&ocirc;ng ai tr&ecirc;n thế giới n&agrave;y đủ sức l&agrave;m &ocirc;ng ấy sợ h&atilde;i&quot;, Brem n&oacute;i.</p>\r\n\r\n<p>Theo James Henson, gi&aacute;m đốc Dự &aacute;n Ch&iacute;nh trị Texas thuộc Đại học Texas, Rick Perry, người được Trump chọn v&agrave;o ghế Bộ trưởng Năng lượng, từng giữ chức thống đốc bang Texas trong ba nhiệm kỳ, cần phải &quot;dung h&ograve;a giữa nh&oacute;m cử tri ủng hộ &ocirc;ng c&oacute; quan điểm bảo thủ v&agrave; ng&agrave;y c&agrave;ng khắt khe về tư tưởng với một cộng đồng kinh doanh đầy thế lực&quot;.</p>\r\n\r\n<p>&quot;Nhưng việc &ocirc;ng ấy c&oacute; thể l&agrave;m được như vậy hay kh&ocirc;ng trong một bộ m&aacute;y h&agrave;nh ch&iacute;nh rườm r&agrave;, trong một m&ocirc;i trường c&oacute; t&iacute;nh cạnh tranh cao như nội c&aacute;c với nhiều c&aacute;i t&ocirc;i lớn lại l&agrave; vấn đề kh&aacute;c&quot;, Henson nhấn mạnh.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, nhiều gương mặt m&agrave; Trump lựa chọn chưa bao giờ giữ bất kỳ chức vụ n&agrave;o trong bộ m&aacute;y ch&iacute;nh quyền v&agrave; chỉ một số &iacute;t c&oacute; kinh nghiệm trong hoạch định ch&iacute;nh s&aacute;ch, v&iacute; dụ như gi&aacute;m đốc điều h&agrave;nh Exxon Mobil Rex Tillerson, cựu l&atilde;nh đạo cấp cao ng&acirc;n h&agrave;ng Goldman Sachs Steven Mnuchin, tỷ ph&uacute; Wilbur Ross (được Trump chọn v&agrave;o ghế Bộ trưởng Thương mại) v&agrave; chủ tịch ki&ecirc;m gi&aacute;m đốc hoạt động ng&acirc;n h&agrave;ng Goldman Sachs Gary Cohn (được Trump chỉ định l&agrave;m gi&aacute;m đốc Hội đồng Kinh tế Quốc gia).</p>\r\n\r\n<p>Năm 2008, Mnuchin dẫn đầu một nh&oacute;m nh&agrave; đầu tư mua lại ng&acirc;n h&agrave;ng IndyMac bị ph&aacute; sản trong cuộc khủng hoảng t&agrave;i ch&iacute;nh to&agrave;n cầu v&agrave; sau đ&oacute; chuyển đổi n&oacute; th&agrave;nh ng&acirc;n h&agrave;ng Onewest m&agrave; giờ đ&acirc;y l&agrave; một ng&acirc;n h&agrave;ng b&aacute;n lẻ ph&aacute;t triển mạnh mẽ ở California.</p>\r\n\r\n<p>Kevin Kelly, một đối t&aacute;c quản l&yacute; thuộc c&ocirc;ng ty đầu tư Recon Capital Partners tại th&agrave;nh phố Stamford, bang Connecticut, đ&aacute;nh gi&aacute; sự nhạy b&eacute;n ở thế giới thực như vậy c&oacute; thể gi&uacute;p ch&iacute;nh phủ hoạt động hiệu quả hơn.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/Anh-3-3583-1482220431.jpg\" style=\"height:281px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Giải ph&aacute;p đưa người ngoại đạo ch&iacute;nh trị v&agrave;o nội c&aacute;c kh&ocirc;ng phải l&uacute;c n&agrave;o cũng hiệu quả. Năm 2001, Paul O&#39;Neill, gi&aacute;m đốc điều h&agrave;nh tập đo&agrave;n sản xuất nh&ocirc;m Alcoa, được bổ nhiệm v&agrave;o ghế Bộ trưởng T&agrave;i ch&iacute;nh dưới thời tổng thống George W. Bush nhưng &ocirc;ng đ&atilde; g&acirc;y hoảng loạn cho thị trường bằng một loạt ph&aacute;t biểu sơ suất, b&aacute;o hiệu những thay đổi ch&iacute;nh s&aacute;ch kinh tế kh&aacute;c với lập trường của Nh&agrave; Trắng. Cuối c&ugrave;ng, O&#39;Neill bị sa thải.</p>\r\n\r\n<p>&quot;Quản l&yacute; c&aacute;c cơ quan c&ocirc;ng vụ lớn thực sự l&agrave; c&ocirc;ng việc kh&oacute; khăn v&agrave; đ&ograve;i hỏi phải c&oacute; những con người gi&agrave;u kinh nghiệm, hiểu biết, đồng thời phải l&agrave;m việc theo đường lối kh&ocirc;ng xa rời người d&acirc;n&quot;, Thomas Mann, học giả về quản trị từ Viện Brookings, n&oacute;i.</p>\r\n\r\n<p>Anthony Scaramucci, một cố vấn trong ban chuyển giao quyền lực của tổng thống đắc cử Mỹ, thừa nhận việc qu&aacute; thiếu kinh nghiệm c&oacute; thể g&acirc;y nguy hại cho ch&iacute;nh quyền Trump vẫn c&ograve;n non trẻ .</p>\r\n\r\n<p>&quot;Washington l&agrave; một hệ thống miễn dịch thực sự khỏe mạnh. Bạn sẽ chứng kiến một cuộc đ&agrave;o thải dữ dội nếu bạn đưa qu&aacute; nhiều kẻ g&acirc;y x&aacute;o trộn nguy&ecirc;n trạng đến Washington&quot;, Scaramucci cảnh b&aacute;o.</p>\r\n', '1482332828-donaldtrumpsweaty-1482219935_180x108.jpg', 'news', 0, 'cuoc-dai-cai-to-guong-may-washington-cua-donald-trump', '', 'Wednesday 21/12/2016, 10:07:08 pm', '', '', '', 0),
(93, 0, 1, 0, 1, 'Xuân Trường thanh lý hợp đồng với Incheon', '0', 'detail', 'Cầu thủ người Tuyên Quang sẽ tiếp tục thi đấu tại giải vô địch Hàn Quốc - K-League 2017, nhưng trong màu áo Gangwon. ...', 'Cầu thủ người Tuyên Quang sẽ tiếp tục thi đấu tại giải vô địch Hàn Quốc - K-League 2017, nhưng trong màu áo Gangwon. ', '<p>Hợp đồng của Xu&acirc;n Trường với Incheon United c&ograve;n một năm. Tuy nhi&ecirc;n, h&ocirc;m qua 20/12, tiền vệ người Tuy&ecirc;n Quang đ&atilde; ho&agrave;n tất việc thanh l&yacute; hợp đồng.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/a1-4962-1482318178.jpg\" style=\"height:304px; margin:auto; width:500px\" /></p>\r\n\r\n<p>&quot;M&ugrave;a giải vừa qua Xu&acirc;n Trường được thi đấu &iacute;t. Điều n&agrave;y ảnh hưởng tới chuy&ecirc;n m&ocirc;n của cầu thủ n&agrave;y. V&igrave; vậy, bầu Đức quyết định để Xu&acirc;n Trường thanh l&yacute; hợp đồng với Incheon. Bến đỗ mới của Xu&acirc;n Trường l&agrave; Gangwon. Đội b&oacute;ng n&agrave;y mới gi&agrave;nh quyền l&ecirc;n chơi K-League, v&agrave; họ c&oacute; thể đ&aacute;p ứng y&ecirc;u cầu được ra s&acirc;n thường xuy&ecirc;n của Xu&acirc;n Trường&quot;, Trưởng đo&agrave;n b&oacute;ng đ&aacute; HAGL Nguyễn Tấn Anh chia sẻ với <em>VnExpress.</em></p>\r\n\r\n<p>&Ocirc;ng Tấn Anh cho biết ng&agrave;y mai 22/12, đại diện của CLB Gangwon sẽ bay sang Việt Nam, đ&agrave;m ph&aacute;n c&ugrave;ng bầu Đức về chuyện k&yacute; hợp đồng với Xu&acirc;n Trường.&nbsp;</p>\r\n\r\n<p>Gangwon ch&iacute;nh l&agrave; CLB cử đội U21 dự giải U21 Quốc tế đang diễn ra tại TP HCM.</p>\r\n\r\n<p>B&ecirc;n cạnh trường hợp của Xu&acirc;n Trường, bầu Đức cũng kh&ocirc;ng đồng &yacute; để Tuấn Anh, C&ocirc;ng Phượng k&yacute; hợp đồng mới với Mito Hollyhock v&agrave; Yokohama. Tỷ ph&uacute; họ Đo&agrave;n muốn hai cầu thủ con cưng thường xuy&ecirc;n được thi đấu để ph&aacute;t triển chuy&ecirc;n m&ocirc;n, chuẩn bị cho SEA Games 2017. V&igrave; vậy, &ocirc;ng đưa bộ đ&ocirc;i cầu thủ n&agrave;y về kho&aacute;c &aacute;o HAGL tranh t&agrave;i tại V-League.</p>\r\n', '1482333015-a1-4962-1482318178.jpg', 'news', 0, 'xuan-truong-thanh-ly-hop-dong-voi-incheon', '', 'Wednesday 21/12/2016, 10:10:15 pm', '', '', '', 0),
(95, 0, 1, 0, 0, 'Một số quận ở TP HCM được đề xuất sáp nhập', '0', 'detail', '', 'Theo Phó giám đốc Sở Nội vụ TP HCM Đỗ Văn Đạo, việc sáp nhập quận 4 vào một quận khác sẽ tinh giản biên chế, vì diện tích ở đây quá nhỏ mà vẫn cần đầy đủ bộ máy hành chính.', '<p>Tại buổi l&agrave;m việc của B&iacute; thư Th&agrave;nh ủy Đinh La Thăng với Quận uỷ B&igrave;nh T&acirc;n chiều 23/12, &ocirc;ng Đỗ Văn Đạo đề xuất s&aacute;p nhập một số đơn vị h&agrave;nh ch&iacute;nh như phường v&agrave; quận tr&ecirc;n địa b&agrave;n.</p>\r\n\r\n<p>&quot;V&iacute; dụ c&oacute; thể s&aacute;p nhập quận 4 v&agrave;o một quận kh&aacute;c. Bởi quận n&agrave;y chỉ rộng 4 km2, d&acirc;n số hơn 200.000 người. Nếu so s&aacute;nh về diện t&iacute;ch, quận 4 nhỏ hơn cả phường B&igrave;nh Hưng Ho&agrave; A (quận B&igrave;nh T&acirc;n) nhưng vẫn phải duy tr&igrave; một bộ m&aacute;y đầy đủ từ quận xuống 15 phường&quot;, &ocirc;ng Đạo n&oacute;i.</p>\r\n\r\n<p>Ph&oacute; gi&aacute;m đốc Sở Nội vụ cho biết, 30 năm trước vấn đề tinh giản bi&ecirc;n chế đ&atilde; được đề cập v&agrave; hiện n&agrave;y c&agrave;ng đ&ograve;i hỏi cấp b&aacute;ch hơn. &quot;Tr&igrave;nh độ c&aacute;n bộ, khoa học kỹ thuật được n&acirc;ng l&ecirc;n. V&igrave; thế phải tiến tới s&aacute;p nhập đơn vị h&agrave;nh ch&iacute;nh để giảm bi&ecirc;n chế v&agrave; g&aacute;nh nặng cho bộ m&aacute;y&quot;, &ocirc;ng Đạo n&ecirc;u quan điểm.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Trang_nhat/quan-4-3226-1482509617.jpg\" style=\"height:322px; margin:auto; width:500px\" /></p>\r\n\r\n<p>B&iacute; thư Đinh La Thăng cho biết, TP HCM sẽ kh&ocirc;ng m&aacute;y m&oacute;c &quot;chỗ n&agrave;o cần t&aacute;ch th&igrave; vẫn t&aacute;ch, chỗ n&agrave;o nhập th&igrave; vẫn nhập&quot;. Th&agrave;nh phố sẽ đ&aacute;nh gi&aacute; lại to&agrave;n bộ để n&acirc;ng cao hiệu quả quản l&yacute; Nh&agrave; nước nhưng đồng thời phải thực hiện được chủ trương tinh giản bi&ecirc;n chế.</p>\r\n\r\n<p>&quot;Vấn đề n&agrave;y sẽ cần một đề &aacute;n tổng thể của th&agrave;nh phố chứ kh&ocirc;ng l&agrave;m ph&acirc;n t&aacute;n từng quận một&quot;, &ocirc;ng Thăng n&oacute;i.</p>\r\n\r\n<p>Về vấn đề của quận B&igrave;nh T&acirc;n, &ocirc;ng Đinh La Thăng cũng nhắc lại việc &quot;đường cao hơn nh&agrave;&quot; tại đường Kinh Dương Vương, đồng thời y&ecirc;u cầu quận B&igrave;nh T&acirc;n c&ugrave;ng c&aacute;c cơ quan li&ecirc;n quan của th&agrave;nh phố phải l&agrave;m dứt điểm vụ việc n&agrave;y.</p>\r\n\r\n<p>&quot;Tất nhi&ecirc;n Sở GTVT v&agrave; nhiều cơ quan kh&aacute;c c&oacute; li&ecirc;n quan. Nhưng nếu quận v&agrave;o cuộc kịp thời, ch&uacute;ng ta c&oacute; &yacute; kiến ngay từ đầu th&igrave; chắc l&agrave; kh&ocirc;ng để t&igrave;nh trạng như vậy&quot;, &ocirc;ng Thăng n&oacute;i.</p>\r\n\r\n<p style=\"text-align:right\"><strong>Thi&ecirc;n Ng&ocirc;n</strong></p>\r\n', '1482551652-quan-4-3226-1482509617.jpg', 'top', 0, 'mot-so-quan-o-tp-hcm-duoc-de-xuat-sap-nhap', '', 'Saturday 24/12/2016, 10:54:12 am', '', '', '', 0),
(97, 0, 1, 0, 0, 'Trump cám ơn thư Giáng sinh \"rất hay\" của Putin', '0', 'detail', '', 'Tổng thống Mỹ đắc cử Donald Trump chia sẻ bức thư của Tổng thống Nga Vladimir Putin, mang thông điệp chúc mừng Giáng sinh cùng lời kêu gọi khôi phục khuôn khổ hợp tác song phương. ', '<p>&quot;Một bức thư rất hay từ Vladimir Putin, những suy nghĩ của &ocirc;ng rất đ&uacute;ng&quot;, <em>CNN</em> dẫn lời &ocirc;ng Trump h&ocirc;m 23/12 cho biết v&agrave; gửi lời c&aacute;m ơn. &quot;T&ocirc;i hy vọng cả hai b&ecirc;n c&oacute; thể đ&aacute;p ứng đ&uacute;ng những suy nghĩ n&agrave;y v&agrave; ch&uacute;ng ta kh&ocirc;ng phải đi một con đường thay thế&quot;.&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/trump-putin-7559-1482541459.jpg\" style=\"height:281px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Mở đầu bản dịch bức thư ng&agrave;y 15/12 được đội của &ocirc;ng Trump cung cấp, &ocirc;ng Putin gửi &quot;những lời ch&uacute;c Gi&aacute;ng sinh v&agrave; năm mới nồng ấm nhất&quot;.</p>\r\n\r\n<p>Tổng thống Nga cho rằng những th&aacute;ch thức to&agrave;n cầu v&agrave; khu vực m&agrave; Nga v&agrave; Mỹ đang đối mặt những năm gần đ&acirc;y cho thấy quan hệ giữa hai nước vẫn l&agrave; một th&agrave;nh tố quan trọng đảm bảo sự ổn định v&agrave; an ninh của thế giới hiện đại.&nbsp;</p>\r\n\r\n<p>&Ocirc;ng Putin cũng hy vọng sau khi Trump nhậm chức tổng thống Mỹ, hai nước c&oacute; thể c&oacute; những bước tiến thực sự, nhằm &quot;kh&ocirc;i phục khu&ocirc;n khổ hợp t&aacute;c song phương&quot;, n&acirc;ng cấp quan hệ l&ecirc;n một tầm cao mới về chất lượng, với&nbsp;tinh thần x&acirc;y dựng v&agrave; thực tế.</p>\r\n\r\n<p>Trong cuộc họp b&aacute;o thường ni&ecirc;n h&ocirc;m qua tại Moscow, &ocirc;ng Putin cũng cho biết Mỹ v&agrave; Nga &quot;cần thảo luận c&aacute;c biện ph&aacute;p nhằm b&igrave;nh thường ho&aacute; quan hệ&quot;. &quot;Trong chiến dịch tranh cử, &ocirc;ng Trump n&oacute;i việc b&igrave;nh thường ho&aacute; l&agrave; ph&ugrave; hợp, t&igrave;nh h&igrave;nh kh&ocirc;ng được xấu hơn nữa, v&agrave; t&ocirc;i đồng &yacute; với &ocirc;ng&quot;, Tổng thống Nga n&oacute;i.&nbsp;</p>\r\n\r\n<p style=\"text-align:right\"><strong>Trọng Gi&aacute;p</strong></p>\r\n', '1482551931-trump-putin-7559-1482541459.jpg', 'news', 0, 'trump-cam-on-thu-giang-sinh-rat-hay-cua-putin', 'PhamlucBlog', 'Saturday 24/12/2016, 10:58:51 am', '', '', '', 0),
(101, 0, 1, 0, 1, 'Hari Won hóa công chúa trong ảnh cưới với Trấn Thành', '0', 'detail', 'Cô dâu diện váy cưới bồng bềnh, đầu đội vòng hoa, hôn lên má chú rể khi cả hai chụp hình cưới. ...', 'Cô dâu diện váy cưới bồng bềnh, đầu đội vòng hoa, hôn lên má chú rể khi cả hai chụp hình cưới.', '<p>Sau gần một năm hẹn h&ograve;, Trấn Th&agrave;nh v&agrave; Hari Won quyết định <a href=\"http://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/hari-won-tran-thanh-thu-do-cuoi-3516646.html\">tổ chức đ&aacute;m cưới</a> v&agrave;o tối 25/12. Th&ocirc;ng tin về đ&aacute;m cưới được cả hai giữ k&iacute;n. Theo Hari Won, họ phải giấu v&igrave; sợ mang tiếng PR v&agrave; trở th&agrave;nh đề t&agrave;i b&agrave;n t&aacute;n của dư luận. Mới đ&acirc;y nh&agrave; thiết kế Chung Thanh Phong h&eacute; lộ video hậu trường chụp ảnh cưới của đ&ocirc;i uy&ecirc;n ương.&nbsp;</p>\r\n\r\n<p>Trong video, Hari Won nổi bật với đầm cưới bồng bềnh, sang trọng, đầu đội v&ograve;ng hoa. C&ocirc; như một n&agrave;ng c&ocirc;ng ch&uacute;a bước ra từ truyện cổ t&iacute;ch. Đ&oacute; cũng ch&iacute;nh l&agrave; &yacute; tưởng Trấn Th&agrave;nh b&agrave;n với nh&agrave; thiết kế Chung Thanh Phong khi thiết kế đầm cưới. Ca sĩ H&agrave;n Quốc h&ocirc;n l&ecirc;n m&aacute; ch&uacute; rể một c&aacute;ch t&igrave;nh cảm.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ngayvang/homeCI/public/image_detail/images/Tin_tuc/tran-thanh-2-8368-1482630196.jpg\" style=\"height:330px; margin:auto; width:500px\" /></p>\r\n\r\n<p>Trấn Th&agrave;nh v&agrave; Hari Won b&eacute;n duy&ecirc;n sau khi hợp t&aacute;c chung phim&nbsp;<em>Bệnh viện ma. </em>Chuyện t&igrave;nh cảm của cả hai gặp kh&aacute; nhiều <a href=\"http://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/hanh-trinh-yeu-nhieu-nuoc-mat-nu-cuoi-cua-tran-thanh-hari-won-3518277.html\">điều tiếng</a> do Hari đến với Trấn Th&agrave;nh sau khi c&ocirc;ng khai chia tay Tiến Đạt kh&ocirc;ng l&acirc;u.</p>\r\n\r\n<p>MC nhiều lần l&ecirc;n tiếng bảo vệ bạn g&aacute;i. Anh&nbsp;khẳng định Hari Won l&agrave; c&ocirc; g&aacute;i tốt v&agrave; tử tế nhất anh từng gặp. Trấn Th&agrave;nh c&ograve;n hứa b&ugrave; đắp cho người y&ecirc;u v&igrave; c&ocirc; sẵn s&agrave;ng chấp nhận thua thiệt khi quen anh.</p>\r\n\r\n<p>Th&aacute;ng 7, Trấn Th&agrave;nh b&iacute; mật tổ chức lễ <a href=\"http://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/tran-thanh-cau-hon-hari-won-3435350.html\" target=\"_blank\">cầu h&ocirc;n</a> Hari Won v&agrave; c&ocirc; đồng &yacute;.</p>\r\n', '1482638604-tran-thanh-2-8368-1482630196.jpg', 'news', 0, 'hari-won-hoa-cong-chua-trong-anh-cuoi-voi-tran-thanh', '', 'Sunday 25/12/2016, 11:03:24 am', '', '', '', 1),
(104, 0, 1, 0, 0, 'ĐỊA ĐIỂM ĂN UỐNG CHO TỐI NAY VÀ TUẦN NÀY', '0', 'detail', '', 'Tất niên năm 2016', '<p>Tuần n&agrave;y cũng gần tuần cuối của kỳ I năm học 2016-2017 ch&uacute;ng ta sẽ tổ chức tất ni&ecirc;n cho c&aacute;c bạn mới thi xong v&agrave; chuẩn bị về qu&ecirc;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/CNWEB&amp;UD/public/image_detail/images/Hot/FotorCreated.jpg\" style=\"height:480px; margin:auto; width:340px\" /></p>\r\n', '1483843372-FotorCreated.jpg', 'hot', 0, 'dia-diem-an-uong-cho-toi-nay-va-tuan-nay', '', 'Sunday 8/01/2017, 09:42:52 am', '', 'tat nien nicework 2017, dia diem an uong, dip tet\r\n', 'Địa điểm ăn uống tối nay và tuần này - nicework', 0),
(105, 0, 1, 0, 0, 'Về quê đón tết', '0', 'detail', '', 'Về quê đón tết', '<p>Về qu&ecirc; đ&oacute;n tết</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/CNWEB&amp;UD/public/image_detail/images/Hot/Unnamed%2BProject.gif\" style=\"height:306px; margin:auto; width:340px\" /></p>\r\n', '1483845834-31412.gif', 'hot', 0, 've-que-don-tet', 'Nguyễn Cao Đạt', 'Sunday 8/01/2017, 10:19:34 am', '', '', '', 0),
(106, 0, 1, 0, 0, 'CÙNG NICEWORK CHUẨN BỊ ĐÓN TẾT! ĐINH DẬU 2017', '0', 'detail', 'CÙNG NICEWORK CHUẨN BỊ ĐÓN TẾT! ĐINH DẬU 2017 ...', 'CÙNG NICEWORK CHUẨN BỊ ĐÓN TẾT! ĐINH DẬU 2017', '<p><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/CNWEB&amp;UD/public/image_detail/images/Hot/How%2BAnimation%2BSupports%2BBrand%2BDevelopment%20-%20Copy.gif\" style=\"height:400px; margin:auto; width:400px\" /></p>\r\n', '1483895880-How+Animation+Supports+Brand+Development - Copy.gif', 'hot', 0, 'cung-nicework-chuan-bi-don-tet-dinh-dau-2017', '10', 'Monday 9/01/2017, 12:18:00 am', '', '', '', 0);
INSERT INTO `tin_tuc` (`id`, `idrandom`, `publishing`, `top`, `privated`, `tieu_de`, `icon`, `typenews`, `overShort`, `tom_tat`, `noi_dung`, `hinh`, `loai_tin`, `kieu_tin`, `url`, `user`, `created`, `updated`, `keyword`, `description`, `issetSurvey`) VALUES
(108, 0, 1, 0, 0, 'Lễ cúng ông táo ở Việt Nam', '0', 'detail', 'Hằng năm cứ vào 23 tháng Chạp (tức tháng 12) âm lịch thì người dân Việt Nam có phong tục cúng ông Táo về ...', 'Hằng năm cứ vào 23 tháng Chạp (tức tháng 12) âm lịch thì người dân Việt Nam có phong tục cúng ông Táo về trời, với phương tiện quen thuộc, không có trên thế giới đó là cá Chép.', '<p>Ng&agrave;y 23 th&aacute;ng Chạp &acirc;m lịch th&igrave; &ocirc;ng T&aacute;o l&ecirc;n chiếc &quot;si&ecirc;u c&aacute; Ch&eacute;p&quot; của m&igrave;nh để về trời b&aacute;o c&aacute;o với Ngọc Ho&agrave;ng sự việc dưới trần gian trong một năm vừa qua, cho đến đ&ecirc;m giao thừa th&igrave; &ocirc;ng T&aacute;o sẽ về lại hạ giới tiếp tục c&ocirc;ng việc</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/tao.jpg\" style=\"height:408px; margin:auto; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Ng&agrave;y 23/01 &Acirc;m lịch hằng năm l&agrave; ng&agrave;y &ocirc;ng T&aacute;o về trời theo d&acirc;n gian Việt Nam</em></p>\r\n\r\n<p><strong>Nguồn gốc:</strong></p>\r\n\r\n<p>T&aacute;o Qu&acirc;n c&oacute; nguồn gốc từ ba vị thần Thổ C&ocirc;ng, Thổ Địa, Thổ Kỳ của L&atilde;o gi&aacute;o Trung Quốc nhưng được người việt chuyển h&oacute;a sự t&iacute;ch hai &ocirc;ng một b&agrave; l&agrave; vị thần Đất, vị thần Nh&agrave;, vị thần Bếp n&uacute;c.&nbsp;Từ xa xưa, người d&acirc;n Việt đ&atilde; ngưỡng mộ l&ograve;ng chung thủy của &Ocirc;ng T&aacute;o v&agrave; thờ c&uacute;ng &Ocirc;ng T&aacute;o với hi vọng T&aacute;o Qu&acirc;n sẽ gi&uacute;p họ giữ &quot;bếp lửa&quot; trong gia đ&igrave;nh lu&ocirc;n nồng ấm v&agrave; hạnh ph&uacute;c.&nbsp;&Ocirc;ng T&aacute;o quanh năm ở trong bếp n&ecirc;n biết hết tất cả mọi chuyện tốt xấu của mọi người, n&ecirc;n để cho vua bếp ph&ugrave; hộ cho gia đ&igrave;nh sang năm mới gặp được nhiều điều may mắn, người Việt đ&atilde; l&agrave;m lễ tiễn đưa &Ocirc;ng T&aacute;o về chầu Ngọc Ho&agrave;ng.</p>\r\n\r\n<p><strong>&Yacute; nghĩa:</strong></p>\r\n\r\n<p>&Ocirc;ng t&aacute;o (T&aacute;o qu&acirc;n hay Thổ C&ocirc;ng) l&agrave; vị thần cai quản mọi hoạt động của gia chủ, &ocirc;ng l&agrave; vị thần quyết định sự may, rủi, ph&uacute;c họa của cả gia chủ, b&ecirc;n cạnh đ&oacute; &ocirc;ng c&ograve;n ngăn cản sự x&acirc;m phạm của ma quỷ, giữ b&igrave;nh y&ecirc;n cho gia đ&igrave;nh gia chủ. V&igrave; vậy tục c&uacute;ng &ocirc;ng T&aacute;o mang &yacute; nghĩa cầu mong cho sự ấm no, đầy đủ, sau đ&oacute; mới đến &yacute; nghĩa thờ &quot;thần Bếp&quot; chuy&ecirc;n cai quản việc bếp n&uacute;c.</p>\r\n\r\n<p>&Ocirc;ng T&aacute;o về trời sẽ t&acirc;u với Ngọc Ho&agrave;ng về việc l&agrave;m ăn, cư xử của mỗi gia đ&igrave;nh dưới hạ giới. C&aacute; ch&eacute;p l&agrave; phương tiện để &ocirc;ng T&aacute;o cưỡi về trời. V&agrave;o ng&agrave;y n&agrave;y, sau khi c&uacute;ng lễ xong, c&aacute;c gia đ&igrave;nh đều c&uacute;ng con c&aacute; ch&eacute;p rồi đem ra s&ocirc;ng hay ra ao...thả. Bởi ngụ &yacute; &quot;c&aacute; vượt Vũ m&ocirc;n&quot; hay &quot;c&aacute; ch&eacute;p h&oacute;a rồng&quot;, c&aacute; ch&eacute;p mang &yacute; nghĩa biểu tượng cho sự thăng hoa, tinh thần vượt kh&oacute;, sự ki&ecirc;n tr&igrave; v&agrave; bền bỉ để đi tới th&agrave;nh c&ocirc;ng.</p>\r\n\r\n<p><strong>Lễ Vật:</strong></p>\r\n\r\n<p><strong><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/cung-tao.jpg\" style=\"margin:auto\" /></strong></p>\r\n\r\n<p style=\"text-align:center\"><em>Những đồ lễ cần thiết cho &ocirc;ng T&aacute;o về trời</em></p>\r\n\r\n<p>Lễ vật c&uacute;ng &ocirc;ng T&aacute;o gồm: mũ &ocirc;ng C&ocirc;ng ba chiếc (hai mũ đ&agrave;n &ocirc;ng v&agrave; một mũ đ&agrave;n b&agrave;). Chiếc mũ d&agrave;nh cho c&aacute;c &ocirc;ng T&aacute;o th&igrave; c&oacute; hai c&aacute;nh chuồn; mũ d&agrave;nh cho T&aacute;o b&agrave; th&igrave; kh&ocirc;ng c&oacute; c&aacute;nh chuồn. Những mũ n&agrave;y được trang sức với c&aacute;c gương nhỏ h&igrave;nh tr&ograve;n l&oacute;ng l&aacute;nh v&agrave; những gi&acirc;y kim tuyến m&agrave;u sắc sặc sỡ. Hương, đ&egrave;n nến, lọ hoa tươi, đĩa ngũ quả tươi. Ba bộ mũ &aacute;o, hia h&agrave;i T&aacute;o Qu&acirc;n c&ugrave;ng tiền v&agrave;ng. Để đơn giản c&oacute; khi người việt chỉ c&uacute;ng tượng trưng một chiếc mũ &ocirc;ng C&ocirc;ng (c&oacute; hai c&aacute;nh chuồn) lại k&egrave;m theo một chiếc &aacute;o v&agrave; một đ&ocirc;i hia bằng giấy.</p>\r\n\r\n<p>Những đồ v&agrave;ng m&atilde; như mũ, &aacute;o, hia v&agrave; một số v&agrave;ng thoi bằng giấy sẽ được đốt đi sau lễ c&uacute;ng &ocirc;ng T&aacute;o v&agrave;o ng&agrave;y 23 th&aacute;ng Chạp c&ugrave;ng với b&agrave;i vị cũ. Sau đ&oacute; người ta sẽ lập b&agrave;i vị mới cho T&aacute;o C&ocirc;ng.</p>\r\n\r\n<p>Ngo&agrave;i ra, người việt c&ograve;n c&uacute;ng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/C%C3%A1_ch%C3%A9p\" title=\"Cá chép\">c&aacute; ch&eacute;p</a>&nbsp;để c&aacute;c &ocirc;ng, b&agrave; T&aacute;o c&oacute; phương tiện về chầu trời, ở miền Bắc người ta c&ograve;n c&uacute;ng một con c&aacute; ch&eacute;p c&ograve;n sống thả trong chậu nước, ngụ &yacute; &quot;c&aacute; h&oacute;a long&quot; nghĩa l&agrave; c&aacute; sẽ biến th&agrave;nh Rồng đưa &ocirc;ng T&aacute;o về trời. Con c&aacute; ch&eacute;p n&agrave;y sẽ được &quot;ph&oacute;ng sinh&quot; (thả ra ao hồ hay ra s&ocirc;ng) sau khi c&uacute;ng. Ở miền Trung, người ta c&uacute;ng một con ngựa bằng giấy với y&ecirc;n, cương đầy đủ. Miền Nam th&igrave; lễ vật đơn giản, họ chỉ c&uacute;ng mũ, &aacute;o v&agrave; đ&ocirc;i hia bằng giấy.T&ugrave;y theo từng gia cảnh, ngo&agrave;i c&aacute;c lễ vật ch&iacute;nh kể tr&ecirc;n, người ta hoặc l&agrave;m m&acirc;m cỗ mặn (với x&ocirc;i g&agrave;, ch&acirc;n gi&ograve; luộc, c&aacute;c m&oacute;n nấu nấm, măng...) hay lễ chay (với trầu cau, hoa, quả, giấy v&agrave;ng, giấy bạc...) để tiễn T&aacute;o Qu&acirc;n.</p>\r\n\r\n<p><strong>Phong tục thờ c&uacute;ng:</strong></p>\r\n\r\n<p>Người Việt Nam quan niệm T&aacute;o Qu&acirc;n sẽ l&ecirc;n trời v&agrave; thưa với Ngọc Ho&agrave;ng những sự kiện xảy ra trong năm vừa qua ở dưới trần gian. V&igrave; thế người Việt Nam l&agrave;m lễ tiễn &ocirc;ng C&ocirc;ng, &ocirc;ng T&aacute;o rất thịnh soạn với mong muốn những điều tốt đẹp nhất sẽ được thưa với Ngọc Ho&agrave;ng, v&agrave; những điều kh&ocirc;ng may mắn hoặc kh&ocirc;ng tốt sẽ được b&aacute;o c&aacute;o nhẹ đi, việc l&agrave;m n&agrave;y c&oacute; thể l&agrave; do văn h&oacute;a v&agrave; th&oacute;i quen từ xa xưa truyền lại.</p>\r\n\r\n<p>Lễ c&uacute;ng tiễn đưa &Ocirc;ng T&aacute;o chầu Trời được c&uacute;ng v&agrave;o tối ng&agrave;y 22 th&aacute;ng Chạp &Acirc;m lịch h&agrave;ng năm, v&igrave; đầu ng&agrave;y 23 th&aacute;ng Chạp &Ocirc;ng T&aacute;o đ&atilde; chầu Trời, nếu để sang ng&agrave;y 23 th&aacute;ng Chạp mới c&aacute;o lễ tiễn đưa &Ocirc;ng T&aacute;o về Trời, e rằng &Ocirc;ng T&aacute;o sẽ kh&ocirc;ng nhận được lễ vật t&acirc;m th&agrave;nh của gia chủ. Sau khi b&agrave;y lễ, thắp hương v&agrave; khấn v&aacute;i xong, đợi hương t&agrave;n lại thắp th&ecirc;m một tuần hương nữa, lễ tạ rồi h&oacute;a v&agrave;ng m&atilde; v&agrave; thả c&aacute; ch&eacute;p ra ao, hồ, s&ocirc;ng, suối&hellip; để thả c&aacute; chở &ocirc;ng T&aacute;o l&ecirc;n chầu Trời.</p>\r\n\r\n<p style=\"text-align:right\"><strong>Theo Wikipedia</strong></p>\r\n', '1484925937-tao.jpg', 'news', 0, 'le-cung-ong-tao-o-viet-nam', '', 'Friday 20/01/2017, 10:25:37 pm', '', '', 'Hằng năm cứ vào 23 tháng Chạp (tức tháng 12) âm lịch thì người dân Việt Nam có phong tục cúng ông Táo về trời, với phương tiện quen thuộc, không có trên thế giới đó là cá Chép - 123 Năm', 1),
(109, 0, 0, 0, 0, 'Mùa xuân tôi đâu, người yêu tôi đâu?', '0', 'detail', '', 'Tôi còn nhớ những ngày trước tết này tôi có rất nhiều chuyến đi chơi, hẹn hò trước tết. Hình như chính những ngày trước tết mới là những ngày vui thật sự, bạn bè hè hét nhau rủ đi chơi hết chỗ này đến chỗ khác. Không cần nói ai cũng hiểu việc ở nhà mấy ngày này là điều không thể. Bạn bè mà, chơi thân với nhau bao nhiêu năm học sinh, đắng cay vui buồn và cả \\\"tội lỗi\\\" nữa đều cùng nhau trải qua nên việc cách xa cả năm trời cảm thấy rất nhớ', '<p>Đ&uacute;ng l&agrave; c&agrave;ng lớn, th&igrave; mức độ hồn nhi&ecirc;n trong mỗi người c&agrave;ng giảm, ng&agrave;y n&agrave;y c&aacute;c năm trước m&igrave;nh hạnh ph&uacute;c v&agrave; v&ocirc; tư v&ocirc; c&ugrave;ng - sắp đến tết. Tinh thần n&ocirc; nức, kh&ocirc;ng kh&iacute; rộn r&agrave;ng khắp nơi chuẩn bị cho thời khắc giao thừa v&agrave; vui chơi những ng&agrave;y tết. Bạn b&egrave; th&igrave; l&ecirc;n kế hoạch đi chơi, kh&ocirc;ng hết &quot;show&quot;, vui ra mặt mỗi khi được gặp bất cứ ai. Kh&ocirc;ng kh&iacute; rộn r&agrave;ng kh&ocirc;ng thể tả được.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Nhat_ky/12605295_613770068780123_7778783785401435823_o.jpg\" style=\"margin:auto\" /></p>\r\n\r\n<p>T&ocirc;i c&ograve;n nhớ những ng&agrave;y trước tết n&agrave;y t&ocirc;i c&oacute; rất nhiều chuyến đi chơi, hẹn h&ograve; trước tết. H&igrave;nh như ch&iacute;nh những ng&agrave;y trước tết mới l&agrave; những ng&agrave;y vui thật sự, bạn b&egrave; h&egrave; h&eacute;t nhau rủ đi chơi hết chỗ n&agrave;y đến chỗ kh&aacute;c. Kh&ocirc;ng cần n&oacute;i ai cũng hiểu việc ở nh&agrave; mấy ng&agrave;y n&agrave;y l&agrave; điều kh&ocirc;ng thể. Bạn b&egrave; m&agrave;, chơi th&acirc;n với nhau bao nhi&ecirc;u năm học sinh, đắng cay vui buồn v&agrave; cả &quot;tội lỗi&quot; nữa đều c&ugrave;ng nhau trải qua n&ecirc;n việc c&aacute;ch xa cả năm trời cảm thấy rất nhớ. N&ecirc;n khi về qu&ecirc; đ&oacute;n tết bạn n&agrave;o cũng n&oacute;ng l&ograve;ng được gặp nhau ngay v&agrave; ng&agrave;y n&agrave;o cũng thế. Chỉ ước được b&ecirc;n nhau c&ugrave;ng ch&eacute;m gi&oacute; thật nhiều.</p>\r\n\r\n<p>Nhưng giờ đ&acirc;y quả l&agrave; đ&atilde; kh&aacute;c, sự thay đổi đ&oacute; đến nhanh ch&oacute;ng đến mức t&ocirc;i kh&ocirc;ng thể tin được, cứ tưởng mọi chuyện vẫn c&ograve;n nằm trong suy nghĩ ng&acirc;y thơ của từng người nhưng đến thời điểm n&agrave;y cũng chẳng c&ograve;n ai li&ecirc;n lạc với ai, chỉ c&ograve;n v&agrave;i đứa bạn lắt nhắt đ&aacute;m n&agrave;o cũng c&oacute; mặt, c&ograve;n c&aacute;c bạn kh&aacute;c th&igrave; sao? Qu&ecirc;n rồi hay kh&ocirc;ng c&ograve;n tinh thần cống hiến của ng&agrave;y n&agrave;o nữa? Việc qu&ecirc;n chắc kh&oacute;, l&agrave;m sao c&oacute; những người c&oacute; thể qu&ecirc;n một thứ g&igrave; đ&oacute; m&agrave; họ đ&atilde; trải qua nhiều năm chỉ trong một thời gian ngắn như vậy được n&ecirc;n việc qu&ecirc;n l&agrave; kh&ocirc;ng thể. Chỉ c&ograve;n l&yacute; do do ch&iacute;nh mỗi người m&agrave; th&ocirc;i, ch&iacute;nh th&aacute;i độ thiếu nhiệt t&igrave;nh của ch&uacute;ng ta đ&atilde; l&agrave;m cho mọi thứ trở n&ecirc;n tồi tệ.</p>\r\n\r\n<p>Người t&ocirc;i y&ecirc;u cũng xa l&aacute;nh, em giờ cũng giống như xưa, kh&ocirc;ng bao giờ muốn gặp t&ocirc;i. Điều đ&oacute; th&igrave; t&ocirc;i trải qua mấy năm nay rồi cũng kh&ocirc;ng l&agrave;m t&ocirc;i đau đớn nhiều nữa, nhưng t&ocirc;i cũng mong gặp được em d&ugrave; một lần th&ocirc;i trong m&ugrave;a xu&acirc;n n&agrave;y, v&igrave; t&ocirc;i muốn được nh&igrave;n em trong mắt t&ocirc;i v&igrave; đối với t&ocirc;i em vẫn l&agrave; mối t&igrave;nh đầu v&agrave; chưa kết th&uacute;c.</p>\r\n\r\n<p style=\"text-align: right;\"><strong>Bạc li&ecirc;u, ng&agrave;y 24/01/2017 </strong></p>\r\n\r\n<p style=\"text-align: right;\"><strong>(27 Tết Đinh Dậu 2017)</strong></p>\r\n\r\n<p style=\"text-align: right;\"><strong>Phạm Văn Lực</strong></p>\r\n', '1485263433-xuan-buon.jpg', 'diary', 0, 'mua-xuan-toi-dau-nguoi-toi-yeu-dau', '', 'Tuesday 24/01/2017, 08:10:33 pm', '', 'xuan buon, hop lop 2017, nguoi yeu dau, mua xuan toi dau', 'Tôi còn nhớ những ngày trước tết này tôi có rất nhiều chuyến đi chơi, hẹn hò trước tết. Hình như chính những ngày trước tết mới là những ngày vui thật sự, bạn bè hè hét nhau rủ đi chơi hết chỗ này đến chỗ khác. Không cần nói ai cũng hiểu việc ở nhà mấy ngày này là điều không thể. Bạn bè mà, chơi thân với nhau bao nhiêu năm học sinh, đắng cay vui buồn và cả \"tội lỗi\" nữa đều cùng nhau trải qua nên việc cách xa cả năm trời cảm thấy rất nhớ - 123 Năm', 0),
(110, 0, 0, 0, 0, 'Xuân Đinh Dậu 2017: họp lớp cấp 2, lớp 9B', 'photo', 'detail', 'Đây là lần họp lớp thứ 2 liên tiếp của các thành viên lớp 9B, trường THCS Đông Hải (Bạc Liêu), nhân dịp các ...', 'Đây là lần họp lớp thứ 2 liên tiếp của các thành viên lớp 9B, trường THCS Đông Hải (Bạc Liêu), nhân dịp các bạn về quê đón tết. Số lượng đi khá đông đủ, hơn nửa lớp tham gia, đây cũng là cố gắng của từng thành viên trong đại gia đình thời \'trẻ trâu\' của chúng ta.', '<p>Cũng được 1 năm từ sau lần họp đầu ti&ecirc;n &quot;hơi bị&quot; đ&ocirc;ng đủ của lớp 9B trường THCS Đ&ocirc;ng Hải (Bạc Li&ecirc;u), lần nghỉ tết nguy&ecirc;n đ&aacute;n Đinh Dậu n&agrave;y, c&aacute;c th&agrave;nh vi&ecirc;n lớp 9B xưa cũng đ&atilde; tổ chức tiếp một buổi họp lớp v&agrave;o ng&agrave;y 26/01/2017 (29 tết).</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/1.jpg\" style=\"height:348px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Họp lớp cấp 2 xu&acirc;n Đinh Dậu 2017</em></span></p>\r\n\r\n<p>Hai năm liền họp đ&ocirc;ng đủ như thế n&agrave;y cũng l&agrave; điều bất ngờ, nhưng vẫn c&ograve;n thiếu một điều nếu như c&oacute; c&ocirc; chủ nhiệm (c&ocirc; Hải) đi nữa th&igrave; tốt hơn. Sĩ số của lớp cũng chỉ c&oacute; ba mươi mấy người nhưng nhin trong h&igrave;nh ta cũng thấy đi hơn một nửa lớp.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/3(1).jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/4.jpg\" style=\"height:348px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Tiết mục đầu ti&ecirc;n l&agrave; ăn, tiếp sau đ&oacute; vẫn l&agrave; ăn, cuối c&ugrave;ng chắc ... &agrave; m&agrave; cũng l&agrave; ăn</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/5.jpg\" style=\"height:586px; margin:auto; width:540px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Đ&acirc;y l&agrave; bạn Hạnh (đang học ở TP.HCM) v&agrave; Kiều (đang học ở Cần Thơ)</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/6.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/7.jpg\" style=\"height:348px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>&quot;Bản mặt&quot; đ&aacute;ng ... thương</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/9.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Trong &quot;c&otilde;i u tối&quot; c&aacute;c thanh ni&ecirc;n &quot;ngu ngu&quot; một thời của lớp 9B đang &quot;ngơ&quot; ng&aacute;c như ng&agrave;y n&agrave;o</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/10.jpg\" style=\"height:657px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Chuẩn bị sẵn một &quot;b&agrave;n đặt&quot; cho buổi họp lớp, qu&aacute; c&ocirc;ng phu v&agrave; đầu tư ...</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/14.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Đừng quan t&acirc;m đến người đang cười, v&igrave; n&oacute; kh&ocirc;ng li&ecirc;n quan lắm ... </em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/15.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p><span style=\"color:#0000CD\"><em>Bạn nữ (Hương) &quot;lợi dụng&quot; sự đẹp trai như t&agrave;i tử của c&aacute;c thanh ni&ecirc;n đằng sau v&agrave; nhanh tay l&agrave;m một bức h&igrave;nh</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/16.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Sản phẩm lỗi của nhiếp ảnh gia</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/11.jpg\" style=\"height:513px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Tới tiết mục thể hiện giọng h&aacute;t của c&aacute;c th&agrave;nh vi&ecirc;n: karaoke</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/12.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Thanh ni&ecirc;n kia kh&ocirc;ng biết do đ&atilde; qu&aacute; ch&eacute;n hay kh&ocirc;ng chịu được những &quot;&acirc;m thanh&quot; lạ của người cầm micro nữa?...&quot;Trả lại cho tao giọng ng&agrave;y xưa của m&agrave;y!&quot;</em></span></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Trang_nhat/13.jpg\" style=\"height:465px; margin:auto; width:620px\" /></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#0000CD\"><em>Hai nữ ca sĩ ch&iacute;nh (Tr&acirc;m v&agrave; Kiều)</em></span></p>\r\n\r\n<p>Mỗi năm xu&acirc;n đến, tết về nhưng c&oacute; lẽ cũng l&agrave; dấu hiệu nhắc nhớ mỗi ch&uacute;ng ta rằng thời gian đang tr&ocirc;i đi, những c&acirc;u n&oacute;i đ&ugrave;a ng&agrave;y n&agrave;o, sự v&ocirc; tư hồn nhi&ecirc;n thời học tr&ograve; nay cũng kh&ocirc;ng c&ograve;n nữa, mỗi ch&uacute;ng ta đều c&oacute; con đường đi ri&ecirc;ng v&agrave; bắt buộc phải như thế n&ecirc;n giờ đ&acirc;y chỉ c&ograve;n những kỷ niệm v&agrave; những gi&acirc;y ph&uacute;t như thế n&agrave;y c&oacute; thể tồn tại, chen lấn v&agrave;o một g&oacute;c nhỏ đ&acirc;u đ&oacute; trong cuộc sống đang thay đổi mỗi ng&agrave;y của mọi người, c&aacute;c bạn đến đ&acirc;y c&ugrave;ng nhau, d&agrave;nh thời gian cho nhau như thế n&agrave;y l&agrave; rất tốt rồi v&agrave; ch&uacute;ng ta cố gắng ph&aacute;t huy n&oacute; về sau nữa nh&eacute;! Ch&uacute;c c&aacute;c bạn lu&ocirc;n vui vẻ v&agrave; an l&agrave;nh.</p>\r\n\r\n<p><strong>Th&acirc;n &aacute;i xin ch&agrave;o. Y&ecirc;u m&atilde;i.</strong></p>\r\n\r\n<p><span style=\"color:#FF0000\">#9B-&lt;3#</span></p>\r\n', '1486393109-1.jpg', 'news', 0, 'xuan-dinh-dau-2017-hop-lop-cap-2-lop-9b', '', 'Monday 6/02/2017, 09:58:29 pm', '', 'Hop lop 9b, truong thcs dong hai, bac lieu, hop lop', 'Đây là lần họp lớp thứ 2 liên tiếp của các thành viên lớp 9B, trường THCS Đông Hải (Bạc Liêu), nhân dịp các bạn về quê đón tết. Số lượng đi khá đông đủ, hơn nửa lớp tham gia, đây cũng là cố gắng của từng thành viên trong đại gia đình thời \"trẻ trâu\" của chúng ta.', 1),
(111, 0, 1, 0, 0, 'Khoa học máy tính về công nghệ web, cuốn sách rất hay về lý thuyết web', '0', 'detail', '', 'Sách chuyên về lý thuyết khoa học công nghệ trên website, giúp người đọc hiểu được trang web hoạt động như thế nào và cách thức tạo ra một trang web, cùng nhiều lý thuyết nền tảng khác.', '<p>Nhiều người trong ch&uacute;ng ta học về lập tr&igrave;nh website, ch&uacute;ng ta liền bắt tay v&agrave;o học ngay c&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh v&agrave; theo đuổi c&aacute;c c&ocirc;ng nghệ về web, nhưng nhiều khi ch&uacute;ng ta bỏ qua hoặc bỏ qu&ecirc;n đi mất những kiến thức cơ bản nhất của một trang web, server, giao thức... C&aacute;ch trang web hoạt động như thế n&agrave;o. N&ecirc;n đ&acirc;y l&agrave; quyển s&aacute;ch c&oacute; thể n&oacute;i l&agrave; rất bổ &iacute;ch v&agrave; bị &quot;l&atilde;ng qu&ecirc;n&quot; kh&aacute; nhiều cho c&aacute;c bạn muốn t&igrave;m hiểu chuy&ecirc;n s&acirc;u, đi v&agrave;o gốc g&aacute;c của c&aacute;c vấn đề tr&ecirc;n website bằng muốn kiến thức chuẩn Khoa học m&aacute;y t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/book.jpg\" style=\"height:626px; margin:auto; width:482px\" /></p>\r\n\r\n<p>Link download: <a href=\"https://drive.google.com/file/d/0B6JtiAoFVzyzUGNrRHp5Vm41ODQ/view?usp=sharing\">https://drive.google.com/file/d/0B6JtiAoFVzyzUGNrRHp5Vm41ODQ/view?usp=sharing</a></p>\r\n\r\n<p><strong>Th&ocirc;ng tin s&aacute;ch:</strong></p>\r\n\r\n<table border=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Ti&ecirc;u đề</td>\r\n			<td>Web Technologies (A computer science perspective)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>T&aacute;c giả</td>\r\n			<td>Jeffrey C.Jackson</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số trang</td>\r\n			<td>591</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '1486455165-book - Copy.jpg', 'news', 0, 'khoa-hoc-may-tinh-ve-cong-nghe-web-cuon-sach-rat-hay-ve-ly-thuyet-web', '', 'Tuesday 7/02/2017, 03:12:45 pm', '', 'khoa hoc may tinh web, cong nghe web pdf, ly thuyet website, sach ve web, web science book', 'Nhiều người trong chúng ta học về lập trình website, chúng ta liền bắt tay vào học ngay các ngôn ngữ lập trình và theo đuổi các công nghệ về web, nhưng nhiều khi chúng ta bỏ qua hoặc bỏ quên đi mất những kiến thức cơ bản nhất của một trang web, server, giao thức... Cách trang web hoạt động như thế nào. ', 0),
(115, 0, 1, 1, 0, 'Dạo qua các trường thuộc ĐHQG Hồ Chí Minh', '', 'photo', '', 'Đại học quốc gia Hồ Chí Minh nằm tại phường Linh Trung khu vực Thủ Đức, gồm các trường như KHXH & NV, Bách Khoa, CNTT, Khoa học tự nhiên, Quốc tế, Kinh tế - Luật, Khoa Y', '', '1489734477.jpg', 'news_top1', 0, 'dao-qua-cac-truong-thuoc-dhqg-ho-chi-minh', '10', '', 'Friday 17/03/2017, 02:07:57 pm', '', '', 0),
(117, 0, 0, 0, 0, 'Gửi đến các thần dân!', '0', 'detail', 'Sinh nhật Lại Xuân Mạnh. ...', 'Sinh nhật Lại Xuân Mạnh.', '<p>Thần d&acirc;n th&acirc;n mến!</p>\r\n\r\n<p>Bởi v&igrave;,&nbsp;</p>\r\n\r\n<p>Nếu t&igrave;nh h&igrave;nh kh&ocirc;ng c&oacute; g&igrave; thay đổi th&igrave; ng&agrave;y mai l&agrave; thứ 6, ng&agrave;y 17/03 năm Đinh Dậu, một ng&agrave;y m&agrave; theo sử s&aacute;ch kinh thư v&agrave; b&aacute; quan cho l&agrave; chẳng c&oacute; &quot;qu&aacute;i&quot; g&igrave; đẹp đẽ, ng&agrave;y m&agrave; b&igrave;nh thường như bao mọi ng&agrave;y ta thức dậy v&agrave;o buổi s&aacute;ng, đ&aacute;nh răng v&agrave; ngủ tiếp, ng&agrave;y m&agrave; đau khổ vẫn bao tr&ugrave;m khắp c&aacute;c nh&agrave; vệ sinh to&agrave;n c&otilde;i tr&aacute;i đất, l&agrave; ng&agrave;y được coi l&agrave; xui xẻo nhất tuần, tang thương mu&ocirc;n lối.</p>\r\n\r\n<p>Ấy vậy,</p>\r\n\r\n<p>M&agrave; ch&iacute;nh ng&agrave;y n&agrave;y &quot;con d&acirc;n&quot; của ta đ&atilde; hạ sinh, một tuyệt sắc &quot;giai bao&quot; đ&atilde; ra đời với niềm ức chế khắp đ&oacute; đ&acirc;y. Sự t&iacute;ch kể rằng, trong một ng&agrave;y đẹp trời, c&oacute; một người nam v&agrave; một người nữ đ&atilde; gặp nhau, họ uống tr&agrave; sữa với nhau v&agrave; để xảy ra một tai nạn thảm khốc, tai nạn ấy đeo đẳng người phụ nữ suốt 9 th&aacute;ng 10 ng&agrave;y v&agrave; để lại trần thế một sản phẩm m&agrave; ng&agrave;y h&ocirc;m nay ch&uacute;ng ta ngồi nơi đ&acirc;y để nhắc đến, m&agrave; m&atilde;i về sau sản phẩm ấy mới được gi&aacute;m định ADN v&agrave; x&aacute;c thực bằng c&ocirc;ng nghệ mới nhất thời bấy giờ l&agrave; &quot;Đ&ocirc;i m&ocirc;i Technology&quot;, c&ocirc;ng nghệ ấy chỉ ra rằng sản phẩm được tạo ra c&oacute; đ&ocirc;i m&ocirc;i kh&ocirc;ng lẫn v&agrave;o đ&acirc;u được cuối c&ugrave;ng người đương thời biết anh ấy c&oacute; họ Lại. Nh&acirc;n đ&acirc;y, ta xin được t&oacute;m tắt sơ&nbsp;qua về nh&acirc;n vật họ Lại n&agrave;y:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" class=\" table table-responsive\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/m1.png\" style=\"float:left; height:315px; margin:auto; width:260px\" />\r\n			<p style=\"text-align:right\">T&ecirc;n thật: Lại Xu&acirc;n Mạnh</p>\r\n\r\n			<p style=\"text-align:right\">Sinh ng&agrave;y: 17/03/1995</p>\r\n\r\n			<p style=\"text-align:right\">Nguy&ecirc;n qu&aacute;n: trong bụng mẹ</p>\r\n\r\n			<p style=\"text-align:right\">Chỗ ở hiện tại: trong nh&agrave; vệ sinh.</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p>Cho n&ecirc;n,</p>\r\n\r\n<p>Trong kh&ocirc;ng kh&iacute; hoan hỉ pha lẫn tang thương n&agrave;y, ta xin c&ocirc;ng bố tin n&agrave;y đến to&agrave;n d&acirc;n thi&ecirc;n hạ, b&aacute; t&aacute;nh khắp đ&oacute; đ&acirc;y, từ kinh th&agrave;nh đến n&uacute;i rừng hiểm trở, từ gi&agrave; đến trẻ, b&ecirc; đ&ecirc; đến b&oacute;ng được biết. Xin Ch&uacute;c Mừng.</p>\r\n\r\n<p>C&aacute;o.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1489675516-m1.png', 'news', 0, 'gui-cac-than-dan', '10', 'Thursday 16/03/2017, 09:45:16 pm', '', 'lai xuan manh, sinh nhat manh, to chuc sinh nhat, sinh nhat 17/03/2017', 'Sinh nhật Lại Xuân Mạnh ngày 17/03/2017, tổ chức tại ĐH Nông Lâm, Lại Xuân Mạnh.', 0),
(119, 1337643339, 0, 0, 0, 'Second Emegazine', '', 'emegazine', '', '', '', '1495706192.jpg', 'emegazine', 0, 'second-emegazine', '10', 'Thursday 25/05/2017, 04:56:32 pm', '', 'qưd', 'dqwd', 0),
(125, 1304966587, 1, 0, 1, 'Hợp đồng và chuyện bên lề', '', 'emegazine', '', '', '', '1496672633.jpg', 'emegazine', 0, 'hop-dong-va-chuyen-ben-le', '10', 'Monday 5/06/2017, 09:23:53 pm', 'Tuesday 25/07/2017, 10:53:17 pm', 'hop dong yeu, hop dong L va T, yeu', 'Hợp đồng yêu giữa L & T, ký ngày 03/06/2017 có giá trị trong vòng 1 tháng kể từ ngày ký Xin chào cô Yến Tuyết (xin lỗi vì tôi gọi là cô nhé), được biết cô vừa mới ký một hợp đồng \"bán tính cảm\" với anh Phạm Lực, với tư cách là người trong cuộc không biết cảm nghĩ của cô lúc này như thế nào? Cô có cảm thấy mình thiệt hại trong hợp động này không? Hay thấy mình vớ được một hợp động béo bở? (Inbox trả lời nhé :D).', 0),
(128, 1223145414, 0, 0, 1, 'Bình Thuận, nắng vàng, cát trắng, biển xanh và gay', '', 'emegazine', '', '', '', '1497688328.jpg', 'emegazine', 0, 'binh-thuan-nang-vang-cat-trang-bien-xanh-va-gay', '10', 'Saturday 17/06/2017, 03:32:08 pm', 'Saturday 17/06/2017, 03:43:32 pm', '', 'Bình Thuận, nắng vàng, cát trắng, biển xanh và \"gay\"', 0),
(129, 783658686, 0, 0, 0, 'Bình Thuận, nắng vàng, cát trắng, biển xanh và gay 1', '', 'emegazine', '', '', '', '1497689595.jpg', 'emegazine', 0, 'binh-thuan-nang-vang-cat-trang-bien-xanh-va-gay-1', '10', 'Saturday 17/06/2017, 03:53:15 pm', '', 'asdasd', 'dasdasd', 0),
(130, 661329143, 0, 0, 1, 'Cảm ơn Quyên vì tất cả, 7 ngày thật vui với tôi', '', 'emegazine', '', '', '', '1497689985.jpg', 'emegazine', 0, 'cam-on-quyen-vi-tat-ca-7-ngay-that-vui-voi-toi', '10', 'Saturday 17/06/2017, 03:59:45 pm', 'Thursday 27/07/2017, 02:21:49 pm', 'cam on quyen, quyen truong, ban lop  12 cua luc, 7 ngay nhan tin, hinh phat', 'Cảm ơn Quyên vì tất cả, 7 ngày thật vui với tôi, Chào Quyên nhé (thôi cho phép tôi vẫn gọi là cô đi, vì quen rồi). Chào cô, bây giờ đang là khoảng thời gian thực tập của cô có lẽ cũng bận rộn, hoặc ít nhất cũng phải làm quen với môi trường mới, thay đổi cuộc sống mới cũng giống như đi làm vậy nên giờ đây cô cũng không còn nhiều thời gian \"suy diễn\" nữa.', 0),
(131, 485466420, 1, 0, 1, 'Từ 6h sáng đến 6h tối, nắng mưa, gió bão có cả', '', 'emegazine', '', '', '', '1497795618.jpg', 'emegazine', 0, 'tu-6h-sang-den-6h-toi-nang-mua-gio-bao-co-ca', '10', 'Sunday 18/06/2017, 09:20:18 pm', 'Thursday 27/07/2017, 04:15:17 pm', 'pham luc, yen tuyet, ky niem, hinh anh', 'Kỷ niệm - PL và YT Xin chào cô Yến Tuyết Hôm nay cô lại có dịp lên sóng trên kênh truyền \"ảnh\" này của chúng tôi, được biết đây là lần thứ 2 cô lên sóng ở trên này, không biết cảm giác của cô có giống như lúc đầu không?\r\n\r\nĐược biết hôm nay bạn không có mặt ở KTX trong suốt một ngày, không biết bạn đi đâu và làm gì, gia đình rất lo lắng.', 0),
(132, 0, 0, 0, 1, 'V.A', 'photo', 'detail', '<3 ...', '<3', '<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/2(2).jpg\" style=\"height:658px; margin:auto; width:720px\" /></p>\r\n', '1498405335-2 - Copy.jpg', 'news', 0, 'v-a', '', 'Sunday 25/06/2017, 10:42:15 pm', '', 'va', 'Van Anh ', 0),
(133, 0, 1, 0, 1, 'Kết thúc 1 tháng hợp đồng (03-7-2017)', '0', 'detail', 'Điều cuối cùng em mong những giây phút bên nhau cả hai lúc nào cũng vui vẻ, cũng mong mỗi lần gặp có thể ...', 'Điều cuối cùng em mong những giây phút bên nhau cả hai lúc nào cũng vui vẻ, cũng mong mỗi lần gặp có thể cùng anh trò chuyện “nghiêm túc” nhiều hơn vì em thật sự muốn hiểu tất cả mọi thứ về anh. Dù có bao nhiêu hợp đồng được soạn ra đi nữa nhưng em tin ...', '<p>Ch&agrave;o bạn PL tươi xanh!!</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/2(3).jpg\" style=\"height:428px; margin:auto; width:764px\" /></p>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">Th&aacute;ng trước m&igrave;nh c&oacute; đọc một b&agrave;i c&oacute; tựa đề &ldquo; hợp đồng v&agrave; chuyện b&ecirc;n lề&rdquo; tr&ecirc;n 123nam.com m&igrave;nh kh&aacute; l&agrave; th&iacute;ch v&igrave; nội dung của bản hợp đồng thật độc đ&aacute;o chưa thấy c&oacute; dấu hiệu đụng h&agrave;ng. M&igrave;nh phải c&ocirc;ng nhận đối t&aacute;c của bạn l&agrave; một người rất uy t&iacute;n v&agrave; tr&ecirc;n cả tuyệt vời. M&igrave;nh cũng c&oacute; thấy bằng c&ocirc;ng nhận tho&aacute;t FA m&agrave; thần Cupid cấp cho bạn rồi, đẹp đấy nh&eacute;, thật đ&aacute;ng tự h&agrave;o.</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">H&ocirc;m nay 3-7 nh&acirc;n dịp tr&ograve;n 1 th&aacute;ng kể từ khi hợp đồng y&ecirc;u &ldquo;kỳ qu&aacute;i&rdquo; của ch&uacute;ng m&igrave;nh được k&yacute; v&agrave; cũng l&agrave; ng&agrave;y hợp đồng n&agrave;y chấm dứt, để nh&igrave;n lại những điều đ&atilde; xảy ra trong suốt 1 th&aacute;ng định mệnh n&agrave;y v&agrave; cũng để b&agrave;y tỏ cảm x&uacute;c của b&ecirc;n B đối với b&ecirc;n A, b&ecirc;n B c&oacute; v&agrave;i lời muốn chia sẻ.</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\"><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/3(2).jpg\" style=\"height:400px; margin:auto; width:764px\" /></div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">\r\n<div class=\"_2cuy _3dgx _2vxa\">Anh c&oacute; c&ocirc;ng nhận bản hợp đồng của m&igrave;nh chỉ k&yacute; cho c&oacute; h&igrave;nh thức th&ocirc;i kh&ocirc;ng? Ngay từ ng&agrave;y đầu ti&ecirc;n sau khi k&yacute; anh đ&atilde; vi phạm điều 1 của hợp đồng ngay v&agrave; tất nhi&ecirc;n sau đ&oacute; lần n&agrave;o gặp cũng vi phạm đều như chong ch&oacute;ng, em cũng chưa thấy ai l&aacute;ch luật do em đề ra gh&ecirc; ghớm như anh. Bảo anh về sớm trước 11h khi b&ecirc;n B y&ecirc;u cầu, vậy m&agrave; anh k&ecirc;u nếu trước 11h m&agrave; em kh&ocirc;ng n&oacute;i g&igrave; th&igrave; coi như anh kh&ocirc;ng vi phạm, thật l&agrave; phi l&yacute; m&agrave;. Cho n&ecirc;n chỉ c&oacute; mỗi một m&igrave;nh em thực hiện tốt điều 1 của anh th&ocirc;i đấy nh&eacute; :D</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">Sang điều 2 em thừa nhận l&agrave; anh chấp h&agrave;nh tốt hơn điều 1 thật, kh&ocirc;ng y&ecirc;u cầu em l&agrave;m g&igrave; vượt qu&aacute; khả năng nhưng nếu nghĩ kĩ hơn một ch&uacute;t th&igrave; &ldquo;chịu nhột tốt&rdquo; cũng l&agrave; một khả năng trời cho đấy anh &agrave; m&agrave; khả năng n&agrave;y của em th&igrave; hơi bị hạn chế n&ecirc;n em kh&ocirc;ng chắc c&oacute; thể bỏ qua cho anh dễ vậy đ&acirc;u, bằng chứng l&agrave; em đ&atilde; trả th&ugrave; lại y chang v&agrave; kết quả nhận lại thật l&agrave; một ngoạn mục, th&igrave; ra kh&ocirc;ng phải một m&igrave;nh em bị như vậy, ahihi c&agrave;ng nghĩ c&agrave;ng thấy buồn cười. :Đ</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">Như anh n&oacute;i điều cuối c&ugrave;ng của cả hai đứa c&oacute; lẽ l&agrave; nghi&ecirc;m t&uacute;c nhất, &ldquo;tắc k&egrave;&rdquo; m&agrave; ha :D nhưng c&oacute; lẽ cả hai chỉ l&agrave;m tốt được khoảng 80% th&ocirc;i. Em biết mỗi l&uacute;c em giận, em kh&ocirc;ng trả lời tin nhắn hay nghe điện thoại của anh th&igrave; l&agrave;m sao c&ograve;n &ldquo;dễ thương&rdquo; được . C&ograve;n điều 3 của em đ&uacute;ng l&agrave; c&oacute; phần kh&oacute; thực hiện thật &ldquo; b&ecirc;n A chỉ được dễ thương khi nhắn tin v&agrave; gặp mặt b&ecirc;n B, quan t&acirc;m chủ động tắc k&egrave; b&ecirc;n B mọi l&uacute;c mọi nơi&rdquo; v&igrave; em biết với t&iacute;nh c&aacute;ch &ldquo;anh trai quốc d&acirc;n&rdquo; như anh cộng th&ecirc;m 1 loạt chiến t&iacute;ch NYC th&igrave; chỉ tỏ ra &acirc;n cần, dễ thương với 1 m&igrave;nh em dường như l&agrave; điều kh&ocirc;ng thể :( . Nhưng hơn hết sau tất cả những l&uacute;c giỡn đ&ugrave;a, những c&acirc;u n&oacute;i c&oacute; vẻ &ldquo;quyết t&acirc;m&rdquo; g&acirc;y chiến với nhau th&igrave; trong l&ograve;ng cả hai vẫn thừa biết t&igrave;nh cảm của đối phương đối với m&igrave;nh như thế n&agrave;o rồi, chỉ cần như vậy cũng đủ. :))</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">Trải qua 1 th&aacute;ng b&ecirc;n nhau với đủ mọi thể loại cảm x&uacute;c từ y&ecirc;u, giận, hờn ghen v&agrave; cả những gi&acirc;y ph&uacute;t nhớ, mong ng&oacute;ng nhau nữa, anh c&oacute; hối hận điều g&igrave; kh&ocirc;ng? Em cảm gi&aacute;c m&igrave;nh chỉ vừa mới đi qua một đoạn rất ngắn tr&ecirc;n chuyến h&agrave;nh tr&igrave;nh d&agrave;i của ch&uacute;ng m&igrave;nh nhưng em tr&acirc;n trọng điều đ&oacute; c&agrave;ng tr&acirc;n trọng mối quan hệ n&agrave;y hơn. Em kh&ocirc;ng cho đ&acirc;y l&agrave; 1 bản hợp đồng thất bại ( v&igrave; kh&ocirc;ng ai l&agrave;m tốt cả) nhưng mỗi lần nh&igrave;n hay đọc lại tự dưng em lại thấy vui lạ, chắc do nh&igrave;n như kiểu t&igrave;nh y&ecirc;u con n&iacute;t vậy m&agrave; :v . Thật buồn khi nay sẽ l&agrave; ng&agrave;y hợp đồng n&agrave;y chấm dứt tuy nhi&ecirc;n điều đ&oacute; kh&ocirc;ng c&ograve;n quan trọng nữa v&igrave; thần Cupid Cute vừa li&ecirc;n lạc v&agrave; n&oacute;i với em rằng d&ugrave; hợp đồng c&ograve;n hay kh&ocirc;ng th&igrave; cả hai cũng kh&oacute; m&agrave; tho&aacute;t khỏi nhau được n&ecirc;n tụi con h&atilde;y tự lo liệu đi. &Ocirc;i nghe xong m&agrave; thấy thảm thương, thảm thiết cho cuộc đời m&igrave;nh qu&aacute;.</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">Anh biết rồi đấy v&igrave; mức độ vi phạm nghi&ecirc;m trọng v&agrave; chưa thấy chiều hướng sửa chữa của b&ecirc;n A n&ecirc;n b&ecirc;n B quyết định phải phạt b&ecirc;n A thật nặng v&agrave;o. Tất nhi&ecirc;n một bản hợp đồng y&ecirc;u d&agrave;i hạn để &ldquo;tr&oacute;i buộc&rdquo; b&ecirc;n A l&agrave; một h&igrave;nh phạt thấu t&igrave;nh hợp l&yacute; nhất, 1 th&aacute;ng, 1 năm, 10 năm hay 1 đời anh tự chọn đi. Nhưng em n&oacute;i trước nếu anh vẫn chọn 1 th&aacute;ng nữa th&igrave; sau 1 th&aacute;ng m&igrave;nh cũng phải mất c&ocirc;ng soạn tiếp th&ecirc;m hợp đồng th&ocirc;i h&agrave;, n&ecirc;n c&acirc;n nhắc nh&aacute;, hehe :)))</div>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/1(1).jpg\" style=\"height:458px; margin:auto; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điều cuối c&ugrave;ng em mong những gi&acirc;y ph&uacute;t b&ecirc;n nhau cả hai l&uacute;c n&agrave;o cũng vui vẻ, cũng mong mỗi lần gặp c&oacute; thể c&ugrave;ng anh tr&ograve; chuyện &ldquo;nghi&ecirc;m t&uacute;c&rdquo; nhiều hơn v&igrave; em thật sự muốn hiểu tất cả mọi thứ về anh. D&ugrave; c&oacute; bao nhi&ecirc;u hợp đồng được soạn ra đi nữa nhưng em tin chắc rằng chỉ cần c&ograve;n thương nhau v&agrave; tin tưởng lẫn nhau th&igrave; mọi thứ đều c&oacute; thể thực hiện được m&agrave; kh&ocirc;ng cần những điều khoản r&agrave;ng buộc &ldquo;v&ocirc; nghĩa&rdquo;. Cảm ơn anh v&igrave; đ&atilde; đồng h&agrave;nh c&ugrave;ng em trong những th&aacute;ng ng&agrave;y qua. Love &lt;3</p>\r\n\r\n<p style=\"text-align:right\"><strong>Trần Yến Tuyết</strong></p>\r\n\r\n<p>-----</p>\r\n\r\n<p>Cảm ơn em về b&agrave;i viết n&agrave;y, b&agrave;i hay lắm. Anh sẽ đọc n&oacute; lại v&agrave; đọc nữa để cảm nhận được hết cảm x&uacute;c v&agrave; mong muốn của em.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"_2cuy _3dgx _2vxa\">&nbsp;</div>\r\n', '1499653140-anigif-iloveimg-compressed.gif', 'news', 0, 'ket-thuc-1-thang-hop-dong-03-7-2017', '', 'Tuesday 4/07/2017, 06:04:22 pm', '', 'hop dong yeu, pham luc, yen tuyet', 'Kết thúc 1 tháng hợp đồng (3-7-2017). Chào bạn PL tươi xanh! Tháng trước mình có đọc một bài có tựa đề “ hợp đồng và chuyện bên lề” trên 123nam.com mình khá là thích vì nội dung của bản hợp đồng thật độc đáo chưa thấy có dấu hiệu đụng hàng. Mình phải công nhận đối tác của bạn là một người rất uy tín và trên cả tuyệt vời. Mình cũng có thấy bằng công nhận thoát FA mà thần Cupid cấp cho bạn rồi, đẹp đấy nhé, thật đáng tự hào.', 1);
INSERT INTO `tin_tuc` (`id`, `idrandom`, `publishing`, `top`, `privated`, `tieu_de`, `icon`, `typenews`, `overShort`, `tom_tat`, `noi_dung`, `hinh`, `loai_tin`, `kieu_tin`, `url`, `user`, `created`, `updated`, `keyword`, `description`, `issetSurvey`) VALUES
(134, 0, 1, 0, 1, 'Nhật ký xa anh', '0', 'detail', 'Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết ...', 'Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứa', '<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D1.jpg\" style=\"height:254px; margin:auto; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 1: </strong></p>\r\n\r\n<blockquote>\r\n<p>H&ocirc;m nay S&agrave;i G&ograve;n đổ mưa k&egrave;m những cơn gi&ocirc;ng lạnh, S&agrave;i G&ograve;n ng&agrave;y đầu kh&ocirc;ng anh v&agrave; chỉ c&oacute; em. C&oacute; một th&uacute; vị l&agrave; thứ hai của 4 tuần trước ch&iacute;nh l&agrave; ng&agrave;y em về Bạc Li&ecirc;u với gia đ&igrave;nh c&ograve;n anh ở lại S&agrave;i G&ograve;n v&agrave; h&ocirc;m nay cũng lại l&agrave; thứ hai, thế l&agrave; sau 1 th&aacute;ng mọi thứ đ&atilde; c&oacute; sự thay đổi, SG v&agrave; BL vẫn thế, chỉ kh&aacute;c kẻ ở người đi m&agrave; th&ocirc;i. Đ&uacute;ng l&agrave; l&ecirc;n đ&acirc;y đ&atilde; được nửa th&aacute;ng rồi hiếm hoi lắm mới c&oacute; một buổi tối em chỉ ở ph&ograve;ng v&agrave; kh&ocirc;ng đi đ&acirc;u cả n&ecirc;n ch&iacute;nh em cũng cảm thấy kh&ocirc;ng quen lắm, chắc cũng v&igrave; một phần thiếu vắng anh :). Cả ng&agrave;y h&ocirc;m nay đối với em kh&aacute; l&agrave; nhạt, chỉ đơn giản l&ecirc;n trường cả buổi s&aacute;ng sau 1 giấc ngủ vỏn vẹn chưa đầy 3 tiếng, đầu &oacute;c cứ xoay v&ograve;ng, tại anh cả đấy nh&eacute; :v .Cả buổi chiều em chỉ ngủ b&ugrave; được 1 tiếng (t&aacute;c dụng phụ của ly cafe to đ&ugrave;ng ban s&aacute;ng m&agrave; e uống @.@) v&agrave; rồi lại ngồi m&aacute;y xem mấy thứ linh tinh đến tối, tự dưng cảm thấy buồn buồn. Em c&oacute; 1 tật l&agrave; hay c&oacute; cảm gi&aacute;c buồn vu vơ m&agrave; kh&ocirc;ng c&oacute; một l&yacute; do n&agrave;o cả, những l&uacute;c đ&oacute; kh&ocirc;ng muốn l&agrave;m g&igrave; cả cũng kh&ocirc;ng suy nghĩ được g&igrave; chỉ thấy ch&aacute;n lắm, ch&aacute;n bản th&acirc;n th&ocirc;i, nhưng ng&agrave;y mai em sẽ cố gắng l&agrave;m nhiều thứ c&oacute; &iacute;ch hơn,tự chăm s&oacute;c sức khỏe m&igrave;nh nhiều hơn b&ugrave; cho 2 tuần ăn chơi vừa qua, l&uacute;c anh l&ecirc;n em c&oacute; thể cho anh đọc tuần nhật k&yacute; kh&ocirc;ng anh n&agrave;y để anh biết kh&ocirc;ng c&oacute; anh em vẫn sống khỏe n&egrave;, h&egrave; h&egrave;. V&igrave; chỉ mới l&agrave; ng&agrave;y đầu ti&ecirc;n chưa gặp th&ocirc;i n&ecirc;n kh&ocirc;ng hẳn l&agrave; nhớ anh qu&aacute; nhưng vẫn nghĩ về anh nhiều, đ&uacute;ng l&agrave; tuy đều xa nhau, nhưng cảm gi&aacute;c 1 m&igrave;nh ở tr&ecirc;n SG lại kh&aacute;c hẳn cảm gi&aacute;c l&uacute;c e về qu&ecirc;, hơi buồn buồn nhưng cũng th&uacute; vị đ&oacute; chứ :D . Anh giờ em buồn ngủ qu&aacute; rồi chẳng biết viết g&igrave; nữa, sau 1 tuần vật v&atilde; nay phải ngủ sớm hoy, giờ m&agrave; được &ocirc;m anh 1 c&aacute;i rồi ngủ chắc sướng nhắm :D&nbsp; . Chắc chắn l&agrave; giờ n&agrave;y anh ngủ rồi v&igrave; l&uacute;c n&atilde;y c&oacute; nt qua điện thoại cho em m&agrave;, hehe n&ecirc;n th&ocirc;i ch&uacute;c anh ngủ ngon nha!!!!</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 2:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D2.jpg\" style=\"height:257px; margin:auto; width:700px\" /></p>\r\n\r\n<blockquote>\r\n<p>Kh&ocirc;ng thể tin được h&ocirc;m nay S&agrave;i G&ograve;n lại ẩm ướt, mưa từ chiều đến giờ kh&ocirc;ng ngớt như thể kh&ocirc;ng cho người ta đi đ&acirc;u vậy &iacute;, hic. B&acirc;y giờ l&agrave; 7h em mới tắm xong, lạnh t&ecirc; t&aacute;i, thế l&agrave; tối nay lại kh&ocirc;ng thể đi ra ngo&agrave;i ăn với con bạn -_- . Đang thầm nghĩ x&iacute;u nữa mưa m&agrave; c&oacute; tạnh mấy đ&ocirc;i ra ghế đ&aacute; ngồi chắc lau cực lắm, haha. Nằm ườn ở ph&ograve;ng chắc tối nay lại ch&ugrave;m mền xem th&ecirc;m 1 bộ film hay nằm đọc cho hết cuốn s&aacute;ch h&ocirc;m bữa rồi đi ngủ sớm, giờ đang ở ph&ograve;ng một m&igrave;nh th&egrave;m n&oacute;i chuyện với người n&agrave;o đ&oacute; gh&ecirc; @.@. Người th&igrave; vui rồi, kh&ocirc;ng biết b&acirc;y giờ đang l&agrave;m g&igrave; nhỉ, ở BL chắc kh&ocirc;ng thiếu người n&oacute;i chuyện hay đi chơi chung đ&acirc;u. Tối qua 11h em ngủ rồi bảo m&igrave;nh l&agrave; s&aacute;ng nay dậy sớm chạy bộ cho khỏe người vậy m&agrave; s&aacute;ng sớm mờ mờ mắt dậy thấy sương lạnh qu&aacute; thế l&agrave; cong người ngủ qu&ecirc;n mất, ahihi, th&ocirc;i th&igrave; ng&agrave;y mai dậy sớm lại :v. Anh &agrave;, tự dưng ngồi viết mấy d&ograve;ng linh tinh n&agrave;y m&agrave; nhớ anh gh&ecirc;, muốn gặp rồi đi ăn, đi dạo với anh qu&aacute;, l&ecirc;n nhanh với em nh&eacute; :) ...B&acirc;y giờ 11h rồi anh,k định viết th&ecirc;m đoạn n&agrave;y đ&acirc;u v&igrave; tưởng đ&acirc;u em viết mấy d&ograve;ng tr&ecirc;n xong c&oacute; thể cất anh qua một g&oacute;c rồi cuộn m&igrave;nh 2 tiếng coi &quot;Before we go&quot; xong l&agrave; em đi ngủ được rồi ai ngờ đ&acirc;u &quot;người xa lạ&quot; ( anh biết ai rồi đ&uacute;ng k? ) gọi lại n&oacute;i chuyện gần nửa tiếng xong c&ograve;n nhắn tin nữa, đ&uacute;ng bực m&igrave;nh thật m&agrave; ha. Hồi xưa em k&igrave; thị lắm mấy ai y&ecirc;u nhau m&agrave; cứ n&oacute;i ch&aacute;o điện thoại suốt ng&agrave;y, kiểu như gặp nhau, đi chung với nhau bla bla rồi m&agrave; c&ograve;n chưa hết chuyện để n&oacute;i hả trời. Vậy m&agrave; cứ mỗi lần gọi mess với anh thể n&agrave;o cũng cả tiếng v&agrave; tối nay cũng hai mươi mấy ph&uacute;t rồi chứ đ&acirc;u :v , chẳng c&oacute; qu&aacute;i g&igrave; để n&oacute;i cả nhiều khi chỉ im lặng rồi cứ &quot;alo, sao k n&oacute;i g&igrave; đi? &quot; nhưng chắc chủ yếu để nghe giọng của nhau th&ocirc;i :) . T&igrave;nh y&ecirc;u l&uacute;c n&agrave;y đẹp thật chứ, chỉ cần nhớ nhau l&agrave; c&oacute; thể chạy tới gặp, muốn &ocirc;m l&agrave; c&oacute; thể ngồi suốt đ&ecirc;m, buồn th&igrave; trưa cứ gọi anh/em qua ăn trưa nha :)) nhưng sau n&agrave;y chắc cũng tầm 1,2 th&aacute;ng nữa th&ocirc;i những thứ n&agrave;y sẽ bớt dần kh&ocirc;ng c&ograve;n d&iacute;nh với nhau hay cứ nhắn tin nhiều vậy nữa n&ecirc;n cũng tập quen đi ha, nh&igrave;n mặt qu&agrave;i cũng ch&aacute;n m&agrave; @.@ . Th&ocirc;i em đi ngủ đ&acirc;y, thật sự th&igrave; mắt mỏi rồi kh&ocirc;ng thể l&agrave;m g&igrave; kh&aacute;c được nữa. Good night anh!!</p>\r\n</blockquote>\r\n\r\n<p><strong>DAY 3:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D3.jpg\" style=\"height:260px; margin:auto; width:700px\" /></strong></p>\r\n\r\n<blockquote>\r\n<p>Ng&agrave;y thứ ba kh&ocirc;ng được gặp anh, mọi chuyện vẫn ổn cả :) . H&ocirc;m nay em c&oacute; nhiều suy nghĩ lạ lắm, tự dưng em lại c&oacute; cảm gi&aacute;c bất an về mọi thứ, về bản th&acirc;n,về tương lai m&igrave;nh v&agrave; cả chuyện hai đứa. Em xin lỗi anh nhiều lắm v&igrave; cho đến giờ c&oacute; l&uacute;c buồn em vẫn c&ograve;n nghĩ liệu m&igrave;nh quyết định y&ecirc;u anh l&agrave; đ&uacute;ng hay sai, em n&oacute;i sai kh&ocirc;ng phải v&igrave; em kh&ocirc;ng c&oacute; t&igrave;nh cảm với anh m&agrave; do em sợ bản th&acirc;n em kh&ocirc;ng đủ can đảm để đưa t&igrave;nh cảm n&agrave;y tiến xa nhiều hơn nữa m&agrave; nếu đ&atilde; sợ rồi th&igrave; c&ograve;n bắt đầu l&agrave;m g&igrave;, kh&ocirc;ng phải biết sai rồi m&agrave; vẫn cố chấp sai &agrave;. Nhưng rồi em vẫn cứ th&iacute;ch vẫn cứ muốn để mặc mọi chuyện theo hướng tự nhi&ecirc;n v&agrave; đối mặt với n&oacute; d&ugrave; em biết em sẽ kh&oacute; giải quyết những vấn đề lớn, n&oacute;i chung em cũng m&acirc;u thuẫn v&agrave; kh&ocirc;ng biết n&oacute;i ra thế n&agrave;o nữa haizz. Nhưng anh biết đấy người nhỏ n&ecirc;n n&atilde;o cũng nhỏ m&agrave; :v, suy nghĩ một ch&uacute;t em lại qu&ecirc;n v&agrave; lại vui vẻ b&igrave;nh thường n&ecirc;n đừng để &yacute; mấy d&ograve;ng em g&otilde; ở tr&ecirc;n với lại khi đọc xong rồi đừng hỏi lại em nh&eacute; v&igrave; em sẽ kh&ocirc;ng nhớ m&igrave;nh đ&atilde; viết g&igrave; đ&acirc;u, chỉ nhớ mỗi một m&igrave;nh bạn th&ocirc;i đấy &lt;3 hehe. Muốn &ocirc;m cổ, nắm tay anh qu&aacute;, sau n&agrave;y đi đ&acirc;u chung nắm tay em nhiều hơn nh&eacute; :). Nay kh&ocirc;ng c&oacute; t&acirc;m trạng lắm m&agrave; ch&iacute;nh x&aacute;c cũng kh&ocirc;ng c&oacute; g&igrave; đặc biệt n&ecirc;n kh&ocirc;ng muốn kể g&igrave; hết. Vậy nha :)</p>\r\n\r\n<p>PL si&ecirc;u kh&oacute; ưa!!</p>\r\n</blockquote>\r\n\r\n<div class=\"_39k5 _5s6c\">\r\n<div>\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 4:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D4.jpg\" style=\"height:260px; margin:auto; width:700px\" /></p>\r\n</div>\r\n</div>\r\n\r\n<blockquote>\r\n<p>S&agrave;i G&ograve;n nhớ Anh...</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 5:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D5.jpg\" style=\"height:256px; margin:auto; width:700px\" /></strong></p>\r\n\r\n<blockquote>\r\n<p>PL đ&aacute;ng gh&eacute;t, h&ocirc;m nay d&aacute;m th&uacute; tội với em l&agrave; đ&atilde; nắm tay c&ocirc; g&aacute;i kh&aacute;c &agrave; -_- . Kh&ocirc;ng gần em n&ecirc;n anh gan v&agrave; liều đến vậy cơ &agrave;. Anh l&ecirc;n đ&acirc;y thử đi, em băm nhỏ ra m&agrave; ăn đấy, hừmmmm &gt;.&lt; Tối qua kh&ocirc;ng nhắn tin cho em th&igrave; th&ocirc;i v&igrave; em kh&ocirc;ng cần phải nt mỗi ng&agrave;y l&agrave;m g&igrave; cả, đ&aacute;ng lẽ ra h&ocirc;m qua l&agrave; đ&ecirc;m 8 tiếng y&ecirc;n giấc của em rồi vậy m&agrave; s&aacute;ng sớm anh biết em thấy g&igrave; kh&ocirc;ng ? FB ngập ảnh của bạn Pham Luc được tag, đi ri&ecirc;ng với con g&aacute;i vui qu&aacute; ha tuy em biết r&otilde; người n&agrave;y với anh thế n&agrave;o rồi, tiếp th&igrave; sao? mở tn to&agrave;n thấy lời xin lỗi, ok nếu chỉ l&agrave; v&ocirc; &yacute; nắm tay phớt qua th&igrave; anh sẽ kh&ocirc;ng nhớ, đằng n&agrave;y anh phải khai v&agrave; thấy c&oacute; lỗi n&ecirc;n mới n&oacute;i với em, vậy sự việc l&agrave; thế n&agrave;o đ&acirc;y, anh muốn em hiểu như thế n&agrave;o? Em im lặng kh&ocirc;ng n&oacute;i g&igrave; kh&ocirc;ng c&oacute; nghĩa em bỏ mặc, chỉ thấy buồn chả muốn n&oacute;i g&igrave; nghe g&igrave; th&ecirc;m nữa cả. Thật l&ograve;ng những l&uacute;c anh l&agrave;m em giận hay buồn em kh&ocirc;ng cần nghe anh xin lỗi qu&aacute; nhiều lần v&igrave; kh&ocirc;ng cần thiết lắm ( đang giận n&oacute;i g&igrave; cũng v&ocirc; &iacute;ch :3 ) chỉ cần anh thấy sai về h&agrave;nh động đ&oacute; v&agrave; hiểu một ch&uacute;t cảm gi&aacute;c em th&ocirc;i l&agrave; đủ rồi. Nhưng em cũng tiết lộ với anh một điều nh&eacute;, một điều c&oacute; lẽ em nghĩ l&agrave; điều quan trọng nhất em d&agrave;nh cho anh, đ&oacute; l&agrave; niềm tin :) . D&ugrave; em giận hay suy diễn vấn đề lung tung hay n&oacute;i g&igrave; g&igrave; đ&oacute; với anh nhưng cuối c&ugrave;ng em muốn anh biết l&agrave; em vẫn tin anh, kh&ocirc;ng phải tin kiểu tuyệt đối mọi thứ m&agrave; l&agrave; tin tưởng anh sẽ kh&ocirc;ng l&agrave;m g&igrave; qu&aacute; đ&aacute;ng ảnh hưởng đến mối quan hệ của hai đứa. Nếu l&agrave; con g&aacute;i, th&igrave; anh sẽ biết thật l&ograve;ng họ chẳng bao giờ th&iacute;ch việc bạn nam nhắn tin, đi chơi, hay gi&uacute;p đỡ qu&aacute; nhiều cho những người con g&aacute;i kh&aacute;c cho d&ugrave; người đ&oacute; c&oacute; l&agrave; bạn th&acirc;n, bạn học đi chăng nữa, ri&ecirc;ng em em sẽ chấp nhận được những việc đ&oacute; chỉ l&agrave; nhiều l&uacute;c buồn ghen chọc anh x&iacute;u th&ocirc;i nhưng vẫn mong anh sẽ biết l&agrave;m thế n&agrave;o để tốt nhất cho tất cả m&agrave; vẫn kh&ocirc;ng l&agrave;m em buồn hay đ&aacute;nh mất niềm tin ở em :) . Lời cuối thật sự cảm ơn anh v&igrave; đ&atilde; th&agrave;nh thật khai b&aacute;o về mọi thứ, kh&ocirc;ng chỉ ri&ecirc;ng chuyện n&agrave;y m&agrave; về tất cả từ qu&aacute; khứ hay những t&igrave;nh cảm ri&ecirc;ng của anh đều kể với em, em th&iacute;ch thế n&ecirc;n tiếp tục ph&aacute;t huy anh nha,m&igrave;nh lại huề h&igrave;.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 6:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D6.jpg\" style=\"height:251px; margin:auto; width:700px\" /></strong></p>\r\n\r\n<blockquote>\r\n<p>Chẳng biết từ khi n&agrave;o m&igrave;nh mặc định thứ 7 l&agrave; ng&agrave;y đi với nhau anh nhỉ? Nhưng h&ocirc;m nay c&oacute; vẻ như mỗi người một nơi, con đường kỷ niệm dạo n&agrave;y bị l&atilde;ng qu&ecirc;n rồi :v . Giờ gần 10h rồi, vừa nhắn tin với anh vừa ngồi viết c&aacute;i n&agrave;y, thật l&agrave; cũng hết thời gian m&agrave; chẳng kh&aacute;c g&igrave; đi chơi chung @.@. Cũng nhanh thật đấy mới tuần trước thứ 7 qua đ&acirc;y th&ocirc;i thế m&agrave; 1 tuần rồi, c&aacute;i h&ocirc;m m&agrave; vừa qua c&aacute;i nguy&ecirc;n ktx c&uacute;p điện đấy :v . Mấy nay ph&ograve;ng vắng đ&igrave;u hiu, cũng kh&ocirc;ng biết l&agrave; l&uacute;c trước khi quen anh, nhắn tin hay đi chơi với anh, buổi tối thỉnh thoảng ngo&agrave;i đi với bạn ra th&igrave; em l&agrave;m g&igrave; nhỉ? chứ mấy nay em thấy ch&aacute;n qu&aacute; cơ như tự kỷ, hic. Muốn nh&igrave;n mặt v&agrave; n&oacute;i chuyện với anh gh&ecirc;. Đang thầm nghĩ l&agrave; tuần sau m&agrave; anh l&ecirc;n rồi c&aacute;i mong muốn được gặp chắc bị dập tắt ngay qu&aacute;, c&oacute; khi em c&ograve;n chẳng được ngủ y&ecirc;n đ&ecirc;m n&agrave;o nữa cơ, kh&ocirc;ng biết n&ecirc;n mừng hay buồn đ&acirc;y nhưng vẫn th&iacute;ch gặp mới sợ chứ :) . X&iacute;u viết xong c&aacute;i n&agrave;y c&oacute; n&ecirc;n gọi cho anh kh&ocirc;ng nhỉ? Th&ocirc;i để gọi nghe giọng t&yacute; đ&atilde; rồi ngủ, hehe . Nhớ nhiều lắm nh&eacute; :))))</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>DAY 7:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/D7.jpg\" style=\"height:262px; margin:auto; width:700px\" /></strong></p>\r\n\r\n<blockquote>\r\n<p>Hi anh, vậy l&agrave; cuối c&ugrave;ng cũng đến ng&agrave;y thứ 7 c&oacute; lẽ l&agrave; ng&agrave;y cuối c&ugrave;ng em viết c&aacute;i nhật k&yacute; xa x&ocirc;i x&agrave;m x&iacute; n&agrave;y, sắp kết th&uacute;c th&aacute;ng ng&agrave;y 1 m&igrave;nh rồi đ&acirc;y ,tuy l&agrave; nhiều h&ocirc;m thật sự em kh&ocirc;ng c&oacute; t&acirc;m trạng hay to&agrave;n viết những c&aacute;i vu vơ kh&ocirc;ng quan trọng với anh nhưng em vẫn muốn đ&aacute;nh dấu một c&aacute;i g&igrave; đ&oacute; từng ng&agrave;y tuy kh&ocirc;ng gặp anh nhưng vẫn nghĩ đến anh. Để xem c&oacute; n&ecirc;n cho anh đọc kh&ocirc;ng đ&atilde;. Ng&agrave;y mai em sẽ kh&ocirc;ng phải viết linh tinh vậy nữa v&igrave; anh thừa biết mai l&agrave;m g&igrave; c&oacute; thời gian nữa @.@ nhưng b&ugrave; lại em được thấy anh, được nh&igrave;n nụ cười sau cả tuần rồi kh&ocirc;ng gặp :) , tự nhi&ecirc;n nhắc l&agrave;m nhớ anh gh&ecirc; ha. Mọi ng&agrave;y em hay viết tầm 11h viết xong th&igrave; đi ngủ m&agrave; h&ocirc;m nay em mệt qu&aacute;, c&oacute; việc n&ecirc;n phải ngồi nh&igrave;n m&aacute;y suốt ng&agrave;y, b&acirc;y giờ mới 7h hơn m&agrave; mắt đ&atilde; mờ, đầu nhức rồi n&agrave;y n&ecirc;n phải viết c&aacute;i n&agrave;y sớm rồi dẹp lu&ocirc;n m&aacute;y chứ để tối lại kh&ocirc;ng nh&igrave;n nổi nữa. H&ocirc;m nay em thấy mệt mỏi, stress 1 v&agrave;i thứ lắm :( , chắc cả tuần &ocirc;m lap nhiều qu&aacute; n&ecirc;n sắp đi&ecirc;n rồi, hơ hơ. &Agrave; tuần sau h&ocirc;m n&agrave;o rảnh em kh&ocirc;ng học th&igrave; m&igrave;nh đi chơi anh nh&eacute;, tự nhi&ecirc;n muốn đi đ&acirc;u đ&oacute; với anh, muốn chia sẻ mọi thứ c&ugrave;ng anh v&agrave; gần anh hơn :)). Kh&ocirc;ng biết n&atilde;y giờ đ&atilde; viết linh tinh kh&ocirc;ng đầu kh&ocirc;ng đu&ocirc;i g&igrave; nữa @.@ nhưng th&ocirc;i em chuẩn bị xuống dưới s&acirc;n đi dạo h&oacute;ng gi&oacute; t&yacute; cho thoải m&aacute;i đ&acirc;y hết chịu nổi rồi, xong l&ecirc;n đọc cuốn &quot;b&iacute; k&iacute;p y&ecirc;u&quot; h&ocirc;m n&agrave;o anh đưa đấy ( đọc được 2/3 rồi đấy :D ) . Ch&uacute;c anh 1 ng&agrave;y cuối tuần cũng cuối c&ugrave;ng ở nh&agrave; với gia đ&igrave;nh, bạn b&egrave; vui vẻ. Thế l&agrave; nh&agrave; lại sắp trả anh về cho em, hehe . Đợi anh, nhớ anh nhiều.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:right\"><strong>Trần Yến Tuyết</strong></p>\r\n', '1500973519-D3.jpg', 'news', 0, 'nhat-ky-xa-anh', '', 'Tuesday 25/07/2017, 04:05:19 pm', '', 'nhat ky, pham luc, yen tuyet', 'Nhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứaNhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứaNhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứaNhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứaNhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứaNhật ký xa anh (7 ngày) PL & YT - Dù em giận hay suy diễn vấn đề lung tung hay nói gì gì đó với anh nhưng cuối cùng em muốn anh biết là em vẫn tin anh, không phải tin kiểu tuyệt đối mọi thứ mà là tin tưởng anh sẽ không làm gì quá đáng ảnh hưởng đến mối quan hệ của hai đứa', 0),
(136, 0, 1, 0, 1, '[Hậu trường] Núi Chứa Chan, Đồng Nai (video)', 'video', 'detail', 'Sau bao nhiêu cái đẹp đã được đưa lên trước đó giờ đây chúng ta đến với phần chi tiết hơn của chuyến đi, ...', 'Sau bao nhiêu cái đẹp đã được đưa lên trước đó giờ đây chúng ta đến với phần chi tiết hơn của chuyến đi, hậu trường ...', '<p>H&ocirc;m đ&oacute; anh c&oacute; quay lại video anh đưa l&ecirc;n đ&acirc;y c&oacute; g&igrave; em xem lại nha, l&acirc;u l&acirc;u chuyển qua xem video cho vui, xem h&igrave;nh thấy to&agrave;n đứng im, tạo d&aacute;ng đủ kiểu n&ecirc;n thấy hơi ảo hehe giờ m&igrave;nh chuyển qua xem video cho sinh động (xấu đều).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" src=\"https://www.youtube.com/embed/D1P5OBgk0rQ?rel=0\"></iframe></p>\r\n\r\n<p style=\"text-align:center\"><em><span style=\"color:#0000CD\">N&uacute;i Chứa Chan, Gia L&agrave;o - Đồng Nai P1</span></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" src=\"https://www.youtube.com/embed/-KEkdi5I-nU?rel=0\"></iframe></p>\r\n\r\n<p style=\"text-align:center\"><em><span style=\"color:#0000CD\">N&uacute;i Chứa Chan, Gia L&agrave;o - Đồng Nai P2</span></em></p>\r\n\r\n<p>C&ocirc;ng nhận bạn khỏe thật, m&igrave;nh mỏi hết cả ch&acirc;n xuống n&uacute;i muốn hết nổi m&agrave; bạn vẫn b&igrave;nh thường được, c&ocirc;ng nhận khỏe gh&ecirc; ha, ăn &iacute;t m&agrave; &quot;dai&quot; :))</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" src=\"https://www.youtube.com/embed/k58jYfSLXwE?rel=0\"></iframe></p>\r\n\r\n<p style=\"text-align:center\"><em><span style=\"color:#0000CD\">N&uacute;i Chứa Chan, Gia L&agrave;o - Đồng Nai P3</span></em></p>\r\n\r\n<p>Ch&uacute;c em buổi trưa vui vẻ nh&eacute;, l&agrave;m việc nhớ giữ g&igrave;n sức khỏe cafe uống vừa đủ để tỉnh t&aacute;o l&agrave;m việc, học tập th&ocirc;i chứ đừng lạm dụng nhiều qu&aacute; nha, mất đẹp đ&oacute;.</p>\r\n\r\n<p>Y&ecirc;u &lt;3</p>\r\n', '1503982497-title.jpg', 'news', 0, 'hau-truong-nui-chua-chan-dong-nai-video', '', 'Tuesday 29/08/2017, 11:54:57 am', '', '', '', 0),
(337, 0, 1, 0, 1, 'Những điều Tuyết \'cấm\'', '0', 'detail', 'Dưới đây là những điều cấm và mong muốn của bạn Tuyết đã đưa ra và có vẻ bạn ấy đang rất quyết tâm ...', 'Dưới đây là những điều cấm và mong muốn của bạn Tuyết đã đưa ra và có vẻ bạn ấy đang rất quyết tâm thực hiện.', '<p>Sau đ&acirc;y l&agrave; chi tiết nội dung &quot;lệnh cấm&quot; m&agrave; ch&uacute;ng t&ocirc;i mới cập nhật trong s&aacute;ng nay, thứ 7 ng&agrave;y 07/10/2017:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1/ Hạn chế tối đa v&agrave;o nh&agrave; nghỉ, tr&aacute;nh tiếp x&uacute;c những điểm nhạy cảm (mất kiềm chế)</strong></p>\r\n\r\n<p>Lợi &iacute;ch: tr&aacute;nh việc đ&aacute;ng tiếc xảy ra ngo&agrave;i &yacute; muốn, bảo vệ t&igrave;nh cảm &amp; mục đ&iacute;ch đến với nhau, kh&ocirc;ng l&agrave;m gia đ&igrave;nh buồn, tr&aacute;nh l&atilde;ng ph&iacute; thời gian, tiền bạc.</p>\r\n\r\n<p>--&gt; C&oacute; thể thay thế bằng nhiều th&oacute;i quen hoặc niềm vui kh&aacute;c (t&acirc;m sự, đi chơi kh&aacute;m ph&aacute;, học 1 c&aacute;i g&igrave; mới, đi thư viện, nh&agrave; thờ c&ugrave;ng nhau v..v ... VD điển h&igrave;nh th&ocirc;i)</p>\r\n\r\n<p><strong>2/ T&ocirc;n trọng v&agrave; thật sự hiểu nhau</strong></p>\r\n\r\n<p>Chia sẻ với nhau mọi thứ nếu c&oacute; thể (vui, buồn, chuyện gia đ&igrave;nh, c&ocirc;ng việc học tập, c&aacute; nh&acirc;n ...)</p>\r\n\r\n<p>Kh&ocirc;ng chia sẻ chuyện hai đứa (nhất l&agrave; những l&uacute;c đang giận nhau) với người con trai/g&aacute;i kh&aacute;c. Nếu 1 trong 2 kh&ocirc;ng th&iacute;ch c&aacute;ch cư xử th&aacute;i độ hay những chủ đề của người c&ograve;n lại phải thẳng th&aacute;n n&oacute;i --&gt; kh&ocirc;ng im lặng &amp; r&uacute;t kinh nghiệm cho lần sau (người n&agrave;y chấp nhận hoặc người kia thay đổi)</p>\r\n\r\n<p>T&ocirc;n trọng quyền tự do c&aacute; nh&acirc;n của nhau.</p>\r\n\r\n<blockquote>\r\n<p>--&gt; Em sẽ gắng sửa th&aacute;i độ của m&igrave;nh trong nhiều việc v&igrave; em biết nhiều thứ chưa thực sự l&agrave;m anh vui.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/DSC00687%20-%20Copy.jpg\" style=\"height:269px; margin:auto; width:480px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3/ H&ocirc;n n&agrave;o 2 đứa đi l&agrave;m về nếu c&ugrave;ng l&uacute;c c&oacute; thể gặp nhau ăn uống lu&ocirc;n rồi về tắm rửa nghỉ ngơi để thời gian l&agrave;m việc/học tập</strong> (mục đ&iacute;ch chỉ để save thời gian l&agrave;m nhiều thứ c&aacute; nh&acirc;n phấn đấu cho sau n&agrave;y th&ocirc;i, hehe ... Chứ nếu nhớ vẫn gặp nhau như thường :Đ)</p>\r\n\r\n<p><strong>4/ Quan t&acirc;m đến cảm nhận của em nhiều hơn x&iacute;u</strong>, c&oacute; thể nhường em t&yacute; khi c&atilde;i nhau, l&uacute;c em c&oacute; n&oacute;i g&igrave; kh&ocirc;ng vừa &yacute; hoặc l&agrave;m anh buồn h&atilde;y d&ugrave;ng c&aacute;ch n&oacute;i nhẹ nh&agrave;ng &iacute;t l&agrave;m em buồn để n&oacute;i với em, em sẽ sửa (tất nhi&ecirc;n em sẽ sửa v&agrave; thấy m&igrave;nh sai khi bản th&acirc;n anh cũng kh&ocirc;ng l&agrave;m điều đ&oacute; với em). Tại v&igrave; em l&agrave; bạn g&aacute;i anh chứ kh&ocirc;ng phải bạn b&egrave; n&ecirc;n dễ bị tổn thương hơn.</p>\r\n', '1507339104-title_t - Copy.jpg', 'news', 0, 'nhung-dieu-tuyet-cam', '', 'Saturday 7/10/2017, 08:18:24 am', '', 'yen tuyet', 'Dưới đây là những điều cấm và mong muốn của bạn Tuyết đã đưa ra và có vẻ bạn ấy đang rất quyết tâm thực hiện.', 0),
(338, 0, 1, 0, 1, 'Gửi em! Cuối Tuần Ở Bảo Lộc - Lâm Đồng', 'video', 'detail', 'Gần cả tuần rồi anh mới đăng lên, xin lỗi em nhé đăng hơi trễ. Bây giờ xem cũng được để lấy tinh thần ...', 'Gần cả tuần rồi anh mới đăng lên, xin lỗi em nhé đăng hơi trễ. Bây giờ xem cũng được để lấy tinh thần cho cuối tuần này.', '<p>Khởi động cho cuối tuần, h&ocirc;m nay rảnh ở nh&agrave; nằm &quot;dưỡng&quot; n&ecirc;n anh cũng c&oacute; thời gian để đăng những thứ n&agrave;y, mong em sẽ c&oacute; một ng&agrave;y l&agrave;m việc vui vẻ, đừng giận anh nữa. V&igrave; anh kh&ocirc;ng bao giờ c&oacute; &yacute; định l&agrave;m em buồn hay giận đ&acirc;u!</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/1(2).jpg\" style=\"height:562px; margin:auto; width:750px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/2(4).jpg\" style=\"height:562px; margin:auto; width:750px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Linh Quy Ph&aacute;p Ấn c&ugrave;ng bạn Tuyết &quot;tr&ograve;n&quot;</em></p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/3(3).jpg\" style=\"height:562px; margin:auto; width:750px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>C&ograve;n đ&acirc;y l&agrave; anh đ&oacute; :)</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Anh c&oacute; tổng hợp video h&ocirc;m bữa em quay lại, xem video cho vui nh&eacute;:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" src=\"https://www.youtube.com/embed/g04_unZLI2Q\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"img-responsive\" src=\"http://www.123nam.com/public/image_detail/images/Tin_tuc/4.jpg\" style=\"height:562px; margin:auto; width:750px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>S&aacute;ng đi kh&ocirc;ng mưa, trưa đi kh&ocirc;ng mưa nhưng cứ gần tới địa điểm l&agrave; mưa :D Thật th&uacute; dzị.</p>\r\n\r\n<p>Nếu em thấy vui th&igrave; cuối tuần m&igrave;nh đi nữa nha, anh đợi.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1509597508-title - Copy.jpg', 'news', 0, 'gui-em-cuoi-tuan-o-bao-loc-lam-dong', '', 'Thursday 2/11/2017, 11:38:28 am', '', 'Luc Tuyet, Bao Loc Lam Dong, 29,30-10-2017', '[Gửi em! Cuối Tuần Ở Bảo Lộc - Lâm Đồng] Gần cả tuần rồi anh mới đăng lên, xin lỗi em nhé đăng hơi trễ. Bây giờ xem cũng được để lấy tinh thần cho cuối tuần này.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lover` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `salt` text COLLATE utf8_unicode_ci NOT NULL,
  `re_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` int(11) NOT NULL,
  `thang_sinh` int(11) NOT NULL,
  `nam_sinh` int(11) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `adm` int(11) NOT NULL,
  `boss` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lover`, `firstName`, `lastName`, `email`, `password`, `salt`, `re_pass`, `ngay_sinh`, `thang_sinh`, `nam_sinh`, `gioi_tinh`, `adm`, `boss`) VALUES
(1, 0, '', '', 'ngocha@yahoo.com', 'bbc48c7930906f3bded342b86c3a266cf8fed2b4abf329873cea4ed58c532360', '5f5039743793c1a15e4742f1fc171d2bf6043a5e3d5107233fff61fab67263fc', 'ha486', 16, 11, 1997, 0, 0, 0),
(2, 0, '', '', 'trangminh@yahoo.com', 'c867415f124d87668f7eabbdeed7c79cbe9d5e03d90deefb869945e9da1bb216', 'b5015781717dab0244b097164fa39c1e3af70f69267808911f8e7f81e9d6841a', 'c867415f124d87668f7eabbdeed7c79cbe9d5e03d90deefb869945e9da1bb216', 15, 11, 1934, 0, 0, 0),
(3, 0, '', '', 'trangminh@yahoo.com', 'b82d5cde6bacf0c7e04beb8e11b3f469986f6f9c07cb952d88ebb4eeb2bc9c03', '7d19a02bf79928877b3f4c78c5ec396e330c4f7d91901b965f2117f8dbfcc70e', 'b82d5cde6bacf0c7e04beb8e11b3f469986f6f9c07cb952d88ebb4eeb2bc9c03', 15, 11, 1934, 0, 0, 0),
(4, 0, '', '', 'trangminh@yahoo.com', '21059be0fd8f6b6b074307ee82c923176899947fe259ca8aec446a7f9f92d8cb', '29513fa03697b2a432fa2d55a965e5328ed0cbbb310e7112c24589bd20563aa1', '21059be0fd8f6b6b074307ee82c923176899947fe259ca8aec446a7f9f92d8cb', 15, 11, 1934, 0, 0, 0),
(5, 0, '', '', 'ngocddgha@yahoo.com', '0ab9c6e6a00256b5c83a622540271f4d71be111eac794c25343817dc1927b029', '1c1b3c38697bce5e79cee055ca332003703551f53b758b1c4cab952dc97dbd1c', '0ab9c6e6a00256b5c83a622540271f4d71be111eac794c25343817dc1927b029', 15, 11, 1933, 1, 0, 0),
(6, 0, '', '', 'pluc@yahoo.com', 'ecfc92b4168ba6fc50ba8f334bcafe15181e0640e3c5d5063f18dea380b4ddc2', '4593191048ca505fa00ff8012576a15527b835a7bf65d6bffc55cbff6ac3ae6c', 'ecfc92b4168ba6fc50ba8f334bcafe15181e0640e3c5d5063f18dea380b4ddc2', 13, 9, 1935, 1, 0, 0),
(7, 0, '', '', 'vien@yahoo.com', 'fdc1a67ee6a710a8e3fdd3262b5a39667af9ae44d75d45bc670ec8ae9da83331', '3d4c5b5b42a1d33c18843dac65eb59b240c33d07a991819ebf42658f6b3fb729', 'fdc1a67ee6a710a8e3fdd3262b5a39667af9ae44d75d45bc670ec8ae9da83331', 17, 10, 1933, 1, 0, 0),
(8, 0, '', '', 'caodat@gmail.com', 'a445b351ce6d5619ab5a6033a4c0971cee33341be36d3015b05981cca0eafb36', '2e2e50a57ff8c2a67fff54330d326e8c1551a92ae4644b9e7cc9f39ac0d0f7e6', 'a445b351ce6d5619ab5a6033a4c0971cee33341be36d3015b05981cca0eafb36', 7, 11, 1928, 1, 0, 0),
(9, 0, 'Lực', 'Phạm Văn', 'phamvanluc0595@gmail.com', '1d1ea47f470044254541b5a6f58619762bd9658afc0bc8bce6cdae51d8ac5cd9', '6dc2a44ac7a93af3885951352521a85aaa94d8412191d2da95206d850946a30b', '1d1ea47f470044254541b5a6f58619762bd9658afc0bc8bce6cdae51d8ac5cd9', 12, 5, 1995, 1, 0, 0),
(10, 1, 'Boss@', 'Super@', '123naminc@gmail.com', 'c4b1ba4b7771e4c227decca2806539d9233d3821c9413169e91c2a5b6f9473fc', '0dba512732071bf4307e90a8e043733f6a539690e98b67129e36a23fc7f61cc8', 'c4b1ba4b7771e4c227decca2806539d9233d3821c9413169e91c2a5b6f9473fc', 7, 9, 1995, 1, 1, 1),
(11, 0, '', '', 'user@gmail.com', '1b2453580768522c146925b67581c9cdb964ca2a37c255ec2361cd1cc6467c4d', 'bbdca035a215c93220928aea7cf13671f3cbd86fd1c4b3e9c978c8f92c6ecd82', '1b2453580768522c146925b67581c9cdb964ca2a37c255ec2361cd1cc6467c4d', 11, 9, 1930, 1, 0, 0),
(12, 0, '', '', 'halt@gmail.com', '7fb04607bbcfa24bced8aa4ac3141c67e0a24a2c7bc126461522b9da8442c0c1', '7d52f25ec73f4e6b804c4961ae521da9a73b6e665a11a3dd8f0c627de2267d60', '7fb04607bbcfa24bced8aa4ac3141c67e0a24a2c7bc126461522b9da8442c0c1', 16, 12, 2002, 1, 0, 0),
(13, 0, '\'Niên2017\'', '\'Thanh\'', 'thanhnienkhongsote01@gmail.com', '65a5f4651efdd5aa018b92f1fe59f7e8d07aff0af8e6b400bc900130a5e4d73f', '1e81a86ad9ae1d96b424fbf53a89d34326de4dc1bcb195a105045df582a02c47', '65a5f4651efdd5aa018b92f1fe59f7e8d07aff0af8e6b400bc900130a5e4d73f', 15, 9, 1998, 1, 0, 0),
(14, 0, 'hung', '\"nguyen\"', 'ww22@gmail.com', '7bb52a55b7756f49afa6516a276c6ab2477a62dae238a1dcd5a4038903c35297', '80edc0a02e6cdab019ad2a359cd6b9786b087e7a94dd71571a7cc8d45ec0426a', '7bb52a55b7756f49afa6516a276c6ab2477a62dae238a1dcd5a4038903c35297', 13, 9, 1935, 1, 0, 0),
(15, 0, 'FA2017', 'Thanh', 'thanhnien@gmail.com', 'ed7bbf7bccde8e1a718387294542bc2bd31b2e5c63f71a4755061a77078fdf37', 'fd384c0a6f403e7d8ecc1cf637daca933d48a0e0608840ad3c596c9fc2876f3f', 'ed7bbf7bccde8e1a718387294542bc2bd31b2e5c63f71a4755061a77078fdf37', 13, 2, 1933, 1, 0, 0),
(16, 0, 'Chau', 'Nguyen', 'khongsomua@gmail.com', 'b473e05d618b1a0096a1d56cf69b9b5132f1265c61575ac6c19306ff6429a166', '384228c17befcd8eb744c3b454338dcfaf871b66954b437d3be6de14daa2fecd', 'b473e05d618b1a0096a1d56cf69b9b5132f1265c61575ac6c19306ff6429a166', 1, 3, 1987, 0, 0, 0),
(17, 1, 'Tran', 'Tuyet', 'tranyentuyet188@gmail.com', '0d3471ec3724b733fbe9a7a1d426e2b8560da7df0a6dc5072dcd4005bafbdc9d', 'bfb9b3ec4648c81c4acb068a35eb1dd6aeeab65e23afdc8fbfd36469f6509dda', '0d3471ec3724b733fbe9a7a1d426e2b8560da7df0a6dc5072dcd4005bafbdc9d', 18, 8, 1996, 1, 0, 0),
(18, 1, 'tk1', 'tk1', 'tk1@gmail.com', 'ba7902c8a23ada851f0fd42b71d96ca14c0c43b56d19c45875646077ba765da7', '3d3aa1ff36e6050d4c760cbd48ec63564c5265ad7bfbc4f52da2b29ba0a1adcb', 'ba7902c8a23ada851f0fd42b71d96ca14c0c43b56d19c45875646077ba765da7', 16, 10, 2001, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertags`
--

CREATE TABLE `usertags` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertags`
--

INSERT INTO `usertags` (`id`, `table_name`, `postid`, `userid`) VALUES
(12, '', 127, 16),
(11, '', 127, 15),
(10, '', 127, 10),
(16, '', 128, 10),
(42, 'tin_tuc', 134, 17),
(24, 'tin_tuc', 101, 10),
(41, 'tin_tuc', 125, 10),
(20, 'tin_tuc', 93, 10),
(21, 'tin_tuc', 132, 10),
(46, 'tin_tuc', 131, 10),
(32, 'tin_tuc', 133, 17),
(33, 'tin_tuc', 133, 10),
(45, 'tin_tuc', 131, 17),
(40, 'tin_tuc', 125, 17),
(43, 'tin_tuc', 134, 10),
(44, 'tin_tuc', 130, 10),
(56, 'album', 273, 10),
(55, 'album', 273, 17),
(60, 'album', 274, 17),
(59, 'album', 274, 10),
(61, 'tin_tuc', 72, 10),
(62, 'album', 272, 10),
(63, 'album', 265, 10),
(73, 'album', 275, 10),
(72, 'album', 275, 17),
(79, 'tin_tuc', 136, 10),
(78, 'tin_tuc', 136, 17),
(657, 'tin_tuc', 338, 17),
(656, 'tin_tuc', 338, 10),
(655, 'tin_tuc', 337, 10),
(654, 'tin_tuc', 337, 17),
(651, 'album', 276, 17),
(650, 'album', 276, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_token`
--
ALTER TABLE `auth_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockemegazine`
--
ALTER TABLE `blockemegazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_of_week`
--
ALTER TABLE `day_of_week`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emojiprivate`
--
ALTER TABLE `emojiprivate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventuser`
--
ALTER TABLE `eventuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_album`
--
ALTER TABLE `images_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai_bai`
--
ALTER TABLE `loai_bai`
  ADD PRIMARY KEY (`ma_loai_bai`);

--
-- Indexes for table `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `loai_tin_nhat_ky`
--
ALTER TABLE `loai_tin_nhat_ky`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `profile_token`
--
ALTER TABLE `profile_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remind_of_events`
--
ALTER TABLE `remind_of_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repeat_of_events`
--
ALTER TABLE `repeat_of_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resetpwtable`
--
ALTER TABLE `resetpwtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendme`
--
ALTER TABLE `sendme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideprivated`
--
ALTER TABLE `slideprivated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_category`
--
ALTER TABLE `survey_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_result`
--
ALTER TABLE `survey_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `su_kien`
--
ALTER TABLE `su_kien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertags`
--
ALTER TABLE `usertags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `auth_token`
--
ALTER TABLE `auth_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blockemegazine`
--
ALTER TABLE `blockemegazine`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventuser`
--
ALTER TABLE `eventuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `images_album`
--
ALTER TABLE `images_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `profile_token`
--
ALTER TABLE `profile_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resetpwtable`
--
ALTER TABLE `resetpwtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sendme`
--
ALTER TABLE `sendme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `slideprivated`
--
ALTER TABLE `slideprivated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `survey_result`
--
ALTER TABLE `survey_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `su_kien`
--
ALTER TABLE `su_kien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usertags`
--
ALTER TABLE `usertags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
