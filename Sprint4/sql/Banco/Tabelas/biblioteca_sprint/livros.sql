-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2024 às 04:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_sprint`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `isbn` varchar(20) NOT NULL,
  `numero_copias` int(11) DEFAULT NULL,
  `ano_publicacao` varchar(40) DEFAULT NULL,
  `categoria` varchar(60) DEFAULT NULL,
  `idioma` varchar(30) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `editora` varchar(255) DEFAULT NULL,
  `numero_edicao` int(11) DEFAULT NULL,
  `numero_volume` int(11) DEFAULT NULL,
  `numero_paginas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`isbn`, `numero_copias`, `ano_publicacao`, `categoria`, `idioma`, `titulo`, `editora`, `numero_edicao`, `numero_volume`, `numero_paginas`) VALUES
('978-0-06-112008-4', 30, '1960', 'Ficção', 'Inglês', 'O Sol é Para Todos', 'HarperCollins', 1, 1, 336),
('978-0-14-044913-6', 15, '2010', 'Clássico', 'Português', 'Crime e Castigo', 'Penguin', 2, 1, 576),
('978-0-345-39180-3', 18, '1996', 'Fantasia', 'Inglês', 'A Guerra dos Tronos', 'Bantam Books', 1, 1, 694),
('978-0-385-50420-8', 12, '2005', 'Suspense', 'Inglês', 'O Código Da Vinci', 'Doubleday', 1, 1, 689),
('978-0-385-72227-4', 22, '2015', 'Ficção', 'Inglês', 'A Garota no Trem', 'Riverhead Books', 1, 1, 336),
('978-0-452-28423-4', 18, '1967', 'Distopia', 'Inglês', 'O Admirável Mundo Novo', 'Harper Perennial', 1, 1, 268),
('978-0-553-21311-7', 10, '1954', 'Fantasia', 'Inglês', 'O Senhor dos Anéis: A Sociedade do Anel', 'Houghton Mifflin', 1, 1, 423),
('978-0-7432-7355-8', 8, '1997', 'Biografia', 'Inglês', 'Benjamin Franklin: An American Life', 'Simon & Schuster', 1, 1, 608),
('978-0-7432-7356-5', 25, '2003', 'Biografia', 'Português', 'Steve Jobs', 'Simon & Schuster', 1, 1, 656),
('978-1-5011-8747-7', 14, '2019', 'Ficção', 'Inglês', 'Onde Cantam os Pássaros', 'Scribner', 1, 1, 368),
('978-3-16-148410-0', 20, '2020', 'Ficção Científica', 'Português', 'Eu, Robô', 'Companhia das Letras', 3, 1, 350),
('978-84-376-0494-7', 22, '1945', 'Distopia', 'Espanhol', 'Rebelión en la Granja', 'Seix Barral', 1, 1, 152),
('978-85-209-3795-6', 14, '2020', 'Negócios', 'Português', 'Os Segredos da Mente Milionária', 'Sextante', 1, 1, 176),
('978-85-220-0967-6', 25, '2018', 'Autoajuda', 'Português', 'O Poder do Hábito', 'Objetiva', 1, 1, 408),
('978-85-250-3056-1', 10, '2014', 'Filosofia', 'Português', 'O Mundo de Sofia', 'Companhia das Letras', 1, 1, 560),
('978-85-254-2164-3', 8, '1988', 'Autoajuda', 'Português', 'O Alquimista', 'HarperCollins', 2, 1, 208),
('978-85-359-0277-3', 12, '2000', 'Romance', 'Português', 'Cem Anos de Solidão', 'Record', 1, 1, 432),
('978-85-359-0668-1', 28, '2003', 'História', 'Português', 'Sapiens: Uma Breve História da Humanidade', 'L&PM', 1, 1, 464),
('978-85-510-0209-2', 35, '2015', 'Tecnologia', 'Português', 'Homo Deus: Uma Breve História do Amanhã', 'Companhia das Letras', 1, 1, 448),
('978-85-63219-34-1', 20, '2011', 'Ficção Científica', 'Português', 'Neuromancer', 'Aleph', 1, 1, 384),
('TESTE', 13, '2024', 'TESTE', 'TESTE', 'TESTE', 'TESTE', 1, 1, 20);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
