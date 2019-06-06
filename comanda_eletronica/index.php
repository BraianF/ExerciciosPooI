<?php
	require_once 'Produto.php';
	require_once 'ItemComanda.php';
	require_once 'Comanda.php';
	
	$produto1 = new Produto(1, "Coxinha", 3.5);
	$produto2 = new Produto(2, "Cafe", 0.5);
	$produto3 = new Produto(3, "suco", 3.5);
	
	$comanda1 = new Comanda(10);
	$comanda2 = new Comanda(11);
	
	$comanda1->adicionarItemComanda($produto1, 2);
	$comanda1->adicionarItemComanda($produto1, 2);
	$comanda1->adicionarItemComanda($produto3, 1);

	$comanda1->imprimirItensComanda();