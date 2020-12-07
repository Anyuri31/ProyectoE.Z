<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Detalle Novedad</h1><br>
            <form action="?controlador=detalleNovedad&method=editar" method="post">
                <input type="hidden" name="Id_novedad" value="<?php echo $detNov->Id_novedad; ?>" />
                
                <div class="form-row">
                <div class="col-md-6 mb-3">
                <label>Codigo de la novedad</label>
                    <input type="number" style="border-color:gray;" name="Id_novedad"  value="<?php echo $detnov->Id_novedad; ?>" class="form-control" placeholder="Ingrese el Codigo de la novedad." required data-validacion-tipo="requerido|min:100" />
                </div>

                <div class="col-md-6 mb-3">
                    <label>Codigo del elemento</label>
                    <input type="number" style="border-color:gray;" name="Codigo_elemento"  value="<?php echo $detnov->Codigo_elemento; ?>" class="form-control" placeholder="Ingrese el codigo del elemento." required data-validacion-tipo="requerido|min:100" />
                </div>
                </div>
                <div class="form-group">
                    <label>Descripcion de la novedad del elemento</label>
                    <textarea type="text" style="border-color:gray;" name="Descripcion_nov_elemento" value="<?php echo $detnov->Descripcion_nov_elemento; ?>" class="form-control" placeholder="Ingrese la descripcion." required data-validacion-tipo="requerido|min:100" ></textarea>
                </div>
    
                 <div class="card-body text-right">
                    <a href="?controlador=detallenovedad" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
 </section>



