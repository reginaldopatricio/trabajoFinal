<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="container1">
        <a href="inicio.html">Inicio</a>
        <section>
            <?php
            session_start();
            include 'conexion.php';
            $pdo = new Conexion();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['nombre_usuario'])) {
                // Verificar si se ha enviado el formulario para comprobar si existe el correo antiguo
                if (isset($_POST['Enviar'])) {
                    $email_sesion = $_SESSION['nombre_usuario'];
                    $antiguo_correo = $_POST['antiguo_correo'];
                    $consulta = $pdo->prepare("SELECT correo_electronico FROM registro WHERE correo_electronico=:antiguo_correo");
                    $consulta->bindParam(':antiguo_correo', $antiguo_correo);
                    $consulta->execute();
                    $resultado = $consulta->fetch();
                    if ($resultado) {

                        header("Location: cambio_gmail.php");
                        exit();
                        
                    } else {
                        $cod_error = 40; 

                        // redirigir al usuario a la página de error con el mensaje de error correspondiente
                        header("Location: error.php?cod_error=" . $cod_error);
                        exit();
                    }
                }
            }
            ?>
        </section>
    </section>
</body>
</html>
