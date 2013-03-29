<?php
App::uses('AppController', 'Controller');
/**
 * Compromisso Controller
 *
 * @property Compromisso $Compromisso
 */
class CompromissoController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Compromisso->recursive = 0;
		$this->set('compromisso', $this->paginate('Compromisso', array('Compromisso.deletado' => '0', 'Compromisso.usuario_id' => AuthComponent::user('id'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Compromisso->id = $id;
		if (!$this->Compromisso->exists()) {
			throw new NotFoundException(__('Compromisso Inválido'));
		}
		$this->set('compromisso', $this->Compromisso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compromisso->create();
			$this->request->data['Compromisso']['usuario_id'] = AuthComponent::user('id');
			if ($this->Compromisso->save($this->request->data)) {
				$this->Session->setFlash(__('O compromisso foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O compromisso não pode ser salvo, por favor tente novamente.'));
			}
		}
		$this->set(compact('usuario'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Compromisso->id = $id;
		if (!$this->Compromisso->exists()) {
			throw new NotFoundException(__('Compromisso inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compromisso->save($this->request->data)) {
				$this->Session->setFlash(__('O compromisso foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O compromisso não pode ser salvo, por favor tente novamente.'));
			}
		} else {
			$this->request->data = $this->Compromisso->read(null, $id);
		}
		$usuario = $this->Compromisso->Usuario->find('list');
		$this->set(compact('usuario'));
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
		$this->Compromisso->id = $id;
		if (!$this->Compromisso->exists()) {
			throw new NotFoundException(__('Compromisso inválido'));
		}
		if ($this->Compromisso->saveField('deletado', '1')) {
			$this->Session->setFlash(__('Compromisso deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compromisso não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
