<section class="section">
<div class="card">
    <div class="card-body">
            <h1 class="text-left" style="color:black">Lista de Usuarios <a  href="modelos/reportes/pdf_usuario.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>
           <div class="card-body">
               <?php echo $msg; ?>
               <div class="table-responsive">
                <table class="table table-striped table-sm">
                            <tr class="thead-dark">
                                <th>#</th>
                                <th>Rol</th>
                                <th>Email</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>T. doc.</th>
                                <th>No. documento</th>
                                <th>Tel. celular</th>
                                <th>Telefono</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>

                        <tbody>
                            <?php foreach($usuario as $usu): ?>
                            <tr class="table-secondary">
                                <td><?php echo $usu->Id_usuario; ?></td>
                                <td><?php echo $usu->Tipo_rol; ?></td>
                                <td><?php echo $usu->Correo_usuario; ?></td>
                                <td><?php echo $usu->Nombres; ?></td>
                                <td><?php echo $usu->Apellidos; ?></td>
                                <td><?php echo $usu->Tipo_documento; ?></td>
                                <td><?php echo $usu->Numero_documento; ?></td>
                                <td><?php echo $usu->Tel_celular; ?></td>
                                <td><?php echo $usu->Telefono; ?></td>
                                <td><?php echo $usu->Nombre; ?></td>

                                <td>
                                    <a href="?controlador=usuario&method=crud&Id_usuario=<?php echo $usu->Id_usuario?>"><span data-feather="edit" aria-hidden="true" title="editar"></span></a>
                                
                                    <a href="?controlador=usuario&method=Eliminar&Id_usuario=<?php echo $usu->Id_usuario ?>"><span data-feather="trash" aria-hidden="true" title="borrar"></span></a>

                                    
                                </td>   
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
