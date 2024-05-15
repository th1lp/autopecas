<html>
<head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php
        session_start();
        include "config.php";
        $login = $_POST['email'];
        $senha = $_POST['senha'];

        //Verificar se o login existe
        $rs = "SELECT email FROM usuarios WHERE email = '$login'";
        $query = $mysqli->query($rs);
        $total = $query->num_rows;

        if($total>=1){

            $rs = "SELECT email,senha FROM usuarios WHERE email = '$login' AND senha = '$senha'";
            $query = $mysqli->query($rs);
            $total = $query->num_rows;

            if($total>=1){
                $_SESSION['usuarios'] = $login;
                echo "<script>window.location='../menu.php'</script>";

            }else{ ?>

            <script>
                Swal.fire({
                    title: "Erro!",
                    text: "Verifique seu login.",
                    icon: "error"
                });
                </script>
            echo "<script>window.location='../menu.php'</script>";

            <?php }

        }else{
            echo "<script>alert('Login inválido');</script>";
            echo "<script>window.location='../index.html'</script>";
        }


        ?>
    </body>
</html>