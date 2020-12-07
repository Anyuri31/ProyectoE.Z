<section class="section">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-left" style="color:black">Lista de Sedes <a  href="modelos/reportes/pdf_sede.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1> 
           <div class="card-body">
               <div class="table-responsive">
                <table class="table table-sm">
                <tr class="thead-dark">
                    <th>Sede</th>
                    <th>Tipo sede</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>

            <tbody>
            <?php foreach($sed as $sede): ?>
                <tr class="table-secondary">
                    <td><?php echo $sede->Id_sede; ?></td>
                    <td><?php echo $sede->Tipo_sede; ?></td>
                    <td><?php echo $sede->Direccion; ?></td>
                    <td>
                        <a href="?controlador=sede&method=crud&Id_sede=<?php echo $sede->Id_sede?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                        <a href="?controlador=sede&method=Eliminar&Id_sede=<?php echo $sede->Id_sede ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>
                     </td>  
                             
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</section>


