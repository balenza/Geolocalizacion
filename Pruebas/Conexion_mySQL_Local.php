<?php
        
        $db_host="127.0.0.1";
        $db_nombre="favoritos";
        $db_usuario="root";
        $db_pass="R0bertit0";
      
        try 
        {
        $conexion=NEW mysqli ($db_host, $db_usuario, $db_pass, $db_nombre);
        if ($conexion->connect_error)
            {
            die("ha fallado algo: " . $conexion->connect_error);
            }
        /*
        echo "Conexion establecida con: $db_nombre en $db_host";
        echo "<br>";
        echo "----------------------------------------------------";
        echo "<br>";
        echo "<br>";
         * 
         */
        }
        catch (Exception $ex) 
        {
            echo 'Problemas en la conexión: ' . $ex->getMessage();
        }
        
        //mysqli_connect($conexion, $db_nombre) or die ("No se ha encontrado la BBDD");

        
?>
