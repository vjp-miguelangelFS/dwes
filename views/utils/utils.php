<?php
function menuActivo($menu): bool
{
    return str_contains($_SERVER['REQUEST_URI'], $menu);
}
