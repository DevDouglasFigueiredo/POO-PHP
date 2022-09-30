<?php

class Conta 
{
    private $titular;
   
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {   
        $this->titular = $titular;
        $this-> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
{
        self::$numeroDeContas--;
}


    public function depositar (float $valorADepositar): void 
    {
        if($valorADepositar < 0){

            echo "voce precisa depositar um valor positivo";

        } else {

            $this->saldo += $valorADepositar;
        }
    }

    public function sacar (float $valorASacar): void
    {
        if($valorASacar < $this->saldo){
            echo "voce nao tem saldo suficiente" . PHP_EOL;
        } else {
            $this->saldo -= $valorASacar;
        }

    }

    public function transferir (float $valorATransferir, Conta $contaDestino):void
    {
        if($valorATransferir > $this->saldo){
            echo "saldo indisponivel";
        } else {    
            $this->sacar($valorATransferir);
            $this->depositar($valorATransferir);
        }
    }

    public function recuperarSaldo():float
    {
        return $this->saldo;
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperarNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperarCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }
}