<?php
class Sede
{
	    private $pdo;
	    public $Id_sede;
	    public $Tipo_sede;
	    public $Direccion;

	   public function __CONSTRUCT(){
	        try{
	            $this->pdo = Database::StartUp();     
	        }
	        catch(Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Listar()
    {
        try
        {
            $result = array();
        
            $stm = $this->pdo->prepare("SELECT * FROM sede");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

	    public function Obtener($sede){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM sede WHERE Id_sede = ?");	       
	            $stm->execute(array($sede));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Eliminar($sede){
	        try{
	            $stm = $this->pdo
	                        ->prepare("DELETE FROM sede WHERE Id_sede = ?");
	            $stm->execute(array($sede));
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }

	    
	    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE sede SET

                           Tipo_sede         =?,
                           Direccion         =?
    
                           

                    WHERE Id_sede = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Tipo_sede,
                        $data->Direccion,
                        $data->Id_sede
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	    public function Registrar(Sede $data){
	        try{         
	            $sql = "INSERT INTO sede(Id_sede, Tipo_sede, Direccion)
	                VALUES (?, ?, ?)";

	            $this->pdo->prepare($sql)
	             ->execute(
	                array(
	                   $data->Id_sede,
	                   $data->Tipo_sede,
	                   $data->Direccion
	                )
	            );
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	}
?>