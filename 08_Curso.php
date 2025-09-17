<?php

class Curso
{
    public function __construct(
        protected string $titulo,
        protected string $subtitulo,
        protected string $descripcion,
        protected float $precio,
        protected string $fechaPublicacion,
        protected string $estado,
        protected string $nivelCurso,
        protected array $etiquetas,
        protected array $cursosRelacionados,
        protected array $lecciones,
        protected Autor $autor
    ) {

    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __toString()
    {
        $html = "<h1>Bienvenido al {$this->titulo}</h1>";
        $html .= "<h2>{$this->subtitulo}</h2>";
        $html .= "<p>{$this->descripcion}</p>";

        $html .= "<p>Este curso cuesta: {$this->precio}</p>";  ;
        $html .= "<p>Publicado el: {$this->fechaPublicacion}</p>";
        $html .= "<p>Nivel del curso: {$this->nivelCurso}</p>";
        $html .= "<p>Estado del curso: {$this->estado}</p>";

        if ($this->nivelCurso === "básico"):
            $html .= "<p>Este curso es para principiantes.</p>";
        elseif ($this->nivelCurso === "intermedio"):
            $html .= "<p>Este curso es para usuarios con conocimientos previos.</p>";
        elseif ($this->nivelCurso === "avanzado"):
            $html .= "<p>Este curso es para usuarios avanzados.</p>";
        else:
            $html .= "<p>Nivel de curso no especificado.</p>";
        endif;

        $html .= "<h2>Etiquetas del curso:</h2><ul>";
        foreach ($this->etiquetas as $etiqueta):
            $html .= "<li>{$etiqueta}</li>";
        endforeach;
        $html .= "</ul>";    

        $html .= "<h2>Cursos relacionados:</h2><ul>";
        foreach ($this->cursosRelacionados as $cursoRelacionado):
            $html .= "<li>{$cursoRelacionado}</li>";
        endforeach;
        $html .= "</ul>";
        
        $html .= "<h2>Lecciones del curso:</h2><section><ul>";
        foreach ($this->lecciones as $indice => $leccion):
            $html .= "<li><b>Clase " . ($indice + 1) . ". </b>" . $leccion['titulo'] . " - duración: " . $leccion['duracion'] . "</li>";
        endforeach;
        $html .= "</ul></section>";
        $html .= $this->autor;
    
        return $html;
    }

    public function agregarEtiqueta(string $etiqueta): void 
    {
        if (in_array($etiqueta, $this->etiquetas))
        {
            return;
        }
        if (empty($etiqueta))
        {
            return;
        }
        if (count($this->etiquetas) >= 5)
        {
            return;
        }
        $this->etiquetas[] = $etiqueta;
    }

    public function agregarCursoRelacionado(string $cursoRelacionado, ): void   
    {
        if (in_array($cursoRelacionado, $this->cursosRelacionados))
        {
            return;
        }
        if (count($this->cursosRelacionados) >= 4)
        {
            return;
        }
        $this->cursosRelacionados[] = $cursoRelacionado;
    }
}
