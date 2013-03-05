public $fixtures = array('app.campanha');
public function startTest) {
$this->campanha = ClassRegistry::init('campanha');
}
public function testNoPassedData() {
   $data = Array()
   $this->assertFalse($this->campanha->save($data));
   $error_fields = array_keys($this->campanha->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('local', $error_fields);
   $this->assertTrue(in_array('data_inicio', $error_fields);
   $this->assertTrue(in_array('data_final', $error_fields);


}
public function testEmptyData() {
   $data = Array(
      'nome' => '',
      'local' => '',
      'data_inicio' => ''
	  'data_final' => ''


   )
   $this->assertFalse($this->campanha->save($data));
   $error_fields = array_keys($this->campanha->validationErrors);
   // Verifica se o campo deu erro na validação
   $this->assertTrue(in_array('nome', $error_fields);
   $this->assertTrue(in_array('local', $error_fields);
   $this->assertTrue(in_array('data_inicio', $error_fields);
   $this->assertTrue(in_array('data_final', $error_fields);


}
public $validate = Array(
   'nome' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um nome para o campanha',
         'required' => true
      )
   ),
   'local' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um local para a campanha',
         'required' => true
      )
   ),
      'data_inicio' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma data de inicio para a campanha',
         'required' => true
      )
   ),
      'data_final' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma data final para a campanha',
         'required' => true
      )
   )

);
)