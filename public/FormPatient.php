<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Paciente</title>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form action="index.php" method="POST">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Edad:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="phoneNumber">Teléfono:</label><br>
        <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>

        <label for="address">Dirección:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <button type="submit" name="action" value="create_patient">Guardar Paciente</button>
    </form>
</body>
</html>