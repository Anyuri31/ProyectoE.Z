<?php
	class TipoEstado{

	    private $pdo;
	    public $id_tipo;
	    public $Nombre;

	    public function __CONSTRUCT(){
	        try{
	            $this->pdo = Database::StartUp();     
	        }
	        catch(Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
		    
	    public function Listar(){
			try{
		        $result = array();   
		        $stm = $this->pdo->prepare("SELECT * FROM tipo_estado");      
		        $stm->execute();
		    
		        return $stm->fetchAll(PDO::FETCH_OBJ);
		    }
		    catch(Exception $e){        
		        die($e->getMessage());
		    }
		}

	    public function Obtener($tipoestado){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM tipo_estado WHERE id_tipo = ?");	       
	            $stm->execute(array($tipoestado));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Eliminar($tipoestado){
	        try{
	            $stm = $this->pdo
	                        ->prepare("DELETE FROM tipo_estado WHERE id_tipo = ?");
	            $stm->execute(array($tipoestado));
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Actualizar($data){
		    try{       
		        $sql = "UPDATE tipo_estado SET
		                       Nombre         =?

		                WHERE id_tipo = ?";
		       
		        $this->pdo->prepare($sql)
		             ->execute(
		                array(
		                    $data->Nombre,
		                    $data->id_tipo
		                )
		            );
		    } catch (Exception $e)
		    {
		        die($e->getMessage());
		    }
		}

	    public function Registrar(TipoEstado $data){
	        try{         
	            $sql = "INSERT INTO tipo_estado(id_tipo, Nombre)
	                VALUES (?, ?)";

	            $this->pdo->prepare($sql)
	             ->execute(
	                array(
	                   $data->id_tipo,
	                   $data->Nombre
	                )
	            );
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	}
?>