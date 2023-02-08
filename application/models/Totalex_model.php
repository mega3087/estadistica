<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Totalex_model extends My_Model
	{
		protected $_table = 'totalex';
		protected $primary_key = 'TEIdTotalEX';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Terreno_model
