<?php

namespace alura\banco\modelo\conta;

use alura\banco\modelo\Pessoa;
use alura\banco\modelo\CPF;
use alura\banco\modelo\Endereco;


class Titular extends Pessoa
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {

        parent::__construct($nome, $cpf);
        
        $this->endereco = $endereco;
        
    }
    

    public function recuperaEndereco():Endereco
    {
        return $this->endereco;
    }

}
