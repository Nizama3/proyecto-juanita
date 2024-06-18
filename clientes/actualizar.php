<?php
require "../conection.php";

if(isset($_GET['id_cliente']) && !empty($_GET['id_cliente'])){
    $id_cliente = $_GET['id_cliente'];

    $select_query = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";
    $result = $conn->query($select_query);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
    } else {
        echo "Cliente no encontrado";
        exit; 
    }
} else {
    echo "ID de cliente no proporcionado";
    exit; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo htmlspecialchars($apellido); ?>"><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>"><br><br>
        
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($correo); ?>"><br><br>
        
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>

<?php
$conn->close();
?>
