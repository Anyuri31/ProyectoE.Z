<?php


    require 'modelos/estado.php';
    
    class EstadoControlador 
    {
        private $modelos;
        
        
         public function __construct()
        {
            $this->modelos = new Estado();
            
        }

        public function index()
        {
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $estado=$this->modelos->Listar();
            require_once "view/header.php";
            require 'view/Estado/estado.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }       
    }


        public function crud(){
            session_start();
            if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $estado = new Estado();

                if (isset($_REQUEST['id_estado'])){
                    $estado = $this->modelos->obtener($_REQUEST['id_estado']);    
                }
            require_once "view/header.php";
            require 'view/Estado/estado-editar.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
            
     }


        public function nuevo()
        {
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $estado = new Estado();
            require_once "view/header.php";
            require 'view/Estado/estado-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
               
     }


        public function guardar()
        {
            $estado = new Estado();
            
            $estado->id_estado = $_REQUEST['id_estado'];
            $estado->Nombre = $_REQUEST['Nombre'];
            $estado->id_tipo = $_REQUEST['id_tipo'];
            
            $this->modelos->registrar($estado);
            header('Location: ?controlador=estado');
        }


        public function editar()
        {
            $estado = new Estado;
            
            $estado->id_estado = $_REQUEST['id_estado'];
            $estado->Nombre = $_REQUEST['Nombre'];
            $estado->id_tipo = $_REQUEST['id_tipo'];
            
            $this->modelos->actualizar($estado);
            header('Location: ?controlador=estado');
            
        }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['id_estado']);
            header('Location: ?controlador=estado');
        }

        


        /**
        public function consult()
        {
            require 'view/aula/header.php';
            require 'view/aula/';
        }
        */

        
    }

?>