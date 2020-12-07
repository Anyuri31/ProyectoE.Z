<section class="row mt-12"> 
<div class="modal-body">
  <div class="container-fluid">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Perfil</h1><br>
        <form action="?controlador=usuario&method=editar" method="post">
            <input type="hidden" name="Id_usuario" value="<?php echo $per->Id_usuario; ?>" >
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Correo usuario</label>
                    <input type="email" style="border-color:gray;" name="Correo_usuario" class="form-control" value="<?php echo $per->Correo_usuario; ?>" placeholder="Ingrese el correo">
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Número celular</label>
                    <input type="number" style="border-color:gray;" name="Tel_celular" class="form-control" value="<?php echo $per->Tel_celular; ?>" placeholder="Ingrese el Número del celular ">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Número telefonico</label>
                    <input type="number" style="border-color:gray;" name="Telefono" class="form-control" value="<?php echo $per->Telefono; ?>" placeholder="Ingrese el Número del telefono ">
                </div>
            </div>
                <div class="col-md-6 mb-3">
                    <label>Contraseña</label>
                    <input type="text" style="border-color:gray;" name="Contrasena" class="form-control" value="<?php echo $per->Contrasena; ?>" placeholder="Ingrese su nueva contraseña">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Contraseña nueva</label>
                    <input type="text" style="border-color:gray;" name="Contrasena" class="form-control" placeholder="Ingrese su nueva contraseña">
                </div>
            </div>              
            <div class="card-body text-right">
                <a href="?controlador=vista" class="btn btn-outline-danger">cancelar</a>
                <button class="btn btn-outline-info">Actualizar</button>
            </div>
        </form>         
    </div>
    </div>
    </div>
    </div>
</section>
<?php
require_once "view/header.php";
require_once "view/footer.php";
?>
