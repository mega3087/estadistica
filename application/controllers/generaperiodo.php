<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Generaperiodo extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			if ( ! is_login() )
				redirect('login');
			
			if ( ! is_permitido())
				redirect('usuario/negar_acceso');
		}
		
		public function index(){ 
			//$where = array( 'PEstatus' => '1');
			$this->db->order_by('PIdPeriodo','DESC');
			$data['data'] = $this->generaperiodo_model->find_all();
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'generaperiodo/Mostrar_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		/*public function index(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			//$this->db->join('terreno','CPLClave = TIdPlantel','INNER');
			//$data = $this->plantel_model->get( $CPLClave);
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'anexo/Ver_view';			
			$this->load->view('plantilla_general', $data);
		}*/
		
		
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

		public function save_periodo() {
			$data= post_to_array('_skip');
			$this->_set_rules('x',$data); //validamos los datos
			if($this->form_validation->run() === FALSE) {
				set_mensaje(validation_errors());
				muestra_mensaje();
			} else {
				$this->db->where('PEstatus','1');
				$periodo = $this->generaperiodo_model->find();
				
				$datos = array('PEstatus' => 0);
				$this->generaperiodo_model->update($periodo['PIdPeriodo'],$datos);

				$data['PEstatus'] = 1;
				$this->generaperiodo_model->insert($data);
				set_mensaje("El Periodo se registro con éxito",'success::');

			}
			echo "OK";

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

			if($c=='x'){
				$this->form_validation->set_rules('PAnio', 'Año', "trim|required|min_length[4]|max_length[4]");
				$this->form_validation->set_rules('PPeriodo', 'Periodo', "trim|required|min_length[1]|max_length[1]");
				$this->form_validation->set_rules('PFechainicial', 'Fecha Inicial', "trim|min_length[10]|max_length[10]");
				$this->form_validation->set_rules('PFechafinal', 'Fecha Final', "trim|min_length[10]|max_length[10]");
			}
		}
		
	}