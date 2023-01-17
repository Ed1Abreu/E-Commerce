-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 15:19
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `e-commerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(50) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `cpf`, `senha`) VALUES
('Gabriel', 23276623, '123123123'),
('Edvanderson ', 5408282201, '10122002'),
('Ricardo', 21356235512, '1231234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id_produtos` bigint(140) NOT NULL,
  `nome_produto` varchar(160) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` bigint(140) NOT NULL,
  `nome_produto` varchar(160) DEFAULT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `preco`) VALUES
(1, 'Processador AMD Ryzen 7 3800X 3.9GHz 4.5GHz Max Turbo', 2173.19),
(2, 'Processador AMD Ryzen 5 5600X, (4.6GHz Max Turbo)', 1119.99),
(3, 'Processador Intel Core i9-13900KF, 13ª Geração, 5.8GHz', 3999),
(4, 'Processador Intel i5-12400, 2.5GHz (4.4GHz Max Turbo)\r\n', 1319.99),
(5, 'Processador AMD Ryzen 3 3200G, 3.6GHz 4GHz Turbo\r\n', 599.99),
(6, 'Placa de Vídeo RTX 3060 Gaming X MSI NVIDIA GeForce', 2459.99),
(7, 'Placa de Vídeo RTX 3090 Trinity\r\nNVIDIA GeForce, 24GB', 7999.99),
(8, 'RX 6700 XT Speedster QICK\r\nAORUS Radeon, 12GB', 3769.1),
(9, 'Placa de Vídeo Asus Rog Strix GeForce RTX 3080 10GB', 6599),
(10, 'Placa de Vídeo NVIDIA GeForce GTX 1660 Super Gaming', 1399.99),
(11, 'Xbox series S\r\n512GB de armazenamento', 2049.99),
(12, 'Xbox series X,\r\n1TB de armazenamento', 4084.99),
(13, 'Nintendo Switch,\r\n32GB de armazenamento', 1989.99),
(14, 'Console Sony Playstation 4, 1TB de armazenamento', 1934.9),
(15, 'Console Playstation 5 Standard Edition, 825GB, Branco', 4749.9);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cpf` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46487567378;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` bigint(140) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
