<?php

class Empresa{

    public $razaoSocial;
    public $cnpj;
    public $titular;
    public $cargo;


    public function __construct($razaoSocial, $cnpj, $titular, $cargo) {
    	$this->razaoSocial = $razaoSocial;
    	$this->cnpj = $cnpj;
    	$this->titular = $titular;
    	$this->cargo = $cargo;
    }
    
     

    function Contratar(){
    
        if($this->cargo == false){

            echo "Contratar funcionário";

        }
        else{

            echo "Vaga ok";

            return true;
        }
    }

    
}


?>