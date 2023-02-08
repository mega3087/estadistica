<?php
	class Permiso_model extends My_Model 
	{
		protected $_table = 'vecpermiso'; 
		protected $primary_key ='CPEAccion';
		
		function Permiso_model() 
		{
			parent::__construct();
		}
		
		function join()
		{  
			$this->db->join('vecaccion', 'CPEAccion=CACClave');
			$this->db->join('vecmodulo', 'CACModulo=CMOClave');
			
			return $this;
		} //fin de la funcion join    
	} // fin de Permiso_model
