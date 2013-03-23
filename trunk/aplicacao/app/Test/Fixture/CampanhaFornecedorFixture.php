<?php
/**
 * CampanhaFornecedorFixture
 *
 */
class CampanhaFornecedorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'campanha_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'fornecedor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_campanha_fornecedor_campanha1_idx' => array('column' => 'campanha_id', 'unique' => 0),
			'fk_campanha_fornecedor_fornecedor1_idx' => array('column' => 'fornecedor_id', 'unique' => 0)
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
			'campanha_id' => 1,
			'fornecedor_id' => 1
		),
	);

}
