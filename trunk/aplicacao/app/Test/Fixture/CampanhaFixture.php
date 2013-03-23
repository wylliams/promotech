<?php
/**
 * CampanhaFixture
 *
 */
class CampanhaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'local' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hora_inicio' => array('type' => 'time', 'null' => true, 'default' => null),
		'hora_fim' => array('type' => 'time', 'null' => true, 'default' => null),
		'data_inicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_fim' => array('type' => 'date', 'null' => true, 'default' => null),
		'valor_orcado' => array('type' => 'float', 'null' => true, 'default' => null),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'deletado' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
			'fk_campanha_cliente1_idx' => array('column' => 'cliente_id', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'local' => 'Lorem ipsum dolor sit amet',
			'hora_inicio' => '12:48:27',
			'hora_fim' => '12:48:27',
			'data_inicio' => '2013-03-21',
			'data_fim' => '2013-03-21',
			'valor_orcado' => 1,
			'cliente_id' => 1,
			'deletado' => 0
		),
	);

}
