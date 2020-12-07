<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Elementos <a  href="modelos/reportes/pdf_elementos.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>
		   <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">	
			    <tr class="thead-dark">
			      <th>Elemento</th>
			      <th>Aula</th>
			      <th>Tipo Elemento</th>
			      <th>Nombre</th>
			      <th>Descripcion</th>
			      <th>Referencia</th>
			      <th>Acciones</th>
			    </tr>
			</thead>
			  <tbody>
			  	<?php foreach ($elemento as $elemento) : ?>
				    <tr class="table-secondary">
				      <td><?php echo $elemento->Codigo_elemento ?></td>
				      <td><?php echo $elemento->Id_aula ?></td>
				      <td><?php echo $elemento->Nombre_tipo_elemento ?></td>
				      <td><?php echo $elemento->Nombre_elemento?></td>
				      <td><?php echo $elemento->Descripcion_elemento ?></td>
				      <td><?php echo $elemento->Referencia ?></td>
				     

				      <td>
                        <a href="?controlador=elemento&method=crud&Codigo_elemento=<?php echo $elemento->Codigo_elemento?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=elemento&method=Eliminar&Codigo_elemento=<?php echo $elemento->Codigo_elemento ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>

				    </tr>
				<?php endforeach ?> 
			 </tbody>
		</table>
	</div>	
</section>
