
<?php
header('Content-Type: text/html; charset=utf-8');
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos tiene una dirección diferente
$username = "solucionesadmin"; // Cambia esto por tu nombre de usuario de MySQL
$password = "SolucionesMEJGAR"; // Cambia esto por tu contraseña de MySQL
$dbname = "Soluciones"; // Cambia esto por el nombre de tu base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar si la conexión tuvo éxito
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

if (!$conn->set_charset("utf8")) {
        // printf("Error loading character set utf8: %s\n", $conn->error);
} else {
    // printf("Current character set: %s\n", $conn->character_set_name());
}
// Consulta SQL para obtener todos los resultados de la tabla
$sql = "SELECT * FROM Creditos";
$result = $conn->query($sql);
                

        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            // Imprimir los resultados en una lista
            
            while ($row = $result->fetch_assoc()) {
                echo <<< EOF
                <li class="Ecatepec credito">
                    <h3>No.{$row['id']}</h3>
                    <h4>Demandado: {$row['demandado']}</h4>
                    <div class="generales-creditos">
                        <p>Entidad: {$row['entidad']}</p>
                        <p>Municipio: {$row['municipio']}</p>
                        <p>Calle : {$row['calle']}</p>
                        <p>C.P. : {$row['c.p.']}</p>
                        <a href="Contacto.html">Mas información</a>
                    </div>
                </li>
                EOF;
            }
        } else {
            echo "No se encontraron resultados.";
        }
    
// Cerrar la conexión a la base de datos
$conn->close();
?>
