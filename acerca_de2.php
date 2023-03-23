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
    <title>Acerca de</title>
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
    <main class="Main2">
        <section class="Fondo">
            <h3 class="Fondo-texto">ACERCA DE</h3>
        </section>
        <h3 class="Main2-titulo">EVENTTIME</h3>
        
        <section class="Archivos">
            <section class="Archivo">
                <article class="Main2-imagen1"></article>
                <p class="Main2-texto">Después de meses de preparativos, moviendo las cuerdas y los enchufes correctos, la
                cantante ganadora de premios de Guinea Ecuatorial, Vanilla Karr, finalmente ha lanzado su álbum debut,
                «Bioko».
                El álbum de 10 pistas serpentea a través del tema del amor, la apropiación de la cultura y las experiencias
                del artista que ha estado en el espacio musical durante casi una década. El álbum también representa la
                creatividad y el compromiso de llevar el sonido indígena de África al resto del mundo.</p>
            </section>
            <section class="Archivo">
                <article class="Main2-imagen2"></article>
                <p class="Main2-texto">Brandon se subió tres veces al escenario de Got Talent durante esta edición del programa. En la primera,
                recitó un poema sobre el romance entre el número 0 y el 1, en el que los cuatro jueces le dieron el sí para
                pasar a la siguiente fase. En semifinales, dedicó su poesía a la Tierra y la Luna, y con ella se ganó el
                botón dorado del jurado que daba el pase directo a la final. En esta, y con unos versos dedicados a su
                madre, fue finalmente el público el que le ha dado la victoria del concurso.</p>
            </section>
        </section>
        
        <section class="Arquetipo">
            <h2 class="Arquetipo-titulo">ARQUETIPO</h2>
            <hr class="linea">
            <section class="cuadro">
                <article class="Arquetipo-imagen1"></article>
                <section class="lineasTexto">
                    <hr class="linea1">
                    <hr class="linea2">
                    <hr class="linea3">
                    <p class="Arquetipo-texto">EventTime tendrá una seguidilla de lanzamientos de los diferentes eventos
                        ecuatoguineanos realizados en el ámbito mallorquín, y con el tiempo podremos ampliar el territorio
                        cubriendo todo el reino español.
                        Tal como se propone, en ésta página podrán estar al tanto en su mayor totalidad, de las actuaciones, y
                        actividades ecuatoguineanas en Mallorca.</p>
                </section>
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