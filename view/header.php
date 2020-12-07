<!DOCTYPE html>
<html lang="en">


<!-- widget-chart.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ESTANISLAO ZULETA I.E.D</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="view/dashboard/assets/css/app.min.css">
  <link rel="stylesheet" href="view/dashboard/assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="view/dashboard/assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="view/dashboard/assets/css/style.css">
  <link rel="stylesheet" href="view/dashboard/assets/css/components.css">
  <link rel="stylesheet" href="css/fullcalendar.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="view/dashboard/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='view/dashboard/assets/img/1-Escudo.png' />
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="view/dashboard/assets/js/app.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>
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
                  collapse-btn"><i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
            </li>
          </ul>
        </div>
            <i class="menu-header font-15" style="color:black;"><?php echo "{$sesion->Tipo_rol} {$sesion->Nombres}";?></i>   
        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span><i data-feather="user-check"  width="40" height="40"></i></span></a>
          </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h1 class="dropdown-header ms-inline m-0"><span class="text-disabled"> <?php echo "Hola, {$sesion->Nombres}";?> </span></h1>
            </li>
          <li class="dropdown-divider"></li>
            <i class="ms-dropdown-list">
            <a href="?controlador=Perfil" style="text-decoration: none; font-size: 15px; text-align: center;"><span><i data-feather="user"width="30" height="30" ></i> Perfil</span></a>
          </i>
          
          <li class="dropdown-divider"></li>
            <i class="dropdown-menu-footer">
              <a href="?controlador=Login" style="text-decoration: none; font-size: 15px; text-align: center;"><span><i data-feather="power" data-placement="bottom" width="30" height="30" title="Salir del sistema"></i> Cerrar Sesion</span></a>
          </i>
          </ul>
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
            <li class="dropdown">
              <a class="nav-link"  href="?controlador=vista"><i data-feather="airplay"></i><span>Inicio</span></a>
            </li>
            <?php if ($sesion->Id_rol == 1) { ?>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown "><i data-feather="users"></i><span>Usuarios</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=usuario">Lista de Usuarios</a></li>
                <li><a class="nav-link" href="?controlador=usuario&method=nuevo">Agregar Usuario</a></li>
              </ul>
            </li>
  
              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Roles</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=rol">Lista de Roles</a></li>
                  <li><a class="nav-link" href="?controlador=rol&method=nuevo">Agregar Roles</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="calendar"></i><span>Reservas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=reserva">Lista de Reservas</a></li>
                  <li><a class="nav-link" href="?controlador=reserva&method=nuevo">Agregar Reservas</a></li>
                </ul>
              </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Novedades</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=Novedad">Lista de Novedades</a></li>
                <li><a class="nav-link" href="?controlador=Novedad&method=nuevo">Agregar Novedades</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="toggle-right"></i><span>Estados</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=estado">Lista de Estados</a></li>
                <li><a class="nav-link" href="?controlador=estado&method=nuevo">Agregar Estados</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=elemento">Lista de Elementos</a></li>
                <li><a class="nav-link" href="?controlador=elemento&method=nuevo">Agregar Elementos</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map-pin"></i><span>Sedes</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=sede">Lista de Sedes</a></li>
                <li><a class="nav-link" href="?controlador=sede&method=nuevo">Agregar sedes</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="moon"></i><span>Jornadas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=jornada">Lista de Jornadas</a></li>
                <li><a class="nav-link" href="?controlador=jornada&method=nuevo">Agregar jornada</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Aulas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=aula">Lista de Aulas</a></li>
                <li><a class="nav-link" href="?controlador=aula&method=nuevo">Agregar Aulas</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="monitor"></i><span>Programas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=programa">Lista de Programas</a></li>
                <li><a class="nav-link" href="?controlador=programa&method=nuevo">Agregar Programas</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Detalle Novedad</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=detallenovedad">Lista de Detalle Novedad</a></li>
                <li><a class="nav-link" href="?controlador=detallenovedad&method=nuevo">Agregar Detalle Novedad</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="toggle-left"></i><span>Tipos de Estados</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=tipoestado">Lista Tipos de Estados</a></li>
                <li><a class="nav-link" href="?controlador=tipoestado&method=nuevo">Agregar Tipos de Estados</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sliders"></i><span>Tipos de elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=tipoelemento">Lista de Tipos elementos</a></li>
                <li><a class="nav-link" href="?controlador=tipoelemento&method=nuevo">Agregar Tipos elementos</a></li>
              </ul>
            </li>

              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-plus"></i><span>Tipos de novedades</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=tiponovedad">Lista de Tipos novedades</a></li>
                  <li><a class="nav-link" href="?controlador=TipoNovedad&method=nuevo">Agregar Tipos novedades</a></li>
                </ul>
              </li>
              <?php } ?>

              <?php if ($sesion->Id_rol == 2) { ?>
                <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="calendar"></i><span>Reservas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=reserva">Lista de Reservas</a></li>
                  <li><a class="nav-link" href="?controlador=reserva&method=nuevo">Agregar Reservas</a></li>
                </ul>
              </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Novedades</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=Novedad">Lista de Novedades</a></li>
                <li><a class="nav-link" href="?controlador=Novedad&method=nuevo">Agregar Novedades</a></li>
              </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-plus"></i><span>Tipos de novedades</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=tiponovedad">Lista de Tipos novedades</a></li>
                  <li><a class="nav-link" href="?controlador=TipoNovedad&method=nuevo">Agregar Tipos novedades</a></li>
                </ul>
              </li>

              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Detalle Novedad</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=detallenovedad">Lista de Detalle Novedad</a></li>
                <li><a class="nav-link" href="?controlador=detallenovedad&method=nuevo">Agregar Detalle Novedad</a></li>
              </ul>
            </li>

            <?php } ?>

            <?php if ($sesion->Id_rol == 3) { ?>
              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="calendar"></i><span>Reservas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=reserva">Lista de Reservas</a></li>
                </ul>
              </li>
            <?php } ?>

             <?php if ($sesion->Id_rol == 4) { ?>
              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Novedades</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=Novedad">Lista de Novedades</a></li>
                <li><a class="nav-link" href="?controlador=Novedad&method=nuevo">Agregar Novedades</a></li>
              </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-plus"></i><span>Tipos de novedades</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?controlador=tiponovedad">Lista de Tipos novedades</a></li>
                  <li><a class="nav-link" href="?controlador=TipoNovedad&method=nuevo">Agregar Tipos novedades</a></li>
                </ul>
              </li>

              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Detalle Novedad</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=detallenovedad">Lista de Detalle Novedad</a></li>
                <li><a class="nav-link" href="?controlador=detallenovedad&method=nuevo">Agregar Detalle Novedad</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=elemento">Lista de Elementos</a></li>
                <li><a class="nav-link" href="?controlador=elemento&method=nuevo">Agregar Elementos</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sliders"></i><span>Tipos de elementos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="?controlador=tipoelemento">Lista de Tipos elementos</a></li>
                <li><a class="nav-link" href="?controlador=tipoelemento&method=nuevo">Agregar Tipos elementos</a></li>
              </ul>
            </li>
            <?php } ?>
            
          </ul>
        </aside>
      </div>
      <div class="main-content" style="min-height: 500px;">