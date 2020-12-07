<?php
  
  require_once 'modelos/database.php';

 

  $controlador = 'PrincipalControlador';

  if(!isset($_REQUEST['controlador'])) {
    require "controlador/" . $controlador . ".php";

    $controlador = ucwords($controlador);
    $controlador = new $controlador;
    $controlador->index();   
  } else {
    $controlador = ucwords($_REQUEST['controlador'].'controlador');
    //Condicional Ternario   condición       Si es Verdad         Si es Falso
    $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

    require "controlador/". $controlador .".php";
    $controlador = new $controlador;

    //Función para llamar al controlados y ejecutar el metodo.
    call_user_func(array($controlador, $method));
  }
