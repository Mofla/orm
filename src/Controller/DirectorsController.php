<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Directors Controller
 *
 * @property \App\Model\Table\DirectorsTable $Directors
 */
class DirectorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $directors = $this->paginate($this->Directors);

        $this->set(compact('directors'));
        $this->set('_serialize', ['directors']);
    }

    /**
     * View method
     *
     * @param string|null $id Director id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $director = $this->Directors->get($id, [
            'contain' => ['Movies']
        ]);

        $this->set('director', $director);
        $this->set('_serialize', ['director']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $director = $this->Directors->newEntity();
        if ($this->request->is('post')) {
            $director = $this->Directors->patchEntity($director, $this->request->data);
            if ($this->Directors->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The director could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('director'));
        $this->set('_serialize', ['director']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Director id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $director = $this->Directors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $director = $this->Directors->patchEntity($director, $this->request->data);
            if ($this->Directors->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The director could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('director'));
        $this->set('_serialize', ['director']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Director id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $director = $this->Directors->get($id);
        if ($this->Directors->delete($director)) {
            $this->Flash->success(__('The director has been deleted.'));
        } else {
            $this->Flash->error(__('The director could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
