<?php
	class Costo_model extends My_Model 
	{
		protected $_table = 'costoalumno'; 
		protected $primary_key ='CAIdCosto';
		
		function Costo_model() 
		{
			parent::__construct();
		}
		
	} // fin de Costo_model
