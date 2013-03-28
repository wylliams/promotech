-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `promotech`
--

-- --------------------------------------------------------
--

-- Extraindo dados da tabela `campanha`
--

INSERT INTO `campanha` (`id`, `nome`, `local`, `hora_inicio`, `hora_fim`, `data_inicio`, `data_fim`, `valor_orcado`, `cliente_id`, `deletado`) VALUES
(1, 'Pascoa extra', 'extra BV', '08:00:00', '22:00:00', '2013-03-28', '2013-03-31', 1500, 6, 0),
(2, 'Liquidação Ferreira Costa', 'FC imbiribeira', NULL, NULL, '2013-04-05', '2013-04-07', 1760, 3, 0),
(3, 'Coffe break inove', 'mar hotel', NULL, NULL, '2013-04-19', '2013-04-19', 500, 8, 0),
(4, 'Promoção primor gratis', 'hiper bombreço Tacaruna', '16:00:00', '20:00:00', '2013-04-14', NULL, 350, 5, 0),
(5, 'Dia das mãe extra', 'extra BV', NULL, NULL, '2013-05-10', '2013-05-12', 1020, 6, 0),
(6, 'Chá da tarde Galeria Fialho', 'Galeria F Costa Olinda', NULL, NULL, '2013-04-13', '2013-04-13', 400, 4, 0),
(7, 'Dia da mentira pão de açucar', 'Pão de açucar', NULL, NULL, '2013-04-01', NULL, NULL, 1, 0),
(8, 'Coquetel com clientes', 'Shopping Recife', NULL, NULL, '2013-05-20', NULL, 800, 11, 0),
(9, 'Dia das mãe Pão de açucar', 'Pão de Açucar', NULL, NULL, '2013-05-10', '2013-05-12', 1500, 1, 0),
(10, 'Coffe  Break clientes', 'Apt em casa forte', '08:00:00', NULL, '2013-05-14', NULL, 300,9, 0),
(11, 'Exposição Sabrina Alencar', 'Atelier Fundol', NULL, NULL, '2013-06-20', NULL, 910, 21, 0),
(12, 'Dia Mid', 'extra BV', NULL, NULL, '2013-06-06', NULL, 450, 17, 0),
(13, 'Troca de nota por Leite Camponesa', 'extra BV', NULL, NULL, '2013-05-28', NULL, 830, 16, 0);

-- --------------------------------------------------------


-- Extraindo dados da tabela `campanha_coordenador`
--

INSERT INTO `campanha_coordenador` (`id`, `campanha_id`, `coordenador_id`) VALUES
(1, 1, 2),
(2, 2, 5),
(3, 3, 10),
(4, 5, 2),
(5, 4, 2),
(6, 6, 2),
(7, 7, 10),
(8, 8, 10),
(9, 10, 10),
(10, 9, 5);

-- --------------------------------------------------------


-- Extraindo dados da tabela `campanha_fornecedor`
--

INSERT INTO `campanha_fornecedor` (`id`, `campanha_id`, `fornecedor_id`) VALUES
(1, 3, 3),
(2, 5, 2),
(3, 4, 1),
(4, 6, 5),
(5, 7, 2),
(6, 3, 6),
(7, 10, 6),
(8, 11, 4),
(9, 8, 10),
(10, 15, 10);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `campanha_fornecedor_categoria_produto`
--

INSERT INTO `campanha_fornecedor_categoria_produto` (`id`, `campanha_fornecedor_id`, `categoria_produto_id`, `faixa_valor`) VALUES
(1, 1, 1, '200'),
(2, 2, 4, '500'),
(3, 4, 8, '400'),
(4, 5, 4, '300'),
(5, 3, 4, '520'),
(6, 6, 3, '210'),
(7, 10, 5, '800'),
(8, 8, 2, '710');
----------------------------------------------

--
-- Extraindo dados da tabela `campanha_promotor`
--

INSERT INTO `campanha_promotor` (`id`, `campanha_id`, `promotor_id`) VALUES
(1, 1, 4),
(2, 2, 1),
(3, 1, 7),
(4, 5, 3),
(5, 3, 8),
(6, 4, 4),
(7, 6, 7),
(8, 6, 4),
(9, 5, 1),
(10, 5, 4),
(11, 10, 7),
(12, 7, 7),
(13, 8, 11),
(14, 9, 12),
(15, 9, 13),
(16, 11, 15),
(17, 13, 7),
(18, 12, 4),
(19, 13, 3),
(20, 9, 1);

-- --------------------------------------------------------


--
-- Extraindo dados da tabela `categoria_produto`
--

