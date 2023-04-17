<?php

require_once 'index.php';
require_once 'classe/pessoa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];

    $pessoa = new Pessoa($nome, $idade, $email);

    echo "Pessoa criada: " . $pessoa->getNome() . ", " . $pessoa->getIdade() . ", " . $pessoa->getEmail();
}
?>
