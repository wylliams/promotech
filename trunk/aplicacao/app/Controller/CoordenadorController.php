<?php
App::uses('AppController', 'Controller');
/**
 * Coordenador Controller
 *
 * @property Coordenador $Coordenador
 * @property SessionComponent $Session
 */
class CoordenadorController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Coordenador->recursive = 0;
		$this->set('coordenador', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Coordenador->id = $id;
		if (!$this->Coordenador->exists()) {
			throw new NotFoundException(__('Invalid coordenador'));
		}
		$this->set('coordenador', $this->Coordenador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coordenador->create();
			if ($this->Coordenador->save($this->request->data)) {
				$this->Session->setFlash(__('The coordenador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordenador could not be saved. Please, try again.'));
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
		$this->Coordenador->id = $id;
		if (!$this->Coordenador->exists()) {
			throw new NotFoundException(__('Invalid coordenador'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coordenador->save($this->request->data)) {
				$this->Session->setFlash(__('The coordenador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordenador could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Coordenador->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Coordenador->id = $id;
		if (!$this->Coordenador->exists()) {
			throw new NotFoundException(__('Invalid coordenador'));
		}
		if ($this->Coordenador->delete()) {
			$this->Session->setFlash(__('Coordenador deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coordenador was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
