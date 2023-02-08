<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Evaluacion_model extends My_Model
	{
		protected $_table = 'evaluacionsem';
		protected $primary_key = 'EIdEvaluacion';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Varios_model
