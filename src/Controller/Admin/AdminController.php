<?php

namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Network\Exception\NotFoundException;
use Cake\I18n\I18n;



class AdminController extends AppController
{
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->helpers(['Markdown.Markdown']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Admins');
        $this->loadModel('Posts');
    }


    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'reg']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('');
        $remember = false;

        if ($this->request->is('post')) {

            if (isset($this->request->getData()['rememberMe']) && $this->request->getData()['rememberMe'] == 'on') {
                unset($this->request->getData()['rememberMe']);
                $remember = true;
            }
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($remember) {
                    $this->Cookie->write('admin', $this->request->data);
                } elseif ($this->Cookie->check('admin')) {
                    $this->Cookie->delete('admin');
                }
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Логін чи пароль не вірні');
                return $this->redirect($this->referer());
            }
        }
        if ($this->Cookie->check('admin')) {
            $this->request->data = $this->Cookie->read('admin');
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
        }
    }
    public function reg()
    {
        $this->viewBuilder()->setLayout('');
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if (!empty($data)){
            extract($data);
           // debug($data); die;
            $save_adm = $this->Admins->newEntity();
            //debug($save_adm); die;
            $data = $this->Admins->patchEntity($save_adm, $data);
            if ($this->Admins->save($data)){
            $this->Flash->success('Registration complete! You can sign in');
                return $this->redirect('admin/login');
            }else{
                $this->Flash->error('value of one or more fields is in database now');
            }
            }else{
                $this->Flash->error('Some errors');
                return $this->redirect($this->referer());
            }
        }
    }

    public function dashboard ()
    {

    }
    public function editPage()
    {
        $posts = $this->Posts->find('all',[
            'order' => ['created' => 'DESC']
        ]);
        // debug($posts->toArray()); die;
        $this->set('posts', $posts);



    }
    public function logout()
    {
        if ($this->Cookie->check('admin')) {
            $this->Cookie->delete('admin');
        }
        return $this->redirect($this->Auth->logout());
    }
    //this function will save form data
    //$data_markdown - data from text field

    public function save()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            extract($data);
           // debug($data); die;
            if (!empty($data)){
            $post = $this->Posts->newEntity();
            $post->block_name = $block_name;
            //$post->content_html = $this->Markdown->toHtml($data_markdown);
            $post->content_mark = $data_markdown;

            $this->Posts->save($post ,$data);
            $this->Flash->success('Saved!');
                return $this->redirect($this->referer());
            }else{
                $this->Flash->error('Post is not saved!');
                return $this->redirect($this->referer());
            }
            }
    }
}