<div class="container page_break page3"><br><br><br><br><br>
  <table class="table-100">
    <tr>
      <td class="table-70" style="border-radius: 10px; border:1pt solid #9c9c9c !important;">
        <table class="table-100">
          <tr><td colspan="6" class="text-center no-border"><br>DATOS DE IDENTIFICACIÓN</td></tr>
          <tr>
            <td class="text-left table-100 no-border"><br><label>Clave del Centro de Trabajo:</label></td>
            <td class="table-100 no-border" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b><?= $planteles['CPLCCT']?></b></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="text-right table-70 no-border"><br><label>Turno: </label></td>	
            <td class="table-50 no-border"><br>
              <label>Mat&nbsp;&nbsp;</label> <input type="checkbox" <?php if ($PlanEstudios['PETurnoPlantel'] == 1) { echo "checked"; } ?> > 
            </td>
            <td class="table-50 no-border"><br>
				<label>Vesp&nbsp;&nbsp;</label><input type="checkbox" <?php if ($PlanEstudios['PETurnoPlantel'] == 2) { echo "checked"; } ?>> 
			</td>
          </tr>
          <tr><td colspan="6" class="text-left no-border"><br><label>Nombre del Centro de Trabajo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b><?= $planteles['CPLNombre']?></b></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
          <tr><td colspan="6" class="text-left no-border"><br><label>Nombre de la Dependencia Normativa: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>COBAEM</b></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></td></tr>
        </table><br>
      </td>
      <td class="table-30" style="border-radius: 10px; border:1pt solid #9c9c9c !important;">
        <table class="table-100">
          <tr><td class="text-center table-100 no-border" colspan="5"><br>MODALIDADES Y OPCIONES EDUCATIVAS</td></tr>
        <tr>
          <td colspan="5" class="text-left no-border"><br><label>ESCOLARIZADA&nbsp;&nbsp;</label><input type="checkbox" checked></td>
        </tr>
        <tr>
          <td colspan="5" class="text-left no-border"><input type="checkbox" checked> <label>Presencial&nbsp;&nbsp;</label></td>
        </tr>
        <tr>
          <td colspan="5" class="text-left no-border"><input type="checkbox"> <label>Intensiva&nbsp;&nbsp;</label></td>
        </tr>
        </table><br></td>
    </tr>    
  </table><?=br(5)?>
  <p class="text-m text-justify"><b>IMPORTANTE:</b> La información estadística es una herramienta fundamental para la planeación y la toma acertada de decisiones. Los cuestionarios 911 son los medios para recolipar la información básica de educación media superior.</p>
  <p class="text-m text-justify">Los cuestionarios impresos son apoyos para contestar el cuestionario electrónico, o bien para que los utilicen las escuelas que manifiestan no estar en la posibilidad de contestar el cuestionario electrónico.</p>
  <p class="text-m text-justify"><b>Nota:</b> Los alumnos de PLANTELES DE EXTENSIÓN O ANEXOS deberán ser reportados en un centro independiente.</p>
</div>

<!--I.- CARACTERÍSTICAS DEL PLAN DE ESTUDIOS-->
<div class="container page_break page3">
<table class="table-100 no-border" style="border-radius: 10px;">
<tr>
  <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
</tr>
</table>
<h4 class="text-center"><br>I.- CARACTERÍSTICAS DEL PLAN DE ESTUDIOS</h4><br><br>
  <table class="table-100 no-border" style="border-radius: 10px;">
      <tr>
        <td class="text-left table-50 no-border"><br>1. Marque con una X el servicio educativo al que corresponde la matrícula.<br><br><br><br><br></td>
        <td class="text-left table-50 no-border">
          <label>Bachillerato General sin Formación para el Trabajo&nbsp;&nbsp;&nbsp; </label><input type="checkbox" />
          <label>Bachillerato General con Formación para el Trabajo&nbsp;&nbsp;&nbsp; </label><input type="checkbox" checked/>
          <br><br><br><br><br>
        </td>
      </tr>
      <br><br><br>
      <tr>
        <td class="text-left table-50 no-border">2. Fecha de creación o actualización del plan de estudios.<br><br><br><br><br></td>
        <td class="text-center table-50 no-border">
          <table class="table-100">
            <tr><td class="text-left table-30">Año</td><td class="text-left table-30">Mes</td><td class="text-left table-30">Día</td></tr>
            <tr><td class="text-left table-30"><b>2018</b></td><td class="text-left table-30"><b>07</b></td><td class="text-left table-30"><b>03</b></td></tr>
          </table><br><br><br><br><br>
        </td>
      </tr>
      <tr>
        <td class="text-left table-50 no-border">3. Escriba la duración del bachillerato y marque con una X la estructura del plan de estudios que le corresponde.<br><br><br></td>
        <td class="text-center table-50 no-border">
            <table class="table table-90">
              <thead>
                <tr><td class="no-border">Duración</td><th colspan="5" class="text-center">Estructura del Plan de Estudios</th></tr>
                  <tr>
                    <td class="text-center">6</td>    
                    <th>Años</th>
                    <th>Semestres</th>
                    <th>Cuatrimestres</th>
                    <th>Trimestres</th>
                    <th>Otros*</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td class="no-border">&nbsp;</td>
                    <td class="text-center no-border"><input type="checkbox"><label></label></td>
                    <td class="text-center no-border"><input type="checkbox"checked> <label></label></td>
                    <td class="text-center no-border"><input type="checkbox"><label></label></td>
                    <td class="text-center no-border"><input type="checkbox"><label></label></td>
                    <td class="text-center no-border"><input type="checkbox"><label></label></td>
                  </tr>
                  <tr>
                    <td class="text-left no-border" colspan="5" ><br><br>*Especifique:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </u></td>
                  </tr>										
              </tbody>
            </table><br><br><br><br><br>
        </td>
      </tr>
      <tr>
        <td class="text-left table-50 no-border">4. Escriba el número de créditos por cubrir.<br><br><br><br><br></td>
        <td class="text-left table-50 no-border">Total de Créditos: <b>332</b> <br><br><br><br><br></td>
      </tr>
      <tr>
        <td class="text-left table-50 no-border"></td>
        <td class="text-left table-50 no-border"><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?>
          <table>
						<tr>
							<td><b>CLAVE DEL CENTRO DE TRABAJO: </b></td>
							<td class="cdr-r"><?=$CPLCCT[0]?></td>
							<td class="cdr-r"><?=$CPLCCT[1]?></td>
							<td class="cdr-r"><?=$CPLCCT[2]?></td>
							<td class="cdr-r"><?=$CPLCCT[3]?></td>
							<td class="cdr-r"><?=$CPLCCT[4]?></td>
							<td class="cdr-r"><?=$CPLCCT[5]?></td>
							<td class="cdr-r"><?=$CPLCCT[6]?></td>
							<td class="cdr-r"><?=$CPLCCT[7]?></td>
							<td class="cdr-r"><?=$CPLCCT[8]?></td>
							<td class="cdr-r"><?=$CPLCCT[9]?></td>
						</tr>
					</table>
        </td>
      </tr>
  </table>
</div>

