<?php
class Estado
{
	    private $pdo;
	    public $id_estado;
	    public $Nombre;
	    public $id_tipo;

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
        
            $stm = $this->pdo->prepare("SELECT e.id_estado, e.Nombre, t.Nombre FROM estado e
						   INNER JOIN tipo_estado t");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

	    public function Obtener($estado){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM estado WHERE id_estado = ?");	       
	            $stm->execute(array($estado));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Eliminar($estado){
	        try{
	            $stm = $this->pdo
	                        ->prepare("DELETE FROM estado WHERE id_estado = ?");
	            $stm->execute(array($estado));
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }

	    
	    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE estado SET

                           Nombre         =?,
                           id_tipo         =?
    
                           

                    WHERE id_estado = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Nombre,
                        $data->id_tipo,
                        $data->id_estado
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	    public function Registrar(Estado $data){
	        try{         
	            $sql = "INSERT INTO estado(id_estado, Nombre, id_tipo)
	                VALUES (?, ?, ?)";

	            $this->pdo->prepare($sql)
	             ->execute(
	                array(
	                   $data->id_estado,
	                   $data->Nombre,
	                   $data->id_tipo
	                )
	            );
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	}
?>