INSERT INTO `categoria_produto` (`id`, `nome`, `deletado`) VALUES
(1, 'Alimentos naturais', 0),
(2, 'produto de limpeza', 0),
(3, 'material e construção', 0),
(4, 'alimento industrializado', 0),
(5, 'vestuario', 0),
(6, 'descartaveis', 0),
(7, 'festa', 0),
(8, 'bebidas', 0);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `categoria_produto_fornecedor`
--

INSERT INTO `categoria_produto_fornecedor` (`id`, `fornecedor_id`, `categoria_produto_id`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 4, 8),
(4, 2, 6),
(5, 6, 6),
(6, 9, 5),
(7, 7, 1),
(8, 7, 6),
(9, 8, 3),
(10, 5, 4);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `tipo`, `nome`, `telefone_fixo`, `telefone_celular`, `cpf`, `cnpj`, `email`, `banco`, `agencia`, `conta`, `deletado`) VALUES
(1, 'PJ', 'Grupo Pão de Açucar', '31928222', NULL, NULL, '3192389182312', NULL, 'Bradesco', '39209332', '938984312', 0),
(2, 'PJ', 'Gabriel Bacelar', '35450075', NULL, NULL, '097281723123', NULL, 'Caixa', '3891238123', '58281210', 0),
(3, 'PJ', 'Ferreira Costa', '38724821', NULL, NULL, '483218283723', NULL, 'Bradesco', '24782784', '8128731824', 0),
(4, 'PJ', 'Galeria Fialho Costa', '38274223', NULL, NULL, '728472421', NULL, 'Bradesco', '4738274', '482731', 0),
(5, 'PJ', 'Primor', '32189333', NULL, NULL, '293819829831', NULL, 'Bradesco', '338291', '21421482', 0),
(6, 'PJ', 'Extra', '30012900', NULL, NULL, '5652892012322', NULL, 'Brasil', '15125', '89382781212', 0),
(7, 'PF', 'João Cavalcante', '34545422', '98378282', '01298298134', NULL, NULL, 'Itau', '382942', '21948294', 0),
(8, 'PF', 'Alessandra Ramos', '38294233', '96872181', '09823982378', NULL, NULL, 'Bradesco', '39209332', '938984312', 0),
(9, 'PF', 'Douglas Fontes', '40010222', '91283919', '03292182312', NULL, NULL, 'Bradesco', '50189', '102518x', 0),
(10, 'PJ', 'Fundação Demostenes Braga', '35450075', NULL, NULL, '0482742313323', NULL, 'Caixa', '345523', '5343210', 0),
(11, 'PJ', 'Nestle', '35450075', NULL, NULL, '184298491223', NULL, 'Caixa', '52389123', '2523610', 0),
(12, 'PF', 'Joana Moura', '40010222', '91283919', '05934283312', NULL, NULL, 'Santander', '45879', '53853', 0),
(13, 'PJ', 'Mar Hotel', '30089875', NULL, NULL, '129582195', NULL, 'Caixa', '626233', '654710', 0),
(14, 'PJ', 'Baile Perfumado', '37734445', NULL, NULL, '7567657653', NULL, 'Bradesco', '765898', '0934830', 0),
(15, 'PJ', 'Spettus', '64366475', NULL, NULL, '26409623', NULL, 'Itau', '26655', '796890', 0),
(16, 'PJ', 'Camponesa', '35450075', NULL, NULL, '097281723123', NULL, 'Caixa', '43646323', '643643', 0),
(17, 'PJ', 'Ajynomoto', '35450075', NULL, NULL, '097281723123', NULL, 'Brasil', '56883', '87610', 0),
(18, 'PJ', 'Planet pão', '35450075', NULL, NULL, '097281723123', NULL, 'Brasil', '86623', '987960', 0),
(19, 'PJ', 'Cacau Show', '35450075', NULL, NULL, '097281723123', NULL, 'Brasil', '238123', '56760', 0),
(20, 'PJ', 'Floricultura Fontes', '35450075', NULL, NULL, '097281723123', NULL, 'Caixa', '6588123', '54350', 0),
(21, 'PF', 'Sabrina Alencar', '40067802', '91283919', '03292182312', NULL, NULL, 'Santander', '50189', '892518x', 0),
(22, 'PF', 'João Marcelo', '39548542', '93985339', '04845642312', NULL, NULL, 'Itau', '545452', '643634', 0),
(23, 'PF', 'Higor Valente', '34985392', '97493749', '03959328532', NULL, NULL, 'bradesco', '50189', '102518x', 0);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `compromisso`
--

