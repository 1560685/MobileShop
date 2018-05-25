-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2017 lúc 03:01 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quansanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ID` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`ID`, `MaKH`, `MaSP`, `SoLuong`, `Gia`, `NgayLap`, `TrangThai`) VALUES
(7, 2, 11, 2, 20000, '2016-12-22', 1),
(10, 2, 10, 2, 6000, '2016-12-15', 1),
(12, 2, 11, 34, 12000, '2016-12-22', 4),
(13, 1, 10, 2, 3424, '2016-12-21', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`) VALUES
(1, 'iPhone (Apple)'),
(2, 'OPPO'),
(3, 'SamSung'),
(4, 'Asus (Zenfone)'),
(5, 'Sony'),
(6, 'HTC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`ID`, `Ten`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Kim Ngọc', '+84165799999', 'kngoc@gmail.com', 'Đà Lạt'),
(2, 'Kim Luân', '+84869898990', 'kuan@gmail.com', 'TP.HCM'),
(4, 'Hải Vương', '+84865757657', 'hvuong@gmail.com', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `MaNhaSX` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `MaLoai`, `MaNhaSX`, `Gia`, `image`, `MoTa`) VALUES
(9, 'iphone 7', 1, 1, 2100, 'iphone-7-8-400x460.png', '<p>Iphone</p>'),
(10, 'Oppo Neo 5', 2, 2, 40000, 'oppo-neo-5.png', '<p>C&aacute;i n&agrave;y cũ rồi2</p>'),
(11, 'Oppo F1s', 2, 1, 4000, 'oppo-f1s-hero-400x460-400x460.png', '<p>Selfi to yourfasdfdsafffffffffffffffffffffffffffffasdpifosdaujfsadnfvklsadjvoi;sadfvn;sadkvhadi;vjasdff</p>'),
(12, 'SamSung Galaxy S6', 3, 2, 3000, 'smartaccessories.jpg', '<p>Ngon</p>'),
(13, 'SamSung Galaxy J7', 3, 2, 4000, 'samsung-galaxy-j7_2016_-white-c.jpg', ''),
(14, 'iPhone 6 Plus 64GB', 1, 1, 15990000, 'iphone-6-plus-64gb-3-400x460.png', '<p>fasdf</p>'),
(15, 'iPhone 7 Plus 256GB', 1, 2, 27990000, 'iphone-7-plus-256gb-2-400x460.png', '<p>biết sửa sao</p>'),
(16, 'iPhone 6s 16GB', 1, 4, 13990000, 'iphone-6s-rosegold-400x450-400x450.png', '<p>fdasfsdf</p>'),
(17, 'iPhone SE 16GB', 1, 1, 8990000, 'iphone-se-16gb-400x460.png', '<p>dfsafdsaf</p>'),
(18, ' Samsung Galaxy S7 Edge (Xanh Coral)', 3, 2, 18990000, 'samsung-galaxy-s7-edge-blue-coral-edition-1-400x460-400x460.png', '<p>&nbsp;Samsung Galaxy S7 Edge (Xanh Coral)</p>'),
(19, 'Samsung Galaxy S7 Edge (Pink Gold Edition)', 3, 2, 16990000, 'samsung-galaxy-s7-edge-pink-gold-edition-400x460.png', '<p>Samsung Galaxy S7 Edge (Pink Gold Edition)</p>'),
(20, 'Samsung Galaxy A9 Pro', 3, 2, 10990000, 'samsung-galaxy-a9-pro-1-400x460.png', '<p>Samsung Galaxy A9 Pro</p>'),
(21, 'OPPO A39 (Neo 9s)', 2, 4, 4690000, 'oppo-a39-hero-1-1-400x460.png', ''),
(22, 'OPPO Neo 7', 2, 2, 3290000, 'oppo-neo-7-hero-400x460.png', ''),
(23, 'OPPO F1 Plus', 2, 2, 9990000, 'oppo-f1-plus-3-400x460.png', ''),
(24, 'Asus Zenfone 3 ZE552KL', 4, 2, 7990000, 'asus-zenfone-3-ze552kl-400_ngothanhvan-400x460-400x460.png', ''),
(25, 'Asus Zenfone 3 ZE520KL', 4, 2, 7990000, 'asus-zenfone-3-ze520kl-400_ngothanhvan-400x460.png', ''),
(26, 'Asus Zenfone 3 Max 5.5', 4, 4, 5490000, 'asus-zenfone-3-max-zc553kl-400-400x400.png', '<h2><strong>Nhắc đến&nbsp;<a href="https://www.thegioididong.com/dtdd-asus-zenfone" target="_blank">Zenfone</a>&nbsp;th&igrave; mọi người sẽ li&ecirc;n tưởng ngay đến một chiếc smartphone gi&aacute; rẻ cấu h&igrave;nh cao, với 2 ti&ecirc;u ch&iacute; tr&ecirc;n th&igrave; kh&oacute; c&oacute; sản phẩm n&agrave;o qua mặt được Asus Zenfone 2.</strong></h2>\r\n\r\n<p><strong>Cấu h&igrave;nh phần cứng ấn tượng</strong></p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, điểm nổi bật l&agrave;m n&ecirc;n t&ecirc;n tuổi của Zenfone 2 ch&iacute;nh l&agrave; nhờ sở hữu cấu h&igrave;nh thuộc h&agrave;ng &ldquo;khủng&rdquo; nhất hiện nay so với mức gi&aacute; của m&aacute;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhờ được trang bị vi xử l&yacute; 4 nh&acirc;n Intel Atom Z3580 tốc độ 2.3 GHz, chip đồ họa&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-hieu-chip-xu-li-do-hoa-tren-smartphone-gpu-pow-594021#powervrsgx6430" target="_blank">PowerVR G6430</a>, bộ nhớ trong 64 GB v&agrave; đặc biệt RAM l&ecirc;n đến 4 GB cho hiệu năng c&oacute; phần vượt trội hơn so với c&aacute;c sản phẩm c&ugrave;ng ph&acirc;n kh&uacute;c.</p>\r\n\r\n<p><strong>Thiết kế giả kim loại</strong></p>\r\n\r\n<p>Thiết kế mặt lưng của m&aacute;y nh&igrave;n sơ qua kh&aacute; giống smartphone G3 của&nbsp;<a href="https://www.thegioididong.com/dtdd-lg" target="_blank">LG</a>&nbsp;khi c&aacute;c n&uacute;t tăng giảm &acirc;m lượng được đặt ở mặt sau ph&iacute;a dưới camera, hai cạnh b&ecirc;n được để trống ho&agrave;n to&agrave;n.</p>\r\n'),
(27, ' Asus Zenfone 2 4G/64G', 4, 4, 3790000, 'asus-zenfone-2-23ghz-4g-64g-400-400x400.png', '<h2><strong>Nhắc đến&nbsp;<a href="https://www.thegioididong.com/dtdd-asus-zenfone" target="_blank">Zenfone</a>&nbsp;th&igrave; mọi người sẽ li&ecirc;n tưởng ngay đến một chiếc smartphone gi&aacute; rẻ cấu h&igrave;nh cao, với 2 ti&ecirc;u ch&iacute; tr&ecirc;n th&igrave; kh&oacute; c&oacute; sản phẩm n&agrave;o qua mặt được Asus Zenfone 2.</strong></h2>\r\n\r\n<p><strong>Cấu h&igrave;nh phần cứng ấn tượng</strong></p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, điểm nổi bật l&agrave;m n&ecirc;n t&ecirc;n tuổi của Zenfone 2 ch&iacute;nh l&agrave; nhờ sở hữu cấu h&igrave;nh thuộc h&agrave;ng &ldquo;khủng&rdquo; nhất hiện nay so với mức gi&aacute; của m&aacute;y.fsdafasdfasdf<br />\r\n&nbsp;</p>\r\n\r\n<h2><strong>Nhắc đến&nbsp;<a href="https://www.thegioididong.com/dtdd-asus-zenfone" target="_blank">Zenfone</a>&nbsp;th&igrave; mọi người sẽ li&ecirc;n tưởng ngay đến một chiếc smartphone gi&aacute; rẻ cấu h&igrave;nh cao, với 2 ti&ecirc;u ch&iacute; tr&ecirc;n th&igrave; kh&oacute; c&oacute; sản phẩm n&agrave;o qua mặt được Asus Zenfone 2.</strong></h2>\r\n\r\n<p><strong>Cấu h&igrave;nh phần cứng ấn tượng</strong></p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ở tr&ecirc;n, điểm nổi bật l&agrave;m n&ecirc;n t&ecirc;n tuổi của Zenfone 2 ch&iacute;nh l&agrave; nhờ sở hữu cấu h&igrave;nh thuộc h&agrave;ng &ldquo;khủng&rdquo; nhất hiện nay so với mức gi&aacute; của m&aacute;y.fsdafasdfasdf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhờ được trang bị vi xử l&yacute; 4 nh&acirc;n Intel Atom Z3580 tốc độ 2.3 GHz, chip đồ họa&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-hieu-chip-xu-li-do-hoa-tren-smartphone-gpu-pow-594021#powervrsgx6430" target="_blank">PowerVR G6430</a>, bộ nhớ trong 64 GB v&agrave; đặc biệt RAM l&ecirc;n đến 4 GB cho hiệu năng c&oacute; phần vượt trội hơn so với c&aacute;c sản phẩm c&ugrave;ng ph&acirc;n kh&uacute;c.</p>\r\n\r\n<p><strong>Thiết kế giả kim loại</strong></p>\r\n\r\n<p>Thiết kế mặt lưng của m&aacute;y nh&igrave;n sơ qua kh&aacute; giống smartphone G3 của&nbsp;<a href="https://www.thegioididong.com/dtdd-lg" target="_blank">LG</a>&nbsp;khi c&aacute;c n&uacute;t tăng giảm &acirc;m lượng được đặt ở mặt sau ph&iacute;a dưới camera, hai cạnh b&ecirc;n được để trống ho&agrave;n to&agrave;n.</p>\r\n'),
(29, 'Sony Xperia XZ', 5, 4, 14990000, 'sony-xperia-xz-1-400x460.png', ''),
(30, 'Sony Xperia Z5 Dual', 5, 4, 10990000, 'sony-xperia-z5-dual-400x460.png', ''),
(31, 'Sony Xperia X', 5, 4, 9990000, 'sony-xperia-x-1-400x460.png', ''),
(32, 'Sony Xperia XA Ultra', 5, 4, 7490000, 'sony-xperia-xa-ultra-1-400x460.png', ''),
(33, 'Sony Xperia M5 (Single SIM)', 5, 4, 6990000, 'sony-xperia-m5-single-sim-hero-400x534.png', ''),
(34, 'HTC One A9', 6, 4, 8990000, 'htc-one-a9-2-400x460.png', ''),
(35, 'HTC Desire 10 Pro', 6, 4, 7990000, 'htc-desire-10-pro-400x460.png', ''),
(36, 'HTC One ME', 6, 2, 5990000, 'htc-one-me9-global-gold-sepia-sketchfab-443x425.png', ''),
(37, 'HTC One A9s', 6, 1, 5990000, 'htc-one-a9s-2-400x460.png', ''),
(38, 'HTC One E9 Dual', 6, 1, 4990000, 'htc-one-e9-dual-2-400x460.png', ''),
(40, 'HTC Desire 628', 6, 4, 4790000, 'htc-desire-628-2-400x460.png', ''),
(41, 'ASUS ZENFONE GO TV ZB551KL', 4, 4, 3490000, 'asus-zenfone-go-tv-zb551kl-400x460.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Loai` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `Loai`, `HoTen`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'admin', 'admin', 0, 'Nguyễn Mạnh Huỳnh', '01687567546', 's2darkangelst@gmail.com', '81/11 Nguyễn Trãi, p3, q5, TP.HCM'),
(2, 'test', '12345', 2, 'Tester', '+84987656598', 'kh@gmail.com', 'Cây xoan, p10, q11, TP.HCM'),
(5, 'ngoiuvk', '12345', 0, 'Nguyễn Thị Thanh Hằng', '+84869898990', 'ntthang@gmail.com', 'Ninh Bình');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaKH` (`MaKH`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaNhaSX` (`MaNhaSX`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaNhaSX`) REFERENCES `nhasanxuat` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
