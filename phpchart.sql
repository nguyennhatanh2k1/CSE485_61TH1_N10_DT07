-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2021 lúc 03:40 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpchart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` time DEFAULT NULL,
  `Group_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chart`
--

INSERT INTO `chart` (`id`, `Userid`, `Name`, `Message`, `Date`, `Time`, `Group_Name`) VALUES
(1, '1234554321', 'Patrick', 'What do you think about javascrpt and php after seeing this demo?', '01/11/21', '15:01:00', ''),
(2, '1234554321', 'Patrick', 'Malawi is the warm heart of africa with beautiful lake and mountains', '01/11/21', '15:01:00', 'Malawi'),
(3, '123', 'Duy', 'Helooooo', '01/11/21', '15:01:00', ''),
(4, '123', 'Duy', 'What your names', '01/11/21', '15:03:00', ''),
(5, '123', 'Duy', 'Hello', '02/11/21', '10:56:00', ''),
(6, '123', 'Duy', 'KOKOKOHYGV', '02/11/21', '10:56:00', ''),
(7, '123', 'Duy', 'KOKOKOHYGV', '02/11/21', '11:11:00', ''),
(8, '123', 'Duy', 'BHyuggvasyv', '02/11/21', '11:11:00', 'Halllaaa'),
(9, '123', 'Duy', 'Hello', '02/11/21', '11:15:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `GName` varchar(30) NOT NULL,
  `Members` text NOT NULL,
  `Date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `Userid`, `GName`, `Members`, `Date`) VALUES
(1, '1234554321', 'Malawi', '1', '01/11/21'),
(5, '123', 'Halllaaa', '1', '02/11/21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profilepictures`
--

CREATE TABLE `profilepictures` (
  `id` int(11) NOT NULL,
  `ids` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `profilepictures`
--

INSERT INTO `profilepictures` (`id`, `ids`, `Category`, `name`, `type`, `Size`, `content`) VALUES
(1, '1', 'User', 'IMG_0458.JPG', 'image/jpeg', '194348', 0x494d475f303435382e4a5047),
(2, '1', 'Group', '339264-Berserker.jpg', 'image/jpeg', '110920', 0x3333393236342d4265727365726b65722e6a7067),
(3, '2', 'User', 'Chu Tiến Đức_1951060611.jpg', 'image/jpeg', '252483', 0x436875205469e1babf6e20c490e1bba9635f313935313036303631312e6a7067);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(300) NOT NULL,
  `Sirname` varchar(300) NOT NULL,
  `Mtitle` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Institution` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Online` varchar(300) NOT NULL,
  `Time` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Sirname`, `Mtitle`, `Phone`, `Institution`, `Email`, `Password`, `Online`, `Time`) VALUES
(1, 'Patrick', 'Mvuma', '', '265999107724', 'MOH', 'mvumapatrick@gmail.com', '1234554321', '', 1635775271),
(2, 'Duy', 'Tran', '', '098876767', '1213', 'duytran2001@gmail.com', '123', 'Online', 1635930382);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profilepictures`
--
ALTER TABLE `profilepictures`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `profilepictures`
--
ALTER TABLE `profilepictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
