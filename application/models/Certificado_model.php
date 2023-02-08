<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Certificado_model extends My_Model
	{
		protected $_table = 'certificados';
		protected $primary_key = 'CIdCertificados';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Varios_model
