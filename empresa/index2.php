<?php

// include_once ('Pessoa.php');
// include_once ('Funcionario.php');
include_once ('Funcionario2.php');
// Primeira parte
// $pes = new Pessoa();
// $pes->nome = "Pedro";
// // $pes->setNome("Pedro");
// $pes->imprimir();

// echo "<br><br>";

// $func = new Funcionario();

// $func->setNome("Funcionario 1 - Joao");
// $func->setCargo("Professor");
// $func->imprimir();

//Segunda parte
// $pes2 = new Pessoa2();

// $pes2->setNome("Jéferson");
// $pes2->imprimir();

$func2 = new Funcionario2("Pedro", "11111111111", "20", "Operador", "01022010", "Coordenação de TI");
$func2 = new Funcionario2("Joao", "11111111112", "20", "Tecnico", "01022010", "Coordenação de TI");
$func2 = new Funcionario2("Paulo", "11111111113", "20", "Auxiliar", "01022010", "Coordenação de TI");
$func2 = new Funcionario2("Henrique", "11111111114", "20", "Professor", "01022010", "Coordenação de TI");
$func2 = new Funcionario2("Anderson", "11111111115", "20", "Qualquer", "01022010", "Coordenação de TI");

$func2->imprimir();

// echo "<pre>";
// echo var_dump($func2);
// echo "</pre>";

