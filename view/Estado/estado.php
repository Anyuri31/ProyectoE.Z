<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Estados</h1> 
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
                <tr class="thead-dark">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>

            <tbody>
            <?php foreach($estado as $estado): ?>
                <tr class="table-secondary">
                    <td><?php echo $estado->id_estado; ?></td>
                    <td><?php echo $estado->Nombre; ?></td>
                    <td><?php echo $estado->Nombre; ?></td>
                    <td>
                        <a href="?controlador=estado&method=crud&id_estado=<?php echo $estado->id_estado?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=estado&method=Eliminar&id_estado=<?php echo $estado->id_estado ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>  
                             
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</section>