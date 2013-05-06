<?php
App::uses('AppModel', 'Model');
/**
 * Book Model
 *
 */
class Book extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate;

    public function __construct($id = false, $table = null, $ds = null) {
        $this->validate = array(

            'id' => array(

                'uuid' => array(
                    'rule' => array('uuid'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),

                'numeric' => array(
                    'rule' => array('numeric'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),

                'naturalnumber' => array(
                    'rule' => array('naturalnumber'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),

            'title' => array(

                'alphanumeric' => array(
                    'rule' => array('alphanumeric'),
                    'message' => 'Title must be ',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),

                'minlength' => array(
                    'rule' => array('minlength'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
        );
        parent::__construct($id, $table, $ds);
    }

    public function test() {
        return $this->find('all');
    }
}
