
<?php
class Livro {
    private $titulo;
    private $autor;
    private $editora;//Teste de código
    private $ano;

	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo;
		
	}
	public function setAutor($autor){
		$this->autor = $autor;
		
	}
	public function getAutor() {
		return $this->autor;
	}
}

$livro = new Livro();

$livro->setTitulo("Sertão, Sertão");
$livro->setAutor("Sr Luiz");

echo "{$livro->getTitulo()} \n";
echo "{$livro->getAutor()}";
