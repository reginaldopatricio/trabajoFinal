<?php
	//Activo la sesión en PHP
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Contactanos</title>
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
                <li><a class="Liks" href="perfil.php">PERFIL</a></li>
                <li><a class="Liks" href="inicio.php">INICIO</a></li>
                <li><a class="liks" href="acerca_de2.php">ACERCA DE.</a></li>
                <li><a class="liks" href="eventos2.php">EVENTOS</a></li>
                <li><a class="liks" href="otros_eventos2.php">OTROS EVENTOS</a></li>
                <li><a class="liks" href="contactanos2.php">CONTACTANOS</a></li>
            </ul>

            <!--DESKTOP-->
            <section class="escritorio">
                <ul class="Header-Desktop">
                    <li><a class="Liks" href="inicio.php">INICIO</a></li>
                    <li><a class="Liks" href="acerca_de2.php">ACERCA DE.</a></li>
                    <li><a class="Liks" href="eventos2.php">EVENTOS</a></li>
                    <li><a class="Liks" href="otros_eventos2.php">OTROS EVENTOS</a></li>
                    <li><a class="Liks" href="contactanos2.php">CONTACTANOS</a></li>
                </ul>

                <section class="registrado">
                    <img class="navegador" src="./assets/img/svg/navegador.svg" alt="">
                    <section class="php">
                        <?php

                                            $usuario = $_SESSION["nombre_usuario"];
                                            echo "<h3>$usuario</h3>"; ?>
                    </section>
                </section>
                <a class="miPerfil" href="perfil.php"><img class="perfil" src="./assets/img/svg/Registro.svg"/>Mi perfil</a>
            </section>
        </section> 
    </section>
</header>
    <!--Main-->
    <main class="Main2">
        <section class="Fondo">
            <h3 class="Fondo-texto">CONTACTANOS</h3>
        </section>
        <section class="cajas">
            <section class="primeraCaja">
                <h3 class="equipo" >EQUIPO EVENTTIME</h3>
                <p class="contenido">Como resultado de un increíble grupo de personas que apoyan a EVENTTIME en Edib, he podido dar luz verde a una serie de proyectos increíbles, incluido las versiones siguientes de ésta página,
                    Únete a nosotros, para que podamos seguir creando.
                    ¡Por una suscripción  puede recibir contenido exclusivo de EVENTTIME que incluye acceso temprano a edicion de tu propio evento, publicaciones de blog, !</p>
            </section>
            <section class="segundaCaja">
                <p class="form-texto">Usa éste formulario para ponerte en contacto con nosotros. !queremos conocer tu historia!
                </p>
                <form action="" class="formulario">
                    <label for="nombre-apellidos" class="nombres">Nombre y apellidos <span>(requeridos)</span></label>
                    <input type="text" id="nombre-apellidos" class="nombre-apellidos" name="nombre-apellidos">
                    <label for="telefono" class="tel">telefono <span>(requeridos) </span></label>
                    <input type="number" id="telefono" name="telefono" class="telefono">
                    <label for="correo-electronico" class="cor">correo electronico <span>(requeridos)</span></label>
                    <input type="text" id="correo-electronico" name="correo-electronico" class="correo">
                    <label for="mensaje" class="mens">Mensaje <span>(requeridos)</span></label>
                    <input type="text" id="mensaje" name="mensaje" class="mensaje">
                    <input type="submit" value="Enviar" class="boton">
                </form>
            </section>
        </section>
        
        <h4 class="eventTime">EVENTTIME</h4>
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