<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <link rel="stylesheet" href="CSS/fer.css">


</head>

<body>
    

    <div class="container_fluid">
        <h2>Registro de usuarios</h2>
        <hr>
        <div class="form w-100">
            <form class="forma" action="registroUser.php" method="POST">

                <div class="form-group">
                    <label for="">Dni</label>
                    <input type="number" name="dni" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Domicilio</label>
                    <input type="text" name="domicilio" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Celular</label>
                    <input type="number" name="celular" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Tipo de Credito</label>
                    <select name="tipoCredito" id="" class="form-control">
                        <option selected>Seleccione tipo de credito</option>
                        <option value="DNI">DNI</option>
                        <option value="RECSUELDO">Recibo de Sueldo</option>
                    </select>

                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="mail" name="mail" class="form-control">
                </div>

                    <input class="btn btn-success mt-3" type="submit" value="Registrarse">
            </form>
        </div>
    </div>

    <?php

    include 'footer.php';

    ?>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>