<?php
require "../conection.php";

// Verificar si se ha recibido el parámetro id_cliente
if(isset($_GET['id_cliente']) && !empty($_GET['id_cliente'])){
    // Obtener el valor de id_cliente
    $id_cliente = $_GET['id_cliente'];

    // Preparar la consulta para eliminar el cliente
    $delete_query = "DELETE FROM cliente WHERE id_cliente = $id_cliente";

    // Ejecutar la consulta
    if($conn->query($delete_query) === TRUE){
        echo "Cliente eliminado exitosamente";
    } else {
        echo "Error al eliminar el cliente: " . $conn->error;
    }
} else {
    echo "ID de cliente no proporcionado";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
