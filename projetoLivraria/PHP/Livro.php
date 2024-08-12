<?php
    //Declarando o projeto
    namespace Projeto\projetoLivraria\PHP;

    
    //Fiz a conexão
    use Projeto\projetoLivraria\PHP\Pessoa;
    use Projeto\projetoLivraria\PHP\Livro;

    class Livro{
        private int $isbn;
        private string $titulo;
        private string $autor;
        private int $edicao;
        private string $dtLancamento;
        private int $quantidade;
        private float $precoUnitario;
        private float $total;


    public function __construct(int $isbn, string $titulo, string $autor, int $edicao, string $dtLancamento, int $quantidade, float $precoUnitario, int $total)
    {
        $this -> isbn          = $isbn;
        $this -> titulo        = $titulo;
        $this -> autor         = $autor;
        $this -> edicao        = $edicao;
        $this -> dtLancamento  = $dtLancamento;
        $this -> quantidade    = $quantidade;
        $this -> precoUnitario = $precoUnitario;
        $this -> total         = $total;

    }//fim do construct

    public function getIsbn():int
    {
        return $this-> isbn;
    }//fim do metodo

    public function setIsbn(int $isbn):void
    {
        $this->isbn = $isbn;
    }//fim do metodo

    public function getTitulo():string
    {
        return $this-> titulo;
    }//fim do metodo

    public function setTitulo(string $titulo):void
    {
        $this->titulo = $titulo;
    }//fim do metodo

    public function getAutor():string
    {
        return $this-> autor;
    }//fim do metodo

    public function setAutor(string $autor):void
    {
        $this->autor = $autor;
    }//fim do metodo

    public function getEdicao():int
    {
        return $this-> edicao;
    }//fim do metodo

    public function setEdicao(int $edicao):void
    {
        $this->edicao = $edicao;
    }//fim do metodo

    public function getDtLancamento():string
    {
        return $this-> dtLancamento;
    }//fim do metodo

    public function setDtLancamento(string $dtLancamento):void
    {
        $this->dtLancamento = $dtLancamento;
    }//fim do metodo

    public function getQuantidade():int
    {
        return $this-> quantidade;
    }//fim do metodo

    public function setQuantidade(int $quantidade):void
    {
        $this->quantidade = $quantidade;
    }//fim do metodo

    public function getPrecoUnitario():float
    {
        return $this-> precoUnitario;
    }//fim do metodo

    public function setPrecoUnitario(float $precoUnitario):void
    {
        $this->precoUnitario = $precoUnitario;
    }//fim do metodo

    public function getTotal():float
    {
        return $this-> total;
    }//fim do metodo

    public function setTotal(float $total):void
    {
        $this->total = $total;
    }//fim do metodo

    public function calcularTotal(float $total):float
    {
        $this->setTotal($this->getPrecoUnitario() * $this->getQuantidade());
        $this->getTotal();
    }//fim do metodo

    public function imprimir():string 
    {
        return "<br>ISBN: ".$this->getISBN().
               "<br>Titulo: ".$this->getTitulo().
               "<br>Autor: ".$this->getAutor().
               "<br>Edição: ".$this->getEdicao().
               "<br>Data de Lançamento: ".$this->getDtLancamento().
               "<br>Quantidade: ".$this->getQuantidade().
               "<br>Preço Unitário: ".$this->getPrecoUnitario().
               "<br>Preço Total: ".$this->getTotal()."<br><br>";

    }//fim do metodo imprimir



    }//fim da classe

?>