<?php 

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Pedro Lucas");
$cad->setEmail("pedro.lucas.fl@hotmail.com");
$cad->setSenha("3500990");


$cad->registrarVenda();
 ?>