<?php
	class Comanda {
		private $numero;
		private $itemComanda = array(); //colecao
		private $precoTotal;
		
		/**
		 * Comanda constructor.
		 * @param $numero
		 */
		public function __construct($numero) {
			$this->numero = $numero;
		}
		
		function adicionarItemComanda(Produto $produto, int $quantidade ){
			$auxItemComanda = new ItemComanda($produto, $quantidade);
			$this->itemComanda[] = $auxItemComanda;
//			echo in_array($auxItemComanda, $this->itemComanda[]);
		}
		
		function imprimirItensComanda(){
			echo "Imprimindo itens da comanda: ";
			foreach ($this->itemComanda as $item){
				$auxProduto = $item->getProdutoComanda();
				$auxQuantidade = $item->getQuantidadeProduto();
				echo "<br> Nome do Produto: ". $auxProduto->getNomeProduto();
				echo "<br> - Quantidade: ". $auxQuantidade;
				echo "<br>";
			}
		}
	}