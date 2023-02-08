<?php
	class Entrega_model extends My_Model 
	{
		protected $_table = 'entrega'; 
		protected $primary_key ='ENIdEntrega';
		
		function Costo_model() 
		{
			parent::__construct();
		}
		
	} // fin de Costo_model
