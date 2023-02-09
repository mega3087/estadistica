<link href="<?php echo base_url('assets/inspinia/css/plugins/steps/jquery.steps.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/inspinia/css/plugins/clockpicker/clockpicker.css'); ?>" rel="stylesheet" />

<div class="row">
	<div class="col-lg-12">
		<div class="ibox">
			<div class="ibox-content">
				<h2><label>
					Bachillerato General-Levantamiento Estadístico Interno Intersemestral.
				</label></h2>
				<h2> Datos de Identificación</h2>
					<div class="row">
						<label class="col-md-2" style="text-align:right">Clave del Centro de Trabajo:</label>
						<div class="col-md-3">
							<div class="form-group">
								
							</div>
						</div>
					<label class="col-md-2" style="text-align:right">Centro Educativo:</label>
						<div class="col-md-3">
							<div class="form-group">
								<select name="PEPLantel" id="PEPLantel" class="form-control">
									<option value="">-Todos-</option>
									<?php foreach($planteles as $p => $listPl){ ?>
										<option value="<?= $listPl['CPLClave'] ?>"><?= $listPl['CPLNombre']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</label>

				<form id="form" action="#" class="wizard-big">
				<h1> Datos de Identificación</h1>
					<fieldset>
						<p style="font-size: 14px;">1. Marque con una X el servicio educativo al que corresponde la matrícula.</p>
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"> <label>Bachillerato General sin Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control "  value="1" /> 
									</div>
								</div>
								<div class="col-md-5">
									<div class="i-checks"><label>Bachillerato General con Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control "  value="2" />  
									</div>
								</div>
							</div>
							<br><br>
							
						<p style="font-size: 14px;">2. Fecha de creación o actualización del plan de estudios.</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionAnio" id="PEActualizacionAnio" class="form-control  ">
											<option value="">-Año-</option>
											<?php for($i = date('Y') + 1; $i >=(date('Y') - 14); $i--){ ?>
												<option value="<?= $i ?>"><?= $i ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionMes" id="PEActualizacionMes" class="form-control ">
											<option value="">-Mes-</option>
											<?php for ($m = 1; $m <= 12; $m++) { ?>
												<option value="<?= ver_mes($m) ?>"><?= ver_mes($m) ?></option>	
											<?php } ?>											
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionDia" id="PEActualizacionDia" class="form-control ">
											<option value="">-Día-</option>
											<?php for ($d = 1; $d <= 31; $d++) { ?>
												<option value="<?= setmes($d) ?>"><?= setmes($d) ?></option>	
											<?php } ?>
										</select>									
									</div>
								</div>
							</div><br><br>
							
						<p style="font-size: 14px;">3. Escriba la duración del bachillerato y marque con una X la estructura del plan de estudios que le corresponde.</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Duración</label>
										<input id="PEDuracion" name="PEDuracion" type="text" class="form-control  numeros" min="0" max="50" step="1" pattern="[0-9]{10}">											
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="5">Estructura del Plan de Estudios</th>
											</tr>
											<tr>
												<th>Años</th>
												<th>Semestres</th>
												<th>Cuatrimestres</th>
												<th>Trimestres</th>
												<th>Otros*</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="row">
    													<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="1" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="2" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="3" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="4" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<input type="radio" name="PEEstructura" id="PEEstructura" value="5" onclick='mostrarOtro()' class=""><label> </label>
														</div>
													</div>					
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
								<br><br>
							</div>	
							
                    </fieldset>

                    <!--.........................................-->				
					<h1> Características del Plan de Estudios</h1>
					<fieldset>
						<p style="font-size: 14px;">1. Marque con una X el servicio educativo al que corresponde la matrícula.</p>
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"> <label>Bachillerato General sin Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control "  value="1" /> 
									</div>
								</div>
								<div class="col-md-5">
									<div class="i-checks"><label>Bachillerato General con Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control "  value="2" />  
									</div>
								</div>
							</div>
							<br><br>
							
						<p style="font-size: 14px;">2. Fecha de creación o actualización del plan de estudios.</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionAnio" id="PEActualizacionAnio" class="form-control  ">
											<option value="">-Año-</option>
											<?php for($i = date('Y') + 1; $i >=(date('Y') - 14); $i--){ ?>
												<option value="<?= $i ?>"><?= $i ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionMes" id="PEActualizacionMes" class="form-control ">
											<option value="">-Mes-</option>
											<?php for ($m = 1; $m <= 12; $m++) { ?>
												<option value="<?= ver_mes($m) ?>"><?= ver_mes($m) ?></option>	
											<?php } ?>											
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select name="PEActualizacionDia" id="PEActualizacionDia" class="form-control ">
											<option value="">-Día-</option>
											<?php for ($d = 1; $d <= 31; $d++) { ?>
												<option value="<?= setmes($d) ?>"><?= setmes($d) ?></option>	
											<?php } ?>
										</select>									
									</div>
								</div>
							</div><br><br>
							
						<p style="font-size: 14px;">3. Escriba la duración del bachillerato y marque con una X la estructura del plan de estudios que le corresponde.</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Duración</label>
										<input id="PEDuracion" name="PEDuracion" type="text" class="form-control  numeros" min="0" max="50" step="1" pattern="[0-9]{10}">											
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="5">Estructura del Plan de Estudios</th>
											</tr>
											<tr>
												<th>Años</th>
												<th>Semestres</th>
												<th>Cuatrimestres</th>
												<th>Trimestres</th>
												<th>Otros*</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="row">
    													<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="1" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="2" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="3" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<!--<div class="i-checks">-->
																<input type="radio" name="PEEstructura" id="PEEstructura" value="4" onclick='mostrarOtro()' class=""> <label></label>
															<!--</div>-->
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<input type="radio" name="PEEstructura" id="PEEstructura" value="5" onclick='mostrarOtro()' class=""><label> </label>
														</div>
													</div>					
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
								<br><br>
								<div class="col-md-3" id="contentOtros" style="display:none;">
								<div class="form-group">
									<label><em>*</em> Especifique:</label>
									<input id="PEEspecifique" name="PEEspecifique" type="text" class="form-control">											
								</div>
							</div>	
							</div>
							
						<p style="font-size: 14px;">4. Escriba el número de créditos por cubrir.</p>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Total de créditos</label>
										<input id="PECreditos" name="PECreditos" type="text" class="form-control  numeros" min="0" step="1">	
									</div>
								</div> 
							</div> 
                    </fieldset>

                    <!--.........................................-->
					<h1> Existencia del Semestre</h1>
					<fieldset>
					<h2><label>EXISTENCIA DEL SEMESTRE <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</label></h2>
                        <p style="font-size: 14px">1. Escriba por género y grado <?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?>, el No. de alumnos <b>EXISTENTES</b> en el semestre 
							<?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?> 
							<?php $anio = $periodoAnt[0]['PAnio'] +1; if ($periodoAnt[0]['PPeriodo'] == 1 ) { echo '(Febrero '.$periodoAnt[0]['PAnio'].'- Julio '.$periodoAnt[0]['PAnio'].')'; } else { echo '(Agosto '.$periodoAnt[0]['PAnio'].'- Enero '.$anio.')'; }?>. Los alumnos <b>EXISTENTES</b> son el número físico de estudiantes en aula al final del semestre y que por lo tanto presentaron exámenes hasta <b>EVALUACIÓN ORDINARIA</b>. Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena. </p>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Extranjeros</th>
												<th>Hablantes de Lenguas Indígenas</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control numeros" min="0" step="1" value="0"  onkeyup="sumarExistentes();"></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

							<script>
								 
							</script>
										
						<h2><label>APROBADOS DEL SEMESTRE <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</label> </h2>
						<p style="font-size: 14px;">2. Escriba por género y grado <?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?>, el No. De alumnos que de la <b>EXISTENCIA</b> reportada en la pregunta 1, <b>APROBARON</b> todas sus <b>MATERIAS</b> (Asignaturas) hasta <b>EVALUACIÓN ORDINARIA (semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>)</b>. Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena.</p>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Extranjeros</th>
												<th>Hablantes de Lenguas Indígenas</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="AHombres1" name="AHombres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AMujeres1" name="AMujeres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="ATotal1" name="ATotal1" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ADiscapacidad1" name="ADiscapacidad1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AHablantes1" name="AHablantes1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AExtranjero1" name="AExtranjero1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="AHombres2" name="AHombres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AMujeres2" name="AMujeres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="ATotal2" name="ATotal2" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ADiscapacidad2" name="ADiscapacidad2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AHablantes2" name="AHablantes2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AExtranjero2" name="AExtranjero2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="AHombres3" name="AHombres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AMujeres3" name="AMujeres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="ATotal3" name="ATotal3" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ADiscapacidad3" name="ADiscapacidad3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AHablantes3" name="AHablantes3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
												<td><input type="text" id="AExtranjero3" name="AExtranjero3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarAprobados();"></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="AHombresTotal" name="AHombresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="AMujeresTotal" name="AMujeresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ATotalTotal" name="ATotalTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="ADiscapacidadTotal" name="ADiscapacidadTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="AHablantesTotal" name="AHablantesTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="AExtranjeroTotal" name="AExtranjeroTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							

						<h2><label>REPROBADOS DEL SEMESTRE <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</label> </h2>
						<p style="font-size: 14px;">3. Escriba por género y grado <?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?> , el No. de alumnos que de la <b>EXISTENCIA</b> reportada en la pregunta 1, <b>REPROBARON</b> desde <b>1</b> a <b>TODAS</b> sus MATERIAS (Asignaturas) hasta <b>EVALUACIÓN ORDINARIA (Semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?> )</b>. Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena.</p>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Extranjeros</th>
												<th>Hablantes de Lenguas Indígenas</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="RepHombres1" name="RepHombres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" ></td>
												<td><input type="text" id="RepMujeres1" name="RepMujeres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepTotal1" name="RepTotal1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepDiscapacidad1" name="RepDiscapacidad1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepHablantes1" name="RepHablantes1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepExtranjero1" name="RepExtranjero1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="RepHombres2" name="RepHombres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepMujeres2" name="RepMujeres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepTotal2" name="RepTotal2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepDiscapacidad2" name="RepDiscapacidad2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepHablantes2" name="RepHablantes2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepExtranjero2" name="RepExtranjero2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="RepHombres3" name="RepHombres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepMujeres3" name="RepMujeres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepTotal3" name="RepTotal3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepDiscapacidad3" name="RepDiscapacidad3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepHablantes3" name="RepHablantes3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
												<td><input type="text" id="RepExtranjero3" name="RepExtranjero3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();"></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="RepHombresTotal" name="RepHombresTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepMujeresTotal" name="RepMujeresTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepTotalTotal" name="RepTotalTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepDiscapacidadTotal" name="RepDiscapacidadTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepHablantesTotal" name="RepHablantesTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
												<td><input type="text" id="RepExtranjeroTotal" name="RepExtranjeroTotal" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarReprobados();" disabled></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

						<h2>Recuerde: Existencia= Aprobados + Reprobados. </h2>	
						<br>
						<br>	
						<h2><label>REGULARIZADOS DEL SEMESTRE <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?> </label> </h2>
						<p style="font-size:14px;">4. De los alumnos REPROBADOS reportados en la pregunta 3, escriba por grado y sexo el número de alumnos que se REGULARIZARON en el semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</p>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="RegHombres1" name="RegHombres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegMujeres1" name="RegMujeres1" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegTotal1" name="RegTotal1" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="RegHombres2" name="RegHombres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegMujeres2" name="RegMujeres2" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegTotal2" name="RegTotal2" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="RegHombres3" name="RegHombres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegMujeres3" name="RegMujeres3" class="form-control numeros" min="0" step="1" value="0" onkeyup="sumarRegulares();"></td>
												<td><input type="text" id="RegTotal3" name="RegTotal3" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="RegHombresTotal" name="RegHombresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="RegMujeresTotal" name="RegMujeresTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
												<td><input type="text" id="RegTotalTotal" name="RegTotalTotal" class="form-control numeros" min="0" step="1" value="0" disabled></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

							<p><em>*</em> Los alumnos REGULARIZADOS son los alumnos que aprobaron mediante evaluaciones extraordinarias y/o especiales, todas las unidades de aprendizaje curricular que adeudaban. </p>
					</fieldset>	

                    <!--.........................................-->
					<h1> Matrícula al Inicio del Ciclo Escolar <?php $anio = $periodoAnt[0]['PAnio'] +1; if ($periodoAnt[0]['PPeriodo'] == 1 ) { echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PAnio']; } else { echo $periodoAnt[0]['PAnio'].'-'.$anio; }?></h1>
					<fieldset>
						<p style="font-size: 14px;">1. Coloca la matrícula oficial que reportaste en el formato 911 de inicio de cursos <?php $anio = $periodoAnt[0]['PAnio'] +1; if ($periodoAnt[0]['PPeriodo'] == 1 ) { echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PAnio']; } else { echo $periodoAnt[0]['PAnio'].'-'.$anio; }?>. (Corte al 30 Septiembre de <?= $periodoAnt[0]['PAnio'] ?>).</h2>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="MIEHombres1" name="MIEHombres1" class="form-control numeros disabled" value="<?= number_format($totales[0][0]['Hombres']) ?>"></td>
												<td><input type="text" id="MIEMujeres1" name="MIEMujeres1" class="form-control numeros disabled" value="<?= number_format($totales[0][0]['Mujeres']) ?>"></td>
												<td><input type="text" id="MIETotal1" name="MIETotal1" class="form-control numeros disabled" value="<?= number_format($totales[0][0]['Total']) ?>"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="MIEHombres2" name="MIEHombres2" class="form-control numeros disabled" value="<?= number_format($totales[1][0]['Hombres']) ?>"></td>
												<td><input type="text" id="MIEMujeres2" name="MIEMujeres2" class="form-control numeros disabled" value="<?= number_format($totales[1][0]['Mujeres']) ?>"></td>
												<td><input type="text" id="MIETotal2" name="MIETotal2" class="form-control numeros disabled" value="<?= number_format($totales[1][0]['Total']) ?>"></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="MIEHombres3" name="MIEHombres3" class="form-control numeros disabled" value="<?= number_format($totales[2][0]['Hombres']) ?>"></td>
												<td><input type="text" id="MIEMujeres3" name="MIEMujeres3" class="form-control numeros disabled" value="<?= number_format($totales[2][0]['Mujeres']) ?>"></td>
												<td><input type="text" id="MIETotal3" name="MIETotal3" class="form-control numeros disabled" value="<?= number_format($totales[2][0]['Total']) ?>"></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="MIEHombresTotal" name="MIEHombresTotal" class="form-control numeros disabled" value="<?php $totalHombres = nvl($totales[0][0]['Hombres']) + nvl($totales[1][0]['Hombres']) + nvl($totales[2][0]['Hombres']); echo number_format($totalHombres); ?>"></td>
												<td><input type="text" id="MIEMujeresTotal" name="MIEMujeresTotal" class="form-control numeros disabled" value="<?php $totalMujeres = nvl($totales[0][0]['Mujeres']) +  nvl($totales[1][0]['Mujeres']) +  nvl($totales[2][0]['Mujeres']); echo number_format($totalMujeres); ?>"></td>
												<td><input type="text" id="MIETotalTotal" name="MIETotalTotal" class="form-control numeros disabled" value="<?php $total = nvl($totales[0][0]['Total']) +  nvl($totales[1][0]['Total']) +  nvl($totales[2][0]['Total']); echo number_format($total); ?>"></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
					</fieldset>

                    <!--.........................................-->
					<h1> Abandono Escolar Intracurricular por Grado y Género (Semestre <?php echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo']; ?>)</h1>
					<fieldset>
						<h2>1. El abandono intracurricular es la resta de la matrícula y la existencia del semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</h2>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

						<h2><label>ABANDONO ESCOLAR INTRACURRICULAR</label> </h2>
       					<h2>2. Desglose el motivo de baja o abandono del centro educativo (Cifras reportadas en el cuadro anterior).</h2>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1er."; } else { echo "2do.";} ?> Semestre</th>
												<th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3er."; } else { echo "4to.";} ?> Semestre</th>
												<th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "5to."; } else { echo "6to.";} ?> Semestre</th>
											</tr>
											<tr>
												<th></th>											
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>BAJA ADMVA TEMP.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>BAJA ACADÉMICA</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>BAJA ADMVA DEF.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>CAMBIO DE PLANTEL</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>FACTORES ECONÓMICOS</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>EMBARAZO O MATRIMONIO</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>CAMBIO DE RESIDENCIA</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>*OTRO</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>

										</tbody>
									</table>
								</div>
       						</div>
					</fieldset>

					<!--.........................................-->
					<h1> Matrícula del Semestre <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?></h1>
					<fieldset>
						<h2>1. Escriba por género y grado (2o, 4o y 6o semestre), el No de alumnos INSCRITOS AL INICIO del semestre 2022-1 (Febrero 2022). Indique cuántos de ellos presentan una discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena. Escriba también el NÚMERO DE GRUPOS por grado (2o, 4o y 6o semestre) con los que cuenta en este 2022-1.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Extranjeros</th>
												<th>Hablantes de Lenguas Indígenas</th>
												<th>Grupo</th>												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="MSEHombres1" name="MSEHombres1" class="form-control" ></td>
												<td><input type="text" id="MSEMujeres1" name="MSEMujeres1" class="form-control" ></td>
												<td><input type="text" id="MSETotal1" name="MSETotal1" class="form-control" ></td>
												<td><input type="text" id="MSEDiscapacidad1" name="MSEDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="MSEHablantes1" name="MSEHablantes1" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control" ></td>												
											</tr>
											<tr>
												<td><label>4o.</label></td>a
												<td><input type="text" id="MSEHombres2" name="MSEHombres2" class="form-control" ></td>
												<td><input type="text" id="MSEMujeres2" name="MSEMujeres2" class="form-control" ></td>
												<td><input type="text" id="MSETotal2" name="MSETotal2" class="form-control" ></td>
												<td><input type="text" id="MSEDiscapacidad2" name="MSEDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="MSEHablantes2" name="MSEHablantes2" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero2" name="MSEExtranjero2" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>6o.</label></td>
												<td><input type="text" id="MSEHombres3" name="MSEHombres3" class="form-control" ></td>
												<td><input type="text" id="MSEMujeres3" name="MSEMujeres3" class="form-control" ></td>
												<td><input type="text" id="MSETotal3" name="MSETotal3" class="form-control" ></td>
												<td><input type="text" id="MSEDiscapacidad3" name="MSEDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="MSEHablantes3" name="MSEHablantes3" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero3" name="MSEExtranjero3" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control" ></td>												
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="MSEHombresTotal" name="MSEHombresTotal" class="form-control" ></td>
												<td><input type="text" id="MSEMujeresTotal" name="MSEMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="MSETotalTotal" name="MSETotalTotal" class="form-control" ></td>
												<td><input type="text" id="MSEDiscapacidadTotal" name="MSEDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="MSEHablantesTotal" name="MSEHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjeroTotal" name="MSEExtranjeroTotal" class="form-control" ></td>
												<td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control" ></td>												
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

							<h2>Deberá coincidir con lo reportado al Depto. de Control Escolar (Corte 04 de marzo 2022).</h2>		
							<br>
						<h2>2. De la matrícula 2022-1 , desglose por semestre y por genéro cuántos alumnos cursan sus clases de manera presencial y cuántos a distancia</h2>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th colspan="3">Clases Presenciales</th>
												<th colspan="3">Clases a distancia</th>
											</tr>
											<tr>
												<th>Semestre</th>											
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>2do.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4to.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>6to.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
       						<br>

						<h2><label>REPETIDOR</label> </h2>       						
						<h2>3. De los alumnos reportados en el punto anterior, desglosa los alumnos repetidores (son los que reprueban 5 o más materias, y que, por lo tanto, está repitiendo todo el semestre), por género y grado.</h2>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Segundo.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Cuarto.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sexto.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>       						
					</fieldset>	

					<!--.........................................-->
					<h1>Anexos</h1>
					<fieldset>
						<h2>2do Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno1" name="ATurno1" type="text" class="form-control">											
								</div>
							</div>

						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS (Matrícula 2022-1)</h2>
						<h2>Describir la cantidad de grupos del semestre citado distribuidos por hombres-mujeres.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Grupos</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo11" name="AGrupo11" class="form-control" ></td>
												<td><input type="text" id="AHGrupo11" name="AHGrupo11" class="form-control" ></td>
												<td><input type="text" id="AMGrupo11" name="AMGrupo11" class="form-control" ></td>
												<td><input type="text" id="AGrupoT11" name="AGrupoT11" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo12" name="AGrupo12" class="form-control" ></td>
												<td><input type="text" id="AHGrupo12" name="AHGrupo12" class="form-control" ></td>
												<td><input type="text" id="AMGrupo12" name="AMGrupo12" class="form-control" ></td>
												<td><input type="text" id="AGrupoT12" name="AGrupoT12" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo13" name="AGrupo13" class="form-control" ></td>
												<td><input type="text" id="AHGrupo13" name="AHGrupo13" class="form-control" ></td>
												<td><input type="text" id="AMGrupo13" name="AMGrupo13" class="form-control" ></td>
												<td><input type="text" id="AGrupoT13" name="AGrupoT13" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo14" name="AGrupo14" class="form-control" ></td>
												<td><input type="text" id="AHGrupo14" name="AHGrupo14" class="form-control" ></td>
												<td><input type="text" id="AMGrupo14" name="AMGrupo14" class="form-control" ></td>
												<td><input type="text" id="AGrupoT14" name="AGrupoT14" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo15" name="AGrupo15" class="form-control" ></td>
												<td><input type="text" id="AHGrupo15" name="AHGrupo15" class="form-control" ></td>
												<td><input type="text" id="AMGrupo15" name="AMGrupo15" class="form-control" ></td>
												<td><input type="text" id="AGrupoT15" name="AGrupoT15" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo16" name="AGrupo16" class="form-control" ></td>
												<td><input type="text" id="AHGrupo16" name="AHGrupo16" class="form-control" ></td>
												<td><input type="text" id="AMGrupo16" name="AMGrupo16" class="form-control" ></td>
												<td><input type="text" id="AGrupoT16" name="AGrupoT16" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo17" name="AGrupo17" class="form-control" ></td>
												<td><input type="text" id="AHGrupo17" name="AHGrupo17" class="form-control" ></td>
												<td><input type="text" id="AMGrupo17" name="AMGrupo17" class="form-control" ></td>
												<td><input type="text" id="AGrupoT17" name="AGrupoT17" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo18" name="AGrupo18" class="form-control" ></td>
												<td><input type="text" id="AHGrupo18" name="AHGrupo18" class="form-control" ></td>
												<td><input type="text" id="AMGrupo18" name="AMGrupo18" class="form-control" ></td>
												<td><input type="text" id="AGrupoT18" name="AGrupoT18" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo19" name="AGrupo19" class="form-control" ></td>
												<td><input type="text" id="AHGrupo19" name="AHGrupo19" class="form-control" ></td>
												<td><input type="text" id="AMGrupo19" name="AMGrupo19" class="form-control" ></td>
												<td><input type="text" id="AGrupoT19" name="AGrupoT19" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo110" name="AGrupo110" class="form-control" ></td>
												<td><input type="text" id="AHGrupo110" name="AHGrupo110" class="form-control" ></td>
												<td><input type="text" id="AMGrupo110" name="AMGrupo110" class="form-control" ></td>
												<td><input type="text" id="AGrupoT110" name="AGrupoT110" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo111" name="AGrupo111" class="form-control" ></td>
												<td><input type="text" id="AHGrupo111" name="AHGrupo111" class="form-control" ></td>
												<td><input type="text" id="AMGrupo111" name="AMGrupo111" class="form-control" ></td>
												<td><input type="text" id="AGrupoT111" name="AGrupoT111" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo112" name="AGrupo112" class="form-control" ></td>
												<td><input type="text" id="AHGrupo112" name="AHGrupo112" class="form-control" ></td>
												<td><input type="text" id="AMGrupo112" name="AMGrupo112" class="form-control" ></td>
												<td><input type="text" id="AGrupoT112" name="AGrupoT112" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total de Grupos</label></td>											
												<td><input type="text" id="AGrupoT1" name="AGrupoT1" class="form-control" ></td>
												<td><input type="text" id="AHGrupoT1" name="AHGrupoT1" class="form-control" ></td>
												<td><input type="text" id="AMGrupoT1" name="AMGrupoT1" class="form-control" ></td>
												<td><input type="text" id="AAlumnosT1" name="AAlumnosT1" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							
						<h2>4to Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno3" name="ATurno3" type="text" class="form-control">				
								</div>
							</div>

						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS (Matrícula 2022-1)</h2>
						<h2>Describir la cantidad de grupos del semestre citado distribuidos por hombres-mujeres asi como la formación para el trabajo por grupo.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Grupos</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Formación para el Trabajo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo31" name="AGrupo31" class="form-control" ></td>
												<td><input type="text" id="AHGrupo31" name="AHGrupo31" class="form-control" ></td>
												<td><input type="text" id="AMGrupo31" name="AMGrupo31" class="form-control" ></td>
												<td><input type="text" id="AGrupoT31" name="AGrupoT31" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion31" name="AFormacion31">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>												
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo32" name="AGrupo32" class="form-control" ></td>
												<td><input type="text" id="AHGrupo32" name="AHGrupo32" class="form-control" ></td>
												<td><input type="text" id="AMGrupo32" name="AMGrupo32" class="form-control" ></td>
												<td><input type="text" id="AGrupoT32" name="AGrupoT32" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion32" name="AFormacion32">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo33" name="AGrupo33" class="form-control" ></td>
												<td><input type="text" id="AHGrupo33" name="AHGrupo33" class="form-control" ></td>
												<td><input type="text" id="AMGrupo33" name="AMGrupo33" class="form-control" ></td>
												<td><input type="text" id="AGrupoT33" name="AGrupoT33" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion33" name="AFormacion33">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo34" name="AGrupo34" class="form-control" ></td>
												<td><input type="text" id="AHGrupo34" name="AHGrupo34" class="form-control" ></td>
												<td><input type="text" id="AMGrupo34" name="AMGrupo34" class="form-control" ></td>
												<td><input type="text" id="AGrupoT34" name="AGrupoT34" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion34" name="AFormacion34">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo35" name="AGrupo35" class="form-control" ></td>
												<td><input type="text" id="AHGrupo35" name="AHGrupo35" class="form-control" ></td>
												<td><input type="text" id="AMGrupo35" name="AMGrupo35" class="form-control" ></td>
												<td><input type="text" id="AGrupoT35" name="AGrupoT35" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion35" name="AFormacion35">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo36" name="AGrupo36" class="form-control" ></td>
												<td><input type="text" id="AHGrupo36" name="AHGrupo36" class="form-control" ></td>
												<td><input type="text" id="AMGrupo36" name="AMGrupo36" class="form-control" ></td>
												<td><input type="text" id="AGrupoT36" name="AGrupoT36" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion36" name="AFormacion36">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo37" name="AGrupo37" class="form-control" ></td>
												<td><input type="text" id="AHGrupo37" name="AHGrupo37" class="form-control" ></td>
												<td><input type="text" id="AMGrupo37" name="AMGrupo37" class="form-control" ></td>
												<td><input type="text" id="AGrupoT37" name="AGrupoT37" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion37" name="AFormacion37">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo38" name="AGrupo38" class="form-control" ></td>
												<td><input type="text" id="AHGrupo38" name="AHGrupo38" class="form-control" ></td>
												<td><input type="text" id="AMGrupo38" name="AMGrupo38" class="form-control" ></td>
												<td><input type="text" id="AGrupoT38" name="AGrupoT38" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion38" name="AFormacion38">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>												
												
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo39	" name="AGrupo39	" class="form-control" ></td>
												<td><input type="text" id="AHGrupo39" name="AHGrupo39" class="form-control" ></td>
												<td><input type="text" id="AMGrupo39" name="AMGrupo39" class="form-control" ></td>
												<td><input type="text" id="AGrupoT39" name="AGrupoT39" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion39" name="AFormacion39">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo310" name="AGrupo310" class="form-control" ></td>
												<td><input type="text" id="AHGrupo310" name="AHGrupo310" class="form-control" ></td>
												<td><input type="text" id="AMGrupo310" name="AMGrupo310" class="form-control" ></td>
												<td><input type="text" id="AGrupoT310" name="AGrupoT310" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion310" name="AFormacion310">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo311" name="AGrupo311" class="form-control" ></td>
												<td><input type="text" id="AHGrupo311" name="AHGrupo311" class="form-control" ></td>
												<td><input type="text" id="AMGrupo311" name="AMGrupo311" class="form-control" ></td>
												<td><input type="text" id="AGrupoT311" name="AGrupoT311" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion311" name="AFormacion311">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo312" name="AGrupo312" class="form-control" ></td>
												<td><input type="text" id="AHGrupo312" name="AHGrupo312" class="form-control" ></td>
												<td><input type="text" id="AMGrupo312" name="AMGrupo312" class="form-control" ></td>
												<td><input type="text" id="AGrupoT312" name="AGrupoT312" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion312" name="AFormacion312">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>											
											<tr>
												<td><label>Total de Grupos</label></td>											
												<td><input type="text" id="AGrupoT3" name="AGrupoT3" class="form-control" ></td>
												<td><input type="text" id="AHGrupoT3" name="AHGrupoT3" class="form-control" ></td>
												<td><input type="text" id="AMGrupoT3" name="AMGrupoT3" class="form-control" ></td>
												<td><input type="text" id="AAlumnosT3" name="AAlumnosT3" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							
						<h2>6to Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno5" name="ATurno5" type="text" class="form-control">											
								</div>
							</div>	

						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS (Matrícula 2022-1)</h2>
						<h2>Describir la cantidad de grupos del semestre citado distribuidos por hombres-mujeres asi como la formación para el trabajo por grupo.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Grupos</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Formación para el Trabajo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo51" name="AGrupo51" class="form-control" ></td>
												<td><input type="text" id="AHGrupo51" name="AHGrupo51" class="form-control" ></td>
												<td><input type="text" id="AMGrupo51" name="AMGrupo51" class="form-control" ></td>
												<td><input type="text" id="AGrupoT51" name="AGrupoT51" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion51" name="AFormacion51">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>												
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo52" name="AGrupo52" class="form-control" ></td>
												<td><input type="text" id="AHGrupo52" name="AHGrupo52" class="form-control" ></td>
												<td><input type="text" id="AMGrupo52" name="AMGrupo52" class="form-control" ></td>
												<td><input type="text" id="AGrupoT52" name="AGrupoT52" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion52" name="AFormacion52">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo53" name="AGrupo53" class="form-control" ></td>
												<td><input type="text" id="AHGrupo53" name="AHGrupo53" class="form-control" ></td>
												<td><input type="text" id="AMGrupo53" name="AMGrupo53" class="form-control" ></td>
												<td><input type="text" id="AGrupoT53" name="AGrupoT53" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion53" name="AFormacion53">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo54" name="AGrupo54" class="form-control" ></td>
												<td><input type="text" id="AHGrupo54" name="AHGrupo54" class="form-control" ></td>
												<td><input type="text" id="AMGrupo54" name="AMGrupo54" class="form-control" ></td>
												<td><input type="text" id="AGrupoT54" name="AGrupoT54" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion54" name="AFormacion54">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo55" name="AGrupo55" class="form-control" ></td>
												<td><input type="text" id="AHGrupo55" name="AHGrupo55" class="form-control" ></td>
												<td><input type="text" id="AMGrupo55" name="AMGrupo55" class="form-control" ></td>
												<td><input type="text" id="AGrupoT55" name="AGrupoT55" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion55" name="AFormacion55">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo56" name="AGrupo56" class="form-control" ></td>
												<td><input type="text" id="AHGrupo56" name="AHGrupo56" class="form-control" ></td>
												<td><input type="text" id="AMGrupo56" name="AMGrupo56" class="form-control" ></td>
												<td><input type="text" id="AGrupoT56" name="AGrupoT56" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion56" name="AFormacion56">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo57" name="AGrupo57" class="form-control" ></td>
												<td><input type="text" id="AHGrupo57" name="AHGrupo57" class="form-control" ></td>
												<td><input type="text" id="AMGrupo57" name="AMGrupo57" class="form-control" ></td>
												<td><input type="text" id="AGrupoT57" name="AGrupoT57" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion57" name="AFormacion57">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo58" name="AGrupo58" class="form-control" ></td>
												<td><input type="text" id="AHGrupo58" name="AHGrupo58" class="form-control" ></td>
												<td><input type="text" id="AMGrupo58" name="AMGrupo58" class="form-control" ></td>
												<td><input type="text" id="AGrupoT58" name="AGrupoT58" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion58" name="AFormacion58">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>												
												
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo59" name="AGrupo59" class="form-control" ></td>
												<td><input type="text" id="AHGrupo59" name="AHGrupo59" class="form-control" ></td>
												<td><input type="text" id="AMGrupo59" name="AMGrupo59" class="form-control" ></td>
												<td><input type="text" id="AGrupoT59" name="AGrupoT59" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion59" name="AFormacion59">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo510" name="AGrupo510" class="form-control" ></td>
												<td><input type="text" id="AHGrupo510" name="AHGrupo510" class="form-control" ></td>
												<td><input type="text" id="AMGrupo510" name="AMGrupo510" class="form-control" ></td>
												<td><input type="text" id="AGrupoT510" name="AGrupoT510" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion510" name="AFormacion510">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo511" name="AGrupo511" class="form-control" ></td>
												<td><input type="text" id="AHGrupo511" name="AHGrupo511" class="form-control" ></td>
												<td><input type="text" id="AMGrupo511" name="AMGrupo511" class="form-control" ></td>
												<td><input type="text" id="AGrupoT511" name="AGrupoT511" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion511" name="AFormacion511">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>
											<tr>
												<td></td>											
												<td><input type="text" id="AGrupo512" name="AGrupo512" class="form-control" ></td>
												<td><input type="text" id="AHGrupo512" name="AHGrupo512" class="form-control" ></td>
												<td><input type="text" id="AMGrupo512" name="AMGrupo512" class="form-control" ></td>
												<td><input type="text" id="AGrupoT512" name="AGrupoT512" class="form-control" ></td>
												<td>
													<div class="col-sm-15">
														<select class="form-control" id="AFormacion512" name="AFormacion512">
															<option value="a">Selecciona una opción</option>
															<option value="b">Contabilidad</option>
															<option value="c">Turismo</option>
															<option value="d">Dibujo Arq. y de Construc.</option>
															<option value="e">Laboratorista Químico </option>
															<option value="f">Tec. de la Inf. y la Com. </option>
															<option value="g">Interp. y Trad. Id Inglés </option>
															<option value="h">Asistente de Oper. Logist. </option>
															<option value="i">Auxiliar de Enfermería </option>																
														</select>                         
													</div>													
												</td>																								
											</tr>											
											<tr>
												<td><label>Total de Grupos</label></td>											
												<td><input type="text" id="AGrupoT5" name="AGrupoT5" class="form-control" ></td>
												<td><input type="text" id="AHGrupoT5" name="AHGrupoT5" class="form-control" ></td>
												<td><input type="text" id="AMGrupoT5" name="AMGrupoT5" class="form-control" ></td>
												<td><input type="text" id="AAlumnosT5" name="AAlumnosT5" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
       						<br>

							<h2>De la matrícula del semestre 2022-1 desglose cuántos alumnos presentan situación de orfandad (padre, madre o ambos) por semestre, género y causas.</h2>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th colspan="3">Madre</th>
												<th colspan="3">Padre</th>
												<th colspan="3">Ambos</th>
											</tr>
											<tr>
												<th>Causas</th>											
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>COVID-19.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Enfermedad crónico-degenerativa.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Accidentes.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Naturales.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Suicidio</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otras</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>

										</tbody>
									</table>
								</div>
       						</div>       						
					</fieldset>									
                               
                    <!--.........................................-->				
					<h1> Modelo Dual</h1>
					<fieldset>
						<h2>¿ El Centro Educativo cuenta con alumnos que participan en el Modelo Dual ?.</h2>
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"> <label>Si &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control"  value="1" /> 
									</div>
								</div>
							</div>	
							<br>
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"><label>No &nbsp;&nbsp;&nbsp;</label><input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control"  value="2" />  
									</div>
								</div>
							</div>
							<br><br>

						<h2>De la matrícula reportada en el Numeral V indique por grado y género el número de alumnos del Modelo Dual.</h2>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Semestre</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Cuarto.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sexto.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	

							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">*IMPORTANTE: Para un desglose más detallado, favor de llenar el archivo anexo en formato Excel enviado por el Departamento de Estadística y Evaluación.</h3>
								</div>
							</div>
					</fieldset>	

					 <!--.........................................-->				
					<h1>Docentes</h1>
					<fieldset>
						<h2>Docentes.</h2>						
						<h2>1. Escriba por género, el número de docentes que están atendiendo este programa en el semestre 2022-1.</h2>
							<div class="row">
								<div class="col-lg-7">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="3">Docentes</th>
											</tr>
											<tr>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="row">
														<div class="col-md-12">
															<div class="i-checks"><input id="PEDuracion" name="PEDuracion" type="text" class="form-control "> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-12">
															<div class="i-checks"><input id="PEDuracion" name="PEDuracion" type="text" class="form-control "> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-12">
															<div class="i-checks"><input id="PEDuracion" name="PEDuracion" type="text" class="form-control "> <label></label>
															</div>
														</div>
													</div>					
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">*(Con corte al 15 de marzo de 2022).</h3>
								</div>
							</div>	

							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">Nota para la Modalidad No Escolarizada: Si por algún motivo no cuenta con personal docente para esta modalidad, reporte el total de asesores que la atendieron.</h3>
								</div>
							</div>	
							<br><br>

						<h2>Personal Docente.</h2>						
							<h2>2. De la cantidad de docentes registrado en punto anterior desglose según el tiempo de dedicación.</h2>
							<div class="row">
								<div class="col-lg-10">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Genero</th>
												<th>Tiempo completo</th>
												<th>3/4 de tiempo*</th>
												<th>1/2 tiempo</th>
												<th>Por horas</th>
												<th>Total</th>												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Hombres.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>												
											</tr>
											<tr>
												<td><label>Mujeres.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>										
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>												
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
					</fieldset>

					<!--.........................................-->				
					<h1>Matrícula de Formación para el Trabajo</h1>
					<fieldset>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">(Esta sección sólo será llenada cuando el Bachillerato General imparta Formación para el Trabajo).</h3>
								</div>
							</div>	

						<h2>1. Escriba por género, el número de alumnos (Matrícula 2022-1 que cursan alguna Formación para el Trabajo.</h2>					
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Hombres</label>
										<input id="PEActualizacionAnioFT" name="PEActualizacionAnioFT" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="PEActualizacionMesFT" name="PEActualizacionMesFT" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input id="PEActualizacionDiaFT" name="PEActualizacionDiaFT" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							
						<h2>2. Escriba el número de Formaciones para el Trabajo que se ofrece en el Bachillerato General.</h2>		
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Formación para el Trabajo</label>
										<input id="PEActualizacionAnioMFT" name="PEActualizacionAnioMFT" type="text" class="form-control ">	
									</div>
								</div>
							</div>							
							<br>

						<h2>3. Escriba por género, clave y nombre de Formación para el Trabajo el número de alumnos reportados en la pregunta 1 de esta sección.</h2>		
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Clave de la Formación para el Trabajo</th>
												<th>Nombre de la Formación para el Trabajo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" id="MClaveF1" name="MClaveF1" class="form-control" ></td>
												<td><input type="text" id="MNombreF1" name="MNombreF1" class="form-control" value="Tecnología de la Información y la Comunicación" disabled size="95"></td>
												<td><input type="text" id="MHF1" name="MHF1" class="form-control" ></td>
												<td><input type="text" id="MMF1" name="MMF1" class="form-control" ></td>
												<td><input type="text" id="MTF1" name="MTF1" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF2" name="MClaveF2" class="form-control" ></td>
												<td><input type="text" id="MNombreF2" name="MNombreF2" class="form-control" value="Contabilidad" disabled size="95"></td>											
												<td><input type="text" id="MHF2" name="MHF2" class="form-control"></td>
												<td><input type="text" id="MMF2" name="MMF2" class="form-control" ></td>
												<td><input type="text" id="MTF2" name="MTF2" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF3" name="MClaveF3" class="form-control" ></td>
												<td><input type="text" id="MNombreF3" name="MNombreF3" class="form-control" value="Dibujo Arquitectónico y de Construcción" disabled size="95"></td>				
												<td><input type="text" id="MHF3" name="MHF3" class="form-control" ></td>
												<td><input type="text" id="MMF3" name="MMF3" class="form-control" ></td>
												<td><input type="text" id="MTF3" name="MTF3" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF4" name="MClaveF4" class="form-control" ></td>
												<td><input type="text" id="MNombreF4" name="MNombreF4" class="form-control" value="Laboratorista Químico" disabled size="95"></td>									
												<td><input type="text" id="MHF4" name="MHF4" class="form-control" ></td>
												<td><input type="text" id="MMF4" name="MMF4" class="form-control" ></td>
												<td><input type="text" id="MTF4" name="MTF4" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF5" name="MClaveF5" class="form-control" ></td>
												<td><input type="text" id="MNombreF5" name="MNombreF5" class="form-control" value="Interpretación y Traducción del Idioma Inglés" disabled size="95"></td>
												<td><input type="text" id="MHF5" name="MHF5" class="form-control" ></td>
												<td><input type="text" id="MMF5" name="MMF5" class="form-control" ></td>
												<td><input type="text" id="MTF5" name="MTF5" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF6" name="MClaveF6" class="form-control" ></td>
												<td><input type="text" id="MNombreF6" name="MNombreF6" class="form-control" value="Asistente de Operaciones Logísticas" disabled size="95"></td>
												<td><input type="text" id="MHF6" name="MHF6" class="form-control" ></td>
												<td><input type="text" id="MMF6" name="MMF6" class="form-control" ></td>
												<td><input type="text" id="MTF6" name="MTF6" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF7" name="MClaveF7" class="form-control" ></td>
												<td><input type="text" id="MNombreF7" name="MNombreF7" class="form-control" value="Turismo" disabled size="95"></td>
												<td><input type="text" id="MHF7" name="MHF7" class="form-control" ></td>
												<td><input type="text" id="MMF7" name="MMF7" class="form-control" ></td>
												<td><input type="text" id="MTF7" name="MTF7" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF8" name="MClaveF8" class="form-control" ></td>
												<td><input type="text" id="MNombreF8" name="MNombreF8" class="form-control" value="Tramitación Aduanal" disabled size="95"></td>
												<td><input type="text" id="MHF8" name="MHF8" class="form-control" ></td>
												<td><input type="text" id="MMF8" name="MMF8" class="form-control" ></td>
												<td><input type="text" id="MTF8" name="MTF8" class="form-control" ></td>											
											</tr>
											<tr>
												<td><input type="text" id="MClaveF9" name="MClaveF9" class="form-control" ></td>
												<td><input type="text" id="MNombreF9" name="MNombreF9" class="form-control" value="Auxiliar De Enfermería" disabled size="95"></td>
												<td><input type="text" id="MHF9" name="MHF9" class="form-control" ></td>
												<td><input type="text" id="MMF9" name="MMF9" class="form-control" ></td>
												<td><input type="text" id="MTF9" name="MTF9" class="form-control" ></td>											
											</tr>
											<tr>
												<td></td>
												<td></td>												
												<td><input type="text" id="MHFT" name="MHFT" class="form-control" ></td>
												<td><input type="text" id="MMFT" name="MMFT" class="form-control" ></td>
												<td><input type="text" id="MTF" name="MTF" class="form-control" ></td>						
											</tr>
											
										</tbody>
									</table>
								</div>
       						</div>
							
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">IMPORTANTE: Firme y selle esta hoja de oficialización.</h3>
							</div>
						</div>
						<h2>Observaciones:</h2>
							<div class="col-md-3">
								<div class="form-group">
									<textarea id="FObservaciones" name="FObservaciones" cols="60" rows="5" ></textarea>											
								</div>
							</div>							
							<br><br>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td><input type="text" id="FDirector" name="FDirector" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td>Nombre y firma del director del centro de trabajo</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td><input type="text" id="FResponsable" name="FResponsable" class="form-control" ></td>
											</tr>
											<tr>
												<td></td>											
												<td></td>
												<td>Nombre y firma del responsable del llenado</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td>
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																Año
																<input id="FAnio" name="FAnio" type="text" class="form-control ">	
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																Mes
																<input id="FMes" name="FMes" type="text" class="form-control ">											
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																Día
																<input id="FDia" name="FDia" type="text" class="form-control ">											
															</div>
														</div>
													</div>																								
												</td>
											</tr>
											<tr>
												<td><div class="text-center"><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" value="Sello" disabled size="95"></td></div>
												<td></td>
												<td>Fecha de llenado</td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>								
					</fieldset>
				</form>
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
		if (parseInt(AHombres1) > parseInt(document.getElementById("EHombres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres1").value);
			var AHombres1 = document.getElementById("AHombres1").value = 0;
		} else {
			var ATotal1 = parseInt(AHombres1) + parseInt(AMujeres1);
		}

		var AMujeres1 = document.getElementById("AMujeres1").value; 
		if (parseInt(AMujeres1) > parseInt(document.getElementById("EMujeres1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres1").value);
			var AMujeres1 = document.getElementById("AMujeres1").value = 0;
		} else {	
			var ATotal1 = parseInt(AHombres1) + parseInt(AMujeres1);
		}
		document.getElementById('ATotal1').value = ATotal1;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 1
		
		//validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
		var AHombres2 = document.getElementById("AHombres2").value; 
		if (parseInt(AHombres2) > parseInt(document.getElementById("EHombres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres2").value);
			var AHombres2 = document.getElementById("AHombres2").value = 0;
		} else {
			var ATotal2 = parseInt(AHombres2) + parseInt(AMujeres2);
		}

		var AMujeres2 = document.getElementById("AMujeres2").value; 
		if (parseInt(AMujeres2) > parseInt(document.getElementById("EMujeres2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres2").value);
			var AMujeres2 = document.getElementById("AMujeres2").value = 0;
		} else {	
			var ATotal2 = parseInt(AHombres2) + parseInt(AMujeres2);
		}
		document.getElementById('ATotal2').value = ATotal2;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 2

		//validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
		var AHombres3 = document.getElementById("AHombres3").value; 
		if (parseInt(AHombres3) > parseInt(document.getElementById("EHombres3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHombres3").value);
			var AHombres3 = document.getElementById("AHombres3").value = 0;
		} else {
			var ATotal3 = parseInt(AHombres3) + parseInt(AMujeres3);
		}

		var AMujeres3 = document.getElementById("AMujeres3").value; 
		if (parseInt(AMujeres3) > parseInt(document.getElementById("EMujeres1").value )) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EMujeres1").value);
			var AMujeres3 = document.getElementById("AMujeres3").value = 0;
		} else {	
			var ATotal3 = parseInt(AHombres3) + parseInt(AMujeres3);
		}
		document.getElementById('ATotal3').value = ATotal3;
		//fin validar que el numero de Alumnos Aprobados no exceda a los Existentes 3
				
		var AHombresTotal = parseInt(AHombres1) + parseInt(AHombres2) + parseInt(AHombres3);
		document.getElementById('AHombresTotal').value = AHombresTotal;
		
		var AMujeresTotal = parseInt(AMujeres1) + parseInt(AMujeres2) + parseInt(AMujeres3);
		document.getElementById('AMujeresTotal').value = AMujeresTotal;
		
		var ATotalTotal = parseInt(ATotal1) + parseInt(ATotal2) + parseInt(ATotal3);
		document.getElementById('ATotalTotal').value = ATotalTotal;

		//validar que el numero de Alumnos Aprobados Discapacitados no exceda a los Existentes Discapacitados 
		var ADiscapacidad1 = document.getElementById("ADiscapacidad1").value; 
		if (parseInt(ADiscapacidad1) > parseInt(document.getElementById("EDiscapacidad1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad1").value);
			var ADiscapacidad1 = document.getElementById("ADiscapacidad1").value = 0;
		} else {
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}

		var ADiscapacidad2 = document.getElementById("ADiscapacidad2").value; 
		if (parseInt(ADiscapacidad2) > parseInt(document.getElementById("EDiscapacidad2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad2").value);
			var ADiscapacidad2 = document.getElementById("ADiscapacidad2").value = 0;
		} else {	
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}

		var ADiscapacidad3 = document.getElementById("ADiscapacidad3").value; 
		if (parseInt(ADiscapacidad3) > parseInt(document.getElementById("EDiscapacidad3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EDiscapacidad3").value);
			var ADiscapacidad3 = document.getElementById("ADiscapacidad3").value = 0;
		} else {	
			var ADiscapacidadTotal = parseInt(ADiscapacidad1) + parseInt(ADiscapacidad2) + parseInt(ADiscapacidad3);
		}
		document.getElementById('ADiscapacidadTotal').value = ADiscapacidadTotal;
		//fin validar que el numero de Alumnos Aprobados Discapacitados no exceda a los Existentes Discapacitados 

		//validar que el numero de Alumnos Aprobados Extranjeros no exceda a los Existentes Extranjeros 
		var AExtranjero1 = document.getElementById("AExtranjero1").value; 
		if (parseInt(AExtranjero1) > parseInt(document.getElementById("EExtranjero1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero1").value);
			var AExtranjero1 = document.getElementById("AExtranjero1").value = 0;
		} else {
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}

		var AExtranjero2 = document.getElementById("AExtranjero2").value; 
		if (parseInt(AExtranjero2) > parseInt(document.getElementById("EExtranjero2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero2").value);
			var AExtranjero2 = document.getElementById("AExtranjero2").value = 0;
		} else {	
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}

		var AExtranjero3 = document.getElementById("AExtranjero3").value; 
		if (parseInt(AExtranjero3) > parseInt(document.getElementById("EExtranjero3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EExtranjero3").value);
			var AExtranjero3 = document.getElementById("AExtranjero3").value = 0;
		} else {	
			var AExtranjeroTotal = parseInt(AExtranjero1) + parseInt(AExtranjero2) + parseInt(AExtranjero3);
		}
		document.getElementById('AExtranjeroTotal').value = AExtranjeroTotal;
		//fin validar que el numero de Alumnos Aprobados Extranjeros no exceda a los Existentes Extranjeros 

		//validar que el numero de Alumnos Aprobados Hablantes Indigena no exceda a los Existentes Hablantes Indigena 
		var AHablantes1 = document.getElementById("AHablantes1").value; 
		if (parseInt(AHablantes1) > parseInt(document.getElementById("EHablantes1").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes1").value);
			var AHablantes1 = document.getElementById("AHablantes1").value = 0;
		} else {
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}

		var AHablantes2 = document.getElementById("AHablantes2").value; 
		if (parseInt(AHablantes2) > parseInt(document.getElementById("EHablantes2").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes2").value);
			var AHablantes2 = document.getElementById("AHablantes2").value = 0;
		} else {	
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}

		var AHablantes3 = document.getElementById("AHablantes3").value; 
		if (parseInt(AHablantes3) > parseInt(document.getElementById("EHablantes3").value) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("EHablantes3").value);
			var AHablantes3 = document.getElementById("AHablantes3").value = 0;
		} else {	
			var AHablantesTotal = parseInt(AHablantes1) + parseInt(AHablantes2) + parseInt(AHablantes3);
		}
		document.getElementById('AHablantesTotal').value = AHablantesTotal;
		//fin validar que el numero de Alumnos Aprobados Hablantes Indigena no exceda a los Existentes Hablantes Indigena 

		
	}

	function sumarReprobados() {
		var RepHombres1 = 0;		var RepHombres2 = 0;		var RepHombres3 = 0;		var RepHombresTotal = 0;
		var RepMujeres1 = 0;		var RepMujeres2 = 0;		var RepMujeres3 = 0;		var RepMujeresTotal = 0;
		var RepTotal1 = 0;		var RepTotal2 = 0;		var RepTotal3 = 0;		var RepTotalTotal = 0;
		var RepDiscapacidad1 = 0;		var RepDiscapacidad2 = 0;		var RepDiscapacidad3 = 0;		var RepDiscapacidadTotal = 0;
		var RepHablantes1 = 0;		var RepHablantes2 = 0;		var RepHablantes3 = 0;		var RepHablantesTotal = 0;
		var RepExtranjero1 = 0;		var RepExtranjero2 = 0;		var RepExtranjero3 = 0;		var RepExtranjeroTotal = 0;

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 1
		var repH1 = (document.getElementById("EHombres1").value) - (document.getElementById("AHombres1").value);
		var RepHombres1 = document.getElementById("RepHombres1").value; 
		if (parseInt(RepHombres1) > parseInt(repH1)) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repH1);
			var RepHombres1 = document.getElementById("RepHombres1").value = 0;
		} else {	
			var RepTotal1 = parseInt(RepHombres1) + parseInt(RepMujeres1);
		}

		var repM1 = (document.getElementById("EMujeres1").value) - (document.getElementById("AMujeres1").value);
		var RepMujeres1 = document.getElementById("RepMujeres1").value; 
		if (parseInt(RepMujeres1) > parseInt(repM1)) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repM1);
			var RepMujeres1 = document.getElementById("RepMujeres1").value = 0;
		} else {
			var RepTotal1 = parseInt(RepHombres1) + parseInt(RepMujeres1);
		}
		document.getElementById('RepTotal1').value = RepTotal1;
		//fin validar  Alumnos Reprobados no exceda al Existente y Aprobados 1
		

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 2
		var repH2 = (document.getElementById("EHombres2").value) - (document.getElementById("AHombres2").value);
		var RepHombres2 = document.getElementById("RepHombres2").value; 
		if (parseInt(RepHombres2) > parseInt(repH2)) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repH2);
			var RepHombres2 = document.getElementById("RepHombres2").value = 0;
		} else {	
			var RepTotal2 = parseInt(RepHombres2) + parseInt(RepMujeres2);
		}

		var repM2 = (document.getElementById("EMujeres2").value) - (document.getElementById("AMujeres2").value);
		var RepMujeres2 = document.getElementById("RepMujeres2").value; 
		if (parseInt(RepMujeres2) > parseInt(repM2)) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repM2);
			var RepMujeres2 = document.getElementById("RepMujeres2").value = 0;
		} else {
			var RepTotal2 = parseInt(RepHombres2) + parseInt(RepMujeres2);
		}
		document.getElementById('RepTotal2').value = RepTotal2;
		//fin validar  Alumnos Reprobados no exceda al Existente y Aprobados 2

		//validar que el numero de Alumnos Reprobados no exceda al Existente y Aprobados 3
		var repH3 = (document.getElementById("EHombres3").value) - (document.getElementById("AHombres3").value);
		var RepHombres3 = document.getElementById("RepHombres3").value; 
		if (parseInt(RepHombres3) > parseInt(repH3)) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repH3);
			var RepHombres3 = document.getElementById("RepHombres3").value = 0;
		} else {	
			var RepTotal3 = parseInt(RepHombres3) + parseInt(RepMujeres3);
		}

		var repM3 = (document.getElementById("EMujeres3").value) - (document.getElementById("AMujeres3").value);
		var RepMujeres3 = document.getElementById("RepMujeres3").value; 
		if (parseInt(RepMujeres3) > parseInt(repM3) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repM3);
			var RepMujeres3 = document.getElementById("RepMujeres3").value = 0;
		} else {
			var RepTotal3 = parseInt(RepHombres3) + parseInt(RepMujeres3);
		}
		document.getElementById('RepTotal3').value = RepTotal3;
		//fin validar  Alumnos Reprobados no exceda al Existente y Aprobados 3

		var RepHombresTotal = parseInt(RepHombres1) + parseInt(RepHombres2) + parseInt(RepHombres3);
		document.getElementById('RepHombresTotal').value = RepHombresTotal;
		
		var RepMujeresTotal = parseInt(RepMujeres1) + parseInt(RepMujeres2) + parseInt(RepMujeres3);
		document.getElementById('RepMujeresTotal').value = RepMujeresTotal;
		
		var RepTotalTotal = parseInt(RepTotal1) + parseInt(RepTotal2) + parseInt(RepTotal3);
		document.getElementById('RepTotalTotal').value = RepTotalTotal;

		//validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad
		var repDis1 = (document.getElementById("EDiscapacidad1").value) - (document.getElementById("ADiscapacidad1").value);
		var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value; 
		if (parseInt(RepDiscapacidad1) > parseInt(repDis1) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repDis1);
			var RepDiscapacidad1 = document.getElementById("RepDiscapacidad1").value = 0;
		} else {
			var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		}

		var repDis2 = (document.getElementById("EDiscapacidad2").value) - (document.getElementById("ADiscapacidad2").value);
		var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value; 
		if (parseInt(RepDiscapacidad2) > parseInt(repDis2) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repDis2);
			var RepDiscapacidad2 = document.getElementById("RepDiscapacidad2").value = 0;
		} else {	
			var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		}

		var repDis3 = (document.getElementById("EDiscapacidad3").value) - (document.getElementById("ADiscapacidad3").value);
		var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value; 
		if (parseInt(RepDiscapacidad3) > parseInt(repDis3) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repDis3);
			var RepDiscapacidad3 = document.getElementById("RepDiscapacidad3").value = 0;
		} else {	
			var RepDiscapacidadTotal = parseInt(RepDiscapacidad1) + parseInt(RepDiscapacidad2) + parseInt(RepDiscapacidad3);
		}
		document.getElementById('RepDiscapacidadTotal').value = RepDiscapacidadTotal;
		//fin validar que el numero de Alumnos Reprobados Discapacidad no exceda a los Existentes Discapacidad

		//validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros
		var repExt1 = (document.getElementById("EExtranjero1").value) - (document.getElementById("AExtranjero1").value);
		var RepExtranjero1 = document.getElementById("RepExtranjero1").value; 
		if (parseInt(RepExtranjero1) > parseInt(repExt1) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repExt1);
			var RepExtranjero1 = document.getElementById("RepExtranjero1").value = 0;
		} else {
			var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);
		}

		var repExt2 = (document.getElementById("EExtranjero2").value) - (document.getElementById("AExtranjero2").value);
		var RepExtranjero2 = document.getElementById("RepExtranjero2").value; 
		if (parseInt(RepExtranjero2) > parseInt(repExt2) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repExt2);
			var RepExtranjero2 = document.getElementById("RepExtranjero2").value = 0;
		} else {	
			var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);
		}

		var repExt3 = (document.getElementById("EExtranjero3").value) - (document.getElementById("AExtranjero3").value);
		var RepExtranjero3 = document.getElementById("RepExtranjero3").value; 
		if (parseInt(RepExtranjero3) > parseInt(repExt3) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repExt3);
			var RepExtranjero3 = document.getElementById("RepExtranjero3").value = 0;
		} else {	
			var RepExtranjeroTotal = parseInt(RepExtranjero1) + parseInt(RepExtranjero2) + parseInt(RepExtranjero3);
		}
		document.getElementById('RepExtranjeroTotal').value = RepExtranjeroTotal;
		//fin validar que el numero de Alumnos Reprobados Extranjeros no exceda a los Existentes Extranjeros

		//validar que el numero de Alumnos Reprobados Hablantes Indigenas no exceda a los Existentes Hablantes Indigenas
		var repHab1 = (document.getElementById("EHablantes1").value) - (document.getElementById("AHablantes1").value);
		var RepHablantes1 = document.getElementById("RepHablantes1").value; 
		if (parseInt(RepHablantes1) > parseInt(repHab1) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repHab1);
			var RepHablantes1 = document.getElementById("RepHablantes1").value = 0;
		} else {
			var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);
		}

		var repHab2 = (document.getElementById("EHablantes2").value) - (document.getElementById("AHablantes2").value);
		var RepHablantes2 = document.getElementById("RepHablantes2").value; 
		if (parseInt(RepHablantes2) > parseInt(repHab2) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repHab2);
			var RepHablantes2 = document.getElementById("RepHablantes2").value = 0;
		} else {	
			var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);
		}

		var repHab3 = (document.getElementById("EHablantes3").value) - (document.getElementById("AHablantes3").value);
		var RepHablantes3 = document.getElementById("RepHablantes3").value; 
		if (parseInt(RepHablantes3) > parseInt(repHab3) ) {
			alertify.alert('El número máximo de Alumnos debe ser: '+ repHab3);
			var RepHablantes3 = document.getElementById("RepHablantes3").value = 0;
		} else {	
			var RepHablantesTotal = parseInt(RepHablantes1) + parseInt(RepHablantes2) + parseInt(RepHablantes3);
		}
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

