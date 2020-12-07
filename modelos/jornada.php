<?php

	/**
	 * 
	 */
	class Jornada 
	{
		public $id_jornada;	
		public $jornada_M;
		public $jornada_T;
		public $Codigo_programa;
		private $pdo;
		
		public function __Construct()
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
				$stm = $this->pdo->prepare("SELECT j.id_jornada, j.jornada_M, j.jornada_T, p.Nombre_programa FROM jornada j 
					NATURAL JOIN programa p");
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				
			}
		}


		public function obtener($jornada)
		{
			try {
				$stm = $this->pdo->prepare("SELECT * FROM jornada WHERE id_jornada =?");

				$stm->execute(array($jornada));
				return $stm->fetch(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		public function eliminar($jornada)
		{
			try {
				$stm = $this->pdo
							->prepare("DELETE FROM jornada WHERE id_jornada =?");
				$stm->execute(array($jornada));
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE jornada SET
                           jornada_M             =?,
                           jornada_T    		 =?,
                           Codigo_programa       =?
                   
                           

                    WHERE id_jornada   = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->jornada_M,
                        $data->jornada_T,
                        $data->Codigo_programa,
                        $data->id_jornada  
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

		public function registrar(Jornada $data)
		{
			try {
				$sql = "INSERT INTO jornada(id_jornada,jornada_M,jornada_T,Codigo_programa)
						VALUES (?,?,?,?)";

				$this->pdo->prepare($sql)
					->execute(
						array(
								$data->id_jornada,
								$data->jornada_M,
								$data->jornada_T,
								$data->Codigo_programa));
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}
?>