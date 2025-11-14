<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contáctanos</title>

  <!-- AdminLTE, Bootstrap y FontAwesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <style>
    body {
      background-color: #f4f6f9;
    }

    .contact-header {
      background-color: #ffffff;
      padding: 40px 20px;
      border-bottom: 3px solid #007bff;
      text-align: center;
    }

    .contact-header h1 {
      font-size: 2.5rem;
      color: #007bff;
      font-weight: bold;
    }

    .contact-header p {
      font-size: 1.2rem;
      color: #555;
    }

    .contact-section {
      padding: 60px 15px;
    }

    .info-block {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      padding: 20px;
      background: linear-gradient(120deg, #ffffff, #f9f9f9);
      border-left: 5px solid #007bff;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .info-block:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transform: translateY(-4px);
    }

    .info-icon {
      font-size: 2.8rem;
      color: #007bff;
      margin-right: 20px;
      flex-shrink: 0;
    }

    .info-text h4 {
      margin: 0;
      font-size: 1.3rem;
      color: #343a40;
      font-weight: 600;
    }

    .info-text p {
      margin: 5px 0 0;
      color: #555;
    }

    .social-links {
      display: flex;
      gap: 20px;
      margin-top: 15px;
    }

    .social-links a {
      font-size: 2rem;
      color: #555;
      transition: 0.3s;
    }

    .social-links a:hover {
      color: #007bff;
    }

    .map-container {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      margin-top: 30px;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: none;
    }

    .btn-whatsapp {
      background-color: #25D366;
      color: white;
      font-size: 1.1rem;
    }

    .btn-whatsapp:hover {
      background-color: #1ebe5d;
    }

    @media (max-width: 768px) {
      .info-block {
        flex-direction: column;
        text-align: center;
      }

      .info-icon {
        margin-bottom: 15px;
      }
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <div class="content-wrapper">

      <!-- Encabezado -->
      <section class="contact-header">
        <div class="container">
          <h1>Contáctanos</h1>
          <p>Conecta con nosotros para atención psicológica personalizada y cercana.</p>
        </div>
      </section>

      <!-- Contenido -->
      <section class="contact-section">
        <div class="container">
          <div class="row">

            <!-- Columna izquierda -->
            <div class="col-md-6">

              <div class="info-block">
                <i class="fas fa-comment-dots info-icon"></i>
                <div class="info-text">
                  <h4>WhatsApp</h4>
                  <p>
                    <a href="https://wa.me/6731160455" target="_blank" class="btn btn-whatsapp mt-2">
                      <i class="fab fa-whatsapp"></i> Escríbenos
                    </a>
                  </p>
                </div>
              </div>

              <div class="info-block">
                <i class="fas fa-hashtag info-icon"></i>
                <div class="info-text">
                  <h4>Redes Sociales</h4>
                  <div class="social-links mt-2">
                    <a href="https://www.instagram.com/gustavoalv._?igsh=NzV2dG96ZXRhMGZp" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/gustavo.valenzuela.562114" target="_blank"><i class="fab fa-facebook"></i></a>
                  </div>
                </div>
              </div>

              <div class="info-block">
                <i class="fas fa-user-md info-icon"></i>
                <div class="info-text">
                  <h4>Sobre Nosotros</h4>
                  <p>Especialistas en <strong>psicología</strong>, estamos comprometidos con tu bienestar. Agenda fácilmente y comienza tu camino hacia el equilibrio.</p>
                </div>
              </div>

            </div>

            <!-- Columna derecha -->
            <div class="col-md-6">
              <div class="info-block">
                <i class="fas fa-map-marker-alt info-icon text-danger"></i>
                <div class="info-text">
                  <h4>¿Dónde estamos?</h4>
                  <p>Agustina Ramírez 166, Zona Centro, 81400 Guamúchil, Sinaloa</p>
                </div>
              </div>

              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.4640203336547!2d-107.5454529!3d25.4713366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ba28e0aef847b1%3A0x2d26b0c7fca1d7b7!2sAgustina%20Ram%C3%ADrez%20166%2C%20Zona%20Centro%2C%2081400%20Guam%C3%BAchil%2C%20Sin.!5e0!3m2!1ses!2smx!4v1717186580022!5m2!1ses!2smx"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>
  <footer class="main-footer text-center">
  <strong>&copy; <?php echo date("Y"); ?>Psicología</strong> | Todos los derechos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <b>Versión</b> 1.0
  </div>
</footer>
</body>
</html>
