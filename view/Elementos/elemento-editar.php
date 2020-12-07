<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Elemento</h1><br>
				<form action="?controlador=elemento&method=editar" method="post">
					<input type="hidden" name="Codigo_elemento" value="<?php echo $elemento->Codigo_elemento ?>" >
					<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Aula</label>
						<input type="number" style="border-color:gray;" name="Id_aula" class="form-control" value="<?php echo $elemento->Id_aula?>" placeholder="Ingrese el id del aula">
					</div>

                    <div class="col-md-6 mb-3">
					<label>Elemento</label>
						<input type="number" style="border-color:gray;" name="Codigo_elemento" class="form-control" value="<?php echo $elemento->Codigo_elemento ?>" placeholder="Ingrese el id del elemento">
					</div>
					</div>
					<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Tipo</label>
						<input type="number" style="border-color:gray;" name="Codigo_tipo_elemento" class="form-control" value="<?php echo $elemento->Codigo_tipo_elemento ?>" placeholder="Ingrese el tipo elemento">
					</div>

					<div class="col-md-6 mb-3">
						<label>Nombre </label>
						<input type="text" style="border-color:gray;" name="Nombre_elemento" class="form-control" value="<?php echo $elemento->Nombre_elemento ?>" placeholder="Ingrese el nombre del elemento">
					</div>
                    </div>
					<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Referencia</label>
						<input type="text" style="border-color:gray;" name="Referencia" class="form-control" value="<?php echo $elemento->Referencia ?>" placeholder="Ingrese la referencia">
					</div>

					<div class="col-md-6 mb-3">
						<label>Descripcion</label>
						<textarea type="text" style="border-color:gray;" name="Descripcion_elemento" class="form-control" value="<?php echo $elemento->Descripcion_elemento ?>" placeholder="Ingrese la Descripcion"></textarea>
					</div>
					</div>
					<div class="card-body text-right">
						<a href="?controlador=Elemento" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Actualizar</button>
                    </div>
				</form>			
			</div>
		</div>
	</section>
</main>