<?php
    interface MinhaInterface1{
    
        public const MINHACONSTANTE = " Até a próxima aula.";
        public function metodo1();
        public function metodo2();
        public function metodo3();

        
    }

    interface MinhaInterface2{
        public function metodo4();
        public function metodo5();
        public function metodo6();

    }

    class Classe implements MinhaInterface1,MinhaInterface2{
        public function metodo1(){
            echo "Olá ";
        }
        public function metodo2(){
            echo "Oi ";
        }
        public function metodo3(){
            echo "Obrigado";
        }
        public function metodo4(){
            echo "Bom dia";
        }
        public function metodo5(){
            echo "Boa tarde";
        }
        public function metodo6(){
            echo "Boa noite";
        }
 
    }

    $c = new Classe();
    $c->metodo1();
    $c->metodo2();
    $c->metodo6();
    echo $c::MINHACONSTANTE;
?>