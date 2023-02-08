<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Cursos_model extends My_Model
	{
		protected $_table = 'matiniciocursos';
		protected $primary_key = 'MICIdMat';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Cursos_model
