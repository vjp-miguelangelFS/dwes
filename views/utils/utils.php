<?php
function esOpcionMenuActiva($menu): bool
{
    if ($_SERVER['REQUEST_URI'] == $menu) {
        return true;
    } else {
        return false;
    }
}

function esOpcionMenuActivaEnArray(...$arrayOpciones): bool
{
    if (esOpcionMenuActiva($arrayOpciones[0]) || esOpcionMenuActiva($arrayOpciones[1])) {
        return true;
    } else {
        return false;
    }
}