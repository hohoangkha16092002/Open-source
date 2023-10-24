-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 04:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open-source`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhmh`
--

CREATE TABLE `anhmh` (
  `IDAnhMH` varchar(10) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `TenAnh` varchar(100) NOT NULL,
  `DLAnh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhmh`
--

INSERT INTO `anhmh` (`IDAnhMH`, `MaMH`, `TenAnh`, `DLAnh`) VALUES
('HASP001', 'LT001', 'ACER Aspire 3', 'https://lh3.googleusercontent.com/X6dLuE11w1kexLykZXydnRJdqaddEV0LDWDUXtqWdAoLntmEWp_MHPbpXj-3G9xJ_Mvm7TrpswpnfV0wWJ504ujj5-ju4L6ogA=w500-rw'),
('HASP002', 'LT002', 'ACER Nitro 5 Tiger', 'https://lh3.googleusercontent.com/fXZQ5-Dps2ru-8lXOuMVr0-Md61rn131O041rNRli8657yKmkLOao90COa2KOkry-coVjpzl4oK9BZn-zRMsoEOJNvnGD38=w500-rw'),
('HASP003', 'LT003', 'MacBook Air 2023', 'https://lh3.googleusercontent.com/ynVxOa_n1ROHtX-zLGJOshMz99v5dwEKMf9Ikqj3v4KsCbH75NxVZEkmGjuzhM-_8L023MN3UpRigBFQr2YHLw0ptoox-G0=w500-rw'),
('HASP004', 'LT004', 'ASUS TUF Gaming F15', 'https://lh3.googleusercontent.com/RyacFxZhVBMlVbIHzZW5xFcYutS4jZofTji-dBtvqbmlcIDdR1mVtNInpvcoMJ-4KMeFBiZy3BoeiNVEq7PVjHSNqSt3sYP4=w500-rw'),
('HASP005', 'LT005', 'Dell Vostro 3530', 'https://lh3.googleusercontent.com/RjwgHOpZEdYxUSA7IeT8Obit-W8nsixvqL-3eTNfxmDhqhbpaqugwY_gCC3l0ACGcfwJecu7EGMsbeepP3D4zoxmJzUxmWyDEg=w500-rw'),
('HASP006', 'LT006', 'Dell Inspiron 3530 ', 'https://lh3.googleusercontent.com/Bww7K0u7owc5on2-bJXJT1UDb77RupjcBIrV5YEDMFs2d1VE3WEC7P5DPOrOZDwbzRqubXGwi5T1Fj8h-ephe_oo7U3yRpqn=w500-rw'),
('HASP007', 'LT007', 'HP Pavilion 15', 'https://lh3.googleusercontent.com/Py8JD44Vpw_Uzj6CZWuPHpl-HvsVB8Yf9oGl_yUmwHEf3jCd9Sbq1QqI7ZX8ri65kRqu4kfF_d6Hj860qJzwKHIAhMZ9e9G9=w500-rw'),
('HASP008', 'LT008', ' Lenovo IdeaPad Slim 3', 'https://lh3.googleusercontent.com/yRRVCuSbCFkhHqsyQT1pjwiSt3O3VhGc2iuMyhT32fhmD7yNF-otwg9efqO5kgkMnYWTOeKZg6NaGlGfRRu3u26hp49EVN8gTA=w500-rw'),
('HASP009', 'LT009', 'Lenovo IdeaPad Gaming 3', 'https://lh3.googleusercontent.com/Gh_OtxAoNTIDlSqkjJDkOeRugJ5Zqi7p9hQT05aLt1QcYttksgO3O2j1NhXros_oApISz4YYIY1Lmi-BVN-6kbLHyiJKrheA=w500-rw'),
('HASP010', 'LT010', 'LG Gram 2023 ', 'https://lh3.googleusercontent.com/YU9mkLDYdLTI8xCTQYtIxa3x7RB-NP3s9WaZo9KdxzeNe1lpkCbSWRgc51rAUBhv54IRTbN2PBYhS6AG-btSTCG0i-pwfpVM=w500-rw'),
('HASP011', 'LT011', 'MSI Modern 14 ', 'https://lh3.googleusercontent.com/dLxlPSOY5wfN31JvRBLyXYqm3L2ClO_sAKhWgpTA0C10vcsH96HwiCVA6xUftryPyNCSEvutgdw4ZXeDDQIz91Ob4yAxCjH3=w500-rw'),
('HASP012', 'LT012', 'MSI Crosshair 15', 'https://lh3.googleusercontent.com/JWq7Iiz0C1H8Re9XAz_O_tiWVWj5uPB1pOFJdND8RTDCrz1KzqGQj1E3kmzcGYpzS2BWfU3NOqaWj0i1bUrTF2SMmkDPoJI=w500-rw');

-- --------------------------------------------------------

--
-- Table structure for table `baohanh`
--

CREATE TABLE `baohanh` (
  `MaBH` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `MaKH` varchar(5) NOT NULL,
  `NgayBH` date NOT NULL,
  `LyDo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baohanh`
--

INSERT INTO `baohanh` (`MaBH`, `MaMH`, `MaKH`, `NgayBH`, `LyDo`) VALUES
('BH001', 'LT001', 'KH001', '2023-10-17', 'Lỗi màn hình'),
('BH002', 'LT002', 'KH002', '2023-10-25', 'Lỗi bàn phím'),
('BH003', 'LT003', 'KH003', '2023-10-25', 'Lỗi kết nối'),
('BH004', 'LT004', 'KH004', '2023-10-26', 'Lỗi âm thanh'),
('BH005', 'LT005', 'KH005', '2023-10-29', 'Lỗi phần mềm'),
('BH006', 'LT006', 'KH006', '2023-10-31', 'Lỗi phần cứng'),
('BH007', 'LT007', 'KH007', '2023-11-03', 'Lỗi pin'),
('BH008', 'LT008', 'KH008', '2023-11-05', 'Lỗi phần mềm'),
('BH009', 'LT009', 'KH009', '2023-11-15', 'Lỗi cổng sạc'),
('BH010', 'LT010', 'KH010', '2023-11-28', 'Lỗi màn hình');

-- --------------------------------------------------------

--
-- Table structure for table `ctdh`
--

CREATE TABLE `ctdh` (
  `MaCTDH` varchar(10) NOT NULL,
  `MaDH` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `SoLuongMH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctdh`
--

INSERT INTO `ctdh` (`MaCTDH`, `MaDH`, `MaMH`, `SoLuongMH`) VALUES
('CTDH001', 'DH001', 'LT001', 1),
('CTDH002', 'DH002', 'LT002', 1),
('CTDH003', 'DH003', 'LT003', 1),
('CTDH004', 'DH004', 'LT004', 1),
('CTDH005', 'DH005', 'LT005', 1),
('CTDH006', 'DH006', 'LT006', 1),
('CTDH007', 'DH007', 'LT001', 1),
('CTDH008', 'DH008', 'LT002', 1),
('CTDH009', 'DH009', 'LT003', 1),
('CTDH010', 'DH010', 'LT004', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `MaCTHD` varchar(10) NOT NULL,
  `MaHD` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthd`
--

INSERT INTO `cthd` (`MaCTHD`, `MaHD`, `MaMH`, `SoLuong`, `DonGia`) VALUES
('CTHD001', 'HD001', 'LT001', 1, 11990000),
('CTHD002', 'HD002', 'LT002', 1, 25990000),
('CTHD003', 'HD003', 'LT003', 1, 32290000),
('CTHD004', 'HD004', 'LT004', 1, 28690000),
('CTHD005', 'HD005', 'LT005', 1, 16890000),
('CTHD006', 'HD006', 'LT006', 1, 23990000),
('CTHD007', 'HD007', 'LT007', 1, 24690000),
('CTHD008', 'HD008', 'LT008', 1, 14490000),
('CTHD009', 'HD009', 'LT009', 1, 17390000),
('CTHD010', 'HD010', 'LT010', 1, 40890000);

-- --------------------------------------------------------

--
-- Table structure for table `ctkm`
--

CREATE TABLE `ctkm` (
  `MaCT` varchar(10) NOT NULL,
  `MaKM` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `SLQuaTang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctkm`
--

INSERT INTO `ctkm` (`MaCT`, `MaKM`, `MaMH`, `SLQuaTang`) VALUES
('CTKM001', 'KM001', 'LT001', 86),
('CTKM002', 'KM002', 'LT002', 72),
('CTKM003', 'KM003', 'LT003', 65),
('CTKM004', 'KM004', 'LT004', 37),
('CTKM005', 'KM005', 'LT005', 99),
('CTKM006', 'KM006', 'LT006', 68),
('CTKM007', 'KM001', 'LT007', 63),
('CTKM008', 'KM002', 'LT008', 54),
('CTKM009', 'KM003', 'LT009', 55),
('CTKM010', 'KM004', 'LT010', 39),
('CTKM011', 'KM005', 'LT011', 92),
('CTKM012', 'KM006', 'LT012', 34);

-- --------------------------------------------------------

--
-- Table structure for table `dmhangsanxuat`
--

CREATE TABLE `dmhangsanxuat` (
  `MaHSX` varchar(2) NOT NULL,
  `TenHSX` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dmhangsanxuat`
--

INSERT INTO `dmhangsanxuat` (`MaHSX`, `TenHSX`) VALUES
('AC', 'Acer'),
('AP', 'Apple'),
('AS', 'Asus'),
('DE', 'Dell'),
('HP', 'HP'),
('LE', 'Lenovo'),
('LG', 'LG'),
('MI', 'Microsoft'),
('MS', 'MSI');

-- --------------------------------------------------------

--
-- Table structure for table `dmloaimathang`
--

CREATE TABLE `dmloaimathang` (
  `MaLMH` varchar(5) NOT NULL,
  `TenLoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dmloaimathang`
--

INSERT INTO `dmloaimathang` (`MaLMH`, `TenLoai`) VALUES
('BSLT', 'Laptop văn phòng'),
('GMLT', 'Laptop Gaming'),
('TIOLT', 'Laptop cảm ứng');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` varchar(5) NOT NULL,
  `MaKH` varchar(5) NOT NULL,
  `NgayDH` date NOT NULL,
  `TongGiaTri` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaKH`, `NgayDH`, `TongGiaTri`) VALUES
('DH001', 'KH001', '2023-10-12', 11990000),
('DH002', 'KH002', '2023-10-13', 25990000),
('DH003', 'KH003', '2023-10-14', 32290000),
('DH004', 'KH004', '2023-10-15', 28690000),
('DH005', 'KH005', '2023-10-16', 16890000),
('DH006', 'KH006', '2023-10-17', 23990000),
('DH007', 'KH001', '2023-10-18', 24690000),
('DH008', 'KH002', '2023-10-19', 14490000),
('DH009', 'KH003', '2023-10-10', 17390000),
('DH010', 'KH004', '2023-10-21', 40890000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(5) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `NgayLap` date NOT NULL,
  `TongGiaTri` decimal(10,0) DEFAULT NULL,
  `MaKH` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaNV`, `NgayLap`, `TongGiaTri`, `MaKH`) VALUES
('HD001', 'NV001', '2023-10-12', 11990000, 'KH001'),
('HD002', 'NV002', '2023-10-13', 25990000, 'KH002'),
('HD003', 'NV003', '2023-10-14', 32290000, 'KH003'),
('HD004', 'NV004', '2023-10-15', 28690000, 'KH004'),
('HD005', 'NV005', '2023-10-16', 16890000, 'KH005'),
('HD006', 'NV006', '2023-10-17', 23990000, 'KH006'),
('HD007', 'NV001', '2023-10-18', 24690000, 'KH007'),
('HD008', 'NV002', '2023-10-19', 14490000, 'KH008'),
('HD009', 'NV003', '2023-10-10', 17390000, 'KH009'),
('HD010', 'NV004', '2023-10-21', 40890000, 'KH010');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(100) NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SDT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTenKH`, `DiaChi`, `Email`, `MatKhau`, `NgaySinh`, `SDT`) VALUES
('KH001', 'Lê Thành Bảo', '2 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'thanhbao123@gmail.com', '123abc', '2002-08-18', '0941499426'),
('KH002', 'Nguyễn Minh Chiến', '22 Đặng Tất, Vĩnh Hải, Nha Trang', 'nmchien238@gmail.com', '123abc', '2000-09-29', '0639369418'),
('KH003', 'Nguyễn Lưu Quang Đạt', '28 Bắc Sơn, Vĩnh Hải, Nha Trang', 'quangdat636@gmail.com', '123abc', '2001-06-20', '0163682648'),
('KH004', 'Lê Ngọc Duy', 'Mai Xuân Thưởng,Vĩnh Hải, Nha Trang', 'ngocduynguyen225@gmail.com', '123abc', '1990-03-10', '0351881936'),
('KH005', 'Mai Quang Hoài', '6 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'quanghoai090@gmail.com', '123abc', '1993-06-11', '0135637913'),
('KH006', 'Hồ Ngọc Huy', '7 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'ngochuyho99@gmail.com', '123abc', '2002-04-06', '0414373336'),
('KH007', 'Lê Sỹ Huy', '8 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'huyle129@gmail.com', '123abc', '1998-03-05', '0654635637'),
('KH008', 'Tạ Đình Khánh', '9 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'khanhta837@gmail.com', '123abc', '1995-01-24', '0465422653'),
('KH009', 'Huỳnh Vũ Kiên', '10 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'kienhuynh348@gmail.com', '123abc', '1999-11-19', '0254456134'),
('KH010', 'Nguyễn Tấn Kiệt', '11 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'tankiet100@gmail.com', '123abc', '1991-06-01', '0353637381');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `MoTaKM` float NOT NULL,
  `NgayBD` date NOT NULL,
  `NgayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `MaMH`, `MoTaKM`, `NgayBD`, `NgayKT`) VALUES
('KM001', 'LT001', 0.2, '2023-10-01', '2023-10-11'),
('KM002', 'LT002', 0.2, '2023-10-10', '2023-10-20'),
('KM003', 'LT003', 0.2, '2023-10-20', '2023-10-30'),
('KM004', 'LT004', 0.2, '2023-10-30', '2023-11-09'),
('KM005', 'LT011', 0.2, '2023-11-01', '2023-11-11'),
('KM006', 'LT012', 0.2, '2023-11-10', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `MaMH` varchar(5) NOT NULL,
  `TenMH` varchar(200) NOT NULL,
  `MaLMH` varchar(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `MaHSX` varchar(2) NOT NULL,
  `IDAnhMH` varchar(10) NOT NULL,
  `MoTaMH` varchar(200) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `LuuTru` varchar(50) NOT NULL,
  `HDH` varchar(50) NOT NULL,
  `ManHinh` varchar(50) NOT NULL,
  `DoHoa` varchar(100) DEFAULT NULL,
  `PIN` varchar(30) DEFAULT NULL,
  `KhoiLuong` float NOT NULL,
  `PhuKien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MaMH`, `TenMH`, `MaLMH`, `SoLuong`, `DonGia`, `MaHSX`, `IDAnhMH`, `MoTaMH`, `CPU`, `RAM`, `LuuTru`, `HDH`, `ManHinh`, `DoHoa`, `PIN`, `KhoiLuong`, `PhuKien`) VALUES
('LT001', 'ACER Aspire 3', 'BSLT', 10, 11990000, 'AC', 'HASP001', 'Không phím số, Không đèn, HD webcam', 'AMD Ryzen 5 7520U', '8GB Onboard LPDDR5 5200MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home', '14\" IPS (1920 x 1080)', 'Onboard AMD Radeon 610', '40 Wh', 1.4, 'Không'),
('LT002', 'ACER Nitro 5 Tiger', 'GMLT', 10, 25990000, 'AC', 'HASP002', 'Có phím số, RGB, không đèn, HD webcam', 'Intel Core i5-12450H', '1 x 8GB DDR5 4800MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home', '15.6\" IPS (1920 x 1080)', 'RTX 4050 6GB GDDR6 / Intel UHD Graphics', '4 cell 60 Wh', 2.5, 'Adapter, dây nguồn'),
('LT003', 'MacBook Air 2023', 'BSLT', 10, 32290000, 'AP', 'HASP003', 'Không phím số, LED, bảo mật vân tay', 'Apple M2', '1x8GB', '256GB SSD', 'macOS', '15.3\" (2880 x 1864)', NULL, NULL, 1.5, 'Không'),
('LT004', 'ASUS TUF Gaming F15', 'GMLT', 10, 28690000, 'AS', 'HASP004', 'Có phím số, RBG, có đèn,, HD webcam', ' Intel Core i7-12700H', '2 x 8GB DDR4 3200MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home', '15.6\" IPS (1920 x 1080)', 'RTX 4050 6GB GDDR6 / Intel Iris Xe Graphics', '4 cell 90 Wh', 2.2, 'Không'),
('LT005', 'Dell Vostro 3530', 'BSLT', 10, 16890000, 'DE', 'HASP005', 'Có phím số, không đèn, HD webcam, màn hình chống lóa', 'Intel Core i5-1335U', '1 x 8GB DDR4 2666MHz', '512GB SSD M.2 NVMe /', ' Windows 11 Home SL + Office Home & Student 2021', '15.6\" WVA (1920 x 1080)', 'Onboard Intel Iris Xe Graphics', '3 cell 41 Wh', 1.6, 'Không'),
('LT006', 'Dell Inspiron 3530', 'GMLT', 10, 23990000, 'DE', 'HASP006', 'Có phím số, LED, không đèn, bảo mật vân tay', 'Intel Core i7-1355U', '2 x 8GB DDR4 3200MHz', '512GB SSD M.2 NVMe /', ' Windows 11 Home SL + Office Home & Student 2021', '15.6\" WVA (1920 x 1080)', 'GeForce MX550 2GB GDDR6 / Intel Iris Xe Graphics', '4 cell 54 Wh', 1.6, 'Adapter'),
('LT007', 'HP Pavilion 15', 'BSLT', 10, 24690000, 'HP', 'HASP007', 'Có phím số, không đèn, Màn hình chống lóa, HD webcam', 'Intel Core i7-1355U', ' 2 x 8GB DDR4 3200MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home SL', '15.6\" IPS (1920 x 1080)', 'Onboard Intel Iris Xe Graphics', '3 cell 41 Wh', 1.7, 'Không'),
('LT008', ' Lenovo IdeaPad Slim 3', 'BSLT', 10, 14490000, 'LE', 'HASP008', 'Không phím số, không đèn, Màn hình chống lóa, FHD webcam, bảo mật vân tay', ' Intel Core i5-12450H', '16GB Onboard LPDDR5 4800MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home SL', '14\" IPS (1920 x 1080)', 'Onboard Intel UHD Graphics', '47 Wh', 1.4, 'Không'),
('LT009', 'Lenovo IdeaPad Gaming 3', 'GMLT', 10, 17390000, 'LE', 'HASP009', 'Có phím số, RBG, màn hình chống lóa, HD webcam, bảo mật vân tay', ' Intel Core i5-11320H', '1 x 8GB DDR4 3200MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home SL', '15.6\" IPS (1920 x 1080)', 'RTX 3050 4GB GDDR6 / Intel Iris Xe Graphics', '3 cell 45 Wh', 2.2, 'Adapter,dây nguồn'),
('LT010', 'LG Gram 2023', 'BSLT', 10, 40890000, 'LG', 'HASP010', 'Không phím số, không đèn, Màn hình chống lóa, FHD webcam, bảo mật khuôn mặt', ' Intel Core i5-1340P', ' 16GB Onboard LPDDR5 6000MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home', '15.6\" OLED (1920 x 1080)', 'Onboard Intel Iris Xe Graphics', '60 Wh', 1, 'Không'),
('LT011', 'MSI Modern 14 ', 'BSLT', 10, 15990000, 'MS', 'HASP011', 'Không phím số, LED, HD webcam', ' Intel Core i5-1335U', '1 x 8GB DDR4 3200MHz', '512GB SSD M.2 NVMe /', 'Windows 11 Home', '14\" IPS (1920 x 1080)', 'Onboard Intel Iris Xe Graphics', '3 cell 54 Wh', 1.4, 'Không'),
('LT012', 'MSI Crosshair 15', 'GMLT', 10, 32990000, 'MS', 'HASP012', 'Có phím số, LED, không đèn, HD webcam', 'Intel Core i7-12700H', '2 x 8GB DDR4 3200MHz', '1TB SSD M.2 NVMe /', 'Windows 11 Home', '15.6\" IPS (1920 x 1080)', 'RTX 3060 6GB GDDR6 / Intel Iris Xe Graphics', '3 cell 53 Wh', 2.3, 'Adapter, dây nguồn, Balo');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(5) NOT NULL,
  `HotenNV` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `TenDN` varchar(5) NOT NULL,
  `MatKhau` varchar(10) NOT NULL,
  `GioiTinh` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HotenNV`, `SDT`, `Email`, `DiaChi`, `TenDN`, `MatKhau`, `GioiTinh`) VALUES
('NV001', 'Nguyễn Thị Diễm Kiều', '0987654321', 'diemkieunv001@gmail.com', '2 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV001', '0987654321', 'Nữ'),
('NV002', 'Phan Minh Tiến', '0123456789', 'minhtiennv002@gmail.com', '3 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV002', '0123456789', 'Nam'),
('NV003', 'Ngô Trung Kiên', '0214365879', 'trungkiennv003@gmail.com', '4 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV003', '0214365879', 'Nam'),
('NV004', 'Phùng Thị Phượng', '0896745231', 'thiphuongnv004@gmail.com', '5 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV004', '0896745231', 'Nữ'),
('NV005', 'Hồ Hoàng Kha', '0978563412', 'hoangkhanv005@gmail.com', '6 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV005', '0978563412', 'Nam'),
('NV006', 'Võ Thanh Tùng', '0987641235', 'thanhtungnv006@gmail.com', '7 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV006', '0987641235', 'Nam'),
('NV007', 'Trần Thanh Tâm', '0136789654', 'thanhtamnv007@gmail.com', '8 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV007', '0136789654', 'Nam'),
('NV008', 'Võ Mạnh Hùng', '0643215879', 'manhhungnv008@gmail.com', '9 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV008', '0643215879', 'Nam'),
('NV009', 'Trần Ngọc Quyên', '0998543561', 'ngocquyennv009@gmail.com', '10 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV009', '0998543561', 'Nữ'),
('NV010', 'Trần Minh Khang', '0342477659', 'minhkhangnv010@gmail.com', '11 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang', 'NV010', '0342477659', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhmh`
--
ALTER TABLE `anhmh`
  ADD PRIMARY KEY (`IDAnhMH`);

--
-- Indexes for table `baohanh`
--
ALTER TABLE `baohanh`
  ADD PRIMARY KEY (`MaBH`,`MaMH`),
  ADD KEY `FK_MaKH_BaoHanh` (`MaKH`);

--
-- Indexes for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD PRIMARY KEY (`MaCTDH`,`MaDH`,`MaMH`),
  ADD KEY `FK_MaDH_CTDH` (`MaDH`),
  ADD KEY `FK_MaMH_CTDH` (`MaMH`);

--
-- Indexes for table `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `FK_MaHD_CTHD` (`MaHD`),
  ADD KEY `FK_MaMH_CTHD` (`MaMH`);

--
-- Indexes for table `ctkm`
--
ALTER TABLE `ctkm`
  ADD PRIMARY KEY (`MaCT`),
  ADD KEY `FK_MaKM_CTKM` (`MaKM`),
  ADD KEY `FK_MaMH_CTKM` (`MaMH`);

--
-- Indexes for table `dmhangsanxuat`
--
ALTER TABLE `dmhangsanxuat`
  ADD PRIMARY KEY (`MaHSX`);

--
-- Indexes for table `dmloaimathang`
--
ALTER TABLE `dmloaimathang`
  ADD PRIMARY KEY (`MaLMH`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `FK_MaKH_DonHang` (`MaKH`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `FK_MaNV_HoaDon` (`MaNV`),
  ADD KEY `FK_MaKH_HoaDon` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`),
  ADD KEY `FK_MaMH_KhuyenMai` (`MaMH`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`MaMH`),
  ADD KEY `FK_MaLMH` (`MaLMH`),
  ADD KEY `FK_MaHSX` (`MaHSX`),
  ADD KEY `FK_IDAnhMH` (`IDAnhMH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baohanh`
--
ALTER TABLE `baohanh`
  ADD CONSTRAINT `FK_MaKH_BaoHanh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD CONSTRAINT `FK_MaDH_CTDH` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`),
  ADD CONSTRAINT `FK_MaMH_CTDH` FOREIGN KEY (`MaMH`) REFERENCES `mathang` (`MaMH`);

--
-- Constraints for table `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `FK_MaHD_CTHD` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `FK_MaMH_CTHD` FOREIGN KEY (`MaMH`) REFERENCES `mathang` (`MaMH`);

--
-- Constraints for table `ctkm`
--
ALTER TABLE `ctkm`
  ADD CONSTRAINT `FK_MaKM_CTKM` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`),
  ADD CONSTRAINT `FK_MaMH_CTKM` FOREIGN KEY (`MaMH`) REFERENCES `mathang` (`MaMH`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_MaKH_DonHang` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_MaKH_HoaDon` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `FK_MaNV_HoaDon` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `FK_MaMH_KhuyenMai` FOREIGN KEY (`MaMH`) REFERENCES `mathang` (`MaMH`);

--
-- Constraints for table `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `FK_IDAnhMH` FOREIGN KEY (`IDAnhMH`) REFERENCES `anhmh` (`IDAnhMH`),
  ADD CONSTRAINT `FK_MaHSX` FOREIGN KEY (`MaHSX`) REFERENCES `dmhangsanxuat` (`MaHSX`),
  ADD CONSTRAINT `FK_MaLMH` FOREIGN KEY (`MaLMH`) REFERENCES `dmloaimathang` (`MaLMH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
