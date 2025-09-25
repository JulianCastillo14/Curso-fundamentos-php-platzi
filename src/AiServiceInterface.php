<?php

namespace App;

interface AiServiceInterface 
{
    public function getResponse(string $question): string;
}