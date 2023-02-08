<?php header('Content-Type: text/html; charset=UTF-8'); // http://www.gestiweb.com/?q=content/problemas-html-acentos-y-e%C3%B1es-charset-utf-8-iso-8859-1       ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php echo NOMBRE_SISTEMA; ?></title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/icon.png'); ?>" />
		
		<link href="<?php echo base_url('assets/inspinia/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/inspinia/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/inspinia/css/animate.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/inspinia/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/cobaem.css'); ?>" rel="stylesheet">
		
		<!-- Mainly scripts -->
		<script src="<?php echo base_url('assets/inspinia/js/jquery-2.1.1.js'); ?>"></script>
		<script src="<?php echo base_url('assets/inspinia/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
		<script src="<?php echo base_url('assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/cobaem.js'); ?>"></script>
		
		<!-- Custom and plugin javascript -->
		<script src="<?php echo base_url('assets/inspinia/js/inspinia.js'); ?>"></script>
		<script src="<?php echo base_url('assets/inspinia/js/plugins/pace/pace.min.js'); ?>"></script>
		
		<!-- alertas chidas -->
		<link href="<?php echo base_url('assets/alertify/themes/alertify.core.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/alertify/themes/alertify.default.css'); ?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/alertify/lib/alertify.js'); ?>"></script>
		<!-- formatear numeros -->
		<script src="<?php echo base_url('assets/autoNumeric/autoNumeric-min.js'); ?>"></script>
		
		<link href="<?php echo base_url('assets/inspinia/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/datatables.min.js'); ?>"></script>

	</head>
	
	<body class='pace-done -mini-navbar'> 
		<div id='wrapper'>
			<?php $this->load->view('main_navegation_view'); ?>
			<div id='page-wrapper' class='gray-bg'>
				<?php $this->load->view('header_view'); ?>
				<?php $this->load->view($subvista); ?>
				<br />
				<?php $this->load->view('footer_view'); ?>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		/*$(document).on("contextmenu",function(e){        
		   e.preventDefault();
		});

		$(document).keydown(function(event){
			if(event.keyCode==123){
			return false;
		   }
		else if(event.ctrlKey && event.shiftKey && (event.keyCode==73 || event.keyCode==67)){        
			  return false;  //Prevent from ctrl+shift+i
		   }
		});*/
	</script>
</html>
<?php cuenta_psw(); ?>

