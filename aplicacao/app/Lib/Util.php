<?php
class Util{
	
	public function __construct(){}
	
	
	public static function retornaFarol($strData1,$strData2){
		
		list($intDia1,$intMes1,$intAno1) = explode("/", $strData1);
		list($intDia2,$intMes2,$intAno2) = explode("/", $strData2);
		
		$time1 = mktime(0,0,0,$intMes1,$intDia1,$intAno1);
		$time2 = mktime(0,0,0,$intMes2,$intDia2,$intAno2);
		
		if($time1 > $time2)
			return "<img src='img/verde.gif' />&nbsp;";
		else if($time1 < $time2)
			return "<img src='img/vermelho.gif' />&nbsp;";
		else
			return "<img src='img/laranja.gif' />&nbsp;";
		
	}
	
	/**
	 * Método que retorna o último dia do mês e o ano passados por parâmetro
	 * @param Int $mes
	 * @param Int $ano
	 * @static
	 * @return Int
	 */
	public static function ultimoDiaMes($mes,$ano){
		return date("d",mktime(0,0,0,$mes + 1,0,$ano));
	}
	
	public static function getTimesTamp($dataPtBr){
		$arrayData = explode(" ", $dataPtBr);
		if(count($arrayData) == 2){
			$strData = $arrayData[0];
			$strHora = $arrayData[1]; 
		}else{
			$strHora = "00:00:00";
		}
		list($intDia,$intMes,$intAno) = explode("/", $strData);
		$arrayHora = explode(":", $strHora);
		if(count($arrayHora) == 3){
			list($intHora,$intMin,$intSeg) = explode(":", $strHora);
		}else if(count($arrayHora) == 2){
			list($intHora,$intMin) = explode(":", $strHora);
			$intSeg = 0;
		}
		return mktime((int)$intHora,(int)$intMin,(int)$intSeg,(int)$intMes,(int)$intDia,(int)$intAno);
	}
	
	public static function getBomDiaBoaTardeBoaNoite(){
		$hora = date("H");
		if($hora >= 0 && $hora < 12)
			return "Bom dia";
		if($hora >= 12 && $hora < 18)
			return "Boa tarde";
		else
			return "Boa noite";
	}
	
	/**
	 * Mëtodo que tem a função de inverter o formato de data original
	 * Caso a data venha no formato ptbr, é invertido para o fotmato usa
	 * Caso venha no USA, inverte para o ptbr
	 * Caso venha hora, retorna com hora, sem os segundos
	 * Caso não venha com hora, retorna sem hora
	 * @param string $strData
	 * @static
	 * @access public
	 * @return string
	 */
	public static function inverteData($strData){
		$strData = trim($strData);
		$arrayData = explode(" ", $strData);
		
		$data = $arrayData[0];
		$hora = (isset($arrayData[1])) ? " " . substr($arrayData[1], 0,5) : "";
		
		/* ptbr to usa */
		if(strpos($data, "/")){
			list($dia,$mes,$ano) = explode("/", $data);
			return $ano . "-" . $mes . "-" . $dia . $hora;
		}
		/* usa to ptbr */
		else if(strpos($data, "-")){
			list($ano,$mes,$dia) = explode("-", $data);
			return $dia . "/" . $mes . "/" . $ano . $hora;
		}
	}

	
	
	/**
	 * Método que retira os acentos de uma String e a retorna
	 * @param String $str
	 * @access public
	 * @static
	 * @return String
	 */
	public static function retiraAcento($str){
		$arrAcentos		= array("Á","É","Í","Ó","Ú","Â","Ê","Î","Ô","Û","Ã","Ñ","Õ","Ä","Ë","Ï","Ö","Ü","À","È","Ì","Ò","Ù","á","é","í","ó","ú","â","ê","î","ô","û","ã","ñ","õ","ä","ë","ï","ö","ü","à","è","ì","ò","ù",".",",",":",";","...","ç","%","?","/","\\","","","'","!","@","#","$","*","(",")","+","=","{","}","[","]","|","<",">","\"","&ordf;","&ordm;","&deg;","","","&raquo;","-","ª","º","»","´","~","&","°","²","³");
		$arrSemacento	= array("a","e","i","o","u","a","e","i","o","u","a","n","o","a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","a","n","o","a","e","i","o","u","a","e","i","o","u","","","","","","c","_porcento","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","e","","2","3");
		for($intPos = 0 ; $intPos < count($arrAcentos) ; $intPos++){
			$str = str_replace($arrAcentos[$intPos],$arrSemacento[$intPos],$str,$cont);
		}
		return $str;
	}

	

