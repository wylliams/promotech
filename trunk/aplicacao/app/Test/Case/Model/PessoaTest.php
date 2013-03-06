<?php
App::uses('Pessoa', 'Model');

/**
 * Pessoa Test Case
 *
 */
class PessoaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pessoa',
		'app.coordenador',
		'app.campanha_coordenador',
		'app.campanha',
		'app.cliente',
		'app.campanha_promotor',
		'app.promotor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pessoa = ClassRegistry::init('Pessoa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pessoa);

		parent::tearDown();
	}

}
