<?php

	require 'modelos/login_modelo.php';
	
	class LoginControlador
	{
		//atributo para que me conecte al modelo
	
		private $modelos;
		
       //llamado del constructor
		public function __construct()
		{
			//instancia
			$this->modelos = new Login;
		}
         

		public function index()
		{
			//variable reservada session verifica si hay un usuario en sesion y lo  redirige al home
			if(isset($_SESSION['usuario']))
				//si existe una sesion se va al home
				header('Location: ?controlador=vista');
			else
				//si no se va al formulario
				session_start();
				session_destroy();
				$msg  = (isset($_SESSION['msg'])) ? $_SESSION['msg'] : '';
	            unset($_SESSION['msg']);
				require 'view/Login/login.php';
				
		}
			        	
        //funcion login que  nos permite hacer el inicio de sesion
		public function login()
		{
			$validateUsuario = $this->modelos->validateUsuario($_POST);

			if($validateUsuario === true) {
				header('Location: ?controlador=vista');
			} else { //si ed falso se devuelve un error
			    session_start();
        		$_SESSION['msg'] = "<div class='alert'>{$validateUsuario}</div>";
				//se requiere la vista del login en caso de que validateUsuario es false
				header('Location: ?controlador=login');

			}
		}

		
         
         //metodo  para cerrar sesion
		public function logout()
		{
			//si existe una sesion destruye la sesion con el metodo destroy
			if($_SESSION['usuario']) {
				session_destroy();
				//me  redirige a la vista iniciar sesion
				header('Location: ?controlador=login');
			} else {  //en caso de  sea falso me redirige al inicio sesion
				header('Location: ?controlador=login');	
							
			}
		}
	}
