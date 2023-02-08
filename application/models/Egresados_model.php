<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Egresados_model extends My_Model
	{
		protected $_table = 'egresadosinscritos';
		protected $primary_key = 'EIIdEgresados';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Egresados_model
