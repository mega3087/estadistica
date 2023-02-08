<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
		<?php foreach($periodos as $key => $list ){ ?>
			<h3>Grupos del Semestre <?=$list['PAnio']?> - <?php echo $sem=$list['PPeriodo']?>  con fecha del <?=$list['PFechainicial']?> al <?=$list['PFechafinal']?> </h3><?php } ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php muestra_mensaje(); ?>
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<div class="pull-right">
				    <button class="btn-default btn-sm back"><i class="fa fa-mail-reply"> </i> Atras</button> 
                </div>
				<h3>&nbsp;PLANTEL <?=nvl($planteles['CPLNombre'])?></h3>
			</div>
			
		</div>
    </div>
</div>

<!-- Inicia recuadro de matutino y vespertino -->

<div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ibox ">
                                        <div class="ibox-title">
                                            <span class="label label-primary">
                                                Turno
                                            </span>
                                            <h5>&nbsp;Matutino</h5> 
                                            <div class="ibox-tools">
                                                <a class="collapse-link" >
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                        
                                            </div>
                                        </div>
                                        
                                        <div class="ibox-content">
                                            <div>
                                                
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover dataTables-example- dataTable" >
                                                    <thead>
                                                        <tr>
                                                            <?php  if ($sem == 'A' || $sem == '1') { ?>
                                                            <th>2° Semestre</th>
                                                            <th>4° Semestre</th>
                                                            <th>6° Semestre</th>
                                                            <?php } ?>
                                                            
                                                            <?php  if ($sem == 'B' || $sem == '2') { ?>
                                                                <th>1° Semestre</th>
                                                                <th>3° Semestre</th>
                                                                <th>5° Semestre</th>
                                                            <?php } ?>
                                                            
                                                        </tr>

                                                    </thead>

                                                    <tbody>
                                                    <?php foreach($gruposm as $key => $list ){ ?>
                                                        <tr>
                                                    <?php if ($list['GRSemestre'] == 2 || $list['GRSemestre'] == 1) { ?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                        
                                                    <?php } else { ?>
                                                        <td><??></td>
                                                        
                                                    
                                                    <?php } ?>
                                                    
                                                
                                                    <?php if ( $list['GRSemestre'] == 4  || $list['GRSemestre'] == 3) { ?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                
                                                    <?php } else {?>
                                                        <td><??></td>
                                                        
                                                    
                                                    <?php } ?>


                                                    <?php if ($list['GRSemestre'] == 6  || $list['GRSemestre'] == 5) {?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                        
                                                    <?php } else {?>

                                                        <td><??></td>
                                                        
                                                    <?php } ?>

                                                    
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    </table>
					                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ibox ">
                                        <div class="ibox-title">
                                            <span class="label label-info">
                                                Turno
                                            </span>
                                            <h5>&nbsp;Vespertino</h5> 
                                            <div class="ibox-tools">
                                                <a class="collapse-link" >
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                        
                                            </div>
                                        </div>
                                        
                                        <div class="ibox-content">
                                            <div>
                                                
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover dataTables-example- dataTable" >
                                                    <thead>
                                                        <tr>
                                                            <?php  if ($sem == 'A' || $sem == '1') { ?>
                                                            <th>2° Semestre</th>
                                                            <th>4° Semestre</th>
                                                            <th>6° Semestre</th>
                                                            <?php } ?>
                                                            
                                                            <?php  if ($sem == 'B' || $sem == '2') { ?>
                                                                <th>1° Semestre</th>
                                                                <th>3° Semestre</th>
                                                                <th>5° Semestre</th>
                                                            <?php } ?>
                                                            
                                                        </tr>

                                                    </thead>

                                                    <tbody>
                                                    <?php foreach($gruposv as $key => $list ){ ?>
                                                        <tr>
                                                    <?php if ($list['GRSemestre'] == 2 || $list['GRSemestre'] == 1) { ?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                        
                                                    <?php } else { ?>
                                                        <td><??></td>
                                                        
                                                    
                                                    <?php } ?>
                                                    
                                                
                                                    <?php if ( $list['GRSemestre'] == 4  || $list['GRSemestre'] == 3) { ?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                
                                                    <?php } else {?>
                                                        <td><??></td>
                                                        
                                                    
                                                    <?php } ?>


                                                    <?php if ($list['GRSemestre'] == 6  || $list['GRSemestre'] == 5) {?>
                                                        <td><?=$list['GRGrupo']?></td>
                                                        
                                                    <?php } else {?>

                                                        <td><??></td>
                                                        
                                                    <?php } ?>

                                                    
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    </table>
					                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



<!-- FIN Inicia recuadro de matutino y vespertino -->

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
        <div class="ibox-content">
        <div class="row">
            <?php echo form_open('grupos/save', array('name' => 'FormGrupos', 'id' => 'FormGrupos', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
            <input type="hidden" name="GRCPlantel" id="idPlantel" value="<?php echo $planteles['CPLClave']; ?>">
            <input type="hidden" name="CPLTipo" id="CPLTipo" value="<?php echo $planteles['CPLTipo']; ?>">

            <div class="form-group">
                <label class="col-lg-3 control-label" for="">Periodo Escolar: <em>*</em></label>
                    <div class="col-lg-9">
                        <select name="GRPeriodo" id="PeriodoSemestre" class="form-control ValidarPeriodo">
                            <?php foreach ($periodos as $key => $listPeriodo) { 
                                $periodo=$listPeriodo['PAnio'].'-'.$listPeriodo['PPeriodo'];
                            ?>
                                <option value="<?=$periodo?>"><?=$periodo?></option> 
                            <?php } ?>
                        </select>
                    </div>
            </div>        
                            

            <div class="form-group">
            <table class="table table-striped table-bordered table-hover dataTable ">
                <thead>
                    <tr>
                        <th>Periodo</th>
                        <th>Semestre</th>
                        <th>Turno</th>
                        <th># de Grupos</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <?php $periodo = $periodos[0]['PAnio'].'-'.$periodos[0]['PPeriodo']; ?>
                        <td rowspan="2">
                            <?= $periodo ?>
                        </td>
                        <td rowspan="2">
                            <?= substr($periodo,-1) == '2'?'1':'2'; ?>
                            <input type="hidden" name="CPESemestre1" id="CPESemestre1" value="<?= substr($periodo,-1) == '2'?'1':'2'; ?>" />
                        </td>
                        <td>
                            Matutino
                            <input type="hidden" name="CPETurnoMat1" id="CPETurnoMat1" value="Matutino" />
                        </td>
                        <td>
                            <input type="number" min="0" max="10" value="0" name="NoGruposMat1" id="NoGruposMat1" class="form-group">
                        </td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr>

                    <tr>
                        <td>
                            Vespertino
                            <input type="hidden" name="CPETurnoVes1" id="CPETurnoVes1" value="Vespertino" />
                        </td>
                        <td>
                            <input type="number" min="0" max="10" value="0" name="NoGruposVes1" id="NoGruposVes1" class="form-group">
                        </td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr>    

                    <tr>
                        <td COLSPAN="4" style="background-color: rgb(163, 228, 215 );"></td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <?= $periodo; ?>
                        </td>
                        <td rowspan="2">
                            <?php $sem1 =  substr($periodo,-1) == '2'?'3':'4'; echo $sem1;?>
                            <input type="hidden" name="CPESemestre2" id="CPESemestre2" value="<?= substr($periodo,-1) =='2'?'3':'4'; ?>" />
                        </td>
                        <td>
                            Matutino
                            <input type="hidden" name="CPETurnoMat2" id="CPETurnoMat2" value="Matutino" />
                        </td>
                        <td><input type="number" min="0" max="10" value="0" name="NoGruposMat2" id="NoGruposMat2" class="form-group"></td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr>
                    <tr>
                        <td>
                            Vespertino
                            <input type="hidden" name="CPETurnoVes2" id="CPETurnoVes2" value="Vespertino" />
                        </td>
                        <td><input type="number" min="0" max="10" value="0" name="NoGruposVes2" id="NoGruposVes2" class="form-group"></td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr> 

                    <tr>
                        <td COLSPAN="4" style="background-color: rgb(163, 228, 215 );"></td>
                        
                    </tr>

                    <tr>
                        <td rowspan="2">
                            <?= $periodo ?>
                        </td>
                        <td rowspan="2">
                            <?php $sem2 =  substr($periodo,-1)== '2'?'5':'6'; echo $sem2; ?>
                            <input type="hidden" name="CPESemestre3" id="CPESemestre3" value="<?= substr($periodo,-1) == '2'?'5':'6'; ?>" />
                        </td>
                        <td>
                            Matutino
                            <input type="hidden" name="CPETurnoMat3" id="CPETurnoMat3" value="Matutino" />
                        </td>
                        <td><input type="number" min="0" max="10" value="0" name="NoGruposMat3" id="NoGruposMat3" class="form-group"></td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr>
                    <tr>
                        <td>
                            Vespertino
                            <input type="hidden" name="CPETurnoVes3" id="CPETurnoVes3" value="Vespertino" />
                        </td>
                        <td><input type="number" min="0" max="10" value="0" name="NoGruposVes3" id="NoGruposVes3" class="form-group"></td>
                                <!--<td class="text-center">
                                    <button type="button" class="btn btn-warning pull-center"> <i class="fa fa-pencil"></i> Editar</button>
                                </td>-->
                    </tr> 
                </tbody>
            </table>
  

                <div id="error"></div>
                <div class="loading"></div>
                <div class="msg"></div>             
				<div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <?php
                        $now = date("m-d"); 
                        $datefin = date("09-30");
                        if( is_permitido(null,'grupos','save') && $now  < $datefin){ ?>
                        <button type="button" class="btn btn-primary pull-right save"> <i class="fa fa-save"></i> Guardar</button>
                        <?php } ?>
					</div>
				</div>
                </div>
				</div>

				<?php form_close(); ?>




                        </div>
                        </div>
        </div>
    </div>




<!-- ******************* FIN Modal Existencia ********************* -->


<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js'); ?>"></script>
<!-- ChartJS-->
<script src="<?php echo base_url('assets/inspinia/js/plugins/chartJs/Chart.min.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		/* Page-Level Scripts */
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			}
		});	



		$(document).on("click", ".open", function () {
			$(".modal-content #GRClave").val( $(this).data('grclave') );
			$(".modal-content #GRGrupo").val( $(this).data('grgrupo') );
			$(".modal-content #GRMasculino").val( $(this).data('grmasculino') );
			$(".modal-content #GRFemenino").val( $(this).data('grfemenino') );
			$(".modal-content #GRSemestres").val( $(this).data('grsemestre') );
		});

		$("#Formexistencia").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("existencia/save_existencia"); ?>",
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
		
		$("#Formagregar_proyecciones").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("indicadores/agregar_proyecciones"); ?>",
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
		
		$(".save").click(function() {

            var opcion = confirm("Los grupos se sumarán a los ya existentes. ¿Quieres continuar?");
        if (opcion == true) {
       

          $.ajax({
            type: "POST",
            url: "<?php echo base_url("grupos/save"); ?>",
            data: $(this.form).serialize(),
            dataType: "html",
            beforeSend: function(){
                //carga spinner
                $(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
            },
            success: function(data){
                var data = data.split(";");
                if(data[0]==' OK'){
                    $(".msg").empty();
                    $(".msg").append(data[1]);
                    $('#FormGrupos')[0].reset();
                    $(".loading").html("");
                } else {
                    $("#error").empty();
                    $("#error").append(data);   
                    $(".loading").html(""); 
                }
                
            }
        });
    }
        window.location.reload();
    });//----->fin

	});
</script>