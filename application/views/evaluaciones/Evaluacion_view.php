<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Evaluación Semestral de las Coordinaciones Valle de México y Valle de Toluca</h3>
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
					<button class="btn-default btn-sm " data-toggle="modal" href="#modal_evaluacionsem" >
										<i class="fa fa-plus"></i> Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		<div class="row">
			<div class="col-lg-4">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
							<thead>
										<tr>
											<th>FECHA DE DICTAMEN</th>
											<th>TOTAL</th>
											<th>ACCION</th>
											
										</tr>	
							</thead>
							<tbody>
								<?php foreach($data as $key => $list_e ){ ?>
										<tr>
											<td><?=$list_e['EPeriodo']?></td>
											<td><?=$list_e['ETotal']?></td>
									<td><button data-toggle="modal" href="#modal_evaluacionsem" 
										data-eidevaluacion_skip="<?php echo $this->encrypt->encode($list_e['EIdEvaluacion']); ?>"
										data-eperiodo="<?php echo $list_e['EPeriodo']; ?>"
										data-etotal="<?php echo $list_e['ETotal']; ?>"
										class="btn btn-outline btn-info btn-xs pull-right open">
										<i class="fa fa-pencil"></i> Editar
										</button>	
									</td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		
		<div class="col-lg-8">
				<script type="text/javascript">
					$(function () {
						var barData = {
							labels: [
								<?php foreach($data as $key => $list_e ){ ?>
									"<?=$list_e['EPeriodo']?>",
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
										<?php foreach($data as $key => $list_e ){ ?>
											"<?=$list_e['ETotal']?>",
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


<!-- ******************* Modal Evaluación Sem ********************* -->

<div class="modal inmodal" id="modal_evaluacionsem" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Programa de Infraestructura</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('evaluaciones/save_evaluacion', array('name' => 'FormPrograma', 'id' => 'FormPrograma', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">CICLO:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="EPeriodo" name="EPeriodo" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">TOTAL: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ETotal" name="ETotal" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'evaluaciones','save_evaluacion') ){ ?>
						<input type="hidden" id="EIdEvaluacion_skip" name="EIdEvaluacion_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Evaluación Sem  ********************* -->


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
			$(".modal-content #EIdEvaluacion_skip").val( $(this).data('eidevaluacion_skip') );
			$(".modal-content #EPeriodo").val( $(this).data('eperiodo') );
			$(".modal-content #ETotal").val( $(this).data('etotal') );
		});

		$("#FormPrograma").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("evaluaciones/save_evaluacion"); ?>",
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