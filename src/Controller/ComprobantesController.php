<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comprobantes Controller
 *
 * @property \App\Model\Table\ComprobantesTable $Comprobantes
 *
 * @method \App\Model\Entity\Comprobante[] paginate($object = null, array $settings = [])
 */
class ComprobantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $comprobantes = $this->paginate($this->Comprobantes);

        $this->set(compact('comprobantes'));
        $this->set('_serialize', ['comprobantes']);
    }
    public function vercomprobantecliente($id = null)
    {
        $comprobantes = $this->paginate($this->Comprobantes->find('all',array('conditions'=> array('Comprobantes.COD_CLIENT'=>$id))));
        // pr($comprobantes);
        $this->set(compact('comprobantes'));
        $this->set('_serialize', ['comprobantes']);
    }
    public function dashboard($id = null)
    {
        // $comprobantes = $this->paginate($this->Comprobantes->find('all',array('conditions'=> array('Comprobantes.COD_CLIENT'=>$id))));
        // // pr($comprobantes);
        // $this->set(compact('comprobantes'));
        // $this->set('_serialize', ['comprobantes']);
    }
    /**
     * View method
     *
     * @param string|null $id Comprobante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comprobante = $this->Comprobantes->get($id, [
            'contain' => []
        ]);

        $this->set('comprobante', $comprobante);
        $this->set('_serialize', ['comprobante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comprobante = $this->Comprobantes->newEntity();
        if ($this->request->is('post')) {
            $comprobante = $this->Comprobantes->patchEntity($comprobante, $this->request->getData());
            if ($this->Comprobantes->save($comprobante)) {
                $this->Flash->success(__('The comprobante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprobante could not be saved. Please, try again.'));
        }
        $this->set(compact('comprobante'));
        $this->set('_serialize', ['comprobante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comprobante id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comprobante = $this->Comprobantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comprobante = $this->Comprobantes->patchEntity($comprobante, $this->request->getData());
            if ($this->Comprobantes->save($comprobante)) {
                $this->Flash->success(__('The comprobante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprobante could not be saved. Please, try again.'));
        }
        $this->set(compact('comprobante'));
        $this->set('_serialize', ['comprobante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comprobante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comprobante = $this->Comprobantes->get($id);
        if ($this->Comprobantes->delete($comprobante)) {
            $this->Flash->success(__('The comprobante has been deleted.'));
        } else {
            $this->Flash->error(__('The comprobante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
