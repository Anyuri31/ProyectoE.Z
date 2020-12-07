<script>
   $(document).ready(function(){
      function Validar() {
         //validar Id_tipo 
         if(!$("#Id_tipo").val()){
            $("#msg_Id_tipo").text("Debe llenar el campo");
            $("#Id_tipo").addClass("border border-danger");
         }else{
            $("#msg_Id_tipo").text("");
            $("#Id_tipo").removeClass("border border-danger");
         }
         //Validar Nombre_tipo 
         if(!$("#Nombre_tipo").val()){
            $("#msg_Nombre_tipo").text("Debe llenar el campo");
          $("#Nombre_tipo").addClass("border border-danger");
         }else{
            $("#msg_Nombre_tipo").text("");
          $("#Nombre_tipo").removeClass("border border-danger");
         }
      }

        $("input[required], select[required]").blur(Validar);
        $(".btn").click(Validar);
   })
</script>
<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
      	<h1 style="color:black">Agregar Tipos de Novedades</h1><br>
				<form action="?controlador=tiponovedad&method=guardar" method="post" id="formulario">

				<div class="form-row">
                    <div class="col-md-6 mb-3">
						<label>Tipo</label>
						<input id="Id_tipo" type="number" style="border-color:gray;" name="Id_tipo" class="form-control" placeholder="Ingrese el id">
						<label id="msg_Id_tipo" class="text-danger"></label>
					</div>


					<div class="col-md-6 mb-3">
						<label>Nombre tipo</label>
						<p data-tip="Maximo de 150 caracteres">
							<input id="Nombre_tipo" type="text" style="border-color:gray;" name="Nombre_tipo" class="form-control" placeholder="Ingrese el Nombre del tipo" maxlength="150">
						</p>
						<label id="msg_Nombre_tipo" class="text-danger"></label>
					</div>
                </div>
					   
					<div class="card-body text-right">
					<a href="?controlador=tiponovedad" class="btn btn-outline-danger">cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>
            </form>         
        </div>
    </div>
</section>