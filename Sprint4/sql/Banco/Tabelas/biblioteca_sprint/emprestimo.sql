-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2024 às 04:20
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
-- Estrutura para tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id_emprestimo` int(11) NOT NULL,
  `cpf_cliente` varchar(20) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `cpf_usuario` varchar(20) NOT NULL,
  `num_livros` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id_emprestimo`, `cpf_cliente`, `isbn`, `cpf_usuario`, `num_livros`, `data_emprestimo`, `data_devolucao`) VALUES
(1, '123.456.789-66', '978-3-16-148410-0', '147.258.369-00', 1, '2024-11-04', '2024-12-05'),
(4, '234.567.890-11', '978-0-14-044913-6', '147.258.369-00', 1, '2024-11-04', '2024-12-05'),
(5, '547.420.248-26', '978-85-63219-34-1', '147.258.369-00', 2, '2024-11-04', '2024-12-05'),
(6, '234.567.890-00', '978-0-385-72227-4', '147.258.369-00', 1, '2024-11-04', '2024-12-05'),
(7, '567.890.123-33', '978-0-553-21311-7', '147.258.369-00', 2, '2024-11-04', '2024-12-05'),
(22, '321.654.987-03', '978-0-06-112008-4', '123.456.789-00', 1, '2024-12-06', '2025-01-06'),
(36, '234.567.890-88', '978-1-5011-8747-7', '47313040830', 2, '2024-12-08', '2025-01-08'),
(37, '123.456.789-66', '978-0-06-112008-4', '123.456.789-00', 20, '2024-12-09', '2025-01-09'),
(38, '123.456.789-66', '978-0-06-112008-4', '123.456.789-00', 200, '2024-12-09', '2025-01-09'),
(39, '123.456.789-66', '978-0-06-112008-4', '123.456.789-00', 200, '2024-12-09', '2025-01-09'),
(44, '234.567.890-77', '978-1-5011-8747-7', '478.140.178-31', 1, '2024-12-10', '2025-01-10'),
(45, '321.654.987-03', '978-85-359-0668-1', '478.140.178-31', 2, '2024-12-10', '2025-01-10'),
(46, '345.678.901-11', 'TESTE', '547.420.248-26', 1, '2024-12-11', '2025-01-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id_emprestimo`),
  ADD KEY `cpf_cliente` (`cpf_cliente`),
  ADD KEY `cpf_usuario` (`cpf_usuario`),
  ADD KEY `isbn` (`isbn`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `clientes` (`cpf`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`cpf_usuario`) REFERENCES `usuarios` (`cpf`),
  ADD CONSTRAINT `emprestimo_ibfk_3` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
