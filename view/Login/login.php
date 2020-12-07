<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de inicio de sesión</title>
    <link rel="stylesheet" href="view/Login/css/stylelogin.css">

</head>
<body>
    <div class="full-box login-container cover">
        <form action="?controlador=login&method=login" method="POST" autocomplete="off" class="logInForm">
            <img src="images/1-Escudo.png" th:src="@{/img/user.png}"/>
            <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
            <p>Inicia sesión con tú cuenta</p>
            <div class="form-group label-floating">
              <label class="control-label" for="UserName">Correo Electronico</label>
              <input required="" class="form-control"  type="email" name="Correo_usuario"  placeholder="Escribe tú correo electronico">
            </div><br>
            <div class="form-group label-floating">
              <label class="control-label" for="UserPass">Contraseña</label>
              <input required="" class="form-control" id="UserPass" name="Contrasena" type="password" placeholder="Escribe tú contraseña">
            </div>
            <br>
            <?php echo $msg; ?>
            <br>
            <div class="form-group text-center">
                <button type="submit" class="submit">INGRESAR</button>
            </div><br>
        </form>
    </div>
</body>
</html> 
    