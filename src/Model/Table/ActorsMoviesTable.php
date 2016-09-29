<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorsMovies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Actors
 * @property \Cake\ORM\Association\BelongsTo $Movies
 *
 * @method \App\Model\Entity\ActorsMovie get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorsMovie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActorsMovie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorsMovie|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorsMovie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsMovie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorsMovie findOrCreate($search, callable $callback = null)
 */
class ActorsMoviesTable extends Table
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

        $this->table('actors_movies');
        $this->displayField('actor_id');
        $this->primaryKey(['actor_id', 'movie_id']);

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Movies', [
            'foreignKey' => 'movie_id',
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
        $rules->add($rules->existsIn(['actor_id'], 'Actors'));
        $rules->add($rules->existsIn(['movie_id'], 'Movies'));

        return $rules;
    }
}
