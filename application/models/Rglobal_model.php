<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class rglobal_model extends My_Model
	{
		protected $_table = 'planteles';
		protected $primary_key = 'CPLClave';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Director_model
