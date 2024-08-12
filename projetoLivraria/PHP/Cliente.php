<?php

namespace Projeto\projetoLivraria\PHP;

require_once("Pessoa.php");
use Projeto\projetoLivraria\PHP\Cliente;
use Projeto\projetoLivraria\PHP\Pessoa;

class Cliente extends Pessoa {
    protected int $codigoCliente;
    protected float $totalCompra;

    function __construct(int $codigo, string $cpf, string $nome, string $telefone, string $endereco, float $totalCompra)
    {
        parent::__construct($cpf, $nome, $telefone, $endereco);
        $this->codigo      = $codigo;
        $this->totalCompra = $total;
    }//fim do construtor

    public function __get(string $name):mixed
    {
        return $this-> $name;
    }//fim do get

    public function __set(string $name, mixed $value):void
    {
        $this->name = $value;
    }//fim do set

    public function imprimir():string
    {
        parent::imprimir();
        return "<br>Código: ".$this->codigo.
               "<br>Total de compras: ".$this->totalCompra;
    }//fim do imprimir

}//fim da calsse cliente



?>