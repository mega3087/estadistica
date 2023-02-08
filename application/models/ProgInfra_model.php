<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class ProgInfra_model extends My_Model
	{
		protected $_table = 'proginfraestructura';
		protected $primary_key = 'PIIdPrograma';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Plantel_model
