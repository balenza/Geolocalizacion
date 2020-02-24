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
        
        
     
 
$url = 'favoritos.php';
 
//read json file from url in php
$readJSONFile = file_get_contents($url);
 

//convert json to array in php
$array = json_decode($readJSONFile, TRUE);
var_dump($array); // print array
 
        
        
        
        
        
        
        
        
        ?>
        
    </body>
       
</html>
