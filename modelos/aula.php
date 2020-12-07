<?php
	
	/**
	 * Modelo de la Tabla Movie
	 */
	class Aula
	{
		private $pdo;
		public $Id_aula;
		public $Nombre_aula;
		public $Cantidad_personas;
		public $Descripcion;
		public $Id_sede;
		public $id_estado;
		
		
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
			try 
			{

				$result = array();

				$stm = $this->pdo->prepare("SELECT a.Id_aula, a.Nombre_aula, a.Cantidad_personas, a.Descripcion, s.Direccion,e.Nombre FROM aula a 
											NATURAL join sede s 
											NATURAL join estado e");

				$stm->execute();	
				
				return $stm->fetchAll(PDO::FETCH_OBJ);
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}

		public function obtener($aula)
		{
			try {
				$stm = $this->pdo->prepare("SELECT * FROM aula WHERE Id_aula = ?");
				$stm->execute(array($aula));
				return $stm->fetch(PDO::FETCH_OBJ);

			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}

		public function eliminar($aula)
		{
			try {
				$stm = $this->pdo->prepare("DELETE FROM aula WHERE Id_aula = ?");
				$stm->execute(array($aula)); 
			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}

		public function actualizar($data)
		{
			try {
				$sql = "UPDATE aula SET
							   Nombre_aula       =?,
							   Cantidad_personas =?,
							   Descripcion       =?,
				               Id_sede           =?,
				               id_estado         =?
							             
						WHERE Id_aula =?";

				$this->pdo->prepare($sql)
				->execute(
					array(
						  $data->Nombre_aula,
						  $data->Cantidad_personas,
						  $data->Descripcion,
						  $data->Id_sede,
						  $data->id_estado,
						  $data->Id_aula
						)
				);			
			} catch(Exception $e) {
				die($e->getMessage());
			}		
		}

		public function registrar(Aula $data)
		{
			try {
				$sql = "INSERT INTO aula(Id_aula,Nombre_aula,Cantidad_personas,Descripcion,Id_sede,id_estado) 
				VALUES (?,?,?,?,?,?)";

				$this->pdo->prepare($sql)
				 ->execute(
				 	array(

				 		  $data->Id_aula,
				 		  $data->Nombre_aula,
				 		  $data->Cantidad_personas,
				 		  $data->Descripcion,
				 		  $data->Id_sede,
				 		  $data->id_estado
				 		  
				 		  ));
			} catch(Exception $e) {
				die($e->getMessage());
			}	
		}
	}