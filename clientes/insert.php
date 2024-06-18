<?php

    require "../conection.php"; 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $password = $_POST["password"];

        $sql = "INSERT INTO cliente (id_cliente, nombre, apellido, telefono, correo, password)
                VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$correo', '$password')";

        if($conn->query($sql) === TRUE) {
            echo "Se ingreso el registro con exito";
        } else {
            echo "Error al ingresar el registro";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./index.css">
    <title>Document</title>

    <style>

        form{
            display: flex;
            flex-direction: column;
            width: 400px;
            margin: 0 auto;
        }

        .prp{
            display: flex;
            justify-content: center;
        }
        button{
            width: 100px;
            margin-top: 10px;
            
        }

    </style>

</head>
<body>
<form action="" method="POST">

<label class="form-label" for=""> Cedula</label>
<input class="form-control" name="cedula"   type="text">
<label class="form-label" for=""> Nombre </label>
<input class="form-control" name="nombre"   type="text">
<label class="form-label"  for=""> Apellido</label>
<input class="form-control" name="apellido"   type="text">
<label class="form-label" for=""> Correo </label>
<input class="form-control" name="correo"   type="email">
<label class="form-label" for=""> telefono</label>
<input class="form-control" name="telefono"   type="text">
<label class="form-label" for=""> Password</label>
<input class="form-control" name="password"   type="password">

<div class="prp">
    <button class="btn btn-success" type="submit">Registrarse</button>
</div>



</form>
</body>
</html>