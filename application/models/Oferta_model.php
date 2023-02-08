<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Oferta_model extends My_Model
	{
		protected $_table = 'ofertaeducativa';
		protected $primary_key = 'OEIdOferta';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Oferta_model
