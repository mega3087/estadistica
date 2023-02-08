<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Espacios de Infraestructura</h3>
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
							<th colspan="2">AULAS</th>
							<th rowspan="2">LABORATORIOS</th>
							<th rowspan="2">TALLERES</th>
							<th rowspan="2">BIBLIOTECA</th>
							<th rowspan="2">E. PARA <br /> DOCENTES</th>
							<th rowspan="2">E. PARA <br /> ORIENTACIÓN Y <br /> TUTORÍAS</th>
							<th rowspan="2">ÁREA <br />ADMINISTRATIVA</th>
							<th rowspan="2">MÓDULOS SANITARIOS</th>
							<th rowspan="2">ÁREAS DEPORTIVAS</th>
							<th rowspan="2">ACCIÓN</th>
						</tr>
						<tr>
							<th>FORMALES</th>
							<th>PREFABRICADAS</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach($espacios as $key_e => $list_e ){ ?>
						<tr>
							<td><?=$list_e['ESAulasFormales']?></td>
							<td><?=$list_e['ESAulasPre']?></td>
							<td><?=$list_e['ESLaboratorios']?></td>
							<td><?=$list_e['ESTalleres']?></td>
							<td><?=$list_e['ESBiblioteca']?></td>
							<td><?=$list_e['ESDocentes']?></td>
							<td><?=$list_e['ESOrientacion']?></td>
							<td><?=$list_e['ESAdministrativa']?></td>
							<td><?=$list_e['ESSanitarios']?></td>
							<td><?=$list_e['ESDeportivas']?></td>
							<td><button data-toggle="modal" href="#modal_espacios" 
								data-esidespacios_skip="<?php echo $this->encrypt->encode($list_e['ESIdEspacios']); ?>"
								data-esaulasformales="<?php echo $list_e['ESAulasFormales']; ?>"
								data-esaulaspre="<?php echo $list_e['ESAulasPre']; ?>"
								data-eslaboratorios="<?php echo $list_e['ESLaboratorios']; ?>"
								data-estalleres="<?php echo $list_e['ESTalleres']; ?>"
								data-esbiblioteca="<?php echo $list_e['ESBiblioteca']; ?>"
								data-esdocentes="<?php echo $list_e['ESDocentes']; ?>"
								data-esorientacion="<?php echo $list_e['ESOrientacion']; ?>"
								data-esadministrativa="<?php echo $list_e['ESAdministrativa']; ?>"
								data-essanitarios="<?php echo $list_e['ESSanitarios']; ?>"
								data-esdeportivas="<?php echo $list_e['ESDeportivas']; ?>"
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


<div class="modal inmodal" id="modal_espacios" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Espacios</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/save_espacios', array('name' => 'FormEspacios', 'id' => 'FormEspacios', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">AULAS FORMALES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESAulasFormales" name="ESAulasFormales" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">AULAS PREFABRICADAS: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESAulasPre" name="ESAulasPre" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">LABORATORIOS: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESLaboratorios" name="ESLaboratorios" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">TALLERES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESTalleres" name="ESTalleres" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">BIBLIOTECA: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESBiblioteca" name="ESBiblioteca" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">ESPACIOS PARA DOCENTES <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESDocentes" name="ESDocentes" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">ESPACIO PARA ORIENTACIÓN Y TUTORIAS: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESOrientacion" name="ESOrientacion" value="" maxlength='150' class="form-control lowercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">AREA ADMINISTRATIVA: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESAdministrativa" name="ESAdministrativa" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">MÓDULOS SANITARIOS: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESSanitarios" name="ESSanitarios" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">AREAS ADMINISTRATIVAS: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ESDeportivas" name="ESDeportivas" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_espacios') ){ ?>
						<input type="hidden" id="ESIdEspacios_skip" name="ESIdEspacios_skip" />
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
			$(".modal-content #ESIdEspacios_skip").val( $(this).data('esidespacios_skip') );
			$(".modal-content #ESAulasFormales").val( $(this).data('esaulasformales') );
			$(".modal-content #ESAulasPre").val( $(this).data('esaulaspre') );
			$(".modal-content #ESLaboratorios").val( $(this).data('eslaboratorios') );
			$(".modal-content #ESTalleres").val( $(this).data('estalleres') );
			$(".modal-content #ESBiblioteca").val( $(this).data('esbiblioteca') );
			$(".modal-content #ESDocentes").val( $(this).data('esdocentes') );
			$(".modal-content #ESOrientacion").val( $(this).data('esorientacion') );
			$(".modal-content #ESAdministrativa").val( $(this).data('esadministrativa') );
			$(".modal-content #ESSanitarios").val( $(this).data('essanitarios') );
			$(".modal-content #ESDeportivas").val( $(this).data('esdeportivas') );
			
		});

		$("#FormEspacios").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_espacios"); ?>",
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