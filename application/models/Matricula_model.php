<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Matricula_model extends My_Model
	{
		protected $_table = 'matnuevoingreso';
		protected $primary_key = 'MNIIdMatricula';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Matricula_model
