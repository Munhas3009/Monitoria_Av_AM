<?php

namespace App\Controller\DSCM;

use App\Controller\AppController;


/**
 * Unidades Controller
 *
 * @property \App\Model\Table\UnidadesTable $Unidades
 *
 * @method \App\Model\Entity\Unidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        $keyword= $this->request->query('keyword');
        
        if(!empty($keyword)){
            $this->paginate = [
                
                'conditions'=>['name LIKE'=>'%'.$keyword.'%'],
            'order'=>['unidades.id'=>'DESC'],
            'limit'=>10
                
            ];
        }
                
        $this->paginate = [
            'contain' => ['Categories', 'Distritos']
        ];
        $unidades = $this->paginate($this->Unidades);

        $this->set(compact('unidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    
     public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    
    public function view($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => ['Categories', 'Distritos', 'Campanhas', 'Tratamentos']
        ]);
        
        $this->viewBuilder()->options([
                'pdfConfig' => [
                    'orientation' => 'portrait',
                    'filename' => 'Unidade_' . $id.'pdf'
                ]
            ]);

        $this->set('unidade', $unidade);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidade = $this->Unidades->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->getData());
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
        }
        $categories = $this->Unidades->Categories->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'categories', 'distritos'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->getData());
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
        }
        $categories = $this->Unidades->Categories->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'categories', 'distritos'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Unidades->get($id);
        if ($this->Unidades->delete($unidade)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Unidade'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Unidade'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
