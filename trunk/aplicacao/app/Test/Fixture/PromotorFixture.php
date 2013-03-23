<?php
/**
 * PromotorFixture
 *
 */
class PromotorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'categoria' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'altura' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'manequim' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'peso' => array('type' => 'integer', 'null' => false, 'default' => null),
		'numero_calcado' => array('type' => 'integer', 'null' => false, 'default' => null),
		'deletado' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1)
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
			'categoria' => 'Lorem ipsum dolor sit amet',
			'altura' => 'Lorem ipsum dolor sit amet',
			'manequim' => 'Lorem ipsum dolor sit amet',
			'peso' => 1,
			'numero_calcado' => 1,
			'deletado' => 1
		),
	);

}
