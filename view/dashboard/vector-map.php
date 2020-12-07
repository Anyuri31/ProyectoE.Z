<!DOCTYPE html>
<html lang="en">


<!-- widget-chart.html  21 Nov 2019 03:49:32 GMT -->
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
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                      text-white"> <img alt="image" src="view/dashboard/assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="view/dashboard/assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="view/dashboard/assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="view/dashboard/assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="view/dashboard/assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="view/dashboard/assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
                        fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                        fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
                        fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                        fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="view/dashboard/assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a> <a href="timeline.php" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="view/dashboard/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="view/dashboard/index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown active">
              <a href="#" class="menu-toggle "><i
                  data-feather="briefcase"></i><span>Usuarios</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="view/dashboard/widget-data.php">Lista de usuarios</a></li>
                <li><a class="nav-link" href="view/dashboard/widget-data.php"></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Apps</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="view/dashboard/chat.php">Chat</a></li>
                <li><a class="nav-link" href="view/dashboard/portfolio.php">Portfolio</a></li>
                <li><a class="nav-link" href="view/dashboard/blog.php">Blog</a></li>
                <li><a class="nav-link" href="view/dashboard/calendar.php">Calendar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Email</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="view/dashboard/email-inbox.php">Inbox</a></li>
                <li><a class="nav-link" href="view/dashboard/email-compose.php">Compose</a></li>
                <li><a class="nav-link" href="view/dashboard/email-read.php">read</a></li>
              </ul>
            </li>
            <li class="menu-header">UI Elements</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
                  Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="view/dashboard/alert.php">Alert</a></li>
                <li><a class="nav-link" href="view/dashboard/badge.php">Badge</a></li>
                <li><a class="nav-link" href="view/dashboard/breadcrumb.php">Breadcrumb</a></li>
                <li><a class="nav-link" href="view/dashboard/buttons.php">Buttons</a></li>
                <li><a class="nav-link" href="view/dashboard/collapse.php">Collapse</a></li>
                <li><a class="nav-link" href="view/dashboard/dropdown.php">Dropdown</a></li>
                <li><a class="nav-link" href="view/dashboard/checkbox-and-radio.php">Checkbox &amp; Radios</a></li>
                <li><a class="nav-link" href="view/dashboard/list-group.php">List Group</a></li>
                <li><a class="nav-link" href="view/dashboard/media-object.php">Media Object</a></li>
                <li><a class="nav-link" href="view/dashboard/navbar.php">Navbar</a></li>
                <li><a class="nav-link" href="view/dashboard/pagination.php">Pagination</a></li>
                <li><a class="nav-link" href="view/dashboard/popover.php">Popover</a></li>
                <li><a class="nav-link" href="view/dashboard/progress.php">Progress</a></li>
                <li><a class="nav-link" href="view/dashboard/tooltip.php">Tooltip</a></li>
                <li><a class="nav-link" href="view/dashboard/flags.php">Flag</a></li>
                <li><a class="nav-link" href="view/dashboard/typography.php">Typography</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Advanced</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="view/dashboard/avatar.php">Avatar</a></li>
                <li><a class="nav-link" href="view/dashboard/card.php">Card</a></li>
                <li><a class="nav-link" href="view/dashboard/modal.php">Modal</a></li>
                <li><a class="nav-link" href="view/dashboard/sweet-alert.php">Sweet Alert</a></li>
                <li><a class="nav-link" href="view/dashboard/toastr.php">Toastr</a></li>
                <li><a class="nav-link" href="view/dashboard/empty-state.php">Empty State</a></li>
                <li><a class="nav-link" href="view/dashboard/multiple-upload.php">Multiple Upload</a></li>
                <li><a class="nav-link" href="view/dashboard/pricing.php">Pricing</a></li>
                <li><a class="nav-link" href="view/dashboard/tabs.php">Tab</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="view/dashboard/blank.php"><i data-feather="file"></i><span>Blank Page</span></a></li>
            <li class="menu-header">Otika</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="view/dashboard/basic-form.php">Basic Form</a></li>
                <li><a class="nav-link" href="view/dashboard/forms-advanced-form.php">Advanced Form</a></li>
                <li><a class="nav-link" href="view/dashboard/forms-editor.php">Editor</a></li>
                <li><a class="nav-link" href="view/dashboard/forms-validation.php">Validation</a></li>
                <li><a class="nav-link" href="view/dashboard/form-wizard.php">Form Wizard</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-table.php">Basic Tables</a></li>
                <li><a class="nav-link" href="advance-table.php">Advanced Table</a></li>
                <li><a class="nav-link" href="datatables.php">Datatable</a></li>
                <li><a class="nav-link" href="export-table.php">Export Table</a></li>
                <li><a class="nav-link" href="editable-table.php">Editable Table</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="pie-chart"></i><span>Charts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chart-amchart.php">amChart</a></li>
                <li><a class="nav-link" href="chart-apexchart.php">apexchart</a></li>
                <li><a class="nav-link" href="chart-echart.php">eChart</a></li>
                <li><a class="nav-link" href="chart-chartjs.php">Chartjs</a></li>
                <li><a class="nav-link" href="chart-sparkline.php">Sparkline</a></li>
                <li><a class="nav-link" href="chart-morris.php">Morris</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="icon-font-awesome.php">Font Awesome</a></li>
                <li><a class="nav-link" href="icon-material.php">Material Design</a></li>
                <li><a class="nav-link" href="icon-ionicons.php">Ion Icons</a></li>
                <li><a class="nav-link" href="icon-feather.php">Feather Icons</a></li>
                <li><a class="nav-link" href="icon-weather-icon.php">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Media</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="light-gallery.php">Light Gallery</a></li>
                <li><a href="gallery1.php">Gallery 2</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sliders</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.php">Bootstrap Carousel.php</a></li>
                <li><a class="nav-link" href="owl-carousel.php">Owl Carousel</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="timeline.php"><i data-feather="sliders"></i><span>Timeline</span></a></li>
            <li class="menu-header">Maps</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
                  Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.php">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.php">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.php">Geocoding</a></li>
                <li><a href="gmaps-geolocation.php">Geolocation</a></li>
                <li><a href="gmaps-marker.php">Marker</a></li>
                <li><a href="gmaps-multiple-marker.php">Multiple Marker</a></li>
                <li><a href="gmaps-route.php">Route</a></li>
                <li><a href="gmaps-simple.php">Simple</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="vector-map.php"><i data-feather="map-pin"></i><span>Vector
                  Map</span></a></li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.php">Login</a></li>
                <li><a href="auth-register.php">Register</a></li>
                <li><a href="auth-forgot-password.php">Forgot Password</a></li>
                <li><a href="auth-reset-password.php">Reset Password</a></li>
                <li><a href="subscribe.php">Subscribe</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-triangle"></i><span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.php">503</a></li>
                <li><a class="nav-link" href="errors-403.php">403</a></li>
                <li><a class="nav-link" href="errors-404.php">404</a></li>
                <li><a class="nav-link" href="errors-500.php">500</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Other
                  Pages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="create-post.php">Create Post</a></li>
                <li><a class="nav-link" href="posts.php">Posts</a></li>
                <li><a class="nav-link" href="profile.php">Profile</a></li>
                <li><a class="nav-link" href="contact.php">Contact</a></li>
                <li><a class="nav-link" href="invoice.php">Invoice</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="chevrons-down"></i><span>Multilevel</span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Menu 1</a></li>
                <li class="dropdown">
                  <a href="#" class="has-dropdown">Menu 2</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Child Menu 1</a></li>
                    <li class="dropdown">
                      <a href="#" class="has-dropdown">Child Menu 2</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Child Menu 1</a></li>
                        <li><a href="#">Child Menu 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#"> Child Menu 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Vector Map</h4>
                  </div>
                  <div class="card-body">
                    <div id="visitorMap"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Vector Map With Flag Icon</h4>
                  </div>
                  <div class="card-body">
                    <div class="alert alert-primary">
                      Click on the map below to change the icon
                    </div>
                    <div class="row align-items-center mb-4">
                      <div class="col-6 text-right">
                        <div class="font-weight-bold">You Choose: </div>
                      </div>
                      <div class="col-6">
                        <span class="flag-icon flag-icon-id flag-icon-shadow" id="flag-icon"></span>
                      </div>
                    </div>
                    <div id="visitorMap2"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Indonesian Map</h4>
                  </div>
                  <div class="card-body">
                    <div id="visitorMap3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
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
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
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


<!-- vector-map.html  21 Nov 2019 04:05:01 GMT -->
</html>