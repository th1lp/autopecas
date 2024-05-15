<?php
include "config.php";

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$fornecedor = $_POST['fornecedor'];
$valorc = $_POST['valorc'];
$quantidade = $_POST['quantidade'];
$valorv = $_POST['valorv'];

// Construção segura da consulta usando prepared statements
$sql = "INSERT INTO estoque (nome, codigo, fornecedor, valorc, quantidade, valorv) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssssis", $nome, $codigo, $fornecedor, $valorc, $quantidade, $valorv);

// Executar a consulta preparada
if ($stmt->execute()) {
    ?>
    <html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "Cadastro Realizado com Sucesso.",
            icon: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "../menu.php";
            }
        });
    </script>
    </body>
    </html>
    <?php
} else {
    // Em caso de erro na execução da consulta
    echo "<script>alert('Erro ao cadastrar.');</script>";
    echo "<script>window.location='../add_produtos.php'</script>";
}

$stmt->close(); // Fechar o statement
$mysqli->close(); // Fechar a conexão com o banco de dados
?>
