<?php
	/**
	 * Created by PhpStorm.
	 * User: braian
	 * Date: 17/05/19
	 * Time: 20:32
	 */
	
	class ItemComanda {
		private $produtoComanda;
		private $quantidadeProduto;
		
		/**
		 * ItemComanda constructor.
		 * @param $produtoComanda
		 * @param $quantidadeProduto
		 */
		public function __construct($produtoComanda, $quantidadeProduto) {
			$this->produtoComanda = $produtoComanda;
			$this->quantidadeProduto = $quantidadeProduto;
		}
		
		/**
		 * @return mixed
		 */
		public function getProdutoComanda() {
			return $this->produtoComanda;
		}
		
		/**
		 * @param mixed $produtoComanda
		 */
		public function setProdutoComanda($produtoComanda) {
			$this->produtoComanda = $produtoComanda;
		}
		
		/**
		 * @return mixed
		 */
		public function getQuantidadeProduto() {
			return $this->quantidadeProduto;
		}
		
		/**
		 * @param mixed $quantidadeProduto
		 */
		public function setQuantidadeProduto($quantidadeProduto) {
			$this->quantidadeProduto = $quantidadeProduto;
		}
	}