<?php
include("configuracion.php");

$enlace = mysqli_connect($servidor, $usuario, $clave, $bd);

if (mysqli_connect_errno()) {
    echo "No conectado: ", mysqli_connect_error();
    exit();
} else {
    echo 'Conectado';
}
?>
