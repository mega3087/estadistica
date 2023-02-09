
		<?php
			/**********************************
			Variables formación para el trabajo 
			34 = tercer y cuarto semestre
			56 = quinto y sexto semestre
			***********************************/
			$fom134 = 0; //Contabilidad
			$fom156 = 0; //Contabilidad
			$fom234 = 0; //Tecnologías de la Información
			$fom256 = 0; //Tecnologías de la Información
			$fom334 = 0; //Asistente de operaciones
			$fom356 = 0; //Asistente de operaciones
			$fom434 = 0; //Tramitación aduanal
			$fom456 = 0; //Tramitación aduanal
			$fom534 = 0; //Laboratorista químico
			$fom556 = 0; //Laboratorista químico
			$fom634 = 0; //Auxiliar de enfermería
			$fom656 = 0; //Auxiliar de enfermería
			$fom734 = 0; //Interpretación y traducción
			$fom756 = 0; //Interpretación y traducción
			$fom834 = 0; //Turismo
			$fom856 = 0; //Turismo
			$fom934 = 0; //Dibujo Arquitectónico
			$fom956 = 0; //Dibujo Arquitectónico
			//*********************************/

			/***********************************
			 Total de grupos por semestre y turno
			 **********************************/
			$TE12MG=0; //Grupos 1 y 2 Matutino
			$TE12VG=0; //Grupos 1 y 2 Vespertino
			$TE34MG=0; //Grupos 3 y 4 Matutino
			$TE34VG=0; //Grupos 3 y 4 Vespertino
			$TE56MG=0; //Grupos 5 y 6 Matutino
			$TE56VG=0; //Grupos 5 y 6 Vespertino
			
			
		?>
		<div>
			<h3>&nbsp;TURNO MATUTINO </h3>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example- dataTable" >
							<thead>
								<tr>
									<?php  if ($periodo == 'A' || $periodo == '1') { ?>
									<th colspan="5">2° Semestre</th>
									<th colspan="6">4° Semestre</th>
									<th colspan="6">6° Semestre</th>
									<?php } ?>
									
									<?php  if ($periodo == 'B' || $periodo == '2') { ?>
									<th colspan="5">1° Semestre</th>
									<th colspan="6">3° Semestre</th>
									<th colspan="6">5° Semestre</th>
									<?php } ?>
									
								</tr>
								<tr>
									
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>ACCIÓN</th>
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>Formación</th>
									<th>ACCIÓN</th>
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>Formación</th>
									<th>ACCIÓN</th>
								</tr>
							</thead>								
							<tbody>
								<?php
								$totalM1=0; 
								$totalF1=0; 
								$totalT1=0;

								$totalM2=0; 
								$totalF2=0; 
								$totalT2=0;

								$totalM3=0; 
								$totalF3=0; 
								$totalT3=0;	


								foreach($gruposm as $key => $list ){ ?>
								<tr>
							<?php if ($list['GRSemestre'] == 2 || $list['GRSemestre'] == 1) { 
									$totalM1=$totalM1+$list['GRMasculino']; 
									$totalF1=$totalF1+$list['GRFemenino']; 
									$totalT1=$totalT1+$list['GRCupo'];
									$semestre=$list['GRSemestre'];
								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE12MG=$TE12MG+1;  ?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRCupo'])?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
							<?php } else { 
							
							?>

							
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>
							
						
							<?php if ( $list['GRSemestre'] == 4  || $list['GRSemestre'] == 3) { 
								$totalM2=$totalM2+$list['GRMasculino']; 
								$totalF2=$totalF2+$list['GRFemenino']; 
								$totalT2=$totalT2+$list['GRCupo'];

								switch ($list['GRCClave']) {
									case 1:
										$fom134 = $fom134+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 2:
										$fom234 = $fom234+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 3:
										$fom334 = $fom334+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 4:
										$fom434 = $fom434+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 5:
										$fom534 = $fom534+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 6:
										$fom634 = $fom634+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 7:
										$fom734 = $fom734+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 8:
										$fom834 = $fom834+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 9:
										$fom934 = $fom934+$list['GRMasculino']+$list['GRFemenino'];
										break;
								}
								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE34MG=$TE34MG+1;  ?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRFemenino']) + nvl($list['GRMasculino']) ?></td>
								<td><?=nvl($list['FNombre'])?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
							<?php } else {?>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>


							<?php if ($list['GRSemestre'] == 6  || $list['GRSemestre'] == 5) {
								$totalM3=$totalM3+$list['GRMasculino']; 
								$totalF3=$totalF3+$list['GRFemenino']; 
								$totalT3=$totalT3+$list['GRCupo'];

								switch ($list['GRCClave']) {
									case 1:
										$fom156 = $fom156+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 2:
										$fom256 = $fom256+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 3:
										$fom356 = $fom356+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 4:
										$fom456 = $fom456+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 5:
										$fom556 = $fom556+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 6:
										$fom656 = $fom656+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 7:
										$fom756 = $fom756+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 8:
										$fom856 = $fom856+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 9:
										$fom956 = $fom956+$list['GRMasculino']+$list['GRFemenino'];
										break;
								}
								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE56MG=$TE56MG+1;  ?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRCupo']) ?></td>
								<td><?=nvl($list['FNombre']) ?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
							<?php } else {?>

								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>

							
								</tr>
								<?php } ?>
							

								<tr>
								<td>T O T A L</td>
								<td><?=$totalM1?></td>
								<td><?=$totalF1?></td>
								<td><?=$totalT1?></td>
								<td><??></td>
								<td>T O T A L</td>
								<td><?=$totalM2?></td>
								<td><?=$totalF2?></td>
								<td><?=$totalT2?></td>
								<td><??></td>
								<td><??></td>
								<td>T O T A L</td>
								<td><?=$totalM3?></td>
								<td><?=$totalF3?></td>
								<td><?=$totalT3?></td>
								<td><??></td>
								<td><??></td>
							</tr>		
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
		
				<div>
			<h3>&nbsp;TURNO VESPERTINO </h3>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example- dataTable" >
							<thead>
								<tr>
									<?php  if ($periodo == 'A' || $periodo == '1') { ?>
									<th colspan="5">2° Semestre</th>
									<th colspan="6">4° Semestre</th>
									<th colspan="6">6° Semestre</th>
									<?php } ?>
									
									<?php  if ($periodo == 'B' || $periodo == '2') { ?>
									<th colspan="5">1° Semestre</th>
									<th colspan="6">3° Semestre</th>
									<th colspan="6">5° Semestre</th>
									<?php } ?>
									
								</tr>
								<tr>
									
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>ACCIÓN</th>
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>FORMACIÓN</th>
									<th>ACCIÓN</th>
									<th>GRUPOS</th>
									<th>H.</th>
									<th>M.</th>
									<th>TOTAL</th>
									<th>FORMACIÓN</th>
									<th>ACCIÓN</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$totalM4=0; 
								$totalF4=0; 
								$totalT4=0;

								$totalM5=0; 
								$totalF5=0; 
								$totalT5=0;

								$totalM6=0; 
								$totalF6=0; 
								$totalT6=0;	

								
							
								 foreach($gruposv as $key => $list ){ ?>
							<tr>
							<?php if ($list['GRSemestre'] == 2  || $list['GRSemestre'] == 1 ) {
								$totalM4=$totalM4+$list['GRMasculino']; 
								$totalF4=$totalF4+$list['GRFemenino']; 
								$totalT4=$totalT4+$list['GRCupo'];

								

								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE12VG=$TE12VG + 1; ?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRFemenino']) + nvl($list['GRMasculino']) ?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
							<?php } else { 
							
							?>

								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>
							
						
							<?php if ( $list['GRSemestre'] == 4  || $list['GRSemestre'] == 3) {
								$totalM5=$totalM5+$list['GRMasculino']; 
								$totalF5=$totalF5+$list['GRFemenino']; 
								$totalT5=$totalT5+$list['GRCupo'];

								switch ($list['GRCClave']) {
									case 1:
										$fom156 = $fom156+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 2:
										$fom256 = $fom256+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 3:
										$fom356 = $fom356+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 4:
										$fom456 = $fom456+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 5:
										$fom556 = $fom556+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 6:
										$fom656 = $fom656+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 7:
										$fom756 = $fom756+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 8:
										$fom856 = $fom856+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 9:
										$fom956 = $fom956+$list['GRMasculino']+$list['GRFemenino'];
										break;
								}

								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE34VG=$TE34VG + 1;?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRFemenino']) + nvl($list['GRMasculino']) ?></td>
								<td><?=nvl($list['FNombre'])?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
							<?php } else {?>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>


							<?php if ($list['GRSemestre'] == 6  || $list['GRSemestre'] == 5) { 
								$totalM6=$totalM6+$list['GRMasculino']; 
								$totalF6=$totalF6+$list['GRFemenino']; 
								$totalT6=$totalT6+$list['GRCupo'];
								switch ($list['GRCClave']) {
									case 1:
										$fom156 = $fom156+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 2:
										$fom256 = $fom256+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 3:
										$fom356 = $fom356+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 4:
										$fom456 = $fom456+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 5:
										$fom556 = $fom556+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 6:
										$fom656 = $fom656+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 7:
										$fom756 = $fom756+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 8:
										$fom856 = $fom856+$list['GRMasculino']+$list['GRFemenino'];
										break;
									case 9:
										$fom956 = $fom956+$list['GRMasculino']+$list['GRFemenino'];
										break;
								}

								?>
								<td><?=$list['GRGrupo']?></td>
								<?php $TE56VG=$TE56VG+1; ?>
								<td><?=nvl($list['GRMasculino'])?></td>
								<td><?=nvl($list['GRFemenino'])?></td>
								<td><?=nvl($list['GRFemenino']) + nvl($list['GRMasculino']) ?></td>
								<td><?=nvl($list['FNombre']) ?></td>
								<td><button data-toggle="modal" href="#modal_existencia" 
									data-grclave="<?php echo $this->encrypt->encode($list['GRClave']); ?>" 
									data-grgrupo="<?php echo $list['GRGrupo']; ?>"
									data-grmasculino="<?php echo $list['GRMasculino']; ?>"
									data-grfemenino="<?php echo $list['GRFemenino']; ?>"
									data-grsemestre="<?php echo $list['GRSemestre']; ?>"
									data-grcclave="<?php echo $list['GRCClave']; ?>"
									class="btn btn-outline btn-info btn-xs pull-right open">
									<i class="fa fa-pencil"></i> Editar
								</button></td>
						
							<?php } else {?>

								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
								<td><??></td>
							
							<?php } ?>

							
								</tr>
								<?php } ?>
								
							<tr>
								<td>T O T A L</td>
								<td><?=$totalM4?></td>
								<td><?=$totalF4?></td>
								<td><?=$totalT4?></td>
								<td><??></td>
								<td>T O T A L</td>
								<td><?=$totalM5?></td>
								<td><?=$totalF5?></td>
								<td><?=$totalT5?></td>
								<td><??></td>
								<td><??></td>
								<td>T O T A L</td>
								<td><?=$totalM6?></td>
								<td><?=$totalF6?></td>
								<td><?=$totalT6?></td>
								<td><??></td>
								<td><??></td>
							</tr>		
							</tbody>
						</table>

						<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<?php if( is_permitido(null,'existencia','save_totales') ){ ?>
							
							<?php echo form_open('existencia/save_totales', array('name' => 'Formtotales', 'id' => 'Formtotales', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
							<?php	

						//Variables formacion para el trabajo
						$TEF1Total=$fom134 + $fom156;
						$TEF2Total=$fom234 + $fom256;
						$TEF3Total=$fom334 + $fom356;
						$TEF4Total=$fom434 + $fom456;
						$TEF5Total=$fom534 + $fom556;
						$TEF6Total=$fom634 + $fom656;
						$TEF7Total=$fom734 + $fom756;
						$TEF8Total=$fom834 + $fom856;
						$TEF9Total=$fom934 + $fom956;	

						$TEPeriodo = $periodo;




						?>

						<input type="hidden" id="TEPeriodo" name="TEPeriodo" value='<?php echo $TEPeriodo; ?>'/>
						<!-- Totales Contabilidad -->		
						<input type="hidden" id="TEF134" name="TEF134" value='<?php echo $fom134; ?>'/>
						<input type="hidden" id="TEF156" name="TEF156" value='<?php echo $fom156; ?>'/>
						<input type="hidden" id="TEF1Total" name="TEF1Total" value='<?php echo $TEF1Total; ?>'/>
						
						<!-- Totales Tecnologías de la información -->
						<input type="hidden" id="TEF234" name="TEF234" value='<?php echo $fom234; ?>'/>
						<input type="hidden" id="TEF256" name="TEF256" value='<?php echo $fom256; ?>'/>
						<input type="hidden" id="TEF2Total" name="TEF2Total" value='<?php echo $TEF2Total; ?>'/>	

						<!-- Totales Asistente de operaciones -->
						<input type="hidden" id="TEF334" name="TEF334" value='<?php echo $fom334; ?>'/>
						<input type="hidden" id="TEF356" name="TEF356" value='<?php echo $fom356; ?>'/>
						<input type="hidden" id="TEF3Total" name="TEF3Total" value='<?php echo $TEF3Total; ?>'/>


						<!-- Totales Tramitación aduanal -->
						<input type="hidden" id="TEF434" name="TEF434" value='<?php echo $fom434; ?>'/>
						<input type="hidden" id="TEF456" name="TEF456" value='<?php echo $fom456; ?>'/>
						<input type="hidden" id="TEF4Total" name="TEF4Total" value='<?php echo $TEF4Total; ?>'/>


						<!-- Totales Laboratorista químico -->
						<input type="hidden" id="TEF534" name="TEF534" value='<?php echo $fom534; ?>'/>
						<input type="hidden" id="TEF556" name="TEF556" value='<?php echo $fom556; ?>'/>
						<input type="hidden" id="TEF5Total" name="TEF5Total" value='<?php echo $TEF5Total; ?>'/>


						<!-- Totales Auxiliar de enfermería -->
						<input type="hidden" id="TEF634" name="TEF634" value='<?php echo $fom634; ?>'/>
						<input type="hidden" id="TEF656" name="TEF656" value='<?php echo $fom656; ?>'/>
						<input type="hidden" id="TEF6Total" name="TEF6Total" value='<?php echo $TEF6Total; ?>'/>

						<!-- Totales Interpretación y traducción del idioma ingles -->
						<input type="hidden" id="TEF734" name="TEF734" value='<?php echo $fom734; ?>'/>
						<input type="hidden" id="TEF756" name="TEF756" value='<?php echo $fom756; ?>'/>
						<input type="hidden" id="TEF7Total" name="TEF7Total" value='<?php echo $TEF7Total; ?>'/>

						<!-- Totales Turismo -->
						<input type="hidden" id="TEF834" name="TEF834" value='<?php echo $fom834; ?>'/>
						<input type="hidden" id="TEF856" name="TEF856" value='<?php echo $fom856; ?>'/>
						<input type="hidden" id="TEF8Total" name="TEF8Total" value='<?php echo $TEF8Total; ?>'/>

						<!-- Totales Dibujo arquitectónico -->
						<input type="hidden" id="TEF934" name="TEF934" value='<?php echo $fom934; ?>'/>
						<input type="hidden" id="TEF956" name="TEF956" value='<?php echo $fom956; ?>'/>
						<input type="hidden" id="TEF9Total" name="TEF9Total" value='<?php echo $TEF9Total; ?>'/>



						<!-- Totales 1 y 2 cantidad de alumnos y grupos Matutino -->
						<input type="hidden" id="TE12MH" name="TE12MH" value='<?php echo $totalM1; ?>'/>
						<input type="hidden" id="TE12MM" name="TE12MM" value='<?php echo $totalF1; ?>'/>
						<input type="hidden" id="TE12MTotal" name="TE12MTotal" value='<?php echo $totalT1; ?>'/>
						<input type="hidden" id="TE12MG" name="TE12MG" value='<?php echo $TE12MG; ?>'/>

						<!-- Totales 1 y 2 cantidad de alumnos y grupos Vespertino -->
						<input type="hidden" id="TE12VH" name="TE12VH" value='<?php echo $totalM4; ?>'/>
						<input type="hidden" id="TE12VM" name="TE12VM" value='<?php echo $totalF4; ?>'/>
						<input type="hidden" id="TE12VTotal" name="TE12VTotal" value='<?php echo $totalT4; ?>'/>
						<input type="hidden" id="TE12VG" name="TE12VG" value='<?php echo $TE12VG; ?>'/>

						<!-- Totales 3 y 4 cantidad de alumnos y grupos Matutino -->
						<input type="hidden" id="TE34MH" name="TE34MH" value='<?php echo $totalM2; ?>'/>
						<input type="hidden" id="TE34MM" name="TE34MM" value='<?php echo $totalF2; ?>'/>
						<input type="hidden" id="TE34MTotal" name="TE34MTotal" value='<?php echo $totalT2; ?>'/>
						<input type="hidden" id="TE34MG" name="TE34MG" value='<?php echo $TE34MG; ?>'/>

						<!-- Totales 3 y 4 cantidad de alumnos y grupos Vespertino -->
						<input type="hidden" id="TE34VH" name="TE34VH" value='<?php echo $totalM5; ?>'/>
						<input type="hidden" id="TE34VM" name="TE34VM" value='<?php echo $totalF5; ?>'/>
						<input type="hidden" id="TE34VTotal" name="TE34VTotal" value='<?php echo $totalT5; ?>'/>
						<input type="hidden" id="TE34VG" name="TE34VG" value='<?php echo $TE34VG; ?>'/>

						<!-- Totales 5 y 6 cantidad de alumnos y grupos Matutino -->
						<input type="hidden" id="TE56MH" name="TE56MH" value='<?php echo $totalM3; ?>'/>
						<input type="hidden" id="TE56MM" name="TE56MM" value='<?php echo $totalF3; ?>'/>
						<input type="hidden" id="TE56MTotal" name="TE56MTotal" value='<?php echo $totalT3; ?>'/>
						<input type="hidden" id="TE56MG" name="TE56MG" value='<?php echo $TE56MG; ?>'/>

						<!-- Totales 5 y 6 cantidad de alumnos y grupos Vespertino -->
						<input type="hidden" id="TE56VH" name="TE56VH" value='<?php echo $totalM6; ?>'/>
						<input type="hidden" id="TE56VM" name="TE56VM" value='<?php echo $totalF6; ?>'/>
						<input type="hidden" id="TE56VTotal" name="TE56VTotal" value='<?php echo $totalT6; ?>'/>
						<input type="hidden" id="TE56VG" name="TE56VG" value='<?php echo $TE56VG; ?>'/>	
						
	
						<?php echo form_close(); ?>
						<?php if ( $entrega == 0) {?>
						<div  class="btn-group">
							<button type="submit"  class="btn btn-danger pull-right final float-left"> <i class="fa fa-send"></i> Finalizar</button>
						</div>
						<?php } ?>
						<?php } ?>
					</div>
			
					


				</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>