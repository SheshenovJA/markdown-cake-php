<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

class AppController extends Controller
{
    public $admin = null;
    public function initialize()
    {
       // parent::initialize();

        $this->viewBuilder()->setLayout('smartAdmin');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
        $this->loadComponent('Cookie');

      //  $this->set('site_locale', 'uk');
        $this->Cookie->setConfig([
            'expires' => '+10 days',
            'httpOnly' => false,
            'key' => '@qgm@rq290i98768eidfse789780789thhf089f[an@w4nth9048ngna@wnf8na8g2ivierni',
        ]);



        $user = $this->request->getSession()->read('Auth.User');
        if (!empty($user)) {
            $this->redirect('/users/logout');
        }

    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->setConfig([
            'loginRedirect' => '/admin/dashboard',
            'logoutRedirect' => '/admin/login',
            'loginAction' => '/admin/login',
            'authenticate' => [
                'Form' => [
                    'passwordHasher' => 'Default',
                    'fields' => ['username' => 'login', 'password' => 'pass'],
                    'userModel' => 'Admins',
                ]
            ],
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Admin',
            ],
            'flash' => [
                'key' => 'auth',
                'element' => 'error',
            ],
            'authError' => 'You are not authorized to access this page.'
        ]);
        $user = $this->Auth->user();
        if(!is_null($user)){
            $this->loadModel('Admins');
            $admin_user = $this->Admins->get($user['id']);

            $this->set(compact(['admin_user']));
        }
        $this->loadModel('AdminConfigs');
        $admin_options = $this->AdminConfigs->find('all')->toArray();
        foreach ($admin_options as $option) {
            $options[$option->name] = $option->value;
        }
        //debug($options); die;
        //$form_count = $this->Orders->find('all')->where(['status' => 1])->count();
        $this->set(compact(['user','options']));
    }
}