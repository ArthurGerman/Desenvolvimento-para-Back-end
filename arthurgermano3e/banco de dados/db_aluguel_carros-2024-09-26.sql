-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2024 às 02:43
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_aluguel_carros`
--
CREATE DATABASE IF NOT EXISTS `db_aluguel_carros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_aluguel_carros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `placa` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `ano` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`placa`, `nome`, `cor`, `marca`, `ano`) VALUES
('KJZ0D87', 'Fiesta', 'preto', 'Ford', '2005'),
('PCD6C63', 'Montana', 'branca', 'GM', '2018'),
('PGL0C96', 'Grand Siena', 'prata', 'Fiat', '2014'),
('QCY5G25', 'Prisma', 'prata', 'GM', '2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `CPF` varchar(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `idade` varchar(2) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `categoria_hab` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`CPF`, `nome`, `idade`, `sexo`, `categoria_hab`) VALUES
('12345678912', 'Marco', '20', 'm', 'b'),
('22233344455', 'Arthur Germano da Cunha Silva', '25', 'm', 'ab'),
('55566677788', 'Mariana França de Vasconcelos', '80', 'f', 'c'),
('99988877766', 'Felipe Leopardo', '60', 'm', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `ID_emprestimo` int(11) NOT NULL,
  `CPF` varchar(255) DEFAULT NULL,
  `placa` varchar(255) DEFAULT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`ID_emprestimo`, `CPF`, `placa`, `data_emprestimo`, `data_devolucao`) VALUES
(1, '55566677788', 'KJZ0D87', '2020-05-04', '2023-05-06'),
(2, '22233344455', 'PGL0C96', '1990-02-05', '2015-06-08'),
(3, '12345678912', 'PCD6C63', '2025-08-01', '2077-08-02'),
(4, '99988877766', 'QCY5G25', '2006-08-02', '2009-06-01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`placa`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`ID_emprestimo`),
  ADD KEY `CPF` (`CPF`),
  ADD KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `ID_emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `clientes` (`CPF`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`placa`) REFERENCES `carros` (`placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
