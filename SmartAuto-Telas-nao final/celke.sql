-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Out-2019 às 03:40
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `professor` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Teste de evento', 'Vagner', '2019-05-21 15:00:00', '2019-05-21 16:00:00'),
(2, 'Tutorial FullCalendar editar detalhes do evento', 'Renan', '2019-05-30 15:00:00', '2019-05-30 00:00:00'),
(3, 'Tutorial FullCalendar Visualizar detalhes do evento', 'Lelia', '2019-05-23 15:00:00', '2019-05-23 16:00:00'),
(4, 'Aula 3', 'Daniela', '2019-05-17 17:00:00', '2019-05-17 18:00:00'),
(5, 'Aula 4', 'Fabiano', '2019-05-17 15:00:00', '2019-05-17 16:00:00'),
(6, 'Aula 5', '#FFD700', '2019-05-17 13:00:00', '2019-05-17 14:00:00'),
(7, 'Aula 6', 'Vagner', '2019-05-17 11:00:00', '2019-05-17 12:00:00'),
(8, 'Aula 7', 'Renan', '2019-05-17 09:00:00', '2019-05-17 10:00:00'),
(9, 'Tutorial', 'Vinicius', '2019-09-12 00:00:00', '2019-09-13 00:00:00'),
(10, 'Tutorial 2', 'Vinicius', '2019-09-13 15:10:10', '2019-09-13 17:15:15'),
(11, 'ReuniÃ£o 15', 'Vinicius', '2019-10-09 15:30:00', '2019-10-09 17:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
