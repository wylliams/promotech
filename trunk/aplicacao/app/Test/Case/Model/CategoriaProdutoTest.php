<?php
App::uses('CategoriaProduto', 'Model');

/**
 * CategoriaProduto Test Case
 *
 */
class CategoriaProdutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria_produto',
		'app.categoria_produto_fornecedor',
		'app.campanha_fornecedor_categoria_produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriaProduto = ClassRegistry::init('CategoriaProduto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriaProduto);

		parent::tearDown();
	}

}
