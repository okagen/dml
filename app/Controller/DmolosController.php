<?php
App::uses('AppController', 'Controller');
/**
 * Dmolos Controller
 *
 * @property Dmolo $Dmolo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DmolosController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array( 'Session',
		'Paginator' => array(
			'limit' => 10,
			'order' => array('id' => 'desc')
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dmolo->recursive = 0;
		$this->set('dmolos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
		$this->set('dmolo', $this->Dmolo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dmolo->create();
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
			$this->request->data = $this->Dmolo->find('first', $options);
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dmolo->id = $id;
		if (!$this->Dmolo->exists()) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dmolo->delete()) {
			$this->Session->setFlash(__('The dmolo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dmolo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Dmolo->recursive = 0;
		$this->set('dmolos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
		$this->set('dmolo', $this->Dmolo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Dmolo->create();
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
			$this->request->data = $this->Dmolo->find('first', $options);
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Dmolo->id = $id;
		if (!$this->Dmolo->exists()) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dmolo->delete()) {
			$this->Session->setFlash(__('The dmolo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dmolo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
