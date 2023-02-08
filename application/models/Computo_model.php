<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Computo_model extends My_Model
	{
		protected $_table = 'computo';
		protected $primary_key = 'COIdComputo';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Computo_model
