<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Generagrupo_model extends My_Model
	{
		protected $_table = 'grupos';
		protected $primary_key = 'GIdGrupos';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Generagrupo_model
