<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista Detalles de la Novedad</h1>
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
                <tr class="thead-dark">
                    <th>Novedad</th>
                    <th>Codigo elemento</th>
                    <th>Nombre elemento</th>
                    <th>Acciones</th>
                </tr>

                <tbody>
                    <?php foreach ($detnov as $detnov) : ?>
                <tr class="table-secondary">
                    <td><?php echo $detnov->Id_novedad; ?></td>
                    <td><?php echo $detnov->Nombre_elemento; ?></td>
                    <td><?php echo $detnov->Descripcion_nov_elemento; ?></td>
                    <td>
                        <a href="?controlador=detallenovedad&method=crud&Id_novedad=<?php echo $detnov->Id_novedad?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=detallenovedad&method=Eliminar&Id_novedad=<?php echo $detnov->Id_novedad ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>  
                </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</section> 