<div class="container page_break">
	<div class="page3">
		<table class="table-100">
			<tr>
				<td><b>Colegio de Bachilleres del Estado de México</b></td>
				<td class="text-right"><b>Intersemestral <br /><?=$periodoAnt[0]['PAnio']?> - <?=$periodoAnt[0]['PAnio']+1?></b></td>
			</tr>
		</table>
		<table border="0">
			<tr>
				<td class="text-justify">
					<b>II. EXISTENCIA DEL SEMESTRE <?=$periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</b>
					<p>
						<b>1.</b> Escriba por género y grado (1er, 3er y 5o semestre), el No.
						de alumnos <b>EXISTENTES</b> en el semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?> (Agosto <?=$periodoAnt[0]['PAnio']?>
						- Enero <?=$periodoAnt[0]['PAnio']+1?>). Los alumnos <b>EXISTENTES</b> son el número físico
						de estudiantes en aula al final del semestre y que por lo tanto
						presentaron exámenes hasta <b>EVALUACIÓN ORDINARIA</b>.
						Indique cuántos de ellos presentan alguna discapacidad,
						cuántos son extranjeros y cuántos son hablantes de alguna
						lengua indígena.
					</p>
				</td>
				<td>
					<table class="no-border">
						<tr>
							<td><b>Semestre</b></td>
							<td colspan="3" class="text-center">Hombres</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Mujeres</td>
							<td>&nbsp;</td>		
							<td colspan="4" class="text-center"><b>Total</b></td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Con discapacidad</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Extranjeros</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Hablantes de Lenguas Indígenas</td>
						</tr>
						<tr>
							<td><div class="grado">1o.</div><?php $EHombres1 = str_split(folio($existAprob['EHombres1'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombres1[0]?></td>
							<td class="cdr-r"><?=$EHombres1[1]?></td>
							<td class="cdr-r"><?=$EHombres1[2]?></td>
							<td><?php $EMujeres1 = str_split(folio($existAprob['EMujeres1'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeres1[0]?></td>
							<td class="cdr-r"><?=$EMujeres1[1]?></td>
							<td class="cdr-r"><?=$EMujeres1[2]?></td>
							<td><?php $ETotal1 = str_split(folio($existAprob['ETotal1'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotal1[0]?></td>
							<td class="cdr-r"><?=$ETotal1[1]?></td>
							<td class="cdr-r"><?=$ETotal1[2]?></td>
							<td class="cdr-r"><?=$ETotal1[3]?></td>
							<td><?php $EDiscapacidad1 = str_split(folio($existAprob['EDiscapacidad1'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidad1[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidad1[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidad1[2]?></td>
							<td><?php $EHablantes1 = str_split(folio($existAprob['EHablantes1'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantes1[0]?></td>
							<td class="cdr-r"><?=$EHablantes1[1]?></td>
							<td class="cdr-r"><?=$EHablantes1[2]?></td>
							<td><?php $EExtranjero1 = str_split(folio($existAprob['EExtranjero1'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjero1[0]?></td>
							<td class="cdr-r"><?=$EExtranjero1[1]?></td>
							<td class="cdr-r"><?=$EExtranjero1[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">3o.</div><?php $EHombres3 = str_split(folio($existAprob['EHombres3'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombres3[0]?></td>
							<td class="cdr-r"><?=$EHombres3[1]?></td>
							<td class="cdr-r"><?=$EHombres3[2]?></td>
							<td><?php $EMujeres3 = str_split(folio($existAprob['EMujeres3'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeres3[0]?></td>
							<td class="cdr-r"><?=$EMujeres3[1]?></td>
							<td class="cdr-r"><?=$EMujeres3[2]?></td>
							<td><?php $ETotal3 = str_split(folio($existAprob['ETotal3'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotal3[0]?></td>
							<td class="cdr-r"><?=$ETotal3[1]?></td>
							<td class="cdr-r"><?=$ETotal3[2]?></td>
							<td class="cdr-r"><?=$ETotal3[3]?></td>
							<td><?php $EDiscapacidad3 = str_split(folio($existAprob['EDiscapacidad3'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidad3[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidad3[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidad3[2]?></td>
							<td><?php $EHablantes3 = str_split(folio($existAprob['EHablantes3'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantes3[0]?></td>
							<td class="cdr-r"><?=$EHablantes3[1]?></td>
							<td class="cdr-r"><?=$EHablantes3[2]?></td>
							<td><?php $EExtranjero3 = str_split(folio($existAprob['EExtranjero3'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjero3[0]?></td>
							<td class="cdr-r"><?=$EExtranjero3[1]?></td>
							<td class="cdr-r"><?=$EExtranjero3[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">5o.</div><?php $EHombres5 = str_split(folio($existAprob['EHombres5'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombres5[0]?></td>
							<td class="cdr-r"><?=$EHombres5[1]?></td>
							<td class="cdr-r"><?=$EHombres5[2]?></td>
							<td><?php $EMujeres5 = str_split(folio($existAprob['EMujeres5'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeres5[0]?></td>
							<td class="cdr-r"><?=$EMujeres5[1]?></td>
							<td class="cdr-r"><?=$EMujeres5[2]?></td>
							<td><?php $ETotal5 = str_split(folio($existAprob['ETotal5'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotal5[0]?></td>
							<td class="cdr-r"><?=$ETotal5[1]?></td>
							<td class="cdr-r"><?=$ETotal5[2]?></td>
							<td class="cdr-r"><?=$ETotal5[3]?></td>
							<td><?php $EDiscapacidad5 = str_split(folio($existAprob['EDiscapacidad5'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidad5[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidad5[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidad5[2]?></td>
							<td><?php $EHablantes5 = str_split(folio($existAprob['EHablantes5'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantes5[0]?></td>
							<td class="cdr-r"><?=$EHablantes5[1]?></td>
							<td class="cdr-r"><?=$EHablantes5[2]?></td>
							<td><?php $EExtranjero5 = str_split(folio($existAprob['EExtranjero5'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjero5[0]?></td>
							<td class="cdr-r"><?=$EExtranjero5[1]?></td>
							<td class="cdr-r"><?=$EExtranjero5[2]?></td>
						</tr>
						<tr>
							<td><b>Total</b><?php $EHombresTotal = str_split(folio($existAprob['EHombresTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombresTotal[0]?></td>
							<td class="cdr-r"><?=$EHombresTotal[1]?></td>
							<td class="cdr-r"><?=$EHombresTotal[2]?></td>
							<td><?php $EMujeresTotal = str_split(folio($existAprob['EMujeresTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeresTotal[0]?></td>
							<td class="cdr-r"><?=$EMujeresTotal[1]?></td>
							<td class="cdr-r"><?=$EMujeresTotal[2]?></td>
							<td><?php $ETotalTotal = str_split(folio($existAprob['ETotalTotal'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotalTotal[0]?></td>
							<td class="cdr-r"><?=$ETotalTotal[1]?></td>
							<td class="cdr-r"><?=$ETotalTotal[2]?></td>
							<td class="cdr-r"><?=$ETotalTotal[3]?></td>
							<td><?php $EDiscapacidadTotal = str_split(folio($existAprob['EDiscapacidadTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidadTotal[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidadTotal[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidadTotal[2]?></td>
							<td><?php $EHablantesTotal = str_split(folio($existAprob['EHablantesTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantesTotal[0]?></td>
							<td class="cdr-r"><?=$EHablantesTotal[1]?></td>
							<td class="cdr-r"><?=$EHablantesTotal[2]?></td>
							<td><?php $EExtranjeroTotal = str_split(folio($existAprob['EExtranjeroTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjeroTotal[0]?></td>
							<td class="cdr-r"><?=$EExtranjeroTotal[1]?></td>
							<td class="cdr-r"><?=$EExtranjeroTotal[2]?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="text-justify">
					<b>APROBADOS DEL SEMESTRE <?=$periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?></b>
					<p>
						<b>2.</b> Escriba por género y grado (1er, 3er y 5o semestre), el No. de
						alumnos que de la <b>EXISTENCIA</b> reportada en la pregunta 1,
						<b>APROBARON</b> todas sus <b>MATERIAS</b> (Asignaturas) hasta
						<b>EVALUACIÓN ORDINARIA (semestre <?=$periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>)</b>. Indique
						cuántos de ellos presentan alguna discapacidad, cuántos son
						extranjeros y cuántos son hablantes de alguna lengua indígena.
					</p>
				</td>
				<td>
					<table class="no-border">
						<tr>
							<td><b>Semestre</b></td>
							<td colspan="3" class="text-center">Hombres</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Mujeres</td>
							<td>&nbsp;</td>		
							<td colspan="4" class="text-center"><b>Total</b></td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Con discapacidad</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Extranjeros</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Hablantes de Lenguas Indígenas</td>
						</tr>
						<tr>
							<td><div class="grado">1o.</div><?php $EHombresAp1 = str_split(folio($existAprob['EHombresAp1'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombresAp1[0]?></td>
							<td class="cdr-r"><?=$EHombresAp1[1]?></td>
							<td class="cdr-r"><?=$EHombresAp1[2]?></td>
							<td><?php $EMujeresAp1 = str_split(folio($existAprob['EMujeresAp1'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeresAp1[0]?></td>
							<td class="cdr-r"><?=$EMujeresAp1[1]?></td>
							<td class="cdr-r"><?=$EMujeresAp1[2]?></td>
							<td><?php $ETotalAp1 = str_split(folio($existAprob['ETotalAp1'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotalAp1[0]?></td>
							<td class="cdr-r"><?=$ETotalAp1[1]?></td>
							<td class="cdr-r"><?=$ETotalAp1[2]?></td>
							<td class="cdr-r"><?=$ETotalAp1[3]?></td>
							<td><?php $EDiscapacidadAp1 = str_split(folio($existAprob['EDiscapacidadAp1'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp1[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp1[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp1[2]?></td>
							<td><?php $EHablantesAp1 = str_split(folio($existAprob['EHablantesAp1'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantesAp1[0]?></td>
							<td class="cdr-r"><?=$EHablantesAp1[1]?></td>
							<td class="cdr-r"><?=$EHablantesAp1[2]?></td>
							<td><?php $EExtranjeroAp1 = str_split(folio($existAprob['EExtranjeroAp1'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjeroAp1[0]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp1[1]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp1[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">3o.</div><?php $EHombresAp3 = str_split(folio($existAprob['EHombresAp3'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombresAp3[0]?></td>
							<td class="cdr-r"><?=$EHombresAp3[1]?></td>
							<td class="cdr-r"><?=$EHombresAp3[2]?></td>
							<td><?php $EMujeresAp3 = str_split(folio($existAprob['EMujeresAp3'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeresAp3[0]?></td>
							<td class="cdr-r"><?=$EMujeresAp3[1]?></td>
							<td class="cdr-r"><?=$EMujeresAp3[2]?></td>
							<td><?php $ETotalAp3 = str_split(folio($existAprob['ETotalAp3'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotalAp3[0]?></td>
							<td class="cdr-r"><?=$ETotalAp3[1]?></td>
							<td class="cdr-r"><?=$ETotalAp3[2]?></td>
							<td class="cdr-r"><?=$ETotalAp3[3]?></td>
							<td><?php $EDiscapacidadAp3 = str_split(folio($existAprob['EDiscapacidadAp3'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp3[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp3[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp3[2]?></td>
							<td><?php $EHablantesAp3 = str_split(folio($existAprob['EHablantesAp3'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantesAp3[0]?></td>
							<td class="cdr-r"><?=$EHablantesAp3[1]?></td>
							<td class="cdr-r"><?=$EHablantesAp3[2]?></td>
							<td><?php $EExtranjeroAp3 = str_split(folio($existAprob['EExtranjeroAp3'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjeroAp3[0]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp3[1]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp3[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">5o.</div><?php $EHombresAp5 = str_split(folio($existAprob['EHombresAp5'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombresAp5[0]?></td>
							<td class="cdr-r"><?=$EHombresAp5[1]?></td>
							<td class="cdr-r"><?=$EHombresAp5[2]?></td>
							<td><?php $EMujeresAp5 = str_split(folio($existAprob['EMujeresAp5'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeresAp5[0]?></td>
							<td class="cdr-r"><?=$EMujeresAp5[1]?></td>
							<td class="cdr-r"><?=$EMujeresAp5[2]?></td>
							<td><?php $ETotalAp5 = str_split(folio($existAprob['ETotalAp5'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotalAp5[0]?></td>
							<td class="cdr-r"><?=$ETotalAp5[1]?></td>
							<td class="cdr-r"><?=$ETotalAp5[2]?></td>
							<td class="cdr-r"><?=$ETotalAp5[3]?></td>
							<td><?php $EDiscapacidadAp5 = str_split(folio($existAprob['EDiscapacidadAp5'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp5[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp5[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidadAp5[2]?></td>
							<td><?php $EHablantesAp5 = str_split(folio($existAprob['EHablantesAp5'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantesAp5[0]?></td>
							<td class="cdr-r"><?=$EHablantesAp5[1]?></td>
							<td class="cdr-r"><?=$EHablantesAp5[2]?></td>
							<td><?php $EExtranjeroAp5 = str_split(folio($existAprob['EExtranjeroAp5'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjeroAp5[0]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp5[1]?></td>
							<td class="cdr-r"><?=$EExtranjeroAp5[2]?></td>
						</tr>
						<tr>
							<td><b>Total</b><?php $EHombresApTotal = str_split(folio($existAprob['EHombresApTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EHombresApTotal[0]?></td>
							<td class="cdr-r"><?=$EHombresApTotal[1]?></td>
							<td class="cdr-r"><?=$EHombresApTotal[2]?></td>
							<td><?php $EMujeresApTotal = str_split(folio($existAprob['EMujeresApTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EMujeresApTotal[0]?></td>
							<td class="cdr-r"><?=$EMujeresApTotal[1]?></td>
							<td class="cdr-r"><?=$EMujeresApTotal[2]?></td>
							<td><?php $ETotalApTotal = str_split(folio($existAprob['ETotalApTotal'],4,' '));?></td>
							<td class="cdr-r"><?=$ETotalApTotal[0]?></td>
							<td class="cdr-r"><?=$ETotalApTotal[1]?></td>
							<td class="cdr-r"><?=$ETotalApTotal[2]?></td>
							<td class="cdr-r"><?=$ETotalApTotal[3]?></td>
							<td><?php $EDiscapacidadApTotal = str_split(folio($existAprob['EDiscapacidadApTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EDiscapacidadApTotal[0]?></td>
							<td class="cdr-r"><?=$EDiscapacidadApTotal[1]?></td>
							<td class="cdr-r"><?=$EDiscapacidadApTotal[2]?></td>
							<td><?php $EHablantesApTotal = str_split(folio($existAprob['EHablantesApTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EHablantesApTotal[0]?></td>
							<td class="cdr-r"><?=$EHablantesApTotal[1]?></td>
							<td class="cdr-r"><?=$EHablantesApTotal[2]?></td>
							<td><?php $EExtranjeroApTotal = str_split(folio($existAprob['EExtranjeroApTotal'],3,' '));?></td>
							<td class="cdr-r"><?=$EExtranjeroApTotal[0]?></td>
							<td class="cdr-r"><?=$EExtranjeroApTotal[1]?></td>
							<td class="cdr-r"><?=$EExtranjeroApTotal[2]?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="text-justify">
					<b>REPROBADOS DEL SEMESTRE <?=$periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?></b>
					<p>
						<b>3.</b> Escriba por género y grado (1er, 3er y 5o semestre), el No.
						de alumnos que de la <b>EXISTENCIA</b> reportada en la pregunta 1,
						<b>REPROBARON</b> desde <b>1</b> a <b>TODAS</b> sus MATERIAS
						(Asignaturas) hasta <b>EVALUACIÓN ORDINARIA</b>
						(Semestre <?=$periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>). Indique cuántos de ellos
						presentan alguna discapacidad, cuántos son extranjeros y
						cuántos son hablantes de alguna lengua indígena.
						<?=br(2)?>
						<b>Recuerde: Existencia= Aprobados + Reprobados</b>
					</p>
				</td>
				<td>
					<table class="no-border">
						<tr>
							<td><b>Semestre</b></td>
							<td colspan="3" class="text-center">Hombres</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Mujeres</td>
							<td>&nbsp;</td>		
							<td colspan="4" class="text-center"><b>Total</b></td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Con discapacidad</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Extranjeros</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Hablantes de Lenguas Indígenas</td>
						</tr>
						<tr>
							<td><div class="grado">1o.</div><?php $AHombresRep1 = str_split(folio($reprobReg['AHombresRep1'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresRep1[0]?></td>
							<td class="cdr-r"><?=$AHombresRep1[1]?></td>
							<td class="cdr-r"><?=$AHombresRep1[2]?></td>
							<td><?php $AMujeresRep1 = str_split(folio($reprobReg['AMujeresRep1'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresRep1[0]?></td>
							<td class="cdr-r"><?=$AMujeresRep1[1]?></td>
							<td class="cdr-r"><?=$AMujeresRep1[2]?></td>
							<td><?php $ATotalRep1 = str_split(folio($reprobReg['ATotalRep1'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalRep1[0]?></td>
							<td class="cdr-r"><?=$ATotalRep1[1]?></td>
							<td class="cdr-r"><?=$ATotalRep1[2]?></td>
							<td class="cdr-r"><?=$ATotalRep1[3]?></td>
							<td><?php $ADiscapacidadRep1 = str_split(folio($reprobReg['ADiscapacidadRep1'],3,' '));?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep1[0]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep1[1]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep1[2]?></td>
							<td><?php $AHablantesRep1 = str_split(folio($reprobReg['AHablantesRep1'],3,' '));?></td>
							<td class="cdr-r"><?=$AHablantesRep1[0]?></td>
							<td class="cdr-r"><?=$AHablantesRep1[1]?></td>
							<td class="cdr-r"><?=$AHablantesRep1[2]?></td>
							<td><?php $AExtranjerosRep1 = str_split(folio($reprobReg['AExtranjerosRep1'],3,' '));?></td>
							<td class="cdr-r"><?=$AExtranjerosRep1[0]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep1[1]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep1[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">3o.</div><?php $AHombresRep3 = str_split(folio($reprobReg['AHombresRep3'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresRep3[0]?></td>
							<td class="cdr-r"><?=$AHombresRep3[1]?></td>
							<td class="cdr-r"><?=$AHombresRep3[2]?></td>
							<td><?php $AMujeresRep3 = str_split(folio($reprobReg['AMujeresRep3'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresRep3[0]?></td>
							<td class="cdr-r"><?=$AMujeresRep3[1]?></td>
							<td class="cdr-r"><?=$AMujeresRep3[2]?></td>
							<td><?php $ATotalRep3 = str_split(folio($reprobReg['ATotalRep3'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalRep3[0]?></td>
							<td class="cdr-r"><?=$ATotalRep3[1]?></td>
							<td class="cdr-r"><?=$ATotalRep3[2]?></td>
							<td class="cdr-r"><?=$ATotalRep3[3]?></td>
							<td><?php $ADiscapacidadRep3 = str_split(folio($reprobReg['ADiscapacidadRep3'],3,' '));?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep3[0]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep3[1]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep3[2]?></td>
							<td><?php $AHablantesRep3 = str_split(folio($reprobReg['AHablantesRep3'],3,' '));?></td>
							<td class="cdr-r"><?=$AHablantesRep3[0]?></td>
							<td class="cdr-r"><?=$AHablantesRep3[1]?></td>
							<td class="cdr-r"><?=$AHablantesRep3[2]?></td>
							<td><?php $AExtranjerosRep3 = str_split(folio($reprobReg['AExtranjerosRep3'],3,' '));?></td>
							<td class="cdr-r"><?=$AExtranjerosRep3[0]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep3[1]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep3[2]?></td>
						</tr>
						<tr>
							<td><div class="grado">5o.</div><?php $AHombresRep5 = str_split(folio($reprobReg['AHombresRep5'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresRep5[0]?></td>
							<td class="cdr-r"><?=$AHombresRep5[1]?></td>
							<td class="cdr-r"><?=$AHombresRep5[2]?></td>
							<td><?php $AMujeresRep5 = str_split(folio($reprobReg['AMujeresRep5'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresRep5[0]?></td>
							<td class="cdr-r"><?=$AMujeresRep5[1]?></td>
							<td class="cdr-r"><?=$AMujeresRep5[2]?></td>
							<td><?php $ATotalRep5 = str_split(folio($reprobReg['ATotalRep5'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalRep5[0]?></td>
							<td class="cdr-r"><?=$ATotalRep5[1]?></td>
							<td class="cdr-r"><?=$ATotalRep5[2]?></td>
							<td class="cdr-r"><?=$ATotalRep5[3]?></td>
							<td><?php $ADiscapacidadRep5 = str_split(folio($reprobReg['ADiscapacidadRep5'],3,' '));?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep5[0]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep5[1]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRep5[2]?></td>
							<td><?php $AHablantesRep5 = str_split(folio($reprobReg['AHablantesRep5'],3,' '));?></td>
							<td class="cdr-r"><?=$AHablantesRep5[0]?></td>
							<td class="cdr-r"><?=$AHablantesRep5[1]?></td>
							<td class="cdr-r"><?=$AHablantesRep5[2]?></td>
							<td><?php $AExtranjerosRep5 = str_split(folio($reprobReg['AExtranjerosRep5'],3,' '));?></td>
							<td class="cdr-r"><?=$AExtranjerosRep5[0]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep5[1]?></td>
							<td class="cdr-r"><?=$AExtranjerosRep5[2]?></td>
						</tr>
						<tr>
							<td><b>Total</b><?php $AHombresRepT = str_split(folio($reprobReg['AHombresRepT'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresRepT[0]?></td>
							<td class="cdr-r"><?=$AHombresRepT[1]?></td>
							<td class="cdr-r"><?=$AHombresRepT[2]?></td>
							<td><?php $AMujeresRepT = str_split(folio($reprobReg['AMujeresRepT'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresRepT[0]?></td>
							<td class="cdr-r"><?=$AMujeresRepT[1]?></td>
							<td class="cdr-r"><?=$AMujeresRepT[2]?></td>
							<td><?php $ATotalRep = str_split(folio($reprobReg['ATotalRep'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalRep[0]?></td>
							<td class="cdr-r"><?=$ATotalRep[1]?></td>
							<td class="cdr-r"><?=$ATotalRep[2]?></td>
							<td class="cdr-r"><?=$ATotalRep[3]?></td>
							<td><?php $ADiscapacidadRepT = str_split(folio($reprobReg['ADiscapacidadRepT'],3,' '));?></td>
							<td class="cdr-r"><?=$ADiscapacidadRepT[0]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRepT[1]?></td>
							<td class="cdr-r"><?=$ADiscapacidadRepT[2]?></td>
							<td><?php $AHablantesRepT = str_split(folio($reprobReg['AHablantesRepT'],3,' '));?></td>
							<td class="cdr-r"><?=$AHablantesRepT[0]?></td>
							<td class="cdr-r"><?=$AHablantesRepT[1]?></td>
							<td class="cdr-r"><?=$AHablantesRepT[2]?></td>
							<td><?php $AExtranjerosRepT = str_split(folio($reprobReg['AExtranjerosRepT'],3,' '));?></td>
							<td class="cdr-r"><?=$AExtranjerosRepT[0]?></td>
							<td class="cdr-r"><?=$AExtranjerosRepT[1]?></td>
							<td class="cdr-r"><?=$AExtranjerosRepT[2]?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class="text-justify">
					<b>REGULARIZADOS DEL SEMESTRE <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?></b>
					<p>
						<b>4.</b> De los alumnos REPROBADOS reportados en la pregunta
						3, escriba por grado y sexo el número de alumnos que se
						REGULARIZARON en el semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.
						<?=br(2)?>
						* Los alumnos REGULARIZADOS son los alumnos que
						aprobaron mediante evaluaciones extraordinarias y/o
						especiales, todas las unidades de aprendizaje curricular que
						adeudaban.
					</p>
				</td>
				<td>
					<table class="no-border" align="center">
						<tr>
							<td><b>Semestre</b></td>
							<td colspan="3" class="text-center">Hombres</td>
							<td>&nbsp;</td>		
							<td colspan="3" class="text-center">Mujeres</td>
							<td>&nbsp;</td>		
							<td colspan="4" class="text-center"><b>Total</b></td>
						</tr>
						<tr>
							<td><div class="grado">1o.</div> <?php $AHombresReg1 = str_split(folio($reprobReg['AHombresReg1'],3,' '));?></td>							
							<td class="cdr-r"><?=$AHombresReg1[0]?></td>
							<td class="cdr-r"><?=$AHombresReg1[1]?></td>
							<td class="cdr-r"><?=$AHombresReg1[2]?></td>
							<td><?php $AMujeresReg1 = str_split(folio($reprobReg['AMujeresReg1'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresReg1[0]?></td>
							<td class="cdr-r"><?=$AMujeresReg1[1]?></td>
							<td class="cdr-r"><?=$AMujeresReg1[2]?></td>
							<td><?php $ATotalReg1 = str_split(folio($reprobReg['ATotalReg1'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalReg1[0]?></td>
							<td class="cdr-r"><?=$ATotalReg1[1]?></td>
							<td class="cdr-r"><?=$ATotalReg1[2]?></td>
							<td class="cdr-r"><?=$ATotalReg1[3]?></td>
						</tr>
						<tr>
							<td><div class="grado">3o.</div><?php $AHombresReg3 = str_split(folio($reprobReg['AHombresReg3'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresReg3[0]?></td>
							<td class="cdr-r"><?=$AHombresReg3[1]?></td>
							<td class="cdr-r"><?=$AHombresReg3[2]?></td>
							<td><?php $AMujeresReg3 = str_split(folio($reprobReg['AMujeresReg3'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresReg3[0]?></td>
							<td class="cdr-r"><?=$AMujeresReg3[1]?></td>
							<td class="cdr-r"><?=$AMujeresReg3[2]?></td>
							<td><?php $ATotalReg3 = str_split(folio($reprobReg['ATotalReg3'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalReg3[0]?></td>
							<td class="cdr-r"><?=$ATotalReg3[1]?></td>
							<td class="cdr-r"><?=$ATotalReg3[2]?></td>
							<td class="cdr-r"><?=$ATotalReg3[3]?></td>
						</tr>
						<tr>
							<td><div class="grado">5o.</div><?php $AHombresReg5 = str_split(folio($reprobReg['AHombresReg5'],3,' '));?></td>
							<td class="cdr-r"><?=$AHombresReg5[0]?></td>
							<td class="cdr-r"><?=$AHombresReg5[1]?></td>
							<td class="cdr-r"><?=$AHombresReg5[2]?></td>
							<td>&nbsp;<?php $AMujeresReg5 = str_split(folio($reprobReg['AMujeresReg5'],3,' '));?></td>
							<td class="cdr-r"><?=$AMujeresReg5[0]?></td>
							<td class="cdr-r"><?=$AMujeresReg5[1]?></td>
							<td class="cdr-r"><?=$AMujeresReg5[2]?></td>
							<td><?php $ATotalReg5 = str_split(folio($reprobReg['ATotalReg5'],4,' '));?></td>
							<td class="cdr-r"><?=$ATotalReg5[0]?></td>
							<td class="cdr-r"><?=$ATotalReg5[1]?></td>
							<td class="cdr-r"><?=$ATotalReg5[2]?></td>
							<td class="cdr-r"><?=$ATotalReg5[3]?></td>
						</tr>
						<tr>
							<td><b>Total</b></td>
							<?php $AHombresRegT = str_split(folio($reprobReg['AHombresRegT'],3,' '));?>
							<td class="cdr-r"><?=$AHombresRegT[0]?></td>
							<td class="cdr-r"><?=$AHombresRegT[1]?></td>
							<td class="cdr-r"><?=$AHombresRegT[2]?></td>
							<td><?php $AMujeresRegT = str_split(folio($reprobReg['AMujeresRegT'],3,' '));?></td>		
							<td class="cdr-r"><?=$AMujeresRegT[0]?></td>
							<td class="cdr-r"><?=$AMujeresRegT[1]?></td>
							<td class="cdr-r"><?=$AMujeresRegT[2]?></td>
							<td><?php $ATotalReg = str_split(folio($reprobReg['ATotalReg'],4,' '));?></td>		
							<td class="cdr-r"><?=$ATotalReg[0]?></td>
							<td class="cdr-r"><?=$ATotalReg[1]?></td>
							<td class="cdr-r"><?=$ATotalReg[2]?></td>
							<td class="cdr-r"><?=$ATotalReg[3]?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
				<td>
					<table>
						<tr>
							<td><b>CLAVE DEL CENTRO DE TRABAJO: </b></td>
							<td class="cdr-r"><?=$CPLCCT[0]?></td>
							<td class="cdr-r"><?=$CPLCCT[1]?></td>
							<td class="cdr-r"><?=$CPLCCT[2]?></td>
							<td class="cdr-r"><?=$CPLCCT[3]?></td>
							<td class="cdr-r"><?=$CPLCCT[4]?></td>
							<td class="cdr-r"><?=$CPLCCT[5]?></td>
							<td class="cdr-r"><?=$CPLCCT[6]?></td>
							<td class="cdr-r"><?=$CPLCCT[7]?></td>
							<td class="cdr-r"><?=$CPLCCT[8]?></td>
							<td class="cdr-r"><?=$CPLCCT[9]?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="container page_break page3">
  <table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
  </table><br><br>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left table-40 " style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
      III. MATRICULA AL INICIO DEL CICLO ESCOLAR <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?><br><br>
      1. Coloca la matrícula oficial que reportaste en el formato 911 de inicio de cursos <?php $anio = $periodoAnt[0]['PAnio'] +1; if ($periodoAnt[0]['PPeriodo'] == 1 ) { echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PAnio']; } else { echo $periodoAnt[0]['PAnio'].'-'.$anio; }?>. (Corte al 30 Septiembre de <?= $periodoAnt[0]['PAnio'] ?>).
      </td>
      <td class="table-10"></td>
      <td class="text-right table-50" >
        <table class="table table-90">
          <thead>
              <tr>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Grado</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Hombres</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Mujeres</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Total</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[0][0]['Hombres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[0][0]['Mujeres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[0][0]['Total'] ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[1][0]['Hombres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[1][0]['Mujeres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[1][0]['Total'] ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[2][0]['Hombres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[2][0]['Mujeres'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $totales[2][0]['Total'] ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>Total</label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $totalHombres = nvl($totales[0][0]['Hombres']) + nvl($totales[1][0]['Hombres']) + nvl($totales[2][0]['Hombres']); echo $totalHombres; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $totalMujeres = nvl($totales[0][0]['Mujeres']) +  nvl($totales[1][0]['Mujeres']) +  nvl($totales[2][0]['Mujeres']); echo $totalMujeres; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $total = nvl($totales[0][0]['Total']) +  nvl($totales[1][0]['Total']) +  nvl($totales[2][0]['Total']); echo $total; ?></td>
              </tr>
          </tbody>
      </table>
      </td>
    </tr>
  </table>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left table-40 " style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
      IV. ABANDONO ESCOLAR IINTRACURRICULAR POR GRADO Y GÉNERO (SEMESTRE <?php echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo']; ?>)<br><br>
      El abandono intracurricular es la resta de la matrícula y la existencia del semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.
      </td>
      <td class="table-10"></td>
      <td class="text-right table-50" >
        <table class="table table-90">
          <thead>
              <tr>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Grado</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Hombres</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Mujeres</th>
                  <th class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;">Total</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?> </label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIHombres1 = $totales[0][0]['Hombres'] - $existAprob['EHombres1']; echo $AEIHombres1; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIMujeres1 = $totales[0][0]['Mujeres'] - $existAprob['EMujeres1']; echo $AEIMujeres1;?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEITotal1 = $totales[0][0]['Total'] - $existAprob['ETotal1']; echo $AEITotal1; ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIHombres2 = $totales[1][0]['Hombres'] - $existAprob['EHombres3']; echo $AEIHombres2; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIMujeres2 = $totales[1][0]['Mujeres'] - $existAprob['EMujeres3']; echo $AEIMujeres2;?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEITotal2 = $totales[1][0]['Total'] - $existAprob['ETotal3']; echo $AEITotal2; ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIHombres3 = $totales[2][0]['Hombres'] - $existAprob['EHombres5']; echo $AEIHombres3; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEIMujeres3 = $totales[2][0]['Mujeres'] - $existAprob['EMujeres5']; echo $AEIMujeres3; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $AEITotal3 = $totales[2][0]['Total'] - $existAprob['ETotal5']; echo $AEITotal3; ?></td>
              </tr>
              <tr>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>Total</label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $totalHombres = $AEIHombres1 + $AEIHombres2 + $AEIHombres3; echo $totalHombres; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $totalMujeres = $AEIMujeres1 + $AEIMujeres2 + $AEIMujeres2; echo $totalMujeres; ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php $total = $AEITotal1 + $AEITotal2 + $AEITotal3; echo $total; ?></td>
              </tr>
                    
          </tbody>
      </table>
      </td>
    </tr>
  </table>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left table-40 " style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
      IV. ABANDONO ESCOLAR IINTRACURRICULAR
      1.- Desglose el motivo de baja o abandono del centro educativo (Cifras reportadas en el cuadro anterior).
      </td>
      <td class="table-10"></td>
      <td class="text-right table-50" >
      </td>
    </tr>
  </table><br><br>

  <table class="table table-100">
    <tr>
      <td>
        <table class="table table-100">
        <thead>
          <tr>
              <th class="table-20"></th>
              <th class="table-25" colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1er."; } else { echo "2do.";} ?> Semestre</th>
              <th class="table-25" colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3er."; } else { echo "4to.";} ?> Semestre</th>
              <th class="table-25" colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "5o."; } else { echo "6to.";} ?> Semestre</th>
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
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>BAJA ADMVA TEMP.</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>BAJA ACADÉMICA</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>BAJA ADMVA DEF.</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaDefH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaDefM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1BajaDefT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaDefH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaDefM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3BajaDefT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaDefH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaDefM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5BajaDefT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>CAMBIO DE PLANTEL</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>FACTORES ECONÓMICOS</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1FacEcoH'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1FacEcoM'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1FacEcoT'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3FacEcoH'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3FacEcoM'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3FacEcoT'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5FacEcoH'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5FacEcoM'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5FacEcoT'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>EMBARAZO O MATRIMONIO</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>CAMBIO DE RESIDENCIA</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaT'];}?></td>
          </tr>
          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>*OTRO</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1OtrosH'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1OtrosM'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1OtrosT'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3OtrosH'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3OtrosM'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3OtrosT'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosT'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5OtrosH'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5OtrosM'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5OtrosT'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosT'];}?></td>
          </tr>
          <tr>
              <td class="no-border text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"> *Especificar Otro:</td>
              <td colspan='3' style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
                  <?php if($abandonoInt1['AI1DescripH'] != '') { echo $abandonoInt1['AI1DescripH']; } ?>
                  <br>
                  <?php if($abandonoInt1['AI1DescripM'] != '') { echo $abandonoInt1['AI1DescripM']; } ?>
              </td>
              <td colspan='3' style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
                  <?php if($abandonoInt3['AI3DescripH'] != '') { echo $abandonoInt3['AI3DescripH']; } ?>
                  <br>
                  <?php if($abandonoInt3['AI3DescripM'] != '') { echo $abandonoInt3['AI3DescripM']; } ?>
              </td>
              <td colspan='3' style="border-radius: 0px; border:1pt solid #9c9c9c !important;">
                <?php if($abandonoInt5['AI5DescripH'] != '') { echo $abandonoInt5['AI5DescripH']; } ?>
                <br>
                <?php if($abandonoInt5['AI5DescripM'] != '') { echo $abandonoInt5['AI5DescripM']; } ?>
              </td>
          </tr>

          <tr>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><label>TOTALES</label></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1TotalH'] == '') { echo 0; } else { echo $abandonoInt1['AI1TotalH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1TotalM'] == '') { echo 0; } else { echo $abandonoInt1['AI1TotalM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt1['AI1Total'] == '') { echo 0; } else { echo $abandonoInt1['AI1Total'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3TotalH'] == '') { echo 0; } else { echo $abandonoInt3['AI3TotalH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3TotalM'] == '') { echo 0; } else { echo $abandonoInt3['AI3TotalM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt3['AI3Total'] == '') { echo 0; } else { echo $abandonoInt3['AI3Total'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5TotalH'] == '') { echo 0; } else { echo $abandonoInt5['AI5TotalH'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5TotalM'] == '') { echo 0; } else { echo $abandonoInt5['AI5TotalM'];}?></td>
              <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?php if ($abandonoInt5['AI5Total'] == '') { echo 0; } else { echo $abandonoInt5['AI5Total'];}?></td>
          </tr>

      </tbody>
        </table>
      </td>
    </tr>
      
  </table>
</div>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br><br>
<table class="table-100 no-border">
    <tr>
      <td class="text-left table-30 no-border text-justify">
      <b>V. MATRICULA DEL SEMESTRE <?=$periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo'] ?>.</b>
      <p>
      Escriba por género y grado <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?>, el No de alumnos <b>INSCRITOS AL INICIO del semestre <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?></b> (Febrero <?= $periodoAct[0]['PAnio'] ?>). Indique cuántos de ellos presentan una discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena. Escriba también el <b>NÚMERO DE GRUPOS</b> por grado <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?> con los que cuenta en este <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?>.
      </p>
      <p>
      Deberá coincidir con lo reportado al Depto. de Control Escolar (Corte 17 de marzo <?= $periodoAct[0]['PAnio'] ?>).
      </p>
      </td>
      <td class="table-70" >
        <table class="table table-100">
          <tr>
            <td><b>Semestre</b></td>
            <td colspan="3" class="text-center">Hombres</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Mujeres</td>
            <td>&nbsp;</td>		
            <td colspan="4" class="text-center"><b>Total</b></td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Con discapacidad</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Extranjeros</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Hablantes de Lenguas Indígenas</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Grupos</td>
          </tr>
          <tbody>
            <tr>
              <td><div class="grado text-center"><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?></div></td>
              <?php $MSHombres2 = str_split(folio($matricula['MHIns2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHombres2[0]?></td>
              <td class="cdr-r"><?=$MSHombres2[1]?></td>
              <td class="cdr-r"><?=$MSHombres2[2]?></td>
              <td><?php $MSMujeres2 = str_split(folio($matricula['MMIns2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSMujeres2[0]?></td>
              <td class="cdr-r"><?=$MSMujeres2[1]?></td>
              <td class="cdr-r"><?=$MSMujeres2[2]?></td>
              <td><?php $MSTotal2 = str_split(folio($matricula['MTIns2o'],4,' '));?></td>
              <td class="cdr-r"><?=$MSTotal2[0]?></td>
              <td class="cdr-r"><?=$MSTotal2[1]?></td>
              <td class="cdr-r"><?=$MSTotal2[2]?></td>
              <td class="cdr-r"><?=$MSTotal2[3]?></td>
              <td><?php $MSDiscapacidad2 = str_split(folio($matricula['MDIns2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSDiscapacidad2[0]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad2[1]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad2[2]?></td>
              <td><?php $MsHablantes2 = str_split(folio($matricula['MHaIns2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MsHablantes2[0]?></td>
              <td class="cdr-r"><?=$MsHablantes2[1]?></td>
              <td class="cdr-r"><?=$MsHablantes2[2]?></td>
              <td><?php $MSExtranjero1 = str_split(folio($matricula['MEIns2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSExtranjero1[0]?></td>
              <td class="cdr-r"><?=$MSExtranjero1[1]?></td>
              <td class="cdr-r"><?=$MSExtranjero1[2]?></td>
              <td><?php $MSGrupos2 = str_split(folio($matricula['MInsGrupos2o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSGrupos2[0]?></td>
              <td class="cdr-r"><?=$MSGrupos2[1]?></td>
              <td class="cdr-r"><?=$MSGrupos2[2]?></td>
            </tr>
            <tr>
              <td class="text-center"><div class="grado"><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></div></td>
              <?php $MSHombres4 = str_split(folio($matricula['MHIns4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHombres4[0]?></td>
              <td class="cdr-r"><?=$MSHombres4[1]?></td>
              <td class="cdr-r"><?=$MSHombres4[2]?></td>
              <td><?php $MSMujeres4 = str_split(folio($matricula['MMIns4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSMujeres4[0]?></td>
              <td class="cdr-r"><?=$MSMujeres4[1]?></td>
              <td class="cdr-r"><?=$MSMujeres4[2]?></td>
              <td><?php $MSTotal4 = str_split(folio($matricula['MTIns4o'],4,' '));?></td>
              <td class="cdr-r"><?=$MSTotal4[0]?></td>
              <td class="cdr-r"><?=$MSTotal4[1]?></td>
              <td class="cdr-r"><?=$MSTotal4[2]?></td>
              <td class="cdr-r"><?=$MSTotal4[3]?></td>
              <td><?php $MSDiscapacidad4 = str_split(folio($matricula['MDIns4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSDiscapacidad4[0]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad4[1]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad4[2]?></td>
              <td><?php $MSHablantes4 = str_split(folio($matricula['MHaIns4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHablantes4[0]?></td>
              <td class="cdr-r"><?=$MSHablantes4[1]?></td>
              <td class="cdr-r"><?=$MSHablantes4[2]?></td>
              <td><?php $MSExtranjero4 = str_split(folio($matricula['MEIns4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSExtranjero4[0]?></td>
              <td class="cdr-r"><?=$MSExtranjero4[1]?></td>
              <td class="cdr-r"><?=$MSExtranjero4[2]?></td>
              <td><?php $MSGrupos4 = str_split(folio($matricula['MInsGrupos4o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSGrupos4[0]?></td>
              <td class="cdr-r"><?=$MSGrupos4[1]?></td>
              <td class="cdr-r"><?=$MSGrupos4[2]?></td>
            </tr>
            <tr>
              <td class="text-center"><div class="grado"><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "5o."; } else { echo "6o.";} ?></div></td>
              <?php $MSHombres6 = str_split(folio($matricula['MHIns6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHombres6[0]?></td>
              <td class="cdr-r"><?=$MSHombres6[1]?></td>
              <td class="cdr-r"><?=$MSHombres6[2]?></td>
              <td><?php $MSMujeres6 = str_split(folio($matricula['MMIns6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSMujeres6[0]?></td>
              <td class="cdr-r"><?=$MSMujeres6[1]?></td>
              <td class="cdr-r"><?=$MSMujeres6[2]?></td>
              <td><?php $MSTotal6 = str_split(folio($matricula['MTIns6o'],4,' '));?></td>
              <td class="cdr-r"><?=$MSTotal6[0]?></td>
              <td class="cdr-r"><?=$MSTotal6[1]?></td>
              <td class="cdr-r"><?=$MSTotal6[2]?></td>
              <td class="cdr-r"><?=$MSTotal6[3]?></td>
              <td><?php $MSDiscapacidad6 = str_split(folio($matricula['MDIns6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSDiscapacidad6[0]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad6[1]?></td>
              <td class="cdr-r"><?=$MSDiscapacidad6[2]?></td>
              <td><?php $MSHablantes6 = str_split(folio($matricula['MHaIns6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHablantes6[0]?></td>
              <td class="cdr-r"><?=$MSHablantes6[1]?></td>
              <td class="cdr-r"><?=$MSHablantes6[2]?></td>
              <td><?php $MSExtranjero6 = str_split(folio($matricula['MEIns6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSExtranjero6[0]?></td>
              <td class="cdr-r"><?=$MSExtranjero6[1]?></td>
              <td class="cdr-r"><?=$MSExtranjero6[2]?></td>
              <td><?php $MSGrupos6 = str_split(folio($matricula['MInsGrupos6o'],3,' '));?></td>
              <td class="cdr-r"><?=$MSGrupos6[0]?></td>
              <td class="cdr-r"><?=$MSGrupos6[1]?></td>
              <td class="cdr-r"><?=$MSGrupos6[2]?></td>
            </tr>
            <tr>
              <td class="text-center"><b>Total</b></td>
              <?php $MSHombresTotal = str_split(folio($matricula['MHInsTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHombresTotal[0]?></td>
              <td class="cdr-r"><?=$MSHombresTotal[1]?></td>
              <td class="cdr-r"><?=$MSHombresTotal[2]?></td>
              <td><?php $MSMujeresTotal = str_split(folio($matricula['MMInsTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSMujeresTotal[0]?></td>
              <td class="cdr-r"><?=$MSMujeresTotal[1]?></td>
              <td class="cdr-r"><?=$MSMujeresTotal[2]?></td>
              <td><?php $MSTotalTotal = str_split(folio($matricula['MTInsTotal'],4,' '));?></td>
              <td class="cdr-r"><?=$MSTotalTotal[0]?></td>
              <td class="cdr-r"><?=$MSTotalTotal[1]?></td>
              <td class="cdr-r"><?=$MSTotalTotal[2]?></td>
              <td class="cdr-r"><?=$MSTotalTotal[3]?></td>
              <td><?php $MSDiscapacidadTotal = str_split(folio($matricula['MDInsTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSDiscapacidadTotal[0]?></td>
              <td class="cdr-r"><?=$MSDiscapacidadTotal[1]?></td>
              <td class="cdr-r"><?=$MSDiscapacidadTotal[2]?></td>
              <td><?php $MSHablantesTotal = str_split(folio($matricula['MHaInsTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSHablantesTotal[0]?></td>
              <td class="cdr-r"><?=$MSHablantesTotal[1]?></td>
              <td class="cdr-r"><?=$MSHablantesTotal[2]?></td>
              <td><?php $MSExtranjeroTotal = str_split(folio($matricula['MEInsTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSExtranjeroTotal[0]?></td>
              <td class="cdr-r"><?=$MSExtranjeroTotal[1]?></td>
              <td class="cdr-r"><?=$MSExtranjeroTotal[2]?></td>
              <td><?php $MSGruposTotal = str_split(folio($matricula['MInsGruposTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$MSGruposTotal[0]?></td>
              <td class="cdr-r"><?=$MSGruposTotal[1]?></td>
              <td class="cdr-r"><?=$MSGruposTotal[2]?></td>
            </tr> 
          </tbody>
      </table>
      </td>
    </tr>
  </table><?=br(5)?>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left table-40 no-border">
      <b>REPETIDOR </b><br>
      <p class="text-justify">De los alumnos reportados en el punto anterior, desglosa los alumnos repetidores (son los que reprueban 5 o más materias, y que, por lo tanto, está repitiendo todo el semestre), por género y grado.</p>
      </td>
      <td class="table-10"></td>
      <td class="text-right table-50" >
        <table class="table table-90">
          <thead>
              <tr>
                  <td></td>
                  <td class="text-center">Hombres</td>
                  <td class="text-center">Mujeres</td>
                  <td class="text-center">Total</td>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td class="text-center" ><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "Primero."; } else { echo "Segundo.";} ?> </label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCHRepe2o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCMRepe2o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCTRepe2o'] ?></td>
              </tr>
              <tr>
                <td class="text-center" ><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "Tercero."; } else { echo "Cuarto.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCHRepe4o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCMRepe4o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCTRepe4o'] ?></td>
              </tr>
              <tr>
                <td class="text-center" ><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "Quinto."; } else { echo "Sexto.";} ?></label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCHRepe6o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCMRepe6o'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCTRepe6o'] ?></td>
              </tr>
              <tr>
                <td class="text-center" ><label>Total</label></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCHRepeTotal'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCMRepeTotal'] ?></td>
                <td class="text-center" style="border-radius: 0px; border:1pt solid #9c9c9c !important;"><?= $repcemsad['RCTRepeTotal'] ?></td>
              </tr>
          </tbody>
      </table>
      </td>
    </tr>
  </table>
  <?=br(15)?>
<table align="right">
	<tr>
		<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
		<td>
			<table>
				<tr>
					<td><b>CLAVE DEL CENTRO DE TRABAJO:</b></td>
					<td class="cdr-r"><?=$CPLCCT[0]?></td>
					<td class="cdr-r"><?=$CPLCCT[1]?></td>
					<td class="cdr-r"><?=$CPLCCT[2]?></td>
					<td class="cdr-r"><?=$CPLCCT[3]?></td>
					<td class="cdr-r"><?=$CPLCCT[4]?></td>
					<td class="cdr-r"><?=$CPLCCT[5]?></td>
					<td class="cdr-r"><?=$CPLCCT[6]?></td>
					<td class="cdr-r"><?=$CPLCCT[7]?></td>
					<td class="cdr-r"><?=$CPLCCT[8]?></td>
					<td class="cdr-r"><?=$CPLCCT[9]?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<?php if ($planteles['CPLTipo'] == 36) { ?>
<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
  </table><br><br>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left table-100 no-border" colspan="2">
      V. MATRICULA DEL SEMESTRE <?= $periodoAct[0]['PAnio']?>-<?= $periodoAct[0]['PPeriodo']?><br><br>
      De la matrícula <?= $periodoAct[0]['PAnio'] ?>, desglose por semestre y por genéro cuántos alumnos cursan sus clases de manera presencial y cuántos a distancia.<br><br><br>
      </td>
    </tr>
    <tr>
      	<td class="table-50 no-border">
			<table class="table table-100">
				<thead>
					<tr>
						<td></td>
						<th colspan="9">Clases Presenciales</th>
					</tr>
					<tr>
						<th >Semestre</th>											
						<th colspan="3">Hombres</th>
						<th colspan="3">Mujeres</th>
						<th colspan="3">Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-right"><label>2do.</label></td>
						<?php $MCHPre2o = str_split(folio($matcemsad['MCHPre2o'],3,' '));?>
						<td class="cdr-r"><?=$MCHPre2o[0]?></td>
						<td class="cdr-r"><?=$MCHPre2o[1]?></td>
						<td class="cdr-r"><?=$MCHPre2o[2]?></td>
						<?php $MCMPre2o = str_split(folio($matcemsad['MCMPre2o'],3,' '));?>
						<td class="cdr-r"><?=$MCMPre2o[0]?></td>
						<td class="cdr-r"><?=$MCMPre2o[1]?></td>
						<td class="cdr-r"><?=$MCMPre2o[2]?></td>
						<?php $MCTPre2o = str_split(folio($matcemsad['MCTPre2o'],3,' '));?>
						<td class="cdr-r"><?=$MCTPre2o[0]?></td>
						<td class="cdr-r"><?=$MCTPre2o[1]?></td>
						<td class="cdr-r"><?=$MCTPre2o[2]?></td>
						
					</tr>
					<tr>
						<td class="text-right"><label>4to.</label></td>
						<?php $MCHPre4o = str_split(folio($matcemsad['MCHPre4o'],3,' '));?>
						<td class="cdr-r"><?=$MCHPre4o[0]?></td>
						<td class="cdr-r"><?=$MCHPre4o[1]?></td>
						<td class="cdr-r"><?=$MCHPre4o[2]?></td>
						<?php $MCMPre4o = str_split(folio($matcemsad['MCMPre4o'],3,' '));?>
						<td class="cdr-r"><?=$MCMPre4o[0]?></td>
						<td class="cdr-r"><?=$MCMPre4o[1]?></td>
						<td class="cdr-r"><?=$MCMPre4o[2]?></td>
						<?php $MCTPre4o = str_split(folio($matcemsad['MCTPre4o'],3,' '));?>
						<td class="cdr-r"><?=$MCTPre4o[0]?></td>
						<td class="cdr-r"><?=$MCTPre4o[1]?></td>
						<td class="cdr-r"><?=$MCTPre4o[2]?></td>
					</tr>
					<tr>
						<td class="text-right"><label>6to.</label></td>
						<?php $MCHPre6o = str_split(folio($matcemsad['MCHPre6o'],3,' '));?>
						<td class="cdr-r"><?=$MCHPre6o[0]?></td>
						<td class="cdr-r"><?=$MCHPre6o[1]?></td>
						<td class="cdr-r"><?=$MCHPre6o[2]?></td>
						<?php $MCMPre6o = str_split(folio($matcemsad['MCMPre6o'],3,' '));?>
						<td class="cdr-r"><?=$MCMPre6o[0]?></td>
						<td class="cdr-r"><?=$MCMPre6o[1]?></td>
						<td class="cdr-r"><?=$MCMPre6o[2]?></td>
						<?php $MCTPre6o = str_split(folio($matcemsad['MCTPre6o'],3,' '));?>
						<td class="cdr-r"><?=$MCTPre6o[0]?></td>
						<td class="cdr-r"><?=$MCTPre6o[1]?></td>
						<td class="cdr-r"><?=$MCTPre6o[2]?></td>
					</tr>
					<tr>
						<td class="text-right"><label>Total</label></td>
						<?php $MCHPreTotal = str_split(folio($matcemsad['MCHPreTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCHPreTotal[0]?></td>
						<td class="cdr-r"><?=$MCHPreTotal[1]?></td>
						<td class="cdr-r"><?=$MCHPreTotal[2]?></td>
						<?php $MCMPreTotal = str_split(folio($matcemsad['MCMPreTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCMPreTotal[0]?></td>
						<td class="cdr-r"><?=$MCMPreTotal[1]?></td>
						<td class="cdr-r"><?=$MCMPreTotal[2]?></td>
						<?php $MCTPreTotal = str_split(folio($matcemsad['MCTPreTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCTPreTotal[0]?></td>
						<td class="cdr-r"><?=$MCTPreTotal[1]?></td>
						<td class="cdr-r"><?=$MCTPreTotal[2]?></td>
					</tr>
				</tbody>
			</table>
      	</td>
		<td class="table-50 no-border">
			<table class="table table-100">
				<thead>
					<tr>
						<td></td>
						<th colspan="9">Clases a distancia</th>
					</tr>
					<tr>
						<th >Semestre</th>	
						<th colspan="3">Hombres</th>
						<th colspan="3">Mujeres</th>
						<th colspan="3">Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-right"><label>2do.</label></td>		
						<?php $MCHDis2o = str_split(folio($matcemsad['MCHDis2o'],3,' '));?>
						<td class="cdr-r"><?=$MCHDis2o[0]?></td>
						<td class="cdr-r"><?=$MCHDis2o[1]?></td>
						<td class="cdr-r"><?=$MCHDis2o[2]?></td>
						<?php $MCMDis2o = str_split(folio($matcemsad['MCMDis2o'],3,' '));?>
						<td class="cdr-r"><?=$MCMDis2o[0]?></td>
						<td class="cdr-r"><?=$MCMDis2o[1]?></td>
						<td class="cdr-r"><?=$MCMDis2o[2]?></td>
						<?php $MCTDis2o = str_split(folio($matcemsad['MCTDis2o'],3,' '));?>
						<td class="cdr-r"><?=$MCTDis2o[0]?></td>
						<td class="cdr-r"><?=$MCTDis2o[1]?></td>
						<td class="cdr-r"><?=$MCTDis2o[2]?></td>
					</tr>
					<tr>
						<td class="text-right"><label>4to.</label></td>
						<?php $MCHDis4o = str_split(folio($matcemsad['MCHDis4o'],3,' '));?>
						<td class="cdr-r"><?=$MCHDis4o[0]?></td>
						<td class="cdr-r"><?=$MCHDis4o[1]?></td>
						<td class="cdr-r"><?=$MCHDis4o[2]?></td>
						<?php $MCMDis4o = str_split(folio($matcemsad['MCMDis4o'],3,' '));?>
						<td class="cdr-r"><?=$MCMDis4o[0]?></td>
						<td class="cdr-r"><?=$MCMDis4o[1]?></td>
						<td class="cdr-r"><?=$MCMDis4o[2]?></td>
						<?php $MCTDis4o = str_split(folio($matcemsad['MCTDis4o'],3,' '));?>
						<td class="cdr-r"><?=$MCTDis4o[0]?></td>
						<td class="cdr-r"><?=$MCTDis4o[1]?></td>
						<td class="cdr-r"><?=$MCTDis4o[2]?></td>
					</tr>
					<tr>
						<td class="text-right"><label>6to.</label></td>
						<?php $MCHDis6o = str_split(folio($matcemsad['MCHDis6o'],3,' '));?>
						<td class="cdr-r"><?=$MCHDis6o[0]?></td>
						<td class="cdr-r"><?=$MCHDis6o[1]?></td>
						<td class="cdr-r"><?=$MCHDis6o[2]?></td>
						<?php $MCMDis6o = str_split(folio($matcemsad['MCMDis6o'],3,' '));?>
						<td class="cdr-r"><?=$MCMDis6o[0]?></td>
						<td class="cdr-r"><?=$MCMDis6o[1]?></td>
						<td class="cdr-r"><?=$MCMDis6o[2]?></td>
						<?php $MCTDis6o = str_split(folio($matcemsad['MCTDis6o'],3,' '));?>
						<td class="cdr-r"><?=$MCTDis6o[0]?></td>
						<td class="cdr-r"><?=$MCTDis6o[1]?></td>
						<td class="cdr-r"><?=$MCTDis6o[2]?></td>
					</tr>
					<tr>
						<td class="text-right"><label>Total</label></td>
						<?php $MCHDisTotal = str_split(folio($matcemsad['MCHDisTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCHDisTotal[0]?></td>
						<td class="cdr-r"><?=$MCHDisTotal[1]?></td>
						<td class="cdr-r"><?=$MCHDisTotal[2]?></td>
						<?php $MCMDisTotal = str_split(folio($matcemsad['MCMDisTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCMDisTotal[0]?></td>
						<td class="cdr-r"><?=$MCMDisTotal[1]?></td>
						<td class="cdr-r"><?=$MCMDisTotal[2]?></td>
						<?php $MCTDisTotal = str_split(folio($matcemsad['MCTDisTotal'],3,' '));?>
						<td class="cdr-r"><?=$MCTDisTotal[0]?></td>
						<td class="cdr-r"><?=$MCTDisTotal[1]?></td>
						<td class="cdr-r"><?=$MCTDisTotal[2]?></td>
					</tr>
				</tbody>
			</table>
	  </td>
    </tr>
  </table><br><br><br><br><br>
  <table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>NOTA: SOLO APLICA PARA CEMSAD</b></td>
    </tr>
  </table><br><br><br><br><br>
</div>
<?php } ?>

<?php foreach($semestres as $s => $listSem) { ?>
<div class="container page_break page3">
	<div class="anexo">	
		<table class="table-100">
			<tr>
				<td><b>Colegio de Bachilleres del Estado de México</b></td>
				<td class="text-right"><b>Intersemestral <br /><?=$periodoAnt[0]['PAnio']?> - <?=$periodoAnt[0]['PAnio']+1?></b></td>
			</tr>
		</table>
		<br />
		<table class="table-100">
			<tr>
				<td colspan="2">&nbsp;</td>
				<td class="text-right">Turno: <b><?=$PlanEstudios['PETurnoPlantel'] == 1 ?"Matutino":"Vespertino"?></b></td>
			</tr>
			<tr>
				<td>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS (Matrícula <?= $periodoAct[0]['PAnio'] ?> - <?= $periodoAct[0]['PPeriodo'] ?>)</td>
				<td><?=nvl($listSem['GRSemestre'])?>° Semestre</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td style="width:600px !important;">
					Describir la cantidad de grupos del semestre <br />
					citado distribuidos por hombres-mujeres<?=br(5);?>
				</td>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">
					<table align="center">
						<tr>
							<td>&nbsp;</td><td colspan="3" class="text-center">Grupos</td>
							<td>&nbsp;</td><td colspan="2" class="text-center">Hombres</td>
							<td>&nbsp;</td><td colspan="2" class="text-center">Mujeres</td>
							<td>&nbsp;</td><td colspan="2" class="text-center">Total</td>
							<?php if (nvl($listSem['GRSemestre']) > 2) { ?>
							<td>&nbsp;</td><td>Formación para el Trabajo</td>
							<?php } ?>
						</tr>
						<?php if (!empty($listSem['grupoAlumno'])) { ?>
                            <?php foreach ($listSem['grupoAlumno'] as $g => $listG) { ?>
						<tr>
							<td><?php $GRGrupo = str_split(folio($listG['GRGrupo'],3,' '));?></td><td class="cdr-r"><?=$GRGrupo[0]?></td><td class="cdr-r"><?=$GRGrupo[1]?></td><td class="cdr-r"><?=$GRGrupo[2]?></td>
							<td><?php $GRMasculino = str_split(folio($listG['GRMasculino'],2,' '));?></td><td class="cdr-r"><?=$GRMasculino[0]?></td><td class="cdr-r"><?=$GRMasculino[1]?></td></td>
							<td><?php $GRFemenino = str_split(folio($listG['GRFemenino'],2,' '));?></td><td class="cdr-r"><?=$GRFemenino[0]?></td><td class="cdr-r"><?=$GRFemenino[1]?></td></td>
							<td><?php $GRCupo = str_split(folio($listG['GRCupo'],2,' '));?></td><td class="cdr-r"><?=$GRCupo[0]?></td><td class="cdr-r"><?=$GRCupo[1]?></td></td>
							<?php if (nvl($listSem['GRSemestre']) > 2) { ?>
							<td>&nbsp;</td><td><?=$listG['FNombre']?></td>
							<?php } ?>
						</tr>
						<?php } ?>
						<?php } ?>
						<tr>
							<td>Total de grupos</td><td colspan="3" class="text-center"><?=$listSem['TGrupos']?></td>
							<td>&nbsp;</td><td colspan="2" class="text-center"><?=$listSem['THombres']?></td>
							<td>&nbsp;</td><td colspan="2" class="text-center"><?=$listSem['TMujeres']?></td>
							<td>&nbsp;</td><td colspan="2" class="text-center"><?=$listSem['Total']?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<?=br(20)?>
		<table align="right">
			<tr>
				<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
				<td>
					<table>
						<tr>
							<td><b>CLAVE DEL CENTRO DE TRABAJO</b></td>
							<td class="cdr-r"><?=$CPLCCT[0]?></td>
							<td class="cdr-r"><?=$CPLCCT[1]?></td>
							<td class="cdr-r"><?=$CPLCCT[2]?></td>
							<td class="cdr-r"><?=$CPLCCT[3]?></td>
							<td class="cdr-r"><?=$CPLCCT[4]?></td>
							<td class="cdr-r"><?=$CPLCCT[5]?></td>
							<td class="cdr-r"><?=$CPLCCT[6]?></td>
							<td class="cdr-r"><?=$CPLCCT[7]?></td>
							<td class="cdr-r"><?=$CPLCCT[8]?></td>
							<td class="cdr-r"><?=$CPLCCT[9]?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
<?php } ?>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-50 no-border">
		<b>VII. MODELO DUAL </b><br>
		<p class="text-justify">¿El Centro Educativo cuenta con alumnos que participan en el Modelo Dual?.</p>
		</td>
		<td class="table-10"></td>
		<td class="table-50 no-border"><br>
			<label>SI&nbsp;&nbsp;</label> <input type="radio" <?php if ($dual['MDSerEduc'] == 1) echo "checked";  ?>> 
		</td>
		<td class="table-50 no-border"><br>
			<label>NO&nbsp;&nbsp;</label><input type="radio" <?php if ($dual['MDSerEduc'] == 2) echo "checked";  ?>> 
		</td>
	</tr>
</table><br><br><br><br><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-40 no-border">
		<p class="text-justify"><b>De la matrícula reportada en el Numeral V indique por grado y género el número de alumnos del Modelo Dual.</b></p>
		</td>
		<td class="table-10"></td>
		<td class="text-right table-50" >
		<table class="table table-90">
			<thead>
				<tr>
					<td class="text-center">Semestre</td>
					<td class="text-center" colspan="3">Hombres</td><td>&nbsp;</td>
					<td class="text-center" colspan="3">Mujeres</td><td>&nbsp;</td>
					<td class="text-center" colspan="3">Total</td><td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td class="text-center" ><label><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "Tercero."; } else { echo "Cuarto.";} ?></label></td>
				<?php $MDHMod4o = str_split(folio($dual['MDHMod4o'],3,' '));?>
				<td class="cdr-r"><?=$MDHMod4o[0]?></td>
				<td class="cdr-r"><?=$MDHMod4o[1]?></td>
				<td class="cdr-r"><?=$MDHMod4o[2]?></td>
				<td>&nbsp;</td>
				<?php $MDMMod4o = str_split(folio($dual['MDMMod4o'],3,' '));?>
				<td class="cdr-r"><?=$MDMMod4o[0]?></td>
				<td class="cdr-r"><?=$MDMMod4o[1]?></td>
				<td class="cdr-r"><?=$MDMMod4o[2]?></td>
				<td>&nbsp;</td>
				<?php $MDTMod4o = str_split(folio($dual['MDTMod4o'],3,' '));?>
				<td class="cdr-r"><?=$MDTMod4o[0]?></td>
				<td class="cdr-r"><?=$MDTMod4o[1]?></td>
				<td class="cdr-r"><?=$MDTMod4o[2]?></td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td class="text-center" ><label><?php if ($periodoAct[0]['PPeriodo'] == 2) { echo "Quinto."; } else { echo "Sexto.";} ?></label></td>
				<?php $MDHMod6o = str_split(folio($dual['MDHMod6o'],3,' '));?>
				<td class="cdr-r"><?=$MDHMod6o[0]?></td>
				<td class="cdr-r"><?=$MDHMod6o[1]?></td>
				<td class="cdr-r"><?=$MDHMod6o[2]?></td>
				<td>&nbsp;</td>
				<?php $MDMMod6o = str_split(folio($dual['MDMMod6o'],3,' '));?>
				<td class="cdr-r"><?=$MDMMod6o[0]?></td>
				<td class="cdr-r"><?=$MDMMod6o[1]?></td>
				<td class="cdr-r"><?=$MDMMod6o[2]?></td>
				<td>&nbsp;</td>
				<?php $MDTMod6o = str_split(folio($dual['MDTMod6o'],3,' '));?>
				<td class="cdr-r"><?=$MDTMod6o[0]?></td>
				<td class="cdr-r"><?=$MDTMod6o[1]?></td>
				<td class="cdr-r"><?=$MDTMod6o[2]?></td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td class="text-center" ><label>Total</label></td>
				<?php $MDHModTotal = str_split(folio($dual['MDHModTotal'],3,' '));?>
				<td class="cdr-r"><?=$MDHModTotal[0]?></td>
				<td class="cdr-r"><?=$MDHModTotal[1]?></td>
				<td class="cdr-r"><?=$MDHModTotal[2]?></td>
				<td>&nbsp;</td>
				<?php $MDMModTotal = str_split(folio($dual['MDMModTotal'],3,' '));?>
				<td class="cdr-r"><?=$MDMModTotal[0]?></td>
				<td class="cdr-r"><?=$MDMModTotal[1]?></td>
				<td class="cdr-r"><?=$MDMModTotal[2]?></td>
				<td>&nbsp;</td>
				<?php $MDTModTotal = str_split(folio($dual['MDTModTotal'],3,' '));?>
				<td class="cdr-r"><?=$MDTModTotal[0]?></td>
				<td class="cdr-r"><?=$MDTModTotal[1]?></td>
				<td class="cdr-r"><?=$MDTModTotal[2]?></td>
				<td>&nbsp;</td>				
				</tr>
			</tbody>
		</table>
		</td>
	</tr>
</table><br><br><br><br><br>
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>*IMPORTANTE: Para un desglose más detallado, favor de llenar el archivo anexo en formato Excel enviado por el Departamento de Estadística y Evaluación.</b></td>
    </tr>
</table>
<?=br(15)?>
<table align="right">
	<tr>
		<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
		<td>
			<table>
				<tr>
					<td><b>CLAVE DEL CENTRO DE TRABAJO:</b></td>
					<td class="cdr-r"><?=$CPLCCT[0]?></td>
					<td class="cdr-r"><?=$CPLCCT[1]?></td>
					<td class="cdr-r"><?=$CPLCCT[2]?></td>
					<td class="cdr-r"><?=$CPLCCT[3]?></td>
					<td class="cdr-r"><?=$CPLCCT[4]?></td>
					<td class="cdr-r"><?=$CPLCCT[5]?></td>
					<td class="cdr-r"><?=$CPLCCT[6]?></td>
					<td class="cdr-r"><?=$CPLCCT[7]?></td>
					<td class="cdr-r"><?=$CPLCCT[8]?></td>
					<td class="cdr-r"><?=$CPLCCT[9]?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-40 no-border">
		<b>VIII. DOCENTES </b><br>
		<p class="text-justify">Escriba por género, el número de docentes que están atendiendo este programa en el semestre <?= $periodoAct[0]['PAnio'] ?>.</p>
		</td>
		<td class="text-left table-10 no-border"></td>
		<td class="table-50 no-border"><br>
		<table class="table table-90">
			<thead>
				<tr>
					<td class="text-center" colspan="9">Docentes</td><td>&nbsp;</td>
				</tr>
				<tr>
					<td class="text-center" colspan="3">Hombres</td><td>&nbsp;</td>
					<td class="text-center" colspan="3">Mujeres</td><td>&nbsp;</td>
					<td class="text-center" colspan="3">Total</td><td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php $DHombres = str_split(folio($docentes['DHombres'],3,' '));?>
				<td class="cdr-r"><?=$DHombres[0]?></td>
				<td class="cdr-r"><?=$DHombres[1]?></td>
				<td class="cdr-r"><?=$DHombres[2]?></td>
				<td>&nbsp;</td>
				<?php $DMujeres = str_split(folio($docentes['DMujeres'],3,' '));?>
				<td class="cdr-r"><?=$DMujeres[0]?></td>
				<td class="cdr-r"><?=$DMujeres[1]?></td>
				<td class="cdr-r"><?=$DMujeres[2]?></td>
				<td>&nbsp;</td>
				<?php $DTotal = str_split(folio($docentes['DTotal'],3,' '));?>
				<td class="cdr-r"><?=$DTotal[0]?></td>
				<td class="cdr-r"><?=$DTotal[1]?></td>
				<td class="cdr-r"><?=$DTotal[2]?></td>
				<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<p class="text-justify">(Con corte al 15 de marzo de <?= $periodoAct[0]['PAnio'] ?>)</p>
		<p class="text-justify">Nota para la Modalidad No Escolarizada: Si por algún motivo no cuenta con personal docente para esta modalidad, reporte el total de asesores que la atendieron.</p>
		</td>
	</tr>
</table><br><br><br><br><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-40 no-border">
		<p class="text-justify"><b>VIII. PERSONAL DOCENTE </b></p>
		<p class="text-justify">De la cantidad de docentes registrado en punto anterior desglose según el tiempo de dedicación.</p>
		</td>
		<td class="table-10"></td>
		<td class="text-right table-50" >
		<table class="table table-100">
          <tr>
            <td><b>Genero</b></td>
            <td colspan="3" class="text-center">Tiempo completo</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">3/4 de Tiempo</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">1/2 de Tiempo</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Por horas</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Extranjeros</td>
          </tr>
          <tbody>
            <tr>
              <td>Hombres</td>
              <?php $DHTiempoCom = str_split(folio($docentes['DHTiempoCom'],3,' '));?></td>
              <td class="cdr-r"><?=$DHTiempoCom[0]?></td>
              <td class="cdr-r"><?=$DHTiempoCom[1]?></td>
              <td class="cdr-r"><?=$DHTiempoCom[2]?></td>
              <td><?php $DH34Tiempo = str_split(folio($docentes['DH34Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DH34Tiempo[0]?></td>
              <td class="cdr-r"><?=$DH34Tiempo[1]?></td>
              <td class="cdr-r"><?=$DH34Tiempo[2]?></td>
              <td><?php $DH12Tiempo = str_split(folio($docentes['DH12Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DH12Tiempo[0]?></td>
              <td class="cdr-r"><?=$DH12Tiempo[1]?></td>
              <td class="cdr-r"><?=$DH12Tiempo[2]?></td>
              <td><?php $DHPorHoras = str_split(folio($docentes['DHPorHoras'],3,' '));?></td>
              <td class="cdr-r"><?=$DHPorHoras[0]?></td>
              <td class="cdr-r"><?=$DHPorHoras[1]?></td>
              <td class="cdr-r"><?=$DHPorHoras[2]?></td>
              <td><?php $DHTTotal = str_split(folio($docentes['DHTTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$DHTTotal[0]?></td>
              <td class="cdr-r"><?=$DHTTotal[1]?></td>
              <td class="cdr-r"><?=$DHTTotal[2]?></td>
            </tr>
            <tr>
              <td>Mujeres</td>
              <?php $DMTiempoCom = str_split(folio($docentes['DMTiempoCom'],3,' '));?></td>
              <td class="cdr-r"><?=$DMTiempoCom[0]?></td>
              <td class="cdr-r"><?=$DMTiempoCom[1]?></td>
              <td class="cdr-r"><?=$DMTiempoCom[2]?></td>
              <td><?php $DM34Tiempo = str_split(folio($docentes['DM34Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DM34Tiempo[0]?></td>
              <td class="cdr-r"><?=$DM34Tiempo[1]?></td>
              <td class="cdr-r"><?=$DM34Tiempo[2]?></td>
              <td><?php $DM12Tiempo = str_split(folio($docentes['DM12Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DM12Tiempo[0]?></td>
              <td class="cdr-r"><?=$DM12Tiempo[1]?></td>
              <td class="cdr-r"><?=$DM12Tiempo[2]?></td>
              <td><?php $DMPorHoras = str_split(folio($docentes['DMPorHoras'],3,' '));?></td>
              <td class="cdr-r"><?=$DMPorHoras[0]?></td>
              <td class="cdr-r"><?=$DMPorHoras[1]?></td>
              <td class="cdr-r"><?=$DMPorHoras[2]?></td>
              <td><?php $DMTTotal = str_split(folio($docentes['DMTTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$DMTTotal[0]?></td>
              <td class="cdr-r"><?=$DMTTotal[1]?></td>
              <td class="cdr-r"><?=$DMTTotal[2]?></td>
            </tr>
            <tr>
              <td class="text-center"><b>Total</b>
              <?php $DTTiempoCom = str_split(folio($docentes['DTTiempoCom'],3,' '));?></td>
              <td class="cdr-r"><?=$DTTiempoCom[0]?></td>
              <td class="cdr-r"><?=$DTTiempoCom[1]?></td>
              <td class="cdr-r"><?=$DTTiempoCom[2]?></td>
              <td><?php $DT34Tiempo = str_split(folio($docentes['DT34Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DT34Tiempo[0]?></td>
              <td class="cdr-r"><?=$DT34Tiempo[1]?></td>
              <td class="cdr-r"><?=$DT34Tiempo[2]?></td>
              <td><?php $DT12Tiempo = str_split(folio($docentes['DT12Tiempo'],3,' '));?></td>
              <td class="cdr-r"><?=$DT12Tiempo[0]?></td>
              <td class="cdr-r"><?=$DT12Tiempo[1]?></td>
              <td class="cdr-r"><?=$DT12Tiempo[2]?></td>
              <td><?php $DTPorHoras = str_split(folio($docentes['DTPorHoras'],3,' '));?></td>
              <td class="cdr-r"><?=$DTPorHoras[0]?></td>
              <td class="cdr-r"><?=$DTPorHoras[1]?></td>
              <td class="cdr-r"><?=$DTPorHoras[2]?></td>
              <td><?php $DTTotal = str_split(folio($docentes['DTTotal'],3,' '));?></td>
              <td class="cdr-r"><?=$DTTotal[0]?></td>
              <td class="cdr-r"><?=$DTTotal[1]?></td>
              <td class="cdr-r"><?=$DTTotal[2]?></td>
            </tr> 
          </tbody>
      </table>
		</td>
	</tr>
</table>
<?=br(15)?>
<table align="right">
	<tr>
		<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
		<td>
			<table>
				<tr>
					<td><b>CLAVE DEL CENTRO DE TRABAJO:</b></td>
					<td class="cdr-r"><?=$CPLCCT[0]?></td>
					<td class="cdr-r"><?=$CPLCCT[1]?></td>
					<td class="cdr-r"><?=$CPLCCT[2]?></td>
					<td class="cdr-r"><?=$CPLCCT[3]?></td>
					<td class="cdr-r"><?=$CPLCCT[4]?></td>
					<td class="cdr-r"><?=$CPLCCT[5]?></td>
					<td class="cdr-r"><?=$CPLCCT[6]?></td>
					<td class="cdr-r"><?=$CPLCCT[7]?></td>
					<td class="cdr-r"><?=$CPLCCT[8]?></td>
					<td class="cdr-r"><?=$CPLCCT[9]?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-40 no-border">
		<p class="text-justify"><b>IX. MATRICULA DE FORMACIÓN PARA EL TRABAJO </b></p>
		<p class="text-justify"><em>(Esta sección sólo será llenada cuando el Bachillerato General imparta Formación para el Trabajo).</em></p>
		</td>
	</tr>
	<tr>
		<td>
		<p class="text-justify">1. Escriba por género, el número de alumnos (Matrícula <?= $periodoAct[0]['PAnio']?> - <?= $periodoAct[0]['PPeriodo']?>) que cursan alguna Formación para el Trabajo.</p>
		</td>
		<td class="table-10"></td>
		<td class="text-right table-50" >
		<table class="table table-100">
          <tr>
            <td colspan="3" class="text-center">Hombres</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Mujeres</td>
            <td>&nbsp;</td>		
            <td colspan="3" class="text-center">Total</td>
          </tr>
          <tbody>
            <tr>
              <td><?php $THombres = str_split(folio($alumCap['THombres'],3,' '));?></td>
              <td class="cdr-r"><?=$THombres[0]?></td>
              <td class="cdr-r"><?=$THombres[1]?></td>
              <td class="cdr-r"><?=$THombres[2]?></td>
              <td><?php $TMujeres = str_split(folio($alumCap['TMujeres'],3,' '));?></td>
              <td class="cdr-r"><?=$TMujeres[0]?></td>
              <td class="cdr-r"><?=$TMujeres[1]?></td>
              <td class="cdr-r"><?=$TMujeres[2]?></td>
              <td><?php $Total = str_split(folio($alumCap['Total'],3,' '));?></td>
              <td class="cdr-r"><?=$Total[0]?></td>
              <td class="cdr-r"><?=$Total[1]?></td>
              <td class="cdr-r"><?=$Total[2]?></td>
            </tr>
          </tbody>
     	</table>
		</td>
	</tr>
</table>
<table class="table-100 no-border">
    <tr>
		<td class="text-left table-40 no-border">
		<p class="text-justify">2. Escriba el número de Formaciones para el Trabajo que se ofrece en el Bachillerato General.</p>
		</td>
		<td class="text-left table-10 no-border"></td>
		<td class="table-50 no-border"><br>
		<table class="table table-90">
			<thead>
				<tr>
					<td class="text-center" colspan="2">Formación para el Trabajo</td><td>&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php $contarFor = str_split(folio($contarFor,2,' '));?>
				<td class="cdr-r"><?=$contarFor[0]?></td>
				<td class="cdr-r"><?=$contarFor[1]?></td>
				<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
		</td>
	</tr>
</table>
<?=br(25)?>
<table align="right">
	<tr>
		<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
		<td>
			<table>
				<tr>
					<td><b>CLAVE DEL CENTRO DE TRABAJO:</b></td>
					<td class="cdr-r"><?=$CPLCCT[0]?></td>
					<td class="cdr-r"><?=$CPLCCT[1]?></td>
					<td class="cdr-r"><?=$CPLCCT[2]?></td>
					<td class="cdr-r"><?=$CPLCCT[3]?></td>
					<td class="cdr-r"><?=$CPLCCT[4]?></td>
					<td class="cdr-r"><?=$CPLCCT[5]?></td>
					<td class="cdr-r"><?=$CPLCCT[6]?></td>
					<td class="cdr-r"><?=$CPLCCT[7]?></td>
					<td class="cdr-r"><?=$CPLCCT[8]?></td>
					<td class="cdr-r"><?=$CPLCCT[9]?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br>
<table class="table-100 no-border">
    <tr>
		<td class="text-left no-border">
		<p class="text-justify">3. Escriba por género, clave y nombre de Formación para el Trabajo el número de alumnos reportados en la pregunta 1 de esta sección.</p>
		</td>
	</tr>
</table><?=br(3)?>
<table>
	<tr>
		<td></td>
		<td>&nbsp;</td><td colspan="9" class="text-center">Clave de la Formación para el Trabajo</td>
		<td>&nbsp;</td><td>Nombre de la Formación para el Trabajo</td>
		<td>&nbsp;</td><td colspan="3" class="text-center">Hombres</td>
		<td>&nbsp;</td><td colspan="3" class="text-center">Mujeres</td>
		<td>&nbsp;</td><td colspan="3" class="text-center">Total</td>
		
	</tr>
	<?php if (!empty($formacionesTrab)) { ?>
		<?php $i=1; foreach ($formacionesTrab as $f => $listF) { ?>
	<tr>
		<td><?= $i.'.'?></td>
		<td><?php $FClave = str_split(folio($listF['FClave'],9,' '));?></td><td class="cdr-r"><?=$FClave[0]?></td><td class="cdr-r"><?=$FClave[1]?></td><td class="cdr-r"><?=$FClave[2]?></td><td class="cdr-r"><?=$FClave[3]?></td><td class="cdr-r"><?=$FClave[4]?></td><td class="cdr-r"><?=$FClave[5]?></td><td class="cdr-r"><?=$FClave[6]?></td><td class="cdr-r"><?=$FClave[7]?></td><td class="cdr-r"><?=$FClave[8]?></td></td>
		<td>&nbsp;</td><td class="border-bottom"><?= $listF['FNombreFormacion']?></td>
		<td><?php $FHombres = str_split(folio($listF['FHombres'],3,' '));?></td><td class="cdr-r"><?=$FHombres[0]?></td><td class="cdr-r"><?=$FHombres[1]?></td><td class="cdr-r"><?=$FHombres[2]?></td></td>
		<td><?php $FMujeres = str_split(folio($listF['FMujeres'],3,' '));?></td><td class="cdr-r"><?=$FMujeres[0]?></td><td class="cdr-r"><?=$FMujeres[1]?></td><td class="cdr-r"><?=$FMujeres[2]?></td></td>
		<td><?php $FTotal = str_split(folio($listF['FTotal'],3,' '));?></td><td class="cdr-r"><?=$FTotal[0]?></td><td class="cdr-r"><?=$FTotal[1]?></td><td class="cdr-r"><?=$FTotal[2]?></td></td>
	</tr>
	<?php $i++; } ?>
	<?php } ?>
	<tr>
		<td colspan="13" class="text-right">Total</td>
		<td><?php $THombres = str_split(folio($alumCap['THombres'],3,' '));?></td>
		<td class="cdr-r"><?=$THombres[0]?></td>
		<td class="cdr-r"><?=$THombres[1]?></td>
		<td class="cdr-r"><?=$THombres[2]?></td>
		<td><?php $TMujeres = str_split(folio($alumCap['TMujeres'],3,' '));?></td>
		<td class="cdr-r"><?=$TMujeres[0]?></td>
		<td class="cdr-r"><?=$TMujeres[1]?></td>
		<td class="cdr-r"><?=$TMujeres[2]?></td>
		<td><?php $TotalT = str_split(folio($alumCap['Total'],3,' '));?></td>
		<td class="cdr-r"><?=$TotalT[0]?></td>
		<td class="cdr-r"><?=$TotalT[1]?></td>
		<td class="cdr-r"><?=$TotalT[2]?></td>
	</tr>
</table>
<?=br(25)?>
		<table align="right">
			<tr>
				<td><?php $CPLCCT = str_split(folio($planteles['CPLCCT'],10));?></td>
				<td>
					<table>
						<tr>
							<td><b>CLAVE DEL CENTRO DE TRABAJO</b></td>
							<td class="cdr-r"><?=$CPLCCT[0]?></td>
							<td class="cdr-r"><?=$CPLCCT[1]?></td>
							<td class="cdr-r"><?=$CPLCCT[2]?></td>
							<td class="cdr-r"><?=$CPLCCT[3]?></td>
							<td class="cdr-r"><?=$CPLCCT[4]?></td>
							<td class="cdr-r"><?=$CPLCCT[5]?></td>
							<td class="cdr-r"><?=$CPLCCT[6]?></td>
							<td class="cdr-r"><?=$CPLCCT[7]?></td>
							<td class="cdr-r"><?=$CPLCCT[8]?></td>
							<td class="cdr-r"><?=$CPLCCT[9]?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
</div>

<div class="container page_break page3">
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>Colegio de Bachilleres del Estado de México</b></td><td></td><td class="text-right"><b>Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b></td>
    </tr>
</table><br><br>
<table class="table-100 no-border">
    <tr>
      <td class="text-left"><b>IMPORTANTE:</b> Firme y selle esta hoja de oficialización.</td>
    </tr>
</table><br><br>

<table class="table-100 ">
    <tr>
    <td class="table-100" style="border-radius: 10px; border:1pt solid #9c9c9c !important;" rowspan="15">
	<p><b>OBSERVACIONES: </b></p>
	<p><u><?= nvl($PlanEstudios['PEObservaciones'])?></u></p>
	</td>
	</tr>
</table>
<?=br(8)?>
<table class="table-100 no-border">
    <tr>
		<td class="table-40" style="border-radius: 10px; border:1pt solid #9c9c9c !important;">
		<p class="text-center"><b><?= br(4) ?>Sello</b></p>
		</td>
		<td class="table-10"></td>
		<td class="text-right table-50" >
		<table class="table table-100">
          <tbody>
            <tr>
				<td class="text-center"  colspan="13">
					<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $director['CPLDirector'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= br(1) ?></u>
					Nombre y Firma del Director del Centro de Trabajo<?= br(4) ?>
				</td>
            </tr>
			<tr>
				<td class="text-center"  colspan="13">
					<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $PlanEstudios['UNombre'].' '.$PlanEstudios['UApellido_pat'].' '.$PlanEstudios['UApellido_mat'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= br(1) ?></u>
					Nombre y Firma del Responsable del Llenado<?= br(4) ?>
				</td>
            </tr>
			<tr>
				<td class="text-center"></td><td>&nbsp;</td>
				<td class="text-center" colspan="4"><b>Año</b></td><td>&nbsp;</td>
				<td class="text-center" colspan="2"><b>Mes</b></td><td>&nbsp;</td>
				<td class="text-center" colspan="2"><b>Dia</b></td><td>&nbsp;</td>
            </tr>
            <tr>
				<?php $fecha = explode('-', $PlanEstudios['PEFechaRealizo']);  ?>
				<td class="text-center"><b>Fecha de Llenado</b></td>
				<td><?php $anio = str_split(folio($fecha[0],4,' '));?></td>
				<td class="cdr-r"><?=$anio[0]?></td>
				<td class="cdr-r"><?=$anio[1]?></td>
				<td class="cdr-r"><?=$anio[2]?></td>
				<td class="cdr-r"><?=$anio[3]?></td>
				<td><?php $mes = str_split(folio($fecha[1],2,' '));?></td>
				<td class="cdr-r"><?=$mes[0]?></td>
				<td class="cdr-r"><?=$mes[1]?></td>
				<td><?php $dia = str_split(folio($fecha[2],2,' '));?></td>
				<td class="cdr-r"><?=$dia[0]?></td>
				<td class="cdr-r"><?=$dia[1]?></td>
            </tr> 
          </tbody>
      </table>
		</td>
	</tr>
</table>

</div>


<style type="text/css">
@page { 
			margin: 30px 50px 40px 40px; 
			font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 11px;
			color: #676a6c;
		}

.page_break {
  page-break-after: always;
  -page-break-inside: always;
}
.text-m { font-size:10px !important; }
.rounded		{ border:solid 1px; border-radius: 10px; }

/*th, td	{
	border:1pt solid #9c9c9c !important; 
	padding: 0px 3px !important; 
	v7ertical-align:middle !important; 
	width: auto;
}*/

th	{ background: #eaeaea !important; }

.table-100 {
  width: 100%;
}
.table-90 {
  width: 90%;
}
.table-80 {
  width: 80%;
}
.table-70 {
  width: 70%;
}
.table-60 {
  width: 60%;
}
.table-50 {
  width: 50%;
}
.table-40 {
  width: 40%;
}
.table-30 {
  width: 30%;
}
.table-25 {
  width: 25%;
}
.table-20 {
  width: 20%;
}
.table-10 {
  width: 10%;
}

.salto {
    word-wrap: break-word !important;         /* All browsers since IE 5.5+ */
    overflow-wrap: break-word !important;     /* Renamed property in CSS3 draft spec */
	white-space: pre-wrap !important;      /* CSS3 */   
	white-space: -moz-pre-wrap !important; /* Firefox */    
	white-space: -pre-wrap !important;     /* Opera menor 7 */   
	white-space: -o-pre-wrap !important;   /* Opera 7 */ 
	width: 130px !important;
	word-break: break-all !important;
	text-align: left;
}

.no-border		{ 
	border:none !important; 
	-font-size:3px !important; 
}
.no-border-left		{ border-left: hidden !important; }
.no-border-right	{ border-right: hidden !important; }
.no-border-top		{ border-top: hidden !important; }
.no-border-bottom	{ border-bottom: hidden !important; }


.border-bottom		{ border-top: 1px !important; }

.no-content		{ font-size:6px !important; }
.text-left		{ text-align: left !important; }
.text-center	{ text-align: center !important; }
.text-right		{ text-align: right !important; }
.text-justify 	{ text-align: justify !important; }
.text-danger	{ color:red !important; }
.texto-sello 	{ color: blue !important; font-size: 8px !important;}
.firmas			{ 
	line-height: 1.2 !important; 
	height:80px !important; 
	vertical-align: bottom !important; 
	padding: 3px 3px !important; 
}


.cdr-r{
	border-left: 1pt solid #9c9c9c !important;
	border-right: 1pt solid #9c9c9c  !important;
	border-top: 1pt solid #9c9c9c !important;
	border-bottom: 1pt solid #9c9c9c !important;
	text-align: center !important;
	width: 18px !important;
}
.page3{
	font-family: Arial, Trebuchet, sans-serif;
	font-size:12px !important;
}
.grado{
	background-color: #818285;
	border-radius: 20%;
	color: white;
	font-weight: bold !important;
	width:18px;
}
</style>