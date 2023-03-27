<html>
	<head><meta http-equiv="Content-Type" content="text/html;">
		<title><?php echo NOMBRE_SISTEMA; ?></title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo_edomex.png'); ?>" />
	</head>
	<body>
		<div id="header">
			<table width='100%' class="no-border">
				<tr class="no-border">
					<td width='20%' class="no-border left-text">
						<img src="assets/img/logo_edomex.png" width='150px' />
					</td>
					<td rowspan="3" class='no-border' style="font-size: 15px; text-align:center;">
						COLEGIO DE BACHILLERES DEL ESTADO DE MÉXICO<br>
						Levantamiento Estadístico Interno<br>
						Intersemestral <?= $periodoAnt[0]['PAnio'] ?>-<?= $periodoAct[0]['PAnio']?></b><br>
						</b>
					</td>
					<td width='20%' class="no-border right-text">
						<img src="assets/img/escudo.png" width='300px' />
					</td>
				</tr>
			</table>
		</div>
		<div id="content">
			<?php $this->load->view($subvista); ?>
		</div>
	</body>
</html>