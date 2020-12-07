<?php
	

	class Rol
	{
		private $pdo;
		public $Id_rol;
		public $Tipo_rol;
		public $id_estado;
		
		
		
        public function __Construct()
		{
			try {
				$this->pdo = Database::StartUp();
				
			} catch (Exception $e) {
				die($e->getMessage());
			}	
		}

		public function Listar()
    {
        try
        {
            $result = array();
        
            $stm = $this->pdo->prepare("SELECT r.Id_rol, r.Tipo_rol, e.Nombre FROM rol r
            	NATURAL JOIN estado e");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }
    

		public function Obtener($rol)
		{
			try {
				$stm = $this->pdo->prepare("SELECT * FROM rol WHERE Id_rol = ?");
				$stm->execute(array($rol));
				return $stm->fetch(PDO::FETCH_OBJ);

			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}

		public function eliminar($rol)
		{
			try {
				$stm = $this->pdo->prepare("DELETE FROM rol WHERE Id_rol = ?");
				$stm->execute(array($rol)); 
			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}

		public function actualizar($data)
		{
			try {
				$sql = "UPDATE rol SET

				             Tipo_rol  =?,
				             id_estado  =?
							   							           
						WHERE Id_rol =?";

				$this->pdo->prepare($sql)
				->execute(
					array(

						  $data->Tipo_rol,
				 		  $data->id_estado,
				 		  $data->Id_rol
						)
				);			
			} catch(Exception $e) {
				die($e->getMessage());
			}		
		}

		public function registrar(Rol $data)
		{
			try {
				$sql = "INSERT INTO rol(Id_rol,Tipo_rol, id_estado) 
				VALUES (?,?,?)";

				$this->pdo->prepare($sql)
				 ->execute(
				 	array(

				 		  $data->Id_rol,
				 		  $data->Tipo_rol,
				 		  $data->id_estado
				 		 
				 		  ));
			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}
	}