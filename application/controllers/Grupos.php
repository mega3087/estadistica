<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {
    public function __construct () {
        parent::__construct();
        if (!is_login()) // Verificamos que el usuario este logeado
            redirect('login');

        if (!is_permitido()) //  Verificamos que el usuario tenga permisos
            redirect('usuario/negar_acceso');
    }

    public function index() {
        $data = array();

        $this->db->where('PEstatus','1');
        $data['periodos'] = $this->generaperiodo_model->find_all();


        $periodo = $data['periodos'][0]['PAnio']."-".$data['periodos'][0]['PPeriodo'];
        
        $select = "CPLClave, CPLNombre, CPLTurnos,CPLTipo,
        (SELECT ENIdEntrega FROM entrega WHERE ENPeriodo = '$periodo' AND ENIdPlantel = CPLClave) ENIdEntrega,
        (SELECT ENEstatus FROM entrega WHERE ENPeriodo = '$periodo' AND ENIdPlantel = CPLClave) ENEstatus";
        if( is_permitido(null,'grupos','ver_grupos')) {            
            $this->db->where('CPLTipo', '35');
            $this->db->or_where('CPLTipo', '36');            
        } elseif( is_permitido(null,'grupos','ver_grupos_plantel')) { 
            $this->db->join('nousuario', 'UPlantel = CPLClave', 'left');            
            $this->db->where('UNCI_usuario',get_session('UNCI_usuario'));
        }
        
        $this->db->where('CPLTipo', '35');
        $this->db->or_where('CPLTipo', '36');         
        $this->db->order_by('CPLClave','ASC');
        $data["planteles"] = $this->plantel_model->find_all(null, $select);

        /*echo json_encode($data['planteles']);
        exit;*/

        /*foreach ($data['planteles'] as $key => $listP) {
            $select = 'IdFormacion, FNombre';
            $this->db->join('formacion', 'IdFormacion = GRCClave','left');
            $this->db->where('PCPlantel',$listP['CPLClave']);
            $data['planteles'][$key]['capacitaciones'] = $this->plantel_model->find_all(null,$select);
        }*/
        
        $this->db->where('PEstatus','1');

        $data['periodos'] = $this->generaperiodo_model->find_all();
        
        $data['modulo'] = $this->router->fetch_class();
        $data['subvista'] = 'grupos/Mostrar_view';

        $this->load->view('plantilla_general', $data);
    }

    public function agregarGrupos(){
        $CPLClave = get_session('CPLActual');


        $data = array();
        $data['planteles'] = $this->plantel_model->get( $CPLClave);
        
        $this->db->where('PEstatus','1');
        $data['periodos'] = $this->generaperiodo_model->find_all();


        $periodo = $data['periodos'][0]['PAnio']."-".$data['periodos'][0]['PPeriodo'];

        
		$this->db->where( 'GRCPlantel', $CPLClave);
		$this->db->where( 'GRPeriodo', $periodo);
		$this->db->where( 'GRTurno', '1');
		$this->db->order_by('GRGrupo', 'ASC');
		$data['gruposm'] = $this->grupos_model->find_all();

        /*echo json_encode($data['gruposm']);
        exit;*/

       
		$this->db->where( 'GRCPlantel', $CPLClave);
		$this->db->where( 'GRPeriodo', $periodo);
		$this->db->where( 'GRTurno', '2');
		$this->db->order_by('GRGrupo', 'ASC');
		$data['gruposv'] = $this->grupos_model->find_all();
        
        $data['modulo'] = 'info';
        $data['subvista'] = 'grupos/Mostrar_Agregar';			
        $this->load->view('plantilla_general', $data);
    }

    public function selectCap() {
        $data = array();
        $data['valorGrupo'] = $this->input->post('valorGrupo');
        
        $data['capacitaciones'] = $this->formacion_model->find_all();

        $this->load->view('grupos/Mostrar_capacitaciones', $data);

    }

    public function save() {
        if(! $_POST)
            redirect( $this->router->fetch_class() );
                
        $data= post_to_array('_skip');
        
        if ($data['CPESemestre1'] == 1 || $data['CPESemestre1'] == 2) {
            //Grupos Matutino
            if ($data['NoGruposMat1'] != '0') {
                $this->db->where('GRCPlantel',$data['GRCPlantel']);
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',1);
                $this->db->where('GRSemestre',$data['CPESemestre1']);
                $this->db->where('GRStatus',1);
                $contar = $this->grupos_model->find_all();
                                
                for ($i = 1; $i <= $data['NoGruposMat1']; $i++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }

                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre1'];
                    if (count($contar) > '0'){
                        if (count($contar) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre1'].count($contar) + $i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre1'].'0'.count($contar) + $i; 
                        }
                    } else {
                        if ($i >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre1'].$i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre1'].'0'.$i; 
                        }
                    }     

                    $datos['GRTurno'] = '1';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');

                    $this->grupos_model->insert($datos);
                }
            }

            //Grupos Vespertino
            if ($data['NoGruposVes1'] != '0') {
                $this->db->where('GRCPlantel',$data['GRCPlantel']);
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',2);
                $this->db->where('GRSemestre',$data['CPESemestre1']);
                $this->db->where('GRStatus',1);
                $contarv = $this->grupos_model->find_all();

                for ($v = 1; $v <= $data['NoGruposVes1']; $v++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }   
    
                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre1'];
                    if (count($contarv) > '0'){
                        if (count($contarv) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre1'].count($contarv) + $v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre1'].'0'.count($contarv) + $v; 
                        }
                    } else {
                        if ($v >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre1'].$v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre1'].'0'.$v; 
                        }
                    }         
                    $datos['GRTurno'] = '2';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');
                    
                    $this->grupos_model->insert($datos);  
                }
            }
            
        } 
        
        if ($data['CPESemestre2'] == 3 || $data['CPESemestre2'] == 4) {
            //Grupos Matutino
            if ($data['NoGruposMat2'] != '0') {         
                $this->db->where('GRCPlantel',$data['GRCPlantel']);       
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',1);
                $this->db->where('GRSemestre',$data['CPESemestre2']);
                $this->db->where('GRStatus',1);
                $contar = $this->grupos_model->find_all();
                for ($i = 1; $i <= $data['NoGruposMat2']; $i++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }   

                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre2'];
                    if (count($contar) > '0') {
                        if (count($contar) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre2'].count($contar) + $i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre2'].'0'.count($contar) + $i; 
                        }
                    } else {
                        if ($i >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre2'].$i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre2'].'0'.$i; 
                        }
                    } 
                    $datos['GRTurno'] = '1';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');                
                    
                    $this->grupos_model->insert($datos);  
                }
            }

            //Grupos Vespertino
            if ($data['NoGruposVes2'] != '0') {
                $this->db->where('GRCPlantel',$data['GRCPlantel']);
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',2);
                $this->db->where('GRSemestre',$data['CPESemestre2']);
                $this->db->where('GRStatus',1);
                $contarv = $this->grupos_model->find_all();
                for ($v = 1; $v <= $data['NoGruposVes2']; $v++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }   
    
                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre2'];
                    if (count($contarv) > '0'){
                        if (count($contarv) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre2'].count($contarv) + $v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre2'].'0'.count($contarv) + $v; 
                        }
                    } else {
                        if ($v >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre2'].$v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre2'].'0'.$v; 
                        }
                    }
                    $datos['GRTurno'] = '2';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');

                    $this->grupos_model->insert($datos);  
                }
            }
        } 

        if ($data['CPESemestre3'] == 5 || $data['CPESemestre3'] == 6) {
            //Grupos Matutino
            if ($data['NoGruposMat3'] != '0') {
                $this->db->where('GRCPlantel',$data['GRCPlantel']);
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',1);
                $this->db->where('GRSemestre',$data['CPESemestre3']);
                $this->db->where('GRStatus',1);
                $contar = $this->grupos_model->find_all();
                
                for ($i = 1; $i <= $data['NoGruposMat3']; $i++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }   
    
                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre3'];
                    if (count($contar) > '0') {
                        if (count($contar) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre3'].count($contar) + $i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre3'].'0'.count($contar) + $i; 
                        }
                    } else {
                        if ($i >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre3'].$i; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre3'].'0'.$i; 
                        }
                    }           
                    $datos['GRTurno'] = '1';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');   
                    
                    $this->grupos_model->insert($datos);  
                }
            }

            //Grupos Vespertino
            if ($data['NoGruposVes3'] != '0') { 
                $this->db->where('GRCPlantel',$data['GRCPlantel']);
                $this->db->where('GRPeriodo',$data['GRPeriodo']);
                $this->db->where('GRTurno',2);
                $this->db->where('GRSemestre',$data['CPESemestre3']);
                $this->db->where('GRStatus',1);
                $contarv = $this->grupos_model->find_all();

                for ($v = 1; $v <= $data['NoGruposVes3']; $v++) {
                    $datos['GRCPlantel'] = $data['GRCPlantel'];
                    if ($data['CPLTipo'] == '35') {
                        $datos['GRPMat'] = '7';
                    } elseif ($data['CPLTipo'] == '36') {
                        $datos['GRPMat'] = '9';
                    }   
    
                    $datos['GRPeriodo'] = $data['GRPeriodo'];
                    $datos['GRSemestre'] = $data['CPESemestre3'];
                    if (count($contarv) > '0'){
                        if (count($contarv) >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre3'].count($contarv) + $v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre3'].'0'.count($contarv) + $v; 
                        }
                    } else {
                        if ($v >= 10) {
                            $datos['GRGrupo'] = $data['CPESemestre3'].$v; 
                        } else {
                            $datos['GRGrupo'] = $data['CPESemestre3'].'0'.$v; 
                        }
                    }           
                    $datos['GRTurno'] = '2';
                    $datos['GRStatus'] = "1";
                    $datos['GRFechaRegistro'] = date('Y-m-d H:i:s');
                    $datos['GRUsuarioRegistro'] = get_session('UNCI_usuario');

                    $this->grupos_model->insert($datos);  
                }
            }            

            set_mensaje("Los Grupos se Agregarón Correctamente",'success::');
            echo "OK;";
            muestra_mensaje();
        }
    }

    public function eliminar() {
        
        $data= post_to_array('_skip');
        $GRClave = $data['GRClave'];
        $this->grupos_model->delete($GRClave);
        $this->load->view('grupos/Mostrar_grupos', $data);
    }


    public function selectGrupos() {
        $GRCPlantel = $this->input->post('GRCPlantel');
        $this->db->where('GRCPlantel',$GRCPlantel);
        $this->db->where('GRStatus','1');
        
        $data['data'] = $this->grupos_model->find_all();
        $this->load->view('grupos/Mostrar_grupos', $data);
    }

    public function deleteGrupo() {
        //$GRClave = $this->encrypt->decode($this->input->post('GRClave'));
        $data= post_to_array('_skip');
        $GRClave = $data['GRClave'];
        $data = array(
            'GRStatus' => '0',
            'GRFechaInactivo' => date('Y-m-d H:i:s'),
            'GRUsuarioModificacion' => get_session('UNCI_usuario')
        );
        $this->grupos_model->update($GRClave,$data);
        set_mensaje("EL grupo se elimino con éxito",'success::');
        muestra_mensaje();
        

        $GRCPlantel = $this->input->post('PlantelId');
        $this->db->where('GRCPlantel',$GRCPlantel);
        $this->db->where('GRStatus','1');
        $data['data'] = $this->grupos_model->find_all();            
        $this->load->view('grupos/Mostrar_grupos', $data);

    }

    public function listaGrupos() {
        $data = array();
        $GRCPlantel = $this->input->post('idPlantel');
        $GRPeriodo = $this->input->post('periodo');
        
        
        $select = 'COUNT(GRSemestre) noGrupos, GRSemestre';
        $this->db->where('GRCPlantel', $GRCPlantel);
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
            $this->db->where('GRCPlantel', $GRCPlantel);
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
            $this->db->where('GRCPlantel', $GRCPlantel);
            $this->db->group_by('GRClave');
            $data['total'][$key]['gruposVes'] = $this->grupos_model->find_all(null, $selectVes);
        }
        //echo json_encode($data['total']);
        $this->load->view('grupos/Mostrar_periodo_grupos', $data);
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

    
    public function _set_rules() {
        $this->form_validation->set_rules('GRPeriodo', 'Periodo Escolar', "trim|required|min_length[10]|max_length[10]");
        $this->form_validation->set_rules('GRSemestre', 'Semestre', "trim|required|min_length[1]|max_length[1]");
        $this->form_validation->set_rules('GRGrupo', 'Grupo', "trim|required|min_length[3]|max_length[3]");
        $this->form_validation->set_rules('GRTurno', 'Turno', "trim|required|min_length[1]|max_length[1]");
    }
}
?>