<script>
	$(document).ready(function(){
		//$("#wizard").steps();
		$("#form").steps({
			bodyTag: "fieldset",
			/* Labels */
			labels: {
				cancel: "Cancelar",
				current: "Vista actual:",
				pagination: "Paginación",
				finish: "Finalizar",
				next: "Siguiente",
				previous: "Anterior",
				loading: "Cargando ..."
			},
			onStepChanging: function (event, currentIndex, newIndex)
			{
				// Always allow going backward even if the current step contains invalid fields!
				if (currentIndex > newIndex)
				{
					return true;
				}

				// Forbid suppressing "Warning" step if the user is to young
				if (newIndex === 3 && Number($("#age").val()) < 18)
				{
					return false;
				}

				var form = $(this);

				// Clean up if user went backward before
				if (currentIndex < newIndex)
				{
					// To remove error styles
					$(".body:eq(" + newIndex + ") label.error", form).remove();
					$(".body:eq(" + newIndex + ") .error", form).removeClass("error");
				}

				// Disable validation on fields that are disabled or hidden.
				form.validate().settings.ignore = ":disabled,:hidden";

				// Start validation; Prevent going forward if false
				return form.valid();
			},
			onStepChanged: function (event, currentIndex, priorIndex)
			{
				// Suppress (skip) "Warning" step if the user is old enough.
				if (currentIndex === 2 && Number($("#age").val()) >= 18)
				{
					$(this).steps("next");
				}

				// Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
				if (currentIndex === 2 && priorIndex === 3)
				{
					$(this).steps("previous");
				}
			},
			onFinishing: function (event, currentIndex)
			{
				var form = $(this);

				// Disable validation on fields that are disabled.
				// At this point it's recommended to do an overall check (mean ignoring only disabled fields)
				form.validate().settings.ignore = ":disabled";

				// Start validation; Prevent form submission if false
				return form.valid();
			},
			onFinished: function (event, currentIndex)
			{
				var form = $(this);

				// Submit form input
				form.submit();
			}
		}).validate({
			errorPlacement: function (error, element)
			{
				element.before(error);
			},
			rules: {
				confirm: {
					equalTo: "#password"
				}
			}
		});

	});
</script>

<script>
	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>

<script type="text/javascript">
	function mostrarOtro() {
		valor = $('input:radio[name=PEEstructura]:checked').val();
		if (valor == 5) {
			$('#contentOtros').show();
		} else {
			$('#contentOtros').hide();
		}
	}
</script>

<script>
	jQuery(document).ready(function(){
		// Listen for the input event.
		jQuery(".numeros").on('input', function (evt) {
			// Allow only numbers.
			jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
		});
	});
</script>

<style type="text/css">
.wizard .content .body {
    position: relative;
}
.sombra{
	z-index: 256;
	background-color: #eee6;
	position: absolute;
	width: 100%;
	height: 100%;
	padding: 8em;
	margin-left: -15px;
}
.wizard > .content > .body label.error {
    margin-left: 75px !important;
}
</style>

<!-- Steps -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/staps/jquery.steps.min.js'); ?>"></script>
<!-- Jquery Validate -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/validate/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/messages_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>

   <!-- iCheck -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/date_picker_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/clockpicker/clockpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />


