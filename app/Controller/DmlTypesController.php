<?php
App::uses('AppController', 'Controller');
/**
 * DmlTypes Controller
 *
 * @property DmlType $DmlType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DmlTypesController extends AppController {

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
		$this->DmlType->recursive = 0;
		$this->set('dmlTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DmlType->exists($id)) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		$options = array('conditions' => array('DmlType.' . $this->DmlType->primaryKey => $id));
		$this->set('dmlType', $this->DmlType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DmlType->create();
			if ($this->DmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The dml type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dml type could not be saved. Please, try again.'));
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
		if (!$this->DmlType->exists($id)) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The dml type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dml type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DmlType.' . $this->DmlType->primaryKey => $id));
			$this->request->data = $this->DmlType->find('first', $options);
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
		$this->DmlType->id = $id;
		if (!$this->DmlType->exists()) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DmlType->delete()) {
			$this->Session->setFlash(__('The dml type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dml type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DmlType->recursive = 0;
		$this->set('dmlTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DmlType->exists($id)) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		$options = array('conditions' => array('DmlType.' . $this->DmlType->primaryKey => $id));
		$this->set('dmlType', $this->DmlType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DmlType->create();
			if ($this->DmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The dml type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dml type could not be saved. Please, try again.'));
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
		if (!$this->DmlType->exists($id)) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DmlType->save($this->request->data)) {
				$this->Session->setFlash(__('The dml type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dml type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DmlType.' . $this->DmlType->primaryKey => $id));
			$this->request->data = $this->DmlType->find('first', $options);
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
		$this->DmlType->id = $id;
		if (!$this->DmlType->exists()) {
			throw new NotFoundException(__('Invalid dml type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DmlType->delete()) {
			$this->Session->setFlash(__('The dml type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dml type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
