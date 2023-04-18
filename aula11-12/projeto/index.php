<?php

declare(strict_types = 1);

require_once 'classes/produto.php';
require_once 'classes/carrinho.php';
require_once 'classes/servico.php';

$p1 = new Produto('Camiseta', 50);
$p2 = new Produto('Caneca', 30);
$p3 = new Produto('Computador', 3000);
$s1 = new Servico('Visita Técnica', 200);

$carrinho = new Carrinho();
$carrinho->insere($p1);
$carrinho->insere($p2);
$carrinho->insere($p3);
$carrinho->insere($s1);

print $carrinho->total();




