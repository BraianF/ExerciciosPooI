<?php
	/**
	 * Created by PhpStorm.
	 * User: braian
	 * Date: 22/03/19
	 * Time: 23:24
	 */
	
	class Transacao {
		private $identificador;
		private $valor;
		
		public function __construct($identificador){
			$this->identificador = $identificador;
		}
		
		
		public function getIdentificador() {
			return $this->identificador;
		}
		
		public function setIdentificador($identificador){
			$this->identificador = $identificador;
		}
		
		public function getValor() {
			return $this->valor;
		}
		
		public function setValor($valor){
			$this->valor = $valor;
		}
		
		
		public function transferencia($contaOrigem, $contaDestino, $valor){
			//origem e destino são objetos do tipo Conta
			$this->valor = $valor;
			if ( $contaOrigem->saque($valor) ){
				$contaDestino->deposito($valor);
				return true;
			}
			return false;
		}
		
		
	}