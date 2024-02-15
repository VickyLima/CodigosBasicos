<?php
    require_once "Estado.php";
    $tabla_estado = new Estado();
    $estados = $tabla_estado->obtener_estados_select();