<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Directors
 * @property \Cake\ORM\Association\BelongsToMany $Actors
 * @property \Cake\ORM\Association\BelongsToMany $Categories
 *
 * @method \App\Model\Entity\Movie get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Movie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movie|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movie findOrCreate($search, callable $callback = null)
 */
class MoviesTable extends Table
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

        $this->table('movies');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Directors', [
            'foreignKey' => 'director_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Actors', [
            'foreignKey' => 'movie_id',
            'targetForeignKey' => 'actor_id',
            'joinTable' => 'actors_movies'
        ]);
        $this->belongsToMany('Categories', [
            'foreignKey' => 'movie_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_movies'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('release_date', 'create')
            ->notEmpty('release_date');

        $validator
            ->integer('budget')
            ->requirePresence('budget', 'create')
            ->notEmpty('budget');

        return $validator;
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
        $rules->add($rules->existsIn(['director_id'], 'Directors'));

        return $rules;
    }
}
