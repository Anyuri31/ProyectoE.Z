<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
            <h1 style="color:black">Editar Tipos de Elementos</h1><br>
                <form action="?controlador=tipoElemento&method=editar" method="post">
                   <input type="hidden" name="Codigo_tipo_elemento"  value="<?php echo $tipEl->Codigo_tipo_elemento;?>" >
               <div class="form-row">
              <div class="col-md-6 mb-3">
                <label>Tipo Elemento</label>
                   <input type="number" style="border-color:gray;" name="Codigo_tipo_elemento" value="<?php echo $tipEl->Codigo_tipo_elemento; ?>" class="form-control" placeholder="Ingrese el codigo del tipo .">
            </div>

            <div class="col-md-6 mb-3">
                <label>Nombre del tipo</label>
                   <input type="text" style="border-color:gray;" name="Nombre_tipo_elemento" value="<?php echo $tipEl->Nombre_tipo_elemento; ?>" class="form-control" placeholder="Ingrese el nombre.">
            </div>
            </div>
                  <div class="card-body text-right">
                    <a href="?controlador=tipoelemento" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Actualizar</button>
                  </div>
            </form>         
        </div>
    </div>
</section>