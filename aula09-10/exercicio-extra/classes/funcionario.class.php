<?php

class Funcionarios{

    private $matricula;
    private $nome;
    private $rg;
    protected $departamento;
    
    function __construct($matricula, $nome, $rg, $departamento){

        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->rg =$rg;
        $this->departamento = $departamento;

    }
    
	public function getMatricula() {
		return $this->matricula;
	}
	
	public function setMatricula($matricula){
		$this->matricula = $matricula;
		
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
		
	}

	public function getRg() {
		return $this->rg;
	}
	
	public function setRg($rg) {
		$this->rg = $rg;
	}
	
	public function getDepartamento() {
		return $this->departamento;
	}
	
	public function setDepartamento($departamento){
		$this->departamento = $departamento;

	}
}


$fun1 = new Funcionarios("","","","");

$fun1->setMatricula(1999999);
$fun1->setNome("Samuel");
$fun1->setRg(10000000);
echo "{$fun1->getMatricula()}";
echo "{$fun1->getNome()}";
echo "{$fun1->getRg()}";

?>