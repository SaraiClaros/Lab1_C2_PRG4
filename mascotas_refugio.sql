-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mascotas_refugio`
--

-- --------------------------------------------------------

--
-- Table structure for table `mascotas_adp`
--

CREATE TABLE `mascotas_adp` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Estadia` int(11) NOT NULL,
  `Especie` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Raza` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mascotas_adp`
--

INSERT INTO `mascotas_adp` (`ID`, `Nombre`, `Edad`, `Estadia`, `Especie`, `Color`, `Raza`) VALUES
(1, 'peluche ', 3, 0, 'perro ', 'cafe ', 'pitbul '),
(2, 'apolo', 6, 0, 'gato', 'amarillo', 'angora'),
(3, 'apolo', 6, 0, 'gato', 'amarillo', 'angora'),
(4, 'apolo', 6, 0, 'gato', 'amarillo', 'angora'),
(5, 'apolo', 6, 0, 'perro ', 'amarillo', 'angora'),
(6, 'apolo', 6, 0, 'perro ', 'amarillo', 'angora'),
(7, 'apolo', 6, 0, 'perro ', 'amarillo', 'angora'),
(8, 'apolo', 6, 0, 'perro ', 'amarillo', 'angora'),
(9, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(10, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(11, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(12, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(13, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(14, 'pancho', 6, 0, 'conejo', 'blanco', 'ninguna'),
(15, 'pancho', 6, 4, 'conejo', 'blanco', 'ninguna'),
(16, 'chanel', 6, 4, 'perro', 'gris', 'ninguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mascotas_adp`
--
ALTER TABLE `mascotas_adp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mascotas_adp`
--
ALTER TABLE `mascotas_adp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
