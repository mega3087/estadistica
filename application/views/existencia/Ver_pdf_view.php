<h2 class="text-left" ><b>MATRICULA DEL CENTRO EDUCATIVO: <?= $plantel[0]['CPLNombre']; ?></b></h2>
<h2 class="text-left" ><b>CICLO ESCOLAR: <?= $periodo; ?></b></h2>

<?php 
//total general (TOTAL MATRICULA)
$TotalGG=0;
$TotalGH=0;
$TotalGM=0;
$TotalGT=0;	
$TotalTFT=0;

//total por semestre 1
$TotalSM1=0;
$TotalSF1=0;
$TotalST1=0;	
$TotalSTT1=0;

//total por semestre 2
$TotalSM2=0;
$TotalSF2=0;
$TotalST2=0;	
$TotalSTT2=0;

// totales por TURNO MATUTINO
$TotalTGM=0;
$TotalTHM=0;
$TotalTMM=0;
$TotalTTM=0;
$TotalTFM=0;
// totales por TURNO VESPER
$TotalTGV=0;
$TotalTHV=0;
$TotalTMV=0;
$TotalTTV=0;
$TotalTFV=0;

foreach ($total as $k => $list) { 
	
	//totales por semestre
	$TotalGM=0;
	$TotalHM=0;
	$TotalMM=0;
	$TotalTM=0;	
	
	// total por formacion
	$TotalFGM=0;
	$TotalFHM=0;
	$TotalFMM=0;
	$TotalFTM=0;
	if (count($list['gruposMat']) != 0) { ?>
	<table style="width:100%;">
		<thead>
			<tr>
				<th colspan="5" class="text-center"><b><?php echo $list['GRSemestre']; ?>° SEMESTRE</b></th>
			</tr>
			<tr>
				<th colspan="5" class="text-center" style="background-color: #E9F7EF ;">MATUTINO</th>
			</tr>
			<tr>
				<th>GRUPO</th>
				<th>HOMBRES</th>
				<th>MUJERES</th>
				<th>TOTAL</th>
				<th style='width: 300px;'>FORMACIÓN PARA EL TRABAJO</th>                        
			</tr>

			<tbody>
				<?php 
				$totalAlMat = 0;
				
				foreach ($list['gruposMat'] as $m => $mat) { ?>
					<tr>
                            <td class="text-center"><?= $mat['GRGrupo']; ?></td>
                            <td class="text-center"><?= $mat['GRMasculino']; ?></td>
                            <td class="text-center"><?= $mat['GRFemenino']; ?></td>
                            <td class="text-center"><?= $mat['GRCupo'];
							
								$TotalGM=$TotalGM+1;
								$TotalHM=$TotalHM+$mat['GRMasculino'];
								$TotalMM=$TotalMM+$mat['GRFemenino'];
								$TotalTM=$TotalTM+$mat['GRCupo'];
								
								if ($list['GRSemestre'] > 2)
								$TotalFM=$m+1;
								else
								$TotalFM='- - -';

								if ($list['GRSemestre'] == 1 || ['GRSemestre'] == 2){
								$TotalFM=$m+1;

							}
								//$TotalTGM=$TotalTGM+$TotalGM;//guarda el total grupos por turno
								//$TotalGG=$TotalGG+$TotalGM; //guarda el total grupos general
								
							?></td>
							

                            <td class="text-center" style='width: 300px;'>
                                <?php if ($mat['FNombre'] == '') {
                                    echo '- - -';
                                } else {
                                    echo $mat['FNombre'];
                                }
                                ?>                                
                            </td>   
                        </tr>
				<?php } ?>
					<tr>
						<td class="text-center"><b><?= $TotalGM; $TotalTGM=$TotalTGM+$TotalGM;?></b></td>
						<td class="text-center"><b><?= $TotalHM; $TotalTHM=$TotalTHM+$TotalHM;?></b></td>
						<td class="text-center"><b><?= $TotalMM; $TotalTMM=$TotalTMM+$TotalMM;?></b></td>
						<td class="text-center"><b><?= $TotalTM; $TotalTTM=$TotalTTM+$TotalTM;?></b></td>
						<td class="text-center"><b><?= $TotalFM; $TotalTFM=$TotalTFM+$TotalFM;?></b></td>
					</tr>
					
			</tbody>
		</thead>
	</table>      
<br><br>
<?php } ?>  


<?php 
	$TotalGV=0;
	$TotalHV=0;
	$TotalMV=0;
	$TotalTV=0;	

if (count($list['gruposVes']) != 0) {	?>
		<table style="width:100%;">
			<thead>
				<tr>
					<th colspan="5" class="text-center"><b><?php echo $list['GRSemestre']; ?>° SEMESTRE</b></th>
				</tr>
				<tr>
					<th colspan="5" class="text-center" style="background-color: #FDEDEC ;">VESPERTINO</th>
				</tr>
				<tr>
					<th>GRUPO</th>
					<th>HOMBRES</th>
					<th>MUJERES</th>
					<th>TOTAL</th>
					<th style='width: 300px;'>FORMACIÓN PARA EL TRABAJO</th>                        
				</tr>
				<tbody>
					<?php 
                    $totalAlVes = 0;
					
                    foreach ($list['gruposVes'] as $v => $vest) { 
                        
						$TotalGV = $TotalGV + 1;
						$TotalHV = $TotalHV + $vest['GRMasculino'];
						$TotalMV = $TotalMV + $vest['GRFemenino'];
						$TotalTV = $TotalTV + $vest['GRCupo'];

						if ($list['GRSemestre'] > 2)
						$TotalFV = $v+1;
						else
						$TotalFV='- - -';

						$TotalGG=$TotalGG+$TotalGV; //guarda el total grupos general

						?>
                        <tr>
                            <td class="text-center"><?= $vest['GRGrupo']; ?></td>
                            <td class="text-center"><?= $vest['GRMasculino']; ?></td>
                            <td class="text-center"><?= $vest['GRFemenino']; ?></td>
                            <td class="text-center"><?= $vest['GRCupo']; ?></td>
                            <td class="text-center" style='width: 300px;'>
                                <?php if ($vest['FNombre'] == '') {
                                    echo '- - -';
                                } else {
                                    echo $vest['FNombre'];
                                }
                                ?>                                
                            </td>   
                        </tr>
                    <?php } ?>
					<tr>
						<td class="text-center"><b><?= $TotalGV; $TotalTGV=$TotalTGV+$TotalGV;?></b></td>
						<td class="text-center"><b><?= $TotalHV; $TotalTHV=$TotalTHV+$TotalHV;?></b></td>
						<td class="text-center"><b><?= $TotalMV; $TotalTMV=$TotalTMV+$TotalMV?></b></td>
						<td class="text-center"><b><?= $TotalTV; $TotalTTV=$TotalTTV+$TotalTV;?></b></td>
						<td class="text-center"><b><?= $TotalFV; $TotalTFV=$TotalTFV+$TotalFV;?></b></td>
					</tr>
				</tbody>
			</thead>
		</table>
		<br><br>
	<?php } ?>
<?php } ?>	
<br><br>
<table style="width:100%;">
	<thead>
		<tr>
			<th colspan="5" class="text-center" style="background-color:#FEF9E7;">TOTAL DE SEMESTRE</th>
		</tr>
		<tr>
			<th></th>
			<th>GRUPOS</th>
			<th>HOMBRES</th>
			<th>MUJERES</th>
			<th>TOTAL</th>				
		</tr>
		<tbody>
		<?php foreach ($total as $s => $sem) { 
			foreach ($sem['sumas'] as $y => $valor) {
				?>
			<tr>
				<td class="text-center"><b><?php echo $sem['GRSemestre']; ?>° SEMESTRE</b></td>
				<td class="text-center"><b><?php echo $sem['noGrupos']; ?></b></td>
				<td class="text-center"><b><?php echo $valor['tothom']; ?></b></td>
				<td class="text-center"><b><?php echo $valor['totfem']; ?></b></td>
				<td class="text-center"><b><?= $valor['tothom'] + $valor['totfem'] ?></b></td>
			</tr>
		<?php } }?> 
			<!--<tr>
				<td class="text-center"><b>TOTAL</b>
				<td class="text-center"><b><?= $TotalSM=$TotalSM+$TotalTHM+$TotalTHV; ?></b></td>
				<td class="text-center"><b><?= $TotalHM=$TotalTHV+$TotalTHM; ?></b></td>
				<td class="text-center"><b><?= $TotalMM=$TotalTMV+$TotalTMM; ?></b></td>
				<td class="text-center"><b><?= $TotalMM=$TotalTMV+$TotalTMM; ?></b></td>
			</tr>-->
		</tbody>
	</thead>
