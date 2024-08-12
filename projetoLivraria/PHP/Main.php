<?php

    //conectando a classe ao projeto
    namespace Projeto\projetoLivraria\PHP;


    //colocar qual calsse eu vou ultilizar
    require_once("Pessoa.php");
    require_once("Livro.php");
    require_once("Compra.php");
    require_once("Reserva.php");
    require_once("Funcionario.php");


    //mostrar quem eu vou usar - reforço
    use Projeto\projetoLivraria\PHP\Pessoa;
    use Projeto\projetoLivraria\PHP\Livro;
    use Projeto\projetoLivraria\PHP\Compra;
    use Projeto\projetoLivraria\PHP\Reserva;
    use Projeto\projetoLivraria\PHP\Funcionario;

    //instanciando um objeto da classe pessoa / cadastrando
    $pessoa1 = new Pessoa("12345678910", "Claudio", "1199999999", "Avenida Senador Vergeuiro");
    echo $pessoa1->imprimir();
    
    $pessoa2 = new Pessoa("123433328910", "Isabella", "11994965439", "Avenida armando");
    echo $pessoa2->imprimir();

    $livro1 = new livro(1234, "Romeu e Julieta", "Shaskepare", 1, "29/02/1989", 100, 15, 1500);
    echo $livro1-> imprimir();

    $compra1 = new Compra(1, "Livro Romeu e Julieta", 100, 150);
    echo $compra1-> imprimir();

    $reserva1 = new Reserva(1234, "Dom Casmurro", "Isabella", 1);
    echo $reserva1-> imprimir();

    $funcionario1 = new Funcionario(1, "Aghata Nunes", "Influencer", 1500, "Marketing");
    echo $funcionario1-> imprimir();







?>