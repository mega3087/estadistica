<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class bginterno_model extends My_Model
	{
		protected $_table = 'BGInterno';
		protected $primary_key = 'BGIIdInterno';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Director_model
