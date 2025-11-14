<?php
include 'conexion.php';

$id = $_GET['id'] ?? 0;

if (!$id || !is_numeric($id)) {
    die("ID inválido");
}

$query = "DELETE FROM pacientes WHERE id = $id";

if (mysqli_query($enlace, $query)) {
    header("Location: /MVC/administradorPsicologo");
    exit();
} else {
    echo "Error al eliminar: " . mysqli_error($enlace);
}
