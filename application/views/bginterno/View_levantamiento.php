<link href="<?php echo base_url('assets/inspinia/css/plugins/steps/jquery.steps.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/iCheck/custom.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/animate.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/dropzone/basic.css'); ?>" rel="stylesheet">


<form id="form" class="wizard-big">
    <!--.........................................-->				
    <h1> Características del Plan de Estudios</h1>
    <fieldset>
        <input type="hidden" name="idPlanEstudio" id="idPlanEstudio" value="<?= nvl($PlanEstudios['PEIdPlanEstudios'])?>">
        <input type="hidden" name="CPLTipo" id="CPLTipo" value="<?= nvl($planteles['CPLTipo'])?>">
        <input type="hidden" name="CPLClave" id="CPLClave" value="<?= nvl($planteles['CPLClave'])?>">
        <p style="font-size: 14px;">1. Marque con una X el servicio educativo al que corresponde la matrícula.</p>
            <div class="row">
                <div class="col-md-5">
                    <div class="i-checks"> <label>Bachillerato General sin Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control"  value="1" disabled/> 
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="i-checks"><label>Bachillerato General con Formación para el Trabajo </label>     <input type="radio" name="PEServicioEducativo" id="PEServicioEducativo" class="form-control" value="2" checked/>  
                    </div>
                </div>
            </div>
            <br><br>
            
            <p style="font-size: 14px;">2. Fecha de creación o actualización del plan de estudios.</p>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="PEActualizacionAnio" id="PEActualizacionAnio" class="form-control" disabled>
                                <option value="2018">2018</option>                            
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="PEActualizacionMes" id="PEActualizacionMes" class="form-control" disabled>
                                <option value="7"><?= ver_mes('7') ?></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="PEActualizacionDia" id="PEActualizacionDia" class="form-control" disabled>
                                <option value="3"><?= setDia('3') ?></option>	
                        </select>									
                    </div>
                </div>
            </div><br><br>
            
            <p style="font-size: 14px;">3. Escriba la duración del bachillerato y marque con una X la estructura del plan de estudios que le corresponde.</p>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Duración</label>
                        <input id="PEDuracion" name="PEDuracion" type="text" class="form-control numeros" min="0" max="50" step="1" pattern="[0-9]{10}" value="6" disabled>
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
                                            <div class="i-checks">
                                                <input type="radio" name="PEEstructura" id="PEEstructura" value="1" onclick='mostrarOtro()' class="form-control" disabled> <label></label>
                                            </div>
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="i-checks">
                                                <input type="radio" name="PEEstructura" id="PEEstructura" value="2" onclick='mostrarOtro()' class="form-control" checked> <label></label>
                                            </div>
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="i-checks">
                                                <input type="radio" name="PEEstructura" id="PEEstructura" value="3" onclick='mostrarOtro()' class="form-control" disabled> <label></label>
                                            </div>
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="i-checks">
                                               <input type="radio" name="PEEstructura" id="PEEstructura" value="4" onclick='mostrarOtro()' class="form-control" disabled> <label></label>
                                            </div>
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="i-checks">
                                                <input type="radio" name="PEEstructura" id="PEEstructura" value="5" onclick='mostrarOtro()' class="form-control" disabled><label> </label>
                                            </div>
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
                        <input id="PECreditos" name="PECreditos" type="text" class="form-control  numeros" min="0" step="1" value="332" disabled>
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
                                <td><input type="text" id="EHombres1" name="EHombres1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombres1'] == '') { echo 0; } else { echo $existAprob['EHombres1']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EMujeres1" name="EMujeres1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeres1'] == '') { echo 0; } else { echo $existAprob['EMujeres1']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="ETotal1" name="ETotal1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotal1'] == '') { echo 0; } else { echo $existAprob['ETotal1']; }?>" disabled></td>
                                <td><input type="text" id="EDiscapacidad1" name="EDiscapacidad1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidad1'] == '') { echo 0; } else { echo $existAprob['EDiscapacidad1']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EHablantes1" name="EHablantes1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantes1'] == '') { echo 0; } else { echo $existAprob['EHablantes1']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EExtranjero1" name="EExtranjero1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjero1'] == '') { echo 0; } else { echo $existAprob['EExtranjero1']; }?>"  onkeyup="sumarExistentes();"></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="EHombres2" name="EHombres2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombres3'] == '') { echo 0; } else { echo $existAprob['EHombres3']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EMujeres2" name="EMujeres2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeres3'] == '') { echo 0; } else { echo $existAprob['EMujeres3']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="ETotal2" name="ETotal2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotal3'] == '') { echo 0; } else { echo $existAprob['ETotal3']; }?>" disabled></td>
                                <td><input type="text" id="EDiscapacidad2" name="EDiscapacidad2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidad3'] == '') { echo 0; } else { echo $existAprob['EDiscapacidad3']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EHablantes2" name="EHablantes2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantes3'] == '') { echo 0; } else { echo $existAprob['EHablantes3']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EExtranjero2" name="EExtranjero2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjero3'] == '') { echo 0; } else { echo $existAprob['EExtranjero3']; }?>"  onkeyup="sumarExistentes();"></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="EHombres3" name="EHombres3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombres5'] == '') { echo 0; } else { echo $existAprob['EHombres5']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EMujeres3" name="EMujeres3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeres5'] == '') { echo 0; } else { echo $existAprob['EMujeres5']; }?>" onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="ETotal3" name="ETotal3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotal5'] == '') { echo 0; } else { echo $existAprob['ETotal5']; }?>" disabled></td>
                                <td><input type="text" id="EDiscapacidad3" name="EDiscapacidad3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidad5'] == '') { echo 0; } else { echo $existAprob['EDiscapacidad5']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EHablantes3" name="EHablantes3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantes5'] == '') { echo 0; } else { echo $existAprob['EHablantes5']; }?>"  onkeyup="sumarExistentes();"></td>
                                <td><input type="text" id="EExtranjero3" name="EExtranjero3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjero5'] == '') { echo 0; } else { echo $existAprob['EExtranjero5']; }?>"  onkeyup="sumarExistentes();"></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="EHombresTotal" name="EHombresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombresTotal'] == '') { echo 0; } else { echo $existAprob['EHombresTotal']; }?>" disabled></td>
                                <td><input type="text" id="EMujeresTotal" name="EMujeresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeresTotal'] == '') { echo 0; } else { echo $existAprob['EMujeresTotal']; }?>" disabled></td>
                                <td><input type="text" id="ETotalTotal" name="ETotalTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotalTotal'] == '') { echo 0; } else { echo $existAprob['ETotalTotal']; }?>" disabled></td>
                                <td><input type="text" id="EDiscapacidadTotal" name="EDiscapacidadTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidadTotal'] == '') { echo 0; } else { echo $existAprob['EDiscapacidadTotal']; }?>" disabled></td>
                                <td><input type="text" id="EHablantesTotal" name="EHablantesTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantesTotal'] == '') { echo 0; } else { echo $existAprob['EHablantesTotal']; }?>" disabled></td>
                                <td><input type="text" id="EExtranjeroTotal" name="EExtranjeroTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjeroTotal'] == '') { echo 0; } else { echo $existAprob['EExtranjeroTotal']; }?>" disabled></td>
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
                                <td><input type="text" id="AHombres1" name="AHombres1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombresAp1'] == '') { echo 0; } else { echo $existAprob['EHombresAp1'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AMujeres1" name="AMujeres1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeresAp1'] == '') { echo 0; } else { echo $existAprob['EMujeresAp1'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="ATotal1" name="ATotal1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotalAp1'] == '') { echo 0; } else { echo $existAprob['ETotalAp1'];}?>" disabled></td>
                                <td><input type="text" id="ADiscapacidad1" name="ADiscapacidad1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidadAp1'] == '') { echo 0; } else { echo $existAprob['EDiscapacidadAp1'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AHablantes1" name="AHablantes1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantesAp1'] == '') { echo 0; } else { echo $existAprob['EHablantesAp1'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AExtranjero1" name="AExtranjero1" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjeroAp1'] == '') { echo 0; } else { echo $existAprob['EExtranjeroAp1'];}?>" onkeyup="sumarAprobados();"></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="AHombres2" name="AHombres2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombresAp3'] == '') { echo 0; } else { echo $existAprob['EHombresAp3'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AMujeres2" name="AMujeres2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeresAp3'] == '') { echo 0; } else { echo $existAprob['EMujeresAp3'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="ATotal2" name="ATotal2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotalAp3'] == '') { echo 0; } else { echo $existAprob['ETotalAp3'];}?>" disabled></td>
                                <td><input type="text" id="ADiscapacidad2" name="ADiscapacidad2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidadAp3'] == '') { echo 0; } else { echo $existAprob['EDiscapacidadAp3'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AHablantes2" name="AHablantes2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantesAp3'] == '') { echo 0; } else { echo $existAprob['EHablantesAp3'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AExtranjero2" name="AExtranjero2" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjeroAp3'] == '') { echo 0; } else { echo $existAprob['EExtranjeroAp3'];}?>" onkeyup="sumarAprobados();"></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="AHombres3" name="AHombres3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombresAp5'] == '') { echo 0; } else { echo $existAprob['EHombresAp5'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AMujeres3" name="AMujeres3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeresAp5'] == '') { echo 0; } else { echo $existAprob['EMujeresAp5'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="ATotal3" name="ATotal3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotalAp5'] == '') { echo 0; } else { echo $existAprob['ETotalAp5'];}?>" disabled></td>
                                <td><input type="text" id="ADiscapacidad3" name="ADiscapacidad3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidadAp5'] == '') { echo 0; } else { echo $existAprob['EDiscapacidadAp5'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AHablantes3" name="AHablantes3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantesAp5'] == '') { echo 0; } else { echo $existAprob['EHablantesAp5'];}?>" onkeyup="sumarAprobados();"></td>
                                <td><input type="text" id="AExtranjero3" name="AExtranjero3" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjeroAp5'] == '') { echo 0; } else { echo $existAprob['EExtranjeroAp5'];}?>" onkeyup="sumarAprobados();"></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="AHombresTotal" name="AHombresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHombresApTotal'] == '') { echo 0; } else { echo $existAprob['EHombresApTotal'];}?>" disabled></td>
                                <td><input type="text" id="AMujeresTotal" name="AMujeresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EMujeresApTotal'] == '') { echo 0; } else { echo $existAprob['EMujeresApTotal'];}?>" disabled></td>
                                <td><input type="text" id="ATotalTotal" name="ATotalTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['ETotalApTotal'] == '') { echo 0; } else { echo $existAprob['ETotalApTotal'];}?>" disabled></td>
                                <td><input type="text" id="ADiscapacidadTotal" name="ADiscapacidadTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EDiscapacidadApTotal'] == '') { echo 0; } else { echo $existAprob['EDiscapacidadApTotal'];}?>" disabled></td>
                                <td><input type="text" id="AHablantesTotal" name="AHablantesTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EHablantesApTotal'] == '') { echo 0; } else { echo $existAprob['EHablantesApTotal'];}?>" disabled></td>
                                <td><input type="text" id="AExtranjeroTotal" name="AExtranjeroTotal" class="form-control numeros" min="0" step="1" value="<?php if ($existAprob['EExtranjeroApTotal'] == '') { echo 0; } else { echo $existAprob['EExtranjeroApTotal'];}?>" disabled></td>
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
                                <td><input type="text" id="RepHombres1" name="RepHombres1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresRep1'] == '') { echo 0; } else { echo $reprobReg['AHombresRep1'];}?>" disabled></td>
                                <td><input type="text" id="RepMujeres1" name="RepMujeres1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresRep1'] == '') { echo 0; } else { echo $reprobReg['AMujeresRep1'];}?>" disabled></td>
                                <td><input type="text" id="RepTotal1" name="RepTotal1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalRep1'] == '') { echo 0; } else { echo $reprobReg['ATotalRep1'];}?>" disabled></td>
                                <td><input type="text" id="RepDiscapacidad1" name="RepDiscapacidad1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ADiscapacidadRep1'] == '') { echo 0; } else { echo $reprobReg['ADiscapacidadRep1'];}?>" disabled></td>
                                <td><input type="text" id="RepHablantes1" name="RepHablantes1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHablantesRep1'] == '') { echo 0; } else { echo $reprobReg['AHablantesRep1'];}?>" disabled></td>
                                <td><input type="text" id="RepExtranjero1" name="RepExtranjero1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AExtranjerosRep1'] == '') { echo 0; } else { echo $reprobReg['AExtranjerosRep1'];}?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="RepHombres2" name="RepHombres2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresRep3'] == '') { echo 0; } else { echo $reprobReg['AHombresRep3'];}?>" disabled></td>
                                <td><input type="text" id="RepMujeres2" name="RepMujeres2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresRep3'] == '') { echo 0; } else { echo $reprobReg['AMujeresRep3'];}?>" disabled></td>
                                <td><input type="text" id="RepTotal2" name="RepTotal2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalRep3'] == '') { echo 0; } else { echo $reprobReg['ATotalRep3'];}?>" disabled ></td>
                                <td><input type="text" id="RepDiscapacidad2" name="RepDiscapacidad2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ADiscapacidadRep3'] == '') { echo 0; } else { echo $reprobReg['ADiscapacidadRep3'];}?>" disabled></td>
                                <td><input type="text" id="RepHablantes2" name="RepHablantes2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHablantesRep3'] == '') { echo 0; } else { echo $reprobReg['AHablantesRep3'];}?>" disabled></td>
                                <td><input type="text" id="RepExtranjero2" name="RepExtranjero2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AExtranjerosRep3'] == '') { echo 0; } else { echo $reprobReg['AExtranjerosRep3'];}?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="RepHombres3" name="RepHombres3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresRep5'] == '') { echo 0; } else { echo $reprobReg['AHombresRep5'];}?>" disabled></td>
                                <td><input type="text" id="RepMujeres3" name="RepMujeres3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresRep5'] == '') { echo 0; } else { echo $reprobReg['AMujeresRep5'];}?>" disabled></td>
                                <td><input type="text" id="RepTotal3" name="RepTotal3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalRep5'] == '') { echo 0; } else { echo $reprobReg['ATotalRep5'];}?>" disabled ></td>
                                <td><input type="text" id="RepDiscapacidad3" name="RepDiscapacidad3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ADiscapacidadRep5'] == '') { echo 0; } else { echo $reprobReg['ADiscapacidadRep5'];}?>" disabled></td>
                                <td><input type="text" id="RepHablantes3" name="RepHablantes3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHablantesRep5'] == '') { echo 0; } else { echo $reprobReg['AHablantesRep5'];}?>" disabled></td>
                                <td><input type="text" id="RepExtranjero3" name="RepExtranjero3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AExtranjerosRep5'] == '') { echo 0; } else { echo $reprobReg['AExtranjerosRep5'];}?>" disabled></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="RepHombresTotal" name="RepHombresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresRepT'] == '') { echo 0; } else { echo $reprobReg['AHombresRepT'];}?>" disabled></td>
                                <td><input type="text" id="RepMujeresTotal" name="RepMujeresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresRepT'] == '') { echo 0; } else { echo $reprobReg['AMujeresRepT'];}?>" disabled></td>
                                <td><input type="text" id="RepTotalTotal" name="RepTotalTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalRep'] == '') { echo 0; } else { echo $reprobReg['ATotalRep'];}?>" disabled></td>
                                <td><input type="text" id="RepDiscapacidadTotal" name="RepDiscapacidadTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ADiscapacidadRepT'] == '') { echo 0; } else { echo $reprobReg['ADiscapacidadRepT'];}?>" disabled></td>
                                <td><input type="text" id="RepHablantesTotal" name="RepHablantesTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHablantesRepT'] == '') { echo 0; } else { echo $reprobReg['AHablantesRepT'];}?>" disabled></td>
                                <td><input type="text" id="RepExtranjeroTotal" name="RepExtranjeroTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AExtranjerosRepT'] == '') { echo 0; } else { echo $reprobReg['AExtranjerosRepT'];}?>" disabled></td>
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
                                <td><input type="text" id="RegHombres1" name="RegHombres1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresReg1'] == '') { echo 0; } else { echo $reprobReg['AHombresReg1'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegMujeres1" name="RegMujeres1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresReg1'] == '') { echo 0; } else { echo $reprobReg['AMujeresReg1'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegTotal1" name="RegTotal1" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalReg1'] == '') { echo 0; } else { echo $reprobReg['ATotalReg1'];}?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="RegHombres2" name="RegHombres2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresReg3'] == '') { echo 0; } else { echo $reprobReg['AHombresReg3'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegMujeres2" name="RegMujeres2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresReg3'] == '') { echo 0; } else { echo $reprobReg['AMujeresReg3'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegTotal2" name="RegTotal2" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalReg3'] == '') { echo 0; } else { echo $reprobReg['ATotalReg3'];}?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="RegHombres3" name="RegHombres3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresReg5'] == '') { echo 0; } else { echo $reprobReg['AHombresReg5'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegMujeres3" name="RegMujeres3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresReg5'] == '') { echo 0; } else { echo $reprobReg['AMujeresReg5'];}?>" onkeyup="sumarRegulares();"></td>
                                <td><input type="text" id="RegTotal3" name="RegTotal3" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalReg5'] == '') { echo 0; } else { echo $reprobReg['ATotalReg5'];}?>" disabled></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="RegHombresTotal" name="RegHombresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AHombresRegT'] == '') { echo 0; } else { echo $reprobReg['AHombresRegT'];}?>" disabled></td>
                                <td><input type="text" id="RegMujeresTotal" name="RegMujeresTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['AMujeresRegT'] == '') { echo 0; } else { echo $reprobReg['AMujeresRegT'];}?>" disabled></td>
                                <td><input type="text" id="RegTotalTotal" name="RegTotalTotal" class="form-control numeros" min="0" step="1" value="<?php if ($reprobReg['ATotalReg'] == '') { echo 0; } else { echo $reprobReg['ATotalReg'];}?>" disabled></td>
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
                                <td><input type="text" id="MIEHombres1" name="MIEHombres1" class="form-control numeros" value="<?= $totales[0][0]['Hombres'] ?>" disabled></td>
                                <td><input type="text" id="MIEMujeres1" name="MIEMujeres1" class="form-control numeros" value="<?= $totales[0][0]['Mujeres'] ?>" disabled></td>
                                <td><input type="text" id="MIETotal1" name="MIETotal1" class="form-control numeros" value="<?= $totales[0][0]['Total'] ?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="MIEHombres2" name="MIEHombres2" class="form-control numeros" value="<?= $totales[1][0]['Hombres'] ?>" disabled></td>
                                <td><input type="text" id="MIEMujeres2" name="MIEMujeres2" class="form-control numeros" value="<?= $totales[1][0]['Mujeres'] ?>" disabled></td>
                                <td><input type="text" id="MIETotal2" name="MIETotal2" class="form-control numeros" value="<?= $totales[1][0]['Total'] ?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="MIEHombres3" name="MIEHombres3" class="form-control numeros" value="<?= $totales[2][0]['Hombres'] ?>" disabled></td>
                                <td><input type="text" id="MIEMujeres3" name="MIEMujeres3" class="form-control numeros" value="<?= $totales[2][0]['Mujeres'] ?>" disabled></td>
                                <td><input type="text" id="MIETotal3" name="MIETotal3" class="form-control numeros" value="<?= $totales[2][0]['Total'] ?>" disabled></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="MIEHombresTotal" name="MIEHombresTotal" class="form-control numeros" value="<?php $totalHombres = nvl($totales[0][0]['Hombres']) + nvl($totales[1][0]['Hombres']) + nvl($totales[2][0]['Hombres']); echo $totalHombres; ?>" disabled></td>
                                <td><input type="text" id="MIEMujeresTotal" name="MIEMujeresTotal" class="form-control numeros" value="<?php $totalMujeres = nvl($totales[0][0]['Mujeres']) +  nvl($totales[1][0]['Mujeres']) +  nvl($totales[2][0]['Mujeres']); echo $totalMujeres; ?>" disabled></td>
                                <td><input type="text" id="MIETotalTotal" name="MIETotalTotal" class="form-control numeros" value="<?php $total = nvl($totales[0][0]['Total']) +  nvl($totales[1][0]['Total']) +  nvl($totales[2][0]['Total']); echo $total; ?>" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </fieldset>

    <!--.........................................-->
    <h1> Abandono Escolar Intracurricular por Grado y Género (Semestre <?php echo $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo']; ?>)</h1>
    <fieldset>
        <p style="font-size: 14px;">1. El abandono intracurricular es la resta de la matrícula y la existencia del semestre <?= $periodoAnt[0]['PAnio'].'-'.$periodoAnt[0]['PPeriodo'] ?>.</p>
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
                                <td><input type="text" id="AEIHombres1" name="AEIHombres1" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEIMujeres1" name="AEIMujeres1" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEITotal1" name="AEITotal1" value="0" class="form-control" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="AEIHombres2" name="AEIHombres2" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEIMujeres2" name="AEIMujeres2" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEITotal2" name="AEITotal2" value="0" class="form-control" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAnt[0]['PPeriodo'] == 2) { echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="AEIHombres3" name="AEIHombres3" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEIMujeres3" name="AEIMujeres3" value="0" class="form-control" disabled></td>
                                <td><input type="text" id="AEITotal3" name="AEITotal3" value="0" class="form-control" disabled></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="AEIHombresTotal" name="AEIHombresTotal" value="<?= $totalHombres - $existAprob['EHombresTotal']?>" class="form-control" disabled></td>
                                <td><input type="text" id="AEIMujeresTotal" name="AEIMujeresTotal" value="<?= $totalMujeres - $existAprob['EMujeresTotal']?>" class="form-control" disabled></td>
                                <td><input type="text" id="AEITotalTotal" name="AEITotalTotal" value="<?= $total - $existAprob['ETotalTotal']?>" class="form-control" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        <h2><label>ABANDONO ESCOLAR INTRACURRICULAR</label> </h2>
        <p style="font-size: 14px;">2. Desglose el motivo de baja o abandono del centro educativo (Cifras reportadas en el cuadro anterior).</p>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "1er."; } else { echo "2do.";} ?> Semestre</th>
                                <th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "3er."; } else { echo "4to.";} ?> Semestre</th>
                                <th colspan="3"><?php if ($periodoAnt[0]['PPeriodo'] == 2) {echo "5o."; } else { echo "6to.";} ?> Semestre</th>
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
                                <td><input type="text" id="BATHombres1" name="BATHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATMujeres1" name="BATMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATAmbos1" name="BATAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAdminT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BATHombres2" name="BATHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATMujeres2" name="BATMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATAmbos2" name="BATAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAdminT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BATHombres3" name="BATHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAdminH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATMujeres3" name="BATMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAdminM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BATAmbos3" name="BATAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAdminT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAdminT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>BAJA ACADÉMICA</label></td>
                                <td><input type="text" id="BAHombres1" name="BAHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAMujeres1" name="BAMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAAmbos1" name="BAAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaAcaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BAHombres2" name="BAHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAMujeres2" name="BAMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAAmbos2" name="BAAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaAcaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BAHombres3" name="BAHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAcaH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAMujeres3" name="BAMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAcaM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BAAmbos3" name="BAAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaAcaT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaAcaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>BAJA ADMVA DEF.</label></td>
                                <td><input type="text" id="BADHombres1" name="BADHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaDefH'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADMujeres1" name="BADMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaDefM'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADAmbos1" name="BADAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1BajaDefT'] == '') { echo 0; } else { echo $abandonoInt1['AI1BajaDefT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BADHombres2" name="BADHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaDefH'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADMujeres2" name="BADMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaDefM'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADAmbos2" name="BADAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3BajaDefT'] == '') { echo 0; } else { echo $abandonoInt3['AI3BajaDefT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="BADHombres3" name="BADHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaDefH'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADMujeres3" name="BADMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaDefM'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="BADAmbos3" name="BADAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5BajaDefT'] == '') { echo 0; } else { echo $abandonoInt5['AI5BajaDefT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>CAMBIO DE PLANTEL</label></td>
                                <td><input type="text" id="CPHombres1" name="CPHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPMujeres1" name="CPMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPAmbos1" name="CPAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt1['AI1CambioPlantelT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="CPHombres2" name="CPHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPMujeres2" name="CPMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPAmbos2" name="CPAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt3['AI3CambioPlantelT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="CPHombres3" name="CPHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CambioPlantelH'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPMujeres3" name="CPMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CambioPlantelM'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CPAmbos3" name="CPAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CambioPlantelT'] == '') { echo 0; } else { echo $abandonoInt5['AI5CambioPlantelT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>FACTORES ECONÓMICOS</label></td>
                                <td><input type="text" id="FEHombres1" name="FEHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1FacEcoH'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEMujeres1" name="FEMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1FacEcoM'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEAmbos1" name="FEAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1FacEcoT'] == '') { echo 0; } else { echo $abandonoInt1['AI1FacEcoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="FEHombres2" name="FEHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3FacEcoH'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEMujeres2" name="FEMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3FacEcoM'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEAmbos2" name="FEAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3FacEcoT'] == '') { echo 0; } else { echo $abandonoInt3['AI3FacEcoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="FEHombres3" name="FEHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5FacEcoH'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEMujeres3" name="FEMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5FacEcoM'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="FEAmbos3" name="FEAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5FacEcoT'] == '') { echo 0; } else { echo $abandonoInt5['AI5FacEcoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>EMBARAZO O MATRIMONIO</label></td>
                                <td><input type="text" id="EMHombres1" name="EMHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMMujeres1" name="EMMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMAmbos1" name="EMAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt1['AI1EmbarazoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="EMHombres2" name="EMHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMMujeres2" name="EMMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMAmbos2" name="EMAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt3['AI3EmbarazoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="EMHombres3" name="EMHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5EmbarazoH'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMMujeres3" name="EMMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5EmbarazoM'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="EMAmbos3" name="EMAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5EmbarazoT'] == '') { echo 0; } else { echo $abandonoInt5['AI5EmbarazoT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>CAMBIO DE RESIDENCIA</label></td>
                                <td><input type="text" id="CRHombres1" name="CRHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRMujeres1" name="CRMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRAmbos1" name="CRAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt1['AI1CamResidenciaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="CRHombres2" name="CRHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRMujeres2" name="CRMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRAmbos2" name="CRAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt3['AI3CamResidenciaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="CRHombres3" name="CRHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CamResidenciaH'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRMujeres3" name="CRMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CamResidenciaM'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="CRAmbos3" name="CRAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5CamResidenciaT'] == '') { echo 0; } else { echo $abandonoInt5['AI5CamResidenciaT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>*OTRO</label></td>
                                <td><input type="text" id="OHombres1" name="OHombres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1OtrosH'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OMujeres1" name="OMujeres1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1OtrosM'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OAmbos1" name="OAmbos1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1OtrosT'] == '') { echo 0; } else { echo $abandonoInt1['AI1OtrosT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="OHombres2" name="OHombres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3OtrosH'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OMujeres2" name="OMujeres2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3OtrosM'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OAmbos2" name="OAmbos2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3OtrosT'] == '') { echo 0; } else { echo $abandonoInt3['AI3OtrosT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                                <td><input type="text" id="OHombres3" name="OHombres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5OtrosH'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosH'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OMujeres3" name="OMujeres3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5OtrosM'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosM'];}?>" onkeyup="sumarAbandonoEscIntra();"></td>
                                <td><input type="text" id="OAmbos3" name="OAmbos3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5OtrosT'] == '') { echo 0; } else { echo $abandonoInt5['AI5OtrosT'];}?>" onkeyup="sumarAbandonoEscIntra();" disabled></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan='3'>
                                    <div id="contentOHombres1" style="display:<?php if($abandonoInt1['AI1DescripH'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosHombres1" name="descOtrosHombres1" type="text" class="form-control" placeholder="Describe el motivo de Otro Hombres 1er Semestre" value="<?php if ($abandonoInt1['AI1DescripH'] != '') { echo $abandonoInt1['AI1DescripH'];}?>" required>
                                    </div><br>
                                    <div id="contentOMujeres1" style="display:<?php if($abandonoInt1['AI1DescripM'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosMujeres1" name="descOtrosMujeres1" type="text" class="form-control" placeholder="Describe el motivo de Otro Mujeres 1er Semestre" value="<?php if ($abandonoInt1['AI1DescripM'] != '') { echo $abandonoInt1['AI1DescripM'];}?>" required>
                                    </div>                                    
                                </td>
                                <td colspan='3'>
                                    <div id="contentOHombres2" style="display:<?php if($abandonoInt3['AI3DescripH'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosHombres2" name="descOtrosHombres2" type="text" class="form-control" placeholder="Describe el motivo de Otro Hombres 3er Semestre" value="<?php if ($abandonoInt3['AI3DescripH'] != '') { echo $abandonoInt3['AI3DescripH'];}?>" required>
                                    </div><br>
                                    <div id="contentOMujeres2" style="display:<?php if($abandonoInt3['AI3DescripM'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosMujeres2" name="descOtrosMujeres2" type="text" class="form-control" placeholder="Describe el motivo de Otro Mujeres 3er Semestre" value="<?php if ($abandonoInt3['AI3DescripM'] != '') { echo $abandonoInt3['AI3DescripM'];}?>" required>
                                    </div>
                                </td>
                                <td colspan='3'>
                                    <div id="contentOHombres3" style="display:<?php if($abandonoInt5['AI5DescripH'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosHombres3" name="descOtrosHombres3" type="text" class="form-control" placeholder="Describe el motivo de Otro Hombres 5o Semestre" value="<?php if ($abandonoInt5['AI5DescripH'] != '') { echo $abandonoInt5['AI5DescripH'];}?>" required>
                                    </div><br>
                                    <div id="contentOMujeres3" style="display:<?php if($abandonoInt5['AI5DescripM'] != '') { echo 'show'; } else { echo 'none'; } ?> ;">
                                        <input id="descOtrosMujeres3" name="descOtrosMujeres3" type="text" class="form-control" placeholder="Describe el motivo de Otro Mujeres 5o Semestre" value="<?php if ($abandonoInt5['AI5DescripM'] != '') { echo $abandonoInt5['AI5DescripM'];}?>" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><label>*TOTALES</label></td>
                                <td><input type="text" id="AEIHombresTTotal1" name="AEIHombresTTotal1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1TotalH'] == '') { echo 0; } else { echo $abandonoInt1['AI1TotalH'];}?>" disabled></td>
                                <td><input type="text" id="AEIMujeresTTotal1" name="AEIMujeresTTotal1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1TotalM'] == '') { echo 0; } else { echo $abandonoInt1['AI1TotalM'];}?>" disabled></td>
                                <td><input type="text" id="AEITotalTotal1" name="AEITotalTotal1" class="form-control numeros" value="<?php if ($abandonoInt1['AI1Total'] == '') { echo 0; } else { echo $abandonoInt1['AI1Total'];}?>"  disabled></td>
                                <td><input type="text" id="AEIHombresTTotal2" name="AEIHombresTTotal2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3TotalH'] == '') { echo 0; } else { echo $abandonoInt3['AI3TotalH'];}?>" disabled></td>
                                <td><input type="text" id="AEIMujeresTTotal2" name="AEIMujeresTTotal2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3TotalM'] == '') { echo 0; } else { echo $abandonoInt3['AI3TotalM'];}?>" disabled></td>
                                <td><input type="text" id="AEITotalTotal2" name="AEITotalTotal2" class="form-control numeros" value="<?php if ($abandonoInt3['AI3Total'] == '') { echo 0; } else { echo $abandonoInt3['AI3Total'];}?>"  disabled></td>
                                <td><input type="text" id="AEIHombresTTotal3" name="AEIHombresTTotal3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5TotalH'] == '') { echo 0; } else { echo $abandonoInt5['AI5TotalH'];}?>" disabled></td>
                                <td><input type="text" id="AEIMujeresTTotal3" name="AEIMujeresTTotal3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5TotalM'] == '') { echo 0; } else { echo $abandonoInt5['AI5TotalM'];}?>" disabled></td>
                                <td><input type="text" id="AEITotalTotal3" name="AEITotalTotal3" class="form-control numeros" value="<?php if ($abandonoInt5['AI5Total'] == '') { echo 0; } else { echo $abandonoInt5['AI5Total'];}?>"  disabled></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
    </fieldset>

    <!--.........................................-->
    <h1> Matrícula del Semestre <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?></h1>
    <fieldset>
        <p style="font-size: 14px;">1. Escriba por género y grado <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?>, el No de alumnos <b>INSCRITOS AL INICIO del semestre <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?></b> (Febrero <?= $periodoAct[0]['PAnio'] ?>). Indique cuántos de ellos presentan una discapacidad, cuántos son extranjeros y cuántos son hablantes de alguna lengua indígena. Escriba también el <b>NÚMERO DE GRUPOS</b> por grado <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "(1er, 3er y 5o semestre)"; } else { echo "(2o, 4o y 6o semestre)";} ?> con los que cuenta en este <?= $periodoAct[0]['PAnio'].'-'.$periodoAct[0]['PPeriodo']?>.</p>
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
                            <?php if (count($matriculaGrupo) != 0) { ?>
                            <tr>
                                <td><label> <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres1" name="MSEHombres1" class="form-control" value="<?= nvl($matriculaGrupo[0]['THombres']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres1" name="MSEMujeres1" class="form-control" value="<?= nvl($matriculaGrupo[0]['TMujeres']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal1" name="MSETotal1" class="form-control" value="<?= nvl($matriculaGrupo[0]['Total']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad1" name="MSEDiscapacidad1" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes1" name="MSEHablantes1" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos1" name="MSEGrupos1" class="form-control" value="<?= nvl($matriculaGrupo[0]['TGrupos'])?>" disabled></td>												
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres2" name="MSEHombres2" class="form-control" value="<?= nvl($matriculaGrupo[1]['THombres']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres2" name="MSEMujeres2" class="form-control" value="<?= nvl($matriculaGrupo[1]['TMujeres']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal2" name="MSETotal2" class="form-control" value="<?= nvl($matriculaGrupo[1]['Total']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad2" name="MSEDiscapacidad2" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes2" name="MSEHablantes2" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero2" name="MSEExtranjero2" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos2" name="MSEGrupos2" class="form-control" value="<?= nvl($matriculaGrupo[1]['TGrupos'])?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres3" name="MSEHombres3" class="form-control" value="<?= nvl($matriculaGrupo[2]['THombres']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres3" name="MSEMujeres3" class="form-control" value="<?= nvl($matriculaGrupo[2]['TMujeres']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal3" name="MSETotal3" class="form-control" value="<?= nvl($matriculaGrupo[2]['Total']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad3" name="MSEDiscapacidad3" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes3" name="MSEHablantes3" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero3" name="MSEExtranjero3" class="form-control numeros" value="0" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos3" name="MSEGrupos3" class="form-control" value="<?= nvl($matriculaGrupo[2]['TGrupos'])?>" disabled></td>												
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="MSEHombresTotal" name="MSEHombresTotal" class="form-control" value="<?php $totalHombres = nvl($matriculaGrupo[0]['THombres']) + nvl($matriculaGrupo[1]['THombres']) + nvl($matriculaGrupo[2]['THombres']); echo $totalHombres; ?>" disabled></td>
                                <td><input type="text" id="MSEMujeresTotal" name="MSEMujeresTotal" class="form-control" value="<?php $totalMujeres = nvl($matriculaGrupo[0]['TMujeres']) + nvl($matriculaGrupo[1]['TMujeres']) + nvl($matriculaGrupo[2]['TMujeres']); echo $totalMujeres; ?>" disabled></td>
                                <td><input type="text" id="MSETotalTotal" name="MSETotalTotal" class="form-control" value="<?php $total = nvl($matriculaGrupo[0]['Total']) + nvl($matriculaGrupo[1]['Total']) + nvl($matriculaGrupo[2]['Total']); echo $total; ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidadTotal" name="MSEDiscapacidadTotal" class="form-control" value="0" disabled></td>
                                <td><input type="text" id="MSEHablantesTotal" name="MSEHablantesTotal" class="form-control" value="0" disabled></td>
                                <td><input type="text" id="MSEExtranjeroTotal" name="MSEExtranjeroTotal" class="form-control" value="0" disabled></td>
                                <td><input type="text" id="MSEGruposTotal" name="MSEGruposTotal" class="form-control" value="<?php $totalGrupos = nvl($matriculaGrupo[0]['TGrupos']) + nvl($matriculaGrupo[1]['TGrupos']) + nvl($matriculaGrupo[2]['TGrupos']); echo $totalGrupos; ?>" disabled></td>
                            </tr>
                            <?php } else { ?>
                                <tr>
                                <td><label> <?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "1o."; } else { echo "2o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres1" name="MSEHombres1" class="form-control" value="<?= nvl($matricula['MHIns2o']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres1" name="MSEMujeres1" class="form-control" value="<?= nvl($matricula['MMIns2o']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal1" name="MSETotal1" class="form-control" value="<?= nvl($matricula['MTIns2o']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad1" name="MSEDiscapacidad1" class="form-control numeros" value="<?= nvl($matricula['MDIns2o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes1" name="MSEHablantes1" class="form-control numeros" value="<?= nvl($matricula['MHaIns2o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero1" name="MSEExtranjero1" class="form-control numeros" value="<?= nvl($matricula['MEIns2o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos1" name="MSEGrupos1" class="form-control" value="<?= nvl($matricula['MInsGrupos2o'])?>" disabled></td>												
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "3o."; } else { echo "4o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres2" name="MSEHombres2" class="form-control" value="<?= nvl($matricula['MHIns4o']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres2" name="MSEMujeres2" class="form-control" value="<?= nvl($matricula['MMIns4o']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal2" name="MSETotal2" class="form-control" value="<?= nvl($matricula['MTIns4o']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad2" name="MSEDiscapacidad2" class="form-control numeros" value="<?= nvl($matricula['MDIns4o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes2" name="MSEHablantes2" class="form-control numeros" value="<?= nvl($matricula['MHaIns4o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero2" name="MSEExtranjero2" class="form-control numeros" value="<?= nvl($matricula['MEIns4o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos2" name="MSEGrupos2" class="form-control" value="<?= nvl($matricula['MInsGrupos4o'])?>" disabled></td>
                            </tr>
                            <tr>
                                <td><label><?php if ($periodoAct[0]['PPeriodo'] == 2) {echo "5o."; } else { echo "6o.";} ?></label></td>
                                <td><input type="text" id="MSEHombres3" name="MSEHombres3" class="form-control" value="<?= nvl($matricula['MHIns6o']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeres3" name="MSEMujeres3" class="form-control" value="<?= nvl($matricula['MHIns6o']) ?>" disabled></td>
                                <td><input type="text" id="MSETotal3" name="MSETotal3" class="form-control" value="<?= nvl($matricula['MTIns6o']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidad3" name="MSEDiscapacidad3" class="form-control numeros" value="<?= nvl($matricula['MDIns6o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEHablantes3" name="MSEHablantes3" class="form-control numeros" value="<?= nvl($matricula['MHaIns6o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEExtranjero3" name="MSEExtranjero3" class="form-control numeros" value="<?= nvl($matricula['MEIns6o']) ?>" onkeyup="sumarMatSem();"></td>
                                <td><input type="text" id="MSEGrupos3" name="MSEGrupos3" class="form-control" value="<?= nvl($matricula['MInsGrupos6o'])?>" disabled></td>												
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="MSEHombresTotal" name="MSEHombresTotal" class="form-control" value="<?= nvl($matricula['MHInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSEMujeresTotal" name="MSEMujeresTotal" class="form-control" value="<?= nvl($matricula['MMInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSETotalTotal" name="MSETotalTotal" class="form-control" value="<?= nvl($matricula['MTInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSEDiscapacidadTotal" name="MSEDiscapacidadTotal" class="form-control" value="<?= nvl($matricula['MDInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSEHablantesTotal" name="MSEHablantesTotal" class="form-control" value="<?= nvl($matricula['MHaInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSEExtranjeroTotal" name="MSEExtranjeroTotal" class="form-control" value="<?= nvl($matricula['MEInsTotal']) ?>" disabled></td>
                                <td><input type="text" id="MSEGruposTotal" name="MSEGruposTotal" class="form-control" value="<?= $matricula['MInsGruposTotal']; ?>" disabled></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2>Deberá coincidir con lo reportado al Depto. de Control Escolar (Corte 17 de marzo <?= $periodoAct[0]['PAnio'] ?>).</h2>		
            <br>
            <?php if ($planteles['CPLTipo'] == 36) { ?>
        <p style="font-size: 14px;">2. De la matrícula <?= $periodoAct[0]['PAnio'] ?>, desglose por semestre y por genéro cuántos alumnos cursan sus clases de manera presencial y cuántos a distancia</p>
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
                                <td><input type="text" id="CLPHombres1" name="CLPHombres1" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPMujeres1" name="CLPMujeres1" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPTotal1" name="CLPTotal1" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDHombres1" name="CLDHombres1" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDMujeres1" name="CLDMujeres1" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDTotal1" name="CLDTotal1" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>4to.</label></td>
                                <td><input type="text" id="CLPHombres2" name="CLPHombres2" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPMujeres2" name="CLPMujeres2" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPTotal2" name="CLPTotal2" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDHombres2" name="CLDHombres2" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDMujeres2" name="CLDMujeres2" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDTotal2" name="CLDTotal2" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>6to.</label></td>
                                <td><input type="text" id="CLPHombres3" name="CLPHombres3" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPMujeres3" name="CLPMujeres3" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLPTotal3" name="CLPTotal3" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDHombres3" name="CLDHombres3" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDMujeres3" name="CLDMujeres3" class="form-control" value="0" onkeyup="sumarPresencial();"></td>
                                <td><input type="text" id="CLDTotal3" name="CLDTotal3" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Total</label></td>
                                <td><input type="text" id="CLPHombresTotal" name="CLPHombresTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLPMujeresTotal" name="CLPMujeresTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLPTotal" name="CLPTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDHombresTotal" name="CLDHombresTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDMujeresTotal" name="CLDMujeresTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                                <td><input type="text" id="CLDTotal" name="CLDTotal" class="form-control" value="0" onkeyup="sumarPresencial();" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <br>

        <h2><label>REPETIDOR</label> </h2>       						
        <p style="font-size: 14px;"> 3. De los alumnos reportados en el punto anterior, desglosa los alumnos repetidores (son los que reprueban 5 o más materias, y que, por lo tanto, está repitiendo todo el semestre), por género y grado.</p>
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
                                <td><input type="text" id="RHombres1" name="RHombres1" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RMujeres1" name="RMujeres1" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RTotal1" name="RTotal1" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Cuarto.</label></td>
                                <td><input type="text" id="RHombres2" name="RHombres2" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RMujeres2" name="RMujeres2" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RTotal2" name="RTotal2" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Sexto.</label></td>
                                <td><input type="text" id="RHombres3" name="RHombres3" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RMujeres3" name="RMujeres3" class="form-control numeros" value="0" onkeyup="sumarRepetidores();"></td>
                                <td><input type="text" id="RTotal3" name="RTotal3" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="RHombresTotal" name="RHombresTotal" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                                <td><input type="text" id="RMujeresTotal" name="RMujeresTotal" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                                <td><input type="text" id="RTotalTotal" name="RTotalTotal" class="form-control numeros" value="0" onkeyup="sumarRepetidores();" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            <?php } ?>     						
    </fieldset>	

    <!--.........................................-->
    <h1>Anexos</h1>
    <fieldset>
    <?php foreach($semestres as $s => $listSem) { ?>

        <h2><?=nvl($listSem['GRSemestre'])?>o Semestre</h2>
        <div class="form-group">
            <label class="col-md-1">Turno:</label>
                <div class="col-md-3">
                <input id="ATurno1" name="ATurno1" type="text" class="form-control" value="<?php if ($turno == 1 ){ echo "Matutino"; } else { echo "Vespertino" ;} ?>" disabled>											
                </div>
            </div>

        <br><br><br><br>	
        <h2>VI ANEXO DE LA DISTRIBUCIÓN GRUPOS-ALUMNOS (Matrícula <?= $periodoAct[0]['PAnio'] ?> - <?= $periodoAct[0]['PPeriodo'] ?>)</h2>
        <p style="font-size: 14px;">Describir la cantidad de grupos del semestre citado distribuidos por hombres-mujeres <?php if (nvl($listSem['GRSemestre']) > 2) { echo "asi como la formación para el trabajo por grupo"; } ?>.</p>
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
                                <?php if (nvl($listSem['GRSemestre']) > 2) { ?>
                                <th>Formación para el Trabajo</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($listSem['grupoAlumno'])) { ?>
                                <?php foreach ($listSem['grupoAlumno'] as $g => $listG) { ?>
                            <tr>
                                <td></td>											
                                <td><input type="text" id="AGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" name="AGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" class="form-control" value="<?= $listG['GRGrupo']?>"  disabled></td>
                                <td><input type="text" id="AHGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" name="AHGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" class="form-control" value="<?= $listG['GRMasculino']?>"  disabled></td>
                                <td><input type="text" id="AMGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" name="AMGrupo<?= $g.nvl($listSem['GRSemestre']) ?>" class="form-control" value="<?= $listG['GRFemenino']?>"  disabled></td>
                                <td><input type="text" id="AGrupoT<?= $g.nvl($listSem['GRSemestre']) ?>" name="AGrupoT<?= $g.nvl($listSem['GRSemestre']) ?>" class="form-control" value="<?= $listG['GRCupo']?>"  disabled></td>
                                <?php if (nvl($listSem['GRSemestre']) > 2) { ?>
                                <td>
                                    <div class="col-sm-15">
                                        <select class="form-control" id="AFormacion<?= $g.nvl($listSem['GRSemestre']) ?>" name="AFormacion<?= $g.nvl($listSem['GRSemestre']) ?>">
                                            <option value="<?= $listG['GRCClave'] ?> "><?=$listG['FNombre']?></option>															
                                        </select>                         
                                    </div>													
                                </td>	
                                <?php } ?>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td><label>Total de Grupos</label></td>											
                                <td><input type="text" id="AGrupoT<?= nvl($listSem['GRSemestre']) ?>" name="AGrupoT<?= nvl($listSem['GRSemestre']) ?>" class="form-control"  value="<?= $listSem['TGrupos'] ?>" disabled></td>
                                <td><input type="text" id="AHGrupoT<?= nvl($listSem['GRSemestre']) ?>" name="AHGrupoT<?= nvl($listSem['GRSemestre']) ?>" class="form-control"  value="<?= $listSem['THombres'] ?>" disabled></td>
                                <td><input type="text" id="AMGrupoT<?= nvl($listSem['GRSemestre']) ?>" name="AMGrupoT<?= nvl($listSem['GRSemestre']) ?>" class="form-control"  value="<?= $listSem['TMujeres'] ?>" disabled></td>
                                <td><input type="text" id="AAlumnosT<?= nvl($listSem['GRSemestre']) ?>" name="AAlumnosT<?= nvl($listSem['GRSemestre']) ?>" class="form-control"  value="<?= $listSem['Total'] ?>" disabled></td>
                                <?php if (nvl($listSem['GRSemestre']) > 2) { ?>
                                <td></td>	
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>							
            
    <?php } ?>

            <!--<p style="font-size: 14px;">De la matrícula del semestre <?= $periodoAct[0]['PAnio'] ?> desglose cuántos alumnos presentan situación de orfandad (padre, madre o ambos) por semestre, género y causas.</p>
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
                                <td><input type="text" id="COVHombres1" name="COVHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVMujeres1" name="COVMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVTotal1" name="COVTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="COVHombres2" name="COVHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVMujeres2" name="COVMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVTotal2" name="COVTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="COVHombres3" name="COVHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVMujeres3" name="COVMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="COVTotal3" name="COVTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Enfermedad crónico-degenerativa.</label></td>
                                <td><input type="text" id="ECDHombres1" name="ECDHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDMujeres1" name="ECDMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDTotal1" name="ECDTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="ECDHombres2" name="ECDHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDMujeres2" name="ECDMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDTotal2" name="ECDTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="ECDHombres3" name="ECDHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDMujeres3" name="ECDMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ECDTotal3" name="ECDTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Accidentes.</label></td>
                                <td><input type="text" id="ACCHombres1" name="ACCHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCMujeres1" name="ACCMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCTotal1" name="ACCTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="ACCHombres2" name="ACCHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCMujeres2" name="ACCMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCTotal2" name="ACCTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="ACCHombres3" name="ACCHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCMujeres3" name="ACCMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="ACCTotal3" name="ACCTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Naturales.</label></td>
                                <td><input type="text" id="NATHombres1" name="NATHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATMujeres1" name="NATMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATTotal1" name="NATTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="NATHombres2" name="NATHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATMujeres2" name="NATMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATTotal2" name="NATTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="NATHombres3" name="NATHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATMujeres3" name="NATMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="NATTotal3" name="NATTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Suicidio</label></td>
                                <td><input type="text" id="SUIHombres1" name="SUIHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUIMujeres1" name="SUIMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUITotal1" name="SUITotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="SUIHombres2" name="SUIHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUIMujeres2" name="SUIMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUITotal2" name="SUITotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="SUIHombres3" name="SUIHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUIMujeres3" name="SUIMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="SUITotal3" name="SUITotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Otras</label></td>
                                <td><input type="text" id="OTHombres1" name="OTHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTMujeres1" name="OTMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTTotal1" name="OTTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="OTHombres2" name="OTHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTMujeres2" name="OTMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTTotal2" name="OTTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="OTHombres3" name="OTHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTMujeres3" name="OTMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" ></td>
                                <td><input type="text" id="OTTotal3" name="OTTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Total</label></td>
                                <td><input type="text" id="TOTHombres1" name="TOTHombres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTMujeres1" name="TOTMujeres1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTTotal1" name="TOTTotal1" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTHombres2" name="TOTHombres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTMujeres2" name="TOTMujeres2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTTotal2" name="TOTTotal2" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTHombres3" name="TOTHombres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTMujeres3" name="TOTMujeres3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                                <td><input type="text" id="TOTTotal3" name="TOTTotal3" class="form-control numeros" value="0" onkeyup="sumarOrfandad();" disabled></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div> -->     						
    </fieldset>									
                
    <!--.........................................-->				
    <h1> Modelo Dual</h1>
    <fieldset>
        <h2>¿El Centro Educativo cuenta con alumnos que participan en el Modelo Dual?.</h2>
            <div class="row">
                <div class="col-md-5">
                    <label>Si </label><input type="radio" name="PEServicioEducativoDual" id="PEServicioEducativoDual1" class="" onclick="selectModelo()" value="1" <?php if ($dual['MDSerEduc'] == 1) echo "checked";  ?>/>
                </div>
            </div>	
            <br>
            <div class="row">
                <div class="col-md-5">
                    <label>No </label><input type="radio" name="PEServicioEducativoDual" id="PEServicioEducativoDual2" class="" onclick="selectModelo()" value="2" <?php if ($dual['MDSerEduc'] == 2) echo "checked"; ?>/>
                </div>
            </div>
            <br><br>

        <p style="font-size: 14px;">De la matrícula reportada en el Numeral V indique por grado y género el número de alumnos del Modelo Dual.</p>
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
                                <td><input type="text" id="MDHombres1" name="MDHombres1" class="form-control numeros" value="<?php if ($dual['MDHMod4o'] == '') { echo 0; } else { echo $dual['MDHMod4o'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDMujeres1" name="MDMujeres1" class="form-control numeros" value="<?php if ($dual['MDMMod4o'] == '') { echo 0; } else { echo $dual['MDMMod4o'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDTotal1" name="MDTotal1" class="form-control numeros" value="<?php if ($dual['MDHModTotal'] == '') { echo 0; } else { echo $dual['MDHModTotal'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td><label>Sexto.</label></td>
                                <td><input type="text" id="MDHombres2" name="MDHombres2" class="form-control numeros" value="<?php if ($dual['MDHMod6o'] == '') { echo 0; } else { echo $dual['MDHMod6o'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDMujeres2" name="MDMujeres2" class="form-control numeros" value="<?php if ($dual['MDMMod6o'] == '') { echo 0; } else { echo $dual['MDMMod6o'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDTotal2" name="MDTotal2" class="form-control numeros" value="<?php if ($dual['MDMModTotal'] == '') { echo 0; } else { echo $dual['MDMModTotal'];}?>" onkeyup="sumarDual()" disabled="disabled"></td>
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="MDHombresTotal" name="MDHombresTotal" class="form-control numeros" value="<?php echo $dual['MDHMod4o'] + $dual['MDHMod6o']; ?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDMujeresTotal" name="MDMujeresTotal" class="form-control numeros" value="<?php echo $dual['MDMMod4o'] + $dual['MDMMod6o']; ?>" onkeyup="sumarDual()" disabled="disabled"></td>
                                <td><input type="text" id="MDTotalTotal" name="MDTotalTotal" class="form-control numeros" value="<?php echo $dual['MDHModTotal'] +  $dual['MDMModTotal'];?>" onkeyup="sumarDual()" disabled="disabled"></td>
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
            <?php if ($dual['MDArchivo_file'] != '') { ?>
            <div class="row">
                <div class="col-md-8 ">
                    <a href='<?=base_url(nvl($dual['MDArchivo_file']))?>' target='_blanck'><button type='button' class='btn btn-sm btn-primary' ><i class='fa fa-file-archive-o'></i> Archivo</button></a>
                    <input type="hidden" name="archivo" id="archivo" value="<?php if ($dual['MDArchivo_file'] != '') { echo $dual['MDArchivo_file']; } else { echo 0; } ?>">
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-8"><br><br>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                    <div class="input-group-btn">
                                        <span class="fileUpload btn btn-primary">
                                            <span class="upl" id="upload">Subir Archivo</span>
                                            <input type="file" class="upload up" id="MDArchivo_file" name="MDArchivo_file" onchange="readURL(this);" accept=".xml, .xlsx, .xls" />
                                        </span><!-- btn-orange -->
                                    </div><!-- btn -->
                            </div><!-- group -->
                        </div><!-- form-group -->
                    </div>
                </div>
                </div>
            </div>
    </fieldset>	

        <!--.........................................-->				
    <h1>Docentes</h1>
    <fieldset>
        <h2>Docentes.</h2>						
        <p style="font-size: 14px;">1. Escriba por género, el número de docentes que están atendiendo este programa en el semestre <?= $periodoAct[0]['PAnio'] ?>.</p>
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
                                            <input id="DocHombres" name="DocHombres" type="text" class="form-control numeros" value="<?php if ($docentes['DHombres'] == '') { echo 0; } else { echo $docentes['DHombres'];}?>" onkeyup="sumarDoc()"> 
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="DocMujeres" name="DocMujeres" type="text" class="form-control numeros" value="<?php if ($docentes['DMujeres'] == '') { echo 0; } else { echo $docentes['DMujeres'];}?>" onkeyup="sumarDoc()">
                                        </div>
                                    </div>					
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="DocTotal" name="DocTotal" type="text" class="form-control numeros" value="<?php if ($docentes['DTotal'] == '') { echo 0; } else { echo $docentes['DTotal'];}?>" onkeyup="sumarDoc()" disabled>
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
                    <h3 class="text-danger">*(Con corte al 15 de marzo de <?= $periodoAct[0]['PAnio'] ?>).</h3>
                </div>
            </div>	

            <div class="row">
                <div class="col-md-8 ">
                    <h3 class="text-danger">Nota para la Modalidad No Escolarizada: Si por algún motivo no cuenta con personal docente para esta modalidad, reporte el total de asesores que la atendieron.</h3>
                </div>
            </div>	
            <br><br>

        <h2>Personal Docente.</h2>						
            <p style="font-size: 14px;">2. De la cantidad de docentes registrado en punto anterior desglose según el tiempo de dedicación.</p>
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
                                <td><input type="text" id="PDHombres1" name="PDHombres1" class="form-control numeros" value="<?php if ($docentes['DHTiempoCom'] == '') { echo 0; } else { echo $docentes['DHTiempoCom'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDHombres2" name="PDHombres2" class="form-control numeros" value="<?php if ($docentes['DH34Tiempo'] == '') { echo 0; } else { echo $docentes['DH34Tiempo'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDHombres3" name="PDHombres3" class="form-control numeros" value="<?php if ($docentes['DH12Tiempo'] == '') { echo 0; } else { echo $docentes['DH12Tiempo'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDHombres4" name="PDHombres4" class="form-control numeros" value="<?php if ($docentes['DHPorHoras'] == '') { echo 0; } else { echo $docentes['DHPorHoras'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDHombresTotal" name="PDHombresTotal" class="form-control numeros" value="<?php if ($docentes['DHTTotal'] == '') { echo 0; } else { echo $docentes['DHTTotal'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>
                            </tr>
                            <tr>
                                <td><label>Mujeres.</label></td>
                                <td><input type="text" id="PDMujeres1" name="PDMujeres1" class="form-control numeros" value="<?php if ($docentes['DMTiempoCom'] == '') { echo 0; } else { echo $docentes['DMTiempoCom'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDMujeres2" name="PDMujeres2" class="form-control numeros" value="<?php if ($docentes['DM34Tiempo'] == '') { echo 0; } else { echo $docentes['DM34Tiempo'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDMujeres3" name="PDMujeres3" class="form-control numeros" value="<?php if ($docentes['DM12Tiempo'] == '') { echo 0; } else { echo $docentes['DM12Tiempo'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDMujeres4" name="PDMujeres4" class="form-control numeros" value="<?php if ($docentes['DMPorHoras'] == '') { echo 0; } else { echo $docentes['DMPorHoras'];}?>" onkeyup="sumarPersonalDoc()"></td>
                                <td><input type="text" id="PDMujeresTotal" name="PDMujeresTotal" class="form-control numeros" value="<?php if ($docentes['DMTTotal'] == '') { echo 0; } else { echo $docentes['DMTTotal'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>										
                            </tr>
                            <tr>
                            <td><label>Total</label></td>
                                <td><input type="text" id="PDTotal1" name="PDTotal1" class="form-control numeros" value="<?php if ($docentes['DTTiempoCom'] == '') { echo 0; } else { echo $docentes['DTTiempoCom'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>
                                <td><input type="text" id="PDTotal2" name="PDTotal2" class="form-control numeros" value="<?php if ($docentes['DT34Tiempo'] == '') { echo 0; } else { echo $docentes['DT34Tiempo'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>
                                <td><input type="text" id="PDTotal3" name="PDTotal3" class="form-control numeros" value="<?php if ($docentes['DT12Tiempo'] == '') { echo 0; } else { echo $docentes['DT12Tiempo'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>
                                <td><input type="text" id="PDTotal4" name="PDTotal4" class="form-control numeros" value="<?php if ($docentes['DTPorHoras'] == '') { echo 0; } else { echo $docentes['DTPorHoras'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>
                                <td><input type="text" id="PDTotal" name="PDTotal" class="form-control numeros" value="<?php if ($docentes['DTTotal'] == '') { echo 0; } else { echo $docentes['DTTotal'];}?>" onkeyup="sumarPersonalDoc()" disabled></td>												
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

        <p style="font-size: 14px;">1. Escriba por género, el número de alumnos (Matrícula <?= $periodoAct[0]['PAnio']?> - <?= $periodoAct[0]['PPeriodo']?>) que cursan alguna Formación para el Trabajo.</p>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Hombres</label>
                        <input id="PEActualizacionAnioFT" name="PEActualizacionAnioFT" type="text" class="form-control numeros" value="<?php if ($alumCap['THombres'] == "") { echo 0; } else { echo $alumCap['THombres'];} ?>" disabled>	
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Mujeres</label>
                        <input id="PEActualizacionMesFT" name="PEActualizacionMesFT" type="text" class="form-control numeros" value="<?php if ($alumCap['TMujeres'] == "") { echo 0; } else { echo $alumCap['TMujeres'];} ?>" disabled>											
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Total</label>
                        <input id="PEActualizacionDiaFT" name="PEActualizacionDiaFT" type="text" class="form-control numeros" value="<?php if ($alumCap['Total'] == "") { echo 0; } else { echo $alumCap['Total'];} ?>" disabled>											
                    </div>
                </div>
            </div>
            
        <p style="font-size: 14px;">2. Escriba el número de Formaciones para el Trabajo que se ofrece en el Bachillerato General.</p>		
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Formación para el Trabajo</label>
                        <input id="PEActualizacionAnioMFT" name="PEActualizacionAnioMFT" type="text" class="form-control numeros" value="<?= count($formaciones)?>" disabled>	
                    </div>
                </div>
            </div>							
            <br>

        <p style="font-size: 14px;">3. Escriba por género, clave y nombre de Formación para el Trabajo el número de alumnos reportados en la pregunta 1 de esta sección.</p>		
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
                            <?php foreach ($formaciones as $f => $listF) {?>
                            <tr>
                                <td><input type="text" id="MClaveF[]" name="MClaveF[]" class="form-control" ></td>
                                <td><input type="text" id="MNombreF[]" name="MNombreF[]" class="form-control" value="<?= $listF['FNombre'] ?>" disabled size="95"></td>
                                <td><input type="text" id="MHF[]" name="MHF[]" class="form-control" value="<?php if( $listF['AlumForma']['THombres'] == '') { echo 0; } else { echo $listF['AlumForma']['THombres'];} ?>" disabled></td>
                                <td><input type="text" id="MMF[]" name="MMF[]" class="form-control" value="<?php if( $listF['AlumForma']['TMujeres'] == '') { echo 0; } else { echo $listF['AlumForma']['TMujeres'];} ?>" disabled></td>
                                <td><input type="text" id="MTF[]" name="MTF[]" class="form-control" value="<?php if( $listF['AlumForma']['Total'] == '') { echo 0; } else { echo $listF['AlumForma']['Total'];} ?>" disabled></td>											
                            </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td>Total</td>												
                                <td><input type="text" id="MHFT[]" name="MHFT[]" class="form-control" value="<?php if ($alumCap['THombres'] == "") { echo 0; } else { echo $alumCap['THombres'];} ?>" disabled></td>
                                <td><input type="text" id="MMFT[]" name="MMFT[]" class="form-control" value="<?php if ($alumCap['TMujeres'] == "") { echo 0; } else { echo $alumCap['TMujeres'];} ?>" disabled></td>
                                <td><input type="text" id="MTF[]" name="MTF[]" class="form-control" value="<?php if ($alumCap['Total'] == "") { echo 0; } else { echo $alumCap['Total'];} ?>" disabled></td>						
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
                    <textarea id="FObservaciones" name="FObservaciones" cols="60" rows="5" ><?= nvl($PlanEstudios['PEObservaciones'])?></textarea>											
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
                                <td><b><?= $director['CPLDirector'] ?></b></td>
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
                                <td><b><input type="hidden" name="PEUsuarioRealizo" id="PEUsuarioRealizo" value="<?php if($PlanEstudios['PEUsuarioRealizo'] != 0) { echo $PlanEstudios['PEUsuarioRealizo']; } else { echo get_session('UNCI_usuario'); } ?>"><?php if($PlanEstudios['PEUsuarioRealizo'] != 0) { echo $PlanEstudios['UNombre'].' '.$PlanEstudios['UApellido_pat'].' '.$PlanEstudios['UApellido_mat'] ; } else { echo get_session('UNombre'); } ?></b></td>
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
                                        <?php $fecha = explode('-', $PlanEstudios['PEFechaRealizo']); ?>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                Año: <b><?php if ($fecha[0] == '0000') { echo date("Y"); } else { echo $fecha[0]; } ?></b>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                Mes: <b><?php if ($fecha[1] == '00') { echo ver_mes(date("m")); } else { echo ver_mes($fecha[1]); } ?></b>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                Día: <b><?php if ($fecha[2] == '00') { echo date("d"); } else { echo $fecha[2]; } ?></b>
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

<!-- Steps -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/staps/jquery.steps.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/iCheck/icheck.min.js'); ?>"></script>

<!-- Jquery Validate -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/validate/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/messages_es.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>

<script>
	$(document).ready(function(){
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
            /* Behaviour */
			enableCancelButton: true,
			startIndex: 0,
			/* Events */
			// Always allow going backward even if the current step contains invalid fields!
            onStepChanging: function (event, currentIndex, newIndex)
			{
				// Always allow going backward even if the current step contains invalid fields!
				if (currentIndex > newIndex)
				{
					return true;
				}

				var form = $(this);

				// Clean up if user went backward before
				if (currentIndex < newIndex)
				{
					// To remove error styles
					$(".body:eq(" + newIndex + ") label.error", form).remove();
					$(".body:eq(" + newIndex + ") .error", form).removeClass("error");
					
					if(newIndex == '1'){
                        if(document.getElementById("idPlantel").value) {
                            if( form.valid() ){
                                savePlanEstudio();
                            }
                        } 						
					}
					if(newIndex == '2'){
						saveExistencia_Aprob();
                        saveReprob_Reg();
					}
                    
					if(newIndex == '3'){
						saveMat911();
                        actualizarMat();
					}

                    if(newIndex == '4'){
						saveAbandono();
                        if( form.valid() ){
                            saveAbandonoInt1();
                        }
                        if( form.valid() ){
                            saveAbandonoInt3();
                        }
                        if( form.valid() ){
                            saveAbandonoInt5();
                        }
					}
                    
					if(newIndex == '5'){
						savematriculaIns();
                        selectModelo();
                        var CPLTipo = document.getElementById("CPLTipo").value;
                        if (CPLTipo == 36) {
                            savePresenciales();
                            saveRepetidores();
                        }
					}
					if(newIndex == '7'){
						saveDual();                        
					}
					if(newIndex == '8'){
						saveDocentes();
					}
					/*if(newIndex == '9'){
						documetos();
					}
					if(newIndex == '10'){
						$('#documentos_skip').val('');
					}*/
					
				}

				// Disable validation on fields that are disabled or hidden.
				form.validate().settings.ignore = ":disabled,:hidden";
				
				// Start validation; Prevent going forward if false
				return form.valid();
			},
			onFinishing: function (event, currentIndex)
			{
				var form = $(this);

				// Disable validation on fields that are disabled.
				// At this point it's recommended to do an overall check (mean ignoring only disabled fields)
				form.validate().settings.ignore = ":disabled,:hidden";

				// Start validation; Prevent form submission if false
				return form.valid();
			},
			onFinished: function (event)
			{
				var form = $(this);

				// Submit form input
				//form.submit();
                saveFormaciones(form);

                //recogemos la dirección del Proceso PHP
                mensaje = "¿Estás seguro de finalizar?";
                //colocamos fondo de pantalla
                $('#wrapper').prop('class','bgtransparent');				
                alertify.confirm(mensaje, function (e) {
                    //aqui introducimos lo que haremos tras cerrar la alerta.
                    $('#wrapper').prop('class','');
                    if (e){
                        window.location.href = "<?= base_url("bginterno"); ?>";
                    }
                });
			},
		onCanceled: function (event)
		{
			//recogemos la dirección del Proceso PHP
			mensaje = "¿Estás seguro de cancelar, los datos se guardaran hasta donde los dejaste?";
			//colocamos fondo de pantalla
			$('#wrapper').prop('class','bgtransparent');				
			alertify.confirm(mensaje, function (e) {
				//aqui introducimos lo que haremos tras cerrar la alerta.
				$('#wrapper').prop('class','');
				if (e){
					window.location.href = "<?= base_url("bginterno"); ?>";
				}
			});     					
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

    function sumarAbandonoEscIntra() {
        /* BAJA ADMVA TEMP. */
		var BATHombres1 = 0;		var BATMujeres1 = 0;    	var BATAmbos1 = 0;
		var BATHombres2 = 0;		var BATMujeres2 = 0;    	var BATAmbos2 = 0;
        var BATHombres3 = 0;		var BATMujeres3 = 0;    	var BATAmbos3 = 0;

		var BATHombres1 = document.getElementById("BATHombres1").value; if (BATHombres1 == '') { BATHombres1 = 0; } 
		var BATMujeres1 = document.getElementById("BATMujeres1").value; if (BATMujeres1 == '') { BATMujeres1 = 0; } 
		var BATAmbos1 = parseInt(BATHombres1) + parseInt(BATMujeres1);		
		document.getElementById('BATAmbos1').value = BATAmbos1;

		var BATHombres2 = document.getElementById("BATHombres2").value;  if (BATHombres2 == '') { BATHombres2 = 0; } 
		var BATMujeres2 = document.getElementById("BATMujeres2").value;	 if (BATMujeres2 == '') { BATMujeres2 = 0; } 
		var BATAmbos2 = parseInt(BATHombres2) + parseInt(BATMujeres2);
		document.getElementById('BATAmbos2').value = BATAmbos2;

		var BATHombres3 = document.getElementById("BATHombres3").value;	 if (BATHombres3 == '') { BATHombres3 = 0; } 
		var BATMujeres3 = document.getElementById("BATMujeres3").value;  if (BATMujeres3 == '') { BATMujeres3 = 0; } 
		var BATAmbos3 = parseInt(BATHombres3) + parseInt(BATMujeres3);
		document.getElementById('BATAmbos3').value = BATAmbos3;

        /* BAJA ACADÉMICA */
		var BAHombres1 = 0;		var BAMujeres1 = 0;    	var BAAmbos1 = 0;
		var BAHombres2 = 0;		var BAMujeres2 = 0;    	var BAAmbos2 = 0;
        var BAHombres3 = 0;		var BAMujeres3 = 0;    	var BAAmbos3 = 0;

        var BAHombres1 = document.getElementById("BAHombres1").value;   if (BAHombres1 == '') { BAHombres1 = 0; } 
		var BAMujeres1 = document.getElementById("BAMujeres1").value;   if (BAMujeres1 == '') { BAMujeres1 = 0; } 
		var BAAmbos1 = parseInt(BAHombres1) + parseInt(BAMujeres1);		
		document.getElementById('BAAmbos1').value = BAAmbos1;

		var BAHombres2 = document.getElementById("BAHombres2").value;  if (BAHombres2 == '') { BAHombres2 = 0; } 
		var BAMujeres2 = document.getElementById("BAMujeres2").value;  if (BAMujeres2 == '') { BAMujeres2 = 0; } 
		var BAAmbos2 = parseInt(BAHombres2) + parseInt(BAMujeres2);
		document.getElementById('BAAmbos2').value = BAAmbos2;

		var BAHombres3 = document.getElementById("BAHombres3").value;  if (BAHombres3 == '') { BAHombres3 = 0; } 
        var BAMujeres3 = document.getElementById("BAMujeres3").value;  if (BAMujeres3 == '') { BAMujeres3 = 0; }
		var BAAmbos3 = parseInt(BAHombres3) + parseInt(BAMujeres3);
		document.getElementById('BAAmbos3').value = BAAmbos3;

        /* BAJA ADMVA DEF */
		var BADHombres1 = 0;		var BADMujeres1 = 0;    	var BADAmbos1 = 0;
		var BADHombres2 = 0;		var BADMujeres2 = 0;    	var BADAmbos2 = 0;
        var BADHombres3 = 0;		var BADMujeres3 = 0;    	var BADAmbos3 = 0;

        var BADHombres1 = document.getElementById("BADHombres1").value; if (BADHombres1 == '') { BADHombres1 = 0; } 
		var BADMujeres1 = document.getElementById("BADMujeres1").value; if (BADMujeres1 == '') { BADMujeres1 = 0; } 
		var BADAmbos1 = parseInt(BADHombres1) + parseInt(BADMujeres1);		
		document.getElementById('BADAmbos1').value = BADAmbos1;

		var BADHombres2 = document.getElementById("BADHombres2").value;  if (BADHombres2 == '') { BADHombres2 = 0; } 
		var BADMujeres2 = document.getElementById("BADMujeres2").value;	 if (BADMujeres2 == '') { BADMujeres2 = 0; } 
		var BADAmbos2 = parseInt(BADHombres2) + parseInt(BADMujeres2);
		document.getElementById('BADAmbos2').value = BADAmbos2;

		var BADHombres3 = document.getElementById("BADHombres3").value;	 if (BADHombres3 == '') { BADHombres3 = 0; } 
		var BADMujeres3 = document.getElementById("BADMujeres3").value;  if (BADMujeres3 == '') { BADMujeres3 = 0; } 
		var BADAmbos3 = parseInt(BADHombres3) + parseInt(BADMujeres3);
		document.getElementById('BADAmbos3').value = BADAmbos3;

        /* CAMBIO DE PLANTEL */
		var CPHombres1 = 0;		var CPMujeres1 = 0;    	var CPAmbos1 = 0;
		var CPHombres2 = 0;		var CPMujeres2 = 0;    	var CPAmbos2 = 0;
        var CPHombres3 = 0;		var CPMujeres3 = 0;    	var CPAmbos3 = 0;

        var CPHombres1 = document.getElementById("CPHombres1").value; if (CPHombres1 == '') { CPHombres1 = 0; } 
		var CPMujeres1 = document.getElementById("CPMujeres1").value; if (CPMujeres1 == '') { CPMujeres1 = 0; } 
		var CPAmbos1 = parseInt(CPHombres1) + parseInt(CPMujeres1);		
		document.getElementById('CPAmbos1').value = CPAmbos1;

		var CPHombres2 = document.getElementById("CPHombres2").value;  if (CPHombres2 == '') { CPHombres2 = 0; } 
		var CPMujeres2 = document.getElementById("CPMujeres2").value;	 if (CPMujeres2 == '') { CPMujeres2 = 0; } 
		var CPAmbos2 = parseInt(CPHombres2) + parseInt(CPMujeres2);
		document.getElementById('CPAmbos2').value = CPAmbos2;

		var CPHombres3 = document.getElementById("CPHombres3").value;	 if (CPHombres3 == '') { CPHombres3 = 0; } 
		var CPMujeres3 = document.getElementById("CPMujeres3").value;  if (CPMujeres3 == '') { CPMujeres3 = 0; } 
		var CPAmbos3 = parseInt(CPHombres3) + parseInt(CPMujeres3);
		document.getElementById('CPAmbos3').value = CPAmbos3;

        /* FACTORES ECONÓMICOS */
		var FEHombres1 = 0;		var FEMujeres1 = 0;    	var FEAmbos1 = 0;
		var FEHombres2 = 0;		var FEMujeres2 = 0;    	var FEAmbos2 = 0;
        var FEHombres3 = 0;		var FEMujeres3 = 0;    	var FEAmbos3 = 0;

        var FEHombres1 = document.getElementById("FEHombres1").value; if (FEHombres1 == '') { FEHombres1 = 0; } 
		var FEMujeres1 = document.getElementById("FEMujeres1").value; if (FEMujeres1 == '') { FEMujeres1 = 0; } 
		var FEAmbos1 = parseInt(FEHombres1) + parseInt(FEMujeres1);		
		document.getElementById('FEAmbos1').value = FEAmbos1;

		var FEHombres2 = document.getElementById("FEHombres2").value;  if (FEHombres2 == '') { FEHombres2 = 0; } 
		var FEMujeres2 = document.getElementById("FEMujeres2").value;	 if (FEMujeres2 == '') { FEMujeres2 = 0; } 
		var FEAmbos2 = parseInt(FEHombres2) + parseInt(FEMujeres2);
		document.getElementById('FEAmbos2').value = FEAmbos2;

		var FEHombres3 = document.getElementById("FEHombres3").value;	 if (FEHombres3 == '') { FEHombres3 = 0; } 
		var FEMujeres3 = document.getElementById("FEMujeres3").value;  if (FEMujeres3 == '') { FEMujeres3 = 0; } 
		var FEAmbos3 = parseInt(FEHombres3) + parseInt(FEMujeres3);
		document.getElementById('FEAmbos3').value = FEAmbos3;

        /* EMBARAZO O MATRIMONIO */
		var EMHombres1 = 0;		var EMMujeres1 = 0;    	var EMAmbos1 = 0;
		var EMHombres2 = 0;		var EMMujeres2 = 0;    	var EMAmbos2 = 0;
        var EMHombres3 = 0;		var EMMujeres3 = 0;    	var EMAmbos3 = 0;

        var EMHombres1 = document.getElementById("EMHombres1").value; if (EMHombres1 == '') { EMHombres1 = 0; } 
		var EMMujeres1 = document.getElementById("EMMujeres1").value; if (EMMujeres1 == '') { EMMujeres1 = 0; } 
		var EMAmbos1 = parseInt(EMHombres1) + parseInt(EMMujeres1);		
		document.getElementById('EMAmbos1').value = EMAmbos1;

		var EMHombres2 = document.getElementById("EMHombres2").value;  if (EMHombres2 == '') { EMHombres2 = 0; } 
		var EMMujeres2 = document.getElementById("EMMujeres2").value;	 if (EMMujeres2 == '') { EMMujeres2 = 0; } 
		var EMAmbos2 = parseInt(EMHombres2) + parseInt(EMMujeres2);
		document.getElementById('EMAmbos2').value = EMAmbos2;

		var EMHombres3 = document.getElementById("EMHombres3").value;	 if (EMHombres3 == '') { EMHombres3 = 0; } 
		var EMMujeres3 = document.getElementById("EMMujeres3").value;  if (EMMujeres3 == '') { EMMujeres3 = 0; } 
		var EMAmbos3 = parseInt(EMHombres3) + parseInt(EMMujeres3);
		document.getElementById('EMAmbos3').value = EMAmbos3;

        /* CAMBIO DE RESIDENCIA */
		var CRHombres1 = 0;		var CRMujeres1 = 0;    	var CRAmbos1 = 0;
		var CRHombres2 = 0;		var CRMujeres2 = 0;    	var CRAmbos2 = 0;
        var CRHombres3 = 0;		var CRMujeres3 = 0;    	var CRAmbos3 = 0;

        var CRHombres1 = document.getElementById("CRHombres1").value; if (CRHombres1 == '') { CRHombres1 = 0; } 
		var CRMujeres1 = document.getElementById("CRMujeres1").value; if (CRMujeres1 == '') { CRMujeres1 = 0; } 
		var CRAmbos1 = parseInt(CRHombres1) + parseInt(CRMujeres1);		
		document.getElementById('CRAmbos1').value = CRAmbos1;

		var CRHombres2 = document.getElementById("CRHombres2").value;  if (CRHombres2 == '') { CRHombres2 = 0; } 
		var CRMujeres2 = document.getElementById("CRMujeres2").value;	 if (CRMujeres2 == '') { CRMujeres2 = 0; } 
		var CRAmbos2 = parseInt(CRHombres2) + parseInt(CRMujeres2);
		document.getElementById('CRAmbos2').value = CRAmbos2;

		var CRHombres3 = document.getElementById("CRHombres3").value;	 if (CRHombres3 == '') { CRHombres3 = 0; } 
		var CRMujeres3 = document.getElementById("CRMujeres3").value;  if (CRMujeres3 == '') { CRMujeres3 = 0; } 
		var CRAmbos3 = parseInt(CRHombres3) + parseInt(CRMujeres3);
		document.getElementById('CRAmbos3').value = CRAmbos3;

        /* OTRO */
		var OHombres1 = 0;		var OMujeres1 = 0;    	var OAmbos1 = 0;
		var OHombres2 = 0;		var OMujeres2 = 0;    	var OAmbos2 = 0;
        var OHombres3 = 0;		var OMujeres3 = 0;    	var OAmbos3 = 0;

        var OHombres1 = document.getElementById("OHombres1").value; if (OHombres1 == '') { OHombres1 = 0; } 
		var OMujeres1 = document.getElementById("OMujeres1").value; if (OMujeres1 == '') { OMujeres1 = 0; } 
        if (OHombres1 != 0) {
			$('#contentOHombres1').show();
		} else {
			$('#contentOHombres1').hide();
		}
        if (OMujeres1 != 0) {
			$('#contentOMujeres1').show();
		} else {
			$('#contentOMujeres1').hide();
		}
		var OAmbos1 = parseInt(OHombres1) + parseInt(OMujeres1);		
		document.getElementById('OAmbos1').value = OAmbos1;

		var OHombres2 = document.getElementById("OHombres2").value;  if (OHombres2 == '') { OHombres2 = 0; } 
		var OMujeres2 = document.getElementById("OMujeres2").value;	 if (OMujeres2 == '') { OMujeres2 = 0; } 
        if (OHombres2 != 0) {
			$('#contentOHombres2').show();
		} else {
			$('#contentOHombres2').hide();
		}
        if (OMujeres2 != 0) {
			$('#contentOMujeres2').show();
		} else {
			$('#contentOMujeres2').hide();
		}
		var OAmbos2 = parseInt(OHombres2) + parseInt(OMujeres2);
		document.getElementById('OAmbos2').value = OAmbos2;

		var OHombres3 = document.getElementById("OHombres3").value;	 if (OHombres3 == '') { OHombres3 = 0; } 
		var OMujeres3 = document.getElementById("OMujeres3").value;  if (OMujeres3 == '') { OMujeres3 = 0; } 
        if (OHombres3 != 0) {
			$('#contentOHombres3').show();
		} else {
			$('#contentOHombres3').hide();
		}
        if (OMujeres3 != 0) {
			$('#contentOMujeres3').show();
		} else {
			$('#contentOMujeres3').hide();
		}
		var OAmbos3 = parseInt(OHombres3) + parseInt(OMujeres3);
		document.getElementById('OAmbos3').value = OAmbos3;

        var AEIHombresTTotal1 = 0;
        AEIHombresTTotal1 = parseInt(BATHombres1) + parseInt(BAHombres1) + parseInt(BADHombres1) + parseInt(CPHombres1) + parseInt(FEHombres1) + parseInt(EMHombres1) + parseInt(CRHombres1) + parseInt(OHombres1);
        document.getElementById('AEIHombresTTotal1').value = AEIHombresTTotal1;
        
        if (parseInt(AEIHombresTTotal1) > parseInt(document.getElementById('AEIHombres1').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIHombres1").value);
            document.getElementById("BATHombres1").value = 0;
            document.getElementById("BAHombres1").value = 0;
            document.getElementById("BADHombres1").value = 0;
            document.getElementById("CPHombres1").value = 0;
            document.getElementById("FEHombres1").value = 0;
            document.getElementById("EMHombres1").value = 0;
            document.getElementById("CRHombres1").value = 0;
            document.getElementById("OHombres1").value = 0;
            document.getElementById("AEIHombresTTotal1").value = 0;

            
            document.getElementById("AEITotalTotal1").value = 0;
        } else {
            document.getElementById("BATHombres1").value = BATHombres1;
            document.getElementById("BAHombres1").value = BAHombres1;
            document.getElementById("BADHombres1").value = BADHombres1;
            document.getElementById("CPHombres1").value = CPHombres1;
            document.getElementById("FEHombres1").value = FEHombres1;
            document.getElementById("EMHombres1").value = EMHombres1;
            document.getElementById("CRHombres1").value = CRHombres1;
            document.getElementById("OHombres1").value = OHombres1;
            
            document.getElementById("BATAmbos1").value = BATAmbos1;
            document.getElementById("BAAmbos1").value = BAAmbos1;
            document.getElementById("BADAmbos1").value = BADAmbos1;
            document.getElementById("CPAmbos1").value = CPAmbos1;
            document.getElementById("FEAmbos1").value = FEAmbos1;
            document.getElementById("EMAmbos1").value = EMAmbos1;
            document.getElementById("CRAmbos1").value = CRAmbos1;
            document.getElementById("OAmbos1").value = OAmbos1;

            document.getElementById('AEIHombresTTotal1').value = AEIHombresTTotal1;

            var AEITotalTotal1 = 0;
            AEITotalTotal1 = parseInt(BATAmbos1) + parseInt(BAAmbos1) + parseInt(BADAmbos1) + parseInt(CPAmbos1) + parseInt(FEAmbos1) + parseInt(EMAmbos1) + parseInt(CRAmbos1) + parseInt(OAmbos1);
            document.getElementById('AEITotalTotal1').value = AEITotalTotal1;
        }

        var AEIMujeresTTotal1 = 0;
        AEIMujeresTTotal1 = parseInt(BATMujeres1) + parseInt(BAMujeres1) + parseInt(BADMujeres1) + parseInt(CPMujeres1) + parseInt(FEMujeres1) + parseInt(EMMujeres1) + parseInt(CRMujeres1) + parseInt(OMujeres1);
        document.getElementById('AEIMujeresTTotal1').value = AEIMujeresTTotal1;

        if (parseInt(AEIMujeresTTotal1) > parseInt(document.getElementById('AEIMujeres1').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIMujeres1").value);
            document.getElementById("BATMujeres1").value = 0;
            document.getElementById("BAMujeres1").value = 0;
            document.getElementById("BADMujeres1").value = 0;
            document.getElementById("CPMujeres1").value = 0;
            document.getElementById("FEMujeres1").value = 0;
            document.getElementById("EMMujeres1").value = 0;
            document.getElementById("CRMujeres1").value = 0;
            document.getElementById("OMujeres1").value = 0;
            document.getElementById("AEIMujeresTTotal1").value = 0;

            document.getElementById("AEITotalTotal1").value = 0;
        } else {
            document.getElementById("BATMujeres1").value = BATMujeres1;
            document.getElementById("BAMujeres1").value = BAMujeres1;
            document.getElementById("BADMujeres1").value = BADMujeres1;
            document.getElementById("CPMujeres1").value = CPMujeres1;
            document.getElementById("FEMujeres1").value = FEMujeres1;
            document.getElementById("EMMujeres1").value = EMMujeres1;
            document.getElementById("CRMujeres1").value = CRMujeres1;
            document.getElementById("OMujeres1").value = OMujeres1;
            
            document.getElementById("BATAmbos1").value = BATAmbos1;
            document.getElementById("BAAmbos1").value = BAAmbos1;
            document.getElementById("BADAmbos1").value = BADAmbos1;
            document.getElementById("CPAmbos1").value = CPAmbos1;
            document.getElementById("FEAmbos1").value = FEAmbos1;
            document.getElementById("EMAmbos1").value = EMAmbos1;
            document.getElementById("CRAmbos1").value = CRAmbos1;
            document.getElementById("OAmbos1").value = OAmbos1;

            document.getElementById('AEIMujeresTTotal1').value = AEIMujeresTTotal1;

            var AEITotalTotal1 = 0;
            AEITotalTotal1 = parseInt(BATAmbos1) + parseInt(BAAmbos1) + parseInt(BADAmbos1) + parseInt(CPAmbos1) + parseInt(FEAmbos1) + parseInt(EMAmbos1) + parseInt(CRAmbos1) + parseInt(OAmbos1);
            document.getElementById('AEITotalTotal1').value = AEITotalTotal1;

        }

        var AEIHombresTTotal2 = 0;
        AEIHombresTTotal2 = parseInt(BATHombres2) + parseInt(BAHombres2) + parseInt(BADHombres2) + parseInt(CPHombres2) + parseInt(FEHombres2) + parseInt(EMHombres2) + parseInt(CRHombres2) + parseInt(OHombres2);
        document.getElementById('AEIHombresTTotal2').value = AEIHombresTTotal2;

        if (parseInt(AEIHombresTTotal2) > parseInt(document.getElementById('AEIHombres2').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIHombres2").value);
            document.getElementById("BATHombres2").value = 0;
            document.getElementById("BAHombres2").value = 0;
            document.getElementById("BADHombres2").value = 0;
            document.getElementById("CPHombres2").value = 0;
            document.getElementById("FEHombres2").value = 0;
            document.getElementById("EMHombres2").value = 0;
            document.getElementById("CRHombres2").value = 0;
            document.getElementById("OHombres2").value = 0;
            document.getElementById("AEIHombresTTotal2").value = 0;
        } else {
            document.getElementById("BATHombres2").value = BATHombres2;
            document.getElementById("BAHombres2").value = BAHombres2;
            document.getElementById("BADHombres2").value = BADHombres2;
            document.getElementById("CPHombres2").value = CPHombres2;
            document.getElementById("FEHombres2").value = FEHombres2;
            document.getElementById("EMHombres2").value = EMHombres2;
            document.getElementById("CRHombres2").value = CRHombres2;
            document.getElementById("OHombres2").value = OHombres2;
            
            document.getElementById("BATAmbos2").value = BATAmbos2;
            document.getElementById("BAAmbos2").value = BAAmbos2;
            document.getElementById("BADAmbos2").value = BADAmbos2;
            document.getElementById("CPAmbos2").value = CPAmbos2;
            document.getElementById("FEAmbos2").value = FEAmbos2;
            document.getElementById("EMAmbos2").value = EMAmbos2;
            document.getElementById("CRAmbos2").value = CRAmbos2;
            document.getElementById("OAmbos2").value = OAmbos2;

            document.getElementById('AEIHombresTTotal2').value = AEIHombresTTotal2;

            var AEITotalTotal2 = 0;
            AEITotalTotal2 = parseInt(BATAmbos2) + parseInt(BAAmbos2) + parseInt(BADAmbos2) + parseInt(CPAmbos2) + parseInt(FEAmbos2) + parseInt(EMAmbos2) + parseInt(CRAmbos2) + parseInt(OAmbos2);
            document.getElementById('AEITotalTotal2').value = AEITotalTotal2;
        }

        var AEIMujeresTTotal2 = 0;
        AEIMujeresTTotal2 = parseInt(BATMujeres2) + parseInt(BAMujeres2) + parseInt(BADMujeres2) + parseInt(CPMujeres2) + parseInt(FEMujeres2) + parseInt(EMMujeres2) + parseInt(CRMujeres2) + parseInt(OMujeres2);
        document.getElementById('AEIMujeresTTotal2').value = AEIMujeresTTotal2;
        if (parseInt(AEIMujeresTTotal2) > parseInt(document.getElementById('AEIMujeres2').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIMujeres2").value);
            document.getElementById("BATMujeres2").value = 0;
            document.getElementById("BAMujeres2").value = 0;
            document.getElementById("BADMujeres2").value = 0;
            document.getElementById("CPMujeres2").value = 0;
            document.getElementById("FEMujeres2").value = 0;
            document.getElementById("EMMujeres2").value = 0;
            document.getElementById("CRMujeres2").value = 0;
            document.getElementById("OMujeres2").value = 0;
            document.getElementById("AEIMujeresTTotal2").value = 0;
        } else {
            document.getElementById("BATMujeres2").value = BATMujeres2;
            document.getElementById("BAMujeres2").value = BAMujeres2;
            document.getElementById("BADMujeres2").value = BADMujeres2;
            document.getElementById("CPMujeres2").value = CPMujeres2;
            document.getElementById("FEMujeres2").value = FEMujeres2;
            document.getElementById("EMMujeres2").value = EMMujeres2;
            document.getElementById("CRMujeres2").value = CRMujeres2;
            document.getElementById("OMujeres2").value = OMujeres2;
            
            document.getElementById("BATAmbos2").value = BATAmbos2;
            document.getElementById("BAAmbos2").value = BAAmbos2;
            document.getElementById("BADAmbos2").value = BADAmbos2;
            document.getElementById("CPAmbos2").value = CPAmbos2;
            document.getElementById("FEAmbos2").value = FEAmbos2;
            document.getElementById("EMAmbos2").value = EMAmbos2;
            document.getElementById("CRAmbos2").value = CRAmbos2;
            document.getElementById("OAmbos2").value = OAmbos2;

            document.getElementById('AEIMujeresTTotal2').value = AEIMujeresTTotal2;
        }
        
        var AEIHombresTTotal3 = 0;
        AEIHombresTTotal3 = parseInt(BATHombres3) + parseInt(BAHombres3) + parseInt(BADHombres3) + parseInt(CPHombres3) + parseInt(FEHombres3) + parseInt(EMHombres3) + parseInt(CRHombres3) + parseInt(OHombres3);
        document.getElementById('AEIHombresTTotal3').value = AEIHombresTTotal3;
        if (parseInt(AEIHombresTTotal3) > parseInt(document.getElementById('AEIHombres3').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIHombres3").value);
            document.getElementById("BATHombres3").value = 0;
            document.getElementById("BAHombres3").value = 0;
            document.getElementById("BADHombres3").value = 0;
            document.getElementById("CPHombres3").value = 0;
            document.getElementById("FEHombres3").value = 0;
            document.getElementById("EMHombres3").value = 0;
            document.getElementById("CRHombres3").value = 0;
            document.getElementById("OHombres3").value = 0;
            document.getElementById("AEIHombresTTotal3").value = 0;
        } else {
            document.getElementById("BATHombres3").value = BATHombres3;
            document.getElementById("BAHombres3").value = BAHombres3;
            document.getElementById("BADHombres3").value = BADHombres3;
            document.getElementById("CPHombres3").value = CPHombres3;
            document.getElementById("FEHombres3").value = FEHombres3;
            document.getElementById("EMHombres3").value = EMHombres3;
            document.getElementById("CRHombres3").value = CRHombres3;
            document.getElementById("OHombres3").value = OHombres3;
            
            document.getElementById("BATAmbos3").value = BATAmbos3;
            document.getElementById("BAAmbos3").value = BAAmbos3;
            document.getElementById("BADAmbos3").value = BADAmbos3;
            document.getElementById("CPAmbos3").value = CPAmbos3;
            document.getElementById("FEAmbos3").value = FEAmbos3;
            document.getElementById("EMAmbos3").value = EMAmbos3;
            document.getElementById("CRAmbos3").value = CRAmbos3;
            document.getElementById("OAmbos3").value = OAmbos3;

            document.getElementById('AEIHombresTTotal3').value = AEIHombresTTotal3;
            
            var AEITotalTotal3 = 0;
            AEITotalTotal3 = parseInt(BATAmbos3) + parseInt(BAAmbos3) + parseInt(BADAmbos3) + parseInt(CPAmbos3) + parseInt(FEAmbos3) + parseInt(EMAmbos3) + parseInt(CRAmbos3) + parseInt(OAmbos3);
            document.getElementById('AEITotalTotal3').value = AEITotalTotal3;
        }

        var AEIMujeresTTotal3 = 0;
        AEIMujeresTTotal3 = parseInt(BATMujeres3) + parseInt(BAMujeres3) + parseInt(BADMujeres3) + parseInt(CPMujeres3) + parseInt(FEMujeres3) + parseInt(EMMujeres3) + parseInt(CRMujeres3) + parseInt(OMujeres3);
        document.getElementById('AEIMujeresTTotal3').value = AEIMujeresTTotal3;
        if (parseInt(AEIMujeresTTotal3) > parseInt(document.getElementById('AEIMujeres3').value) ) {
            alertify.alert('El número máximo de Alumnos debe ser: '+ document.getElementById("AEIMujeres3").value);
            document.getElementById("BATMujeres3").value = 0;
            document.getElementById("BAMujeres3").value = 0;
            document.getElementById("BADMujeres3").value = 0;
            document.getElementById("CPMujeres3").value = 0;
            document.getElementById("FEMujeres3").value = 0;
            document.getElementById("EMMujeres3").value = 0;
            document.getElementById("CRMujeres3").value = 0;
            document.getElementById("OMujeres3").value = 0;
            document.getElementById("AEIMujeresTTotal3").value = 0;
        } else {
            document.getElementById("BATMujeres3").value = BATMujeres3;
            document.getElementById("BAMujeres3").value = BAMujeres3;
            document.getElementById("BADMujeres3").value = BADMujeres3;
            document.getElementById("CPMujeres3").value = CPMujeres3;
            document.getElementById("FEMujeres3").value = FEMujeres3;
            document.getElementById("EMMujeres3").value = EMMujeres3;
            document.getElementById("CRMujeres3").value = CRMujeres3;
            document.getElementById("OMujeres3").value = OMujeres3;
            
            document.getElementById("BATAmbos3").value = BATAmbos3;
            document.getElementById("BAAmbos3").value = BAAmbos3;
            document.getElementById("BADAmbos3").value = BADAmbos3;
            document.getElementById("CPAmbos3").value = CPAmbos3;
            document.getElementById("FEAmbos3").value = FEAmbos3;
            document.getElementById("EMAmbos3").value = EMAmbos3;
            document.getElementById("CRAmbos3").value = CRAmbos3;
            document.getElementById("OAmbos3").value = OAmbos3;

            document.getElementById('AEIMujeresTTotal3').value = AEIMujeresTTotal3;
            var AEITotalTotal3 = 0;
            AEITotalTotal3 = parseInt(BATAmbos3) + parseInt(BAAmbos3) + parseInt(BADAmbos3) + parseInt(CPAmbos3) + parseInt(FEAmbos3) + parseInt(EMAmbos3) + parseInt(CRAmbos3) + parseInt(OAmbos3);
            document.getElementById('AEITotalTotal3').value = AEITotalTotal3;
        }

	}

    function savePlanEstudio() {
        let formData = new FormData(); 
        
        formData.append("PEIdPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("PEIdPlantel", document.getElementById("idPlantel").value);
        formData.append("PETurnoPlantel", $("input[type=radio][name=Turno]:checked").val());
        formData.append("PEServicioEducativo", $("input[type=radio][name=PEServicioEducativo]:checked").val());
        formData.append("PEActualizacionAnio", document.getElementById("PEActualizacionAnio").value);
        formData.append("PEActualizacionMes", document.getElementById("PEActualizacionMes").value);
        formData.append("PEActualizacionDia", document.getElementById("PEActualizacionDia").value);
        formData.append("PEDuracion", document.getElementById("PEDuracion").value);
        formData.append("PEEstructura", $("input[type=radio][name=PEEstructura]:checked").val());
        formData.append("PECreditos", document.getElementById("PECreditos").value);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/savePlanEstudio_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
                var data = data.split(";;");                
                $("#idPlanEstudio").val(data[1]); 
            }
        }); 
    }

    function saveExistencia_Aprob() {
        let formData = new FormData(); 
        
        formData.append("EIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("EHombres1", document.getElementById("EHombres1").value);
        formData.append("EHombres3", document.getElementById("EHombres2").value);
        formData.append("EHombres5", document.getElementById("EHombres3").value);
        formData.append("EHombresTotal", document.getElementById("EHombresTotal").value);
        formData.append("EMujeres1", document.getElementById("EMujeres1").value);
        formData.append("EMujeres3", document.getElementById("EMujeres2").value);
        formData.append("EMujeres5", document.getElementById("EMujeres3").value);
        formData.append("EMujeresTotal", document.getElementById("EMujeresTotal").value);
        formData.append("ETotal1", document.getElementById("ETotal1").value);
        formData.append("ETotal3", document.getElementById("ETotal2").value);
        formData.append("ETotal5", document.getElementById("ETotal3").value);
        formData.append("ETotalTotal", document.getElementById("ETotalTotal").value);
        formData.append("EDiscapacidad1", document.getElementById("EDiscapacidad1").value);
        formData.append("EDiscapacidad3", document.getElementById("EDiscapacidad2").value);
        formData.append("EDiscapacidad5", document.getElementById("EDiscapacidad3").value);
        formData.append("EDiscapacidadTotal", document.getElementById("EDiscapacidadTotal").value);
        formData.append("EHablantes1", document.getElementById("EHablantes1").value);
        formData.append("EHablantes3", document.getElementById("EHablantes2").value);
        formData.append("EHablantes5", document.getElementById("EHablantes3").value);
        formData.append("EHablantesTotal", document.getElementById("EHablantesTotal").value);
        formData.append("EExtranjero1", document.getElementById("EExtranjero1").value);
        formData.append("EExtranjero3", document.getElementById("EExtranjero2").value);
        formData.append("EExtranjero5", document.getElementById("EExtranjero3").value);
        formData.append("EExtranjeroTotal", document.getElementById("EExtranjeroTotal").value);
        
        formData.append("EHombresAp1", document.getElementById("AHombres1").value);
        formData.append("EHombresAp3", document.getElementById("AHombres2").value);
        formData.append("EHombresAp5", document.getElementById("AHombres3").value);
        formData.append("EHombresApTotal", document.getElementById("AHombresTotal").value);
        formData.append("EMujeresAp1", document.getElementById("AMujeres1").value);
        formData.append("EMujeresAp3", document.getElementById("AMujeres2").value);
        formData.append("EMujeresAp5", document.getElementById("AMujeres3").value);
        formData.append("EMujeresApTotal", document.getElementById("AMujeresTotal").value);
        formData.append("ETotalAp1", document.getElementById("ATotal1").value);
        formData.append("ETotalAp3", document.getElementById("ATotal2").value);
        formData.append("ETotalAp5", document.getElementById("ATotal3").value);
        formData.append("ETotalApTotal", document.getElementById("ATotalTotal").value);
        formData.append("EDiscapacidadAp1", document.getElementById("ADiscapacidad1").value);
        formData.append("EDiscapacidadAp3", document.getElementById("ADiscapacidad2").value);
        formData.append("EDiscapacidadAp5", document.getElementById("ADiscapacidad3").value);
        formData.append("EDiscapacidadApTotal", document.getElementById("ADiscapacidadTotal").value);
        formData.append("EHablantesAp1", document.getElementById("AHablantes1").value);
        formData.append("EHablantesAp3", document.getElementById("AHablantes2").value);
        formData.append("EHablantesAp5", document.getElementById("AHablantes3").value);
        formData.append("EHablantesApTotal", document.getElementById("AHablantesTotal").value);
        formData.append("EExtranjeroAp1", document.getElementById("AExtranjero1").value);
        formData.append("EExtranjeroAp3", document.getElementById("AExtranjero2").value);
        formData.append("EExtranjeroAp5", document.getElementById("AExtranjero3").value);
        formData.append("EExtranjeroApTotal", document.getElementById("AExtranjeroTotal").value);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveExistenciaAprob_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveReprob_Reg() {
        let formData = new FormData(); 
        
        formData.append("AIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("AHombresRep1", document.getElementById("RepHombres1").value);
        formData.append("AHombresRep3", document.getElementById("RepHombres2").value);
        formData.append("AHombresRep5", document.getElementById("RepHombres3").value);
        formData.append("AHombresRepT", document.getElementById("RepHombresTotal").value);
        formData.append("AMujeresRep1", document.getElementById("RepMujeres1").value);
        formData.append("AMujeresRep3", document.getElementById("RepMujeres2").value);
        formData.append("AMujeresRep5", document.getElementById("RepMujeres3").value);
        formData.append("AMujeresRepT", document.getElementById("RepMujeresTotal").value);
        formData.append("ATotalRep1", document.getElementById("RepTotal1").value);
        formData.append("ATotalRep3", document.getElementById("RepTotal2").value);
        formData.append("ATotalRep5", document.getElementById("RepTotal3").value);
        formData.append("ATotalRep", document.getElementById("RepTotalTotal").value);
        formData.append("ADiscapacidadRep1", document.getElementById("RepDiscapacidad1").value);
        formData.append("ADiscapacidadRep3", document.getElementById("RepDiscapacidad2").value);
        formData.append("ADiscapacidadRep5", document.getElementById("RepDiscapacidad3").value);
        formData.append("ADiscapacidadRepT", document.getElementById("RepDiscapacidadTotal").value);
        formData.append("AHablantesRep1", document.getElementById("RepHablantes1").value);
        formData.append("AHablantesRep3", document.getElementById("RepHablantes2").value);
        formData.append("AHablantesRep5", document.getElementById("RepHablantes3").value);
        formData.append("AHablantesRepT", document.getElementById("RepHablantesTotal").value);
        formData.append("AExtranjerosRep1", document.getElementById("RepExtranjero1").value);
        formData.append("AExtranjerosRep3", document.getElementById("RepExtranjero2").value);
        formData.append("AExtranjerosRep5", document.getElementById("RepExtranjero3").value);
        formData.append("AExtranjerosRepT", document.getElementById("RepExtranjeroTotal").value);        
        
        formData.append("AHombresReg1", document.getElementById("RegHombres1").value);
        formData.append("AHombresReg3", document.getElementById("RegHombres2").value);
        formData.append("AHombresReg5", document.getElementById("RegHombres3").value);
        formData.append("AHombresRegT", document.getElementById("RegHombresTotal").value);
        formData.append("AMujeresReg1", document.getElementById("RegMujeres1").value);
        formData.append("AMujeresReg3", document.getElementById("RegMujeres2").value);
        formData.append("AMujeresReg5", document.getElementById("RegMujeres3").value);
        formData.append("AMujeresRegT", document.getElementById("RegMujeresTotal").value);
        formData.append("ATotalReg1", document.getElementById("RegTotal1").value);
        formData.append("ATotalReg3", document.getElementById("RegTotal2").value);
        formData.append("ATotalReg5", document.getElementById("RegTotal3").value);
        formData.append("ATotalReg", document.getElementById("RegTotalTotal").value);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveReprobReg_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveMat911() {
        let formData = new FormData(); 
        
        formData.append("MIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("M911H1o", document.getElementById("MIEHombres1").value);
        formData.append("M911H3o", document.getElementById("MIEHombres2").value);
        formData.append("M911H5o", document.getElementById("MIEHombres3").value);
        formData.append("M911HTotal", document.getElementById("MIEHombresTotal").value);
        formData.append("M911M1o", document.getElementById("MIEMujeres1").value);
        formData.append("M911M3o", document.getElementById("MIEMujeres2").value);
        formData.append("M911M5o", document.getElementById("MIEMujeres3").value);
        formData.append("M911MTotal", document.getElementById("MIEMujeresTotal").value);
        formData.append("M911T1o", document.getElementById("MIETotal1").value);
        formData.append("M911T3o", document.getElementById("MIETotal2").value);
        formData.append("M911T5o", document.getElementById("MIETotal3").value);
        formData.append("M911TTotal", document.getElementById("MIETotalTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveMat911_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function actualizarMat() {
        var AEIHombres1 = <?= $totales[0][0]['Hombres'] ?> - document.getElementById("EHombres1").value;
        document.getElementById('AEIHombres1').value = AEIHombres1;
        var AEIHombres2 = <?= $totales[1][0]['Hombres'] ?> - document.getElementById("EHombres2").value;
        document.getElementById('AEIHombres2').value = AEIHombres2;
        var AEIHombres3 = <?= $totales[2][0]['Hombres'] ?> - document.getElementById("EHombres3").value;
        document.getElementById('AEIHombres3').value = AEIHombres3;
        var AEIMujeres1 = <?= $totales[0][0]['Mujeres'] ?> - document.getElementById("EMujeres1").value;
        document.getElementById('AEIMujeres1').value = AEIMujeres1;
        var AEIMujeres2 = <?= $totales[1][0]['Mujeres'] ?> - document.getElementById("EMujeres2").value;
        document.getElementById('AEIMujeres2').value = AEIMujeres2;
        var AEIMujeres3 = <?= $totales[2][0]['Mujeres'] ?> - document.getElementById("EMujeres3").value;
        document.getElementById('AEIMujeres3').value = AEIMujeres3;
        var  AEITotal1= <?= $totales[0][0]['Total'] ?> - document.getElementById("ETotal1").value;
        document.getElementById('AEITotal1').value = AEITotal1;
        var AEITotal2 = <?= $totales[1][0]['Total'] ?> - document.getElementById("ETotal2").value;
        document.getElementById('AEITotal2').value = AEITotal2;
        var  AEITotal3= <?= $totales[2][0]['Total'] ?> - document.getElementById("ETotal3").value;
        document.getElementById('AEITotal3').value = AEITotal3;

        document.getElementById('AEIHombresTotal').value = AEIHombres1 + AEIHombres2 + AEIHombres3;
        document.getElementById('AEIMujeresTotal').value = AEIMujeres1 + AEIMujeres2 + AEIMujeres3;
        document.getElementById('AEITotalTotal').value = AEITotal1 + AEITotal2 + AEITotal3;

    }

    function saveAbandono() {
        let formData = new FormData(); 
        
        formData.append("AbIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("AbH1o", document.getElementById("AEIHombres1").value);
        formData.append("AbH3o", document.getElementById("AEIHombres2").value);
        formData.append("AbH5o", document.getElementById("AEIHombres3").value);
        formData.append("AbHTotal", document.getElementById("AEIHombresTotal").value);
        formData.append("AbM1o", document.getElementById("AEIMujeres1").value);
        formData.append("AbM3o", document.getElementById("AEIMujeres2").value);
        formData.append("AbM5o", document.getElementById("AEIMujeres3").value);
        formData.append("AbMTotal", document.getElementById("AEIMujeresTotal").value);
        formData.append("AbT1o", document.getElementById("AEITotal1").value);
        formData.append("AbT3o", document.getElementById("AEITotal2").value);
        formData.append("AbT5o", document.getElementById("AEITotal3").value);
        formData.append("AbTTotal", document.getElementById("AEITotalTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveAbandono_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveAbandonoInt1() {
        let formData = new FormData(); 
        
        formData.append("AI1IdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("AI1BajaAdminH", document.getElementById("BATHombres1").value);
        formData.append("AI1BajaAcaH", document.getElementById("BAHombres1").value);
        formData.append("AI1BajaDefH", document.getElementById("BADHombres1").value);
        formData.append("AI1CambioPlantelH", document.getElementById("CPHombres1").value);
        formData.append("AI1FacEcoH", document.getElementById("FEHombres1").value);
        formData.append("AI1EmbarazoH", document.getElementById("EMHombres1").value);
        formData.append("AI1CamResidenciaH", document.getElementById("CRHombres1").value);
        formData.append("AI1OtrosH", document.getElementById("OHombres1").value);
        formData.append("AI1DescripH", document.getElementById("descOtrosHombres1").value);
        formData.append("AI1TotalH", document.getElementById("AEIHombresTTotal1").value);
        
        formData.append("AI1BajaAdminM", document.getElementById("BATMujeres1").value);
        formData.append("AI1BajaAcaM", document.getElementById("BAMujeres1").value);
        formData.append("AI1BajaDefM", document.getElementById("BADMujeres1").value);
        formData.append("AI1CambioPlantelM", document.getElementById("CPMujeres1").value);
        formData.append("AI1FacEcoM", document.getElementById("FEMujeres1").value);
        formData.append("AI1EmbarazoM", document.getElementById("EMMujeres1").value);
        formData.append("AI1CamResidenciaM", document.getElementById("CRMujeres1").value);
        formData.append("AI1OtrosM", document.getElementById("OMujeres1").value);
        formData.append("AI1DescripM", document.getElementById("descOtrosMujeres1").value);
        formData.append("AI1TotalM", document.getElementById("AEIMujeresTTotal1").value);

        formData.append("AI1BajaAdminT", document.getElementById("BATAmbos1").value);
        formData.append("AI1BajaAcaT", document.getElementById("BAAmbos1").value);
        formData.append("AI1BajaDefT", document.getElementById("BADAmbos1").value);
        formData.append("AI1CambioPlantelT", document.getElementById("CPAmbos1").value);
        formData.append("AI1FacEcoT", document.getElementById("FEAmbos1").value);
        formData.append("AI1EmbarazoT", document.getElementById("EMAmbos1").value);
        formData.append("AI1CamResidenciaT", document.getElementById("CRAmbos1").value);
        formData.append("AI1OtrosT", document.getElementById("OAmbos1").value);
        formData.append("AI1Total", document.getElementById("AEITotalTotal1").value);
                        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveAbandonoInt1_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveAbandonoInt3() {
        let formData = new FormData(); 
        
        formData.append("AI3IdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("AI3BajaAdminH", document.getElementById("BATHombres2").value);
        formData.append("AI3BajaAcaH", document.getElementById("BAHombres2").value);
        formData.append("AI3BajaDefH", document.getElementById("BADHombres2").value);
        formData.append("AI3CambioPlantelH", document.getElementById("CPHombres2").value);
        formData.append("AI3FacEcoH", document.getElementById("FEHombres2").value);
        formData.append("AI3EmbarazoH", document.getElementById("EMHombres2").value);
        formData.append("AI3CamResidenciaH", document.getElementById("CRHombres2").value);
        formData.append("AI3OtrosH", document.getElementById("OHombres2").value);
        formData.append("AI3DescripH", document.getElementById("descOtrosHombres2").value);
        formData.append("AI3TotalH", document.getElementById("AEIHombresTTotal2").value);

        formData.append("AI3BajaAdminM", document.getElementById("BATMujeres2").value);
        formData.append("AI3BajaAcaM", document.getElementById("BAMujeres2").value);
        formData.append("AI3BajaDefM", document.getElementById("BADMujeres2").value);
        formData.append("AI3CambioPlantelM", document.getElementById("CPMujeres2").value);
        formData.append("AI3FacEcoM", document.getElementById("FEMujeres2").value);
        formData.append("AI3EmbarazoM", document.getElementById("EMMujeres2").value);
        formData.append("AI3CamResidenciaM", document.getElementById("CRMujeres2").value);
        formData.append("AI3OtrosM", document.getElementById("OMujeres2").value);
        formData.append("AI3DescripM", document.getElementById("descOtrosMujeres2").value);
        formData.append("AI3TotalM", document.getElementById("AEIMujeresTTotal2").value);

        formData.append("AI3BajaAdminT", document.getElementById("BATAmbos2").value);
        formData.append("AI3BajaAcaT", document.getElementById("BAAmbos2").value);
        formData.append("AI3BajaDefT", document.getElementById("BADAmbos2").value);
        formData.append("AI3CambioPlantelT", document.getElementById("CPAmbos2").value);
        formData.append("AI3FacEcoT", document.getElementById("FEAmbos2").value);
        formData.append("AI3EmbarazoT", document.getElementById("EMAmbos2").value);
        formData.append("AI3CamResidenciaT", document.getElementById("CRAmbos2").value);
        formData.append("AI3OtrosT", document.getElementById("OAmbos2").value);
        formData.append("AI3Total", document.getElementById("AEITotalTotal2").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveAbandonoInt3_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveAbandonoInt5() {
        let formData = new FormData(); 
        
        formData.append("AI5IdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("AI5BajaAdminH", document.getElementById("BATHombres3").value);
        formData.append("AI5BajaAcaH", document.getElementById("BAHombres3").value);
        formData.append("AI5BajaDefH", document.getElementById("BADHombres3").value);
        formData.append("AI5CambioPlantelH", document.getElementById("CPHombres3").value);
        formData.append("AI5FacEcoH", document.getElementById("FEHombres3").value);
        formData.append("AI5EmbarazoH", document.getElementById("EMHombres3").value);
        formData.append("AI5CamResidenciaH", document.getElementById("CRHombres3").value);
        formData.append("AI5OtrosH", document.getElementById("OHombres3").value);
        formData.append("AI5DescripH", document.getElementById("descOtrosHombres3").value);
        formData.append("AI5TotalH", document.getElementById("AEIHombresTTotal3").value);

        formData.append("AI5BajaAdminM", document.getElementById("BATMujeres3").value);
        formData.append("AI5BajaAcaM", document.getElementById("BAMujeres3").value);
        formData.append("AI5BajaDefM", document.getElementById("BADMujeres3").value);
        formData.append("AI5CambioPlantelM", document.getElementById("CPMujeres3").value);
        formData.append("AI5FacEcoM", document.getElementById("FEMujeres3").value);
        formData.append("AI5EmbarazoM", document.getElementById("EMMujeres3").value);
        formData.append("AI5CamResidenciaM", document.getElementById("CRMujeres3").value);
        formData.append("AI5OtrosM", document.getElementById("OMujeres3").value);
        formData.append("AI5DescripM", document.getElementById("descOtrosMujeres3").value);
        formData.append("AI5TotalM", document.getElementById("AEIMujeresTTotal3").value);

        formData.append("AI5BajaAdminT", document.getElementById("BATAmbos3").value);
        formData.append("AI5BajaAcaT", document.getElementById("BAAmbos3").value);
        formData.append("AI5BajaDefT", document.getElementById("BADAmbos3").value);
        formData.append("AI5CambioPlantelT", document.getElementById("CPAmbos3").value);
        formData.append("AI5FacEcoT", document.getElementById("FEAmbos3").value);
        formData.append("AI5EmbarazoT", document.getElementById("EMAmbos3").value);
        formData.append("AI5CamResidenciaT", document.getElementById("CRAmbos3").value);
        formData.append("AI5OtrosT", document.getElementById("OAmbos3").value);
        formData.append("AI5Total", document.getElementById("AEITotalTotal3").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveAbandonoInt5_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function sumarMatSem() {
        
        var MSEDiscapacidad1 = document.getElementById("MSEDiscapacidad1").value; if (MSEDiscapacidad1 == '') { MSEDiscapacidad1 = 0; } 
		var MSEDiscapacidad2 = document.getElementById("MSEDiscapacidad2").value; if (MSEDiscapacidad2 == '') { MSEDiscapacidad2 = 0; } 
		var MSEDiscapacidad3 = document.getElementById("MSEDiscapacidad3").value; if (MSEDiscapacidad3 == '') { MSEDiscapacidad3 = 0; } 
		var MSEDiscapacidadTotal = parseInt(MSEDiscapacidad1) + parseInt(MSEDiscapacidad2) + parseInt(MSEDiscapacidad3);
		document.getElementById('MSEDiscapacidadTotal').value = MSEDiscapacidadTotal;

		var MSEHablantes1 = document.getElementById("MSEHablantes1").value; if (MSEHablantes1 == '') { MSEHablantes1 = 0; } 
		var MSEHablantes2 = document.getElementById("MSEHablantes2").value; if (MSEHablantes2 == '') { MSEHablantes2 = 0; } 
		var MSEHablantes3 = document.getElementById("MSEHablantes3").value; if (MSEHablantes3 == '') { MSEHablantes3 = 0; } 
		var MSEHablantesTotal = parseInt(MSEHablantes1) + parseInt(MSEHablantes2) + parseInt(MSEHablantes3);
		document.getElementById('MSEHablantesTotal').value = MSEHablantesTotal;

		var MSEExtranjero1 = document.getElementById("MSEExtranjero1").value; if (MSEExtranjero1 == '') { MSEExtranjero1 = 0; } 
		var MSEExtranjero2 = document.getElementById("MSEExtranjero2").value; if (MSEExtranjero2 == '') { MSEExtranjero2 = 0; } 
		var MSEExtranjero3 = document.getElementById("MSEExtranjero3").value; if (MSEExtranjero3 == '') { MSEExtranjero3 = 0; } 
		var MSEExtranjeroTotal = parseInt(MSEExtranjero1) + parseInt(MSEExtranjero2) + parseInt(MSEExtranjero3);
		document.getElementById('MSEExtranjeroTotal').value = MSEExtranjeroTotal;
	}

    function savematriculaIns() {
        let formData = new FormData(); 
        
        formData.append("MIIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("MHIns2o", document.getElementById("MSEHombres1").value);
        formData.append("MHIns4o", document.getElementById("MSEHombres2").value);
        formData.append("MHIns6o", document.getElementById("MSEHombres3").value);
        formData.append("MHInsTotal", document.getElementById("MSEHombresTotal").value);

        formData.append("MMIns2o", document.getElementById("MSEMujeres1").value);
        formData.append("MMIns4o", document.getElementById("MSEMujeres2").value);
        formData.append("MMIns6o", document.getElementById("MSEMujeres3").value);
        formData.append("MMInsTotal", document.getElementById("MSEMujeresTotal").value);

        formData.append("MTIns2o", document.getElementById("MSETotal1").value);
        formData.append("MTIns4o", document.getElementById("MSETotal2").value);
        formData.append("MTIns6o", document.getElementById("MSETotal3").value);
        formData.append("MTInsTotal", document.getElementById("MSETotalTotal").value);
        
        formData.append("MDIns2o", document.getElementById("MSEDiscapacidad1").value);
        formData.append("MDIns4o", document.getElementById("MSEDiscapacidad2").value);
        formData.append("MDIns6o", document.getElementById("MSEDiscapacidad3").value);
        formData.append("MDInsTotal", document.getElementById("MSEDiscapacidadTotal").value);

        formData.append("MEIns2o", document.getElementById("MSEExtranjero1").value);
        formData.append("MEIns4o", document.getElementById("MSEExtranjero2").value);
        formData.append("MEIns6o", document.getElementById("MSEExtranjero3").value);
        formData.append("MEInsTotal", document.getElementById("MSEExtranjeroTotal").value);
        
        formData.append("MHaIns2o", document.getElementById("MSEHablantes1").value);
        formData.append("MHaIns4o", document.getElementById("MSEHablantes2").value);
        formData.append("MHaIns6o", document.getElementById("MSEHablantes3").value);
        formData.append("MHaInsTotal", document.getElementById("MSEHablantesTotal").value);
        
        formData.append("MInsGrupos2o", document.getElementById("MSEGrupos1").value);
        formData.append("MInsGrupos4o", document.getElementById("MSEGrupos2").value);
        formData.append("MInsGrupos6o", document.getElementById("MSEGrupos3").value);
        formData.append("MInsGruposTotal", document.getElementById("MSEGruposTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/savematriculaIns_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function sumarPresencial() { // Solo para Centros EMSAD

        var CLPHombres1 = document.getElementById("CLPHombres1").value; if (CLPHombres1 == '') { CLPHombres1 = 0; } 
		var CLPHombres2 = document.getElementById("CLPHombres2").value; if (CLPHombres2 == '') { CLPHombres2 = 0; } 
		var CLPHombres3 = document.getElementById("CLPHombres3").value; if (CLPHombres3 == '') { CLPHombres3 = 0; } 
		var CLPHombresTotal = parseInt(CLPHombres1) + parseInt(CLPHombres2) + parseInt(CLPHombres3);
		document.getElementById('CLPHombresTotal').value = CLPHombresTotal;

		var CLPMujeres1 = document.getElementById("CLPMujeres1").value; if (CLPMujeres1 == '') { CLPMujeres1 = 0; } 
		var CLPMujeres2 = document.getElementById("CLPMujeres2").value; if (CLPMujeres2 == '') { CLPMujeres2 = 0; } 
		var CLPMujeres3 = document.getElementById("CLPMujeres3").value; if (CLPMujeres3 == '') { CLPMujeres3 = 0; } 
		var CLPMujeresTotal = parseInt(CLPMujeres1) + parseInt(CLPMujeres2) + parseInt(CLPMujeres3);
		document.getElementById('CLPMujeresTotal').value = CLPMujeresTotal;
        
        var CLPTotal1 = parseInt(CLPHombres1) + parseInt(CLPMujeres1);
		document.getElementById('CLPTotal1').value = CLPTotal1;
        var CLPTotal2 = parseInt(CLPHombres2) + parseInt(CLPMujeres2);
		document.getElementById('CLPTotal2').value = CLPTotal2;
        var CLPTotal3 = parseInt(CLPHombres3) + parseInt(CLPMujeres3);
		document.getElementById('CLPTotal3').value = CLPTotal3;

		var CLPTotal = parseInt(CLPTotal1) + parseInt(CLPTotal2) + parseInt(CLPTotal3);
		document.getElementById('CLPTotal').value = CLPTotal;

        var CLDHombres1 = document.getElementById("CLDHombres1").value; if (CLDHombres1 == '') { CLDHombres1 = 0; } 
		var CLDHombres2 = document.getElementById("CLDHombres2").value; if (CLDHombres2 == '') { CLDHombres2 = 0; } 
		var CLDHombres3 = document.getElementById("CLDHombres3").value; if (CLDHombres3 == '') { CLDHombres3 = 0; } 
		var CLDHombresTotal = parseInt(CLDHombres1) + parseInt(CLDHombres2) + parseInt(CLDHombres3);
		document.getElementById('CLDHombresTotal').value = CLDHombresTotal;

		var CLDMujeres1 = document.getElementById("CLDMujeres1").value; if (CLDMujeres1 == '') { CLDMujeres1 = 0; } 
		var CLDMujeres2 = document.getElementById("CLDMujeres2").value; if (CLDMujeres2 == '') { CLDMujeres2 = 0; } 
		var CLDMujeres3 = document.getElementById("CLDMujeres3").value; if (CLDMujeres3 == '') { CLDMujeres3 = 0; } 
		var CLDMujeresTotal = parseInt(CLDMujeres1) + parseInt(CLDMujeres2) + parseInt(CLDMujeres3);
		document.getElementById('CLDMujeresTotal').value = CLDMujeresTotal;

		var CLDTotal1 = parseInt(CLDHombres1) + parseInt(CLDMujeres1);
		document.getElementById('CLDTotal1').value = CLDTotal1;
        var CLDTotal2 = parseInt(CLDHombres2) + parseInt(CLDMujeres2);
		document.getElementById('CLDTotal2').value = CLDTotal2;
        var CLDTotal3 = parseInt(CLDHombres3) + parseInt(CLDMujeres3);
		document.getElementById('CLDTotal3').value = CLDTotal3;

		var CLDTotal = parseInt(CLDTotal1) + parseInt(CLDTotal2) + parseInt(CLDTotal3);
		document.getElementById('CLDTotal').value = CLDTotal;
    
    }


    function sumarRepetidores(){
        var RHombres1 = document.getElementById("RHombres1").value; if (RHombres1 == '') { RHombres1 = 0; } 
		var RHombres2 = document.getElementById("RHombres2").value; if (RHombres2 == '') { RHombres2 = 0; } 
		var RHombres3 = document.getElementById("RHombres3").value; if (RHombres3 == '') { RHombres3 = 0; } 
		var RHombresTotal = parseInt(RHombres1) + parseInt(RHombres2) + parseInt(RHombres3);
		document.getElementById('RHombresTotal').value = RHombresTotal;

		var RMujeres1 = document.getElementById("RMujeres1").value; if (RMujeres1 == '') { RMujeres1 = 0; } 
		var RMujeres2 = document.getElementById("RMujeres2").value; if (RMujeres2 == '') { RMujeres2 = 0; } 
		var RMujeres3 = document.getElementById("RMujeres3").value; if (RMujeres3 == '') { RMujeres3 = 0; } 
		var RMujeresTotal = parseInt(RMujeres1) + parseInt(RMujeres2) + parseInt(RMujeres3);
		document.getElementById('RMujeresTotal').value = RMujeresTotal;

        var RTotal1 = parseInt(RHombres1) + parseInt(RMujeres1);
		document.getElementById('RTotal1').value = RTotal1;
        var RTotal2 = parseInt(RHombres2) + parseInt(RMujeres2);
		document.getElementById('RTotal2').value = RTotal2;
        var RTotal3 = parseInt(RHombres3) + parseInt(RMujeres3);
		document.getElementById('RTotal3').value = RTotal3;

        var RTotalTotal = parseInt(RTotal1) + parseInt(RTotal2) + parseInt(RTotal3);
		document.getElementById('RTotalTotal').value = RTotalTotal;
    }


    function savePresenciales() {
        let formData = new FormData(); 
        
        formData.append("MCIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("MCHPre2o", document.getElementById("CLPHombres1").value);
        formData.append("MCHPre4o", document.getElementById("CLPHombres2").value);
        formData.append("MCHPre6o", document.getElementById("CLPHombres3").value);
        formData.append("MCHPreTotal", document.getElementById("CLPHombresTotal").value);

        formData.append("MCMPre2o", document.getElementById("CLPMujeres1").value);
        formData.append("MCMPre4o", document.getElementById("CLPMujeres2").value);
        formData.append("MCMPre6o", document.getElementById("CLPMujeres3").value);
        formData.append("MCMPreTotal", document.getElementById("CLPMujeresTotal").value);

        formData.append("MCTPre2o", document.getElementById("CLPTotal1").value);
        formData.append("MCTPre4o", document.getElementById("CLPTotal2").value);
        formData.append("MCTPre6o", document.getElementById("CLPTotal3").value);
        formData.append("MCTPreTotal", document.getElementById("CLPTotal").value);

        formData.append("MCHDis2o", document.getElementById("CLDHombres1").value);
        formData.append("MCHDis4o", document.getElementById("CLDHombres2").value);
        formData.append("MCHDis6o", document.getElementById("CLDHombres3").value);
        formData.append("MCHDisTotal", document.getElementById("CLDHombresTotal").value);

        formData.append("MCMDis2o", document.getElementById("CLDMujeres1").value);
        formData.append("MCMDis4o", document.getElementById("CLDMujeres2").value);
        formData.append("MCMDis6o", document.getElementById("CLDMujeres3").value);
        formData.append("MCMDisTotal", document.getElementById("CLDMujeresTotal").value);

        formData.append("MCTDis2o", document.getElementById("CLDTotal1").value);
        formData.append("MCTDis4o", document.getElementById("CLDTotal2").value);
        formData.append("MCTDis6o", document.getElementById("CLDTotal3").value);
        formData.append("MCTDisTotal", document.getElementById("CLDTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/savePresenciales_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function saveRepetidores() {
        let formData = new FormData(); 
        
        formData.append("RCIdBgPlanEstudios", document.getElementById("idPlanEstudio").value);
        formData.append("RCHRepe2o", document.getElementById("RHombres1").value);
        formData.append("RCHRepe4o", document.getElementById("RHombres2").value);
        formData.append("RCHRepe6o", document.getElementById("RHombres3").value);
        formData.append("RCHRepeTotal", document.getElementById("RHombresTotal").value);

        formData.append("RCMRepe2o", document.getElementById("RMujeres1").value);
        formData.append("RCMRepe4o", document.getElementById("RMujeres2").value);
        formData.append("RCMRepe6o", document.getElementById("RMujeres3").value);
        formData.append("RCMRepeTotal", document.getElementById("RMujeresTotal").value);

        formData.append("RCTRepe2o", document.getElementById("RTotal1").value);
        formData.append("RCTRepe4o", document.getElementById("RTotal2").value);
        formData.append("RCTRepe6o", document.getElementById("RTotal3").value);
        formData.append("RCTRepeTotal", document.getElementById("RTotalTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveRepetidores_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

     //Fin Solo para Centros EMSAD

     function selectModelo(){
		var moDual = $("input[type=radio][name=PEServicioEducativoDual]:checked").val();
        if (moDual == 1) {
            jQuery("#MDHombres1").removeAttr( "disabled", false );
            jQuery("#MDHombres2").removeAttr( "disabled", false );

            jQuery("#MDMujeres1").removeAttr( "disabled", false );
            jQuery("#MDMujeres2").removeAttr( "disabled", false );
        } else {
            jQuery("#MDHombres1").attr( "disabled", true );
            document.getElementById('MDHombres1').value = 0;
            jQuery("#MDHombres2").attr( "disabled", true );
            document.getElementById('MDHombres2').value = 0;

            document.getElementById('MDTotal1').value = 0;
            document.getElementById('MDTotal2').value = 0;

            jQuery("#MDMujeres1").attr( "disabled", true );
            document.getElementById('MDMujeres1').value = 0;
            jQuery("#MDMujeres2").attr( "disabled", true );
            document.getElementById('MDMujeres2').value = 0;
            
            document.getElementById('MDHombresTotal').value = 0;
            document.getElementById('MDMujeresTotal').value = 0;
            document.getElementById('MDTotalTotal').value = 0;
        }
    }

     function sumarDual() {
        var MDHombres1 = document.getElementById("MDHombres1").value; if (MDHombres1 == '') { MDHombres1 = 0; } 
		var MDHombres2 = document.getElementById("MDHombres2").value; if (MDHombres2 == '') { MDHombres2 = 0; } 
		var MDHombresTotal = parseInt(MDHombres1) + parseInt(MDHombres2);
		document.getElementById('MDHombresTotal').value = MDHombresTotal;

		var MDMujeres1 = document.getElementById("MDMujeres1").value; if (MDMujeres1 == '') { MDMujeres1 = 0; } 
		var MDMujeres2 = document.getElementById("MDMujeres2").value; if (MDMujeres2 == '') { MDMujeres2 = 0; } 
		var MDMujeresTotal = parseInt(MDMujeres1) + parseInt(MDMujeres2);
		document.getElementById('MDMujeresTotal').value = MDMujeresTotal;

        var MDTotal1 = parseInt(MDHombres1) + parseInt(MDMujeres1);
		document.getElementById('MDTotal1').value = MDTotal1;
        var MDTotal2 = parseInt(MDHombres2) + parseInt(MDMujeres2);
		document.getElementById('MDTotal2').value = MDTotal2;
        
        var MDTotalTotal = parseInt(MDTotal1) + parseInt(MDTotal2);
		document.getElementById('MDTotalTotal').value = MDTotalTotal;
     }

     function saveDual() {
        let formData = new FormData(); 
        
        formData.append("MDIdBgPlan", document.getElementById("idPlanEstudio").value);
        formData.append("MDSerEduc", $("input[type=radio][name=PEServicioEducativoDual]:checked").val());
        formData.append("MDHMod4o", document.getElementById("MDHombres1").value);
        formData.append("MDHMod6o", document.getElementById("MDHombres2").value);
        formData.append("MDHModTotal", document.getElementById("MDHombresTotal").value);

        formData.append("MDMMod4o", document.getElementById("MDMujeres1").value);
        formData.append("MDMMod6o", document.getElementById("MDMujeres2").value);
        formData.append("MDMModTotal", document.getElementById("MDMujeresTotal").value);

        formData.append("MDTMod4o", document.getElementById("MDTotal1").value);
        formData.append("MDTMod6o", document.getElementById("MDTotal2").value);
        formData.append("MDTModTotal", document.getElementById("MDTotalTotal").value);

        formData.append("MDArchivo_file", MDArchivo_file.files[0]);
        <?php if ($dual['MDArchivo_file'] != '') {?>
            formData.append("archivo", document.getElementById("archivo").value);
        <?php } ?> 
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveDual_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }

    function sumarDoc() {
        var DocHombres = document.getElementById("DocHombres").value; if (DocHombres == '') { DocHombres = 0; } 
		var DocMujeres = document.getElementById("DocMujeres").value; if (DocMujeres == '') { DocMujeres = 0; } 
		var DocTotal = parseInt(DocHombres) + parseInt(DocMujeres);
		document.getElementById('DocTotal').value = DocTotal;
    }

    function sumarPersonalDoc() {
        var PDHombres1 = document.getElementById("PDHombres1").value; if (PDHombres1 == '') { PDHombres1 = 0; } 
		var PDMujeres1 = document.getElementById("PDMujeres1").value; if (PDMujeres1 == '') { PDMujeres1 = 0; } 
		var PDTotal1 = parseInt(PDHombres1) + parseInt(PDMujeres1);
		document.getElementById('PDTotal1').value = PDTotal1;

        var PDHombres2 = document.getElementById("PDHombres2").value; if (PDHombres2 == '') { PDHombres2 = 0; } 
		var PDMujeres2 = document.getElementById("PDMujeres2").value; if (PDMujeres2 == '') { PDMujeres2 = 0; } 
		var PDTotal2 = parseInt(PDHombres2) + parseInt(PDMujeres2);
		document.getElementById('PDTotal2').value = PDTotal2;

        var PDHombres3 = document.getElementById("PDHombres3").value; if (PDHombres3 == '') { PDHombres3 = 0; } 
		var PDMujeres3 = document.getElementById("PDMujeres3").value; if (PDMujeres3 == '') { PDMujeres3 = 0; } 
		var PDTotal3 = parseInt(PDHombres3) + parseInt(PDMujeres3);
		document.getElementById('PDTotal3').value = PDTotal3;

        var PDHombres4 = document.getElementById("PDHombres4").value; if (PDHombres4 == '') { PDHombres4 = 0; } 
		var PDMujeres4 = document.getElementById("PDMujeres4").value; if (PDMujeres4 == '') { PDMujeres4 = 0; } 
		var PDTotal4 = parseInt(PDHombres4) + parseInt(PDMujeres4);
		document.getElementById('PDTotal4').value = PDTotal4;
		
        var PDHombresTotal = parseInt(PDHombres1) + parseInt(PDHombres2) + parseInt(PDHombres3) + parseInt(PDHombres4);
		document.getElementById('PDHombresTotal').value = PDHombresTotal;
        if (parseInt(PDHombresTotal) >= parseInt(document.getElementById("DocHombres").value) +1 ) {
            alertify.alert('El número máximo de Docentes debe ser: '+ document.getElementById("DocHombres").value);
            document.getElementById("PDHombres1").value = 0;
            document.getElementById("PDHombres2").value = 0;
            document.getElementById("PDHombres3").value = 0;
            document.getElementById("PDHombres4").value = 0;

            document.getElementById('PDTotal1').value = 0;
            document.getElementById('PDTotal2').value = 0;
            document.getElementById('PDTotal3').value = 0;
            document.getElementById('PDTotal4').value = 0;

            document.getElementById('PDHombresTotal').value = 0;            

        }

        var PDMujeresTotal = parseInt(PDMujeres1) + parseInt(PDMujeres2) + parseInt(PDMujeres3) + parseInt(PDMujeres4);
		document.getElementById('PDMujeresTotal').value = PDMujeresTotal;
        if (parseInt(PDMujeresTotal) >= parseInt(document.getElementById("DocMujeres").value) +1 ) {
            alertify.alert('El número máximo de Docentes debe ser: '+ document.getElementById("DocMujeres").value);
            document.getElementById("PDMujeres1").value = 0;
            document.getElementById("PDMujeres2").value = 0;
            document.getElementById("PDMujeres3").value = 0;
            document.getElementById("PDMujeres4").value = 0;

            document.getElementById('PDTotal1').value = 0;
            document.getElementById('PDTotal2').value = 0;
            document.getElementById('PDTotal3').value = 0;
            document.getElementById('PDTotal4').value = 0;

            document.getElementById('PDMujeresTotal').value = 0;

        }

        var PDTotal = parseInt(document.getElementById('PDHombresTotal').value) + parseInt(document.getElementById('PDMujeresTotal').value);
        document.getElementById('PDTotal').value = PDTotal;
        if (parseInt(PDTotal) >= parseInt(document.getElementById("DocTotal").value) +1 ) {
            alertify.alert('El número máximo de Docentes debe ser: '+ document.getElementById("DocTotal").value);
        }

    }

    function saveDocentes() {
        let formData = new FormData(); 
        
        formData.append("DIdBgPlan", document.getElementById("idPlanEstudio").value);
        formData.append("DHombres", document.getElementById("DocHombres").value);
        formData.append("DMujeres", document.getElementById("DocMujeres").value);
        formData.append("DTotal", document.getElementById("DocTotal").value);

        formData.append("DHTiempoCom", document.getElementById("PDHombres1").value);
        formData.append("DMTiempoCom", document.getElementById("PDMujeres1").value);
        formData.append("DTTiempoCom", document.getElementById("PDTotal1").value);

        formData.append("DH34Tiempo", document.getElementById("PDHombres2").value);
        formData.append("DM34Tiempo", document.getElementById("PDMujeres2").value);
        formData.append("DT34Tiempo", document.getElementById("PDTotal2").value);

        formData.append("DH12Tiempo", document.getElementById("PDHombres3").value);
        formData.append("DM12Tiempo", document.getElementById("PDMujeres3").value);
        formData.append("DT12Tiempo", document.getElementById("PDTotal3").value);

        formData.append("DHPorHoras", document.getElementById("PDHombres4").value);
        formData.append("DMPorHoras", document.getElementById("PDMujeres4").value);
        formData.append("DTPorHoras", document.getElementById("PDTotal4").value);

        formData.append("DHTTotal", document.getElementById("PDHombresTotal").value);
        formData.append("DMTTotal", document.getElementById("PDMujeresTotal").value);
        formData.append("DTTotal", document.getElementById("PDTotal").value);
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveDocentes_skip"); ?>",
            data: formData,
            dataType: "html",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
            
            }
        }); 
    }
    
    function saveFormaciones(form, finish) {
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("bginterno/saveFormaciones_skip"); ?>",
            data: form.serialize(),
            dataType: "html",
            
            success: function(data){
                var data = data.split(";;");
                if (data[0]=="OK") {
                    if(finish && data[0]=="OK"){
                        location.href ='<?php echo base_url("bginterno"); ?>';
                    }
                } 
			}
        }); 
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

    $(document).on('change','.up', function(){
        var names = [];
        var length = $(this).get(0).files.length;
          for (var i = 0; i < $(this).get(0).files.length; ++i) {
              names.push($(this).get(0).files[i].name);
          }
          // $("input[name=file]").val(names);
        if(length>2){
          var fileName = names.join(', ');
          $(this).closest('.form-group').find('.form-control').attr("value",length+" Archivos Seleccionados");
        }
        else{
          $(this).closest('.form-group').find('.form-control').attr("value",names);
        }
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

.it .btn-orange
{
  background-color: #39D2B4;
  border-color: #777!important;
  color: #777;
  text-align: left;
  width:100%;
}
.it input.form-control
{
  
  border:none;
  margin-bottom:0px;
  border-radius: 0px;
  border-bottom: 1px solid #ddd;
  box-shadow: none;
}
.it .form-control:focus
{
  border-color: #39D2B4;
  box-shadow: none;
  outline: none;
}
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>