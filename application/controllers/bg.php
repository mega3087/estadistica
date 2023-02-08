<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class bg extends CI_Controller {
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
			//$this->db->join('terreno','CPLClave = TIdPlantel','INNER');
			//$data = $this->plantel_model->get( $CPLClave);
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'bg/Ver_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function oferta(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'OEIdPlantel' => $CPLClave);
			$data['oferta'] = $this->oferta_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Oferta_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function matricula(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'MNIIdPlantel' => $CPLClave);
			$data['matricula'] = $this->matricula_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Matricula_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function indice(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'IAIdPlantel' => $CPLClave);
			$data['indice'] = $this->indice_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Indice_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function cobertura(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			//print_r ($data);
			//exit();
			$where = array( 'IIdPlantel' => $CPLClave);
			$data['data'] = $this->cobertura_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Cobertura_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function cursos(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'MICIdPlantel' => $CPLClave);
			$data['cursos'] = $this->cursos_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Cursos_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function aprobacion(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'AIdPlantel' => $CPLClave);
			$data['data'] = $this->aprobacion_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Aprobacion_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function eficiencia(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'ETIdPlantel' => $CPLClave);
			$data['data'] = $this->eficiencia_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Eficiencia_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function abandono(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'AIdPlantel' => $CPLClave);
			$data['data'] = $this->abandono_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Abandono_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function egresados(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'EIIdPlantel' => $CPLClave);
			$data['data'] = $this->egresados_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Egresados_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function planea(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'PIdPlantel' => $CPLClave);
			$this->db->group_by('PMateria');
			$data['data'] = $this->planea_model->find_all( $where , 'PMateria');
			//print_r ($data);
			//exit();
			foreach($data['data'] as $key => $list){
				$where = array( 'PIdPlantel' => $CPLClave, 'PMateria' => $list['PMateria']);
				$data['data'][$key]['periodo'] = $this->planea_model->find_all( $where, 'PPeriodo, PPorcentaje' );
				foreach($data['data'][$key]['periodo'] as $key_p => $list_p){
					$where = array( 'PIdPlantel' => $CPLClave, 'PPeriodo' => $list_p['PPeriodo']);
					$data['data'][$key]['periodo'][$key_p]['materia'] = $this->planea_model->find_all( $where );
				}	
			}
			
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Planea_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function costo(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'CAIdPlantel' => $CPLClave);
			$data['data'] = $this->costo_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Costo_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		public function  Proyecciones(){
			$CPLClave = get_session('CPLActual');
			
			$data = array();
			$data = $this->plantel_model->get( $CPLClave);
			
			$where = array( 'PMIdPlantel' => $CPLClave);
			$data['data'] = $this->proyecciones_model->find_all( $where );
			
			$data['modulo'] = 'info';
			$data['subvista'] = 'indicadores/Proyecciones_view';			
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
		
		public function save_oferta(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$OEIdOferta=$this->input->post('OEIdOferta');
				
				$this->oferta_model->update($OEIdOferta,$data);
				set_mensaje("Oferta Educativa, se modifico con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function agregar_oferta(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['OEIdPlantel'] = $CPLClave;
			$datos['OEPeriodo'] = $data['OEPeriodo'];
			$datos['OETotal'] = $data['OETotal'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rules('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->oferta_model->insert($datos);
				set_mensaje("Oferta Educativa, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function save_nuevoingreso(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesmni('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$MNIIdMatricula=$this->input->post('MNIIdMatricula');
				
				$this->matricula_model->update($MNIIdMatricula,$data);
				set_mensaje("Matrícula de Nuevo Ingreso a Primer Semestre, se modifico con éxito",'success::');
				echo "OK";
				
			}
		
		}
	
		public function agregar_mnuevoingreso(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['MNIIdPlantel'] = $CPLClave;
			$datos['MNIPeriodo'] = $data['MNIPeriodo'];
			$datos['MNITotal'] = $data['MNITotal'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesmni('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->matricula_model->insert($datos);
				set_mensaje("Matrícula de Nuevo Ingreso a Primer Semestre, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		
		public function save_indice(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesindicea('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$IAId_Indice=$this->input->post('IAId_Indice');
				
				$this->indice_model->update($IAId_Indice,$data);
				set_mensaje("Índice de Atención a la Demanda (Absorción), se modifico con éxito",'success::');
				echo "OK";
				
			}
		
		}
		public function agregar_indice(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['IAIdPlantel'] = $CPLClave;
			$datos['IAPeriodo'] = $data['IAPeriodo'];
			$datos['IATotal'] = $data['IATotal'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesindicea('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->indice_model->insert($datos);
				set_mensaje("Índice de Atención a la Demanda (Absorción), se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function save_cobertura(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulescobertura('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$Iidcobertura=$this->input->post('Iidcobertura');
				
				$this->cobertura_model->update($Iidcobertura,$data);
				set_mensaje("Cobertura, se modifico con éxito",'success::');
				echo "OK";
				
			}
		
		}
			public function agregar_cobertura(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['IIdPlantel'] = $CPLClave;
			$datos['APeriodo'] = $data['APeriodo'];
			$datos['ICobertura'] = $data['ICobertura'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulescobertura('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->cobertura_model->insert($datos);
				set_mensaje("Cobertura, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function save_cursos(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			
			$this->_set_rulescursos('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$MICIdMat=$this->input->post('MICIdMat');
				
				$this->cursos_model->update($MICIdMat,$data);
				set_mensaje("Matrícula de Inicio de Cursos, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function agregar_cursos(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['MICIdPlantel'] = $CPLClave;
			$datos['MICPeriodo'] = $data['MICPeriodo'];
			$datos['MICTotal'] = $data['MICTotal'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulescursos('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->cursos_model->insert($datos);
				set_mensaje("Matrícula de Inicio de Cursos, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function save_aprobacion(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesaprobacion('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$AIdAprobados=$this->input->post('AIdAprobados');
				
				$this->aprobacion_model->update($AIdAprobados,$data);
				set_mensaje("Aprobación Ordinaria, se modifico con éxito",'success::');
				echo "OK";
				
			}
		
		}
		public function agregar_aprobacion(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['AIdPlantel'] = $CPLClave;
			$datos['APeriodo'] = $data['APeriodo'];
			$datos['AABS'] = $data['AABS'];
			$datos['APorcentaje'] = $data['APorcentaje'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesaprobacion('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->aprobacion_model->insert($datos);
				set_mensaje("Aprobación Ordinaria, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		////////////////
	
		
		public function save_eficiencia(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_ruleseficiencia('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$ETIdEficiencia=$this->input->post('ETIdEficiencia');
				
				$this->eficiencia_model->update($ETIdEficiencia,$data);
				set_mensaje("Eficiencia Terminal, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function agregar_eficiencia(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['ETIdPlantel'] = $CPLClave;
			$datos['ETPeriodo'] = $data['ETPeriodo'];
			$datos['ETABS'] = $data['ETABS'];
			$datos['ETPorcentaje'] = $data['ETPorcentaje'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_ruleseficiencia('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->eficiencia_model->insert($datos);
				set_mensaje("Eficiencia Terminal, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		
		public function save_abandono(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesabandono('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$AIdAbandono=$this->input->post('AIdAbandono');
				
				$this->abandono_model->update($AIdAbandono,$data);
				set_mensaje("Abandono Escolar, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		public function agregar_abandono(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['AIdPlantel'] = $CPLClave;
			$datos['APeriodo'] = $data['APeriodo'];
			$datos['APorcentaje'] = $data['APorcentaje'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesabandono('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->abandono_model->insert($datos);
				set_mensaje("Abandono Escolar, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		
		public function save_egresados(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesegresados('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$EIIdEgresados=$this->input->post('EIIdEgresados');
				
				$this->egresados_model->update($EIIdEgresados,$data);
				set_mensaje("Egresados e Inscritos en Nivel Superior, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		public function agregar_egresados(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['EIIdPlantel'] = $CPLClave;
			$datos['EIPeriodo'] = $data['EIPeriodo'];
			$datos['EIEgresados	'] = $data['EIEgresados'];
			$datos['EIInscritos'] = $data['EIInscritos'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesegresados('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->egresados_model->insert($datos);
				set_mensaje("Egresados e Inscritos en Nivel Superior, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		public function save_planea(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesplanea('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$PIdPlanea=$this->input->post('PIdPlanea');
				
				$this->planea_model->update($PIdPlanea,$data);
				set_mensaje("Planea, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		public function agregar_planea(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['PIdPlantel'] = $CPLClave;
			$datos['PMateria'] = $data['PMateria'];
			$datos['PPeriodo'] = $data['PPeriodo'];
			$datos['PPorcentaje'] = $data['PPorcentaje'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesplanea('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->planea_model->insert($datos);
				set_mensaje("Planea, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		public function save_costo(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulescosto('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$CAIdCosto=$this->input->post('CAIdCosto');
				
				$this->costo_model->update($CAIdCosto,$data);
				set_mensaje("Costo por Alumno (Ejercicio Fiscal), se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function agregar_costo(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['CAIdPlantel'] = $CPLClave;
			$datos['CAPeriodo'] = $data['CAPeriodo'];
			$datos['CACosto'] = $data['CACosto'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulescosto('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->costo_model->insert($datos);
				set_mensaje("Costo por Alumno (Ejercicio Fiscal), se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		public function save_proyecciones(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesproyecciones('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$PMIdProyeccion=$this->input->post('PMIdProyeccion');
				
				$this->proyecciones_model->update($PMIdProyeccion,$data);
				set_mensaje("Proyección de Matrícula, se modifico con éxito",'success::');
				echo "OK";
				
			}
		}
		
		public function agregar_proyecciones(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
			$CPLClave = get_session('CPLActual');
			$data= post_to_array('_skip');
			
			$datos['PMIdPlantel'] = $CPLClave;
			$datos['PMPeriodo'] = $data['PMPeriodo'];
			$datos['PMTotal'] = $data['PMTotal'];
			//echo json_encode($data);
			//print_r ($datos);
			//exit();
			$this->_set_rulesproyecciones('p',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$this->proyecciones_model->insert($datos);
				set_mensaje("Proyección de Matrícula, se agrego con éxito",'success::');
				echo "OK";
				
			}
		}
		
		
		public function save_indicadores(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			//echo json_encode($data);
			//print_r ($data);
			//exit();
			$this->_set_rulesmni('i',$data); //validamos los datos
			if($this->form_validation->run() === FALSE){
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				$IIdIndicadores_skip=$this->input->post('IIdIndicadores_skip');
				$IIdIndicadores=$this->encrypt->decode($IIdIndicadores_skip);
				$this->indicadores_model->update($IIdIndicadores,$data);
				//print_r ($data); exit;
				set_mensaje("Los indicadores, se han modificado con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		/*public function save_indicadores(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('i',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$IIdIndicadores_skip=$this->input->post('IIdIndicadores_skip');
				$IIdIndicadores=$this->encrypt->decode($IIdIndicadores_skip);
				//print_r ($data); exit;
				$this->datosgenerales_model->update($IIdIndicadores,$data);
				set_mensaje("Los cambios en Datos Generales se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}*/
		
		
		///////////////////////////////////////////////////////////////////////////////////
		
		
		
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
				$this->form_validation->set_rules('OEPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('OETotal', 'Total de Oferta', "trim|required|min_length[1]|max_length[4]");
				
			}
			// fin de la funcion _set_rules
		}
		function _set_rulesmni($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('MNIPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('MNITotal', 'Total de Matrícula de Nuevo Ingreso', "trim|required|min_length[1]|max_length[4]");
			}
			// fin de la funcion _set_rules
			if($c=='i'){
				$this->form_validation->set_rules('ITurno', 'Escuela - Turno', "trim|required|min_length[1]|max_length[1]");
			}
		}
		function _set_rulesindicea($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('IAPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('IATotal', 'Índice de Atención a la Demanda (Absorción)', "trim|required|min_length[1]|max_length[15]");
			}
			// fin de la funcion _set_rules
		}
		function _set_rulescursos($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('MICPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('MICTotal', 'Matrícula de Inicio de Cursos', "trim|required|min_length[1]|max_length[5]");
			}
			// fin de la funcion _set_rules
		}
		function _set_rulesaprobacion($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('APeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('AABS', 'ABS', "trim|required|min_length[1]|max_length[4]");
				$this->form_validation->set_rules('APorcentaje', 'Aprobación Ordinaria', "trim|required|min_length[1]|max_length[5]");
			}
			// fin de la funcion _set_rules
		}
		
		function _set_ruleseficiencia($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('ETPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('ETABS', 'ABS', "trim|required|min_length[1]|max_length[4]");
				$this->form_validation->set_rules('ETPorcentaje', 'Eficiencia Terminal', "trim|required|min_length[1]|max_length[5]");
			}
			// fin de la funcion _set_rules
		}
		
		function _set_rulesabandono($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('APeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('APorcentaje', 'Abandono Escolar', "trim|required|min_length[1]|max_length[5]");
			}
			// fin de la funcion _set_rules
		}
		
		function _set_rulesegresados($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('EIPeriodo', 'Periodo', "trim|required|min_length[9]|max_length[9]");
				$this->form_validation->set_rules('EIEgresados', 'Egresados', "trim|required|min_length[1]|max_length[5]");
				$this->form_validation->set_rules('EIInscritos', 'Inscritos', "trim|required|min_length[1]|max_length[5]");
			}
			// fin de la funcion _set_rules
		}
		
		
		function _set_rulesplanea($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('PPeriodo', 'Periodo', "trim|required|min_length[1]|max_length[4]");
				$this->form_validation->set_rules('PPorcentaje', 'Porcentaje', "trim|required|min_length[1]|max_length[5]");
				
			}
			// fin de la funcion _set_rules
		}
		function _set_rulescosto($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('CAPeriodo', 'Periodo', "trim|required|min_length[4]|max_length[4]");
				$this->form_validation->set_rules('CACosto', 'Costos', "trim|required|min_length[1]|max_length[10]");
				
			}
			// fin de la funcion _set_rules
		}
				
		function _set_rulesproyecciones($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('PMPeriodo', 'Periodo', "trim|required|min_length[4]|max_length[9]");
				$this->form_validation->set_rules('PMTotal', 'Total', "trim|required|min_length[1]|max_length[15]");
				
			}
			// fin de la funcion _set_rules
		}
	}