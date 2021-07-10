<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    
    <div class="container ">
        <h2>Alta de usuarios</h2>
        <hr>
    <div class="form w-75">

        <?php
        
        //array POST
        $dni_cli = $_REQUEST['dni'];
        $nombre_cli = $_REQUEST['nombre'];
        $apellido_cli = $_REQUEST['apellido'];
        $domic_cli = $_REQUEST['domicilio'];
        $cel_cli = $_REQUEST['celular'];
        $tipo_credito = $_REQUEST['tipoCredito'];
        $contrasenia = $_REQUEST['password'];
        $mail_cli = $_REQUEST['mail'];


        // conexion MYSQL
        include "conexion.php";

        // consulta 1: verificar que el usuario no exista (SELECT). Si no existe, realiza la consulta 2(alta), y si existe, volvemos al form de registro
        $query1 = mysqli_query($conexion, "SELECT nombre FROM clientes where contrasenia = '$mail_cli'");

        $verificacion = mysqli_num_rows($query1); 
        
        if($verificacion > 0){
            // el email ya esta registrado
            echo "<p>La direccion de email corresponde a un usuario registrado.</p>";
            echo "<a href='FormLoginClientes.php' class='btn btn-warning'>volver</a>";
        }else{
            // consulta 2: alta (INSERT)
            $queryAlta = mysqli_query($conexion, "INSERT INTO clientes VALUES('$dni_cli','$nombre_cli','$apellido_cli','$domic_cli','$cel_cli','$tipo_credito','$contrasenia','$mail_cli')");
            
            if($queryAlta === true){
                echo "<p class='alert alert-success'>Gracias ".$nombre_cli." por registrarse.</p>";
                echo "<a href='FormLoginClientes.php' class='btn btn-success'>Log in</a>";

            }  
        }
        
        ?>
    </div>
</div>



</body>
</html>