<?php
App::uses('AppModel', 'Model');
/**
 * CampanhaFornecedor Model
 *
 * @property Campanha $Campanha
 * @property Fornecedor $Fornecedor
 * @property CampanhaFornecedorCategoriaProduto $CampanhaFornecedorCategoriaProduto
 */
class CampanhaFornecedor extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Campanha' => array(
			'className' => 'Campanha',
			'foreignKey' => 'campanha_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fornecedor' => array(
			'className' => 'Fornecedor',
			'foreignKey' => 'fornecedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CampanhaFornecedorCategoriaProduto' => array(
			'className' => 'CampanhaFornecedorCategoriaProduto',
			'foreignKey' => 'campanha_fornecedor_id',
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
