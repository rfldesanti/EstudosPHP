<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta {
    //atributos substituídos pela classe Titular;
    /*private $cpfTitular;
    private $nomeTitular;*/
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular) {
        
        //$this->cpfTitular = $cpfTitular;
        //a validação não deve ser feita no construtor
        //para isso, é criado um MÉTODO
        /*if (strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }*/
        //$this->validaNomeTitular($nomeTitular);
        //$this->nomeTitular = $nomeTitular;
        $this->titular = $titular;
        $this->saldo = 0;
        //"::" (dois-pontos duas vezes) é utilizado para
        //acessar os atributos estáticos (atributos da classe)
        //e a variável precisa ser acessada corretamente (com o $);
        //uma das formas é o próprio nome da classe:
        //Conta::$numeroDeContas++;
        //outra é atraves de 'self':
        self::$numeroDeContas++;

    }

    public function __destruct() {
        //código para exibir quando o garbage collector limpar a memória
        /*if (self::$numeroDeContas > 2 ) {
            echo "Existe mais de uma conta ativa" . PHP_EOL;
        }*/
        Conta::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void {

        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaDeSaque;

        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }
        
        $this->saldo -= $valorSaque;
        
    }

    public function depositar(float $valorADepositar): void {

        if ($valorADepositar <= 0) {
            throw new \InvalidArgumentException();
        }
        
        $this->saldo += $valorADepositar;
        
    }

    //método removido para a classe ContCorrente, uma vez que a classe Conta
    //tornou-se uma classe genérica
    /*public function transferir(float $valorATransferir, Conta $contaDestino): void {

        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível para transferência";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }*/

    public function recuperaSaldo(): float {
        
        return $this->saldo;

    }

    //com o atributo sendoda classe Titular, já não são mais necessários
    //os métodos de recuperação de Cpf e Titular
    /*public function recuperaCpfTitular(): string {

        return $this->cpfTitular;

    }

    public function recuperaNomeTitular(): string {

        return $this->nomeTitular;

    }*/

    //o método construtor já está definindo CPF e nome na criação do objeto
    //esses métodos abaixo se tornaram obsoletos
    /*public function defineCpfTitular(string $cpfDoTitular): void {

        $this->cpfTitular = $cpfDoTitular;

    }

    public function defineNomeTitular(string $nomeDoTitular): void {

        $this->nomeTitular = $nomeDoTitular;

    } */

    //método enviado para a classe Titular
    /*private function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 5) {
            echo "Quantidade de caracteres para nome precisa ser maior";
            exit();
        }
    }*/

    public function recuperaCpfTitular(): string {
        
        return $this->titular->recuperaCpf();

    }

    public function recuperaNomeTitular(): string {

        return $this->titular->recuperaNome();

    }

    public static function recuperaNumeroDeContas(): int {
        
        return self::$numeroDeContas;

    }

    //método transformado em método abstrato
    /*protected function percentualTarifa(): float
    {
        return 0.05;
    }*/

    abstract protected function percentualTarifa(): float;
}