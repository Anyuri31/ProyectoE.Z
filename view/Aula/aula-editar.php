<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
      	<h1 style="color:black">Editar Aula</h1><br>
			<form action="?controlador=aula&method=editar" method="post">
				<input type="hidden" name="Id_aula" value="<?php echo $aula->Id_aula; ?>" >


			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label>Nombre del aula</label>
					<input type="text" style="border-color:gray;" name="Nombre_aula" class="form-control" placeholder="Ingrese nombre del aula" value="<?php echo $aula->Nombre_aula; ?>">
				</div>
                <div class="col-md-6 mb-3">
					<label>Cantidad Personas</label>
					<input type="number" style="border-color:gray;" name="Cantidad_personas" class="form-control" value="<?php echo $aula->Cantidad_personas; ?>" placeholder="Ingrese la cantidad de personas">
				</div>

				<div class="col-md-6 mb-3">
					<label>Descripcion</label>
					<input type="text" style="border-color:gray;" name="Descripcion" class="form-control" value="<?php echo $aula->Descripcion; ?>" placeholder="Ingrese la descripcion ">
				</div> 
            
                <div class="col-md-6 mb-3">
					<label>Sede</label>
					<input type="number" style="border-color:gray;" name="Id_sede" class="form-control" value="<?php echo $aula->Id_sede; ?>" placeholder="Ingrese la Jornada">
				</div>

				<div class="col-md-6 mb-3">
					<label>Estado</label>
					<input type="number" style="border-color:gray;" name="id_estado" class="form-control"  value="<?php echo $aula->id_estado;?>" placeholder="Ingrese el estado">
				</div>
            </div>
			    <div class="card-body text-right">
			    	<a href="?controlador=Aula" class="btn btn-outline-danger">Cancelar</a>
	                <button class="btn btn-outline-info">Actualizar</button>
            	</div>
			</form>			
		</div>
	</div>
</section>
