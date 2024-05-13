<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="_css/vendas.css">
</head>

<body>
    <header>
        <img src="_img/OIG1-removebg-preview.png" alt="Logo" width="150">
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-category">Confira os Produtos</p>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Valor de Venda</th>
                                    <th>Quantidade</th>
                                    <th>Valor Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aqui serão inseridos os dados dinamicamente -->
                                <?php
                                include "_scripts/config.php";
                                $sql = "SELECT * FROM estoque";
                                $query  = $mysqli->query($sql);
                                while ($dados = $query->fetch_array()) {
                                    $codigo = $dados['codigo'];
                                    $nome = $dados['nome'];
                                    $valorVenda = $dados['valorv'];
                                    $quantidadeMaxima = $dados['quantidade']; // Adicionamos a quantidade máxima disponível
                                    $valorTotal = $valorVenda * 1; // Valor total inicial com quantidade 1
                                ?>
                                    <tr>
                                        <td><?php echo $codigo; ?></td>
                                        <td><?php echo $nome; ?></td>
                                        <td><?php echo number_format($valorVenda, 2, ',', '.'); ?></td>
                                        <td>
                                            <input type="number" class="form-control" onchange="calcularValorTotal(this)" min="0" max="<?php echo $quantidadeMaxima; ?>" value="1">
                                        </td>
                                        <td class="valorTotalCell"><?php echo number_format($valorTotal, 2, ',', '.'); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
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

    <script>
        function calcularValorTotal(input) {
            const row = input.parentNode.parentNode; // Obtém a linha da tabela
            const valorVenda = parseFloat(row.cells[2].innerText.replace('.', '').replace(',', '.')); // Obtém o valor de venda da terceira coluna
            const quantidadeMaxima = parseInt(input.max); // Obtém a quantidade máxima permitida para este produto
            let quantidade = parseInt(input.value); // Obtém a quantidade inserida pelo usuário

            // Verifica se a quantidade inserida é maior que a quantidade máxima permitida
            if (quantidade > quantidadeMaxima) {
                quantidade = quantidadeMaxima; // Define a quantidade como a quantidade máxima permitida
                input.value = quantidade; // Atualiza o valor do input para refletir a quantidade máxima
            }

            const valorTotal = valorVenda * quantidade; // Calcula o valor total com base na quantidade selecionada
            row.cells[4].innerText = valorTotal.toFixed(2); // Define o valor total na quinta coluna formatado com duas casas decimais
        }
    </script>
</body>

</html>
