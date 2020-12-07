<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de cambio de Contraseña</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="full-box login-container cover">
        <form action="?controlador=login&method=login" method="POST" autocomplete="off" class="logInForm">
            <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
            <h2>Cambiar contraseña</h2>

            <div class="form-group label-floating">
              <label class="control-label" for="UserName">Contraseña Actual</label>
              <input required="" class="form-control" id="UserPass" name="Contrasena" type="password" placeholder="Escribe tú contraseña">
            </div><br>
            <div class="form-group label-floating">
              <label class="control-label" for="UserName">Nueva Contraseña</label>
              <input required="" class="form-control" id="UserPass" name="Contrasena" type="password" placeholder="Escribe tú contraseña">
            </div><br>
            <div class="form-group label-floating">
              <label class="control-label" for="UserPass">Verificar Contraseña</label>
              <input required="" class="form-control" id="UserPass" name="Contrasena" type="password" placeholder="Escribe tú contraseña">
            </div><br><br>
            <div class="form-group text-center">
            
                <button type="submit" class="submit">Cambiar</button>
            </div><br>
        </form>
    </div>
</body>
</html> 
    