<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Aulas_model extends My_Model
	{
		protected $_table = 'varios';
		protected $primary_key = 'VAIdVarios';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Terreno_model
