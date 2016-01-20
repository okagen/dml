<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

//http://book.cakephp.org/2.0/ja/tutorials-and-examples/blog-auth-example/auth.html

class AppController extends Controller {
    var $components = array(
        'DebugKit.Toolbar',
        'Auth' => array(
            //ログイン後の移動先
            'loginRedirect' => array('controller' => 'Dmolos','action' => 'index'),
            //ログインページのパス 認証が必要なURLに非認証状態でログインされた場合にこのURLへ飛ばす
            'loginAction' => array('controller' => 'Users', 'action' => 'login', 'admin' => false),
            //ログアウト後の移動先
            'logoutRedirect' => array('controller' => 'Users', 'action' => 'login', true),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            //カスタマイズした権限判定を利用するために追記
            'authorize' => array('Controller'),
        )
    );

    //カスタマイズした権限判定　ログインできるユーザかどうかを判定
    public function isAuthorized($user) {

        if (
            (isset($user['role']) && $user['role'] === 'admin')
          //   or
          //  (isset($user['role']) && $user['role'] === 'user')
            ) {
            return true;
        }
        return false;
    }

    public $layout = 'bootstrap';

    public $helpers = array(
        'Session',
        'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
        'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
        'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
    );

    public function beforeFilter() {

        // 認証情報をコンポーネントをViewで利用可能にしておく
        //$this->Auth->allow('login');
        $this->Auth->allow('login');
        $this->Auth->allow('logout');
        $this->set('role', $this->Auth->user('role'));
        $this->set('username', $this->Auth->user('username'));
    }
}