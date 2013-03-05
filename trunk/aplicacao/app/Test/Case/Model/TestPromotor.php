public $fixtures = array('app.Promotor');
public function startTest) {
$this->Promotor = ClassRegistry::init('Promotor');
}
public function testNoPassedData() {
   $data = Array()
   $this->assertFalse($this->Promotor->save($data));
   $error_fields = array_keys($this->Promotor->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('foto', $error_fields);
   $this->assertTrue(in_array('categoria', $error_fields);
   $this->assertTrue(in_array('altura', $error_fields);
   $this->assertTrue(in_array('manequim', $error_fields);
   $this->assertTrue(in_array('peso', $error_fields);
   $this->assertTrue(in_array('telefone_celular', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);
}
public function testEmptyData() {
   $data = Array(
      'nome' => '',
      'foto' => '',
      'categoria' => ''
	  'altura' => ''
	  'manequim' => ''
	  'email' => ''
	  'peso' => ''
	  'numero_calcado' => ''
	  'telefone_celular' => ''
   )
   $this->assertFalse($this->Promotor->save($data));
   $error_fields = array_keys($this->Promotor->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('foto', $error_fields);
   $this->assertTrue(in_array('categoria', $error_fields);
   $this->assertTrue(in_array('altura', $error_fields);
   $this->assertTrue(in_array('manequim', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);
   $this->assertTrue(in_array('peso', $error_fields);
   $this->assertTrue(in_array('numero_calcado', $error_fields);
   $this->assertTrue(in_array('telefone_celular', $error_fields);
}
