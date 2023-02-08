<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Abandono_model extends My_Model
	{
		protected $_table = 'abandono';
		protected $primary_key = 'AIdAbandono';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Abandono_model
