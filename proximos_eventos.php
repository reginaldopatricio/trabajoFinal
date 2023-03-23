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
    <title>Eventos Pasados</title>
</head>
<body>
       <!--HEADER-->
    <header class="Header">
        <section class="Header-Navbar">
            <!--Logo-->
            <h1 class="Header-Logo">EVENTTIME</h1>
            <section class="Logos">
                <!--Icono-login-->
                <a href="index.html"><img class="inicio" src="./assets/img/svg/Inicio.svg" /></a>
                <!--Desplegable Movil-->
                <!--Desplegable Movil-->
                <ul class="Header-desplegable">
                    <li><a class="liks" href="inicio.php">INICIO</a></li>
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
  <!--MAIN-->
  <main class="Main3">
    <h3>PROXIMOS EVENTOS</h3>
    <hr class="linea1">
    <section class="cajaGeneral1">
        <article class="Main3-imagen4"></article>
        <section class="general1">
            <h3 class="Main3-texto">VANILLA KARR VISITA MALLORCA EN UN CONCIERTO DE RECAUDACIÓN DE FONDOS PARA LOS HERIDOS DEL 7M</h3>
                <p class="textoBuika">La cantante Vnilla karr, artista ecuatoguineana visitará mallorca en un concierto para poder recaudar fondos por los que fueron herridos en el acccidente del 7M en la ciudad de Bata  (Guinea Ecuatorial).</p>
            <section class="Boton">
                <button class="button"><a href="edicionVanilla.html">Mas informacion</a></button>
            </section>
        </section>
    </section>
    <section class="cajaGeneral2">
        <article class="Main3-imagen5"></article>
        <section class="general2">
            <h3 class="Main3-texto">NICK MBA LLEGA A MALLORCA PARA CELEBRAR SUS CUMPLEAÑOS CON SUS HERMANOS PAISANOS RESIDENTES EN LA ISLA</h3>
            <p class="textoBuika">El artista NICK MBA, por motivos de sus cumpleaños,  organizará un evento en donde dará a conocer sus canciones nuevas 2023.</p>
            <section class="Boton">
                <button class="button"><a href="edicionMba.html">Mas informacion</a></button>
            </section>
        </section>
    </section>

    <h3 class="Main2-titulo">EVENTTIME</h3>
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