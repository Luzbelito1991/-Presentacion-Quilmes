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
        <h2>Registro de usuarios</h2>
        <hr>
        <div class="form w-75">
            <form action="registroUser.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dni</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="dni" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ingrese su usuario" name="nombre_user" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="máximo 12 caracteres" maxlength="12" name="clave_user" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Celular</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="máximo 12 caracteres" maxlength="12" name="clave_user" required>
                </div>

                <label for="exampleFormControlInput1" class="form-label">Tipo de Credito</label>
                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                    <option selected>Seleccione tipo de credito</option>
                    <option value="1">Solo DNI</option>
                    <option value="2">Recibo de Sueldo</option>
                </select>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="máximo 12 caracteres" maxlength="12" name="clave_user" required>
                </div>

                <input class="btn btn-outline-warning" type="submit" value="Registrarse">
            </form>
        </div>
    </div>



</body>

</html>