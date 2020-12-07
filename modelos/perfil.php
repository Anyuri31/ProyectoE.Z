<?php
class Perfil
{
    private $pdo;
    public $Id_usuario;
    public $Correo_usuario;
    public $Contrasena;
    public $Tel_celular;
    public $Telefono;

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
        
            $stm = $this->pdo->prepare("SELECT Id_usuario, Correo_usuario, Contrasena,Tel_celular,Telefono FROM usuario");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Obtener($usuario)
    {
        try
        {
            
            $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE Id_usuario = ?");
       
            $stm->execute(array($usuario));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function EliminarPerfil($usuario)
    {
        try
        {
 
            $stm = $this->pdo
                        ->prepare("DELETE FROM usuario WHERE Id_usuario = ?");

            $stm->execute(array($usuario));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    
    public function Registrar(Usuario $data){
            try{         
                $sql = "INSERT INTO usuario(Id_usuario,Correo_usuario, Contrasena,Tel_celular, Telefono, id_estado)
                    VALUES (?, ?, ?, ?, ?, ?)";

                $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_usuario,
                        $data->Correo_usuario,
                        $data->Contrasena,
                        $data->Tel_celular,
                        $data->Telefono

                    )
                );
            } catch (Exception $e)
            {
                die($e->getMessage());
            }
        }


        public function obtenerPerfil($Id_usuario,$Correo_usuario,$Contrasena,$Tel_celular,$Telefono){
            $db=Db::conectar();
            $select=$db->prepare('SELECT Id_usuario,Correo_usuario,Contrasena,Tel_celular,Telefono FROM usuario');

        }

        public function actualizarPerfil($data)
    {
        try
        {
            
            $sql = "UPDATE usuario SET
                           
                           Correo_usuario     =?,
                           Contrasena         =?,
                           Tel_celular        =?,
                           Telefono           =?
                           

                    WHERE Id_usuario = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        
                        $data->Correo_usuario,
                        $data->Contrasena,
                        $data->Tel_celular,
                        $data->Telefono,
                        $data->Id_usuario
        
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    
}