<section class="row mt-12">
	<div class="card w-100 m-auto">
		<div class="card-body">
			<h1 style="color:black">Editar Reserva</h1><br>
				<form action="?controlador=reserva&method=editar" method="post">
					<input type="hidden" name="Id_reserva" value="<?php echo $rese->Id_reserva; ?>" >

					<div class="form-group">
						<label>Usuario</label>
						<input type="number" name="Id_usuario" value="<?php echo $rese->Id_usuario; ?>" class="form-control" placeholder="Ingrese el Usuario">
					</div>

					<div class="form-group">
						<label>Aula</label>
						<input type="number" name="Id_aula" value="<?php echo $rese->Id_aula; ?>" class="form-control" placeholder="Ingrese el Aula">
					</div>

		            <div class="form-group">
						<label>Codigo del Programa</label>
						<select class="form-control" name="Codigo_programa">
							<option value=""> --Seleccionar un programa-- </option>
							<?php foreach($programa as $prg){ ?>
								<option value="<?php echo $prg->Codigo_programa; ?>" <?php echo ($prg->Codigo_programa == $rese->Codigo_programa) ? 'selected' : '' ?>><?php echo $prg->Nombre_programa; ?></option>
							<?php } ?>
						</select>
					</div> 

				    <div class="form-group">
						<label>Fecha Reserva</label>
						<input type="date" name="Fecha_reserva" value="<?php echo $rese->Fecha_reserva; ?>" class="form-control" placeholder="Ingrese la Fecha de la Reserva">
					</div>

					<div class="form-group">
						<label>Hora Inicio</label>
						<input type="time" name="Hora_inicio" value="<?php echo $rese->Hora_inicio; ?>" class="form-control" placeholder="Ingrese la Hora de Inicio">
					</div>

					<div class="form-group">
						<label>Fecha Final</label>
						<input type="date" name="Fecha_final" value="<?php echo $rese->Fecha_final; ?>" class="form-control" placeholder="Ingrese la Fecha de Cierre">
					</div>

					<div class="form-group">
						<label>Hora Final</label>
						<input type="time" name="Hora_final" value="<?php echo $rese->Hora_final; ?>" class="form-control" placeholder="Ingrese la Hora de Cierre">
					</div>

					<div class="form-group">
                    <label>Estado</label>
                    <select name="id_estado" class="form-control" required="">
                        <option value="">Selecione un tipo</option>
                        <option value="1" <?php echo($rese->id_estado == 1) ? 'selected' : '' ?> >Activo </option>
                        <option value="2" <?php echo($rese->id_estado == 2) ? 'selected' : '' ?> >Inactivo </option>
                    </select>
                </div>

 
					<div class="card-body text-right">
						<a href="?controlador=reserva" class="btn btn-outline-danger">Cancelar</a>
						<button class="btn btn-outline-info">Actualizar</button>
					</div>
				</form>	
			</div>		
		</div>
	</div>
</section>
