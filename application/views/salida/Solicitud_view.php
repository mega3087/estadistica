
<style>
td{
	vertical-align: middle !important;	
}
</style>
<table border="1" width="100%" cellspacing="0" cellpadding="2">
	<tr>
		<th colspan='2'>ÁREA SOLICITANTE</th>
		<td colspan='6'><?php echo $CPLNombre; ?></td>
		<th colspan='2'>Folio: <b class='text-red'><?php echo folio($SALClave,5); ?></b>
		</th>
	</tr>
	<tr>
		<th colspan='2'>NOMBRE DEL USUARIO</th>
		<td colspan='8'><?php echo $UNombre; ?></td>
	</tr>
	<tr>
		<th colspan='2'>LICENCIA</th>
		<td colspan='4'><?php echo $SALLicencia; ?></td>
		<th colspan='2'>FECHA DE SALIDA</th>
		<td colspan='2'><?php echo fecha_format($SALFecha_salida); ?></td>
	</tr>
	<tr>
		<th colspan='2'>MOTIVO DE LA COMISIÓN</th>
		<td colspan='8'><?php echo $SALLugar_salida; ?> / <?php echo $SALMotivo_comision; ?></td>
	</tr>
	<tr>
		<th width='10%'>VEHÍCULO</th>
		<td width='10%'><?php echo $VETipo; ?></td>
		<th width='10%'>MARCA</th>
		<td width='10%'><?php echo $VEMarca; ?></td>
		<th width='10%'>MODELO</th>
		<td width='10%'><?php echo $VEModelo; ?></td>
		<th width='10%'>PLACAS</th>
		<td width='10%'><?php echo $VEPlacas; ?></td>
		<th width='10%'>COLOR</th>
		<td width='10%'><?php echo $VEColor; ?></td>
	</tr>
	<tr>
		<th colspan='4'  rowspan='11'>
			<img src="assets/img/vehiculo_angulos.png" width='250px' />
		</th>
		<th colspan='2'>INVENTARIO</th>
		<th colspan='2'>SALIDA</th>
		<th colspan='2'>ENTRADA</th>
	</tr>
	<tr>
		<th colspan='2'>LLANTA DE REFACCIÓN</th>
		<td colspan='2' class='text-center'><?php if($SALLanta_refaccion_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALLanta_refaccion) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>GATO</th>
		<td colspan='2' class='text-center'><?php if($SALGato_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALGato) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>LLAVE DE TUERCAS</th>
		<td colspan='2' class='text-center'><?php if($SALLave_tuercas_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALLave_tuercas) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>TAPÓN DE GAS</th>
		<td colspan='2' class='text-center'><?php if($SALTapon_gas_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALTapon_gas) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>BAYONETA</th>
		<td colspan='2' class='text-center'><?php if($SALBayometa_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALBayometa) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>TARJETA DE ESTACIONAMIENTO</th>
		<td colspan='2' class='text-center'><?php if($SALTarjeta_circulacion_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALTarjeta_circulacion) echo "X"; ?></td>
	</tr>
	<tr>
		<th colspan='2'>TARJETA DE CIRCULACIÓN</th>
		<td colspan='2' class='text-center'><?php if($SALTarjeta_estacionamiento_s) echo "X"; ?></td>
		<td colspan='2' class='text-center'><?php if($SALTarjeta_estacionamiento) echo "X"; ?></td>
	</tr>
	<tr>
		<!--th colspan='4' rowspan='3'>
			<img src="assets/img/logo-edomex.png" width='90px' />
		</th-->
		<th colspan='3'>
			GAS INICIAL <br />
			<?php echo $SALGas_inical; ?>%
		</th>
		<th colspan='3'>
			GAS FINAL <br />
			<?php echo $SALGas_final; ?>%
		</th>
	</tr>
	<tr>
		<th colspan='3'>LECTURA INICIAL DEL ODOMETRO</th>
		<th colspan='3'>LECTURA FINAL DEL ODOMETRO</th>
	</tr>
	<tr>
		<td colspan='3'><?php echo $SALKlm_inicial; ?></td>
		<td colspan='3'><?php echo $SALKlm_final; ?></td>
	</tr>
	<tr>
		<th colspan='2'>
			<img src="assets/img/deposito.png" width='65px' />
			<br />
			<?php echo $SALNivel_anticongelante; ?>%
		</th>
		<th colspan='3'>NIVEL ANTICONGELANTE</th>
		<th colspan='2'>
			<img src="assets/img/varilla.png" width='75px' />
			<br />
			<?php echo $SALNivel_aceite; ?>%
		</th>
		<th colspan='3'>NIVEL DE ACEITE</th>
	</tr>
</table>
<br />
<table border="1" width="100%" cellspacing="0" cellpadding="2">
	<tr>
		<th class='text-center'>OBSERVACIONES</th>
	</tr>
	<tr>
		<td class='text-justify'><?php if($SALObservaciones)echo $SALObservaciones; else echo "<br /><br /><br /><br />"  ?></td>
	</tr>
</table>

<table border="0" width="100%" cellspacing="0" cellpadding="2">
	<tr>
		<td class='text-justify'>
			<b>POBALIN 018</b><br />
			El usuario de los vehículos previo a utilizarlos deberá revisár las condiciones en que se encuentran y en caso de detectar algún desperfecto, deberá notificarlo al titular del Área de Administración correspondiente, para que de inmediato proceda su reparación. <br />
			En caso de que el vehículo presente defectos o sufra algún siniestro a causa de la omisión de las previsiones anteriores, los responsables se harán acredores a las sanciones a que haya lugar. <br />
			<b>POBALIN 028</b><br />
			En caso de extravío de la tarjeta de circulación y de infracciones cometidas con los vehículos oficiales el costo será cubierto por cuenta del servidor público.
			<br />
		</td>
	</tr>
</table>

<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<th class='text-center'>
			TITULAR QUE AUTORIZA LA SALIDA
		</th>
		<th class='text-center'>
			SERVIDOR PÚBLICO RESPONSABLE
		</th>
		<th class='text-center'>
			CONTROL VEHICULAR
		</th>
	</tr>
	<tr>
		<td class='text-center'>
			<br /><br /><br /><br /><?php //echo $COJefe; ?><br />
			______________________________________________ <br />
			NOMBRE Y FIRMA
		</td>
		<td class='text-center'>
			<br /><br /><br /><br /><?php echo $UNombre; ?><br />
			______________________________________________ <br />
			NOMBRE Y FIRMA
		</td>
		<td class='text-center'>
			<br /><br /><br /><br /><?php echo $SAControl; ?><br />
			______________________________________________ <br />
			NOMBRE Y FIRMA
		</td>
	</tr>
</table>