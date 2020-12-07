<script>
	$(document).ready(function(){
		function Validar() {
			//validar Nombre_aula 
			if(!$("#Nombre_aula").val()){
				$("#msg_Nombre_aula").text("Debe llenar el campo");
				$("#Nombre_aula").addClass("border border-danger");
			}else{
				$("#msg_Nombre_aula").text("");
				$("#Nombre_aula").removeClass("border border-danger");
			}
			//Validar Cantidad_personas 
			if(!$("#Cantidad_personas").val()){
				$("#msg_Cantidad_personas").text("Debe llenar el campo");
				$("#Cantidad_personas").addClass("border border-danger");
			}else{
				$("#msg_Cantidad_personas").text("");
				$("#Cantidad_personas").removeClass("border border-danger");
			}
			//Validar Descripcion
			if(!$("#Descripcion").val()){
				$("#msg_Descripcion").text("Debe llenar el campo");
				$("#Descripcion").addClass("border border-danger");
			}else{
				$("#msg_Descripcion").text("");
				$("#Descripcion").removeClass("border border-danger");
			}
			//validar Id_sede
			if(!$("#Id_sede").val()){
				$("#msg_Id_sede").text("Debe llenar el campo");
				$("#Id_sede").addClass("border border-danger");
			}else{
				$("#msg_Id_sede").text("");
				$("#Id_sede").removeClass("border border-danger");
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
      	<h1 style="color:black">Agregar Aulas</h1><br>
			<form action="?controlador=aula&method=guardar" method="post" id="formulario">

			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label>Nombre del aula</label>
					<p data-tip="Maximo de 50 caracteres">
						<input id="Nombre_aula" type="text" style="border-color:gray;" name="Nombre_aula" class="form-control" placeholder="Ingrese nombre del aula" maxlength="50" value="<?php echo $aula->Nombre_aula ?>">
						<label id="msg_Nombre_aula" class="text-danger"></label>
					</p>
				</div>
                <div class="col-md-6 mb-3">
					<label>Cantidad de personas</label>
					<input id="Cantidad_personas" type="number" style="border-color:gray;" name="Cantidad_personas" class="form-control" placeholder="Ingrese cantidad de personas" value="<?php echo $aula->Cantidad_personas ?>">
					<label id="msg_Cantidad_personas" class="text-danger"></label>
				</div>

				<div class="col-md-6 mb-3">
					<label>Descripcion</label>
					<p data-tip="Maximo de 150 caracteres">
						<input id="Descripcion" type="text" style="border-color:gray;" name="Descripcion" class="form-control" placeholder="Ingrese una Descripcion " maxlength="150" value="<?php echo $aula->Descripcion ?>">
						<label id="msg_Descripcion" class="text-danger"></label>
					</p>
				</div>

                <div class="col-md-6 mb-3">
					<label>Sede</label>
					<input id="Id_sede" type="number" style="border-color:gray;" name="Id_sede" class="form-control" placeholder="Ingrese la sede " value="<?php echo $aula->Id_sede ?>">
					<label id="msg_Id_sede" class="text-danger"></label>
				</div>  

				<div class="col-md-6 mb-3">
					<label>Estado</label>
					<input id="id_estado" type="number" style="border-color:gray;" name="id_estado" class="form-control" placeholder="Ingrese el estado " value="<?php echo $aula->id_estado ?>">
					<label id="msg_id_estado" class="text-danger"></label>
				</div>  
			</div>	  
				<div class="card-body text-right">
					<a href="?controlador=Aula" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>
			</form>			
		</div>
	</div>
</section>