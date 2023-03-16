</head>
<body>
    <section class="container1">
        <a href="inicio.html"></a>
        <section> <?php

                    include 'conexion.php';

                    $pdo = new Conexion();

                    //Insertar registro
                  
                        $sql = "INSERT INTO registro (nombre, apellidos, correo_electronico, password, confirmar) VALUES (:nombre, :apellidos, :correo_electronico, :password, :confirmar)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindValue(':nombre', $_POST['nombre']);
                        $stmt->bindValue(':apellidos', $_POST['apellidos']);
                        $stmt->bindValue(':correo_electronico', $_POST['correo_electronico']);
                        $stmt->bindValue(':password', $_POST['password']);
                        $stmt->bindValue(':confirmar', $_POST['confirmar']);
                        $stmt->execute();
                        $idPost = $pdo->lastInsertId();
                        if ($idPost) {
                            header("HTTP/1.1 200 Ok");
                            echo "<h1>se ha guardado el boleto correctamete</h1>";
                            exit;
                        }
                    
                    ?></section>

    </section>
</body>

</html>