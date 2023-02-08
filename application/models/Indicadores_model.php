<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Indicadores_model extends My_Model
	{
		protected $_table = 'indicadores';
		protected $primary_key = 'IIdIndicadores';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Plantel_model
