<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>GENERA GRUPO</h3>
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
				<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>
			</div> 
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
							<thead>
										<tr>
											
											
											<th>GRUPO</th>
											<th>TURNO</th>
											<th>SEMESTRE</th>
											<th>PERIODO</th>
											<th>FORMACIÓN PARA EL TRABAJO</th>
											<th>ACCIÓN</th>
										</tr>			
							</thead>
							<tbody>
								<?php 
								foreach ($grupos as $clave => $listGrupo) { ?>
										<tr>
											<td><?= $listGrupo['GGrupo']; ?></td>
											<td> <?php if ($listGrupo['GTurno'] == '1'){
												echo 'Matutino';
											} else {
												echo 'Vespertino';
											} ?>
											</td>
											<td><?= $listGrupo['GSemestre']; ?></td>
											<td><?= $listGrupo['GIdPeriodo']; ?></td>
											<td><?= $listGrupo['FNombre']; ?></td>
											
									<td><button data-toggle="modal" href="#modal_genera" 
										data-gidgrupos_skip="<?php echo $this->encrypt->encode($listGrupo['GIdGrupos']); ?>"
										data-ggrupo="<?php echo $listGrupo['GGrupo']; ?>"
										data-gturno="<?php echo $listGrupo['GTurno']; ?>"
										data-gsemestre="<?php echo $listGrupo['GSemestre']; ?>"
										
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


<!-- ******************* Modal Evaluación Sem ********************* -->

<div class="modal inmodal" id="modal_genera" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Genera Grupos</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('generagrupo/save_grupo', array('name' => 'FormGrupo', 'id' => 'FormGrupo', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">GRUPO:<em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="GGrupo" name="GGrupo" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">TURNO: <em>*</em></label>
					<div class="col-sm-9"><select class="form-control m-b" name="GTurno" id="GTurno">
                                        <option>Selecciona una opción</option>
										<option value="1">a) Matutino.</option>
                                        <option value="2">a) Vespertino.</option>
                                    </select>
									</div>
                </div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">SEMESTRE: <em>*</em></label>
					<div class="col-sm-9"><select class="form-control m-b" name="GSemestre" id="GSemestre">
                                        <option>Selecciona una opción</option>
										<option value="1"> 1°</option>
                                        <option value="2"> 2°</option>
										<option value="3"> 3°</option>
                                        <option value="4"> 4°</option>
										<option value="5"> 5°</option>
                                        <option value="6"> 6°</option>
                                    </select>
									</div>
                </div>
				
				<div class="form-group" id='formaciones' style="display: none">
					<label class="col-lg-3 control-label" for="">FORMACIÓN PARA EL TRABAJO: <em>*</em></label>
					<div class="col-sm-9"><select class="form-control m-b" name="GIdFormacion" id="GIdFormacion">
                                        <option>Selecciona una opción</option>
										<option value="1"> CONTABILIDAD</option>
                                        <option value="2"> TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN </option>
										<option value="3"> ASISTENTE DE OPERACIONES LOGÍSTICAS</option>
                                        <option value="4"> TRAMITACIÓN ADUANAL</option>
										<option value="5"> LABORATORISTA QUÍMICO</option>
										<option value="6"> AUXILIAR DE ENFERMERÍA</option>
                                        <option value="7"> INTERPRETACIÓN Y TRADUCCIÓN DEL IDIOMA</option>
										<option value="8"> TURISMO</option>
                                        <option value="9"> DIBUJO ARQUITECTÓNICO Y DE CONSTRUCCIÓN</option>
                                    </select>
									</div>
                </div>
				




				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<!--<?php// if( is_permitido(null,'plantel','save_oferta') ){ ?>-->
						<input type="hidden" id="GIdGrupos_skip" name="GIdGrupos" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<!--<?php //} ?>-->
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
			$(".modal-content #GIdGrupos_skip").val( $(this).data('gidgrupos_skip') );
			$(".modal-content #GGrupo").val( $(this).data('ggrupo') );
			$(".modal-content #GTurno").val( $(this).data('gturno') );
			$(".modal-content #GSemestre").val( $(this).data('gsemestre') );
			
		});

		$("#FormGrupo").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("generagrupo/save_grupo"); ?>",
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
		
		$('#GSemestre').change(function(){
			var valorCambiado =$(this).val();
			if((valorCambiado >= '3')){
			   $('#formaciones').css('display','block');
			 } else if(valorCambiado <= '2' )
				$('#formaciones').css('display','none');
			 {
				 //otra accion
			 }
		});
	
	});
</script>