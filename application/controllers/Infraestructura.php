<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Infraestructura extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			if ( ! is_login() )
				redirect('login');
			
			if ( ! is_permitido())
				redirect('usuario/negar_acceso');
		}
		
		public function index(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$this->db->join('terreno','CPLClave = TIdPlantel','INNER');
			$data = $this->plantel_model->get( $CPLClave);
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Mostrar_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function terreno(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$this->db->join('terreno','CPLClave = TIdPlantel','LEFT');
			$data = $this->plantel_model->get( $CPLClave);
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Terreno_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function programa(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'PIIdPlantel' => $CPLClave);
			$data['programa'] = $this->proginfra_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Programa_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function espacios(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'ESIdPlantel' => $CPLClave);
			$data['espacios'] = $this->espacios_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Espacios_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function aulas(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'VAIdPlantel' => $CPLClave);
			$data['varios'] = $this->varios_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Aulas_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function computo(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'COIdPlantel' => $CPLClave);
			$data['computo'] = $this->computo_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'infraestructura/Computo_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function save(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$CPLClave_skip=$this->input->post('CPLClave_skip');
				$CPLClave=$this->encrypt->decode($CPLClave_skip);
				
				if(! $CPLClave){
					$data['CPLUsuario_registro']=get_session('UNCI_usuario');
					$data['CPLFecha_registro']=date('Y-m-d H:i:s');
					$CPLClave = $this->plantel_model->insert($data);
					if($data['CPLTipo']!='37' or $data['CPLCCT']=='DIRAREA'){
						$this->plantel_model->update($CPLClave,array('CPLUnidad' => $CPLClave ));
					}
					set_mensaje("El Plantel con clave [<b> $CPLClave </b>] se registro con éxito",'success::');
				}else{				
					$data['CPLUsuario_modificacion']=get_session('UNCI_usuario');
					$data['CPLFecha_modificacion']=date('Y-m-d H:i:s');
					if($data['CPLTipo']!='37' or $data['CPLCCT']=='DIRAREA'){
						$data['CPLUnidad'] = $CPLClave;
					}
					$this->plantel_model->update($CPLClave,$data);
					set_mensaje("El Plantel con clave [<b> $CPLClave </b>] se actualizó con éxito",'success::');
				}
				echo "OK";
			}
		
		}
		
		public function save_programa(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('pr',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$PIIdPrograma_skip=$this->input->post('PIIdPrograma_skip');
				$PIIdPrograma=$this->encrypt->decode($PIIdPrograma_skip);
				
				if ($PIIdPrograma){
				$this->proginfra_model->update($PIIdPrograma,$data);
				set_mensaje("El Programa se modifico con éxito",'success::');
				}
				else {
					$CPLClave = get_session('CPLActual');
					$data['PIIdPlantel']= $CPLClave;
					$this->proginfra_model->insert($data);
					set_mensaje("El Programa se registro con éxito",'success::');
				}
				echo "OK";
				
			}
		
		}

		public function edit_programa(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('pr',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$PIIdPrograma_skip=$this->input->post('PIIdPrograma_skip');
				$PIIdPrograma=$this->encrypt->decode($PIIdPrograma_skip);
				
				if ($PIIdPrograma){
				$this->proginfra_model->update($PIIdPrograma,$data);
				set_mensaje("El Programa se modifico con éxito",'success::');
				}
				else {
					$CPLClave = get_session('CPLActual');
					$data['PIIdPlantel']= $CPLClave;
					$this->proginfra_model->insert($data);
					set_mensaje("El Programa se registro con éxito",'success::');
				}
				echo "OK";
				
			}
		
		}
		
		public function save_terreno(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('t',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$TIdTerreno_skip=$this->input->post('TIdTerreno_skip');
				$TIdTerreno=$this->encrypt->decode($TIdTerreno_skip);
				//print_r ($data); exit;
				$this->terreno_model->update($TIdTerreno,$data);
				set_mensaje("Los cambios del terreno se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function save_espacios(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('e',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$ESIdEspacios_skip=$this->input->post('ESIdEspacios_skip');
				$ESIdEspacios=$this->encrypt->decode($ESIdEspacios_skip);
				//print_r ($data); exit;
				$this->espacios_model->update($ESIdEspacios,$data);
				set_mensaje("Los cambios en los espacios se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function save_aulas(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('a',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$VAIdVarios_skip=$this->input->post('VAIdVarios_skip');
				$VAIdVarios=$this->encrypt->decode($VAIdVarios_skip);
				//print_r ($data); exit;
				$this->aulas_model->update($VAIdVarios,$data);
				set_mensaje("Los cambios en las aulas se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function save_computo(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('c',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$COIdComputo_skip=$this->input->post('COIdComputo_skip');
				$COIdComputo=$this->encrypt->decode($COIdComputo_skip);
				//print_r ($data); exit;
				$this->computo_model->update($COIdComputo,$data);
				set_mensaje("Los cambios en los centros de cómputo se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		/*
		public function agregar_computo(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['COIdPlantel'] = $CPLClave;
			$datos['COPeriodo'] = $data['COPeriodo'];
			$datos['COFecha'] = $data['COFecha'];
			$datos['COEducativas'] = $data['COEducativas'];
			$datos['COAdministrativas'] = $data['COAdministrativas'];
			$datos['CODocentes'] = $data['CODocentes'];
			$datos['COTotal'] = $data['COTotal'];
			$datos['COInternet'] = $data['COInternet']
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->Infraestructura_model->insert($datos);
				set_mensaje("Los equipo de cómputo en operación según su uso se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		*/
		public function save_infraestructura(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('i',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$InfIdInfraestructura_skip=$this->input->post('InfIdInfraestructura_skip');
				$InfIdInfraestructura=$this->encrypt->decode($InfIdInfraestructura_skip);
				//print_r ($data); exit;
				$this->infraestructura_model->update($InfIdInfraestructura,$data);
				set_mensaje("Los cambios en los centros de cómputo se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function delete($CPLClave_skip){
			$CPLClave = $this->encrypt->decode( $CPLClave_skip );			
			$data = array("CPLActivo" => '0' );
			$this->plantel_model->update($CPLClave, $data);
			//$this->plantel_model->delete($CPLClave);
			set_mensaje("El Usuario con clave [$CPLClave] se borro con éxito",'success::');
			to_back();
		}
		
		function _set_rules($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('PIPrograma', 'Programa', "trim|required|min_length[8]|max_length[255]");
				$this->form_validation->set_rules('PIMeta', 'Meta', "trim|required|min_length[8]|max_length[255]");
				$this->form_validation->set_rules('PIMonto', 'Monto', "trim|required|min_length[8]|max_length[255]");
				/*$this->form_validation->set_rules('CPLCCT', 'C.C.T.', "trim|required|min_length[5]|max_length[15]");
				$this->form_validation->set_rules('CPLCorreo_electronico', 'Correo electr&oacute;nico', "trim|required|max_length[100]|valid_email");
				$this->form_validation->set_rules('CPLDirector', 'Director', "trim|min_length[5]|max_length[50]");*/
			}
			if($c=='p'){
				$this->form_validation->set_rules('TOrganismo', 'ORGANISMO', "trim|required|min_length[8]|max_length[300]");
				
				
			}
			
			if($c=='pr'){
				$this->form_validation->set_rules('PIPrograma', 'Programa', "trim|required|min_length[8]|max_length[300]");
				
				
			}
			
			if($c=='a'){
				$this->form_validation->set_rules('VAAulasExistentes', 'VAAulasExistentes', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			if($c=='c'){
				$this->form_validation->set_rules('COEducativas', 'EDUCATIVAS', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			if($c=='i'){
				$this->form_validation->set_rules('InfInstalaciones', 'Situación de las instalaciones', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			if($c=='e'){
				$this->form_validation->set_rules('ESDeportivas', 'Areas administrativas', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			
			
			// fin de la funcion _set_rules
		}
		
		
		
		
	}