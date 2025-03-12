<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    use PHP\Modelo\Endereco;

    class Pessoa{

        
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        //declara os valores iniciais das variaveis
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco

        )
        {
            $this ->cpf = $cpf;
            $this ->nome = $nome;
            $this ->telefone = $telefone;
            $this ->endereco = $endereco;

        }

        //métodos de acesso e modificadores
        //get e set

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $dado):void 
        {
            $this->variavel = $dados;
        }

        public function imprimir():string 
        {
            return "<br>CPF: ".$this->cpf. 
                   "<br>Nome: ".$this->nome. 
                   "<br>Telefone: ".$this->telefone. 
                   "<br>Endereço: ".$this->endereco->imprimir();
        }//fim do método imprimir

    }//fim da classe









?>