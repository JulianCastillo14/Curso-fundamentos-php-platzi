<?php

class Autor
{
    public function __construct(
        public string $nombre,
        public string $apellido,
        public string $email,
        public string $biografia,
    ) {}
}

class Curso
{
    public function __construct(
        public string $titulo,
        public string $subtitulo,
        public string $descripcion,
        public float $precio,
        public string $fechaPublicacion,
        public string $estado,
        public string $nivelCurso,
        public array $etiquetas,
        public array $cursosRelacionados,
        public array $lecciones,
        public Autor $autor
    ) {}
}


$curso = new Curso(
    titulo: "Curso de fundamentos de PHP",
    subtitulo: "Aprende php y laravel",
    descripcion: "Este curso introduce los fundamentos del lenguaje PHP, orientado a quienes inician en el desarrollo web. Aprenderás a instalar y configurar PHP, escribir tus primeros scripts, trabajar con variables, tipos de datos, operadores, estructuras de control (condicionales y bucles) y funciones. También verás cómo procesar formularios HTML, manejar arreglos y trabajar con archivos. Al finalizar, estarás en capacidad de crear páginas web dinámicas simples e interactuar con bases de datos MySQL de forma básica.",
    precio: 80000,
    fechaPublicacion: date("d-m-Y"),
    estado: "activo",
    nivelCurso: "básico",
    etiquetas: ["PHP", "JavaScript", "HTML", "CSS", "MySQL"],
    cursosRelacionados: ["Curso de JavaScript", "Curso de HTML y CSS", "Curso de MySQL"],
    lecciones: [
        ['titulo' => 'Introducción a PHP', 'duracion' => '15:30'],
        ['titulo' => 'Variables y Tipos de Datos', 'duracion' => '20:45'],
        ['titulo' => 'Estructuras de Control', 'duracion' => '25:10'],
        ['titulo' => 'Funciones en PHP', 'duracion' => '30:00'],
        ['titulo' => 'Manejo de Formularios', 'duracion' => '22:15'],
        ['titulo' => 'Trabajando con Arreglos', 'duracion' => '18:40'],
        ['titulo' => 'Manejo de Archivos', 'duracion' => '27:50'],
        ['titulo' => 'Introducción a MySQL', 'duracion' => '35:20']
    ],
    autor: new Autor(
        nombre: "Julian",
        apellido: "Castillo",
        email: "julian.castillo.platzi@gmail.com",
        biografia: "Desarrollador web con más de 10 años de experiencia, especializado en PHP y frameworks como Laravel. Apasionado por la enseñanza y la creación de contenido educativo para desarrolladores."
    )
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->titulo ?></title>
</head>

<body>
    <h1>Bienvenido al <?= $curso->titulo ?></h1>
    <h2><?= $curso->subtitulo ?></h2>
    <p><?= $curso->descripcion ?></p>
    <p><?= "Este curso cuesta: " . $curso->precio ?></p>
    <p><?= "Fecha de publicación: " . $curso->fechaPublicacion ?></p>
    <p><?= "Este curso está " . $curso->estado . "." ?></p>
    <p><?= "Nivel del curso: " . $curso->nivelCurso ?></p>
    <?php if ($curso->nivelCurso === "básico"): ?>
        <p>Este curso es para principiantes.</p>
    <?php elseif ($curso->nivelCurso === "intermedio"): ?>
        <p>Este curso es para usuarios con conocimientos previos.</p>
    <?php elseif ($curso->nivelCurso === "avanzado"): ?>
        <p>Este curso es para usuarios avanzados.</p>
    <?php else: ?>
        <p>Nivel de curso no especificado.</p>
    <?php endif ?>
    <h2>Etiquetas del curso:</h2>
    <ul>
        <?php foreach ($curso->etiquetas as $etiqueta): ?>
            <li><?= $etiqueta ?></li>
        <?php endforeach ?>
    </ul>
    <p>Cursos relacionados:</p>
    <ul>
        <?php foreach ($curso->cursosRelacionados as $cursoRelacionado): ?>
            <li><?= $cursoRelacionado ?></li>
        <?php endforeach ?>
    </ul>
    <h2>Lecciones del curso:</h2>
    <section>
        <?php foreach ($curso->lecciones as $indice => $leccion): ?>
            <li><b><?= "Clase " . ($indice + 1) . ". " ?></b><?= $leccion['titulo'] . " - duración: " . $leccion['duracion'] ?></li>
        <?php endforeach ?>
    </section>
    <p><?= "Autor: " . $curso->autor->nombre . " " . $curso->autor->apellido ?></p>
</body>

</html>