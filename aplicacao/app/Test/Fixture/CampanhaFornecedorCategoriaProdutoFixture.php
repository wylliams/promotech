<?php
/**
 * CampanhaFornecedorCategoriaProdutoFixture
 *
 */
class CampanhaFornecedorCategoriaProdutoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'campanha_fornecedor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'categoria_produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'faixa_valor' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_campanha_fornecedor_categoria_produto_campanha_fornecedo_idx' => array('column' => 'campanha_fornecedor_id', 'unique' => 0),
			'fk_categoria_produto_campanha_categoria_produto1_idx' => array('column' => 'categoria_produto_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'campanha_fornecedor_id' => 1,
			'categoria_produto_id' => 1,
			'faixa_valor' => 'Lorem ipsum dolor sit amet'
		),
	);

}
