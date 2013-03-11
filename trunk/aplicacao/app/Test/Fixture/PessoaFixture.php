<?php
/**
 * PessoaFixture
 *
 */
class PessoaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'pessoa';

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Pessoa', 'records' => true, 'connection' => 'test');

}
