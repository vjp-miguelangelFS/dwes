<?php

namespace proyecto\repository;

use proyecto\entities\Categoria;
use proyecto\entities\QuerryBuilder;

// Clase CategoriaRepository con un extends a QuerryBuilder
class CategoriaRepository extends QuerryBuilder
{
    // Constructor que contiene la variabole $table con el nombre de la tabla que contiene las categorias de la base de datos,
    // y la variable $classEntity con el nombre de la clase Categoria
    public function __construct(string $table = 'categorias', string $classEntity = Categoria::class)
    {
        // Llama al constructor de la clase padre QuerryBuilder
        parent::__construct($table, $classEntity);
    }
}
