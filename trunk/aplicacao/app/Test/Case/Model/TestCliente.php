public $fixtures = array('app.Cliente');
public function startTest) {
$this->Cliente = ClassRegistry::init('Cliente');
}
public function testNoPassedData() {
   $data = Array()
   $this->assertFalse($this->Cliente->save($data));
   $error_fields = array_keys($this->Cliente->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('telefone_fixo', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);
   $this->assertTrue(in_array('banco', $error_fields);
   $this->assertTrue(in_array('agencia', $error_fields);
   $this->assertTrue(in_array('conta', $error_fields);

}
public function testEmptyData() {
   $data = Array(
      'nome' => '',
      'telefone_fixo' => '',
      'email' => ''
	  'banco' => ''
	  'agencia' => ''
	  'email' => ''
	  'conta' => ''

   )
   $this->assertFalse($this->Cliente->save($data));
   $error_fields = array_keys($this->Cliente->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('telefone_fixo', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);
   $this->assertTrue(in_array('banco', $error_fields);
   $this->assertTrue(in_array('agencia', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);
   $this->assertTrue(in_array('conta', $error_fields);

}
public $validate = Array(
   'nome' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um nome para o cliente',
         'required' => true
      )
   ),
   'telefone_fixo' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0),
         'message' => 'O telefone não pode ser 000000000'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'O telefone deve ter um valor numérico válido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um telefone fixo para o cliente',
         'required' => true
      )
   ),
      'email' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um email para o cliente',
         'required' => true
      )
   ),
      'banco' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um banco para o cliente',
         'required' => true
      )
   ),
	  'agencia' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0),
         'message' => 'A agencia não pode ser 000000000'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'A agencia deve ter um valor numérico válido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma agencia para o cliente',
         'required' => true
		)	
	),
      'conta' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0),
         'message' => 'A conta não pode ser 000000000'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'A conta deve ter um valor numérico válido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma conta para o cliente',
         'required' => true
		)		
	)

);