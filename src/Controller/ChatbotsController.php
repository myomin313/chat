<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chatbots Controller
 *
 * @property \App\Model\Table\ChatbotsTable $Chatbots
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChatbotsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chatbots = $this->paginate($this->Chatbots);

        $this->set(compact('chatbots'));
    }

    /**
     * View method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chatbot = $this->Chatbots->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('chatbot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chatbot = $this->Chatbots->newEmptyEntity();
        if ($this->request->is('post')) {
            $chatbot = $this->Chatbots->patchEntity($chatbot, $this->request->getData());
            if ($this->Chatbots->save($chatbot)) {
                $this->Flash->success(__('The chatbot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatbot could not be saved. Please, try again.'));
        }
        $this->set(compact('chatbot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chatbot = $this->Chatbots->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chatbot = $this->Chatbots->patchEntity($chatbot, $this->request->getData());
            if ($this->Chatbots->save($chatbot)) {
                $this->Flash->success(__('The chatbot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatbot could not be saved. Please, try again.'));
        }
        $this->set(compact('chatbot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chatbot = $this->Chatbots->get($id);
        if ($this->Chatbots->delete($chatbot)) {
            $this->Flash->success(__('The chatbot has been deleted.'));
        } else {
            $this->Flash->error(__('The chatbot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
      parent::beforeFilter($event);
     // for all controllers in our application, make index and view
     // actions public, skipping the authentication check
      //$this->Authentication->addUnauthenticatedActions(['display','chatroom']);
    }
}
