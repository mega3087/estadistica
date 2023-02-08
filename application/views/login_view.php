<?php 
	//http://www.gestiweb.com/?q=content/problemas-html-acentos-y-e%C3%B1es-charset-utf-8-iso-8859-1  
	header('Content-Type: text/html; charset=UTF-8'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo NOMBRE_SISTEMA; ?></title>
		
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icon.png'); ?>" />
		
		<link href="<?php echo base_url('assets/inspinia/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/inspinia/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
		
		<link href="<?php echo base_url('assets/inspinia/css/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/inspinia/css/style.css');?>" rel="stylesheet">
		
		<link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
		<!-- Mainly scripts -->
		<script src="<?php echo base_url('assets/inspinia/js/jquery-2.1.1.js'); ?>"></script>
	</head>
	
	<body class="">
	<div class="row navy-bg menu">
		<div class="col-lg-8 col-sm-8 col-xs-4">
			<img src="<?=base_url('assets/img/h1_cobaem.png')?>" width="265px" class="hidden-sm hidden-xs" />
			<h2>&nbsp;<i class="fa fa-bar-chart-o"></i> <span class="hidden-xs">- <?php echo NOMBRE_SISTEMA; ?></span></h2>
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-4"><br />
			<button 
			id="acceso"
			class="btn btn-primary open"
			data-target="#modal_personal" 
			data-toggle="modal" >
				<i class="fa fa-user"> </i> Acceso
			</button>
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-4"><br />
			<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle"data-toggle="dropdown">Menú <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="<?php echo base_url('./documentacion/Manual de Usuario.pdf'); ?>" target='_blank'><i class="fa fa-book"></i> Manual de Usuario</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo base_url('usuario/recuperar_contrasena'); ?>"><i class="fa fa-key"></i> &iquest;Olvidaste la Contrase&ntilde;a?</a></li>
				</ul>
			</div>
		</div>
	</div>
	
		<div class="fondosplash-">
			<br /><br /><br /><br /><br /><br /><br />
			<!--div class="text-left animated fadeIn">
					<?php
						$mes = date('m');
						$total_imagenes = count(glob("assets/img/fondo/$mes/{*.jpg,*.gif,*.png}",GLOB_BRACE));
						$imagen = rand(1,$total_imagenes);
						$image_properties = array
						(
						"src"   => "assets/img/fondo/$mes/$imagen.png",
						"class" => "login-logo img-responsive",
						"width" => "400px",
						"style" => "display: inline !important; margin-left: 100px;"
						);
						echo img($image_properties);
					?>
			</div-->
		</div>


		<!-- Form -->
		<div class="fondosplash- modal inmodal" id="modal_personal" tabindex="-1" role="dialog" aria-hidden="true">
			<br /><br /><br /><br /><br />
			<div class="loginscreen text-center animated fadeIn">
				<h1 class="text-white"><b>¡Bienvenido!</b></h1>
				<?php
					echo form_open('login/validar', array('id' => 'forma', 'role' => 'form'));
					muestra_mensaje();
				?>
				
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user"></i></div>
						<input type="email" name = "UCorreo_electronico"
						placeholder="Correo electr&oacute;nico" class="form-control" required
						value="">
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<input type="password" name = "UContrasena"
						placeholder="Contrase&ntilde;a" class="form-control" required
						value="">
					</div>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary m-b btn-rounded btn-block">
						<i class="fa fa-sign-in"></i> Ingresar
					</button>
				</div>
				
				<?php echo form_close(); ?>
			</div>
			
		</div>
		
		<?php $this->load->view('footer_view'); ?>
		
		<!-- Mainly scripts -->
		<script src="<?php echo base_url('assets/inspinia/js/bootstrap.min.js');?>"></script>
		
		<!-- Custom and plugin javascript -->
		<script src="<?php echo base_url('assets/inspinia/js/inspinia.js');?>"></script>
		<script src="<?php echo base_url('assets/inspinia/js/plugins/pace/pace.min.js');?>"></script>
	
	<!-- jQuery UI -->
	<script src="<?php echo base_url('assets/inspinia/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
	</body>
</html>
<script type="text/javascript">
<?php if(get_session('error')){ set_session('error',null); ?>
$("#acceso").click();
<?php } ?>
</script>
<style type="text/css">
.control-label em {
	color:red;
}
.menu img{
	background-color: white;
	float: inline-start;
}
body{
	background-image: url("./assets/img/Fondo_login.jpg");
    background-size: 100% 100%;
}
.loginscreen{
	background-image: url("./assets/img/cobaem.jpg");
	background: #7d0000cc;
	border-radius: 30px;
}
.dropdown-menu{
	background-color: #0b653b ;
}
.navy-bg, .btn-primary {
    background-color: #0b653b;
	border: #0b653b ;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary, .btn-primary:active:focus, .btn-primary:active:hover, .btn-primary.active:hover, .btn-primary.active:focus {
    background-color: #0b653b  !important;
	border: #0b653b ;
}
</style>