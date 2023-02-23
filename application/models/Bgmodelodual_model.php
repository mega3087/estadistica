<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Bgmodelodual_model extends My_Model
	{
		protected $_table = 'bgmodelodual';
		protected $primary_key = 'MDIdModeloDual';

		function __construct()
		{
		  parent::__construct();
		}

	}// fin del modelo Bgmodelodual_model

