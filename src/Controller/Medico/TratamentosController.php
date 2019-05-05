<?php
namespace App\Controller\Medico;

use App\Controller\AppController;

/**
 * Tratamentos Controller
 *
 * @property \App\Model\Table\TratamentosTable $Tratamentos
 *
 * @method \App\Model\Entity\Tratamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TratamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Unidades', 'Users', 'Pacientes', 'Diagnosticos']
        ];
        $tratamentos = $this->paginate($this->Tratamentos);

        $this->set(compact('tratamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => ['Unidades', 'Users', 'Pacientes', 'Diagnosticos']
        ]);

        $this->set('tratamento', $tratamento);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tratamento = $this->Tratamentos->newEntity();
        if ($this->request->is('post')) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());
            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'pacientes', 'diagnosticos'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());
            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'pacientes', 'diagnosticos'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tratamento = $this->Tratamentos->get($id);
        if ($this->Tratamentos->delete($tratamento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tratamento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tratamento'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
    /*
     * Vamos desenvolver a funcao search do tratamento, com vista a buscar
     * na BD os tratamentos efectuados em funcao das nossas necessidades
     * 
     */
    public function search(){
        
        $this->request->allowMethod('ajax');
        $keyword=$this->request->query ('keyword');
        $query=$this->Tratamentos->find('all',[
            
        'conditions'=>['name LIKE'=>'%'.$keyword.'%'],
            'order'=>['Tratamentos.id'=>'DESC'],
            'limit'=>10
            ]);
            $this->set('tratamentos',$thi->paginate($query));
            $this->set('_serialize',['tratamentos']);
        
    }
}
