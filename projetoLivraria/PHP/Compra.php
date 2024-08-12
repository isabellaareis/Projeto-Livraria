<?php

namespace Projeto\projetoLivraria\PHP;

require_once("Cliente.php");
require_once("Funcionario.php");
require_once("Livro.php");

use Projeto\projetoLivraria\PHP\Compra;
use Projeto\projetoLivraria\PHP\Cliente;
use Projeto\projetoLivraria\PHP\Funcionario;
use Projeto\projetoLivraria\PHP\Livro;

class Compra{
    private int $codigoCompra;
    private Livro $livro;//objeto livro
    private int $quantidadeCompra;
    private float $totalCompra;
    private CLiente $cliente;//objeto cliente
    private Funcionario $funcionario;//objeto funcionario

    public function __construct(int $codigoCompra, Livro $livro, int $quantidadeCompra, float $totalCompra, Cliente $cliente, Funcionario $funcionario){
        $this -> codigoCompra     = $codigoCompra;
        $this -> livro            = $livro;
        $this -> quantidadeCompra = $quantidadeCompra;
        $this -> totalCompra      = $totalCompra;
        $this -> cliente          = $cliente;
        $this -> funcionario      = $funcionario;


    }//fim do construct

    public function __get(string $name):mixed
    {
        return $this-> $name;
    }

    public function __set(string $name, mixed $value):void
    {
        $this->name = $value;
    }//fim do set


    public function imprimir(): string
    {
        return "<br>Código Compra: ".$this->codigoCompra.
               "<br>Livro: ".$livro->imprimir().
               "<br>Total: ".$this->totalCompra.
               "<br>Cliente: ".$cliente->imprimir().
               "<br>Funcionário: ".$funcionario->imprimir();

    }//fim imprimir

}//fim da classe compra


?>