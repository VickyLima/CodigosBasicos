<?php
    require_once "connection.php";

    class Estado {

        public  function  obtener_estados_select () {
            $db = new  connection ();
            $query = " SELECT id, nombre FROM estados ";
            $resultado = $db->query( $query );
            $datos =[];
            if ( $resultado ->num_rows) {
                while ( $fila = $resultado -> fetch_assoc ()) {
                    $datos [] = [
                        'id' => $fila [ 'id' ],
                        'nombre' => $fila [ 'nombre' ],
                    ];
                } //terminar mientras
            } // terminar si
            return  $datos ;
        } //fin de obtener_estados_select

    } //finalizar clase Estado