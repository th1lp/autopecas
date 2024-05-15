<!DOCTYPE html>
<html lang="en">
    <?php include "template/head.php" ?>
    <body>
        <?php include "template/navbar.php" ?>
        <div id="layoutSidenav">
            <?php include "template/sidenav.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Adicionar Produtos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="menu.php">inicio</a></li>
                            <li class="breadcrumb-item active">adicionar produtos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="post" action="_scripts/saida_peca.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputcodigo" name="codigo" type="text" placeholder="Código" />
                                        <label for="inputcodigo">Código</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome" />
                                        <label for="inputNome">Nome</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="fornecedor" name="fornecedor" type="text" placeholder="Fornecedor" />
                                        <label for="inputfornecedor">Fornecedor</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="valorc" name="valorv" type="number" min="0" step="0.01" placeholder="Valor de Venda" />
                                        <label for="inputvalorv">Valor de Venda</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="quantidade" name="quantidade" type="number" min="0" placeholder="Quantidade" />
                                        <label for="quantidade">Quantidade</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="total" name="total" type="text" placeholder="Total" readonly />
                                        <label for="total">Total</label>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <button type="button" class="btn btn-primary" onclick="calcularTotal()">Calcular Total</button>
                                        <button type="button" class="btn btn-primary" onclick="venderPeca()">Vender</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <?php include "template/footer.php" ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            function calcularTotal() {
                var valorVenda = parseFloat(document.getElementById('valorc').value);
                var quantidade = parseInt(document.getElementById('quantidade').value);
                var total = valorVenda * quantidade;

                // Atualiza o campo "total" com o valor calculado
                document.getElementById('total').value = total.toFixed(2);
            }

            function venderPeca() {
                var codigoPeca = document.getElementById('inputcodigo').value;
                if (confirm("Deseja vender esta peça?")) {
                    window.location.href = "_scripts/saida_peca.php?id=" + codigoPeca;
                }
            }
        </script>
    </body>
</html>
