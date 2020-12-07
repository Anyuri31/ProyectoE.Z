<?php 

require_once 'modelos/novedad.php';

class NovedadControlador{

    private $modelos;

    public function __CONSTRUCT(){
        $this->modelos = new Novedad();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $novedades=$this->modelos->Listar();
            require_once 'view/header.php';
            require_once 'view/Novedad/novedad.php';
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
             $nove = new Novedad();
             if(isset($_REQUEST['Id_novedad'])){
                $nove = $this->modelos->Obtener($_REQUEST['Id_novedad']);
        }
            require_once 'view/header.php';
            require_once 'view/Novedad/novedad-editar.php';
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
            $nove = new Novedad();
            require_once 'view/header.php';
            require_once 'view/Novedad/novedad-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }

        
    }

    public function guardar(){
        $nove = new Novedad();

        $nove->Id_novedad = $_REQUEST['Id_novedad'];
        $nove->Id_reserva = $_REQUEST['Id_reserva'];
        $nove->Id_tipo = $_REQUEST['Id_tipo'];
        $nove->fecha = $_REQUEST['fecha'];
        $nove->NombreNovedad= $_REQUEST['NombreNovedad'];
     
        $this->modelos->Registrar($nove);

        header('Location:?controlador=programa');
    }

    public function editar(){
        $nove = new Novedad();

        $nove->Id_novedad = $_REQUEST['Id_novedad'];
        $nove->Id_reserva = $_REQUEST['Id_reserva'];
        $nove->Id_tipo = $_REQUEST['Id_tipo'];
        $nove->fecha = $_REQUEST['fecha'];
        $nove->NombreNovedad= $_REQUEST['NombreNovedad'];

        
        $this->modelos->Actualizar($nove);

        header('Location:?controlador=novedad');
    }

     public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Id_novedad']);
       header('Location: ?controlador=novedad');
    }
    public function consul(){
    require_once 'view/Novedad/header_2.php';
    require_once 'view/Novedad/novedad-consultar.php';
    }
}


?>