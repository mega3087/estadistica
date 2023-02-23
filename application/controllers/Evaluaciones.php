<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Evaluaciones extends CI_Controller {
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
			$this->db->join('evaluacionsem','CPLClave = EIdPlantel','INNER');
			$data = $this->plantel_model->get( $CPLClave);
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'evaluaciones/Evaluacion_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function evaluacion(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'EIdPlantel' => $CPLClave);
			$data['data'] = $this->evaluacion_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'evaluaciones/Evaluacion_view';			
			$this->load->view('plantilla_general', $data);
			
			
		
		}
		
		public function certificado(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'CIdPlantel' => $CPLClave);
			$data['data'] = $this->certificado_model->find_all( $where );
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'evaluaciones/Certificado_view';			
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
		
		public function save_evaluacion(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('ev',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$EIdEvaluacion_skip=$this->input->post('EIdEvaluacion_skip');
				$EIdEvaluacion=$this->encrypt->decode($EIdEvaluacion_skip);
				
				if ($EIdEvaluacion){
				$this->evaluacion_model->update($EIdEvaluacion,$data);
				set_mensaje("El Programa se modifico con éxito",'success::');
				}
				else {
					$CPLClave = get_session('CPLActual');
					$data['EIdPlantel']= $CPLClave;
					$this->evaluacion_model->insert($data);
					set_mensaje("El Programa se registro con éxito",'success::');
				}
				echo "OK";
				
			}
		
		}
		
		public function save_certificado(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('c',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$CIdCertificados_skip=$this->input->post('CIdCertificados_skip');
				$CIdCertificados=$this->encrypt->decode($CIdCertificados_skip);
				//print_r ($data); exit;
				$this->certificado_model->update($CIdCertificados,$data);
				set_mensaje("Los cambios del estatus se registraron con éxito",'success::');
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
			if($c=='ev'){
				$this->form_validation->set_rules('EPeriodo', 'PERIODO', "trim|required|min_length[6]|max_length[6]");
				
				
			}
			
			if($c=='pr'){
				$this->form_validation->set_rules('PIPrograma', 'Programa', "trim|required|min_length[8]|max_length[300]");
				
				
			}
			
			if($c=='a'){
				$this->form_validation->set_rules('VAAulasExistentes', 'VAAulasExistentes', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			if($c=='c'){
				$this->form_validation->set_rules('CEstatus', 'Estatus', "trim|required|min_length[1]|max_length[300]");
				
				
			}
			
			
			// fin de la funcion _set_rules
		}
		
		
		
		
	}