<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/forms.css">
    <title>Crear Paciente</title>
</head>
<body>
    <main>
        <h1>Registro de Paciente</h1>
        <form action="index.php" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Edad:</label>
            <input type="number" id="age" name="age" required>

            <label for="phoneNumber">Teléfono:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required>

            <label for="address">Dirección:</label>
            <input type="text" id="address" name="address" required>

            <button type="submit" name="action" value="create_patient">Guardar Paciente</button>
        </form>
    </main>
</body>
</html>