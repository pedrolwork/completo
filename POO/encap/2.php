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

class Progamador extends Pessoa {

	public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";		
		echo $this->senha . "<br/>";
	}

}

$obejeto = new Progamador();

//echo $obejeto->senha . "<br/>";

$obejeto->verDados();

 ?>