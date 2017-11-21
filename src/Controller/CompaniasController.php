<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Companias Controller
 *
 * @property \App\Model\Table\CompaniasTable $Companias
 *
 * @method \App\Model\Entity\Compania[] paginate($object = null, array $settings = [])
 */
class CompaniasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $companias = $this->paginate($this->Companias);

        $this->set(compact('companias'));
        $this->set('_serialize', ['companias']);
    }

    /**
     * View method
     *
     * @param string|null $id Compania id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compania = $this->Companias->get($id, [
            'contain' => []
        ]);

        $this->set('compania', $compania);
        $this->set('_serialize', ['compania']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compania = $this->Companias->newEntity();
        if ($this->request->is('post')) {
            $compania = $this->Companias->patchEntity($compania, $this->request->getData());
            if ($this->Companias->save($compania)) {
                $this->Flash->success(__('The compania has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compania could not be saved. Please, try again.'));
        }
        $this->set(compact('compania'));
        $this->set('_serialize', ['compania']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Compania id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compania = $this->Companias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compania = $this->Companias->patchEntity($compania, $this->request->getData());
            if ($this->Companias->save($compania)) {
                $this->Flash->success(__('The compania has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compania could not be saved. Please, try again.'));
        }
        $this->set(compact('compania'));
        $this->set('_serialize', ['compania']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Compania id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compania = $this->Companias->get($id);
        if ($this->Companias->delete($compania)) {
            $this->Flash->success(__('The compania has been deleted.'));
        } else {
            $this->Flash->error(__('The compania could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
