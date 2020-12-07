<section class="row mt-12">
<div class="card w-100 m-auto">
  <div class="card-body">
  	<h1 style="color:black">Editar Rol</h1><br>
			<form action="?controlador=rol&method=editar" method="post">
				<input type="hidden" name="Id_rol" value="<?php echo $roles->Id_rol ?>" >
               
			<div class="form-row">
                <div class="col-md-6 mb-3">
					<label>Tipo del rol</label>
					<input  type="text" style="border-color:gray;" name="Tipo_rol" class="form-control" placeholder="Ingrese el tipo del Rol " value="<?php echo $roles->Tipo_rol ?>">

				</div> 

               <div class="col-md-6 mb-3">
				   <label>Estado</label>
				   	<select name="id_estado" style="border-color:gray;" class="form-control" required="">
		                <option value="">Selecione un estado</option>
		                <option value="1" <?php echo ($roles->id_estado == 1) ? 'selected' : '' ?>>Activo</option>
                		<option value="2" <?php echo ($roles->id_estado == 2) ? 'selected' : '' ?>>Inactivo</option>
		            </select>
				</div>
			</div>	

				<div class="card-body text-right">
					<a href="?controlador=rol" class="btn btn-outline-danger">Cancelar</a>
					<button class="btn btn-outline-info">Actualizar</button>
				</div>
			</form>			
		</div>
	</div>
</section>
