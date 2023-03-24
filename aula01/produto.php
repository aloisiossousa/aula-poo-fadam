<?php

include_once 'classes/produto.class.php';

$produto1 = New Produto;
$produto2 = New Produto;

$produto1->codigo = 400;
$produto1->descricao = "CD - Zezo em concert 2023.";

$produto2->codigo = 401;
$produto2->descricao = "CD - Banda Choro - CE";

$produto1->imprimirEtiqueta();
$produto2->imprimirEtiqueta();

?>