-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-02-21 10:35:23
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table promotech.campanha
DROP TABLE IF EXISTS `campanha`;
CREATE TABLE IF NOT EXISTS `campanha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `valor_orcado` float DEFAULT NULL,
  `deletado` int(10) DEFAULT '0',
  `cliente_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `FK_campanha_cliente` (`cliente_id`),
  CONSTRAINT `FK_campanha_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.campanha: ~18 rows (approximately)
DELETE FROM `campanha`;
/*!40000 ALTER TABLE `campanha` DISABLE KEYS */;
INSERT INTO `campanha` (`id`, `nome`, `local`, `hora_inicio`, `hora_fim`, `data_inicio`, `data_fim`, `valor_orcado`, `deletado`, `cliente_id`) VALUES
	(3, 'lalal', 'lalala', '23:46:00', '23:46:00', '2013-02-12', '2013-02-12', 100, 1, NULL),
	(4, 'teste', 'teste', '23:51:00', '23:51:00', '2013-02-12', '2013-02-12', 1000, 1, NULL),
	(5, 'teste', 'teste', '23:51:00', '23:51:00', '2013-02-12', '2013-02-12', 1000, 1, NULL),
	(7, 'teste', 'teste', '23:51:00', '23:51:00', '2013-02-12', '2013-02-12', 1000, 1, NULL),
	(8, 'Opa', 'opa', '00:02:00', '00:02:00', '2013-02-13', '2013-02-13', 1, 1, NULL),
	(10, 'teste novo', 'teste novo', '14:24:00', '14:24:00', '2013-02-13', '2013-02-13', 1000, 0, NULL),
	(11, 'alguma coisa', 'outra', '14:36:00', '14:36:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(12, 'alguma coisa', 'outra', '14:36:00', '14:36:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(13, 'teste', 'teste', '14:41:00', '14:41:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(14, 'lalall', 'lalalla', '14:43:00', '14:43:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(15, 'duhasiudh', 'iudhaiudsh', '14:43:00', '14:43:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(16, 'duhasiudh', 'iudhaiudsh', '14:43:00', '14:43:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(17, 'teste de promotor', 'aqui', '14:47:00', '14:47:00', '2013-02-13', '2013-02-13', NULL, 0, NULL),
	(18, 'Campanha com cliente', 'aqui e agora', '12:50:00', '12:50:00', '2013-02-14', '2013-02-14', 100, 1, 1),
	(19, 'Teste de campanhaCoordenador', 'Aqui', '23:05:00', '23:05:00', '2013-02-16', '2013-02-16', 10, 1, 1),
	(20, 'Teste de campanhaCoordenador', 'Aqui', '23:05:00', '23:05:00', '2013-02-16', '2013-02-16', 10, 1, 1),
	(21, 'Teste de campanhaCoordenador', 'Aqui', '23:05:00', '23:05:00', '2013-02-16', '2013-02-16', 10, 1, 1),
	(22, 'Teste de campanhaCoordenador', 'Aqui', '23:05:00', '23:05:00', '2013-02-16', '2013-02-16', 10, 0, 1);
/*!40000 ALTER TABLE `campanha` ENABLE KEYS */;


-- Dumping structure for table promotech.campanha_categoria_produto_fornecedor
DROP TABLE IF EXISTS `campanha_categoria_produto_fornecedor`;
CREATE TABLE IF NOT EXISTS `campanha_categoria_produto_fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_produto_fornecedor_id` int(11) NOT NULL,
  `campanha_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_produto_fornecedor_has_campanha_campanha1_idx` (`campanha_id`),
  KEY `fk_categoria_produto_fornecedor_has_campanha_categoria_prod_idx` (`categoria_produto_fornecedor_id`),
  CONSTRAINT `fk_categoria_produto_fornecedor_has_campanha_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categoria_produto_fornecedor_has_campanha_categoria_produt1` FOREIGN KEY (`categoria_produto_fornecedor_id`) REFERENCES `categoria_produto_fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.campanha_categoria_produto_fornecedor: ~0 rows (approximately)
DELETE FROM `campanha_categoria_produto_fornecedor`;
/*!40000 ALTER TABLE `campanha_categoria_produto_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_categoria_produto_fornecedor` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.campanha_coordenador: ~1 rows (approximately)
DELETE FROM `campanha_coordenador`;
/*!40000 ALTER TABLE `campanha_coordenador` DISABLE KEYS */;
INSERT INTO `campanha_coordenador` (`id`, `campanha_id`, `coordenador_id`) VALUES
	(6, 22, 2);
/*!40000 ALTER TABLE `campanha_coordenador` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.campanha_promotor: ~18 rows (approximately)
DELETE FROM `campanha_promotor`;
/*!40000 ALTER TABLE `campanha_promotor` DISABLE KEYS */;
INSERT INTO `campanha_promotor` (`id`, `campanha_id`, `promotor_id`) VALUES
	(4, 12, 4),
	(5, 13, 3),
	(6, 14, 4),
	(7, 15, 3),
	(8, 16, 1),
	(9, 16, 3),
	(18, 17, 3),
	(19, 17, 4),
	(23, 18, 1),
	(24, 18, 3),
	(25, 19, 1),
	(26, 19, 3),
	(27, 20, 1),
	(28, 20, 3),
	(29, 21, 1),
	(30, 21, 3),
	(41, 22, 1),
	(42, 22, 3);
