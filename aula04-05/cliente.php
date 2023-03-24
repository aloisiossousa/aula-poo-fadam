<?php

include_once 'classes/conta.class.php';
include_once 'classes/contaCorrente.class.php';
include_once 'classes/contaPoupanca.class.php';

//$cliente = new Conta(001, 2002, "29/02/2020", "Aloisio", 0001, 500, true);

//$cliente = new ContaCorrente(001, 2002, "29/02/2020", "Aloisio", 0001, 500, true, 1000);

$cliente2 = new ContaCorrente(001, 2002, "29/02/2020", "Arnaldo", 0001, 500, true, 1000);

$cliente2->depositar(1000);
$cliente2->limite;
$cliente2->retirar(2000);
$cliente2->depositar(10000);


echo "Nome do Cliente {$cliente2->titular},";
echo " tem saldo em conta R$ {$cliente2->obterSaldo($quantia)}<br>";
echo "Cliente retirou {$cliente2->obterSaldo($quantia)}";

?>