-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 09:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trac_nghiem_truc_tuyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_giang`
--

CREATE TABLE `bai_giang` (
  `maBG` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenBG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhAnh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maKhoa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bai_kiem_tra`
--

CREATE TABLE `bai_kiem_tra` (
  `maBKT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenBKT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhauBKT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGian` int(50) NOT NULL,
  `thoiGianBatDau` datetime NOT NULL,
  `thoiGianKetThuc` datetime NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bai_kiem_tra`
--

INSERT INTO `bai_kiem_tra` (`maBKT`, `tenBKT`, `matKhauBKT`, `moTa`, `thoiGian`, `thoiGianBatDau`, `thoiGianKetThuc`, `maUser`) VALUES
('BKT12271', 'Bài kiểm tra 02', '123', 'Bài kiểm tra dành cho sinh viên trước khi nghỉ tết', 20, '2022-01-23 00:00:00', '2022-01-31 12:04:00', 'ID8752'),
('BKT18593', 'Bài Thử nè', '123', 'Bài thử nè', 1, '2022-01-01 00:00:00', '2022-01-21 00:00:00', 'ID8752'),
('BKT32444', 'Bài kiểm tra 04', '123', 'Bài kiểm tra cho sinh viên có điểm lập trình cao hơn sinh viên có điểm lập trình thấp', 20, '2022-01-01 06:00:00', '2022-01-29 00:00:00', 'ID8752'),
('BKT39471', 'Bài kiểm tra 03', '123', 'Bài kiểm tra cho sinh viên nghành du lịch và lữ hành', 10, '2022-01-01 00:00:00', '2022-01-22 00:00:00', 'ID8752'),
('BKT47557', 'Bài kiểm tra 05', '123', 'Bài kiểm tra đầu học kì 2', 10, '2022-01-01 00:00:00', '2022-01-04 00:00:00', 'ID8752'),
('BKT48346', 'Bài kiểm tra 08', '123', 'Bài kiểm tra dành cho sinh viên khóa 60, đánh giá đầu vào môn tiếng anh', 20, '2022-01-01 00:00:00', '2022-01-29 00:00:00', 'ID8752'),
('BKT48666', 'Bài kiểm tra 01', '123', 'Bài kiểm tra dành cho sinh viên khoa công nghệ thông tin', 10, '2022-01-01 00:00:00', '2022-01-22 00:00:00', 'ID8752'),
('BKT69869', 'Bài kiểm tra 06', '123', 'Bài kiểm tra cho sinh viên đạt loại trung bình yếu của khoa công nghệ thông tin', 10, '2022-01-01 00:00:00', '2022-01-29 00:00:00', 'ID8752'),
('BKT90053', 'Bài kiểm tra 07', '123', 'Bài kiểm tra dành cho sinh viên khóa 62, đánh giá chất lượng đầu vào', 12, '2022-01-01 00:00:00', '2022-01-29 00:00:00', 'ID8752');

-- --------------------------------------------------------

--
-- Table structure for table `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `maCauHoi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maBKT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cau_hoi`
--

INSERT INTO `cau_hoi` (`maCauHoi`, `noiDung`, `maBKT`) VALUES
('CH02037', 'Câu hỏi 2', 'BKT32444'),
('CH17991', 'Câu hỏi 1', 'BKT48666'),
('CH21760', 'Câu hỏi 5', 'BKT32444'),
('CH25464', 'Câu hỏi 1', 'BKT39471'),
('CH25698', 'Câu hỏi 2', 'BKT48666'),
('CH27030', 'Câu hỏi 5', 'BKT12271'),
('CH35265', 'Câu hỏi 4', 'BKT32444'),
('CH36938', 'Câu hỏi 4', 'BKT48346'),
('CH37394', 'Câu hỏi 2', 'BKT12271'),
('CH40717', 'Câu hỏi 2', 'BKT47557'),
('CH41969', 'Câu 2 nè', 'BKT18593'),
('CH43916', 'Câu hỏi 3', 'BKT39471'),
('CH44682', 'Câu hỏi 4', 'BKT69869'),
('CH44858', 'Câu hỏi 3', 'BKT90053'),
('CH47192', 'Câu hỏi 1', 'BKT69869'),
('CH47423', 'Câu 3', 'BKT18593'),
('CH49517', 'Câu hỏi 1', 'BKT48346'),
('CH55432', 'Câu hỏi 1', 'BKT47557'),
('CH58585', 'Câu hỏi 1', 'BKT12271'),
('CH60850', 'Câu hỏi 2', 'BKT48346'),
('CH63330', 'Câu hỏi 1', 'BKT32444'),
('CH66251', 'Câu hỏi 2', 'BKT69869'),
('CH68509', 'Câu hỏi 3', 'BKT32444'),
('CH69520', 'Câu hỏi 2', 'BKT90053'),
('CH76706', 'Câu hỏi 1', 'BKT90053'),
('CH77684', 'Câu hỏi 3', 'BKT69869'),
('CH79717', 'Câu hỏi 4', 'BKT12271'),
('CH80090', 'Câu hỏi 3', 'BKT12271'),
('CH87991', 'Câu hỏi 2', 'BKT39471'),
('CH97523', 'Câu 1', 'BKT18593'),
('CH99412', 'Câu hỏi 3', 'BKT48666');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_kho`
--

CREATE TABLE `chi_tiet_kho` (
  `maKho` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maND` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dap_an`
--

CREATE TABLE `dap_an` (
  `maDA` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` tinyint(1) NOT NULL,
  `maCauHoi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dap_an`
--

INSERT INTO `dap_an` (`maDA`, `noiDung`, `trangThai`, `maCauHoi`) VALUES
('DA01341', 'Đáp án D', 0, 'CH27030'),
('DA02517', 'Đáp án B', 0, 'CH36938'),
('DA03078', 'Đáp án C', 0, 'CH02037'),
('DA03200', 'Đáp án D', 0, 'CH36938'),
('DA03436', 'Đáp án D', 0, 'CH47192'),
('DA03694', 'Đáp án B', 0, 'CH63330'),
('DA04164', 'Đáp án C đúng', 1, 'CH68509'),
('DA04370', 'Đáp án D đúng', 1, 'CH25464'),
('DA04432', 'Đáp án A', 0, 'CH77684'),
('DA04489', 'Đáp án B đúng', 1, 'CH80090'),
('DA04997', 'Đáp án B đúng', 1, 'CH35265'),
('DA05107', 'Đáp án A', 0, 'CH69520'),
('DA05640', 'Đáp án B', 0, 'CH44858'),
('DA06369', 'Đáp án A', 0, 'CH58585'),
('DA07188', 'Đáp án A đúng', 1, 'CH37394'),
('DA08022', 'đúng', 1, 'CH97523'),
('DA08962', 'Đáp án B', 0, 'CH77684'),
('DA09343', 'đúng', 1, 'CH47423'),
('DA10217', 'Đáp án B', 0, 'CH58585'),
('DA10235', 'Đáp án C', 0, 'CH55432'),
('DA10380', 'Đáp án B', 0, 'CH47192'),
('DA10930', 'Đáp án B', 0, 'CH44682'),
('DA11124', 'Đáp án C', 0, 'CH44858'),
('DA12064', 'Đáp án B', 0, 'CH99412'),
('DA12560', 'Đáp án C', 0, 'CH58585'),
('DA14157', 'Đáp án D', 0, 'CH43916'),
('DA14282', 'Đáp án C', 0, 'CH17991'),
('DA14671', 'Đáp án B', 0, 'CH02037'),
('DA14909', 'Đáp án C', 0, 'CH21760'),
('DA15746', 'Đáp án C đúng', 1, 'CH99412'),
('DA16157', 'Đáp án C', 0, 'CH44682'),
('DA17663', 'Đáp án D đúng', 1, 'CH17991'),
('DA18866', 'Đáp án C', 0, 'CH79717'),
('DA19319', 'Đáp án A', 0, 'CH43916'),
('DA19471', 'Đáp án B', 0, 'CH49517'),
('DA19567', 'Đáp án B', 0, 'CH40717'),
('DA19626', 'Đáp án C đúng', 1, 'CH69520'),
('DA19742', 'Đáp án B', 0, 'CH87991'),
('DA20370', 'sai ', 0, 'CH97523'),
('DA21513', 'Đáp án C', 0, 'CH76706'),
('DA21799', 'Đáp án A đúng', 1, 'CH63330'),
('DA25416', 'Đáp án A ', 0, 'CH02037'),
('DA26059', 'Đáp án A', 0, 'CH25464'),
('DA26846', 'Đáp án D', 0, 'CH37394'),
('DA26942', 'sai ', 0, 'CH97523'),
('DA27627', 'Đáp án A', 0, 'CH60850'),
('DA30441', 'sa', 0, 'CH41969'),
('DA30556', 'Đáp án D', 0, 'CH99412'),
('DA30653', 'Đáp án B', 0, 'CH17991'),
('DA30705', 'Đáp án A', 0, 'CH40717'),
('DA30844', 'Đáp án C', 0, 'CH66251'),
('DA31735', 'Đáp án A', 0, 'CH99412'),
('DA33669', 'sai', 0, 'CH47423'),
('DA34056', 'Đáp án B đúng', 1, 'CH43916'),
('DA35296', 'Đáp án D đúng', 1, 'CH60850'),
('DA36640', 'Đáp án D', 0, 'CH69520'),
('DA36864', 'Đáp án C', 0, 'CH36938'),
('DA36893', 'Đáp án A đúng', 1, 'CH87991'),
('DA37234', 'Đáp án B ', 0, 'CH21760'),
('DA37914', 'Đáp án A', 0, 'CH47192'),
('DA41482', 'Đáp án D đúng', 1, 'CH21760'),
('DA43740', 'Đáp án A', 0, 'CH76706'),
('DA44121', 'Đáp án C', 0, 'CH60850'),
('DA45754', 'Đáp án C', 0, 'CH35265'),
('DA46469', 'Đáp án C', 0, 'CH80090'),
('DA46607', 'sai', 0, 'CH41969'),
('DA48310', 'Đáp án A đúng', 1, 'CH36938'),
('DA48977', 'Đáp án C', 0, 'CH25464'),
('DA51544', 'Đáp án A', 0, 'CH66251'),
('DA51942', 'Đáp án D đúng', 1, 'CH02037'),
('DA52103', 'Đáp án C', 0, 'CH40717'),
('DA52521', 'Đáp án D', 0, 'CH44858'),
('DA53169', 'đúng', 1, 'CH41969'),
('DA53678', 'Đáp án B', 0, 'CH37394'),
('DA55460', 'sai', 0, 'CH41969'),
('DA56747', 'Đáp án D', 0, 'CH76706'),
('DA57859', 'Đáp án D', 0, 'CH35265'),
('DA58464', 'Đáp án B', 0, 'CH68509'),
('DA59270', 'Đáp án C', 0, 'CH63330'),
('DA60320', 'Đáp án A đúng', 1, 'CH44682'),
('DA61676', 'Đáp án C đúng', 1, 'CH49517'),
('DA62170', 'Đáp án B đúng', 1, 'CH76706'),
('DA66243', 'Đáp án B', 0, 'CH25464'),
('DA66463', 'sai', 0, 'CH47423'),
('DA67048', 'Đáp án D đúng', 1, 'CH77684'),
('DA67296', 'Đáp án A', 0, 'CH79717'),
('DA69779', 'Đáp án C', 0, 'CH77684'),
('DA69944', 'Đáp án A', 0, 'CH35265'),
('DA71439', 'Đáp án D', 0, 'CH49517'),
('DA72278', 'sai', 0, 'CH97523'),
('DA72809', 'Đáp án B đúng', 1, 'CH66251'),
('DA73204', 'Đáp án B', 0, 'CH27030'),
('DA73401', 'Đáp án D', 0, 'CH25698'),
('DA74739', 'Đáp án D', 0, 'CH55432'),
('DA75225', 'Đáp án D', 0, 'CH44682'),
('DA77103', 'Đáp án B', 0, 'CH60850'),
('DA77360', 'Đáp án D đúng', 1, 'CH58585'),
('DA78038', 'Đáp án C', 0, 'CH37394'),
('DA79100', 'Đáp án D ', 0, 'CH68509'),
('DA79308', 'Đáp án C', 0, 'CH87991'),
('DA80167', 'Đáp án A', 0, 'CH21760'),
('DA80933', 'sai', 0, 'CH47423'),
('DA82450', 'Đáp án D đúng', 1, 'CH40717'),
('DA82586', 'Đáp án A', 0, 'CH25698'),
('DA82752', 'Đáp án C đúng', 1, 'CH47192'),
('DA82957', 'Đáp án A', 0, 'CH27030'),
('DA83540', 'Đáp án D', 0, 'CH66251'),
('DA83756', 'Đáp án A', 0, 'CH68509'),
('DA84647', 'Đáp án A', 0, 'CH55432'),
('DA84868', 'Đáp án D', 0, 'CH80090'),
('DA85303', 'Đáp án A đúng', 1, 'CH44858'),
('DA86014', 'Đáp án A', 0, 'CH17991'),
('DA89141', 'Đáp án B', 0, 'CH79717'),
('DA89355', 'Đáp án B đúng', 1, 'CH25698'),
('DA89359', 'Đáp án C đúng', 1, 'CH27030'),
('DA90848', 'Đáp án B', 0, 'CH69520'),
('DA92037', 'Đáp án A', 0, 'CH80090'),
('DA93116', 'Đáp án C', 0, 'CH43916'),
('DA93687', 'Đáp án C', 0, 'CH25698'),
('DA94037', 'Đáp án D', 0, 'CH63330'),
('DA98237', 'Đáp án D', 0, 'CH87991'),
('DA98985', 'Đáp án D đúng', 1, 'CH79717'),
('DA99010', 'Đáp án B đúng', 1, 'CH55432'),
('DA99898', 'Đáp án A', 0, 'CH49517');

-- --------------------------------------------------------

--
-- Table structure for table `de_kiem_tra`
--

CREATE TABLE `de_kiem_tra` (
  `maDe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenDe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maBKT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ket_qua`
--

CREATE TABLE `ket_qua` (
  `maKQ` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maBKT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` float NOT NULL,
  `thoiGianHoanThanh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ket_qua`
--

INSERT INTO `ket_qua` (`maKQ`, `maBKT`, `maUser`, `diem`, `thoiGianHoanThanh`) VALUES
('KQ047', 'BKT32444', 'ID006', 8, '2022-01-05 22:47:33'),
('KQ241', 'BKT32444', 'ID007', 4, '2022-01-05 22:46:53'),
('KQ247', 'BKT32444', 'ID005', 0, '2022-01-05 22:48:01'),
('KQ427', 'BKT32444', 'ID8752', 8, '2022-01-07 14:33:10'),
('KQ501', 'BKT32444', 'ID004', 10, '2022-01-05 22:46:23'),
('KQ599', 'BKT32444', 'ID8804', 10, '2022-01-05 22:44:49'),
('KQ774', 'BKT32444', 'ID002', 2, '2022-01-05 22:45:13'),
('KQ786', 'BKT32444', 'ID003', 8, '2022-01-05 22:45:39'),
('KQ795', 'BKT18593', 'ID8804', 0, '2022-01-10 14:58:36'),
('KQ807', 'BKT39471', 'ID8752', 6.7, '2022-01-08 00:00:00'),
('KQ825', 'BKT18593', 'ID8752', 10, '2022-01-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kho`
--

CREATE TABLE `kho` (
  `maKho` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `maKhoa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenKhoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lop_hoc`
--

CREATE TABLE `lop_hoc` (
  `maLop` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenLop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `maMH` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenMH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quan_tri_vien`
--

CREATE TABLE `quan_tri_vien` (
  `maQTV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenQTV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(20) NOT NULL,
  `maQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `maQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`maQuyen`, `tenQuyen`) VALUES
('admin', 'admin'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `maUser` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenUser` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maQuyen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`maUser`, `tenUser`, `matKhau`, `email`, `maQuyen`) VALUES
('ID002', 'Sasuke', '123', 'sasuke@gmail.com', 'user'),
('ID003', 'Naruto', '123', 'naruto@gmail.com', 'user'),
('ID004', 'Sacura', '123', 'sacura@gmail.com', 'user'),
('ID005', 'Luffy', '123', 'luffy@gmai.com', 'user'),
('ID006', 'Zoro', '123', 'zoro@gmail.com', 'user'),
('ID007', 'Sanji', '123', 'sanj@gmail.com', 'user'),
('ID8752', 'Lâm Trường 123', '123', 'truong.ll.60cntt@ntu.edu.vn', 'user'),
('ID8804', 'Trường Lê', '123', 'truongle.281000@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_giang`
--
ALTER TABLE `bai_giang`
  ADD PRIMARY KEY (`maBG`),
  ADD KEY `fk_baigiang_monhoc` (`maMH`),
  ADD KEY `fk_baigiang_khoa` (`maKhoa`),
  ADD KEY `fk_baigiang_user` (`maUser`);

--
-- Indexes for table `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  ADD PRIMARY KEY (`maBKT`),
  ADD KEY `fk_baiKT_user` (`maUser`);

--
-- Indexes for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`maCauHoi`),
  ADD KEY `fk_cauhoi_baiKT` (`maBKT`);

--
-- Indexes for table `chi_tiet_kho`
--
ALTER TABLE `chi_tiet_kho`
  ADD KEY `fk_ctkho_kho` (`maKho`);

--
-- Indexes for table `dap_an`
--
ALTER TABLE `dap_an`
  ADD PRIMARY KEY (`maDA`),
  ADD KEY `fk_dapan_cauhoi` (`maCauHoi`);

--
-- Indexes for table `de_kiem_tra`
--
ALTER TABLE `de_kiem_tra`
  ADD PRIMARY KEY (`maDe`),
  ADD KEY `fk_de_baiKT` (`maBKT`);

--
-- Indexes for table `ket_qua`
--
ALTER TABLE `ket_qua`
  ADD PRIMARY KEY (`maKQ`),
  ADD KEY `fk_ketqua_maBKT` (`maBKT`),
  ADD KEY `fk_ketqua_user` (`maUser`);

--
-- Indexes for table `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`maKho`),
  ADD KEY `fk_kho_user` (`maUser`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`maKhoa`);

--
-- Indexes for table `lop_hoc`
--
ALTER TABLE `lop_hoc`
  ADD PRIMARY KEY (`maLop`);

--
-- Indexes for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`maMH`);

--
-- Indexes for table `quan_tri_vien`
--
ALTER TABLE `quan_tri_vien`
  ADD PRIMARY KEY (`maQTV`),
  ADD KEY `fk_QTV_Quyen` (`maQuyen`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maQuyen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`maUser`),
  ADD KEY `fk_user_quyen` (`maQuyen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bai_giang`
--
ALTER TABLE `bai_giang`
  ADD CONSTRAINT `fk_baigiang_khoa` FOREIGN KEY (`maKhoa`) REFERENCES `khoa` (`maKhoa`),
  ADD CONSTRAINT `fk_baigiang_monhoc` FOREIGN KEY (`maMH`) REFERENCES `mon_hoc` (`maMH`),
  ADD CONSTRAINT `fk_baigiang_user` FOREIGN KEY (`maUser`) REFERENCES `user` (`maUser`);

--
-- Constraints for table `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  ADD CONSTRAINT `fk_baiKT_user` FOREIGN KEY (`maUser`) REFERENCES `user` (`maUser`);

--
-- Constraints for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `fk_cauhoi_baiKT` FOREIGN KEY (`maBKT`) REFERENCES `bai_kiem_tra` (`maBKT`);

--
-- Constraints for table `chi_tiet_kho`
--
ALTER TABLE `chi_tiet_kho`
  ADD CONSTRAINT `fk_ctkho_kho` FOREIGN KEY (`maKho`) REFERENCES `kho` (`maKho`);

--
-- Constraints for table `dap_an`
--
ALTER TABLE `dap_an`
  ADD CONSTRAINT `fk_dapan_cauhoi` FOREIGN KEY (`maCauHoi`) REFERENCES `cau_hoi` (`maCauHoi`);

--
-- Constraints for table `de_kiem_tra`
--
ALTER TABLE `de_kiem_tra`
  ADD CONSTRAINT `fk_de_baiKT` FOREIGN KEY (`maBKT`) REFERENCES `bai_kiem_tra` (`maBKT`);

--
-- Constraints for table `ket_qua`
--
ALTER TABLE `ket_qua`
  ADD CONSTRAINT `fk_ketqua_maBKT` FOREIGN KEY (`maBKT`) REFERENCES `bai_kiem_tra` (`maBKT`),
  ADD CONSTRAINT `fk_ketqua_user` FOREIGN KEY (`maUser`) REFERENCES `user` (`maUser`);

--
-- Constraints for table `kho`
--
ALTER TABLE `kho`
  ADD CONSTRAINT `fk_kho_user` FOREIGN KEY (`maUser`) REFERENCES `user` (`maUser`);

--
-- Constraints for table `quan_tri_vien`
--
ALTER TABLE `quan_tri_vien`
  ADD CONSTRAINT `fk_QTV_Quyen` FOREIGN KEY (`maQuyen`) REFERENCES `quyen` (`maQuyen`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_quyen` FOREIGN KEY (`maQuyen`) REFERENCES `quyen` (`maQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
