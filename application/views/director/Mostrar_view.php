<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Histórico de Directores de Planteles</h3>
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
					<button class="btn-default btn-sm " data-toggle="modal" href="#modal_personal" >
										<i class="fa fa-plus"></i> Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		<div class="ibox-content">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
					<thead>
						<tr>
							<th>FECHA</th>
							<th>INICIO</th>
							<th>FINALIZO</th>
							<th>ACCIÓN</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach($directores as $key_d => $list_d ){ ?>
						<tr>
							<td><?=$list_d['DIFecha']?></td>
							<td><?=$list_d['DIInicio']?></td>
							<td><?=$list_d['DIFin']?></td>
							<td>
							<button data-toggle="modal" href="#modal_director" 
								data-diiddirector_skip="<?php echo $this->encrypt->encode($list_d['DIIdDirector']); ?>" 
								data-difecha="<?php echo $list_d['DIFecha']; ?>"
								data-diinicio="<?php echo $list_d['DIInicio']; ?>"
								data-difin="<?php echo $list_d['DIFin']; ?>"
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
</div>




<div class="modal inmodal" id="modal_personal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o charset=utf-8"></i>&nbsp;&nbsp; Histórico de Directores de Planteles</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('director/save', array('name' => 'FormDirector', 'id' => 'FormDirector', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Fecha<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIFecha" name="DIFecha" value="" maxlength='150' class="form-control lowcase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Inicio: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIInicio" name="DIInicio" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Finalizó: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIFin" name="DIFin" value="" maxlength='150' class="form-control  uppercase" />
					</div>
				</div>
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'director','save') ){ ?>
						<input type="hidden" id="DIIdDirector_skip" name="DIIdDirector_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal Director ********************* -->


<div class="modal inmodal" id="modal_director" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o charset=utf-8"></i>&nbsp;&nbsp; Histórico de Directores de PLanteles</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('director/editar', array('name' => 'FormDirector_editar', 'id' => 'FormDirector_editar', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Fecha<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIFecha" name="DIFecha" value="" maxlength='150' class="form-control lowcase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Inicio: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIInicio" name="DIInicio" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Finalizó: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="DIFin" name="DIFin" value="" maxlength='150' class="form-control  uppercase" />
					</div>
				</div>
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'director','editar') ){ ?>
						<input type="hidden" id="DIIdDirector_skip" name="DIIdDirector_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal Editar Director ********************* -->



<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		/* Page-Level Scripts */
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			}
		});	

		$(document).on("click", ".open", function () {
			$(".modal-content #DIIdDirector_skip").val( $(this).data('diiddirector_skip') );
			$(".modal-content #DIFecha").val( $(this).data('difecha') );
			$(".modal-content #DIInicio").val( $(this).data('diinicio') );
			$(".modal-content #DIFin").val( $(this).data('difin') );
		});

		$("#FormDirector").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("director/save"); ?>",
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
		});//----->fin función guardar nuevo director


		$("#FormDirector_editar").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("director/editar"); ?>",
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
		});//----->fin función editar nuevo director
		
	});
</script>