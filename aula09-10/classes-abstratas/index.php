<?php

declare(strict_types = 1);

// include_once 'classes/conta.php';
// include_once 'classes/contaCorrente.php';
// include_once 'classes/contaPoupanca.php';

require_once 'classes/conta.php';
require_once 'classes/contaCorrente.php';
require_once 'classes/contaPoupanca.php';

$cp = new ContaPoupanca(111, 222, 20);
$cp->sacar(10);
$cp->depositar(20);
$cp->sacar(10);

echo "################ ############### ############## \n";

$cc = new ContaCorrente(111,333,0, 100);
$cc->sacar(10);
$cc->depositar(20);
$cc->sacar(10);





