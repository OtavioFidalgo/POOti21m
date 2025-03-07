<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    use PHP\Modelo\Cliente;

    class Veiculo{

        private int $codigo;
        private string $placa;
        private Cliente $cliente;
        private string $cor;
        private string $modelo;
        private string $ano;
        private string $marca;

        public function __construct(int $codigo, string $placa, Cliente $cliente, string $cor, string $modelo, string $ano, string $marca)
        {
            $this ->codigo = $codigo;
            $this ->placa = $placa;
            $this ->cliente = $cliente;
            $this ->cor = $cor;
            $this ->modelo = $modelo;
            $this ->ano = $ano;
            $this ->marca = $marca;

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
            return "<br>Placa: ".$this->placa. 
                   "<br>Cliente: ".$this->cliente->imprimir(). 
                   "<br>Cor: ".$this->cor. 
                   "<br>Modelo: ".$this->modelo.
                   "<br>Ano: ".$this->ano.
                   "<br>Marca: ".$this->marca;
        }

    }

?>
