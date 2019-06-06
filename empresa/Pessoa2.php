<?php

abstract class Pessoa2{
    private $nome;
    private $cpf;
    private $idade;
    private $menor;

    // function Pessoa2($no, $cpf, $idd){
    //     $this->nome = $no;
    //     $this->cpf = $cpf;
    //     $this->idade = $idd;
    // }

    function imprimir(){
        print("<br><br><br> ---Dados de Pessoa: ");
        print("<br>Nome: ".$this->nome);
        print("<br>CPF: ".$this->cpf);
        print("<br>Idade: ".$this->idade);
        print("<br>Menor de Idade: ".(($this->getMenor) ? "Sim" : "Não" ));
    }

    function setNome($no){
        $this->nome = $no;
    }

    function getNome(){
        return $this->nome;
    }

    function setCPF($cpf){
        $this->cpf = $cpf;
    }

    function getCPF(){
        return $this->cpf;
    }

    function setIdade($idd){
        if ($idd <= 18){
            $this->setMenor(true);
        }else{
            $this->setMenor(false);
        }
        $this->idade = $idd;
    }

    function getIdade(){
        return $this->idade;
    }

    private function setMenor($bool){
        $this->menor = $bool;
    }

    function getMenor(){
        return $this->menor;
    }
}