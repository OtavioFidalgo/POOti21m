<?php
    namespace PHP\Modelo\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Atualizar.php');
    
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
    

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Atualizar Cliente</title>
</head>
<body>
   
    <h1>Atualizar Cliente</h1>
    <form method="POST" class="form-control form-control-sm">
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00">
        </div>
        <select name="campo" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="logradouro">Logradouro</option>
            <option value="numero">Número</option>
            <option value="bairro">Bairro</option>
            <option value="cidade">Cidade</option>
            <option value="estado">Estado</option>
            <option value="cep">CEP</option>
            <option value="pais">Pais</option>
        </select>
        <div class="mb-3">
            <label class="form-label">Novo Dado</label>
            <input type="text" class="form-control" name="novoDado" placeholder="NovoDado">
        </div>
        
        <button type="submit" class="btn btn-dark">Atualizar
            <?php
                $atualizar->atualizarCliente($conexao, $_POST['campo'], $_POST['novoDado'], $_POST['cpf']);
            ?>
        </button>
        <button type="submit" class="btn btn-dark"><a href="../main.php">Voltar</button>

    </form>
</body>
</html>