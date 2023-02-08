<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function  __construct()
		{
			parent::__construct();
			
			set_session('modulo', $this->router->fetch_class());
			
			if ( ! is_login() )
				redirect('login'); // Verificamos que el usuario este logeado
			
			if( ! is_permitido() )
				redirect('usuario/negar_acceso'); // Verificamos que el usuario tenga el permiso
			
		} //fin del constructor
		
	public function index()
	{
		$data = array();
		$this->db->where('CPLActivo', 1);
		$this->db->order_by('CPLNombre');
		$data["planteles"] = $this->plantel_model->find_all();
		
		set_session('planteles', $data["planteles"]);
			
		$data['icon'] = 'home';
		$data['title'] = 'Dashboard';
		$data['modulo'] = $this->router->fetch_class();
		$data['subvista'] = "dashboard/Mostrar_view";
		$this->load->view('plantilla_general',$data);
		//echo doHash('00000000','jose.luis1212@hotmail.com'); //password,correo
		/*//resetear todas las cuentas
		$data = $this->usuario_model->find_all("UContrasena = ''");
		foreach($data as $da => $list){
			echo $contrasena = doHash( '00000000', $list['UCorreo_electronico'] );
			echo"<br />";
			$datos= array('UContrasena' => $contrasena);
			$this->usuario_model->update($list['UNCI_usuario'],$datos);
		}
		*/
	}
	
}
