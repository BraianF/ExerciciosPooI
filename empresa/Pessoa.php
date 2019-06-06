<?php

class Pessoa{
    var $nome;
    var $cpf;
    var $idade;

    function imprimir(){
        // print("<br>Nome de Pessoa: ".$this->nome);
        print("<br>Nome de Pessoa: ".$this->getNome());
    }

    function setNome($no){
        $this->nome = $no;
    }

    function getNome(){
        return $this->nome;
    }

}