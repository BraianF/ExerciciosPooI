<?php
	
	
	class Produto {
		private $codigoProduto;
		private $nomeProduto;
		private $precoUnitario;
		
		/**
		 * Produto constructor.
		 * @param $nomeProduto
		 * @param $codigoProduto
		 * @param $precoUnitario
		 */
		public function __construct($codigoProduto,$nomeProduto, $precoUnitario) {
			$this->codigoProduto = $codigoProduto;
			$this->nomeProduto = $nomeProduto;
			$this->precoUnitario = $precoUnitario;
		}
		
		/**
		 * @return string
		 */
		public function getNomeProduto() {
			return $this->nomeProduto;
		}
		
		/**
		 * @param mixed $nomeProduto
		 */
		public function setNomeProduto($nomeProduto) {
			$this->nomeProduto = $nomeProduto;
		}
		
		/**
		 * @return mixed
		 */
		public function getCodigoProduto() {
			return $this->codigoProduto;
		}
		
		/**
		 * @param mixed $codigoProduto
		 */
		public function setCodigoProduto($codigoProduto) {
			$this->codigoProduto = $codigoProduto;
		}
		
		/**
		 * @return mixed
		 */
		public function getPrecoUnitario() {
			return $this->precoUnitario;
		}
		
		/**
		 * @param mixed $precoUnitario
		 */
		public function setPrecoUnitario($precoUnitario) {
			$this->precoUnitario = $precoUnitario;
		}
	}
	
