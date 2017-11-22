<?php

class Buscar
{

    public function seleccionarBuscarController()
    {

        if (isset($_POST["search"])) {
            $datosController = array("busqueda" => $_POST["usuarioIngreso"]);

            $respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
        }

    }

}
