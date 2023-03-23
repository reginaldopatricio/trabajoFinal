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
                        <li><a class="Liks" href="index.html">INICIO</a></li>
                        <li><a class="Liks" href="acerca_de.html">ACERCA DE.</a></li>
                        <li><a class="Liks" href="eventos.html">EVENTOS</a></li>
                        <li><a class="Liks" href="otros_eventos.html">OTROS EVENTOS</a></li>
                        <li><a class="Liks" href="contactanos.html">CONTACTANOS</a></li>
                    </ul>

                    <!--OTRA LISTA-->
                    <ul class="otra-lista">
                        <!-- <li><a class="Liks" href="login.html">INICIAR SESION</a></li> -->
                        <li><a class="Liks" href="login.html">INICIAR SESION</a></li>
                        <li><a class="Liks" href="registro.html">REGISTRO</a></li>
                    </ul>
    
                </section>
                
            </section>
        </section>
    </header>
    <!--MAIN-->
    <main>
        <section class="errore">
            <h1 class="error">404</h1>
            <section class="fallos"> 
                <?php
        session_start();

        $cod_error = $_GET['cod_error'];

        switch ($cod_error) {
            case '10':
                echo "<h1>¡ERROR! en login! Revisa el usuario y la contraseña</h1>";
                echo "<br>";
                echo "<a href='login.html'>retroceder</a>";
                break;
            case '40':
                echo "¡ERROR esta no es tu antigua direccion de correo";
                echo "<br>";
                echo "<a href='primer_correo.php'>retroceder</a>";
                break;
            case '50':
                echo "<h1>¡ERROR este correo ya existe</h1>";
                echo "<a href='registro.html'>retroceder</a>";
                break;
            case '60':
                echo "<h1>ERROR DE DATOS</h1>";
                echo "<a href='editar_perfil.html'>retroceder</a>";
                    break;
            case '70':
                echo "<h1>Esta direccion de correo no es valida</h1>";
                echo "<a href='registro.html'>retroceder</a>";
                break;

            case '80':
                echo "<h1>Esta direccion de correo no es valida</h1>";
                echo "<a href='registro2.html'>retroceder</a>";
                break;

            case '90':
                echo "<h1>Esta direccion de correo no es valida</h1>";
                echo "<a href='registro2.html'>retroceder</a>";
                break;
            default:
                
                break;
        }

    ?>
        <h5>No pudimos acceder a la pagina debido a un problema.:(</h5>
        <h5>Pero podría volver a intentarlo retrocediendo a traves de los enlaces del menú</h5>
        <hr class="raya">
            </section>
        </section>
    </main>
    
</body>
</html>