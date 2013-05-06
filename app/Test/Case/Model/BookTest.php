<?php
App::uses('Book', 'Model');

/**
 * Book Test Case
 *
 */
class BookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
    public $fixtures = array('app.book');

/**
 * setUp method
 *
 * @return void
 */
    public function setUp() {
        parent::setUp();
        $this->Book = ClassRegistry::init('Book');
    }

/**
 * tearDown method
 *
 * @return void
 */
    public function tearDown() {
        unset($this->Book);
        parent::tearDown();
    }

    public function testFixture() {
        $books = $this->Book->test();

        $firstFixtureMember = $books[0]['Book'];
        $this->assertEquals('Moby Dick', $firstFixtureMember['title']);
    }
}
