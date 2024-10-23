<?php
require "utils/utils.php";
require "entity/imagenGaleria.class.php";

$arrayImagenes = array();

for ($i = 0; $i < 12; $i++) {
    $arrayImagenes[] = new imagenGaleria(($i + 1) . ".jpg", "Descripción imagen " . ($i + 1), rand(500, 1000), rand(100, 500), rand(0, 100));
}
require "views/index.view.php";
