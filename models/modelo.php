<?php

class EnlacesPaginasModelo
{

    // Método para gestionar los enlaces
    public function enlacesPaginas($enlace, $carpeta = null)
    {

        // Rutas permitidas
        $paginasPermitidas = [
            'inicio',
            'RegistrarUsuario',
            //fundaciones
            'registro_fundacion',
            'fundaciones',
            'formulario_fundacion',
            //ICBF
            'formulario_icbf',
            'registro_icbf',
            'ERF',
            //Familias
            'detalles_ingre_fami',
            'documenta_famil',
            'informacion_interna_fami',
            'informacion_labor_fami',
            'registro_familiar',
            //Login
            'login',
            'dashboard',
            'NuevoUsuario',
            //Consulta
            'resultados',
            //Otros
            'redes_de_apoyo',
            'header',
            'footer'
        ];

        // Validar si existe en el arreglo
        if (in_array($enlace, $paginasPermitidas)) {

            $ruta = "views/modules/" . $enlace . ".php";

        } else {

            $ruta = "views/modules/errorPagina.php";

        }

        return $ruta;
    }

}