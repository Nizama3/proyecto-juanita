<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="grid-container">
        <?php
        require "../conection.php";

        $sql = "SELECT * FROM producto WHERE nombre IN ('Tarta de Chocolate', 'Cheesecake de Fresa', 'Bizcocho de Zanahoria' );";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">
                <img src="https://via.placeholder.com/300" alt="Imagen de Producto">
                <div class="card-content">
                    <h5 class="card-title"><?php echo $row["nombre"]; ?></h5>
                    <p class="card-text"><?php echo $row["descripcion"]; ?></p>
                    <p class="card-text">$ <?php echo $row["precio"]; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
