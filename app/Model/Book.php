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
            'title' => array(
                'minlength' => array(
                    'rule' => array('minlength', 1),
                    'message' => 'Title must be at least one character long',
                    //'allowEmpty' => false,
                    //'required' => true,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                )
            )
        );
        parent::__construct($id, $table, $ds);
    }

    public function test() {
        return $this->find('all');
    }
}
