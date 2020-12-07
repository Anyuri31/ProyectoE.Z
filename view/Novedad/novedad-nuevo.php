<script>
	$(document).ready(function(){
		function Validar() {
			//validar Id_novedad 
			if(!$("#Id_novedad").val()){
				$("#msg_Id_novedad").text("Debe llenar el campo");
				$("#Id_novedad").addClass("border border-danger");
			}else{
				$("#msg_Id_novedad").text("");
				$("#Id_novedad").removeClass("border border-danger");
			}
			//Validar Id_reserva
			if(!$("#Id_reserva").val()){
				$("#msg_Id_reserva").text("Debe llenar el campo");
				$("#Id_reserva").addClass("border border-danger");
			}else{
				$("#msg_Id_reserva").text("");
				$("#Id_reserva").removeClass("border border-danger");
			}
			//Validar fecha
			if(!$("#fecha").val()){
				$("#msg_fecha").text("Debe llenar el campo");
				$("#fecha").addClass("border border-danger");
			}else{
				$("#msg_fecha").text("");
				$("#fecha").removeClass("border border-danger");
			}
			//validar NombreNovedad
			if(!$("#NombreNovedad").val()){
				$("#msg_NombreNovedad").text("Debe llenar el campo");
				$("#NombreNovedad").addClass("border border-danger");
			}else{
				$("#msg_NombreNovedad").text("");
				$("#NombreNovedad").removeClass("border border-danger");
			}
			//Validar Id_tipo
			if(!$("#Id_tipo").val()){
				$("#msg_Id_tipo").text("Debe llenar el campo");
				$("#Id_tipo").addClass("border border-danger");
			}else{
				$("#msg_Id_tipo").text("");
				$("#Id_tipo").removeClass("border border-danger");
			}
		}

		$("input[required], select[required]").blur(Validar);
		$(".btn").click(Validar);
	})
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
        <div class="card-body">
        	<h1 style="color:black">Agregar Novedad</h1><br>
				<form action="?controlador=Novedad&method=guardar" method="post" id="formulario">
				<div class="form-row">
                    <!-- <div class="col-md-6 mb-3">
						<label>Novedad</label>
						<input id="Id_novedad" type="number" size="5" style="border-color:gray;" name="Id_novedad" class="form-control" placeholder="Ingrese el id de la novedad">
						<label id="msg_Id_novedad" class="text-danger"></label>
					</div> -->
					<div class="col-md-6 mb-3">
						<label>Reserva</label>
						<input id="Id_reserva" type="number" style="border-color:gray;" name="Id_reserva" class="form-control" placeholder="Ingrese el id de la reserva">
						<label id="msg_Id_reserva" class="text-danger"></label>
					</div>
				</div>	
				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Fecha</label>
						<input id="fecha" type="date" style="border-color:gray;" name="fecha" class="form-control" placeholder="Ingrese la fecha">
						<label id="msg_fecha" class="text-danger"></label>
				</div>
				<div class="col-md-6 mb-3">
					<label>Nombre</label>
					<p data-tip="Maximo de 32 caracteres">
						<input id="NombreNovedad" type="text" style="border-color:gray;" name="NombreNovedad" class="form-control" placeholder="Ingrese el nombre" maxlength="32">
						<label id="msg_NombreNovedad" class="text-danger"></label>
					</p>
				</div>
				</div>	
					<div class="form-group">
						<label>Tipo</label>
						<input id="Id_tipo" type="number" style="border-color:gray;" name="Id_tipo" class="form-control" placeholder="Ingrese el id del  tipo de novedad">
						<label id="msg_Id_tipo" class="text-danger"></label>
					</div>
					<div class="card-body text-right">
						<a href="?controlador=novedad" class="btn btn-outline-danger">Cancelar</a>
                        <button class="btn btn-outline-info">Guardar</button>
                    </div>
				</form>			
			</div>
		</div>
	</section>
</main>