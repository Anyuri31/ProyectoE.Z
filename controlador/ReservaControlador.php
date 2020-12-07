<?php 
use PHPMailer\PHPMailer\PHPMailer;
require_once 'modelos/reserva.php';
require_once 'librerias/correo/autoload.php';

class ReservaControlador{

    private $modelos;
    public function __CONSTRUCT(){
        $this->modelos = new Reserva();
    }

    public function index(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $sesion = $_SESSION['usuario'];
            $rese   = $this->modelos->Listar();
            $aulas  = $this->modelos->Listar_aulas();
            $msg    = (isset($_SESSION['msg'])) ? 
            "<div class='alert alert-success alert-dismissible fade show'>
                {$_SESSION['msg']}
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>" : '';
            unset($_SESSION['msg']);
            require_once 'view/header.php';
            require_once 'view/Reserva/reserva.php';
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
            $rese = new Reserva();

            if(isset($_REQUEST['Id_reserva'])){
            $rese = $this->modelos->Obtener($_REQUEST['Id_reserva']);
            $aulas  = $this->modelos->Listar_aulas();
            $programa = $this->modelos->Listar_programa();
            }
            require_once 'view/header.php';
            require_once 'view/Reserva/reserva-editar.php';
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
            $rese = new Reserva();
            $aulas  = $this->modelos->Listar_aulas();
            $programa = $this->modelos->Listar_programa();
            require_once 'view/header.php';
            require_once 'view/Reserva/reserva-nuevo.php';
            require_once 'view/footer.php';
        }
        else {
            header('Location:?controlador=login');
        }   
    }

    public function consultar(){
        $reservas  = $this->modelos->Listar(); 
        echo json_encode($reservas);
    }

    public function guardar(){
        $rese = new Reserva();
        $rese->Id_usuario = $_REQUEST['Id_usuario'];
        $rese->Id_aula = $_REQUEST['Id_aula'];
        $rese->Codigo_programa = $_REQUEST['Codigo_programa'];
        $rese->Fecha_reserva= $_REQUEST['Fecha_reserva'];
        $rese->Hora_inicio= $_REQUEST['Hora_inicio'];
        $rese->Fecha_final= $_REQUEST['Fecha_final'];
        $rese->Hora_final= $_REQUEST['Hora_final'];
        $rese->Id_estado= $_REQUEST['id_estado'];

        if($rese->Fecha_final > $rese->Fecha_reserva){
        $this->modelos->Registrar($rese);
        $usu_correo = $this->modelos->con_usu($rese);
        $programa   = $this->modelos->con_programa($rese);
        $estado     = $this->modelos->con_estado($rese);
        /* Enviar correo*/
        if(isset($usu_correo->Correo_usuario) != ""){
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 1;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = "correos.anyuri@gmail.com";
            $mail->Password = "anyuri1234";
            $mail->setFrom($usu_correo->Correo_usuario, 'Estanislao zuleta');
            $mail->addAddress($usu_correo->Correo_usuario);
            $mail->Subject = 'Recordatorio de reserva!';
            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

            $mail->msgHTML("Hola {$usu_correo->Nombres} {$usu_correo->Apellidos} tu resrva esta solicitada para:<br><br><table border='1'><thead style='background-color:black;color:white;'><tr><th>Aula</th><th>Programa</th><th>Fecha/Hora Inicio</th><th>Fecha/Hora Fin</th><th>Estado</th></tr></thead><tbody><tr><td>{$rese->Id_aula}</td><td>{$programa->Nombre_programa}</td><td>{$rese->Fecha_reserva} {$rese->Hora_inicio}</td><td>{$rese->Fecha_final} {$rese->Hora_final}</td><td>{$estado->Nombre}</td></tbody></table>", __DIR__) . $usu_correo->Correo_usuario;
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
                $mensaje = "Mensaje enviado a ".$usu_correo->Correo_usuario;
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
        header('Location:?controlador=Reserva');
    }else{

        // header('Location:?controlador=Reserva&method=nuevo');
        echo '<script>
            alert("La fecha final no puede ser anterior a la fecha de reserva");
            window.location.href = "?controlador=Reserva&method=nuevo";
            </script>';

        } 

        
    }

    public function editar(){
        $rese = new Reserva();

        $rese->Id_reserva = $_REQUEST['Id_reserva'];
        $rese->Id_usuario = $_REQUEST['Id_usuario'];
        $rese->Id_aula= $_REQUEST['Id_aula'];
        $rese->Codigo_programa = $_REQUEST['Codigo_programa'];
        $rese->Fecha_reserva= $_REQUEST['Fecha_reserva'];
        $rese->Hora_inicio= $_REQUEST['Hora_inicio'];
        $rese->Fecha_final= $_REQUEST['Fecha_final'];
        $rese->Hora_final= $_REQUEST['Hora_final'];
        $rese->id_estado= $_REQUEST['id_estado'];

        $this->modelos->Actualizar($rese);
        header('Location:?controlador=reserva');
    }

     public function eliminar(){
        $this->modelos->Eliminar($_REQUEST['Id_reserva']);
       header('Location:?controlador=reserva');
    }
    public function consul(){
        require_once 'view/Reserva/header_10.php';
        require_once 'view/Reserva/Reserva-consultar.php';
    }
    
}


?>