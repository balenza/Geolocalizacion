
<?php
    // Función para llamar al webservice y devolver el resultado en un array
    function WebService1($method)
        {
          $url = favoritos.php;
          $json = file_get_contents($url);
          $arraypuntos = json_decode($json,true);

          return $array;
          echo $array;
        }

?>        
