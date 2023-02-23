
<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgmatriculacemsad_model extends My_Model
	{
		protected $_table = 'bgmatriculacemsad';
		protected $primary_key = 'MCIdMatriculaCemsad';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgmatriculacemsad_model

