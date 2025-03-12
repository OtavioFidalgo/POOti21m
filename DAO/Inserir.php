<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function cadastrarEndereco(Conexao $conexao, string $logradouro, string $numero, string $bairro, string $cidade, string $estado, string $cep, string $pais)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco(codigo, logradouro, numero, bairro, cidade, estado, cep, pais) values('', '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$pais')";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com Sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Exception $erro){
                return "<br><br>Algo deu Errado!<br><br>$erro";
            }
        }

        public function cadastrarCliente(Conexao $conexao, string $cpf, string $nome, string $telefone, int $codigoEndereco, float $precoTotal)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into Cliente(cpf, nome, telefone, codigoEndereco, precoTotal) values('$cpf', '$nome', '$telefone', '$codigoEndereco', 'precoTotal')";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    return "<br><br>Cliente Inserido com Sucesso!";
                }
                return "<br><br>Cliente Não Inserido!";
            }
            catch(Exception $erro){
                return "<br><br>Algo deu Errado!<br><br>$erro";
            }

        }

    }

?>