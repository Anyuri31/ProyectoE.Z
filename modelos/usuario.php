<?php
class Usuario
{
    private $pdo;
    public $Id_usuario;
    public $Id_rol;
    public $Correo_usuario;
    public $Contrasena;
    public $Nombres;
    public $Apellidos;
    public $Tipo_documento;
    public $Numero_documento;
    public $Tel_celular;
    public $Telefono;
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
        
            $stm = $this->pdo->prepare("SELECT u.Id_usuario, r.Tipo_rol, u.Correo_usuario, u.Contrasena, u.Nombres, u.Apellidos,u.Tipo_documento,u.Numero_documento, u.Tel_celular, u.Telefono, e.Nombre FROM usuario u LEFT JOIN rol r on u.Id_rol = r.Id_rol LEFT JOIN estado e on u.id_estado = e.id_estado");
          
            $stm->execute();
        
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            
            die($e->getMessage());
        }
    }

    public function Listar_estados()
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM `estado`");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e)
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

    
    public function Eliminar($usuario)
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

    
    public function Actualizar($data)
    {
        try
        {
            
            $sql = "UPDATE usuario SET
                           Id_rol             =?,
                           Correo_usuario     =?,
                           Nombres            =?,
                           Apellidos          =?,
                           Tipo_documento     =?,
                           Numero_documento   =?,
                           Tel_celular        =?,
                           Telefono           =?,
                           id_estado          =?

                    WHERE Id_usuario = ?";
           
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_rol,
                        $data->Correo_usuario,
                        $data->Nombres,
                        $data->Apellidos,
                        $data->Tipo_documento,
                        $data->Numero_documento,
                        $data->Tel_celular,
                        $data->Telefono,
                        $data->id_estado,
                        $data->Id_usuario
        
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    
    public function Registrar(Usuario $data){
            try{         
                $sql = "INSERT INTO usuario(Id_usuario,Id_rol, Correo_usuario, Contrasena, Nombres,
                Apellidos, Tipo_documento, Numero_documento, Tel_celular, Telefono, id_estado)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->Id_usuario,
                        $data->Id_rol,
                        $data->Correo_usuario,
                        $data->Contrasena,// = hash("sha256",$usu->Contrasena),
                        $data->Nombres,
                        $data->Apellidos,
                        $data->Tipo_documento,
                        $data->Numero_documento,
                        $data->Tel_celular,
                        $data->Telefono,
                        $data->id_estado

                    )
                );
            } catch (Exception $e)
            {
                die($e->getMessage());
            }
        }

        public function Ingreso($Id_usuario,$Contrasena){
        $sql ="SELECT * FROM usuario WHERE Correo_usuario='$Correo_usuario' and Contrasena='$Contrasena'";


         $stm = $this -> pdo -> prepare($sql);
         $stm -> execute(array($Id_usuario, $Contrasena));

         $result = $stm -> fetchAll(PDO::FETCH_OBJ);

         if(empty($result)){
            echo '<script>
            alert("correo o contraseña incorrectos");
            window.location = "index.php?c=login";
            </script>';
            return false;
         }
         else{
            session_start();
            $_SESSION['Id_usuario'] = $result;
            var_dump($_SESSION['Id_usuario']);exit();
            echo '<script>
            alert("Bienvenidos");
            window.location = "menu.php";
            </script>';
            return true;
         }
    }
    //obtiene el usuario para el login
        public function obtenerUsuario($Correo_usuario, $Contrasena){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM usuario WHERE Correo_usuario=:Correo_usuario');//AND clave=:clave
            $select->bindValue('Correo_usuario',$Correo_usuario);
            $select->execute();
            $registro=$select->fetch(); 
            $usuario=new Usuario();
            //verifica si la clave es conrrecta
            if (password_verify($Contrasena, $registro['Contrasena'])) {              
                //si es correcta, asigna los valores que trae desde la base de datos
                $usuario->setCorreo_usuario($registro['Correo_usuario']);
                $usuario->setContrasena($registro['Contrasena']);
            }           
            return $usuario;
        }
    
}