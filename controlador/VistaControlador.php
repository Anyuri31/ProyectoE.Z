<?php

class VistaControlador{
	
    public function index(){
    	session_start();
    	if(isset($_SESSION['usuario'])){
			$sesion = $_SESSION['usuario'];
			require_once "view/home.php";
			require_once "view/header.php";
			require_once "view/footer.php";
			
        }
        else {
        	header('Location:?controlador=login');
        }
    }

}