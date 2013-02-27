<?php
App::uses('AppController', 'Controller');
/**
 * Cliente Controller
 *
 * @property Cliente $Cliente
 * @property SessionComponent $Session
 */
class ClienteController extends AppController {

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
		$this->Cliente->recursive = 0;
		$this->set('cliente', $this->paginate('Cliente', array('deletado' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cliente->id = $id;
		$cliente = $this->Cliente->read();
		if (!$this->Cliente->exists() || $cliente['Cliente']['deletado'] == 1) {
			throw new NotFoundException(__('Cliente Inválido'));
		}
		$this->set('cliente', $this->Cliente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('O cliente foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O cliente não pode ser salvo. Por favor, tente novamente.'));
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
		$this->Cliente->id = $id;
		$cliente = $this->Cliente->read();
		if (!$this->Cliente->exists() || $cliente['Cliente']['deletado'] == 1) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('O cliente foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Cliente não pode pode ser salvo, Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Cliente->read(null, $id);
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
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		if ($this->Cliente->saveField('deletado','1')) {
			$this->Session->setFlash(__('Cliente deletado com sucesso'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cliente não pode ser deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
