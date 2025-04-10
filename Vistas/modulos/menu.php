<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 collapsed">
    <!-- Brand Logo -->
    <a href="VISTAS/index3.html" class="brand-link">
      <img src="VISTAS/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PsicoTerapia</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="VISTAS/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">22040774</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="inicio" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p><strong>Inicio</strong></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Servicios" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p><strong>Servicios</strong></p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="contact" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p><strong>Contacto</strong></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="loginClientes" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p><strong>Login</strong></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reservacion" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p><strong>Reservacion</strong></p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.main-sidebar');
      sidebar.classList.toggle('collapsed');
    }

    document.addEventListener('click', function(event) {
      const sidebar = document.querySelector('.main-sidebar');
      const toggleButton = document.querySelector('.sidebar-toggle');
      
      if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
        sidebar.classList.add('collapsed');
      }
    });
  </script>

  <style>
    .main-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      overflow-y: auto;
      transition: transform 0.3s ease;
    }
    .main-sidebar.collapsed {
      transform: translateX(-100%);
    }
    .sidebar-toggle {
      position: fixed;
      top: 10px;
      left: 10px;
      background-color: #007bff;
      color: white;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      z-index: 1000;
    }
  </style>
