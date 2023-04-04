<?php


include_once 'classes/produto.class.php';
include_once 'classes/celular.class.php';
include_once 'classes/notebook.class.php';


$produto = new Produto("Moto","Moto","Moto");
$produto1 = new Celular("Moto","Moto","Moto","Moto","Moto","Moto");
$produto2 = new Notebook("Moto","Moto","Moto","Moto","Moto","Moto");


echo "{$produto->nome}";
echo "{$produto1->nome}";
echo "{$produto2->nome}";


?>