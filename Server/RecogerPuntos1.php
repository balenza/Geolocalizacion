
<?php

    $resul = WebService1();
    foreach($resul['geonames'] as $city)
        {
            $cities .= '<p>'.$city['name'].'</p>';    
        }
    print_r ($cities);e

?>        
