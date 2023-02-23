
<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgmatriculains_model extends My_Model
	{
		protected $_table = 'bgmatriculainscritos';
		protected $primary_key = 'MIIdInscritos';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgmatriculains_model

