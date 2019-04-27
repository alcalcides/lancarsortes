-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Abr-2019 às 14:46
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lancar_sortes_db`
--
CREATE DATABASE IF NOT EXISTS lancar_sortes_db
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE lancar_sortes_db;
-- --------------------------------------------------------

--
-- Estrutura da tabela `participacoes`
--

CREATE TABLE `participacoes` (
  `idparticipacoes` int(11) NOT NULL,
  `idsorteios` int(11) NOT NULL,
  `idpessoas` int(11) NOT NULL,
  `compPagto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participacoes`
--

INSERT INTO `participacoes` (`idparticipacoes`, `idsorteios`, `idpessoas`, `compPagto`) VALUES
(1, 2, 2, NULL),
(2, 2, 3, NULL),
(3, 3, 2, NULL),
(4, 2, 8, NULL),
(5, 2, 7, ''),
(6, 2, 6, NULL),
(7, 2, 9, NULL),
(8, 8, 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idpessoas` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idpessoas`, `nome`, `username`, `email`, `telefone`, `senha`) VALUES
(1, 'nome teste', 'p1', 'teste@teste.com', '5571993818609', '1111'),
(2, 'Isabela Costa de Santana Bezerra', 'p2', 'isabela_costa12@hotmail.com', '557193376239', '2222'),
(3, 'Maria Filomena Santiago', 'p3', 'santinha@podevir.com', '557191234567', '3333'),
(4, 'Zequinha Queiroz de Madruga', 'p4', 'meuforteehvoce@issoai.com', '552193131646', '4444'),
(5, 'Carinha Legal da Esquina', 'p5', 'paissandu@gigaoh.net', '554157788866', '5555'),
(6, 'Olha eu aqui', 'p6', 'euzinho@oieu.me', '5571912356479', '6666'),
(7, 'Olha eu lÃ¡', 'p7', 'eudenovo@oieu.me', '5571912356499', '7777'),
(8, 'Jeoaquim', 'p8', 'jeremias@visou.com', '0011612345678', '8888'),
(9, 'Inspiracao Divina', 'p9', 'eunaovouparar@voucontinuar.com', '5171964538562', '9999'),
(11, 'Vitorio Santista', 'p11', 'euacredito@navitoria.com', '5571984865652', '1111'),
(12, 'fun lãno', 'p12', 'fun@lano.nao', '558191424219', 'funautico'),
(13, 'cido', 'p13', 'pai@pai.com', '5581945681265', 'cidopai'),
(14, 'cido', 'p14', 'vo@vo.com', '5481945681265', 'cidovo'),
(16, 'geraldo', 'p16', 'geral@am.tv', '5521963528456', 'boralogo'),
(17, 'magrelo', 'mag', 'mag@magrelo.mag', '558134554041', '123'),
(18, 'danilo gentili', 'pixinguinha', 'p@p.com', '5571996322555', '123'),
(19, 'daniel gent', 'pop star', 'popstar@p.com', '5371996322555', '123'),
(21, 'dani besteira', 'pop bola', 'popbb@bb.com', '5371996322555', '123'),
(22, 'daco vasos sanitários', 'cocôs', 'coco@cado.dm', '5521996322555', '123'),
(31, 'Zé Mangueira', 'zePiruleta', 'seuze@kbra.com', '5571991550011', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorteios`
--

