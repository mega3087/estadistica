<!-- BEGIN HEADER -->
<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="col-sm-5 col-md-4 col-lg-4">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
			<a href="<?php echo base_url('assets/img/logo4.png'); ?>" title="COBAEM	" data-gallery="">
			<img alt="image" src="<?php echo base_url('assets/img/logo4.png'); ?>" height="auto" width="180px"/>
			</a>
		</div>
		<div class="col-sm-4 col-md-3 col-lg-4 navbar-header text-left">
			<br/>
            <h3><?php echo NOMBRE_SISTEMA; ?></h3>
			<h4>Colegio de Bachilleres del Estado de México</h4>
		</div>
        <div class="col-sm-3 col-md-5  col-lg-4">
            <ul class="nav navbar-top-links navbar-right">
                <li><br />
                    <span class="m-r-sm text-muted user-name">
                        <a href="<?php echo base_url(get_session('UFoto')); ?>" title="<?php echo get_session('UNombre'); ?>" data-gallery="">
							<img class="img-circle hidden-sm" src="<?php echo base_url(get_session('UFoto'))?>"  alt="" width="40px">
						</a>
						<a title="Configuración" class="open_" data-target="#modal_configuracion" data-toggle="modal">
							<?php echo get_session('UNombre'); ?>
						</a>
					</span>
				</li>
                <li>
                    <a href="<?php echo base_url('login/logout'); ?>">
                        <i class="fa fa-power-off"></i>Salir
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div id="blueimp-gallery" class="blueimp-gallery">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>

