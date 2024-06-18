<?php

require "../conection.php";

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

?>



<table border="1">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row["id_cliente"]); ?></td>
                <td><?= $row["nombre"]  ?></td>
                <td><?= $row["apellido"] ?></td>
                <td><?= $row["telefono"] ?></td>
                <td><?= $row["correo"] ?></td>
                <td>
                    <a href="actualizar.php?id_cliente=<?php echo htmlspecialchars($row['id_cliente']); ?>">Actualizar</a>
                    <a href="delete.php?id_cliente=<?php echo htmlspecialchars($row['id_cliente']); ?>">Eliminar</a>
                </td>



            </tr>
        <?php }
        ?>

    </tbody>



</table>