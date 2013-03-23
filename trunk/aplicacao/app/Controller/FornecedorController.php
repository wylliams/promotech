<?php
App::uses('AppController', 'Controller');
/**
 * Fornecedor Controller
 *
 * @property Fornecedor $Fornecedor
 * @property SessionComponent $Session
 */
class FornecedorController extends AppController {

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
		$this->Fornecedor->recursive = 0;
		$this->set('fornecedor', $this->paginate('Fornecedor', array('Fornecedor.deletado' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fornecedor->id = $id;
		$this->loadModel('CategoriaProduto');
		$fornecedor = $this->Fornecedor->read();
		$arrayCategoriaProdutoFornecedor = array();
		foreach($fornecedor['CategoriaProdutoFornecedor'] as $categoriaProdutoFornecedor){
			$arrayCategoriaProdutoFornecedor[] = $this->CategoriaProduto->find('list', array('conditions' => array('CategoriaProduto.deletado' => 0, 'CategoriaProduto.id' => $categoriaProdutoFornecedor['categoria_produto_id']),
																							'fields' => array('CategoriaProduto.id', 'CategoriaProduto.nome')));
		}
		
		if (!$this->Fornecedor->exists()) {
			throw new NotFoundException(__('Fornecedor inválido'));
		}
		
		$this->set('fornecedor', $fornecedor);
		$this->set("categoriaProduto", $arrayCategoriaProdutoFornecedor);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		//Carregamos o Model CategoriaProduto para exibir a lista de Categorias de produto para ser selecionado na view			
		$this->loadModel('CategoriaProduto');
		$categoriaProduto = $this->CategoriaProduto->find('list', array('conditions' => array('CategoriaProduto.deletado' => '0'),'fields' => array('CategoriaProduto.id','CategoriaProduto.nome')));
		$this->set('categoriaProduto', $categoriaProduto);
		
		
		if ($this->request->is('post')) {
			/*
			$this->loadModel("CategoriaProdutoFornecedor");
						$this->CategoriaProdutoFornecedor->create();*/
			
			$this->Fornecedor->create();
			if ($this->Fornecedor->save($this->request->data)) {
				
				//Varremos o array para pegar os ids das categorias de produto selecionadas
				foreach($this->request->data['Fornecedor']['categoria_produto_id'] as $categoriaProduto_id){
					$data = array();
					$data['CategoriaProdutoFornecedor']['fornecedor_id'] = $this->Fornecedor->id;
					$data['CategoriaProdutoFornecedor']['categoria_produto_id'] = $categoriaProduto_id;
					$this->CategoriaProdutoFornecedor->save($data);
					$this->CategoriaProdutoFornecedor->id = null;
				}				
				
				$this->Session->setFlash(__('O fornecedor foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O fornecedor não pode ser salvo, por favor tente novamente.'));
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
		$this->Fornecedor->id = $id;
		$fornecedor = $this->Fornecedor->read();
		
		if (!$this->Fornecedor->exists()) {
			throw new NotFoundException(__('Fornecedor inválido'));
		}
		
		//Carregamos o Model CategoriaProduto para exibir a lista de Categorias de produto para ser selecionado na view			
		$this->loadModel('CategoriaProduto');
		$categoriaProduto = $this->CategoriaProduto->find('list', array('conditions' => array('CategoriaProduto.deletado' => '0'),'fields' => array('CategoriaProduto.id','CategoriaProduto.nome')));
		$this->set('categoriaProduto', $categoriaProduto);
		
		//Carregamos o array categoria de produto fornecedor para dizer quais as categorias de produtos selecionadas
		$arrayCategoriaProdutoFornecedor= array();
		foreach($fornecedor['CategoriaProdutoFornecedor'] as $categoriaProdutoFornecedor){
			$arrayCategoriaProdutoFornecedor[$categoriaProdutoFornecedor['id']] = $categoriaProdutoFornecedor['categoria_produto_id'];
		}		
		$this->set('categoriaProdutoFornecedor', $arrayCategoriaProdutoFornecedor);
		
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->loadModel("CategoriaProdutoFornecedor");
			$this->CategoriaProdutoFornecedor->create();
			if ($this->Fornecedor->save($this->request->data)) {
				
				//Deletamos as relações com campanha e promotor
				foreach($fornecedor['CategoriaProdutoFornecedor'] as $categoriaProdutoFornecedor){
					$this->CategoriaProdutoFornecedor->id = $categoriaProdutoFornecedor['id'];
					$this->CategoriaProdutoFornecedor->delete();
				}
				
				//Varremos o array para pegar os ids das categorias de produto selecionadas
				foreach($this->request->data['Fornecedor']['categoria_produto_id'] as $categoriaProduto_id){
					$data = array();
					$data['CategoriaProdutoFornecedor']['fornecedor_id'] = $this->Fornecedor->id;
					$data['CategoriaProdutoFornecedor']['categoria_produto_id'] = $categoriaProduto_id;
					$this->CategoriaProdutoFornecedor->save($data);
					$this->CategoriaProdutoFornecedor->id = null;
				}
				
				$this->Session->setFlash(__('O fornecedor foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O fornecedor não pode ser salvo, por favor tente novamente.'));
			}
		} else {
			$this->request->data = $this->Fornecedor->read(null, $id);
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
		$this->Fornecedor->id = $id;
		if (!$this->Fornecedor->exists()) {
			throw new NotFoundException(__('Fornecedor Inválido'));
		}
		if ($this->Fornecedor->saveField('deletado', '1')) {
			$this->Session->setFlash(__('Fornecedor deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fornecedor não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
