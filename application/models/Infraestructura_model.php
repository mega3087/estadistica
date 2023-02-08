<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Infraestructura_model extends My_Model
	{
		protected $_table = 'infraestructura';
		protected $primary_key = 'InfIdInfraestructura';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Plantel_model
