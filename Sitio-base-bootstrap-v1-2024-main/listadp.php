<?php
require_once 'guardar_p.php'; // Suponiendo que 'user_manager.php' contiene la clase UserManager
$userManager = new mostrarUsuarios();
$users = $userManager->getAllUsers();

if ($users) {
    echo "<h2>Lista de Usuarios Registrados</h2>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Documento</th>";
    echo "<th>Nombre</th>";
    echo "<th>Fecha de Nacimiento</th>";
    echo "<th>Edad</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['documento'] . "</td>";
        echo "<td>" . $user['nombre'] . "</td>";
        echo "<td>" . $user['fecha_na'] . "</td>";
        echo "<td>" . $user['edad'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No se encontraron usuarios.</p>";
}
?>
