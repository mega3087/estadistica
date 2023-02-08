<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cambiar extends CI_Controller {
public function  __construct()
		{
			parent::__construct();
			
			set_session('modulo', $this->router->fetch_class());
			
			if ( ! is_login() )
				redirect('login'); // Verificamos que el usuario este logeado
			
			if( ! is_permitido(get_session('OldRol')) )
				redirect('usuario/negar_acceso'); // Verificamos que el usuario tenga el permiso
			
		} //fin del constructor
		
	public function index(){
		$data['title'] = 'Cambiar';
		$data['modulo'] = $this->router->fetch_class();
		$data['subvista'] = "cambiar/Mostrar_view";
		$this->load->view('plantilla_general',$data);
	}
	
	public function save(){
		if(! $_POST)
			redirect( $this->router->fetch_class() );

		if(! is_permitido(null,'usuarios','delete') )
			$nodell = true;
			
		$data= post_to_array('_skip');

		$this->_set_rules('s'); //validamos los datos
		if($this->form_validation->run() === FALSE)
		{
			set_mensaje(validation_errors());
			muestra_mensaje();
		}else{
			$where = array("UClave_servidor" => folio($data['UClave_servidor']), "UEstado" => 'Activo');
			$data = $this->usuario_model->find( $where );
			if($data){
				//Guardamos los datos del usuario en la variable de sesión
				$URol = get_session('URol');
				//$this->logout(''); // Eliminamos cualquier otra sesion anterior
				if( ! isset($_SESSION) )
					session_start();
				if( ! get_session('OldRol') )
					set_session( 'OldRol', $URol );
				set_session( 'URol', $data['URol'] );
				set_session( 'UNCI_usuario', $data['UNCI_usuario'] );
				set_session( 'UContrasena', $data['UContrasena'] );
				set_session( 'UNombre', $data['UNombre']." ".$data['UApellido_pat']." ".$data['UApellido_mat'] );
				set_session( 'UClave_servidor', $data['UClave_servidor'] );
				set_session( 'UCorreo_electronico', $data['UCorreo_electronico'] );
				set_session( 'UPlantel', $data['UPlantel'] );
				set_session( 'UFoto', $data['UFoto'] );
				set_session( 'UFondo', $data['UFondo'] );
				set_session( 'UTelefono', $data['UTelefono'] );
				set_mensaje("El cambio a <b>".$data['UNombre']." ".$data['UApellido_pat']." ".$data['UApellido_mat']."</b> se realizo con exito!!",'success::');
				echo "OK";
			}else{
				set_mensaje("No se realizo la acción!!!");
				muestra_mensaje();
			}
		}
	}
	
	function _set_rules($op='s'){
		if($op=='s'){
			$this->form_validation->set_rules('UClave_servidor', 'Clave de Servidor', "trim|required|min_length[1]|max_length[5]|numeric");
		}
		// fin de la funcion _set_rules
	}
	
}
