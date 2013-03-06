-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-03-06 09:19:12
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table promotech.campanha
DROP TABLE IF EXISTS `campanha`;
CREATE TABLE IF NOT EXISTS `campanha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `valor_orcado` float DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_campanha_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_campanha_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.campanha: ~1 rows (approximately)
DELETE FROM `campanha`;
/*!40000 ALTER TABLE `campanha` DISABLE KEYS */;
INSERT INTO `campanha` (`id`, `nome`, `local`, `hora_inicio`, `hora_fim`, `data_inicio`, `data_fim`, `valor_orcado`, `cliente_id`, `deletado`) VALUES
	(2, 'teste de campanha', 'aqui', '02:01:00', '02:01:00', '2013-03-06', '2013-03-06', 100, 1, 0);
/*!40000 ALTER TABLE `campanha` ENABLE KEYS */;


-- Dumping structure for table promotech.campanha_coordenador
DROP TABLE IF EXISTS `campanha_coordenador`;
CREATE TABLE IF NOT EXISTS `campanha_coordenador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha_id` int(11) NOT NULL,
  `coordenador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campanha_has_coordenador_coordenador1_idx` (`coordenador_id`),
  KEY `fk_campanha_has_coordenador_campanha1_idx` (`campanha_id`),
  CONSTRAINT `fk_campanha_has_coordenador_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_campanha_has_coordenador_coordenador1` FOREIGN KEY (`coordenador_id`) REFERENCES `coordenador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.campanha_coordenador: ~1 rows (approximately)
DELETE FROM `campanha_coordenador`;
/*!40000 ALTER TABLE `campanha_coordenador` DISABLE KEYS */;
INSERT INTO `campanha_coordenador` (`id`, `campanha_id`, `coordenador_id`) VALUES
	(2, 2, 1);
/*!40000 ALTER TABLE `campanha_coordenador` ENABLE KEYS */;


-- Dumping structure for table promotech.campanha_fornecedor
DROP TABLE IF EXISTS `campanha_fornecedor`;
CREATE TABLE IF NOT EXISTS `campanha_fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha_id` int(11) NOT NULL,
  `fornecedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campanha_fornecedor_campanha1_idx` (`campanha_id`),
  KEY `fk_campanha_fornecedor_fornecedor1_idx` (`fornecedor_id`),
  CONSTRAINT `fk_campanha_fornecedor_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_campanha_fornecedor_fornecedor1` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.campanha_fornecedor: ~0 rows (approximately)
DELETE FROM `campanha_fornecedor`;
/*!40000 ALTER TABLE `campanha_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_fornecedor` ENABLE KEYS */;


-- Dumping structure for table promotech.campanha_fornecedor_categoria_produto
DROP TABLE IF EXISTS `campanha_fornecedor_categoria_produto`;
CREATE TABLE IF NOT EXISTS `campanha_fornecedor_categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha_fornecedor_id` int(11) NOT NULL,
  `categoria_produto_id` int(11) NOT NULL,
  `faixa_valor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campanha_fornecedor_categoria_produto_campanha_fornecedo_idx` (`campanha_fornecedor_id`),
  KEY `fk_categoria_produto_campanha_categoria_produto1_idx` (`categoria_produto_id`),
  CONSTRAINT `fk_campanha_fornecedor_categoria_produto_campanha_fornecedor1` FOREIGN KEY (`campanha_fornecedor_id`) REFERENCES `campanha_fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categoria_produto_campanha_categoria_produto1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categoria_produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.campanha_fornecedor_categoria_produto: ~0 rows (approximately)
DELETE FROM `campanha_fornecedor_categoria_produto`;
/*!40000 ALTER TABLE `campanha_fornecedor_categoria_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_fornecedor_categoria_produto` ENABLE KEYS */;


-- Dumping structure for table promotech.campanha_promotor
DROP TABLE IF EXISTS `campanha_promotor`;
CREATE TABLE IF NOT EXISTS `campanha_promotor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha_id` int(11) NOT NULL,
  `promotor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campanha_has_promotor_promotor1_idx` (`promotor_id`),
  KEY `fk_campanha_has_promotor_campanha1_idx` (`campanha_id`),
  CONSTRAINT `fk_campanha_has_promotor_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_campanha_has_promotor_promotor1` FOREIGN KEY (`promotor_id`) REFERENCES `promotor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.campanha_promotor: ~1 rows (approximately)
DELETE FROM `campanha_promotor`;
/*!40000 ALTER TABLE `campanha_promotor` DISABLE KEYS */;
INSERT INTO `campanha_promotor` (`id`, `campanha_id`, `promotor_id`) VALUES
	(2, 2, 2);
/*!40000 ALTER TABLE `campanha_promotor` ENABLE KEYS */;


