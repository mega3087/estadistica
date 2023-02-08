<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Director extends CI_Controller {
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
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'DIIdPlantel' => $CPLClave);
			$data['directores'] = $this->director_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'director/Mostrar_view';			
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
				$DIIdDirector_skip=$this->input->post('DIIdDirector_skip');
				$DIIdDirector=$this->encrypt->decode($DIIdDirector_skip);
				
				if ($DIIdDirector){
				
				$this->director_model->update($DIIdDirector,$data);
				set_mensaje("El Plantel con clave [<b> ".$data['DIFecha']." </b>] se registro con éxito",'success::');
				}
				
				else {
					
					$CPLClave = get_session('CPLActual');
					$dirant= $this->director_model->find("DIEstatus=1 and DIIdPlantel = '$CPLClave'");//print_r($dirant); exit;
					$dataant=array("DIEstatus"=>0,"DIFin"=>$data['DIInicio']);
					$this->director_model->update($dirant['DIIdDirector'],$dataant);
					
					$data['DIIdPlantel']= $CPLClave;
					$data['DIEstatus']= 1;
					$this->director_model->insert($data);
					set_mensaje("El Director se registro con éxito",'success::');
					
				}
				
				echo "OK";
				
			}
		
		}


		public function editar(){ // edita los datos del director
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$DIIdDirector_skip=$this->input->post('DIIdDirector_skip');
				$DIIdDirector=$this->encrypt->decode($DIIdDirector_skip);
				
				if ($DIIdDirector){
				
				$this->director_model->update($DIIdDirector,$data);
				set_mensaje("El Plantel con clave [<b> ".$data['DIFecha']." </b>] se registro con éxito",'success::');
				}
				
				else {
					
					$CPLClave = get_session('CPLActual');
					$dirant= $this->director_model->find("DIEstatus=1 and DIIdPlantel = '$CPLClave'");//print_r($dirant); exit;
					$dataant=array("DIEstatus"=>0,"DIFin"=>$data['DIInicio']);
					$this->director_model->update($dirant['DIIdDirector'],$dataant);
					
					$data['DIIdPlantel']= $CPLClave;
					$data['DIEstatus']= 1;
					$this->director_model->insert($data);
					set_mensaje("El Director se registro con éxito",'success::');
					
				}
				
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
				$this->form_validation->set_rules('DIFecha', 'Fecha', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('DIInicio', 'Inicio', "trim|required|min_length[5]|max_length[254]");
				$this->form_validation->set_rules('DIFin', 'Finalizó', "trim|min_length[5]|max_length[254]");
			}
			// fin de la funcion _set_rules
		}
		
	}