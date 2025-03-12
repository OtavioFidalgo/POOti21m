<?php
    namespace PHP\Modelo;
    require_once('Produto.php');
    use PHP\Modelo\Produto;

    class Compra{

        private int $codigo;
        private Produto $produto;
        private string $quantidade;
        private string $precoUnitario;
        private string $precoFinal;

        public function __construct(int $codigo, Produto $produto, string $quantidade, string $precoUnitario, string $precoFinal)
        {
            $this ->codigo = $codigo;
            $this ->produto = $produto;
            $this ->quantidade = $quantidade;
            $this ->precoUnitario = $precoUnitario;
            $this ->precoFinal = $precoFinal;

        }

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void 
        {
            $this->variavel = $dados;
        }

        public function imprimir():string 
        {
            return "<br>Produto: ".$this->produto->imprimir(). 
                   "<br>Quantidade: ".$this->quantidade. 
                   "<br>Preço Unitário: ".$this->precounitario. 
                   "<br>Preço Final: ".$this->precoFinal;
        }

    }

?>