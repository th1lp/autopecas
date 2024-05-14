<!DOCTYPE html>
<html lang="pt-br">
    <?php include "template/head.php";?>
    <body class="sb-nav-fixed">
        <?php include "template/navbar.php";?>
        <div id="layoutSidenav">
            <?php include "template/sidenav.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produtos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="menu.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Vendas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Estoque
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Valor da Venda</th>
                                            <th>Quantidade</th>
                                            <th>Valor Total</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Aqui serão inseridos os dados dinamicamente -->
                                        <?php
                                        include "scripts/config.php";
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
                                                <td><button class="btn btn-primary" onclick="venderProduto(this)">Vender</button></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include "template/footer.php";?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="assets/demo/valortotal.js"></script>
        <script src="js/vender.js"></script>
    </body>
</html>
