<?php
	class Accion_model extends My_Model 
	{
		protected $_table = 'vecaccion'; 
		protected $primary_key ='CACClave';
		
		function Accion_model() 
		{
			parent::__construct();
		}
		
	} // fin de Accion_model