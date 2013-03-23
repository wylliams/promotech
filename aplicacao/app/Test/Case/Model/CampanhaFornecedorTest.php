<?php
App::uses('CampanhaFornecedor', 'Model');

/**
 * CampanhaFornecedor Test Case
 *
 */
class CampanhaFornecedorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->CampanhaFornecedor = ClassRegistry::init('CampanhaFornecedor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CampanhaFornecedor);

		parent::tearDown();
	}

}
