<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Aulas <a  href="modelos/reportes/pdf_aulas.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1> 
		   <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
			    <tr class="thead-dark">
			      <th>#</th>
			      <th>Nombre aula</th>
			      <th>Cantidad de personas</th>
			      <th>descripcion</th>
			      <th>Sede</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			    </tr>

			  <tbody>
			  	<?php foreach ($aula as $aula) : ?>
			    <tr class="table-secondary">

			      <td><?php echo $aula->Id_aula ?></td>
			      <td><?php echo $aula->Nombre_aula; ?></td>
			      <td><?php echo $aula->Cantidad_personas ?></td>
			      <td><?php echo $aula->Descripcion ?></td>
			      <td><?php echo $aula->Direccion ?></td>	
			      <td><?php echo $aula->Nombre ?></td>	
  					<td>
                        <a href="?controlador=aula&method=crud&Id_aula=<?php echo $aula->Id_aula?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=aula&method=Eliminar&Id_aula=<?php echo $aula->Id_aula ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>   

			    </tr>
			  <?php endforeach ?> 
		  </tbody>
		</table>
	</div>
</section>
