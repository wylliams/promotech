<?php
App::uses('Promotor', 'Model');

/**
 * Promotor Test Case
 *
 */
class PromotorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promotor',
		'app.campanha_promotor',
		'app.campanha',
		'app.cliente',
		'app.campanha_coordenador',
		'app.coordenador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promotor = ClassRegistry::init('Promotor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promotor);

		parent::tearDown();
	}

}
