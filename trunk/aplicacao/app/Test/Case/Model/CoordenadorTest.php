<?php
App::uses('Coordenador', 'Model');

/**
 * Coordenador Test Case
 *
 */
class CoordenadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coordenador',
		'app.pessoa',
		'app.promotor',
		'app.campanha_promotor',
		'app.campanha',
		'app.cliente',
		'app.campanha_coordenador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coordenador = ClassRegistry::init('Coordenador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coordenador);

		parent::tearDown();
	}

}
