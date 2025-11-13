<?php
$servername = 'db';
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("<h3>Error de conexión: " . $conn->connect_error . "</h3>");
}

echo "<h2>✅ Conexión exitosa a la base de datos '{$database}'</h2>";

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h3>Usuarios en la base de datos:</h3><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['nombre']) . " - " . htmlspecialchars($row['correo']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No hay usuarios en la tabla.</p>";
}

$conn->close();
?>
