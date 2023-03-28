<?php
class MinhaClasse {
    public $variavelPublica;
    protected $variavelProtegida;
    private $variavelPrivada;
    
    public function __construct() {
        $this->variavelPublica = "Esta é uma variável pública";
        $this->variavelProtegida = "Esta é uma variável protegida";
        $this->variavelPrivada = "Esta é uma variável privada";
    }
    
    public function metodoPublico() {
        echo "Este é um método público";
    }
    
    protected function metodoProtegido() {
        echo "Este é um método protegido";
    }
    
    private function metodoPrivado() {
        echo "Este é um método privado";
    }

    function getProtect(){ //Método para mostrar o método protegido
        return $this->metodoProtegido();
    }

    function getPrivate(){ //Método para mostrar o método protegido
        return $this->metodoPrivado();
    }

    function geVarPrivate(){
        return $this->variavelPrivada;
    }
    
}

class OutraClasse extends MinhaClasse{

    function geVarProtect(){
        return $this->variavelProtegida;
    }

    

}


$objeto = new MinhaClasse();
$objeto = new OutraClasse();

//Acessar Public
$objeto->metodoPublico();
echo " -> {$objeto->variavelPublica}";
echo "<br>";


//Acessar Protected
$objeto->getProtect();
echo " -> {$objeto->geVarProtect()}";
echo "<br>";

//Acessar Private

$objeto->getPrivate();
echo " -> {$objeto->geVarPrivate()}";







//$objeto->variavelPublica = "Novo valor para a variável pública";
//echo $objeto->variavelPublica; // Saída: "Novo valor para a variável pública"

//$objeto->variavelProtegida = "Novo valor para a variável protegida"; // Erro: Não é possível acessar uma variável protegida fora da classe ou de suas subclasses
//$objeto->variavelPrivada = "Novo valor para a variável privada"; // Erro: Não é possível acessar uma variável privada fora da classe

//$objeto->metodoPublico(); // Saída: "Este é um método público"
//$objeto->metodoProtegido(); // Erro: Não é possível acessar um método protegido fora da classe ou de suas subclasses
//$objeto->metodoPrivado(); // Erro: Não é possível acessar um método privado fora da classe
?>