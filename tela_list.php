<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/list.css">
</head>

<body>
    <header>
        <img src="_img/OIG1-removebg-preview.png" alt="Logo" width="150">
    </header>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Listagem de Produtos</h5>
                        <p class="card-category">Confira os Nomes</p>
                    </div>
                    <div class="card-body ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Código</th>
                                <th>Fornecedor</th>
                                <th>Valor da Compra</th>
                                <th>Quantidade</th>
                                <th>Valor da Venda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "_scripts/config.php";
                            $sql = "SELECT * FROM estoque";
                            $query  = $mysqli->query($sql);
                            while ($dados = $query->fetch_array()) {
                            ?>
                                <tr>
                                    <td><?php echo $dados['nome']; ?></td>
                                    <td><?php echo $dados['codigo']; ?></td>
                                    <td><?php echo $dados['fornecedor']; ?></td>
                                    <td><?php echo $dados['valorc']; ?></td>
                                    <td><?php echo $dados['quantidade']; ?></td>
                                    <td><?php echo $dados['valorv']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer ">
                        <div class="stats">
                            <a href="menu.php" class="btn btn-secondary">Voltar</a>
                            <a href="tela_add.php" class="btn btn-primary">Adicionar Produto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 A.P.S</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>