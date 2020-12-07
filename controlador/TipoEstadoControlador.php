<?php
require_once 'modelos/tipoEstado.php';

class TipoEstadoControlador{
    private $modelos;
    public function __CONSTRUCT(){
        $this->modelos = new TipoEstado();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipoEstado=$this->modelos->Listar();
            require_once "view/header.php";
            require_once 'view/TipoEstado/tipo-estado.php';
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
            $tipoEstado = new TipoEstado();

            if(isset($_REQUEST['id_tipo'])){
                $tipoEstado = $this->modelos->Obtener($_REQUEST['id_tipo']);
        }
            require_once "view/header.php";
            require_once 'view/TipoEstado/tipo-estado-editar.php';
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
            $tipoEstado = new TipoEstado();
            require_once "view/header.php";
            require_once 'view/TipoEstado/tipo-estado-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
    }

    public function guardar(){
        $tipoEstado = new TipoEstado();
        $tipoEstado->id_tipo = $_REQUEST['id_tipo'];
        $tipoEstado->Nombre = $_REQUEST['Nombre'];

        $this->modelos->Registrar($tipoEstado);        
        header('Location:?controlador=tipoEstado');
    }

    public function editar(){
        $tipoEstado = new TipoEstado();
        $tipoEstado->id_tipo = $_REQUEST['id_tipo'];
        $tipoEstado->Nombre = $_REQUEST['Nombre'];
        
        $this->modelos->Actualizar($tipoEstado);
        header('Location:?controlador=tipoEstado');
    }

    public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['id_tipo']);
        header('Location:?controlador=tipoEstado');
    }
}