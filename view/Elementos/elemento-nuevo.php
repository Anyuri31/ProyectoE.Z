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
			//Validar Codigo_elemento
			if(!$("#Codigo_elemento").val()){
				$("#msg_Codigo_elemento").text("Debe llenar el campo");
				$("#Codigo_elemento").addClass("border border-danger");
			}else{
				$("#msg_Codigo_elemento").text("");
				$("#Codigo_elemento").removeClass("border border-danger");
			}
			//Validar Codigo_tipo_elemento
			if(!$("#Codigo_tipo_elemento").val()){
				$("#msg_Codigo_tipo_elemento").text("Debe llenar el campo");
				$("#Codigo_tipo_elemento").addClass("border border-danger");
			}else{
				$("#msg_Codigo_tipo_elemento").text("");
				$("#Codigo_tipo_elemento").removeClass("border border-danger");
			}
			//validar Nombre_elemento
			if(!$("#Nombre_elemento").val()){
				$("#msg_Nombre_elemento").text("Debe llenar el campo");
				$("#Nombre_elemento").addClass("border border-danger");
			}else{
				$("#msg_Nombre_elemento").text("");
				$("#Nombre_elemento").removeClass("border border-danger");
			}
			//Validar Referencia
			if(!$("#Referencia").val()){
				$("#msg_Referencia").text("Debe llenar el campo");
				$("#Referencia").addClass("border border-danger");
			}else{
				$("#msg_Referencia").text("");
				$("#Referencia").removeClass("border border-danger");
			}
			//Validar Descripcion_elemento
			if(!$("#Descripcion_elemento").val()){
				$("#msg_Descripcion_elemento").text("Debe llenar el campo");
				$("#Descripcion_elemento").addClass("border border-danger");
			}else{
				$("#msg_Descripcion_elemento").text("");
				$("#Descripcion_elemento").removeClass("border border-danger");
			}
		}

		$("input[required], select[required]").blur(Validar);
		$(".btn").click(Validar);
	})
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Agregar Elemento</h1><br>
				<form action="?controlador=elemento&method=guardar" method="post" id="formulario">

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Aula</label>
						<input id="Id_aula" type="number" style="border-color:gray;" name="Id_aula" class="form-control" placeholder="Ingrese el id del aula">
						<label id="msg_Id_aula" class="text-danger"></label>
					</div>

					<div class="col-md-6 mb-3">
					<label>Elemento</label>
						<input id="Codigo_elemento" type="number" style="border-color:gray;" name="Codigo_elemento" class="form-control" value="<?php echo $elemento->Codigo_elemento ?>" placeholder="Ingrese el id del elemento">
						<label id="msg_Codigo_elemento" class="text-danger"></label>
					</div>
					</div>
					<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Tipo</label>
						<input id="Codigo_tipo_elemento" type="number" style="border-color:gray;" name="Codigo_tipo_elemento" class="form-control" placeholder="Ingrese el tipo elemento">
						<label id="msg_Codigo_tipo_elemento" class="text-danger"></label>
					</div>	
                    <div class="col-md-6 mb-3">
						<label>Nombre </label>
						<p data-tip="Maximo de 50 caracteres">
							<input id="Nombre_elemento" type="text" style="border-color:gray;" name="Nombre_elemento" class="form-control" placeholder="Ingrese el nombre del elemento" maxlength="50" >
							<label id="msg_Nombre_elemento" class="text-danger"></label>
						</p>
					</div>
					</div>
					<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Referencia</label>
						<p data-tip="Maximo de 50 caracteres">
							<input id="Referencia" type="text" style="border-color:gray;" name="Referencia" class="form-control" placeholder="Ingrese la referencia" maxlength="50">
							<label id="msg_Referencia" class="text-danger"></label>
						</p>
					</div>
                
					<div class="col-md-6 mb-3">
						<label>Descripción</label>
						<p data-tip="Maximo de 50 caracteres">
							<textarea id="Descripcion_elemento" type="text" style="border-color:gray;" name="Descripcion_elemento" class="form-control" placeholder="Ingrese la Descripcion" maxlength="50"></textarea>
							<label id="msg_Descripcion_elemento" class="text-danger"></label>
						</p>
					</div>
					</div>
					<div class="card-body text-right">
						<a href="?controlador=elemento" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Guardar</button>
                    </div>
				</form>			
			</div>
		</div>
	</section>
</main>