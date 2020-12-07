<script>
	$(document).ready(function(){
		function Validar() {
			//validar tipo rol
			if(!$("#Tipo_rol").val()){
				$("#msg_rol").text("Debe llenar el campo");
				$("#Tipo_rol").addClass("border border-danger");
			}else{
				$("#msg_rol").text("");
				$("#Tipo_rol").removeClass("border border-danger");
			}
			//Validar Estado
			if(!$("#id_estado").val()){
				$("#msg_estado").text("Debe llenar el campo");
				$("#id_estado").addClass("border border-danger");
			}else{
				$("#msg_estado").text("");
				$("#id_estado").removeClass("border border-danger");
			}
			//Validar Id_rol
			if(!$("#Id_rol").val()){
				$("#msg_Id_rol").text("Debe llenar el campo");
				$("#Id_rol").addClass("border border-danger");
			}else{
				$("#msg_Id_rol").text("");
				$("#Id_rol").removeClass("border border-danger");
			}
		}

		$("input[required], select[required]").blur(Validar);
		$(".btn").click(Validar);
	})
</script>
<section class="row mt-12">
	<div class="card w-100 m-auto">
	   <div class="card-body">
	   	  <h1 style="color:black">Agregar Rol</h1><br>
		<form action="?controlador=rol&method=guardar" method="post" id="formulario">
		<div class="form-row">
			<div class="col-md-6 mb-3">
				<label>id rol</label>
				<p data-tip="Maximo de 50 caracteres">
					<input id="Id_rol" type="text" style="border-color:gray;" name="Id_rol" class="form-control" placeholder="Ingrese el id Rol " required>
					<label id="msg_Id_rol" class="text-danger"></label>
			</div> 

            <div class="col-md-6 mb-3">
				<label>Tipo del rol</label>
				<p data-tip="Maximo de 50 caracteres">
					<input id="Tipo_rol" type="text" style="border-color:gray;" name="Tipo_rol" class="form-control" placeholder="Ingrese el tipo del Rol " maxlength="50" required>
					<label id="msg_rol" class="text-danger"></label>
				</p>
			</div> 

			<div class="col-md-6 mb-3">
                <label>Estado:</label>
                <select id="id_estado" name="id_estado" style="border-color:gray;" class="form-control" required="">
                    <option value="">Selecione un tipo</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
				<label id="msg_estado" class="text-danger"></label>
            </div>
			</div>
			<div class="card-body text-right">
				<a href="?controlador=rol" class="btn btn-outline-danger">Cancelar</a>
				<button class="btn btn-outline-info">Guardar</button>
			</div>
		</form>			
		</div>
	</div>
</section>
