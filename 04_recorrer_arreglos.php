<?php
$curso = "Curso de fundamentos de PHP";
$precio = 80000;
$fechaPublicacion = date("14-07-2025");
$archivado = true;
$status = $archivado ? "archivado" : "activo";
$nivelCurso = "avanzado";
$etiquetas = ["PHP", "JavaScript", "HTML", "CSS", "MySQL"];
$cursosRelacionados = ["Curso de JavaScript", "Curso de HTML y CSS", "Curso de MySQL"];
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
    <p>Este curso introduce los fundamentos del lenguaje PHP, orientado a quienes inician en el desarrollo web. Aprenderás a instalar y configurar PHP, escribir tus primeros scripts, trabajar con variables, tipos de datos, operadores, estructuras de control (condicionales y bucles) y funciones. También verás cómo procesar formularios HTML, manejar arreglos y trabajar con archivos. Al finalizar, estarás en capacidad de crear páginas web dinámicas simples e interactuar con bases de datos MySQL de forma básica.</p>
    <p><?= "Este curso cuesta: " . $precio ?></p>
    <p><?= "Fecha de publicación: " . $fechaPublicacion ?></p>
    <p><?= "Este curso está " . $status . "." ?></p>
    <p><?= "Nivel del curso: " . $nivelCurso ?></p>
    <?php if ($nivelCurso === "básico"): ?>
        <p>Este curso es para principiantes.</p>
    <?php elseif ($nivelCurso === "intermedio"): ?>
        <p>Este curso es para usuarios con conocimientos previos.</p>
    <?php elseif ($nivelCurso === "avanzado"): ?>
        <p>Este curso es para usuarios avanzados.</p>
    <?php else: ?>
        <p>Nivel de curso no especificado.</p>
    <?php endif ?>
    <p>Etiquetas del curso:</p>
    <ul>
        <?php foreach ($etiquetas as $etiqueta): ?>
            <li><?= $etiqueta ?></li>
        <?php endforeach ?>
    </ul>
    <p>Cursos relacionados:</p>
    <ul>
        <?php foreach ($cursosRelacionados as $cursoRelacionado): ?>
            <li><?= $cursoRelacionado ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>