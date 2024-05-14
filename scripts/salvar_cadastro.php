<html>
<head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "Cadastro Realizado com Sucesso.",
            icon: "success"
            }).then(okay => {
                if(okay){
                    window.location.href = "../index.php";
                }
            });
     </script>
                
<?php }else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../login.html'</script>";
}

?>
    </body>
</html>