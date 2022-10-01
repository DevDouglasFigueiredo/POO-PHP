<?php

namespace alura\banco\modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;  
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }

    public function recuperaCpf():string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)< 5){
            echo " seu nome deve conter 5 ou mais caracteres, informe seu sobrenome por gentileza" . PHP_EOL;
            exit();
        }
    }
}