<?php
	class Modulo_model extends My_Model 
	{
		protected $_table = 'vecmodulo'; 
		protected $primary_key ='CMOClave';
		
		function Modulo_model() 
		{
			parent::__construct();
		}
		
	} // fin de Modulo_model