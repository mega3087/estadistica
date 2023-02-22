<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<input type="hidden" name="idPlantel" id="idPlantel" value="<?= $this->encrypt->encode($CPLClave)?>">
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
		<?php foreach($periodo_act as $key => $list ){ ?>
			<h3>Matrícula  del ciclo escolar <?php echo $anio = $list['PAnio']?> - <?php echo $periodo=$list['PPeriodo']?> del <?=$list['PFechainicial']?> al <?=$list['PFechafinal']?> </h3><?php } ?>
		</div>
	</div>
</div>
<div class="ibox-content">
<div class="row">
	<div class="col-lg-12">
		<?php muestra_mensaje(); ?>
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<div class="pull-right">
				<button class="btn-default btn-sm back"><i class="fa fa-mail-reply"> </i> Atras</button> 
				</div><br><br>
				<?php /*if ( $entrega == 0) {?>
						<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
						<div class="alert alert-default">
                            En proceso de Captura...
                        </div></h3>
				<?php } */?>
				<?php //if ( $entrega == 1) {?>
					<?php foreach($estatus as $key => $lista ){ ?>
						
						<input type="hidden" id="ENIdEntrega" name="ENIdEntrega" value='<?php echo $lista['ENIdEntrega']; ?>'/>
						<?php if ( nvl($lista['ENEstatus']) == '0' || nvl($lista['ENEstatus']) == 'NULL' ) {?>
							
							<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>&nbsp;&nbsp;&nbsp; 
							<div class="alert alert-default">
                            	En proceso de captura...
                        	</div></h3>
						<?php }?>
						<?php if ( nvl($lista['ENEstatus']) == '1') {?>
							<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>&nbsp;&nbsp;&nbsp;
							<div class="alert alert-warning">
                           	 	En proceso de validación...
                        	</div></h3>
						<?php }?>
						<?php if ( nvl($lista['ENEstatus']) == '2') {?>
							<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>&nbsp;&nbsp;&nbsp; 
							<div class="alert alert-success">
                            	Se ha aceptado la captura.
                        	</div></h3>
						<?php }?>
						<?php if ( nvl($lista['ENEstatus']) == '3') {?>
							<h3>&nbsp;PLANTEL <?=nvl($CPLNombre)?>&nbsp;&nbsp;&nbsp; 
							<div class="alert alert-danger">
                            	En proceso de corrección.
                        	</div></h3>
						<?php }?>
					<?php }?>
				<?php// }?>
			</div>

			<div class="form-group">
			<label class="col-lg-3 control-label" for="">Seleccionar Periodo Escolar: <em>*</em></label>
			<div class="col-lg-6">
				<select name="SemPeriodos" id="SemPeriodos" class="form-control SemPeriodos">
				<?php foreach ($periodos as $key => $listPeriodo) { 
					$periodo = $listPeriodo['PAnio'].'-'.$listPeriodo['PPeriodo']; ?>
					<option value="<?=$periodo?>">
						<?=$periodo?>
					</option>
				<?php } ?>
				</select>
			</div>

			<div class="col-lg-3">
				<a href="" target="_blank" id="ImprimirGrupos" type="button" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Imprimir</a>
			</div>
		</div>
		<br><br>
		<br><br>    
		<div class="msgExistencia"></div>
		<div class="resultExistencia"> </div>								

<!--*************** Modal existencia del semestral ********************* -->

