<section class="row mt-12">
        <div class="card w-100 m-auto">
          <div class="card-body">
            <h1 style="color:black">Editar Sede</h1><br>
                <form action="?controlador=sede&method=editar" method="post">
                    <input type="hidden" name="Id_sede" value="<?php echo $pro->Id_sede; ?>" >
                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Sede</label>
                        <input type="number" style="border-color:gray;" name="Id_sede" value="<?php echo $sed->Id_sede; ?>" class="form-control" placeholder="Ingrese el Sede."  />
                    </div><br>

                    <div class="col-md-6 mb-3">
                        <label>Tipo de sede</label>
                        <input type="text" style="border-color:gray;" name="Tipo_sede" value="<?php echo $sed->Tipo_sede; ?>" class="form-control" placeholder="Ingrese la sede."  />
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" style="border-color:gray;" name="Direccion" value="<?php echo $sed->Direccion; ?>" class="form-control" placeholder="Ingrese la Direccion."/>
                    </div>
                    <div class="card-body text-right">
                        <a href="?controlador=Sede" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Actualizar</button>
                    </div>
            </form>         
        </div>
     </div>
 </section>
