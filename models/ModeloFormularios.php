<?php

require_once("models/conexion.php");

class ModeloFormularios {

    static public function mdlGuardarFormulario($tabla, $datos) {

        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $stmt = $conn->prepare("INSERT INTO $tabla (
            nombres, apellidos, tipo_documento, numero_documento,
            fecha_nacimiento, direccion, telefono, correo,
            profesion, tarjeta_profesional,
            cargo, dependencia,
            nombre_instituto, direccion_instituto
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bindParam(1, $datos["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos["apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(3, $datos["tipo_documento"], PDO::PARAM_STR);
        $stmt->bindParam(4, $datos["numero_documento"], PDO::PARAM_STR);
        $stmt->bindParam(5, $datos["fecha_nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(6, $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(7, $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(8, $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(9, $datos["profesion"], PDO::PARAM_STR);
        $stmt->bindParam(10, $datos["tarjeta_profesional"], PDO::PARAM_STR);
        $stmt->bindParam(11, $datos["cargo"], PDO::PARAM_STR);
        $stmt->bindParam(12, $datos["dependencia"], PDO::PARAM_STR);
        $stmt->bindParam(13, $datos["nombre_instituto"], PDO::PARAM_STR);
        $stmt->bindParam(14, $datos["direccion_instituto"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $conn->close();
    }
}