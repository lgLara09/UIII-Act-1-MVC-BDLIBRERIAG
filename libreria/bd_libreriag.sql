-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 08:58 PM
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
-- Database: `bd_libreriag`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_libro`
--

CREATE TABLE `tbl_libro` (
  `id` int(11) NOT NULL,
  `id_libro` varchar(50) NOT NULL,
  `nombre_libro` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `autor_libro` varchar(50) NOT NULL,
  `codigo_fabrica` int(20) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `fecha_venta_renta` date NOT NULL,
  `precio` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_libro`
--

INSERT INTO `tbl_libro` (`id`, `id_libro`, `nombre_libro`, `genero`, `autor_libro`, `codigo_fabrica`, `editorial`, `fecha_venta_renta`, `precio`) VALUES
(3, '2', 'Damian', 'Romance', 'Alex', 355342, 'Editorial azul', '2023-11-14', 300.00),
(27, '3', 'Orgullo y prejuicio', 'Romance', 'Jane Austen', 244, 'editorial azul', '2023-11-30', 350.00),
(35, '4', 'Mujercitas', 'Novela', 'Louisa May Alcott', 32342, 'Editorial alba', '2023-11-17', 350.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_libro`
--
ALTER TABLE `tbl_libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_libro`
--
ALTER TABLE `tbl_libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
