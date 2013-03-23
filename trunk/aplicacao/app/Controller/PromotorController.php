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
		$this->set('promotor', $this->paginate('Promotor', array('deletado' => '0')));
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
		$promotor = $this->Promotor->read();
		if (!$this->Promotor->exists() || $promotor['Promotor']['deletado'] == 1) {
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
			
			//Validando o upload do arquivo de foto
			$foto = $this->request->data['Pessoa']['foto'];
			
			if($foto['type'] == 'image/jpg' || $foto['type'] == 'image/jpeg' || $foto['type'] == 'image/png'){
				if($foto['size'] < 3000000){
					move_uploaded_file($foto['tmp_name'], ROOT_UPLOADS.$foto['name']);
					//var_dump($this->request->data);
					//die;
					$this->request->data['Pessoa']['foto'] = $foto['name'];
					$this->request->data['Promotor']['id'] = $this->request->data['Pessoa']['id'];
					if ($this->Promotor->saveAll($this->request->data)) {
						$this->Session->setFlash(__('O promotor foi salvo com sucesso'));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('O promotor não pode ser salvo, por favor, tente novamente.'));
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
		$this->Promotor->id = $id;
		$promotor = $this->Promotor->read();
		$fotoAntes = $this->Promotor->data['Pessoa']['foto'];
		
		if (!$this->Promotor->exists() || $promotor['Promotor']['deletado'] == 1) {
			throw new NotFoundException(__('Promotor inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//Validando o upload do arquivo de foto
			$foto = $this->request->data['Pessoa']['foto'];
			
			if($foto['name'] == ''){
				$this->request->data['Pessoa']['foto'] = $fotoAntes;
				if ($this->Promotor->saveAll($this->request->data)) {
					$this->Session->setFlash(__('O promotor foi salvo com sucesso'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('O promotor não pode ser salvo, por favor, tente novamente.'));
				}
			}else{
				if($foto['type'] == 'image/jpg' || $foto['type'] == 'image/jpeg' || $foto['type'] == 'image/png'){
					if($foto['size'] < 3000000){
						move_uploaded_file($foto['tmp_name'], ROOT_UPLOADS.$foto['name']);
						//var_dump($this->request->data);
						//die;
						$this->request->data['Pessoa']['foto'] = $foto['name'];
						$this->request->data['Promotor']['id'] = $this->request->data['Pessoa']['id'];
						if ($this->Promotor->saveAll($this->request->data)) {
							$this->Session->setFlash(__('O promotor foi salvo com sucesso'));
							$this->redirect(array('action' => 'index'));
						} else {
							$this->Session->setFlash(__('O promotor não pode ser salvo, por favor, tente novamente.'));
						}
					}else{
						$this->Session->setFlash(__('O arquivo deve ter no máximo 3MB.'));
					}
				}else{
					$this->Session->setFlash(__('O arquivo de foto deve esta no formado JPG ou PNG.'));
				}
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
