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
        $movies = $this->Movies->find()->contain(['Categories','Directors','Actors']);

        $movies = $this->paginate($movies);
        $this->set(compact('movies'));
    }
}