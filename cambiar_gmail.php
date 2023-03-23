<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        include 'conexion.php';

        $pdo = new Conexion();

        if (isset($_POST['enviar_nuevoGmail'])) {
            $correo_nuevo = $_POST['correo_nuevo'];
            $email_sesion = $_SESSION['nombre_usuario'];
            // Se recomienda usar una consulta preparada para evitar inyecciones SQL
            $sql = "SELECT count(*) as count FROM registro where correo_electronico = :correo_nuevo";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':correo_nuevo', $correo_nuevo, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result['count'] > 0) {
                echo "El correo ya existe!";
            } else {
                $sql = "UPDATE registro SET correo_electronico = :correo_nuevo WHERE usuario = :email_sesion";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':correo_nuevo', $correo_nuevo, PDO::PARAM_STR);
                $stmt->bindParam(':email_sesion', $email_sesion, PDO::PARAM_STR);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    header("Location: perfil.php");
                } else {
                    echo "No se ha actualizado el correo.";
                }
            }
        }
    ?>
</body>
</html>

