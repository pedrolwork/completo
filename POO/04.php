<?php 

class edereco{

	private $logradoro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->logradoro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

}

$meuEndereco = new Endereco("Rua Walter Alencar", "1987", "Teresina");


 ?>