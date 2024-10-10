<?php
function menuActivo($menu): bool
{
    if ($_SERVER['REQUEST_URI'] == $menu) {
        return true;
    } else {
        return false;
    }
}
