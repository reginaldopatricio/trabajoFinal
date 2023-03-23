<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--HEADER-->
    <header class="Header">
        <section class="Header-Navbar">
            <!--Logo-->
            <h1 class="Header-Logo">EVENTTIME</h1>
            <section class="Logos">
                <!--Icono-login-->
                <a class="login" href="login.html"><img class="Header-Iconologin" src="./assets/img/svg/Registro.svg"></img></a>
                <!--Icono-despliegue-->
                <input class="Header-despliega" type="checkbox" id="Header-boton">
                <label for="Header-boton">
                    <!-- icono de hamburguesa-->
                    <img class="Header-iconoHamburguesa" src="./assets/img/svg/Menú.svg" />
                </label>
                <!--Desplegable Movil-->
                <ul class="Header-desplegable">
                    <li><a class="liks" href="#">INICIO</a></li>
                    <li><a class="liks" href="acerca_de.html">ACERCA DE.</a></li>
                    <li><a class="liks" href="eventos.html">EVENTOS</a></li>
                    <li><a class="liks" href="otros_eventos.html">OTROS EVENTOS</a></li>
                    <li><a class="liks" href="contactanos.html">CONTACTANOS</a></li>
                </ul>

                <!--DESKTOP-->
                <section class="escritorio">
                    <ul class="Header-Desktop">
                        <li><a class="Liks" href="#">INICIO</a></li>
                        <li><a class="Liks" href="acerca_de.html">ACERCA DE.</a></li>
                        <li><a class="Liks" href="eventos.html">EVENTOS</a></li>
                        <li><a class="Liks" href="otros_eventos.html">OTROS EVENTOS</a></li>
                        <li><a class="Liks" href="contactanos.html">CONTACTANOS</a></li>
                    </ul>

                    <!--OTRA LISTA-->
                    <ul class="otra-lista">
                        <!-- <li><a class="Liks" href="login.html">INICIAR SESION</a></li> -->
                        <li><a class="Liks" href="comprobacion_registro.html">INICIAR SESION</a></li>
                        <li><a class="Liks" href="registro.html">REGISTRO</a></li>
                    </ul>
    
                </section>
                
            </section>
        </section>
    </header>
    <main class="Main">

        <section class="centro"> 
            <?php

                    include 'conexion.php';
                    $pdo = new Conexion();

                    $consulta = $pdo->prepare("SELECT correo_electronico FROM registro where correo_electronico=:correo_electronico ");
                    $correo=$_POST['correo_electronico'];
                    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                        $cod_error = 70; 
                            header("Location: error.php?cod_error=" . $cod_error);
                            exit();
                    }else{
                        $consulta->bindParam(':correo_electronico', $correo);
                        $consulta->execute();
                        $resultado = $consulta->fetch();
                        if (!$resultado) {
                            //Insertar registro
                            $sql = "INSERT INTO registro (nombre, apellidos, usuario, correo_electronico, password) VALUES (:nombre, :apellidos, :usuario, :correo_electronico, :password)";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindValue(':nombre', $_POST['nombre']);
                            $stmt->bindValue(':apellidos', $_POST['apellidos']);
                            $stmt->bindValue(':usuario', $_POST['usuario']);
                            $stmt->bindValue(':correo_electronico', $_POST['correo_electronico']);
                            $stmt->bindValue(':password', $_POST['password']);
                            $stmt->execute();
                            $idPost = $pdo->lastInsertId();
                            if ($idPost) {
                                header("HTTP/1.1 200 Ok");
                                echo "<a href='login2.html'>Iniciar Sesion</a>";
                                echo "<br>";
                            }
                            echo "<h1>Te has registrado correctamente</h1>";
                        } else {
                            $cod_error = 80; 
                            header("Location: error.php?cod_error=" . $cod_error);
                            exit();
                        }
                    }

                    ?>

                    <button class="pulsar"><a class="a" href="login2.html">Ir al login</a></button>
                </section>

    </main>
</body>

</html>