<?php

declare(strict_types = 1);

include_once 'classes/conta.php';
include_once 'classes/contaCorrente.php';
include_once 'classes/contaPoupanca.php';

// $cp = new ContaPoupanca(123456, 654321, 100);
// $cp->sacar(10);
// $cp->depositar(20);
// $cp->sacar(10);

echo "################ ############### ############## \n";

$cc = new ContaCorrente(123456, 654321, 1000, 100);
$cc->sacar(50);
$cc->depositar(100);
$cc->sacar(1500);











// $cc->depositar(20);
// $cc->sacar(10);





