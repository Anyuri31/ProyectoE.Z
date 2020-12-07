<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Editar Jornada</h1><br>
			<form action="?controlador=jornada&method=editar" method="post">
				<input type="hidden" name="id_jornada" value="<?php echo $jornada->id_jornada ?>" >
				<div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Jornada Mañana</label>
					<input type="text" style="border-color:gray;" name="jornada_M" class="form-control" placeholder="Ingrese la Jornada" value="<?php echo $jornada->jornada_M ?>">
				    </div>
                
				    <div class="col-md-6 mb-3">
					<label>Jornada Tarde</label>
					<input type="text" style="border-color:gray;" name="jornada_T" class="form-control" placeholder="Ingrese Jornadaa " value="<?php echo $jornada->jornada_T ?>">
				</div>
                </div> 
				<div class="form-group">
					<label>Programa</label>
					<input type="number" style="border-color:gray;" name="Codigo_programa" class="form-control" placeholder="Ingrese Programa " value="<?php echo $jornada->Codigo_programa ?>">
				</div> 
				<div class="card-body text-right">
					<a href="?controlador=Jornada" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Actualizar</button>
                </div>
			</form>			
		</div>
	</div>
</section>