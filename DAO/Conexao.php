<?php
    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'ti21m');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "Algo deu Errado!";
            }
            catch(Exception $erro){
                return "Algo deu Errado!<br><br>.$erro";
            }
        }
    }
?>