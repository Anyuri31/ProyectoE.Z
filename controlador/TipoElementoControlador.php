<?php 
    require 'modelos/tipoElemento.php';
    class TipoElementoControlador{

        private $modelos;
   

    public function __CONSTRUCT(){
        $this->modelos = new TipoElemento();
    }

     public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipEl = $this->modelos->Listar();
            require_once 'view/header.php';
            require_once 'view/tipoElemento/tipoelemento.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }

    public function crud(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipEl = new tipoElemento();

        if(isset($_REQUEST['Codigo_tipo_elemento'])){
            $tipEl = $this->modelos->Obtener($_REQUEST['Codigo_tipo_elemento']);
        }

        
            require_once 'view/header.php';
            require_once 'view/TipoElemento/tipoelemento-editar.php';
            require_once 'view/footer.php';
        
    }else {
            header('Location:?controlador=login');
        }
    }    

    public function nuevo(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipEl = new tipoElemento();
            require_once 'view/header.php';
            require_once 'view/TipoElemento/tipoelemento-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }

    public function guardar(){
        $tipEl = new tipoElemento();

        $tipEl->Codigo_tipo_elemento = $_REQUEST['Codigo_tipo_elemento'];
        $tipEl->Nombre_tipo_elemento = $_REQUEST['Nombre_tipo_elemento'];
        $this->modelos->Registrar($tipEl);

        header('Location: ?controlador=tipoElemento');
    }

    public function editar(){
        $tipEl = new tipoElemento();

        $tipEl->Codigo_tipo_elemento = $_REQUEST['Codigo_tipo_elemento'];
        $tipEl->Nombre_tipo_elemento = $_REQUEST['Nombre_tipo_elemento'];
       $this->modelos->Actualizar($tipEl);

        header('Location:?controlador=tipoElemento');
    }

    public function eliminar(){
       $this->modelos->Eliminar($_REQUEST['Codigo_tipo_elemento']);

       header('Location:?controlador=tipoElemento');
    }
    public function consul(){
        require_once 'view/TipoElemento/header_1.php';
        require_once 'view/TipoElemento/tipoElemento-consultar.php';
    }
}