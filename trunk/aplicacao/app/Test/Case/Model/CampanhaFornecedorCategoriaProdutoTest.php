<?php
App::uses('CampanhaFornecedorCategoriaProduto', 'Model');

/**
 * CampanhaFornecedorCategoriaProduto Test Case
 *
 */
class CampanhaFornecedorCategoriaProdutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.campanha_fornecedor_categoria_produto',
		'app.campanha_fornecedor',
		'app.campanha',
		'app.cliente',
		'app.campanha_promotor',
		'app.promotor',
		'app.pessoa',
		'app.coordenador',
		'app.campanha_coordenador',
		'app.fornecedor',
		'app.categoria_produto_fornecedor',
		'app.categoria_produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CampanhaFornecedorCategoriaProduto = ClassRegistry::init('CampanhaFornecedorCategoriaProduto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CampanhaFornecedorCategoriaProduto);

		parent::tearDown();
	}

}
