<?php
        
        
    // fichero de configuracion conexión       
    require ("Conexion_mySQL_Local.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
    if ($conexion->connect_error)
        {
        die("ha fallado algo: " . $conexion->connect_error);
        EXIT;
        }
    mysqli_set_charset($conexion, "utf8");


    $consulta="SELECT * FROM puntos";

    $puntos= mysqli_query ($conexion, $consulta);

    mysqli_close($conexion);


    $favoritos = array();

        { 
           
           $i=0;
           while ($fila= mysqli_fetch_row ($puntos))
           {
               $favoritos[$i] = $fila;
               $i++;
           }


        }

    //creamos el json $favoritos_json
    $favoritos_json= json_encode($favoritos);
    echo $favoritos_json
        
        
?>
