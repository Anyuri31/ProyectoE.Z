<?php 
class Reserva
{
    private $pdo;
    public $Id_reserva;
    public $Id_usuario;
    public $Id_aula;
    public $Codigo_programa;
    public $Fecha_reserva;
    public $Hora_inicio;
    public $Fecha_final;
    public $Hora_final;
    public $id_estado;

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
        
            $stm = $this->pdo->prepare("SELECT r.Id_reserva, u.Nombres, a.Id_aula, p.Nombre_programa, r.Fecha_reserva, r.Hora_inicio, r.Fecha_final, r.Hora_final, e.id_estado FROM reserva r LEFT JOIN usuario u on r.Id_usuario = u.Id_usuario LEFT JOIN aula a on r.Id_aula = a.Id_aula LEFT JOIN programa p on r.Codigo_programa = p.Codigo_programa LEFT join estado e on r.id_estado = e.id_estado");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_aulas()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM aula");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar_programa()
    {
        try
        {
            $result = array();
        
            $stm = $this->pdo->prepare("SELECT * FROM programa");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Obtener($reserva)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT *, TIME_FORMAT(Hora_inicio, '%H:%i') as H_inicio,TIME_FORMAT(Hora_final, '%H:%i') as H_final FROM reserva WHERE Id_reserva = ?");
       
            $stm->execute(array($reserva));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    

    public function Eliminar($reserva)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM reserva WHERE Id_reserva = ?");

            $stm->execute(array($reserva));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 	
 	public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE reserva SET
                           Id_usuario          =?,
                           Id_aula    		   =?,
                           Codigo_programa     =?,
                           Fecha_reserva       =?,
                           Hora_inicio         =?,
                           Fecha_final         =?,
                           Hora_final          =?,
                           id_estado           =?

    
                    WHERE Id_reserva = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_usuario,
                        $data->Id_aula,
                        $data->Codigo_programa,
                        $data->Fecha_reserva,
                        $data->Hora_inicio,
                        $data->Fecha_final,
                        $data->Hora_final,
                        $data->id_estado,
                        $data->Id_reserva
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

        public function Registrar(Reserva $data){
            try{
         
                $sql = "INSERT INTO reserva(Id_reserva, Id_usuario, Id_aula, Codigo_programa, 
                                        Fecha_reserva, Hora_inicio, Fecha_final, Hora_final,id_estado)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Id_reserva,
                        $data->Id_usuario,
                        $data->Id_aula,
                        $data->Codigo_programa,
                        $data->Fecha_reserva,
                        $data->Hora_inicio,
                        $data->Fecha_final,
                        $data->Hora_final,
                        $data->Id_estado
                    )
                );
            }catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function con_usu($usuario)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT Correo_usuario, Nombres, Apellidos FROM usuario WHERE Id_usuario = ?");
            $stm->execute(array($usuario->Id_usuario));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function con_programa($programa)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT Nombre_programa FROM programa WHERE Codigo_programa = ?");
            $stm->execute(array($programa->Codigo_programa));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function con_estado($estado)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT Nombre FROM estado WHERE id_estado = ?");
            $stm->execute(array($estado->Id_estado));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 }
 ?>