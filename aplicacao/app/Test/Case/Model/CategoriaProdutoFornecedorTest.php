<?php
App::uses('CategoriaProdutoFornecedor', 'Model');

/**
 * CategoriaProdutoFornecedor Test Case
 *
 */
class CategoriaProdutoFornecedorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria_produto_fornecedor',
		'app.fornecedor',
		'app.campanha_fornecedor',
		'app.categoria_produto',
		'app.campanha_fornecedor_categoria_produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriaProdutoFornecedor = ClassRegistry::init('CategoriaProdutoFornecedor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriaProdutoFornecedor);

		parent::tearDown();
	}

}
