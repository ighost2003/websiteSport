-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanllibansach`
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
(18, 'tuyet voi ong mat troi', 49, '2022-12-18 12:04:43'),
(19, 'vc', 50, '2022-12-18 12:04:48');

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
(39, 'Manchester United Đen Trắng', 'manu11.jpg', '.', 4, 10, 6, 160000, 0, 100),
(41, 'Manchester United 2021', 'manu2021.jpg', 'Mẫu sân khách năm 2021', 4, 10, 6, 170000, 0, 600),
(42, 'Manchester United 2023 ', 'manu2023sk.jpg', 'Mẫu sân khách', 4, 10, 6, 175000, 0, 100),
(43, 'Arsenal 2022 -2023', 'are20222023.jpg', 'Pháo thủ thành Luân Đôn', 4, 40, 6, 150000, 0, 10),
(44, 'Arsenal 2022 - 2023', 'are2022203.jpg', '.', 5, 40, 6, 150000, 0, 10),
(45, 'Arsenal 2022 - 2023', 'arsenha.jpg', '.', 4, 40, 6, 175000, 0, 10),
(46, 'Manchester United 2022 - 2023', 'manu203.jpg', '.', 4, 10, 6, 250000, 0, 25),
(47, 'Anh 2022 - 2023', 'anh1.jpg', '.', 5, 5, 6, 150000, 0, 10),
(48, 'Manchester United 2022', 'manu2022.jpg', '.', 4, 10, 6, 175000, 5, 10),
(49, 'Arsenal 2023', 'are2023.jpg', 'Pháo thủ thành Luân Đôn', 5, 40, 6, 130000, 0, 45),
(50, 'Manchester United Limited', 'manu12.jpg', '.', 4, 10, 6, 300000, 10, 47),
(51, 'Manchester United 2023', 'manu2023.jpg', 'Với thiết kế màu xanh đậm viền trắng.Mẫu áo của Quỷ đỏ 2023 đã mang lại nhiều mới mẻ cho Ngoại Hạng Anh.', 4, 10, 6, 230000, 10, 50),
(52, 'Anh Limited', 'anh11.jpg', '.', 4, 5, 5, 155000, 0, 20),
(53, 'Arsenal 2023 - 2024', 'arse2024.jpg', '.', 11, 40, 8, 200000, 0, 100),
(54, 'Manchester City 2023 - 2024', 'manx2024.jpg', 'Mẫu sân nhà ', 11, 36, 8, 165000, 5, 33),
(55, 'Manchester City 2022', 'manciti.jpg', '.', 9, 36, 5, 130000, 0, 1),
(56, 'Manchester City 2022', 'manx20222.jpg', '.', 4, 36, 8, 130000, 0, 50),
(57, 'Real Madrid 2023 - 2024', 'real2023.jpg', 'Kền Kền Trắng ra mắt mẫu áo vẫn mang tính riêng từ trước đến nay với tông chủ đạo là màu trắng', 9, 51, 9, 150000, 0, 41),
(58, 'Manchester City', 'manx2023.jpg', 'Mẫu sân khách', 12, 36, 9, 150000, 0, 11),
(60, 'Manchester United 2013', 'mu2013.jpg', '.', 4, 10, 6, 200000, 0, 25),
(65, 'Real Madrid 2023 - 2024', 'real20233.jpg', '.', 11, 51, 5, 155000, 5, 11),
(66, 'Real Madrid 2017', 'real1.jpg', '.', 7, 51, 9, 130000, 5, 44),
(67, 'Real Madrid 2020', 'real11.jpg', '.', 7, 51, 6, 130000, 5, 5),
(68, 'Việt Nam ', 'vietnam1.jpg', '.', 4, 35, 8, 170000, 0, 100),
(69, 'Việt Nam', 'veitnam2.jpg', '.', 4, 35, 8, 130000, 0, 4),
(70, 'Việt Nam', 'vietnam2.jpg', '.', 4, 35, 6, 130000, 0, 54),
(71, 'Pháp ', 'phap.jpg', '.', 5, 6, 6, 145000, 0, 5),
(72, 'Pháp 2020', 'phap1.jpg', '.', 4, 6, 8, 140000, 0, 5),
(73, 'Ý 2020', 'y1.jpg', 'Sân nhà', 7, 7, 6, 140000, 0, 14),
(74, 'Ý 2020', 'y2.jpg', 'Sân khách', 4, 7, 8, 120000, 0, 7),
(75, 'Ý 2022', 'y3.jpg', '.', 11, 7, 5, 120000, 0, 8),
(76, 'Ý 2018', 'y4.jpg', '.', 12, 7, 5, 125000, 0, 8),
(77, 'Đức 2022', 'duc1.jpg', '.', 7, 8, 8, 130000, 0, 4),
(78, 'Đức 2020', 'duc2.webp', '.', 11, 8, 8, 135000, 0, 9),
(79, 'Tây Ban Nha 2022', 'tbn1.jpg', '.', 5, 33, 8, 145000, 0, 8),
(80, 'Tây Ban Nha 2021', 'tbn2.jpg', '.', 12, 33, 9, 160000, 0, 5),
(81, ' Bồ Đào Nha 2022 - 2023', 'bdn22.jpg', '..', 11, 34, 6, 120000, 0, 5),
(82, 'Bồ Đào Nha 2021', 'bdn2.jpg', '.', 7, 34, 8, 120000, 0, 7),
(83, 'Bồ Đào Nha ( Áo tập )', 'bdn3.jpg', '.', 7, 34, 5, 120000, 0, 15),
(84, 'Liverpool 2022 - 2023', 'liver2223.jpg', '.', 5, 9, 8, 120000, 0, 5),
(85, 'Liverpool 2022 - 2023', 'liver22233.jpg', '.', 9, 9, 5, 125000, 0, 6),
(87, 'Liverpool 2022', 'liversannha.webp', '.', 7, 9, 8, 150000, 0, 5),
(88, 'Chelsea 2022 - 2023', 'chelsea1.jpg', '.', 7, 11, 5, 160000, 50, 51),
(89, 'Chelsea 2021 -  2022', 'chelse2.jpg', '.', 12, 11, 5, 140000, 0, 56),
(90, 'Paris Saint-Germain', 'psg.jpg', '.', 4, 38, 8, 130000, 0, 5),
(91, 'Paris Saint-Germain', 'psg1.jpg', '.', 7, 38, 8, 130000, 0, 6),
(93, 'Paris Saint-Germain', 'psg2.jpg', '.', 11, 38, 5, 145000, 0, 56),
(94, 'Bayern Munich', 'baye.jpg', '.', 9, 39, 5, 140000, 0, 1),
(95, 'Bayern Munich', 'baye1.jpg', '.', 5, 39, 6, 130000, 0, 4);

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
(118, 'admin01', 'admin01@gmail.com', '310236670_495819565890717_7965043749889878806_n.jpg', 'Vĩnh Long', '', 'admin01', 1, '0'),
(120, 'admin02', 'admin02@gmail.com', '', 'Khóm Bến Chuối, Phường 1, Thị Xã Duyên Hải, Trà VInh', '', 'admin02', 1, '0'),
(136, 'user03', 'user03@gmail.com', '', 'Trà Vinh', '', 'user03', 2, '0'),
(194, 'Nguyen Le Truong Chinh', 'zevrosnb@gmail.com', '', 'Trà Vinh', '0345158101', '$2y$10$d1zre0oCNRLLX/viFKQcF.UeDk0b8oQwF4T1dpv.sT8V2Ru5WTXp2', 1, '267082'),
(197, 'Kiều Chí Nguyện', 'chinguyen29825@gmail.com', '', 'trà vinh', '09123123123', '$2y$10$wGqZFIyd6ZD7XIRpH6MMh.qQD7PZNn0gG/YoxL1ZbQqqaOHL80bIu', 1, '841406'),
(201, 'chinguyen', 'phuongvy5939@gmail.com', '', 'Khóm phước bình , P2, Tx duyên hải', '0332413417', '', 2, '299653'),
(202, 'chinguyen', 'chinhnguyen6930@gmail.com', '', 'Khóm phước bình , P2, Tx duyên hải', '0332413417', '', 2, '248471');

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
(47, 'user03@gmail.com', 'hay', '2022-12-15 08:27:49'),
(48, 'user03@gmail.com', 'hello world\r\n', '2022-12-15 08:28:04'),
(49, 'truongnguyen123@gmail.com', 'hello admin', '2022-12-18 12:03:14'),
(50, 'truongnguyen123@gmail.com', 'xinchao', '2022-12-18 12:03:19'),
(51, 'truongnguyen123@gmail.com', 'FfFầ', '2022-12-18 12:03:23'),
(52, 'user01@gmail.com', 'hello', '2023-06-24 10:46:18'),
(53, 'chinhnguyen693120@gmail.com', 'hnhhnhvnnc\r\n', '2023-06-24 13:05:26');

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
(41, 'NIKE', 10),
(42, 'ADIDAS', 10),
(43, 'PUMA', 10),
(44, 'MIZUNO', 10),
(45, 'KAMITO', 10),
(46, 'JOMA', 10),
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
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `giaidap`
--
ALTER TABLE `giaidap`
  MODIFY `MaGD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loaiquyen`
--
ALTER TABLE `loaiquyen`
  MODIFY `MaLQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `MaPH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
