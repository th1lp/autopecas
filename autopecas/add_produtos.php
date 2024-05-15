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
                                <form method="post" action="_scripts/salvar_add.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputnome" name="nome" type="text" placeholder="name@example.com" />
                                        <label for="inputNome">Nome</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputcodigo" name="codigo" type="text" placeholder="name@example.com" />
                                        <label for="inputcodigo">Codigo</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputfornecedor" name="fornecedor" type="text" placeholder="Confirm password" />
                                        <label for="inputfornecedor">fornecedor</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputvalorc" name="valorc" type="float" min='0' placeholder="name@example.com" />
                                        <label for="inputvalorc">Valor compra</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputquantidade" name="quantidade" type="number" min='0' placeholder="name@example.com" />
                                        <label for="quantidade">Quantidade</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputvalorc" name="valorv" type="float" min='0' placeholder="Confirm password" />
                                        <label for="inputvalorv">Valor venda</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><input class="btn btn-primary" type="submit" value="Cadastrar"></div>
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

    </body>
</html>
