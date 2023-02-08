<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Generagrupo extends CI_Controller {
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
			
			$select = "GIdGrupos,GIdPlantel,GIdPeriodo,GIdFormacion,GGrupo,GTurno,GSemestre,CPLClave, FNombre"; 
			$this->db->join('planteles','CPLClave = GIdPlantel','left');
			$this->db->join('formacion','FIdFormacion = GIdFormacion','left');			
			$this->db->where('CPLClave', $CPLClave); 
					
			$data['grupos'] = $this->generagrupo_model->find_all(null, $select);
			
			//echo json_encode($data['grupos']);
			//exit;
			$data['modulo'] = 'info';
			$data['subvista'] = 'generagrupo/Mostrar_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		
		
		public function save_grupo(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$GIdGrupos_skip=$this->input->post('GIdGrupos_skip');
				$GIdGrupos=$this->encrypt->decode($GIdGrupos_skip);
				
				if ($GIdGrupos){
				$this->generagrupo_model->update($GIdGrupos,$data);
				set_mensaje("El grupo se modifico con éxito",'success::');
				}
				else {
					$this->db->where('PEstatus', 1);
					$data['periodo'] = $this->generaperiodo_model->find();
					
					$CPLClave = get_session('CPLActual');
					
					$datos= array(
							'GIdPlantel' => $CPLClave,
							'GIdPeriodo' => $data['periodo']['PAnio'].'-'.$data['periodo']['PPeriodo'],
							'GIdFormacion' => $data ['GIdFormacion'],
							'GGrupo' => $data ['GGrupo'],
							'GTurno' => $data ['GTurno'],
							'GSemestre' => $data ['GSemestre'],
							);
					
					
					$this->generagrupo_model->insert($datos);
					set_mensaje("El grupo se registro con éxito",'success::');
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
				$this->form_validation->set_rules('GTurno', 'TURNO', "trim|required|min_length[1]|max_length[1]");
				//$this->form_validation->set_rules('DIInicio', 'Inicio', "trim|required|min_length[5]|max_length[254]");
				//$this->form_validation->set_rules('DIFin', 'Finalizó', "trim|min_length[5]|max_length[254]");
			}
			// fin de la funcion _set_rules
		}
		
		
	}