<link href="<?php echo base_url('assets/inspinia/css/plugins/steps/jquery.steps.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/inspinia/css/plugins/clockpicker/clockpicker.css'); ?>" rel="stylesheet" />



	
<div class="row">
	<div class="col-lg-12">
		<div class="ibox">
			<div class="ibox-content">
				<h2>
					Bachillerato General.
				</h2>
				<p>
				</p>
				<form id="form" action="#" class="wizard-big">
					<h1> Características del Plan de Estudios</h1>
					<fieldset>
					<!--<legend >Datos de Incidencia:</legend> -->
						<h2>1. Señale el servicio educativo al que corresponde la matrícula.</h2>
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"> <label>Bachillerato General sin Formación para el Trabajo </label><input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control"  value="1" /> 
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-5">
									<div class="i-checks"><label>Bachillerato General con Formación para el Trabajo </label><input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control"  value="2" />  
									</div>
								</div>
							</div>
							
						<h2>2. Fecha de actualización del plan de estudios.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Año</label>
										<input id="PEActualizacionAnio" name="PEActualizacionAnio" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mes</label>
										<input id="PEActualizacionMes" name="PEActualizacionMes" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Dia</label>
										<input id="PEActualizacionDia" name="PEActualizacionDia" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">Nota: Si el plan de estudios no ha sido actualizado, escriba la fecha de creación.</h3>
								</div>
							</div>
							
						<h2>3. Escriba la duración del bachillerato y señale la estructura del último plan de estudios que le corresponde.</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Duración</label>
									<input id="PEDuracion" name="PEDuracion" type="text" class="form-control ">											
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
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
															<div class="i-checks"><input type="radio" name="PEEstructura" id="PEEstructura" class="form-control"  value="1" /> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<div class="i-checks"><input type="radio" name="PEEstructura" id="PEEstructura" class="form-control"  value="2" /> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<div class="i-checks"><input type="radio" name="PEEstructura" id="PEEstructura" class="form-control"  value="3" /> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<div class="i-checks"><input type="radio" name="PEEstructura" id="PEEstructura" class="form-control"  value="4" /> <label></label>
															</div>
														</div>
													</div>					
												</td>
												<td>
													<div class="row">
														<div class="col-md-2">
															<div class="i-checks"><input type="radio" name="PEEstructura" id="PEEstructura" class="form-control"  value="5" /> <label></label>
															</div>
														</div>
													</div>					
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>*Especifique:</label>
									<input id="PEEspecifique" name="PEEspecifique" type="text" class="form-control ">											
								</div>
							</div>							
							<br><br><br><br>
							
						<h2>4. Escriba el total de créditos por cubrir.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Total de créditos</label>
										<input id="PECreditos" name="PECreditos" type="text" class="form-control ">	
									</div>
								</div> 
							</div> 
                    </fieldset>
									 
					<h1> Existencia y Aprobados</h1>
					<fieldset>
                        <h2>1. Escriba el número de alumnos existentes en el programa al término del último periodo escolar del ciclo 2020-2021. Desglóselos por grado de avance en años*, sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México. Además, escriba por grado el número de grupos existentes. </h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
												<th>Grupo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
												<td><input type="text" id="EGrupos1" name="EGrupos1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control" ></td>
												<td><input type="text" id="EGrupos2" name="EGrupos2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control" ></td>
												<td><input type="text" id="EGrupos3" name="EGrupos3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="EHombres4" name="EHombres4" class="form-control" ></td>
												<td><input type="text" id="EMujeres4" name="EMujeres4" class="form-control" ></td>
												<td><input type="text" id="ETotal4" name="ETotal4" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad4" name="EDiscapacidad4" class="form-control" ></td>
												<td><input type="text" id="EHablantes4" name="EHablantes4" class="form-control" ></td>
												<td><input type="text" id="EExtranjero4" name="EExtranjero4" class="form-control" ></td>
												<td><input type="text" id="EGrupos4" name="EGrupos4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control" ></td>
												<td><input type="text" id="EGruposTotal" name="EGruposTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
										
						<h2>2. Escriba el número de alumnos existentes en el programa que aprobaron todas las unidades de aprendizaje curricular (asignaturas) al término del último periodo escolar del ciclo 2020-2021. Desglóselos por grado de avance en años*, sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México. </h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombresAp1" name="EHombresAp1" class="form-control" ></td>
												<td><input type="text" id="EMujeresAp1" name="EMujeresAp1" class="form-control" ></td>
												<td><input type="text" id="ETotalAp1" name="ETotalAp1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadAp1" name="EDiscapacidadAp1" class="form-control" ></td>
												<td><input type="text" id="EHablantesAp1" name="EHablantesAp1" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroAp1" name="SALGas_inical" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="EHombresAp2" name="EHombresAp2" class="form-control" ></td>
												<td><input type="text" id="EMujeresAp2" name="EMujeresAp2" class="form-control" ></td>
												<td><input type="text" id="ETotalAp2" name="ETotalAp2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadAp2" name="EDiscapacidadAp2" class="form-control" ></td>
												<td><input type="text" id="EHablantesAp2" name="EHablantesAp2" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroAp2" name="EExtranjeroAp2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombresAp3" name="EHombresAp3" class="form-control" ></td>
												<td><input type="text" id="EMujeresAp3" name="EMujeresAp3" class="form-control" ></td>
												<td><input type="text" id="ETotalAp3" name="ETotalAp3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadAp3" name="EDiscapacidadAp3" class="form-control" ></td>
												<td><input type="text" id="EHablantesAp3" name="EHablantesAp3" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroAp3" name="EExtranjeroAp3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="EHombresAp4" name="EHombresAp4" class="form-control" ></td>
												<td><input type="text" id="EMujeresAp4" name="EMujeresAp4" class="form-control" ></td>
												<td><input type="text" id="ETotalAp4" name="ETotalAp4" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadAp4" name="EDiscapacidadAp4" class="form-control" ></td>
												<td><input type="text" id="EHablantesAp4" name="EHablantesAp4" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroAp4" name="EExtranjeroAp4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresApTotal" name="EHombresApTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresApTotal" name="EMujeresApTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalApTotal" name="ETotalApTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadApTotal" name="EDiscapacidadApTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesApTotal" name="EHablantesApTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroApTotal" name="EExtranjeroApTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">* Ver tablas de equivalencias del grado de avance en página 8/17.</h3>
							</div>
						</div>								
					</fieldset>	
					
					<h1>Alumnos Reprobados, Regularizados y Egresados</h1>
					<fieldset>			
						<h2>1. Escriba el número de alumnos que reprobaron 1 o más unidades de aprendizaje curricular (asignaturas) al término del último periodo* escolar del ciclo 2020-2021. Desglóselos por grado de avance en años**, sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="AHombresRep1" name="AHombresRep1" class="form-control" ></td>
												<td><input type="text" id="AMujeresRep1" name="AMujeresRep1" class="form-control" ></td>
												<td><input type="text" id="ATotalRep1" name="ATotalRep1" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRep1" name="ADiscapacidadRep1" class="form-control" ></td>
												<td><input type="text" id="AHablantesRep1" name="AHablantesRep1" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRep1" name="AExtranjerosRep1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="AHombresRep2" name="AHombresRep2" class="form-control" ></td>
												<td><input type="text" id="AMujeresRep2" name="AMujeresRep2" class="form-control" ></td>
												<td><input type="text" id="ATotalRep2" name="ATotalRep2" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRep2" name="ADiscapacidadRep2" class="form-control" ></td>
												<td><input type="text" id="AHablantesRep2" name="AHablantesRep2" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRep2" name="AExtranjerosRep2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="AHombresRep3" name="AHombresRep3" class="form-control" ></td>
												<td><input type="text" id="AMujeresRep3" name="AMujeresRep3" class="form-control" ></td>
												<td><input type="text" id="ATotalRep3" name="ATotalRep3" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRep3" name="ADiscapacidadRep3" class="form-control" ></td>
												<td><input type="text" id="AHablantesRep3" name="AHablantesRep3" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRep3" name="AExtranjerosRep3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="AHombresRep4" name="AHombresRep4" class="form-control" ></td>
												<td><input type="text" id="AMujeresRep4" name="AMujeresRep4" class="form-control" ></td>
												<td><input type="text" id="ATotalRep4" name="ATotalRep4" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRep4" name="ADiscapacidadRep4" class="form-control" ></td>
												<td><input type="text" id="AHablantesRep4" name="AHablantesRep4" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRep4" name="AExtranjerosRep4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="AHombresRepT" name="AHombresRepT" class="form-control" ></td>
												<td><input type="text" id="AMujeresRepT" name="AMujeresRepT" class="form-control" ></td>
												<td><input type="text" id="ATotalRep" name="ATotalRep" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRepT" name="ADiscapacidadRepT" class="form-control" ></td>
												<td><input type="text" id="AHablantesRepT" name="AHablantesRepT" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRepT" name="AExtranjerosRepT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
										
						<h2>2. De los alumnos reportados en la pregunta 1, escriba el número de alumnos que se regularizaron (aprobaron mediante evaluaciones extraordinarias todas las unidades de aprendizaje curricular que adeudaban) con fecha de corte al 30 de septiembre de este año. Desglóselos por grado de avance en años**, sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="AHombresReg1" name="AHombresReg1" class="form-control" ></td>
												<td><input type="text" id="AMujeresReg1" name="AMujeresReg1" class="form-control" ></td>
												<td><input type="text" id="ATotalReg1" name="ATotalReg1" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadReg1" name="ADiscapacidadReg1" class="form-control" ></td>
												<td><input type="text" id="AHablantesReg1" name="AHablantesReg1" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosReg1" name="AExtranjerosReg1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="AHombresReg2" name="AHombresReg2" class="form-control" ></td>
												<td><input type="text" id="AMujeresReg2" name="AMujeresReg2" class="form-control" ></td>
												<td><input type="text" id="ATotalReg2" name="ATotalReg2" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadReg2" name="ADiscapacidadReg2" class="form-control" ></td>
												<td><input type="text" id="AHablantesReg2" name="AHablantesReg2" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosReg2" name="AExtranjerosReg2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="AHombresReg3" name="AHombresReg3" class="form-control" ></td>
												<td><input type="text" id="AMujeresReg3" name="AMujeresReg3" class="form-control" ></td>
												<td><input type="text" id="ATotalReg3" name="ATotalReg3" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadReg3" name="ADiscapacidadReg3" class="form-control" ></td>
												<td><input type="text" id="AHablantesReg3" name="AHablantesReg3" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosReg3" name="AExtranjerosReg3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="AHombresReg4" name="AHombresReg4" class="form-control" ></td>
												<td><input type="text" id="AMujeresReg4" name="AMujeresReg4" class="form-control" ></td>
												<td><input type="text" id="ATotalReg4" name="ATotalReg4" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadReg4" name="ADiscapacidadReg4" class="form-control" ></td>
												<td><input type="text" id="AHablantesReg4" name="AHablantesReg4" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosReg4" name="AExtranjerosReg4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="AHombresRegT" name="AHombresRegT" class="form-control" ></td>
												<td><input type="text" id="AMujeresRegT" name="AMujeresRegT" class="form-control" ></td>
												<td><input type="text" id="ATotalReg" name="ATotalReg" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadRegT" name="ADiscapacidadRegT" class="form-control" ></td>
												<td><input type="text" id="AHablantesRegT" name="AHablantesRegT" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosRegT" name="AExtranjerosRegT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

						<h2>3. Escriba por edad, el número de alumnos egresados durante el ciclo escolar 2020-2021 (incluya los regularizados al 30 de septiembre de este año). Desglóselos por sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>17 Años.</label></td>
												<td><input type="text" id="AHombres17" name="AHombres17" class="form-control" ></td>
												<td><input type="text" id="AMujeres17" name="AMujeres17" class="form-control" ></td>
												<td><input type="text" id="ATotal17" name="ATotal17" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidad17" name="ADiscapacidad17" class="form-control" ></td>
												<td><input type="text" id="AHablantes17" name="AHablantes17" class="form-control" ></td>
												<td><input type="text" id="AExtranjeros17" name="AExtranjeros17" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>18 Años.</label></td>
												<td><input type="text" id="AHombres18" name="AHombres18" class="form-control" ></td>
												<td><input type="text" id="AMujeres18" name="AMujeres18" class="form-control" ></td>
												<td><input type="text" id="ATotal18" name="ATotal18" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidad18" name="ADiscapacidad18" class="form-control" ></td>
												<td><input type="text" id="AHablantes18" name="AHablantes18" class="form-control" ></td>
												<td><input type="text" id="AExtranjeros18" name="AExtranjeros18" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>19 Años.</label></td>
												<td><input type="text" id="AHombres19" name="AHombres19" class="form-control" ></td>
												<td><input type="text" id="AMujeres19" name="AMujeres19" class="form-control" ></td>
												<td><input type="text" id="ATotal19" name="ATotal19" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidad19" name="ADiscapacidad19" class="form-control" ></td>
												<td><input type="text" id="AHablantes19" name="AHablantes19" class="form-control" ></td>
												<td><input type="text" id="AExtranjeros19" name="AExtranjeros19" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>20 Años.</label></td>
												<td><input type="text" id="AHombres20" name="AHombres20" class="form-control" ></td>
												<td><input type="text" id="AMujeres20" name="AMujeres20" class="form-control" ></td>
												<td><input type="text" id="ATotal20" name="ATotal20" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidad20" name="ADiscapacidad20" class="form-control" ></td>
												<td><input type="text" id="AHablantes20" name="AHablantes20" class="form-control" ></td>
												<td><input type="text" id="AExtranjeros20" name="AExtranjeros20" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>21 Años.</label></td>
												<td><input type="text" id="AHombres21" name="AHombres21" class="form-control" ></td>
												<td><input type="text" id="AMujeres21" name="AMujeres21" class="form-control" ></td>
												<td><input type="text" id="ATotal21" name="ATotal21	" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidad21" name="ADiscapacidad21" class="form-control" ></td>
												<td><input type="text" id="AHablantes21" name="AHablantes21" class="form-control" ></td>
												<td><input type="text" id="AExtranjeros21" name="AExtranjeros21" class="form-control" ></td>
											</tr>											
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="AHombresEgt" name="AHombresEgt" class="form-control" ></td>
												<td><input type="text" id="AMujeresEgT" name="AMujeresEgT" class="form-control" ></td>
												<td><input type="text" id="ATotalEg" name="ATotalEg" class="form-control" ></td>
												<td><input type="text" id="ADiscapacidadEgT" name="ADiscapacidadEgT" class="form-control" ></td>
												<td><input type="text" id="AHablantesEgT" name="AHablantesEgT" class="form-control" ></td>
												<td><input type="text" id="AExtranjerosEgT" name="AExtranjerosEgT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">* Años, semestres, cuatrimestres, trimestres, etc. Según la estructura del plan de estudios.</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">** Ver tablas de equivalencias del grado de avance en página 8/17</h3>
								</div>
							</div>							
								
													
						<h2>3.1 De los alumnos reportados en el punto anterior (egresados), desglosa por formación para el trabajo.</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Tecnologías de la Inf. y la Com.</label></td>
												<td><input type="text" id="AHTecnologias" name="AHTecnologias" class="form-control" ></td>
												<td><input type="text" id="AMTecnologias" name="AMTecnologias" class="form-control" ></td>
												<td><input type="text" id="ATTecnologias" name="ATTecnologias" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Contabilidad.</label></td>
												<td><input type="text" id="AHContabilidad" name="AHContabilidad" class="form-control" ></td>
												<td><input type="text" id="AMContabilidad" name="AMContabilidad" class="form-control" ></td>
												<td><input type="text" id="ATContabilidad" name="ATContabilidad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Dibujo Arq. y de Construc.</label></td>
												<td><input type="text" id="AHDibujo" name="AHDibujo" class="form-control" ></td>
												<td><input type="text" id="AMDibujo" name="AMDibujo" class="form-control" ></td>
												<td><input type="text" id="ATDibujo" name="ATDibujo" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Laboratorista Químico.</label></td>
												<td><input type="text" id="AHLaboratorista" name="AHLaboratorista" class="form-control" ></td>
												<td><input type="text" id="AMLaboratorista" name="AMLaboratorista" class="form-control" ></td>
												<td><input type="text" id="ATLaboratorista" name="ATLaboratorista" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Interp y Trad. Id inglés.</label></td>
												<td><input type="text" id="AHIngles" name="AHIngles" class="form-control" ></td>
												<td><input type="text" id="AMIngles" name="AMIngles" class="form-control" ></td>
												<td><input type="text" id="ATIngles" name="ATIngles" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Asistente de oper. Logíst.</label></td>
												<td><input type="text" id="AHLogistica" name="AHLogistica" class="form-control" ></td>
												<td><input type="text" id="AMLogistica" name="AMLogistica" class="form-control" ></td>
												<td><input type="text" id="ATLogistica" name="ATLogistica" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Turismo.</label></td>
												<td><input type="text" id="AHTurismo" name="AHTurismo" class="form-control" ></td>
												<td><input type="text" id="AMTurismo" name="AMTurismo" class="form-control" ></td>
												<td><input type="text" id="ATTurismo" name="ATTurismo" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Tramitación Aduanal.</label></td>
												<td><input type="text" id="AHAduana" name="AHAduana" class="form-control" ></td>
												<td><input type="text" id="AMAduana" name="AMAduana" class="form-control" ></td>
												<td><input type="text" id="ATAduana" name="ATAduana" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Auxiliar de Enfermería.</label></td>
												<td><input type="text" id="AHEnfermeria" name="AHEnfermeria" class="form-control" ></td>
												<td><input type="text" id="AMEnfermeria" name="AMEnfermeria" class="form-control" ></td>
												<td><input type="text" id="ATEnfermeria" name="ATEnfermeria" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Totales</label></td>
												<td><input type="text" id="AHTotal" name="AHTotal" class="form-control" ></td>
												<td><input type="text" id="AMTotal" name="AMTotal" class="form-control" ></td>
												<td><input type="text" id="ATotal" name="ATotal" class="form-control" ></td>
											</tr>
											<tr>
										</tbody>
									</table>
								</div>
       						</div>

						<h2>3.2 De los alumnos reportados en el punto anterior (egresados), escriba por genero el número de los alumnos que ingresaron a Nivel Superior (publica o particular)</h2>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label>Hombre</label>
										<input id="AHIngresoNS" name="AHIngresoNS" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="AMIngresoNS" name="AMIngresoNS" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Total</label>
										<input id="ATIngresoNS" name="ATIngresoNS" type="text" class="form-control ">											
									</div>
								</div>
							</div>					
                    </fieldset>		 
									 
                    <h1>3.1 Alumnos Reprobados, Regularizados y Egresados</h1>
					<fieldset>	
						<h2>3.3 De los alumnos que ingresaron a nivel superior, desglosa por institución y género.</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>UNAM</label></td>
												<td><input type="text" id="AHUnam" name="AHUnam" class="form-control" ></td>
												<td><input type="text" id="AMUnam" name="AMUnam" class="form-control" ></td>
												<td><input type="text" id="ATUnam" name="ATUnam" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>UAM</label></td>
												<td><input type="text" id="AHUam" name="AHUam" class="form-control" ></td>
												<td><input type="text" id="AMUam" name="AMUam" class="form-control" ></td>
												<td><input type="text" id="ATUam" name="ATUam" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>UAEM</label></td>
												<td><input type="text" id="AHUaem" name="AHUaem" class="form-control" ></td>
												<td><input type="text" id="AMUaem" name="AMUaem" class="form-control" ></td>
												<td><input type="text" id="ATUaem" name="ATUaem" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>UMB</label></td>
												<td><input type="text" id="AHUmb" name="AHUmb" class="form-control" ></td>
												<td><input type="text" id="AMUmb" name="AMUmb" class="form-control" ></td>
												<td><input type="text" id="ATUmb" name="ATUmb" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Universidades Tecnológicas</label></td>
												<td><input type="text" id="AHUniTecno" name="AHUniTecno" class="form-control" ></td>
												<td><input type="text" id="AMUniTecno" name="AMUniTecno" class="form-control" ></td>
												<td><input type="text" id="ATUniTecno" name="ATUniTecno" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>IPN</label></td>
												<td><input type="text" id="AHIpn" name="AHIpn" class="form-control" ></td>
												<td><input type="text" id="AMIpn" name="AMIpn" class="form-control" ></td>
												<td><input type="text" id="ATIpn" name="ATIpn" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Institutos Tecnológicos Nacionales</label></td>
												<td><input type="text" id="AHItn" name="AHItn" class="form-control" ></td>
												<td><input type="text" id="AMItn" name="AMItn" class="form-control" ></td>
												<td><input type="text" id="ATItn" name="ATItn" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Escuela Normal Superior del Estado de México</label></td>
												<td><input type="text" id="AHNormal" name="AHNormal" class="form-control" ></td>
												<td><input type="text" id="AMNormal" name="AMNormal" class="form-control" ></td>
												<td><input type="text" id="ATNormal" name="ATNormal" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otras instituciones. (públicas)</label></td>
												<td><input type="text" id="AHOtrasPublicas" name="AHOtrasPublicas" class="form-control" ></td>
												<td><input type="text" id="AMOtrasPublicas" name="AMOtrasPublicas" class="form-control" ></td>
												<td><input type="text" id="ATOtrasPublicas" name="ATOtrasPublicas" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Otras instituciones. (privadas)</label></td>
												<td><input type="text" id="AHOtrasPrivadas" name="AHOtrasPrivadas" class="form-control" ></td>
												<td><input type="text" id="AMOtrasPrivadas" name="AMOtrasPrivadas" class="form-control" ></td>
												<td><input type="text" id="ATOtrasPrivadas" name="ATOtrasPrivadas" class="form-control" ></td>
											</tr>
												<td><label>Totales</label></td>
												<td><input type="text" id="AHNivelSuperiorT" name="AHNivelSuperiorT" class="form-control" ></td>
												<td><input type="text" id="AMNivelSuperiorT" name="AMNivelSuperiorT" class="form-control" ></td>
												<td><input type="text" id="ATotalNivelSuperior" name="ATotalNivelSuperior" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	

						<h2>3.4 De los alumnos que egresaron en este ciclo escolar, indique por género los que se insertaron en el ámbito laboral y no continuaron con sus estudios en nivel superior.</h2>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label>Hombre</label>
										<input id="AHLabora" name="AHLabora" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="AMLabora" name="AMLabora" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Total</label>
										<input id="ATotalLabora" name="ATotalLabora" type="text" class="form-control ">											
									</div>
								</div>
							</div>
					
						<h2>3.5 De los alumnos que egresaron en este ciclo escolar, y que se insertaron en el mercado laboral, indique por género y sector en donde trabajan.</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Sector Público.</label></td>
												<td><input type="text" id="AHServidorP" name="AHServidorP" class="form-control" ></td>
												<td><input type="text" id="AMServidorP" name="AMServidorP" class="form-control" ></td>
												<td><input type="text" id="ATServidorP" name="ATServidorP" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sector Privado.</label></td>
												<td><input type="text" id="AHSectorP" name="AHSectorP" class="form-control" ></td>
												<td><input type="text" id="AMSectorP" name="AMSectorP" class="form-control" ></td>
												<td><input type="text" id="ATSectorP" name="ATSectorP" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Negocio propio o Familiar.</label></td>
												<td><input type="text" id="AHNegocio" name="AHNegocio" class="form-control" ></td>
												<td><input type="text" id="AMNegocio" name="AMNegocio" class="form-control" ></td>
												<td><input type="text" id="ATNegocio" name="ATNegocio" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="AHTrabajanT" name="AHTrabajanT" class="form-control" ></td>
												<td><input type="text" id="AMTrabajanT" name="AMTrabajanT" class="form-control" ></td>
												<td><input type="text" id="ATTrabajan" name="ATTrabajan" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							
						<h2>3.6 De los alumnos que egresaron en este ciclo escolar, indique por género los que se dedican a otras actividades (que no sean descritas en el numeral 3.2 y 3.4).</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>No trabaja, ni estudia.</label></td>
												<td><input type="text" id="AHNini" name="AHNini" class="form-control" ></td>
												<td><input type="text" id="AMNini" name="AMNini" class="form-control" ></td>
												<td><input type="text" id="ATNini" name="ATNini" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otros Estudios (cursos, ect.).</label></td>
												<td><input type="text" id="AHOtrosE" name="AHOtrosE" class="form-control" ></td>
												<td><input type="text" id="AMOtrosE" name="AMOtrosE" class="form-control" ></td>
												<td><input type="text" id="ATOtrosE" name="ATOtrosE" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Totales.</label></td>
												<td><input type="text" id="AHOtrosT" name="AHOtrosT" class="form-control" ></td>
												<td><input type="text" id="AMOtrosT" name="AMOtrosT" class="form-control" ></td>
												<td><input type="text" id="ATOtras" name="ATOtras" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>                                       
                    </fieldset>
								
					<h1>4 Becas</h1>
					<fieldset>
						<h2>1. Escriba por sexo, el número de alumnos con beca y alumnos sin beca del ciclo escolar 2020-2021 e indique cuántos de ellos presentan discapacidad, cuántos son hablantes de lengua indígena y cuántos son nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Con Beca.</label></td>
												<td><input type="text" id="BHCon" name="BHCon" class="form-control" ></td>
												<td><input type="text" id="BMCon" name="BMCon" class="form-control" ></td>
												<td><input type="text" id="BTotalCon" name="BTotalCon" class="form-control" ></td>
												<td><input type="text" id="BDiscapacidadCon" name="BDiscapacidadCon" class="form-control" ></td>
												<td><input type="text" id="BHablantesCon" name="BHablantesCon" class="form-control" ></td>
												<td><input type="text" id="BExtranjerosCon" name="BExtranjerosCon" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sin Beca.</label></td>
												<td><input type="text" id="BHSin" name="BHSin" class="form-control" ></td>
												<td><input type="text" id="BMSin" name="BMSin" class="form-control" ></td>
												<td><input type="text" id="BTotalSin" name="BTotalSin" class="form-control" ></td>
												<td><input type="text" id="BDiscapacidadSin" name="BDiscapacidadSin" class="form-control" ></td>
												<td><input type="text" id="BHablantesSin" name="BHablantesSin" class="form-control" ></td>
												<td><input type="text" id="BExtranjerosSin" name="BExtranjerosSin" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="BHTotal" name="BHTotal" class="form-control" ></td>
												<td><input type="text" id="BMTotal" name="BMTotal" class="form-control" ></td>
												<td><input type="text" id="BBTotal" name="BBTotal" class="form-control" ></td>
												<td><input type="text" id="BDiscapacidadTotal" name="BDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="BHablantesTotal" name="BHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="BExtranjerosTotal" name="BExtranjerosTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">Nota: Sólo becas monetarias.</h3>
							</div>
						</div>								
						<h2>2. Escriba por sexo, el número de alumnos con beca reportados en la pregunta anterior, y desglóselos según el origen de la beca.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Becas federales</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Beca Benito Juárez</label></td>
												<td><input type="text" id="BHJuarez" name="BHJuarez" class="form-control" ></td>
												<td><input type="text" id="BMJuarez" name="BMJuarez	" class="form-control" ></td>
												<td><input type="text" id="BTJuarez" name="BTJuarez" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Contra el abandono escolar</label></td>
												<td><input type="text" id="BHAbandono" name="BHAbandono" class="form-control" ></td>
												<td><input type="text" id="BMAbandono" name="BMAbandono" class="form-control" ></td>
												<td><input type="text" id="BTAbandono" name="BTAbandono" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>PROBEMS (inicio, permanencia y excelencia)</label></td>
												<td><input type="text" id="BHPROBEMS" name="BHPROBEMS" class="form-control" ></td>
												<td><input type="text" id="BMPROBEMS" name="BMPROBEMS" class="form-control" ></td>
												<td><input type="text" id="BTPROBEMS" name="BTPROBEMS" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Reinserción</label></td>
												<td><input type="text" id="BHReinsercion" name="BHReinsercion" class="form-control" ></td>
												<td><input type="text" id="BMReinsercion" name="BMReinsercion" class="form-control" ></td>
												<td><input type="text" id="BTReinsercion" name="BTReinsercion" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Beca Emprendedores</label></td>
												<td><input type="text" id="BHEmprendedor" name="BHEmprendedor" class="form-control" ></td>
												<td><input type="text" id="BMEmprendedor" name="BMEmprendedor" class="form-control" ></td>
												<td><input type="text" id="BTEmprendedor" name="BTEmprendedor" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Salario modalidad: prácticas profesionales (Servicio social)</label></td>
												<td><input type="text" id="BHSalario" name="BHSalario" class="form-control" ></td>
												<td><input type="text" id="BMSalario" name="BMSalario" class="form-control" ></td>
												<td><input type="text" id="BTSalario" name="BTSalario" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Para estudiantes con discapacidad</label></td>
												<td><input type="text" id="BHDiscapacidad" name="BHDiscapacidad" class="form-control" ></td>
												<td><input type="text" id="BMDiscapacidad" name="BMDiscapacidad" class="form-control" ></td>
												<td><input type="text" id="BTDiscapacidad" name="BTDiscapacidad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Ingreso para hijos de militares</label></td>
												<td><input type="text" id="BHMilitares" name="BHMilitares" class="form-control" ></td>
												<td><input type="text" id="BMMilitares" name="BMMilitares" class="form-control" ></td>
												<td><input type="text" id="BTMilitares" name="BTMilitares" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca Jóvenes en acción</label></td>
												<td><input type="text" id="BHAccion" name="BHAccion" class="form-control" ></td>
												<td><input type="text" id="BMAccion" name="BMAccion" class="form-control" ></td>
												<td><input type="text" id="BTAccion" name="BTAccion" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Otra beca federal*</label></td>
												<td><input type="text" id="BHOtraFederal" name="BHOtraFederal" class="form-control" ></td>
												<td><input type="text" id="BMOtraFederal" name="BMOtraFederal" class="form-control" ></td>
												<td><input type="text" id="BTOtroFederal" name="BTOtroFederal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>*Especifique:</label>
										<input id="BOtraFederal" name="BOtraFederal" type="text" class="form-control ">											
									</div>
								</div>	
							<div class="row">
								<div class="col-lg-12">
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
											<td><label>Total de Becas Federales</label></td>
												<td><input type="text" id="BHTotalFederal" name="BHTotalFederal" class="form-control" ></td>
												<td><input type="text" id="BMTotalFederal" name="BMTotalFederal" class="form-control" ></td>
												<td><input type="text" id="BTotalFederal" name="BTotalFederal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>								
						<h2></h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Beca estatal (Prepa sí, etc.)</label></td>
												<td><input type="text" id="BHEstatal" name="BHEstatal" class="form-control" ></td>
												<td><input type="text" id="BMEstatal" name="BMEstatal" class="form-control" ></td>
												<td><input type="text" id="BTEstatal" name="BTEstatal" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca de fundaciones y asociaciones civiles (Bécalos, Telmex, etc.)</label></td>
												<td><input type="text" id="BHFundaciones" name="BHFundaciones" class="form-control" ></td>
												<td><input type="text" id="BMFundaciones" name="BMFundaciones" class="form-control" ></td>
												<td><input type="text" id="BTFundaciones" name="BTFundaciones" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca de la propia institución</label></td>
												<td><input type="text" id="BHPropia" name="BHPropia" class="form-control" ></td>
												<td><input type="text" id="BMPropia" name="BMPropia" class="form-control" ></td>
												<td><input type="text" id="BTPropia" name="BTPropia" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca de intercambio</label></td>
												<td><input type="text" id="BHIntercambio" name="BHIntercambio" class="form-control" ></td>
												<td><input type="text" id="BMIntercambio" name="BMIntercambio" class="form-control" ></td>
												<td><input type="text" id="BTIntercambio" name="BTIntercambio" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Beca internacional</label></td>
												<td><input type="text" id="BHInternacional" name="BHInternacional" class="form-control" ></td>
												<td><input type="text" id="BMInternacional" name="BMInternacional" class="form-control" ></td>
												<td><input type="text" id="BTInternacional" name="BTInternacional" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca particular</label></td>
												<td><input type="text" id="BHParticular" name="BHParticular" class="form-control" ></td>
												<td><input type="text" id="BMParticular" name="BMParticular" class="form-control" ></td>
												<td><input type="text" id="BTParticular" name="BTParticular" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Beca municipal</label></td>
												<td><input type="text" id="BHMunicipal" name="BHMunicipal" class="form-control" ></td>
												<td><input type="text" id="BMMunicipal" name="BMMunicipal" class="form-control" ></td>
												<td><input type="text" id="BTMunicipal" name="BTMunicipal" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otra beca**</label></td>
												<td><input type="text" id="BHOtraEstatal" name="BHOtraEstatal" class="form-control" ></td>
												<td><input type="text" id="BMOtraEstatal" name="BMOtraEstatal" class="form-control" ></td>
												<td><input type="text" id="BTOtraEstatal" name="BTOtraEstatal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div> 
								<div class="col-md-3">
									<div class="form-group">
										<label>**Especifique:</label>
										<input id="BOtraEstatal" name="BOtraEstatal" type="text" class="form-control ">											
									</div>
								</div>	
							<div class="row">
								<div class="col-lg-12">
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
												<td><label>Total</label></td>
												<td><input type="text" id="BBecasHombres" name="BBecasHombres" class="form-control" ></td>
												<td><input type="text" id="BBecasMujeres" name="BBecasMujeres" class="form-control" ></td>
												<td><input type="text" id="BBecasTotal" name="BBecasTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">Nota: Si un alumno cuenta con más de una beca, contabilice solamente la de mayor monto.</h3>
							</div>
						</div>							
					</fieldset>
								   
					<h1>5 Alumnos de Nuevo Ingreso</h1>
					<fieldset>
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">Nota: Considere exclusivamente los alumnos que se inscribieron por primera vez, al primer grado del ciclo escolar 2021-2022.</h3>
							</div>
						</div>

						<h2>1. Fecha de inicio de cursos del ciclo escolar 2021-2022.</h2>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label>Año</label>
										<input id="NIAnio" name="NIAnio" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Mes</label>
										<input id="NIMes" name="NIMes" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Día</label>
										<input id="NIDia" name="NIDia" type="text" class="form-control ">											
									</div>
								</div>
							</div>
								
						<h2>2. Escriba el número de lugares ofertados para ingresar por primera vez al ciclo 2021-2022.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Lugares Ofertados</label>
										<input id="NILugaresOfertados" name="NILugaresOfertados" type="text" class="form-control ">	
									</div>
								</div> 
							</div> 
							
						<h2>3. Escriba por sexo, el número de solicitudes recibidas para ingresar por primera vez al ciclo 2021-2022, e indique cuántas de ellas son de aspirantes con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="NILugaresOfertados" name="NILugaresOfertados" class="form-control" ></td>
												<td><input type="text" id="NIMSolicitudes" name="NIMSolicitudes" class="form-control" ></td>
												<td><input type="text" id="NITSolicitudes" name="NITSolicitudes" class="form-control" ></td>
												<td><input type="text" id="NIDSolicitudes" name="NIDSolicitudes" class="form-control" ></td>
												<td><input type="text" id="NIHaSolicitudes" name="NIHaSolicitudes" class="form-control" ></td>
												<td><input type="text" id="NIExtraSolicitudes" name="NIExtraSolicitudes" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

						<h2>4. Escriba por edad, el número de alumnos de nuevo ingreso a primer grado del ciclo 2021-2022. Desglóselos por sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
							<br>
							<div class="form-group row"><label class="col-sm-3 col-form-label">Seleccione Concurso</label>
                            	<div class="col-sm-3">
                            		<select class="form-control m-b" id="NIConcurso" name="NIConcurso">
                                		<option value="a">Selecciona una opción</option>
										<option value="b">COMIPEMS</option>
										<option value="c">103 MUNICIPIOS</option>
                                    </select>
								</div>
							</div>	
						   <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>14 años o menos.</label></td>
												<td><input type="text" id="NIH14" name="NIH14" class="form-control" ></td>
												<td><input type="text" id="NIM14" name="NIM14" class="form-control" ></td>
												<td><input type="text" id="NIT14" name="NIT14" class="form-control" ></td>
												<td><input type="text" id="NID14" name="NID14" class="form-control" ></td>
												<td><input type="text" id="NIHa14" name="NIHa14" class="form-control" ></td>
												<td><input type="text" id="NIExtra14" name="NIExtra14" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>15 años.</label></td>
												<td><input type="text" id="NIH15" name="NIH15" class="form-control" ></td>
												<td><input type="text" id="NIM15" name="NIM15" class="form-control" ></td>
												<td><input type="text" id="NIT15" name="NIT15" class="form-control" ></td>
												<td><input type="text" id="NID15" name="NID15" class="form-control" ></td>
												<td><input type="text" id="NIHa15" name="NIHa15" class="form-control" ></td>
												<td><input type="text" id="NIExtra15" name="NIExtra15" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>16 años.</label></td>
												<td><input type="text" id="NIH16" name="NIH16" class="form-control" ></td>
												<td><input type="text" id="NIM16" name="NIM16" class="form-control" ></td>
												<td><input type="text" id="NIT16" name="NIT16" class="form-control" ></td>
												<td><input type="text" id="NID16" name="NID16" class="form-control" ></td>
												<td><input type="text" id="NIHa16" name="NIHa16" class="form-control" ></td>
												<td><input type="text" id="NIExtra16" name="NIExtra16" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>17 años.</label></td>
												<td><input type="text" id="NIH17" name="NIH17" class="form-control" ></td>
												<td><input type="text" id="NIM17" name="NIM17" class="form-control" ></td>
												<td><input type="text" id="NIT17" name="NIT17" class="form-control" ></td>
												<td><input type="text" id="NID17" name="NID17" class="form-control" ></td>
												<td><input type="text" id="NIHa17" name="NIHa17" class="form-control" ></td>
												<td><input type="text" id="NIExtra17" name="NIExtra17" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>18 años.</label></td>
												<td><input type="text" id="NIH18" name="NIH18" class="form-control" ></td>
												<td><input type="text" id="NIM18" name="NIM18" class="form-control" ></td>
												<td><input type="text" id="NIT18" name="NIT18" class="form-control" ></td>
												<td><input type="text" id="NID18" name="NID18" class="form-control" ></td>
												<td><input type="text" id="NIHa18" name="NIHa18" class="form-control" ></td>
												<td><input type="text" id="NIExtra18" name="NIExtra18" class="form-control" ></td>
											</tr>
												<td><label>19 años.</label></td>
												<td><input type="text" id="NIH19" name="NIH19" class="form-control" ></td>
												<td><input type="text" id="NIM19" name="NIM19" class="form-control" ></td>
												<td><input type="text" id="NIT19" name="NIT19" class="form-control" ></td>
												<td><input type="text" id="NID19" name="NID19" class="form-control" ></td>
												<td><input type="text" id="NIHa19" name="NIHa19" class="form-control" ></td>
												<td><input type="text" id="NIExtra19" name="NIExtra19" class="form-control" ></td>
											</tr>
												<td><label>20 años.</label></td>
												<td><input type="text" id="NIH20" name="NIH20" class="form-control" ></td>
												<td><input type="text" id="NIM20" name="NIM20" class="form-control" ></td>
												<td><input type="text" id="NIT20" name="NIT20" class="form-control" ></td>
												<td><input type="text" id="NID20" name="NID20" class="form-control" ></td>
												<td><input type="text" id="NIHa20" name="NIHa20" class="form-control" ></td>
												<td><input type="text" id="NIExtra20" name="NIExtra20" class="form-control" ></td>
											</tr>
												<td><label>21 años.</label></td>
												<td><input type="text" id="NIH21" name="NIH21" class="form-control" ></td>
												<td><input type="text" id="NIM21" name="NIM21" class="form-control" ></td>
												<td><input type="text" id="NIT21" name="NIT21" class="form-control" ></td>
												<td><input type="text" id="NID21" name="NID21" class="form-control" ></td>
												<td><input type="text" id="NIHa21" name="NIHa21" class="form-control" ></td>
												<td><input type="text" id="NIExtra21" name="NIExtra21" class="form-control" ></td>
											</tr>
												<td><label>22 años.</label></td>
												<td><input type="text" id="NIH22" name="NIH22" class="form-control" ></td>
												<td><input type="text" id="NIM22" name="NIM22" class="form-control" ></td>
												<td><input type="text" id="NIT22" name="NIT22" class="form-control" ></td>
												<td><input type="text" id="NID22" name="NID22" class="form-control" ></td>
												<td><input type="text" id="NIHa22" name="NIHa22" class="form-control" ></td>
												<td><input type="text" id="NIExtra22" name="NIExtra22" class="form-control" ></td>
											</tr>
												<td><label>23 años.</label></td>
												<td><input type="text" id="NIH23" name="NIH23" class="form-control" ></td>
												<td><input type="text" id="NIM23" name="NIM23" class="form-control" ></td>
												<td><input type="text" id="NIT23" name="NIT23" class="form-control" ></td>
												<td><input type="text" id="NID23" name="NID23" class="form-control" ></td>
												<td><input type="text" id="NIHa23" name="NIHa23" class="form-control" ></td>
												<td><input type="text" id="NIExtra23" name="NIExtra23" class="form-control" ></td>
											</tr>
												<td><label>24 años.</label></td>
												<td><input type="text" id="NIH24" name="NIH24" class="form-control" ></td>
												<td><input type="text" id="NIM24" name="NIM24" class="form-control" ></td>
												<td><input type="text" id="NIT24" name="NIT24" class="form-control" ></td>
												<td><input type="text" id="NID24" name="NID24" class="form-control" ></td>
												<td><input type="text" id="NIHa24" name="NIHa24" class="form-control" ></td>
												<td><input type="text" id="NIExtra24" name="NIExtra24" class="form-control" ></td>
											</tr>
												<td><label>25 años o más.</label></td>
												<td><input type="text" id="NIH25" name="NIH25" class="form-control" ></td>
												<td><input type="text" id="NIM25" name="NIM25" class="form-control" ></td>
												<td><input type="text" id="NIT25" name="NIT25" class="form-control" ></td>
												<td><input type="text" id="NID25" name="NID25" class="form-control" ></td>
												<td><input type="text" id="NIHa25" name="NIHa25" class="form-control" ></td>
												<td><input type="text" id="NIExtra25" name="NIExtra25" class="form-control" ></td>
											</tr>
												<td><label>Total</label></td>
												<td><input type="text" id="NIHIngresoT" name="NIHIngresoT" class="form-control" ></td>
												<td><input type="text" id="NIMIngresoT" name="NIMIngresoT" class="form-control" ></td>
												<td><input type="text" id="NITIngreso" name="NITIngreso" class="form-control" ></td>
												<td><input type="text" id="NIDIngreso" name="NIDIngreso" class="form-control" ></td>
												<td><input type="text" id="NIHaIngreso" name="NIHaIngreso" class="form-control" ></td>
												<td><input type="text" id="NIExtraIngreso" name="NIExtraIngreso" class="form-control" ></td>
											</tr>

										</tbody>
									</table>
								</div>
       						</div>

						<h2>4.1 De los alumnos reportados en el punto anterior (4), desglóselos por registrados (el que seleccionó al plantel o EMSAD como primera opción), CDO ( con derecho a otra opción), asignados, aplazados y 2a, 3a y 4a ronda, si aplica:</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Registrados.</label></td>
												<td><input type="text" id="NIHRegistrados" name="NIHRegistrados" class="form-control" ></td>
												<td><input type="text" id="NIMRegistrados" name="NIMRegistrados" class="form-control" ></td>
												<td><input type="text" id="NITRegistrados" name="NITRegistrados" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>CDO´s.</label></td>
												<td><input type="text" id="NIHCdo" name="NIHCdo" class="form-control" ></td>
												<td><input type="text" id="NIMCdo" name="NIMCdo" class="form-control" ></td>
												<td><input type="text" id="NITCdo" name="NITCdo" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Asignados.</label></td>
												<td><input type="text" id="NIHAsignados" name="NIHAsignados" class="form-control" ></td>
												<td><input type="text" id="NIMAsignados" name="NIMAsignados" class="form-control" ></td>
												<td><input type="text" id="NITAsignados" name="NITAsignados" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Aplazado UAEM.</label></td>
												<td><input type="text" id="NIHUaem" name="NIHUaem" class="form-control" ></td>
												<td><input type="text" id="NIMUaem" name="NIMUaem" class="form-control" ></td>
												<td><input type="text" id="NITUaem" name="NITUaem" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2a, 3a y 4a ronda.</label></td>
												<td><input type="text" id="NIHRonda" name="NIHRonda" class="form-control" ></td>
												<td><input type="text" id="NIMRonda" name="NIMRonda" class="form-control" ></td>
												<td><input type="text" id="NITRonda" name="NITRonda" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="NIHTotalReg" name="NIHTotalReg" class="form-control" ></td>
												<td><input type="text" id="NIMTotalReg" name="NIMTotalReg" class="form-control" ></td>
												<td><input type="text" id="NITotalReg" name="NITotalReg" class="form-control" ></td>
											</tr>
											
										</tbody>
									</table>
								</div>
       						</div>							
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">Nota: Los registrados se refiere a alumnos elijen al Plantel como primera opción</h3>
								</div>
							</div>										
                    </fieldset> 
					
					<h1>5.1. Alumnos De Nuevo Ingreso (Continuación)</h1>
					<fieldset>                              
						<h2>5. Escriba el número de alumnos de nuevo ingreso a primer grado del ciclo escolar 2021-2022, según el lugar donde cursaron el 3er. grado de secundaria o equivalente.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>En la entidad.</label></td>
												<td><input type="text" id="NIEntidad" name="NIEntidad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>En otra entidad federativa.</label></td>
												<td><input type="text" id="NIOtraEntidad" name="NIOtraEntidad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Estados Unidos.</label></td>
												<td><input type="text" id="NIEu" name="NIEu" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otro país.</label></td>
												<td><input type="text" id="NIOtroPais" name="NIOtroPais" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Totale.</label></td>
												<td><input type="text" id="NITotalLugar" name="NITotalLugar" class="form-control" ></td>
											</tr>
											
										</tbody>
									</table>
								</div>
       						</div>

						<h2>6. Escriba el número de alumnos de nuevo ingreso a primer grado del ciclo escolar 2021-2022, según el tipo de secundaria donde realizaron sus estudios.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>General.</label></td>
												<td><input type="text" id="NIGeneral" name="NIGeneral" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Para trabajadores.</label></td>
												<td><input type="text" id="NITrabajadores" name="NITrabajadores" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Telesecundaria.</label></td>
												<td><input type="text" id="NITelesecundaria" name="NITelesecundaria" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Técnica.</label></td>
												<td><input type="text" id="NITecnica" name="NITecnica" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Comunitaria.</label></td>
												<td><input type="text" id="NIComunitaria" name="NIComunitaria" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Educación para adultos.</label></td>
												<td><input type="text" id="NIEAdultos" name="NIEAdultos" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Totale.</label></td>
												<td><input type="text" id="NITotalTipo" name="NITotalTipo" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	
							
						<h2>7. Escriba el número de alumnos de nuevo ingreso a primer grado del ciclo escolar 2021-2022 y desglóselos según su lugar de nacimiento.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>En la entidad.</label></td>
												<td><input type="text" id="NINacioEntidad" name="NINacioEntidad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>En otra entidad federativa.</label></td>
												<td><input type="text" id="NINacioOtra" name="NINacioOtra" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Estados Unidos.</label></td>
												<td><input type="text" id="NINacioEu" name="NINacioEu" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Otro país.</label></td>
												<td><input type="text" id="NINacioOPais" name="NINacioOPais" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Totale.</label></td>
												<td><input type="text" id="NITotalNacio" name="NITotalNacio" class="form-control" ></td>
											</tr>											
										</tbody>
									</table>
								</div>
       						</div>												
					</fieldset>
								
					<h1>6. Matrícula Total (Fecha de corte al 30 de septiembre)</h1>
					<fieldset>							
						<h2>1. Escriba por grado de avance* en años el número de alumnos inscritos en el programa al inicio de cursos 2021-2022, desglóselos por sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México. Además, escriba por grado el número de grupos existentes.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
												<th>Grupo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="MHIns1o" name="MHIns1o" class="form-control" ></td>
												<td><input type="text" id="MMIns1o" name="MMIns1o" class="form-control" ></td>
												<td><input type="text" id="MTIns1o" name="MTIns1o" class="form-control" ></td>
												<td><input type="text" id="MDIns1o" name="MDIns1o" class="form-control" ></td>
												<td><input type="text" id="MHaIns1o" name="MHaIns1o" class="form-control" ></td>
												<td><input type="text" id="MEIns1o" name="MEIns1o" class="form-control" ></td>
												<td><input type="text" id="MInsGrupos1o" name="MInsGrupos1o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="MHIns2o" name="MHIns2o" class="form-control" ></td>
												<td><input type="text" id="MMIns2o" name="MMIns2o" class="form-control" ></td>
												<td><input type="text" id="MTIns2o" name="MTIns2o" class="form-control" ></td>
												<td><input type="text" id="MDIns2o" name="MDIns2o" class="form-control" ></td>
												<td><input type="text" id="MHaIns2o" name="MHaIns2o" class="form-control" ></td>
												<td><input type="text" id="MEIns2o" name="MEIns2o" class="form-control" ></td>
												<td><input type="text" id="MInsGrupos2o" name="MInsGrupos2o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="MHIns3o" name="MHIns3o" class="form-control" ></td>
												<td><input type="text" id="MMIns3o" name="SALGas_inical" class="form-control" ></td>
												<td><input type="text" id="MTIns3o" name="MTIns3o" class="form-control" ></td>
												<td><input type="text" id="MDIns3o" name="MDIns3o" class="form-control" ></td>
												<td><input type="text" id="MHaIns3o" name="MHaIns3o" class="form-control" ></td>
												<td><input type="text" id="MEIns3o" name="MEIns3o" class="form-control" ></td>
												<td><input type="text" id="MInsGrupos3o" name="MInsGrupos3o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="MHIns4o" name="MHIns4o" class="form-control" ></td>
												<td><input type="text" id="MMIns4o" name="MMIns4o" class="form-control" ></td>
												<td><input type="text" id="MTIns4o" name="MTIns4o" class="form-control" ></td>
												<td><input type="text" id="MDIns4o" name="MDIns4o" class="form-control" ></td>
												<td><input type="text" id="MHaIns4o" name="MHaIns4o" class="form-control" ></td>
												<td><input type="text" id="MEIns4o" name="MEIns4o" class="form-control" ></td>
												<td><input type="text" id="MInsGrupos4o" name="MInsGrupos4o" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="MHInsTotal" name="MHInsTotal" class="form-control" ></td>
												<td><input type="text" id="MMInsTotal" name="MMInsTotal" class="form-control" ></td>
												<td><input type="text" id="MTInsTotal" name="MTInsTotal" class="form-control" ></td>
												<td><input type="text" id="MDInsTotal" name="MDInsTotal" class="form-control" ></td>
												<td><input type="text" id="MHaInsTotal" name="MHaInsTotal" class="form-control" ></td>
												<td><input type="text" id="MEInsTotal" name="MEInsTotal" class="form-control" ></td>
												<td><input type="text" id="MInsGruposTotal" name="MInsGruposTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">* Ver tablas de equivalencias del grado de avance</h3>
								</div>
							</div>
							<h3>Tablas de Equivalencias del Grado de Avance</h3>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="6">Duración de 2 Años</th>
											</tr>
											<tr>
												<th 	>Periodos</th>
											</tr>
											<tr>
												<th>Grado</th>
												<th>Años</th>
												<th>Semestres</th>
												<th>Cuatrimestres</th>
												<th>Trimestres</th>
												<th>Pocentaje</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>1</td>
												<td>1o. y 2o.</td>
												<td>1, 2, 3</td>
												<td>1, 2, 3, 4</td>
												<td>hasta 50%</td>
											</tr>					
											<tr>
												<td>2</td>
												<td>2</td>
												<td>3o. y 4o.</td>
												<td>4, 5, 6</td>
												<td>5, 6, 7, 8</td>
												<td>51% a 100%</td>
											</tr>																
										</tbody>
									</table>
								</div>
							</div>
							
							<br>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="6">Duración de 3 Años</th>
											</tr>
											<tr>
												<th colspan="6">Periodos</th>
											</tr>
											<tr>
												<th>Grado</th>
												<th>Años</th>
												<th>Semestres</th>
												<th>Cuatrimestres</th>
												<th>Trimestres</th>
												<th>Pocentaje</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>1</td>
												<td>1o. y 2o.</td>
												<td>1, 2, 3</td>
												<td>1, 2, 3, 4</td>
												<td>hasta 30%</td>
											</tr>					
											<tr>
												<td>2</td>
												<td>2</td>
												<td>3o. y 4o.</td>
												<td>4, 5, 6</td>
												<td>5, 6, 7, 8</td>
												<td>31% a 60%</td>
											</tr>
											<tr>
												<td>3</td>
												<td>3</td>
												<td>5o. y 6o.</td>
												<td>7, 8 ,9</td>
												<td>9, 10, 11, 12</td>
												<td>61% a 100%</td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>
							
							<br>
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="6">Duración de 4 Años</th>
											</tr>
											<tr>
												<th colspan="6">Periodos</th>
											</tr>
											<tr>
												<th>Grado</th>
												<th>Años</th>
												<th>Semestres</th>
												<th>Cuatrimestres</th>
												<th>Trimestres</th>
												<th>Pocentaje</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>1</td>
												<td>1o. y 2o.</td>
												<td>1, 2, 3</td>
												<td>1, 2, 3, 4</td>
												<td>hasta 25%</td>
											</tr>					
											<tr>
												<td>2</td>
												<td>2</td>
												<td>3o. y 4o.</td>
												<td>4, 5, 6</td>
												<td>5, 6, 7, 8</td>
												<td>26% a 50%</td>
											</tr>
											<tr>
												<td>3</td>
												<td>3</td>
												<td>5o. y 6o.</td>
												<td>7, 8 ,9</td>
												<td>9, 10, 11, 12</td>
												<td>51% a 75%</td>
											</tr>
											<tr>
												<td>4</td>
												<td>4</td>
												<td>7o. y 8o.</td>
												<td>10, 11, 12</td>
												<td>13, 14 , 15 , 16</td>
												<td>76% a 100%</td>
											</tr>											
										</tbody>
									</table>
								</div>
							</div>									
					</fieldset>
					
					<h1>6.1.Matrícula Total (Continuación)</h1>
					<fieldset>
						<h2>2. Para el cálculo de la edad de los alumnos, el corte es al 1 de septiembre del 2021.</h2>
						<h2>a) Escriba por grado (ver tablas de equivalencias) el total de alumnos de nuevo ingreso, al inicio de cursos 2021-2022 y desglóselos por sexo y edad.</h2>						
						<h2>b) Escriba por grado el total de alumnos repetidores, al inicio de cursos 2021-2022 y desglóselos por sexo y edad.</h2>					
						<h2>c) Verifique que la suma de los subtotales corresponda al TOTAL.</h2>
						<h2>d) La matrícula de nuevo ingreso a primer grado, debe coincidir con lo reportado en la pregunta 4 de la sección V.</h2>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>14 Años y Menos</th>
											<th>15 Años</th>
											<th>16 Años</th>
											<th>17 Años</th>
											<th>18 Años</th>
											<th>19 Años</th>
											<th>20 Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>1o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MHN114" name="MHN114" class="form-control" ></td>
											<td><input type="text" id="MHN115" name="MHN115" class="form-control" ></td>
											<td><input type="text" id="MHN116" name="MHN116" class="form-control" ></td>
											<td><input type="text" id="MHN117" name="MHN117" class="form-control" ></td>
											<td><input type="text" id="MHN118" name="MHN118" class="form-control" ></td>
											<td><input type="text" id="MNH119" name="MNH119" class="form-control" ></td>
											<td><input type="text" id="MNH120" name="MNH120" class="form-control" ></td>
										</tr>
										<tr>
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
										</tr>
										<tr>
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMN114" name="MMN114" class="form-control" ></td>
											<td><input type="text" id="MMN115" name="MMN115" class="form-control" ></td>
											<td><input type="text" id="MMN116" name="MMN116" class="form-control" ></td>
											<td><input type="text" id="MMN117" name="MMN117" class="form-control" ></td>
											<td><input type="text" id="MMN118" name="MMN118" class="form-control" ></td>
											<td><input type="text" id="MMN119" name="MMN119" class="form-control" ></td>
											<td><input type="text" id="MMN120" name="MMN120	" class="form-control" ></td>
										</tr>
										<tr>
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
										</tr>
										<tr>
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td><input type="text" id="MT114" name="MT114" class="form-control" ></td>
											<td><input type="text" id="MT115" name="MT115" class="form-control" ></td>
											<td><input type="text" id="MT116" name="MT116" class="form-control" ></td>
											<td><input type="text" id="MT117" name="MT117" class="form-control" ></td>
											<td><input type="text" id="MT118" name="MT118" class="form-control" ></td>
											<td><input type="text" id="MT119" name="MT119" class="form-control" ></td>
											<td><input type="text" id="MT120" name="MT120" class="form-control" ></td>
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>21 Años</th>
											<th>22 Años</th>
											<th>23 Años</th>
											<th>24 Años</th>
											<th>25 Años y Mas</th>
											<th>Total</th>											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>1o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MNH121" name="MNH121" class="form-control" ></td>
											<td><input type="text" id="MNH122" name="MNH122" class="form-control" ></td>
											<td><input type="text" id="MNH123" name="MNH123" class="form-control" ></td>
											<td><input type="text" id="MNH124" name="MNH124" class="form-control" ></td>
											<td><input type="text" id="MNH125" name="MNH125" class="form-control" ></td>
											<td><input type="text" id="MHN1T" name="MHN1T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>						
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMN121" name="MMN121" class="form-control" ></td>
											<td><input type="text" id="MMN122" name="MMN122" class="form-control" ></td>
											<td><input type="text" id="MMN123" name="MMN123" class="form-control" ></td>
											<td><input type="text" id="MMN124" name="MMN124" class="form-control" ></td>
											<td><input type="text" id="MMN125" name="MMN125	" class="form-control" ></td>
											<td><input type="text" id="MMN1T" name="MMN1T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>											
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td><input type="text" id="MT121" name="MT121" class="form-control" ></td>
											<td><input type="text" id="MT122" name="MT122" class="form-control" ></td>
											<td><input type="text" id="MT123" name="MT123" class="form-control" ></td>											
											<td><input type="text" id="MT124" name="MT124" class="form-control" ></td>
											<td><input type="text" id="MT125" name="MT125" class="form-control" ></td>
											<td><input type="text" id="M1Total" name="M1Total" class="form-control" ></td>										
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
						<br>
						<br>
						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>14 Años y Menos</th>
											<th>15 Años</th>
											<th>16 Años</th>
											<th>17 Años</th>
											<th>18 Años</th>
											<th>19 Años</th>
											<th>20 Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>2o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td><input type="text" id="MHN215" name="MHN215" class="form-control" ></td>
											<td><input type="text" id="MHN216" name="MHN216" class="form-control" ></td>
											<td><input type="text" id="MHN217" name="MHN217" class="form-control" ></td>
											<td><input type="text" id="MHN218" name="MHN218" class="form-control" ></td>
											<td><input type="text" id="MHN219" name="MHN219" class="form-control" ></td>
											<td><input type="text" id="MHN220" name="MHN220" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="MHR215" name="MHR215" class="form-control" ></td>
											<td><input type="text" id="MHR216" name="MHR216" class="form-control" ></td>
											<td><input type="text" id="MHR217" name="MHR217" class="form-control" ></td>
											<td><input type="text" id="MHR218" name="MHR218" class="form-control" ></td>
											<td><input type="text" id="MHR219" name="MHR219" class="form-control" ></td>
											<td><input type="text" id="MHR220" name="MHR220" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td><input type="text" id="MMN215" name="MMN215" class="form-control" ></td>
											<td><input type="text" id="MMN216" name="MMN216" class="form-control" ></td>
											<td><input type="text" id="MMN217" name="MMN217" class="form-control" ></td>
											<td><input type="text" id="MMN218" name="MMN218" class="form-control" ></td>
											<td><input type="text" id="MMN219" name="MMN219" class="form-control" ></td>
											<td><input type="text" id="MMN220" name="MMN220" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="MMR215" name="MMR215" class="form-control" ></td>
											<td><input type="text" id="MMR216" name="MMR216" class="form-control" ></td>
											<td><input type="text" id="MMR217" name="MMR217" class="form-control" ></td>
											<td><input type="text" id="MMR218" name="MMR218" class="form-control" ></td>
											<td><input type="text" id="MMR219" name="MMR219" class="form-control" ></td>
											<td><input type="text" id="MMR220" name="MMR220" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td></td>
											<td><input type="text" id="MT215" name="MT215" class="form-control" ></td>
											<td><input type="text" id="MT216" name="MT216" class="form-control" ></td>
											<td><input type="text" id="MT217" name="MT217" class="form-control" ></td>
											<td><input type="text" id="MT218" name="MT218" class="form-control" ></td>
											<td><input type="text" id="MT219" name="MT219" class="form-control" ></td>
											<td><input type="text" id="MT220" name="MT220" class="form-control" ></td>
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>21 Años</th>
											<th>22 Años</th>
											<th>23 Años</th>
											<th>24 Años</th>
											<th>25 Años y Mas</th>
											<th>Total</th>											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>2o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MHN221" name="MHN221" class="form-control" ></td>
											<td><input type="text" id="MHN222" name="MHN222" class="form-control" ></td>
											<td><input type="text" id="MHN223" name="MHN223" class="form-control" ></td>
											<td><input type="text" id="MHN224" name="MHN224" class="form-control" ></td>
											<td><input type="text" id="MHN225" name="MHN225" class="form-control" ></td>
											<td><input type="text" id="MHN2T" name="MHN2T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MHR221" name="MHR221" class="form-control" ></td>
											<td><input type="text" id="MHR222" name="MHR222" class="form-control" ></td>
											<td><input type="text" id="MHR223" name="MHR223" class="form-control" ></td>						
											<td><input type="text" id="MHR224" name="MHR224" class="form-control" ></td>
											<td><input type="text" id="MHR225" name="MHR225" class="form-control" ></td>
											<td><input type="text" id="MHR2T" name="MHR2T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMN221" name="MMN221" class="form-control" ></td>
											<td><input type="text" id="MMN222" name="MMN222" class="form-control" ></td>
											<td><input type="text" id="MMN223" name="MMN223" class="form-control" ></td>
											<td><input type="text" id="MMN224" name="MMN224" class="form-control" ></td>
											<td><input type="text" id="MMN225" name="MMN225" class="form-control" ></td>
											<td><input type="text" id="MMN2T" name="MMN2T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MMR221" name="MMR221" class="form-control" ></td>
											<td><input type="text" id="MMR222" name="MMR222" class="form-control" ></td>
											<td><input type="text" id="MMR223" name="MMR223" class="form-control" ></td>											
											<td><input type="text" id="MMR224" name="MMR224" class="form-control" ></td>
											<td><input type="text" id="MMR225" name="MMR225" class="form-control" ></td>
											<td><input type="text" id="MMR2T" name="MMR2T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td><input type="text" id="MT221" name="MT221" class="form-control" ></td>
											<td><input type="text" id="MT222" name="MT222" class="form-control" ></td>
											<td><input type="text" id="MT223" name="MT223" class="form-control" ></td>											
											<td><input type="text" id="MT224" name="MT224" class="form-control" ></td>
											<td><input type="text" id="MT225" name="MT225" class="form-control" ></td>
											<td><input type="text" id="M2Total" name="M2Total" class="form-control" ></td>										
										</tr>
									</tbody>
								</table>
							</div>
       					</div>
						<br>
						<br>
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>14 Años y Menos</th>
											<th>15 Años</th>
											<th>16 Años</th>
											<th>17 Años</th>
											<th>18 Años</th>
											<th>19 Años</th>
											<th>20 Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>3o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td></td>
											<td><input type="text" id="MHN316" name="MHN316" class="form-control" ></td>
											<td><input type="text" id="MHN317" name="MHN317" class="form-control" ></td>
											<td><input type="text" id="MHN318" name="MHN318" class="form-control" ></td>
											<td><input type="text" id="MHN319" name="MHN319" class="form-control" ></td>
											<td><input type="text" id="MHN320" name="MHN320" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td></td>
											<td><input type="text" id="MHR316" name="MHR316" class="form-control" ></td>
											<td><input type="text" id="MHR317" name="MHR317" class="form-control" ></td>
											<td><input type="text" id="MHR318" name="MHR318" class="form-control" ></td>
											<td><input type="text" id="MHR319" name="MHR319" class="form-control" ></td>
											<td><input type="text" id="MHR320" name="MHR320" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td></td>
											<td><input type="text" id="MMN316" name="MMN316" class="form-control" ></td>
											<td><input type="text" id="MMN317" name="MMN317" class="form-control" ></td>
											<td><input type="text" id="MMN318" name="MMN318" class="form-control" ></td>
											<td><input type="text" id="MMN319" name="MMN319" class="form-control" ></td>
											<td><input type="text" id="MMN320" name="MMN320" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td></td>
											<td><input type="text" id="MMR316" name="MMR316" class="form-control" ></td>
											<td><input type="text" id="MMR317" name="MMR317" class="form-control" ></td>
											<td><input type="text" id="MMR318" name="MMR318" class="form-control" ></td>
											<td><input type="text" id="MMR319" name="MMR319" class="form-control" ></td>
											<td><input type="text" id="MMR320" name="MMR320" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td></td>
											<td></td>
											<td><input type="text" id="MT316" name="MT316" class="form-control" ></td>
											<td><input type="text" id="MT317" name="MT317" class="form-control" ></td>
											<td><input type="text" id="MT318" name="MT318" class="form-control" ></td>
											<td><input type="text" id="MT319" name="MT319" class="form-control" ></td>
											<td><input type="text" id="MT320" name="MT320" class="form-control" ></td>
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>21 Años</th>
											<th>22 Años</th>
											<th>23 Años</th>
											<th>24 Años</th>
											<th>25 Años y Mas</th>
											<th>Total</th>											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>3o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MHN321" name="MHN321" class="form-control" ></td>
											<td><input type="text" id="MHN322" name="MHN322" class="form-control" ></td>
											<td><input type="text" id="MHN323" name="MHN323" class="form-control" ></td>
											<td><input type="text" id="MHN324" name="MHN324" class="form-control" ></td>
											<td><input type="text" id="MHN325" name="MHN325" class="form-control" ></td>
											<td><input type="text" id="MHN3T" name="MHN3T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MHR321" name="MHR321" class="form-control" ></td>
											<td><input type="text" id="MHR322" name="MHR322" class="form-control" ></td>
											<td><input type="text" id="MHR323" name="MHR323" class="form-control" ></td>						
											<td><input type="text" id="MHR324" name="MHR324" class="form-control" ></td>
											<td><input type="text" id="MHR325" name="MHR325" class="form-control" ></td>
											<td><input type="text" id="MHR3T" name="MHR3T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMN321" name="MMN321" class="form-control" ></td>
											<td><input type="text" id="MMN322" name="MMN322" class="form-control" ></td>
											<td><input type="text" id="MMN323" name="MMN323" class="form-control" ></td>
											<td><input type="text" id="MMN324" name="MMN324" class="form-control" ></td>
											<td><input type="text" id="MMN325" name="MMN325" class="form-control" ></td>
											<td><input type="text" id="MMN3T" name="MMN3T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MMR321" name="MMR321" class="form-control" ></td>
											<td><input type="text" id="MMR322" name="MMR322" class="form-control" ></td>
											<td><input type="text" id="MMR323" name="MMR323" class="form-control" ></td>											
											<td><input type="text" id="MMR324" name="MMR324" class="form-control" ></td>
											<td><input type="text" id="MMR325" name="MMR325" class="form-control" ></td>
											<td><input type="text" id="MMR3T" name="MMR3T" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td><input type="text" id="MT321" name="MT321" class="form-control" ></td>
											<td><input type="text" id="MT322" name="MT322" class="form-control" ></td>
											<td><input type="text" id="MT323" name="MT323" class="form-control" ></td>											
											<td><input type="text" id="MT324" name="MT324" class="form-control" ></td>
											<td><input type="text" id="MT325" name="MT325" class="form-control" ></td>
											<td><input type="text" id="M3Total" name="M3Total" class="form-control" ></td>										
										</tr>
									</tbody>
								</table>
							</div>
       					</div>
					</fieldset>
					
					<h1>6.2.Matrícula Total (Continuación)</h1>
					<fieldset>
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>14 Años y Menos</th>
											<th>15 Años</th>
											<th>16 Años</th>
											<th>17 Años</th>
											<th>18 Años</th>
											<th>19 Años</th>
											<th>20 Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>4o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td></td>
											<td></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SunTotal</label></td>
											<td></td>
											<td></td>
											<td></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>21 Años</th>
											<th>22 Años</th>
											<th>23 Años</th>
											<th>24 Años</th>
											<th>25 Años y Mas</th>
											<th>Total</th>											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>4o.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>						
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>											
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>SubTotal</label></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>											
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>
											<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" disabled></td>										
										</tr>
									</tbody>
								</table>
							</div>
       					</div>
						<br>
						<br>
						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>14 Años y Menos</th>
											<th>15 Años</th>
											<th>16 Años</th>
											<th>17 Años</th>
											<th>18 Años</th>
											<th>19 Años</th>
											<th>20 Años</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>Total.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MHNT14" name="MHNT14" class="form-control" ></td>
											<td><input type="text" id="MHNT15" name="MHNT15" class="form-control" ></td>
											<td><input type="text" id="MHNT16" name="MHNT16" class="form-control" ></td>
											<td><input type="text" id="MHNT17" name="MHNT17" class="form-control" ></td>
											<td><input type="text" id="MHNT18" name="MHNT18" class="form-control" ></td>
											<td><input type="text" id="MHNT19" name="MHNT19" class="form-control" ></td>
											<td><input type="text" id="MHNT20" name="MHNT20" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="MHRT15" name="MHRT15" class="form-control" ></td>
											<td><input type="text" id="MHRT16" name="MHRT16" class="form-control" ></td>
											<td><input type="text" id="MHRT17" name="MHRT17" class="form-control" ></td>
											<td><input type="text" id="MHRT18" name="MHRT18" class="form-control" ></td>
											<td><input type="text" id="MHRT19" name="MHRT19" class="form-control" ></td>
											<td><input type="text" id="MHRT20" name="MHRT20" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMNT14" name="MMNT14" class="form-control" ></td>
											<td><input type="text" id="MMNT15" name="MMNT15" class="form-control" ></td>
											<td><input type="text" id="MMNT16" name="MMNT16" class="form-control" ></td>
											<td><input type="text" id="MMNT17" name="MMNT17" class="form-control" ></td>
											<td><input type="text" id="MMNT18" name="MMNT18" class="form-control" ></td>
											<td><input type="text" id="MMNT19" name="MMNT19" class="form-control" ></td>
											<td><input type="text" id="MMNT20" name="MMNT20" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td></td>
											<td><input type="text" id="MMRT15" name="MMRT15" class="form-control" ></td>
											<td><input type="text" id="MMRT16" name="MMRT16" class="form-control" ></td>
											<td><input type="text" id="MMRT17" name="MMRT17" class="form-control" ></td>
											<td><input type="text" id="MMRT18" name="MMRT18" class="form-control" ></td>
											<td><input type="text" id="MMRT19" name="MMRT19" class="form-control" ></td>
											<td><input type="text" id="MMRT20" name="MMRT20" class="form-control" ></td>
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>Total</label></td>
											<td><input type="text" id="MT14" name="MT14" class="form-control" ></td>
											<td><input type="text" id="MT15" name="MT15" class="form-control" ></td>
											<td><input type="text" id="MT16" name="MT16" class="form-control" ></td>
											<td><input type="text" id="MT17" name="MT17" class="form-control" ></td>
											<td><input type="text" id="MT18" name="MT18" class="form-control" ></td>
											<td><input type="text" id="MT19" name="MT19" class="form-control" ></td>
											<td><input type="text" id="MT20" name="MT20" class="form-control" ></td>
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
			            <div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th>21 Años</th>
											<th>22 Años</th>
											<th>23 Años</th>
											<th>24 Años</th>
											<th>25 Años y Mas</th>
											<th>Total</th>											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="5"><label>Total.</label></td>
											<td rowspan="2"><label>Hombres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MHNT21" name="MHNT21" class="form-control" ></td>
											<td><input type="text" id="MHNT22" name="MHNT22" class="form-control" ></td>
											<td><input type="text" id="MHNT23" name="MHNT23" class="form-control" ></td>
											<td><input type="text" id="MHNT24" name="MHNT24" class="form-control" ></td>
											<td><input type="text" id="MHNT25" name="MHNT25" class="form-control" ></td>
											<td><input type="text" id="MHNT" name="MHNT" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Hombre</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MHRT21" name="MHRT21" class="form-control" ></td>
											<td><input type="text" id="MHRT22" name="MHRT22" class="form-control" ></td>
											<td><input type="text" id="MHRT23" name="MHRT23" class="form-control" ></td>						
											<td><input type="text" id="MHRT24" name="MHRT24" class="form-control" ></td>
											<td><input type="text" id="MHRT25" name="MHRT25" class="form-control" ></td>
											<td><input type="text" id="MHRT" name="MHRT" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td rowspan="2"><label>Mujeres</label></td>
											<td><label>Nuevo Ingreso.</label></td>
											<td><input type="text" id="MMNT21" name="MMNT21" class="form-control" ></td>
											<td><input type="text" id="MMNT22" name="MMNT22" class="form-control" ></td>
											<td><input type="text" id="MMNT23" name="MMNT23" class="form-control" ></td>
											<td><input type="text" id="MMNT24" name="MMNT24" class="form-control" ></td>
											<td><input type="text" id="MMNT25" name="MMNT25" class="form-control" ></td>
											<td><input type="text" id="MMNT" name="MMNT" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
										<!--<td><label>Mejeres</label></td>-->
											<td><label>Repetidores.</label></td>
											<td><input type="text" id="MMRT21" name="MMRT21" class="form-control" ></td>
											<td><input type="text" id="MMRT22" name="MMRT22" class="form-control" ></td>
											<td><input type="text" id="MMRT23" name="MMRT23" class="form-control" ></td>											
											<td><input type="text" id="MMRT24" name="MMRT24" class="form-control" ></td>
											<td><input type="text" id="MMRT25" name="MMRT25" class="form-control" ></td>
											<td><input type="text" id="MMRT" name="MMRT" class="form-control" ></td>										
										</tr>
										<tr>
										<!--<td><label>1o.</label></td>-->
											<td><label></label></td>
											<td><label>Total</label></td>
											<td><input type="text" id="MT21" name="MT21" class="form-control" ></td>
											<td><input type="text" id="MT22" name="MT22" class="form-control" ></td>
											<td><input type="text" id="MT23" name="MT23" class="form-control" ></td>											
											<td><input type="text" id="MT24" name="MT24" class="form-control" ></td>
											<td><input type="text" id="MT25" name="MT25" class="form-control" ></td>
											<td><input type="text" id="MTotal" name="MTotal" class="form-control" ></td>										
										</tr>
									</tbody>
								</table>
							</div>
       					</div>						
						<br>
						<br>

						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">Repetidor.</h3>
							</div>
						</div>
						<h2>2.1 De los alumnos reportados en el punto anterior (cuadro de edades), desglosa los alumnos repetidores (son los que reprueban 5 o más materias, y que, por lo tanto, están repitiendo todo el semestre), por género y grado.</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Primero.</label></td>
												<td><input type="text" id="MHR1o" name="MHR1o" class="form-control" ></td>
												<td><input type="text" id="MMR1o" name="MMR1o" class="form-control" ></td>
												<td><input type="text" id="MRepT1o" name="MRepT1o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Tercero.</label></td>
												<td><input type="text" id="MHR3o" name="MHR3o" class="form-control" ></td>
												<td><input type="text" id="MMR3o" name="MMR3o" class="form-control" ></td>
												<td><input type="text" id="MRepT3o" name="MRepT3o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Quinto.</label></td>
												<td><input type="text" id="MHR5o" name="MHR5o" class="form-control" ></td>
												<td><input type="text" id="MMR5o" name="MMR5o" class="form-control" ></td>
												<td><input type="text" id="MRepT5o" name="MRepT5o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHRepT" name="MHRepT" class="form-control" ></td>
												<td><input type="text" id="MMRepT" name="MMRepT" class="form-control" ></td>
												<td><input type="text" id="MRepTotal" name="MRepTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	
							<br>
							<br>
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">Recursador.</h3>
							</div>
						</div>
						<h2>2.2 Desglosa por género y grado a los alumnos recursadores (los que además están cursando materias de otro semestre inmediato inferior).</h2>
				            <div class="row">
								<div class="col-lg-12">
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
												<td><label>Primero.</label></td>
												<td><input type="text" id="MHRec1o" name="MHRec1o" class="form-control" ></td>
												<td><input type="text" id="MMRec1o" name="MMRec1o" class="form-control" ></td>
												<td><input type="text" id="MRecT1o" name="MRecT1o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Tercero.</label></td>
												<td><input type="text" id="MHRec3o" name="MHRec3o" class="form-control" ></td>
												<td><input type="text" id="MMRec3o" name="MMRec3o" class="form-control" ></td>
												<td><input type="text" id="MRecT3o" name="MRecT3o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Quinto.</label></td>
												<td><input type="text" id="MHRec5o" name="MHRec5o" class="form-control" ></td>
												<td><input type="text" id="MMRec5o" name="MMRec5o" class="form-control" ></td>
												<td><input type="text" id="MRecT5o" name="MRecT5o" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHRecT" name="MHRecT" class="form-control" ></td>
												<td><input type="text" id="MMRecT" name="MMRecT" class="form-control" ></td>
												<td><input type="text" id="MRecTotal" name="MRecTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>												
					</fieldset>						
					<h1>6.3.Matrícula Total (Continuación)</h1>
					<fieldset>
						<h2>3. De la matrícula de inicio ciclo 2021-2022, desglose cuántos alumnos cuentan conexión a Internet para sus clases virtuales del Colegio.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Cuentan con conexión a Internet</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHConInt1" name="MHConInt1" class="form-control" ></td>
												<td><input type="text" id="MMConInt1" name="MMConInt1" class="form-control" ></td>
												<td><input type="text" id="MConIntT1" name="MConIntT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHConInt2" name="MHConInt2" class="form-control" ></td>
												<td><input type="text" id="MMConInt2" name="MMConInt2" class="form-control" ></td>
												<td><input type="text" id="MConIntT2" name="MConIntT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHConInt3" name="MHConInt3" class="form-control" ></td>
												<td><input type="text" id="MMConInt3" name="MMConInt3" class="form-control" ></td>
												<td><input type="text" id="MConIntT3" name="MConIntT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHConIntT" name="MHConIntT" class="form-control" ></td>
												<td><input type="text" id="MMConIntT" name="MMConIntT" class="form-control" ></td>
												<td><input type="text" id="MConIntTotal" name="MConIntTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Sin conexión a Internet</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHSinInt1" name="MHSinInt1" class="form-control" ></td>
												<td><input type="text" id="MMSinInt1" name="MMSinInt1" class="form-control" ></td>
												<td><input type="text" id="MSinInt1" name="MSinInt1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHSinInt2" name="MHSinInt2" class="form-control" ></td>
												<td><input type="text" id="MMSinInt2" name="MMSinInt2" class="form-control" ></td>
												<td><input type="text" id="MSinInt2" name="MSinInt2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHSinInt3" name="MHSinInt3" class="form-control" ></td>
												<td><input type="text" id="MMSinInt3" name="MMSinInt3" class="form-control" ></td>
												<td><input type="text" id="MSinInt3" name="MSinInt3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHSinIntT" name="MHSinIntT" class="form-control" ></td>
												<td><input type="text" id="MMSinIntT" name="MMSinIntT" class="form-control" ></td>
												<td><input type="text" id="MSinIntTotal" name="MSinIntTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
	
						<h2>3.1. De los alumnos reportados con conexión a Internet, desglose como se pide a continuación.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Laptop</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHLap1" name="MHLap1" class="form-control" ></td>
												<td><input type="text" id="MMLap1" name="MMLap1" class="form-control" ></td>
												<td><input type="text" id="MLapT1" name="MLapT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHLap2" name="MHLap2" class="form-control" ></td>
												<td><input type="text" id="MMLap2" name="MMLap2" class="form-control" ></td>
												<td><input type="text" id="MLapT2" name="MLapT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHLap3" name="MHLap3" class="form-control" ></td>
												<td><input type="text" id="MMLap3" name="MMLap3" class="form-control" ></td>
												<td><input type="text" id="MLapT3" name="MLapT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHLapT" name="MHLapT" class="form-control" ></td>
												<td><input type="text" id="MMLapT" name="MMLapT" class="form-control" ></td>
												<td><input type="text" id="MLapT" name="MLapT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							<br>

				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">PC</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHPc1" name="MHPc1" class="form-control" ></td>
												<td><input type="text" id="MMPc1" name="MMPc1" class="form-control" ></td>
												<td><input type="text" id="MPcT1" name="MPcT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHPc2" name="MHPc2" class="form-control" ></td>
												<td><input type="text" id="MMPc2" name="MMPc2" class="form-control" ></td>
												<td><input type="text" id="MPcT2" name="MPcT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHPc3" name="MHPc3" class="form-control" ></td>
												<td><input type="text" id="MMPc3" name="MMPc3" class="form-control" ></td>
												<td><input type="text" id="MPcT3" name="MPcT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHPcT" name="MHPcT" class="form-control" ></td>
												<td><input type="text" id="MMPcT" name="MMPcT" class="form-control" ></td>
												<td><input type="text" id="MPcT" name="MPcT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Tabletas</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHTab1" name="MHTab1" class="form-control" ></td>
												<td><input type="text" id="MMTab1" name="MMTab1" class="form-control" ></td>
												<td><input type="text" id="MTab1" name="MTab1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHTab2" name="MHTab2" class="form-control" ></td>
												<td><input type="text" id="MMTab2" name="MMTab2" class="form-control" ></td>
												<td><input type="text" id="MTab2" name="MTab2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHTab3" name="MHTab3" class="form-control" ></td>
												<td><input type="text" id="MMTab3" name="MMTab3" class="form-control" ></td>
												<td><input type="text" id="MTab3" name="MTab3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHTabT" name="MHTabT" class="form-control" ></td>
												<td><input type="text" id="MMTabT" name="MMTabT" class="form-control" ></td>
												<td><input type="text" id="MTabT" name="MTabT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Smart Phone</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHCel1" name="MHCel1" class="form-control" ></td>
												<td><input type="text" id="MMCel1" name="MMCel1" class="form-control" ></td>
												<td><input type="text" id="MCelT1" name="MCelT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHCel2" name="MHCel2" class="form-control" ></td>
												<td><input type="text" id="MMCel2" name="MMCel2" class="form-control" ></td>
												<td><input type="text" id="MCelT2" name="MCelT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHCel3" name="MHCel3" class="form-control" ></td>
												<td><input type="text" id="MMCel3" name="MMCel3" class="form-control" ></td>
												<td><input type="text" id="MCelT3" name="MCelT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHCelT" name="SALGas_inical" class="form-control" ></td>
												<td><input type="text" id="MMCelT" name="MMCelT" class="form-control" ></td>
												<td><input type="text" id="MCelT" name="MCelT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Smart TV</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHTv1" name="MHTv1" class="form-control" ></td>
												<td><input type="text" id="MMTv1" name="MMTv1" class="form-control" ></td>
												<td><input type="text" id="MTvT1" name="MTvT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHTv2" name="MHTv2" class="form-control" ></td>
												<td><input type="text" id="MMTv2" name="MMTv2" class="form-control" ></td>
												<td><input type="text" id="MTvT2" name="MTvT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHTv3" name="MHTv3" class="form-control" ></td>
												<td><input type="text" id="MMTv3" name="MMTv3" class="form-control" ></td>
												<td><input type="text" id="MTvT3" name="MTvT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHTvT" name="MHTvT" class="form-control" ></td>
												<td><input type="text" id="MMTvT" name="MMTvT" class="form-control" ></td>
												<td><input type="text" id="MTvT" name="MTvT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
					</fieldset>
					
					<h1>6.4.Matrícula Total (Continuación)</h1>
					<fieldset>
						<h2>3.2. De los alumnos reportados con conexión a Internet del numeral 3, desglose por tipo de servicio</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Servicio de Pago Mensual Tv por cable, Telmex, etc.</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHServ1" name="MHServ1" class="form-control" ></td>
												<td><input type="text" id="MMServ1" name="MMServ1" class="form-control" ></td>
												<td><input type="text" id="MServT1" name="MServT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHServ2" name="MHServ2" class="form-control" ></td>
												<td><input type="text" id="MMServ2" name="MMServ2" class="form-control" ></td>
												<td><input type="text" id="MServT2" name="MServT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHServ3" name="MHServ3" class="form-control" ></td>
												<td><input type="text" id="MMServ3" name="MMServ3" class="form-control" ></td>
												<td><input type="text" id="MServT3" name="MServT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHServT" name="MHServT" class="form-control" ></td>
												<td><input type="text" id="MMServT" name="MMServT" class="form-control" ></td>
												<td><input type="text" id="MServT" name="MServT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							<br>

				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Servicio de Pago Mensual de telefonía Celular</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHTel1" name="MHTel1" class="form-control" ></td>
												<td><input type="text" id="MMTel1" name="MMTel1" class="form-control" ></td>
												<td><input type="text" id="MTel1" name="MTel1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHTel2" name="MHTel2" class="form-control" ></td>
												<td><input type="text" id="MMTel2" name="MMTel2" class="form-control" ></td>
												<td><input type="text" id="MTel2" name="MTel2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHTel3" name="MHTel3" class="form-control" ></td>
												<td><input type="text" id="MMTel3" name="MMTel3" class="form-control" ></td>
												<td><input type="text" id="MTel3" name="MTel3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHTelT" name="MHTelT" class="form-control" ></td>
												<td><input type="text" id="MMTelT" name="MMTelT" class="form-control" ></td>
												<td><input type="text" id="MTelT" name="MTelT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Servicio de Pre Pago</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHPre1" name="MHPre1" class="form-control" ></td>
												<td><input type="text" id="MMPre1" name="MMPre1" class="form-control" ></td>
												<td><input type="text" id="MPreT1" name="MPreT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHPre2" name="MHPre2" class="form-control" ></td>
												<td><input type="text" id="MMPre2" name="MMPre2" class="form-control" ></td>
												<td><input type="text" id="MPreT2" name="MPreT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHPre3" name="MHPre3" class="form-control" ></td>
												<td><input type="text" id="MMPre3" name="MMPre3" class="form-control" ></td>
												<td><input type="text" id="MPreT3" name="MPreT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHPreT" name="MHPreT" class="form-control" ></td>
												<td><input type="text" id="MMPreT" name="MMPreT" class="form-control" ></td>
												<td><input type="text" id="MPreT" name="MPreT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>

						<h2>3.3. De la matrícula total, especifique el lugar donde se conectan a Internet para sus clases virtuales.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">CASA</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHCasa1" name="MHCasa1" class="form-control" ></td>
												<td><input type="text" id="MMCasa1" name="MMCasa1" class="form-control" ></td>
												<td><input type="text" id="MCasaT1" name="MCasaT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHCasa2" name="MHCasa2" class="form-control" ></td>
												<td><input type="text" id="MMCasa2" name="MMCasa2" class="form-control" ></td>
												<td><input type="text" id="MCasaT2" name="MCasaT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHCasa3" name="MHCasa3" class="form-control" ></td>
												<td><input type="text" id="MMCasa3" name="MMCasa3" class="form-control" ></td>
												<td><input type="text" id="MCasaT3" name="MCasaT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHCasaT" name="MHCasaT" class="form-control" ></td>
												<td><input type="text" id="MMCasaT" name="MMCasaT" class="form-control" ></td>
												<td><input type="text" id="MCasaT" name="MCasaT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							<br>

				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">CIBER CAFÉ</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHCiber1" name="MHCiber1" class="form-control" ></td>
												<td><input type="text" id="MMCiber1" name="MMCiber1" class="form-control" ></td>
												<td><input type="text" id="MCiberT1" name="MCiberT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHCiber2" name="MHCiber2" class="form-control" ></td>
												<td><input type="text" id="MMCiber2" name="MMCiber2" class="form-control" ></td>
												<td><input type="text" id="MCiberT2" name="MCiberT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHCiber3" name="MHCiber3" class="form-control" ></td>
												<td><input type="text" id="MMCiber3" name="MMCiber3" class="form-control" ></td>
												<td><input type="text" id="MCiberT3" name="MCiberT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHCiberT" name="MHCiberT" class="form-control" ></td>
												<td><input type="text" id="MMCiberT" name="MMCiberT" class="form-control" ></td>
												<td><input type="text" id="MCiberT" name="MCiberT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">PLANTEL</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHPlantel1" name="MHPlantel1" class="form-control" ></td>
												<td><input type="text" id="MMPlantel1" name="MMPlantel1" class="form-control" ></td>
												<td><input type="text" id="MPlantelT1" name="MPlantelT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHPlantel2" name="MHPlantel2" class="form-control" ></td>
												<td><input type="text" id="MMPlantel2" name="MMPlantel2" class="form-control" ></td>
												<td><input type="text" id="MPlantelT2" name="MPlantelT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHPlantel3" name="MHPlantel3" class="form-control" ></td>
												<td><input type="text" id="MMPlantel3" name="MMPlantel3" class="form-control" ></td>
												<td><input type="text" id="MPlantelT3" name="MPlantelT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHPlantelT" name="MHPlantelT" class="form-control" ></td>
												<td><input type="text" id="MMPlantelT" name="MMPlantelT" class="form-control" ></td>
												<td><input type="text" id="MPlantelT" name="MPlantelT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<br>							
					
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">NINGUNO</th>
											</tr>
											<tr>
												<th>Grupo</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1.</label></td>
												<td><input type="text" id="MHNinguno1" name="MHNinguno1" class="form-control" ></td>
												<td><input type="text" id="MMNinguno1" name="MMNinguno1" class="form-control" ></td>
												<td><input type="text" id="MNingunoT1" name="SALGas_inical" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2.</label></td>
												<td><input type="text" id="MHNinguno2" name="MHNinguno2" class="form-control" ></td>
												<td><input type="text" id="MMNinguno2" name="MMNinguno2" class="form-control" ></td>
												<td><input type="text" id="MNingunoT2" name="MNingunoT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3.</label></td>
												<td><input type="text" id="MHNinguno3" name="MHNinguno3" class="form-control" ></td>
												<td><input type="text" id="MMNinguno3" name="MMNinguno3" class="form-control" ></td>
												<td><input type="text" id="MNingunoT3" name="MNingunoT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHNingunoT" name="MHNingunoT" class="form-control" ></td>
												<td><input type="text" id="MMNingunoT" name="MMNingunoT" class="form-control" ></td>
												<td><input type="text" id="MNingunoT" name="MNingunoT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>					
					</fieldset>
					
					<h1>6.4.Matrícula Total (Continuación)</h1>
					<fieldset>
						<h2>1er Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno1" name="ATurno1" type="text" class="form-control">											
								</div>
							</div>	
						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS</h2>
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
							
							
						<h2>3er Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno3" name="ATurno3" type="text" class="form-control">											
								</div>
							</div>	
						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS</h2>
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
							
							
						<h2>5to Semestre</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Turno:</label>
										<input id="ATurno5" name="ATurno5" type="text" class="form-control">											
								</div>
							</div>	
						<br><br><br><br>	
						<h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS</h2>
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
					</fieldset>

					<h1>6.5.Matrícula Total (Continuación)</h1>
					<fieldset>				
						<h2>3. Escriba por grado el número de alumnos inscritos en el inicio de cursos 2021-2022 que continúan como irregulares*, desglóselos por sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="MHIrregular1" name="MHIrregular1" class="form-control" ></td>
												<td><input type="text" id="MMIrregular1" name="MMIrregular1" class="form-control" ></td>
												<td><input type="text" id="MIrregularT1" name="MIrregularT1" class="form-control" ></td>
												<td><input type="text" id="MDIrregular1" name="MDIrregular1" class="form-control" ></td>
												<td><input type="text" id="MHaIrregular1" name="MHaIrregular1" class="form-control" ></td>
												<td><input type="text" id="MEIrregular1" name="MEIrregular1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="MHIrregular2" name="MHIrregular2" class="form-control" ></td>
												<td><input type="text" id="MMIrregular2" name="MMIrregular2" class="form-control" ></td>
												<td><input type="text" id="MIrregularT2" name="MIrregularT2" class="form-control" ></td>
												<td><input type="text" id="MDIrregular2" name="MDIrregular2" class="form-control" ></td>
												<td><input type="text" id="MHaIrregular2" name="MHaIrregular2" class="form-control" ></td>
												<td><input type="text" id="MEIrregular2" name="MEIrregular2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="MHIrregular3" name="MHIrregular3" class="form-control" ></td>
												<td><input type="text" id="MMIrregular3" name="MMIrregular3" class="form-control" ></td>
												<td><input type="text" id="MIrregularT3" name="MIrregularT3" class="form-control" ></td>
												<td><input type="text" id="MDIrregular3" name="MDIrregular3" class="form-control" ></td>
												<td><input type="text" id="MHaIrregular3" name="MHaIrregular3" class="form-control" ></td>
												<td><input type="text" id="MEIrregular3" name="MEIrregular3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="MHIrregular4" name="MHIrregular4" class="form-control" ></td>
												<td><input type="text" id="MMIrregular4" name="MMIrregular4" class="form-control" ></td>
												<td><input type="text" id="MIrregularT4" name="MIrregularT4" class="form-control" ></td>
												<td><input type="text" id="MDIrregular4" name="MDIrregular4" class="form-control" ></td>
												<td><input type="text" id="MHaIrregular4" name="MHaIrregular4" class="form-control" ></td>
												<td><input type="text" id="MEIrregular4" name="MEIrregular4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="MHIrregularT" name="MHIrregularT" class="form-control" ></td>
												<td><input type="text" id="MMIrregularT" name="MMIrregularT" class="form-control" ></td>
												<td><input type="text" id="MIrregularT" name="MIrregularT" class="form-control" ></td>
												<td><input type="text" id="MDIrregularT" name="MDIrregularT" class="form-control" ></td>
												<td><input type="text" id="MHaIrregularT" name="MHaIrregularT" class="form-control" ></td>
												<td><input type="text" id="MEIrregularT" name="MEIrregularT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">* Adeudan unidades de aprendizaje curricular.</h3>
								</div>
							</div>
							<br>
						<h2>4. Escriba el número de alumnos que abandonaron sus estudios durante el ciclo 2020-2021 y regresaron a inscribirse en el inicio de cursos 2021-2022, desglose por sexo, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" id="MHAbandono" name="MHAbandono" class="form-control" ></td>
												<td><input type="text" id="MMAbandono" name="MMAbandono" class="form-control" ></td>
												<td><input type="text" id="MAbandonoT" name="MAbandonoT" class="form-control" ></td>
												<td><input type="text" id="MDAbandono" name="MDAbandono" class="form-control" ></td>
												<td><input type="text" id="MHaAbandono" name="MHaAbandono" class="form-control" ></td>
												<td><input type="text" id="MEAbandono" name="MEAbandono" class="form-control" ></td>
										</tbody>
									</table>
								</div>
       						</div>
							<br>
							
						<h2>5. De la matrícula total al inicio de cursos 2021-2022, desglose por grado** y sexo, el número de alumnos que provienen de otro plantel de Educación Media Superior, con discapacidad, hablantes de lengua indígena y nacidos fuera de México.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
												<th>Con Discapacidad</th>
												<th>Hablantes de Lengua Indígenas</th>
												<th>Nacidos Fuera de México</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="MHOtroP1" name="MHOtroP1" class="form-control" ></td>
												<td><input type="text" id="MMOtroP1" name="MMOtroP1" class="form-control" ></td>
												<td><input type="text" id="MOtroPT1" name="MOtroPT1" class="form-control" ></td>
												<td><input type="text" id="MDOtro1" name="MDOtro1" class="form-control" ></td>
												<td><input type="text" id="MHaOtro1" name="MHaOtro1" class="form-control" ></td>
												<td><input type="text" id="MEOtro1" name="MEOtro1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="MHOtroP2" name="MHOtroP2" class="form-control" ></td>
												<td><input type="text" id="MMOtroP2" name="MMOtroP2" class="form-control" ></td>
												<td><input type="text" id="MOtroPT2" name="MOtroPT2" class="form-control" ></td>
												<td><input type="text" id="MDOtro2" name="MDOtro2" class="form-control" ></td>
												<td><input type="text" id="MHaOtro2" name="MHaOtro2" class="form-control" ></td>
												<td><input type="text" id="MEOtro2" name="MEOtro2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="MHOtroP3" name="MHOtroP3" class="form-control" ></td>
												<td><input type="text" id="MMOtroP3" name="MMOtroP3" class="form-control" ></td>
												<td><input type="text" id="MOtroPT3" name="MOtroPT3" class="form-control" ></td>
												<td><input type="text" id="MDOtro3" name="MDOtro3" class="form-control" ></td>
												<td><input type="text" id="MHaOtro3" name="MHaOtro3" class="form-control" ></td>
												<td><input type="text" id="MEOtro3" name="MEOtro3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="MHOtroP4" name="MHOtroP4" class="form-control" ></td>
												<td><input type="text" id="MMOtroP4" name="MMOtroP4" class="form-control" ></td>
												<td><input type="text" id="MOtroPT4" name="MOtroPT4" class="form-control" ></td>
												<td><input type="text" id="MDOtro4" name="MDOtro4X" class="form-control" ></td>
												<td><input type="text" id="MHaOtro4" name="MHaOtro4" class="form-control" ></td>
												<td><input type="text" id="MEOtro4" name="MEOtro4" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="MHOtroPT" name="MHOtroPT" class="form-control" ></td>
												<td><input type="text" id="MMOtroPT" name="MMOtroPT" class="form-control" ></td>
												<td><input type="text" id="MOtroPT" name="MOtroPT" class="form-control" ></td>
												<td><input type="text" id="MDOtroT" name="MDOtroT" class="form-control" ></td>
												<td><input type="text" id="MHaOtroT" name="MHaOtroT" class="form-control" ></td>
												<td><input type="text" id="MEOtroT" name="MEOtroT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">** Ver tablas de equivalencias del grado de avance en página 8/17</h3>
								</div>
							</div>
							<br>
							
						<h2>5.1 Del numeral 5 (alumnos que provienen de otro subsistema) identifiquen cuántos son de escuelas particulares, como se detalla en el siguiente cuadro.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Grado</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1o.</label></td>
												<td><input type="text" id="MHOtroSub1" name="MHOtroSub1" class="form-control" ></td>
												<td><input type="text" id="MMOtroSub1" name="MMOtroSub1" class="form-control" ></td>
												<td><input type="text" id="MOtroSubT1" name="MOtroSubT1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2o.</label></td>
												<td><input type="text" id="MHOtroSub2" name="MHOtroSub2" class="form-control" ></td>
												<td><input type="text" id="MMOtroSub2" name="MMOtroSub2" class="form-control" ></td>
												<td><input type="text" id="MOtroSubT2" name="MOtroSubT2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="MHOtroSub3" name="MHOtroSub3" class="form-control" ></td>
												<td><input type="text" id="MMOtroSub3" name="MMOtroSub3" class="form-control" ></td>
												<td><input type="text" id="MOtroSubT3" name="MOtroSubT3" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total.</label></td>
												<td><input type="text" id="MHOtroSubT" name="MHOtroSubT" class="form-control" ></td>
												<td><input type="text" id="MMOtroSubT" name="MMOtroSubT" class="form-control" ></td>
												<td><input type="text" id="MOtroSubT" name="MOtroSubT" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
					</fieldset>
					<h1>6.6.Matrícula Total (Continuación)</h1>
					<fieldset>		
						<h2>6. De la matrícula total al inicio de cursos 2021-2022, escriba por sexo el número de alumnos que son hablantes de lengua indígena e indique las principales lenguas que hablan los alumnos, basándose en la tabla de lenguas.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Hombres</label>
										<input id="MHInicioCursos" name="MHInicioCursos" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="MMInicioCursos" name="MMInicioCursos" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input id="MInicioCursosT" name="MInicioCursosT" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Clave</th>
												<th>Lengua</th>
												<th>Número de Alumnos</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" id="MLenguaClave1" name="MLenguaClave1" class="form-control" ></td>
												<td><input type="text" id="MLengua1" name="MLengua1" class="form-control" ></td>
												<td><input type="text" id="MALengua1" name="MALengua1" class="form-control" ></td>
											</tr>
											<tr>
												<td><input type="text" id="MLenguaClave2" name="MLenguaClave2" class="form-control" ></td>
												<td><input type="text" id="MLengua2" name="MLengua2" class="form-control" ></td>
												<td><input type="text" id="MALengua2" name="MALengua2" class="form-control" ></td>
											</tr>
											<tr>
												<td><input type="text" id="MLenguaClave3" name="MLenguaClave3" class="form-control" ></td>
												<td><input type="text" id="MLengua3" name="MLengua3" class="form-control" ></td>
												<td><input type="text" id="MALengua3" name="MALengua3" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>							
							<br>
							
						<h2>7. De los alumnos nacidos fuera de México reportados en la pregunta 1 de esta sección, indique su lugar de nacimiento y desglóselos por sexo.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Lugar de nacimiento</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Estados Unidos</label></td>
												<td><input type="text" id="MHEu" name="MHEu" class="form-control" ></td>
												<td><input type="text" id="MMEu" name="MMEu" class="form-control" ></td>
												<td><input type="text" id="MEuT" name="MEuT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Canadá</label></td>
												<td><input type="text" id="MHCanada" name="MHCanada" class="form-control" ></td>
												<td><input type="text" id="MMCanada" name="MMCanada" class="form-control" ></td>
												<td><input type="text" id="MCanadaT" name="MCanadaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Centro América y el Caribe</label></td>
												<td><input type="text" id="MHCentroA" name="MHCentroA" class="form-control" ></td>
												<td><input type="text" id="MMCentroA" name="MMCentroA" class="form-control" ></td>
												<td><input type="text" id="MCentroAT" name="MCentroAT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sudamérica</label></td>
												<td><input type="text" id="MHSudamerica" name="MHSudamerica" class="form-control" ></td>
												<td><input type="text" id="MMSudamerica" name="MMSudamerica" class="form-control" ></td>
												<td><input type="text" id="MSudamericaT" name="MSudamericaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>África</label></td>
												<td><input type="text" id="MHAfrica" name="MHAfrica" class="form-control" ></td>
												<td><input type="text" id="MMAfrica" name="MMAfrica" class="form-control" ></td>
												<td><input type="text" id="MAfricaT" name="MAfricaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Asia</label></td>
												<td><input type="text" id="MHAsia" name="MHAsia" class="form-control" ></td>
												<td><input type="text" id="MMAsia" name="MMAsia" class="form-control" ></td>
												<td><input type="text" id="MAsiaT" name="MAsiaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Europa</label></td>
												<td><input type="text" id="MHEuropa" name="MHEuropa" class="form-control" ></td>
												<td><input type="text" id="MMEuropa" name="MMEuropa" class="form-control" ></td>
												<td><input type="text" id="MEuropaT" name="MEuropaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Oceanía</label></td>
												<td><input type="text" id="MHOceania" name="MHOceania" class="form-control" ></td>
												<td><input type="text" id="MMOceania" name="MMOceania" class="form-control" ></td>
												<td><input type="text" id="MOceaniaT" name="MOceaniaT" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total</label></td>
												<td><input type="text" id="MHLugar" name="MHLugar" class="form-control" ></td>
												<td><input type="text" id="MMLugar" name="MMLugar" class="form-control" ></td>
												<td><input type="text" id="MLugarT" name="MLugarT" class="form-control" ></td>
											</tr>											
										</tbody>
									</table>
								</div>
       						</div>									
					</fieldset>

					<h1>6.7.Matrícula Total (Continuación)</h1>
					<fieldset>		
						<h2>8. De la matrícula total al inicio de cursos 2021-2022, escriba el número de alumnos según su lugar de residencia y desglóselos por sexo.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="6">En el País</th>
											</tr>										
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Aguascalientes</label></td>
												<td><input type="text" id="MHAgu" name="MHAgu" class="form-control" ></td>
												<td><input type="text" id="MMAgu" name="MMAgu" class="form-control" ></td>
												<td><label>Morelos</label></td>
												<td><input type="text" id="MHMor" name="MHMor" class="form-control" ></td>
												<td><input type="text" id="MMMor" name="MMMor" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Baja California</label></td>
												<td><input type="text" id="MHBcn" name="MHBcn" class="form-control" ></td>
												<td><input type="text" id="MMBcn" name="MMBcn" class="form-control" ></td>
												<td><label>Nayarit</label></td>
												<td><input type="text" id="MHNay" name="MHNay" class="form-control" ></td>
												<td><input type="text" id="MMNay" name="MMNay" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Baja California Sur</label></td>
												<td><input type="text" id="MHBcs" name="MHBcs" class="form-control" ></td>
												<td><input type="text" id="MMBcs" name="MMBcs" class="form-control" ></td>
												<td><label>Nuevo León</label></td>
												<td><input type="text" id="MHNle" name="MHNle" class="form-control" ></td>
												<td><input type="text" id="MMNle" name="MMNle" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Campeche</label></td>
												<td><input type="text" id="MHCam" name="MHCam" class="form-control" ></td>
												<td><input type="text" id="MMCam" name="MMCam" class="form-control" ></td>
												<td><label>Oaxaca</label></td>
												<td><input type="text" id="MHOax" name="MHOax" class="form-control" ></td>
												<td><input type="text" id="MMOax" name="MMOax" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Coahuila</label></td>
												<td><input type="text" id="MHCoa" name="MHCoa" class="form-control" ></td>
												<td><input type="text" id="MMCoa" name="MMCoa" class="form-control" ></td>
												<td><label>Puebla</label></td>
												<td><input type="text" id="MHPue" name="MHPue" class="form-control" ></td>
												<td><input type="text" id="MMPue" name="MMPue" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Colima</label></td>
												<td><input type="text" id="MHCol" name="MHCol" class="form-control" ></td>
												<td><input type="text" id="MMCol" name="MMCol" class="form-control" ></td>
												<td><label>Querétaro</label></td>
												<td><input type="text" id="MHQue" name="MHQue" class="form-control" ></td>
												<td><input type="text" id="MMQue" name="MMQue" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Chiapas</label></td>
												<td><input type="text" id="MHChp" name="MHChp" class="form-control" ></td>
												<td><input type="text" id="MMChp" name="MMChp" class="form-control" ></td>
												<td><label>Quintana Roo</label></td>
												<td><input type="text" id="MHRoo" name="MHRoo" class="form-control" ></td>
												<td><input type="text" id="MMRoo" name="MMRoo" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Chihuahua</label></td>
												<td><input type="text" id="MHChh" name="MHChh" class="form-control" ></td>
												<td><input type="text" id="MMChh" name="MMChh" class="form-control" ></td>
												<td><label>San Luis Potosí</label></td>
												<td><input type="text" id="MHSlp" name="MHSlp" class="form-control" ></td>
												<td><input type="text" id="MMSlp" name="MMSlp" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Ciudad de México</label></td>
												<td><input type="text" id="MHCdmx" name="MHCdmx" class="form-control" ></td>
												<td><input type="text" id="MMCdmx" name="MMCdmx" class="form-control" ></td>
												<td><label>Sinaloa</label></td>
												<td><input type="text" id="MHSin" name="MHSin" class="form-control" ></td>
												<td><input type="text" id="MMSin" name="MMSin" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Durango</label></td>
												<td><input type="text" id="MHDur" name="MHDur" class="form-control" ></td>
												<td><input type="text" id="MMDur" name="MMDur" class="form-control" ></td>
												<td><label>Sonora</label></td>
												<td><input type="text" id="MHSon" name="MHSon" class="form-control" ></td>
												<td><input type="text" id="MMSon" name="MMSon" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Guanajuato</label></td>
												<td><input type="text" id="MHGua" name="MHGua" class="form-control" ></td>
												<td><input type="text" id="MMGua" name="MMGua" class="form-control" ></td>
												<td><label>Tabasco</label></td>
												<td><input type="text" id="MHTab" name="MHTab" class="form-control" ></td>
												<td><input type="text" id="MMTab" name="MMTab" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Guerrero</label></td>
												<td><input type="text" id="MHGro" name="MHGro" class="form-control" ></td>
												<td><input type="text" id="MMGro" name="MMGro" class="form-control" ></td>
												<td><label>Tamaulipas</label></td>
												<td><input type="text" id="MHTam" name="MHTam" class="form-control" ></td>
												<td><input type="text" id="MMTam" name="MMTam" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Hidalgo</label></td>
												<td><input type="text" id="MHHid" name="MHHid" class="form-control" ></td>
												<td><input type="text" id="MMHid" name="MMHid" class="form-control" ></td>
												<td><label>Tlaxcala</label></td>
												<td><input type="text" id="MHTla" name="MHTla" class="form-control" ></td>
												<td><input type="text" id="MMTla" name="MMTla" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Jalisco</label></td>
												<td><input type="text" id="MHJal" name="MHJal" class="form-control" ></td>
												<td><input type="text" id="MMJal" name="MMJal" class="form-control" ></td>
												<td><label>Veracruz</label></td>
												<td><input type="text" id="MHVer" name="MHVer" class="form-control" ></td>
												<td><input type="text" id="MMVer" name="MMVer" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>México</label></td>
												<td><input type="text" id="MHMex" name="MHMex" class="form-control" ></td>
												<td><input type="text" id="MMMex" name="MMMex" class="form-control" ></td>
												<td><label>Yucatán</label></td>
												<td><input type="text" id="MHYuc" name="MHYuc" class="form-control" ></td>
												<td><input type="text" id="MMYuc" name="MMYuc" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Michoacán</label></td>
												<td><input type="text" id="MHMic" name="MHMic" class="form-control" ></td>
												<td><input type="text" id="MMMic" name="MMMic" class="form-control" ></td>
												<td><label>Zacatecas</label></td>
												<td><input type="text" id="MHZac" name="MHZac" class="form-control" ></td>
												<td><input type="text" id="MMZac" name="MMZac" class="form-control" ></td>
											</tr>											
										</tbody>
									</table>
								</div>
       						</div>					
							<br>
							
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th colspan="4">Fuera de México</th>
											</tr>
											<tr>
												<th></th>
												<th>Hombres</th>
												<th>Mujeres</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Estados Unidos</label></td>
												<td><input type="text" id="MHUs" name="MHUs" class="form-control" ></td>
												<td><input type="text" id="MMUs" name="MMUs" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Canadá</label></td>
												<td><input type="text" id="MHCa" name="MHCa" class="form-control" ></td>
												<td><input type="text" id="MMCa" name="MMCa" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Centro América y el Caribe</label></td>
												<td><input type="text" id="MHCentroA" name="MHCentroA" class="form-control" ></td>
												<td><input type="text" id="MMCentroA" name="MMCentroA" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sudamérica</label></td>
												<td><input type="text" id="MHSudamerica" name="MHSudamerica" class="form-control" ></td>
												<td><input type="text" id="MMSudamerica" name="MMSudamerica" class="form-control" ></td>
											</tr>
																						<tr>
												<td><label>África</label></td>
												<td><input type="text" id="MHAfrica" name="MHAfrica" class="form-control" ></td>
												<td><input type="text" id="MMAfrica" name="MMAfrica" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Asia</label></td>
												<td><input type="text" id="MHAsia" name="MHAsia" class="form-control" ></td>
												<td><input type="text" id="MMAsia" name="MMAsia" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Europa</label></td>
												<td><input type="text" id="MHEuropa" name="MHEuropa" class="form-control" ></td>
												<td><input type="text" id="MMEuropa" name="MMEuropa" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Oceanía</label></td>
												<td><input type="text" id="MHOceania" name="MHOceania" class="form-control" ></td>
												<td><input type="text" id="MMOceania" name="MMOceania" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total</label></td>
												<td><input type="text" id="MHTotalEs" name="MHTotalEs" class="form-control" ></td>
												<td><input type="text" id="MMTotalEs" name="MMTotalEs" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
					</fieldset>
							
					<h1>6.8.Matrícula Total (Continuación)</h1>
					<fieldset>
						<h2>9. Escriba por sexo el número de alumnos del último grado del programa*, y desglóselos según el campo de formación académica.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Campo de formación académica</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>1. Educación</label></td>
												<td><input type="text" id="MHEduca" name="MHEduca" class="form-control" ></td>
												<td><input type="text" id="MMEduca" name="MMEduca" class="form-control" ></td>
												<td><input type="text" id="MTEduca" name="MTEduca" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>2. Artes y Humanidades</label></td>
												<td><input type="text" id="MHArtes" name="MHArtes" class="form-control" ></td>
												<td><input type="text" id="MMArtes" name="MMArtes" class="form-control" ></td>
												<td><input type="text" id="MTArtes" name="MTArtes" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3. Ciencias Sociales y Derecho</label></td>
												<td><input type="text" id="MHCiencias" name="MHCiencias" class="form-control" ></td>
												<td><input type="text" id="MMCiencias" name="MMCiencias" class="form-control" ></td>
												<td><input type="text" id="MTCiencias" name="MTCiencias" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>4. Administración y Negocios</label></td>
												<td><input type="text" id="MHAdmon" name="MHAdmon" class="form-control" ></td>
												<td><input type="text" id="MMAdmon" name="MMAdmon" class="form-control" ></td>
												<td><input type="text" id="MTAdmon" name="MTAdmon" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>5. Ciencias Naturales, Matemáticas y Estadística</label></td>
												<td><input type="text" id="MHNatMat" name="MHNatMat" class="form-control" ></td>
												<td><input type="text" id="MMNatMat" name="MMNatMat" class="form-control" ></td>
												<td><input type="text" id="MTNatMat" name="MTNatMat" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>6. Tecnologías de la Información y la Comunicación</label></td>
												<td><input type="text" id="MHTIC" name="MHTIC" class="form-control" ></td>
												<td><input type="text" id="MMTic" name="MMTic" class="form-control" ></td>
												<td><input type="text" id="MTTic" name="MTTic" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>7. Ingeniería, Manufactura y Construcción</label></td>
												<td><input type="text" id="MHIng" name="MHIng" class="form-control" ></td>
												<td><input type="text" id="MMIng" name="MMIng" class="form-control" ></td>
												<td><input type="text" id="MTIng" name="MTIng" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>8. Agronomía y Veterinaria</label></td>
												<td><input type="text" id="MHAgro" name="MHAgro" class="form-control" ></td>
												<td><input type="text" id="MMAgro" name="MMAgro" class="form-control" ></td>
												<td><input type="text" id="MTAgro" name="MTAgro" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>9. Ciencias de la Salud</label></td>
												<td><input type="text" id="MHSalud" name="MHSalud" class="form-control" ></td>
												<td><input type="text" id="MMSalud" name="MMSalud" class="form-control" ></td>
												<td><input type="text" id="MTSalud" name="MTSalud" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>10. Servicios</label></td>
												<td><input type="text" id="MHServicios" name="MHServicios" class="form-control" ></td>
												<td><input type="text" id="MMServicios" name="MMServicios" class="form-control" ></td>
												<td><input type="text" id="MTServicios" name="MTServicios" class="form-control" ></td>
											</tr>
												<td><label>Totales</label></td>
												<td><input type="text" id="MHTFormacion" name="MHTFormacion" class="form-control" ></td>
												<td><input type="text" id="MMTFormacion" name="MMTFormacion" class="form-control" ></td>
												<td><input type="text" id="MTFormacion" name="MTFormacion" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">* Ver tablas de equivalencias del grado de avance en página 8/17</h3>
								</div>
							</div>
							<br>											
					</fieldset>
					
					<h1>7.Alumnos con Discapacidad y Necesidades Educativas Especiales</h1>
					<fieldset>
						<h2>1. De acuerdo al número de alumnos reportados en la pregunta 1 de la sección VI, desglóselos por tipo de discapacidad que presentan y sexo.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Discapacidad que presentan</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Discapacidad física / motriz</label></td>
												<td><input type="text" id="MHFisica" name="MHFisica" class="form-control" ></td>
												<td><input type="text" id="MHTDis" name="MHTDis" class="form-control" ></td>
												<td><input type="text" id="MTFisica" name="MTFisica" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Discapacidad intelectual</label></td>
												<td><input type="text" id="MHDIntelectual" name="MHDIntelectual" class="form-control" ></td>
												<td><input type="text" id="MMDIntelectual" name="MMDIntelectual" class="form-control" ></td>
												<td><input type="text" id="MDTIntelectual" name="MDTIntelectual" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Discapacidad múltiple</label></td>
												<td><input type="text" id="MHMultiple" name="MHMultiple" class="form-control" ></td>
												<td><input type="text" id="MMMultiple" name="MMMultiple" class="form-control" ></td>
												<td><input type="text" id="MTMultiple" name="MTMultiple" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Discapacidad auditiva:</label></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
											<td><label>Hipoacusia</label></td>
												<td><input type="text" id="MHHipo" name="MHHipo" class="form-control" ></td>
												<td><input type="text" id="MMHipo" name="MMHipo" class="form-control" ></td>
												<td><input type="text" id="MTHipo" name="MTHipo" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Sordera</label></td>
												<td><input type="text" id="MHSordera" name="MHSordera" class="form-control" ></td>
												<td><input type="text" id="MMSordera" name="MMSordera" class="form-control" ></td>
												<td><input type="text" id="MTSordera" name="MTSordera" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Discapacidad visual:</label></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td><label>Baja visión</label></td>
												<td><input type="text" id="MHBajaV" name="MHBajaV" class="form-control" ></td>
												<td><input type="text" id="MMBajaV" name="MMBajaV" class="form-control" ></td>
												<td><input type="text" id="MHBajaV" name="MHBajaV" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Ceguera</label></td>
												<td><input type="text" id="MHCeguera" name="MHCeguera" class="form-control" ></td>
												<td><input type="text" id="MMCeguera" name="MMCeguera" class="form-control" ></td>
												<td><input type="text" id="MHCeguera" name="MHCeguera" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Discapacidad psicosocial</label></td>
												<td><input type="text" id="MHPsico" name="MHPsico" class="form-control" ></td>
												<td><input type="text" id="MMPsico" name="MMPsico" class="form-control" ></td>
												<td><input type="text" id="MHPsico" name="MHPsico" class="form-control" ></td>
											</tr>
												<td><label>Totales</label></td>
												<td><input type="text" id="MHTDis" name="MHTDis" class="form-control" ></td>
												<td><input type="text" id="MMTDis" name="MMTDis" class="form-control" ></td>
												<td><input type="text" id="MHTDis" name="MHTDis" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>										
							<br>
							
						<h2>2. Escriba por sexo el número de alumnos con aptitudes sobresalientes y desglóselos por el tipo de aptitud.</h2>
				            <div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Aptitudes sobresalientes</th>
												<th>Hombres</th>
												<th>Mujeres</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label>Intelectual</label></td>
												<td><input type="text" id="MHIntelectual" name="MHIntelectual" class="form-control" ></td>
												<td><input type="text" id="MMIntelectual" name="MMIntelectual" class="form-control" ></td>
												<td><input type="text" id="MTIntelectual" name="MTIntelectual" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Creativa</label></td>
												<td><input type="text" id="MHCreatividad" name="MHCreatividad" class="form-control" ></td>
												<td><input type="text" id="MMCreatividad" name="MMCreatividad" class="form-control" ></td>
												<td><input type="text" id="MTCreatividad" name="MTCreatividad" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Socioafectiva</label></td>
												<td><input type="text" id="MHSocio" name="MHSocio" class="form-control" ></td>
												<td><input type="text" id="MMSocio" name="MMSocio" class="form-control" ></td>
												<td><input type="text" id="MTSocio" name="MTSocio" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Artística</label></td>
												<td><input type="text" id="MHArtistica" name="MHArtistica" class="form-control" ></td>
												<td><input type="text" id="MMArtistica" name="MMArtistica" class="form-control" ></td>
												<td><input type="text" id="MTArtistica" name="MTArtistica" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Psicomotriz</label></td>
												<td><input type="text" id="MHPsicomotriz" name="MHPsicomotriz" class="form-control" ></td>
												<td><input type="text" id="MMPsicomotriz" name="MMPsicomotriz" class="form-control" ></td>
												<td><input type="text" id="MTPsicomotriz" name="MTPsicomotriz" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>Total</label></td>
												<td><input type="text" id="MHTAptitudes" name="MHTAptitudes" class="form-control" ></td>
												<td><input type="text" id="MMTAptitudes" name="MMTAptitudes" class="form-control" ></td>
												<td><input type="text" id="MTAptitudes" name="MTAptitudes" class="form-control" ></td>
											</tr>											
										</tbody>
									</table>
								</div>
       						</div>								
					</fieldset>
					
					<h1>8.Docentes</h1>
					<fieldset>	
						<h2>1. Escriba por sexo el número de docentes que atienden este programa al inicio de cursos 2021-2022. (Corte 30 Septiembre).</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Hombres</label>
										<input id="MHDocentes" name="MHDocentes" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="MMDocentes" name="MMDocentes" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input id="MTDocentes" name="MTDocentes" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">Nota Para la Modalidad No Escolarizada: Si por algún motivo no cuenta con personal docente para esta modalidad, reporte el total de asesores que la atienden.</h3>
								</div>
							</div>
					</fieldset>
					
					<h1>9.Matrícula de Formación para el Trabajo</h1>
					<fieldset>
						<div class="row">
							<div class="col-md-8 ">
								<h3 class="text-danger">(Esta sección sólo será llenada cuando el Bachillerato General imparta Formación para el Trabajo).</h3>
							</div>
						</div>					
						<h2>1. Escriba por sexo el número de alumnos que están cursando alguna Formación para el Trabajo.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Hombres</label>
										<input id="MHAluFormacion" name="MHAluFormacion" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="MMAluFormacion" name="MMAluFormacion" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input id="MTAluFormacion" name="MTAluFormacion" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							
						<h2>2. Escriba el número de Formaciones para el Trabajo que se ofrece en el Bachillerato General.</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Formación para el Trabajo</label>
										<input id="MFormaTrabajo" name="MFormaTrabajo" type="text" class="form-control ">											
								</div>
							</div>							
							<br><br><br><br>
						<h2>3. Escriba por clave y nombre de Formación para el Trabajo el número de alumnos reportados en la pregunta 1 de ésta sección y desglóselos por sexo.</h2>
							<div class="row">
								<div class="col-md-8 ">
									<h3 class="text-danger">Nota: Si el plantel imparte más de ocho, reporte las faltantes en copias fotostáticas de esta página, y anexe a este cuestionario las páginas adicionales.</h3>
								</div>
							</div>					            
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
			</div>
		</div>
	</div>
</div>
               
			   
  
    <script>
	
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
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
	
<!-- Steps -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/staps/jquery.steps.min.js'); ?>"></script>
<!-- Jquery Validate -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/validate/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/messages_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>

   <!-- iCheck -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>
	<script>
		$(document).ready(function () {
			$('.i-checks').iCheck({
				checkboxClass: 'icheckbox_square-green',
				radioClass: 'iradio_square-green',
			});
		});
</script>

<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/date_picker_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/clockpicker/clockpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />

<style type="text/css">
	.wizard .content .body 
		{
			position: relative;
		}

	.sombra
	{
		z-index: 256;
		background-color: #eee6;
		position: absolute;
		width: 100%;
		height: 100%;
		padding: 8em;
		margin-left: -15px;
	}

	.wizard > .content > .body label.error 
	{
		margin-left: 75px !important;
	}
</style>