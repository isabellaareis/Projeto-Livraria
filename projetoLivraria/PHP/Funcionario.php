<?php


namespace Projeto\projetoLivraria\PHP;

require_once("Pessoa.php");
use Projeto\projetoLivraria\PHP\Funcionario;
use Projeto\projetoLivraria\PHP\Pessoa;


class Funcionario extends Pessoa{
    
    protected int $codigoFuncionario;
    protected string $cargo;
    protected float $salarioFuncionario;
    protected string $setorFuncionario;

    public function __construct(int $codigoFuncionario, string $cpf, string $nome,  string $telefone, string $endereco, string $cargo, float $salarioFuncionario, string $setorFuncionario){
        
        parent::__construct($cpf, $nome, $telefone, $endereco);
        $this -> codigoFuncionario = $codigoFuncionario;
        $this -> cargo = $cargo;
        $this -> salarioFuncionario = $salarioFuncionario;
        $this -> setorFuncionario = $setorFuncionario;

    }// fim construct 

    public function getCodigoFuncionario():int
    {
        return $this -> codigoFuncionario;
    }//fim do metodo

    public function setCodigoFuncionario( int $codigoFuncionario):void
    {
         $this -> codigoFuncionario = $codigoFuncionario;
    }//fim do metodo

    public function getCargo():string
    {
        return $this -> cargo;
    }//fim do metodo

    public function setCargo( string $cargo):void
    {
         $this -> cargo = $cargo;
    }//fim do metodo

    public function getSalarioFuncionario():float
    {
        return $this -> salarioFuncionario;
    }//fim do metodo

    public function setSalarioFuncionario( float $salarioFuncionario):void
    {
         $this -> salarioFuncionario = $salarioFuncionario;
    }//fim do metodo

    public function getSetorFuncionario():string
    {
        return $this -> setorFuncionario;
    }//fim do metodo

    public function setSetorFuncionario( string $setorFuncionario):void
    {
         $this -> setorFuncionario = $setorFuncionario;
    }//fim do metodo

    public function imprimir(): string
    {
        parent::imprimir();
        return "<br>Código Funcionario: ".$this-> getCodigoFuncionario().
                "<br>Cargo: ".$this-> getCargo().
                "<br>Salário: ".$this-> getSalarioFuncionario().
                "<br>Setor: ".$this-> getSetorFuncionario()."<br><br>";
    }


}//fim da classe funcionario





?>