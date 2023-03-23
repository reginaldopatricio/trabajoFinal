</head>

<body>
    <section class="container1">
        <a href="inicio.html">Inicio</a>
        <section>
            <?php
            session_start();
            include 'conexion.php';
            $pdo = new Conexion();
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $consulta = $pdo->prepare("SELECT usuario, password FROM registro WHERE usuario = :usuario AND password = :password");
            $consulta->bindParam(':usuario', $usuario);
            $consulta->bindParam(':password', $password);
            $consulta->execute();
            $resultado = $consulta->fetch();
            if ($resultado) {
                $_SESSION["nombre_usuario"] = $usuario;
                header("Location: proximos_eventos.php");
                exit();
            } else {
                $cod_error = 90; // login incorrecto
                
                // redirigir al usuario a la página de error con el mensaje de error correspondiente
                header("Location: error.php?cod_error=" . $cod_error);
                exit();
            }
            ?>
        </section>
    </section>
</body>

</html>