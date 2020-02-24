<?php
    $point1 = array("lat" => "48.8666667", "long" => "2.3333333"); // Paris (France)
    $point2 = array("lat" => "19.4341667", "long" => "-99.1386111"); // Mexico City (Mexico)
    
    $km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)
    $mi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'mi'); // Calculate distance in miles
    $nmi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'nmi'); // Calculate distance in nautical miles
    
    echo "The distance between Paris (France) and Mexico City (Mexico) is $km km (= $mi miles = $nmi nautical miles)";
?>