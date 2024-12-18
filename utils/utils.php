<?php

namespace proyecto\utils;

class Utils
{


    /**
     * Compruebo si el URI de la pagina web coincide con el String pasado por paramentro
     *
     * @param [String] $menu
     * @return boolean
     */
    public static function esOpcionMenuActiva($menu): bool
    {
        if ($_SERVER['REQUEST_URI'] == $menu) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Mediante un array compruebo si el URI coincide con los valores del array utilizando la función esOpcionMenuActiva
     *
     * @param [array] ...$arrayOpciones
     * @return boolean
     */
    public static function esOpcionMenuActivaEnArray(...$arrayOpciones): bool
    {
        if (Utils::esOpcionMenuActiva($arrayOpciones[0]) || Utils::esOpcionMenuActiva($arrayOpciones[1])) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Mediante un shufle ordeno aleatoriamente el array paso por parametro y devulve un array con las 3 primeros objetos del array mediante array_slice
     *
     * @param [array] $arrayAsociados
     * @return void
     */
    public static function extraerTresAsociados($arrayAsociados)
    {
        shuffle($arrayAsociados);

        return array_slice($arrayAsociados, 0, 3);
    }
}
