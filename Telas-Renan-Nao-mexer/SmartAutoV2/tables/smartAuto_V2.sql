-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Nov-2019 às 18:35
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
(3, 'Teste instrutor', '230.930.748-35', 'root@root.com', '1234', 2, '232645454', 3, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idAluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idAluno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
