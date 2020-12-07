<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro</title>

    <link rel="stylesheet" href="js/bootstrap.min.css">

    <link rel="stylesheet" href="js/main.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="sign-up-content">
               <img src="images/1-Escudo.png" th:src="@{/img/user.png}"/>
                <h1>Regístrate</h1>
                <form method="POST" class="signup-form">

                    <div class="col-5">

                    <div class="form-textbox">
                        <label for="name">Nombres</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese sus Nombres"/>
                    </div>

                    <div class="form-textbox">
                        <label for="last name">Apellidos</label>
                        <input type="text" name="last name" id="last name" placeholder="Ingrese sus Apellidos"/>
                    </div>

                     <p>Tipo Documento</p><select class="form-textbox">
                        <option>Selecciona una opción</option>
                        <option>Cedula de Ciudadania</option>
                        <option>Cedula Extranjera</option>
                    </select><br>

                    <div class="form-textbox">
                      <label for="pass">Documeneto</label>
                        <input type="number" name="pass" id="pass" placeholder="Ingrese su Número de Documeneto" />
                    </div>

                    <div class="col-5" >

                    <div class="form-textbox">
                       <label for="pass">Telefonico</label>
                        <input type="number" name="pass" id="pass" placeholder="Ingrese su Número de Telefono" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Email</label>
                        <input type="email" name="pass" id="pass" placeholder="Ingrese su Email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Confirmar Email</label>
                        <input type="email" name="email" id="pass" placeholder="Confirme su Email"/>
                    </div>

                     <div class="form-textbox">
                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Ingrese su Contraseña" />
                    </div>

                     <div class="form-textbox">
                        <label for="pass">Confirmar Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Confirme su Contraseña" />
                    </div>
                    

                     <p>Rol</p><select class="form-textbox">
                        <option>Selecciona una opción</option>
                        <option>Rector</option>
                        <option>Cordinador(a)</option>
                        <option>Profesor(a)</option>
                    </select><br>

                    <div class="form-textbox">
                        <label for="pass">Asignatura</label>
                        <input type="text" name="pass" id="pass" placeholder="Ingrese su Asignatura"/>
                    </div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto todas las declaraciones en  <a href="#" class="term-service">los Términos de servicio</a></label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Crear una cuenta" />
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/popper.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>