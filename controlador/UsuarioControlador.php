<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'modelos/reserva.php';
require_once 'librerias/correo/autoload.php';

require_once 'modelos/usuario.php';

class UsuarioControlador{

    private $modelos;
    private $tipos_doc = array("CC" => "Cédula de Ciudadanía","CE" => "Cédula de Extranjería",);

    public function __CONSTRUCT(){
        $this->modelos = new Usuario();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $usuario = $this->modelos->Listar();
            $msg  = (isset($_SESSION['msg'])) ? 
            "<div class='alert alert-success alert-dismissible fade show'>
                {$_SESSION['msg']}
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>" : '';
            unset($_SESSION['msg']);
            require_once 'view/header.php';
            require_once 'view/Usuario/usuario.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }

    public function crud(){

        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipos_doc = $this->tipos_doc;
            $tipos_est = $this->modelos->Listar_estados();
            $usu = new Usuario();

            if(isset($_REQUEST['Id_usuario'])){
                $usu = $this->modelos->Obtener($_REQUEST['Id_usuario']);
            }
            require_once 'view/header.php';
            require_once 'view/Usuario/usuario-editar.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }

    public function nuevo(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $tipos_doc = $this->tipos_doc;
            $tipos_est = $this->modelos->Listar_estados();
            $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $cad="";
            for($i=0;$i<8;$i++){
                $cad .= substr($str,rand(0,62),1);    
            }
            $usu = new Usuario();
            require_once 'view/header.php';
            require_once 'view/Usuario/usuario-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }
    }

       public function guardar(){
        $usu = new Usuario();
        $usu->Id_rol = $_REQUEST['Id_rol'];
        $usu->Correo_usuario = $_REQUEST['Correo_usuario'];
        $usu->Contrasena =$_REQUEST['Contrasena'];
        $usu->Nombres= $_REQUEST['Nombres'];
        $usu->Apellidos= $_REQUEST['Apellidos'];
        $usu->Tipo_documento= $_REQUEST['Tipo_documento'];
        $usu->Numero_documento= $_REQUEST['Numero_documento'];
        $usu->Tel_celular= $_REQUEST['Tel_celular'];
        $usu->Telefono = $_REQUEST['Telefono'];
        $usu->id_estado = $_REQUEST['id_estado'];
        
        $this->modelos->Registrar($usu);
        $usu_correo = $usu->Correo_usuario;
         /* Enviar correo*/
         if($usu_correo != ""){
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 1;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = "correos.anyuri@gmail.com";
            $mail->Password = "anyuri1234";
            $mail->setFrom($usu_correo, 'Estanislao zuleta');
            $mail->addAddress($usu->Correo_usuario);
            $mail->Subject = 'Usuario Registrado!';
            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

            $mail->msgHTML("Hola {$usu->Nombres} {$usu->Apellidos}. <br>
                            Se ha creado su usuario con exito <br>
                            Bienvenido al sistema de reservas del colegio Estanislao Zuleta<br>
                            Correo: {$usu->Correo_usuario} <br>
                            Contraseña: {$usu->Contrasena}", __DIR__) . $usu_correo->Correo_usuario;
            $mail->AltBody = 'This is a plain-text message body';
            $mail->SMTPOptions = array(
                'ssl' => [
                    'verify_peer' => false,
                    'verify_depth' => false,
                    'allow_self_signed' => true,
                ],
            );
            $mensaje = "";
            if (!$mail->send()) {
                $mensaje =  "Mailer Error: " . $mail->ErrorInfo;
            }else{
                $mensaje = "Mensaje enviado a ".$usu->Correo_usuario;
            }

            //Section 2: IMAP
            //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
            //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
            //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
            //be useful if you are trying to get this working on a non-Gmail IMAP server.
            function save_mail($mail) {
                //You can change 'Sent Mail' to any other folder or tag
                $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
                //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
                $imapStream = imap_open($path, $mail->Username, $mail->Password);
                $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
                imap_close($imapStream);
                return $result;
            }
        }
        session_start();
        $_SESSION['msg'] = $mensaje;
        header('Location:?controlador=usuario');
    }
    public function editar(){
        $usu = new Usuario();

        $usu->Id_usuario = $_REQUEST['Id_usuario'];
        $usu->Id_rol = $_REQUEST['Id_rol'];
        $usu->Correo_usuario = $_REQUEST['Correo_usuario'];
        // $usu->Contrasena = $_REQUEST['Contrasena'];
        $usu->Nombres= $_REQUEST['Nombres'];
        $usu->Apellidos= $_REQUEST['Apellidos'];
        $usu->Tipo_documento= $_REQUEST['Tipo_documento'];
        $usu->Numero_documento= $_REQUEST['Numero_documento'];
        $usu->Tel_celular= $_REQUEST['Tel_celular'];
        $usu->Telefono = $_REQUEST['Telefono'];
        $usu->id_estado = $_REQUEST['id_estado'];

        $this->modelos->Actualizar($usu);

        header('Location:?controlador=usuario');
    }

    public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Id_usuario']);
       header('Location:?controlador=usuario');
    }
    public function consul(){
    require_once 'view/Usuario/header_1.php';
    require_once 'view/Usuario/usuario-consultar.php';
}
}
?>