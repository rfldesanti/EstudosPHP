<?php

class Conta {
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular) {
        
        $this->cpfTitular = $cpfTitular;
        //a validação não deve ser feita no construtor
        //para isso, é criado um MÉTODO
        /*if (strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }*/
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        //"::" (dois-pontos duas vezes) é utilizado para
        //acessar os atributos estáticos (atributos da classe)
        //e a variável precisa ser acessada corretamente (com o $);
        //uma das formas é o próprio nome da classe:
        //Conta::$numeroDeContas++;
        //outra é atraves de 'self':
        self::$numeroDeContas++;

    }

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

    public function recuperaSaldo(): float {
        
        return $this->saldo;

    }

    public function recuperaCpfTitular(): string {

        return $this->cpfTitular;

    }

    public function recuperaNomeTitular(): string {

        return $this->nomeTitular;

    }

    //o método construtor já está definindo CPF e nome na criação do objeto
    //esses métodos abaixo se tornaram obsoletos
    /*public function defineCpfTitular(string $cpfDoTitular): void {

        $this->cpfTitular = $cpfDoTitular;

    }

    public function defineNomeTitular(string $nomeDoTitular): void {

        $this->nomeTitular = $nomeDoTitular;

    } */

    private function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }
    }

    public static function recuperaNumeroDeContas(): int {
        
        return self::$numeroDeContas;

    }
}