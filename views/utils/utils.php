<?php
    function menuActivo($menu){
        $bool = str_contains($_SERVER['REQUEST_URI'],$menu);
    }
?>