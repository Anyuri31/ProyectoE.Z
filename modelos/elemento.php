<?php 
class Elemento
{
    private $pdo;
    public $Id_aula;
    public $Codigo_elemento;
    public $Codigo_tipo_elemento;
    public $Nombre_elemento;
    public $Descripcion_elemento;
    public $Referencia;


    public function __CONSTRUCT()
    {
        try
        {
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
        
            $stm = $this->pdo->prepare("SELECT a.Id_aula,e.Codigo_elemento, t.Nombre_tipo_elemento, e.Nombre_elemento, e.Descripcion_elemento, e.Referencia    FROM elemento e
                INNER JOIN tipo_elemento t
                NATURAL JOIN aula a");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Obtener($elemento)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM elemento WHERE Codigo_elemento = ?");
       
            $stm->execute(array($elemento));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($elemento)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM elemento WHERE Codigo_elemento = ?");

            $stm->execute(array($elemento));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 	
 	public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE elemento SET
                           Id_aula                  =?,
                           Codigo_tipo_elemento     =?,
                           Nombre_elemento          =?,
                           Descripcion_elemento     =?,
                           Referencia               =?
                   
                           

                    WHERE Codigo_elemento   = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_aula,
                        $data->Codigo_tipo_elemento,
                        $data->Nombre_elemento,
                        $data->Descripcion_elemento ,
                        $data->Referencia,
                        $data->Codigo_elemento
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

        public function registrar(Elemento $data)
    {
        try
        {
         
            $sql = "INSERT INTO elemento(Id_aula, Codigo_elemento,Codigo_tipo_elemento,Nombre_elemento,Descripcion_elemento,Referencia)
                VALUES (?, ?, ?, ?, ?,?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                   $data->Id_aula,
                   $data->Codigo_elemento,
                   $data->Codigo_tipo_elemento,
                   $data->Nombre_elemento,
                   $data->Descripcion_elemento,
                   $data->Referencia
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 }




 ?>