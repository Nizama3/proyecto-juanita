<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="./index.css">
     <title>PASTELERIA LA JUANITA</title>     
</head>
<body>

    <header class="principal">
        <h3 class="text-center" >BIENVENIDOS A JUANITA PASTELERIA</h3>
        <section class="" >
            <ul class="lista">
                <li class="lista-item" ><a href="./productos/get_pastel_tartas.php">PASTELES Y TARTAS</a></li>
                <li class="lista-item" ><a href="">REPOSTERIA</a></li>
                <li class="lista-item" ><a href="">GALLETAS Y DONAS</a></li>                
                <li class="lista-item" ><a href="">CUPCAKES Y MUFFINS</a></li> 
            </ul>
        </section>    
    </header>

    <div class="content">
        <?php require "./productos/get_products.php" ?>
    </div>







    <?php include_once "./footer.php" ?>
   


    
</body>
</html>