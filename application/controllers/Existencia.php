<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Existencia extends CI_Controller {
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
			$data['periodo_act']= $this->generaperiodo_model->find_all($where);

			$this->db->order_by('PIdPeriodo','DESC');
			$data['periodos']= $this->generaperiodo_model->find_all();
			
			$data['formacion']= $this->formacion_model->find_all();
					
			$periodo = $data['periodo_act'][0]['PAnio']."-".$data['periodo_act'][0]['PPeriodo'];
			
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
			
			$this->db->where( 'ENIdPlantel', $CPLClave);
			$this->db->where( 'ENPeriodo', $periodo);
			$this->db->where( 'ENSeccion', 'Matricula');
			$data['estatus']= $this->entrega_model->find_all();

			$row=count($data['estatus']);
			/*echo json_encode($row);
			exit;*/

			if($row == 1){
				$data['entrega']=$data['estatus'][0]['ENEstatus'];
				/*echo json_encode($data['entrega']);
				exit;*/
			}
			if($row == 0){
				$data['entrega']='0';
			}

			/*echo json_encode($data['entrega']);
			exit;*/

			$data['modulo'] = 'info';
			$data['subvista'] = 'existencia/Mostrar_view';			
			$this->load->view('plantilla_general', $data);

		}

		public function verPeriodos_skip($idPlantel = null, $periodo = null){
			$idPlantel = $this->input->post('idPlantel');
			$CPLClave = $this->encrypt->decode($idPlantel);
			$data['periodo'] = $this->input->post('periodo');

		
			$data['formacion']= $this->formacion_model->find_all();
			
			$this->db->join('formacion', 'FIdFormacion=GRCClave','left' );
			$this->db->where( 'GRCPlantel', $CPLClave);
			$this->db->where( 'GRPeriodo', $data['periodo']);
			$this->db->where( 'GRTurno', '1');
			$this->db->order_by('GRGrupo', 'ASC');
			$data['gruposm'] = $this->grupos_model->find_all();


			$this->db->join('formacion', 'FIdFormacion=GRCClave','left' );
			$this->db->where( 'GRCPlantel', $CPLClave);
			$this->db->where( 'GRPeriodo', $data['periodo']);
			$this->db->where( 'GRTurno', '2');
			$this->db->order_by('GRGrupo', 'ASC');
			$data['gruposv'] = $this->grupos_model->find_all();
			/*
			$whereV = array( 'GRCPlantel' => $CPLClave, 'GRPeriodo' => $data['periodo'],   'GRTurno' => '2');
			$data['gruposv'] = $this->grupos_model->find_all( $whereV );*/	
			
			$this->db->where( 'ENIdPlantel', $CPLClave);
			$this->db->where( 'ENPeriodo', $data['periodo']);
			$this->db->where( 'ENSeccion', 'Matricula');
			$data['estatus']= $this->entrega_model->find_all();
			
			
			
			/*echo json_encode($entrega);
			exit;*/

			$row=count($data['estatus']);
			/*echo json_encode($row);
			exit;*/

			if($row == 1){
				$data['entrega']=$data['estatus'][0]['ENEstatus'];
				$entrega=$data['estatus'][0]['ENEstatus'];

			}
			if($row == 0){
				$data['entrega']='0';
				$entrega=0;
			}

			/*echo json_encode($entrega);
			exit;*/
			
			$this->load->view('existencia/Mostrar_Periodos', $data);

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

		public function save_totales(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			
			$CPLClave = get_session('CPLActual');

			$data['TEIdPlantel']=$CPLClave;

			/*echo json_encode($data);
			exit;*/

			$this->totalex_model->insert($data);
			

			$where = array( 'PEstatus' => '1');
			$data['periodo']= $this->generaperiodo_model->find_all($where);		
			$periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];

			$this->db->where( 'ENIdPlantel', $CPLClave);
			$this->db->where( 'ENPeriodo', $periodo);
			$this->db->where( 'ENSeccion', 'Matricula');
			$data['estatus']= $this->entrega_model->find_all();

			/*echo json_encode($entrega);
			exit;*/

			$row=count($data['estatus']);

			if($row == 1){
				
				set_mensaje("si entra",'success::');

				$IDEntrega=$data['estatus'][0]['ENIdEntrega'];


				$data = array(
					'ENEstatus' => '1',
				);

				$this->entrega_model->update($IDEntrega,$data);

				
			}

			if($row == 0){
				$fecha=date('Y-m-d H:i:s');
				$entrega['ENIdPlantel']= $CPLClave;
				$entrega['ENperiodo']= $periodo;
				$entrega['ENEstatus']= '1';
				$entrega['ENEstado']= 'En Validación';
				$entrega['ENFecha']= $fecha;
				$entrega['ENSeccion']= 'Matricula';
				$this->entrega_model->insert($entrega);
				set_mensaje("Se há notificado la entrega",'success::');
			}

			set_mensaje("Los alumnos se registraron con éxito",'success::');
				
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
				$this->form_validation->set_rules('GRMasculino', 'HOMBRES', "trim|required|min_length[1]|max_length[2]");
				$this->form_validation->set_rules('GRFemenino', 'MUJERES', "trim|required|min_length[1]|max_length[2]");
				
			}
			// fin de la funcion _set_rules
		}

		public function ImprimirGrupos($idPlantel = null, $periodo = null) {
			$idPlantel = $this->encrypt->decode($idPlantel);
			$GRPeriodo = base64_decode($periodo);
					
			$selectNom = "CPLClave, CPLNombre";
			$this->db->where('CPLClave', $idPlantel);
			$data['plantel'] = $this->plantel_model->find_all(null, $selectNom);
	
		   $data['periodo']=$GRPeriodo;
	
			$select = 'COUNT(GRSemestre) noGrupos, GRSemestre';
			$this->db->where('GRCPlantel', $idPlantel);
			$this->db->where('GRPeriodo', $GRPeriodo);
			$this->db->group_by('GRSemestre');
			$data['total'] = $this->grupos_model->find_all(null, $select);
			
			foreach ($data['total'] as $key => $listTot) {
				
				$selectMat = "GRClave, GRGrupo, GRSemestre, FNombre, GRMasculino, GRFemenino,  GRCupo, GRTurno";
				$this->db->join('formacion', 'FIdFormacion = GRCClave','left');
				if($listTot['GRSemestre'] > 2) {
					$this->db->where('GRSemestre', $listTot['GRSemestre']);
				} 
				$this->db->where('GRPeriodo', $GRPeriodo);
				$this->db->where('GRTurno', '1');
				$this->db->where('GRSemestre', $listTot['GRSemestre']);
				$this->db->where('GRCPlantel', $idPlantel);
				$this->db->group_by('GRClave');
				$data['total'][$key]['gruposMat'] = $this->grupos_model->find_all(null, $selectMat);
				
				//Grupos Vespertinos
				$selectVes = "GRClave, GRGrupo, GRSemestre, FNombre, GRMasculino, GRFemenino,  GRCupo, GRTurno";
				$this->db->join('formacion', 'FIdFormacion = GRCClave','left');
				if($listTot['GRSemestre'] > 2) {
					$this->db->where('GRSemestre', $listTot['GRSemestre']);
				} 
				$this->db->where('GRPeriodo', $GRPeriodo);
				$this->db->where('GRTurno', '2');
				$this->db->where('GRSemestre', $listTot['GRSemestre']);
				$this->db->where('GRCPlantel', $idPlantel);
				$this->db->group_by('GRClave');
				$data['total'][$key]['gruposVes'] = $this->grupos_model->find_all(null, $selectVes);
	
				//Sumas
				$selectVes = "SUM(GRMasculino) AS tothom, SUM(GRFemenino) AS totfem, GRSemestre";
				if($listTot['GRSemestre'] > 2) {
					$this->db->where('GRSemestre', $listTot['GRSemestre']);
				} 
				$this->db->where('GRPeriodo', $GRPeriodo);
				$this->db->where('GRSemestre', $listTot['GRSemestre']);
				$this->db->where('GRCPlantel', $idPlantel);
				$data['total'][$key]['sumas'] = $this->grupos_model->find_all(null, $selectVes);
			}
			
			///////2022 - 2 del 2022-08-15 al 2023-01-19////
			
			//echo json_encode ($data['total']);
			//exit;
			$this->load->library('Dpdf');
			$data['subvista'] = 'grupos/Ver_pdf_view';
			$data['titulo'] = "<p style='font-size:10px;'><br>COLEGIO DE BACHILLERES DEL ESTADO DE MÉXICO<br></p>";
	
			$this->dpdf->load_view('grupos/plantilla_general_pdf',$data);
			$this->dpdf->setPaper('letter', 'portrait');
			$this->dpdf->render();
			$this->dpdf->stream("Grupos.pdf",array("Attachment"=>false));
		}
	
	}