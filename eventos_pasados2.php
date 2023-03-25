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
            <!--Icono-despliegue-->
            <input class="Header-despliega" type="checkbox" id="Header-boton">
            <label for="Header-boton">
                <!-- icono de hamburguesa-->
                <img class="Header-iconoHamburguesa" src="./assets/img/svg/Menú.svg" />
            </label>
            <!--Desplegable Movil-->
            <ul class="Header-desplegable">
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
<!--MAIN-->
<main class="Main3">
    <h3>EVENTOS PASADOS</h3>
    <hr class="linea1">
    <section class="cajaGeneral1">
        <article class="Main3-imagen1"></article>
        <section class="general1">
            <h3 class="Main3-texto">LA CANTANTE CONCHA BOIKA REGRESA A MALLORCA EN UN CONCIERTO BENEFICO</h3>
            <p class="textoBuika">La cantante Concha Buika, nacida en Mallorca y afincada en Miami, regresa a su
                tierra natal para ofrecer un concierto benéfico. | Concha Buika</p>
            <section class="Boton">
                <button class="button"><a href="edicionbuika2.html">Mas informacion</a></button>
            </section>
        </section>
    </section>
    <section class="cajaGeneral2">
        <article class="Main3-imagen2"></article>
        <section class="general2">
            <h3 class="Main3-texto2">CONCIERTO DE ROMY_SO_LOVE POR PRIMERA VEZ EN PALMA DE MALLORCA</h3>
            <p class="textoBuika">Romy so love llega por primera vez en Palma de mallorca, en un concierto organizado por sus hermanos paisanos residentes en Mallorca.</p>
            <section class="Boton">
                <button class="button"><a href="edicionromy2.html">Mas informacion</a></button>
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