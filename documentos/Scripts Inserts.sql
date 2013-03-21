-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.25a - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-03-21 10:37:58
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
-- Dumping data for table promotech.campanha: ~0 rows (approximately)
/*!40000 ALTER TABLE `campanha` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha` ENABLE KEYS */;

-- Dumping data for table promotech.campanha_coordenador: ~0 rows (approximately)
/*!40000 ALTER TABLE `campanha_coordenador` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_coordenador` ENABLE KEYS */;

-- Dumping data for table promotech.campanha_fornecedor: ~0 rows (approximately)
/*!40000 ALTER TABLE `campanha_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_fornecedor` ENABLE KEYS */;

-- Dumping data for table promotech.campanha_fornecedor_categoria_produto: ~0 rows (approximately)
/*!40000 ALTER TABLE `campanha_fornecedor_categoria_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_fornecedor_categoria_produto` ENABLE KEYS */;

-- Dumping data for table promotech.campanha_promotor: ~0 rows (approximately)
/*!40000 ALTER TABLE `campanha_promotor` DISABLE KEYS */;
/*!40000 ALTER TABLE `campanha_promotor` ENABLE KEYS */;

-- Dumping data for table promotech.categoria_produto: ~0 rows (approximately)
/*!40000 ALTER TABLE `categoria_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_produto` ENABLE KEYS */;

-- Dumping data for table promotech.categoria_produto_fornecedor: ~0 rows (approximately)
/*!40000 ALTER TABLE `categoria_produto_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria_produto_fornecedor` ENABLE KEYS */;

-- Dumping data for table promotech.cliente: ~0 rows (approximately)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Dumping data for table promotech.compromisso: ~0 rows (approximately)
/*!40000 ALTER TABLE `compromisso` DISABLE KEYS */;
/*!40000 ALTER TABLE `compromisso` ENABLE KEYS */;

-- Dumping data for table promotech.coordenador: ~0 rows (approximately)
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;

-- Dumping data for table promotech.fornecedor: ~0 rows (approximately)
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;

-- Dumping data for table promotech.mensagem: ~0 rows (approximately)
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;

-- Dumping data for table promotech.pessoa: ~3 rows (approximately)
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id`, `nome`, `telefone_fixo`, `telefone_celular`, `foto`, `email`, `cpf`, `rg`) VALUES
	(1, 'iuhiuhiuhiu', '', '654654645', 'Chrysanthemum.jpg', 'gfdgfdgf@dgfd.com', '', ''),
	(2, 'Camis', '558130481382', '94948583053', '1331748870.jpg', 'milaxin_lira@hotmail.com', '08799827484', '7660923'),
	(3, 'wginwgini', '', '3525252', 'Koala.jpg', 'fwogg@gmgog.com', '', '');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

-- Dumping data for table promotech.promotor: ~3 rows (approximately)
/*!40000 ALTER TABLE `promotor` DISABLE KEYS */;
INSERT INTO `promotor` (`id`, `categoria`, `altura`, `manequim`, `peso`, `numero_calcado`, `deletado`) VALUES
	(1, 'b', '5465', '56', 434, 5443, 0),
	(2, 'A', '1,72', '38', 58, 36, 0),
	(3, 'C', '1,72', '36', 60, 40, 0);
/*!40000 ALTER TABLE `promotor` ENABLE KEYS */;

-- Dumping data for table promotech.usuario: ~0 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
