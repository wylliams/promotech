<?php
App::uses('CampanhaCoordenador', 'Model');

/**
 * CampanhaCoordenador Test Case
 *
 */
class CampanhaCoordenadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.campanha_coordenador',
		'app.campanha',
		'app.cliente',
		'app.campanha_promotor',
		'app.promotor',
		'app.pessoa',
		'app.coordenador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CampanhaCoordenador = ClassRegistry::init('CampanhaCoordenador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CampanhaCoordenador);

		parent::tearDown();
	}

}
