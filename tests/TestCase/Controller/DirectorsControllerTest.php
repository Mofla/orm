<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DirectorsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DirectorsController Test Case
 */
class DirectorsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.directors',
        'app.movies',
        'app.actors',
        'app.actors_movies',
        'app.categories',
        'app.categories_movies'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}