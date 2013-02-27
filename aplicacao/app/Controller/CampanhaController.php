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
	public $components = array('Session');

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
			//adicionamos ao array de promotores todos os promotores que estão no relacionamento
			$arrayPromotor[] = $this->Promotor->find('list', array('conditions' => array('Promotor.id' => $idPromotor),
													 'fields' => array('Promotor.id', 'Promotor.nome')));
		
		}
		//carregamos o array de promotores na view
		$this->set('promotor', $arrayPromotor);
		
		//buscamos as relações com coordenadores
		$arrayCampanhaCoordenador= $campanha['CampanhaCoordenador'];
		$arrayCoordenador = array();
		foreach($arrayCampanhaCoordenador as $idCampanhaCoordenador => $idCoordenador){
			//adicionamos ao array de coordenadores todos os coordenadores da relação
			$arrayCoordenador[] = $this->Coordenador->find('list', array('conditions' => array('Coordenador.id' => $idCoordenador),
													 'fields' => array('Coordenador.id', 'Coordenador.nome')));
		
		}
		//carregamos o array de coordenadores na view
		$this->set('coordenador', $arrayCoordenador);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//Carregamos o Model promotor para exibir a lista de promotores para ser selecionado na view		
		$this->loadModel('Promotor');
		$promotor = $this->Promotor->find('list', array('conditions' => array('Promotor.deletado' => '0'),'fields' => array('Promotor.id','Promotor.nome')));
		$this->set('promotor', $promotor);
		
		//Carregamos o Model coordenador para exibir a lista de coordenadores para ser selecionado na view		
		$this->loadModel('Coordenador');
		$coordenador = $this->Coordenador->find('list', array('conditions' => array('Coordenador.deletado' => '0'),'fields' => array('Coordenador.id','Coordenador.nome')));
		$this->set('coordenador', $coordenador);
		
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
				$this->Session->setFlash(__('A Campanha foi salva com sucesso!'));
				$this->redirect(array('action' => 'index'));				
			} else {
				$this->Session->setFlash(__('A Campanha não pode ser salva. Por favor, tente novamente.'));
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
		$promotor = $this->Promotor->find('list', array('fields' => array('Promotor.id','Promotor.nome')));
		$this->set('promotor', $promotor);
		
		//Carregamos o Model coordenador para exibir a lista de coordenadores para ser selecionado na view		
		$this->loadModel('Coordenador');
		$coordenador = $this->Coordenador->find('list', array('fields' => array('Coordenador.id','Coordenador.nome')));
		$this->set('coordenador', $coordenador);
		
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
				
				
				$this->Session->setFlash(__('A Campanha foi editada com sucesso'));
				$this->redirect(array('action' => 'index'));
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
