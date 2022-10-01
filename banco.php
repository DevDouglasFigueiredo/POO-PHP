<?php


use alura\banco\modelo\conta\Titular;
use alura\banco\modelo\Endereco;
use alura\banco\modelo\CPF;
use alura\banco\modelo\conta\Conta;


require_once 'autoload.php';

$endereco = new Endereco('palhoca', 'bela vista', 'minha rua', '2494');
$joaoCarlos = new Titular(new Cpf('065.598.654-55'), 'Joao Carlos', $endereco);
$primeiraConta = new Conta($joaoCarlos);
$primeiraConta-> depositar(500);
$primeiraConta->sacar(300);
    
var_dump($primeiraConta);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$ananda = new Titular(new Cpf('658.652.674-11'), 'Ananda', $endereco);
$segundaConta = new Conta($ananda );

echo Conta::recuperaNumeroDeContas() . PHP_EOL;