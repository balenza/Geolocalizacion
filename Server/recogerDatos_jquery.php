<!doctype html>

<html lang=“es">

<head>
    <meta charse1="UTF-8"/>
</head>


<body>
    <section id="content">
    <h1>recogemos el json con ajax</h1>
    <hr/>
    </section>
    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <script>
    $(document).on("ready",function(){
                   loadData();
                   });

        var loadData = function()
            {
                $.ajax({type:"POST",
                        dataTipe:"json",
                        url:"favoritos.php"   //Donde he creado el json con las coordenadas
                       }).done(function(data){
                           console.log(data);
                        });



                       /*  pruebas
                        var puntos =JSON.parse(data);

                        for (var i = 0; i < jsonData.counters.length; i++)
                        {
                            var counter = jsonData.counters[i];
                            console.log(counter.counter_name);

                        }
                       */

            }

    </script>

                    <!--  pruebas
                    <input type="button" value="datos" id="boton1">
                    <input type="text" value="" id="text1">
                    <div id="resultados"></div>
                    -->
</body>

<html>
