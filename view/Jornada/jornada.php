<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Jornadas <a  href="modelos/reportes/pdf_jornadas.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1> 
		   <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">		  
		    <tr class="thead-dark">
		      <th>#</th>
		      <th>Jornada Mañana</th>
		      <th>Jornada Tarde</th>
		      <th>Programa</th>
		      <th>Acciones</th>
		    </tr>

		  	<tbody>
		  	  <?php foreach ($jornada as $jornada) : ?>
			    <tr class="table-secondary">
			      <td><?php echo $jornada->id_jornada ?></td>
			      <td><?php echo $jornada->jornada_M ?></td>
			      <td><?php echo $jornada->jornada_T ?></td>
			      <td><?php echo $jornada->Nombre_programa ?></td>
			      <td>
                        <a href="?controlador=jornada&method=crud&id_jornada=<?php echo $jornada->id_jornada?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=jornada&method=Eliminar&id_jornada=<?php echo $jornada->id_jornada ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>
			    </tr>
			  <?php endforeach ?> 
		  	</tbody>
		</table>
	</div>	
</section>
