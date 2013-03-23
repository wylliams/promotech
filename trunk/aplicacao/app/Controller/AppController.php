<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $helpers = array('Js');
	public $components = array('Session','Auth');
	
	public function beforeFilter() {
	
		// Model de usuários
		$this->Auth->authenticate = array('Form' => array('userModel' => 'Usuario'));
		
		// Campos de usuário e senha
		$this->Auth->fields = array(
			'username' => 'username',
			'password' => 'password'
		);
		
		// Action da tela de login
		$this->Auth->loginAction = array(
			'controller' => 'usuario',
			'action' => 'login'
		);
		
		// Action da tela após o login (com sucesso)
		$this->Auth->loginRedirect = array(
			'controller' => 'campanha',
			'action' => 'index'
		);
		
		// Action para redirecionamento após o logout
		$this->Auth->logoutRedirect = array(
			'controller' => 'usuario',
			'action' => 'login'
		);
		
		// Mensagens de erro
		$this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);
		$this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);

		//var_dump($this->Auth);
		//die;
		
	}
	
}
