<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/add.css">
    <title>Adicionar Produto</title>
    <style>
        /* Inline CSS for header image */
        header img {
            width: 150px;
        }

        /* Inline CSS for footer */
        footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer-bottom {
            color: #999;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <header>
        <img src="_img/OIG1-removebg-preview.png" alt="Logo" width="150">
    </header>

    <div class="container">
        <!-- FORMULÁRIO DE ADIÇÃO DE PRODUTO -->
        <div class="content">
            <div id="adicionar-produto">
                <form method="post" action="_scripts/salvar_add.php">
                    <h1>Adicionar Produto</h1>

                    <div class="inputBox">
                        <label for="nome" class="labelInput">Nome do Produto:</label>
                        <input type="text" id="nome" name="nome" class="inputUser" required>
                    </div>

                    <div class="inputBox">
                        <label for="codigo" class="labelInput">Código:</label>
                        <input type="text" id="codigo" name="codigo" class="inputUser" required>
                    </div>

                    <div class="inputBox">
                        <label for="fornecedor" class="labelInput">Fornecedor:</label>
                        <input type="text" id="fornecedor" name="fornecedor" class="inputUser" required>
                    </div>

                    <div class="inputBox">
                        <label for="valorc" class="labelInput">Valor de Compra:</label>
                        <input type="number" id="valorc" name="valorc" class="inputUser" min="0" required>
                    </div>

                    <div class="inputBox">
                        <label for="quantidade" class="labelInput">Quantidade:</label>
                        <input type="number" id="quantidade" name="quantidade" class="inputUser" min="0" required>
                    </div>

                    <div class="inputBox">
                        <label for="valorv" class="labelInput">Valor de Venda:</label>
                        <input type="number" id="valorv" name="valorv" class="inputUser" min="0" required>
                    </div>

                    <input type="submit" value="Enviar">
                    <p class="link">
                        <a href="menu.php">Voltar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-bottom">
            &copy; 2024 AutoPeças Store | Designed by T.v.Almeida
        </div>
    </footer>

</body>

</html>
