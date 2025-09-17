<?php

class Autor
{
    public function __construct(
        protected string $nombre,
        protected string $apellido,
        protected string $email,
        protected string $biografia,
    ) {}

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __toString()
    {
        $html = "<h2>Autor del curso</h2>";
        $html .= "<p>Nombre: {$this->nombre} {$this->apellido}</p>";
        $html .= "<p>Email: {$this->email}</p>";
        return $html;
    }

    public function actualizarEmail(string $email): void
    {
        if (empty($email))
        {
            return;
        }
        $this->email = $email;
    }
        
}