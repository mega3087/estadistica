<?php
	class Planea_model extends My_Model 
	{
		protected $_table = 'planea'; 
		protected $primary_key ='PIdPlanea';
		
		function Planea_model() 
		{
			parent::__construct();
		}
		
	} // fin de Planea_model