public $fixtures = array('app.Promotor');
public function startTest) {
$this->Promotor = ClassRegistry::init('Promotor');
}
public function testNoPassedData() {
   $data = Array()
   $this->assertFalse($this->Promotor->save($data));
   $error_fields = array_keys($this->Promotor->validationErrors);
   // Verifica se o campo deu erro na valida��o
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
   // Verifica se o campo deu erro na valida��o
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

public $validate = Array(
   'nome' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um nome para o promotor',
         'required' => true
      )
   ),
      'foto' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma foto para o promotor',
         'required' => true
		),
		'format' => Array(
         'rule' => array('JPG'),
         'message' => 'A foto deve ter formato .JPG'
		),
	),
	'categoria' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma categoria para o promotor',
         'required' => true
      )
   ),
   'altura' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0);
		 'rule' => array('comparison', '<', 3);
         'message' => 'A altura n�o pode ser 0 ou maior que 3m'
      ),
      'format' => Array(
         'rule' => array('float'),
         'message' => 'A altura deve ter um valor num�rico v�lido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado uma altura para o promotor',
         'required' => true
      )
   ),
      'email' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um email para o promotor',
         'required' => true
      )
   ),
    'manequim' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0);
         'message' => 'O manequim n�o pode ser 0'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'O manequim deve ter um valor num�rico v�lido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um manequim para o promotor',
         'required' => true
      )
   ),
      'email' => Array(
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um email para o promotor',
         'required' => true
      )
   ),
    'peso' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0);
         'message' => O peso n�o pode ser 0 ou maior que 3m'
      ),
      'format' => Array(
         'rule' => array('float'),
         'message' => 'O peso deve ter um valor num�rico v�lido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um peso para o promotor',
         'required' => true
      )
   ),
    'numero_calcado' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0);
         'message' => 'O numero do cal�ado n�o pode ser 0 '
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'O numero cal�ado deve ter um valor num�rico v�lido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um numero do cal�ado para o promotor',
         'required' => true
      )
   ),
   'telefone_celular' => Array(
      'valid' => Array(
         'rule' => array('comparison', '>', 0),
         'message' => 'O telefone n�o pode ser 000000000'
      ),
      'format' => Array(
         'rule' => array('numeric'),
         'message' => 'O telefone deve ter um valor num�rico v�lido'
      ),
      'required' => Array(
         'rule' => '/\S/',
         'message' => 'Deve ser especificado um telefone celular para o promotor',
         'required' => true
      )
   ),


);
