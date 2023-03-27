<?php
	
	function checked($value,$checked,$echo='checked') {
		// https://codex.wordpress.org/Function_Reference/checked#Source_File
		$result = '';
		if (nvl($value) == $checked) {
			$result = $echo;
		}
		echo $result;
	}
	
	function nvl(&$var, $default = "")
	{
		return (isset($var) && !empty($var)) ? $var : $default;
	}
	
	function is_login($inicio='')
	{
		if (is_null(get_session('SESSION_SCV')))
		{
			if(!$inicio){
				set_mensaje("Favor de iniciar sesión para ingresar al sistema");
				$CI = & get_instance();
				set_session('modulo', $CI->router->fetch_class()."/".$CI->router->fetch_method());
			}
			return FALSE;
		}
		return TRUE;
	}
	
	function checktime($hour='', $min='', $sec='') {
		if ($hour < 0 || $hour > 23 || !is_numeric($hour)) {
			return false;
		}
		if ($min < 0 || $min > 59 || !is_numeric($min)) {
			return false;
		}
		if(!$sec) return true;
		if ($sec < 0 || $sec > 59 || !is_numeric($sec)) {
			return false;
		}
		return true;
	}
	
	function is_permitido( $rol = '', $modulo = '', $accion = '' )
	{
		$data = array();
		$CI = & get_instance();
		
		if(! $rol )// Rol por defecto es con el que se autentifica
		$rol = get_session('URol');
		
		if(! $modulo )// Controlador por defecto es la clase actual
		$modulo = $CI->router->fetch_class();
		
		if(! $accion )// Método por defecto es index
		$accion = ($CI->router->fetch_method())? $CI->router->fetch_method() : 'index';

		//permitir sin revision de permisos
		if (substr($accion,strrpos($accion,'_')+1)=='skip'){
			return true;
		}
		
		$modulo = strtoupper( $modulo );
		$accion = strtoupper( $accion );		
		set_session( 'referencia', "$modulo/$accion");
		set_session( 'modulo', "solicitud");
		$where = array(
		'CPERol'         => $rol,
		'CMODescripcion' => $modulo,
		'CACDescripcion' => $accion
		);
		
		$data = $CI->permiso_model->join()->find( $where );
		if( $data )
		return TRUE;
		else
		return FALSE;
		
	} //fin de la funcion is_permitido
	
	function muestra_mensaje()
	{
		if (get_session('mensaje') != '')
		{
			list($tipo_mensaje, $mensaje) = explode('::', get_session('mensaje'));
			echo '<div class="alert alert-' . $tipo_mensaje . ' alert-dismissable">';
			echo '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
			echo $mensaje;
			echo '</div>';
			set_session('mensaje', '');
		}
	}
	
	function go_modulo()
	{
		if (get_session('modulo') != '')
		{
			$modulo = get_session('modulo');
			set_session('modulo', '');
			return $modulo;
		}
		return FALSE;
	}
	
	function set_mensaje($mensaje, $tipo_mensaje = 'danger::')
	{
		set_session('mensaje', $tipo_mensaje . $mensaje);
	}
	
	function set_session($variable, $valor = '')
	{
		$_SESSION[PREFIJO_DB . $variable] = $valor;
	}
	
	function get_session($variable)
	{
		if (!isset($_SESSION[PREFIJO_DB . $variable]))
		$_SESSION[PREFIJO_DB . $variable] = NULL;
		
		return ($_SESSION[PREFIJO_DB . $variable]);
	}
	
	// Funcion que pasa las varibles del POST al arreglo data
	function post_to_array($sufijo = 'galimatias')
	{
		$CI = & get_instance();
		$data = array();
		if( $_POST )
		{
			foreach(array_keys($_POST) as $key)
			{
				if( strpos($key, $sufijo) == FALSE )
				$data[$key] = $CI->input->post($key);
			}
		}
		return $data;
	}
	
	function doHash($toHash, $user_salt, $salt = PREFIJO_DB, $iterations = 3)
	{
		$i = 0;
		$algorithms = array('sha256', 'ripemd320', 'whirlpool');
		
		// Salting
		$toHash = $user_salt . $toHash . $salt;
		do {
			// Avoid Collision Attacks with different algorithms
			$tempHash = '';
			foreach ($algorithms as $algo) {
				$tempHash .= hash($algo, $toHash);
			}
			// Reset Hash length
			$toHash = hash($algo, $tempHash);
			$i++;
		} while ($i < $iterations);
		
		return $toHash;
	}
	
	function post_to_session($sufijo = 'galimatias')
	{
		$CI = & get_instance();
		if ($_POST) {
			foreach (array_keys($_POST) as $key) {
				if (strpos($key, $sufijo) == FALSE) {
					
					$_SESSION[PREFIJO_DB . $key] = trim($CI->input->post($key));
					
				}
			}
		}
	}
	
	// Funcion que regresa el número de dias entre dos fechas, la cual no contempla sabados y domingos
	// ni un calendario de dias feriados
	function dias($fechainicio, $fechafin) {
		$diasferiados=array(
		'01-01',
		'01-02',
		'01-03',
		'01-04',
		'01-05',
		'02-02',
		'03/16',
		'04-02',
		'04-03',
		'05-01',
		'05-05',
		'09-16',
		'12-25'
		);
		// Convirtiendo en timestamp las fechas
		$fechainicio = strtotime($fechainicio);
		$fechafin = strtotime($fechafin);
		
		// Incremento en 1 dia
		$diainc = 24*60*60;
		
		// Arreglo de dias habiles, inicianlizacion
		$diashabiles = array();
		
		// Se recorre desde la fecha de inicio a la fecha fin, incrementando en 1 dia
		for ($midia = $fechainicio; $midia <= $fechafin; $midia += $diainc) {
			// Si el dia indicado, no es sabado o domingo es habil
			if (!in_array(date('N', $midia), array(6,7))) {
				// Si no es un dia feriado entonces es habil
				if (!in_array(date('m-d', $midia), $diasferiados)) {
					array_push($diashabiles, date('m-d', $midia));
				}
			}
		}
		
		return count ($diashabiles);
	}
	
	
	/**
		* Formatea una fecha de un formato origen a un formato destino
		*
		* Nota: Se utilizan diferentes notaciones para $formato_destino y $formato_origen
		*
		* ejem: Para representar el nombre de mes abreviado
		*       $formato_destino utiliza: %b conforme a http://php.net/manual/es/datetime.createfromformat.php
		*       $formato_origen utiliza: M conforme a http://php.net/manual/es/function.strftime.php
		*
		* Sin embargo, se pueden usar notaciones predefinidas aplicables a ambos formatos
		*  ymd para y-m-d
		*  dmy para d/m/y
		*  ymd hms para y-m-d h:i:s
		*  dmy hms para d/m/y h:i:s
		*
		* @param string $fecha Valor de la fecha a formatear
		* @param string $formato_destino Formato que se aplicara a $fecha
		* @param string $formato_origen Formato actual de $fecha
		* @return string
	*/
	function fecha_format($fecha,$formato_destino='equivalent',$formato_origen='autodetect') {
		if(!$fecha){
			return '';
		}
		
		if ($formato_origen == 'autodetect') {
			// La autodeteccion se realiza en base al caracter usado como separador de la fecha (diagonal o guion)
			$formato_origen = strpos($fecha, '/') ? 'dmy' : 'ymd';
			// y en la cantidad de caracteres : para determinar el formato del tiempo
			$time_format = array(0=>'','1'=>' hm',2=>' hms');
			$formato_origen .= $time_format[substr_count($fecha,':')];
		}
		
		$temp_origen = $formato_origen;
		
		// Traducimos el formato origen conforme a http://php.net/manual/es/datetime.createfromformat.php
		$origenes_predefinidos = array(
        'dmy'=>'d/m/Y','dmy hm'=>'d/m/Y H:i','dmy hms'=>'d/m/Y H:i:s',
        'ymd'=>'Y-m-d','ymd hm'=>'Y-m-d H:i','ymd hms'=>'Y-m-d H:i:s'
        );
		
		if (array_key_exists($formato_origen,$origenes_predefinidos)) {
			$formato_origen = $origenes_predefinidos[$formato_origen];
		}
		
		// Creamos un objeto fecha
		$temp_fecha = date_create_from_format($formato_origen,$fecha);
		if (!$temp_fecha) {
			return false; // La creacion de la fecha fallo
		}
		
		// Traducimos el formato destino conforme a http://php.net/manual/es/function.strftime.php
		$destinos_predefinidos = array(
        'dmy'=>'%d/%m/%Y', 'dmy hm'=>'%d/%m/%Y %H:%M', 'dmy hms'=>'%d/%m/%Y %H:%M:%S',
        'ymd'=>'%Y-%m-%d', 'ymd hm'=>'%Y-%m-%d %H:%M', 'ymd hms'=>'%Y-%m-%d %H:%M:%S'
        );
		
		if ($formato_destino == 'equivalent') {
			$destino_equivalente = array(
            'dmy'=>'ymd', 'dmy hm'=>'ymd hm', 'dmy hms'=>'ymd hms',
            'ymd'=>'dmy', 'ymd hm'=>'dmy hm', 'ymd hms'=>'dmy hm'
			);
			$formato_destino = $destino_equivalente[$temp_origen];
		}
		
		if (array_key_exists($formato_destino,$destinos_predefinidos)) {
			$formato_destino = $destinos_predefinidos[$formato_destino];
		}
		
		// http://stackoverflow.com/questions/8744952/formatting-datetime-object-respecting-localegetdefault
		// strftime() doesn't work with dates before 1970, Date_time::format() doesn't work with locales
		// so we do this combination of the two. User: Jack K
		setLocale(LC_TIME, 'Spanish_Mexico');
		return strftime($formato_destino, $temp_fecha->format('U'));
	}
	
	
	function forma_archivo ( $campo, $value ,$texto="Anexar archivo" , $class='btn-primary', $tipo_campo='pdf')
	{
		$monitor = (empty($value)) ? "none" : "show";
		
		echo anchor( "archivo/index/$campo/$tipo_campo", $texto, "class='btn btn-md upload_file ver_archivo $class'" );
        echo  nbs(10);
		echo anchor(nvl($value), "Ver archivo", "id='ver_archivo_$campo' style='display:$monitor' target='_blank' ver_archivo");
		$data=array(
		'name'=>$campo,
		'value'=>$value,
		'id'=>$campo,
		'type'=>'hidden'
		);
		echo form_input( $data );
	} //fin de la funcion forma_archivo
	
	function forma_archivo_csv ( $campo, $value ,$texto="Anexar archivo", $class='btn-primary')
	{
		$monitor = (empty($value)) ? "none" : "show";
		
		echo anchor( "archivo_csv/index/$campo", $texto, "class='btn btn-md upload_file ver_archivo $class' " );
        echo nbs(10);
		echo anchor(nvl($value), "Ver archivo", "id='ver_archivo_$campo' style='display:$monitor' target='_blank' ver_archivo");
		$data=array(
		'name'=>$campo,
		'value'=>$value,
		'id'=>$campo,
		'type'=>'hidden'
		);
		echo form_input( $data );
	} //fin de la funcion forma_archivo
	
	/**
		* Mueve una lista de archivos del directorio temporal a Documentos
		*
		* Procesa una lista de archivos, verificando si existe cambio en el nombre del archivo.
		* De ser asi, mueve el nuevo archivo del directorio temporal al directorio Documentos
		* @param array $data Array con los valores de los campos del formulario
		* @param array $lista_archivos Array con lista de archivos a procesar
		* @param array $old_data Array con los datos de la base de de datos
	*/
	function mover_archivos(&$data,$lista_archivos,$old_data=array(),$ruta_destino = null) {
		$CI = & get_instance();
		if(!$ruta_destino)
			$ruta_destino = "./documentos/";
		if (!file_exists($ruta_destino))
		mkdir($ruta_destino);
		
		foreach ($lista_archivos as $archivo) {
			// Si el nombre de archivo es diferente al guardado en la BD
			if (nvl($data[$archivo]) != nvl($old_data[$archivo])) {
				if ($data[$archivo]) {
					// Regeneramos el nombre del archivo recien subido
					$cadena = random_string('alnum', 8);
					$extension = pathinfo($data[$archivo], PATHINFO_EXTENSION);
					$usuario = get_session('UNCI_usuario');
					$archivo_destino = $ruta_destino . $usuario . '-' . $archivo . $cadena . "." . $extension;
					
					// Movemos el archivo de temporal a Documentos
					@rename($data[$archivo], $archivo_destino);
					// Cambiamos el contenido del campo
					$data[$archivo] = $archivo_destino;
				}
				
				// Borramos el archivo anterior
				if($old_data[$archivo])
				unlink(nvl($old_data[$archivo]));
			}
		}
	} //fin de la funcion mover_archivos
	
	
	//Funcion que regresa el mes en letra o en numero dependiendo lo que ingrese
	function  ver_mes($mes=''){
		if($mes>12) $mes=12;
		if($mes<1) $mes=1;
		$mes*='1';
		$meses = array("Null","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		return $meses[$mes];
	}
	
	//funcion para regresar 
	function to_back($num='1'){
		echo "<script type='text/javascript'>parent.history.go('-$num');</script>";
	}
	
	//funcion para recargar la pagina 
	function reload(){
		echo "<script type='text/javascript'>location.reload();</script>";
	}
	
	//funcion para obtener iniciales
	function iniciales($nombre) {
    	$notocar = Array('del','de','a');
    	$trozos = explode(' ',$nombre);
    	$iniciales = '';
    	for($i=0;$i<count($trozos);$i++){
    		if(in_array($trozos[$i],$notocar)) $iniciales .= $trozos[$i];
    		else $iniciales .= substr($trozos[$i],0,1);
		}
    	return $iniciales;
	}
	
	//funcion para extraer el texto entre dos indicadores (texto,indicador inicial, indicadir final)
	// el texto extraido no incluye los indicadores
	 function obteber_texto($cadena,$texto_ini='0',$texto_fin='0'){
		$maximo= strlen ($cadena); // total de la cadena
		$ide_number=strlen($texto_ini); // total de caracteres del primer indicador
		$total= strpos($cadena,$texto_ini); //posición numérica del primer indicador

		$total2= stripos($cadena,$texto_fin); //total de caracteres finales incluyecfo antes del segundo indicador 

		$total3= ($maximo-$total2); //total de caracteres finales incluyecfo  el segundo indicador

		if(! $texto_ini and ! $texto_fin)
			$final= $cadena; //cadena central entre los indicadores
		else if(! $texto_fin)
			$final= substr ($cadena,$total+$ide_number); //cadena central entre los indicadores
		else if(! $texto_ini)	
			$final= substr ($cadena,0,-$total3); //cadena central entre los indicadores
		else
			$final= substr ($cadena,$total+$ide_number,-$total3); //cadena central entre los indicadores
		
		return $final;
	}
	
	//quitar todo el texto antes del texto_ini incluyendolo
	function quitar_texto($texto,$texto_ini=''){
		$maximo= strlen ($texto); 
		$ide_number=strlen($texto_ini);
		$total= strpos($texto,$texto_ini);

		$texto = substr($texto,$total+$ide_number);
		return $texto;
	}
	
	function folio($folio='',$numero='5',$completa='0'){
		$folio = str_pad($folio, $numero, $completa, STR_PAD_LEFT);
		return ($folio);
	}
	
	function multiplo($numero='0',$salto='1',$inicio='0'){
		$mul=($numero-$inicio)/$salto;
		if(is_float($mul))
			return false;
		else
			return true;
	}
	
	function cuenta_psw(){
		$CI = & get_instance();
		$usuario = $CI->usuario_model->get( get_session('UNCI_usuario') );

		if(! $usuario['USeguridad'] and $CI->router->fetch_class() != 'usuario' ){
			set_mensaje('Para poder usar su cuenta de usuario por primera vez, es necesario el cambio de contraseña <br />Ingrese el correo registrado para esta cuenta.','success::');
			redirect("usuario/cambio_password");
		}
	}
	
	function forma_imagen ( $campo, $value ,$texto="Anexar imagen" , $class='btn-primary')
	{
		$monitor = (empty($value)) ? "none" : "show";
		
		echo anchor( "archivo_imagen/index/$campo", $texto, "class='btn btn-md upload_file ver_archivo $class'" );
        echo nbs(10);
		echo anchor(nvl($value), "Ver imagen", "id='ver_archivo_$campo' style='display:$monitor' target='_blank' ver_archivo");
		$data=array(
		'name'=>$campo,
		'value'=>$value,
		'id'=>$campo,
		'type'=>'hidden'
		);
		echo form_input( $data );
	} //fin de la funcion forma_imagen
	
	function error_message(){
		$CI = & get_instance();
		$error = $CI->db->error(); // Has keys 'code' and 'message'
		$message = "Codigo de error: <b>".$error['code']."</b>";
		//$message .= "<hr />".$error['message'];
		$message .= "<hr /><center><b>¡Contacte al Administrador!</b></center>";
		echo"<div class='panel panel-warning'>
		<div class='panel-heading text-center'><i class='fa fa-warning'></i> Ocurrió  algo</div>
			<div class='panel-body text-left text-black'>
				$message
			</div>
		</div>";
		exit();
	}

	function setDia($d = '') {
		if (strlen($d) == 2) {
			$dia = $d;
		} else {
			$dia = "0" . $d;
		}
	return $dia;
	}

	function setMes($m = '') {
		if (strlen($m) == 2) {
			$mes = $f;
		} else {
			$mes = "0" . $m;
		}
	return $mes;
	}
	
?>
