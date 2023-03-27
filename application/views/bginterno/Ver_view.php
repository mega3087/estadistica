<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/inspinia/css/plugins/clockpicker/clockpicker.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/inspinia/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">


<div class="row">
	<div class="col-lg-12">
		<div class="ibox">
			<div class="ibox-content">
				<h2><label>
					Levantamiento Estadístico Interno Intersemestral.
				</label></h2><br>
				<h2> Datos de Identificación</h2>
				
				<br>
					<div class="row">
						<label class="col-md-2" style="text-align:right">Centro Educativo:</label>
							<div class="col-md-2">
								<div class="form-group">
									<select name="idPlantel" id="idPlantel" class="form-control idPlantelLevan" <?php if (get_session('UPlantel') <= 83 ) echo "disabled"; ?> required >
										<option value="">-Seleccionar-</option>
										<?php foreach($planteles as $p => $listPl){ ?>
											<option value="<?=$listPl['CPLClave']?>" <?php if($listPl['CPLClave'] == get_session('UPlantel') ) { echo "selected"; } ?> ><?= $listPl['CPLNombre']?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</label>
						
						<label class="col-md-2" style="text-align:right">Clave del Centro de Trabajo:</label>
						<div class="col-md-2">
							<div class="form-group">
								<input type="text" class="form-control" name="cct" id="cct" value="" disabled>
							</div>
						</div>
						<label class="col-md-1" style="text-align:right">Turno:</label>
						<div class="col-md-1">
							<label>Mat&nbsp;&nbsp;</label> <input type="radio" name="Turno" id="TurnoMat"  value="1" onclick='selectTurno()' checked> 
						</div>
						<div class="col-md-1">
							<label>Vesp&nbsp;&nbsp;</label><input type="radio" name="Turno" id="TurnoVesp" value="2" onclick='selectTurno()' > 
							
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-3">
							<label> Nombre de la Dependencia Normativa: </label> 
						</div>
						<div class="col-md-3">
							<h3>COBAEM</h3>
						</div>
					</div><br>
					<h4>MODALIDADES Y OPCIONES EDUCATIVAS</h4>
					<div class="row">
						<div class="col-md-3">
							<div class="i-checks"> <label>ESCOLARIZADA:  &nbsp;&nbsp;</label><input type="radio" name="escolarizada" id="escolarizada" class="form-control "  value="escolarizada" checked/> </div>
						</div>
						<div class="col-md-3">
							<div class="i-checks"> <label>Presencial:  &nbsp;&nbsp;</label><input type="radio" name="presencial" id="presencial" class="form-control "  value="presencial" checked/> </div>
						</div>
						<div class="col-md-3" id="imprimirInter" style="display: none;">
						<a href="" target="_blank"  id="ImprimirIntersemestral" type="button" class="btn btn-primary btn-block btn-rounded btn-sm pull-center"><i class="fa fa-print"></i> Imprimir</a>
						</div>
					</div>
					<br><br>

					<div class="loading"></div>
					<div class="msgLevantamineto"></div>
					<div class="resultLevantamineto"></div>

			</div>
		</div>
	</div>
</div>	   

<script type="text/javascript">
$(document).ready(function(){
	abrirLevantamiento();
});
</script>

<script type="text/javascript">
	$(document).on("change", ".idPlantelLevan", function (event) {
		abrirLevantamiento();
    });

	function selectTurno(){
		abrirLevantamiento();
    };

    function abrirLevantamiento() {
		var PlantelId = $(".idPlantelLevan option:selected").val();
		var PETurnoPlantel = $("input[type=radio][name=Turno]:checked").val();
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/verLevantamiento_skip"); ?>",
            data: {idPlantel : PlantelId, PETurnoPlantel : PETurnoPlantel},
            dataType: "html",
            beforeSend: function(){
                //carga spinner
                $(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
            },
            success: function(data){
				var data = data.split("::");
				if (data[1] == 'Si') {
					$('#imprimirInter').show();
				} else {
					$('#imprimirInter').hide();
				}
				document.getElementById('cct').value = data[0];
				$(".msgLevantamineto").empty();
                $(".resultLevantamineto").empty();
                $(".resultLevantamineto").append(data[2]);
                $(".loading").empty();
            }
        });
		
	}

	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>

<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/date_picker_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/clockpicker/clockpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />


