<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Centros Educativos Certificados, en Proceso y Programados</h3>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8">
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
							<th>Estatus</th>
							<th>Fecha de dictamen</th>
							<th>Acción</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach($data as $key_d => $list_d ){ ?>
						<tr>
							<td><?=$list_d['CEstatus']?></td>
							<td><?=$list_d['CPeriodo']?></td>
							<td>
							<button data-toggle="modal" href="#modal_certificado" 
								data-cidcertificados_skip="<?php echo $this->encrypt->encode($list_d['CIdCertificados']); ?>" 
								data-cestatus="<?php echo $list_d['CEstatus']; ?>"
								data-cperiodo="<?php echo $list_d['CPeriodo']; ?>"
	
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


<!-- ******************* Modal Certificados ********************* -->

<div class="modal inmodal" id="modal_certificado" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Centros Educativos Certificados, en Proceso y Programados</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('evaluaciones/save_certificado', array('name' => 'FormCertificado', 'id' => 'FormCertificado', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Estatus:
 <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CEstatus" name="CEstatus" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Periodo: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPeriodo" name="CPeriodo" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'evaluaciones','save_certificado') ){ ?>
						<input type="hidden" id="CIdCertificados_skip" name="CIdCertificados_skip" />
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
			$(".modal-content #CIdCertificados_skip").val( $(this).data('cidcertificados_skip') );
			$(".modal-content #CEstatus").val( $(this).data('cestatus') );
			$(".modal-content #CPeriodo").val( $(this).data('cperiodo') );
		});

		$("#FormCertificado").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("evaluaciones/save_certificado"); ?>",
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