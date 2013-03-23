<?php
App::uses('AppController', 'Controller');
/**
 * Usuario Controller
 *
 * @property Usuario $Usuario
 */
class UsuarioController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','index','logout');
    }

	public function login() {
		if($this->request->is("post") || $this->request->is("put")){
			//var_dump($this->request->data);
			//die;
		    if ($this->Auth->login()) {
		        $this->redirect($this->Auth->redirect());
		    } else {
		        $this->Session->setFlash(__('Username ou password inválido'));
		    }
		}
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

 
 /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuario', $this->paginate('Usuario', array('deletado' => '0')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuário inválido'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('O usuário foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O usuário não pode ser salvo, por favor tente novamente'));
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuário inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('O usuário foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O usuário não pode ser salvo, por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Usuario->read(null, $id);
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuário Inválido'));
		}
		if ($this->Usuario->saveField('deletado','1')) {
			$this->Session->setFlash(__('Usuario deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
