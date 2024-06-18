<?php
require "./conection.php";

$sql = "SELECT * FROM producto";
$result = $conn->query($sql);

?>

<div class="grid-container">
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
        <a href="pedido.php">
            <div class="card">
                <img src="https://via.placeholder.com/300" alt="Imagen 1">
                <div class="card-content">
                    <h5 class="card-title"><?php echo $row["nombre"] ?></h5>
                    <p class="card-text"><?php echo $row["descripcion"] ?></p>
                    <p class="card-text">$ <?php echo $row["precio"] ?></p>
                </div>
            </div>
        </a>
    <?php }
    ?>
</div>