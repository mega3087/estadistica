<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Aprobacion_model extends My_Model
	{
		protected $_table = 'aprobados';
		protected $primary_key = 'AIdAprobados';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Aprobacion_model
