<?php 

    //Definir o prejeto = Especificar as pastas
    namespace Projeto\projetoLivraria\PHP;

    //Específica qual classe eu vou ultilizar
    use Projeto\projetoLivraria\PHP\Pessoa;

    class Pessoa{
        //Encapsular as variaves
        //Declaração de variaveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        //Instanciar = Dar um valor inicial
        //Método construtor
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this -> cpf      = $cpf;
            $this -> nome     = $nome;
            $this -> telefone = $telefone;
            $this -> endereco = $endereco;
        }//fim do metodo construtor

        //Metodos Gets e sets - Acesso e Modigicação
        public function getCPF():string
        {
            return $this-> cpf;
        }//fim do método consultar CPF

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//fim do metodo alterrar cpf

         public function getNome():string
        {
            return $this-> nome;
        }//fim do método consultar nome

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//fim do metodo alterar nome

        public function getTelefone():string
        {
            return $this-> telefone;
        }//fim do método consultar telefone

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//fim do metodo alterar telefone

        public function getEndereco():string
        {
            return $this-> endereco;
        }//fim do método consultar endereco

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//fim do metodo alterar endereco

        public function imprimir():string
        {
            return "<br>CPF:".$this->getCPF().
                   "<br>Nome:".$this->getNome().
                   "<br>Telefone:".$this->getTelefone().
                   "<br>Endereco:".$this->getEndereco()."<br><br>";
        }//fim do imprimir


    }//fim da classe





?>