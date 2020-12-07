<?php


    require 'modelos/detalle_novedad.php';

    class DetalleNovedadControlador
    {
        private $modelos;
        
        
         public function __construct()
        {
            $this->modelos = new DetalleNovedad;
            
        }

        public function index()
        {
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $detnov=$this->modelos->listar();
            require_once "view/header.php";
            require 'view/DetalleNovedad/detalleNovedad.php';
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
                $detnov = new DetalleNovedad();
                
                if (isset($_REQUEST['Id_novedad'])){
                    $detnov = $this->modelos->obtener($_REQUEST['Id_novedad']);
                    
                }
                require_once "view/header.php";
                require 'view/DetalleNovedad/detalleNovedad-editar.php';
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
            $detnov = new DetalleNovedad();
            require_once "view/header.php";
            require 'view/DetalleNovedad/detalleNovedad-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
             
    }


        public function guardar()
        {
            $detnov = new DetalleNovedad;

            $detnov->Id_novedad = $_REQUEST['Id_novedad'];
            $detnov->Codigo_elemento = $_REQUEST['Codigo_elemento'];
            $detnov->Descripcion_nov_elemento = $_REQUEST['Descripcion_nov_elemento'];
    


            $this->modelos->registrar($detnov);
            header('Location: ?controlador=detalleNovedad');
        }


        public function editar(){
        $detnov = new DetalleNovedad();

        $detnov->Id_novedad = $_REQUEST['Id_novedad'];
        $detnov->Codigo_elemento = $_REQUEST['Codigo_elemento'];
        $detnov->Descripcion_nov_elemento = $_REQUEST['Descripcion_nov_elemento'];
        

        
        $this->modelos->Actualizar($detnov);

        header('Location:?controlador=detalleNovedad');
    }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['Id_novedad']);
            header('Location:?controlador=detalleNovedad');
        }

        


        /**
        public function consult()
        {
            require 'view/jornada/header.php';
            require 'view/jornada/';
        }
        */

        
    }

?>