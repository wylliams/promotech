<?php
App::uses('Fornecedor', 'Model');

/**
 * Fornecedor Test Case
 *
 */
class FornecedorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fornecedor',
		'app.campanha_fornecedor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fornecedor = ClassRegistry::init('Fornecedor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fornecedor);

		parent::tearDown();
	}

}
