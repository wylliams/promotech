<?php
App::uses('CampanhaPromotor', 'Model');

/**
 * CampanhaPromotor Test Case
 *
 */
class CampanhaPromotorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.campanha_promotor',
		'app.campanha',
		'app.cliente',
		'app.campanha_coordenador',
		'app.coordenador',
		'app.pessoa',
		'app.promotor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CampanhaPromotor = ClassRegistry::init('CampanhaPromotor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CampanhaPromotor);

		parent::tearDown();
	}

}
