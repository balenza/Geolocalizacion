// Javascript code


function myMap()
{

   var latitud = document.getElementById("lat").value;
   var longitud = document.getElementById("long").value;
   var sitio = 'Centro'
   
   var opcionesMapa= 
        {
            center:new google.maps.LatLng(latitud,longitud),
            zoom:17,
        };

    var map = new google.maps.Map(document.getElementById("googleMap"),opcionesMapa);
    var myLatLong = new google.maps.LatLng(latitud,longitud);
    var marcador01 = new google.maps.Marker
        ({
            position: myLatLong,
            map: map,
            title: sitio
        });

}



function mis3Favoritos()
{
    
   var latitud = document.getElementById("lat").value;
   var longitud = document.getElementById("long").value;
   var sitio = 'Centro'
   
var locations = 
        [
          ['Corte ingles', 41.646911, -0.885456, 4],
          ['CESTE', 41.623610, -0.906646, 5],
          ['Romareda', 41.636448, -0.901919, 3]
          
        ];

var opcionesMapa=
        {
            center:new google.maps.LatLng(latitud,longitud),
            zoom:13,
        };
 
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


function pFavoritos()
{
    var locations = getJSON("favoritos.php");
    
    
    
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


/*
var conexion
//function favoritosBBDD()
function misFavoritos()

{ //conexion con el json de la BBDD
  conexion=new XMLHttpRequest();
  conexion.onreadystatechange = procesarJSON;
  conexion.open('GET','favoritos.php', true);
  conexion.send();
 }
  
  
 function procesarJSON() 
  
  {
    //alert('Cadena en formato JSON:  '+conexion.responseText);
    //var datos=JSON.parse(conexion.responseText);
    var datos=JSON.parse(conexion);
    var salida='';
    
   ------------
    for(var f=0;f<datos.length;f++)
    {
      salida += 'Codigo:'+datos[f].codigo+"<br>";
      salida += 'Descripcion:'+datos[f].descripcion+"<br>";
      salida += 'Precio:'+datos[f].precio+"<br><br>";
    }
  --------------
    
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
  
*/ 




/*
 * addEventListener('load',inicializarEventos,false);

function inicializarEventos()
{
  var ob=document.getElementById('boton1');
  ob.addEventListener('click',presionBoton,false);
}

var conexion1;
function presionBoton(e)
{
  conexion1=new XMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('GET','pagina1.php', true);
  conexion1.send();
}

function procesarEventos()
{
  var resultados = document.getElementById("resultados");
  if(conexion1.readyState == 4)
  {
    alert('Cadena en formato JSON:  '+conexion1.responseText);

    var datos=JSON.parse(conexion1.responseText);
    var salida='';
    for(var f=0;f<datos.length;f++)
    {
      salida += 'Codigo:'+datos[f].codigo+"<br>";
      salida += 'Descripcion:'+datos[f].descripcion+"<br>";
      salida += 'Precio:'+datos[f].precio+"<br><br>";
    }
    resultados.innerHTML = salida;
  } 
  else 
  {
    resultados.innerHTML = "Cargando...";
  }
}
 */