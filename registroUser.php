<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php $title = "UTN 2021" ?>
    
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    
    <div class="container ">
        <h2>Alta de usuarios</h2>
        <hr>
    <div class="form w-75">
        <?php
        
        //array POST
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $nombreUser = $_REQUEST['nombre_user'];
        $claveUser = $_REQUEST['clave_user'];

        // conexion MYSQL
        include "conexion.php";

        // consulta 1: verificar que el usuario no exista (SELECT). Si no existe, realiza la consulta 2(alta), y si existe, volvemos al form de registro
        $query1 = mysqli_query($conexion, "SELECT nombre FROM usuarios where email = '$email'");

        $verificacion = mysqli_num_rows($query1); 
        
        if($verificacion > 0){
            // el email ya esta registrado
            echo "<p>La direccion de email corresponde a un usuario registrado.</p>";
            echo "<a href='formRegistro.php' class='btn btn-warning'>volver</a>";
        }else{
            // consulta 2: alta (INSERT)
            $queryAlta = mysqli_query($conexion, "INSERT INTO usuarios VALUES(0, '$nombre','$nombreUser','$claveUser','$email')");
            
            if($queryAlta === true){
                echo "<p class='alert alert-success'>Gracias ".$nombreUser." por registrarse.</p>";
                echo "<a href='formLogin.php' class='btn btn-warning'>Log in</a>";

            }  
        }



        
        
        
        ?>
    </div>
</div>



</body>
</html>