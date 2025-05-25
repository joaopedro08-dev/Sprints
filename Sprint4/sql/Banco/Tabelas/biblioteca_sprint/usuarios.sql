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
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(255) DEFAULT NULL,
  `dt_de_nasc` date DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `dt_de_nasc`, `cpf`, `email`, `sexo`, `telefone`, `estado`, `endereco`, `cep`, `cargo`, `senha`) VALUES
('Ana Clara Souza', '1995-03-25', '123.456.789-00', 'anaclarasouza@gmail.com', 'feminino', '11987654321', 'sao paulo', 'AV. PAULISTA, 100', '01310-000', 'professor(a)', 'senha123'),
('Mariana Ramos', '1988-12-01', '147.258.369-00', 'marianaramos@hotmail.com', 'feminino', '31987654321', 'rio de janeiro', 'PRAIA DE COPACABANA, 200', '22070-001', 'reitor(a)', 'mariana123'),
('Maria das Dores', '1985-05-19', '156.987.589-98', 'maria.dores@gmail.com', 'feminino', '11995743254', 'saopaulo', 'Rua 09 de Julho, Jardim Europa, 211', '1990023', 'professor(a)', '123-123'),
('Gustavo Henrique', '1990-05-22', '258.369.147-00', 'gustavohenrique@gmail.com', 'masculino', '31987654322', 'espirito santo', 'RUA DAS FLORES, 75', '29060-000', 'diretor(a)', 'gustavo@senha'),
('Carla Fernandes', '1993-08-30', '369.258.147-00', 'carlaf@gmail.com', 'feminino', '11976543210', 'bahia', 'AV. SETE DE SETEMBRO, 150', '40000-000', 'procurador_institucional', 'carlasenha'),
('ana julia', '2007-12-01', '47313040830', 'ana@gmail', 'feminino', '14997847421', 'saopaulo', 'santos dumont', '11111', 'bibliotecario', '111$111'),
('Renan Cadamuro Carrara', '2007-09-19', '478.140.178-31', 'carrara.renanc@gmail.com', 'masculino', '(14) 99857-1442', 'saopaulo', 'Felicidade nÂº 12', '12121212', 'bibliotecario', '123@abc'),
('João Pedro Dala Dea Mello', '2000-01-09', '547.420.248-26', 'joaopedrodaladeamello@gmail.com', 'masculino', '5514996815396', 'saopaulo', 'Rua Xv De Novembro 439 Centro ', '19940000', 'procurador_institucional', 'senha123'),
('Luan Roberto', '1992-07-14', '987.654.321-00', 'luanroberto@gmail.com', 'masculino', '11912345678', 'minas gerais', 'RUA DOS ARTISTAS, 45', '30170-000', 'coordenador(a)', 'senhaluan');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `cpf` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
