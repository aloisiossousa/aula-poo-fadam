<?php

include_once 'classes/empresa.class.php';
include_once 'classes/funcionario.class.php';


$funcionario = new Funcionario("Fabrica Leite", 100081828992, "Arnaldo Dias", "CEO", "Aloisio", "29283", "20032008","Professor");



echo "{$funcionario->nome}";


?>