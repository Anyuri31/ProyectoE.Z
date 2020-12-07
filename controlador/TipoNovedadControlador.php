<?php


    require 'modelos/TipoNovedad.php';
    
    class TipoNovedadControlador 
    {
        private $modelos;
        
        
         public function __construct()
        {
            $this->modelos = new TipoNovedad;
            
        }

        public function index()
        {
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tiponovedad=$this->modelos->listar();
            require_once "view/header.php";
            require_once 'view/TipoNovedad/tiponovedad.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
            
        }


        public function crud()
        {
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tiponovedad = new TipoNovedad();
            
            if (isset($_REQUEST['Id_tipo'])){
                $tiponovedad = $this->modelos->obtener($_REQUEST['Id_tipo']);
                
            }
            require_once "view/header.php";
            require 'view/TipoNovedad/tiponoveadad-editar.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
            
            
        }

       public function nuevo(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tiponovedad = new TipoNovedad();
            require_once 'view/header.php';
            require_once 'view/TipoNovedad/tiponovedad-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }


         public function guardar(){
        $tiponovedad = new TipoNovedad;

            $tiponovedad->Id_tipo = $_REQUEST['Id_tipo'];
            $tiponovedad->Nombre_tipo = $_REQUEST['Nombre_tipo'];
            $this->modelos->registrar($tiponovedad);
        header('Location: ?controlador=tiponovedad');
    }


         public function editar(){
        $tiponovedad = new TipoNovedad();

        $tiponovedad->Id_tipo = $_REQUEST['Id_tipo'];
        $tiponovedad->Nombre_tipo = $_REQUEST['Nombre_tipo'];
       $this->modelos->Actualizar($tiponovedad);

        header('Location:?controlador=tiponovedad');
    }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['Id_tipo']);
            header('Location: ?controlador=tiponovedad');
        }

        


        /**
        public function consult()
        {
            require 'view/tiponovedad/header.php';
            require 'view/tiponovedad/';
        }
        */

        
    }

?>