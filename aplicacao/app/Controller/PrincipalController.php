<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Util', 'Lib');
/**
 * Principal Controller
 *
 * @property Promotor $Promotor
 * @property SessionComponent $Session
 */
class PrincipalController extends AppController {


/**
 * index method
 *
 * @return void
 */
 	public function email(){
 		
 		$this->loadModel('Campanha');
		$this->loadModel('Compromisso');
		
		$diaDaSemana = Util::getDiaDaSemana(date('d'), date('m'), date('Y'));
		$hoje = date("Y-m-d");
		$fimDaSemana = date("Y-m-d", mktime(0,0,0,date('m'), date('d') + 4, date('Y')));
		if($diaDaSemana == 'segunda-feira'){
			$arrayCampanhas = $this->Campanha->query("select * from campanha where data_inicio >= '$hoje' or data_inicio <= '$fimDaSemana'");
			$arrayCompromissos = $this->Compromisso->query("select * from compromisso where data >= '$hoje' or data <= '$fimDaSemana'");
		
			
			$campanhas = "<table>";
			foreach($arrayCampanhas as $campanha){
				$campanhas .= "<tr><td>Titulo: </td><td>".$campanha['campanha']['nome']."</td></tr>";
				$campanhas .= "<tr><td>Local: </td><td>".$campanha['campanha']['local']."</td><tr>";
				$campanhas .= "<tr><td>Data: </td><td>".Util::inverteData($campanha['campanha']['data_inicio'])."</td><tr>";
				$campanhas .= "<tr><td>&nbsp;</td><td>&nbsp;</td><tr>";
			}
			$campanhas .= "</table>";
			
			$compromissos = "<table>";
			foreach($arrayCompromissos as $compromisso){
				$compromissos .= "<tr><td>Descricao: </td><td>".$compromisso['compromisso']['descricao']."</td></tr>";
				$compromissos .= "<tr><td>Data: </td><td>".Util::inverteData($compromisso['compromisso']['data'])."</td></tr>";
				$campanhas .= "<tr><td>&nbsp;</td><td>&nbsp;</td><tr>";
			}
			$compromissos .= "</table>";
			
			$Email = new CakeEmail('smtp');
			$Email->template('default', 'default');
			$Email->emailFormat('html');
			$Email->to('danielhenrique_1303@hotmail.com');
			$Email->subject('Agenda da Semana Promotech');
			$Email->viewVars(array('campanhas' => $campanhas, 'compromissos' => $compromissos));
			$Email->send();
		}
		$this->redirect(array('action' => 'index'));
 	}
 	

/**
 * index method
 *
 * @return void
 */
	public function index() {		
	}
}