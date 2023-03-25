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
    <title>Otros eventos</title>
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
        <!--MAIN-->
        <main class="Main2">
            <section class="Fondo">
                <h3 class="Fondo-texto">OTROS EVENTOS</h3>
            </section>
            <h3 class="Main2-titulo">EVENTTIME</h3>
            <section class="Caja-otrosEventos">
                <section class="ImagenesTextos1">
                    <article class="Imagen-miss"></article>
                    <p class="texto-OtrosEventos">Alba Isabel Obama Moliko es la representante de Guinea Ecuatorial para el
                    concurso Miss Universo 71ª edición. Obama Moliko es una estudiante de Derecho de 21 años. Fue Miss
                    Supranational Guinea Ecuatorial en 2019 en el que también ganó un premio de supermodelo de África.</p>
                </section>
                <section class="ImagenesTextos2">
                    <article class="Imagen-ISABEL"></article>
                    <p class="texto-OtrosEventos">En la jornada de la tarde del sábado, continúa la Fiesta África Vive con un
                    pase de moda de diseñadores africanos que residen en Gran Canaria.
                    La diseñadora María Teresa Villarreal Eñiñga, ecuatoguineana afincada en Canarias, diseña y confecciona
                    ropa y complementos donde fusiona los estilos africano y europeo, con su marca AFRICANAIS.</p>
                </section>
                <section class="ImagenesTextos3">
                    <article class="Imagen-Buika"></article>
                    <p class="texto-OtrosEventos">«Buika World Tour 2021» nos presenta, una combinación de sus grandes éxitos y
                    sus canciones mas recientes así como sorpresas del que será su decimoprimer álbum. Sus arreglos
                    arriesgados e incluso casi improvisados en el escenario, crean piezas mágicas e inolvidables. Un
                    sorprendente regalo para los músicos que la acompañarán que logran disfrutarlo, y a su vez para un
                    público, siempre muy agradecido y entregado. Nunca deja a nadie indiferente.</p>
                </section>
            </section>
            <article class="Main2-imagen3"></article>
            <p class="texto">Midjé_La_Mia, una de las revelaciones en el mundo de la música ecuatoguinena.</p>
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