-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanllibanquanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatlieu`
--

CREATE TABLE `chatlieu` (
  `MaCL` int(11) NOT NULL,
  `TenCL` varchar(50) DEFAULT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chatlieu`
--

INSERT INTO `chatlieu` (`MaCL`, `TenCL`, `MaDM`) VALUES
(4, 'Cotton', 3),
(5, 'Polyester', 3),
(7, 'Nylon', 3),
(9, 'Spandex', 3),
(11, 'Bamboo', 3),
(12, 'Lycra', 3);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(3, 'Quốc gia'),
(4, 'Câu Lạc Bộ '),
(5, 'Giày Cỏ Nhân Tạo'),
(6, 'Giày Futsal'),
(7, 'Phụ Kiện'),
(8, 'Balo và Túi thể thao'),
(9, 'Dụng cụ thể thao'),
(10, 'Thương Hiệu');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `TenND` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `SDT` text NOT NULL,
  `ChiTiet` text NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `TongTien` int(20) NOT NULL,
  `NgayDH` datetime NOT NULL,
  `TrangThai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `TenND`, `Email`, `SDT`, `ChiTiet`, `DiaChi`, `TongTien`, `NgayDH`, `TrangThai`) VALUES
(137, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Liverpool 2022 (1 bộ)', 'trà vinh', 150000, '2024-10-02 18:47:45', 1),
(138, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Giày Đá Bóng Nike Air Zoom Mercurial Vapor 15 V1 (1 bộ), Nike pervenom 11 (1 bộ)', 'trà vinh', 1260000, '2024-10-03 09:41:03', 1),
(139, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Manchester United 2021 (1 bộ)', 'trà vinh', 170000, '2024-10-14 14:01:07', 1),
(140, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Nike MERCURIAL TF AO9469 (1 quyển), Anh 2022 - 2023 (1 quyển), Anh Limited (1 quyển)', 'trà vinh', 1805000, '2024-10-19 16:34:18', 1),
(141, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Manchester United Đen Trắng (1 quyển)', 'trà vinh', 160000, '2024-10-19 17:23:50', 0),
(142, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Chelsea 2021 -  2022 (1 quyển), Tất Vớ Bóng Đá Bulbal Anti-Slip Sock - Bulbal Việt (1 quyển), Găng tay thủ môn Adidas Predator Pro NC Energy Cit (1 quyển)', 'trà vinh', 780000, '2024-10-19 19:42:31', 0),
(143, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '09123123123', 'Manchester United 2022 - 2023 (1 bộ), Tất Đá Bóng - Wika Sports (1 bộ)', 'trà vinh', 285000, '2024-10-23 20:59:36', 0),
(144, 'Yasuo', 'chinguyen29821@gmail.com', '091245125', 'Manchester United 2021 (1 bộ), Manchester United 2022 - 2023 (1 bộ), Tất vớ bóng đá Bulbal Anti-slip 4 (1 bộ)', 'Cà Mau', 475000, '2024-10-23 22:05:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `giaidap`
--

CREATE TABLE `giaidap` (
  `MaGD` int(11) NOT NULL,
  `NoiDungGD` text NOT NULL,
  `MaPH` int(11) NOT NULL,
  `NgayGD` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `giaidap`
--

INSERT INTO `giaidap` (`MaGD`, `NoiDungGD`, `MaPH`, `NgayGD`) VALUES
(19, 'vc', 50, '2022-12-18 12:04:48'),
(21, 'Ok em\r\n', 55, '2024-10-23 21:30:58'),
(22, 'Ok em', 56, '2024-10-23 22:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `loaiquyen`
--

CREATE TABLE `loaiquyen` (
  `MaLQ` int(11) NOT NULL,
  `TenLQ` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loaiquyen`
--

INSERT INTO `loaiquyen` (`MaLQ`, `TenLQ`) VALUES
(1, 'Admin'),
(2, 'Khách hàng'),
(3, 'Nhân Viên');

-- --------------------------------------------------------

--
-- Table structure for table `mauao`
--

