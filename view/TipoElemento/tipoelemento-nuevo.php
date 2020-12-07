<script>
   $(document).ready(function(){
      function Validar() {
         //validar Codigo_tipo_elemento 
         if(!$("#Codigo_tipo_elemento").val()){
            $("#msg_Codigo_tipo_elemento").text("Debe llenar el campo");
            $("#Codigo_tipo_elemento").addClass("border border-danger");
         }else{
            $("#msg_Codigo_tipo_elemento").text("");
            $("#Codigo_tipo_elemento").removeClass("border border-danger");
         }
         //Validar Nombre_tipo_elemento 
         if(!$("#Nombre_tipo_elemento").val()){
            $("#msg_Nombre_tipo_elemento").text("Debe llenar el campo");
          $("#Nombre_tipo_elemento").addClass("border border-danger");
         }else{
            $("#msg_Nombre_tipo_elemento").text("");
          $("#Nombre_tipo_elemento").removeClass("border border-danger");
         }
      }

        $("input[required], select[required]").blur(Validar);
        $(".btn").click(Validar);
   })
</script>
<section class="row mt-12">
   <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Agregar Tipos de Elementos</h1><br>
         <form action="?controlador=tipoElemento&method=guardar" method="post" id="formulario">
            <div class="form-row">
               <div class="col-md-6 mb-3">
                  <label>TipoElemento</label>
                  <input id="Codigo_tipo_elemento" type="number" style="border-color:gray;" name="Codigo_tipo_elemento" value="<?php echo $tipEl->Codigo_tipo_elemento; ?>" class="form-control" placeholder="Ingrese el codigo del tipo ." required data-validacion-tipo="requerido|min:100" />
                  <label id="msg_Codigo_tipo_elemento" class="text-danger"></label>
              </div>              
              <div class="col-md-6 mb-3">
                  <label>Nombre del tipo</label>
                  <p data-tip="Maximo de 50 caracteres">
                     <input id="Nombre_tipo_elemento" type="text" style="border-color:gray;" name="Nombre_tipo_elemento" value="<?php echo $tipEl->Nombre_tipo_elemento; ?>" class="form-control" placeholder="Ingrese el nombre." required data-validacion-tipo="requerido|min:100" maxlength="50" />
                     <label id="msg_Nombre_tipo_elemento" class="text-danger"></label>
                  </p>
               </div>
            </div>    
            <div class="card-body text-right">
               <a href="?controlador=tipoelemento" class="btn btn-outline-danger">Cancelar</a>
               <button class="btn btn-outline-info">Guardar</button>
            </div>
         </form>         
      </div>
   </div>
</section>
