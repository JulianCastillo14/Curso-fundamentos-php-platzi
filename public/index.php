<?php

$app = require __DIR__ . '/../bootstrap.php';

$question = $_POST['question'] ?? '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    $answer = $app->getResponse($question);
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boot de PHP</title>
</head>

<body>
    <form method="POST">
        <label for="question">Pregunta:</label>
        <input type="text" name="question" value="<?= htmlspecialchars($question) ?> " require>
        <input type="submit" value="preguntar">
    </form>
    <p>
        <strong> Respuesta:</strong>
        <?= htmlspecialchars($answer) ?>
    </p>

</body>

<style>
    :root {
        color-scheme: light dark;
        background: rgba(26, 25, 42, 0.3);
    }
</style>

</html>