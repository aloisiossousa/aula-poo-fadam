<?php

class Animal{
    public $especie;
    public $habitat;
    public $alimentacao;

}

$toto = New Animal; //objeto

$toto.nadar();


function mostrar(){
    echo ("Cachorro");
}

function nadar(){
    echo "Teste saida";
}


?>