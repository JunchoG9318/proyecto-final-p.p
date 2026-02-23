<?php

class Controlador
{
    // Cargar plantilla principal
    public function cargarTemplate()
    {
        $templatePath = __DIR__ . '/../template.php';
        if (file_exists($templatePath)) {
            include $templatePath;
        }
    }

    // Método para gestionar los enlaces
    public function enlacesPaginasControlador()
    {
        // Obtener parámetros
        $enlace = isset($_GET['action']) ? $_GET['action'] : 'inicio';
        $carpeta = isset($_GET['dato']) ? $_GET['dato'] : null;

        // Instanciar modelo
        $modelo = new EnlacesPaginasModelo();

        // Obtener ruta desde el modelo
        $rutaVista = $modelo->enlacesPaginas($enlace, $carpeta);
        

        // // // Convertir a ruta absoluta
        // $rutaCompleta = __DIR__ . '/../../inicio.php' . $rutaVista;

        // // // Verificar existencia
        // if (file_exists($rutaCompleta)) {
        //      include_once $rutaCompleta;
        //  } else {
        //  echo " Error: No existe la vista: " . $rutaCompleta;
        //  }
    }
}
// class EnlacesPaginasModelo
// {
//     public function enlacesPaginas($enlace, $carpeta = null)
//     {
//         // Lógica para determinar la ruta de la vista
//         if ($carpeta) {
//             return "views/modules/$carpeta/$enlace.php";
//         } else {
//             return "views/modules/$enlace.php";
//         }
//     }
// }
// class ControladorFormularios
// {
//     public function registroUsuarioControlador()
//     {
//         if (isset($_POST['nombre']) && isset($_POST['documento'])) {
//             $datos = [
//                 'nombre' => $_POST['nombre'],
//                 'documento' => $_POST['documento']
//             ];

//             $respuesta = ModeloFormularios::registroUsuarioModelo($datos);

//             if ($respuesta == "success") {
//                 echo "Registro exitoso";
//             } else {
//                 echo "Error en el registro";
//             }
//         }
//     }
// }

// class ModeloFormularios
// {
//     public static function registroUsuarioModelo($datos)
//     {
//         // Add your registration logic here
//         // Example: validate and insert data into database
//         return "success";
//     }

//     public static function mdlGuardarFormulario($tabla, $datos)
//     {
//         // Add your save form logic here
//         // Example: validate and insert data into database
//         return "ok";
//     }
// }

// // Controlador para guardar toda la información del formulario//}

// require_once("../models/ModeloFormularios.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $tabla = "perfil";

//     $datos = array(
//         "nombres" => $_POST["nombres"],
//         "apellidos" => $_POST["apellidos"],
//         "tipo_documento" => $_POST["tipo_documento"],
//         "numero_documento" => $_POST["numero_documento"],
//         "fecha_nacimiento" => $_POST["fecha_nacimiento"],
//         "direccion" => $_POST["direccion"],
//         "telefono" => $_POST["telefono"],
//         "correo" => $_POST["correo"],
//         "profesion" => $_POST["profesion"],
//         "tarjeta_profesional" => $_POST["tarjeta_profesional"],
//         "cargo" => $_POST["cargo"],
//         "dependencia" => $_POST["dependencia"],
//         "nombre_instituto" => $_POST["nombre_instituto"],
//         "direccion_instituto" => $_POST["direccion_instituto"]
//     );

//     $respuesta = ModeloFormularios::mdlGuardarFormulario($tabla, $datos);

//     if ($respuesta == "ok") {

//         echo "<script>
//                 alert('Datos guardados correctamente');
//                 window.location = '../views/inicio.php';
//               </script>";

//     } else {

//         echo "Error al guardar datos";
//     }
// }