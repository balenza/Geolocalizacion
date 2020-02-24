// Javascript code


function myMap()
{
    //LatLng(41.6523201,-0.8776779)

    var latitud = 41.6523201;
    var longitud = -0.8776779;  
    
    //var latlong = {lat: "latitud", lng: "longitud"};
    
    
    var opcionesMapa= 
        {
            //center:new google.maps.LatLng(latitud,longitud),
            center:new google.maps.LatLng(47.453740,19.142052),
            zoom:17,
        };
   
   
   var map = new google.maps.Map(document.getElementById("googleMap"),opcionesMapa);
   var locations = [
 ['Label 1', 47.453740, 19.142052],
 ['Label 2', 47.502547, 19.038126],
 ['Label 3', 47.650821, 19.020171],
 ['Label 4', 47.490881, 19.012405],
 ['Label 5', 47.562505, 19.087996],
 ['Label 6', 47.481118, 19.250704],
 ['Label 7', 47.569537, 19.098241],
 ['Label 8', 47.496817, 19.030732],
 ['Label 9', 47.480566, 19.276519]
];


for (var i = 0; i < locations.length; i++) {
 var item = locations[i];
 var marker = new google.maps.Marker({
   position: {lat: item[1], lng: item[2]},
   map: map,
   title: item[0]
 });
}
   
   }