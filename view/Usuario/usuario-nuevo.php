<script>
    $(document).ready(function(){
        function Validar() {
            //Validar Id_rol
            if(!$("#Id_rol").val()){
                $("#msg_Id_rol").text("Debe llenar el campo");
                $("#Id_rol").addClass("border border-danger");
            }else{
                $("#msg_Id_rol").text("");
                $("#Id_rol").removeClass("border border-danger");
            }
            //validar correo usuario
            if(!$("#Correo_usuario").val()){
                $("#msg_Correo_usuario").text("Debe llenar el campo");
                $("#Correo_usuario").addClass("border border-danger");
            }else{
                $("#msg_Correo_usuario").text("");
                $("#Correo_usuario").removeClass("border border-danger");
            }
            // Validar nombre
            if(!$("#Nombres").val()){
                $("#msg_Nombres").text("Debe llenar el campo");
                $("#Nombres").addClass("border border-danger");
            }else{
                $("#msg_Nombres").text("");
                $("#Nombres").removeClass("border border-danger");
            }
            // Validar apellido
            if(!$("#Apellidos").val()){
                $("#msg_Apellidos").text("Debe llenar el campo");
                $("#Apellidos").addClass("border border-danger");
            }else{
                $("#msg_Apellidos").text("");
                $("#Apellidos").removeClass("border border-danger");
            }
            //Validar tipo documento
            if(!$("#Tipo_documento").val()){
                $("#msg_Tipo_documento").text("Debe llenar el campo");
                $("#Tipo_documento").addClass("border border-danger");
            }else{
                $("#msg_Tipo_documento").text("");
                $("#Tipo_documento").removeClass("border border-danger");
            }
            //validar Numero_documento
            if(!$("#Numero_documento").val()){
                $("#msg_Numero_documento").text("Debe llenar el campo");
                $("#Numero_documento").addClass("border border-danger");
            }else{
                $("#msg_Numero_documento").text("");
                $("#Numero_documento").removeClass("border border-danger");
            }
            // Validar Tel_celular
            if(!$("#Tel_celular").val()){
                $("#msg_Tel_celular").text("Debe llenar el campo");
                $("#Tel_celular").addClass("border border-danger");
            }else{
                $("#msg_Tel_celular").text("");
                $("#Tel_celular").removeClass("border border-danger");
            }
            // Validar Telefono
            if(!$("#Telefono").val()){
                $("#msg_Telefono").text("Debe llenar el campo");
                $("#Telefono").addClass("border border-danger");
            }else{
                $("#msg_Telefono").text("");
                $("#Telefono").removeClass("border border-danger");
            }
            // Validar id_estado
            if(!$("#id_estado").val()){
                $("#msg_id_estado").text("Debe llenar el campo");
                $("#id_estado").addClass("border border-danger");
            }else{
                $("#msg_id_estado").text("");
                $("#id_estado").removeClass("border border-danger");
            }
        }

        $("input[required], select[required]").blur(Validar);
        $(".btn").click(Validar);
    })
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body ">
        <h1 style="color:black">Agregar Usuarios</h1><br>
        <form action="?controlador=usuario&method=guardar" method="post" id="formulario">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Rol</label>
                    <input id="Id_rol" type="number" style="border-color:gray;" name="Id_rol" class="form-control" placeholder="Ingrese el rol" required="">
                    <label id="msg_Id_rol" class="text-danger"></label>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Correo usuario</label>
                    <p data-tip="Maximo de 100 caracteres">
                        <input id="Correo_usuario" type="email" style="border-color:gray;" name="Correo_usuario" class="form-control" placeholder="Ingrese el correo" maxlength="100" required="">
                        <label id="msg_Correo_usuario" class="text-danger"></label>
                    </p>
                </div>
            </div>
            <div class="form-row">
                 <div class="col-md-6 mb-3">
                    <label >Nombres</label>
                    <p data-tip="Maximo de 50 caracteres">
                        <input id="Nombres" type="text" style="border-color:gray;" name="Nombres" class="form-control" placeholder="Ingrese el nombre completo" maxlength="50" required="">
                        <label id="msg_Nombres" class="text-danger"></label>
                    </p>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label>Apellidos</label>
                    <p data-tip="Maximo de 50 caracteres">
                        <input id="Apellidos" type="text" style="border-color:gray;" name="Apellidos" class="form-control" placeholder="Ingrese los apellidos completo" maxlength="50" required="">
                        <label id="msg_Apellidos" class="text-danger"></label>
                    </p>
                </div>


               <div class="col-md-6 mb-3">
                    <label>Tipo documento</label>
                    <select id="Tipo_documento" name="Tipo_documento" style="border-color:gray;" class="form-control" required="">
                        <option value=""> Seleccione un tipo</option>
                        <option value="1"> Cedula ciudadania</option>
                        <option value="2"> Cedula extranjera</option>                       
                    </select>
                    <label id="msg_Tipo_documento" class="text-danger"></label>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Número documento</label>
                    <input id="Numero_documento" type="number" style="border-color:gray;" name="Numero_documento" class="form-control" placeholder="Ingrese el Numero del documento " required="">
                    <label id="msg_Numero_documento" class="text-danger"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Número celular</label>
                    <p data-tip="Maximo de 10 caracteres">
                        <input id="Tel_celular" type="number" style="border-color:gray;" name="Tel_celular" class="form-control" placeholder="Ingrese el Número del celular " required="">
                        <label id="msg_Tel_celular" class="text-danger"></label>
                    </p>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Número telefonico</label>
                    <p data-tip="Maximo de 10 caracteres">
                        <input id="Telefono" type="number" style="border-color:gray;" name="Telefono" class="form-control" placeholder="Ingrese el Número del telefono " required="">
                        <label id="msg_Telefono" class="text-danger"></label>
                    </p>
                </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
                    <label>Estado</label>
                    <select id="id_estado" name="id_estado" style="border-color:gray;" class="form-control" required="">
                        <option value="">Selecione un tipo</option>
                        <?php foreach ($tipos_est as $estado) { ?>
                            <option value="<?php echo $estado->id_tipo;  ?>"><?php echo $estado->Nombre;  ?> </option>
                        <?php } ?>
                    </select>
                    <label id="msg_id_estado" class="text-danger"></label>
                </div>
            <div class="col-md-6 mb-3">
                <label >Contraseña</label>
                <input type="password" value="<?php echo $cad; ?>" style="border-color:gray;" name="Contrasena" class="form-control" readonly >    
            </div>
                

                <div class="card-body text-right">
                    <a href="?controlador=Usuario" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>
            </form>         
        </div>
    </div>
</section>

