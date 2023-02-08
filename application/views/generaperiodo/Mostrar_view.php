<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">

<!-- Data picker -->
<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>GENERA PERIODO</h3>
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
					<button class="btn-default btn-sm " data-toggle="modal" href="#modal_genera" >
										<i class="fa fa-plus"></i> Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
							<thead>
										<tr>
											<th>AÑO</th>
											<th>PERIODO</th>
											<th>FECHA DE INICIO</th>
											<th>FECHA DE FIN</th>
											<th>ACCIÓN</th>
											
										</tr>			
							</thead>
							<tbody>
								<?php foreach($data as $key => $list_s ){ ?>
										<tr>
											<td><?=$list_s['PAnio']?></td>
											<td><?=$list_s['PPeriodo']?></td>
											<td><?=$list_s['PFechainicial']?></td>
											<td><?=$list_s['PFechafinal']?></td>
									<td>
									<?php if ($list_s['PEstatus'] == '1') { ?>
										<button class="btn btn-outline btn-primary btn-xs pull-center"><i class="fa fa-check"></i> Activo</button>
									<?php } else { ?>
										<button class="btn btn-outline btn-danger btn-xs pull-center"><i class="fa fa-times"></i> Inactivo</button>
									<?php } ?>

										<!--<button data-toggle="modal" href="#modal_generaperiodo" 
										data-pidperiodo_skip="<?php echo $this->encrypt->encode($list_s['PIdPeriodo']); ?>"
										data-panio="<?php echo $list_s['PAnio']; ?>"
										data-pperiodo="<?php echo $list_s['PPeriodo']; ?>"
										data-pfechainicial="<?php echo $list_s['PFechainicial']; ?>"
										data-pfechafinal="<?php echo $list_s['PFechafinal']; ?>"
										class="btn btn-outline btn-info btn-xs pull-right open">
										<i class="fa fa-pencil"></i> Editar
										</button>-->
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


<!-- ******************* Modal Evaluación Sem ********************* -->

<div class="modal inmodal" id="modal_genera" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Genera Periodo</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('generaperiodo/save_periodo', array('name' => 'FormPeriodo', 'id' => 'FormPeriodo', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">AÑO:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PAnio" name="PAnio" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">PERIODO: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPeriodo" name="PPeriodo" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group" id="data_2">
					<label class="col-lg-3 control-label" for="">FECHA DE INICIO: <em>*</em></label>
					<div class="col-lg-9 input-group date">
						<!--<input type="text" id="PFechainicial" name="PFechainicial" value="" maxlength='150' class="form-control uppercase" required />-->
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" id="PFechainicial" name="PFechainicial" class="form-control" value="yyyy-mm-dd">
					</div>
				</div>

				<div class="form-group" id="data_2">
					<label class="col-lg-3 control-label" for="">FECHA FINAL: <em>*</em></label>
					<div class="col-lg-9 input-group date">
						<!--<input type="text" id="PFechafinal" name="PFechafinal" value="" maxlength='150' class="form-control uppercase" required />-->
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" id="PFechafinal" name="PFechafinal" class="form-control" value="yyyy-mm-dd">
					</div>
				</div>
				
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'generaperiodo','save_periodo') ){ ?>
						<input type="hidden" id="PIdPeriodo_skip" name="PIdPeriodo_skip" />
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
<!-- Data picker -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		/* Page-Level Scripts */
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			}
		});	

		$(document).on("click", ".open", function () {
			$(".modal-content #PIdPeriodo_skip").val( $(this).data('pidperiodo_skip') );
			$(".modal-content #PAnio").val( $(this).data('paño') );
			$(".modal-content #PPeriodo").val( $(this).data('pperiodo') );
			$(".modal-content #PFechainicial").val( $(this).data('pfechainicial') );
			$(".modal-content #PFechafinal").val( $(this).data('pfechafinal') );
		});

		$("#FormPeriodo").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("generaperiodo/save_periodo"); ?>",
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
		
		$('#data_2 .input-group.date').datepicker({
			startView: 1,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true,
			format: "yyyy-mm-dd"
		});
		
	});
</script>