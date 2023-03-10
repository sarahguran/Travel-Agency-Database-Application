-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 05:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `autocar`
--

CREATE TABLE `autocar` (
  `Nr_inmatriculare` varchar(7) NOT NULL,
  `Sofer` int(11) DEFAULT NULL,
  `Locuri` int(11) NOT NULL,
  `Km` float NOT NULL,
  `Consum` float NOT NULL,
  `An_Fabricatie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autocar`
--

INSERT INTO `autocar` (`Nr_inmatriculare`, `Sofer`, `Locuri`, `Km`, `Consum`, `An_Fabricatie`) VALUES
('B234RTT', 2, 20, 33600, 8, 2020),
('BZ45INT', 7, 44, 233987, 7.8, 2012),
('MH23WSG', 5, 55, 345654, 8.4, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `cazare`
--

CREATE TABLE `cazare` (
  `ID_Cazare` int(11) NOT NULL,
  `ID_Excursie` int(11) DEFAULT NULL,
  `ID_Hotel` int(11) DEFAULT NULL,
  `Durata` int(11) NOT NULL,
  `nr_cam_rez` int(11) NOT NULL,
  `checkin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cazare`
--

INSERT INTO `cazare` (`ID_Cazare`, `ID_Excursie`, `ID_Hotel`, `Durata`, `nr_cam_rez`, `checkin`) VALUES
(1, 1, 1, 2, 40, '2023-01-17'),
(2, 1, 4, 3, 40, '2023-01-19'),
(3, 1, 5, 2, 40, '2023-01-22'),
(4, 2, 7, 2, 20, '2023-02-01'),
(5, 2, 9, 3, 20, '2023-01-03'),
(6, 2, 5, 2, 35, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `excursie`
--

CREATE TABLE `excursie` (
  `ID_Excursie` int(11) NOT NULL,
  `Data_inceput` date DEFAULT NULL,
  `Data_sfarsit` date DEFAULT NULL,
  `Nr_participanti` int(11) DEFAULT NULL,
  `Ghid` int(11) DEFAULT NULL,
  `Nr_inmatriculare_autocar` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excursie`
--

INSERT INTO `excursie` (`ID_Excursie`, `Data_inceput`, `Data_sfarsit`, `Nr_participanti`, `Ghid`, `Nr_inmatriculare_autocar`) VALUES
(1, '2023-01-17', '2023-01-25', 40, 3, 'BZ45INT'),
(2, '2023-02-01', '2023-02-09', 20, 8, 'B234RTT');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID_Hotel` int(11) NOT NULL,
  `Nume_Hotel` varchar(30) NOT NULL,
  `Localitate` varchar(30) NOT NULL,
  `Judet` varchar(30) NOT NULL,
  `Mic_dejun` varchar(3) DEFAULT NULL,
  `Pret_Noapte_Camera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID_Hotel`, `Nume_Hotel`, `Localitate`, `Judet`, `Mic_dejun`, `Pret_Noapte_Camera`) VALUES
(1, 'Marriot', 'Bucuresti', 'Bucuresti', 'DA', 800),
(2, 'ibis', 'Sibiu', 'Sibiu', 'NU', 450),
(4, 'Sinaia', 'Sinaia', 'Prahova', 'DA', 500),
(5, 'Ramada', 'Brasov', 'Braov', 'NU', 550),
(6, 'Anna Hotels', 'Poiana Brasov', 'Brasov', 'DA', 1000),
(7, 'NH', 'Timisoara', 'Timis', 'NU', 450),
(9, 'Grand Hotel Italia', 'Cluj Napoca', 'Cluj', 'DA', 875);

-- --------------------------------------------------------

--
-- Table structure for table `obiective_turistice`
--

CREATE TABLE `obiective_turistice` (
  `ID_Obiectiv` int(11) NOT NULL,
  `Denumire` varchar(30) NOT NULL,
  `Localitate` varchar(30) NOT NULL,
  `Judet` varchar(30) NOT NULL,
  `Pret` int(11) NOT NULL,
  `Durata_vizitare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obiective_turistice`
--

INSERT INTO `obiective_turistice` (`ID_Obiectiv`, `Denumire`, `Localitate`, `Judet`, `Pret`, `Durata_vizitare`) VALUES
(3, 'Peles', 'Sinaia', 'Prahova', 25, NULL),
(4, 'Bran', 'Bran', 'Brasov', 25, NULL),
(5, 'Chipul lui Decebal', 'Dubova', 'Caras Severin', 0, 20),
(6, 'Babele si sfinxul', 'Busteni', 'Prahova', 0, 3),
(7, 'Salina Turda', 'Turda', 'Cluj', 30, 5),
(8, 'Castelul de Lut', 'Sibiu', 'Sibiu', 15, 1),
(9, 'Cetatea Deva', 'Deva', 'Hunedoara', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `obiectiv_excursie`
--

CREATE TABLE `obiectiv_excursie` (
  `ID_Obiectiv_Excursie` int(11) NOT NULL,
  `ID_Obiectiv` int(11) NOT NULL,
  `ID_Excursie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obiectiv_excursie`
--

INSERT INTO `obiectiv_excursie` (`ID_Obiectiv_Excursie`, `ID_Obiectiv`, `ID_Excursie`) VALUES
(1, 3, 1),
(2, 6, 1),
(3, 8, 1),
(4, 9, 2),
(5, 5, 2),
(6, 7, 2),
(7, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `persoane`
--

CREATE TABLE `persoane` (
  `ID_Persoana` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Prenume` varchar(50) NOT NULL,
  `CNP` varchar(12) NOT NULL,
  `Data_Nasterii` varchar(12) NOT NULL,
  `Sex` varchar(1) NOT NULL DEFAULT 'F',
  `Nr_telefon` varchar(11) NOT NULL,
  `Adresa` varchar(50) NOT NULL,
  `ID_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persoane`
--

INSERT INTO `persoane` (`ID_Persoana`, `Nume`, `Prenume`, `CNP`, `Data_Nasterii`, `Sex`, `Nr_telefon`, `Adresa`, `ID_user`) VALUES
(1, 'Guran', 'Sarah', '602011416009', '14.01.2002', 'F', '0751960425', 'Splaiul Independentei 313B', 5),
(2, 'Leo', 'District', '12345678', '01.02.2020', 'M', '0765432554', 'Campulung', 4),
(3, 'Gutuleac', 'Vlad', '45654738733', '19.02.2001', 'M', '0765456734', 'Splaiul Independentei 313B', 6),
(4, 'Guran', 'Mirabela', '274111425008', '14.11.1974', 'F', '0746509551', 'Bd Mihai Viteazu', 7),
(5, 'Chirita', 'Medeea', '601110125008', '01.11.2001', 'F', '0765435634', 'Strada Crisan', 8),
(6, 'Trailescu', 'Alexia', '602010725003', '07.01.2002', 'F', '0747107646', 'Strada Crisan nr 56', 9),
(7, 'Bosie', 'Ionut', '501120134006', '01.12.2001', 'M', '0768543221', 'Lipia, Buzau, Romania', 10),
(8, 'Radu', 'Denisa', '601031056008', '10.03.2001', 'F', '0767543657', 'Fagaras', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES
(4, 'saraaaahguuran', 'sarrah.guran@yahoo.com', '', '56427d6b28b4b1051b04858b1ef50013'),
(5, 'sarahguran123', 'sarrahh.guran@yahoo.com', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'vladg', 'vlad@yahoo.com', '', '1c1d5315404c08f542d1abf135b40507'),
(7, 'miraag', 'mira@yahoo.com', '', '5b71afab36a1330707b85dc1db0da422'),
(8, 'medee', 'medeea@yahoo.com', '', 'fede178781535d16d47755e103417f74'),
(9, 'Alexiaa', 'alexia@yahoo.com', '', '42dbac47a4a74633195ad10e807f80d0'),
(10, 'ionut', 'ionut@yahoo.com', '', 'd2da6a485eb3e4cf273271f381da3d45'),
(11, 'Denisaa', 'denisa@yahoo.com', '', 'e03d2999fde9458548e1f7b6b746e873'),
(12, 'Dumi', 'dumi@yahoo.com', '', 'ca54ec42cfad3b9197950c03cb480b5e'),
(13, 'Neagoe', 'neagoe@basarab.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autocar`
--
ALTER TABLE `autocar`
  ADD PRIMARY KEY (`Nr_inmatriculare`),
  ADD KEY `Sofer` (`Sofer`);

--
-- Indexes for table `cazare`
--
ALTER TABLE `cazare`
  ADD PRIMARY KEY (`ID_Cazare`),
  ADD KEY `ID_Excursie` (`ID_Excursie`),
  ADD KEY `ID_Hotel` (`ID_Hotel`);

--
-- Indexes for table `excursie`
--
ALTER TABLE `excursie`
  ADD PRIMARY KEY (`ID_Excursie`),
  ADD KEY `Ghid` (`Ghid`),
  ADD KEY `Nr_inmatriculare_autocar` (`Nr_inmatriculare_autocar`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID_Hotel`);

--
-- Indexes for table `obiective_turistice`
--
ALTER TABLE `obiective_turistice`
  ADD PRIMARY KEY (`ID_Obiectiv`);

--
-- Indexes for table `obiectiv_excursie`
--
ALTER TABLE `obiectiv_excursie`
  ADD PRIMARY KEY (`ID_Obiectiv_Excursie`),
  ADD KEY `ID_Obiectiv` (`ID_Obiectiv`),
  ADD KEY `ID_Excursie` (`ID_Excursie`);

--
-- Indexes for table `persoane`
--
ALTER TABLE `persoane`
  ADD PRIMARY KEY (`ID_Persoana`),
  ADD UNIQUE KEY `CNP` (`CNP`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cazare`
--
ALTER TABLE `cazare`
  MODIFY `ID_Cazare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `excursie`
--
ALTER TABLE `excursie`
  MODIFY `ID_Excursie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID_Hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `obiective_turistice`
--
ALTER TABLE `obiective_turistice`
  MODIFY `ID_Obiectiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `persoane`
--
ALTER TABLE `persoane`
  MODIFY `ID_Persoana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autocar`
--
ALTER TABLE `autocar`
  ADD CONSTRAINT `autocar_ibfk_1` FOREIGN KEY (`Sofer`) REFERENCES `persoane` (`ID_Persoana`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `cazare`
--
ALTER TABLE `cazare`
  ADD CONSTRAINT `cazare_ibfk_1` FOREIGN KEY (`ID_Hotel`) REFERENCES `hotel` (`ID_Hotel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cazare_ibfk_2` FOREIGN KEY (`ID_Excursie`) REFERENCES `excursie` (`ID_Excursie`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `excursie`
--
ALTER TABLE `excursie`
  ADD CONSTRAINT `excursie_ibfk_2` FOREIGN KEY (`Ghid`) REFERENCES `persoane` (`ID_Persoana`),
  ADD CONSTRAINT `excursie_ibfk_3` FOREIGN KEY (`Nr_inmatriculare_autocar`) REFERENCES `autocar` (`Nr_inmatriculare`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `obiectiv_excursie`
--
ALTER TABLE `obiectiv_excursie`
  ADD CONSTRAINT `obiectiv_excursie_ibfk_2` FOREIGN KEY (`ID_Obiectiv`) REFERENCES `obiective_turistice` (`ID_Obiectiv`),
  ADD CONSTRAINT `obiectiv_excursie_ibfk_3` FOREIGN KEY (`ID_Excursie`) REFERENCES `excursie` (`ID_Excursie`);

--
-- Constraints for table `persoane`
--
ALTER TABLE `persoane`
  ADD CONSTRAINT `persoane_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
