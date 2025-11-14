<?php
include("conexion.php");

if (isset($_POST['registrar'])) {
    $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($enlace, $_POST['apellido']);
    $edad = mysqli_real_escape_string($enlace, $_POST['edad']);
    $fecha_nacimiento = mysqli_real_escape_string($enlace, $_POST['fecha_nacimiento']);
    $telefono = mysqli_real_escape_string($enlace, $_POST['telefono']);
    $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
    $escuela = mysqli_real_escape_string($enlace, $_POST['escuela']);
    $nivel = mysqli_real_escape_string($enlace, $_POST['nivel']);
    $motivo = mysqli_real_escape_string($enlace, $_POST['motivo']);

    $sql = "INSERT INTO pacientes (nombre, apellido, edad, fecha_nacimiento, telefono, correo, escuela, nivel_estudios, motivo_consulta)
            VALUES ('$nombre', '$apellido', '$edad', '$fecha_nacimiento', '$telefono', '$correo', '$escuela', '$nivel', '$motivo')";

    if (mysqli_query($enlace, $sql)) {
        echo "<script>
                alert('Ficha registrada correctamente');
                window.location.href='administradorPsicologo';
              </script>";
        exit;
    } else {
        echo "<script>alert('Error al registrar');</script>";
    }
}
?>

<!-- ESTRUCTURA DE ADMINLTE -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1>Registro de Paciente - Ficha Técnica</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary shadow">
        <div class="card-header">
          <h3 class="card-title">Datos del Paciente</h3>
        </div>
        <form method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Apellido:</label>
                <input type="text" name="apellido" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label>Edad:</label>
                <input type="number" name="edad" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label>Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label>Teléfono:</label>
                <input type="tel" name="telefono" class="form-control" pattern="[0-9]{10}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Correo Electrónico (opcional):</label>
                <input type="email" name="correo" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label>Escuela a la que asiste:</label>
                <input type="text" name="escuela" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Nivel de Estudios:</label>
                <select name="nivel" class="form-control" required>
                  <option value="">Selecciona una opción</option>
                  <option>Primaria</option>
                  <option>Secundaria</option>
                  <option>Preparatoria</option>
                  <option>Universidad</option>
                  <option>Otro</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <label>Motivo de la Consulta:</label>
                <textarea name="motivo" class="form-control" rows="3" required></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <a href="administradorPsicologo" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Volver al Panel
            </a>
            <button type="submit" name="registrar" class="btn btn-success">
              <i class="fas fa-save"></i> Registrar Ficha
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

<footer class="main-footer text-center">
  <strong>&copy; <?php echo date("Y"); ?> Psicología</strong> | Todos los derechos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <b>Versión</b> 1.0
  </div>
</footer>
