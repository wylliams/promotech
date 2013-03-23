<?php
App::uses('AppModel', 'Model');
/**
 * CategoriaProdutoFornecedor Model
 *
 * @property Fornecedor $Fornecedor
 * @property CategoriaProduto $CategoriaProduto
 */
class CategoriaProdutoFornecedor extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Fornecedor' => array(
			'className' => 'Fornecedor',
			'foreignKey' => 'fornecedor_id',
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
