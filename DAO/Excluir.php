<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function exculirCliente(Conexao $conexao, string $cpf){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from cliente where cpf = '$cpf' ";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "excluirdo com sucesso!";
                }else{
                    echo "não excluido!";
                }
            }
            catch(Exception $erro){
                echo "algo deu errado!";
            }
        }
    }

?>