<?php

declare(strict_types = 1);

require_once 'classes/produto.php';
require_once 'classes/carrinho.php';
require_once 'classes/servico.php';

$p1 = new Produto('Camiseta', 25);
$s1 = new Servico('Visita Técnica', 100);

$carrinho = new Carrinho();
$carrinho->insere($p1);
$carrinho->insere($s1);

print $carrinho->total();




