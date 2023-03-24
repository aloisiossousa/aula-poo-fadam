<?php 
    class Pessoa{
        public $codigo;
        public $nome;
        public $altura;
        public $idade;
        public $nascimento;
        public $escolaridade;
        public $salario;

        //Métodos
        public function crescer($centimetro){
            if($centimetro > 0){
                $this->altura += $centimetro;
            }
        }
        public function formar($titulacao){
            $this->escolaridade = $titulacao;
        }

        public function envelhecer($anos){
            if ($anos > 0){
                $this->idade += $anos;
            }
        }  
    }
?>