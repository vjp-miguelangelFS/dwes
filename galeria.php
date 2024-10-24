<?php
require 'utils/utils.php';
require 'utils/File.class.php';
require 'entity/imagenGaleria.class.php';

$errores = [];
$descripcion = '';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $descripcion = trim(htmlspecialchars($_POST['descripcion']));

        $tipoAceptados = ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'];

        $imagen = new File('imagen', $tipoAceptados);

        $imagen->saveUploadFile(imagenGaleria::RUTA_IMAGENES_GALLERY);
        $imagen->copyFile(imagenGaleria::RUTA_IMAGENES_GALLERY, imagenGaleria::RUTA_IMAGENES_PORTAFOLIO);
        $mensaje = 'Datos enviados';
    } catch (FileException $exception) {
        $errores[] = $exception->getMessage();
    }
}

require 'views/galeria.view.php';
