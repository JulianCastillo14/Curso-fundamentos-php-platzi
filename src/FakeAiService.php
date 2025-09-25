<?php

namespace App;

class FakeAiService implements AiServiceInterface
{
    public function getResponse(string $question): string
    {
        sleep(2);

        if (strpos($question, 'PHP') !== false) {
            return "==============================\n"
                . "🚀  PHP es el motor secreto  🚀\n"
                . "🔧  que hace que las páginas  🔧\n"
                . "🌐  web cobren vida en tu     🌐\n"
                . "💻  servidor. ¡Es como el     💻\n"
                . "🤖  mayordomo digital que     🤖\n"
                . "📡  escucha, piensa y responde! 📡\n"
                . "==============================\n";
        } else {
            return 'AI: Yo solo puedo responder preguntas acerca de PHP';
        }
    }
}