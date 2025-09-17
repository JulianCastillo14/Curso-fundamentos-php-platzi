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

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getSubtitulo(): string
    {
        return $this->subtitulo;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getFechaPublicacion(): string
    {
        return $this->fechaPublicacion;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getNivelCurso(): string
    {
        return $this->nivelCurso;
    }

    public function getEtiquetas(): array
    {
        return $this->etiquetas;
    }

    public function getCursosRelacionados(): array
    {
        return $this->cursosRelacionados;
    }

    public function getLecciones(): array
    {
        return $this->lecciones;
    }

    public function getAutor(): Autor
    {
        return $this->autor;
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
