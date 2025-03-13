<?php
    namespace PHP\Modelo\DAO;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;

    class Atualizar{
        function atualizarCliente(Conexao $conexao, string $campo, string $novoDado, string $cpf){
            try{
                $codigo ="";
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                if($campo == "nome" or $campo == "telefone"){
                    $sql = "update cliente set $campo = '$novoDado' where cpf = '$cpf' ";
                }else{
                    $codigo = $consultar->consultarEnderecoCpf($conexao, $cpf);
                    $sql = "update endereco set $campo = '$novoDado' where codigo = '$codigo' ";
                }

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    echo "Atualizado com sucesso!";
                }else{
                    echo "Não Atualizado!";
                }

            }
            catch(Exception $erro){
                echo "algo deu errado!<br><br>$erro";
            }
        }
    }

?>