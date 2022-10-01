<?php

namespace alura\banco\modelo;


class Funcionario extends Pessoa
{
   
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {   
        parent::__construct($nome, $cpf);      
        $this->cargo = $cargo;
    }


    public function recuperaCargo(string $nome)
    {
        return $this->nome;
    }

    public function alteraNome($nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}