<?php
include("conexion.php");
header('Content-Type: application/json');

try {
    // Configurar zona horaria
    date_default_timezone_set('America/Mexico_City');
    
    // Validar que se recibió la fecha
    if (!isset($_POST['fecha'])) {
        throw new Exception('No se recibió la fecha');
    }
    
    $fecha = trim($_POST['fecha']);
    if (empty($fecha)) {
        throw new Exception('La fecha está vacía');
    }
        
    // Validar formato de fecha (YYYY-MM-DD)
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        throw new Exception('Formato de fecha inválido');
    }

    // Obtener hora actual y verificar si es hoy
    $horaActual = date('H:i');
    $esHoy = ($fecha == date('Y-m-d'));

    // Consultar horas ocupadas
    $stmt = $enlace->prepare("SELECT Hora FROM cita WHERE Fecha = ?");
    if (!$stmt) {
        throw new Exception('Error al preparar consulta: ' . $enlace->error);
    }
    
    if (!$stmt->bind_param("s", $fecha)) {
        throw new Exception('Error al vincular parámetros: ' . $stmt->error);
    }
    
    if (!$stmt->execute()) {
        throw new Exception('Error al ejecutar consulta: ' . $stmt->error);
    }
    
    $resultado = $stmt->get_result();
    $horasOcupadas = [];
    
    while ($fila = $resultado->fetch_assoc()) {
        $horasOcupadas[] = $fila['Hora'];
    }
    
    // Devolver respuesta
    echo json_encode([
        'success' => true,
        'horasOcupadas' => $horasOcupadas,
        'horaActual' => $horaActual,
        'esHoy' => $esHoy
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>