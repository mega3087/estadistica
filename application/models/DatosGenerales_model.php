<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class DatosGenerales_model extends My_Model
	{
		protected $_table = 'datos_generales';
		protected $primary_key = 'DGIdDatosGenerales';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Plantel_model
