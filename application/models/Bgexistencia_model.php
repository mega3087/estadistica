<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgexistencia_model extends My_Model
	{
		protected $_table = 'bgexistencia';
		protected $primary_key = 'EIdExistencia';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo bgexistencia_model

