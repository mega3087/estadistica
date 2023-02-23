<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgdocentes_model extends My_Model
	{
		protected $_table = 'bgdocentes';
		protected $primary_key = 'DIdDocentes';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgdocentes_model

