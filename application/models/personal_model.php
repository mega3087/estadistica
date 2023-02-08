<?php
	class Personal_model extends My_Model 
	{
		protected $_table = 'personal'; 
		protected $primary_key ='PIdPersonal';
		
		function Planea_model() 
		{
			parent::__construct();
		}
		
	} // fin de Planea_model