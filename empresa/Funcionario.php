<?php

include_once('Pessoa.php');

class Funcionario extends Pessoa{
    var $cargo;
    var $dataAdmissao;
    var $departamento;

    function imprimir(){
        parent::imprimir();
        print("<br> ---Dados de Funcionario: ");
        print("<br>Cargo: ".$this->cargo);
        // print("<br>Data Admissao: ".$this->dataAdmissao);
        // print("<br>Departamento: ".$this->departamento);
    }

    function setCargo($carg){
        $this->cargo = $carg;
    }

    function getCargo(){
        return $this->nome;
    }

}