<script>
	$(document).ready(function(){
		function Validar() {
			//validar Id_aula 
			if(!$("#Id_aula").val()){
				$("#msg_Id_aula").text("Debe llenar el campo");
				$("#Id_aula").addClass("border border-danger");
			}else{
				$("#msg_Id_aula").text("");
				$("#Id_aula").removeClass("border border-danger");
			}
			//Validar fecha
			if(!$("#fecha").val()){
				$("#msg_fecha").text("Debe llenar el campo");
				$("#fecha").addClass("border border-danger");
			}else{
				$("#msg_fecha").text("");
				$("#fecha").removeClass("border border-danger");
			}
			//Validar Hora_inicio
			if(!$("#Hora_inicio").val()){
				$("#msg_Hora_inicio").text("Debe llenar el campo");
				$("#Hora_inicio").addClass("border border-danger");
			}else{
				$("#msg_Hora_inicio").text("");
				$("#Hora_inicio").removeClass("border border-danger");
			}
			//validar Fecha_final
			if(!$("#Fecha_final").val()){
				$("#msg_Fecha_final").text("Debe llenar el campo");
				$("#Fecha_final").addClass("border border-danger");
			}else{
				$("#msg_Fecha_final").text("");
				$("#Fecha_final").removeClass("border border-danger");
			}
			//Validar Hora_final
			if(!$("#Hora_final").val()){
				$("#msg_Hora_final").text("Debe llenar el campo");
				$("#Hora_final").addClass("border border-danger");
			}else{
				$("#msg_Hora_final").text("");
				$("#Hora_final").removeClass("border border-danger");
			}
			//Validar Programa
			if(!$("#Programa").val()){
				$("#msg_Programa").text("Debe llenar el campo");
				$("#Programa").addClass("border border-danger");
			}else{
				$("#msg_Programa").text("");
				$("#Programa").removeClass("border border-danger");
			}
			//validar Estado 
			if(!$("#Estado").val()){
				$("#msg_Estado").text("Debe llenar el campo");
				$("#Estado").addClass("border border-danger");
			}else{
				$("#msg_Estado").text("");
				$("#Estado").removeClass("border border-danger");
			}
		}

		$("input[required], select[required]").blur(Validar);
		$(".btn").click(Validar);
	})
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
			<div class="card-body">
				<h1 style="color:black">Agregar Reserva</h1><br>
			<form action="?controlador=reserva&method=guardar" method="post" id="formulario">
				
			<div class="form-row">
                <div class="col-md-6 mb-3">
					<label>Usuario</label>
					<input name="Id_usuario" value="<?php echo  $sesion->Id_usuario; ?>" hidden readonly >
					<input class="form-control" style="cursor:no-drop;" placeholder="Ingrese el Usuario" value='<?php echo "{$sesion->Nombres} {$sesion->Apellidos}"; ?>' disabled>
				</div>

				<div class="col-md-6 mb-3">
					<label>Aula</label>
					<select id="Id_aula" style="border-color:gray;" name="Id_aula"  class="form-control" id="Id_aula" required>
						<option value="">--Seleccionar--</option>
						<?php foreach ($aulas as $aul) { ?>
							<option value="<?php echo $aul->Id_aula; ?>"><?php echo $aul->Nombre_aula; ?></option>
						<?php } ?>						
					</select>
					<label id="msg_Id_aula" class="text-danger"></label>
				</div>
			</div>

			<div class="form-row">
                <div class="col-md-6 mb-3">
						<label>Fecha Reserva</label>
						<input id="fecha" type="date" style="border-color:gray;" id="fecha" name="Fecha_reserva"  class="form-control" placeholder="Ingrese la Fecha de la Reserva" required value="<?php echo $rese->Fecha_reserva; ?>">
						<label id="msg_fecha" class="text-danger"></label>
					</div>

					<div class="col-md-6 mb-3">
						<label>Hora Inicio</label>
						<input id="Hora_inicio" required="" style="border-color:gray;" type="time" min="6:00"  max="18:00"   name="Hora_inicio" class="form-control" placeholder="Ingrese la Hora de Inicio" id="Hora_inicio">
						<label id="msg_Hora_inicio" class="text-danger"></label>
					</div>
			</div>		

			<div class="form-row">
                <div class="col-md-6 mb-3">
						<label>Fecha Final</label>
						<input id="Fecha_final" type="date" style="border-color:gray;" id="fecha1" name="Fecha_final"  class="form-control" placeholder="Ingrese la Fecha de Cierre" required="">
						<label id="msg_Fecha_final" class="text-danger"></label>
					</div>

					<div class="col-md-6 mb-3">
						<label>Hora Final</label>
						<input id="Hora_final" required="" style="border-color:gray;" type="time" min="6:00"  max="18:00" name="Hora_final"  class="form-control" placeholder="Ingrese la Hora de Cierre" id="Hora_final">
						<label id="msg_Hora_final" class="text-danger"></label>
					</div>
				</div>	

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Programa</label>
						<select id="Programa" style="border-color:gray;" name="Codigo_programa" class="form-control" required>
						<option value="">--Seleccionar--</option>
						<?php foreach ($programa as $prg) { ?>
							<option value="<?php echo $prg->Codigo_programa; ?>"><?php echo $prg->Nombre_programa; ?></option>
						<?php } ?>						
						</select>
						<label id="msg_Programa" class="text-danger"></label>
					</div> 

					<div class="col-md-6 mb-3">
	                    <label>Estado</label>
		                    <select id="Estado" name="id_estado" style="border-color:gray;" class="form-control" required="">
		                        <option value="">Selecione un tipo</option>
		                        <option value="1">Activo </option>
		                        <option value="2">Inactivo </option>
		                    </select>
		                    <label id="msg_Estado" class="text-danger"></label>
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
	<script src="assets/js/reserva.js?version=<?php echo uniqid(); ?>"></script>
	
</section>