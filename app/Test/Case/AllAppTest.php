<?php
/**
 * AllAppTest class
 *
 * This test group will run all core class tests
 *
 * @package       Cake.Test.Case
 */
class AllAppTest extends PHPUnit_Framework_TestSuite {

/**
 * suite method, defines tests for this suite.
 *
 * @return void
 */
    public static function suite() {
        $path = APP . 'Test' . DS . 'Case' . DS;
        $suite = new CakeTestSuite('All tests');

        $suite->addTestDirectory($path . 'Model' . DS);
        return $suite;
    }
}
