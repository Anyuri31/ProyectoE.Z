<?php 

require_once 'modelos/elemento.php';

class ElementoControlador{

    private $modelos;

    public function __CONSTRUCT(){
        $this->modelos = new Elemento();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $elemento=$this->modelos->Listar();
            require_once 'view/header.php';
            require_once 'view/Elementos/elemento.php';
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
            $elemento = new Elemento();

            if(isset($_REQUEST['Codigo_elemento'])){
            $elemento = $this->modelos->Obtener($_REQUEST['Codigo_elemento']);
            
        }
            require_once 'view/header.php';
            require_once 'view/Elementos/elemento-editar.php';
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
            $elemento = new Elemento();
            require_once 'view/header.php';
            require_once 'view/Elementos/elemento-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }  
    }

     public function guardar(){
        $elemento = new Elemento();

        $elemento->Id_aula = $_REQUEST['Id_aula'];
        $elemento->Codigo_tipo_elemento = $_REQUEST['Codigo_tipo_elemento'];
        $elemento->Nombre_elemento = $_REQUEST['Nombre_elemento'];
        $elemento->Descripcion_elemento= $_REQUEST['Descripcion_elemento'];
        $elemento->Referencia= $_REQUEST['Referencia'];

        //var_dump($elemento);exit();
        $this->modelos->Registrar($elemento);
        header('Location: ?controlador=elemento');
        }

    public function editar(){
        $elemento = new Elemento();

        $elemento->Id_aula = $_REQUEST['Id_aula'];
        $elemento->Codigo_elemento = $_REQUEST['Codigo_elemento'];
        $elemento->Codigo_tipo_elemento = $_REQUEST['Codigo_tipo_elemento'];
        $elemento->Nombre_elemento = $_REQUEST['Nombre_elemento'];
        $elemento->Descripcion_elemento= $_REQUEST['Descripcion_elemento'];
        $elemento->Referencia= $_REQUEST['Referencia'];

        
        $this->modelos->Actualizar($elemento);

        header('Location: ?controlador=elemento');
    }

     public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Codigo_elemento']);
       header('Location: ?controlador=elemento');
    }
    public function consul(){
    require_once 'view/Elemento/header_1.php';
    require_once 'view/Elemento/elemento-consultar.php';
    }
}


?>