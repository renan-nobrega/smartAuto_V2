-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Nov-2019 às 17:56
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
-- Estrutura da tabela `cadastro_aluno`
--

CREATE TABLE `cadastro_aluno` (
  `idAluno` int(255) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `cpf` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_aluno`
--

INSERT INTO `cadastro_aluno` (`idAluno`, `nome`, `cpf`, `email`, `senha`, `status`) VALUES
(1, 'Teste de Login', '123.456.789-00', 'teste@usuarioNovo.com', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_instrutor`
--

CREATE TABLE `cadastro_instrutor` (
  `idInstrutor` int(50) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `cpf` varchar(512) NOT NULL,
  `cnh` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_aluno`
--
ALTER TABLE `cadastro_aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Indexes for table `cadastro_instrutor`
--
ALTER TABLE `cadastro_instrutor`
  ADD PRIMARY KEY (`idInstrutor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_aluno`
--
ALTER TABLE `cadastro_aluno`
  MODIFY `idAluno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cadastro_instrutor`
--
ALTER TABLE `cadastro_instrutor`
  MODIFY `idInstrutor` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
