<?php
App::uses('Campanha', 'Model');

/**
 * Campanha Test Case
 *
 */
class CampanhaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.campanha',
		'app.cliente',
		'app.campanha_promotor',
		'app.promotor',
		'app.pessoa',
		'app.coordenador',
		'app.campanha_coordenador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Campanha = ClassRegistry::init('Campanha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Campanha);

		parent::tearDown();
	}

}
