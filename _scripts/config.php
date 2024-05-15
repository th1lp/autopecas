<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'autopecas';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco, 3306);

    //if($mysqli->connect_errno){
    //    echo "Erro";
    //} else {
    //    echo "Conexao efetuado";
    //}
?>