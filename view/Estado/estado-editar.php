<section class="row mt-12">
        <div class="card w-100 m-auto">
          <div class="card-body">
            <h1 style="color:black">Editar Estado</h1><br>
                <form action="?controlador=estado&method=editar" method="post">
                    <input type="hidden" name="id_estado" value="<?php echo $estado->id_estado; ?>" >
                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Tipo</label>
                        <input type="number" style="border-color:gray;" name="id_tipo" value="<?php echo $estado->id_tipo; ?>" class="form-control" placeholder="Ingrese el tipo."/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Nombre</label>
                        <input type="text" style="border-color:gray;" name="Nombre" value="<?php echo $estado->Nombre; ?>" class="form-control" placeholder="Ingrese el nombre del estado ."  />
                    </div>
                    </div>
                    <div class="card-body text-right">
                        <a href="?controlador=estado" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Actualizar</button>
                    </div>
            </form>         
        </div>
     </div>
 </section>