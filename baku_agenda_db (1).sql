-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2023, 19:16:29
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `baku_agenda_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_description`, `n_date`, `n_category`, `n_status`, `n_file`, `n_file_ext`, `n_creator_id`, `n_create_date`) VALUES
(1, 'xxxxxxxxxxxx', 'xxxxxxxxx', '2023-07-09T19:19', 'sport', 'Deactive', '', '', 0, '2023-06-22 19:19:57'),
(2, 'xxxxxxxxxxxx', 'xxxxxxxxx', '2023-07-09T19:19', 'sport', 'Deactive', '', '', 0, '2023-06-22 19:25:20'),
(3, 'hgusd', 'ns cfjjdf jhdjf ', '2023-07-01T19:25', 'finance', 'Active', '', '', 0, '2023-06-22 19:25:37'),
(4, 'nnnnnnnnn', '              nbbbbbbbbbbbbbbbb', '2023-07-07T00:41', 'technology', 'Deactive', '', '', 0, '2023-06-22 19:41:58'),
(5, 'wjnhehxcd', 'j dwjc jdsbcjhdc', '2023-06-29T20:13', 'business', 'Active', '', '', 0, '2023-06-22 20:13:24'),
(6, 'ksdvknsdkjv', 'dslm vjdskjv', '2023-07-02T21:19', 'education', 'Active', 'mark-eliyahu-journey-fit_az-tam-loqosuz1.mp3', '.mp3', 0, '2023-06-22 21:41:05'),
(7, 'c ,mkm kc ', 'ccccccccccccccc', '2023-07-08T21:47', 'sport', 'Active', '', '', 0, '2023-06-22 21:47:20'),
(8, 'mmmmmmmmmm', '    nnnnnnnnnnnnnnnn', '2023-07-08T21:48', 'technology', 'Active', '', '', 0, '2023-06-22 21:49:30'),
(9, 'lkdjkd', 'md fndcf ', '2023-06-30T02:49', 'education', 'Active', '', '', 0, '2023-06-22 21:50:02'),
(10, 'mcjvn jncj nv', 'cdvn jnckvj vc ', '2023-07-08T18:57', 'technology', 'Deactive', 'Snapchat-14129917572.jpg', '.jpg', 0, '2023-06-23 18:57:44'),
(11, 'jdfjcjnfjcn', 'fmcjkmfjcfjmcjfjcmfjncjfnjcnfjncjfncjf', '2023-06-29T18:58', 'education', 'Active', '', '', 0, '2023-06-23 18:58:25'),
(12, 'jdfjcjnfjcn', 'fmcjkmfjcfjmcjfjcmfjncjfnjcnfjncjfncjf', '2023-06-29T18:58', 'education', 'Active', '', '', 0, '2023-06-23 19:02:45'),
(13, 'salam canimmm necesennnnn', 'sagol cannn sen necesennnn', '2023-07-08T01:29', 'business', 'Active', 'Snapchat-14129917573.jpg', '.jpg', 0, '2023-06-23 20:29:44'),
(14, '112222', '12458795', '2023-08-06T20:34', 'education', 'Deactive', '', '', 0, '2023-06-23 20:35:03');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
