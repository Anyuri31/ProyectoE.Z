var reservas = {
	validar_consultar: function (){
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		if(dd<10) dd='0'+dd
		if(mm<10) mm='0'+mm
		today = yyyy+'-'+mm+'-'+dd;
		$("#fecha").attr("min", today);
		$("#fecha1").attr("min", today);
		$('#formulario').on("submit", function (event) {
    		event.preventDefault();
			$.ajax({
				url: "?controlador=reserva&method=consultar",
				type: "GET",
				success: reservas.respuesta_reserva
			});
		});
	},
	respuesta_reserva: function(respuesta){
		var aula = $('#Id_aula').val();
		var fecha_inicio = $('#fecha').val();
		var fecha_fin = $('#fecha1').val();
		var Hora_inicio = $('#Hora_inicio').val();
		var Hora_final = $('#Hora_final').val();
		
		var datos = JSON.parse(respuesta);
		var estado = 0;
		for (var i = 0; i < datos.length; i++) {
			var registro = datos[i];
			if((registro.Id_aula == aula) && (registro.Fecha_reserva == fecha_inicio) && (registro.Fecha_final == fecha_fin) && (registro.Hora_inicio == (Hora_inicio +':00')) && (registro.Hora_final == (Hora_final +':00')) ){
				//si hay un registro con los mismos datos, el estado pasa a 1 
				estado = 1;
			}
		}
		if (estado == 1){
			$('#mensaje').removeAttr('hidden').text('Ya existe una reserva en esa aula con en ese rango de fechas');
			return false;
		}else{
			$('#formulario')[0].submit();
		} 
	}
}
reservas.validar_consultar();