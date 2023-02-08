<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Matrícula de Nuevo Ingreso a Primer Semestre</h3>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php muestra_mensaje(); ?>
		<div class="ibox float-e-margins">
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
									<th>MATRICULA</th>
									<th>ACCIÓN</th>
								</tr>	
							</thead>
							<tbody>
								<?php foreach($matricula as $key => $list ){ ?>
								<tr>
							
							<td><?=$list['MNIPeriodo']?></td>
							<td><?=$list['MNITotal']?></td>
							
							<td><button data-toggle="modal" href="#modal_matricula" 
								data-mniidmatricula_skip="<?php echo $list['MNIIdMatricula']; ?>"
								data-mniperiodo="<?php echo $list['MNIPeriodo']; ?>"
								data-mnitotal="<?php echo $list['MNITotal']; ?>"				
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</button></td>
						</tr>
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
								<?php foreach($matricula as $key => $list ){ ?>
									"<?=$list['MNIPeriodo']?>",
								<?php } ?>
							],
							datasets: [
								{
									label: "My First dataset",
									fillColor: "rgba(220,220,220,0.5)",
									strokeColor: "rgba(220,220,220,0.8)",
									highlightFill: "rgba(220,220,220,0.75)",
									highlightStroke: "rgba(220,220,220,1)",
									data: [
										<?php foreach($matricula as $key => $list ){ ?>
											"<?=$list['MNITotal']?>",
										<?php } ?>
									]
								}
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
						<h5>Grafíca de Barras</h5>
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


<div class="modal inmodal" id="modal_plantel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Plantel</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('plantel/save', array('name' => 'FormPlantel', 'id' => 'FormPlantel', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Nombre: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLNombre" name="CPLNombre" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">C.C.T.: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLCCT" name="CPLCCT" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Tipo: <em>*</em></label>
					<div class="col-lg-9">
						<select name="CPLTipo" id="CPLTipo" class="form-control" required>
							<option value=""></option>
							<option value="35">PLANTEL</option>
							<option value="36">CEMSAD</option>
							<option value="37">DIR. GENERAL</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Correo electr&oacute;nico: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLCorreo_electronico" name="CPLCorreo_electronico" value="" maxlength='150' class="form-control lowercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Director: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLDirector" name="CPLDirector" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Dirección Perteneciente: <em></em></label>
					<div class="col-lg-9">
						<select id="CPLUnidad" name="CPLUnidad" class="form-control">
							<option value="0">SIN DIRECCIÓN</option>
							<?php foreach($unidades as $key_u => $list_u ){ ?>
							<option value="<?=$list_u['CPLClave']?>"><?=$list_u['CPLNombre']?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save') ){ ?>
						<input type="hidden" id="CPLClave_skip" name="CPLClave_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>



<!-- ******************* Modal matricula ********************* -->

<div class="modal inmodal" id="modal_matricula" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Matrícula de Nuevo Ingreso a Primer Semestre</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('indicadores/save_nuevoingreso', array('name' => 'Formmatnuevoingreso', 'id' => 'Formmatnuevoingreso', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">PERIODO:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="MNIPeriodo" name="MNIPeriodo" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">MATRICULA: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="MNITotal" name="MNITotal" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php //if( is_permitido(null,'plantel','save') ){ ?>
						<input type="hidden" id="MNIIdMatricula_skip" name="MNIIdMatricula" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php //} ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal matricula  ********************* -->
<!-- ******************* Modal Agregar ********************* -->

<div class="modal inmodal" id="modal_agregar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Matrícula de Nuevo Ingreso a Primer Semestre</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('indicadores/agregar_mnuevoingreso', array('name' => 'Formagregar_matricula', 'id' => 'Formagregar_matricula', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Período:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="MNIPeriodoA" name="MNIPeriodo" value="" maxlength='150' class="form-control uppercase"/>
					</div>
				</div>				
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Matricula: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="MNITotalA" name="MNITotal" value="" maxlength='150' class="form-control uppercase"/>
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
			$(".modal-content #MNIIdMatricula_skip").val( $(this).data('mniidmatricula_skip') );
			$(".modal-content #MNIPeriodo").val( $(this).data('mniperiodo') );
			$(".modal-content #MNITotal").val( $(this).data('mnitotal') );
		});

		$("#Formmatnuevoingreso").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("indicadores/save_nuevoingreso"); ?>",
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


		$("#Formagregar_matricula").submit(function(e) {
					e.preventDefault();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url("indicadores/agregar_mnuevoingreso"); ?>",
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