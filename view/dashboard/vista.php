<!DOCTYPE html>
<html lang="en">


<!-- vista.php  26 ago 2020 11:36a.m-->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plantilla de panel del administrador</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="view/dashboard/assets/css/app.min.css">
  <link rel="stylesheet" href="view/dashboard/assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="view/dashboard/assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="view/dashboard/assets/css/style.css">
  <link rel="stylesheet" href="view/dashboard/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="view/dashboard/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='view/dashboard/assets/img/1-Escudo.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="view/dashboard/assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><?php echo SESSION['usuario']?></div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Perfil
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Ocupaciones
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Configuraciones
              </a>
              <div class="dropdown-divider"></div>
              <a href="?controlador=Login" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="view/dashboard/assets/img/1-Escudo.png" class="header-logo" /> <span
                class="logo-name">E.Z</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">PRINCIPAL</li>
            <li class="dropdown">
              <a href="../principal.html" class="nav-link"><i data-feather="home"></i><span>Inicio</span></a>
            </li>
            <li class="dropdown active">
              <a href="#" class="menu-toggle nav-link has-dropdown "><i data-feather="user"></i><span>Usuarios</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=usuario">Lista de Usuarios</a></li>
                <li><a class="nav-link" href="?controlador=suario&method=nuevo">Agregar Usuario</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Roles</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=rol">Lista de Roles</a></li>
                <li><a class="nav-link" href="?controlador=rol&method=nuevo">Agregar Roles</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>Reservas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=reserva">Lista de Reservas</a></li>
                <li><a class="nav-link" href="?controlador=reserva&method=nuevo">Agregar Reservas</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Novedades</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=Novedad">Lista de Novedades</a></li>
                <li><a class="nav-link" href="?controlador=Novedad&method=nuevo">Agregar Novedades</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=elemento">Lista de Elementos</a></li>
                <li><a class="nav-link" href="?controlador=elemento&method=nuevo">Agregar Elementos</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Sedes</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=sede">Lista de Sedes</a></li>
                <li><a class="nav-link" href="?controlador=sede&method=nuevo">Agregar sedes</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Jornadas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=jornada">Lista de Jornadas</a></li>
                <li><a class="nav-link" href="?controlador=jornada&method=nuevo">Agregar jornada</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Aulas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=aula">Lista de Aulas</a></li>
                <li><a class="nav-link" href="?controlador=aula&method=nuevo">Agregar Aulas</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Detalle Novedad</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=DetalleNovedad">Lista de Detalle Novedad</a></li>
                <li><a class="nav-link" href="?controlador=detallenovedad&method=nuevo">Agregar Detalle Novedad</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Programas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=programa">Lista de Programas</a></li>
                <li><a class="nav-link" href="?controlador=programa&method=nuevo">Agregar Programas</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Tipos de elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=tipoelemento">Lista de Tipos elementos</a></li>
                <li><a class="nav-link" href="?controlador=tipoelemento&method=nuevo">Agregar Tipos elementos</a></li>
              </ul>
            </li>

              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Tipos de novedades</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=tiponovedad">Lista de Tipos novedades</a></li>
                <li><a class="nav-link" href="?controlador=TipoNovedad&method=nuevo">Agregar Tipos novedades</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Panel de configuración
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Seleccionar diseño</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Ligero</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Oscuro</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color de la barra lateral</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini barra lateral</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
  <!-- General JS Scripts -->
  <script src="view/dashboard/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="view/dashboard/assets/bundles/chartjs/chart.min.js"></script>
  <script src="view/dashboard/assets/bundles/jquery.sparkline.min.js"></script>
  <script src="view/dashboard/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="view/dashboard/assets/bundles/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="view/dashboard/assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="view/dashboard/assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
  <!-- Page Specific JS File -->
  <script src="view/dashboard/assets/js/page/widget-chart.js"></script>
  <!-- Template JS File -->
  <script src="view/dashboard/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="view/dashboard/assets/js/custom.js"></script>
</body>

<!-- vista.php  26 ago 2020 11:36a.m-->
</html>