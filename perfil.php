<?php
	//Activo la sesión en PHP
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
</head>

<body>
    <!--HEADER-->
    <header class="Header">
        <section class="Header-Navbar">
            <!--Logo-->
            <h1 class="Header-Logo">EVENTTIME</h1>
            <section class="Logos">
                <!--Icono-despliegue-->
                <input class="Header-despliega" type="checkbox" id="Header-boton">
                <label for="Header-boton">
                    <!-- icono de hamburguesa-->
                    <img class="Header-iconoHamburguesa" src="./assets/img/svg/Menú.svg" />
                </label>
                <!--Desplegable Movil-->
                <ul class="Header-desplegable">
                    <li><a class="liks" href="inicio.php">INICIO</a></li>
                    <li><a class="liks" href="acerca_de2.php">ACERCA DE.</a></li>
                    <li><a class="liks" href="eventos2.php">EVENTOS</a></li>
                    <li><a class="liks" href="otros_eventos2.html">OTROS EVENTOS</a></li>
                    <li><a class="liks" href="contactanos2.html">CONTACTANOS</a></li>
                </ul>

                <!--DESKTOP-->
                <section class="escritorio">
                    <ul class="Header-Desktop">
                        <li><a class="Liks" href="inicio.php">INICIO</a></li>
                        <li><a class="Liks" href="acerca_de2.php">ACERCA DE.</a></li>
                        <li><a class="Liks" href="eventos2.php">EVENTOS</a></li>
                        <li><a class="Liks" href="otros_eventos2.html">OTROS EVENTOS</a></li>
                        <li><a class="Liks" href="contactanos2.html">CONTACTANOS</a></li>
                    </ul>

                    <section class="registrado">
                        <img class="navegador" src="./assets/img/svg/navegador.svg" alt="">
                        <section class="php">
                            <?php

                                                $usuario = $_SESSION["nombre_usuario"];
                                                echo "<h3>$usuario</h3>"; ?>
                        </section>
                    </section>
                    <a class="miPerfil" href="logout.php"><img class="perfil"
                            src="./assets/img/svg/Registro.svg" />Cerrar sesion</a>
                </section>

            </section>
        </section>
    </header>
    <main class="codigoPHP">
        <section class="section">
            <h2 class="h2">Perfil</h2>
            <?php
            include 'conexion.php';
            $pdo = new Conexion();

            //MOSTRAR POR PANTALLA
            $sql = $pdo->prepare("SELECT * FROM registro where usuario=:usuario");
            $sql->bindParam(':usuario', $usuario);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 hay datos");

            // Sacamos todos los resultados de la base de datos
            $resultado = $sql->fetchAll();

           // Mostrar resultados
           foreach ($resultado as $row) {
            echo "<b>" . "<h1 class='datos'>Nombre: </h1>";
            echo "<b>" . $row["nombre"] . "<br>";
            echo '<hr>';
            echo "<b>" . "<h1 class='datos'>Apellidos:</h1> ";
            echo "<b>" . $row["apellidos"] . "<br>";
            echo '<hr>';
            echo "<b>"  . "<h1 class='datos'>Correo electronico:</h1> " ;
            echo "<b>"  . $row["correo_electronico"] . "<br>";
            echo '<hr>';
        }
            $usuario = $_SESSION["nombre_usuario"];
            echo "<b>"  . " <p>Has iniciado sesion como</p> " ;
            echo "<p>$usuario</p>";
            ?>

        </section>
        <section class="botones">
            <button class="pulsa"><a class="editar_perfil" href="editar_perfil.html">Editar perfil</a></button>
            <button class="pulsa"><a class="editar_perfil" href="primer_correo.php">Cambiar_correo</a></button>
        </section>
        
    </main>

    <!--FOOTER-->
    <footer class="Footer">
        <section class="Footer-Comentario">
            <p class="Footer-texto1">Todavía es desconcertante.</p>
            <p class="Footer-texto2">Puedes disfrutarlo al máximo</p>
        </section>
        <section class="lista">
            <section class="lista1">
                <p class="list1">Acerca de.</p>
                <p class="list2">Eventos</p>
                <p class="list3">Otros eventos</p>
                <p class="list4">Contactos</p>
            </section>
            <section class="lista2">
                <p class="list6">Copyright © 2023 Todos los derechos reservados </p>
                <a class="list5">Politia de privacidad</a>
            </section>
            <section class="lista3">
                <h4 class="list7">EVENT</h4>
                <h4 class="list8">TIME</h4>
            </section>
        </section>
    </footer>
</body>


</html>