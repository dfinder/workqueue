<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 * @property User $User
 * @property Query $Query
 */
class Task extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'timeStart' => array(
			'time' => array(
				'rule' => array('timestamp'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'timeExpected' => array(
			'time' => array(
				'rule' => array('timestamp'),
				//'message' => 'Your custom message here',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Query' => array(
			'className' => 'Query',
			'foreignKey' => 'query_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
