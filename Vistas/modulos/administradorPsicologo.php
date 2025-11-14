<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador Psicólogo</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper p-4">
    <div class="container">

      <h1 class="mb-4">Panel del Psicólogo</h1>

      <a href="expedientes" class="btn btn-primary mb-3">
        <i class="fas fa-user-plus"></i> Registrar Paciente
      </a>

      <div class="card">
        <div class="card-header bg-info text-white">
          <h3 class="card-title">Pacientes Registrados</h3>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="text-center">
              <tr>
                <th>Nombre completo</th>
                <th>Edad</th>
                <th>Fecha nacimiento</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Escuela</th>
                <th>Nivel estudios</th>
                <th>Motivo consulta</th>
                <th>Fecha registro</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $query = "SELECT * FROM pacientes ORDER BY fecha_registro DESC";
              $resultado = mysqli_query($enlace, $query);

              while ($p = mysqli_fetch_assoc($resultado)) {

                  $id = $p['id'];
                  $nombre = htmlspecialchars($p['nombre'] . " " . $p['apellido']);
                  $edad = htmlspecialchars($p['edad']);
                  $nacimiento = htmlspecialchars($p['fecha_nacimiento']);
                  $telefono = htmlspecialchars($p['telefono']);
                  $correo = htmlspecialchars($p['correo']);
                  $escuela = htmlspecialchars($p['escuela']);
                  $nivel = htmlspecialchars($p['nivel_estudios']);
                  $motivo = htmlspecialchars(substr($p['motivo_consulta'], 0, 40)) . "...";
                  $fecha_registro = htmlspecialchars($p['fecha_registro']);

                  echo "
                    <tr>
                      <td>$nombre</td>
                      <td>$edad</td>
                      <td>$nacimiento</td>
                      <td>$telefono</td>
                      <td>$correo</td>
                      <td>$escuela</td>
                      <td>$nivel</td>
                      <td>$motivo</td>
                      <td>$fecha_registro</td>

                      <td class='text-center'>
                        <a href='Vistas/modulos/expediente.php?id=$id' class='btn btn-info btn-sm mb-1'>
                          <i class='fas fa-folder-open'></i>
                        </a>

                        <a href='Vistas/modulos/editarPaciente.php?id=$id' 
   class='btn btn-warning btn-sm mb-1'>
    <i class='fas fa-edit'></i>
</a>


                        <button onclick=\"eliminarPaciente($id)\" class='btn btn-danger btn-sm mb-1'>
                          <i class='fas fa-trash'></i>
                        </button>
                      </td>
                    </tr>
                  ";
              }
              ?>  
            </tbody>

          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="Vistas/plugins/jquery/jquery.min.js"></script>
<script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Vistas/dist/js/adminlte.min.js"></script>

<!-- SweetAlert2 función eliminar -->
<script>
function eliminarPaciente(id) {
  Swal.fire({
    title: "¿Seguro que deseas eliminar este paciente?",
    text: "Esta acción no se puede deshacer",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Sí, eliminar",
    cancelButtonText: "Cancelar"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "/MVC/Vistas/modulos/eliminarPaciente.php?id=" + id;

    }
  });
}
</script>

</body>
</html>
