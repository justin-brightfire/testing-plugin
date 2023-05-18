<?php

class BookCptTest extends \Codeception\TestCase\WPTestCase
{
    public function setUp() : void
    {
        parent::setUp();
    }

    public function tearDown() : void
    {
        parent::tearDown();
    }

    // tests
    public function test_book_cpt()
    {
        $this->assertNotFalse(has_action('init', 'book_test_plugin_register_books_cpt'));

        $registeredPostTypes = get_post_types();
        $this->assertIsArray($registeredPostTypes);
        $this->assertArrayHasKey('book', $registeredPostTypes);
    }

}