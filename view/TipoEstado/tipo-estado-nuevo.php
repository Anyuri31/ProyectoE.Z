<script>
    $(document).ready(function(){
        function Validar() {
            //validar id_tipo 
            if(!$("#id_tipo").val()){
                $("#msg_id_tipo").text("Debe llenar el campo");
                $("#id_tipo").addClass("border border-danger");
            }else{
                $("#msg_id_tipo").text("");
                $("#id_tipo").removeClass("border border-danger");
            }
            //Validar Nombre 
            if(!$("#Nombre").val()){
                $("#msg_Nombre").text("Debe llenar el campo");
                $("#Nombre").addClass("border border-danger");
            }else{
                $("#msg_Nombre").text("");
                $("#Nombre").removeClass("border border-danger");
            }
        }

        $("input[required], select[required]").blur(Validar);
        $(".btn").click(Validar);
    })
</script> 

<section class="row mt-12">
    <div class="card w-100 m-auto">
        <div class="card-body">
            <h1 style="color:black">Agregar Tipos de Estados</h1><br>
            <form action="?controlador=tipoEstado&method=guardar" method="post" id="formulario">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Tipo Estado</label>
                    <input id="id_tipo" type="number" style="border-color:gray;" name="id_tipo" value="<?php echo $tipoEstado->id_tipo; ?>" class="form-control" placeholder="Ingrese el tipo de estado."  />
                    <label id="msg_id_tipo" class="text-danger"></label>
                </div><br>
                <div class="col-md-6 mb-3">
                    <label>Nombre del tipo</label>
                   <p data-tip="Maximo de 32 caracteres">
                        <input id="Nombre" type="text" style="border-color:gray;" name="Nombre" value="<?php echo $tipoEstado->Nombre; ?>" class="form-control" placeholder="Ingrese el nombre del tipo."  maxlength="32" />
                        <label id="msg_Nombre" class="text-danger"></label>
                    </p>
                </div>
            </div>
                <div class="card-body text-right">
                    <a href="?controlador=tipoEstado" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>     
            </form>
        </div>
    </div>
</section>