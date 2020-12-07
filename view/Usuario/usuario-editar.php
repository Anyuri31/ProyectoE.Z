<section class="row mt-12">
<div class="modal-body">
  <div class="container-fluid">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Usuarios</h1><br>
        <form action="?controlador=usuario&method=editar" method="post">
            <input type="hidden" name="Id_usuario" value="<?php echo $usu->Id_usuario; ?>" >
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Rol</label>
                    <input type="number" style="border-color:gray;" name="Id_rol" class="form-control" value="<?php echo $usu->Id_rol; ?>" placeholder="Ingrese el rol">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Correo usuario</label>
                    <input type="email" style="border-color:gray;" name="Correo_usuario" class="form-control" value="<?php echo $usu->Correo_usuario; ?>" placeholder="Ingrese el correo">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Nombres</label>
                    <input type="text" style="border-color:gray;" name="Nombres" class="form-control" value="<?php echo $usu->Nombres; ?>" placeholder="Ingrese el nombre completo">
                </div>

                 <div class="col-md-6 mb-3">
                    <label>Apellidos</label>
                    <input type="text" style="border-color:gray;" name="Apellidos" class="form-control" value="<?php echo $usu->Apellidos; ?>" placeholder="Ingrese los apellidos completo">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Tipo documento</label>
                    <select name="Tipo_documento" style="border-color:gray;" class="form-control">
                        <option value=""> Seleccione...</option>
                        <option value="1" <?php echo($usu->Tipo_documento == 1) ? 'selected' : '' ?> > Cedula ciudadania</option>
                        <option value="2" <?php echo($usu->Tipo_documento == 2) ? 'selected' : '' ?> > Cedula extranjera</option>                       
                    </select>
                </div>

               <div class="col-md-6 mb-3">
                    <label>Número documento</label>
                    <input type="number" style="border-color:gray;" name="Numero_documento" class="form-control" value="<?php echo $usu->Numero_documento; ?>" placeholder="Ingrese el Numero del documento ">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Número celular</label>
                    <input type="number" style="border-color:gray;" name="Tel_celular" class="form-control" value="<?php echo $usu->Tel_celular; ?>" placeholder="Ingrese el Número del celular ">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Número telefonico</label>
                    <input type="number" style="border-color:gray;" name="Telefono" class="form-control" value="<?php echo $usu->Telefono; ?>" placeholder="Ingrese el Número del telefono ">
                </div>
            </div>

            <div class="form-group">
                <label>Estado</label>
                <select name="id_estado" style="border-color:gray;" class="form-control" required="">
                    <option value="">Selecione un tipo</option>
                    <?php foreach ($tipos_est as $estado) { ?>
                        <option value="<?php echo $estado->id_tipo;  ?>" <?php echo($usu->id_estado == $estado->id_tipo) ? 'selected' : '' ?> ><?php echo $estado->Nombre;  ?> </option>
                    <?php } ?>
                </select>
            </div>
                
            <div class="card-body text-right">
                <a href="?controlador=Usuario" class="btn btn-outline-danger">cancelar</a>
                <button class="btn btn-outline-info">Actualizar</button>
            </div>
        </form>         
    </div>
    </div>
    </div>
    </div>
</section>
