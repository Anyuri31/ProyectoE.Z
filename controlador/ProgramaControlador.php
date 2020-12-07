<?php 

require_once 'modelos/programa.php';

class ProgramaControlador{

    private $modelos;

    public function __CONSTRUCT(){
        $this->modelos = new Programa();
    }

    public function index(){
                session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $pro = $this->modelos->Listar();
            require_once "view/header.php";
            require_once 'view/Programa/programa.php';
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
            $pro = new Programa();
            if(isset($_REQUEST['Codigo_programa'])){
                $pro = $this->modelos->Obtener($_REQUEST['Codigo_programa']);
            }
            require_once "view/header.php";
            require_once 'view/Programa/programa-editar.php';
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
            $pro = new Programa();
            require_once "view/header.php";
            require_once 'view/Programa/programa-nuevo.php';
            require_once "view/footer.php";
        }
        else {
            header('Location:?controlador=login');
        }
        
    }

    public function guardar(){
        $pro = new Programa();

        $pro->Codigo_programa = $_REQUEST['Codigo_programa'];
        $pro->Nombre_programa = $_REQUEST['Nombre_programa'];
        $pro->fecha_inicio = $_REQUEST['fecha_inicio'];
        $pro->fecha_final = $_REQUEST['fecha_final'];
        $pro->dia_entre_semana= $_REQUEST['dia_entre_semana'];
        $pro->fin_de_semana= $_REQUEST['fin_de_semana'];
        $pro->id_estado= $_REQUEST['id_estado'];
     
        $this->modelos->Registrar($pro);

        header('Location:?controlador=programa');
    }

    public function editar(){
        $pro = new Programa();

        $pro->Codigo_programa = $_REQUEST['Codigo_programa'];
        $pro->Nombre_programa = $_REQUEST['Nombre_programa'];
        $pro->fecha_inicio = $_REQUEST['fecha_inicio'];
        $pro->fecha_final = $_REQUEST['fecha_final'];
        $pro->dia_entre_semana= $_REQUEST['dia_entre_semana'];
        $pro->fin_de_semana= $_REQUEST['fin_de_semana'];
        $pro->id_estado= $_REQUEST['id_estado'];
     

        
        $this->modelos->Actualizar($pro);

        header('Location:?controlador=programa');
    }

     public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Codigo_programa']);
       header('Location:?controlador=programa');
    }
    public function consul(){
    require_once 'view/Programa/header_3.php';
    require_once 'view/Programa/programa-consultar.php';
    }
}


?>