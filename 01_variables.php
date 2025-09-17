<?php
    $curso = "Curso de fundamentos de PHP";
    $precio = 80000;
    $fechaPublicacion = date("14-07-2025");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $curso ?></h1>
    <p><?= "Este curso cuesta: " . $precio ?></p>
    <p><?= "Fecha de publicación: " . $fechaPublicacion ?></p>
</body>
</html>