	/**
	 * Método responsável por retornar o dia da semana em português
	 * @param int $intDia
	 * @param int $intMes
	 * @param int $intAno
	 */
	public static function getDiaDaSemana($intDia = null, $intMes = null, $intAno = null){
		
		$intDia = (is_null($intDia)) ? date("d") : $intDia;
		$intMes = (is_null($intMes)) ? date("m") : $intMes;
		$intAno = (is_null($intAno)) ? date("Y") : $intAno;
		
		switch(date('N', mktime(0, 0, 0, $intMes, $intDia, $intAno))){
			case 1:
				$strRetorno = 'segunda-feira';
				break;
			case 2:
				$strRetorno = 'terça-feira';
				break;
			case 3:
				$strRetorno = 'quarta-feira';
				break;
			case 4:
				$strRetorno = 'quinta-feira';
				break;
			case 5:
				$strRetorno = 'sexta-feira';
				break;
			case 6:
				$strRetorno = 'sábado';
				break;
			case 7:
				$strRetorno = 'domingo';
				break;
		}
		
		return $strRetorno;
	}

	/**
	 * Retorna a extensão de um arquivo atravéz do fileName informado
	 * @param String $strFileName
	 * @static
	 * @return String
	 */
	public static function getExtensao($strFileName){
		$pecas = explode(".", $strFileName);
		$tam = count($pecas);
		return $pecas[$tam - 1];
	}

	/**
	 * Método usado na geração de senhas aleatórias
	 * @param $intTam
	 * @access public
	 * @static
	 * @return string
	 */
	public static function gerarSenha($intTam = 6){
		$array = array(
			array("1","2","3","4","5","6","7","8","9"),
			array("a","b","c","d","e","f","g","h","k","m","n","p","q","r","s","t","u","v","x","z")
		);
		$strSenha = "";
		for($i = 0 ; $i  < $intTam ; $i++ ){
			$key = rand(0,count($array)-1);
			$strSenha .= $array[$key][rand(0,count($array[$key]) - 1)];
		}
		return $strSenha;
	}

	/**
	 * Método que retorna uma string passada por parâmetro em formato de url
	 * @param String $strTitulo
	 * @access public
	 * @return String
	 */
	public static function formatarTituloParaUrl($strTitulo){
		// retira todos os acentos e caracteres especiais
		$strTitulo = str_replace(" - ", " ", $strTitulo);
		$strTitulo = self::retiraAcento($strTitulo);
		// retita os espaços em branco e troca para um "-"
		$strTitulo = str_replace(" ", "-", $strTitulo);
		return strtolower($strTitulo);
	}
	
	
	/**
	 * @static
	 * @access public
	 * @param string $orderBy
	 */
	public static function setaOrdenacao($orderBy){
		if(isset($_POST["strTipoOrderBy"]) && isset($_POST["strOrderBy"])){
			if($_POST["strOrderBy"] == $orderBy){
				if(strtolower($_POST["strTipoOrderBy"]) == "asc"){
					return "<img src=\"img/seta-baixo.gif\" />";
				}else if(strtolower($_POST["strTipoOrderBy"]) == "desc"){
					return "<img src=\"img/seta-cima.gif\" />";
				}
			}else{
				return "";
			}
		}else{
			return "";
		}
	}
	
