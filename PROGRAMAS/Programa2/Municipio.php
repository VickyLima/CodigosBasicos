<?php
    require_once "connection.php";

    class Municipio {

        public  function  obtener_municipios_select($id_estado) {
            $db = new  connection();
            $query = "SELECT id, nombre FROM municipios WHERE estado_id=$id_estado";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows) {
                while ($row = $resultado->fetch_assoc ()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                    ];
                } //terminar mientras
            } // terminar si
            return  $datos;
        } //fin de obtener_municipios_select

    } //terminar clase Municipio