INSERT INTO `compromisso` (`id`, `descricao`, `data`, `hora`, `usuario_id`, `deletado`) VALUES
(1, 'reunião com coordenador vinicius', '2013-03-20', '12:00:00', 1, 0),
(2, 'Consulta médica com dr. Frederico', '2013-03-18', '09:00:00', 1, 0),
(3, 'reunião com o grupo pão de açucar', '2013-03-29', '19:00:00', 2, 0),
(4, 'reunião com o grupo pão de açucar', '2013-03-29', '19:00:00', 1, 0),
(5, 'festa da São Braz', '2013-04-04', '20:00:00', 1, 0),
(6, 'Entrega da contabilidade', '2013-03-29', '19:00:00', 2, 0),
(7, 'Ir ao Atacadão', '2013-03-29', '09:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `coordenador`
--

INSERT INTO `coordenador` (`id`, `anexo_curriculum`, `deletado`) VALUES
(2, '', 0),
(5, NULL, 0),
(10, NULL, 0);

-- --------------------------------------------------------


--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `telefone_fixo`, `telefone_celular`, `email`, `deletado`) VALUES
(1, 'ceasa', '32329898', '98989899', NULL, 0),
(2, 'mercado dos doces', '34442298', '91322899', 'doce.c@gmail.com', 0),
(3, 'distribuidora muito mais', '31123498', '81344899', 'muitomais.92@gmail.com', 0),
(4, 'bebidas ltda', '31233458', '87342949', 'bebidasfern@gmail.com', 0),
(5, 'atacadão', '35648433', NULL, NULL, 0),
(6, 'Descartaveis e festa ltda', '31984358', '83532221', 'descltda@gmail.com', 0),
(7, 'leader', '31233458', '87342949', 'bebidasfern@gmail.com', 0),
(8, 'asa', '31233458', '87342949', 'bebidasfern@gmail.com', 0),
(9, 'felix descartaveis', '31233458', '87342949', 'bebidasfern@gmail.com', 0),
(10, 'Associação Fabart', '31233458', '87342949', 'bebidasfern@gmail.com', 0);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `telefone_fixo`, `telefone_celular`, `foto`, `email`, `cpf`, `rg`) VALUES
(1, 'Daniel Henrique da Silva', '', '84755243', '547100_419323204797050_1748708470_n.jpg', 'danielhenrique_1303@hotmail.com', '08784652438', ''),
(2, 'Coordenador de teste 1', '', '84755243', 'Eu.jpg', 'coordenador@email.com', '', ''),
(3, 'igor', '', '654654645', 'Chrysanthemum.jpg', 'gfdgfdgf@dgfd.com', '', ''),
(4, 'Camis', '558130481382', '94948583053', '1331748870.jpg', 'milaxin_lira@hotmail.com', '08799827484', '7660923'),
(5, 'ninguem', '', '3525252', 'Koala.jpg', 'ngg@gmgog.com', '', ''),
(6, 'Fernando Felix', '34902192', '91281922', NULL, 'fefelix@hotmail.com', '08717281743', NULL),
(7, 'Luiza Dantas', NULL, '81723731', NULL, 'lui_89@hotmail.com', '03482718273', NULL),
(8, 'Janaina Albuquerque', '48921823', '98983712', NULL, 'janalinda@ig.com.br', '03892373898', NULL),
(9, 'Alana Valeska', NULL, '81223922', NULL, 'valeskinha22@gmail.com', '09128391287', NULL),
(10, 'Vinicius Carlos', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL),
(11, 'Gabriela Ferraz', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL),
(12, 'Eduarda Damas', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL),
(13, 'Carlos Eduardo', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL),
(14, 'Natalia Gomes', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL),
(15, 'Valeria Silva', '34232331', '87361261', NULL, 'vini_carlos@hotmail.com', '04892238198', NULL);


-- --------------------------------------------------------

--
-- Extraindo dados da tabela `promotor`
--

INSERT INTO `promotor` (`id`, `categoria`, `altura`, `manequim`, `peso`, `numero_calcado`, `deletado`) VALUES
(1, 'B', '170', '38', 65, 40, 0),
(3, 'C', '1,72', '36', 60, 40, 0),
(4, 'A', '1,72', '38', 58, 36, 0),
(6, 'A', '1,75', '40', 68, 38, 0),
(7, 'A', '1,69', '38', 59, 37, 0),
(8, 'A', '1,73', '40', 61, 38, 0),
(9, 'A', '1,61', '38', 51, 36, 0),
(11, 'B', '1,64', '42', 58, 38, 0),
(12, 'A', '1,70', '40', 61, 38, 0),
(13, 'C', '1,81', '44', 85, 43, 0),
(14, 'A', '1,56', '34', 48, 36, 0),
(15, 'B', '1,68', '38', 59, 37, 0);

-- --------------------------------------------------------

-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'hangrel@gmail.com'),
(2, 'cliente', '123', 'cliente@gmail.com'),
(3, 'usuario', '123', 'usuario@gmail.com');
