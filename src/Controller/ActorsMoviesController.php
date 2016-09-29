<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActorsMovies Controller
 *
 * @property \App\Model\Table\ActorsMoviesTable $ActorsMovies
 */
class ActorsMoviesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Actors', 'Movies']
        ];
        $actorsMovies = $this->paginate($this->ActorsMovies);

        $this->set(compact('actorsMovies'));
        $this->set('_serialize', ['actorsMovies']);
    }

    /**
     * View method
     *
     * @param string|null $id Actors Movie id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actorsMovie = $this->ActorsMovies->get($id, [
            'contain' => ['Actors', 'Movies']
        ]);

        $this->set('actorsMovie', $actorsMovie);
        $this->set('_serialize', ['actorsMovie']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actorsMovie = $this->ActorsMovies->newEntity();
        if ($this->request->is('post')) {
            $actorsMovie = $this->ActorsMovies->patchEntity($actorsMovie, $this->request->data);
            if ($this->ActorsMovies->save($actorsMovie)) {
                $this->Flash->success(__('The actors movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actors movie could not be saved. Please, try again.'));
            }
        }
        $actors = $this->ActorsMovies->Actors->find('list', ['limit' => 200]);
        $movies = $this->ActorsMovies->Movies->find('list', ['limit' => 200]);
        $this->set(compact('actorsMovie', 'actors', 'movies'));
        $this->set('_serialize', ['actorsMovie']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actors Movie id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actorsMovie = $this->ActorsMovies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actorsMovie = $this->ActorsMovies->patchEntity($actorsMovie, $this->request->data);
            if ($this->ActorsMovies->save($actorsMovie)) {
                $this->Flash->success(__('The actors movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actors movie could not be saved. Please, try again.'));
            }
        }
        $actors = $this->ActorsMovies->Actors->find('list', ['limit' => 200]);
        $movies = $this->ActorsMovies->Movies->find('list', ['limit' => 200]);
        $this->set(compact('actorsMovie', 'actors', 'movies'));
        $this->set('_serialize', ['actorsMovie']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actors Movie id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actorsMovie = $this->ActorsMovies->get($id);
        if ($this->ActorsMovies->delete($actorsMovie)) {
            $this->Flash->success(__('The actors movie has been deleted.'));
        } else {
            $this->Flash->error(__('The actors movie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
