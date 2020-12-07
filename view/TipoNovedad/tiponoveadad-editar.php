<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Tipos de Novedades</h1><br>
				<form action="?controlador=tiponovedad&method=editar" method="post">
					<input type="hidden" name="Id_tipo" value="<?php echo $tiponovedad->Id_tipo ?> ?>" >

					<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Tipo</label>
						<input type="number" style="border-color:gray;" name="Id_tipo" class="form-control" placeholder="Ingrese el id" value="<?php echo $tiponovedad->Id_tipo ?>">
					</div>


					<div class="col-md-6 mb-3">
						<label>Nombre tipo</label>
						<input type="text" style="border-color:gray;" name="Nombre_tipo" class="form-control" placeholder="Ingrese un tipo de novedad" value="<?php echo $tiponovedad->Nombre_tipo ?>">
					</div>
                    </div>
					<div class="form-group text-right">
						<a href="?controlador=tiponovedad" class="btn btn-outline-danger">Cancelar</a>
						<button class="btn btn-outline-info">Actualizar</button>
					</div>
				</form>			
			</div>
		</div>
	</section>
</main>