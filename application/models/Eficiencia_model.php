<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Eficiencia_model extends My_Model
	{
		protected $_table = 'eficienciaterminal';
		protected $primary_key = 'ETIdEficiencia';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Eficiencia_model
