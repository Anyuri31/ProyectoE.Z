<?php

require_once 'modelos/rol.php';

class RolControlador{

    private $modelos;

    public function __CONSTRUCT(){
        $this->modelos = new Rol();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $roles=$this->modelos->Listar();
            require_once 'view/header.php';
            require_once 'view/Rol/rol.php';
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
            $roles = new Rol();

            if(isset($_REQUEST['Id_rol'])){
            $roles = $this->modelos->Obtener($_REQUEST['Id_rol']);
        }
            require_once 'view/header.php';
            require_once 'view/Rol/rol-editar.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }


        public function nuevo(){
            session_start();
            if(isset($_SESSION['usuario'])){
                $sesion = $_SESSION['usuario'];
                $roles = new Rol;
                require_once 'view/header.php';
                require_once 'view/Rol/rol-nuevo.php';
                require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }

            
            
            
               
        }


        public function guardar()
        {
            $roles = new Rol;
            
            $roles->Id_rol = $_REQUEST['Id_rol'];
            $roles->Tipo_rol = $_REQUEST['Tipo_rol'];
            $roles->id_estado = $_REQUEST['id_estado'];

            $this->modelos->registrar($roles);
            header('Location: ?controlador=rol');
        }


        public function editar()
        {
            $roles = new Rol;
            
            $roles->Id_rol = $_REQUEST['Id_rol'];
            $roles->Tipo_rol = $_REQUEST['Tipo_rol'];
            $roles->id_estado = $_REQUEST['id_estado'];

            $this->modelos->actualizar($roles);
            header('Location: ?controlador=rol');
            
        }

        public function eliminar()
        {
            $this->modelos->eliminar($_REQUEST['Id_rol']);
            header('Location: ?controlador=rol');
        }
        
    }

?>