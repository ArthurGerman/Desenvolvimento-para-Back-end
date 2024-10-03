-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2024 às 21:28
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
  `id_leitor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`cod_emprestimo`, `data_emprestimo`, `data_devolucao`, `cod_livro`, `id_leitor`) VALUES
(1, '2023-05-05', '2023-07-15', 4, 2),
(2, '2021-08-07', '2022-08-07', 6, 1),
(3, '2023-01-25', '2023-03-15', 3, 4),
(4, '2023-05-05', '2023-07-15', 3, 2),
(5, '2019-09-05', '2020-02-15', 4, 5),
(6, '2022-03-09', '2022-06-17', 5, 4),
(7, '2022-09-15', '2022-12-31', 6, 3),
(8, '2024-05-27', '2024-07-19', 1, 5),
(9, '2023-05-05', '2023-07-15', 1, 3),
(10, '2022-08-02', '2023-08-02', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE `leitor` (
  `id_leitor` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`id_leitor`, `nome`, `sexo`, `telefone`, `email`, `CPF`, `rua`, `cidade`) VALUES
(1, 'Daniel da Silva', 'M', '(81)1234-5678', 'example@hotmail.com', '11122233344', 'Rua do Cajá', 'Igarassu'),
(2, 'Lucas do Rio Verde', 'M', '(81)99876-5432', 'example@hotmail.com', '22233334445', 'Rua da Aurora', 'Pindamonhagaba'),
(3, 'Arthur Germano da Cunha Silva', 'M', '(81)98859-7145', 'example@hotmail.com', '33344455566', 'Rua das flores', 'Jacarepaguá'),
(4, 'José Luiz Germano da Cunha', 'M', '(81)8838-1318', 'example@hotmail.com', '44455566677', 'Rua do Governador', 'Vasco da Gama'),
(5, 'Josiane Ribeiro da Silva', 'F', '(81)5889-7924', 'example@hotmail.com', '55566677788', 'Rua da Vovó', 'Abreu e Lima');

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
(5, 'A Revolução dos Bichos', 'George Orwell', 'Companhia das Letras', 1945, 'Sátira'),
(6, 'Até onde você vai ?', 'John C. Maxwell', 'Prazer de ler', 2023, 'Motivação');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`cod_emprestimo`),
  ADD KEY `cod_livro` (`cod_livro`),
  ADD KEY `id_leitor` (`id_leitor`);

--
-- Índices para tabela `leitor`
--
ALTER TABLE `leitor`
  ADD PRIMARY KEY (`id_leitor`);

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
  MODIFY `cod_emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `leitor`
--
ALTER TABLE `leitor`
  MODIFY `id_leitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`cod_livro`) REFERENCES `livro` (`cod_livro`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`id_leitor`) REFERENCES `leitor` (`id_leitor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
