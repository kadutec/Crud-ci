-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/03/2024 às 20:08
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
-- Banco de dados: `oficina_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `manutencao_detalhes`
--

CREATE TABLE `manutencao_detalhes` (
  `id_detalhes` int(11) NOT NULL,
  `id_manutencao` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `preco_servico` decimal(10,2) DEFAULT NULL,
  `id_peca` int(11) DEFAULT NULL,
  `preco_peca` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `manutencao_detalhes`
--

INSERT INTO `manutencao_detalhes` (`id_detalhes`, `id_manutencao`, `id_servico`, `preco_servico`, `id_peca`, `preco_peca`) VALUES
(144, 152, 12, 85.00, 12, 40.00),
(145, 152, 6, 150.00, 6, 120.00),
(146, 152, 8, 70.00, 8, 180.00),
(147, 152, 11, 40.00, 11, 130.00),
(148, 152, 4, 80.00, 4, 30.00),
(149, 152, 7, 90.00, 7, 200.00),
(150, 152, 5, 60.00, 5, 20.00),
(151, 152, 13, 30.00, 13, 25.00),
(153, 154, 1, 50.00, 1, 150.00),
(154, 155, 13, 30.00, 13, 25.00),
(155, 155, 7, 90.00, 7, 200.00),
(156, 155, 8, 70.00, 8, 180.00),
(157, 155, 15, 200.00, NULL, NULL),
(158, 156, 15, 200.00, NULL, NULL),
(159, 156, 7, 90.00, 7, 200.00),
(160, 156, 11, 40.00, 11, 130.00),
(161, 156, 13, 30.00, 13, 25.00),
(162, 157, 13, 30.00, 13, 25.00),
(163, 157, 11, 40.00, 11, 130.00),
(164, 157, 4, 80.00, 4, 30.00),
(165, 157, 14, 130.00, 14, 35.00),
(166, 157, 2, 100.00, 2, 35.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `manutencoes`
--

CREATE TABLE `manutencoes` (
  `id_manutencao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_peca` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `manutencoes`
--

INSERT INTO `manutencoes` (`id_manutencao`, `id_usuario`, `id_peca`, `id_servico`, `total`, `status`) VALUES
(152, 8, NULL, NULL, 1350.00, 'pendente'),
(154, 8, NULL, NULL, 200.00, 'pendente'),
(155, 8, NULL, NULL, 795.00, 'pendente'),
(156, 10, NULL, NULL, 715.00, 'pendente'),
(157, 13, NULL, NULL, 635.00, 'pendente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pecas`
--

