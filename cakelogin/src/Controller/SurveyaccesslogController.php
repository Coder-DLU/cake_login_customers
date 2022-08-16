<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Surveyaccesslog Controller
 *
 * @property \App\Model\Table\SurveyaccesslogTable $Surveyaccesslog
 * @method \App\Model\Entity\Surveyaccesslog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SurveyaccesslogController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $surveyaccesslog = $this->paginate($this->Surveyaccesslog);

        $this->set(compact('surveyaccesslog'));
    }

    /**
     * View method
     *
     * @param string|null $id Surveyaccesslog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $surveyaccesslog = $this->Surveyaccesslog->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('surveyaccesslog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $surveyaccesslog = $this->Surveyaccesslog->newEmptyEntity();
        if ($this->request->is('post')) {
            $surveyaccesslog = $this->Surveyaccesslog->patchEntity($surveyaccesslog, $this->request->getData());
            if ($this->Surveyaccesslog->save($surveyaccesslog)) {
                $this->Flash->success(__('The surveyaccesslog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The surveyaccesslog could not be saved. Please, try again.'));
        }
        $this->set(compact('surveyaccesslog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Surveyaccesslog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $surveyaccesslog = $this->Surveyaccesslog->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $surveyaccesslog = $this->Surveyaccesslog->patchEntity($surveyaccesslog, $this->request->getData());
            if ($this->Surveyaccesslog->save($surveyaccesslog)) {
                $this->Flash->success(__('The surveyaccesslog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The surveyaccesslog could not be saved. Please, try again.'));
        }
        $this->set(compact('surveyaccesslog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Surveyaccesslog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $surveyaccesslog = $this->Surveyaccesslog->get($id);
        if ($this->Surveyaccesslog->delete($surveyaccesslog)) {
            $this->Flash->success(__('The surveyaccesslog has been deleted.'));
        } else {
            $this->Flash->error(__('The surveyaccesslog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
