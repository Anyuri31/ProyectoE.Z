<?php

require_once 'modelos/sede.php';

class SedeControlador{

    private $modelos;

    public function __CONSTRUCT(){
        $this->modelos = new Sede();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $sed=$this->modelos->Listar();
            require_once "view/header.php";
            require_once 'view/Sede/sede.php';
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
             $sed = new Sede();

             if(isset($_REQUEST['Id_sede'])){
                $sed = $this->modelos->Obtener($_REQUEST['Id_sede']);
        }
            require_once "view/header.php";
             require_once 'view/Sede/sede-editar.php';
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
            $sed = new Sede();
            require_once "view/header.php";
            require_once 'view/Sede/sede-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
    }

       public function guardar(){
        $sed = new Sede();

        $sed->Id_sede = $_REQUEST['Id_sede'];
        $sed->Tipo_sede = $_REQUEST['Tipo_sede'];
        $sed->Direccion = $_REQUEST['Direccion'];

        $this->modelos->Registrar($sed);
        

        header('Location:?controlador=sede');
    }
     public function editar(){
        $sed = new Sede();

        $sed->Id_sede = $_REQUEST['Id_sede'];
        $sed->Tipo_sede = $_REQUEST['Tipo_sede'];
        $sed->Direccion = $_REQUEST['Direccion'];

        
        $this->modelos->Actualizar($sed);

        header('Location:?controlador=sede');
    }

    public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Id_sede']);
       header('Location:?controlador=sede');
    }
    //public function consul(){
   // require_once 'view/Usuario/header_1.php';
    //require_once 'view/Usuario/usuario-consultar.php';
}

