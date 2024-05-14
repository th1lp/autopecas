<!DOCTYPE html>
<html lang="pt-br">
    <?php include "template/head.php";?>
    <body>
        <?php include "template/navbar.php";?>
        <div id="layoutSidenav">
            <?php include "template/sidenav.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Adicionar produtos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="menu.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Adicionar produtos</li>
                        </ol>
                        <div class="card mb-6">
                            <div class="card-body">
                                <form method="post" action="scripts/salvar_add.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nome" id="nome_cad" type="text" required placeholder="Luiz Augusto" />
                                        <label for="nome_cad">Nome do Produto</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="codigo" id="codigo_cad" type="text" required placeholder="name@example.com" />
                                        <label for="codigo_cad">Código</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="fornecedor" id="fornecedor_cad" type="text" required placeholder="Create a password" />
                                            <label for="fornecedor_cad">Fornecedor</label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="valorc" id="valorc_cad" type="float" min="0" required placeholder="Luiz Augusto" />
                                        <label for="valorc_cad">Valor de Compra</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="quantidade" id="quantidade_cad" type="number" min="0" required placeholder="name@example.com" />
                                        <label for="quantidade_cad">Quantidade</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="valorv" id="valorv_cad" type="float" min="0" required placeholder="Create a password" />
                                            <label for="valorv_cad">Valor de Venda</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Cadastrar"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <?php include "template/footer.php";?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
