<?php
App::uses('AppController', 'Controller');
/**
 * Promotor Controller
 *
 * @property Promotor $Promotor
 * @property SessionComponent $Session
 */
class PromotorController extends AppController {

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
		$this->Promotor->recursive = 0;
		$this->set('promotor', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Promotor->id = $id;
		if (!$this->Promotor->exists()) {
			throw new NotFoundException(__('Promotor inválido'));
		}
		$this->set('promotor', $this->Promotor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promotor->create();
			if ($this->Promotor->save($this->request->data)) {
				$this->Session->setFlash(__('O promotor foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O promotor não pode ser salvo, por favor, tente novamente.'));
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
		$this->Promotor->id = $id;
		if (!$this->Promotor->exists()) {
			throw new NotFoundException(__('Promotor inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Promotor->save($this->request->data)) {
				$this->Session->setFlash(__('O promotor foi salvo com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O promotor não pode ser salvo, por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Promotor->read(null, $id);
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
		$this->Promotor->id = $id;
		if (!$this->Promotor->exists()) {
			throw new NotFoundException(__('Promotor inválido'));
		}
		if ($this->Promotor->saveField('deletado','1')) {
			$this->Session->setFlash(__('Promotor deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Promotor não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
