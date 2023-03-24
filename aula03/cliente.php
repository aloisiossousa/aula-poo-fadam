<?php

include_once 'classes/cliente.class.php';
include_once 'classes/carro.class.php';

$cliente = new Cliente;
$carro1 = new Carro;
$carro2 = new Carro;

$cliente->nome = "Caina Reis";
$cliente->contato = "caina@gmail.com";
$carro1->marca = "Fiat";

$carro1->$dono = $cliente;


echo "O cliente {$carro1->$dono->nome}, com o contato {$cliente->contato} fez a compra de uma carro da marca ", $carro1->marca, " Condição do carro" ,  $cliente->comprarCarro(),"<br>";

?>