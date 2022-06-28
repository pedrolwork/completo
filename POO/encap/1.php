<?php 

class Pessoa{

	public $nome = "Ramus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";		
		echo $this->senha . "<br/>";
	}

}

$obejeto = new Pessoa();

//echo $obejeto->senha . "<br/>";

$obejeto->verDados();

 ?>