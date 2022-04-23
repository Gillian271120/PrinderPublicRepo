<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * JwtRefreshTokens Controller
 *
 * @property \App\Model\Table\JwtRefreshTokensTable $JwtRefreshTokens
 * @method \App\Model\Entity\JwtRefreshToken[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JwtRefreshTokensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jwtRefreshTokens = $this->paginate($this->JwtRefreshTokens);

        $this->set(compact('jwtRefreshTokens'));
    }

    /**
     * View method
     *
     * @param string|null $id Jwt Refresh Token id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jwtRefreshToken = $this->JwtRefreshTokens->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('jwtRefreshToken'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jwtRefreshToken = $this->JwtRefreshTokens->newEmptyEntity();
        if ($this->request->is('post')) {
            $jwtRefreshToken = $this->JwtRefreshTokens->patchEntity($jwtRefreshToken, $this->request->getData());
            if ($this->JwtRefreshTokens->save($jwtRefreshToken)) {
                $this->Flash->success(__('The jwt refresh token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jwt refresh token could not be saved. Please, try again.'));
        }
        $this->set(compact('jwtRefreshToken'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jwt Refresh Token id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jwtRefreshToken = $this->JwtRefreshTokens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jwtRefreshToken = $this->JwtRefreshTokens->patchEntity($jwtRefreshToken, $this->request->getData());
            if ($this->JwtRefreshTokens->save($jwtRefreshToken)) {
                $this->Flash->success(__('The jwt refresh token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jwt refresh token could not be saved. Please, try again.'));
        }
        $this->set(compact('jwtRefreshToken'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jwt Refresh Token id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jwtRefreshToken = $this->JwtRefreshTokens->get($id);
        if ($this->JwtRefreshTokens->delete($jwtRefreshToken)) {
            $this->Flash->success(__('The jwt refresh token has been deleted.'));
        } else {
            $this->Flash->error(__('The jwt refresh token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
