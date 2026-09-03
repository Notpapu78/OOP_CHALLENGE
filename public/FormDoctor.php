<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/doctor.css">
    <title>Crear Doctor</title>
</head>
<body>
    <main>
        <h1>Registro de Doctor</h1>
        <form action="index.php" method="POST">
            <label for="name">Nombre del Doctor:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="specialty">Especialidad:</label><br>
            <input type="text" id="specialty" name="specialty" required><br><br>

            <label for="phoneNumber">Teléfono:</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>

            <button type="submit" name="action" value="create_doctor">Guardar Doctor</button>
        </form>
    </main>
</body>
</html>