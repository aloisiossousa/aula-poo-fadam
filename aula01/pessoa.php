<?php

include_once 'classes/pessoa.class.php';

$aluno = new Pessoa;
$aluno1 = new Pessoa;

$aluno->nome = "Mateus";
$aluno->email = "mateus@gmail.com";
$aluno1->nome = "Benua";

echo "O aluno {$aluno->nome} tem o email {$aluno->email} <br>";

echo "{$aluno1->nome}";

?>