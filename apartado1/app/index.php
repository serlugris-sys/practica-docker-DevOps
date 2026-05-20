<?php
$fecha = date('d/m/Y H:i:s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica DevSecOps</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 80px auto; text-align: center; }
        h1 { color: #2c3e50; }
        .info { background: #ecf0f1; padding: 20px; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>🐳 Contenedor Docker funcionando</h1>
    <div class="info">
        <p><strong>Fecha y hora del servidor:</strong> <?= $fecha ?></p>
        <p><strong>Hostname:</strong> <?= gethostname() ?></p>
        <p><strong>PHP versión:</strong> <?= phpversion() ?></p>
    </div>
</body>
</html>