/*!40000 ALTER TABLE `campanha_promotor` ENABLE KEYS */;


-- Dumping structure for table promotech.categoria_produto
DROP TABLE IF EXISTS `categoria_produto`;
CREATE TABLE IF NOT EXISTS `categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `faixa_valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fornecedor_has_categoria_produto_categoria_produto1_idx` (`categoria_produto_id`),
  KEY `fk_fornecedor_has_categoria_produto_fornecedor_idx` (`fornecedor_id`),
  CONSTRAINT `fk_fornecedor_has_categoria_produto_categoria_produto1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categoria_produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_fornecedor_has_categoria_produto_fornecedor` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.categoria_produto_fornecedor: ~0 rows (approximately)
DELETE FROM `categoria_produto_fornecedor`;
/*!40000 ALTER TABLE `categoria_produto_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_produto_fornecedor` ENABLE KEYS */;


-- Dumping structure for table promotech.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `deletado` int(11) NOT NULL DEFAULT '0',
  `telefone_fixo` varchar(45) NOT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `banco` varchar(255) NOT NULL,
  `agencia` varchar(255) NOT NULL,
  `conta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.cliente: ~2 rows (approximately)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `tipo`, `nome`, `deletado`, `telefone_fixo`, `telefone_celular`, `cpf`, `cnpj`, `email`, `banco`, `agencia`, `conta`) VALUES
	(1, 'PF', 'Daniel', 0, '897897897', '', '', '', 'daniel@daniel.com', 'qualquer', '1234', '1234'),
	(3, 'PF', 'Henrique', 0, '987987897', '', '', '', 'daniel@daniel.com', 'qualquer', '98779', '987987');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


-- Dumping structure for table promotech.compromisso
DROP TABLE IF EXISTS `compromisso`;
CREATE TABLE IF NOT EXISTS `compromisso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_compromisso_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_compromisso_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.compromisso: ~0 rows (approximately)
DELETE FROM `compromisso`;
/*!40000 ALTER TABLE `compromisso` DISABLE KEYS */;
/*!40000 ALTER TABLE `compromisso` ENABLE KEYS */;


-- Dumping structure for table promotech.coordenador
DROP TABLE IF EXISTS `coordenador`;
CREATE TABLE IF NOT EXISTS `coordenador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `telefone_fixo` varchar(45) DEFAULT NULL,
  `telefone_celular` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `anexo_curriculum` varchar(255) DEFAULT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.coordenador: ~2 rows (approximately)
DELETE FROM `coordenador`;
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
INSERT INTO `coordenador` (`id`, `nome`, `cpf`, `rg`, `foto`, `telefone_fixo`, `telefone_celular`, `email`, `anexo_curriculum`, `deletado`) VALUES
	(1, 'Teste', '998797', '979', '9hagsdgasd87as', '9878979', '79879879', 'email@email.com', 'asdgasd68a7s6diausgh', 0),
	(2, 'teste 2', 'Opa', '7987987', '987987987', '87987', '97987987', 'email@email.com', '98a76sduaysda87s6d', 0);
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;


-- Dumping structure for table promotech.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone_fixo` varchar(45) NOT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.mensagem: ~0 rows (approximately)
DELETE FROM `mensagem`;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;


-- Dumping structure for table promotech.promotor
DROP TABLE IF EXISTS `promotor`;
CREATE TABLE IF NOT EXISTS `promotor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `altura` varchar(45) NOT NULL,
  `manequim` varchar(45) NOT NULL,
  `peso` int(11) NOT NULL,
  `numero_calcado` int(11) NOT NULL,
  `telefone_fixo` varchar(45) DEFAULT NULL,
  `telefone_celular` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `deletado` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.promotor: ~3 rows (approximately)
DELETE FROM `promotor`;
/*!40000 ALTER TABLE `promotor` DISABLE KEYS */;
INSERT INTO `promotor` (`id`, `nome`, `cpf`, `rg`, `foto`, `categoria`, `altura`, `manequim`, `peso`, `numero_calcado`, `telefone_fixo`, `telefone_celular`, `email`, `deletado`) VALUES
	(1, 'Promotor de teste', '08784652438', '', 'dahskjdhakjsdh', 'A', '1,70', '38', 64, 39, '', '9878979798', 'daniel@email.com', 1),
	(3, 'teste 2', '', '', 'dasdiuaskjdahskjh', 'A', '1,70', '40', 64, 40, '', '1273128731627', 'email@email.com', 0),
	(4, 'Kessia Karla Lucio da Silva', '10140833463', '7250690', 'iahdsiuahsidu', 'A', '1,65', '42', 68, 37, '32498431', '88259997', 'kessia_karla.01@hotmail.com', 0);
/*!40000 ALTER TABLE `promotor` ENABLE KEYS */;


-- Dumping structure for table promotech.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table promotech.usuario: ~0 rows (approximately)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
