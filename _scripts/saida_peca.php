<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autopecas";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificação se o ID da peça e a quantidade foram enviados via POST
if (isset($_GET['id']) && isset($_POST['quantidade'])) {
    $id = $_GET['codigo'];
    $quantidadeVendida = $_POST['quantidade'];

    // Preparação da consulta SQL para deletar a peça do estoque pelo ID
    $sql_delete = "DELETE FROM estoque WHERE id = ?";
    $stmt_delete = $conn->prepare($sql_delete);

    // Verificação da preparação da consulta de exclusão
    if ($stmt_delete) {
        // Ligação do parâmetro 'id' à consulta preparada de exclusão
        $stmt_delete->bind_param("i", $id);

        // Execução da consulta de exclusão
        if ($stmt_delete->execute()) {
            echo "Peça vendida com sucesso!";

            // Preparação da consulta SQL de atualização do estoque
            $sql_update = "UPDATE estoque SET quantidade = quantidade - ? WHERE id = ?";
            $stmt_update = $conn->prepare($sql_update);

            // Verificação da preparação da consulta de atualização
            if ($stmt_update) {
                // Ligação dos parâmetros à consulta preparada de atualização
                $stmt_update->bind_param("ii", $quantidadeVendida, $id);

                // Execução da consulta de atualização
                if ($stmt_update->execute()) {
                    echo "Quantidade atualizada no estoque.";
                } else {
                    echo "Erro ao atualizar a quantidade no estoque: " . $stmt_update->error;
                }

                // Fechamento da consulta preparada de atualização
                $stmt_update->close();
            } else {
                echo "Erro na preparação da consulta de atualização: " . $conn->error;
            }
        } else {
            echo "Erro ao vender a peça: " . $stmt_delete->error;
        }

        // Fechamento da consulta preparada de exclusão
        $stmt_delete->close();
    } else {
        echo "Erro na preparação da consulta de exclusão: " . $conn->error;
    }

    // Redirecionamento para a página menu.php após a operação
    header("Location: ../menu.php");
    exit(); // Encerramento do script após o redirecionamento
} else {
    header("Location: ../menu.php");
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
