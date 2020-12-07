<script>
    $(document).ready(function(){
        function Validar() {
	        //validar jornada_M
	        if(!$("#jornada_M").val()){
	           $("#msg_jornada_M").text("Debe llenar el campo");
	           $("#jornada_M").addClass("border border-danger");
	        }else{
	           $("#msg_jornada_M").text("");
	           $("#jornada_M").removeClass("border border-danger");
	        }
	        //Validar jornada_T
	        if(!$("#jornada_T").val()){
	           $("#msg_jornada_T").text("Debe llenar el campo");
	           $("#jornada_T").addClass("border border-danger");
	        }else{
	           $("#msg_jornada_T").text("");
	           $("#jornada_T").removeClass("border border-danger");
	        }
	        //Validar Codigo_programa
	        if(!$("#Codigo_programa").val()){
	           $("#msg_Codigo_programa").text("Debe llenar el campo");
	           $("#Codigo_programa").addClass("border border-danger");
	        }else{
	           $("#msg_Codigo_programa").text("");
	           $("#Codigo_programa").removeClass("border border-danger");
	        }
	    }

    	$("input[required], select[required]").blur(Validar);
    	$(".btn").click(Validar);
    })
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Agregar Jornada</h1><br>
			<form action="?controlador=jornada&method=guardar" method="post" id="formulario">

			<div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Jornada Mañana</label>
					<p data-tip="Maximo de 2 caracteres">
						<input id="jornada_M" type="text" style="border-color:gray;" name="jornada_M" class="form-control" placeholder="Ingrese la Jornada" maxlength="2" value="<?php echo $jornada->jornada_M ?>">
					</p>
					<label id="msg_jornada_M" class="text-danger"></label>
				</div>

				<div class="col-md-6 mb-3">
					<label>Jornada Tarde</label>
					<p data-tip="Maximo de 2 caracteres">
						<input id="jornada_T" type="text" style="border-color:gray;" name="jornada_T" class="form-control" placeholder="Ingrese Jornadaa " maxlength="2" value="<?php echo $jornada->jornada_T ?>">
					</p>
					<label id="msg_jornada_T" class="text-danger"></label>
				</div>
            </div>
				<div class="form-group">
					<label>Programa</label>
					<input id="Codigo_programa" type="number" style="border-color:gray;" name="Codigo_programa" class="form-control" placeholder="Ingrese Programa " value="<?php echo $jornada->Codigo_programa ?>">
					<label id="msg_Codigo_programa" class="text-danger"></label>
				</div>   
				<div class="card-body text-right">
					<a href="?controlador=Jornada" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>
			</form>			
		</div>
	</div>
</section>
