<?php
App::uses('AppModel', 'Model');
/**
 * CampanhaFornecedorCategoriaProduto Model
 *
 * @property CampanhaFornecedor $CampanhaFornecedor
 * @property CategoriaProduto $CategoriaProduto
 */
class CampanhaFornecedorCategoriaProduto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CampanhaFornecedor' => array(
			'className' => 'CampanhaFornecedor',
			'foreignKey' => 'campanha_fornecedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CategoriaProduto' => array(
			'className' => 'CategoriaProduto',
			'foreignKey' => 'categoria_produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
