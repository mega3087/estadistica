<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgmatricula911_model extends My_Model
	{
		protected $_table = 'bgmatricula911';
		protected $primary_key = 'MIdMatricula911';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgmatricula911_model

