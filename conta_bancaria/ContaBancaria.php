<?php

class ContaBancaria
{
	//Deixei valores padrões para não retornar NULL
    private $agencia;
    private $conta;
    private $saldo = 0;
	private $limite = 1000;
	
	//construtor é chamado sempre que um objeto é criado - se não passar valores, considere nulos
	public function __construct($agencia=null, $conta=null){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = 0;
	}

    public function getAgencia(){
        return $this->agencia;
    }

    public function setAgencia($agencia){
        $this->agencia = $agencia;
    }

    public function getConta(){
        return $this->conta;
    }

    public function setConta($conta){
        $this->conta = $conta;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function deposito($quantia){
        $this->saldo += $quantia;
    }
	
	public function saque($quantia){
    	if ($this->saldo >= $quantia ){
			$this->saldo -= $quantia;
			return true;
		}
    	// O padrão é retornar falso
		echo "Saldo insuficiente!\n";
		return false;
	}
	
	



}

