<?php
class ContaBancaria {
    private $saldo;
    private $limite;

    public function getSaldo() {
        return $this->saldo;
    }

    public function getLimite() {
        return $this->limite;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }
}

$conta = new ContaBancaria();

$conta->setSaldo(10000);
$conta->setLimite(15000);

echo "Meu Saldo é {$conta->getSaldo()} <br> \n";
echo "Meu limite é {$conta->getLimite()}";



?>