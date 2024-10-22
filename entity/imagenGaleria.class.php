<?php
class imagenGaleria
{
    const RUTA_IMAGENES_PORTAFOLIO = "images/index/portfolio/";
    const RUTA_IMAGENES_GALLERY = "images/index/gallery/";

    private $nombre;

    private $descripcion;

    private $numVisualizaciones;

    private $numLikes;

    private $numDownloads;

    public function __construct($nombre,  $descripcion,  $numVisualizaciones,  $numLikes,  $numDownloads)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->numVisualizaciones = $numVisualizaciones;
        $this->numLikes = $numLikes;
        $this->numDownloads = $numDownloads;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getNumVisualizaciones()
    {
        return $this->numVisualizaciones;
    }

    public function getNumLikes()
    {
        return $this->numLikes;
    }

    public function getNumDownloads()
    {
        return $this->numDownloads;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function setNumVisualizaciones($numVisualizaciones): void
    {
        $this->numVisualizaciones = $numVisualizaciones;
    }

    public function setNumLikes($numLikes): void
    {
        $this->numLikes = $numLikes;
    }

    public function setNumDownloads($numDownloads): void
    {
        $this->numDownloads = $numDownloads;
    }

    public function getUrlPortafolio(): string
    {
        return self::RUTA_IMAGENES_PORTAFOLIO . $this->getNombre();
    }

    public function getUrlGallery(): string
    {
        return self::RUTA_IMAGENES_GALLERY . $this->getNombre();
    }
}
