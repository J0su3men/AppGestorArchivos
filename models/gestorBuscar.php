<?php

require_once "backend/models/conexion.php";

class BuscarModels
{

    public function seleccionarBuscarModel($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT id, titulo, introduccion, ruta, contenido FROM $tabla ORDER BY orden ASC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }

}
