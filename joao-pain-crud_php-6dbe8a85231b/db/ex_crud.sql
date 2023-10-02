-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/10/2023 às 04:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ex_crud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `id` int(10) NOT NULL,
  `nome_sobrenome` varchar(100) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `obs` varchar(1000) NOT NULL,
  `wpp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id`, `nome_sobrenome`, `email`, `genero`, `obs`, `wpp`) VALUES
(1, 'João Silva', 'joao.silva@email.com', 'Masc.', 'Olá, sou João Silva, um profissional dedicado em busca de novas oportunidades. Tenho experiência na área de vendas e estou pronto para enfrentar desafios.', '(11) 12345-6789'),
(2, 'João Silva', 'joao.silva@email.com', 'Masc.', 'Olá, sou João Silva, um profissional dedicado em busca de novas oportunidades. Tenho experiência na área de vendas e estou pronto para enfrentar desafios.', '(11) 12345-6789'),
(3, 'Cleverson bueno da silva', 'cleversondido@gmail.com', 'Masc.', '', '(41) 99845-8250'),
(4, 'Carlos Oliveira', 'carlos.oliveira@email.com', 'Masc.', 'Carlos Oliveira, desenvolvedor web, pronto para criar soluções incríveis para seus projetos.', ' (31) 55555-555'),
(6, 'Ana Pereira', 'ana.pereira@email.com', 'Fem.', 'Sou Ana Pereira, uma entusiasta da educação, ansiosa para contribuir com seu projeto de ensino.', '(41) 12345-5432'),
(7, 'João Victor Pain da Silva', 'joao.pain679@gmail.com', 'Masc.', 'kjhlkjhkjhçkljhój', '(41) 99783-9119');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
