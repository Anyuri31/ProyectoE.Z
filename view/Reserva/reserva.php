<section class="section">
	<div class="card">
		<div class="card-header row">
			<h1 class="text-left" style="color:black">Lista de Reservas <a  href="modelos/reportes/pdf_reservas.php"target="_blank "><img style="height:75px; widht:50px; margin-left:550px;" src="modelos/reportes/pdf.png" alt="icon"></a></h1>
			<div class=" col-6">
				<select id="filtro_aula" class="form-control">
					<option value="Todo"> Aulas</option>
					<?php foreach ($aulas as $aula) : ?>
						<option value="<?php echo $aula->Id_aula; ?>"><?php echo $aula->Nombre_aula; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="card-body ">
			<?php echo $msg; ?>
			<div id="calendar"></div>
		</div>
		<script id="data-calendar">
			$(document).ready(function (){
				$('#calendar').fullCalendar({
					header: {
				    left: "prev,next",
					center: 'title',
					right:  'month = Mes,agendaWeek = Semana,agendaDay = Dia'},
					events: [
						<?php foreach ($rese as $reserva) : ?>
							{
								title: '<?php echo "{$reserva->Nombres} - {$reserva->Nombre_programa}"; ?>',
								start: '<?php echo "{$reserva->Fecha_reserva}T{$reserva->Hora_inicio}"; ?>',
								end:   '<?php echo "{$reserva->Fecha_final}T{$reserva->Hora_final}"; ?>',
								aula:  '<?php echo $reserva->Id_aula; ?>',
								allDay: false,
								url:    "?controlador=reserva&method=crud&Id_reserva=<?php echo $reserva->Id_reserva; ?>"
							},
						<?php endforeach; ?>
					],
					timeFormat: 'H(:mm)',
					eventRender: function eventRender (event, element, view) {
						return ['Todo', event.aula].indexOf($('#filtro_aula').val()) >= 0
					}
				});
				$('#filtro_aula').on('change', function(){
					$('#calendar').fullCalendar('rerenderEvents');
				});
			});
		</script>
	</div>
</section>