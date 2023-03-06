<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgformacion_model extends My_Model
	{
		protected $_table = 'bgformacion';
		protected $primary_key = 'FIdFormacion';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgformacion_model