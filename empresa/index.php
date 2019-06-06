<?php

require_once ('Funcionario3.php');

$arrayFuncionario = array();

$arrayFuncionario[0] = new Funcionario3("Joao", 2222222222, 20,
"Professor", 10022010, "Coordenacao de TI");

$arrayFuncionario[0]->imprimir();
// $arrayFuncionario[0]->imprimir2();

// $arrayFuncionario[1] = new Funcionario3("Pedro", 2222222222, 20,
// "Professor", 10022010, "Coordenacao de TI");


// $arrayFuncionario[2] = new Funcionario3("Paulo", 2222222222, 20,
// "Professor", 10022010, "Coordenacao de TI");

// $arrayFuncionario[3] = new Funcionario3("Henrique", 2222222222, 20,
// "Professor", 10022010, "Coordenacao de TI");

// $$arrayFuncionario[3]->imprimir();
// $func2->imprimir();
// $func3->imprimir();
// $func4->imprimir();

// for($i = 0; $i < count($arrayFuncionario); $i++){
//     echo "<br>Posicao I: ".$i;
//     $func = $arrayFuncionario[$i];
//     $func->imprimir();
// }

// echo "<pre>";
// echo var_dump($func);
// echo "</pre>";

