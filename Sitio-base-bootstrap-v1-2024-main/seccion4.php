<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO</title>
</head>
<body>
    <h1>Tabla de Personas</h1>
    <form id="form_personas" action="guardar_p.php" method="post">
        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="Documento" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="Nombre" required>
        <br>
        <label for="fecha_na">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_na" name="Fecha_Na" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="Edad" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

