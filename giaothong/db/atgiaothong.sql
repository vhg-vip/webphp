-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:45 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atgiaothong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loivipham`
--

CREATE TABLE `tbl_loivipham` (
  `id` int(11) NOT NULL,
  `biensoxe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `loivipham` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthuc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mucphat` int(11) NOT NULL,
  `ngaygio` date NOT NULL,
  `trangthai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phuongtien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loivipham`
--

INSERT INTO `tbl_loivipham` (`id`, `biensoxe`, `loivipham`, `diadiem`, `hinhthuc`, `mucphat`, `ngaygio`, `trangthai`, `phuongtien`) VALUES
(2, '90B1-33344', 'Đi sai làn', 'TP Hồ Chí Minh', 'Phạt tiền', 100000, '2021-05-12', 'Đã thanh toán', 'Ô tô'),
(3, '90B1-33377', 'Không đội mũ bảo hiểm', 'Đường Lê Văn Lương, Hà Nội', 'Phạt cảnh cáo', 300000, '2021-05-01', 'Chưa thanh toán', 'Xe máy'),
(4, '29B1-33345', 'Đi sai làn', 'Quận Cầu Giấy, Hà Nội', 'Phạt tiền', 400000, '2021-05-24', 'Chưa thanh toán', 'Xe máy'),
(5, '29D01245', 'Vượt quá tốc độ', 'Hà Nội', 'Phạt tiền', 500000, '2021-06-04', 'Chưa thanh toán', 'Xe tải'),
(6, '29MD100160', 'Không đội mũ bảo hiểm', 'Đà Nẵng', 'Phạt tiền', 200000, '2021-06-02', 'Đã thanh toán', 'Xe đạp điện'),
(7, 'XLND-1234', 'Vượt đèn đỏ', 'Nam Định', 'Phạt tiền', 100000, '2021-05-20', 'Chưa thanh toán', 'Xích lô'),
(8, '29P105050', 'Vượt đèn vàng', 'Quận Đống Đa, Hà Nội', 'Phạt tiền', 200000, '2021-06-04', 'Chưa thanh toán', 'Xe máy'),
(9, '29B1-31235', 'Trở hàng quá tái', 'Quận Cầu Giấy, Hà Nội', 'Phạt tiền', 500000, '2021-06-03', 'Chưa thanh toán', 'Xe tải'),
(10, '90B1-56243', 'Đi sai làn', 'Quận Thanh Xuân, Hà Nội', 'Phạt tiền', 300000, '2021-06-02', 'Chưa thanh toán', 'Xe khách');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE `tbl_support` (
  `support_id` int(11) NOT NULL,
  `support_email` varchar(100) NOT NULL,
  `support_phonenumber` varchar(100) NOT NULL,
  `support_content` varchar(1000) NOT NULL,
  `support_name` varchar(100) DEFAULT NULL,
  `support_time` date NOT NULL DEFAULT current_timestamp(),
  `support_status` varchar(100) DEFAULT 'Chưa phản hồi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_support`
--

INSERT INTO `tbl_support` (`support_id`, `support_email`, `support_phonenumber`, `support_content`, `support_name`, `support_time`, `support_status`) VALUES
(2, 'viethuong24092000@gmail.com', '0969240900', 'Lỗi tra cứu', 'Nguyễn Việt Hương', '2021-06-01', 'Chưa phản hồi'),
(5, 'viethuong24092000@gmail.com', '0969240900', 'fgdhgdgfdg', 'adad', '2021-06-01', 'Đã phản hồi'),
(6, 'abcd@gmail.com', '0123456789', 'aloalo', 'aaaaa', '2021-06-01', 'Chưa phản hồi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_age` int(11) DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phonenumber` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `user_address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_job` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_name`, `user_age`, `user_email`, `user_phonenumber`, `user_password`, `isAdmin`, `user_address`, `user_id`, `user_gender`, `user_fullname`, `user_avatar`, `user_job`, `user_birth`) VALUES
('vhg', 0, '', '', '123', 1, '', 3, '', '', '', '', '2021-06-01'),
('root', 20, 'viethuong24092000@gmail.com', '0969240900', 'root', 0, 'Hà Đông, Hà Nội', 24, 'Nữ', 'Nguyễn Việt Hương', '', 'Developer', '2021-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_loivipham`
--
ALTER TABLE `tbl_loivipham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_loivipham`
--
ALTER TABLE `tbl_loivipham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_support`
--
ALTER TABLE `tbl_support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
