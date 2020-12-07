<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Tipos de Estados</a></h1>
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
                <tr class="thead-dark">
                    <th>Tipo Estado</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>

            <tbody>
                <?php foreach($tipoEstado as $tipo_estado): ?>
                    <tr class="table-secondary">
                        <td><?php echo $tipo_estado->id_tipo; ?></td>
                        <td><?php echo $tipo_estado->Nombre; ?></td>
                        <td>
                            <a href="?controlador=tipoEstado&method=crud&id_tipo=<?php echo $tipo_estado->id_tipo?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                            <a href="?controlador=tipoEstado&method=Eliminar&id_tipo=<?php echo $tipo_estado->id_tipo ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                        </td>                                  
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>