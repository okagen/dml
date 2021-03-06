<?php
App::uses('AppModel', 'Model');
/**
 * Dmolo Model
 *
 * @property DmlType $DmlType
 * @property LayoutType $LayoutType
 */
class Dmolo extends AppModel {


	//並び順を降順に(Controllerの'Paginator'で設定している)
    //public $order = array('Dmolo.id desc');
    public $actsAs = array('Search.Searchable');
    //検索条件を設定
    //methodを設定せず、dml_type_idで完全一致の絞り込みをする
    public $filterArgs = array(
        'dml_type_id' => array('type' => 'value'),
        'layout_type_id' => array('type' => 'value'),
        'person_num' => array('type' => 'value'),
    );

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
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dml_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'layout_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'DmlType' => array(
			'className' => 'DmlType',
			'foreignKey' => 'dml_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LayoutType' => array(
			'className' => 'LayoutType',
			'foreignKey' => 'layout_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
