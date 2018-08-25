<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Training</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/hovereffects.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header fixed-top">
    <div class="container-fluid">
        <a href="{{ route('inicio')}}" class="probootstrap-logo"><img src="img/logo-nav.png" height="50px"></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('inicio')}}">Inicio</a></li>
            <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="{{ route('nosotros')}}">Nosotros</a></li>
            <li class="{{ Request::is('servicios') ? 'active' : '' }}"><a href="{{ route('servicios')}}">Servicios</a></li>
            <li class="{{ Request::is('clientes') ? 'active' : '' }}"><a href="{{ route('clientes')}}">Alumnos</a></li>
            <li class="{{ Request::is('clientes') ? 'active' : '' }}"><a href="{{ route('empresas')}}">Empresas</a></li>
            <li class="{{ Request::is('contacto') ? 'active' : '' }}"><a href="{{ route('contacto')}}">Contacto</a></li>
          </ul>
          <ul class="probootstrap-header-social hidden-xs">
            <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook2"></i></a></li>
            <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Síguenos</h5>
            <ul class="social-buttons">
              <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook2"></i></a></li>
              <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  @yield('contenido')
  <!-- START: section -->
  
  <footer class="probootstrap-footer">
    <div class="probootstrap-backtotop"><a href="#" class="js-backtotop"><i class="icon-chevron-thin-up"></i></a></div>
    <div class="container">
       <div class="row mb50 justify-content-md-center center-footer">
         <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4>Clinic Training</h4>
            <ul class="probootstrap-contact-info">
              <li><a href="{{ route('inicio')}}">Inicio</a></li>
              <li><a href="{{ route('nosotros')}}">Nosotros</a></li>
              <li><a href="{{ route('servicios')}}">Servicios</a></li>
              <li><a href="{{ route('clientes')}}">Alumnos</a></li>
              <li><a href="{{ route('empresas')}}">Empresas</a></li>
              <li><a href="{{ route('contacto')}}">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1">
          <div class="probootstrap-footer-widget">
            <h4>Síguenos</h4>
            <ul class="probootstrap-contact-info">
              <li><a href="https://web.facebook.com/crosstraining.cl?_rdc=1&_rdr"><i class="icon-facebook2"></i> Facebook</a></li>
              <li><a href="https://www.instagram.com/clinictraining.cl/"><i class="icon-instagram2"></i> Instagram</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-md-push-2">
          <div class="probootstrap-footer-widget">
            <h4>Información de contacto</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-mail"></i><span>contacto@clinictraining.cl</span></li>
              <li><i class="icon-phone2"></i><span> +56 9 5396 2405 </span></li>
              <li><i class="icon-phone2"></i><span> +56 9 8901 3029 </span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center border-top">
          <p class="mb0">&copy; Copyright 2017 <a href="https://uicookies.com/">uiCookies:Trainer</a>. All Rights Reserved. <br> Designed by <a href="https://uicookies.com">uicookies.com</a> Demo Images Unsplash.com &amp; Pexels.com</p>
        </div>
      </div>
    </div>
  </footer>  

  <script src="js/scripts.js"></script>
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>