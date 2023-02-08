<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Existenciaa_model extends My_Model
	{
		protected $_table = 'existenciaa';
		protected $primary_key = 'EXAIdExistencia';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Director_model
