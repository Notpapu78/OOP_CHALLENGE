<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/forms.css">
    <title>Crear Doctor</title>
</head>
<body>
    <main>
        <h1>Registro de Doctor</h1>
        <form action="index.php" method="POST">
            <label for="name">Nombre del Doctor:</label>
            <input type="text" id="name" name="name" required>

            <label for="specialty">Especialidad:</label>
            <input type="text" id="specialty" name="specialty" required>

            <label for="phoneNumber">Teléfono:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required>

            <button type="submit" name="action" value="create_doctor">Guardar Doctor</button>
        </form>
    </main>
</body>
</html>