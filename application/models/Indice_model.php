<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Indice_model extends My_Model
	{
		protected $_table = 'indiceatencion';
		protected $primary_key = 'IAIdIndice';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Indice_model
