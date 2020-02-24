<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>favoritos</title>
        
        <style>
            table
            {
            width:50%;
            border: 1px dotted #FF0000;
            margin:auto;
            }
        </style>
     
  
    </head>
    
    <body>
        <?php
        
        
// fichero de conf conexión
        
        require ("Conexion_mySQL_Local.php");
       
        $conexion=mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
        if ($conexion->connect_error)
            {
            die("ha fallado algo: " . $conexion->connect_error);
            EXIT;
            }
        mysqli_set_charset($conexion, "utf8");
        
        
        $consulta="SELECT * FROM puntos";
        
        $resultados= mysqli_query ($conexion, $consulta);
        
       
        while ($fila= mysqli_fetch_row ($resultados))
        { 
            
        //echo "<table width='50'% align=center border='1'><tr><br>";
            
        echo $fila[0] . "</td><td> ";
        echo $fila[1] . "</td><td> ";
        echo $fila[2] . "</td><td> ";
        echo $fila[3] . "</td><td> ";
        echo "<br></td><td></tr><td></table>";
        }
        
        mysqli_close($conexion);
        echo "<br>";
        echo "<br>";
        echo "desconectados";
        
        
        ?>
    </body>
    
    
</html>
