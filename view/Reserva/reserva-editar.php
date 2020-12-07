<section class="row mt-12">
	<div class="card w-100 m-auto">
		<div class="card-body">
			<h1 style="color:black">Editar Reserva</h1><br>
				<form action="?controlador=reserva&method=editar" method="post" id="formulario">
					<input type="hidden" name="Id_reserva" value="<?php echo $rese->Id_reserva; ?>" >
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Usuario</label>
						<input name="Id_usuario" value="<?php echo  $sesion->Id_usuario; ?>" hidden readonly >
						<input class="form-control" placeholder="Ingrese el Usuario" value='<?php echo "{$sesion->Nombres} {$sesion->Apellidos}"; ?>' disabled>
					</div>

					<div class="col-md-6 mb-3">
						<label>Aula</label>
						<select style="border-color:gray;" name="Id_aula"  class="form-control" id="Id_aula" required>
							<option value="">--Seleccionar--</option>
							<?php foreach ($aulas as $aul) { ?>
								<option value="<?php echo $aul->Id_aula; ?>" <?php echo ($aul->Id_aula == $rese->Id_aula) ? 'selected' : '' ?> ><?php echo $aul->Nombre_aula; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>	

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fecha Reserva</label>
						<input type="date" style="border-color:gray;" id="fecha" name="Fecha_reserva" value="<?php echo $rese->Fecha_reserva; ?>" class="form-control" placeholder="Ingrese la Fecha de la Reserva" required>
					</div>

					<div class="col-md-6 mb-3">
						<label>Hora Inicio</label>
						<input type="time" style="border-color:gray;" name="Hora_inicio" value="<?php echo $rese->H_inicio; ?>" class="form-control" min="6:00"  max="18:00" placeholder="Ingrese la Hora de Inicio" id="Hora_inicio" required>
					</div>
				</div>	

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fecha Final</label>
						<input type="date" style="border-color:gray;" id="fecha1" name="Fecha_final" value="<?php echo $rese->Fecha_final; ?>" class="form-control" placeholder="Ingrese la Fecha de Cierre">
					</div>

					<div class="col-md-6 mb-3">
						<label>Hora Final</label>
						<input type="time" style="border-color:gray;" id="Hora_final" name="Hora_final" value="<?php echo $rese->H_final; ?>" min="6:00"  max="18:00" class="form-control" placeholder="Ingrese la Hora de Cierre" required>
					</div>
				</div>	

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Codigo del Programa</label>
						<select class="form-control" style="border-color:gray;" name="Codigo_programa">
							<option value=""> --Seleccionar un programa-- </option>
							<?php foreach($programa as $prg){ ?>
								<option value="<?php echo $prg->Codigo_programa; ?>" <?php echo ($prg->Codigo_programa == $rese->Codigo_programa) ? 'selected' : '' ?>><?php echo $prg->Nombre_programa; ?></option>
							<?php } ?>
						</select>
					</div> 

					<div class="col-md-6 mb-3">
                    <label>Estado</label>
                    <select name="id_estado" style="border-color:gray;" class="form-control" required="">
                        <option value="">Selecione un tipo</option>
                        <option value="1" <?php echo($rese->id_estado == 1) ? 'selected' : '' ?> >Activo </option>
                        <option value="2" <?php echo($rese->id_estado == 2) ? 'selected' : '' ?> >Inactivo </option>
                    </select>
                </div>
			</div>	

 
					<div class="card-body row">
						<div class="col-md-8">
							<div class="alert alert-warning" role="alert" hidden id="mensaje">
							</div>
						</div>
						<div class="col-md-4 text-right">
							<a href="?controlador=reserva" class="btn btn-outline-danger">Cancelar</a>
							<button id="guardar" class="btn btn-outline-info">Guardar</button>
						</div>
					</div>
				</form>	
			</div>		
		</div>
	</div>
	<script src="assets/js/reserva.js?version=<?php echo uniqid(); ?>"></script>
</section>
