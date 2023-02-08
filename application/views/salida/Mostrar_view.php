<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet" />
<div class="row">
	<div class="col-lg-offset-1 col-lg-10">			
		<div class="ibox float-e-margins">
		 <br />
			<?php muestra_mensaje(); ?>
			<div id="ajax"></div>
			<div class="ibox-content">
				<form name='buscar' id='buscar' action="#" method="POST" class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-1 control-label" for="Filtro">Filtro:</label>
						<div class="col-lg-3">						
							<select type="text" id="Filtro" name="Filtro" class="form-control" placeholder="Selecciona" />
								<option <?php if(nvl($Filtro) == "Pendiente") echo "selected"; ?> value="Pendiente">Pendiente</option>
								<option <?php if(nvl($Filtro) == "Atendida") echo "selected"; ?> value="Atendida">Atendida</option>
								<option <?php if(nvl($Filtro) == "Cancelada") echo "selected"; ?> value="Cancelada">Cancelada</option>
								<option <?php if(nvl($Filtro) == "Todas") echo "selected"; ?> value="Todas">Todas</option>
							</select>
						</div>
						<?php if(nvl($Filtro) == "Atendida" or nvl($Filtro) == "Todas"){ ?>
						<label class="col-lg-1 control-label" for="
						
						fechai">Fechas:</label>
						<div class="col-lg-3">
							<div class="input-daterange input-group" id="datepicker">
								<input type="text" class="form-control date" name="fechai" id="fechai" value='<?=fecha_format(nvl($fechai))?>' />
								<span class="input-group-addon">al</span>
								<input type="text" class="form-control date" name="fechaf" id="fechaf" value='<?=fecha_format(nvl($fechaf))?>' />
							</div>
						</div>
						<?php } ?>
						<label class="col-lg-1 control-label" for="Folio">Folio:</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="folio" id="folio" placeholder='<?=nvl($folio)?>' />
						</div>
					</div>
				</form>
				<script type="text/javascript">
					$("#Filtro, #folio, #fechai, #fechaf").on("change", function(){
						this.form.submit();
					});
				</script>
				<hr />
				<div class="table-responsive">					
					<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
						<thead>
							<tr>
								<th>Folio</th>
								<th>Placas</th>
								<th width="150px">Vehículo</th>						
								<th width="150px">Usuario</th>
								<th width="120px">Fecha de Salida</th>
								<th>Fecha de Asignación</th>
								<th width="150px">Acción</th> 
							</tr>	
						</thead>
						<tbody>
							<?php 
								foreach($salida as $key => $list){
									$SALClave_skip = $this->encrypt->encode($list['SALClave']);					
								?>
								<tr>
									<td class="text-left">
										<?php echo folio($list['SALClave']); ?> <br /><br />
										<?php
										if( is_permitido(null,'salida','asignar'))
										if( $list['SALVisto'] ){
										?>
										<span class='text-info' title='Visto'><i class="fa fa-eye fa-2x"></i></span>
										<?php }else{ ?>
										<span class='text-danger ojo' title='No Visto' value="<?php echo$list['SALClave']; ?>"><i class="fa fa-eye-slash fa-2x"></i></span>
										<?php } ?>
									</td> 
									<td class="text-center <?php if(!$list['SALKlm_final'] and $list['SALNivel']>=2) echo "text-danger"; elseif(!$list['SALKlm_final'] and $list['SALNivel']>=1) echo "text-warning"; else echo "text-info"; ?>">
										<?php echo $list['VEPlacas']; ?>
										<?php
										if( is_permitido(null,'salida','quitar') ){
										if(!$list['SALKlm_final'] and $list['SALNivel']>=2 and $list['SALEstatus']=='Activo'){
										?>
										<br /><a href="<?php echo base_url("salida/quitar/$SALClave_skip"); ?>" confirm="¿Estas seguro de retirar la asignación?" title="Retirar Asignación">
											<img src="<?php echo base_url("assets/img/invalid.png"); ?>" alt="" />
										</a>
										<?php }} ?>
									</td>
									<td class="text-left" width="150px">
										<b>Tipo: </b><?php echo $list['VETipo']; ?> <br />
										<b>Marca: </b><?php echo $list['VEMarca']; ?> <br />
										<b>Modelo: </b><?php echo $list['VEModelo']; ?> <br />
										<b>Color: </b><?php echo $list['VEColor']; ?> <br />
									</td>
									<td class="text-left" width="220px">
									<?php echo $list['UNombre']; ?> <br /><br />
									<b>Titular autorizo: </b> <br /><?=$list['COJefe']?> <br />
									<b>Codigo: </b><?=$list['COCodigo']?>
									</td>
									<td class="text-left"><?php echo fecha_format($list['SALFecha_salida']); echo "<br />".$list['SALHora_salida']; ?></td>
									<td class="text-left"><?php echo fecha_format($list['SALFecha_asignacion']); if($list['SALObservaciones']) echo"<br /><br /><b>Observaciones:</b><br />".$list['SALObservaciones']; ?></td>
									<td>
										<?php if( (is_permitido(null,'salida','asignar') or $list['SALVehiculo']) and $list['SALEstatus']=='Activo' ){ ?>
											<button class="btn btn-default btn-sm open <?php echo $list['SALClave']; ?>"
											data-target="#modal_autos" 
											data-toggle="modal"
											data-salclave_skip="<?php echo $SALClave_skip; ?>"											
											data-salfecha_salida="<?php echo fecha_format($list['SALFecha_salida']); ?>"
											data-salhora_salida="<?php echo $list['SALHora_salida']; ?>"
											data-sallugar_salida="<?php echo $list['SALLugar_salida']; ?>"											
											data-salunidad_admin="<?php echo $list['SALUnidad_admin']; ?>"
											data-salusuario="<?php echo $list['SALUsuario']; ?>"
											data-sallicencia="<?php echo $list['SALLicencia']; ?>"
											data-salfecha_asignacion="<?php  if($list['SALFecha_asignacion']) echo fecha_format($list['SALFecha_asignacion']); else echo date('d/m/Y'); ?>"
											data-salmotivo_comision="<?php echo $list['SALMotivo_comision']; ?>"
											data-salvehiculo_autorizado="<?php echo $list['SALVehiculo_autorizado']; ?>"
											data-salvehiculo="<?php echo $list['SALVehiculo']; ?>"
											data-vetipo="<?php echo $list['VETipo']; ?>"
											data-vemarca="<?php echo $list['VEMarca']; ?>"
											data-vemodelo="<?php echo $list['VEModelo']; ?>"
											data-vecolor="<?php echo $list['VEColor']; ?>"
											data-sallanta_refaccion_s="<?php echo $list['SALLanta_refaccion_s']; ?>"
											data-sallanta_refaccion="<?php echo $list['SALLanta_refaccion']; ?>"
											data-salgato_s="<?php echo $list['SALGato_s']; ?>"
											data-salgato="<?php echo $list['SALGato']; ?>"
											data-sallave_tuercas_s="<?php echo $list['SALLave_tuercas_s']; ?>"
											data-sallave_tuercas="<?php echo $list['SALLave_tuercas']; ?>"
											data-saltapon_gas_s="<?php echo $list['SALTapon_gas_s']; ?>"
											data-saltapon_gas="<?php echo $list['SALTapon_gas']; ?>"
											data-salbayometa_s="<?php echo $list['SALBayometa_s']; ?>"
											data-salbayometa="<?php echo $list['SALBayometa']; ?>"
											data-saltarjeta_estacionamiento_s="<?php echo $list['SALTarjeta_estacionamiento_s']; ?>"
											data-saltarjeta_estacionamiento="<?php echo $list['SALTarjeta_estacionamiento']; ?>"
											data-saltarjeta_circulacion_s="<?php echo $list['SALTarjeta_circulacion_s']; ?>"
											data-saltarjeta_circulacion="<?php echo $list['SALTarjeta_circulacion']; ?>"
											data-salgas_inical="<?php echo $list['SALGas_inical']; ?>"
											data-salgas_final="<?php echo $list['SALGas_final']; ?>"
											data-salklm_inicial="<?php echo $list['SALKlm_inicial']; ?>"
											data-salklm_final="<?php echo $list['SALKlm_final']; ?>"
											data-salnivel_anticongelante="<?php echo $list['SALNivel_anticongelante']; ?>"
											data-salnivel_aceite="<?php echo $list['SALNivel_aceite']; ?>"
											data-salobservaciones="<?php echo $list['SALObservaciones']; ?>"
											data-salnivel="<?php echo $list['SALNivel']; ?>"
											
											data-ddclave="<?php echo $list['DDClave']; ?>"
											data-ddtipo="<?php echo $list['DDTipo']; ?>"
											data-ddlitros="<?php echo $list['DDLitros']; ?>"
											data-ddprecio="<?php echo $list['DDPrecio']; ?>"
											data-ddcosto="<?php echo $list['DDCosto']; ?>"
											data-ddfolio="<?php echo $list['DDFolio']; ?>"
											data-ddticket="<?php echo $list['DDTicket']; ?>"
											data-ddfactura="<?php echo $list['DDFactura']; ?>"
											data-salcomision="<?php echo $list['SALComision']; ?>"
											>
												<i class="fa fa-car"></i> 
												<?php if($list['SALKlm_final'] and $list['SALNivel']>=3) { ?>
													Ver
												<?php }elseif($list['SALNivel']>=2) { ?>
													Recepción
												<?php }elseif($list['SALNivel']==1) { ?>
													Salida
												<?php }else{ ?>
													Asignación
												<?php } ?>
											</button>
										<?php } ?>
										<!--?php if($list['SALKlm_final'] and $list['SALNivel']>=3) { ?-->
										<?php if( $list['SALNivel']>=2 and $list['SALEstatus']=='Activo') { ?>
											<a href='<?php echo base_url("salida/solicitud/$SALClave_skip/pdf"); ?>' class="btn btn-default btn-sm" target="blank" ><i class="fa fa-file-pdf-o text-danger"></i> Imprimir</a>
										<?php }elseif($list['SALNivel']<=1 and $list['SALEstatus']=='Activo'){ ?>
											<button class="btn btn-default btn-sm open"
											data-target="#modal_cancelar" 
											data-toggle="modal"
											data-salclave_skip="<?php echo $SALClave_skip; ?>"											
											><i class="fa fa-times"></i> Cancelar</button>
										<?php } if($list['SALEstatus']=='Inactivo') echo"Cancelada"; ?>
									</td>
								</tr>
							<?php } ?>						
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--/ REGISTRAR AUTOS   -->	



<div class="modal modal-danger fade up" id="modal_autos" tabindex="-1" role="dialog" aria-hidden="true"><!--/ EFECTO DE LA TABLA-->
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" ><center> <i class="fa fa-car">&nbsp; SALIDA DE VEHICULO </i></h4>
				</div>
				<div class="modal-body">					
					
					<div class="panel panel-tab panel-tab-double shadow">
						
						<div class="panel-body no-padding">
							<div class="panel panel-default shadow no-margin">
								<div class="panel-body">
									<div class="tab-content">
										<form name='datos' id='datos' action="<?=base_url("salida/save")?>" method="POST" class="form-horizontal">
											<div class="form-body">
												<div class="form-group form-group-divider">
													<div class="form-inner">
														<h4 class="no-margin"><span class="label label-success label-circle">1</span> Datos Generales</h4>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Area Solicitante: <em>*</em></label>
													<div class="col-lg-7">
														<select id="SALUnidad_admin" name="SALUnidad_admin" class='form-control disabled' placeholder="Selecciona una opcion" >
															<option>Selecciona una opción</option>
															<?php foreach($unidad as $key_u => $list_u ){ ?>
																<option value="<?php echo $list_u['CPLClave']; ?>"><?php echo $list_u['CPLNombre']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Nombre del Usuario: <em>*</em></label>
													<div class="col-lg-7">
														<select id="SALUsuario" name="SALUsuario"  class='form-control disabled' placeholder="Selecciona una opcion" >
															<option>Selecciona una opción</option>
															<?php foreach($usuario as $key_u => $list_u ){ ?>
																<option value="<?php echo $list_u['UNCI_usuario']; ?>"><?php echo $list_u['UNombre']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Licencia: <em>*</em></label>
													<div class="col-lg-7">
														<input type="text" id="SALLicencia" name="SALLicencia"  class='form-control disabled' maxlength='150'>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Fecha de Salida: <em>*</em></label>
													<div class="col-lg-7">
														<input type="text" id="SALFecha_salida" class='form-control disabled' maxlength='150'>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="SALHora_salida">Hora de Salida: <em>*</em></label>
													<div class="col-lg-7">
														<input type="text" id="SALHora_salida" class='form-control disabled' maxlength='150'>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Fecha de Asignación: <em>*</em></label>
													<div class="col-lg-7">
														<input type="text" id="SALFecha_asignacion" name="SALFecha_asignacion"  class="form-control date disabled" maxlength="10">
													</div>
												</div>											
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Motivo de la Comisión: <em>*</em></label>
													<div class="col-lg-7">
														<textarea id="SALMotivo_comision" name="SALMotivo_comision" class='form-control textarea disabled' maxlength='850' ></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Lugar: <em>*</em></label>
													<div class="col-lg-7">
														<textarea id="SALLugar_salida" class="form-control disabled" maxlength="850" ></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">VehÍculo Autorizado: <em>*</em></label>
													<div class="col-lg-7">
														<input type="button" id="SALVehiculo_autorizado" class="form-control text-left" maxlength="150">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Vehículo Asignado: <em>*</em></label>
													<div class="col-lg-7">
														<select id="SALVehiculo" name="SALVehiculo"  class="form-control" placeholder="Selecciona una opcion" >
															<option>Selecciona una opción</option>
															<?php foreach($auto as $key_a => $list_a ){ ?>
																<option value="<?php echo $list_a['VEClave']; ?>"><?php echo $list_a['VEPlacas']; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Tipo: </label>
													<div class="col-lg-7">
														<input type="text" id="VETipo" class="form-control disabled" maxlength="10">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Marca: </label>
													<div class="col-lg-7">
														<input type="text" id="VEMarca" class="form-control disabled" maxlength="10">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Modelo: </label>
													<div class="col-lg-7">
														<input type="text" id="VEModelo" class="form-control disabled" maxlength="10">
													</div>
												</div>	
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Color: </label>
													<div class="col-lg-7">
														<input type="text" id="VEColor" class="form-control disabled" maxlength="10">
													</div>
												</div>
												<div class="datos">
												<div class="form-group form-group-divider">
													<div class="form-inner">
														<h4 class="no-margin"><span class="label label-success label-circle">2</span> Datos de Inventario</h4>
													</div>
												</div>
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">INVENTARIO </label>
													<label class="col-xs-2 control-label" for="">SALIDA </label>
													<label class="col-xs-2 control-label" for="">ENTRADA </label>
												</div>
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Llanta de Refacción: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALLanta_refaccion_s" name="SALLanta_refaccion_s" type="checkbox" class="salida">
															<label for="SALLanta_refaccion_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALLanta_refaccion" name="SALLanta_refaccion" type="checkbox" class="entrada">
															<label for="SALLanta_refaccion"></label>
														</div>
													</div>
												</div>	
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Gato: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALGato_s" name="SALGato_s" type="checkbox" class="salida">
															<label for="SALGato_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALGato" name="SALGato" type="checkbox" class="entrada">
															<label for="SALGato"></label>
														</div>
													</div>
												</div>	
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">LLave de Tuercas: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALLave_tuercas_s" name="SALLave_tuercas_s" type="checkbox" class="salida">
															<label for="SALLave_tuercas_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALLave_tuercas" name="SALLave_tuercas" type="checkbox" class="entrada">
															<label for="SALLave_tuercas"></label>
														</div>
													</div>
												</div>		
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Tapon de Gas: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTapon_gas_s" name="SALTapon_gas_s" type="checkbox" class="salida">
															<label for="SALTapon_gas_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTapon_gas" name="SALTapon_gas" type="checkbox" class="entrada">
															<label for="SALTapon_gas"></label>
														</div>
													</div>
												</div>	
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Bayoneta: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALBayometa_s" name="SALBayometa_s" type="checkbox" class="salida">
															<label for="SALBayometa_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALBayometa" name="SALBayometa" type="checkbox" class="entrada">
															<label for="SALBayometa"></label>
														</div>
													</div>
												</div>	
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Tarjeta Estacionamiento: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTarjeta_estacionamiento_s" name="SALTarjeta_estacionamiento_s" type="checkbox" class="salida">
															<label for="SALTarjeta_estacionamiento_s"></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTarjeta_estacionamiento" name="SALTarjeta_estacionamiento" type="checkbox" class="entrada">
															<label for="SALTarjeta_estacionamiento"></label>
														</div>
													</div>
												</div>	
												<div class="form-group">
													<label class="col-xs-offset-3 col-xs-3 control-label" for="">Tarjeta Circulación: </label>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTarjeta_circulacion_s" name="SALTarjeta_circulacion_s" type="checkbox" class="salida">
															<label for="SALTarjeta_circulacion_s" ></label>
														</div>
													</div>
													<div class="col-xs-2">
														<div class="pull-right checkbox checkbox-success">
															<input id="SALTarjeta_circulacion" name="SALTarjeta_circulacion" type="checkbox" class="entrada">
															<label for="SALTarjeta_circulacion"></label>
														</div>
													</div>
												</div>
												<div class="form-group form-group-divider">
													<div class="form-inner">
														<h4 class="no-margin"><span class="label label-success label-circle">3</span> Datos de Estado</h4>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 col-xs-12 control-label" for="">Nivel de Gasolina: <em>*</em></label>
													<div class="col-lg-3 col-xs-6">	
														<div class="text-center">
															<small>Inicial</small>
															<br />
																%<input type="text" id="SALGas_inical" name="SALGas_inical" class="dial salida" data-fgcolor="#ED5565" data-width="85" data-height="85" data-angleoffset="-125" data-anglearc="250" data-skin="tron" data-thickness=".4" data-displayPrevious="true">
														</div>
													</div>
													<div class="col-lg-4 col-xs-6">
														<div class="text-center">
															<small>Final</small>
															<br />
																%<input type="text" id="SALGas_final" name="SALGas_final" class="dial entrada" data-fgcolor="#ED5565" data-width="85" data-height="85" data-angleoffset="-125" data-anglearc="250" data-skin="tron" data-thickness=".4" data-displayPrevious="true">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="">Lectura Inicial Odometro: <em>*</em></label>
													<div class="col-md-2">
														<input type="text" id="SALKlm_inicial" name="SALKlm_inicial" class="form-control salida" maxlength="12">
													</div>
													<label class="col-md-3 control-label" for="">Lectura Final Odometro: </label>
													<div class="col-md-2">
														<input type="text" id="SALKlm_final" name="SALKlm_final" class="form-control entrada" maxlength="12">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="">Nivel de Anticongelante: <em>*</em></label>
													<div class="col-md-3">
														%<input type="text" id="SALNivel_anticongelante" name="SALNivel_anticongelante" value="0" class="dial" data-fgcolor="#ED5565" data-width="85" data-height="85" data-angleoffset="-125" data-anglearc="250" data-skin="tron" data-thickness=".4" data-displayPrevious="true">
													</div>
													<label class="col-md-2 control-label" for="">Nivel de Aceite: <em>*</em></label>
													<div class="col-md-2">
														%<input type="text" id="SALNivel_aceite" name="SALNivel_aceite" value="" />
													</div>
												</div>
												<div class="form-group form-group-divider div_carga" style="display: none">
													<div class="form-inner">
														<h4 class="no-margin"><span class="label label-success label-circle">4</span> Datos de Carga de Gasolina</h4>
													</div>
												</div>
												<!--div class="form-group">
													<label class="col-lg-3 control-label" for="">Carga de Gasolina: </label>
													<div class="col-lg-7">
														<b>Si</b> <input type="checkbox" id="datos_carga_skip" name="datos_carga_skip" class="datos_carga" value="Si" />
													</div>
												</div-->												
												<div class="div_carga" style="display: none">	
												<!--div class="form-group">
													<label class="col-lg-3 control-label" for="DDTipo">Tipo: <em>*</em></label>
													<div class="col-lg-9">
														<select id="DDTipo" name="DDTipo" class="form-control" >
															<option value="Gasolina (Magna)">Gasolina (Magna)</option>
															<option value="Gasolina (Premium)">Gasolina (Premium)</option>
															<option value="Diesel">Diesel</option>
														</select>
													</div>
												</div-->
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Litros: <em>*</em></label>
													<div class="col-lg-9">
														<input type="text" id="DDLitros" name="DDLitros" maxlength="150" class="form-control" />
													</div>
												</div>
												<!--div class="form-group">
													<label class="col-lg-3 control-label" for="DDPrecio">Precio por Litro: $<em>*</em></label>
													<div class="col-lg-9">
														<input type="text" id="DDPrecio" name="DDPrecio" maxlength="150" class="form-control" />
													</div>
												</div-->
												<div class="form-group">
													<label class="col-lg-3 control-label" for="DDCosto">Total: $<em>*</em></label>
													<div class="col-lg-9">
														<input type="text" id="DDCosto" name="DDCosto" maxlength="150" class="form-control" />
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">No de Ticket: <em>*</em></label>
													<div class="col-lg-9">
														<input type="text" id="DDFolio" name="DDFolio" maxlength="150" class="form-control" />
													</div>
												</div>
												<!--div class="form-group">
													<label class="col-lg-3 control-label" for="">Ticket: <em>*</em></label>
													<div class="col-lg-9">
														<?php echo forma_archivo("DDTicket", null, "Adjuntar Ticket",'btn-primary pull-left',"pdf_jpg_jpeg_png"); ?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Factura o Nota: <br /> <em>*</em></label>
													<div class="col-lg-9">
														<?php echo forma_archivo("DDFactura", null, "Adjuntar Factura",'btn-primary pull-left',"pdf_jpg_jpeg_png"); ?>
													</div>
												</div-->
												<hr />
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Formato de Comisión <br />o Justificación: <br /> <em>*</em></label>
													<div class="col-lg-7">
														<?php echo forma_archivo("SALComision", null, "Adjuntar Comisión",'btn-primary pull-left',"pdf_jpg_jpeg_png"); ?>
														<textarea name="SALComision_nota" id="SALComision_nota" placeholder="Justificación en caso de no contar con el Formato de Comisión" class="form-control textarea"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Observaciones </label>
													<div class="col-lg-7">
														<textarea id="SALObservaciones" name="SALObservaciones" class='form-control textarea' maxlength='850' ></textarea>
													</div>
												</div>
												</div>
												<div class="form-group">
													<center>
														<input type="hidden" name='SALClave_skip' id='SALClave_skip' />
														<button class="btn btn-primary save" type="button"> <i class="fa fa-save"></i> Guardar</button>
													</center>	
												</div>	
											</div>
										</form>
										<div id="result"></div>
									</div>
								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-body -->
				</div><!-- /.panel-body -->
			</div><!-- /.panel-body -->
		</div><!-- /.panel-body -->
	</div><!-- /.panel-body -->
</div><!-- /.panel-body -->
<!--/ End tabs content -->

<div class="modal modal-danger fade up" id="modal_cancelar" tabindex="-1" role="dialog" aria-hidden="true"><!--/ EFECTO DE LA TABLA-->
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" ><center> <i class="fa fa-car">&nbsp; CANCELAR SALIDA DE VEHICULO </i></h4>
				</div>
				<div class="modal-body">					
					
					<div class="panel panel-tab panel-tab-double shadow">
						
						<div class="panel-body no-padding">
							<div class="panel panel-default shadow no-margin">
								<div class="panel-body">
									<div class="tab-content">
										<form name='cancelar' id='cancelar' action="<?=base_url("salida/cancelar")?>" method="POST" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-lg-3 control-label" for="">Observaciones de Cancelación <em>*</em></label>
													<div class="col-lg-7">
														<textarea id="SALObservaciones" name="SALObservaciones" class='form-control textarea' maxlength='850' ></textarea>
													</div>
												</div>
												</div>
												<div class="form-group">
													<center>
														<input type="hidden" name='SALClave_skip' id='SALClave_skip' />
														<button class="btn btn-primary" type="submit"> <i class="fa fa-save"></i> Guardar</button>
													</center>	
												</div>	
											</div>
										</form>
										<div id="result"></div>
									</div>
								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-body -->
				</div><!-- /.panel-body -->
			</div><!-- /.panel-body -->
		</div><!-- /.panel-body -->
	</div><!-- /.panel-body -->
</div><!-- /.panel-body -->
<!--/ End tabs content -->


<!-- START @PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/date_picker_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/blankon/global/plugins/bower_components/moment/min/moment.min.js'); ?>"></script>

<script type="text/javascript">	
	$(document).ready(function() {

		$('.dataTables-example').DataTable({
			"searching":   false,
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			},
			"order": [],
			dom: '<"html5buttons"B>lTfgitp',
			"lengthMenu": [ [20,30,50,100, -1], [20,30,50,100, "Todos"] ],
			buttons: [
			{extend: 'copy', text: 'Copiar',},
			{extend: 'csv', text:'Excel'},
			{extend: 'pdf'},
			{extend: 'print', text: 'Imprimir',
				customize: function (win){
					$(win.document.body).addClass('white-bg');
					$(win.document.body).css('font-size', '10px');
					$(win.document.body).find('table')
					.addClass('compact')
					.css('font-size', 'inherit');
				}
			}
			]
		});
		
		/* Ventana modal */
		$(document).on("click", ".open", function () {
			$(".modal-body #SALFecha_salida").val( $(this).data('salfecha_salida') );
			$(".modal-body #SALHora_salida").val( $(this).data('salhora_salida') );
			$(".modal-body #SALLugar_salida").val( $(this).data('sallugar_salida') );			
			$(".modal-body #SALClave_skip").val( $(this).data('salclave_skip') );
			$(".modal-body #SALUnidad_admin").val( $(this).data('salunidad_admin') );
			$(".modal-body #SALUsuario").val( $(this).data('salusuario') );
			$(".modal-body #SALLicencia").val( $(this).data('sallicencia') );
			$(".modal-body #SALFecha_asignacion").val( $(this).data('salfecha_asignacion') );
			$(".modal-body #SALMotivo_comision").val( $(this).data('salmotivo_comision') );
			$(".modal-body #SALVehiculo_autorizado").val( $(this).data('salvehiculo_autorizado') );
			$(".modal-body #SALVehiculo").val( $(this).data('salvehiculo') );
			$(".modal-body #VETipo").val( $(this).data('vetipo') );
			$(".modal-body #VEMarca").val( $(this).data('vemarca') );
			$(".modal-body #VEModelo").val( $(this).data('vemodelo') );
			$(".modal-body #VEColor").val( $(this).data('vecolor') );
			$(".modal-body #SALLanta_refaccion_s").prop('checked', $(this).data('sallanta_refaccion_s') ).trigger('change');
			$(".modal-body #SALLanta_refaccion").prop('checked', $(this).data('sallanta_refaccion') ).trigger('change');
			$(".modal-body #SALGato_s").prop('checked', $(this).data('salgato_s') ).trigger('change');
			$(".modal-body #SALGato").prop('checked', $(this).data('salgato') ).trigger('change');
			$(".modal-body #SALLave_tuercas_s").prop('checked', $(this).data('sallave_tuercas_s') ).trigger('change');
			$(".modal-body #SALLave_tuercas").prop('checked', $(this).data('sallave_tuercas') ).trigger('change');
			$(".modal-body #SALTapon_gas_s").prop('checked', $(this).data('saltapon_gas_s') ).trigger('change');
			$(".modal-body #SALTapon_gas").prop('checked', $(this).data('saltapon_gas') ).trigger('change');
			$(".modal-body #SALBayometa_s").prop('checked', $(this).data('salbayometa_s') ).trigger('change');
			$(".modal-body #SALBayometa").prop('checked', $(this).data('salbayometa') ).trigger('change');
			$(".modal-body #SALTarjeta_estacionamiento_s").prop('checked', $(this).data('saltarjeta_estacionamiento_s') ).trigger('change');
			$(".modal-body #SALTarjeta_estacionamiento").prop('checked', $(this).data('saltarjeta_estacionamiento') ).trigger('change');
			$(".modal-body #SALTarjeta_circulacion_s").prop('checked', $(this).data('saltarjeta_circulacion_s') ).trigger('change');
			$(".modal-body #SALTarjeta_circulacion").prop('checked', $(this).data('saltarjeta_circulacion') ).trigger('change');
			$(".modal-body #SALGas_inical").val( $(this).data('salgas_inical') ).trigger('change');
			$(".modal-body #SALKlm_inicial").val( $(this).data('salklm_inicial') );
			$(".modal-body #SALKlm_final").val( $(this).data('salklm_final') );
			$(".modal-body #SALGas_final").val( $(this).data('salgas_final') ).trigger('change');
			$(".modal-body #SALNivel_anticongelante").val( $(this).data('salnivel_anticongelante') ).trigger('change');
			$(".modal-body #SALNivel_aceite").val( $(this).data('salnivel_aceite') ).trigger('change');
			$(".modal-body #SALObservaciones").val( $(this).data('salobservaciones') );
			
			//datos ticket
			$(".modal-body #datos_carga_skip").prop('checked', $(this).data('ddclave') ).trigger('change');
			$(".modal-body #DDClave").val( $(this).data('ddclave') );			
			if( $(this).data('ddclave') ){
				$(".div_carga").attr("style","display: block;");
			}
			else{
				$(".div_carga").attr("style","display: none;");
			}
			$(".modal-body #DDTipo").val( $(this).data('ddtipo') ).trigger('change');
			$(".modal-body #DDLitros").val( $(this).data('ddlitros') );
			$(".modal-body #DDPrecio").val( $(this).data('ddprecio') );
			$(".modal-body #DDCosto").val( $(this).data('ddcosto') );
			$(".modal-body #DDFolio").val( $(this).data('ddfolio') );
			$(".modal-body #DDTicket").val( $(this).data('ddticket') );
			$(".modal-body #DDFactura").val( $(this).data('ddfactura') );
			$(".modal-body #SALComision").val( $(this).data('salcomision') );
			
			if( $(this).data('ddticket') ){
				$("#ver_archivo_DDTicket").attr("href", $(this).data('ddticket') ).attr("style","display: 1;");
			}else{
				$("#ver_archivo_DDTicket").attr("style","display: none;");
			}
			if( $(this).data('ddfactura') ){
				$("#ver_archivo_DDFactura").attr("href", $(this).data('ddfactura') ).attr("style","display: 1;");
			}else{
				$("#ver_archivo_DDFactura").attr("style","display: none;");
			}
			if( $(this).data('salcomision') ){
				$("#ver_archivo_SALComision").attr("href", $(this).data('salcomision') ).attr("style","display: 1;");
			}else{
				$("#ver_archivo_SALComision").attr("style","display: none;");
			}
			
			//fin datos ticket
			
			if( $(this).data('salvehiculo') ){
				$(".modal-body .datos").attr("style", "display: block");
				$("#SALVehiculo").addClass("disabled");
			}
			else{
				$(".modal-body .datos").attr("style", "display: none");
				$("#SALVehiculo").removeClass("disabled");
			}
			
			if( $(this).data('salklm_final') )
				$(".modal-body .save").attr("style", "display: none");
			else
				$(".modal-body .save").attr("style", "display: block");
			
			if( $(this).data('salnivel')>=2 ){
				$(".salida").addClass("disabled");
				$(".entrada").removeClass("disabled");
			}else{
				$(".entrada").addClass("disabled");
				$(".salida").removeClass("disabled");
			}
			
		});
		
		$(".save").click(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("salida/save"); ?>",
				data: $(this.form).serialize(),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("loading...");
				},
				success: function(data){			
					var data = data.split(";");
					if(data[0]==' insert'){
						$("#result").empty();
						$(".loading").html("");
						location.reload();
						}else if(data[0]==' update'){
						$("#result").empty();
						$(".loading").html("");
						location.reload();
						}else{
						$("#result").empty();
						$("#result").append(data[0]);	
						$(".loading").html("");
					}
					
				}
			});
		});//----->fin
		
		$("#SALUsuario").change(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("salida/usuario_licencia_ajax"); ?>",
				data: $(this),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("loading...");
				},
				success: function(data){			
					var data = data.split(";");
					if(data[0]==' select'){
						datos.SALLicencia.value = data[1];
						$("#result").empty();
						$(".loading").empty();
						}else{
						$("#result").empty();
						$("#result").append(data[0]);	
						$(".loading").empty();
					}
					
				}
			});
		});//----->fin
		
		$("#SALVehiculo_autorizado").click(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("salida/clave_vehiculo_ajax"); ?>",
				data: "SALVehiculo_autorizado="+$("#SALVehiculo_autorizado").val(),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("loading...");
				},
				success: function(data){
					if(data){
						data =  data.replace(" ", "");
						$("#SALVehiculo").val( data ).change();
					}
				}
			});
		});//----->fin
		
		$("#SALVehiculo").change(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("salida/datos_vehiculo_ajax"); ?>",
				data: $(this),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("loading...");
				},
				success: function(data){					
					var data = data.split(";");
					if(data[0]==' select'){
						$(".modal-body #VETipo").val( data[1] );
						$(".modal-body #VEMarca").val( data[2] );
						$(".modal-body #VEModelo").val( data[3] );
						$(".modal-body #VEColor").val( data[4] );
						$(".modal-body #SALGas_inical").val( data[5] );
						$(".modal-body #SALKlm_inicial").val( data[6] );
						$(".modal-body #SALNivel_anticongelante").val( data[7] );
						$(".modal-body #SALNivel_aceite").val( data[8] );
						$(".modal-body #SALLanta_refaccion_s").prop('checked', data[9] ).trigger('change');
						$(".modal-body #SALGato_s").prop('checked', data[10] ).trigger('change');
						$(".modal-body #SALLave_tuercas_s").prop('checked', data[11] ).trigger('change');
						$(".modal-body #SALTapon_gas_s").prop('checked', data[12] ).trigger('change');
						$(".modal-body #SALBayometa_s").prop('checked', data[13] ).trigger('change');
						$(".modal-body #SALTarjeta_estacionamiento_s").prop('checked', data[14] ).trigger('change');
						$(".modal-body #SALTarjeta_circulacion_s").prop('checked', data[15] ).trigger('change');
						$("#result").empty();
						$(".loading").empty();
					}else{
						datos.VETipo.value = '';
						datos.VEMarca.value = '';
						datos.VEModelo.value = '';
						datos.VEColor.value = '';
						$("#result").empty();
						$("#result").append(data[0]);	
						$(".loading").empty();
					}
					
				}
			});
		});//----->fin
		
		$('.ojo').click(function(){
			$('#ajax').load('<?php echo base_url("salida/visto"); ?>', { "SALClave":$(this).attr('value') } );
			$(this).attr('class','text-info');
			$(this).attr('title','Visto');
			$(this).find("i").attr('class','fa fa-eye fa-2x');0
		});
				
		$('.datos_carga').click(function(){
			if (this.checked) {
				$(".div_carga").attr("style","display: block;");
			}
			else{
				$(".div_carga").attr("style","display: none;");
			}
		});
		
		$("#DDLitros, #DDPrecio").keyup( function(){
			var total = $("#DDLitros").val() * $("#DDPrecio").val();
			total = total.toFixed(2);
			$("#DDCosto").val( total );
		});
		
		$(".<?php echo $SALClave; ?>").click();
		
	});
</script>
<style type="text/css">
input[type='checkbox']{
	-webkit-appearance: checkbox;
}
.ojo {
	cursor: pointer; 
}
</style>