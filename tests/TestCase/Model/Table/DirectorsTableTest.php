<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DirectorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DirectorsTable Test Case
 */
class DirectorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DirectorsTable
     */
    public $Directors;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Directors') ? [] : ['className' => 'App\Model\Table\DirectorsTable'];
        $this->Directors = TableRegistry::get('Directors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Directors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
