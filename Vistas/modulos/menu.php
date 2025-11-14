<?php
ob_start(); 
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link d-flex align-items-center px-3" style="height: 56px;">
      <img src="VISTAS/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 35px; height: 35px;">
      <span class="brand-text font-weight-light ml-2">CreeSer</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <img src="VISTAS/dist/img/ta.jpeg" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
        </div>
        <div class="info ml-2">
          <a href="contact" class="d-block text-white font-weight-bold">Gustavo Lara</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="inicio" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p><strong>Inicio</strong></p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Servicios" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p><strong>Servicios</strong></p>
            </a>
          </li>

          <li class="nav-item">
            <a href="contact" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p><strong>Contacto</strong></p>
            </a>
          </li>

          <li class="nav-item">
            <a href="loginClientes" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p><strong>Inicio de sesión</strong></p>
            </a>
          </li>
          
        </ul>
      </nav>
    </div>
  </aside>

 

<!-- Agrega Font Awesome CDN para íconos -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

<style>
  .main-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background-color: #343a40;
    overflow-y: auto;
    z-index: 1050;
  }

  .sidebar-toggle {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background-color: #007bff;
    color: white;
    padding: 10px 14px;
    border-radius: 5px;
    cursor: default; /* cambia el cursor para indicar que no hace nada */
    z-index: 1100;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease;
  }
  .sidebar-toggle:hover {
    background-color: #007bff; /* sin cambio para que no confunda */
  }

  /* Menu links */
  .nav-sidebar .nav-link {
    color: #c2c7d0;
    font-weight: 500;
    display: flex;
    align-items: center;
    padding: 12px 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .nav-sidebar .nav-link .nav-icon {
    font-size: 18px;
    margin-right: 12px;
    transition: color 0.3s ease;
  }

  .nav-sidebar .nav-link:hover,
  .nav-sidebar .nav-link.active {
    background-color: #495057;
    color: #ffffff;
  }

  .nav-sidebar .nav-link:hover .nav-icon,
  .nav-sidebar .nav-link.active .nav-icon {
    color: #00d1b2;
  }

  /* Marca */
  .brand-link {
    background-color: #23272b;
    border-bottom: 1px solid #3e444a;
  }

  .brand-text {
    color: #adb5bd;
    font-size: 1.2rem;
  }

  /* User panel */
  .user-panel .image img {
    border-radius: 50%;
  }
  .user-panel .info a {
    color: #dee2e6;
    font-size: 1rem;
  }
  .user-panel .info a:hover {
    color: #00d1b2;
  }
</style>
