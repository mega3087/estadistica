<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Usuarios extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			set_session('modulo', $this->router->fetch_class());
			
			if ( ! is_login() )
				redirect('login'); // Verificamos que el usuario este logeado
			
			if( ! is_permitido() )
				redirect('usuario/negar_acceso'); // Verificamos que el usuario tenga el permiso
			
		}
		
		public function index(){
			$where = array();
			$data['rol'] = $this->rol_model->find_all($where);			
			
			$this->db->join('planteles','UPlantel = CPLClave','LEFT');
			$this->db->join('vecrol','URol = CROClave','INNER');
			$data['usuarios'] = $this->usuario_model->find_all();
			
			$data['icon'] = 'users';
			$data['title'] = 'Usuarios del Sistema';
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'usuarios/Mostrar_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function save(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$data= post_to_array('_skip');
		
			$this->_set_rules('u'); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$UNCI_usuario_skip=$this->input->post('UNCI_usuario_skip');
				$UNCI_usuario=$this->encrypt->decode($UNCI_usuario_skip);
				$contrasena = '00000000';
				
				if(! $UNCI_usuario){
				
					$data['UUsuario_registro']=get_session('UNCI_usuario');
					$data['UFecha_registro']=date('Y-m-d H:i:s');
					$data['UContrasena']= doHash( $contrasena, $data['UCorreo_electronico'] );
					$UNCI_usuario = $this->usuario_model->insert($data);
					set_mensaje("El Usuario con clave [<b> ".$data['UClave_servidor']." </b>] se agrego con éxito",'success::');
				}else{
				
					$data['UUsuario_modificacion']=get_session('UNCI_usuario');
					$data['UFecha_modificacion']=date('Y-m-d H:i:s');
					//$data['UContrasena']= doHash( $contrasena, $data['UCorreo_electronico'] );
					$this->usuario_model->update($UNCI_usuario,$data);
					set_mensaje("El Usuario con clave [<b> ".$data['UClave_servidor']." </b>] se actualizó con éxito",'success::');
				}
				echo "OK";
			}
		
		}
		
		public function delete($UNCI_usuario_skip){
			$UNCI_usuario = $this->encrypt->decode( $UNCI_usuario_skip );
				$this->usuario_model->delete($UNCI_usuario);
				set_mensaje("El Unidad de Medida con clave [$UNCI_usuario] se borro con éxito",'success::');
			to_back();
		}
		
		public function plantel(){
			$tipo= $this->input->post("CPLTipo_skip");
			
			$this->db->where("CPLTipo",$tipo);
			$this->db->order_by("CPLNombre");
			$plantel = $this->plantel_model->get_all();
			
			echo '<select id="UPlantel" name="UPlantel" placeholder="PLANTEL" class="form-control" >';
				foreach($plantel as $pkey => $plist){
					echo '<option value="'.$plist['CPLClave'].'">'.$plist['CPLNombre'].'</option>';
				}
			echo '</select>';	
		}
		
		public function actualizar(){
			$data = post_to_array('_skip');
			
			$this->_set_rules('ac'); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$UContrasena = $this->input->post('UContrasena_a_skip');
				$UContrasena_n = $this->input->post('UContrasena_n_skip');
				if($data['UCorreo_electronico'] != get_session('UCorreo_electronico'))
					if(!$UContrasena){		
						set_mensaje("Al cambiar de correo, es necesario cambiar la contraseña","danger::");	
						muestra_mensaje();
						exit;
					}
					
					if($UContrasena || $UContrasena_n){
						$where = array
						(
						'UCorreo_electronico' => get_session('UCorreo_electronico'), 
						'UContrasena'         => doHash( $UContrasena, get_session('UCorreo_electronico') )              
						);
						if(!$this->usuario_model->find($where)){
							set_mensaje("La contraseña anterior no es correcta","danger::");
							muestra_mensaje();
							exit;
						}else{
							$this->_set_rules('cp'); //validamos los datos - cambiar password
							if($this->form_validation->run() === FALSE)
							{
								set_mensaje(validation_errors());
								muestra_mensaje();
								exit;
							}{
								$UContrasena = $this->input->post('UContrasena_n_skip');
								$data['UContrasena'] = doHash( $UContrasena, $data['UCorreo_electronico'] );
								echo "OK";
							}
						}
					}
					
				if(nvl($data['UFoto'])){
					$lista_archivos = array('UFoto','UFondo');
					mover_archivos($data,$lista_archivos,null,'./fotos/'); 	
				}
				
				set_session( 'UNombre', $data['UNombre'] );
				set_session( 'UFoto', $data['UFoto'] );
				set_session( 'UFondo', $data['UFondo'] );
				set_session( 'UTelefono', $data['UTelefono'] );
			
				$this->usuario_model->update(get_session('UNCI_usuario'),$data);
				set_mensaje("Tus datos se actualizarón con éxito",'success::');
				echo "OK";
			}
		}
		
		
		function _set_rules($c=''){
			
			if($c=='u'){			
				$UNCI_usuario_skip=$this->input->post('UNCI_usuario_skip');
				$UNCI_usuario=$this->encrypt->decode($UNCI_usuario_skip);
				$where = "1=1";
				if($UNCI_usuario)
					$where =" UNCI_usuario != $UNCI_usuario";

				$this->form_validation->set_rules('UClave_servidor', 'Clave Servidor', "trim|required|min_length[3]|max_length[20]|unique[veusuario,UClave_servidor,$where]");
				$this->form_validation->set_rules('UNombre', 'Nombre', "trim|required|min_length[3]|max_length[255]");
				$this->form_validation->set_rules('UCorreo_electronico', 'Correo Electrónico', "trim|required|min_length[5]|max_length[255]|unique[veusuario,UCorreo_electronico,$where]");
				$this->form_validation->set_rules('UEstado', 'Estado', "trim|required|min_length[6]|max_length[8]");
			}elseif($c=='ac') {
				$where =" UNCI_usuario != ".get_session('UNCI_usuario');
				$this->form_validation->set_rules('UNombre', 'Nombre', "trim|required|min_length[3]|max_length[255]|unique[veusuario,UNombre,$where]");
				$this->form_validation->set_rules('UCorreo_electronico', 'Correo electr&oacute;nico', "trim|required|max_length[60]|valid_email|unique[veusuario,UCorreo_electronico,$where]");
				$this->form_validation->set_rules('UTelefono', 'Teléfono', 'trim|required|min_length[10]|max_length[20]');
			}
			elseif($c=='cp') {
				$this->form_validation->set_rules('UContrasena_n_skip', 'Contrase&ntilde;a Nueva', 'trim|required|min_length[8]|max_length[30]|password_strength_checker');
			}
			// fin de la funcion _set_rules
		}
		
	}
