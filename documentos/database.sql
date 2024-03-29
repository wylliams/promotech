-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-03-29 09:34:51
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
  `cliente_id` int(11) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_campanha_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_campanha_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.campanha_fornecedor_categoria_produto
DROP TABLE IF EXISTS `campanha_fornecedor_categoria_produto`;
CREATE TABLE IF NOT EXISTS `campanha_fornecedor_categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha_fornecedor_id` int(11) NOT NULL,
  `categoria_produto_id` int(11) NOT NULL,
  `faixa_valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campanha_fornecedor_categoria_produto_campanha_fornecedo_idx` (`campanha_fornecedor_id`),
  KEY `fk_categoria_produto_campanha_categoria_produto1_idx` (`categoria_produto_id`),
  CONSTRAINT `fk_campanha_fornecedor_categoria_produto_campanha_fornecedor1` FOREIGN KEY (`campanha_fornecedor_id`) REFERENCES `campanha_fornecedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categoria_produto_campanha_categoria_produto1` FOREIGN KEY (`categoria_produto_id`) REFERENCES `categoria_produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.categoria_produto
DROP TABLE IF EXISTS `categoria_produto`;
CREATE TABLE IF NOT EXISTS `categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone_fixo` varchar(45) NOT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `banco` varchar(255) NOT NULL,
  `agencia` varchar(255) NOT NULL,
  `conta` varchar(255) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.compromisso
DROP TABLE IF EXISTS `compromisso`;
CREATE TABLE IF NOT EXISTS `compromisso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_compromisso_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_compromisso_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.coordenador
DROP TABLE IF EXISTS `coordenador`;
CREATE TABLE IF NOT EXISTS `coordenador` (
  `id` int(11) NOT NULL,
  `anexo_curriculum` varchar(255) DEFAULT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  CONSTRAINT `fk_coordenador_Pessoa1` FOREIGN KEY (`id`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone_fixo` varchar(45) NOT NULL,
  `telefone_celular` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.pessoa
DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone_fixo` varchar(45) DEFAULT NULL,
  `telefone_celular` varchar(45) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `foto_UNIQUE` (`foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.promotor
DROP TABLE IF EXISTS `promotor`;
CREATE TABLE IF NOT EXISTS `promotor` (
  `id` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `altura` varchar(45) NOT NULL,
  `manequim` varchar(45) NOT NULL,
  `peso` int(11) NOT NULL,
  `numero_calcado` int(11) NOT NULL,
  `deletado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  CONSTRAINT `fk_promotor_Pessoa1` FOREIGN KEY (`id`) REFERENCES `pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table promotech.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `deletado` int(11) NOT NULL DEFAULT '0',
  `password` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
