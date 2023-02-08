<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/inspinia/css/plugins/chosen/chosen.css'); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />
<div class="row">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<h3>Oferta Educativa</h3>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<?php muestra_mensaje(); ?>
		<div class="ibox float-e-margins">
			<div class="pull-right">
				<button class="btn-default btn-sm back"><i class="fa fa-mail-reply"> </i> Atras</button> 
				</div>
			
				
				<h3>&nbsp;CEMSAD</h3>
			</div> 
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example- dataTable" id="Exportar_a_Excel" >
							<thead>
								<tr>
									<th rowspan="4" style="background-color: rgb(226, 248, 245 );">PLANTELES</th>
									<th COLSPAN="40" style="background-color: rgb(226, 248, 245 );">MATRÍCULA PRELIMINAR CICLO 2022-2023</th>
									<th COLSPAN="28" style="background-color: rgb(118, 215, 196 );">MATRÍCULA CICLO POR FORMACIÓN PARA EL TRABAJO</th>
								</tr>
                                <tr>
                                    <th COLSPAN="10">PRIMER SEMESTRE</th>
                                    <th COLSPAN="10">TERCER SEMESTRE</th>
                                    <th COLSPAN="10">QUINTO SEMESTRE</th>
                                    <th COLSPAN="10">MATRICULA POR CENTRO EDUCATIVO</th>
                                    <!-- INICIA APARTADO FORMACIÓN PARA EL TRABAJO -->
                                    <th COLSPAN="3" style="background-color: rgb(254, 255, 217 );">CONTABILIDAD</th>
                                    <th COLSPAN="3">TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN</th>
                                    <th COLSPAN="3" style="background-color: rgb(254, 255, 217 );">ASISTENTE DE OPERACIONES LOGÍSTICAS</th>
                                    <th COLSPAN="3">TRAMITACIÓN ADUANAL</th>
                                    <th COLSPAN="3" style="background-color: rgb(254, 255, 217 );">LABORATORISTA QUÍMICO</th>
                                    <th COLSPAN="3">AUXILIAR DE ENFERMERÍA</th>
                                    <th COLSPAN="3" style="background-color: rgb(254, 255, 217 );">INTERPRETACIÓN Y TRADUCCIÓN DEL IDIOMA</th>
                                    <th COLSPAN="3">TURISMO</th>
                                    <th COLSPAN="3" style="background-color: rgb(254, 255, 217 );">DIBUJO ARQUITECTÓNICO Y DE CONSTRUCCIÓN</th>
                                    <th rowspan="3">MATRÍCULA TOTAL DE 3er. Y  5o. SEM. </th>
                                    <!--FIN APARTADO FORMACIÓN PARA EL TRABAJO -->
                                </tr>
                                <tr>
                                    <th COLSPAN="4">MATUTINO</th>
                                    <th COLSPAN="4">VESPERTINO</th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">MATRÍCULA 1er SEM </th>  
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">GRUPOS 1er SEM </th>
                                    <th COLSPAN="4">MATUTINO</th>
                                    <th COLSPAN="4">VESPERTINO</th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">MATRÍCULA 3er SEM </th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">GRUPOS 3er SEM </th>
                                    <th COLSPAN="4">MATUTINO</th>
                                    <th COLSPAN="4">VESPERTINO</th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">MATRÍCULA TOTAL 5° SEM </th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">GRUPOS 5° SEM </th>
                                    <th COLSPAN="4">MATUTINO</th>
                                    <th COLSPAN="4">VESPERTINO</th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">MATRICULA 2022-2023 </th>
                                    <th rowspan="2" style="background-color: rgb(254, 255, 217 );">TOTAL GRUPOS </th>
                                    <!--INICIA APARTADO FORMACIÓN PARA EL TRABAJO -->
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                    <th COLSPAN="2">SEMESTRE</th>
                                    <th rowspan="2" style="background-color: rgb(220, 255, 222 );">TOTAL</th>
                                   
                                    <!--FIN APARTADO FORMACIÓN PARA EL TRABAJO -->
                                </tr>
                                <tr>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS MATUTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS VESPERTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS MATUTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS VESPERTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS MATUTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS VESPERTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS MATUTINO</th>
                                    <th style="background-color: rgb(220, 255, 222  );">HOMBRES</th> 
                                    <th style="background-color: rgb(220, 255, 222  );">MUJERES</th>
                                    <th style="background-color: rgb(220, 255, 222  );">TOTAL</th>
                                    <th style="background-color: rgb(255, 239, 239 );">GRUPOS VESPERTINO</th>

                                    <!--INICIA APARTADO FORMACIÓN PARA EL TRABAJO -->
                                    
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">TERCERO</th>
                                    <th style="background-color: rgb(254, 255, 217 );">QUINTO</th>
                                    <!--FIN APARTADO FORMACIÓN PARA EL TRABAJO -->

                                </tr>
							</thead>
							<tbody>
                         
								<?php foreach($totales as $key => $list_o ){ ?>
						<tr>
                            <!-- 1er y 2o semestre -->
                            <td><?=$list_o['CPLNombre']?></td>
                            <td><?=$list_o['TE12MH']?></td>
                            <td><?=$list_o['TE12MM']?></td>
                            <td><?=$list_o['TE12MTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE12MG']?></td>
                            <td><?=$list_o['TE12VH']?></td>
                            <td><?=$list_o['TE12VM']?></td>
                            <td><?=$list_o['TE12VTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE12VG']?></td>
                            <td><?php echo $mat12= $list_o['TE12MTotal']+$list_o['TE12VTotal']; ?></td>
                            <td><?php echo $mat12= $list_o['TE12MG']+$list_o['TE12VG']; ?></td>
                            <!-- Fin 1er y 2o semestre -->           
                            
                            <!-- 3o y 4o semestre -->
                            <td><?=$list_o['TE34MH']?></td>
                            <td><?=$list_o['TE34MM']?></td>
                            <td><?=$list_o['TE34MTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE34MG']?></td>
                            <td><?=$list_o['TE34VH']?></td>
                            <td><?=$list_o['TE34VM']?></td>
                            <td><?=$list_o['TE34VTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE34VG']?></td>
                            <td><?php echo $mat12= $list_o['TE34MTotal']+$list_o['TE34VTotal']; ?></td>
                            <td><?php echo $mat12= $list_o['TE34MG']+$list_o['TE34VG']; ?></td>
                            <!-- Fin 3o y 4o semestre -->
                            
                             <!-- 5o y 6o semestre -->
                            <td><?=$list_o['TE56MH']?></td>
                            <td><?=$list_o['TE56MM']?></td>
                            <td><?=$list_o['TE56MTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE56MG']?></td>
                            <td><?=$list_o['TE56VH']?></td>
                            <td><?=$list_o['TE56VM']?></td>
                            <td><?=$list_o['TE56VTotal']?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?=$list_o['TE56VG']?></td>
                            <td><?php echo $mat12= $list_o['TE56MTotal']+$list_o['TE56VTotal']; ?></td>
                            <td><?php echo $mat12= $list_o['TE56MG']+$list_o['TE56VG']; ?></td>
                            <!-- Fin 5o y 6o semestre -->  
                            
                             <!-- Totales -->
                            <td><?php echo $hombresm=$list_o['TE12MH']+$list_o['TE34MH']+$list_o['TE56MH'];?></td>
                            <td><?php echo $mujeresm=$list_o['TE12MM']+$list_o['TE34MM']+$list_o['TE56MM'];?></td>
                            <td><?php echo $totalm=$hombresm+$mujeresm; ?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?php echo $gruposm=$list_o['TE12MG']+$list_o['TE34MG']+$list_o['TE56MG'];?></td>
                            <td><?php echo $hombresv=$list_o['TE12VH']+$list_o['TE34VH']+$list_o['TE56VH'];?></td>
                            <td><?php echo $mujeresv=$list_o['TE12VM']+$list_o['TE34VM']+$list_o['TE56VM'];?></td>
                            <td><?php echo $totalv=$hombresv+$mujeresv; ?></td>
                            <td style="background-color: rgb(255, 239, 239 );"><?php echo $gruposv=$list_o['TE12VG']+$list_o['TE34VG']+$list_o['TE56VG'];?></td>
                            <td><?PHP echo $mat=$totalm+$totalv;?></td>
                            <td><?PHP echo $grupos=$gruposm+$gruposv;?></td>
                            <!-- Fin 3o y 4o semestre -->      


                            <td><?=$list_o['TEF134']?></td>
                            <td><?=$list_o['TEF156']?></td>
                            <td><?=$list_o['TEF1Total']?></td>

                            <td><?=$list_o['TEF234']?></td>
                            <td><?=$list_o['TEF256']?></td>
                            <td><?=$list_o['TEF2Total']?></td>

                            <td><?=$list_o['TEF334']?></td>
                            <td><?=$list_o['TEF356']?></td>
                            <td><?=$list_o['TEF3Total']?></td>

                            <td><?=$list_o['TEF434']?></td>
                            <td><?=$list_o['TEF456']?></td>
                            <td><?=$list_o['TEF4Total']?></td>

                            <td><?=$list_o['TEF534']?></td>
                            <td><?=$list_o['TEF556']?></td>
                            <td><?=$list_o['TEF5Total']?></td>

                            <td><?=$list_o['TEF634']?></td>
                            <td><?=$list_o['TEF656']?></td>
                            <td><?=$list_o['TEF6Total']?></td>

                            <td><?=$list_o['TEF734']?></td>
                            <td><?=$list_o['TEF756']?></td>
                            <td><?=$list_o['TEF7Total']?></td>

                            <td><?=$list_o['TEF834']?></td>
                            <td><?=$list_o['TEF856']?></td>
                            <td><?=$list_o['TEF8Total']?></td>

                            <td><?=$list_o['TEF934']?></td>
                            <td><?=$list_o['TEF956']?></td>
                            <td><?=$list_o['TEF9Total']?></td>
                            <td><?php echo $totalform=$list_o['TEF1Total']+$list_o['TEF2Total']+$list_o['TEF3Total']+ $list_o['TEF4Total']+$list_o['TEF5Total']+$list_o['TEF6Total']+$list_o['TEF7Total']+$list_o['TEF8Total']+$list_o['TEF9Total'];?></td>        


							
						</tr>
								
								<?php } ?>
							</tbody>
						</table>

                        
					</div>
				</div>
			</div>

		</div>

        <form action="matricula/excel" method="post" target="_blank" id="FormularioExportacion">
            <center><p><img src="fotos/excel.png" class="botonExcel" width="5%"/></h4> </p>
            <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" /></center>
		</form>


	</div>
</div>

<!--Script Combobox-->
<script type="text/javascript">
		
		 
		 
		 $(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
		
		
});
	
});

    </script>