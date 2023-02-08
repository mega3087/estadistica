<?php
	class Proyecciones_model extends My_Model 
	{
		protected $_table = 'proyeccionmat'; 
		protected $primary_key ='PMIdProyeccion';
		
		function Proyecciones_model() 
		{
			parent::__construct();
		}
		
	} // fin de Proyecciones_model
