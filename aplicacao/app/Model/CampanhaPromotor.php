<?php
App::uses('AppModel', 'Model');
/**
 * CampanhaPromotor Model
 *
 * @property Campanha $Campanha
 * @property Promotor $Promotor
 */
class CampanhaPromotor extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'campanha_promotor';


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
		'Promotor' => array(
			'className' => 'Promotor',
			'foreignKey' => 'promotor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
