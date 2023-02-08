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
                                Anexo de Tecnologías de la Información.
                            </h2>
                            <p>
                                
                            </p>

                            <form id="form" action="#" class="wizard-big">
                                <h1>Recursos Informáticos</h1>
                                <fieldset>
                                    <h2>1. ¿El plantel cuenta con tabletas para uso educativo, docente o administrativo?</h2>
							            <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" name="AITabletas" id="AITabletas" class="form-control"  value="Si" /> <label> Si </label> </div>
										</div>
										<div class="col-md-2">
												<div class="i-checks"><input type="radio" name="AITabletas" id="AITabletas" class="form-control"   value="No" /> <label> No </label> </div>
                                        </div>
										</div>
										
									<h2>¿Cuántas?</h2>
							            <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
												
												<input id="AITabletasTotal" name="AITabletasTotal" type="text" class="form-control">
                                            </div>
										</div>
										</div>
										
									<h2>2. De las tabletas reportadas en la pregunta anterior, indique a quienes fueron asignadas.</h2>
							            <div class="row">
                                        <div class="col-md-2">
                                        
												<div class="i-checks"><label> <input type="checkbox" name="AITAlumnos" id="AITAlumnos" value="1"> <i></i><label> Alumnos </label></div>
											</div>
										<div class="col-md-2">	
												<div class="i-checks"><label> <input type="checkbox" name="AITDocentes" id="AITDocentes" value="1"> <i></i><label> Docentes </label></div>
										</div>	
										<div class="col-md-2">	
                                                <div class="i-checks"><label> <input type="checkbox" name="AITAdmin" id="AITAdmin" value="1"> <i></i><label> Administrativos </label></div>
										</div>
										</div>
									<h2>3. ¿El plantel cuenta con computadoras?</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIComputadoras" id="AIComputadoras" value="Si" /> <label> Si </label> </div>
										</div>
										<div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIComputadoras" id="AIComputadoras" value="No" /> <label> No </label> </div>
                                        </div>
										</div>
									<h2>4. Escriba el total de computadoras que tiene el plantel y desglóselo según su estatus.</h2>
							           <div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<label>a) En operación</label>
											<input id="AICOperacion" name="AICOperacion" type="text" class="form-control ">	
											
										</div>
										</div>
										
										<div class="col-md-3">
										<div class="form-group">
											<label>b) En reparación</label>
											<input id="AICReparacion" name="AICReparacion" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
											<label>c) Guardadas o en reserva ***</label>
											<input id="AICReserva" name="AICReserva" type="text" class="form-control ">											
										</div>
										</div>
										</div>
										
										<h3>***Señale el motivo:</h3>
							            <div class="row">
                                        <div class="col-md-4">
                                        	<label>Instalaciones electricas inadecuadas</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR1" id="AICR1" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Falta de espacio</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR2" id="AICR2" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Falta de mobiliario</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR3" id="AICR3" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Falta de accesorio externo (mouse,teclado etc.) </label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR4" id="AICR4" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Indicaciones superiores (Uso de becarios,eventos particulares del plantel, etc.)</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR5" id="AICR5" value="1"></div>
										</div>
										</div>
										
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Dadas de baja (Inservibles, equipos dañados,equipos obsoletos, etc.)</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR6" id="AICR6" value="1"></div>
										</div>
										</div>
										
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Por mantenimiento (Falta de sistema operativo o software específico, actualizaciones) </label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR7" id="AICR7" value="1"></div>
										</div>
										</div>
										
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Esta guardado para eventos especiales </label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name ="AICR8" id="AICR8" value="1"></div>
										</div>
										</div>
										
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Otro***</label> 
											
											</div>
										 <div class="col-md-2">
										
										<div><input id="AICR9" name="AICR9" type="text" class="form-control"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>***Especifique:</label> 
											
											</div>
										 <div class="col-md-2">
										
										<div><input id="AICR91" name="AICR91" type="text" class="form-control"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Total</label> 
											
											</div>
										 <div class="col-md-2">
										
										<div><input id="AITotal" name="AITotal" type="" class="form-control"></div>
										</div>
										</div>
										<br></br>
									<div class="row">
                                        <div class="col-md-8 ">
                                        	<h3 class="text-danger">Nota: La suma total de computadoras es el resultado de los incisos a, b y c.</h3>
											
											</div>
										 
										</div>
										
									
                                       
                                     </fieldset>
									 
						
                                <h1>Recursos Informáticos</h1>
                                <fieldset>
                                    <h2>5. Del total de computadoras en operación, anótelas según su uso. </h2>
							            <div class="row">
										<div class="col-md-2">
										<div class="form-group">
											<label>Educativo</label>
											<input id="AICOEducativo" name="AICOEducativo" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Docente</label>
											<input id="AICODocente" name="AICODocente" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Administrativo</label>
											<input id="AICOAdmin" name="AICOAdmin" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Total</label>
											<input id="ACOInternet" name="ACOInternet" type="text" class="form-control ">											
										</div>
										</div>
										
										</div>
										
									<h2>6. De las computadoras reportadas en la pregunta anterior, indique cuántas de ellas cuentan con acceso a Internet, desglosándolas por uso. </h2>
							            <div class="row">
										<div class="col-md-2">
										<div class="form-group">
											<label>Educativo</label>
											<input id="AIIEducativo" name="AIIEducativo" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Docente</label>
											<input id="AIIDocente" name="AIIDocente" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Administrativo</label>
											<input id="AIIAdmin" name="AIIAdmin" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Total</label>
											<input id="ACOInternet" name="ACOInternet" type="text" class="form-control ">											
										</div>
										</div>
										
										</div>
										
									<div class="row">
                                        <div class="col-md-12 ">
                                        	<h3 class="text-danger">Nota: De la pregunta 7 a la 12 deben ser contestadas de acuerdo al total de computadoras asignadas para uso educativo.</h3>
											
											</div>
										 
										</div>	
									
										
									<h2>7. Del total de computadoras para uso educativo en operación desglóselas por tipo.</h2>
							          <div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<label>De escritorio con CPU propio</label>
											<input id="AIEscritorio" name="AIEscritorio" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Portatiles</label>
											<input id="AIPortatil" name="AIPortatil" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Terminales</label>
											<input id="AITerminales" name="AITerminales" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Total</label>
											<input id="AITipoTotal" name="AITipoTotal" type="text" class="form-control ">											
										</div>
										</div>
										
										</div>
										
																		
									<h2>8. De las computadoras  para uso educativo en operación, desglóselas según sus características.</h2>
							           <div class="row">
                                                <div class="form-group">
												
													
														<div class="row">
														<div class="col-md-1">
															<label>Memoria Ram</label>
														</div>
															<div class="col-md-2">
																<div class="text-center"><small>1 GB o Menos</small></div>
																<input type="text" id="AI1G" name="AI1G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>De 2 o 3 GB</small></div>
																<input type="text" id="AI3G" name="AI3G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>4 GB o más</small></div>
																<input type="text" id="AI4G" name="AI4G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Total</small></div>
																<input type="text" id="AIRamTotal" name="AIRamTotal" class="form-control  ">
															</div>
															
															
														
													</div>
													
													<br>
														<div class="row">
														<div class="col-md-1">
															<label>Sistema operativo</label>
														</div>
															<div class="col-md-2">
																<div class="text-center"><small>Windows</small></div>
																<input type="text" id="AIWindows" name="AIWindows" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Linux</small></div>
																<input type="text" id="AILinux" name="AILinux" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Mac OS</small></div>
																<input type="text" id="AIMac" name="AIMac" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Total</small></div>
																<input type="text" id="AISoTotal" name="AISoTotal" class="form-control  ">
															</div>
													</div>
													<br>
														
														<div class="row">
														<div class="col-md-1">
															<label>Capacidad del disco duro</label>
														</div>
															<div class="col-md-2">
																<div class="text-center"><small>30 GB o menos </small></div>
																<input type="text" id="AI30G" name="AI30G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>De 31 a 200 GB </small></div>
																<input type="text" id="AI200G" name="AI200G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>De 201 GB a más</small></div>
																<input type="text" id="AI201G" name="AI201G" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Total</small></div>
																<input type="text" id="AIDDTotal" name="AIDDTotal" class="form-control  ">
															</div>
													</div>
													<br>
													
												
														<div class="row">
														<div class="col-md-1">
															<label>Antiguedad del equipo</label>
														</div>
															<div class="col-md-2">
																<div class="text-center"><small>De 1 año a menos </small></div>
																<input type="text" id="AI1" name="AI1" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>De 2 a 3 años </small></div>
																<input type="text" id="AI3" name="AI3" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>De 4 años o más</small></div>
																<input type="text" id="AI4" name="AI4" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Total</small></div>
																<input type="text" id="AIATotal" name="AIATotal" class="form-control  ">
															</div>
														</div>	
														<br>
														
														
														<div class="row">
														<div class="col-md-1">
															<label>Tipo de adquisición</label>
														</div>
															<div class="col-md-2">
																<div class="text-center"><small>Rentada </small></div>
																<input type="text" id="AIRentada" name="AIRentada" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Comprada por el plantel </small></div>
																<input type="text" id="AIComprada" name="AIComprada" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Dependencia administrativa </small></div>
																<input type="text" id="AIDependencia" name="AIDependencia" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Donada</small></div>
																<input type="text" id="AIDonada" name="AIDonada" class="form-control  ">
															</div>
															
															<div class="col-md-2">
																<div class="text-center"><small>Total</small></div>
																<input type="text" id="AIAdqTotal" name="AIAdqTotal" class="form-control  ">
															</div>
															
															
														
													</div>
													</div>
													
													
												
												
										</div>
                                       
                                     </fieldset>		 
									 
									 
                                <h1>Recursos Informáticos</h1>
                                <fieldset>
                                    <h2>9. De las computadoras para uso educativo en operación,escriba cuántas se encuentran en el aula o laboratorio de cómputo.</h2>
							            <div class="row">
										<div class="col-md-2">
                                            <div class="form-group">
												<input id="AICOEducativo" name="AICOEducativo" type="text" class="form-control">
                                            </div>
										</div>
										
										</div>
										
									<h2>10. Escriba el número de computadoras para uso educativo en operación que están conectadas a una red local.</h2>
							            <div class="row">
										<div class="col-md-2">
										<div class="form-group">
											<label>Con internet</label>
											<input id="AIConInternet" name="AIConInternet" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Sin internet</label>
											<input id="AISinInternet" name="AISinInternet" type="text" class="form-control ">											
										</div>
										</div>
										</div>
										
								<h2>11. Seleccione el medio de conexión a Internet que tienen las computadoras.</h2>
										 <div class="row">
                                        <div class="col-md-5">
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="1"/> <label> Red dedicada </label> </div>
										
										
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="2" /> <label> Internet por cable </label> </div>
                                        
										
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="3" /> <label> Via satelite</label> </div>
                                        
										
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="4"/> <label> Señal abierta de WiFi </label> </div>
                                        
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="5" /> <label> Linea Telefonica (DIAL UP o DSL) </label> </div>
                                        
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="6" /> <label> No sabe</label> </div>
                                        
												<div class="i-checks"><input type="radio" class="form-control" name="AIConexion" id="AIConexion" value="7"/> <label> Otro medio  </label> </div>
                                        
										<div class="row">
                                        <div class="col-md-5">
                                        	<label>***Especifique:</label> 
											
											</div>
										 <div class="col-md-5">
										
										<div><input id="AIConexionOtro" name="AIConexionOtro" type="text" class="form-control"></div>
										</div>
										</div>
										
										</div>
										
										</div>
																		
									<h2>12. Seleccione la velocidad de conexión con la que cuentan las computadoras.</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIVelocidad" id="AIVelocidad" value="1"  /> <label>Menos de 1 Mb </label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" name="AIVelocidad" id="AIVelocidad" value="2"  /> <label> De 1 a 2 Mb</label> </div>
										</div>
										<div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" name="AIVelocidad" id="AIVelocidad" value="3"  /> <label> De 3 a 5 Mb </label> </div>
                                        </div>
										</div>
										
										<div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" name="AIVelocidad" id="AIVelocidad" value="4" /> <label> De 6 a 9Mb </label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" name="AIVelocidad" id="AIVelocidad" value="5" /> <label> 10 o más Mb </label> </div>
										</div>
										
										</div>
										
								<h2>13. ¿El aula o laboratorio de cómputo tiene impresora para uso de estudiantes?</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" name ="AILabImpresora" id="AILabImpresora" class="form-control"  value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" name ="AILabImpresora" id="AILabImpresora" class="form-control"  value="No" /> <label>No</label> </div>
										</div>
								</div>
                                       
                                   </fieldset>
								
							<h1>Recursos Informáticos</h1>
                                <fieldset>
                                    <h2>14. ¿Las impresiones son gratuitas para los estudiantes?</h2>
							            <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIImpresionesGratis" id="AIImpresionesGratis" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIImpresionesGratis" id="AIImpresionesGratis" value="No" /> <label> No</label> </div>
										</div>
										</div>
										<br>
										
									<h2>15. ¿El plantel cuenta con Internet inalámbrico (Wi-Fi) en sus espacios públicos?</h2>
							             <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIWifi" id="AIWifi" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control"  name="AIWifi" id="AIWifi" value="No" /> <label> No</label> </div>
										</div>
										</div>
										<br>
										
								<h2>16.Marque quienes tienen acceso a Internet inalámbrico Wi-Fi.</h2>
										
										<div class="row">
                                        <div class="col-md-2">
                                        
												<div class="i-checks"><label> <input type="checkbox" name="AIWifiAlumnos" id="AIWifiAlumnos" value="1"> <i></i><label> Alumnos </label></div>
											</div>
										<div class="col-md-2">	
												<div class="i-checks"><label> <input type="checkbox" name="AIWifiDocentes" id="AIWifiDocentes" value="1"> <i></i><label> Docentes </label></div>
										</div>	
										<div class="col-md-2">	
                                                <div class="i-checks"><label> <input type="checkbox" name="AIWifiAdmin" id="AIWifiAdmin" value="1"> <i></i><label> Administrativos </label></div>
										</div>
										</div>
										
																	
									<h2>17. ¿El plantel participa en la Red Escolar?</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" name="AIRedEscolar" id="AIRedEscolar" class="form-control"  value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" name="AIRedEscolar" id="AIRedEscolar" class="form-control"  value="No" /> <label> No</label> </div>
										</div>
										</div>
										
										<h3>*De que forma:</h3>
							            <div class="row">
                                        <div class="col-md-4">
                                        	<label>Fue equipada</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name="AIRedEquipada" id="AIRedEquipada" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Utiliza correo electrónico e Internet</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name="AIRedCorreo" id="AIRedCorreo" value="1"></div>
										</div>
										</div>
										<div class="row">
                                        <div class="col-md-4">
                                        	<label>Participa en proyectos colaborativos y foros de discusión</label> 
											
											</div>
										 <div class="col-md-6">
										
										<div class="i-checks"> <input type="checkbox" name="AIRedProyectos" id="AIRedProyectos" value="1"></div>
										</div>
										</div>
										
										
										
										
										<br></br>
									

								<h2>18. ¿El plantel participa en la Red EduSat?</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label> No</label> </div>
										</div>
										</div>
									<h3>*De que forma:</h3>
									
										<div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Antena</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Cable</label> </div>
										</div>
										<div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Señal abierta</label> </div>
										</div>
										</div>
									<br>
									
								<h2>19.¿El plantel tiene servidores?</h2>
							           <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label> No</label> </div>
										</div>
								</div>
								<br>
								<h2>20.¿Cuántos servidores tiene el plantel?</h2>
								<div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
												<input id="name" name="name" type="text" class="form-control">
                                            </div>
										</div>
										</div>
								<br>
								<h2>21.Del total de servidores que tiene el plantel, escriba el número de computadoras que fueron habilitadas para tal fin.</h2>
								<div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
												<input id="name" name="name" type="text" class="form-control">
                                            </div>
										</div>
										</div>		
										
                                       
                                   </fieldset>
								   
								<h1>Recursos Informáticos</h1>
                                <fieldset>
                                    <h3>Para identificar el uso de herramientas de cómputo que apoyan la actividad administrativa en los procesos del plantel, considere la siguiente clasificación del grado de automatización o uso de sistemas de cómputo:  </h3>
							            
										<br>
									<h2>22. Considerando la clasificación anterior, escriba la letra (a, b, c ó d) que corresponda según el grado de automatización en los siguientes procesos del plantel.</h2>
							             <h3>Procesos</h3>
										
								<div class="form-group row"><label class="col-sm-2 col-form-label">Inscripción y control de alumnos</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>Selecciona una opción</option>
										<option>a) Se carece de software, aplicaciones o sistema informático.</option>
                                        <option>b) Se cuenta con software diversos para apoyar la operación del plantel como Excel, Word, etc.</option>
                                        <option>c) Se cuenta con uno o varios sistemas que apoyan la operación del plantel, pero no están totalmente integrados.</option>
                                        <option>d) Se cuenta con un sistema con todos los procesos del plantel alineados, no existen procesos intermedios manuales. </option>
                                    </select>
									</div>
                                </div>
                                
								<div class="form-group row"><label class="col-sm-2 col-form-label">Gestión del personal docente</label>
									<div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>Selecciona una opción</option>
										<option>a) Se carece de software, aplicaciones o sistema informático.</option>
                                        <option>b) Se cuenta con software diversos para apoyar la operación del plantel como Excel, Word, etc.</option>
                                        <option>c) Se cuenta con uno o varios sistemas que apoyan la operación del plantel, pero no están totalmente integrados.</option>
                                        <option>d) Se cuenta con un sistema con todos los procesos del plantel alineados, no existen procesos intermedios manuales. </option>
                                    </select>                         
                                    </div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Registro de calificaciones</label>
									<div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>Selecciona una opción</option>
										<option>a) Se carece de software, aplicaciones o sistema informático.</option>
                                        <option>b) Se cuenta con software diversos para apoyar la operación del plantel como Excel, Word, etc.</option>
                                        <option>c) Se cuenta con uno o varios sistemas que apoyan la operación del plantel, pero no están totalmente integrados.</option>
                                        <option>d) Se cuenta con un sistema con todos los procesos del plantel alineados, no existen procesos intermedios manuales. </option>
                                    </select>                         
                                    </div>
                                </div>
								
								<h2>23. Si en alguno de los procesos la respuesta es c o d, indique si el sistema es propio o proporcionado por algún área federal o estatal.  </h2>
							             <div class="form-group row">
                                        <div class="col-md-4">
										</div>
										 <div class="col-md-2">
										 <div class="text-center"><small>Propio</small></div>
										</div>
										 <div class="col-md-2">
										  <div class="text-center"><small>Proporcionado por area federal o estatal</small></div>
										</div>
										</div>
										
									   <div class="form-group row">
                                        <div class="col-md-4">
										<h3>Inscripción y control de alumnos    </h3>
										</div>
										<div class="col-md-2 text-center">										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										<div class="col-md-2 text-center" >										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										</div>
										
										<div class="form-group row">
                                        <div class="col-md-4">
										<h3>Gestión del personal docente</h3>
										</div>
										<div class="col-md-2 text-center">										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										<div class="col-md-2 text-center" >										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										</div>
										
										<div class="form-group row">
                                        <div class="col-md-4">
										<h3>Registro de calificaciones</h3>
										</div>
										<div class="col-md-2 text-center">										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										<div class="col-md-2 text-center" >										
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" />  </div>
										</div>
										</div>
										
                                   </fieldset> 
								 
							<h1>1. Recursos Audiovisuales</h1>
                                <fieldset>
                                    
									<h2>24¿El plantel tiene equipos audiovisuales?</h2>
							             
										 
										 <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label> No</label> </div>
										</div>
										</div>
										<h3>*Registre el número de equipos según corresponda.</h3>
										
										<br>
										
										<div class="row">
														<div class="col-lg-12">
											   
														<table class="table table-bordered">
															<thead>
															<tr>
																<th></th>
																<th>TV</th>
																<th>Video grabadora</th>
																<th>Proyecciones</th>
																<th>DVD</th>
																<th>Blu Ray</th>
																<th>Pantalla Plana</th>
																<th>Pizarrones electronicos</th>
																<th>Total</th>
															   
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>En operacion</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
															</tr>
															<tr>
																<td>Descompuestas</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
															</tr>
															<tr>
																<td>Guardadas o en reservas</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
															</tr>
															<tr>
																<td>total</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																
															</tr>
															</tbody>
														</table>

														</div>
                   								
													</div>		
														<br>
										
											<h2>25 ¿El plantel tiene videoteca?</h2>
							             
										 
										 <div class="row">
                                        <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label>Si</label> </div>
										</div>
										  <div class="col-md-2">
												<div class="i-checks"><input type="radio" class="form-control" <?php //if(nvl($fump['FTipo_plaza'])== "ADMINSTRATIVO") echo"checked"; ?> name="Tablets" id="Tablets" value="Si" /> <label> No</label> </div>
										</div>
										</div>
										<h3>*Escriba la cantidad de videos</h3>
										
										<br>
										
										<div class="row">
														<div class="col-lg-12">
											   
														<table class="table table-bordered">
															<thead>
															<tr>
																<th></th>
																<th>Video cassete</th>
																<th>DVD</th>
																<th>Blu Ray</th>
																<th>Digital</th>
																<th>Total</th>
															   
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>Número de volúmenes</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																
															</tr>
															<tr>
																<td>Número de títulos</td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																<td><input type="text" id="SALGas_inical" name="SALGas_inical" class="form-control" ></td>
																
															</tr>
															
															</tr>
															</tbody>
														</table>

														</div>
                   								
													</div>	
										
                                   </fieldset>
								   
								   
								
								
								<h1>2. Recursos Audiovisuales</h1>
                                <fieldset>
								<h3>DE LOS EQUIPOS AUDIOVISUALES</h3>
								
                                    <h2>26.De los proyectores totales reportados en el punto 24, ¿Cuántos de ellos están en aulas?</h2>
							            <div class="row">
										<div class="col-md-2">
                                            <div class="form-group">
												<input id="name" name="name" type="text" class="form-control">
                                            </div>
										</div>
										
										</div>
									

								<h2>27. De los proyectores reportados en el punto anterior (en aulas). Desglóselos en operación o descompuestos</h2>
							            <div class="row">
										<div class="col-md-2">
										<div class="form-group">
											<label>En operación</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Descompuestas</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Total</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										</div>
										
								
								<h2>28. ¿El plantel cuenta con pantallas para proyectar blancas?, desglóselas de acuerdo a su estado a su estado de funcionamiento</h2>
							            <div class="row">
										<div class="col-md-2">
										<div class="form-group">
											<label>Operación</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Descompuestas</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										
										<div class="col-md-2">
										<div class="form-group">
											<label>Guardada</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
										</div>
										<div class="col-md-2">
										<div class="form-group">
											<label>Total</label>
											<input id="name" name="name" type="text" class="form-control ">											
										</div>
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