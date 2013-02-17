<?php
App::uses('AppModel', 'Model');
/**
 * CampanhaCoordenador Model
 *
 * @property Campanha $Campanha
 * @property Coordenador $Coordenador
 */
class CampanhaCoordenador extends AppModel {


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
		'Coordenador' => array(
			'className' => 'Coordenador',
			'foreignKey' => 'coordenador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
