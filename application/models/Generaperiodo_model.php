<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Generaperiodo_model extends My_Model
	{
		protected $_table = 'periodo';
		protected $primary_key = 'PIdPeriodo';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Director_model
