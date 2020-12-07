<section class="row mt-12">
	<div class="card w-100 m-auto">
		<div class="card-body">
			<h1 style="color:black">Editar Novedad</h1><br>
				<form action="?controlador=novedad&method=editar" method="post">
					<input type="hidden" name="Id_novedad" value="<?php echo $nove->Id_novedad ?>" >
				<div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Novedad</label>
						<input type="number" style="border-color:gray;" name="Id_novedad" class="form-control" value="<?php echo $nove->Id_novedad; ?>" placeholder="Ingrese el id de la novedad">
					</div>
					
					<div class="col-md-6 mb-3">
						<label>Reserva</label>
						<input type="number" style="border-color:gray;" name="Id_reserva" class="form-control" value="<?php echo $nove->Id_reserva; ?>" placeholder="Ingrese el id de la reserva">
					</div>
				</div>	
					
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fecha</label>
						<input type="date" style="border-color:gray;" name="fecha" class="form-control" value="<?php echo $nove->fecha; ?>" placeholder="Ingrese la fecha">
					</div>
					<div class="col-md-6 mb-3">
						<label>Nombre</label>
						<input type="text" style="border-color:gray;" name="NombreNovedad" class="form-control" value="<?php echo $nove->NombreNovedad; ?>" placeholder="Ingrese el nombre">
					</div>
				</div>	
					<div class="form-group">
						<label>Tipo</label>
						<input type="number" style="border-color:gray;" name="Id_tipo" class="form-control" value="<?php echo $nove->Id_tipo; ?>" placeholder="Ingrese el tipo de novedad">
					</div>
					<div class="card-body text-right">
						<a href="?controlador=novedad" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Actualizar</button>
                    </div>
				</form>
			</div>			
		</div>
	</div>
</section>
