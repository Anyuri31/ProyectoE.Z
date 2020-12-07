 <?php

class Login
{
    private $pdo;
    //metodo constructor
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
    //como llegan todos los datos lo llamamos data
    public function validateUsuario($data)
    {

        try {
            //consulta para validar si el usuario existe o no
            //vamos a traer el estado actual email
            $sql = $this->pdo->prepare("SELECT *, r.Tipo_rol FROM usuario u LEFT JOIN rol r on u.Id_rol = r.Id_rol WHERE u.Correo_usuario = ? and u.Contrasena = ?");
            //se ejecuta la consulta   se pasa como parametro la consulta
            $sql->execute(array($data["Correo_usuario"],$data["Contrasena"]));
            $query = $sql -> fetchAll(PDO::FETCH_OBJ);
            //validacion
            //si existe el id 
            if(isset($query[0]->Id_usuario)) {
             if ($query[0]->id_estado == 1){
                session_start();
                $_SESSION['usuario'] = $query[0];
                return true;
                }else{
                    return " Usuario ya existe";
                }
                //se crea el atributo user y me guarda todo el objeto 
            }else{
                return  "Verifique su Usuario o Contraseña";
            } //si es falso reorna error
        
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }
    
} 