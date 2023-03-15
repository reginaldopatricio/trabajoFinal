<?php

    $host = "localhost";
    $user = "edib";
    $password = "edib";
    $bbdd = "proyecto_final";
    $conector = mysqli_connect($host, $user, $password);

    //comprobación de la connexion
    if ($conector){
        echo "Conexion establecida correctamente a Mysql con el usuario: <b>" .$user . "</b>";
        echo "<br>";
            $sentencia = "CREATE DATABASE proyecto_final";
            $resultado = mysqli_query($conector,$sentencia);
            if ($resultado){

                echo "la base de datos dawse ha creado correctamente";

            }else{

                echo "No se ha creado correctamente";
            }


        
    }else{
            echo "<br>No se ha podido crear correctamente la tabla <b>" .$bbdd . "</b><br>";
        }
?>