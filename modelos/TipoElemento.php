<?php
class TipoElemento 
{ 
	    private $pdo;
	    public $Codigo_tipo_elemento;
	    public $Nombre_tipo_elemento;

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
	        try	        {
	            $result = array();	        
	            $stm = $this->pdo->prepare("SELECT * FROM tipo_elemento");	          
	            $stm->execute();	        
	            return $stm->fetchAll(PDO::FETCH_OBJ);
	        }
	        catch(Exception $e)
	        {	            
	            die($e->getMessage());
	        }
	    }
	    public function Obtener($tipo_elemento){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM tipo_elemento WHERE Codigo_tipo_elemento = ?");	       
	            $stm->execute(array($tipo_elemento));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	    
	    public function Eliminar($tipo_elemento){
	        try{
	            $stm = $this->pdo
	                        ->prepare("DELETE FROM tipo_elemento WHERE Codigo_tipo_elemento = ?");
	            $stm->execute(array($tipo_elemento));
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }

	    
	    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE tipo_elemento SET

                           Nombre_tipo_elemento         =?
    
                           

                    WHERE Codigo_tipo_elemento = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Nombre_tipo_elemento,
                        $data->Codigo_tipo_elemento
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	    public function Registrar(TipoElemento $data){
	        try{         
	            $sql = "INSERT INTO tipo_elemento(Codigo_tipo_elemento,Nombre_tipo_elemento)
	                VALUES (?, ?)";

	            $this->pdo->prepare($sql)
	             ->execute(
	                array(
	                   $data->Codigo_tipo_elemento,
	                   $data->Nombre_tipo_elemento
	                )
	            );
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }
	}
?>