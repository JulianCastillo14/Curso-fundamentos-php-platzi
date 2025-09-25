<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaAiService implements AiServiceInterface
{
    protected $client;

    public function __construct()
    {
        $this->client = Ollama::client();
    }

    public function getResponse(string $question): string
    {
        $result = $this->client->chat()->create(
            [
                'model' => 'deepseek-r1:1.5b',
                'messages' => [
                    ['role' => 'system', 'content' => <<<EOT
                    Eres un asistente especializado en PHP.
                    - Si la pregunta no está relacionada con PHP, responde únicamente: "No puedo ayudarte con eso".
                    - Si la pregunta sí está relacionada con PHP, responde de manera breve, precisa y sin rodeos
                EOT],
                    ['role' => 'user', 'content' => $question],
                ]
            ],
        );

        return $result->message->content;
    }
}
