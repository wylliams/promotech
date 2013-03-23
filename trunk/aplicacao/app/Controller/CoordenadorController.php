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
		$this->set('coordenador', $this->paginate('Coordenador', array('deletado' => '0')));
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
			throw new NotFoundException(__('Coordenador Inválido'));
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
			
			//Validando o upload do arquivo de foto
			$foto = $this->request->data['Pessoa']['foto'];
			
			if($foto['type'] == 'image/jpg' || $foto['type'] == 'image/jpeg' || $foto['type'] == 'image/png'){
				if($foto['size'] < 3000000){
					move_uploaded_file($foto['tmp_name'], ROOT_UPLOADS.$foto['name']);
					//var_dump($this->request->data);
					//die;
					$this->request->data['Pessoa']['foto'] = $foto['name'];
					$this->request->data['Coordenador']['id'] = $this->request->data['Pessoa']['id'];
					if ($this->Coordenador->saveAll($this->request->data)) {
						$this->Session->setFlash(__('O coordenador foi salvo com sucesso'));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('O coordenador não pode ser salvo, por favor, tente novamente.'));
					}
				}else{
					$this->Session->setFlash(__('O arquivo deve ter no máximo 3MB.'));
				}
			}else{
				$this->Session->setFlash(__('O arquivo de foto deve esta no formado JPG ou PNG.'));
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
		$coordenador = $this->Coordenador->read();
		$fotoAntes = $this->Coordenador->data['Pessoa']['foto'];
		
		if (!$this->Coordenador->exists() || $coordenador['Coordenador']['deletado'] == 1) {
			throw new NotFoundException(__('Coordenador inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//Validando o upload do arquivo de foto
			$foto = $this->request->data['Pessoa']['foto'];
			
			if($foto['name'] == ''){
				$this->request->data['Pessoa']['foto'] = $fotoAntes;
				if ($this->Coordenador->saveAll($this->request->data)) {
					$this->Session->setFlash(__('O coordenador foi salvo com sucesso'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('O coordenador não pode ser salvo, por favor, tente novamente.'));
				}
			}else{
				if($foto['type'] == 'image/jpg' || $foto['type'] == 'image/jpeg' || $foto['type'] == 'image/png'){
					if($foto['size'] < 3000000){
						move_uploaded_file($foto['tmp_name'], ROOT_UPLOADS.$foto['name']);
						//var_dump($this->request->data);
						//die;
						$this->request->data['Pessoa']['foto'] = $foto['name'];
						$this->request->data['Coordenador']['id'] = $this->request->data['Pessoa']['id'];
						if ($this->Coordenador->saveAll($this->request->data)) {
							$this->Session->setFlash(__('O coordenador foi salvo com sucesso'));
							$this->redirect(array('action' => 'index'));
						} else {
							$this->Session->setFlash(__('O coordenador não pode ser salvo, por favor, tente novamente.'));
						}
					}else{
						$this->Session->setFlash(__('O arquivo deve ter no máximo 3MB.'));
					}
				}else{
					$this->Session->setFlash(__('O arquivo de foto deve esta no formado JPG ou PNG.'));
				}
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
			throw new NotFoundException(__('Coordenador Inválido'));
		}
		if ($this->Coordenador->saveField('deletado','1')) {
			$this->Session->setFlash(__('Coordenador deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coordenador não foi deltado'));
		$this->redirect(array('action' => 'index'));
	}
}
