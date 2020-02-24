// Javascript code

function mis3Favoritos()
{
    
    
 

var locations = [
          ['Corte ingles', 41.646911, -0.885456, 4],
          ['CESTE', 41.623610, -0.906646, 5],
          ['Romareda', 41.636448, -0.901919, 3]
          
        ];

var opcionesMapa={}

 
    var map = new google.maps.Map(document.getElementById("googleMap"),opcionesMapa);


    for (var i = 0; i < locations.length; i++) 
    {
     var item = locations[i];
     var marker = new google.maps.Marker
         ({
           position: {lat: item[1], lng: item[2]},
           map: map,
           title: item[0]
         });
    }
    
}