<?php
    namespace PHP\Modelo;
    require_once('pessoa.php');//chamar classe
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('Veiculo.php');
    require_once('Compra.php');
    require_once('Produto.php');
    require_once('DAO/Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    use PHP\Modelo\Pessoa;//define qual classe
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Veiculo;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Produto;

    $conexao = new Conexao();
    $conexao->conectar();

    /*
    $endereco1 = new Endereco(1, 'avenida senador flaquer', 400, 'centro', 'sao bernardo do campo', 'sao paulo', 135762, 'brasil');
    echo "<br>".$endereco1->imprimir();

    $cliente1 = new Cliente( '12345678910', 'Allan S', '11947739284', $endereco1, 500);

    $veiculo1 = new Veiculo(1, '2345678', $cliente1, 'verde', 'Logan', '2024', 'Renalt');

    $produto1 = new produto(1, 'Carro', 'Médio', '500KG');
    
    $compra1 = new Compra(1, $produto1, 1, 30000, 50000);

    //$funcionario1 = new Funcionario('12345678910', 'Allan S', '11947739284', $endereco1, 1500);

    //$funcionario2 = new Funcionario('12346334610', 'Claudia', '11947573494', $endereco1, 780);

    echo "<br><br>".$cliente1->imprimir();
    echo "<br><br>".$veiculo1->imprimir();
    echo "<br><br>".$compra1->imprimir();
    //echo "<br><br>".$funcionario2->imprimir();*/






?>