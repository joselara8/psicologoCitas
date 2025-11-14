<?php
include 'conexion.php';

$id = $_GET['id'] ?? 0;

if (!$id || !is_numeric($id)) {
    die("ID inválido");
}

$query = "SELECT * FROM pacientes WHERE id = $id";
$res = mysqli_query($enlace, $query);
$paciente = mysqli_fetch_assoc($res);

if (!$paciente) {
    die("Paciente no encontrado");
}

$mensaje = "";
if (isset($_POST['guardar'])) {

    $nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($enlace, $_POST['apellido']);
    $edad = mysqli_real_escape_string($enlace, $_POST['edad']);
    $fecha_nacimiento = mysqli_real_escape_string($enlace, $_POST['fecha_nacimiento']);
    $telefono = mysqli_real_escape_string($enlace, $_POST['telefono']);
    $correo = mysqli_real_escape_string($enlace, $_POST['correo']);
    $escuela = mysqli_real_escape_string($enlace, $_POST['escuela']);
    $nivel_estudios = mysqli_real_escape_string($enlace, $_POST['nivel_estudios']);
    $motivo = mysqli_real_escape_string($enlace, $_POST['motivo_consulta']);

    $update = "UPDATE pacientes SET
                nombre='$nombre',
                apellido='$apellido',
                edad='$edad',
                fecha_nacimiento='$fecha_nacimiento',
                telefono='$telefono',
                correo='$correo',
                escuela='$escuela',
                nivel_estudios='$nivel_estudios',
                motivo_consulta='$motivo'
              WHERE id=$id";

    if (mysqli_query($enlace, $update)) {
        header("Location: /MVC/administradorPsicologo");
        exit();
    } else {
        $mensaje = "❌ Error al guardar: " . mysqli_error($enlace);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Editar Paciente</title>

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <style>
      .card-header {
          background: linear-gradient(90deg, #007bff, #00a3ff);
          color: white;
      }
      .btn-primary i, .btn-danger i, .btn-warning i, .btn-secondary i {
          margin-right: 4px;
      }
  </style>
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">
  <div class="content-wrapper p-4">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="m-0"><i class="fas fa-edit"></i> Editar Paciente</h2>
        <a href="administradorPsicologo.php" class="btn btn-secondary">
          <i class="fas fa-arrow-left"></i> Regresar
        </a>
      </div>

      <?php if ($mensaje): ?>
        <div class="alert alert-danger text-center"><?= $mensaje ?></div>
      <?php endif; ?>

      <div class="row">

        <!-- FORMULARIO PRINCIPAL -->
        <div class="col-md-8">
          <div class="card shadow">
            <div class="card-header">
              <h3 class="card-title">Formulario de edición</h3>
            </div>

            <form method="POST" class="p-3">

              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control"
                       value="<?= htmlspecialchars($paciente['nombre']) ?>" required>
              </div>

              <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control"
                       value="<?= htmlspecialchars($paciente['apellido']) ?>" required>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Edad</label>
                  <input type="number" name="edad" class="form-control"
                         value="<?= $paciente['edad'] ?>" required>
                </div>

                <div class="form-group col-md-8">
                  <label>Fecha de nacimiento</label>
                  <input type="date" name="fecha_nacimiento" class="form-control"
                         value="<?= $paciente['fecha_nacimiento'] ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label>Teléfono</label>
                <input type="text" name="telefono" class="form-control"
                       value="<?= $paciente['telefono'] ?>" required>
              </div>

              <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control"
                       value="<?= $paciente['correo'] ?>" required>
              </div>

              <div class="form-group">
                <label>Escuela</label>
                <input type="text" name="escuela" class="form-control"
                       value="<?= $paciente['escuela'] ?>">
              </div>

              <div class="form-group">
                <label>Nivel de estudios</label>
                <input type="text" name="nivel_estudios" class="form-control"
                       value="<?= $paciente['nivel_estudios'] ?>">
              </div>

              <div class="form-group">
                <label>Motivo de consulta</label>
                <textarea name="motivo_consulta" class="form-control" rows="4" required><?= htmlspecialchars($paciente['motivo_consulta']) ?></textarea>
              </div>

              <button type="submit" name="guardar" class="btn btn-primary">
    <i class="fas fa-save"></i> Guardar cambios
</button>


              <a href="/MVC/administradorPsicologo" class="btn btn-danger ml-2">
                <i class="fas fa-times"></i> Cancelar
              </a>

            </form>
          </div>
        </div>

        <!-- PANEL RESUMEN NUEVO ARCHIVO -->
        <div class="col-md-4">
          <div class="card shadow">
            <div class="card-body">
              <h5><i class="fas fa-id-card"></i> Resumen</h5>

              <p><strong>Nombre:</strong> <?= $paciente['nombre'] . " " . $paciente['apellido'] ?></p>
              <p><strong>Edad:</strong> <?= $paciente['edad'] ?></p>
              <p><strong>Teléfono:</strong> <?= $paciente['telefono'] ?></p>
              <p><strong>Correo:</strong> <?= $paciente['correo'] ?></p>

              <hr>

              <a href="expediente.php?id=<?= $paciente['id'] ?>" class="btn btn-info btn-block">
                <i class="fas fa-folder-open"></i> Ver expediente
              </a>

              <a href="/MVC/administradorPsicologo" class="btn btn-outline-secondary btn-block mt-2">
    <i class="fas fa-arrow-left"></i> Volver al panel
</a>


            </div>
          </div>
        </div>

      </div><!-- row -->
    </div>
  </div>
</div>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
