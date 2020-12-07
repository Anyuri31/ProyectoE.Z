<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
      	<h1 style="color:black">Editar Usuarios</h1><br>
			<form action="?controlador=programa&method=editar" method="post">
				<input type="hidden" name="Codigo_programa" value="<?php echo $pro->Codigo_programa; ?>" >

				<div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Nombre</label>
					<input type="text" style="border-color:gray;" name="Nombre_programa" value="<?php echo $pro->Nombre_programa; ?>" class="form-control" placeholder="Ingrese el nombre del programa">
				</div>

				<div class="col-md-6 mb-3">
					<label>Fecha Inicial</label>
					<input type="date" style="border-color:gray;" name="fecha_inicio" value="<?php echo $pro->fecha_inicio; ?>" class="form-control" placeholder="Ingrese la fecha">
				</div>
                </div>
				<div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Fecha Final</label>
					<input type="date" style="border-color:gray;" name="fecha_final" value="<?php echo $pro->fecha_final; ?>" class="form-control" placeholder="Ingrese la fecha">
				</div>

	             <div class="col-md-6 mb-3">
					<label>Dia entere semana</label>
					<input type="number" style="border-color:gray;" name="dia_entre_semana" value="<?php echo $pro->dia_entre_semana; ?>" class="form-control" placeholder="Ingrese la fecha">
				</div>
                </div>
			    <div class="form-row">
                    <div class="col-md-6 mb-3">
					<label>Fin de semana</label>
					<input type="number" style="border-color:gray;" name="fin_de_semana" value="<?php echo $pro->fin_de_semana; ?>" class="form-control" placeholder="Ingrese la fecha">
				</div>

				<div class="col-md-6 mb-3">
					<label>Estado</label>
					<input type="number" style="border-color:gray;" name="id_estado" value="<?php echo $pro->id_estado; ?>" class="form-control" placeholder="Ingrese el estado">
				</div>
				</div>
				<div class="card-body text-right">
					<a href="?controlador=programa" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Actualizar</button>
                </div>
				
			</form>			
		</div>
	</div>
</section>