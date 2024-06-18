<?php
require "../conection.php";

if(isset($_POST['id_cliente'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'])){
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $update_query = "UPDATE cliente 
    SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo'
    WHERE id_cliente=$id_cliente";

    if($conn->query($update_query) === TRUE) {
        echo "Cliente actualizado correctamente";
    } else {
        echo "Error al actualizar el cliente: " . $conn->error;
    }
} else {
    echo "Faltan datos del formulario";
}
$conn->close();
?>
