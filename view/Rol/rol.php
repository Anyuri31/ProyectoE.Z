<section class="section">
        <div class="card">
          <div class="card-body">
            <h1 class="text-left" style="color:black">Lista de Roles <a  href="modelos/reportes/pdf_roles.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>
		   <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
			    <tr class="thead-dark">
			      <th>Rol</th>
			      <th>Tipo del Rol</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			    </tr>
			  
			  <tbody>
			  	<?php foreach ($roles as $rol): ?>
				    <tr class="table-secondary">
				     	<td><?php echo $rol->Id_rol ?></td>	
				      	<td><?php echo $rol->Tipo_rol ?></td>
				      	<td><?php echo $rol->Nombre ?></td>
				      
				      	<td>
                			<a href="?controlador=rol&method=crud&Id_rol=<?php echo $rol->Id_rol?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                			<a href="?controlador=rol&method=Eliminar&Id_rol=<?php echo $rol->Id_rol ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
             			</td>  
				    </tr>
				  <?php endforeach ?> 
			  </tbody>
		</table>
		</div>
	</div>
</section>
