<?php
class DetalleNovedad

{

	    private $pdo;
	    public $Id_novedad;
	    public $Codigo_elemento;
	    public $Descripcion_nov_elemento;

	   public function __CONSTRUCT(){
	        try{
	            $this->pdo = Database::StartUp();     
	        }
	        catch(Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function listar()
		{
			try {
				$result = array();
				$stm = $this->pdo->prepare("SELECT d.Id_novedad, e.Nombre_elemento, d.Descripcion_nov_elemento FROM detalle_novedad d
					NATURAL JOIN elemento e");
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				
			}
		}
	    public function Obtener($detallenovedad){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM detalle_novedad WHERE Id_novedad = ?");	       
	            $stm->execute(array($detallenovedad));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function eliminar($detallenovedad){
	        try{
	            $stm = $this->pdo
	                        ->prepare("DELETE FROM detalle_novedad WHERE Id_novedad = ?");
	            $stm->execute(array($detallenovedad));
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }

	    
	    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE detalle_novedad SET
                           Codigo_elemento              =?,
                           Descripcion_nov_elemento    	=?
                           
                   
                           

                    WHERE Id_novedad  = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Codigo_elemento  ,
                        $data->Descripcion_nov_elemento,
                        $data->Id_novedad 
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	    public function registrar(DetalleNovedad $data){
	        try{         
	            $sql = "INSERT INTO detalle_novedad(Id_novedad,Codigo_elemento,Descripcion_nov_elemento)
	                VALUES (?, ?, ?)";

	            $this->pdo->prepare($sql)
	             ->execute(
	                array(
	                   $data->Id_novedad,
	                   $data->Codigo_elemento,
	                   $data->Descripcion_nov_elemento,
	                )
	            );
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	}
?>