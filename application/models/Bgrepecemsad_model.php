<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgrepecemsad_model extends My_Model
	{
		protected $_table = 'bgrepecemsad';
		protected $primary_key = 'RCIdBgRepeCemsad';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgrepecemsad_model

