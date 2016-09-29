<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActorsMoviesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActorsMoviesTable Test Case
 */
class ActorsMoviesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActorsMoviesTable
     */
    public $ActorsMovies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actors_movies',
        'app.actors',
        'app.movies',
        'app.directors',
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
        $config = TableRegistry::exists('ActorsMovies') ? [] : ['className' => 'App\Model\Table\ActorsMoviesTable'];
        $this->ActorsMovies = TableRegistry::get('ActorsMovies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActorsMovies);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
