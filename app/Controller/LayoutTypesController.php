<?php
App::uses('AppController', 'Controller');
/**
 * LayoutTypes Controller
 *
 * @property LayoutType $LayoutType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LayoutTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LayoutType->recursive = 0;
		$this->set('layoutTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LayoutType->exists($id)) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		$options = array('conditions' => array('LayoutType.' . $this->LayoutType->primaryKey => $id));
		$this->set('layoutType', $this->LayoutType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LayoutType->create();
			if ($this->LayoutType->save($this->request->data)) {
				$this->Session->setFlash(__('The layout type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LayoutType->exists($id)) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LayoutType->save($this->request->data)) {
				$this->Session->setFlash(__('The layout type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LayoutType.' . $this->LayoutType->primaryKey => $id));
			$this->request->data = $this->LayoutType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LayoutType->id = $id;
		if (!$this->LayoutType->exists()) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LayoutType->delete()) {
			$this->Session->setFlash(__('The layout type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The layout type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LayoutType->recursive = 0;
		$this->set('layoutTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LayoutType->exists($id)) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		$options = array('conditions' => array('LayoutType.' . $this->LayoutType->primaryKey => $id));
		$this->set('layoutType', $this->LayoutType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LayoutType->create();
			if ($this->LayoutType->save($this->request->data)) {
				$this->Session->setFlash(__('The layout type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout type could not be saved. Please, try again.'));
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
		if (!$this->LayoutType->exists($id)) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LayoutType->save($this->request->data)) {
				$this->Session->setFlash(__('The layout type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LayoutType.' . $this->LayoutType->primaryKey => $id));
			$this->request->data = $this->LayoutType->find('first', $options);
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
		$this->LayoutType->id = $id;
		if (!$this->LayoutType->exists()) {
			throw new NotFoundException(__('Invalid layout type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LayoutType->delete()) {
			$this->Session->setFlash(__('The layout type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The layout type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
