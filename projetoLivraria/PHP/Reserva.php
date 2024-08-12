<?php

namespace Projeto\projetoLivraria\PHP;
use Projeto\projetoLivraria\PHP\Reserva;

class Reserva{

    private int $codigoLivro;
    private string $tituloLivro;
    private string $pessoa;
    private int $quantidadeLivro;

    public function __construct(int $codigoLivro, string $tituloLivro, string $pessoa, int $quantidadeLivro){
        $this -> codigoLirvo = $codigoLivro;
        $this -> tituloLivro = $tituloLivro;
        $this -> pessoa = $pessoa;
        $this -> quantidadeLivro = $quantidadeLivro;
    }// fim construct 

    public function getCodigoLivro():int
    {
        return $this -> codigoLirvo;
    }//fim do metodo

    public function setCodigoLivro( int $codigoLivro):void
    {
         $this -> codigoLivro = $codigoLivro;
    }//fim do metodo

    public function getTituloLivro():string
    {
        return $this -> tituloLivro;
    }//fim do metodo

    public function setTituloLivro( string $tituloLivro):void
    {
         $this -> tituloLivro = $tituloLivro;
    }//fim do metodo

    public function getPessoa():string
    {
        return $this -> pessoa;
    }//fim do metodo

    public function setPessoa( string $pessoa):void
    {
         $this -> pessoa = $pessoa;
    }//fim do metodo

    public function getQuantidadeLivro():int
    {
        return $this -> quantidadeLivro;
    }//fim do metodo

    public function setQuantidadeLivro( float $quantidadeLivro):void
    {
         $this -> quantidadeLivro = $quantidadeLivro;
    }//fim do metodo

    public function imprimir(): string
    {
        return "<br>Código do livro: ".$this-> getCodigoLivro().
                "<br>Título: ".$this-> getTituloLivro().
                "<br>Cliente: ".$this-> getPessoa().
                "<br>Quantidade: ".$this-> getQuantidadeLivro()."<br><br>";
    }//fim imprimir




}//fim classe reserva





?>