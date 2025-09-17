<?php
$archivado = true;
$curso = [
    'titulo' => "Curso de fundamentos de PHP",
    'subtitulo' => "Aprende php y laravel",
    'descripcion' => "Este curso introduce los fundamentos del lenguaje PHP, orientado a quienes inician en el desarrollo web. Aprenderás a instalar y configurar PHP, escribir tus primeros scripts, trabajar con variables, tipos de datos, operadores, estructuras de control (condicionales y bucles) y funciones. También verás cómo procesar formularios HTML, manejar arreglos y trabajar con archivos. Al finalizar, estarás en capacidad de crear páginas web dinámicas simples e interactuar con bases de datos MySQL de forma básica.",
    'precio' => 80000,
    'fechaPublicacion' => date("d-m-Y"),
    'archivado' => $archivado,
    'estado' => $archivado ? "archivado" : "activo",
    'nivelCurso' => "básico",
    'etiquetas' => ["PHP", "JavaScript", "HTML", "CSS", "MySQL"],
    'cursosRelacionados' => ["PHP", "JavaScript", "HTML", "CSS", "MySQL"],
    'lecciones' => [
        ['titulo' => 'Introducción a PHP', 'duracion' => '15:30'],
        ['titulo' => 'Variables y Tipos de Datos', 'duracion' => '20:45'],
        ['titulo' => 'Estructuras de Control', 'duracion' => '25:10'],
        ['titulo' => 'Funciones en PHP', 'duracion' => '30:00'],
        ['titulo' => 'Manejo de Formularios', 'duracion' => '22:15'],
        ['titulo' => 'Trabajando con Arreglos', 'duracion' => '18:40'],
        ['titulo' => 'Manejo de Archivos', 'duracion' => '27:50'],
        ['titulo' => 'Introducción a MySQL', 'duracion' => '35:20']
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso['titulo'] ?></title>
</head>

<body>
    <h1>Bienvenido al <?= $curso['titulo'] ?></h1>
    <h2><?= $curso['subtitulo'] ?></h2>
    <p><?= $curso['descripcion'] ?></p>
    <p><?= "Este curso cuesta: " . $curso['precio'] ?></p>
    <p><?= "Fecha de publicación: " . $curso['fechaPublicacion'] ?></p>
    <p><?= "Este curso está " . $curso['estado'] . "." ?></p>
    <p><?= "Nivel del curso: " . $curso['nivelCurso'] ?></p>
    <?php if ($curso['nivelCurso'] === "básico"): ?>
        <p>Este curso es para principiantes.</p>
    <?php elseif ($curso['nivelCurso']  === "intermedio"): ?>
        <p>Este curso es para usuarios con conocimientos previos.</p>
    <?php elseif ($curso['nivelCurso']  === "avanzado"): ?>
        <p>Este curso es para usuarios avanzados.</p>
    <?php else: ?>
        <p>Nivel de curso no especificado.</p>
    <?php endif ?>
    <p>Etiquetas del curso:</p>
    <ul>
        <?php foreach ($curso['etiquetas']  as $etiqueta): ?>
            <li><?= $etiqueta ?></li>
        <?php endforeach ?>
    </ul>
    <p>Cursos relacionados:</p>
    <ul>
        <?php foreach ($curso['cursosRelacionados']  as $cursoRelacionado): ?>
            <li><?= $cursoRelacionado ?></li>
        <?php endforeach ?>
    </ul>
    <p>Lecciones del curso:</p>
    <section>
        <?php foreach ($curso['lecciones'] as $indice => $leccion): ?>
            <li><b><?= "Clase " . ($indice + 1) . ". " ?></b><?= $leccion['titulo'] . " - duración: " . $leccion['duracion'] ?></li>
        <?php endforeach ?>
    </section>
</body>

</html>