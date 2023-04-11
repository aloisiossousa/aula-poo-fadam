<?php
interface MinhaInterface{
    public function metodo();
    public function metodo1();
}

class Classe implements MinhaInterface{
    public function metodo(){
        echo "Teste1";
    }
    public function metodo1(){
        echo "Teste2";
    }
}

$classe = new Classe();
$classe->metodo1();


?>