-- Dumping structure for table promotech.categoria_produto
DROP TABLE IF EXISTS `categoria_produto`;
CREATE TABLE IF NOT EXISTS `categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.categoria_produto: ~0 rows (approximately)
DELETE FROM `categoria_produto`;
/*!40000 ALTER TABLE `categoria_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_produto` ENABLE KEYS */;


-- Dumping structure for table promotech.categoria_produto_fornecedor
DROP TABLE IF EXISTS `categoria_produto_fornecedor`;
CREATE TABLE IF NOT EXISTS `categoria_produto_fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor_id` int(11) NOT NULL,
  `categoria_produto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_produto_fornecedor_fornecedor1_idx` (`fornecedor_id`),
  KEY `fk_categoria_produto_fornecedor_categoria_produto1_idx` (`categoria_produto_id`),
  CONSTRAINT `fk_categoria_produto_fornecedor_categoria_produto1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categoria_produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categoria_produto_fornecedor_fornecedor1` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.categoria_produto_fornecedor: ~0 rows (approximately)
DELETE FROM `categoria_produto_fornecedor`;
/*!40000 ALTER TABLE `categoria_produto_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_produto_fornecedor` ENABLE KEYS */;


-- Dumping structure for table promotech.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_fixo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_celular` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnpj` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.cliente: ~1 rows (approximately)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `tipo`, `nome`, `telefone_fixo`, `telefone_celular`, `cpf`, `cnpj`, `email`, `banco`, `agencia`, `conta`, `deletado`) VALUES
	(1, 'PF', 'Teste de cliente', '97987979', '', '', '', 'email@email.com', '1', '1', '1', 0);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Dumping structure for table promotech.compromisso
DROP TABLE IF EXISTS `compromisso`;
CREATE TABLE IF NOT EXISTS `compromisso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_compromisso_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_compromisso_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.compromisso: ~0 rows (approximately)
DELETE FROM `compromisso`;
/*!40000 ALTER TABLE `compromisso` DISABLE KEYS */;
/*!40000 ALTER TABLE `compromisso` ENABLE KEYS */;


-- Dumping structure for table promotech.coordenador
DROP TABLE IF EXISTS `coordenador`;
CREATE TABLE IF NOT EXISTS `coordenador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anexo_curriculum` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pessoa_id` int(10) unsigned NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_coordenador_Pessoa1_idx` (`pessoa_id`),
  CONSTRAINT `fk_coordenador_Pessoa1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.coordenador: ~1 rows (approximately)
DELETE FROM `coordenador`;
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
INSERT INTO `coordenador` (`id`, `anexo_curriculum`, `pessoa_id`, `deletado`) VALUES
	(1, '', 3, 0);
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;


-- Dumping structure for table promotech.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_fixo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_celular` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.fornecedor: ~0 rows (approximately)
DELETE FROM `fornecedor`;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;


-- Dumping structure for table promotech.mensagem
DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `campanha_id` int(11) NOT NULL,
  `compromisso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mensagem_campanha1_idx` (`campanha_id`),
  KEY `fk_mensagem_compromisso1_idx` (`compromisso_id`),
  CONSTRAINT `fk_mensagem_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagem_compromisso1` FOREIGN KEY (`compromisso_id`) REFERENCES `compromisso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.mensagem: ~0 rows (approximately)
DELETE FROM `mensagem`;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;


-- Dumping structure for table promotech.pessoa
DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_fixo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone_celular` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.pessoa: ~3 rows (approximately)
DELETE FROM `pessoa`;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id`, `nome`, `telefone_fixo`, `telefone_celular`, `foto`, `email`, `cpf`, `rg`, `tipo`) VALUES
	(1, 'Teste de generalizaÃ§Ã£o', '', '84755243', '', 'daniel@email.com', '', '', ''),
	(2, 'caractere especiaÃ£aal', '', '81755243', '', 'daniel@email.com', '', '', ''),
	(3, 'Teste de coordenadorr', '', '84755243', '', 'teste@email.com', '', '', '');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;


-- Dumping structure for table promotech.promotor
DROP TABLE IF EXISTS `promotor`;
CREATE TABLE IF NOT EXISTS `promotor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `altura` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `manequim` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `numero_calcado` int(11) NOT NULL,
  `pessoa_id` int(10) unsigned NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_promotor_Pessoa1_idx` (`pessoa_id`),
  CONSTRAINT `fk_promotor_Pessoa1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.promotor: ~2 rows (approximately)
DELETE FROM `promotor`;
/*!40000 ALTER TABLE `promotor` DISABLE KEYS */;
INSERT INTO `promotor` (`id`, `nome`, `categoria`, `altura`, `manequim`, `peso`, `numero_calcado`, `pessoa_id`, `deletado`) VALUES
	(1, '', 'A', '1,70', '38', 65, 40, 1, 0),
	(2, '', 'A', '1,70', '38', 65, 40, 2, 0);
/*!40000 ALTER TABLE `promotor` ENABLE KEYS */;


-- Dumping structure for table promotech.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table promotech.usuario: ~0 rows (approximately)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
