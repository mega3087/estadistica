<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Director_model extends My_Model
	{
		protected $_table = 'directores';
		protected $primary_key = 'DIIdDirector';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Director_model
