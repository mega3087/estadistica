<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Plantel extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			if ( ! is_login() )
				redirect('login');
			
			if ( ! is_permitido())
				redirect('usuario/negar_acceso');
		}
		
		public function index(){
			
			$data = array();
			$this->db->where('CPLActivo', 1);
			$this->db->order_by('CPLNombre');
			$data["planteles"] = $this->plantel_model->find_all();
			
			$this->db->where('CPLActivo', 1);
			$this->db->where('CPLTipo',37);
			$this->db->where('CPLCCT !=','DEPTO');
			$this->db->order_by('CPLNombre');
			$data["unidades"] = $this->plantel_model->find_all();
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'plantel/Mostrar_view';			
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
		
		public function save_dg(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('d',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$DGIdDatosGenerales_skip=$this->input->post('DGIdDatosGenerales_skip');
				$DGIdDatosGenerales=$this->encrypt->decode($DGIdDatosGenerales_skip);
				//print_r ($data); exit;
				$this->datosgenerales_model->update($DGIdDatosGenerales,$data);
				set_mensaje("Los cambios en Datos Generales se registraron con éxito",'success::');
				echo "OK";
				
			}
		
		}
		
		public function save_personal(){
			if(! $_POST)
				redirect( $this->router->fetch_class() );
				
			$data= post_to_array('_skip');
			$this->_set_rules('i',$data); //validamos los datos
			if($this->form_validation->run() === FALSE)
			{
				set_mensaje(validation_errors());
				muestra_mensaje();
			}else{
				
				$PIdPersonal_skip=$this->input->post('PIdPersonal_skip');
				$PIdPersonal=$this->encrypt->decode($PIdPersonal_skip);
				//print_r ($data); exit;
				$this->personal_model->update($PIdPersonal,$data);
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
		
		public function usuario(){
			$CPLClave_skip = $this->input->post('CPLClave_skip');
			$CPLClave = $this->encrypt->decode($CPLClave_skip);
			$CPLDirector = $this->input->post('CPLDirector');
			$this->db->where("FIND_IN_SET ('$CPLClave',UPlantel)");
			$usuario = $this->usuario_model->find_all();
				echo "<option value='0'></option>";
			foreach($usuario as $key => $list){
				if($list['UNCI_usuario']==$CPLDirector)
					echo "<option selected value='".$list['UNCI_usuario']."'>".$list['UNombre']." ".$list['UApellido_pat']." ".$list['UApellido_mat']."</option>";
				else
					echo "<option value='".$list['UNCI_usuario']."'>".$list['UNombre']." ".$list['UApellido_pat']." ".$list['UApellido_mat']."</option>";
			}
		}
		
		public function info($CPLClave_skip = null){
			$CPLClave = $this->encrypt->decode( $CPLClave_skip );
			set_session('CPLActual', $CPLClave);
			
			$where = array( 'PEstatus' => '1');
			$data['periodo']= $this->generaperiodo_model->find_all($where);

			$periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];

        	/*
			echo json_encode($data['gruposm']);
			exit;*/
			$select1 = "COUNT(GRGrupo) AS Grupos";
       	 	$this->db->where('GRCPlantel', $CPLClave);
        	$this->db->where('GRPeriodo', $periodo);
        	$data['mgrupos']= $this->grupos_model->find_all(null, $select1);

			$select2 = "SUM(GRMasculino) AS Hombres";
			$this->db->where('GRCPlantel', $CPLClave);
        	$this->db->where('GRPeriodo', $periodo);
			$data['thombres'] = $this->grupos_model->find_all(null, $select2);

			$select3 = "SUM(GRFemenino) AS Mujeres";
			$this->db->where('GRCPlantel', $CPLClave);
        	$this->db->where('GRPeriodo', $periodo);
			$data['tmujeres'] = $this->grupos_model->find_all(null, $select3);

			/*echo json_encode($data['tmujeres']);
			exit;*/
			
			$this->db->select("*,SUM(PIMonto) AS SumMonto");
			$this->db->join('datos_generales','CPLClave = DGIdPlantel','LEFT');
			$this->db->join('infraestructura','CPLClave = InfIdPlantel','LEFT');
			$this->db->join('terreno','CPLClave = TIdPlantel','LEFT');
			$this->db->join('proginfraestructura','CPLClave = PIIdPlantel','LEFT');
			$this->db->join('computo','CPLClave = COIdPlantel','LEFT');
			$this->db->join('indicadores','CPLClave = IIdPlantel','LEFT');
			$this->db->join('personal','CPLClave = PIdPlantel','LEFT');
			$this->db->join('evaluaciones','CPLClave = EIdPlantel','LEFT');
			$this->db->join('directores','CPLClave = DIIdPlantel','LEFT');
			$this->db->join('archesemestral','CPLClave = AESIdArchivo','LEFT');
			$this->db->where('DIEstatus', 1);
			$data['varios'] = $this->plantel_model->get( $CPLClave);

			
			
			$data['modulo'] = $this->router->fetch_class();
			$data['subvista'] = 'plantel/Info_view';			
			$this->load->view('plantilla_general', $data);
		}
		
		function _set_rules($c='',$data = array()){
			
			if($c=='p'){
				$this->form_validation->set_rules('CPLNombre', 'Nombre', "trim|required|min_length[8]|max_length[255]");
				$this->form_validation->set_rules('CPLCCT', 'C.C.T.', "trim|required|min_length[5]|max_length[15]");
				$this->form_validation->set_rules('CPLCorreo_electronico', 'Correo electr&oacute;nico', "trim|required|max_length[100]|valid_email");
				$this->form_validation->set_rules('CPLDirector', 'Director', "trim|min_length[5]|max_length[50]");
			}
			
			if($c=='d'){
				$this->form_validation->set_rules('DGFechaCreacion', 'Fecha de Creación del Centro Educativo', "trim|required|min_length[10]|max_length[10]");
				
			}

			if($c=='i'){
				$this->form_validation->set_rules('PPeriodo', 'Periodo', "trim|required|min_length[1]|max_length[9]");
				
			}
			// fin de la funcion _set_rules
		}
		
	}