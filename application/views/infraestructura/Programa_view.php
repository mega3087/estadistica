<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Programa de Infraestructura</h3>
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
					<button class="btn-default btn-sm " data-toggle="modal" href="#modal_programa" >
										<i class="fa fa-plus"></i> Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?></h3>
			</div> 
		<div class="ibox-content">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
					<thead>
						<tr>
							<th>PROGRAMA</th>
							<th>META</th>
							<th>MONTO</th>
							<th>ACCIÓN</th>
						</tr>	
					</thead>
					<tbody>
						<?php 
						$suma = 0;
						foreach($programa as $key_p => $list_p ){ 
						$suma+= $list_p['PIMonto'];
						?>
						<tr>
							<td><?=$list_p['PIPrograma']?></td>
							<td><?=$list_p['PIMeta']?></td>
							<td class="text-right">$ <?=number_format($list_p['PIMonto'],2)?></td>
							<td><button data-toggle="modal" href="#modal_programa_edit" 
								data-piidprograma_skip="<?php echo $this->encrypt->encode($list_p['PIIdPrograma']); ?>"
								data-piprograma="<?php echo $list_p['PIPrograma']; ?>"
								data-pimeta="<?php echo $list_p['PIMeta']; ?>"
								data-pimonto="<?php echo $list_p['PIMonto']; ?>"
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
								</button>
								
							</td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td class="text-right">$ <?=number_format($suma,2)?></td>
							<td>&nbsp;</td>
						</tr>
					</tfoot>
				</table>
		</div>
	</div>
</div>


<!-- ******************* Modal Programa  agregar********************* -->

<div class="modal inmodal" id="modal_programa" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Programa de Infraestructura</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/save_programa', array('name' => 'FormPrograma', 'id' => 'FormPrograma', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Programa:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIPrograma" name="PIPrograma" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Meta: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIMeta" name="PIMeta" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Monto: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIMonto" name="PIMonto" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_programa') ){ ?>
						<input type="hidden" id="PIIdPrograma_skip" name="PIIdPrograma_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Personal ********************* -->

<!-- ******************* Modal Programa  agregar********************* -->

<div class="modal inmodal" id="modal_programa_edit" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Programa de Infraestructura</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/edit_programa', array('name' => 'FormPrograma2', 'id' => 'FormPrograma2', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Programa:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIPrograma" name="PIPrograma" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Meta: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIMeta" name="PIMeta" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Monto: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PIMonto" name="PIMonto" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','edit_programa') ){ ?>
						<input type="hidden" id="PIIdPrograma_skip" name="PIIdPrograma_skip" />
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
			$(".modal-content #PIIdPrograma_skip").val( $(this).data('piidprograma_skip') );
			$(".modal-content #PIMeta").val( $(this).data('pimeta') );
			$(".modal-content #PIPrograma").val( $(this).data('piprograma') );
			$(".modal-content #PIMonto").val( $(this).data('pimonto') );
		});

		//Agrega un nuevo programa
		$("#FormPrograma").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_programa"); ?>",
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

		// Editar programa
		$("#FormPrograma2").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/edit_programa"); ?>",
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