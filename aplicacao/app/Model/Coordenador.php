<?php
App::uses('AppModel', 'Model');
/**
 * Coordenador Model
 *
 * @property Pessoa $Pessoa
 * @property CampanhaCoordenador $CampanhaCoordenador
 */
class Coordenador extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pessoa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Você deve fornecer um valor numerico apenas',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'id',
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
		'CampanhaCoordenador' => array(
			'className' => 'CampanhaCoordenador',
			'foreignKey' => 'coordenador_id',
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
