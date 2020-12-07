<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Tipos de Novedades</h1>
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
			    <tr class="thead-dark">
			      <th>#</th>
			      <th>Nombre Tipo </th>
			      <th>Acciones</th>
			    </tr>
			  <tbody class="table-striped">
			  	<?php foreach ($tiponovedad as $tiponove) : ?>
				    <tr class="table-secondary">
				      <td><?php echo $tiponove->Id_tipo ?></td>
				      <td><?php echo $tiponove->Nombre_tipo ?></td>
				      
				    <td>
                <a href="?controlador=tiponovedad&method=crud&Id_tipo=<?php echo $tiponove->Id_tipo?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                <a href="?controlador=tiponovedad&method=Eliminar&Id_tipo=<?php echo $tiponove->Id_tipo ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
            </td>   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>