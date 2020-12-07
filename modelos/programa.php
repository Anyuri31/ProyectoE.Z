<?php 
class Programa
{
    private $pdo;
    public $Codigo_programa;
    public $Nombre_programa;
    public $fecha_inicio;
    public $fecha_final;
    public $dia_entre_semana;
    public $fin_de_semana;
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
        
            $stm = $this->pdo->prepare("SELECT p.Codigo_programa, p.Nombre_programa, p.fecha_inicio, p.fecha_final, p.dia_entre_semana, p.fin_de_semana, e.Nombre FROM programa p
                 NATURAL JOIN estado e");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Obtener($programa)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM programa WHERE Codigo_programa = ?");
       
            $stm->execute(array($programa));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($programa)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM programa WHERE Codigo_programa = ?");

            $stm->execute(array($programa));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 	
 	public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE programa SET

                           Nombre_programa         =?,
                           fecha_inicio    		   =?,
                           fecha_final             =?,
                           dia_entre_semana        =?,
                           fin_de_semana           =?,
                           id_estado               =?
    

                    WHERE Codigo_programa = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Nombre_programa,
                        $data->fecha_inicio,
                        $data->fecha_final,
                        $data->dia_entre_semana,
                        $data->fin_de_semana,
                        $data->id_estado,
                        $data->Codigo_programa
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

        public function Registrar(Programa $data)
    {
        try
        {
         
            $sql = "INSERT INTO programa(Codigo_programa,Nombre_programa,fecha_inicio,fecha_final,dia_entre_semana,fin_de_semana, id_estado)
                VALUES (?, ?, ?, ?, ?,?,?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                   $data->Codigo_programa,
                   $data->Nombre_programa,
                   $data->fecha_inicio,
                   $data->fecha_final,
                   $data->dia_entre_semana,
                   $data->fin_de_semana,
                   $data->id_estado
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
 }
 ?>