-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 01:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_delivery`
--

CREATE TABLE `history_delivery` (
  `idhistory_delivery` int(11) NOT NULL,
  `nume` varchar(45) NOT NULL,
  `prenume` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `pret_total` int(11) NOT NULL,
  `delivery_list` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produs`
--

CREATE TABLE `produs` (
  `idProdus` int(11) NOT NULL,
  `NumeProdus` varchar(255) NOT NULL,
  `Pret` int(11) NOT NULL,
  `Image` varchar(45) DEFAULT NULL,
  `ImagePath` varchar(2048) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `NumeProdusRu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produs`
--

INSERT INTO `produs` (`idProdus`, `NumeProdus`, `Pret`, `Image`, `ImagePath`, `categorie`, `NumeProdusRu`) VALUES
(10, 'coca cola 0.3l', 20, NULL, 'https://www.pizzaabi.ro/image/cache/data/coca-cola-330ml-icon-bottle-2015_temp_1-900x900.jpg', 'apa', 'Кока кола 0.3л'),
(11, 'kent 4', 34, NULL, 'https://img3.zakaz.ua/src.1592498250.ad72436478c_2020-06-18_Tamara/src.1592498250.SNCPSG10.obj.0.1.jpg.oe.jpg.pf.jpg.350nowm.jpg.350x.jpg', 'tigari', 'кент 4'),
(12, 'Fanta Portocale 0.3l', 10, NULL, 'https://lamasa.auchan.ro/cs-content/cs-photos/products/original/fanta-portocala-0,33-ml_2886_1_1517561544.jpg', 'apa', 'Fanta Portocale 0.3l'),
(13, 'Sprite 0.3l', 10, NULL, 'https://lamasa.auchan.ro/cs-content/cs-photos/products/original/sprite-0,33ml-_2888_1_1517561598.jpg', 'apa', 'Sprite 0.3l'),
(14, 'Coca Cola 1.5l', 26, NULL, 'https://fidesco.md/wp-content/uploads/2020/06/5449000000439-1.jpg', 'apa', 'Coca Cola 1.5l');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUtilizator` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUtilizator`, `login`, `password`, `role`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'cristi', '0cc175b9c0f1b6a831c399e269772661', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_delivery`
--
ALTER TABLE `history_delivery`
  ADD PRIMARY KEY (`idhistory_delivery`);

--
-- Indexes for table `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`idProdus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUtilizator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_delivery`
--
ALTER TABLE `history_delivery`
  MODIFY `idhistory_delivery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produs`
--
ALTER TABLE `produs`
  MODIFY `idProdus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUtilizator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
