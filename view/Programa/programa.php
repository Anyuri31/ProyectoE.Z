<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Programas <a  href="modelos/reportes/pdf_programas.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>
		   <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
			    <tr class="thead-dark">
			      <th>Programa</th>
			      <th>Nombre</th>
			      <th>Fecha Inical</th>
			      <th>Fecha Final</th>
			      <th>Dia entre semana</th>
			      <th>Fin de semana</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			    </tr>
			  <tbody>
			  	<?php foreach ($pro as $program) : ?>
				    <tr class="table-secondary">
				      <td><?php echo $program->Codigo_programa ?></td>
				      <td><?php echo $program->Nombre_programa ?></td>
				      <td><?php echo $program->fecha_inicio ?></td>
				      <td><?php echo $program->fecha_final?></td>
				      <td><?php echo $program->dia_entre_semana ?></td>
				      <td><?php echo $program->fin_de_semana ?></td>
				      <td><?php echo $program->Nombre ?></td>
				    
				       <td>
                        <a href="?controlador=programa&method=crud&Codigo_programa=<?php echo $program->Codigo_programa?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=programa&method=Eliminar&Codigo_programa=<?php echo $program->Codigo_programa ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>