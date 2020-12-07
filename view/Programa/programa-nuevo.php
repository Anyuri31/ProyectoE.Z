<script>
	$(document).ready(function(){
		function Validar() {
			//validar Nombre_programa 
			if(!$("#Nombre_programa").val()){
				$("#msg_Nombre_programa").text("Debe llenar el campo");
				$("#Nombre_programa").addClass("border border-danger");
			}else{
				$("#msg_Nombre_programa").text("");
				$("#Nombre_programa").removeClass("border border-danger");
			}
			//Validar fecha_inicio 
			if(!$("#fecha_inicio").val()){
				$("#msg_fecha_inicio").text("Debe llenar el campo");
				$("#fecha_inicio").addClass("border border-danger");
			}else{
				$("#msg_fecha_inicio").text("");
				$("#fecha_inicio").removeClass("border border-danger");
			}
			//Validar fecha_final
			if(!$("#fecha_final").val()){
				$("#msg_fecha_final").text("Debe llenar el campo");
				$("#fecha_final").addClass("border border-danger");
			}else{
				$("#msg_fecha_final").text("");
				$("#fecha_final").removeClass("border border-danger");
			}
			//validar dia_entre_semana
			if(!$("#dia_entre_semana").val()){
				$("#msg_dia_entre_semana").text("Debe llenar el campo");
				$("#dia_entre_semana").addClass("border border-danger");
			}else{
				$("#msg_dia_entre_semana").text("");
				$("#dia_entre_semana").removeClass("border border-danger");
			}
			//Validar fin_de_semana
			if(!$("#fin_de_semana").val()){
				$("#msg_fin_de_semana").text("Debe llenar el campo");
				$("#fin_de_semana").addClass("border border-danger");
			}else{
				$("#msg_fin_de_semana").text("");
				$("#fin_de_semana").removeClass("border border-danger");
			}
			//Validar id_estado
			if(!$("#id_estado").val()){
				$("#msg_id_estado").text("Debe llenar el campo");
				$("#id_estado").addClass("border border-danger");
			}else{
				$("#msg_id_estado").text("");
				$("#id_estado").removeClass("border border-danger");
			}
		}

		$("input[required], select[required]").blur(Validar);
		$(".btn").click(Validar);
	})
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
      	<h1 style="color:black">Agregar Programa</h1><br>
				<form action="?controlador=Programa&method=guardar" method="post" id="formulario">
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Nombre</label>
						<p data-tip="Maximo de 100 caracteres">
							<input id="Nombre_programa" type="text" style="border-color:gray;" name="Nombre_programa" class="form-control" placeholder="Ingrese el nombre del programa" maxlength="100">
						</p>
						<label id="msg_Nombre_programa" class="text-danger"></label>
					</div>

					<div class="col-md-6 mb-3">
						<label>Fecha Inicial</label>
						<input id="fecha_inicio" type="date" style="border-color:gray;" name="fecha_inicio" class="form-control" placeholder="Ingrese la fecha">
						<label id="msg_fecha_inicio" class="text-danger"></label>
					</div>
                </div>
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fecha Final</label>
						<input id="fecha_final" type="date" style="border-color:gray;" name="fecha_final" class="form-control" placeholder="Ingrese la fecha">
						<label id="msg_fecha_final" class="text-danger"></label>
					</div>
					
		             <div class="col-md-6 mb-3">
						<label>Dia entere semana</label>
						<input id="dia_entre_semana" type="text" style="border-color:gray;" name="dia_entre_semana" class="form-control" placeholder="Ingrese la fecha">
						<label id="msg_dia_entre_semana" class="text-danger"></label>
					</div>
                </div>
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fin de semana</label>
						<input id="fin_de_semana" type="text" style="border-color:gray;" name="fin_de_semana" class="form-control" placeholder="Ingrese la fecha">
						<label id="msg_fin_de_semana" class="text-danger"></label>
					</div>

					<div class="col-md-6 mb-3">
						<label>Estado</label>
						<input id="id_estado" type="number" style="border-color:gray;" name="id_estado" class="form-control" placeholder="Ingrese el estado">
						<label id="msg_id_estado" class="text-danger"></label>
					</div>
                </div>
					<div class="card-body text-right">
					   <a href="?controlador=Programa" class="btn btn-outline-danger">Cancelar</a>
                       <button class="btn btn-outline-info">Guardar</button>
                </div>
				</form>         
        </div>
    </div>
</section>