CREATE TABLE `sorteios` (
  `idsorteios` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valorParticipacao` varchar(11) DEFAULT NULL,
  `estado` enum('PR','PS','OP','CC') NOT NULL,
  `ganhador` int(11) DEFAULT NULL,
  `momentoSorteio` datetime NOT NULL,
  `momentoCadastro` datetime NOT NULL,
  `lugarSorteio` varchar(45) NOT NULL,
  `formaRetirada` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sorteios`
--

INSERT INTO `sorteios` (`idsorteios`, `titulo`, `descricao`, `valorParticipacao`, `estado`, `ganhador`, `momentoSorteio`, `momentoCadastro`, `lugarSorteio`, `formaRetirada`) VALUES
(1, 'Uma bela pia de lavar pratos', 'Pia grande de mármore e cuba em inox cheia de pratos todos seus', '7', 'PR', NULL, '2019-01-31 12:30:00', '2019-02-01 12:00:00', 'Na própria pia', 'Posso enviar por SEDEX, desde que vc pague'),
(2, 'Ventilador potente', 'Ventilador Mondial seis pás, só faz um barulhinho', '0', 'PR', NULL, '2019-01-31 12:30:00', '2019-02-01 12:00:00', 'Minha casa Rua Andaraí 26 Arraial do Retiro S', 'Encontro pessoal após o o sorteio'),
(3, 'Televisão antiga totalmente funcional', 'Linda tv prata de 14pol de tubo catódico', '5', 'PR', NULL, '2019-02-02 13:30:00', '2019-02-01 12:00:00', 'Arena Fonte Nova', 'Em maos no momento do sorteio'),
(4, 'fivela de cabelo', 'azul e grande', '10', 'OP', NULL, '2019-02-02 23:00:00', '2019-02-01 12:00:00', 'Alto do Jenipapo', 'colocar a mão na cartola do vovô'),
(5, 'escova de cabelo da vovó', 'a escova com os maiores dentes do mercado', '0', 'PR', NULL, '2020-12-31 12:30:00', '2019-02-01 12:00:00', 'casa da vovó', 'com a vovó'),
(7, 'filtro de linha sob encomenda', 'decida quantas tomadas, qual o cumprimento do cabo, qual a cor dos fios e muito mais', '50', 'PR', NULL, '2019-05-01 00:00:00', '2019-02-01 12:00:00', 'web', 'sedex'),
(8, 'Uma jumenta falante', 'a jumenta fala como o quÊ', '0', 'CC', 5, '2019-02-02 14:00:00', '2019-02-01 12:00:00', 'baixa da Égua', 'cartola do vovô'),
(9, 'Suco De Maracujá', '', '', 'OP', NULL, '2019-02-13 08:00:00', '2019-02-12 15:09:00', 'Cama da mamãe', 'No local do sorteio'),
(10, 'Pás Descartáveis', 'para ajudar na limpeza do cocô dos gatos quando levamos eles pra praia', '', 'OP', NULL, '2019-02-14 20:00:00', '2019-02-12 15:12:00', 'Plataforma digital', 'Encontro marcado'),
(11, 'Pás Descartáveis', 'para ajudar no cocô dos gatos na praia', '', 'OP', NULL, '2019-05-12 20:00:00', '2019-02-12 15:14:00', 'Plataforma digital', 'Encontro marcado'),
(12, 'Pás Descartáveis', '', '', 'OP', NULL, '2020-02-20 20:00:00', '2019-02-12 15:20:00', 'Plataforma digital', 'Encontro marcado'),
(13, 'pás descartáveis', '', '', 'OP', NULL, '2020-02-20 02:00:00', '2019-02-12 15:22:00', 'Plataforma digital', 'Encontro marcado'),
(14, 'Máquinas de tear', 'para fazer linho', '', 'OP', NULL, '2020-02-12 20:00:00', '2019-02-12 15:32:00', 'Plataforma digital', 'Encontro marcado'),
(15, 'Máquinas pírula', 'para enrolar o bobó', '', 'OP', NULL, '2020-02-12 20:00:00', '2019-02-12 15:33:00', 'Plataforma digital', 'Encontro marcado'),
(16, 'Máquinas pírula', 'para enrolar o bobó', '', 'OP', NULL, '2020-02-12 20:00:00', '2019-02-12 15:34:00', 'Plataforma digital', 'Encontro marcado'),
(17, 'Pírula da sorte', 'para enrolar o bôbó', '', 'OP', NULL, '2020-02-12 20:00:00', '2019-02-12 15:37:00', 'Miríades', 'A critério do clima'),
(18, 'Pírulas do sono', 'para enrolar o bôbó', '', 'OP', NULL, '2020-02-12 20:00:00', '2019-02-12 15:38:00', 'Miríades', 'A critério do clima'),
(19, 'pirulitos gigantes', '', '', 'OP', NULL, '2019-02-14 13:00:00', '2019-02-14 11:29:00', 'Plataforma digital', 'A combinar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participacoes`
--
ALTER TABLE `participacoes`
  ADD PRIMARY KEY (`idparticipacoes`),
  ADD KEY `idpessoas` (`idpessoas`),
  ADD KEY `idsorteio` (`idsorteios`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idpessoas`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `sorteios`
--
ALTER TABLE `sorteios`
  ADD PRIMARY KEY (`idsorteios`),
  ADD KEY `ganhador` (`ganhador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participacoes`
--
ALTER TABLE `participacoes`
  MODIFY `idparticipacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idpessoas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sorteios`
--
ALTER TABLE `sorteios`
  MODIFY `idsorteios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `participacoes`
--
ALTER TABLE `participacoes`
  ADD CONSTRAINT `participacoes_ibfk_1` FOREIGN KEY (`idpessoas`) REFERENCES `pessoas` (`idpessoas`),
  ADD CONSTRAINT `participacoes_ibfk_2` FOREIGN KEY (`idsorteios`) REFERENCES `sorteios` (`idsorteios`);

--
-- Limitadores para a tabela `sorteios`
--
ALTER TABLE `sorteios`
  ADD CONSTRAINT `sorteios_ibfk_1` FOREIGN KEY (`ganhador`) REFERENCES `pessoas` (`idpessoas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
