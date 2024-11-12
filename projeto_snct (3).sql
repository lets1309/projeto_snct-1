-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/11/2024 às 03:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_snct`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(100) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(20) NOT NULL,
  `CPF_adm` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome_adm`, `email_adm`, `senha_adm`, `CPF_adm`) VALUES
(3, 'kleberson veloso', 'kleberson2609@gmail.com', '123456', 123),
(7, 'jorge', 'jorget4deu@gmail.com', '$2y$10$Yw7A73YEkiqLc', 2147483647),
(8, 'Jorge Tadeu', 'jorget4deu@gmail.com', '$2y$10$fwb7kvurW6ai.', 92620);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `ID_reserva` int(20) NOT NULL,
  `matricula` varchar(15) NOT NULL,
  `data_reserva` date NOT NULL,
  `data_termino` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `numero_sala` int(2) NOT NULL,
  `numero_pessoas` int(2) NOT NULL,
  `hora_inicio` time NOT NULL,
  `horario_inicio` time DEFAULT NULL,
  `matricula_integrante_2` varchar(20) DEFAULT NULL,
  `matricula_integrante_3` varchar(20) DEFAULT NULL,
  `matricula_integrante_4` varchar(20) DEFAULT NULL,
  `matricula_integrante_5` varchar(20) DEFAULT NULL,
  `matricula_integrante_6` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`ID_reserva`, `matricula`, `data_reserva`, `data_termino`, `status`, `numero_sala`, `numero_pessoas`, `hora_inicio`, `horario_inicio`, `matricula_integrante_2`, `matricula_integrante_3`, `matricula_integrante_4`, `matricula_integrante_5`, `matricula_integrante_6`) VALUES
(47, 'dev', '2211-02-12', '0000-00-00', '', 1, 3, '00:00:00', '12:00:00', 'aaaaa', 'sasa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sala`
--

CREATE TABLE `sala` (
  `numero_sala` int(2) NOT NULL,
  `capacidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `matricula` varchar(15) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numero` int(5) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `nome_completo`, `CPF`, `endereco`, `bairro`, `numero`, `senha`, `foto_perfil`) VALUES
('dev', 'Jorge Onfroy', '092.620.273-11', 'Rua Y', 'Taboca', 55, '$2y$10$zoESCagH25l1ppGp1PM92uHMko7cQEMuJ4usLieGj2Yr/8EvAMYPW', 'uploads/672fcb56817de_que lapada foi essa.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_reserva`),
  ADD KEY `idx_matricula_sala_data_hora` (`matricula`,`numero_sala`,`data_reserva`,`horario_inicio`);

--
-- Índices de tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`numero_sala`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_reserva` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