CREATE TABLE `mauao` (
  `Ma` int(11) NOT NULL,
  `Ten` varchar(50) DEFAULT NULL,
  `AnhMinhHoa` text NOT NULL,
  `MoTa` varchar(500) NOT NULL,
  `MaCL` int(11) DEFAULT NULL,
  `MaTL` int(11) NOT NULL,
  `MaNSX` int(11) DEFAULT NULL,
  `Gia` int(11) NOT NULL,
  `GiamGia` int(11) NOT NULL,
  `SoluongTon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mauao`
--

INSERT INTO `mauao` (`Ma`, `Ten`, `AnhMinhHoa`, `MoTa`, `MaCL`, `MaTL`, `MaNSX`, `Gia`, `GiamGia`, `SoluongTon`) VALUES
(1, 'Nike MERCURIAL TF AO9469', 'Nike MERCURIAL TF AO9469.jfif', 'Đá êm', 4, 41, 5, 1500000, 5, 4),
(39, 'Manchester United Đen Trắng', 'manu11.jpg', '.', 4, 10, 6, 160000, 0, 99),
(41, 'Manchester United 2021', 'manu2021.jpg', 'Mẫu sân khách năm 2021', 4, 10, 6, 170000, 0, 598),
(42, 'Manchester United 2023 ', 'manu2023sk.jpg', 'Mẫu sân khách', 4, 10, 6, 175000, 0, 100),
(43, 'Arsenal 2022 -2023', 'are20222023.jpg', 'Pháo thủ thành Luân Đôn', 4, 40, 6, 150000, 0, 10),
(44, 'Arsenal 2022 - 2023', 'are2022203.jpg', '.', 5, 40, 6, 150000, 0, 10),
(45, 'Arsenal 2022 - 2023', 'arsenha.jpg', '.', 4, 40, 6, 175000, 0, 10),
(46, 'Manchester United 2022 - 2023', 'manu203.jpg', '.', 4, 10, 6, 250000, 0, 23),
(47, 'Anh 2022 - 2023', 'anh1.jpg', '.', 5, 5, 6, 150000, 0, 9),
(48, 'Manchester United 2022', 'manu2022.jpg', '.', 4, 10, 6, 175000, 5, 10),
(49, 'Arsenal 2023', 'are2023.jpg', 'Pháo thủ thành Luân Đôn', 5, 40, 6, 130000, 0, 45),
(50, 'Manchester United Limited', 'manu12.jpg', '.', 4, 10, 6, 300000, 10, 47),
(51, 'Manchester United 2023', 'manu2023.jpg', 'Với thiết kế màu xanh đậm viền trắng.Mẫu áo của Quỷ đỏ 2023 đã mang lại nhiều mới mẻ cho Ngoại Hạng Anh.', 4, 10, 6, 230000, 10, 50),
(52, 'Anh Limited', 'anh11.jpg', '.', 4, 5, 5, 155000, 0, 19),
(53, 'Arsenal 2023 - 2024', 'arse2024.jpg', '.', 11, 40, 8, 200000, 0, 100),
(54, 'Manchester City 2023 - 2024', 'manx2024.jpg', 'Mẫu sân nhà ', 11, 36, 8, 165000, 5, 33),
(55, 'Manchester City 2022', 'manciti.jpg', '.', 9, 36, 5, 130000, 0, 1),
(56, 'Manchester City 2022', 'manx20222.jpg', '.', 4, 36, 8, 130000, 0, 50),
(57, 'Real Madrid 2023 - 2024', 'ao-clb-real-madrid-2023-2024-mau-trang.jpg', 'Kền Kền Trắng ra mắt mẫu áo vẫn mang tính riêng từ trước đến nay với tông chủ đạo là màu trắng', 9, 51, 9, 150000, 0, 41),
(58, 'Manchester City', 'manx2023.jpg', 'Mẫu sân khách', 12, 36, 9, 150000, 0, 11),
(60, 'Manchester United 2013', 'mu2013.jpg', '.', 4, 10, 6, 200000, 0, 24),
(65, 'Real Madrid 2023 - 2024', 'ao-clb-real-madrid-2023-2024-mau-trang.jpg', '.', 11, 51, 5, 155000, 5, 11),
(66, 'Real Madrid 2017', 'real2017.jpg', '.', 7, 51, 9, 130000, 5, 44),
(67, 'Real Madrid 2020', 'real.jpg', '.', 7, 51, 6, 130000, 5, 5),
(68, 'Việt Nam 2024', 'vn2024.webp', '.', 4, 35, 8, 170000, 0, 100),
(69, 'Việt Nam 2023', 'vn2023.jpg', '.', 4, 35, 8, 130000, 0, 4),
(70, 'Việt Nam', 'vietnam.jpg', '.', 4, 35, 6, 130000, 0, 54),
(71, 'Pháp ', 'phap.jpg', '.', 5, 6, 6, 145000, 0, 5),
(72, 'Pháp 2020', 'phap1.jpg', '.', 4, 6, 8, 140000, 0, 5),
(75, 'Ý 2022', 'aoy2022.jpg', '.', 11, 7, 5, 120000, 0, 8),
(76, 'Ý 2018', 'y2018.jpg', '.', 4, 7, 5, 125000, 0, 8),
(77, 'Đức 2022', 'ao-duc-mt-2022-23-hvk1.jpg', '.', 7, 8, 8, 130000, 0, 4),
(78, 'Đức 2020', 'duc2020.webp', '.', 11, 8, 8, 135000, 0, 9),
(79, 'Tây Ban Nha 2022', 'quan-ao-tbn-md-sn-2022-23-hvk1.jpg', '.', 4, 33, 8, 145000, 0, 8),
(80, 'Tây Ban Nha 2021', 'tay2021.jpg', '.', 12, 33, 9, 160000, 0, 5),
(81, ' Bồ Đào Nha 2022 - 2023', 'bdn22.jpg', '..', 11, 34, 6, 120000, 0, 5),
(82, 'Bồ Đào Nha 2021', 'bdn2.jpg', '.', 7, 34, 8, 120000, 0, 7),
(83, 'Bồ Đào Nha ( Áo tập )', 'bdn3.jpg', '.', 7, 34, 5, 120000, 0, 15),
(84, 'Liverpool 2022 - 2023', 'liver2223.jpg', '.', 5, 9, 8, 120000, 0, 5),
(85, 'Liverpool 2022 - 2023', 'liver22233.jpg', '.', 9, 9, 5, 125000, 0, 6),
(87, 'Liverpool 2022', 'liversannha.webp', '.', 7, 9, 8, 150000, 0, 4),
(88, 'Chelsea 2022 - 2023', 'chelsea1.jpg', '.', 7, 11, 5, 160000, 50, 51),
(89, 'Chelsea 2021 -  2022', 'chelse2.jpg', '.', 12, 11, 5, 140000, 0, 55),
(90, 'Paris Saint-Germain', 'psg.jpg', '.', 4, 38, 8, 130000, 0, 5),
(91, 'Paris Saint-Germain', 'psg1.jpg', '.', 7, 38, 8, 130000, 0, 6),
(93, 'Giày Đá Bóng Nike Air Zoom Mercurial Vapor 15 V1', 'Giày Bóng Đá TQ Nike Mercurial Vapor 15 Pro United Cam Đen TF.jpg', '.', 4, 41, 5, 500000, 0, 54),
(94, 'Bayern Munich', 'baye.jpg', '.', 9, 39, 5, 140000, 0, 1),
(95, 'Bayern Munich', 'baye1.jpg', '.', 5, 39, 6, 130000, 0, 4),
(96, 'Giày Đá Banh P.u.m.a Future Match FG 107370-01', 'Giày Đá Banh P.u.m.a Future Match FG 107370-01.png', 'Sút đỉnh', 4, 43, 5, 123124124, 0, 12),
(97, 'Adidas X Speedportal .1 TF', 'Adidas X Speedportal .1 TF.jpg', 'Giày đá bóng Adidas là một trong các thương hiệu nổi tiếng hàng đầu trên thế giới tới từ Đức. Adidas có đa dạng các sản phẩm được ứng dụng các công nghệ hiện đại hàng đầu phù hợp với mọi phong cách chơi và mọi loại sân từ sân cỏ nhân tạo cho đến tự nhiên. Bài viết sau đây sẽ hướng dẫn cho bạn đọc cách chọn size giày adidas chuẩn nhất 2023.', 4, 42, 5, 1500000, 0, 12),
(98, 'Giày Đá Banh Puma Future 7 Ultimate MG 107703-01', 'Giày Đá Banh Puma Future 7 Ultimate MG 107703-01.webp', '- 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 43, 5, 1200000, 0, 3),
(99, 'Giày bóng đá sân cỏ nhân tạo Puma Ultra Ultimate L', 'Giày bóng đá sân cỏ nhân tạo Puma Ultra Ultimate Liberty TF trắng vàng hoạ tiết in hoa Rep 11.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 43, 5, 1500000, 0, 120),
(100, 'Giày Đá Banh P.u.m.a Future Match FG 107370-01', 'Giày Đá Banh P.u.m.a Future Match FG 107370-01.png', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 43, 5, 540000, 0, 3),
(101, 'Giày Đá Bóng TF Mizuno Morelia Neo 3 Trắng Hồng', 'Giày Đá Bóng TF Mizuno Morelia Neo 3 Trắng Hồng.jpeg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 44, 5, 200000, 0, 3),
(102, 'Giày Đá Bóng TF Mizuno Morelia Neo 3 Trắng', 'Giày Đá Bóng TF Mizuno Morelia Neo 3 Trắng.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 44, 5, 700000, 0, 3),
(103, 'Giày đá bóng Mizuno Alpha Pro TF Mugen', 'Giày đá bóng Mizuno Alpha Pro TF Mugen.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 44, 5, 750000, 0, 6),
(104, 'Nike Zoom Vapor 15', 'Nike Zoom Vapor 15.jfif', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 540000, 0, 12),
(105, 'Nike Tiempo Legend 9', 'Nike Tiempo Legend 9.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 450000, 0, 1),
(106, 'Nike pervenom 11', 'Nike pervenom 11.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 760000, 0, 11),
(107, 'Giày Bóng Đá Nike Mercurial Vapor 16 Elite MDS 009', 'Giày Bóng Đá Nike Mercurial Vapor 16 Elite MDS 009 Trắng Cam Đế Xanh TF.webp', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 450000, 0, 122),
(108, 'Giày Đá Bóng Cổ Cao Air Zoom - Mix Màu Xanh Hồng', 'Giày Đá Bóng Cổ Cao Air Zoom - Mix Màu Xanh Hồng.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 454000, 50, 2),
(109, 'Giày bóng đá trẻ em Adidas X Speedportal.3 TF Jr X', 'Giày bóng đá trẻ em Adidas X Speedportal.3 TF Jr Xanh cây.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 1000000, 20, 4),
(110, 'Giày Bóng Đá TQ Nike Mercurial Vapor 15 Pro United', 'Giày Nike Air Force 1 What The LA CT1117-100.jpg', ' 100% ảnh chụp tại cửa hàng - tự tin 100% vào chất lượng sản phẩm và dịch vụ bán hàng\r\n- Đinh TF dành cho sân cỏ nhân tạo, đinh FG dành cho sân cỏ tự nhiên, đinh AG dành cho cả 2 loại sân\r\n- Chất liệu: Da tổng hợp loại tốt\r\n- Size: 38 -> 45 đối với giày người lớn và 35 -> 38 đối với giày trẻ em (KH chọn size ngay trên giao diện mua hàng của shopee)\r\n- Mua giày tặng ngay túi dây rút trị giá 50k.\r\n- Bảo hành giày trọn đời (bung keo, hở đế)', 4, 41, 5, 800000, 10, 10),
(111, 'Tất Vớ Bóng Đá Bulbal Anti-Slip Sock - Bulbal Việt', 'Tất Vớ Bóng Đá Bulbal Anti-Slip Sock - Bulbal Việt Nam.jpg', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 40000, 0, 14),
(112, 'Tất vớ bóng đá Bulbal Anti-slip 5', 'Tất vớ bóng đá Bulbal Anti-slip 5.jpg', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 45000, 0, 4),
(113, 'Tất vớ bóng đá Bulbal Anti-slip 4', 'Tất vớ bóng đá Bulbal Anti-slip 4.jpg', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 55000, 0, 6),
(114, 'Tất vớ bóng đá Bulbal Anti-slip 3', 'Tất vớ bóng đá Bulbal Anti-slip 3.jpg', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 30000, 0, 6),
(115, 'Tất vớ bóng đá Bulbal Anti-slip 2', 'Tất vớ bóng đá Bulbal Anti-slip 2.jpg', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 20000, 5, 5),
(116, 'Tất Chống Trơn Zocker Parson', 'Tất Chống Trơn Zocker Parson.webp', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 65000, 0, 1),
(117, 'Tất Đá Bóng - Wika Sports', 'Tất Đá Bóng - Wika Sports.jfif', 'ất bóng đá chống trơn sẽ là phụ kiện giúp các cầu thủ không phải lo lắng việc bàn chân của mình bị trượt trong giày.\r\n\r\nBề mặt tất được phủ bởi các miếng cao su nổi hình vuông ở ngoài mặt tất cũng như trong lòng tất.\r\n\r\nTất chống trơn lửng là sản phẩm để khắc phục tình trạng sử dụng tất khi mang giày lại bị trơn trượt bên trong giày, gấy ẩm ướt, bất tiện, bốc mùi và làm giảm hiệu quả trong thi đấu.\r\n\r\nChính vì vậy bàn chân sẽ được bám tốt hơn với mặt tất, tránh cho bàn chân bị trượt trong lòng g', 4, 47, 5, 35000, 0, 5),
(118, 'Găng tay Adidas Predator Pro NC IQ4034', 'Găng tay Adidas Predator Pro NC IQ4034.png', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 1500000, 0, 5),
(119, 'GĂNG TAY THỦ MÔN ADIDAS PREDATOR PRO MUTATOR URG 2', 'GĂNG TAY THỦ MÔN ADIDAS PREDATOR PRO MUTATOR URG 2.0 CÓ XƯƠNG MÀU ĐỎ ĐEN.png', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 500000, 0, 6),
(120, 'Găng tay thủ môn Adidas Predator Pro NC Energy Cit', 'Găng tay thủ môn Adidas Predator Pro NC Energy Citrus.png', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 600000, 0, 5),
(121, 'Găng tay thủ môn Eepro EG1044', 'Găng tay thủ môn Eepro EG1044.jpg', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 700000, 0, 6),
(122, 'Găng Tay Thủ Môn Eepro EG1046', 'Găng Tay Thủ Môn Eepro EG1046.webp', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 1200000, 0, 57),
(123, 'Găng tay thủ môn GOLDEN STAR - Màu vàng', 'Găng tay thủ môn GOLDEN STAR - Màu vàng.webp', '➡️  Mặt cắt Negatip ôm sát bàn tay, cho cảm giác bóng chân thực. Đây là loại mặt cắt phổ biến trên các mẫu găng tay thủ môn ở Đức\r\n\r\n➡️ Găng tay thủ môn không xương giúp xử lý linh hoạt, dễ dàng đấm bóng\r\n\r\n➡️ Mặt mút công nghệ mới, giúp giảm lực bóng\r\n\r\n➡️ Mu bàn tay làm bằng vải co dãn kết hợp các gai cao su đấm bóng \r\n\r\n➡️ Có phần chống trầy ở mặt lòng găng rất hiệu quả.\r\n\r\n➡️ Không đai quấn cổ tay, cực đẹp', 4, 48, 5, 550000, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `TenND` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `AnhDaiDien` text NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `SoDienThoai` text NOT NULL,
  `MatKhau` varchar(255) DEFAULT NULL,
  `MaLQ` int(11) NOT NULL,
  `MaXacNhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `TenND`, `Email`, `AnhDaiDien`, `DiaChi`, `SoDienThoai`, `MatKhau`, `MaLQ`, `MaXacNhan`) VALUES
(118, 'admin01', 'admin01@gmail.com', 'cr7.jpg', 'Khóm Phước Bình', '', 'admin01', 1, '0'),
(120, 'admin02', 'admin02@gmail.com', '', 'Khóm Bến Chuối, Phường 1, Thị Xã Duyên Hải, Trà VInh', '', '123', 2, '0'),
(136, 'user03', 'user03@gmail.com', '', 'Trà Vinh', '', 'user03', 2, '0'),
(197, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', 'github.jpg', 'trà vinh', '09123123123', '$2y$10$wGqZFIyd6ZD7XIRpH6MMh.qQD7PZNn0gG/YoxL1ZbQqqaOHL80bIu', 1, '841406'),
(201, 'chinguyen', 'phuongvy5939@gmail.com', '', 'Khóm phước bình , P2, Tx duyên hải', '0332413417', '', 2, '299653'),
(202, 'chinguyen', 'chinhnguyen6930@gmail.com', '', 'Khóm phước bình , P2, Tx duyên hải', '0332413417', '', 2, '248471'),
(211, 'chinguyen29825', 'chinguyen112@gmail.com', '', 'Trà cú', '', '123', 3, ''),
(212, 'mu', 'mu03@gmail.com', '', 'Trà cú', '', '123', 3, ''),
(219, 'Yasuo', 'chinguyen29821@gmail.com', '', 'Cà Mau', '091245125', '$2y$10$uOjuPUYZZXdibp4pwLib9OkJhFKYvyoFgms6duPtWTfnR4fyRBFIW', 2, '147622');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(11) NOT NULL,
  `TenNSX` varchar(30) DEFAULT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `MaDM`) VALUES
(5, 'S', 3),
(6, 'M', 3),
(8, 'L', 3),
(9, 'XL', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `MaPH` int(11) NOT NULL,
  `Email` text NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayPH` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`MaPH`, `Email`, `NoiDung`, `NgayPH`) VALUES
(50, 'truongnguyen123@gmail.com', 'xinchao', '2022-12-18 12:03:19'),
(51, 'truongnguyen123@gmail.com', 'FfFầ', '2022-12-18 12:03:23'),
(52, 'user01@gmail.com', 'hello', '2023-06-24 10:46:18'),
(53, 'chinhnguyen693120@gmail.com', 'hnhhnhvnnc\r\n', '2023-06-24 13:05:26'),
(55, 'chinguyen29825@gmail.com', 'Hay', '2024-10-23 21:30:43'),
(56, 'chinguyen29821@gmail.com', 'Hasagi', '2024-10-23 22:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaTL` int(11) NOT NULL,
  `TenTL` varchar(50) NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTL`, `TenTL`, `MaDM`) VALUES
(5, 'Anh ', 3),
(6, 'Pháp', 3),
(7, 'Ý', 3),
(8, 'Đức', 3),
(9, 'Liverpool', 4),
(10, 'Manchester United', 4),
(11, 'Chelsea', 4),
(12, 'Bóng đá', 9),
(13, 'Bóng rỗ', 9),
(14, 'Bóng chuyền', 9),
(15, 'Bơi lội', 9),
(33, 'Tây Ban Nha', 3),
(34, 'Bồ Đào Nha', 3),
(35, 'Việt Nam', 3),
(36, 'Man City', 4),
(37, 'Barcelona', 4),
(38, 'Paris Saint Germain', 4),
(39, 'Bayern Munich', 4),
(40, 'Arsenal', 4),
(41, 'NIKE', 5),
(42, 'ADIDAS', 5),
(43, 'PUMA', 5),
(44, 'MIZUNO', 5),
(45, 'KAMITO', 5),
(46, 'JOMA', 5),
(47, 'Tất', 7),
(48, 'Găng Tay', 7),
(49, 'Mũ nón', 7),
(50, 'Nẹp chân', 7),
(51, 'Real Madrid', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatlieu`
--
ALTER TABLE `chatlieu`
  ADD PRIMARY KEY (`MaCL`),
  ADD KEY `fk_danhmucsach_tacgia` (`MaDM`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`);

--
-- Indexes for table `giaidap`
--
ALTER TABLE `giaidap`
  ADD PRIMARY KEY (`MaGD`),
  ADD KEY `fk_giaidap_phanhoi` (`MaPH`);

--
-- Indexes for table `loaiquyen`
--
ALTER TABLE `loaiquyen`
  ADD PRIMARY KEY (`MaLQ`);

--
-- Indexes for table `mauao`
--
ALTER TABLE `mauao`
  ADD PRIMARY KEY (`Ma`),
  ADD KEY `fk_nhaxuatban_sach` (`MaNSX`),
  ADD KEY `fk_tacgia_sach` (`MaCL`),
  ADD KEY `fk_theloaisach_sach` (`MaTL`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_loaiquyen_nguoidung` (`MaLQ`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`),
  ADD KEY `fk_danhmucsach_nhaxuatban` (`MaDM`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`MaPH`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTL`),
  ADD KEY `fk_danhmucsach_theloaisach` (`MaDM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `giaidap`
--
ALTER TABLE `giaidap`
  MODIFY `MaGD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `loaiquyen`
--
ALTER TABLE `loaiquyen`
  MODIFY `MaLQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mauao`
--
ALTER TABLE `mauao`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `MaPH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giaidap`
--
ALTER TABLE `giaidap`
  ADD CONSTRAINT `fk_giaidap_phanhoi` FOREIGN KEY (`MaPH`) REFERENCES `phanhoi` (`MaPH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_loaiquyen_nguoidung` FOREIGN KEY (`MaLQ`) REFERENCES `loaiquyen` (`MaLQ`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD CONSTRAINT `fk_danhmucsach_nhaxuatban` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
