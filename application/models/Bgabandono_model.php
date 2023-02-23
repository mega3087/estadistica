<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgabandono_model extends My_Model
	{
		protected $_table = 'bgabandono';
		protected $primary_key = 'AbIdAbandono';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo bgabandono_model

