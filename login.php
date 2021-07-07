<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php $title = "UTN 2021" ?>
    
    <title>Menu comercios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    
    <div class="container ">
        
    <div class="form w-75">
       
       <?php
        
        //array POST
        $cod_cliente = $_REQUEST['id_comercio'];
        $claveUser = $_REQUEST['clave_user'];

        // conexion MYSQL
        include "conexion.php";

        //consulta3: si el usuario y el password coinciden, no hay login, sale a Registro. Sino, creamos las sesiones

        $query3 = mysqli_query($conexion, "SELECT id_comercio, contrasenia FROM comercio_adheridos WHERE id_comercio='$cod_cliente' and contrasenia='$claveUser'");

        $verif = mysqli_num_rows($query3);

        echo $verif;

        if($verif == 0){
            // echo "<p>Para ingresar debes ser usuario registrado.</p>";
            // echo "<a href='formRegistro.php' class='btn btn-primary'>Rgistrarse</a>";
            
            echo "<p>Hay datos que no concidedn con algun usuario ya registrado</p>";
            //echo "<a href='formLogin.php' class='btn btn-primary'>Volver</a>";
        }else{

            header('location:menuComercio.html');

            // sesiones
            //session_start();

            //$_SESSION['cod_cliente'] = $cod_cliente;
            //$_SESSION['clave_user'] = $claveUser;
            //procesar la consulta -> fetch -> array con los valores de la fila
            //$user = mysqli_fetch_array($query3);

            //$_SESSION['id'] = $user['id'];//
            // $_SESSION['nombre'] = $user['nombre'];
            // $_SESSION['email'] = $user['email'];

            // version aburrida
            // echo "<h2>Hola ".$_SESSION['nombre_user']."</h2><hr>";
            // echo "<a href='mostrarusuarios.php'>Ingresar</a>";

            // version rápida
            //header('location:mostrarusuarios.php');


        }


    
        
        ?>
    </div>
</div>



</body>
</html>