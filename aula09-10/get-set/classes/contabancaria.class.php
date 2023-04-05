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

$conta->setSaldo(2000);
$conta->setLimite(5000);

echo "Meu Saldo é {$conta->getSaldo()}";
echo "Meu limite é {$conta->getLimite()}";



?>