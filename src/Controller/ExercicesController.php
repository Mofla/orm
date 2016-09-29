<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;

/**
 * Movies Controller
 *
 * @property \App\Model\Table\MoviesTable $Movies
 */

class ExercicesController extends AppController
{
    public function eazy()
    {
        $this->loadModel('Movies');
        $this->loadModel('Actors');

        $movies = $this->Movies->find()->contain(['Categories','Directors','Actors']);

        $exo1 = $this->Movies->find()->where(['release_date' => '1984']);
        $exo2 = $this->Movies->find()->where(['release_date >' => '2000']);
        $exo3 = $this->Movies->find()->where(['budget <' => 1000000]);
        $exo4 = $this->Movies->find()->where(function($q){
            return $q->between('budget',10000000,30000000);
        });
        $exo5 = $this->Movies->find()->where(function($q){
            return $q->between('release_date','1980','1990');
        })->innerJoinWith('Categories',function($q){
            return $q->where(['Categories.name' => 'Comédie']);
        });
        $exo6 = $this->Actors->find()->matching('Movies')->select([
            'firstname',
            'lastname',
            'nb' => 'count(Movies.id)'
        ])->group('Actors.id HAVING COUNT(nb) > 1');
        $exo7 = $this->Movies->find()->where(['title LIKE' => 'P%']);
        $exo8 = $this->Movies->find()->matching('Directors')->where(['lastname' => 'Coppola'])->count('title');
        $exo9 = $this->Movies->find()->matching('Categories')->where(['OR'=>[
            ['name' => 'Guerre'],
            ['name' => 'Historique']
        ]]);
        $exo10 = $this->Movies->find()->matching('Directors')->where(['lastname' => 'Coppola'])->sumOf('budget');
        $exo11 = $this->Movies->find()->matching('Categories')->where(['OR' => [
            ['name' => 'Comedie'],
            ['name' => 'Horreur']
        ]])->having('count(Categories.id) > 1');

        $this->set(compact('movies'));
        $this->set('exo1',$exo1);
        $this->set('exo2',$exo2);
        $this->set('exo3',$exo3);
        $this->set('exo4',$exo4);
        $this->set('exo5',$exo5);
        $this->set('exo6',$exo6);
        $this->set('exo7',$exo7);
        $this->set('exo8',$exo8);
        $this->set('exo9',$exo9);
        $this->set('exo10',$exo10);
        $this->set('exo11',$exo11);
    }
}