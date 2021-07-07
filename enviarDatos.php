<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estiloForm.css">

    <title>Datos Enviados</title>
</head>

<body>

    <div class="container mx-auto">
        <h2>Datos Que se Enviaran</h2>

        <?php

        //1) Definir los datos a enviar -> armar el array POST

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        /*echo "La Cantidad de registros enviados fueron: "; 

    echo count($_POST);*/

        /*echo $nombre;
    echo $apellido;
    echo $email;
    echo $mensaje;

echo "<br>";*/


        //2) Cargar los datos del envio -> destino, asunto, mensaje

        $destinatario = "lucianajungmarker@gmail.com";
        $asunto = "Hola Luciana este es el mensaje del sitio";
        $cuerpoMensaje = "<br> Nombre: " . $nombre . "<br> Apellido: " . $apellido . "<br> Email: " . $email . "<br> Mensaje: " . $mensaje;

        /*echo $cuerpoMensaje;*/


        //3) envio de datos

        @$envio = mail($destinatario, $asunto, $cuerpoMensaje);

        //4) Evaluacion del envio

        if ($envio == false) {
            echo "Su Consulta fue enviada correctamente";
        } else {
            echo "No se puedo enviar su consulta, llamenos";
        }


        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>