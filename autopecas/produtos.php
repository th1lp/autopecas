<!DOCTYPE html>
<html lang="en">
    <?php include "template/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "template/navbar.php" ?>
        <div id="layoutSidenav">
            <?php include "template/sidenav.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produtos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="menu.php">inicio</a></li>
                            <li class="breadcrumb-item active">produtos</li>
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
                                            <th>Nome</th>
                                            <th>codigo</th>
                                            <th>fornecedor</th>
                                            <th>valor de compra</th>
                                            <th>quantidade</th>
                                            <th>valor de venda</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>codigo</th>
                                            <th>fornecedor</th>
                                            <th>valor de compra</th>
                                            <th>quantidade</th>
                                            <th>valor de venda</th>
                                        </tr>
                                    </tfoot>
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
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include "template/footer.php" ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
