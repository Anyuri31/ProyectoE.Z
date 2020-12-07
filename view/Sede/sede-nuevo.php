<script>
  $(document).ready(function(){
      function Validar() {
         //validar Id_sede
         if(!$("#Id_sede").val()){
            $("#msg_Id_sede").text("Debe llenar el campo");
            $("#Id_sede").addClass("border border-danger");
         }else{
            $("#msg_Id_sede").text("");
            $("#Id_sede").removeClass("border border-danger");
         }
         //Validar Tipo_sede
         if(!$("#Tipo_sede").val()){
            $("#msg_Tipo_sede").text("Debe llenar el campo");
            $("#Tipo_sede").addClass("border border-danger");
         }else{
            $("#msg_Tipo_sede").text("");
            $("#Tipo_sede").removeClass("border border-danger");
         }
         //Validar Direccion
         if(!$("#Direccion").val()){
            $("#msg_Direccion").text("Debe llenar el campo");
            $("#Direccion").addClass("border border-danger");
         }else{
            $("#msg_Direccion").text("");
            $("#Direccion").removeClass("border border-danger");
         }
      }

      $("input[required], select[required]").blur(Validar);
      $(".btn").click(Validar);
   })
</script>

<section class="row mt-12">
    <div class="card w-100 m-auto">
      <div class="card-body">
        <h1 style="color:black">Agregar Sedes</h1><br>
         <form action="?controlador=sede&method=guardar" method="post" id="formulario">
         <div class="form-row">
         <div class="col-md-6 mb-3">
            <label>Sede</label>
            <input id="Id_sede" type="number" style="border-color:gray;" name="Id_sede" value="<?php echo $sed->Id_sede; ?>" class="form-control" placeholder="Ingrese el Sede."  />
            <label id="msg_Id_sede" class="text-danger"></label>
         </div><br>

         <div class="col-md-6 mb-3">
            <label>Tipo de sede</label>
            <p data-tip="Maximo de 1 caracteres">
               <input id="Tipo_sede" type="text" style="border-color:gray;" name="Tipo_sede" value="<?php echo $sed->Tipo_sede; ?>" class="form-control" placeholder="Ingrese la sede." maxlength="1"  />
               <label id="msg_Tipo_sede" class="text-danger"></label>
           </p>
         </div>
         </div>
         <div class="form-group">
            <label>Dirección</label>
            <p data-tip="Maximo de 100 caracteres">
               <input id="Direccion" type="text" style="border-color:gray;" name="Direccion" value="<?php echo $sed->Direccion; ?>" class="form-control" placeholder="Ingrese la Direccion." maxlength="100"/>
               <label id="msg_Direccion" class="text-danger"></label>
            </p>
         </div>
         <div class="card-body text-right">
            <a href="?controlador=Sede" class="btn btn-outline-danger">Cancelar</a>
            <button class="btn btn-outline-info">Guardar</button>
         </div>     
         </form>
      </div>
   </div>
</section>

