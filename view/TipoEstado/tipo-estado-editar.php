<section class="row mt-12">
    <div class="card w-100 m-auto">
        <div class="card-body">
            <h1 style="color:black">Editar El Tipo de Estado</h1><br>
                <form action="?controlador=tipoEstado&method=editar" method="post">
                    <input type="hidden" name="id_tipo" value="<?php echo $pro->id_tipo; ?>" >
                    <div class="form-row">
                <div class="col-md-6 mb-3">
                        <label>Estado</label>
                        <input type="number" style="border-color:gray;" name="id_tipo" value="<?php echo $tipoEstado->id_tipo; ?>" class="form-control" placeholder="Ingrese el tipo."  />
                    </div><br>
                    <div class="col-md-6 mb-3">
                        <label>Nombre del tipo</label>
                        <input type="text" style="border-color:gray;" name="Nombre" value="<?php echo $tipoEstado->Nombre; ?>" class="form-control" placeholder="Ingrese el nombre."  />
                    </div>
                </div>    
                    <div class="card-body text-right">
                        <a href="?controlador=tipoEstado" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Actualizar</button>
                    </div>
                </form>
            </div>         
        </div>
    </div>
</section>