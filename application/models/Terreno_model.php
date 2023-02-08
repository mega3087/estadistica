<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Terreno_model extends My_Model
	{
		protected $_table = 'terreno';
		protected $primary_key = 'TIdTerreno';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Terreno_model
