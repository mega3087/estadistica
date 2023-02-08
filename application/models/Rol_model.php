<?php
	class Rol_model extends My_Model 
	{
		protected $_table = 'vecrol'; 
		protected $primary_key ='CROClave';
		
		function Rol_model() 
		{
			parent::__construct();
		}
		
	} // fin de Rol_model