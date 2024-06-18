<?php
require "./conection.php";

$sql = "SELECT * FROM empresa";
$result = $conn->query($sql);

?>



 
 <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre Nosotros</h4>
                <p>Somos una pastelería dedicada a ofrecer los mejores postres 
                    y dulces para todas tus ocasiones especiales.</p>
                <a href="./clientes/get.php">Clientes</a>    
            </div>
            <div class="footer-section">
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                <h4>Contacto</h4>
                <p> Email: <?php echo $row["correo"]  ?></p>
                <p>Teléfono:<?php echo $row["telefono"]  ?></p>

                <?php }
                ?>
            </div>
            <div class="footer-section">
                <h4>Síguenos</h4>
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Pastelería Juanita. Todos los derechos reservados.</p>
        </div>
    </footer>