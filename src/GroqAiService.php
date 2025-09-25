<?php

namespace App;

use GuzzleHttp\Client;

class GroqAiService implements AiServiceInterface
{
    private $client;
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => 'https://api.groq.com/openai/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    public function getResponse(string $prompt): string
    {
        try {
            $response = $this->client->post('chat/completions', [
                'json' => [
                    'model' => 'openai/gpt-oss-120b',
                    'messages' => [
                        ['role' => 'system', 'content' => <<<EOT
                    Eres un asistente especializado en PHP.
                    - Si la pregunta no está relacionada con PHP, responde únicamente: "No puedo ayudarte con eso".
                    - Si la pregunta sí está relacionada con PHP, responde de manera breve, precisa y sin rodeos
                EOT],
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 1000
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            return $result['choices'][0]['message']['content'];
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}