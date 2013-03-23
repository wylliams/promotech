<?php
/**
 * CategoriaProdutoFornecedorFixture
 *
 */
class CategoriaProdutoFornecedorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fornecedor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'categoria_produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_categoria_produto_fornecedor_fornecedor1_idx' => array('column' => 'fornecedor_id', 'unique' => 0),
			'fk_categoria_produto_fornecedor_categoria_produto1_idx' => array('column' => 'categoria_produto_id', 'unique' => 0)
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
			'fornecedor_id' => 1,
			'categoria_produto_id' => 1
		),
	);

}
