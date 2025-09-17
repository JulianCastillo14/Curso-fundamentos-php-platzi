<?php
    $curso = "Curso de fundamentos de PHP";
    $diasClase = ["Lunes", "Martes", "Miércoles", "Jueves"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <p>Tienes clase del <?= $curso ?> los días: </p>
    <ul>
        <li><?= $diasClase[1] ?></li>
        <li><?= $diasClase[3] ?></li>
    </ul>
</body>
</html>