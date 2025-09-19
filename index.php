<?php

require __DIR__ . '/vendor/autoload.php';

use App\Curso;
use App\Autor;
use App\TipoCurso;

$curso = new Curso(
    titulo: "Curso de fundamentos de PHP",
    subtitulo: "Aprende php y laravel",
    descripcion: "Este curso introduce los fundamentos del lenguaje PHP, orientado a quienes inician en el desarrollo web. Aprenderás a instalar y configurar PHP, escribir tus primeros scripts, trabajar con variables, tipos de datos, operadores, estructuras de control (condicionales y bucles) y funciones. También verás cómo procesar formularios HTML, manejar arreglos y trabajar con archivos. Al finalizar, estarás en capacidad de crear páginas web dinámicas simples e interactuar con bases de datos MySQL de forma básica.",
    precio: 80000,
    fechaPublicacion: date("d-m-Y"),
    estado: "activo",
    nivelCurso: "básico",
    etiquetas: ["PHP", "JavaScript", "HTML", "CSS", "MySQL"],
    cursosRelacionados: ["Curso de JavaScript", "Curso de HTML y CSS"],
    lecciones: [
        ['titulo' => 'Introducción a PHP', 'duracion' => '15:30'],
        ['titulo' => 'Variables y Tipos de Datos', 'duracion' => '20:45'],
        ['titulo' => 'Estructuras de Control', 'duracion' => '25:10'],
        ['titulo' => 'Funciones en PHP', 'duracion' => '30:00'],
        ['titulo' => 'Manejo de Formularios', 'duracion' => '22:15'],
    ],
    autor: new Autor(
        nombre: "Julian",
        apellido: "Castillo",
        email: "julian.castillo.platzi@gmail.com",
        biografia: "Desarrollador web con más de 10 años de experiencia, especializado en PHP y frameworks como Laravel. Apasionado por la enseñanza y la creación de contenido educativo para desarrolladores."
    ),
    tipo: TipoCurso::PAGO,
);

$curso->autor->actualizarEmail("ing.julian.profe@gmail.com")

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->titulo ?></title>
</head>

<body>
    <?= $curso ?>
</body>

</html>