<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Cobertura_model extends My_Model
	{
		protected $_table = 'cobertura';
		protected $primary_key = 'Iidcobertura';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Abandono_model