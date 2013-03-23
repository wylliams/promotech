<?php
App::uses('AppController', 'Controller');
/**
 * Campanha Controller
 *
 * @property Campanha $Campanha
 * @property SessionComponent $Session
 */
class CampanhaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Campanha->recursive = 0;
		$this->set('campanha', $this->paginate('Campanha', array('Campanha.deletado' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Campanha->id = $id;
		$campanha = $this->Campanha->read();
		
		$this->loadModel("Promotor");
		$this->loadModel('Coordenador');
		
		if (!$this->Campanha->exists() || $campanha['Campanha']['deletado'] == 1) {
			throw new NotFoundException(__('Campanha Inválida'));
		}
		
		$this->set('campanha', $campanha);
		
		//Buscamos as relações com promotores
		$arrayCampanhaPromotor = $campanha['CampanhaPromotor'];
		
		$arrayPromotor = array();
		foreach($arrayCampanhaPromotor as $idCampanhaPromotor => $idPromotor){
			$promotor = $this->Promotor->find('all', array('conditions' => array('Promotor.id' => $idPromotor),
															 'fields' => array('Promotor.id', 'Pessoa.nome')));
			$find = array();
			foreach($promotor as $promotor){
				$find[$promotor['Promotor']['id']] = $promotor['Pessoa']['nome'];
			}
			//adicionamos ao array de promotores todos os promotores que estÃ£o no relacionamento
			$arrayPromotor[] = $find;
		}
		
		//carregamos o array de promotores na view
		$this->set('promotor', $arrayPromotor);
		
		//buscamos as relações com coordenadores
		$arrayCampanhaCoordenador= $campanha['CampanhaCoordenador'];
		$arrayCoordenador = array();
		foreach($arrayCampanhaCoordenador as $idCampanhaCoordenador => $idCoordenador){
			$coordenador = $this->Coordenador->find('all', array('conditions' => array('Coordenador.id' => $idCoordenador),
																	'fields' =>array('Coordenador.id', 'Pessoa.nome')));
			$find2 = array();
			foreach($coordenador as $coordenador){
				$find2[$coordenador['Coordenador']['id']] = $coordenador['Pessoa']['nome'];
			}
			//adicionamos ao array de coordenadores todos os coordenadores da relação			
			$arrayCoordenador[] = $find2;
		}
		//carregamos o array de coordenadores na view
		$this->set('coordenador', $arrayCoordenador);
	}

/**
 * addEstapa1 method
 *
 * @return void
 */
	public function addEtapa1() {
		//Carregamos o Model promotor para exibir a lista de promotores para ser selecionado na view		
		$this->loadModel('Promotor');
		$promotor = $this->Promotor->find('all', array('conditions' => array('Promotor.deletado' => '0'),'fields' => array('Promotor.id','Pessoa.nome')));
		$find = array();
		foreach($promotor as $promotor){
			$find[$promotor['Promotor']['id']] = $promotor['Pessoa']['nome'];
		}
		$this->set('promotor', $find);
		
		//Carregamos o Model coordenador para exibir a lista de coordenadores para ser selecionado na view		
		$this->loadModel('Coordenador');
		$coordenador = $this->Coordenador->find('all', array('conditions' => array('Coordenador.deletado' => '0'),'fields' => array('Coordenador.id','Pessoa.nome')));
		$find2 = array();
		foreach($coordenador as $coordenador){
			$find2[$coordenador['Coordenador']['id']] = $coordenador['Pessoa']['nome'];
		}
		$this->set('coordenador', $find2);
		
		//Carregamos o Model cliente para exibir os cliente para serem selecionados
		$this->loadModel('Cliente');
		$cliente = $this->Cliente->find('list', array('conditions' => array('Cliente.deletado' => '0'),'fields' => array('Cliente.id', 'Cliente.nome')));
		$this->set('cliente', $cliente);
		
		if ($this->request->is('post')) {	
			$this->loadModel("CampanhaPromotor");
			$this->loadModel('CampanhaCoordenador');
			$this->Campanha->create();
			$this->CampanhaPromotor->create();
			$this->CampanhaCoordenador->create();
			if ($this->Campanha->save($this->request->data)) {
				//Varremos o array para pegar os ids dos promotores selecionados
				foreach($this->request->data['Campanha']['promotor_id'] as $promotor_id){
					$data = array();
					$data['CampanhaPromotor']['campanha_id'] = $this->Campanha->id;
					$data['CampanhaPromotor']['promotor_id'] = $promotor_id;
					$this->CampanhaPromotor->save($data);
					$this->CampanhaPromotor->id = null;
				}
				//Varremos o array para pegar os ids dos coordenadores selecionados
				foreach($this->request->data['Campanha']['coordenador_id'] as $coordenador_id){
					$data = array();
					$data['CampanhaCoordenador']['campanha_id'] = $this->Campanha->id;
					$data['CampanhaCoordenador']['coordenador_id'] = $coordenador_id;
					$this->CampanhaCoordenador->save($data);
					$this->CampanhaCoordenador->id = null;
				}
				$this->Session->setFlash(__('A etapa 1 foi salva com sucesso, você foi direcionado para a segunda etapa!'));
				$this->redirect(array('action' => 'addEtapa2', $this->Campanha->id));				
			} else {
				$this->Session->setFlash(__('A Campanha não pode ser salva. Por favor, tente novamente.'));
			}
		}
	}

/**
 * addEstapa1 method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function addEtapa2($id = null){
		$this->Campanha->id = $id;
		$campanha = $this->Campanha->read();
		
		if (!$this->Campanha->exists() || $campanha['Campanha']['deletado'] == 1) {
			throw new NotFoundException(__('Campanha Inválida'));
		}
		
		$this->loadModel('Fornecedor');
		$this->loadModel('CategoriaProdutoFornecedor');
		$this->loadModel('CampanhaFornecedor');
		$fornecedores = $this->Fornecedor->find('all', array('conditions' => array('Fornecedor.deletado' => '0'), 'fields' => array('Fornecedor.id', 'Fornecedor.nome')));
		$categoriaProdutoFornecedor = $this->CategoriaProdutoFornecedor->find('list', array('fields' => array('CategoriaProdutoFornecedor.id', 'CategoriaProdutoFornecedor.fornecedor_id')));
		
		//Verificação para saber quais os fornecedores ja foram selecionados
		$campanhaFornecedor = array();
		$campanhaFornecedor = $this->CampanhaFornecedor->find('list', array('conditions' => array('CampanhaFornecedor.campanha_id' => $id), 'fields' => array('CampanhaFornecedor.id','CampanhaFornecedor.fornecedor_id')));
		$this->set("campanhaFornecedor", $campanhaFornecedor);
		
		//Verificação para pegar apenas fornecedores que possuem categoria de produto associado
		$arrayFornecedores = array();
		$count = 0;
		foreach($fornecedores as $fornecedor){
			$fornecedorId = $fornecedor['Fornecedor']['id'];
			$countTrava = 0;
			
			foreach($categoriaProdutoFornecedor as $data){
				if(($fornecedorId == $data) && ($countTrava == 0)){
					$arrayFornecedores[$count]['Fornecedor']['id'] = $fornecedorId;
					$arrayFornecedores[$count]['Fornecedor']['nome'] = $fornecedor['Fornecedor']['nome'];
					$countTrava++;
					$count++;
				}
				
			}
		}
		$this->set('fornecedores', $arrayFornecedores);
		$this->request->data = $campanha;
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->Session->setFlash(__('Campanha adicionada/editada com sucesso.'));
			$this->redirect(array('action' => 'index'));
			
		}
	}

 
 /**
 * addEstapa1 method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function adicaoCategoriaProduto($idFornecedor = null, $idCampanha = null){

		$this->loadModel('CategoriaProduto');
		$this->loadModel('CampanhaFornecedor');
		$this->loadModel('CampanhaFornecedorCategoriaProduto');
		
		//Exibe as categorias de produtos do fornecedor selecionado
		$arrayCategoriasProdutos = $this->CategoriaProduto->CategoriaProdutoFornecedor->find('all', array('conditions' => array('CategoriaProduto.deletado' => '0', 'CategoriaProdutoFornecedor.fornecedor_id' => $idFornecedor),'fields' => array('CategoriaProduto.id','CategoriaProduto.nome')));
		$this->set('arrayCategoriaProduto', $arrayCategoriasProdutos);	
		
		//Logica para saber quais as categorias de produtos ja foram adicionadas para poder editar
		$campanhaFornecedor = $this->CampanhaFornecedor->find('list', array('conditions' => array('CampanhaFornecedor.fornecedor_id' => $idFornecedor, 'CampanhaFornecedor.campanha_id' => $idCampanha)));
		$idCampanhaFornecedor = NULL;
		foreach($campanhaFornecedor as $dado){
			$idCampanhaFornecedor = $dado;
		}
		$campanhaFornecedorCategoriaProduto = array();
		if($idCampanhaFornecedor){
			$campanhaFornecedorCategoriaProduto = $this->CampanhaFornecedorCategoriaProduto->find('list', array('conditions' => array('CampanhaFornecedorCategoriaProduto.campanha_fornecedor_id' => $idCampanhaFornecedor), 'fields' => array('CampanhaFornecedorCategoriaProduto.id', 'CampanhaFornecedorCategoriaProduto.categoria_produto_id')));
		}
		$this->set("campanhaFornecedorCategoriaProduto", $campanhaFornecedorCategoriaProduto);
		
		if ($this->request->is('post')) {
			/*Caso nenhuma categoria de produto tenha sido escolhida e ja e exista uma relação entre 
			 * campanha e fornecedor deletamos essas relações.
			 * Ja se exitir categoria de produto escolhida, devemos verificar se ja existe a relação campanha
			 * fornecedor, caso exista apenas adicionaos a relação com categoria de produto, caso contrario
			 * criamos uma nova relação de campanha e fornecedor e associamos as categorias de produtos*/
			if(count($this->request->data) == 0){
				if($idCampanhaFornecedor){					
					
					$arrayCampanhaFornecedorCategoriaProduto = $this->CampanhaFornecedorCategoriaProduto->find('list', array('conditions' => array('CampanhaFornecedorCategoriaProduto.campanha_fornecedor_id' => $idCampanhaFornecedor)));
					
					foreach($arrayCampanhaFornecedorCategoriaProduto as $dados){
						$this->CampanhaFornecedorCategoriaProduto->id = $dados;
						$this->CampanhaFornecedorCategoriaProduto->delete();
					}
								
					$this->CampanhaFornecedor->id = $idCampanhaFornecedor;
					$this->CampanhaFornecedor->delete();
					
					$this->Session->setFlash(__('Categorias de produto retiradas com sucesso.'));
					$this->redirect(array('action' => 'addEtapa2', $idCampanha));
				}else{
					$this->redirect(array('action' => 'addEtapa2', $idCampanha));
				}
			}else{
				if($idCampanhaFornecedor){
					$arrayCampanhaFornecedorCategoriaProduto = $this->CampanhaFornecedorCategoriaProduto->find('list', array('conditions' => array('CampanhaFornecedorCategoriaProduto.campanha_fornecedor_id' => $idCampanhaFornecedor)));
						
					foreach($arrayCampanhaFornecedorCategoriaProduto as $dados){
						$this->CampanhaFornecedorCategoriaProduto->id = $dados;
						$this->CampanhaFornecedorCategoriaProduto->delete();
					}
					
					$data = array();
					foreach($this->request->data['dados'] as $dados){
						$data['CampanhaFornecedorCategoriaProduto']['campanha_fornecedor_id'] = $idCampanhaFornecedor;
						$data['CampanhaFornecedorCategoriaProduto']['categoria_produto_id'] = $dados;
						$this->CampanhaFornecedorCategoriaProduto->save($data);
						$this->CampanhaFornecedorCategoriaProduto->id = null;
					}
					
					$this->Session->setFlash(__('Categorias de produtos adicionadas com sucesso.'));
					$this->redirect(array('action' => 'addEtapa2', $idCampanha));
				}else{
					$data = array();
					$data['CampanhaFornecedor']['campanha_id'] = $idCampanha;
					$data['CampanhaFornecedor']['fornecedor_id'] = $idFornecedor;
					$this->CampanhaFornecedor->save($data);
					
					
					$data = array();
					foreach($this->request->data['dados'] as $dados){
						$data['CampanhaFornecedorCategoriaProduto']['campanha_fornecedor_id'] = $this->CampanhaFornecedor->id;
						$data['CampanhaFornecedorCategoriaProduto']['categoria_produto_id'] = $dados;
						$this->CampanhaFornecedorCategoriaProduto->save($data);
						$this->CampanhaFornecedorCategoriaProduto->id = null;
					}
					
					$this->Session->setFlash(__('Categorias de produtos adicionadas com sucesso.'));
					$this->redirect(array('action' => 'addEtapa2', $idCampanha));
				}
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
		$this->Campanha->id = $id;
		$campanha = $this->Campanha->read();
		
		if (!$this->Campanha->exists() || $campanha['Campanha']['deletado'] == 1) {
			throw new NotFoundException(__('Campanha Inválida'));
		}
		
		//Carregamos o Model promotor para exibir a lista de promotores para ser selecionado na view		
		$this->loadModel('Promotor');
		$promotor = $this->Promotor->find('all', array('conditions' => array('Promotor.deletado' => '0'),'fields' => array('Promotor.id','Pessoa.nome')));
		$find = array();
		foreach($promotor as $promotor){
			$find[$promotor['Promotor']['id']] = $promotor['Pessoa']['nome'];
		}
		$this->set('promotor', $find);
		
		//Carregamos o Model coordenador para exibir a lista de coordenadores para ser selecionado na view		
		$this->loadModel('Coordenador');
		$coordenador = $this->Coordenador->find('all', array('conditions' => array('Coordenador.deletado' => '0'),'fields' => array('Coordenador.id','Pessoa.nome')));
		$find2 = array();
		foreach($coordenador as $coordenador){
			$find2[$coordenador['Coordenador']['id']] = $coordenador['Pessoa']['nome'];
		}
		$this->set('coordenador', $find2);
		
		//Carregamos o Model cliente para exibir os cliente para serem selecionados
		$this->loadModel('Cliente');
		$cliente = $this->Cliente->find('list', array('fields' => array('Cliente.id', 'Cliente.nome')));
		$this->set('cliente', $cliente);
		
		//Carregamos o array campanha promotor para dizer quais os promotores da campanha selecionada
		$arrayCampanhaPromotor = array();
		foreach($campanha['CampanhaPromotor'] as $campanhaPromotor){
			$arrayCampanhaPromotor[$campanhaPromotor['id']] = $campanhaPromotor['promotor_id'];
		}		
		$this->set('campanhaPromotor', $arrayCampanhaPromotor);
		
		//Carregamos o array campanha coordenador para o dizer quais os coordenadores da campanha selecionada
		$arrayCampanhaCoordenador = array();
		foreach($campanha['CampanhaCoordenador'] as $campanhaCoordenador){
			$arrayCampanhaCoordenador[$campanhaCoordenador['id']] = $campanhaCoordenador['coordenador_id'];
		}
		$this->set('campanhaCoordenador', $arrayCampanhaCoordenador);
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->loadModel("CampanhaPromotor");
			$this->CampanhaPromotor->create();
			$this->loadModel("CampanhaCoordenador");
			$this->CampanhaCoordenador->create();
			if ($this->Campanha->save($this->request->data)) {
				//Deletamos as relações com campanha e promotor
				foreach($campanha['CampanhaPromotor'] as $campanhaPromotor){
					$this->CampanhaPromotor->id = $campanhaPromotor['id'];
					$this->CampanhaPromotor->delete();
				}
				//Varremos o array para pegar os ids dos promotores selecionados
				foreach($this->request->data['Campanha']['promotor_id'] as $promotor_id){
					$data = array();
					$this->CampanhaPromotor->id = null;
					$data['CampanhaPromotor']['campanha_id'] = $this->Campanha->id;
					$data['CampanhaPromotor']['promotor_id'] = $promotor_id;
					$this->CampanhaPromotor->save($data);
				}
				
				//Deletamos as relações com campanha e coordenador
				foreach($campanha['CampanhaCoordenador'] as $campanhaCoordenador){
					$this->CampanhaCoordenador->id = $campanhaCoordenador['id'];
					$this->CampanhaCoordenador->delete();
				}
				//Varremos o array para pegar os ids dos promotores selecionados
				foreach($this->request->data['Campanha']['coordenador_id'] as $coordenador_id){
					$data = array();
					$this->CampanhaCoordenador->id = null;
					$data['CampanhaCoordenador']['campanha_id'] = $this->Campanha->id;
					$data['CampanhaCoordenador']['coordenador_id'] = $coordenador_id;
					$this->CampanhaCoordenador->save($data);
				}
				
				
				$this->Session->setFlash(__('A etapa 1 foi editada com sucesso, você foi direcionado para a segunda etapa!'));
				$this->redirect(array('action' => 'addEtapa2', $this->Campanha->id));
			} else {
				$this->Session->setFlash(__('A Campanha não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Campanha->read(null, $id);
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
		$this->Campanha->id = $id;
		if (!$this->Campanha->exists()) {
			throw new NotFoundException(__('Campanha inválida'));
		}
		if ($this->Campanha->saveField('deletado','1')) {
			$this->Session->setFlash(__('Campanha deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Campanha nao pode ser deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
