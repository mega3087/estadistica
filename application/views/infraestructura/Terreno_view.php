<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Situación del Terreno (juridico)</h3>
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
		
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="m-b-md">
							<a data-toggle="modal" href="#modal_datos" 
								data-tidterreno_skip="<?php echo $this->encrypt->encode($TIdTerreno); ?>"
								data-torganismo="<?php echo $TOrganismo; ?>" 
								data-tmunicipio="<?php echo $TMunicipio; ?>"
								data-tnaturaleza="<?php echo $TNaturaleza; ?>"
								data-tantecedentes="<?php echo $TAntecedentes; ?>"
								data-tsituacion="<?php echo $TSituacion; ?>"
								data-taccion="<?php echo $TAccion; ?>"
								data-tinstancia="<?php echo $TInstancia; ?>"
								data-trecursos="<?php echo $TRecursos; ?>"
								data-tobservaciones="<?php echo $TObservaciones; ?>"
								data-tclavecatastral="<?php echo $TClaveCatastral; ?>"
								data-tsuperficieconstruida="<?php echo $TSuperficieConstruida; ?>"
								data-tsuperficieterreno="<?php echo $TSuperficieTerreno; ?>"
								data-tvalor="<?php echo $TValor; ?>"
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</a>
							
							<h3>Situación del Terreno (Jurídico)</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>ORGANISMO:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TOrganismo)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>MUNICIPIO:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TMunicipio)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>NATURALEZA DEL PREDIO:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TNaturaleza)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>ANTECEDENTES O TRÁMITES REALIZADOS:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TAntecedentes)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>SITUACIÓN ACTUAL:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TSituacion)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>ACCIÓN A REALIZAR:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TAccion)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>ANTE QUÉ INSTANCIA:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TInstancia)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>RECURSOS FINANCIEROS NECESARIOS PARA LA REGULARIZACIÓN DEL PREDIO:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TRecursos)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>OBSERVACIONES:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TObservaciones)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>CLAVE CATASTRAL:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TClaveCatastral)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>SUPERFICIE CONSTRUIDA:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TSuperficieConstruida)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>SUPERFICIE DE TERRENO:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TSuperficieTerreno)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>VALOR DE INMUEBLE:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($TValor)?></dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
		
</div>


<!-- ******************* Modal Situación del Terreno ********************* -->

<div class="modal inmodal" id="modal_datos" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Situación del Terreno (Jurídico)</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/save_terreno', array('name' => 'FormTerreno', 'id' => 'FormTerreno', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">ORGANISMO: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TOrganismo" name="TOrganismo" value="" maxlength='250' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">MUNICIPIO: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TMunicipio" name="TMunicipio" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">NATURALEZA DEL PREDIO: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TNaturaleza" name="TNaturaleza" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">ANTECEDENTES O TRÁMITES REALIZADOS: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TAntecedentes" name="TAntecedentes" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">SITUACIÓN ACTUAL: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TSituacion" name="TSituacion" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">ACCIÓN A REALIZAR: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TAccion" name="TAccion" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">ANTE QUÉ INSTANCIA:<em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TInstancia" name="TInstancia" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">RECURSOS FINANCIEROS NECESARIOS PARA LA REGULARIZACIÓN DEL PREDIO: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TRecursos" name="TRecursos" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">OBSERVACIONES: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TObservaciones" name="TObservaciones" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">CLAVE CATASTRAL: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TClaveCatastral" name="TClaveCatastral" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">SUPERFICIE CONSTRUIDA: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TSuperficieConstruida" name="TSuperficieConstruida" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">SUPERFICIE DE TERRENO: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TSuperficieTerreno" name="TSuperficieTerreno" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">VALOR DE INMUEBLE: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="TValor" name="TValor" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_terreno') ){ ?>
						<input type="hidden" id="TIdTerreno_skip" name="TIdTerreno_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal Situación del Terreno ********************* -->

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
			$(".modal-content #TIdTerreno_skip").val( $(this).data('tidterreno_skip') );
			$(".modal-content #TOrganismo").val( $(this).data('torganismo') );
			$(".modal-content #TMunicipio").val( $(this).data('tmunicipio') );
			$(".modal-content #TNaturaleza").val( $(this).data('tnaturaleza') );
			$(".modal-content #TAntecedentes").val( $(this).data('tantecedentes') );
			$(".modal-content #TSituacion").val( $(this).data('tsituacion') );
			$(".modal-content #TAccion").val( $(this).data('taccion') );
			$(".modal-content #TInstancia").val( $(this).data('tinstancia') );
			$(".modal-content #TRecursos").val( $(this).data('trecursos') );
			$(".modal-content #TObservaciones").val( $(this).data('tobservaciones') );
			$(".modal-content #TClaveCatastral").val( $(this).data('tclavecatastral') );
			$(".modal-content #TSuperficieConstruida").val( $(this).data('tsuperficieconstruida') );
			$(".modal-content #TSuperficieTerreno").val( $(this).data('tsuperficieterreno') );
			$(".modal-content #TValor").val( $(this).data('tvalor') );
		});

		$("#FormTerreno").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_terreno"); ?>",
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