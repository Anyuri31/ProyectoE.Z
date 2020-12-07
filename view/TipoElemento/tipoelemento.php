<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Tipos de Elementos</h1>
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
            <tr class="thead-dark">
                <th>Codigo del tipo de elemento</th>
                <th>Nombre del tipo de elemento</th>
                <th>Acciones</th>
            </tr>

    <tbody>
    <?php foreach($tipEl as $tipoElemento): ?>
        <tr class="table-secondary"> 
            <td><?php echo $tipoElemento->Codigo_tipo_elemento; ?></td>
            <td><?php echo $tipoElemento->Nombre_tipo_elemento; ?></td>
            <td>
                    <a href="?controlador=tipoelemento&method=crud&Codigo_tipo_elemento=<?php echo $tipoElemento->Codigo_tipo_elemento?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                    <a href="?controlador=tipoelemento&method=Eliminar&Codigo_tipo_elemento=<?php echo $tipoElemento->Codigo_tipo_elemento ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
            </td>   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>