	/**
	 * Método que retorna os estados brasileiros
	 * @static
	 */
	public static function getEstados(){
		return array("AC"=>"Acre", 
					 "AL"=>"Alagoas", 
					 "AM"=>"Amazonas", 
					 "AP"=>"Amapá",
					 "BA"=>"Bahia",
					 "CE"=>"Ceará",
					 "DF"=>"Distrito Federal",
					 "ES"=>"Espírito Santo",
					 "GO"=>"Goiás",
					 "MA"=>"Maranhão",
					 "MT"=>"Mato Grosso",
					 "MS"=>"Mato Grosso do Sul",
					 "MG"=>"Minas Gerais",
					 "PA"=>"Pará",
					 "PB"=>"Paraíba",
					 "PR"=>"Paraná",
					 "PE"=>"Pernambuco",
					 "PI"=>"Piauí",
					 "RJ"=>"Rio de Janeiro",
					 "RN"=>"Rio Grande do Norte",
					 "RO"=>"Rondônia",
					 "RS"=>"Rio Grande do Sul",
					 "RR"=>"Roraima",
					 "SC"=>"Santa Catarina",
					 "SE"=>"Sergipe",
					 "SP"=>"São Paulo",
					 "TO"=>"Tocantins");
	}
	
	/**
	 * Método que retorna os meses do ano
	 * @static
	 */
	public static function getMeses($index = false) {
		$meses = array("01"=>"Janeiro",
					 "02"=>"Fevereiro",
					 "03"=>"Março",
					 "04"=>"Abril",
					 "05"=>"Maio",
					 "06"=>"Junho",
			  		 "07"=>"Julho",
					 "08"=>"Agosto",
					 "09"=>"Setembro",
					 "10"=>"Outubro",
					 "11"=>"Novembro",
					 "12"=>"Dezembro"); 
		return $index ? $meses[$index]: $meses;
	}
	
	
	/**
	 * Método que gera um option com números de x até y
	 * @static
	 */
	public static function gerarOptionNumerico($inicio = 1, $fim = 100, $valorChecked="") {
		
		$retorno = "";
		for ($i = $inicio; $i <= $fim; $i++) { 
			$marcarChecked = ($valorChecked == $i)?" selected ":""; 
			$retorno .= "<option ". $marcarChecked  ." value='".$i."'>".$i."</option>";
		}
		
		return $retorno;
	}
	
	public static function getSituacaoAvaliacaoPresenca($nota1 = null,$nota2 = null,$presencaTotal = null,$presenca = null,$boolNotaLancada = true){
		
		/* passando as notas para double precision */
		$nota1 	= str_replace(",", ".", $nota1);
		$nota2 	= str_replace(",", ".", $nota2);
		
		$porcentagem = 75; // 75 % de presença nas aulas para aprovação
		
		if($presencaTotal == 0){
			$presencaTotal = 1;
		}
		
		if ($nota1 !== "" && $nota2 !== ""){
			if($nota1 >= 7 && $nota2 >= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=green>Aprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}		
			}else if($nota1 <= 7 && $nota2 >= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=green>Aprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}else if($nota1 >= 7 && $nota2 <= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=green>Aprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}else if($nota1 <= 7 && $nota2 <= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=red>Reprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}				
		}else if($nota1 !== "" && $nota2 === ""){
			if($nota1 >= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=green>Aprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}else{
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=orange>Recuperação</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}				
		}else if($nota1 === "" && $nota2 !== ""){
			if ($nota2 >= 7){
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=green>Aprovado</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}else{
				if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
					return "<font color=orange>Recuperação</font>";
				}else{
					return "<font color=orange>Andamento</font>";
				}
			}
		}else if($nota1 === "" && $nota2 === ""){
			if( ($presenca / $presencaTotal) >= ($porcentagem / 100) ){
				return "<font color=orange>Andamento</font>";
			}else if ( (($presenca / $presencaTotal) <= ($porcentagem / 100))&& (($presenca / $presencaTotal) != 0) ){
				return "<font color=orange>Reposição</font>";
			}else{
				return "";
			}
		}
		
	}
	
	public static function getResultadoAvaliacaoPresenca($nota1 = null,$nota2 = null){
		
		$nota1 	= str_replace(",", ".", $nota1);
		$nota2 	= str_replace(",", ".", $nota2);
		
		if($nota1 > $nota2){
			return $nota1;
		}else if($nota2 > $nota1){
			return $nota2;
		}else if($nota2 == $nota1){
			return $nota2;
		}else{
			return "";
		}
	}
	
}
?>