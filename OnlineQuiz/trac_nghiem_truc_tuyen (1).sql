-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 02:25 PM
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
  `thoiGianKetThuc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bai_kiem_tra`
--

INSERT INTO `bai_kiem_tra` (`maBKT`, `tenBKT`, `matKhauBKT`, `moTa`, `thoiGian`, `thoiGianBatDau`, `thoiGianKetThuc`) VALUES
('BKT001', 'Bài Kiểm Tra 01', '123', 'Bài kiểm tra cho sinh viên lớp 12', 20, '2021-12-22 20:00:57', '2021-12-24 20:00:57'),
('BKT232', 'Bài kiểm tra 08', '1234', 'bài kiểm tra cho sinh viên đại học nha trang', 12, '2021-06-17 19:30:00', '2021-06-25 19:30:00'),
('BKT385', 'Bài Kiểm tra 02', '123', 'bài kiểm tra 02 cho sinh viên công nghệ', 20, '2021-06-17 19:30:00', '2021-06-25 19:30:00'),
('BKT509', 'bài kiểm tra 04', '123', 'âsasdasdas', 20, '2021-06-18 19:30:00', '2021-06-24 19:30:00'),
('BKT529', 'bài kiểm tra 06', '123', 'âsasdasdas', 20, '2021-06-18 19:30:00', '2021-06-24 19:30:00'),
('BKT600', 'Bài Kiểm tra số 3', '123', 'Bài kiểm tra cho sinh viên khoa ngoại ngữ', 20, '2021-06-12 19:30:00', '2021-06-23 19:30:00'),
('BKT908', 'bài kiểm tra 05', '123', 'âsasdasdas', 20, '2021-06-18 19:30:00', '2021-06-24 19:30:00');

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
('CH001', 'Đâu là đáp án đúng', 'BKT001'),
('CH002', 'Đâu là đáp án chính xác', 'BKT001');

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
('DA001', 'Đáp án A', 0, 'CH001'),
('DA002', 'Đáp Án B', 0, 'CH001'),
('DA003', 'Đáp án C', 1, 'CH001'),
('DA004', 'Đáp Án D', 0, 'CH001'),
('DA005', 'Đáp Án A', 0, 'CH002'),
('DA006', 'Đáp Án B', 0, 'CH002'),
('DA007', 'Đáp án C', 0, 'CH002'),
('DA008', 'Đáp án D', 1, 'CH002');

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
  `diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('ID7506', 'Lê Trường', '123', 'truong.ll.60cntt@ntu.edu.vn', 'user'),
('ID8804', 'lelamtruong', '123', 'truongle.281000@gmail.com', 'user');

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
  ADD PRIMARY KEY (`maBKT`);

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
  ADD KEY `fk_ketqua_maBKT` (`maBKT`);

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
  ADD CONSTRAINT `fk_ketqua_maBKT` FOREIGN KEY (`maBKT`) REFERENCES `bai_kiem_tra` (`maBKT`);

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
