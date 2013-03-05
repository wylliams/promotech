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