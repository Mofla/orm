<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriesMovies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Movies
 * @property \Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\CategoriesMovie get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriesMovie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriesMovie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesMovie|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriesMovie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesMovie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesMovie findOrCreate($search, callable $callback = null)
 */
class CategoriesMoviesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('categories_movies');
        $this->displayField('movie_id');
        $this->primaryKey(['movie_id', 'category_id']);

        $this->belongsTo('Movies', [
            'foreignKey' => 'movie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['movie_id'], 'Movies'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
