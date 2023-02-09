<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entregamatricula extends CI_Controller {
    public function __construct () {
        parent::__construct();
        if (!is_login()) // Verificamos que el usuario este logeado
            redirect('login');

        if (!is_permitido()) //  Verificamos que el usuario tenga permisos
            redirect('usuario/negar_acceso');
    }

    public function valida_aceptado(){
        if(! $_POST)
            redirect( $this->router->fetch_class() );
            
        $data= post_to_array('_skip');
        
        $CPLClave = get_session('CPLActual');

        $data['TEIdPlantel']=$CPLClave;

        /*echo json_encode($data);
        exit;*/

            /*$datos=array(
                'GRMasculino' => $data['GRMasculino'],
                'GRFemenino' => $data['GRFemenino'],
                'GRCClave' => $formacion,
                'GRCupo' => $GRCupo,

            );*/
            


            $this->totalex_model->insert($data);
            set_mensaje("Los alumnos se registraron con éxito con éxito",'success::');
            
            echo "OK";
            

            $where = array( 'PEstatus' => '1');
            $data['periodo']= $this->generaperiodo_model->find_all($where);		
            $periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];

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


    public function validaciones_skip() {
        $data= post_to_array('_skip');

        $where = array( 'PEstatus' => '1');
        $data['periodo']= $this->generaperiodo_model->find_all($where);		
        $periodo = $data['periodo'][0]['PAnio']."-".$data['periodo'][0]['PPeriodo'];
        
        $idEntrega= $this->input->post('idEntrega');
        $validar= $this->input->post('validar');
        
        if($validar == "aceptar"){

            $datos['ENEstatus'] = '2';

            $this->entrega_model->update($idEntrega,$datos);
            set_mensaje("Se cambio el estatus a aceptado.",'success::');
				echo "OK";
        }

        if($validar == "corregir"){

            $datos['ENEstatus'] = '3';

            $this->entrega_model->update($idEntrega,$datos);
            set_mensaje("Se cambio el estatus a aceptado.",'success::');
				echo "OK";
        }

        if($validar == "apertura"){

            $datos['ENEstatus'] = '0';

            $this->entrega_model->update($idEntrega,$datos);
            set_mensaje("Se cambio el estatus a aceptado.",'success::');
				echo "OK";
        }
        exit;
    }
}

