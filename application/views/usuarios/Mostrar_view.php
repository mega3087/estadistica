<link href="<?php echo base_url('assets/inspinia/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet" />
<div class="row">
	<div class="col-lg-offset-1 col-lg-10">
		<div class="ibox float-e-margins">
		<br />
		<?php muestra_mensaje(); ?>
			<div class="ibox-title">
				<div class="pull-right">
					<button 
					class="btn btn-danger open"
					data-target="#modal_usuarios" 
					data-toggle="modal">
						<i class="fa fa-user"></i> Agregar Usuario
					</button>
				</div>
				<h3>&nbsp;</h3>
			</div> 
			<div class="ibox-content">
				
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover dataTables-example dataTable" >
						<thead>
							<tr>
								<th>Clave</th>
								<th>Nombre</th>
								<th>Correo Electrónico</th>
								<th>Rol</th>
								<th>Estatus</th>
								<th width="130px">Acción</th> 
							</tr>	
						</thead>
						<tbody>
							<?php 
								foreach($usuarios as $key => $list){
									$UNCI_usuario_skip = $this->encrypt->encode($list['UNCI_usuario']);						
								?>
								<tr>
									<td class="text-left"><?php echo $list['UClave_servidor']; ?></td> 
									<td class="text-left"><?=$list['UNombre']?> <?=$list['UApellido_pat']?> <?=$list['UApellido_mat']?></td>
									<td class="text-left"><?php echo $list['UCorreo_electronico']; ?></td>
									<td class="text-left"><?php echo $list['CRODescripcion']; ?></td>
									<td class="text-left"><?php echo $list['UEstado']; ?></td>
									
									<td>
									<?php if( is_permitido(null,'usuarios','save') ){ ?>
										<button class="btn btn-default btn-sm open"
										data-target="#modal_usuarios" 
										data-toggle="modal"
										data-unci_usuario="<?php echo $list['UNCI_usuario']; ?>"
										data-unci_usuario_skip="<?php echo $UNCI_usuario_skip; ?>" 
										data-uclave_servidor="<?php echo $list['UClave_servidor']; ?>"
										data-unombre="<?php echo $list['UNombre']; ?>"
										data-uapellido_pat="<?php echo $list['UApellido_pat']; ?>"
										data-uapellido_mat="<?php echo $list['UApellido_mat']; ?>"
										data-ucorreo_electronico="<?php echo $list['UCorreo_electronico']; ?>"
										data-urol="<?php echo $list['URol']; ?>"
										data-uestado="<?php echo $list['UEstado']; ?>" 
										data-uplantel="<?php echo $list['UPlantel']; ?>" 
										data-ucargo="<?php echo $list['UCargo']; ?>"
										data-cplnombre_skip="<?php echo $list['CPLNombre']; ?>" 
										data-cpltipo_skip="<?php echo $list['CPLTipo']; ?>" 
										>
											<i class="fa fa-pencil"></i> Editar
										</button>
									<?php } ?>
									<?php if( is_permitido(null,'usuarios','delete') ){ ?>
										<a href="<?php echo base_url("usuarios/delete/$UNCI_usuario_skip"); ?>" class="btn btn-default btn-sm" confirm="¿Estas seguro eliminar esté Usuario?" ><i class="fa fa-times"></i> Borrar</a>
									<?php } ?>
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

<div class="modal inmodal" id="modal_usuarios" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content animated flipInY">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h6 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp; Servidor Publico</h6><div class="border-bottom"><br /></div>
				
				<div id="error"></div>
				
				<?php echo form_open('usuarios/save', array('name' => 'FormUsuarios', 'id' => 'FormUsuarios', 'role' => 'form', 'class' => 'form-horizontal panel-body')); ?>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Clave Servidor: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UClave_servidor" name="UClave_servidor" maxlength='150' class="form-control uppercase" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Nombre(s) / Paterno / Materno: <em>*</em></label>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-4">
								<input type="text" placeholder="Nombre(s)" id="UNombre" name="UNombre" value="" maxlength='150' class="form-control uppercase" />
							</div>
							<div class="col-lg-4">
								<input type="text" placeholder="Paterno" id="UApellido_pat" name="UApellido_pat" value="" maxlength='150' class="form-control uppercase" />
							</div>
							<div class="col-lg-4">
								<input type="text" placeholder="Materno" id="UApellido_mat" name="UApellido_mat" value="" maxlength='150' class="form-control uppercase" />
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Tipo Centro: <em>*</em></label>
					<div class="col-lg-9">
						<select id="CPLTipo_skip" name="CPLTipo_skip" placeholder="TIPO" class="form-control" >
								<option value="">TIPO</option>
								<option value="35">Plantel</option>
								<option value="36">CEMSAD</option>
								<option value="37">Dirección General</option>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Plantel: <em>*</em></label>
					<div class="col-lg-9" id='rtipo'>
						<input type="text" id="CPLNombre_skip" name="CPLNombre_skip" value="" maxlength='150' 
						class="form-control disabled" />
					</div>
				</div>			
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Cargo: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UCargo" name="UCargo" maxlength='150' class="form-control" />
					</div>
				</div>				
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Correo Electrónico: <em>*</em></label>
					<div class="col-lg-9">
						<input type="text" id="UCorreo_electronico" name="UCorreo_electronico" maxlength='150' class="form-control" />
					</div>
				</div>	
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Rol: <em>*</em></label>
					<div class="col-lg-9">
						<select id="URol" name="URol" placeholder="ROL" class="form-control" >
							<?php foreach($rol as $rkey => $rlist){ ?>
								<option value="<?php echo $rlist['CROClave']; ?>" <?php if($rlist['CROClave'] != "4" and !is_permitido(null,"usuarios","delete")) echo "disabled"; ?> ><?php echo $rlist['CRODescripcion']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="">Estado: <em>*</em></label>
					<div class="col-lg-9">
						<select id="UEstado" name="UEstado" placeholder="ESTADO" class="form-control" >
							<option value="Activo">ACTIVO</option>
							<option value="Inactivo">INACTIVO</option>
						</select>
					</div>
				</div>		
				
				<div class="loading"></div>
				<div class="form-group">
					<div class="col-lg-offset-3 col-lg-9">
						<input type="hidden" id='UNCI_usuario_skip' name='UNCI_usuario_skip' />
						<button type="button" class="btn btn-primary pull-right save"> <i class="fa fa-save"></i> Guardar</button>
					</div>
				</div>
				<?php echo form_close(); ?>
				
			</div>
		</div>
	</div>
</div>

<!-- Data picker -->
<script src="<?php echo base_url('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/inspinia/js/plugins/clockpicker/clockpicker.js'); ?>"></script>
<script src="<?php echo base_url('assets/date_picker_es.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('.dataTables-example').DataTable({
			"language": {
				"url": "<?php echo base_url("assets/datatables_es.json"); ?>"
			},
			"order": [[ 0, "desc" ]],
			dom: '<"html5buttons"B>lTfgitp',
			"lengthMenu": [ [10,20,50,100, -1], [10,20,50,100, "Todos"] ],
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
		
		/* Ventana modal */
		$(document).on("click", ".open", function () {
			$(".modal-header #UNCI_usuario").val( $(this).data('unci_usuario') );
			$(".modal-header #UNCI_usuario_skip").val( $(this).data('unci_usuario_skip') );
			$(".modal-header #UClave_servidor").val( $(this).data('uclave_servidor') );
			$(".modal-header #UNombre").val( $(this).data('unombre') );
			$(".modal-header #UApellido_pat").val( $(this).data('uapellido_pat') );
			$(".modal-header #UApellido_mat").val( $(this).data('uapellido_mat') );
			$(".modal-header #UCorreo_electronico").val( $(this).data('ucorreo_electronico') );
			$(".modal-header #URol").val( $(this).data('urol') );
			$(".modal-header #UEstado").val( $(this).data('uestado') );
			$(".modal-header #UPlantel").val( $(this).data('uplantel') );
			$(".modal-header #UCargo").val( $(this).data('ucargo') );
			$(".modal-header #CPLNombre_skip").val( $(this).data('cplnombre_skip') );
			$(".modal-header #CPLTipo_skip").val( $(this).data('cpltipo_skip') );
			
			$(".msg").empty();
			licencias( $(this).data('unci_usuario') );
			
		});
		
		$(".save").click(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("usuarios/save"); ?>",
				data: $(this.form).serialize(),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
				},
				success: function(data){
					if(data==' OK'){
						location.reload();
					}
					else{
						$("#error").empty();
						$("#error").append(data);	
						$(".loading").html("");	
					}
					
				}
			});
		});//----->fin
		
		$("#CPLTipo_skip").click(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url("usuarios/plantel"); ?>",
				data: $(this.form).serialize(),
				dataType: "html",
				beforeSend: function(){
					//carga spinner
					$(".loading").html("<div class=\"spiner-example\"><div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div></div>");
				},
				success: function(data){
				
					$("#rtipo").html(data);
					$(".loading").html('');
				}
			});
		});//----->fin
		
	});
</script>
