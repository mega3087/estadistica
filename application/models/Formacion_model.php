<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Formacion_model extends My_Model
	{
		protected $_table = 'formacion';
		protected $primary_key = 'FIdFormacion';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Formacion_model
