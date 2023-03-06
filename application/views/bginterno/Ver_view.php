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
				<h2> Datos de Identificación</h2><br>
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
					</div>
					<br><br>

					<div class="loading"></div>
					<div class="msgLevantamineto"></div>
					<div class="resultLevantamineto"></div>

			</div>
		</div>
	</div>
</div>	   

<script>
	function sumarExistentes() {
		var EHombres1 = 0;		var EHombres2 = 0;		var EHombres3 = 0;		var EHombresTotal = 0;
		var EMujeres1 = 0;		var EMujeres2 = 0;		var EMujeres3 = 0;		var EMujeresTotal = 0;
		var ETotal1 = 0;		var ETotal2 = 0;		var ETotal3 = 0;		var ETotalTotal = 0;
		var EDiscapacidad1 = 0;		var EDiscapacidad2 = 0;		var EDiscapacidad3 = 0;		var EDiscapacidadTotal = 0;
		var EHablantes1 = 0;		var EHablantes2 = 0;		var EHablantes3 = 0;		var EHablantesTotal = 0;
		var EExtranjero1 = 0;		var EExtranjero2 = 0;		var EExtranjero3 = 0;		var EExtranjeroTotal = 0;

		var EHombres1 = document.getElementById("EHombres1").value; if (EHombres1 == '') { EHombres1 = 0; } 
		var EMujeres1 = document.getElementById("EMujeres1").value; if (EMujeres1 == '') { EMujeres1 = 0; } 
		var ETotal1 = parseInt(EHombres1) + parseInt(EMujeres1);		
		document.getElementById('ETotal1').value = ETotal1;

		var EHombres2 = document.getElementById("EHombres2").value;  if (EHombres2 == '') { EHombres2 = 0; } 
		var EMujeres2 = document.getElementById("EMujeres2").value;	 if (EMujeres2 == '') { EMujeres2 = 0; } 
		var ETotal2 = parseInt(EHombres2) + parseInt(EMujeres2);
		document.getElementById('ETotal2').value = ETotal2;

		var EHombres3 = document.getElementById("EHombres3").value;	 if (EHombres3 == '') { EHombres3 = 0; } 
		var EMujeres3 = document.getElementById("EMujeres3").value;  if (EMujeres3 == '') { EMujeres3 = 0; } 
		var ETotal3 = parseInt(EHombres3) + parseInt(EMujeres3);
		document.getElementById('ETotal3').value = ETotal3;

		var EHombresTotal = parseInt(EHombres1) + parseInt(EHombres2) + parseInt(EHombres3);
		document.getElementById('EHombresTotal').value = EHombresTotal;
		
		var EMujeresTotal = parseInt(EMujeres1) + parseInt(EMujeres2) + parseInt(EMujeres3);
		document.getElementById('EMujeresTotal').value = EMujeresTotal;
		
		var ETotalTotal = parseInt(ETotal1) + parseInt(ETotal2) + parseInt(ETotal3);
		document.getElementById('ETotalTotal').value = ETotalTotal;

		var EDiscapacidad1 = document.getElementById("EDiscapacidad1").value; if (EDiscapacidad1 == '') { EDiscapacidad1 = 0; } 
		var EDiscapacidad2 = document.getElementById("EDiscapacidad2").value; if (EDiscapacidad2 == '') { EDiscapacidad2 = 0; } 
		var EDiscapacidad3 = document.getElementById("EDiscapacidad3").value; if (EDiscapacidad3 == '') { EDiscapacidad3 = 0; } 
		var EDiscapacidadTotal = parseInt(EDiscapacidad1) + parseInt(EDiscapacidad2) + parseInt(EDiscapacidad3);
		document.getElementById('EDiscapacidadTotal').value = EDiscapacidadTotal;

		var EHablantes1 = document.getElementById("EHablantes1").value; if (EHablantes1 == '') { EHablantes1 = 0; } 
		var EHablantes2 = document.getElementById("EHablantes2").value; if (EHablantes2 == '') { EHablantes2 = 0; } 
		var EHablantes3 = document.getElementById("EHablantes3").value; if (EHablantes3 == '') { EHablantes3 = 0; } 
		var EHablantesTotal = parseInt(EHablantes1) + parseInt(EHablantes2) + parseInt(EHablantes3);
		document.getElementById('EHablantesTotal').value = EHablantesTotal;

		var EExtranjero1 = document.getElementById("EExtranjero1").value; if (EExtranjero1 == '') { EExtranjero1 = 0; } 
		var EExtranjero2 = document.getElementById("EExtranjero2").value; if (EExtranjero2 == '') { EExtranjero2 = 0; } 
		var EExtranjero3 = document.getElementById("EExtranjero3").value; if (EExtranjero3 == '') { EExtranjero3 = 0; } 
		var EExtranjeroTotal = parseInt(EExtranjero1) + parseInt(EExtranjero2) + parseInt(EExtranjero3);
		document.getElementById('EExtranjeroTotal').value = EExtranjeroTotal;

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 1
		var repH1 = (document.getElementById("EHombres1").value) - (document.getElementById("AHombres1").value);
		document.getElementById('RepHombres1').value = repH1;
		var RepHombres1 = document.getElementById("RepHombres1").value; 

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 2
		var repH2 = (document.getElementById("EHombres2").value) - (document.getElementById("AHombres2").value);
		document.getElementById('RepHombres2').value = repH2;
		var RepHombres2 = document.getElementById("RepHombres2").value; 

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 3
		var repH3 = (document.getElementById("EHombres3").value) - (document.getElementById("AHombres3").value);
		document.getElementById('RepHombres3').value = repH3;
		var RepHombres3 = document.getElementById("RepHombres3").value; 

		var repM1 = (document.getElementById("EMujeres1").value) - (document.getElementById("AMujeres1").value);
		document.getElementById('RepMujeres1').value = repM1;
		var RepMujeres1 = document.getElementById("RepMujeres1").value; 		
		
		var repM2 = (document.getElementById("EMujeres2").value) - (document.getElementById("AMujeres2").value);
		document.getElementById('RepMujeres2').value = repM2;
		var RepMujeres2 = document.getElementById("RepMujeres2").value; 
		
		var repM3 = (document.getElementById("EMujeres3").value) - (document.getElementById("AMujeres3").value);
		document.getElementById('RepMujeres3').value = repM3;
		var RepMujeres3 = document.getElementById("RepMujeres3").value; 

		var RepHombresTotal = parseInt(document.getElementById('RepHombres1').value) + parseInt(document.getElementById('RepHombres2').value) + parseInt(document.getElementById('RepHombres3').value);
		document.getElementById('RepHombresTotal').value = RepHombresTotal;
		
		var RepMujeresTotal = parseInt(document.getElementById('RepMujeres1').value) + parseInt(document.getElementById('RepMujeres2').value) + parseInt(document.getElementById('RepMujeres3').value);
		document.getElementById('RepMujeresTotal').value = RepMujeresTotal;

		var RepTotal1 = parseInt(document.getElementById('RepHombres1').value) + parseInt(document.getElementById("RepMujeres1").value);	
		document.getElementById('RepTotal1').value = RepTotal1;
		var RepTotal2 = parseInt(RepHombres2) + parseInt(RepMujeres2);	
		document.getElementById('RepTotal2').value = RepTotal2;
		var RepTotal3 = parseInt(RepHombres3) + parseInt(RepMujeres3);
		document.getElementById('RepTotal3').value = RepTotal3;
		var RepTotalTotal = parseInt(RepTotal1) + parseInt(RepTotal2) + parseInt(RepTotal3);
		document.getElementById('RepTotalTotal').value = RepTotalTotal;

		//validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad
		var repDis1 = (document.getElementById("EDiscapacidad1").value) - (document.getElementById("ADiscapacidad1").value);
		document.getElementById('RepDiscapacidad1').value = repDis1;
		var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value; 
		
		var repDis2 = (document.getElementById("EDiscapacidad2").value) - (document.getElementById("ADiscapacidad2").value);
		document.getElementById('RepDiscapacidad2').value = repDis2;
		var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value;
		
		var repDis3 = (document.getElementById("EDiscapacidad3").value) - (document.getElementById("ADiscapacidad3").value);
		document.getElementById('RepDiscapacidad3').value = repDis3;
		var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value; 

		var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		document.getElementById('RepDiscapacidadTotal').value = RepDiscapacidadTotal;
		//fin validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad

		//validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros
		var repExt1 = (document.getElementById("EExtranjero1").value) - (document.getElementById("AExtranjero1").value);
		document.getElementById('RepExtranjero1').value = repExt1;
		var RepExtranjero1 = document.getElementById("RepExtranjero1").value; 
		
		var repExt2 = (document.getElementById("EExtranjero2").value) - (document.getElementById("AExtranjero2").value);
		document.getElementById('RepExtranjero2').value = repExt2;
		var RepExtranjero2 = document.getElementById("RepExtranjero2").value; 
		
		var repExt3 = (document.getElementById("EExtranjero3").value) - (document.getElementById("AExtranjero3").value);
		document.getElementById('RepExtranjero3').value = repExt3;
		var RepExtranjero3 = document.getElementById("RepExtranjero3").value; 

		var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);
		document.getElementById('RepExtranjeroTotal').value = RepExtranjeroTotal;
		//fin validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros

		//validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
		var repHab1 = (document.getElementById("EHablantes1").value) - (document.getElementById("AHablantes1").value);
		document.getElementById('RepHablantes1').value = repHab1;
		var RepHablantes1 = document.getElementById("RepHablantes1").value; 
		
		var repHab2 = (document.getElementById("EHablantes2").value) - (document.getElementById("AHablantes2").value);
		document.getElementById('RepHablantes2').value = repHab2;
		var RepHablantes2 = document.getElementById("RepHablantes2").value; 

		var repHab3 = (document.getElementById("EHablantes3").value) - (document.getElementById("AHablantes3").value);
		document.getElementById('RepHablantes3').value = repHab3;
		var RepHablantes3 = document.getElementById("RepHablantes3").value; 
		
		var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);
		document.getElementById('RepHablantesTotal').value = RepHablantesTotal;
		//fin validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas

		//validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad
		var repDis1 = (document.getElementById("EDiscapacidad1").value) - (document.getElementById("ADiscapacidad1").value);
		document.getElementById('RepDiscapacidad1').value = repDis1;
		var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value; 
		
		var repDis2 = (document.getElementById("EDiscapacidad2").value) - (document.getElementById("ADiscapacidad2").value);
		document.getElementById('RepDiscapacidad2').value = repDis2;
		var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value; 
		
		var repDis3 = (document.getElementById("EDiscapacidad3").value) - (document.getElementById("ADiscapacidad3").value);
		document.getElementById('RepDiscapacidad3').value = repDis3;
		var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value; 
		
		var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		document.getElementById('RepDiscapacidadTotal').value = RepDiscapacidadTotal;
		//fin validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad

		//validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros
		var repExt1 = (document.getElementById("EExtranjero1").value) - (document.getElementById("AExtranjero1").value);
		document.getElementById('RepExtranjero1').value = repExt1;
		var RepExtranjero1 = document.getElementById("RepExtranjero1").value; 
		
		var repExt2 = (document.getElementById("EExtranjero2").value) - (document.getElementById("AExtranjero2").value);
		document.getElementById('RepExtranjero2').value = repExt2;
		var RepExtranjero2 = document.getElementById("RepExtranjero2").value; 

		var repExt3 = (document.getElementById("EExtranjero3").value) - (document.getElementById("AExtranjero3").value);
		document.getElementById('RepExtranjero3').value = repExt3;
		var RepExtranjero3 = document.getElementById("RepExtranjero3").value; 
		
		var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);		
		document.getElementById('RepExtranjeroTotal').value = RepExtranjeroTotal;
		//fin validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros

		//validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
		var repHab1 = (document.getElementById("EHablantes1").value) - (document.getElementById("AHablantes1").value);
		document.getElementById('RepHablantes1').value = repHab1;
		var RepHablantes1 = document.getElementById("RepHablantes1").value;

		var repHab2 = (document.getElementById("EHablantes2").value) - (document.getElementById("AHablantes2").value);
		document.getElementById('RepHablantes2').value = repHab2;
		var RepHablantes2 = document.getElementById("RepHablantes2").value; 

		var repHab3 = (document.getElementById("EHablantes3").value) - (document.getElementById("AHablantes3").value);
		document.getElementById('RepHablantes3').value = repHab3;
		var RepHablantes3 = document.getElementById("RepHablantes3").value; 
		
		var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);		
		document.getElementById('RepHablantesTotal').value = RepHablantesTotal;
		//fin validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
	}


	function sumarAprobados() {
		var AHombres1 = 0;		var AHombres2 = 0;		var AHombres3 = 0;		var AHombresTotal = 0;
		var AMujeres1 = 0;		var AMujeres2 = 0;		var AMujeres3 = 0;		var AMujeresTotal = 0;
		var ATotal1 = 0;		var ATotal2 = 0;		var ATotal3 = 0;		var ATotalTotal = 0;
		var ADiscapacidad1 = 0;		var ADiscapacidad2 = 0;		var ADiscapacidad3 = 0;		var ADiscapacidadTotal = 0;
		var AHablantes1 = 0;		var AHablantes2 = 0;		var AHablantes3 = 0;		var AHablantesTotal = 0;
		var AExtranjero1 = 0;		var AExtranjero2 = 0;		var AExtranjero3 = 0;		var AExtranjeroTotal = 0;

		//validar que el numero de Alumnos Aprobados no exceda a los Existentes 1

		var AHombres1 = document.getElementById("AHombres1").value; 
		if (AHombres1 == '') { AHombres1 = 0; } 
		if (parseInt(AHombres1) > parseInt(document.getElementById("EHombres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres1").value);
			var AHombres1 = document.getElementById("AHombres1").value = 0;
		} else {
			var ATotal1 = parseInt(AHombres1) + parseInt(AMujeres1);
		}

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 1
		var repH1 = (document.getElementById("EHombres1").value) - (document.getElementById("AHombres1").value);
		document.getElementById('RepHombres1').value = repH1;

		var AMujeres1 = document.getElementById("AMujeres1").value; if (AMujeres1 == '') { AMujeres1 = 0; }
		if (parseInt(AMujeres1) > parseInt(document.getElementById("EMujeres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres1").value);
			var AMujeres1 = document.getElementById("AMujeres1").value = 0;
		} else {	
			var ATotal1 = parseInt(AHombres1) + parseInt(AMujeres1);
		}
		document.getElementById('ATotal1').value = ATotal1;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 1
		
		//validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
		var AHombres2 = document.getElementById("AHombres2").value; if (AHombres2 == '') { AHombres2 = 0; }
		if (parseInt(AHombres2) > parseInt(document.getElementById("EHombres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres2").value);
			var AHombres2 = document.getElementById("AHombres2").value = 0;
		} else {
			var ATotal2 = parseInt(AHombres2) + parseInt(AMujeres2);
		}

		var AMujeres2 = document.getElementById("AMujeres2").value; if (AMujeres2 == '') { AMujeres2 = 0; }
		if (parseInt(AMujeres2) > parseInt(document.getElementById("EMujeres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres2").value);
			var AMujeres2 = document.getElementById("AMujeres2").value = 0;
		} else {	
			var ATotal2 = parseInt(AHombres2) + parseInt(AMujeres2);
		}
		document.getElementById('ATotal2').value = ATotal2;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 2

		//validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
		var AHombres3 = document.getElementById("AHombres3").value; if (AHombres3 == '') { AHombres3 = 0; }
		if (parseInt(AHombres3) > parseInt(document.getElementById("EHombres3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres3").value);
			var AHombres3 = document.getElementById("AHombres3").value = 0;
		} else {
			var ATotal3 = parseInt(AHombres3) + parseInt(AMujeres3);
		}

		var AMujeres3 = document.getElementById("AMujeres3").value; if (AMujeres3 == '') { AMujeres3 = 0; }
		if (parseInt(AMujeres3) > parseInt(document.getElementById("EMujeres3").value )) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres3").value);
			var AMujeres3 = document.getElementById("AMujeres3").value = 0;
		} else {	
			var ATotal3 = parseInt(AHombres3) + parseInt(AMujeres3);
		}
		document.getElementById('ATotal3').value = ATotal3;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
				
		var AHombresTotal = parseInt(AHombres1) + parseInt(AHombres2) + parseInt(AHombres3); if (AHombresTotal == '') { AHombresTotal = 0; }
		document.getElementById('AHombresTotal').value = AHombresTotal;
		
		var AMujeresTotal = parseInt(AMujeres1) + parseInt(AMujeres2) + parseInt(AMujeres3); if (AMujeresTotal == '') { AMujeresTotal = 0; }
		document.getElementById('AMujeresTotal').value = AMujeresTotal;
		
		var ATotalTotal = parseInt(ATotal1) + parseInt(ATotal2) + parseInt(ATotal3); if (ATotalTotal == '') { ATotalTotal = 0; }
		document.getElementById('ATotalTotal').value = ATotalTotal;

		//validar que el numero de Alumnos Aprobados Discapacitados no exceda a los Existentes Discapacitados 
		var ADiscapacidad1 = document.getElementById("ADiscapacidad1").value;  if (ADiscapacidad1 == '') { ADiscapacidad1 = 0; }
		if (parseInt(ADiscapacidad1) > parseInt(document.getElementById("EDiscapacidad1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad1").value);
			var ADiscapacidad1 = document.getElementById("ADiscapacidad1").value = 0;
		} else {
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}

		var ADiscapacidad2 = document.getElementById("ADiscapacidad2").value;  if (ADiscapacidad2 == '') { ADiscapacidad2 = 0; }
		if (parseInt(ADiscapacidad2) > parseInt(document.getElementById("EDiscapacidad2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad2").value);
			var ADiscapacidad2 = document.getElementById("ADiscapacidad2").value = 0;
		} else {	
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}

		var ADiscapacidad3 = document.getElementById("ADiscapacidad3").value;  if (ADiscapacidad3 == '') { ADiscapacidad3 = 0; }
		if (parseInt(ADiscapacidad3) > parseInt(document.getElementById("EDiscapacidad3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad3").value);
			var ADiscapacidad3 = document.getElementById("ADiscapacidad3").value = 0;
		} else {	
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}
		document.getElementById('ADiscapacidadTotal').value = ADiscapacidadTotal;
		//fin validar que el numero de Alumnos Aprobados Discapacitados no exceda a los Existentes Discapacitados 

		//validar que el numero de Alumnos Aprobados Extranjeros no exceda a los Existentes Extranjeros 
		var AExtranjero1 = document.getElementById("AExtranjero1").value;  if (AExtranjero1 == '') { AExtranjero1 = 0; }
		if (parseInt(AExtranjero1) > parseInt(document.getElementById("EExtranjero1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero1").value);
			var AExtranjero1 = document.getElementById("AExtranjero1").value = 0;
		} else {
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}

		var AExtranjero2 = document.getElementById("AExtranjero2").value;  if (AExtranjero2 == '') { AExtranjero2 = 0; }
		if (parseInt(AExtranjero2) > parseInt(document.getElementById("EExtranjero2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero2").value);
			var AExtranjero2 = document.getElementById("AExtranjero2").value = 0;
		} else {	
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}

		var AExtranjero3 = document.getElementById("AExtranjero3").value;  if (AExtranjero3 == '') { AExtranjero3 = 0; }
		if (parseInt(AExtranjero3) > parseInt(document.getElementById("EExtranjero3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero3").value);
			var AExtranjero3 = document.getElementById("AExtranjero3").value = 0;
		} else {	
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}
		document.getElementById('AExtranjeroTotal').value = AExtranjeroTotal;
		//fin validar que el numero de Alumnos Aprobados Extranjeros no exceda a los Existentes Extranjeros 

		//validar que el numero de Alumnos Aprobados Hablantes Indigena no exceda a los Existentes Hablantes Indigena 
		var AHablantes1 = document.getElementById("AHablantes1").value;  if (AHablantes1 == '') { AHablantes1 = 0; }
		if (parseInt(AHablantes1) > parseInt(document.getElementById("EHablantes1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes1").value);
			var AHablantes1 = document.getElementById("AHablantes1").value = 0;
		} else {
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}

		var AHablantes2 = document.getElementById("AHablantes2").value;  if (AHablantes2 == '') { AHablantes2 = 0; }
		if (parseInt(AHablantes2) > parseInt(document.getElementById("EHablantes2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes2").value);
			var AHablantes2 = document.getElementById("AHablantes2").value = 0;
		} else {	
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}

		var AHablantes3 = document.getElementById("AHablantes3").value;  if (AHablantes3 == '') { AHablantes3 = 0; }
		if (parseInt(AHablantes3) > parseInt(document.getElementById("EHablantes3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes3").value);
			var AHablantes3 = document.getElementById("AHablantes3").value = 0;
		} else {	
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}
		document.getElementById('AHablantesTotal').value = AHablantesTotal;
		//fin validar que el numero de Alumnos Aprobados Hablantes Indigena no exceda a los Existentes Hablantes Indigena 


		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 1
		var repH1 = (document.getElementById("EHombres1").value) - (document.getElementById("AHombres1").value);
		document.getElementById('RepHombres1').value = repH1;
		var RepHombres1 = document.getElementById("RepHombres1").value; 

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 2
		var repH2 = (document.getElementById("EHombres2").value) - (document.getElementById("AHombres2").value);
		document.getElementById('RepHombres2').value = repH2;
		var RepHombres2 = document.getElementById("RepHombres2").value; 

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 3
		var repH3 = (document.getElementById("EHombres3").value) - (document.getElementById("AHombres3").value);
		document.getElementById('RepHombres3').value = repH3;
		var RepHombres3 = document.getElementById("RepHombres3").value; 

		var repM1 = (document.getElementById("EMujeres1").value) - (document.getElementById("AMujeres1").value);
		document.getElementById('RepMujeres1').value = repM1;
		var RepMujeres1 = document.getElementById("RepMujeres1").value; 		
		
		var repM2 = (document.getElementById("EMujeres2").value) - (document.getElementById("AMujeres2").value);
		document.getElementById('RepMujeres2').value = repM2;
		var RepMujeres2 = document.getElementById("RepMujeres2").value; 
		
		var repM3 = (document.getElementById("EMujeres3").value) - (document.getElementById("AMujeres3").value);
		document.getElementById('RepMujeres3').value = repM3;
		var RepMujeres3 = document.getElementById("RepMujeres3").value; 

		var RepHombresTotal = parseInt(document.getElementById('RepHombres1').value) + parseInt(document.getElementById('RepHombres2').value) + parseInt(document.getElementById('RepHombres3').value);
		document.getElementById('RepHombresTotal').value = RepHombresTotal;
		
		var RepMujeresTotal = parseInt(document.getElementById('RepMujeres1').value) + parseInt(document.getElementById('RepMujeres2').value) + parseInt(document.getElementById('RepMujeres3').value);
		document.getElementById('RepMujeresTotal').value = RepMujeresTotal;

		var RepTotal1 = parseInt(document.getElementById('RepHombres1').value) + parseInt(document.getElementById("RepMujeres1").value);
		document.getElementById('RepTotal1').value = RepTotal1;
		var RepTotal2 = parseInt(document.getElementById('RepHombres2').value) + parseInt(document.getElementById("RepMujeres2").value);
		document.getElementById('RepTotal2').value = RepTotal2;
		var RepTotal3 = parseInt(document.getElementById('RepHombres3').value) + parseInt(document.getElementById("RepMujeres3").value);	
		document.getElementById('RepTotal3').value = RepTotal3;
		var RepTotalTotal = parseInt(RepTotal1) + parseInt(RepTotal2) + parseInt(RepTotal3);
		document.getElementById('RepTotalTotal').value = RepTotalTotal;

		//validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad
		var repDis1 = (document.getElementById("EDiscapacidad1").value) - (document.getElementById("ADiscapacidad1").value);
		document.getElementById('RepDiscapacidad1').value = repDis1;
		var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value; 
		
		var repDis2 = (document.getElementById("EDiscapacidad2").value) - (document.getElementById("ADiscapacidad2").value);
		document.getElementById('RepDiscapacidad2').value = repDis2;
		var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value;
		
		var repDis3 = (document.getElementById("EDiscapacidad3").value) - (document.getElementById("ADiscapacidad3").value);
		document.getElementById('RepDiscapacidad3').value = repDis3;
		var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value; 

		var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		document.getElementById('RepDiscapacidadTotal').value = RepDiscapacidadTotal;
		//fin validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad

		//validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros
		var repExt1 = (document.getElementById("EExtranjero1").value) - (document.getElementById("AExtranjero1").value);
		document.getElementById('RepExtranjero1').value = repExt1;
		var RepExtranjero1 = document.getElementById("RepExtranjero1").value; 
		
		var repExt2 = (document.getElementById("EExtranjero2").value) - (document.getElementById("AExtranjero2").value);
		document.getElementById('RepExtranjero2').value = repExt2;
		var RepExtranjero2 = document.getElementById("RepExtranjero2").value; 
		
		var repExt3 = (document.getElementById("EExtranjero3").value) - (document.getElementById("AExtranjero3").value);
		document.getElementById('RepExtranjero3').value = repExt3;
		var RepExtranjero3 = document.getElementById("RepExtranjero3").value; 

		var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);
		document.getElementById('RepExtranjeroTotal').value = RepExtranjeroTotal;
		//fin validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros

		//validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
		var repHab1 = (document.getElementById("EHablantes1").value) - (document.getElementById("AHablantes1").value);
		document.getElementById('RepHablantes1').value = repHab1;
		var RepHablantes1 = document.getElementById("RepHablantes1").value; 
		
		var repHab2 = (document.getElementById("EHablantes2").value) - (document.getElementById("AHablantes2").value);
		document.getElementById('RepHablantes2').value = repHab2;
		var RepHablantes2 = document.getElementById("RepHablantes2").value; 

		var repHab3 = (document.getElementById("EHablantes3").value) - (document.getElementById("AHablantes3").value);
		document.getElementById('RepHablantes3').value = repHab3;
		var RepHablantes3 = document.getElementById("RepHablantes3").value; 
		
		var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);
		document.getElementById('RepHablantesTotal').value = RepHablantesTotal;
		//fin validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas

		//validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad
		var repDis1 = (document.getElementById("EDiscapacidad1").value) - (document.getElementById("ADiscapacidad1").value);
		document.getElementById('RepDiscapacidad1').value = repDis1;
		var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value; 
		
		var repDis2 = (document.getElementById("EDiscapacidad2").value) - (document.getElementById("ADiscapacidad2").value);
		document.getElementById('RepDiscapacidad2').value = repDis2;
		var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value; 
		
		var repDis3 = (document.getElementById("EDiscapacidad3").value) - (document.getElementById("ADiscapacidad3").value);
		document.getElementById('RepDiscapacidad3').value = repDis3;
		var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value; 
		
		var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		document.getElementById('RepDiscapacidadTotal').value = RepDiscapacidadTotal;
		//fin validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad

		//validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros
		var repExt1 = (document.getElementById("EExtranjero1").value) - (document.getElementById("AExtranjero1").value);
		document.getElementById('RepExtranjero1').value = repExt1;
		var RepExtranjero1 = document.getElementById("RepExtranjero1").value; 
		
		var repExt2 = (document.getElementById("EExtranjero2").value) - (document.getElementById("AExtranjero2").value);
		document.getElementById('RepExtranjero2').value = repExt2;
		var RepExtranjero2 = document.getElementById("RepExtranjero2").value; 

		var repExt3 = (document.getElementById("EExtranjero3").value) - (document.getElementById("AExtranjero3").value);
		document.getElementById('RepExtranjero3').value = repExt3;
		var RepExtranjero3 = document.getElementById("RepExtranjero3").value; 
		
		var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);		
		document.getElementById('RepExtranjeroTotal').value = RepExtranjeroTotal;
		//fin validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros

		//validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
		var repHab1 = (document.getElementById("EHablantes1").value) - (document.getElementById("AHablantes1").value);
		document.getElementById('RepHablantes1').value = repHab1;
		var RepHablantes1 = document.getElementById("RepHablantes1").value;

		var repHab2 = (document.getElementById("EHablantes2").value) - (document.getElementById("AHablantes2").value);
		document.getElementById('RepHablantes2').value = repHab2;
		var RepHablantes2 = document.getElementById("RepHablantes2").value; 

		var repHab3 = (document.getElementById("EHablantes3").value) - (document.getElementById("AHablantes3").value);
		document.getElementById('RepHablantes3').value = repHab3;
		var RepHablantes3 = document.getElementById("RepHablantes3").value; 
		
		var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);		
		document.getElementById('RepHablantesTotal').value = RepHablantesTotal;
		//fin validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas

		
	}

	function sumarRegulares() {
		var RegHombres1 = 0;		var RegHombres2 = 0;		var RegHombres3 = 0;		var RegHombresTotal = 0;
		var RegMujeres1 = 0;		var RegMujeres2 = 0;		var RegMujeres3 = 0;		var RegMujeresTotal = 0;
		var RegTotal1 = 0;		var RegTotal2 = 0;		var RegTotal3 = 0;		var RegTotalTotal = 0;

		//validar que el numero de Alumnos Regularizados no exceda al Reprobados 1
		var RegHombres1 = document.getElementById("RegHombres1").value; 
		if (parseInt(RegHombres1) > parseInt(document.getElementById("RepHombres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepHombres1").value);
			var RegHombres1 = document.getElementById("RegHombres1").value = 0;
		} else {
			var RegTotal1 = parseInt(RegHombres1) + parseInt(RegMujeres1);
		}

		var RegMujeres1 = document.getElementById("RegMujeres1").value; 
		if (parseInt(RegMujeres1) > parseInt(document.getElementById("RepMujeres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepMujeres1").value);
			var RegMujeres1 = document.getElementById("RegMujeres1").value = 0;
		} else {	
			var RegTotal1 = parseInt(RegHombres1) + parseInt(RegMujeres1);
		}
		document.getElementById('RegTotal1').value = RegTotal1;
		//fin validar Alumnos Regularizados no exceda al Reprobados 1

		//validar que el numero de Alumnos Regularizados no exceda al Reprobados 2
		var RegHombres2 = document.getElementById("RegHombres2").value; 
		if (parseInt(RegHombres2) > parseInt(document.getElementById("RepHombres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepHombres2").value);
			var RegHombres2 = document.getElementById("RegHombres2").value = 0;
		} else {
			var RegTotal2 = parseInt(RegHombres2) + parseInt(RegMujeres2);
		}

		var RegMujeres2 = document.getElementById("RegMujeres2").value; 
		if (parseInt(RegMujeres2) > parseInt(document.getElementById("RepMujeres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepMujeres2").value);
			var RegMujeres2 = document.getElementById("RegMujeres2").value = 0;
		} else {	
			var RegTotal2 = parseInt(RegHombres2) + parseInt(RegMujeres2);
		}
		document.getElementById('RegTotal2').value = RegTotal2;
		//fin validar Alumnos Regularizados no exceda al Reprobados 2

		//validar que el numero de Alumnos Regularizados no exceda al Reprobados 3
		var RegHombres3 = document.getElementById("RegHombres3").value; 
		if (parseInt(RegHombres3) > parseInt(document.getElementById("RepHombres3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepHombres3").value);
			var RegHombres3 = document.getElementById("RegHombres3").value = 0;
		} else {
			var RegTotal3 = parseInt(RegHombres3) + parseInt(RegMujeres3);
		}

		var RegMujeres3 = document.getElementById("RegMujeres3").value; 
		if (parseInt(RegMujeres3) > parseInt(document.getElementById("RepMujeres3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("RepMujeres3").value);
			var RegMujeres3 = document.getElementById("RegMujeres3").value = 0;
		} else {	
			var RegTotal3 = parseInt(RegHombres3) + parseInt(RegMujeres3);
		}
		document.getElementById('RegTotal3').value = RegTotal3;
		//fin validar Alumnos Regularizados no exceda al Reprobados 3

		var RegHombresTotal = parseInt(RegHombres1) + parseInt(RegHombres2) + parseInt(RegHombres3);
		document.getElementById('RegHombresTotal').value = RegHombresTotal;
		
		var RegMujeresTotal = parseInt(RegMujeres1) + parseInt(RegMujeres2) + parseInt(RegMujeres3);
		document.getElementById('RegMujeresTotal').value = RegMujeresTotal;
		
		var RegTotalTotal = parseInt(RegTotal1) + parseInt(RegTotal2) + parseInt(RegTotal3);
		document.getElementById('RegTotalTotal').value = RegTotalTotal;

	}
</script>
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

				document.getElementById('cct').value = data[0];
                $(".msgLevantamineto").empty();
                $(".resultLevantamineto").empty();
                $(".resultLevantamineto").append(data[1]);
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


