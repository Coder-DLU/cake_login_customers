<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Companys Controller
 *
 * @property \App\Model\Table\CompanysTable $Companys
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $companys = $this->paginate($this->Companys);

        $this->set(compact('companys'));
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post', 'validata'=>'update']);
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $user = $this->request->getAttribute('identity');
            if (!$user->del_flg) {
                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Customers',
                    'action' => 'index',
                ]);

                return $this->redirect($redirect);
            }
            else {
                $this->Flash->error(__('Incorrect login information'));
                return $this->redirect('/companys/logout');
            }
            
        }

        
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Incorrect login information'));
        }
   
        // $this->request->allowMethod(['get', 'post']);
        // $result = $this->Authentication->getResult();
        // // print_r($result);
        // // regardless of POST or GET, redirect if user is logged in
        // if ($result->isValid()) {
        //     $user = $this->request->getAttribute('identity');
        //     if (!$user->del_flg) {
        //         // redirect to /articles after login success
        //         $redirect = $this->request->getQuery('redirect', [
        //             'controller' => 'Customers',
        //             'action' => 'index',
        //         ]);
        //         return $this->redirect($redirect);
        //     }else {
        //         $this->Flash->error(__('Incorrect login information'));
        //         return $this->redirect('/companys/logout');
        //     }

        //     // // redirect to /articles after login success
        //     // $redirect = $this->request->getQuery('redirect', [
        //     //     'controller' => 'Customers',
        //     //     'action' => 'index',
        //     // ]);
        //     // return $this->redirect($redirect);
        // }
        // // display error if user submitted and authentication failed
        // if ($this->request->is('post') && !$result->isValid()) {
        //     $this->Flash->error(__('Incorrect login information'));
        // }
    }
    // in src/Controller/UsersController.php
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Companys', 'action' => 'login']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $company = $this->Companys->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('company'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $company = $this->Companys->newEmptyEntity();
        if ($this->request->is('post')) {
            $company = $this->Companys->patchEntity($company, $this->request->getData());
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $this->set(compact('company'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $company = $this->Companys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companys->patchEntity($company, $this->request->getData());
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $this->set(compact('company'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companys->get($id);
        if ($this->Companys->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
