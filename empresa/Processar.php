<?php
include_once ('Funcionario2.php');

session_start();

if (!isset($_SESSION['arrayFuncionarios'])){
    $_SESSION['arrayFuncionarios'] = array();
    $arrayFuncionarios = $_SESSION['arrayFuncionarios'];
}else{
    $arrayFuncionarios = $_SESSION['arrayFuncionarios'];
}

if(isset($_POST['txtNome'])){

    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCpf'];
    $cargo = $_POST['txtCargo'];
    $departamento = $_POST['txtDepartamento'];
    // $ = $_POST['txt'];

    $func2 = new Funcionario2($nome, $cpf, "20", $cargo, "01022010", $departamento);
    //$func2->imprimir();

    //$arrayFuncionarios = array();
    // $arrayFuncionarios = $_SESSION['arrayFuncionarios'];
    $arrayFuncionarios[] = $func2;

    $_SESSION['arrayFuncionarios'] = $arrayFuncionarios;
}else{
    
}

echo "<pre>";
var_dump($arrayFuncionarios);
//print_r($arrayFuncionarios);
echo "</pre>";