<?php

abstract class Pessoa3{
    private $nome;
    private $cpf;
    private $idade;
    private $deMenor;

    function Pessoa3($novoNome, $novoCpf, $novoIdade){
        $this->nome = $novoNome;
        $this->cpf = $novoCpf;
        // $this->idade = $novoIdade;
        $this->setIdade($novoIdade);
    }

    function imprimir(){
        echo "<br><br> -- Dados de Pessoa";
        echo "<br> Nome: ".$this->nome;
        echo "<br> Cpf: ".$this->cpf;
        echo "<br> Idade: ".$this->idade;
        echo "<br> De Menor?: ";
        if( $this->getDeMenor() ){
            echo "É de menor.";
        }else{
            echo "Não é de menor.";
        }

        
    }

    function setNome($novoNome){
        $this->nome = $novoNome; 
    }

    function getNome(){
        return $this->nome; 
    }

    function setCpf($novoCpf){
        $this->cpf = $novoCpf;
    }

    function getCpf(){
        return $this->cpf;
    }

    function setIdade($novoIdade){
        $this->idade = $novoIdade;

        if ($this->idade < 18){
            $this->setDeMenor(true);
        }else{
            $this->setDeMenor(false);
        }
    }

    function getIdade(){
        return $this->idade;
    }

    private function setDeMenor($bool){
        $this->deMenor = $bool;
    }

    function getDeMenor(){
        return $this->deMenor;
    }


}