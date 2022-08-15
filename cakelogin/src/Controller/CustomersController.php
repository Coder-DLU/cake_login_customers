<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key =  preg_replace('/\s+/', '', (string)$this->request->getQuery('key1'));
         $rule = "id";
         $seller_id = $this->request->getQuery('seller_id');
         $search_column = $this->request->getQuery('search_column');
         if ($search_column) {
             switch ($search_column) {
                 case '1':
                     $rule = 'id';
                     break;
                 case '2':
                     $rule = "REPLACE(concat(customers.first_name,customers.last_name),' ', '')";
                     break;
                 case '3':
                     $rule = 'phone_number';
                     break;
                 case '4':
                     $rule = 'email';
                     break;
                 case '5':
                     $rule = 'address';
                     break;
             }
         }
         // trường hợp không chọn seller
         if ($seller_id == 0) {
             if ($key) {
                 $query =  $this->Customers->find('all')->where(['And' =>['delete_flg'=>'0',$rule . ' like "%' . $key . '%"','created_by'=>$_SESSION['STAFF_SESSION']]]);
             } else {
                 $query =  $this->Customers->find('all')->where(['And' => ['delete_flg'=>'0','created_by'=>$_SESSION['STAFF_SESSION']]])->order(['updated'=>'DESC']);
             }
         }
         // trường hợp có chọn seller
         else {
             if ($key) {
                 $query =  $this->Customers->find('all')->where(['And' => ['customers.seller_id' => $seller_id, $rule . ' like "%' . $key . '%"','created_by'=>$_SESSION['STAFF_SESSION']]]);
             } else {
                 $query =  $this->Customers->find()->where(['And' =>['customers.seller_id' => $seller_id,'created_by'=>$_SESSION['STAFF_SESSION']]])->order(['updated'=>'DESC']);
             }
         }
        
        
         $customers = $this->paginate($query,['limit' => 10]);
         if(isset($key) && isset($seller_id) && isset($search_column) && count($customers)==0){
            if ($customers->count() <= 0) {
                $this->Flash->info(__('Your search returned no matches.'));
            }
        }
         $sales = $this->Customers->Sales->find('all')->where(['status'=>'1']);
         $this->set(compact('customers', 'sales'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => ['Sales'],
        ]);

        $this->set(compact('customer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customers->newEmptyEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());

            if (!$customer->getErrors) {
                $image = $this->request->getData('avatar_url');
                $name = $image->getClientFileName();
                $dir = WWW_ROOT . 'img' . DS . $name;
                if ($name)
                    $image->moveTo($dir);


                $customer->avatar_url = $name;
            }

            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $sales = $this->Customers->Sales->find('list', ['limit' => 200])->all();
        $this->set(compact('customer', 'sales'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());

            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            $image = $this->request->getData('new_avatar_url');
            if ($image->getClientFileName()!= '') {
                $name = $image->getClientFileName();
                $dir = WWW_ROOT . 'img' . DS . $name;
                if ($name)
                    $image->moveTo($dir);

                $customer->avatar_url = $name;
            }

            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $sales = $this->Customers->Sales->find('list', ['limit' => 200])->all();
        $this->set(compact('customer', 'sales'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function duplicate($id = null)
    {
        $customer_new = $this->Customers->newEmptyEntity();
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);
        // dd($customer);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer_new, $this->request->getData());
            $image = $this->request->getData('duplicate_avatar_url');
            // dd($this->request->getData('avatar_url'));
            if ($image->getClientFileName()!= '') {
                $name = $image->getClientFileName();
                $dir = WWW_ROOT . 'img' . DS . $name;
                if ($name)
                    $image->moveTo($dir);

                $customer->avatar_url = $name;
            }
            
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been duplicate.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        
        $sales = $this->Customers->Sales->find('list', ['limit' => 200])->all();
        $this->set(compact('customer','sales'));
    }
    public function changeStatus($id = null)
    {
        try {
            $this->request->allowMethod(['post','get']);
            $customer = $this->Customers->get($id);
            $customer->status = !$customer->status;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $customer->updated = date('Y-m-d H:i:s');
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer status has been changed.'));
            } else {
                $this->Flash->error(__("Error.Data can't be saved because error of DB."));
            }
    
        } catch (Exception $e) {
            $this->Flash->error(__('A system error has occurred. Please contact your administrator.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
