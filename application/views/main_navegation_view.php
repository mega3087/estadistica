<nav class="navbar-default navbar-static-side" role="navigation">
    <div  style="" class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu" data-toggle="tooltip">
			
			<li class="nav-header text-center">
				<div class="dropdown profile-element">
					<strong class="font-bold text-white">
						<?php echo get_session('UNombre'); ?>
					</strong>
				</div>
				<div class="logo-element">
					<?php echo iniciales( get_session('UNombre') ); ?>
				</div>
			</li>
			
			<?php if(is_permitido(null,'dashboard','index')) { ?>
				<li <?php if (nvl($modulo)=='dashboard' ) echo 'class="active"'; ?> >
					<a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
				</li>
			<?php } ?>
			
			<?php $idplantel = get_session('UPlantel'); 
			$planteles = get_session('planteles');
			

			?>

			
			<li class="<?php if( nvl($modulo)=='info' or nvl($modulo)=='programa' or nvl($modulo)=='correctivo' ) echo "active"; ?>">
				<a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Centros Educativos</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse" style="height: 0px;">
				<?php if ($idplantel <= 83) { 
					
					$this->db->where('CPLClave',$idplantel);
					$plantel = $this->plantel_model->find();
			
					?>
					<li class="active"><a href='<?php echo base_url("plantel/info/".$this->encrypt->encode($idplantel));?>' ><?= $plantel['CPLNombre']?></a></li>
					<?php } else {?>
					<?php foreach(get_session('planteles') as $key_p => $list_p ) { ?>
					<li <?php if( nvl($CPLClave) == $list_p['CPLClave'] ) echo 'class="active"'; ?>><a href='<?php echo base_url("plantel/info/".$this->encrypt->encode($list_p['CPLClave']));?>' ><?=$list_p['CPLNombre']?></a></li>
					<?php } }?>
				</ul>
			</li>
			
			<li class=" <?php if( nvl($modulo)=='anexo' or nvl($modulo)=='plantel') echo "active"; ?>">
				<a href="#"><i class="fa fa-list"></i> <span class="nav-label">Formato 911</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse" style="height: 0px;">
					<?php if(is_permitido(null,'anexo','index')) { ?>
					<li <?php if( nvl($modulo) == 'anexo' ) echo 'class="active"'; ?>><a href='<?php echo base_url("anexo");?>' >Anexo, Tecnologías de la Información</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'bg','index')) { ?>
					<li <?php if( nvl($modulo) == 'bg' ) echo 'class="active"'; ?>><a href='<?php echo base_url("bg");?>' >Bachillerato General</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'bginterno','index')) { ?>
					<li <?php if( nvl($modulo) == 'bginterno' ) echo 'class="active"'; ?>><a href='<?php echo base_url("bginterno");?>' >Bachillerato General Interno</a></li>
					<?php } ?>										
				</ul>	
			</li>
			
			
			<li class=" <?php if( nvl($modulo)=='kilometros' or nvl($modulo)=='combustible' or nvl($modulo)=='personal' or nvl($modulo)=='mantenimiento' ) echo "active"; ?>">
				<a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Reportes</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse" style="height: 0px;">
					<?php if(is_permitido(null,'reportes','kilometros')) { ?>
					<li <?php if( nvl($modulo) == 'kilometros' ) echo 'class="active"'; ?>><a href='<?php echo base_url("reportes/kilometros");?>' >Kilometros Recorridos</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'reportes','combustible')) { ?>
					<li <?php if( nvl($modulo) == 'combustible' ) echo 'class="active"'; ?>><a href='<?php echo base_url("reportes/combustible");?>' >Combustible</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'reportes','personal')) { ?>
					<li <?php if( nvl($modulo) == 'personal' ) echo 'class="active"'; ?>><a href='<?php echo base_url("reportes/personal");?>' >Personal</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'reportes','mantenimiento')) { ?>
					<li <?php if( nvl($modulo) == 'mantenimiento' ) echo 'class="active"'; ?>><a href='<?php echo base_url("reportes/mantenimiento");?>' >Mantenimiento</a></li>
					<?php } ?>

					<!--.................................................-->
					<?php if(is_permitido(null,'rplantel','index')) { ?>
					<li <?php if( nvl($modulo) == 'rplantel' ) echo 'class="active"'; ?>><a href='<?php echo base_url("rplantel");?>' >Plantel</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'remsad','index')) { ?>
					<li <?php if( nvl($modulo) == 'remsad' ) echo 'class="active"'; ?>><a href='<?php echo base_url("remsad");?>' >EMSAD</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'rglobal','index')) { ?>
					<li <?php if( nvl($modulo) == 'rglobal' ) echo 'class="active"'; ?>><a href='<?php echo base_url("rglobal");?>' >Global</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'generaperiodo','index')) { ?>
					<li <?php if( nvl($modulo) == 'generaperiodo' ) echo 'class="active"'; ?>><a href='<?php echo base_url("generaperiodo");?>' >Periodo</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'grupos','index')) { ?>
					<li <?php if( nvl($modulo) == 'grupos' ) echo 'class="active"'; ?>><a href='<?php echo base_url("grupos");?>' >Grupos</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'matricula','index')) { ?>
					<li <?php if( nvl($modulo) == 'matricula' ) echo 'class="active"'; ?>><a href='<?php echo base_url("matricula");?>' >Matrícula Planteles</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'matriculacemsad','index')) { ?>
					<li <?php if( nvl($modulo) == 'matriculacemsad' ) echo 'class="active"'; ?>><a href='<?php echo base_url("matriculacemsad");?>' >Matrícula CEMSAD</a></li>
					<?php } ?>
					
				</ul>	
			</li>
			
			<li class=" <?php if( nvl($modulo)=='usuarios' or nvl($modulo)=='plantel') echo "active"; ?>">
				<a href="#"><i class="fa fa-list"></i> <span class="nav-label">Catalogos</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse" style="height: 0px;">
					<?php if(is_permitido(null,'usuarios','index')) { ?>
					<li <?php if( nvl($modulo) == 'usuarios' ) echo 'class="active"'; ?>><a href='<?php echo base_url("usuarios");?>' >Usuarios</a></li>
					<?php } ?>
					<?php if(is_permitido(null,'plantel','index')) { ?>
					<li <?php if( nvl($modulo) == 'plantel' ) echo 'class="active"'; ?>><a href='<?php echo base_url("plantel");?>' >Planteles</a></li>
					<?php } ?>
				</ul>	
			</li>
			
			<li class="<?php if( nvl($modulo)=='permisos' or nvl($modulo)=='cambiar') echo "active"; ?>">
				<a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Configuraciones</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse" style="height: 0px;">
					<?php if(is_permitido(null,'permisos','index')) { ?>
					<li <?php if( nvl($modulo) == 'permisos' ) echo 'class="active"'; ?>><a href='<?php echo base_url("permisos");?>' >Permisos</a></li>
					<?php } ?>
					<?php if( is_permitido( get_session('OldRol'), 'cambiar', 'index') ) { ?>
					<li <?php if( nvl($modulo) == 'cambiar' ) echo 'class="active"'; ?>><a href='<?php echo base_url("cambiar");?>' >Cambiar</a></li>
					<?php } ?>
					<li><a href='<?php echo base_url("login/logout");?>' >Salir</a></li>
				</ul>
			</li>
			
		</ul>
	</div>
