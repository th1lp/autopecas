<!DOCTYPE html>
<html lang="pt-br">
    <?php include "template/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "template/navbar.php" ?>
        <div id="layoutSidenav">
            <?php include "template/sidenav.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">A.P.S</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">inicio</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Adicionar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="add_produtos.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Produtos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="produtos.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Vendas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="vendas.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
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
