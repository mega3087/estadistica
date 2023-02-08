<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
		
			<h3>Plantel <?= nvl($varios['CPLNombre'])?>  
			<?php foreach($periodo as $key => $list ){ ?>
			   Semestre: <?=$list['PAnio']?> - <?= $list['PPeriodo']?><?php } ?></h3>
		</div>
	</div>
</div>


<div class="row">




	<div class="col-lg-12">

		
		<div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-success float-right">30 Sep</span>
                    </div>
                    <h5>&nbsp;Grupos</h5>
                </div>
				<div class="ibox-content">
                    <center><h1 class="no-margins"><?= nvl($mgrupos[0]['Grupos'])?> </h1></center>
                    <div class="stat-percent font-bold text-success"><a href="<?=base_url("grupos/agregarGrupos")?>"><i class="fa fa-search-plus"></i>Ver</a></div>
                        <small>&nbsp;</small>
                    </div>
                </div>
            </div>

		<div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-success float-right">30 Sep</span>
                    </div>
                    <h5>&nbsp;Matrícula Total</h5>
                </div>
				<div class="ibox-content">
					<h3 class="no-margins">Hombres: <?= nvl($thombres[0]['Hombres'])?></h3>
					<h3 class="no-margins">Mujeres: <?= nvl($tmujeres[0]['Mujeres'])?></h3>
                    <div class="stat-percent font-bold text-success"><a href="<?=base_url("existencia")?>"><i class="fa fa-search-plus"></i>Ver</a></div>
                        <small>&nbsp;</small>
                    </div>
                </div>
            </div>

		<div class="ibox">
			<div class="ibox-content">    
				<div class="row">
					<div class="col-lg-12">
						<div class="m-b-md">
							<a data-toggle="modal" href="#modal_datos" 
								data-dgiddatosgenerales_skip="<?php echo $this->encrypt->encode($varios['DGIdDatosGenerales']); ?>" 
								data-dgidplantel="<?php echo $varios['DGIdPlantel']; ?>"
								data-dgfechacreacion="<?php echo $varios['DGFechaCreacion']; ?>"
								data-dgcct="<?php echo $varios['DGCCT']; ?>"
								data-dglatitud="<?php echo $varios['DGLatitud']; ?>"
								data-dglongitud="<?php echo $varios['DGLongitud']; ?>"
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</a>
							
							<h3>Datos Generales</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Fecha de Creación del Centro Educativo (Inicio de Operaciones):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['DGFechaCreacion'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>CCT:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['DGCCT'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Nombre del Director o Responsable de CEMSAD (Histórico):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("director")?>"><i class="fa fa-search-plus"></i> <?php echo $varios['DIFin']?$varios['DIFin']:$varios['DIInicio']; ?></a></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Georeferenciación (Latitud):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['DGLatitud'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Georeferenciación (longitud):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['DGLongitud'])?></dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
		
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="m-b-md">
							<a data-toggle="modal" href="#modal_infraestructura" 
								data-infidinfraestructura_skip="<?php echo $this->encrypt->encode($varios['InfIdInfraestructura']); ?>"
								data-infinstalaciones="<?php echo $varios['InfInstalaciones']; ?>"
								data-infsuperficieterreno="<?php echo $varios['InfSuperficieTerreno']; ?>"
								data-infespacios1="<?php echo $varios['InfEspacios1']; ?>"
								data-infespacios2="<?php echo $varios['InfEspacios2']; ?>"
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</a>
							<h3>Infraestructura y Proyectos de Inversión</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Situación del Terreno (juridico):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("infraestructura/terreno")?>"><i class="fa fa-search-plus"></i> <?=nvl($varios['TSituacion'])?></a></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Situación de las instalaciones (propias o provisionales):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['InfInstalaciones'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Superficie del Terreno en metros cuadrados:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=number_format(@$varios['InfSuperficieTerreno'],1)?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Programa de Infraestructura (Montos):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("infraestructura/programa")?>"><i class="fa fa-search-plus"></i> <?=number_format(@$varios['SumMonto'],2)?></a></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Espacios de Infraestructura:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("infraestructura/espacios")?>"><i class="fa fa-search-plus"></i>Espacios</a></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Aulas, laboratorios, talleres:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("infraestructura/aulas")?>"><i class="fa fa-search-plus"></i> Aulas</a></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Espacios Equipados como Laboratorios de Idiomas:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['InfEspacios1'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Espacios Equipados como Talleres, Laboratorios  o Centros de Cómputo:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['InfEspacios2'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Equipos de Cómputo en operación según su uso:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("infraestructura/computo")?>"><i class="fa fa-search-plus"></i> <?=nvl($varios['COTotal'])?></a></dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
		
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="m-b-md">
							<a data-toggle="modal" href="#modal_indicadores" 
								data-iidindicadores_skip="<?php echo $this->encrypt->encode($varios['IIdIndicadores']); ?>" 
								data-iturno="<?php echo $varios['ITurno']; ?>"
								data-igrupos="<?php echo $varios['IGrupos']; ?>"
								data-icobertura="<?php echo $varios['ICobertura']; ?>"
								
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</a>
							<h3>Indicadores y Estadísticas Educativas</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Escuelas - Turno:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['ITurno'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Número de Grupos:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['IGrupos'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Oferta Educativa:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/oferta")?>"><i class="fa fa-search-plus"></i> Oferta</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Matrícula de Nuevo Ingreso a Primer Semestre:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/matricula")?>"><i class="fa fa-search-plus"></i> Matrícula</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Índice de Atención a la Demanda (Absorción):</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/indice")?>"><i class="fa fa-search-plus"></i> Índice</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Cobertura:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/cobertura")?>"><i class="fa fa-search-plus"></i> Cobertura</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Matrícula de Inicio de Cursos:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/cursos")?>"><i class="fa fa-search-plus"></i> Inicio de Cursos</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Aprobación Ordinaria:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/aprobacion")?>"><i class="fa fa-search-plus"></i> Aprobación</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Eficiencia Terminal:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/eficiencia")?>"><i class="fa fa-search-plus"></i> Eficiencia</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Abandono Escolar:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/abandono")?>"><i class="fa fa-search-plus"></i> Abandono</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Egresados e Inscritos en Nivel Superior:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/egresados")?>"><i class="fa fa-search-plus"></i> Egresados</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Planea:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/planea")?>"><i class="fa fa-search-plus"></i> Planea</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Costo por Alumno:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/costo")?>"><i class="fa fa-search-plus"></i> Costo por alumno</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Proyecciones de Matrícula:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><a href="<?=base_url("indicadores/proyecciones")?>"><i class="fa fa-search-plus"></i> Proyecciones</a></dd>
							</div>
							<div class="col-sm-4 text-left">
								<dd class="mb-1"><span class="bar">5,3,9,6,5,9,7,3,5,2</span></dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
		


		

		
		
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="m-b-md">
							<div class="m-b-md">
							
							
							<a data-toggle="modal" href="#modal_personal" 
								data-pidpersonal_skip="<?php echo $this->encrypt->encode($varios['PIdPersonal']); ?>" 
								data-pperiodo="<?php echo $varios['PPeriodo']; ?>"
								data-pdirectivos="<?php echo $varios['PDirectivos']; ?>"
								data-padministrativos="<?php echo $varios['PAdministrativos']; ?>"
								data-pdocentes="<?php echo $varios['PDocentes']; ?>"
								class="btn btn-outline btn-info btn-xs pull-right open">
								<i class="fa fa-pencil"></i> Editar
							</a>
							<h3>Personal</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Periodo:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['PPeriodo'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Directivos:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['PDirectivos'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Administrativos:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['PAdministrativos'])?></dd>
							</div>
						</dl>
						<dl class="row mb-0">
							<div class="col-sm-5 text-right">
								<dt>Docentes:</dt>
							</div>
							<div class="col-sm-3 text-left">
								<dd class="mb-1"><?=nvl($varios['PDocentes'])?></dd>
							</div>
						</dl>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</div>
	
<!-- ******************* Modal Datos Generales ********************* -->

<div class="modal inmodal" id="modal_datos" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Datos Generales</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('plantel/save_dg', array('name' => 'FormDG', 'id' => 'FormDG', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Fecha de Creación del Centro Educativo: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="DGFechaCreacion" name="DGFechaCreacion" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">CCT: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="DGCCT" name="DGCCT" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Georeferenciación (Latitud): <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="DGLatitud" name="DGLatitud" value="" maxlength='150' class="form-control lowercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Georeferenciación (longitud): <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="DGLongitud" name="DGLongitud" value="" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save_dg') ){ ?>
						<input type="hidden" id="DGIdDatosGenerales_skip" name="DGIdDatosGenerales_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal Datos Generales ********************* -->

<!-- ******************* Modal Infraestructura ********************* -->

<div class="modal inmodal" id="modal_infraestructura" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Infraestructura y Proyectos de Inversión</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('infraestructura/save_infraestructura', array('name' => 'FormInfraestructura', 'id' => 'FormInfraestructura', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Situación de las instalaciones: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="InfInstalaciones" name="InfInstalaciones" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Superficie del terreno en metros cuadrados: <em>*</em></label>
					<div class="col-lg-8">
						<input type="number" id="InfSuperficieTerreno" name="InfSuperficieTerreno" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Espacios equipados como laboratorios de idiomas: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="InfEspacios1" name="InfEspacios1" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label" for="">Espacios equipados como talleres, laboratorios o centros de cómputo: <em>*</em></label>
					<div class="col-lg-8">
						<input type="text" id="InfEspacios2" name="InfEspacios2" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'infraestructura','save_infraestructura') ){ ?>
						<input type="hidden" id="InfIdInfraestructura_skip" name="InfIdInfraestructura_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Modal Infraestructura ********************* -->

<!-- ******************* Modal Indicadores y Estadísticas Educativas ********************* -->

<div class="modal inmodal" id="modal_indicadores" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Indicadores y Estadísticas Educativas</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('indicadores/save_indicadores', array('name' => 'FormIndicadores', 'id' => 'FormIndicadores', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Escuela - Turno: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="ITurno" name="ITurno" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Número de Grupos: <em>*</em></label>
					<div class="col-lg-9">
						<input type="number" id="IGrupos" name="IGrupos" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'indicadores','save_indicadores') ){ ?>
						<input type="hidden" id="IIdIndicadores_skip" name="IIdIndicadores_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ******************* FIN Indicadores y Estadísticas Educativas ********************* -->

<!-- ******************* Modal Personal ********************* -->

<div class="modal inmodal" id="modal_personal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Personal</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('plantel/save_personal', array('name' => 'FormPersonal', 'id' => 'FormPersonal', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Periodo: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PPeriodo" name="PPeriodo" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Directivos: <em>*</em></label>
					<div class="col-lg-9">
						<input type="number" id="PDirectivos" name="PDirectivos" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Administrativos: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PAdministrativos" name="PAdministrativos" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Docentes: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="PDocentes" name="PDocentes" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div id="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save_personal') ){ ?>
						<input type="hidden" id="PIdPersonal_skip" name="PIdPersonal_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>



<!-- ******************* FIN Personal ********************* -->

<!-- ******************* Modal Evaluaciones ********************* -->

<div class="modal inmodal" id="modal_evaluaciones" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; Evaluaciones</h6>
			</div>
			<div class="modal-content">
				<?php echo form_open('plantel/save', array('name' => 'FormPlantel', 'id' => 'FormPlantel', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Índice de Satisfacción del Usuario:
 <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLNombre" name="CPLNombre" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Directivos: <em>*</em></label>
					<div class="col-lg-9">
						<input type="number" id="CPLCCT" name="CPLCCT" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Administrativos: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLCCT" name="CPLCCT" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Docentes: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="CPLCCT" name="CPLCCT" value="" maxlength='150' class="form-control uppercase" required />
					</div>
				</div>
				
				<div class="error"></div>
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'plantel','save') ){ ?>
						<input type="hidden" id="COIdComputo_skip" name="COIdComputo_skip" />
						<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Guardar</button>
						<?php } ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


<!-- ******************* FIN Evaluaciones ********************* -->

<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>
<!-- Peity -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/peity/jquery.peity.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/demo/peity-demo.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		/* Page-Level Scripts */
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			},
			dom: '<"html5buttons"B>lTfgitp',
			"lengthMenu": [ [20,50,100, -1], [20,50,100, "Todos"] ],
			buttons: [
			{extend: 'copy'},
			{extend: 'csv'},
			{extend: 'pdf'},
			{extend: 'print',
				customize: function (win){
					$(win.document.body).addClass('white-bg');
					$(win.document.body).css('font-size', '10px');
					$(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
				}
			}
			]
		});	

		$(document).on("click", ".open", function () {
			$(".modal-content #IIdIndicadores_skip").val( $(this).data('iidindicadores_skip') );
			$(".modal-content #ITurno").val( $(this).data('iturno') );
			$(".modal-content #IGrupos").val( $(this).data('igrupos') );
			$(".modal-content #ICobertura").val( $(this).data('icobertura') );
			$(".modal-content #DGIdDatosGenerales_skip").val( $(this).data('dgiddatosgenerales_skip') );
			$(".modal-content #DGFechaCreacion").val( $(this).data('dgfechacreacion') );
			$(".modal-content #DGCCT").val( $(this).data('dgcct') );
			$(".modal-content #DGLatitud").val( $(this).data('dglatitud') );
			$(".modal-content #DGLongitud").val( $(this).data('dglongitud') );
			$(".modal-content #InfIdInfraestructura_skip").val( $(this).data('infidinfraestructura_skip') );
			$(".modal-content #InfInstalaciones").val( $(this).data('infinstalaciones') );
			$(".modal-content #InfSuperficieTerreno").val( $(this).data('infsuperficieterreno') );
			$(".modal-content #InfEspacios1").val( $(this).data('infespacios1') );
			$(".modal-content #InfEspacios2").val( $(this).data('infespacios2') );
			$(".modal-content #PIdPersonal_skip").val( $(this).data('pidpersonal_skip') );
			$(".modal-content #PPeriodo").val( $(this).data('pperiodo') );
			$(".modal-content #PDirectivos").val( $(this).data('pdirectivos') );
			$(".modal-content #PAdministrativos").val( $(this).data('padministrativos') );
			$(".modal-content #PDocentes").val( $(this).data('pdocentes') );

		});

		$("#FormPlantel").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("plantel/save"); ?>",
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
		
			// ******************** Datos Generales ********************
			$("#FormDG").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("plantel/save_dg"); ?>",
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
			
		// ******************** Indicadores ********************
		$("#FormIndicadores").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("indicadores/save_indicadores"); ?>",
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
		
		// ******************** Infraestructura ********************
		$("#FormInfraestructura").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("infraestructura/save_infraestructura"); ?>",
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

		// ******************** Personal ********************
		$("#FormPersonal").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("plantel/save_personal"); ?>",
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
		
	});
</script>