</nav>
<script type="text/javascript">
	$(document).ready(function() {
		var tamano_menu = $('.sidebar-collapse').width();
		
		if( tamano_menu <= 70 )
		{
			$( 'li' ).attr("data-toggle", "tooltip" );
			$( 'ul' ).attr("data-toggle", "tooltip" );
		}
		
		if( tamano_menu == 220 )
		{
			$('li').removeAttr("data-toggle");
			$('ul').removeAttr("data-toggle");
		}
		
		$( '.navbar-minimalize').click(function()
		{
			var barra_navegacion = $( '.sidebar-collapse' ).width();
			var ancho_ventana = $( window ).width();
			
			if( ancho_ventana < 768 )
			{
				$( 'li' ).attr("data-toggle", "tooltip" );
				$( 'ul' ).attr("data-toggle", "tooltip" );
			}
			
			if( ancho_ventana >= 768 && barra_navegacion == 220)
			{
				$( 'li' ).attr("data-toggle", "tooltip" );
				$( 'ul' ).attr("data-toggle", "tooltip" );
			}
			
			if( ancho_ventana >= 768 && barra_navegacion == 70 )
			{
				$('li').removeAttr("data-toggle");
				$('ul').removeAttr("data-toggle");
			}
		});
	});
	/* Function para tooltip*/
	
	$(document).ready(function() {
		
		$("[data-toggle=tooltip]").tooltip();
	});
	
	/* # FIN de Function para tooltip*/
</script>
