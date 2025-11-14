<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['paciente_id']) && is_numeric($_POST['paciente_id'])) {
        $paciente_id = intval($_POST['paciente_id']);

        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {
            $archivo = $_FILES['archivo'];
            $nombre_archivo = basename($archivo['name']);
            $tipo_archivo = mime_content_type($archivo['tmp_name']);

            // Validar tipo de archivo (PDF o Word)
            $tipos_permitidos = [
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ];
            if (!in_array($tipo_archivo, $tipos_permitidos)) {
                die('Error: Solo se permiten archivos PDF o Word.');
            }

            // Carpeta destino
            $carpeta_destino = "expedientes_archivos/";
            if (!is_dir($carpeta_destino)) {
                mkdir($carpeta_destino, 0755, true);
            }

            $nuevo_nombre = time() . "_" . $nombre_archivo;
            $ruta_destino = $carpeta_destino . $nuevo_nombre;

            if (move_uploaded_file($archivo['tmp_name'], $ruta_destino)) {
                $stmt = mysqli_prepare($enlace, "INSERT INTO archivos_expediente (paciente_id, nombre_archivo, ruta_archivo, tipo_archivo) VALUES (?, ?, ?, ?)");
                mysqli_stmt_bind_param($stmt, 'isss', $paciente_id, $nombre_archivo, $ruta_destino, $tipo_archivo);
                if (!mysqli_stmt_execute($stmt)) {
                    unlink($ruta_destino); // borrar archivo si no pudo guardarse en BD
                    die("Error al guardar en base de datos: " . mysqli_error($enlace));
                }
            } else {
                die("Error al mover el archivo subido.");
            }
        } else {
            die("No se recibió archivo o hubo un error en la subida.");
        }

        // Redireccionar de vuelta al expediente del paciente
        header("Location: expediente.php?id=$paciente_id");
        exit();
    } else {
        die("ID de paciente inválido.");
    }
} else {
    die("Método no permitido.");
}
