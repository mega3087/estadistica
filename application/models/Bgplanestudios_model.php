<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgplanestudios_model extends My_Model
	{
		protected $_table = 'bgplanestudios';
		protected $primary_key = 'PEIdPlanEstudios';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo bgplanestudios_model