</table>

<br><br>

<table style="width:100%;">
	<thead>
		<tr>
			<th colspan="6" class="text-center" style="background-color:#FEF9E7;">TOTAL MATRICULA</th>
		</tr>
		<tr><th></th>
			<th>GRUPO</th>
			<th>HOMBRES</th>
			<th>MUJERES</th>
			<th>TOTAL</th>
			<th style='width: 300px;'>GRUPOS CON FORMACIÓN PARA EL TRABAJO</th>                        
		</tr>
		<tbody>
				<tr>
					<td class="text-center"><b>MATUTINO</b></td>	
					<td class="text-center"><b><?= $TotalTGM; ?></b></td>
					<td class="text-center"><b><?= $TotalTHM; ?></b></td>
					<td class="text-center"><b><?= $TotalTMM; ?></b></td>
					<td class="text-center"><b><?= $TotalTTM; ?></b></td>
					<td class="text-center"><b><?= $TotalTFM; ?></b></td>
				</tr>
				<tr>
					<td class="text-center"><b>VESPERTINO</b></td>
					<td class="text-center"><b><?= $TotalTGV; ?></b></td>
					<td class="text-center"><b><?= $TotalTHV; ?></b></td>
					<td class="text-center"><b><?= $TotalTMV; ?></b></td>
					<td class="text-center"><b><?= $TotalTTV; ?></b></td>
					<td class="text-center"><b><?= $TotalTFV; ?></b></td>
				</tr>
				<tr>n
					<td class="text-center"><b>TOTALES</b></td>
					<td class="text-center"><b><?= $TotalGG = $TotalTGV+$TotalTGM; ?></b></td>
					<td class="text-center"><b><?= $TotalHM=$TotalTHV+$TotalTHM; ?></b></td>
					<td class="text-center"><b><?= $TotalMM=$TotalTMV+$TotalTMM; ?></b></td>
					<td class="text-center"><b><?= $TotalTM=$TotalTTV+$TotalTTM; ?></b></td>
					<td class="text-center"><b><?= $TotalTFT=$TotalTFV+$TotalTFM; ?></b></td>
				</tr>
		</tbody>
	</thead>
