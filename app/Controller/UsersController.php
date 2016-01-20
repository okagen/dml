<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
        parent::beforeFilter();
    }


	public function login( $justLogout = false ) {

		if ($this->request->is('post')) {
			//e-mailで認証するようにするため、Authで認証判断しているusernameのカラムをemailに変更する。
			$this->Auth->authenticate['Form']['fields']['username'] = 'email';
		    if ($this->Auth->login()) {
		    	//リダイレクト先は、AppController.phpに定義。
		        $this->redirect($this->Auth->redirect());
		    } else {
		        $this->Session->setFlash(__('Invalid username or password, try again'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-error'
											), 'flash');
		    }
		} elseif ( $justLogout ) { //ユーザがログアウトした場合、リダイレクトされてここにくる。
		        $this->Session->setFlash(__('You have been logged out'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-success'
											), 'flash');
		}
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
		        $this->Session->setFlash(__('The user has been saved.'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-success'
											), 'flash');
				return $this->redirect(array('action' => 'index'));
			} else {
		        $this->Session->setFlash(__('The user could not be saved. Please, try again.'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-error'
											), 'flash');
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
		        $this->Session->setFlash(__('The user has been saved.'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-success'
											), 'flash');
				return $this->redirect(array('action' => 'index'));
			} else {
		        $this->Session->setFlash(__('The user could not be saved. Please, try again.'),
		        							'alert', array(
												'plugin' => 'TwitterBootstrap',
												'class' => 'alert-error'
											), 'flash');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
	        $this->Session->setFlash(__('The user has been deleted.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-success'
										), 'flash');
		} else {
	        $this->Session->setFlash(__('The user could not be deleted. Please, try again.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
