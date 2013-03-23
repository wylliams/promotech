<?php
App::uses('AppModel', 'Model');
/**
 * CategoriaProduto Model
 *
 * @property CategoriaProdutoFornecedor $CategoriaProdutoFornecedor
 * @property CampanhaFornecedorCategoriaProduto $CampanhaFornecedorCategoriaProduto
 */
class CategoriaProduto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Você deve preencher este campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CategoriaProdutoFornecedor' => array(
			'className' => 'CategoriaProdutoFornecedor',
			'foreignKey' => 'categoria_produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CampanhaFornecedorCategoriaProduto' => array(
			'className' => 'CampanhaFornecedorCategoriaProduto',
			'foreignKey' => 'categoria_produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
