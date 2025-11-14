<?php
include 'conexion.php';
/* NUEVO ARCHIVO */
$id = $_GET['id'] ?? 0;
$paciente_id = $_GET['paciente_id'] ?? 0;

$res = mysqli_query($enlace, "SELECT * FROM archivos_expediente WHERE id = $id");
$archivo = mysqli_fetch_assoc($res);

if ($archivo) {
    if (file_exists($archivo['ruta_archivo'])) {
        unlink($archivo['ruta_archivo']);
    }
    mysqli_query($enlace, "DELETE FROM archivos_expediente WHERE id = $id");
}

header("Location: expediente.php?id=$paciente_id");
exit();
?>