<div class="modal inmodal" id="modal_configuracion" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY mensaje_c">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-cog"></i>&nbsp;&nbsp; Configuración</h6><div class="border-bottom"><br /></div>
				
				<div id="error_c"></div>
				
				<?php echo form_open('usuarios/actualizar', array('name' => 'FormUsuarios', 'id' => 'FormUsuarios', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Clave Servidor: </label>
					<div class="col-lg-9">
						<input type="text" value="<?php echo get_session('UClave_servidor'); ?>" maxlength='150' class="form-control uppercase disabled" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Nombre: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UNombre" name="UNombre" value="<?php echo get_session('UNombre'); ?>" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Correo Electrónico: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UCorreo_electronico" name="UCorreo_electronico" value="<?php echo get_session('UCorreo_electronico'); ?>" maxlength='150' class="form-control" />
						<small class="help-block m-b-none"><em>Tenga en cuenta que esté correo es su usuario para ingresar al sistema.</em></small>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Teléfono: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UTelefono" name="UTelefono" value="<?php echo get_session('UTelefono'); ?>" maxlength='150' class="form-control" />
					</div>
				</div>	
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Foto: </label>
					<div class="col-lg-9">
						<?php echo forma_imagen('UFoto', get_session('UFoto'), 'Cargar Nueva Foto','btn btn-primary pull-left');  ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Fondo de Inicio: </label>
					<div class="col-lg-9">
						<?php echo forma_imagen('UFondo', get_session('UFondo'), 'Cargar Fondo','btn btn-primary pull-left');  ?>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-lg-8 control-label text-navy" for="">Solo si desea cambiar contraseña</label>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Contraseña Anterior: <span class='text-navy'>*</span></label>
					<div class="col-lg-9">
						<input type="password" id="UContrasena_a_skip" name="UContrasena_a_skip" placeholder="********" maxlength='20' class="form-control" />
					</div>
				</div>				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Contraseña Nueva: <span class='text-navy'>*</span></label>
					<div class="col-lg-9">
						<input type="password" id="UContrasena_n_skip" name="UContrasena_n_skip" placeholder="********" 
						maxlength='20' class="form-control" 
					    data-indicator="pwindicator" maxlength = "20" />
					</div>
				</div>
				
				
				<div class="loading_c"></div>
				<div class="form-group">
					<div class="col-lg-offset-1 col-lg-11">
						<input type="hidden" id='UNCI_usuario_skip' name='UNCI_usuario_skip' />
						<button type="button" class="btn btn-primary pull-right save_c"> <i class="fa fa-save"></i> Guardar</button>
						<button type="reset" class="btn btn-default pull-left"> <i class="fa fa-eraser"></i> Limpiar</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


<!-- jQuery Password Strength Plugin http://asgaard.co.uk/misc/jquery/index.php?show=password     -->
<script src="<?php echo base_url('assets/pstrength/jquery.pstrength1.5.js'); ?>" type="text/javascript"></script>

<!--Show password https://github.com/wenzhixin/bootstrap-show-password  -->
<script src="<?php echo base_url('assets/show-password/password.js'); ?>"></script>

<link href="<?php echo base_url("assets/inspinia/css/plugins/blueimp/css/blueimp-gallery.min.css"); ?>" rel="stylesheet">
<!--color boox-->
<script type="text/javascript" src="<?php echo base_url("assets/colorbox/jquery.colorbox-min.js") ?>"></script>
<link media="screen" rel="stylesheet" href="<?php echo base_url("assets/colorbox/colorbox.css") ?>" />

<script src="<?php echo base_url("assets/inspinia/js/plugins/blueimp/jquery.blueimp-gallery.min.js"); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
		blueimp.Gallery.prototype.applicationFactory = function (obj, callback) {
			var $element = $('<div>')
					.addClass('pdf-content')
					.attr('title', obj.title);
			$.get(obj.href)
				.done(function (result) {
					$element.html(result);
					callback({
						type: 'load',
						target: $element[0]
					});
				})
				.fail(function () {
					callback({
						type: 'error',
						target: $element[0]
					});
				});
			return $element[0];
		};
		
		
		$('[data-pdf]').each(function (e) {
		
			$(this).click(function (event) {
				event.preventDefault();
				
					title = $(this).attr("title");
					href = $(this).attr("href");
					type = $(this).attr("type");
					if(!type) type = 'application/pdf';
						
					blueimp.Gallery([					
						{
							title: title,
							href: href,
							type: type
						},					
					]);
				
			});
		});
	
	
		//Mostrar popup para cargar archivos al servidor
		$('.upload_file').colorbox({width:'600px', height:'430px', scrolling:false, iframe:true, overlayClose:false});		
		
		$(".save_c").click(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("usuarios/actualizar"); ?>",
				data: $(this.form).serialize(),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading_c").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
				},
				success: function(data){
					if(data==' OKOK'){
						
						$(".mensaje_c").html('<div class="alert alert-success"><center>Los datos se actualizarón con éxito, se mostraran los cambios al ingresar de nuevo. </center><div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div></div>');
						setTimeout(function(){  window.location.href = '<?php echo base_url('login/logout'); ?>'; }, 4000);
					}else if(data==' OK'){
						$(".mensaje_c").html('<div class="alert alert-success"><center>Tus datos se actualizarón con éxito </center><br /></div>');
						setTimeout(function(){  window.location.reload(); }, 3000);
					}else{
						$("#error_c").empty();
						$("#error_c").append(data);	
						$(".loading_c").html("");	
					}
					
				}
			});
		});//----->fin
		
		$('#UContrasena_n_skip').parent().removeClass().addClass('col-lg-9');
		$('#UContrasena_n_skip').pstrength();
		$('#UContrasena_n_skip').password();
				
	});

    function prueba_notificacion() {
        if (Notification) {
            if (Notification.permission !== "granted") {
                Notification.requestPermission();
            }
            var title = "Control Vehicular"
            var extra = {
                icon: "<?php echo base_url('assets/img/icon.png'); ?>",
                body: "Tienes una nueva notificacion para el Sistema de Control vehicular"
            }
            var noti = new Notification( title, extra);
			var audio = new Audio('<?php echo base_url('assets/sound/Magic.mp3'); ?>');
			audio.play();
			
            noti.onclick = function(){
                // Al hacer click
				audio.pause();
            }
            noti.onclose = function(){
                // Al cerrar
				audio.pause();
            }
        }
    }	
	
	function noti(){
		$.ajax({
			type: "POST",
			url: "<?php echo base_url("notificacion"); ?>",
			dataType: "html",
			beforeSend: function(){
				//carga spinner
			},
			success: function(data){	
				var actual = $("#number_ac").val();
				var anterior = $("#number_an").val();
				if( actual > anterior ){
					$("#number_an").val( actual );
					prueba_notificacion();
				}
				$("#notificacion").empty();
				$("#notificacion").append(data);	
			}
		});
	}
	//setInterval('noti()',1000); //1000 = 1segundo

</script>
	
<style type="text/css">
	#modal_configuracion .alert-success{
		padding: 30px;
		font-size: 20px;
		position: relative;
		top: 40%;
	}
	#modal_configuracion .spiner-example {
		height: 0px;
	}
	
	.blueimp-gallery > .slides > .slide > .pdf-content {
		overflow: auto;
		margin: 60px auto;
		padding: 0 60px;
		max-width: 1200px;
		text-align: left;
		color:white;
	}
</style>
<script src='https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>
