<?php
class Login{
    static function Registrar(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Ejercicios";

        // Verificar si se han enviado los datos del formulario
        if(isset($_POST['Documento'], $_POST['Nombre'], $_POST['Fecha_Na'], $_POST['Edad'])) {
            // Obtener los datos del formulario
            $documento = $_POST['Documento'];
            $nombre = $_POST['Nombre'];
            $fecha_na = $_POST['Fecha_Na'];
            $edad = $_POST['Edad'];

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Preparar la consulta SQL para insertar los datos en la tabla tb_Personas
            $sql = "INSERT INTO tb_Personas (Documento, Nombre, Fecha_Na, Edad) VALUES ('$documento', '$nombre', '$fecha_na', $edad)";

            // Ejecutar la consulta
            if ($conn->query($sql) === TRUE) {
                // Redirigir a otra página después de registrar los datos
                header("Location: controlador.php?seccion=seccion6");
                exit(); // Salir del script después de redirigir
            } else {
                echo "Error al registrar los datos: " . $conn->error;
            }

            // Cerrar la conexión
            $conn->close();
        } else {
            echo "No se recibieron los datos del formulario";
        }
    }

    static function mostrarUsuarios() {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Ejercicios";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los usuarios registrados
        $sql = "SELECT Documento, Nombre, Fecha_Na, Edad FROM tb_Personas";
        $result = $conn->query($sql);

        // Verificar si se encontraron usuarios
        if ($result->num_rows > 0) {
            // Imprimir los datos de los usuarios en una lista
            echo "<h2>Lista de Usuarios Registrados</h2>";
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>Documento: " . $row["Documento"]. ", Nombre: " . $row["Nombre"]. ", Fecha de Nacimiento: " . $row["Fecha_Na"]. ", Edad: " . $row["Edad"]. "</li>";
            }
            echo "</ul>";
        } else {
            echo "No se encontraron usuarios registrados";
        }

        // Cerrar la conexión
        $conn->close();
    }
}



?>

