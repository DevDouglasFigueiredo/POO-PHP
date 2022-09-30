<?php

class Titular
{

    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;
    


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
        
    }
    
    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)< 5){
            echo " seu nome deve conter 5 ou mais caracteres, informe seu sobrenome por gentileza" . PHP_EOL;
            exit();
        }
    }


    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


    public function recuperaNome():string
    {
        return $this->nome; 
    }

    public function recuperaEndereco():Endereco
    {
        return $this->endereco;
    }

}
