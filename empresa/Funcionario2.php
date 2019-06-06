<?php

include_once('Pessoa2.php');

class Funcionario2 extends Pessoa2{
    private $cargo;
    private $dataAdmissao;
    private $departamento;

    function Funcionario2($no, $cpf, $idd, $carg, $data, $dep){
        // $this->nome = $no;
        // $this->cpf = $cpf;
        // $this->idade = $idd;

        // parent::__construct($no, $cpf, $idd);

        $this->setNome($no);
        $this->setCPF($cpf);
        $this->setIdade($idd);

        $this->cargo = $carg;
        $this->dataAdmissao = $data;
        $this->departamento = $dep;
    }

    function imprimir(){
        parent::imprimir();
        print("<br> ---Dados de Funcionario: ");
        print("<br>Cargo: ".$this->cargo);
        print("<br>Data Admissao: ".$this->dataAdmissao);
        print("<br>Departamento: ".$this->departamento);
    }

    function setCargo($carg){
        $this->cargo = $cargo;
    }

    function getCargo(){
        return $this->nome;
    }

    function setDataAdmissao($data){
        $this->dataAdmissao = $data;
    }

    function getDataAdmissao(){
        return $this->dataAdmissao;
    }

    function setDepartamento($dep){
        $this->departamento = $dep;
    }

    function getDepartamento(){
        return $this->departamento;
    }

}