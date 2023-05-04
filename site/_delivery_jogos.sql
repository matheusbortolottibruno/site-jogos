-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Abr-2023 às 00:38
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: ` delivery_jogos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `data_troca` date NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `titulo`, `foto`, `video`) VALUES
(1, 'Red Read Redepmption 2', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn1.epicgames.com%2Fb30b6d1b4dfd4dcc93b5490be5e094e5%2Foffer%2FRDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg&tbnid=d8WLqcpqIdYW0M&vet=12ahUKEwjmlomQjMv-AhXOA7kGHZGgBAYQMygBegUIARDHAQ..i&imgrefurl=https%3A%2F%2Fstore.epicgames.com%2Fpt-BR%2Fp%2Fred-dead-redemption-2&docid=uuUc1ehTTgABYM&w=2560&h=1440&q=Red%20Dead%20Redemption%202&ved=2ahUKEwjmlomQjMv-AhXOA7kGHZGgBAYQMygBegUIARDHAQ', 'https://www.youtube.com/watch?v=BoohYJlRXa8'),
(2, 'god of war ragnarok', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.folhape.com.br%2Fupload%2Fdn_arquivo%2F2022%2F09%2Fgod-of-war-ragnarok.jpg&tbnid=GA23GBrxJqmSTM&vet=12ahUKEwiY18Tbi8v-AhWkB7kGHTBNCdEQMygEegUIARDwAQ..i&imgrefurl=https%3A%2F%2Fwww.folhape.com.br%2Fcolunistas%2Ftecnologia-e-games%2Fgod-of-war-ragnarok-veja-as-novas-mecanicas-de-combate-reveladas-nesta-sexta-2%2F32854%2F&docid=Cr2ECQinufE-4M&w=1440&h=810&q=god%20of%20war%20ragnarok&ved=2ahUKEwiY18Tbi8v-AhWkB7kGHTBNCdEQMygEegUIARDwAQ', 'https://www.youtube.com/watch?v=1ArgTD5iPVU'),
(3, 'Red Read Redepmption 2', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn1.epicgames.com%2Fb30b6d1b4dfd4dcc93b5490be5e094e5%2Foffer%2FRDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg&tbnid=d8WLqcpqIdYW0M&vet=12ahUKEwjmlomQjMv-AhXOA7kGHZGgBAYQMygBegUIARDHAQ..i&imgrefurl=https%3A%2F%2Fstore.epicgames.com%2Fpt-BR%2Fp%2Fred-dead-redemption-2&docid=uuUc1ehTTgABYM&w=2560&h=1440&q=Red%20Dead%20Redemption%202&ved=2ahUKEwjmlomQjMv-AhXOA7kGHZGgBAYQMygBegUIARDHAQ', 'https://www.youtube.com/watch?v=BoohYJlRXa8'),
(4, 'god of war ragnarok', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.folhape.com.br%2Fupload%2Fdn_arquivo%2F2022%2F09%2Fgod-of-war-ragnarok.jpg&tbnid=GA23GBrxJqmSTM&vet=12ahUKEwiY18Tbi8v-AhWkB7kGHTBNCdEQMygEegUIARDwAQ..i&imgrefurl=https%3A%2F%2Fwww.folhape.com.br%2Fcolunistas%2Ftecnologia-e-games%2Fgod-of-war-ragnarok-veja-as-novas-mecanicas-de-combate-reveladas-nesta-sexta-2%2F32854%2F&docid=Cr2ECQinufE-4M&w=1440&h=810&q=god%20of%20war%20ragnarok&ved=2ahUKEwiY18Tbi8v-AhWkB7kGHTBNCdEQMygEegUIARDwAQ', 'https://www.youtube.com/watch?v=1ArgTD5iPVU');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
