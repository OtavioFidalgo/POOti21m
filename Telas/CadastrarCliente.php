<?php
    namespace PHP\Modelo\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Inserir.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastrar Cliente</title>
</head>
<body>
   
    <h1>Cadastrar Cliente</h1>
    <form method="POST" class="form-control form-control-sm">
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00">
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Sobrenome">
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="(00)00000-0000">
        </div>
        <div class="mb-3">
            <label class="form-label">Preço Total</label>
            <input type="text" class="form-control" name="precoTotal" placeholder="Preco Total">
        </div>
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control" name="logradouro" placeholder="Rua dos Bobos">
        </div>
        <div class="mb-3">
            <label class="form-label">Número</label>
            <input type="text" class="form-control" name="numero" placeholder="000">
        </div>
        <div class="mb-3">
            <label class="form-label">Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="Bairro">
        </div>
        <div class="mb-3">
            <label class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="Cidade">
        </div>
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" placeholder="Estado">
        </div>
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input type="text" class="form-control" name="cep" placeholder="0000-000">
        </div>
        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" class="form-control" name="pais" placeholder="Pais">
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
        <button type="submit" class="btn btn-dark"><a href="../main.php">Voltar</button>
    </form>
    <?php
        try{
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $precoTotal = $_POST['precoTotal'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $pais = $_POST['pais'];

                $inserir->cadastrarEndereco($conexao, $logradouro, $numero, $bairro, $cidade, $estado, $cep, $pais);

                $inserir->cadastrarCliente($conexao, $cpf, $nome, $telefone, $consultar->consultarEndereco($conexao), $precoTotal);

        }
        catch(Except $erro)
        {
            echo "Algo deu errado!<br><br>$erro";
        }

    ?>

</body>
</html>
