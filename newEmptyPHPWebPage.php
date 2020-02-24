<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Función para llamar al webservice y devolver el resultado en un array
            function callWebService($method)
            {
              $url ='http://localhost/Geolocalizacion/Server/favoritosJson.php';
              $json = file_get_contents($url);
              $array = json_decode($json,true);
              return $array;
            }
            
            
            
            /* llamada7
             * 
            $resul = callWebService();
            foreach($resul['geonames'] as $city)
            {
                $cities .= '<p>'.$city['name'].'</p>';    
            }
            print_r ($cities);
             * 
             */
        ?>
        
    </body>
</html>
