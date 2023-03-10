<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>GRUPOS</h3>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		
		<div class="ibox float-e-margins">
			<!--<div class="ibox-title">
				<div class="pull-right">
				<?php if( is_permitido(null,'grupos','save') ){ ?>
                    <button class="btn btn-primary open"
                        data-target="#modal_grupos" 
                        data-toggle="modal"
                        ><i class="fa fa-plus"></i> Agregar Grupos
                    </button>
                <?php } ?>
				</div>
				<h3>&nbsp;</h3>
			</div>-->
			<div class="ibox-content">
				
                <div class="table-responsive">
					<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
						<thead>
							<tr>
								<th>#</th>
								<th>Plantel</th>
                                <th COLSPAN=2>Estatus</th>
                                <th width="130px">Acción</th> 
							</tr>	
						</thead>
						<tbody>
							<?php 
								foreach($planteles as $key => $list){
                                    $PClave_skip = $this->encrypt->encode($list['CPLClave']);
								?>
								<tr>
									<td class="text-left"><?php echo folio($list['CPLClave']); ?></td> 
									<td class="text-left"><?php echo $list['CPLNombre']; ?></td>
                                    
                                    <!-- ************ EN PROCESO DE CAPTURA ************* -->
                                    <?php if ( nvl($list['ENEstatus']) == NULL ) {?>
						            
                                        <td class="text-left">
                                            <div class="alert alert-default">
                                                En proceso de Captura...
                                            </div>
                                        </td> 
                                        <td>

                                        </td>       
				                    
                                    <?php }?>
                                    
                                    
                                     <!-- ************ EN PROCESO DE VALIDACION ************* -->
                                    <?php if ( nvl($list['ENEstatus']) == 1) {?>
						        
                                        <td class="text-left">
                                            <div class="alert alert-warning">
                                                En proceso de validación...
                                                
                                            </div>
                                        </td>

                                        <td class="text-left">
                                                
                                        <?php if( is_permitido(null,'entregamatricula','valida_aceptado') ){ ?>
                                    
                                            <?php echo form_open('entregamatricula/validaciones', array('name' => 'Formacepta', 'id' => 'Formacepta', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
                                            <input type="hidden" name="idEntrega" id="idEntrega" value="<?php echo $list['ENIdEntrega']; ?>">
                                            <input type="hidden" name="aceptarMat" id="aceptarMat" value="aceptar">
                                            <?php echo form_close(); ?>                                            
                                                <button class="btn btn-primary btn-sm aceptar" type="button"><i class="fa fa-check"></i>&nbsp;Aceptar</button>
                                                <button class="btn btn-warning btn-sm corregir" type="button"><i class="fa fa-pencil"></i>&nbsp;Corregir</button>
                                                        
                                                
                                        <?php } ?>
                                        </td>
					                <?php }?>

                                    <!-- ************ ACEPTADO *********** -->        
                                    <?php if ( nvl($list['ENEstatus']) == 2) {?>
						                <td>
                                            <div class="alert alert-success">
                            	                Aceptado
                        	                </div>
                                        </td>

                                        <td class="text-left">
                                                
                                        <?php if( is_permitido(null,'entregamatricula','valida_aceptado') ){ ?>
                                    
                                            <?php echo form_open('entregamatricula/valida_aceptado', array('name' => 'Formacepta', 'id' => 'Formacepta', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
                                            <input type="hidden" name="idEntrega" id="idEntrega" value="<?php echo $list['ENIdEntrega']; ?>">
                                            <input type="hidden" name="aceptarMat" id="aceptarMat" value="aceptar">
                                            <?php echo form_close(); ?>
                                                    
                                            
                                                <button class="btn btn-info btn-sm apertura" type="button"><i class="fa fa-edit"></i>&nbsp;Aperturar</button>
                                   
                                                        
                                        <?php } ?>
                                        </td>

				                    <?php }?>

                                    <!-- ************ EN PROCESO DE CORRECCIÓN *********** -->         
                                    <?php if ( nvl($list['ENEstatus']) == 3) {?>
						                <td>
                                            <div class="alert alert-danger">
                                                En proceso de Corrección...
                                            </div>
                                        </td>

                                        <td class="text-left">
                                                
                                       
                                        </td>
				                    <?php }?>
                                    
                                    
                                   </td>								
									<td>
                                    <?php if( is_permitido(null,'grupos','save') ){ ?>
                                    <button class="btn btn-primary btn-sm open"
                                        data-target="#modal_grupos" 
                                        data-toggle="modal"
                                        data-pclave_plantel="<?php echo $list['CPLClave']; ?>"
                                        data-pnombre_plantel="<?php echo $list['CPLNombre']; ?>" 
                                        data-pturnos="<?php echo $list['CPLTurnos']; ?>"
                                        data-ptipo_plantel="<?php echo $list['CPLTipo']; ?>"
                                        ><i class="fa fa-plus"></i> Agregar Grupos
                                    </button>
                                    <?php } ?>
                                    <button class="btn btn-default btn-sm openGrupos"
                                        data-target="#modal_ver_grupos" 
                                        data-toggle="modal"
                                        data-rclave_plantel="<?php echo $PClave_skip; ?>" 
                                        data-clave_plantel="<?php echo $list['CPLClave']; ?>" 
                                        data-nombre_plantel="<?php echo $list['CPLNombre']; ?>" 
                                        ><i class="fa fa-eye"></i> Ver Grupos
                                    </button>
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

<!-- Ventana modal de agregar Grupo Nuevo-->
<div class="modal inmodal" id="modal_grupos" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h4 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; CENTRO EDUCATIVO: <div id="PNombre_plantel"></div> </h4><div class="border-bottom"><br /></div><br>
                <?php echo form_open('grupos/save', array('name' => 'FormGrupos', 'id' => 'FormGrupos', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
                <input type="hidden" name="GRCPlantel" id="idPlantel" value="">
                <input type="hidden" name="CPLTipo" id="CPLTipo" value="">

                <div class="form-group">
                        <label class="col-lg-3 control-label" for="">Periodo Escolar: <em>*</em></label>
                        <div class="col-lg-9">
                            <select name="GRPeriodo" id="PeriodoSemestre" class="form-control ValidarPeriodo">
                                <?php foreach ($periodos as $key => $listPeriodo) { 
                                    $periodo=$listPeriodo['PAnio'].'-'.$listPeriodo['PPeriodo'];
                                    ?>
                                    <option value="<?=$periodo?>">
                                        <?=$listPeriodo['PAnio'].'-'.substr($periodo,-1) == '2'?'1':'2';?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                    <table class="table table-striped table-bordered table-hover dataTable">
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
                </div>

                <div id="error"></div>
                <div class="loading"></div>
                <div class="msg"></div>
                <br><br><br>
                
				<div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <?php
                        $now = date("m-d"); 
                        $datefin = date("12-12");
                        if( is_permitido(null,'grupos','save') && $now  < $datefin){ ?>
                        <button type="button" class="btn btn-primary pull-right save"> <i class="fa fa-save"></i> Guardar</button>
                        <?php } ?>
					</div>
				</div>

				<?php form_close(); ?>
			</div>
		</div>
	</div> 
</div>
<!--Fin de ventana modal-->

<!--Ventana modal de ver Grupos-->
<div class="modal inmodal" id="modal_ver_grupos" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content animated flipInY">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title"><i class="fa fa-building-o"></i>&nbsp;&nbsp; CENTRO EDUCATIVO: <div id="PlantelNombre"></div> </h4><div class="border-bottom"><br /></div>
                <input type="hidden" name="PlantelId" id="PlantelId">
                <input type="hidden" name="ClavePlantelRep" id="ClavePlantelRep">
                    <div class="form-group">
                        <label class="col-lg-3 control-label" for="">Periodo Escolar: <em>*</em></label>
                        <div class="col-lg-9">
                            <select name="SemestrePeriodo" id="SemestrePeriodo" class="form-control SemestrePeriodo">
                            <option value="">-Periodo-</option>
                            <?php foreach ($periodos as $key => $listPeriodo) { 
                                $periodo=$listPeriodo['PAnio'].'-'.$listPeriodo['PPeriodo'];
                                ?>
                                <option value="<?=$periodo?>">
                                    <?=$periodo?>
                                </option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <form action="#" method='POST' name='perido_grupos' id='perido_grupos'>
                            <div class="msgGrupos"></div>
                            <div class="resultGrupos"></div>
                        </form>
                    </div>
                    <div class="loading"></div>
                    <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" target="_blank" id="ImprimirGrupos" type="button" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Imprimir</a>
                </div>
            </div>
        </div>
    </div> 
</div>
<!--Fin de ventana ver grupos-->


<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>

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
					$(win.document.body).find('table')
					.addClass('compact')
					.css('font-size', 'inherit');
				}
			}
			]
		});		
		
	});//----->fin

    /* Ventana modal */
	$(document).on("click", ".open", function () {
        $('#FormGrupos')[0].reset();

        var idPlantel = $(this).data('pclave_plantel');
        $(".modal-header #idPlantel").val( $(this).data('pclave_plantel') );

        var tipoPlantel = $(this).data('ptipo_plantel');
        $(".modal-header #CPLTipo").val( $(this).data('ptipo_plantel') );

        var valor = $(this).data('pnombre_plantel');
        document.getElementById("PNombre_plantel").innerHTML = valor;
        var NoGrupos = $(this).data('pturnos');

        if (NoGrupos == '1') {
            $("#GRTurno").val(1).addClass('disabled');
        } else {
            $("#GRTurno").val('').removeClass('disabled');
        }

        $(document).on("change", ".ValidarGrupo", function () {
        var valor = document.getElementById("GRGrupo").value;
        var grup = valor.slice(0, 1)
        
            $.ajax({
                type: "POST",
                url: "<?php echo base_url("grupos/selectCap"); ?>",
                data: {valorGrupo: grup},
                dataType: "html",
                beforeSend: function(){
                    //carga spinner
                    $(".loading1").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
                },
                success: function(data){
                    if(data =='OK'){
                        $("#Resultado").show('slow');
                    } else {
                        $("#error1").empty();
                        $("#error1").append(data);   
                        $(".loading1").html(""); 
                    }
                    
                }
            });
        });//----->fin

        $(".msg").empty();
        datosGrupos(idPlantel);
    });//----->fin

    function datosGrupos(idPlantel){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("grupos/selectGrupos"); ?>",
            data: "GRCPlantel=" + idPlantel,
            dataType: "html",
            beforeSend: function(){
                //carga spinner
                $(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
            },
            success: function(data){
                $(".result").empty();
                $(".result").append(data);  
                $(".loading").html("");
            }
        });
    }//----->fin


    $(".save").click(function() {
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
    });//----->fin

    $(".aceptar").click(function() {
        var idEntrega = document.getElementById("idEntrega").value;
        var aceptarMat = 'aceptar';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("entregamatricula/validaciones_skip"); ?>",
            data: {idEntrega: idEntrega, validar:aceptarMat},
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
        window.location.reload();
    });//----->fin


    $(".corregir").click(function() {
        var idEntrega = document.getElementById("idEntrega").value;
        var corregirMat = 'corregir';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("entregamatricula/validaciones_skip"); ?>",
            data: {idEntrega: idEntrega, validar:corregirMat},
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
        window.location.reload();
    });//----->fin

    $(".apertura").click(function() {
        var idEntrega = document.getElementById("idEntrega").value;
        var aperturaMat = 'apertura';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("entregamatricula/validaciones_skip"); ?>",
            data: {idEntrega: idEntrega, validar:aperturaMat},
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
        window.location.reload();
    });//----->fin

    /* Ventana modal ver grupos*/
    $(document).on("click", ".openGrupos", function () {
        var valor = $(this).data('nombre_plantel');
        document.getElementById("PlantelNombre").innerHTML = valor;

        var idPlantel = $(this).data('clave_plantel');
        $(".modal-header #PlantelId").val( $(this).data('clave_plantel'));

        $(".modal-header #ClavePlantelRep").val( $(this).data('rclave_plantel') );

        $(".resultGrupos").empty(); 
        $(".loading").empty();
        abrirReporte();
    });

    $(document).on("change", ".SemestrePeriodo", function (event) {
        abrirReporte();       
    });

    function abrirReporte() {
        var valorSem = $(".SemestrePeriodo option:selected").val();
        var searchSem = window.btoa(unescape(encodeURIComponent(valorSem))).replace("=","").replace("=","");
        var idPlantelRep = document.getElementById("ClavePlantelRep").value;
        
        var valor = $(".SemestrePeriodo option:selected").val();
        var PlantelId = document.getElementById("PlantelId").value;
        

        $("#ImprimirGrupos").attr("href","<?php echo base_url("grupos/ImprimirGrupos"); ?>/"+idPlantelRep+"/"+searchSem);

        var sem = valor.split('-')[1];
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("grupos/listaGrupos"); ?>",
            data: {idPlantel: PlantelId, periodo: valor},
            dataType: "html",
            beforeSend: function(){
                //carga spinner
                $(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
            },
            success: function(data){
                $(".msgGrupos").empty();
                $(".resultGrupos").empty();
                $(".resultGrupos").append(data);
                $(".loading").empty();
            }
        });
    }
    
</script>