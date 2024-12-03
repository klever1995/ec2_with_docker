<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despliegue en Instancia EC2</title>
</head>
<body>
    <h1>Bienvenido al sistema de despliegue en EC2</h1>
    <h1>hola mundo</h1>
    <p>Esta página se está mostrando desde la instancia EC2 con la siguiente dirección IP:</p>

    <?php
    // Mostrar la dirección IP del servidor (instancia EC2)
    echo '<p><strong>Dirección IP de la instancia EC2:</strong> ' . $_SERVER['SERVER_ADDR'] . '</p>';

    // Mostrar información adicional (puedes personalizar esto para mostrar más detalles)
    echo '<p><strong>Nombre del host:</strong> ' . gethostname() . '</p>';
    ?>

    <p>La aplicación se ha desplegado correctamente en esta instancia EC2.</p>
</body>
</html>
