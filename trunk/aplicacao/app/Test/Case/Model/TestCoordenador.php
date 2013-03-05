public $fixtures = array('app.coordenador');
public function startTest) {
$this->coordenador = ClassRegistry::init('coordenador');
}
public function testNoPassedData() {
   $data = Array()
   $this->assertFalse($this->coordenador->save($data));
   $error_fields = array_keys($this->coordenador->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('telefone_celular', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);


}
public function testEmptyData() {
   $data = Array(
      'nome' => '',
      'telefone_celular' => '',
      'email' => ''


   )
   $this->assertFalse($this->coordenador->save($data));
   $error_fields = array_keys($this->coordenador->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('telefone_celular', $error_fields);
   $this->assertTrue(in_array('email', $error_fields);


}
public $validate = Array(
   'nome' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um nome para o coordenador',
         'required' => true
      )
   ),
   'telefone_celular' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0),
         'message' => 'O telefone celular não pode ser 000000000'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'O telefone celular deve ter um valor numérico válido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um telefone celular para o coordenador',
         'required' => true
      )
   ),
      'email' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um email para o coordenador',
         'required' => true
      )
   )

);