<div class="modal inmodal" id="modal_existencia" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-users"></i>&nbsp;&nbsp; Matrícula</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('existencia/save_existencia', array('name' => 'Formexistencia', 'id' => 'Formexistencia', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">SEMESTRE:<em></em></label>
					<div class="col-lg-9">
						<input type="text" id="GRSemestres" name="GRSemestres" value="" class="form-control disabled" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">GRUPO:<em></em></label>
					<div class="col-lg-9">
						<input type="text" id="GRGrupo" name="GRGrupo" value="" maxlength='150' class="form-control disabled" />
					</div>
				</div>		
				<?php 
				// FECHA LIMITE DE ENTREGA   
				$now = date("m-d"); 
				$datefin = date("10-31");
				// FIN
				?>
				
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">HOMBRES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="GRMasculino" name="GRMasculino" value="" maxlength='150' class="form-control <?php if($now > $datefin) echo 'disabled'; ?> uppercase"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">MUJERES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="GRFemenino" name="GRFemenino" value="" maxlength='150' class="form-control uppercase <?php if($now > $datefin) echo 'disabled'; ?>"/>
					</div>
				</div>

				<div class="form-group" id="mostrarformacion">
					<label class="col-lg-3 control-label" for="">FORMACIÓN PARA EL TRABAJO: <em>*</em></label>
					<div class="col-sm-9">
						<select class="form-control m-b" name="GRCClave" id="GRCClave">
							<?php foreach($formacion as $f => $listf ){ ?>
                                <option value="<?= $listf['FIdFormacion'] ?>"> <?= $listf['FNombre'] ?> </option>
							<?php } ?>
                        </select>
					</div>
                </div>

				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
					
                        <?php if ( $entrega == 0 || $entrega == 3) {?>
						
						<?php if( is_permitido(null,'existencia','save_existencia') ){ ?>
						<input type="hidden" id="GRClave" name="GRClave"/>
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- ******************* FIN Modal Existencia ********************* -->

<!--*************** Modal existencia del semestral ********************* -->

<div class="modal inmodal" id="modal_finalizar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-users"></i>&nbsp;&nbsp; Matrícula</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('existencia/save_existencia', array('name' => 'Formexistencia', 'id' => 'Formexistencia', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">SEMESTRE:<em></em></label>
					<div class="col-lg-9">
						<input type="text" id="GRSemestres" name="GRSemestres" value="" class="form-control disabled" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">GRUPO:<em></em></label>
					<div class="col-lg-9">
						<input type="text" id="GRGrupo" name="GRGrupo" value="" maxlength='150' class="form-control disabled" />
					</div>
				</div>		
				<?php 
				// FECHA LIMITE DE ENTREGA   
				$now = date("m-d"); 
				$datefin = date("02-15");
				// FIN
				?>
				
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">HOMBRES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="GRMasculino" name="GRMasculino" value="" maxlength='150' class="form-control <?php if($now > $datefin) echo 'disabled'; ?> uppercase"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">MUJERES: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="GRFemenino" name="GRFemenino" value="" maxlength='150' class="form-control uppercase <?php if($now > $datefin) echo 'disabled'; ?>"/>
					</div>
				</div>

				<div class="form-group" id="mostrarformacion">
					<label class="col-lg-3 control-label" for="">FORMACIÓN PARA EL TRABAJO: <em>*</em></label>
					<div class="col-sm-9">
						<select class="form-control m-b" name="GRCClave" id="GRCClave">
							<?php foreach($formacion as $f => $listf ){ ?>
                                <option value="<?= $listf['FIdFormacion'] ?>"> <?= $listf['FNombre'] ?> </option>
							<?php } ?>
                        </select>
					</div>
                </div>

				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if ( $entrega == 0) {?>
						<?php if( is_permitido(null,'existencia','save_existencia') ){ ?>
						<input type="hidden" id="GRClave" name="GRClave"/>
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
				
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- ******************* FIN Modal Existencia ********************* -->


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

		abrirPeriodos();

		$(document).on("click", ".open", function () {
			$(".modal-content #GRClave").val( $(this).data('grclave') );
			$(".modal-content #GRGrupo").val( $(this).data('grgrupo') );
			$(".modal-content #GRMasculino").val( $(this).data('grmasculino') );
			$(".modal-content #GRFemenino").val( $(this).data('grfemenino') );
			$(".modal-content #GRSemestres").val( $(this).data('grsemestre') );
			$(".modal-content #GRCClave").val( $(this).data('grcclave') );
			$("semestre").val( $(this).data('grsemestre') );
			var sem = document.getElementById("GRSemestres").value;
			if(sem >=3)
			{
				$('#mostrarformacion').show();
			}
			else{
				$('#mostrarformacion').hide();
				document.getElementById("GRCClave").value = "";
				
			}
			
		});
	});


		$("#Formexistencia").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("existencia/save_existencia"); ?>",
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
	
		
    $(document).on("change", ".SemPeriodos", function (event) {
        abrirPeriodos();
    });

    function abrirPeriodos() {
        var valorSem = $(".SemPeriodos option:selected").val();
		var searchSem = window.btoa(unescape(encodeURIComponent(valorSem))).replace("=","").replace("=","");
        var idPlantelRep = document.getElementById("idPlantel").value;
        
		var valor = $(".SemPeriodos option:selected").val();
        var PlantelId = document.getElementById("idPlantel").value;
        
		$("#ImprimirGrupos").attr("href","<?php echo base_url("grupos/ImprimirGrupos"); ?>/"+idPlantelRep+"/"+searchSem);

        var sem = valor.split('-')[1];
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("existencia/verPeriodos_skip"); ?>",
            data: {idPlantel: PlantelId, periodo: valor},
            dataType: "html",
            beforeSend: function(){
                //carga spinner
                $(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
            },
            success: function(data){
                $(".msgExistencia").empty();
                $(".resultExistencia").empty();
                $(".resultExistencia").append(data);
                $(".loading").empty();
            }
        });
		
	}
</script>