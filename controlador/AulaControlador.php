<?php


    require 'modelos/Aula.php';
    
    class AulaControlador 
    {
        private $modelos;
        
        
         public function __construct()
        {
            $this->modelos = new Aula;
            
        }

        public function index()
        {
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $aula=$this->modelos->listar();
            require_once "view/header.php";
            require 'view/Aula/aula.php';
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
            $aula = new Aula();

                if (isset($_REQUEST['Id_aula'])){
                    $aula = $this->modelos->obtener($_REQUEST['Id_aula']);    
                }
            require_once "view/header.php";
            require 'view/Aula/aula-editar.php';
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
            $aula = new Aula();
            require_once "view/header.php";
            require 'view/Aula/aula-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
               
     }


        public function guardar()
        {
            $aula = new Aula();
            
            $aula->Id_aula = $_REQUEST['Id_aula'];
            $aula->Nombre_aula = $_REQUEST['Nombre_aula'];
            $aula->Cantidad_personas = $_REQUEST['Cantidad_personas'];
            $aula->Descripcion = $_REQUEST['Descripcion'];
            $aula->Id_sede = $_REQUEST['Id_sede'];
            $aula->id_estado = $_REQUEST['id_estado'];
            


            $this->modelos->registrar($aula);
            header('Location: ?controlador=aula');
        }


        public function editar()
        {
            $aula = new Aula;
            
            $aula->Id_aula = $_REQUEST['Id_aula'];
            $aula->Nombre_aula = $_REQUEST['Nombre_aula'];
            $aula->Cantidad_personas = $_REQUEST['Cantidad_personas'];
            $aula->Descripcion = $_REQUEST['Descripcion'];
            $aula->Id_sede = $_REQUEST['Id_sede'];
            $aula->id_estado = $_REQUEST['id_estado'];
            
            $this->modelos->actualizar($aula);
            header('Location: ?controlador=aula');
            
        }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['Id_aula']);
            header('Location: ?controlador=aula');
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