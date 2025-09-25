<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$aiService = new App\GroqAiService($_ENV['GROQ_API_KEY']);

return new App\Chat($aiService);