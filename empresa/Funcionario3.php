<?php

require_once("Pessoa3.php");

class Funcionario3 extends Pessoa3{
    private $cargo;
    private $dataAdmissao;
    private $departamento;

    function Funcionario3($novoNome, $novoCpf, 
        $novoIdade, $novoCargo, $novoData, 
        $novoDepartamento){

        $this->setNome($novoNome);
        $this->setCpf($novoCpf);
        $this->setIdade($novoIdade);

        $this->setCargo($novoCargo);
        $this->setDataAdmissao($novoData);
        $this->setDepartamento($novoDepartamento);

        //$this->nome = $novoNome;
        
    }

    function imprimir(){
        // parent::imprimir();
        echo "<br> -- Dados de Funcionario -- Novo";
        echo "<br> Nome: ".$this->getNome();
        echo "<br> Cpf do Funcionario: ".$this->getCpf();
        echo "<br> Idade: ".$this->getIdade();
        echo "<br> Cargo: ".$this->cargo;
        echo "<br> Data Admissao: ".$this->dataAdmissao;
        echo "<br> Departamento: ".$this->departamento;
    }

    function setCargo($novoCargo){
        $this->cargo = $novoCargo;
    }

    function setDataAdmissao($novoData){
        $this->dataAdmissao = $novoData;
    }

    function setDepartamento($novoDepartamento){
        $this->departamento = $novoDepartamento;
    }

}