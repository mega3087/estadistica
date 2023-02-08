<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Equipos de Cómputo en operación según su uso</h3>
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
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		</div>
		<div class="ibox-content">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
					<thead>
						<tr>
							<th>EDUCATIVO</th>
							<th>ADMINISTRATIVO</th>
							<th>DOCENTE</th>
							<th>TOTAL</th>
							<th>EDUCATIVO CON INTERNET</th>
							<th>ACCIÓN</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($computo as $key_c => $list_c ){ ?>
						<tr>
							<td><?=$list_c['COEducativas']?></td>
							<td><?=$list_c['COAdministrativas']?></td>
							<td><?=$list_c['CODocentes']?></td>
							<td><?=$list_c['COTotal']?></td>
							<td><?=$list_c['COInternet']?></td>
							<td><button data-toggle="modal" href="#modal_computo" 
								data-coidcomputo_skip="<?php echo $this->encrypt->encode($list_c['COIdComputo']); ?>"
								data-coeducativas="<?php echo $list_c['COEducativas']; ?>"
								data-coadministrativas="<?php echo $list_c['COAdministrativas']; ?>"
								data-codocentes="<?php echo $list_c['CODocentes']; ?>"
								data-cototal="<?php echo $list_c['COTotal']; ?>"
								data-cointernet="<?php echo $list_c['COInternet']; ?>"
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


<div class="modal inmodal" id="modal_computo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Equipos de Cómputo en operación según su uso</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('plantel/save', array('name' => 'FormPlantel', 'id' => 'FormPlantel', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">EDUCATIVO: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="COEducativas" name="COEducativas" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">ADMINISTRATIVO: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="COAdministrativas" name="COAdministrativas" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">DOCENTE: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CODocentes" name="CODocentes" value="" maxlength='150' class="form-control lowercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">TOTAL: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="COTotal" name="COTotal" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">EDUCATIVO CON INTERNET: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="COInternet" name="COInternet" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_computo') ){ ?>
						<input type="hidden" id="COIdComputo_skip" name="COIdComputo_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


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
			$(".modal-content #COIdComputo_skip").val( $(this).data('coidcomputo_skip') );
			$(".modal-content #COEducativas").val( $(this).data('coeducativas') );
			$(".modal-content #COAdministrativas").val( $(this).data('coadministrativas') );
			$(".modal-content #CODocentes").val( $(this).data('codocentes') );
			$(".modal-content #COTotal").val( $(this).data('cototal') );
			$(".modal-content #COInternet").val( $(this).data('cointernet') );
		});

		$("#FormPlantel").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_computo"); ?>",
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
						$("#error").empty();
						$("#error").append(data);
						$(".loading").html("");
					}
					
				}
			});
		});//----->fin		
		
	});
</script>