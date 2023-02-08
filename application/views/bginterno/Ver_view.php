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
					Bachillerato General-Levantamiento Estadístico Interno Intersemestral.
				</h2>
				<p>
				</p>
				<form id="form" action="#" class="wizard-big">

                    <!--.........................................-->				
					<h1> Características del Plan de Estudios</h1>
					<fieldset>
						<h2>1. Marque con una X el servicio educativo al que corresponde la matrícula.</h2>
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
							
						<h2>2. Fecha de creación o actualización del plan de estudios.</h2>
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
							
						<h2>3. Escriba la duración del bachillerato y marque con una X la estructura del plan de estudios que le corresponde.</h2>
							<div class="col-md-3">
								<div class="form-group">
									<label>Duración</label>
									<input id="PEDuracion" name="PEDuracion" type="text" class="form-control ">											
								</div>
							</div>
							<br>
							<br>
							<br>
							<br>
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
							
						<h2>4. Escriba el número de créditos por cubrir.</h2>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Total de créditos</label>
										<input id="PECreditos" name="PECreditos" type="text" class="form-control ">	
									</div>
								</div> 
							</div> 
                    </fieldset>

                    <!--.........................................-->
					<h1> Existencia del Semestre</h1>
					<fieldset>
                        <h2>1. Escriba por género y grado (1er, 3er y 5o semestre), el No. de alumnos EXISTENTES en el semestre 2021-2 (Agosto 2021 - Enero 2022). Los alumnos EXISTENTES son el número físico de estudiantes en aula al final del semestre y que por lo tanto presentaron exámenes hasta EVALUACIÓN ORDINARIA. Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena. </h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>
										
						<h2><label>APROBADOS DEL SEMESTRE 2021-2.</label> </h2>
						<h2>2. Escriba por género y grado (1er, 3er y 5o semestre), el No. De alumnos que de la EXISTENCIA reportada en la pregunta 1, APROBARON todas sus MATERIAS (Asignaturas) hasta EVALUACIÓN ORDINARIA (semestre 2021-2). Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena.</h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>	

						<h2><label>REPROBADOS DEL SEMESTRE 2021-2.</label> </h2>
						<h2>3. Escriba por género y grado (1er, 3er y 5o semestre), el No. de alumnos que de la EXISTENCIA reportada en la pregunta 1, REPROBARON desde 1 a TODAS sus MATERIAS (Asignaturas) hasta EVALUACIÓN ORDINARIA (Semestre 2021-2). Indique cuántos de ellos presentan alguna discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena.</h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control" ></td>
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control" ></td>
											</tr>
										</tbody>
									</table>
								</div>
       						</div>

       						<h2>Recuerde: Existencia= Aprobados + Reprobados. </h2>	
       						<br>
       						<br>	

						<h2><label>REGULARIZADOS DEL SEMESTRE 2021-2</label> </h2>
						<h2>4. De los alumnos REPROBADOS reportados en la pregunta 3, escriba por grado y sexo el número de alumnos que se REGULARIZARON en el semestre 2021-2.</h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
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

							<h2>* Los alumnos REGULARIZADOS son los alumnos que aprobaron mediante evaluaciones extraordinarias y/o especiales, todas las unidades de aprendizaje curricular que adeudaban. </h2>	            							
					</fieldset>	

                    <!--.........................................-->
					<h1> Matrícula al Inicio del Ciclo Escolar 2021-2022</h1>
					<fieldset>
						<h2>1. Coloca la matrícula oficial que reportaste en el formato 911 de inicio de cursos 2021-2022. (Corte al 30 Septiembre de 2021).</h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
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
					<h1> Abandono Escolar Intracurricular por Grado y Género (Semestre 2021-2)</h1>
					<fieldset>
						<h2>1. El abandono intracurricular es la resta de la matrícula y la existencia del semestre 2021-2.</h2>
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
												<td><label>1o.</label></td>
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>3o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>5o.</label></td>
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
												<th colspan="3">1er Semestre</th>
												<th colspan="3">3er Semestre</th>
												<th colspan="3">5to Semestre</th>
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
					<h1> Matrícula del Semestre 2022-1</h1>
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
												<td><input type="text" id="EHombres1" name="EHombres1" class="form-control" ></td>
												<td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control" ></td>
												<td><input type="text" id="ETotal1" name="ETotal1" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control" ></td>
												<td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>												
											</tr>
											<tr>
												<td><label>4o.</label></td>
												<td><input type="text" id="EHombres2" name="EHombres2" class="form-control" ></td>
												<td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control" ></td>
												<td><input type="text" id="ETotal2" name="ETotal2" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control" ></td>
												<td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>
											</tr>
											<tr>
												<td><label>6o.</label></td>
												<td><input type="text" id="EHombres3" name="EHombres3" class="form-control" ></td>
												<td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control" ></td>
												<td><input type="text" id="ETotal3" name="ETotal3" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control" ></td>
												<td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>												
											</tr>
											<tr>
											<td><label>Total</label></td>
												<td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control" ></td>
												<td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control" ></td>
												<td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control" ></td>
												<td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control" ></td>
												<td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control" ></td>
												<td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control" ></td>												
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
										<input id="PEActualizacionAnio" name="PEActualizacionAnio" type="text" class="form-control ">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Mujeres</label>
										<input id="PEActualizacionMes" name="PEActualizacionMes" type="text" class="form-control ">											
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input id="PEActualizacionDia" name="PEActualizacionDia" type="text" class="form-control ">											
									</div>
								</div>
							</div>
							
						<h2>2. Escriba el número de Formaciones para el Trabajo que se ofrece en el Bachillerato General.</h2>		
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Formación para el Trabajo</label>
										<input id="PEActualizacionAnio" name="PEActualizacionAnio" type="text" class="form-control ">	
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