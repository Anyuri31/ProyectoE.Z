<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Novedades <a  href="modelos/reportes/pdf_novedades.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>	
            <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
			    <tr class="thead-dark">
			      <th>#</th>
			      <th>Reserva</th>
			      <th>Tipo</th>
			      <th>Fecha</th>
			      <th>Nombre</th>
			      <th>Acciones</th>
			    </tr>

			 <tbody>
			  	<?php foreach($novedades as $r): ?>
				    <tr class="table-secondary">
				      	<td><?php echo $r->Id_novedad; ?></td>
				      	<td><?php echo $r->Id_reserva ;?></td>
				      	<td><?php echo $r->Nombre_tipo ; ?></td>
				      	<td><?php echo $r->fecha ;?></td>
				      	<td><?php echo $r->NombreNovedad ;?></td>
				     

				      	<td>
                        	<a href="?controlador=novedad&method=crud&Id_novedad=<?php echo $r->Id_novedad?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        	<a href="?controlador=novedad&method=Eliminar&Id_novedad=<?php echo $r->Id_novedad ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     	</td>   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>



