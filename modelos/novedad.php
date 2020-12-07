<?php 
class Novedad
{
    private $pdo;
    public $Id_novedad;
    public $Id_reserva;
    public $Id_tipo;
    public $fecha;
    public $NombreNovedad;

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
        
            $stm = $this->pdo->prepare("SELECT n.Id_novedad,r.Id_reserva, t.Nombre_tipo, n.fecha, n.NombreNovedad FROM novedad n 
                NATURAL JOIN reserva r
                NATURAL JOIN tipo_novedad t");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Obtener($novedad)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM novedad WHERE Id_novedad = ?");
       
            $stm->execute(array($novedad));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($novedad)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM novedad WHERE Id_novedad = ?");

            $stm->execute(array($novedad));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 	
 	public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE novedad SET
                           Id_reserva             =?,
                           Id_tipo     			  =?,
                           fecha                  =?,
                           NombreNovedad         =?
                           

                    WHERE Id_novedad = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_reserva,
                        $data->Id_tipo,
                        $data->fecha,
                        $data->NombreNovedad,
                        $data->Id_novedad
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

        public function Registrar(Novedad $data)
    {
        try
        {
         
            $sql = "INSERT INTO novedad(Id_novedad,Id_reserva,Id_tipo,fecha,NombreNovedad)
                VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                   $data->Id_novedad,
                   $data->Id_reserva,
                   $data->Id_tipo,
                   $data->fecha,
                   $data->NombreNovedad,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 }




 ?>