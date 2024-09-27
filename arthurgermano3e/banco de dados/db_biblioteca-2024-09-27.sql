-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2024 às 01:29
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
-- Banco de dados: `db_biblioteca`
--
CREATE DATABASE IF NOT EXISTS `db_biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `cod_emprestimo` int(11) NOT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `cod_livro` int(11) DEFAULT NULL,
  `cod_leitor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE `leitor` (
  `CPF` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `RA` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`CPF`, `nome`, `RA`, `sexo`, `telefone`, `serie`, `email`) VALUES
('00011122233', 'Daniel da silva', '0017753', 'M', '(81)91234-5678', '', 'example@hotmail.com'),
('15345612387', 'Lucas do rio verde', '0017753', 'M', '(81)91234-5678', '2º ano', 'example@hotmail.com'),
('15377222474', 'Arthur Germano', '00011122', 'M', '(81)98859-7145', '7º ano', 'example@hotmail.com'),
('55566677788', 'José luiz germano da cunha', '12345678', 'M', '(81)98838-1318', '3 ano', 'exemplo@hotmail.com'),
('99988877766', 'João Silva', '', 'M', '', '2º ano', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `editora` varchar(255) DEFAULT NULL,
  `ano_publicacao` int(11) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `titulo`, `autor`, `editora`, `ano_publicacao`, `genero`) VALUES
(1, 'O Senhor dos Anéis: A Sociedade do Anel', 'J.R.R Tolkien', 'HarperCollins', 1954, 'Fantasia'),
(2, '1984', 'George Orwell', 'Companhia das Letras', 1949, 'Ficção científica'),
(3, 'Dom Casmurro', 'Machado de Assis', 'Principis', 1899, 'Clássico'),
(4, 'O Código Da Vinci', 'Dan Brown', 'Arqueiro', 2003, 'Suspense'),
(5, 'A Revolução dos Bichos', 'George Orwell', 'Companhia das Letras', 1945, 'Sátira');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`cod_emprestimo`),
  ADD KEY `cod_livro` (`cod_livro`),
  ADD KEY `cod_leitor` (`cod_leitor`);

--
-- Índices para tabela `leitor`
--
ALTER TABLE `leitor`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `cod_emprestimo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`cod_livro`) REFERENCES `livro` (`cod_livro`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`cod_leitor`) REFERENCES `leitor` (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
