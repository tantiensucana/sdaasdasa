-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 08, 2021 lúc 03:16 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `idBrand` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `nameBrand` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idBrand`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`idBrand`, `nameBrand`) VALUES
('b1', 'Roadstar'),
('b2', 'Levis'),
('b3', 'Persol\r\n'),
('b4', 'Nike'),
('b5', 'Edwin'),
('b6', 'New Balance'),
('b7', 'Paul Smith'),
('b8', 'Ray-Ban');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategories` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `nameCategories` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  PRIMARY KEY (`idCategories`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`idCategories`, `nameCategories`) VALUES
('c1', 'Men'),
('c2', 'Women\r\n'),
('c3', 'Kids'),
('c4', 'Accessories'),
('c5', 'Shoes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `idDiscount` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `nameDiscount` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idDiscount`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `discount`
--

INSERT INTO `discount` (`idDiscount`, `nameDiscount`) VALUES
('d1', 'Upto - 10%'),
('d2', '40% - 50%'),
('d3', '30% - 20%'),
('d4', '10% - 5%'),
('d5', 'Other');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idProduct` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `namProduct` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `priceOld` int(11) NOT NULL,
  `priceNew` int(11) NOT NULL,
  `idType` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `idDiscount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `idBrand` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `img` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `idCategories` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idProduct`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`idProduct`, `namProduct`, `priceOld`, `priceNew`, `idType`, `idDiscount`, `idBrand`, `img`, `idCategories`) VALUES
('1', 'Sportswear in adidas figure\r\n							', 100000, 75000, 't1', 'd2', 'b3', 'product1.jpg', 'c2'),
('2', 'Sportswear in adidas figure', 200000, 150000, 't2', 'd1', 'b2', 'product2.jpg', 'c2'),
('3', 'Sportswear in adidas figure', 150000, 125000, 't3', 'd2', 'b1', 'product3.jpg', 'c1'),
('4', 'Sportswear in adidas figure', 125000, 100000, 't4', 'd3', 'b1', 'product4.jpg', 'c2'),
('5', 'Sportswear in adidas figure', 155000, 130000, 't2', 'd1', 'b2', 'product5.jpg', 'c1'),
('6', 'Sportswear in adidas figure', 150000, 75000, 't3', 'd2', 'b3', 'product6.jpg', 'c2'),
('7', 'Sportswear in adidas figure', 200000, 150000, 't1', 'd2', 'b2', 'product7.jpg', 'c1'),
('8', 'Sportswear in adidas figure', 125000, 75000, 't3', 'd2', 'b1', 'product8.jpg', 'c1'),
('9', 'Sportswear in adidas figure', 125000, 100000, 't3', 'd3', 'b2', 'product9.jpg', 'c3'),
('10', 'Sportswear in adidas figure', 220000, 195000, 't1', 'd1', 'b2', 'product10.jpg', 'c3'),
('11', 'Sportswear in adidas figure', 150000, 75000, 't3', 'd3', 'b3', 'product11.jpg', 'c3'),
('12', 'Sportswear in adidas figure', 155000, 150000, 't4', 'd2', 'b4', 'product12.jpg', 'c3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `idType` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `nameType` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`idType`, `nameType`) VALUES
('t1', 'Sofa Cum Beds'),
('t2', 'Bags'),
('t3', 'Caps & Hats'),
('t4', 'Jackets & Coats'),
('t5', 'Jeans'),
('t6', 'Shirts'),
('t7', 'Sunglasses');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
