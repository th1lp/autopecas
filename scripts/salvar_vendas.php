<html>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "scripts/config.php";

// Receber dados da requisição POST
$codigo = $_POST['codigo'];
$quantidade = $_POST['quantidade'];

// Consultar o banco de dados para obter a quantidade atual
$sql = "SELECT quantidade FROM estoque WHERE codigo = '$codigo'";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantidadeAtual = $row['quantidade'];

    // Calcular a nova quantidade em estoque após a venda
    $novaQuantidade = $quantidadeAtual - $quantidade;

    // Atualizar o banco de dados com a nova quantidade
    $updateSql = "UPDATE estoque SET quantidade = $novaQuantidade WHERE codigo = '$codigo'";
    $query = $mysqli->query($updateSql); // Corrigido para usar $updateSql

    if ($query) {
        // Atualização bem-sucedida, exibir SweetAlert de sucesso
        ?>
        <script>
            Swal.fire({
                title: "Sucesso!",
                text: "Atualização realizada com sucesso.",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                }
            });
        </script>
        <?php
    } else {
        // Erro na atualização do banco de dados
        echo "<script>alert('Erro ao atualizar o estoque.');</script>";
        echo "<script>window.location='../produtos.php';</script>"; // Redirecionar para a página principal
    }
} else {
    // Produto não encontrado ou erro na consulta
    echo "<script>alert('Produto não encontrado.');</script>";
    echo "<script>window.location='../menu.php';</script>"; // Redirecionar para a página principal
}
?>
</body>
</html>