</table>
<br><br><br>

<div style="width: 33%; float:left"><h2 class="text-center" ><b>Validación</b></h2><br><br>
<h2 class="text-center" ><b>________________________</b></h2>

<h2 class="text-center" ><b>Nombre y firma del Director <br>
						    del Plantel o Responsable <br> del CEMSAD </b></h2>
</div>

<div style="width: 33%; float:left"><h2 class="text-center" ><b>Elaboró</b></h2><br><br>
<h2 class="text-center" ><b>________________________</b></h2>

<h2 class="text-center" ><b>Nombre y firma del  <br>
							Control Escolar </b></h2>
</div>

<div style="width: 33%; float:left"><h2 class="text-center" ><b>Sello del Espacio Educativo</b></h2><br><br>
<h2 class="text-center" ><b>________________________</b></h2>

<?php $fecha=date("d / m / Y");?>
<h2 class="text-center" ><b>Fecha de solicitud :<?php echo $fecha;?> </b></h2>
	
</div>


	

<style type="text/css">
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color: #333;
}

.no-border { 
    border:none !important; 
     
}

.border-bottom { border-bottom: 1px solid black; border-collapse: collapse;}
.border-top { border-top: 1px solid black; border-collapse: collapse;}

.no-border-left     { border-left: hidden !important; }
.no-border-right    { border-right: hidden !important; }
.no-border-top      { border-top: hidden !important; }
.no-border-bottom   { border-bottom: hidden !important; }

</style>

