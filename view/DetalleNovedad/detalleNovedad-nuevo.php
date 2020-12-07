<script>
    $(document).ready(function(){
        function Validar() {
            //validar Id_novedad 
            if(!$("#Id_novedad").val()){
                $("#msg_Id_novedad").text("Debe llenar el campo");
                $("#Id_novedad").addClass("border border-danger");
            }else{
                $("#msg_Id_novedad").text("");
                $("#Id_novedad").removeClass("border border-danger");
            }
            //Validar Codigo_elemento 
            if(!$("#Codigo_elemento").val()){
                $("#msg_Codigo_elemento").text("Debe llenar el campo");
                $("#Codigo_elemento").addClass("border border-danger");
            }else{
                $("#msg_Codigo_elemento").text("");
                $("#Codigo_elemento").removeClass("border border-danger");
            }
            //Validar Descripcion_nov_elemento
            if(!$("#Descripcion_nov_elemento").val()){
                $("#msg_Descripcion_nov_elemento").text("Debe llenar el campo");
                $("#Descripcion_nov_elemento").addClass("border border-danger");
            }else{
                $("#msg_Descripcion_nov_elemento").text("");
                $("#Descripcion_nov_elemento").removeClass("border border-danger");
            }
        }

        $("input[required], select[required]").blur(Validar);
        $(".btn").click(Validar);
    })
</script>   

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Agregar Detalle de Novedad</h1><br>
            <form action="?controlador=detalleNovedad&method=guardar" method="post" id="formulario">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Codigo de la novedad</label>
                        <input id="Id_novedad" type="number" style="border-color:gray;" name="Id_novedad" value="<?php echo $detnov->Id_novedad; ?>" class="form-control" placeholder="Ingrese el codigo de la novedad." required data-validacion-tipo="requerido|min:100" />
                        <label id="msg_Id_novedad" class="text-danger"></label>
                </div><br>

                <div class="col-md-6 mb-3">
                    <label>Codigo del elemento</label>
                    <input id="Codigo_elemento" type="number" style="border-color:gray;" name="Codigo_elemento" value="<?php echo $detnov->Codigo_elemento; ?>" class="form-control" placeholder="Ingrese el Codigo del elemento." required data-validacion-tipo="requerido|min:100" />
                    <label id="msg_Codigo_elemento" class="text-danger"></label>
                </div><br>
            </div>
                <div class="form-group">
                    <label>Descripcion de la novedad del elemento</label>
                    <p data-tip="Maximo de 150 caracteres">
                    <textarea id="Descripcion_nov_elemento" type="text" style="border-color:gray;" name="Descripcion_nov_elemento" value="<?php echo $detnov->Descripcion_nov_elemento; ?>" class="form-control" placeholder="Ingrese la descripcion." maxlength="150" required data-validacion-tipo="requerido|min:100" ></textarea>
                    <label id="msg_Descripcion_nov_elemento" class="text-danger"></label>
                </p>
                </div>

                <div class="card-body text-right">
                    <a href="?controlador=detallenovedad" class="btn btn-outline-danger">Cancelar</a>
                    <button class="btn btn-outline-info">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section>
