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
        <?php
            include 'conexion.php';
            $pdo = new Conexion();
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['nombre_usuario'])) {
                // Verificar si se ha enviado el formulario para comprobar si existe el correo antiguo
                if (isset($_POST['Enviar'])) {
                    $email_sesion = $_SESSION['nombre_usuario'];
                    $nombre = $_POST['nombre'];
                    $apellidos = $_POST['apellidos'];
                    $password = $_POST['password'];
                    $stmt = $pdo->prepare("UPDATE registro SET nombre=:nombre, apellidos=:apellidos, password=:password WHERE usuario=:email_sesion");
                    $stmt->bindValue(':nombre', $nombre);
                    $stmt->bindValue(':apellidos', $apellidos);
                    $stmt->bindValue(':password', $password);
                    $stmt->bindValue(':email_sesion', $email_sesion);
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                        header("Location: perfil.php");
                        exit();
                    } else {
                        $cod_error = 60; // login incorrecto
                    
                        // redirigir al usuario a la página de error con el mensaje de error correspondiente
                        header("Location: error.php?cod_error=" . $cod_error);
                        exit();
                    }
                }
            } 
        ?>
    </section>
</body>
</html>
