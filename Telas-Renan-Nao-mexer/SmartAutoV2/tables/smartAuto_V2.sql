-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Nov-2019 às 17:47
-- Versão do servidor: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 5.6.39-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartAuto_V2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulaCadastrada`
--

CREATE TABLE `aulaCadastrada` (
  `idAula` int(20) NOT NULL,
  `dia` varchar(512) NOT NULL,
  `idHorario` int(20) NOT NULL,
  `idInstrutor` int(20) NOT NULL,
  `idCarro` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT '1' COMMENT '1 = livre / 2 = reservada / 0 = Cancelada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aulaCadastrada`
--

INSERT INTO `aulaCadastrada` (`idAula`, `dia`, `idHorario`, `idInstrutor`, `idCarro`, `status`) VALUES
(1, '11/22/2019', 4, 5, 2, 1),
(2, '11/25/2019', 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idAluno` int(255) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `cpf` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `tipoUsuario` int(11) NOT NULL COMMENT '1 = Aluno / 2 = Instrutor',
  `cnh` varchar(512) DEFAULT NULL,
  `idCarro` int(11) DEFAULT NULL,
  `idPeriodo` int(11) DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idAluno`, `nome`, `cpf`, `email`, `senha`, `tipoUsuario`, `cnh`, `idCarro`, `idPeriodo`, `status`) VALUES
(1, 'Teste de Login', '123.456.789-00', 'teste@usuarioNovo.com', '1234', 1, NULL, NULL, NULL, 1),
(2, 'UsuÃ¡rio topperson', '230.930.748-35', 'suuario@teste.com', '1234', 1, NULL, NULL, NULL, 1),
(3, 'Teste instrutor', '230.930.748-35', 'root@root.com', '1234', 2, '232645454', 3, 2, 1),
(4, 'Renan mais um teste', '23456456131', 'renan.nobrega89@gmail.com', '1234', 1, NULL, NULL, NULL, 1),
(5, 'peneses', '91276312983', 'renan.nobrega89@gmail.com', '123456', 2, '2391846723798', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `idCarro` int(20) NOT NULL,
  `placa` varchar(512) NOT NULL,
  `marca` varchar(512) NOT NULL,
  `modelo` varchar(512) NOT NULL,
  `disponivel` int(10) NOT NULL DEFAULT '1' COMMENT '1 = Disponível / 2 = Em uso',
  `status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`idCarro`, `placa`, `marca`, `modelo`, `disponivel`, `status`) VALUES
(1, 'IEE8969', 'volkswagen', 'GOL', 1, 1),
(2, 'ASS9082', 'volkswagen', 'Fusca', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aulaCadastrada`
--
ALTER TABLE `aulaCadastrada`
  ADD PRIMARY KEY (`idAula`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idAluno`);

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`idCarro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aulaCadastrada`
--
ALTER TABLE `aulaCadastrada`
  MODIFY `idAula` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idAluno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `idCarro` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
