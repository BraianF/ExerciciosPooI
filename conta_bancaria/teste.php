<?php
	require_once 'ContaBancaria.php';
	require_once 'Transacao.php';
	
	$c1 = new ContaBancaria('1234-4', '4321-0');
	$c1->deposito(100);
	echo "\nA conta 1 está na agência ".$c1->getAgencia()."<br>";
	echo "\nO numero da conta é ".$c1->getConta()."<br>";
	echo "\nO saldo atual da conta 1 é :".$c1->getSaldo()."<br>";
	
	$c2 = new ContaBancaria('4213-1', '12321-7');
	$c2->deposito(2500);
	echo "\nA conta 2 está na agência ".$c2->getAgencia()."<br>";
	echo "\nO numero da conta é ".$c2->getConta()."<br>";
	echo "\nO saldo atual da conta 2 é :".$c2->getSaldo()."<br>";
	
	$transf = new Transacao('123123123-1');
	$valor = 450;
	if ($transf->transferencia($c2, $c1, $valor)){
		echo "\n Transferência feita com sucesso, no valor de ".$valor."<br>";
	}else{
		echo "Não foi possível efetuar a transferência!"."<br>";
	}
	echo "\nO saldo atual da conta 1 é :".$c1->getSaldo()."<br>";
	echo "\nO saldo atual da conta 2 é :".$c2->getSaldo()."<br>";