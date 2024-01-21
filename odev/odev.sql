-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2024, 14:00:36
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisanlar`
--

CREATE TABLE `calisanlar` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `adsoyad`, `tarih`) VALUES
(1, 'Test Çalışan', '2024-01-17 11:48:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `durumlar`
--

CREATE TABLE `durumlar` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `renk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `durumlar`
--

INSERT INTO `durumlar` (`id`, `isim`, `renk`) VALUES
(1, 'Tamamlanacak', 'info'),
(2, 'Devam Ediyor', 'warning'),
(3, 'Tamamlandı', 'success');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorevler`
--

CREATE TABLE `gorevler` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `icerik` text DEFAULT NULL,
  `adam_gun` int(11) NOT NULL,
  `proje_id` int(11) NOT NULL,
  `calisan_id` int(11) NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT 1,
  `tarih_baslangic` date NOT NULL,
  `tarih_bitis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `gorevler`
--

INSERT INTO `gorevler` (`id`, `isim`, `icerik`, `adam_gun`, `proje_id`, `calisan_id`, `durum`, `tarih_baslangic`, `tarih_bitis`) VALUES
(1, 'Deneme Görev', 'İçerik', 12, 1, 1, 2, '2023-12-17', '2024-01-17'),
(2, 'Hoppa', 'yuppi', 5, 2, 1, 1, '2024-01-15', NULL),
(3, 'Bitti', 'icerik', 2, 3, 1, 3, '2024-01-15', '2024-01-17'),
(5, 'şakkaban', 'askjdnas', 5, 3, 1, 1, '2024-01-17', '2024-01-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `adsoyad` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `eposta`, `sifre`, `adsoyad`, `tarih`) VALUES
(1, 'gizemduzdasi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Gizem Düzdaşı', '2024-01-16 14:47:42'),
(2, 'eminarifpirinc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Emin Arif', '2024-01-16 15:22:09'),
(3, 'melisa@gmail.com', 'fe0e2fe499dba85ed54677a881e39d41', 'mel', '2024-01-16 21:24:34'),
(4, 'dilara@gmail.com', '53c3cc6fdd2f80dabbb393868a9f13c7', 'Dilara', '2024-01-16 22:15:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `isim`, `aciklama`, `kullanici_id`) VALUES
(1, '1. Proje', 'hop', 1),
(2, '2. Proje', 'lön', 1),
(3, '3. Proje', 'asdkasjfsa', 2),
(4, 'Hoooop', 'Deneme', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisanlar`
--
ALTER TABLE `calisanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `durumlar`
--
ALTER TABLE `durumlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gorevler`
--
ALTER TABLE `gorevler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisanlar`
--
ALTER TABLE `calisanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `durumlar`
--
ALTER TABLE `durumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `gorevler`
--
ALTER TABLE `gorevler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
