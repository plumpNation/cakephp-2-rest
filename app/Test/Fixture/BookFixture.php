<?php
/**
 * BookFixture
 *
 */
class BookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
    public $fields = array(

        'id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'key' => 'primary'
        ),

        'title' => array(
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'charset' => 'utf8'
        ),

        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1
            )
        ),

        'tableParameters' => array(
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
            'engine' => 'InnoDB'
        )
    );

/**
 * Records
 *
 * @var array
 */
    public $records = array(
        array(
            'id' => 1,
            'title' => 'Moby Dick'
        ),
        array(
            'id' => 2,
            'title' => 'Robinson Crusoe'
        ),
        array(
            'id' => 3,
            'title' => 'Inspector Morse'
        ),
    );

}