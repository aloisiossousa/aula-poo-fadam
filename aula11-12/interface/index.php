<?php
    interface MinhaInterface{
        public const MINHACONSTANTE = " Oi a todos"; 
        public function metodo1();
    }

    interface MinhaInterface2{
        public function metodo2();
        public function metodo3();
    }
    class Classe implements MinhaInterface, MinhaInterface2{
        public function metodo1(){
            echo "Olá ";
        }
        public function metodo2(){
            echo "Oi ";
        }
        public function metodo3(){
            echo "Obrigado";
        }
 
    }

    $c = new Classe();
    $c->metodo1();
    $c->metodo2();
    $c->metodo3();
    echo $c::MINHACONSTANTE;
?>