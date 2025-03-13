<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarEndereco(Conexao $conexao)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select max(codigo) from endereco";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                        return $dados['max(codigo)'];                            
                    }
            }
            catch(Exception $erro){
                return "<br><br>Algo deu Errado!<br><br>$erro";
            }
        }//fim do método

        function ConsultarCliente($conexao, string $cpf){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cliente inner join endereco on codigoEndereco = codigo and cpf = '$cpf' ";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['cpf'] == $cpf){
                        echo "<br>CPF: ".$dados['cpf']. 
                            "<br>Nome: ".$dados['nome']. 
                            "<br>Telefone: ".$dados['telefone']. 
                            "<br>Preço Total: ".$dados['precoTotal']. 
                            "<br>Logradouro: ".$dados['logradouro']. 
                            "<br>Número: ".$dados['numero']. 
                            "<br>Bairro: ".$dados['bairro']. 
                            "<br>Cidade: ".$dados['cidade']. 
                            "<br>Estado: ".$dados['estado']. 
                            "<br>CEP: ".$dados['cep']. 
                            "<br>Pais: ".$dados['pais'];
                            return;
                    }
                }
            }
            catch(Exception $erro){
                echo "algo deu errado! <br><br>".$erro;
            }
        }
    //fim da classe

        function consultarEnderecoCpf(Conexao $conexao, string $cpf){
            try{
                $conn = $conexao->conectar();
                $sql = "select codigoEndereco from cliente where cpf = '$cpf' ";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    return $dados['codigoEndereco'];
                }
            }
            catch(Exception $erro){
                echo "algo deu errado! <br><br>".$erro;
            }
        }
    }
?>