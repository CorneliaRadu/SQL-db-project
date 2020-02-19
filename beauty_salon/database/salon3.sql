-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 07:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `parola`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `creaza_cont`
--

CREATE TABLE `creaza_cont` (
  `id` int(11) NOT NULL,
  `nume` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `mobil` bigint(20) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `gen` enum('masculin','feminin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `creaza_cont` (`id`, `nume`, `email`, `parola`, `mobil`, `adresa`, `gen`) VALUES
(4, 'ana maria', 'am@gmail.com', '123', 7275308190, 'iasi,romania', 'feminin'),
(7, 'vlad bogdan', 'vl@gmail.com', '8190', 9120140055, 'bucuresti,romania', 'masculin'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bucuresti,romania', 'masculin'),
(9, 'Cristina', 'cristina@gmail.com', '1234`', 7275540965, 'baia mare,romania', 'femin'),
(10, 'Cristian', 'cri@gmail.com', '123', 7275308190, 'galati,romania', 'masculin'),
(11, 'murun', 'mr8090@gmail.com', '8190', 71727534567, 'craiova,romania', 'feminin'),
(12, 'ionut', 'ion@gmail.com', '1234', 9015501897, 'timisoara,romania', 'masculin');

-- --------------------------------------------------------

--
-- Table structure for table `details_slider`
--

CREATE TABLE `details_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobil` bigint(20) NOT NULL,
  `mesaj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nume`, `email`, `mobil`, `mesaj`) VALUES
(1, 'Ana', 'am@gmail.com', 7275308190, 'Frumos');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `produse` (
  `produs_id` int(11) NOT NULL,
  `durata` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `pret` bigint(20) NOT NULL,
  `detalii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `produse` (`produs_id`, `durata`, `nume`, `pret`, `detalii`) VALUES
(28, 60, 'Spa', 300, ' Destindere pentru muschi si minte, relaxare totala, rasfat al trupului si confort al spiritului – SPA-ul este toate aceste lucruri la un loc'),
(30, 90, 'Coafor', 540, 'Parul este un element cheie al feminitatii.Salonul va pune la dispozitie o gama larga de produse,incepand cu tunsori de varfuri sau de forma pana la extensii sau permanente'),
(31, 30, 'Masaj', 140, 'Masajul de relaxare vine la pachet cu o mulțime de plusuri pentru organism. Chiar dacă este vorba de o stimulare mai ușoară a mușchilor și pielii față de alte tipuri de masaj, efectele pozitive sunt numeroase'),
(32, 75, 'Make-up', 250, 'Machiajul este pur si simplu o extensie a personalitatii tale, iar culorile, hainele si machiajul, toate exprima si spun cate ceva despre tine'),
(33, 45, 'Epilare', 150, 'Pielea ta se va simti tanara din nou.Rafata-te cu peste cele 5 metode de epilare destinate sa ajute orice tip de piele si personal calificat care va avea grija sa va recomande necesarul dumneavoastra'),
(34, 55, 'Tratament facial', 200, 'Un ten mai curat care va beneficia de un efect antiinflamator in urma extractiei,fara inrosire si fara leziuni,care va lasa pielea hidratata si cu mai multa elasticitate');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking_details`
--

CREATE TABLE `detalii_programare` (
  `id` int(11) NOT NULL,
  `nume` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobil` bigint(20) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `tara` varchar(100) NOT NULL,
  `nume_produs` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `ora` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `room_booking_details`
--

INSERT INTO `detalii_programare` (`id`, `nume`, `email`, `mobil`, `adresa`, `tara`, `data`, `ora`) VALUES
(5, 'Ana', 'am@gmail.com', 7398713060, 'bucuresti,romania', 'SPA', '2019-12-05', '12:00'),
(6, 'Maria', 'om@gmail.com', 7890809, 'iasi,romania', 'Masaj',  '2019-05-08', '08:00'),
(7, 'Ionut', 'ion@gmail.com', 727550965, 'Craiova,romania',  'Tratament facial', '2019-12-06', '08:00'),
(8, 'Cristina', 'crsitina@gmail.com', 7275308190, 'timisoara,romania', 'Epilat', '2019-12-06', '08:00'),
(12, 'Cristian', 'cri@gmail.com', 75845854555, 'bucuresti,romania', 'Masaj', '2019-05-22', '22:57');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`) VALUES
(3, 'img3.jpg', ''),
(6, 'img2.jpg', ''),
(8, 'img1.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `creaza_cont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_slider`
--
ALTER TABLE `details_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`produs_id`);

--
-- Indexes for table `room_booking_details`
--
ALTER TABLE `detalii_programare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `creaza_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `details_slider`
--
ALTER TABLE `details_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `produse`
  MODIFY `produs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `room_booking_details`
--
ALTER TABLE `detalii_programare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;