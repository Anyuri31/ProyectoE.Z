<?php


    require 'modelos/Jornada.php';

    class JornadaControlador 
    {
        private $modelos;
        
        
         public function __construct()
        {
            $this->modelos = new Jornada;
            
        }

        public function index(){
            session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $jornada=$this->modelos->listar();
            require_once "view/header.php";
            require 'view/jornada/jornada.php';
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
            $jornada = new Jornada;

            if (isset($_REQUEST['id_jornada'])){
                $jornada = $this->modelos->obtener($_REQUEST['id_jornada']);
            }
            require_once "view/header.php";
            require 'view/Jornada/jornada-editar.php';
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
            $jornada = new Jornada;
            require_once "view/header.php";
            require 'view/Jornada/jornada-nuevo.php';
            require_once "view/footer.php";
            }
            else {
            header('Location:?controlador=login');
            }             
        }

        public function guardar()
        {
            $jornada = new Jornada;

            $jornada->id_jornada = $_REQUEST['id_jornada'];
            $jornada->jornada_M = $_REQUEST['jornada_M'];
            $jornada->jornada_T = $_REQUEST['jornada_T'];
            $jornada->Codigo_programa = $_REQUEST['Codigo_programa'];

            $this->modelos->registrar($jornada);
            header('Location: ?controlador=jornada');
        }

        public function editar(){
        $jornada = new Jornada();

        $jornada->id_jornada = $_REQUEST['id_jornada'];
        $jornada->jornada_M = $_REQUEST['jornada_M'];
        $jornada->jornada_T = $_REQUEST['jornada_T'];
        $jornada->Codigo_programa = $_REQUEST['Codigo_programa'];

        
        $this->modelos->Actualizar($jornada);

        header('Location:?controlador=jornada');
    }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['id_jornada']);
            header('Location: ?controlador=jornada');
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