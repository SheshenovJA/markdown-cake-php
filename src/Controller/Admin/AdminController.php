<?php

namespace App\Controller\Admin;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Network\Exception\NotFoundException;
use Cake\I18n\I18n;



class AdminController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Admins');
    }


    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'reg']);
    }

    public function login()
    {
        $remember = false;
        if($this->request->is('post')){
            $data = $this->request->getData();
            if (!empty($this->request->getData('remember')) && $this->request->getData('remember') == 'on') {
                $remember = true;
            }
            extract($data);
            $admin = $this->Auth->identify();
            //debug();die;
            if ($admin) {
                $this->Auth->setUser($admin);
                if ($remember) {
                    $this->Cookie->write('user', $this->request->getData());
                } elseif ($this->Cookie->check('user')) {
                    $this->Cookie->delete('user');
                }
                return $this->redirect($this->Auth->redirectUrl());
            }else {
                $this->Flash->error('email or password is wrong');
                return $this->redirect($this->referer());
            }

        }
        if ($this->Cookie->check('user')) {
            $data = $this->Cookie->read('user');
            if (is_array($data)) {
                $this->request = $this->request->withParsedBody($data);
            }
            $admin = $this->Auth->identify();
            if ($admin) {
                $this->Auth->setUser($admin);
                return $this->redirect($this->Auth->redirectUrl());
            }
        }
    }
    public function reg()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if (!empty($data)){
            extract($data);
           // debug($data); die;
            $save_adm = $this->Admins->newEntity();
            $data = $this->Admins->patchEntity($save_adm, $data);
            if ($this->Admins->save($data)){
            $this->Flash->success('registration complete! You can sign in');
                return $this->redirect('admin/login');
            }else{
                $this->Flash->error('value of one or more fields is in database now');
            }
            }else{
                $this->Flash->error('some errors');
                return $this->redirect($this->referer());
            }
        }
    }

    public function dashboard ()
    {

    }
    public function editPage()
    {

    }
}