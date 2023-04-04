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
?>