<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>"Aulas, laboratorios y talleres"</h3>
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
							<th colspan="2">CAPACIDAD INSTALADA EN AULAS</th>
							<th rowspan="2">LABORATORIOS <br />(Donde se imparten ciencias exactas: Química, Física, Biología)</th>
							<th rowspan="2">TALLERES <br />(De idiomas, Dibujo y cómputo)</th>
							<th rowspan="2">ACCIÓN</th>
						</tr>
						<tr>
							<th>EXISTENTES</th>
							<th>EN USO <br />(sólo para impartir clases)</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach($varios as $key_a => $list_a ){ ?>
						<tr>
							<td><?=$list_a['VAAulasExistentes']?></td>
							<td><?=$list_a['VAAulasUso']?></td>
							<td><?=$list_a['VALaboratorios']?></td>
							<td><?=$list_a['VATalleres']?></td>
							<td><button data-toggle="modal" href="#modal_aulas" 
								data-vaidvarios_skip="<?php echo $this->encrypt->encode($list_a['VAIdVarios']); ?>"
								data-vaaulasexistentes="<?php echo $list_a['VAAulasExistentes']; ?>"
								data-vaaulasuso="<?php echo $list_a['VAAulasUso']; ?>"
								data-valaboratorios="<?php echo $list_a['VALaboratorios']; ?>"
								data-vatalleres="<?php echo $list_a['VATalleres']; ?>"
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


<div class="modal inmodal" id="modal_aulas" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Aulas, laboratorios y talleres</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/save_aulas', array('name' => 'FormAulas', 'id' => 'FormAulas', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Aulas existentes: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="VAAulasExistentes" name="VAAulasExistentes" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Aulas en uso(sólo para impartir clases): <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="VAAulasUso" name="VAAulasUso" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Laboratorios (Química, Física y Biología): <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="VALaboratorios" name="VALaboratorios" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Talleres (De idiomas, Dibujo y cómputo): <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="VATalleres" name="VATalleres" value="" maxlength='150' class="form-control lowercase" required />
					</div>
				</div>
				
				
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_aulas') ){ ?>
						<input type="hidden" id="VAIdVarios_skip" name="VAIdVarios_skip" />
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
			$(".modal-content #VAIdVarios_skip").val( $(this).data('vaidvarios_skip') );
			$(".modal-content #VAAulasExistentes").val( $(this).data('vaaulasexistentes') );
			$(".modal-content #VAAulasUso").val( $(this).data('vaaulasuso') );
			$(".modal-content #VALaboratorios").val( $(this).data('valaboratorios') );
			$(".modal-content #VATalleres").val( $(this).data('vatalleres') );
			
		});

		$("#FormAulas").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_aulas"); ?>",
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