CREATE TABLE `pecas` (
  `id_peca` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pecas`
--

INSERT INTO `pecas` (`id_peca`, `nome`, `preco`, `descricao`, `user_id`) VALUES
(1, 'Pneu', 150.00, 'Pneu aro 15 modelo A														', 0),
(2, 'Óleo do Motor', 35.00, 'Óleo lubrificante mineral 10W40																					', 0),
(3, 'Pastilha de Freio', 80.00, 'Pastilha de freio modelo B', 0),
(4, 'Filtro de Ar', 30.00, 'Filtro de ar para veículos modelo C', 0),
(5, 'Lâmpada', 20.00, 'Lâmpada halógena H4 modelo D', 0),
(6, 'Correia Dentada', 120.00, 'Correia dentada com tensor modelo E', 0),
(7, 'Amortecedor', 200.00, 'Amortecedor dianteiro modelo F', 0),
(8, 'Bateria', 180.00, 'Bateria de 60Ah modelo G', 0),
(9, 'Vela de Ignição', 15.00, 'Vela de ignição modelo H', 0),
(10, 'Pastilha de Freio Traseira', 20.00, 'Pastilha de freio traseira modelo I														', 0),
(11, 'Disco de Freio', 130.00, 'Disco de freio ventilado dianteiro modelo J', 0),
(12, 'Filtro de Combustível', 40.00, 'Filtro de combustível modelo K', 0),
(13, 'Filtro de Óleo', 25.00, 'Filtro de óleo para motores modelo L', 0),
(14, 'Filtro de Ar Condicionado', 35.00, 'Filtro de ar condicionado modelo M', 0),
(15, 'Fluido de Freio DOT 4', 15.00, 'Fluido de freio DOT 4 modelo N', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `id_peca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id_servico`, `nome`, `preco`, `descricao`, `user_id`, `id_peca`) VALUES
(1, 'Troca de Pneus', 50.00, 'Troca de pneus e balanceamento', 0, 1),
(2, 'Troca de Óleo', 100.00, 'Troca de óleo do motor e filtro', 0, 2),
(3, 'Troca de Pastilhas de Freio', 120.00, 'Troca de pastilhas de freio e revisão', 0, 3),
(4, 'Troca de filtro de ar', 80.00, 'Troca de filtro de ar', 0, 4),
(5, 'Troca de lâmpada', 60.00, 'Verificação e troca de lâmpada ', 0, 5),
(6, 'Troca de Correia Dentada', 150.00, 'Troca da correia dentada e tensionador', 0, 6),
(7, 'Troca de amortecedor', 90.00, 'Troca de amortecedor', 0, 7),
(8, 'Troca de Bateria', 70.00, 'Troca de bateria e verificação do sistema de carga', 0, 8),
(9, 'Troca de velas de ignição', 180.00, 'Troca de velas da ignição', 0, 9),
(10, 'Reparo de Freios', 120.00, 'Reparo e ajuste do sistema de freios', 0, 10),
(11, 'Troca de disco do freio', 40.00, 'Troca de disco de freio', 0, 11),
(12, 'Verificação e troca do filtro de combustível', 85.00, 'Verificação e troca do filtro de combustível', 0, 12),
(13, 'Substituição de Filtro de óleo', 30.00, 'Substituição do filtro de ar do motor', 0, 13),
(14, 'Reparo de Sistema de ar condicionado', 130.00, 'Reparo e manutenção do sistema de ar condicionado', 0, 14),
(15, 'Revisão Geral', 200.00, 'Revisão completa do veículo							', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `tipo`) VALUES
(7, 'Chico', 'chico@coinemail.com', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(8, 'admin', 'admin@admin.com', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(9, 'Carlos', 'carlos@email.com', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(10, 'Maria', 'maria@email.com', '25d55ad283aa400af464c76d713c07ad', 'cliente'),
(12, 'Carlao', 'carlao@email.com', '25d55ad283aa400af464c76d713c07ad', 'mecanico'),
(13, 'Lucero', 'lucero@email.com', '25d55ad283aa400af464c76d713c07ad', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `manutencao_detalhes`
--
ALTER TABLE `manutencao_detalhes`
  ADD PRIMARY KEY (`id_detalhes`),
  ADD KEY `id_manutencao` (`id_manutencao`),
  ADD KEY `id_servico` (`id_servico`),
  ADD KEY `id_peca` (`id_peca`);

--
-- Índices de tabela `manutencoes`
--
ALTER TABLE `manutencoes`
  ADD PRIMARY KEY (`id_manutencao`),
  ADD KEY `id_servico` (`id_servico`),
  ADD KEY `manutencoes_ibfk_1` (`id_usuario`),
  ADD KEY `manutencoes_ibfk_2` (`id_peca`);

--
-- Índices de tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id_peca`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `fk_id_peca` (`id_peca`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `manutencao_detalhes`
--
ALTER TABLE `manutencao_detalhes`
  MODIFY `id_detalhes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT de tabela `manutencoes`
--
ALTER TABLE `manutencoes`
  MODIFY `id_manutencao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id_peca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `manutencao_detalhes`
--
ALTER TABLE `manutencao_detalhes`
  ADD CONSTRAINT `manutencao_detalhes_ibfk_1` FOREIGN KEY (`id_manutencao`) REFERENCES `manutencoes` (`id_manutencao`),
  ADD CONSTRAINT `manutencao_detalhes_ibfk_2` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`id_servico`),
  ADD CONSTRAINT `manutencao_detalhes_ibfk_3` FOREIGN KEY (`id_peca`) REFERENCES `pecas` (`id_peca`);

--
-- Restrições para tabelas `manutencoes`
--
ALTER TABLE `manutencoes`
  ADD CONSTRAINT `manutencoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manutencoes_ibfk_2` FOREIGN KEY (`id_peca`) REFERENCES `pecas` (`id_peca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manutencoes_ibfk_3` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`id_servico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_id_peca` FOREIGN KEY (`id_peca`) REFERENCES `pecas` (`id_peca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
