<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaProduto Controller
 *
 * @property CategoriaProduto $CategoriaProduto
 * @property SessionComponent $Session
 */
class CategoriaProdutoController extends AppController {

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
		$this->CategoriaProduto->recursive = 0;
		$this->set('categoriaProduto', $this->paginate('CategoriaProduto', array('CategoriaProduto.deletado' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CategoriaProduto->id = $id;
		if (!$this->CategoriaProduto->exists()) {
			throw new NotFoundException(__('Categoria de produto inválida'));
		}
		$this->set('categoriaProduto', $this->CategoriaProduto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaProduto->create();
			if ($this->CategoriaProduto->save($this->request->data)) {
				$this->Session->setFlash(__('A categoria de produto foi salva com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A categoria de produto não pode ser salva, por favor tente novamente.'));
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
		$this->CategoriaProduto->id = $id;
		if (!$this->CategoriaProduto->exists()) {
			throw new NotFoundException(__('Categoria de produto inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CategoriaProduto->save($this->request->data)) {
				$this->Session->setFlash(__('A categoria de produto foi salva com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A categoria de produto não pode ser salva, por favor tente novamente.'));
			}
		} else {
			$this->request->data = $this->CategoriaProduto->read(null, $id);
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
		$this->CategoriaProduto->id = $id;
		if (!$this->CategoriaProduto->exists()) {
			throw new NotFoundException(__('Categoria de produto inválida'));
		}
		if ($this->CategoriaProduto->saveField('deletado', '1')) {
			$this->Session->setFlash(__('Categoria produto deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categoria produto não foi deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
