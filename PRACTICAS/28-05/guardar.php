<?php
if(isset($_POST['Documento']) && isset($_POST['Nombre']) && isset($_POST['Fecha_Na']) && isset($_POST['Edad'])) {
    // Obtén los datos del formulario
    $documento = $_POST['Documento'];
    $nombre = $_POST['Nombre'];
    $fecha_na = $_POST['Fecha_Na'];
    $edad = $_POST['Edad'];

    // Configura la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Ejercicios";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }


    $sql = "INSERT INTO tb_Personas (Documento, Nombre, Fecha_Na, Edad) VALUES ('$documento', '$nombre', '$fecha_na', $edad)";


    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    echo "No se recibieron los datos del formulario";
}
?>
