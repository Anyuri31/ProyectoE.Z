<?php
require_once 'modelos/perfil.php';

class PerfilControlador{

    public function __CONSTRUCT(){
        $this->modelos = new Perfil();
    }

   public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $per=$this->modelos->Obtener($sesion->Id_usuario); //le enviamos la id que viene de la sesion para traer los datos especificos 
            require_once "view/header.php";
            require_once 'view/Perfil/usuario-perfil.php';
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
             $per = new Perfil();

             if(isset($_REQUEST['Id_usuario'])){
                $per = $this->modelos->Obtener($_REQUEST['Id_usuario']);
        }
            require_once "view/header.php";
            require_once 'view/Perfil/usuario-perfil.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
    }

       public function guardar(){
        $per = new Perfil();

        $per->Id_sede = $_REQUEST['Id_sede'];
        $per->Correo_usuario= $_REQUEST['Correo_usuario'];
        $per->Contrasena = $_REQUEST['Contrasena'];
        $per->Tel_celular = $_REQUEST['Tel_celular'];
        $per->Telefono = $_REQUEST['Telefono'];

        $this->modelos->Registrar($per);
        

        header('Location:?controlador=perfil');
    }
     public function editar(){
        $per = new Perfil();

        $per->Id_sede = $_REQUEST['Id_sede'];
        $per->Correo_usuario= $_REQUEST['Correo_usuario'];
        $per->Contrasena = $_REQUEST['Contrasena'];
        $per->Tel_celular = $_REQUEST['Tel_celular'];
        $per->Telefono = $_REQUEST['Telefono'];

        
        $this->modelos->Actualizar($per);

        header('Location:?controlador=perfil');
    }

    public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Id_usuario']);
       header('Location:?controlador=perfil');
    }
}
