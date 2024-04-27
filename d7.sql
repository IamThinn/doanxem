-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2024 lúc 10:50 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `d7`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bophan`
--

CREATE TABLE `bophan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bophan`
--

INSERT INTO `bophan` (`id`, `ten`, `dienthoai`, `email`) VALUES
(1, 'xuatban', '0337334545', 'anh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `ten`, `mota`) VALUES
(1, 'war', 'hay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `chude_id` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `sotutoithieu` int(11) NOT NULL,
  `capdotoithieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`id`, `ten`, `chude_id`, `mota`, `sotutoithieu`, `capdotoithieu`) VALUES
(1, 'aaaa', 1, 'oke', 5, 10),
(2, 'bbb', 1, 'oke', 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `id` varchar(32) NOT NULL,
  `phongban_id` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `capdo` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `dienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`id`, `phongban_id`, `trangthai`, `capdo`, `email`, `hovaten`, `dienthoai`) VALUES
('tg1', 1, 1, 1, 'vanh@gmail.com', 'vanh', '0847563845');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` varchar(32) NOT NULL,
  `tacgia_id` varchar(32) NOT NULL,
  `chuyenmuc_id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `motangan` varchar(500) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tacgia_id`, `chuyenmuc_id`, `tieude`, `motangan`, `noidung`) VALUES
('â', 'tg1', 1, 'aa', 'â', ''),
('tt1', 'tg1', 1, 'bbb', 'oke', 'oke'),
('tt2', 'tg1', 1, 'aa', 'â', 'â'),
('tt3', 'tg1', 1, 'aa', 'â', 'â'),
('tt4', 'tg1', 1, 'aa', 'â', 'â'),
('tt5', 'tg1', 1, 'aa', 'â', 'â'),
('tt6', 'tg1', 2, 'aa', 'â', 'â');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL,
  `quyenhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `matkhau`, `tendaydu`, `quyenhan`) VALUES
(1, 'vanh', '1', 'vietanh', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chude_id` (`chude_id`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phongban_id` (`phongban_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tacgia_id` (`tacgia_id`),
  ADD KEY `chuyenmuc_id` (`chuyenmuc_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bophan`
--
ALTER TABLE `bophan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD CONSTRAINT `chuyenmuc_ibfk_1` FOREIGN KEY (`chude_id`) REFERENCES `chude` (`id`);

--
-- Các ràng buộc cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD CONSTRAINT `tacgia_ibfk_1` FOREIGN KEY (`phongban_id`) REFERENCES `bophan` (`id`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`tacgia_id`) REFERENCES `tacgia` (`id`),
  ADD CONSTRAINT `tintuc_ibfk_2` FOREIGN KEY (`chuyenmuc_id`) REFERENCES `chuyenmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
