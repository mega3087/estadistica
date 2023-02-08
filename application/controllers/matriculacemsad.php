<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Matriculacemsad extends CI_Controller {
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
			
			$where = array( 'PEstatus' => '1');
			$data['periodo']= $this->generaperiodo_model->find_all($where);

			
			$data['formacion']= $this->formacion_model->find_all();
					
			$periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];

			
			$this->db->join('planteles', 'CPLClave=TEIdPlantel','left' );
			$this->db->where( 'CPLTipo', '36');
			$this->db->where( 'TEPeriodo', $periodo);
			$this->db->order_by('CPLClave', 'ASC');

			$data['totales'] = $this->totalex_model->find_all();


			$data['modulo'] = 'info';
			$data['subvista'] = 'matricula/Emsad_view';			
			$this->load->view('plantilla_general', $data);
		}



		public function ver_matricula(){
			$CPLClave = get_session('CPLActual');

			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'PEstatus' => '1');
			$data['periodo']= $this->generaperiodo_model->find_all($where);

			
			$data['formacion']= $this->formacion_model->find_all();
					
			$periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];
			
			$this->db->join('formacion', 'FIdFormacion=GRCClave','left' );
			$this->db->where( 'GRCPlantel', $CPLClave);
			$this->db->where( 'GRPeriodo', $periodo);
			$this->db->where( 'GRTurno', '1');
			$this->db->order_by('GRGrupo', 'ASC');
			$data['gruposm'] = $this->grupos_model->find_all();


			$this->db->join('formacion', 'FIdFormacion=GRCClave','left' );
			$this->db->where( 'GRCPlantel', $CPLClave);
			$this->db->where( 'GRPeriodo', $periodo);
			$this->db->where( 'GRTurno', '2');
			$this->db->order_by('GRGrupo', 'ASC');
			$data['gruposv'] = $this->grupos_model->find_all();
			/*
			$whereV = array( 'GRCPlantel' => $CPLClave, 'GRPeriodo' => $periodo,   'GRTurno' => '2');
			$data['gruposv'] = $this->grupos_model->find_all( $whereV );*/	
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'existencia/Mostrar_matricula';			
			$this->load->view('plantilla_general', $data);
		}

		
		public function save_existencia(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');

			

			$this->_set_rules('p',$data); //validamos los datos

			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$GRClave=$this->input->post('GRClave');
				$GRClave=$this->encrypt->decode($GRClave);
				$GRCupo=$this->input->post('GRMasculino')+$this->input->post('GRFemenino');

				if ($GRClave){
					if( $data['GRSemestres'] < 3)
					$formacion="";
					else
					$formacion=$data['GRCClave'];

				$datos=array(
					'GRMasculino' => $data['GRMasculino'],
					'GRFemenino' => $data['GRFemenino'],
					'GRCClave' => $formacion,
					'GRCupo' => $GRCupo,

				);

				$this->grupos_model->update($GRClave,$datos);
				set_mensaje("Los alumnos se registraron con éxito con éxito",'success::');
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
		

		public function excel(){
			$this->load->view('matricula/ficheroExcel3');
		}

		function _set_rules($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('GRMasculino', 'HOMBRES', "trim|required|min_length[1]|max_length[2]");
				$this->form_validation->set_rules('GRFemenino', 'MUJERES', "trim|required|min_length[1]|max_length[2]");
				
			}
			// fin de la funcion _set_rules
		}
		
	}