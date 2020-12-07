<?php

	class TipoNovedad
	{
		private $pdo;
		public $id_tipo;
		public $Nombre_tipo;
		
		
		public function __construct()
		{
			try {
				$this->pdo = Database::StartUp();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		public function listar()
		{
			try {
				$result = array();
				$stm = $this->pdo->prepare("SELECT * FROM tipo_novedad");
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}



		public function Obtener($tiponovedad){
	        try{	            
	            $stm = $this->pdo->prepare("SELECT * FROM tipo_novedad WHERE Id_tipo = ?");	       
	            $stm->execute(array($tiponovedad));
	            return $stm->fetch(PDO::FETCH_OBJ);
	        } catch (Exception $e)
	        {
	            die($e->getMessage());
	        }
	    }

		public function eliminar($tiponovedad)
		{
			try {
				$stm = $this->pdo->prepare("DELETE FROM tipo_novedad WHERE Id_tipo = ?");
				$stm->execute(array($tiponovedad));
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		 public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE tipo_novedad SET

                           Nombre_tipo        =?
    
                           

                    WHERE Id_tipo = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Nombre_tipo,
                        $data->Id_tipo
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }


		public function registrar(TipoNovedad $data)
		{
			try {
				$sql = "INSERT INTO tipo_novedad(Id_tipo,Nombre_tipo)
						VALUES(?,?)";
				$this->pdo->prepare($sql)
					 ->execute(
					 	array(
					 			$data->Id_tipo,
					 			$data->Nombre_tipo));
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

	}

?>