<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Registro</title>
</head>

<body>

    <body class="contenedor">
        <!--HEADER-->
        <header class="Header">
            <section class="Header-Navbar">
                <!--Logo-->
                <h1 class="Header-Logo">EVENTTIME</h1>
                <section class="Logos">
                    <!--Icono-login-->
                    <section class="login-registro">
                        <a href="registro.html" class="registro">Registro</a>
                        <a class="login" href="login.html"></a>
                    </section>
                    <a href="login.html"><img class="inicio" src="./assets/img/svg/retroceder.svg" /></a>
                    <!--Desplegable-->
                    <ul class="Header-desplegable">
                        <li><a class="liks" href="index.html">INICIO</a></li>
                        <li><a class="liks" href="acerca_de.html">ACERCA DE.</a></li>
                        <li><a class="liks" href="eventos.html">EVENTOS</a></li>
                        <li><a class="liks" href="otros_eventos.html">OTROS EVENTOS</a></li>
                        <li><a class="liks" href="contactanos.html">CONTACTANOS</a></li>
                    </ul>
                </section>
            </section>
        </header>
        <!--MAIN-->
        <main class="Main">
            <section class="CajaPrincipal">
                <section class="cajaForm">
                    <article class="icono"></article>
                    <h3 class="Iniciar-Sesion">Introduce el nuevo correo</h3>
                    <form action="cambiar_gmail.php" method="POST" class="formulario2">
                    <input type="text" id="correo_electronico" name="correo_nuevo" class="correo" placeholder="correo electronico">
                        <input type="submit" value="Entrar" name="enviar_nuevoGmail" class="boton2">
                    </form>
                </section>
            </section>
            
        </main>

        <!--FOOTER-->
    <footer class="Footer">
        <section class="Footer-Comentario">
            <p class="Footer-texto">Todavía es desconcertante.
                Puedes disfrutarlo al máximo</p>
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