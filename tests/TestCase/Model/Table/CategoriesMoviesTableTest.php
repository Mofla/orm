<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriesMoviesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriesMoviesTable Test Case
 */
class CategoriesMoviesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriesMoviesTable
     */
    public $CategoriesMovies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categories_movies',
        'app.movies',
        'app.directors',
        'app.actors',
        'app.actors_movies',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriesMovies') ? [] : ['className' => 'App\Model\Table\CategoriesMoviesTable'];
        $this->CategoriesMovies = TableRegistry::get('CategoriesMovies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriesMovies);

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
