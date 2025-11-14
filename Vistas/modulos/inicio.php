  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios Psicológicos</title>

    <!-- AdminLTE & Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <style>
      .timeline-container {
        position: relative;
        padding: 20px 0;
        overflow-x: hidden;
      }

      .timeline {
        position: relative;
        max-width: 100%;
        margin: 0 auto;
      }

      .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background-color: #dee2e6;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
      }

      .timeline-item {
        padding: 20px;
        position: relative;
        width: 50%;
      }

      .timeline-item::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: #fff;
        border: 4px solid #007bff;
        top: 20px;
        border-radius: 50%;
        z-index: 1;
      }

      .timeline-item.left {
        left: 0;
        text-align: right;
      }

      .timeline-item.right {
        left: 50%;
        text-align: left;
      }

      .timeline-item.left::after {
        right: -10px;
      }

      .timeline-item.right::after {
        left: -10px;
      }

      .timeline-item .content {
        background: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }

      .timeline-item .icon {
        margin-bottom: 10px;
      }

      @media screen and (max-width: 768px) {
        .timeline::after {
          left: 20px;
        }

        .timeline-item {
          width: 100%;
          padding-left: 50px;
          padding-right: 25px;
          text-align: left;
        }

        .timeline-item.right,
        .timeline-item.left {
          left: 0;
        }

        .timeline-item::after {
          left: 15px;
        }
      }
    </style>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Contenido -->
      <div class="content-wrapper">
        <section class="content-header text-center">
          <div class="container-fluid">
            <h1 class="mb-2"><strong>Tu Salud Mental, Nuestra Prioridad Desde el Primer Paso</strong></h1>
            <p class="lead text-muted">
              Acompañamos tu bienestar emocional con profesionalismo, empatía y evidencia científica.
            </p>
          </div>
        </section>

        <section class="content">
  <div class="container-fluid">
    <div class="timeline-container">
      <div class="timeline">

        <!-- Evaluaciones Psicológicas -->
        <div class="timeline-item left">
          <div class="content">
            <div class="icon">
              <i class="fas fa-clipboard-list fa-2x text-info"></i>
            </div>
            <h4>Evaluaciones Psicométricas</h4>
            <p>Aplicación de pruebas validadas para diagnóstico emocional, intelectual y de personalidad.</p>
          </div>
        </div>

        <!-- Talleres Vivenciales -->
        <div class="timeline-item right">
          <div class="content">
            <div class="icon">
              <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
            </div>
            <h4>Talleres y Dinámicas Grupales</h4>
            <p>Sesiones participativas sobre autoestima, manejo del estrés y habilidades sociales.</p>
          </div>
        </div>

        <!-- Psicoterapia Individual -->
        <div class="timeline-item left">
          <div class="content">
            <div class="icon">
              <i class="fas fa-user-md fa-2x text-success"></i>
            </div>
            <h4>Psicoterapia Individual</h4>
            <p>Intervención personalizada para tratar ansiedad, depresión, conflictos personales y más.</p>
          </div>
        </div>

        <!-- Charlas Educativas -->
        <div class="timeline-item right">
          <div class="content">
            <div class="icon">
              <i class="fas fa-microphone-alt fa-2x text-warning"></i>
            </div>
            <h4>Charlas Psicoeducativas</h4>
            <p>Espacios informativos sobre salud mental en escuelas, empresas y comunidades.</p>
          </div>
        </div>

        <!-- Acompañamiento Escolar -->
        <div class="timeline-item left">
          <div class="content">
            <div class="icon">
              <i class="fas fa-school fa-2x text-teal"></i>
            </div>
            <h4>Acompañamiento Escolar</h4>
            <p>Intervención y seguimiento psicológico a estudiantes, docentes y familias.</p>
          </div>
        </div>

        <!-- Investigación -->
        <div class="timeline-item right">
          <div class="content">
            <div class="icon">
              <i class="fas fa-flask fa-2x text-purple"></i>
            </div>
            <h4>Investigación Psicológica</h4>
            <p>Desarrollo de proyectos científicos sobre conducta, emociones y procesos cognitivos.</p>
          </div>
        </div>

        <!-- Pruebas para Orientación -->
        <div class="timeline-item left">
          <div class="content">
            <div class="icon">
              <i class="fas fa-compass fa-2x text-info"></i>
            </div>
            <h4>Orientación Vocacional</h4>
            <p>Exploración de intereses y aptitudes mediante pruebas y entrevistas para decidir tu futuro profesional.</p>
          </div>
        </div>

        <!-- Actividades Preventivas -->
        <div class="timeline-item right">
          <div class="content">
            <div class="icon">
              <i class="fas fa-shield-alt fa-2x text-danger"></i>
            </div>
            <h4>Prevención en Salud Mental</h4>
            <p>Programas para detectar y atender factores de riesgo antes de que se conviertan en un problema mayor.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

      </div>

    
      <footer class="main-footer text-center">
  <strong>&copy; <?php echo date("Y"); ?>Psicología</strong> | Todos los derechos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <b>Versión</b> 1.0
  </div>
</footer>
  </body>
  </html>
