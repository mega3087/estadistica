<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Espacios_model extends My_Model
	{
		protected $_table = 'espacios';
		protected $primary_key = 'ESIdEspacios';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Espacios_model
