<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriesMovies Controller
 *
 * @property \App\Model\Table\CategoriesMoviesTable $CategoriesMovies
 */
class CategoriesMoviesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Movies', 'Categories']
        ];
        $categoriesMovies = $this->paginate($this->CategoriesMovies);

        $this->set(compact('categoriesMovies'));
        $this->set('_serialize', ['categoriesMovies']);
    }

    /**
     * View method
     *
     * @param string|null $id Categories Movie id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriesMovie = $this->CategoriesMovies->get($id, [
            'contain' => ['Movies', 'Categories']
        ]);

        $this->set('categoriesMovie', $categoriesMovie);
        $this->set('_serialize', ['categoriesMovie']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriesMovie = $this->CategoriesMovies->newEntity();
        if ($this->request->is('post')) {
            $categoriesMovie = $this->CategoriesMovies->patchEntity($categoriesMovie, $this->request->data);
            if ($this->CategoriesMovies->save($categoriesMovie)) {
                $this->Flash->success(__('The categories movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories movie could not be saved. Please, try again.'));
            }
        }
        $movies = $this->CategoriesMovies->Movies->find('list', ['limit' => 200]);
        $categories = $this->CategoriesMovies->Categories->find('list', ['limit' => 200]);
        $this->set(compact('categoriesMovie', 'movies', 'categories'));
        $this->set('_serialize', ['categoriesMovie']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categories Movie id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriesMovie = $this->CategoriesMovies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriesMovie = $this->CategoriesMovies->patchEntity($categoriesMovie, $this->request->data);
            if ($this->CategoriesMovies->save($categoriesMovie)) {
                $this->Flash->success(__('The categories movie has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories movie could not be saved. Please, try again.'));
            }
        }
        $movies = $this->CategoriesMovies->Movies->find('list', ['limit' => 200]);
        $categories = $this->CategoriesMovies->Categories->find('list', ['limit' => 200]);
        $this->set(compact('categoriesMovie', 'movies', 'categories'));
        $this->set('_serialize', ['categoriesMovie']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categories Movie id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriesMovie = $this->CategoriesMovies->get($id);
        if ($this->CategoriesMovies->delete($categoriesMovie)) {
            $this->Flash->success(__('The categories movie has been deleted.'));
        } else {
            $this->Flash->error(__('The categories movie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
