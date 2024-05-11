<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/login.css">
    <title>tela de cadastro</title>
</head>
<body>
    <div class="container" >
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="content">
            <div id="cadastro">
                <form method="post" action="_scripts/salvar_cadastro.php">
                    <h1>Cadastro</h1> 
                    <div class="inputBox">
                        <label for="nome_cad" class="labelInput">Nome completo</label>
                        <input type="text" name="nome" id="nome_cad" class="inputUser" placeholder="Luiz Augusto" required>
                    </div>
                    <br>
                    <div class="inputBox">
                        <label for="email_cad" class="labelInput">Email</label>
                        <input type="text" name="email" id="email_cad" class="inputUser" placeholder="contato@htmlecsspro.com" required>
                    </div>
                    <br>
                    <div class="inputBox">
                        <label for="senha_cad" class="labelInput">Senha</label>
                        <input type="senha" name="senha" id="senha_cad" class="inputUser" placeholder="1234" required>
                    </div>
                    <br>
                    <input type="submit" value="Cadastrar"/> 
                    <p class="link">  
                        Já tem conta?
                        <a href="index.html"> Ir para Login </a>
                    </p>
                </form>
              </div>
            </div>
        </div>
    </div>
</body>
</html>