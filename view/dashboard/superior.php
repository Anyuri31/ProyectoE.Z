<!DOCTYPE html>
<html lang="en">


<!-- vista.php  26 ago 2020 11:36a.m-->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Plantilla de panel del administrador</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="view/dashboard
  /assets/css/app.min.css">
  <link rel="stylesheet" href="view/dashboard
  /assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="view/dashboard
  /assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="view/dashboard
  /assets/css/style.css">
  <link rel="stylesheet" href="view/dashboard
  /assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="view/dashboard
  /assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='view/dashboard
  /assets/img/1-Escudo.png' />
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
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="view/dashboard
              /assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hola Brayan Jimenez</div>
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