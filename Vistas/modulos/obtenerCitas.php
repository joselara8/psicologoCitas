<?php
include("conexion.php");
date_default_timezone_set("America/Mexico_City"); // Ajusta a tu zona horaria

if (isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];

    $horas_disponibles = ["09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00"];
    $horas_ocupadas = [];

    // Ver citas ya tomadas
    $stmt = $enlace->prepare("SELECT Hora FROM cita WHERE Fecha = ?");
    $stmt->bind_param("s", $fecha);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $horas_ocupadas[] = $row['Hora'];
    }

    // Filtrar horas anteriores si es hoy
    $hora_actual = date("H:i");
    $es_hoy = ($fecha == date("Y-m-d"));
    $horas_filtradas = [];

    foreach ($horas_disponibles as $hora) {
        if (!in_array($hora, $horas_ocupadas)) {
            if ($es_hoy && $hora <= $hora_actual) {
                continue; // No mostrar horas pasadas
            }
            $horas_filtradas[] = $hora;
        }
    }

    if (count($horas_filtradas) > 0) {
        foreach ($horas_filtradas as $hora) {
            echo "<option value='$hora'>$hora</option>";
        }
    } else {
        echo "<option value=''>No hay horas disponibles</option>";
    }
}
?>
