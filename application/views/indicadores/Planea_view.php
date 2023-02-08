<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>PLANEA</h3>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php muestra_mensaje(); ?>
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<div class="pull-right">
				<button class="btn-default btn-sm back"><i class="fa fa-mail-reply"> </i> Atras</button> 
				</div>
			
				<div class="pull-right">
					<button class="btn-default btn-sm " data-toggle="modal" href="#modal_agregar" >
										<i class="fa fa-plus"></i> Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		<div class="row">
			<div class="col-lg-4">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example- dataTable" >
							<thead>
								<tr>
									<th>CICLO</th>
									<th>PORCENTAJE</th>
									<th>ACCIÓN</th>
								</tr>
							</thead>
							<tbody>
								
								<?php foreach($materias as $key => $list ){ ?>
									<tr>
										<td COLSPAN=3 BGCOLOR="#D1F2EB"><?= $list['PMateria'] ?></td>
									</tr>
									<?php foreach ($list['matPer'] as $mat => $list_m) { ?>
										<tr>
											<td><?= $list_m['PPeriodo'] ?></td>
											<td><?php 
												$porcentaje=$list_m['PPorcentaje'];
												if($porcentaje < 1){
													$porcentaje=$porcentaje*100;
													$porcentaje=number_format($porcentaje,1);
												}
												echo $porcentaje;
												?> %</td>
											<td>
												<button data-toggle="modal" href="#modal_planea" 
													data-pidplanea_skip="<?php echo $list_m['PIdPlanea']; ?>"
													data-pmateria="<?php echo $list['PMateria']; ?>"
													data-pperiodo="<?php echo $list_m['PPeriodo']; ?>"
													data-pporcentaje="<?php echo $list_m['PPorcentaje']; ?>"
													class="btn btn-outline btn-info btn-xs pull-right open">
													<i class="fa fa-pencil"></i> Editar
												</button>
											</td>
										</tr>
									<?php } ?>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<script type="text/javascript">
					$(function () {
						var barData = {
							labels: [
								<?php foreach($data as $key => $list ){ ?>
									//"<?=$list['PMateria']?>",
								<?php } ?>
								'Lenguaje y Comunicación Matutino',
								'Lenguaje y Comunicación Vespertino',
								'Matematicas Matutino',
								'Matematicas Vespertino'
							],
							datasets: [
								<?php foreach($data[0]['periodo'] as $key_p => $list_p ){ ?>
								{
									label: "Egresados",
									fillColor: "#<?=random_color()?>",
									//strokeColor: "rgba(209, 151, 42, 82)",
									//highlightFill: "rgba(128, 105, 33, 50)",
									highlightStroke: "rgba(220,220,220,1)",
									data: [
										<?php foreach($list_p['materia'] as $key_m => $list_m ){ ?>
										"<?=$list_m['PPorcentaje']?>",
										<?php } ?>
									]
								},
								<?php } ?>
							],
						};

						var barOptions = {
							scaleBeginAtZero: true,
							scaleShowGridLines: true,
							scaleGridLineColor: "rgba(0,0,0,.05)",
							scaleGridLineWidth: 1,
							barShowStroke: true,
							barStrokeWidth: 2,
							barValueSpacing: 5,
							barDatasetSpacing: 1,
							responsive: true
						}
						
						var ctx = document.getElementById("barChart").getContext("2d");
						var myNewChart = new Chart(ctx).Bar(barData, barOptions);
					});
				</script>
				<div class="ibox ">
					<div class="ibox-title">
						<h5>Comparativo PLANEA por turno y área de competencia (NIVELES III y IV)</h5>
					</div>
					<div class="ibox-content">
						<div>
							<canvas id="barChart" height="140"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php 
function random_color_part() {
	return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}
function random_color() {
	return random_color_part() . random_color_part() . random_color_part();
}
?>
<!--*************** Modal Planea ********************* -->

<div class="modal inmodal" id="modal_planea" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Planea</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('indicadores/save_planea', array('name' => 'Formplanea', 'id' => 'Formplanea', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Materia :<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PMateria" name="PMateria" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>				
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">CICLO: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPeriodo" name="PPeriodo" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">PORCENTAJE: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPorcentaje" name="PPorcentaje" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save') ){ ?>
						<input type="hidden" id="PIdPlanea_skip" name="PIdPlanea"/>
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal planea  ********************* -->

<!-- ******************* Modal Agregar ********************* -->

<div class="modal inmodal" id="modal_agregar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Planea</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('indicadores/agregar_planea', array('name' => 'Formagregar_planea', 'id' => 'Formagregar_planea', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Materia:<em>*</em></label>
					<div class="col-lg-9">
						<select class="form-control m-b" name="PMateria" id="PMateria">
							<option>Selecciona una opción</option>
                                <option value="Lenguaje y Comunicación Matutino"> Lenguaje y Comunicación Matutino </option>
								<option value="Lenguaje y Comunicación Vespertino"> Lenguaje y Comunicación Vespertino </option>
								<option value="Matematicas Matutino"> Matematicas Matutino </option>
								<option value="Matematicas Vespertino"> Matematicas Vespertino </option>
                        </select>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Periodo: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPeriodo" name="PPeriodo" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Porcentaje: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPorcentaje" name="PPorcentaje" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save') ){ ?>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- ******************* FIN Agregar  ********************* -->


<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>
<!-- ChartJS-->
<script src="<?php echo base_url('assets/inspinia/js/plugins/chartJs/Chart.min.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		/* Page-Level Scripts */
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			}
		});	

		$(document).on("click", ".open", function () {
			$(".modal-content #PIdPlanea_skip").val( $(this).data('pidplanea_skip') );
			$(".modal-content #PMateria").val( $(this).data('pmateria') );
			$(".modal-content #PPeriodo").val( $(this).data('pperiodo') );
			$(".modal-content #PPorcentaje").val( $(this).data('pporcentaje') );
			
		});

		$("#Formplanea").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("indicadores/save_planea"); ?>",
				data: $(this).serialize(),
				dataType: "html",
				beforeSend: function(){
					$(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
				},
				success: function(data){
					if(data==' OK'){
						//location.href ="<?php echo base_url("dashboard"); ?>";
						location.reload();
					}
					else{
						$(".error").empty();
						$(".error").append(data);
						$(".loading").html("");
					}
					
				}
			});
		});//----->fin
		

		$("#Formagregar_planea").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("indicadores/agregar_planea"); ?>",
				data: $(this).serialize(),
				dataType: "html",
				beforeSend: function(){
					$(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
				},
				success: function(data){
					if(data==' OK'){
						//location.href ="<?php echo base_url("dashboard"); ?>";
						location.reload();
					}
					else{
						$(".error").empty();
						$(".error").append(data);
						$(".loading").html("");
					}
					
				}
			});
		});//----->fin
		
	});
</script>