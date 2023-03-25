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
                    <li><a class="Liks" href="#">INICIO</a></li>
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
    <main class="Main">
        <!--Imagen de fondo-->
        <section class="Main-fondo">
            <picture>
                <source srcset="
                        assets/img/smartphone/Banner-fondo.webp 1x,
                        assets/img/smartphone/Banner-fondo@2x.webp 2x,
                        assets/img/smartphone/Banner-fondo@3x.webp 3x
                        " media="(min-width:310px) and (orientation:portrait)">

                <source srcset="
                        assets/img/desktop/banner-fondo.webp 1x,
                        assets/img/desktop/banner-fondo@2x.webp 2x,
                        assets/img/desktop/banner-fondo@3x.webp 3x
                        " media="(min-width:1000px)">
                <img class="imagen-de-fondo
            " src="" alt="1ª paractica">
            </picture>
            <section class="texto-sobreImagen">
                <h1 id="evento" >EVENT</h1>
                <h1 id="tiempo" >TIME</h1>
            </section>
        </section>
        <section class="contenedorTriple">
            <section class="DosCuadros">
                <section class="Main-texto">
                    <h4 class="Main-talento">TALENTO ECUATOGUINEANO</h4>
                    <hr class="Main-linea">
                    <p class="Main-parrafo">En ésta página les damos a conocer desde diferentes puntos del mundo, el talento
                        ecuatoguineano en lo que concierne a los diferentes eventos, lo que somos en la diversión, y
                        celebración
                        de actividades culturales, Conciertos, el talento poético y de actuación en jóvenes ecuatoguineanos
                        en
                        España (Mallorca)
                    </p>
                </section>
                <article class="Main-imagen"></article>
            </section>
            <section class="contenedorAcerca">
                <section class="acerca">
                    <h3 class="acerca-de">ACERCA DE</h3>
                    <hr class="Main-linea-acerca">
                </section>
                <section class="Main-superior"></section>
                <article class="Main-imagenblack">
                    <a href="acerca_de.html" class="Main-boton">ACERCA DE</a>
                </article>
                <section class="Main-inferior"></section>
            </section>
           
        </section>
        <!--MAIN-EVENTOS-->
        <section class="Eventos">
            <h3 class="Eventos-event">EVENTOS</h3>
            <hr class="Eventos-linea">
            <section class="Tipo-evento">
                <section class="Proximos">
                    <a href="proximos_eventos.html"><article class="Eventos-imagen1"></article></a>
                    <a href="proximos_eventos.html"><p class="eventos">Proximos eventos</p></a>
                    <hr class="Eventos-linea">
                </section>
                <section class="Pasados">
                    <a href="eventos_pasados2.html"><article class="Eventos-imagen2"></article></a>
                    <a href="eventos_pasados2.html"><p class="eventos">Proximos eventos</p></a>
                    <hr class="Eventos-linea">
                </section>
            </section>
        </section>
        <!--MAIN-OTROS EVENTOS-->
        <section class="OtrosEventos">
            <h3 class="OtrosEventos-otros">OTROS EVENTOS</h3>
            <hr class="OtrosEventos-linea1">
            <section class="caja">
                <section class="bodes">
                    <article class="OtrosEventos-imagen1"></article>
                    <hr class="OtrosEventos-linea">
                    <p class="OtrosEventos-texto">Alba es la reepresentante de Guinea Ecuatorial para el concurso de
                        Miss
                        Universo 71ª edición. Fue Miss Supranational en Guinea Ecuatorial 2019</p>
                </section>
                <section class="bodes">
                    <article class="OtrosEventos-imagen2"></article>
                    <hr class="OtrosEventos-linea">
                    <p class="OtrosEventos-texto">El desfile de moda Africana es uno de los eventos valorados en el
                        continente
                        relacionados a la moda, donde cada pais es represatado por alguno/a de sus ciudadanos/as </p>
                </section>
                <section class="bodes">
                    <article class="OtrosEventos-imagen3"></article>
                    <hr class="OtrosEventos-linea">
                    <p class="OtrosEventos-texto">Buika es una Ecuatoguineana residente en mallorca, que ganó una
                        medalla de
                        Oro
                        al mérito en Bellas Artes</p>
                </section>
            </section>

            <button class="OtrosEventos-boton"><a href="otros_eventos2.html"> INFORMACION</a></button>
            <h4 class="event">EVENTTIME</h4>
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