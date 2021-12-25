<?php

class Conta {
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    public function sacar(float $valorASacar): void {

        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar): void {

        if ($valorADepositar <= 0) {
            echo "Valor precisa ser positivo e\ou maior que 0";
            return;
        }
        
        $this->saldo += $valorADepositar;
        
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void {

        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível para transferência";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }
}